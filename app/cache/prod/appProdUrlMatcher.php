<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // prueba_inicio
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'prueba_inicio');
            }

            return array (  '_controller' => 'Prueba\\MainBundle\\Controller\\InicioController::inicioAction',  '_route' => 'prueba_inicio',);
        }

        // prueba_clima
        if ($pathinfo === '/clima') {
            return array (  '_controller' => 'Prueba\\MainBundle\\Controller\\InicioController::climaAction',  '_route' => 'prueba_clima',);
        }

        // prueba_info
        if ($pathinfo === '/info') {
            return array (  '_controller' => 'Prueba\\MainBundle\\Controller\\InicioController::infoAction',  '_route' => 'prueba_info',);
        }

        // prueba_contacto
        if ($pathinfo === '/contacto') {
            return array (  '_controller' => 'Prueba\\MainBundle\\Controller\\InicioController::contactoAction',  '_route' => 'prueba_contacto',);
        }

        // prueba_lista
        if ($pathinfo === '/lista') {
            return array (  '_controller' => 'Prueba\\MainBundle\\Controller\\InicioController::listaAction',  '_route' => 'prueba_lista',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
