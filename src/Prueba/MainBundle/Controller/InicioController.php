<?php

namespace Prueba\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Prueba\MainBundle\Entity\Lugar;
use Prueba\MainBundle\Form\LugarType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

class InicioController extends Controller
{
    public function inicioAction()
    {
        return $this->render('PruebaMainBundle:Default:index.html.twig');
    }
    
    public function infoAction()
    {
    	return $this->render('PruebaMainBundle:Default:info.html.twig');
    }
    
    public function contactoAction()
    {
    	return $this->render('PruebaMainBundle:Default:contacto.html.twig');
    }
    
    public function climaAction(Request $request)
    {
    	$inputs = new Lugar();
    	$form = $this->createForm(new LugarType(),$inputs);
    	$form->handleRequest($request);
    	
    	if($form->isSubmitted() && $form->isValid()){
    		//conectamos con la BD llamada "lugar", pues el $form es rellenado con un objeto Lugar
    		$em = $this->getDoctrine()->getManager();
    		
    		//obtenemos los datos al objeto
    		//$fecha = $inputs->getFecha();
    		//$hora = $inputs->getHora();
    		$lat = $inputs->getLat();
    		$lon = $inputs->getLon();
    		
    		//se obtienen los datos de Open Weather Map y Google
    		$obtenidos = $this->datosAction($lat, $lon);
    		
    		//se añanden los datos al objeto
    		$inputs->setPais($obtenidos['pais']);
    		$inputs->setPoblacion($obtenidos['poblacion']);
    		$inputs->setRegion($obtenidos['region']);
    		$inputs->setTiempo($obtenidos['descripcion']);
    		
    		$datos = array(
    				'lat' => $lat,
    				'lon'=> $lon,
    				'pais'=> $obtenidos['pais'],
    				'poblacion' => $obtenidos['poblacion'],
    				'region' => $obtenidos['region'],
    				'tiempo'=> $obtenidos['descripcion']    				
    		);
    		  		
    		//se guarda en la BD
    		$em->persist($inputs);
    		$em -> flush();
    		
    		//se muestran los datos
    		return $this->render('PruebaMainBundle:Default:confirmacion.html.twig',array('datos'=>$datos));
    	}
    	return $this->render('PruebaMainBundle:Default:form.html.twig', array('form'=> $form->createView()));
    }
    
    public function datosAction($lat,$lon){
    	
    	//$start = mktime(12, 0, 0, 1, 12, 2015);
    	
    	//$url_owm obtenida de la documentación disponible en la web de Openweathermap -> Para ahora
    	$url_owm = "http://api.openweathermap.org/data/2.5/weather?lat=$lat&lon=$lon&lang=es&APPID=c4aee550c5e3d2ce94cd4f197b89e8b7";
    	
    	//$url_owm obtenida mezclando la documentación disponible en la web de Openweathermap y los requisitos de la prueba 
    	// los cuales son GET /geoweather/?date=2015-12-01&hour=12:00:00&lat=39.4621944&lon=-0.3274952
    	//pero solo te dice el tiempo actual, los parametros fecha y hora no los acepta
    	//$url_owm = "http://api.openweathermap.org/data/2.5/weather?date=2015-12-01&hour=12:00:00&lat=$lat&lon=$lon&lang=es&APPID=c4aee550c5e3d2ce94cd4f197b89e8b7";
    	
    	//$url_owm obtenida de la documentación disponible en la web de Openweathermap -> Para historial de temperaturas
    	//error porque es un servicio de pago y no lo tengo contratado
    	//$url_owm = "http://api.openweathermap.org/data/2.5/history/city?lat=$lat&lon=$lon&type=hour&start=$start&end=$start&lang=es&APPID=c4aee550c5e3d2ce94cd4f197b89e8b7";
    	
    	//Usamos la API de Google
    	$url_ggl = "http://maps.googleapis.com/maps/api/geocode/json?latlng=$lat,$lon&sensor=false";
    	
    	//se obtienen los datos
    	$html_owm = file_get_contents($url_owm);
    	$html_ggl = file_get_contents($url_ggl);
    	
    	//json
    	$json_owm = json_decode($html_owm);
    	$json_ggl = json_decode($html_ggl);  	
    	
    	//datos de OWM
    	$dt = $json_owm->dt;
    	$principal = $json_owm->weather[0]->main;
    	$descripcion = $json_owm->weather[0]->description;
    	
    	//datos de Google
    	$ciudad = $json_ggl->results[0]->address_components[3]->long_name;	
    	$region = $json_ggl->results[0]->address_components[4]->long_name;
    	$pais = $json_ggl->results[0]->address_components[5]->long_name;
    	    	    	
    	//matriz de salida con las claves
    	$output = array(
    			'poblacion' => $ciudad,
    			'principal' => $principal,
    			'descripcion'=> $descripcion,
    			'dt'=> $dt,
    			'region' => $region,
    			'pais'=> $pais
    			
    	);
  
    	return $output;
    }
    /*
     * Crea una lista con todas las búsquedas guardadas
     */
    public function listaAction()
    {
    	$em =$this->getDoctrine()->getManager();
    	$entradas =$em->getRepository('PruebaMainBundle:Lugar')->findAll();
    	return $this->render("PruebaMainBundle:Default:lista.html.twig", array('entradas'=>$entradas));
    }
}
