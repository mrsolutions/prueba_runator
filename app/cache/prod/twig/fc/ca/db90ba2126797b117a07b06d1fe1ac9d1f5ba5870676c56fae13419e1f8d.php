<?php

/* PruebaMainBundle:Default:info.html.twig */
class __TwigTemplate_fccadb90ba2126797b117a07b06d1fe1ac9d1f5ba5870676c56fae13419e1f8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Prueba Runator - Bienvenido";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container theme-showcase\" role=\"main\">
\t<div class=\"jumbotron\">
\t\t<h1> Prueba de Runator.</h1>
\t\t<br>
\t\t<div class=\"fb-like\" data-href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "\" data-layout=\"button_count\" data-action=\"like\" data-show-faces=\"false\" data-share=\"false\"></div>
\t</div>
\t<strong>1)</strong> Imagina que tienes que ofrecer la posibilidad a ciertos usuarios de ver la temperatura que hizo en un determinado d�a, as� como el pa�s y ciudad exacta para una determinada localizaci�n.
Para ello, nos gustar�a que crearas un microservicio aislado que recibir� una localizaci�n exacta (compuesta por latitud y longitud) y una fecha, con el fin de ver c�mo trabajar�as con APIs de terceros.<br><br>
El proyecto debe aceptar<br>
GET /geoweather/?date=2015-12-01&hour=12:00:00&lat=39.4621944&lon=-0.3274952<br>
Esta llamada deber�a devolver una estructura similar a esta:<br>
{<br>
\t\"date\": \"2015-12-01\",<br>
\t\"hour\": \"12:00:00\",<br>
\t\"lat\": 39.4621944,<br>
\t\"lon\": 0.3274952,<br>
\t\"weather: \"sunny\",<br>
\t\"country\": \"Spain\",<br>
\t\"region\": \"Valencian Community\",<br>
\t\"city\": \"Valencia\"<br>
}<br>
Puedes utilizar cualquier API, aunque aconsejamos Google Maps (Geocoding API) para el primer caso y Open Weather (Geographic Coordinates) para el segundo. Reg�strate en los servicios web que necesites y estimes oportuno.
Se pide entregar un proyecto en PHP completamente funcional, no importa el framework, aunque nos encantar�a que fuera en Symfony o Laravel.<br><br>
<strong>2)</strong> �Conoces Facebook? Estamos seguros de que s�. Bien, como sabr�s, en Facebook se puede hacer \"me gusta\" a diferentes tipos de objetos: comentarios, posts, p�ginas, anuncios, etc...
Imagina que queremos implementar \"Likes\" y se te pide dise�ar una estructura de datos que permita hacer \"me gusta\" a cualquier tipo de objeto.
Realiza el esquema de base de datos con la soluci�n que llevar�as a cabo, acompa�ado de una explicaci�n de la misma. Si decides acompa�ar la soluci�n con c�digo, puedes incluirlo en la soluci�n del ejercicio anterior o crear otro proyecto aparte, como te sea m�s c�modo.<br><br>
Varios consejos extra para ganar puntos:<br>
<br>
- En el ejercicio 1, guardar el resultado de todas las peticiones que se hagan en una base de datos de tu elecci�n. <br>
- Explica las soluciones que has decidido implementar y porqu�, para nosotros es importante que sepas comunicarte bien con tu equipo<br>
- Subir el c�digo y las instrucciones para ejecutarlo a Github
- C�digo limpio y ordenado :)<br>
- Tras acabar env�a este documento relleno, con los ficheros que correspondan en un zip y los enlaces correspondientes a Github.<br><br>
<strong>Ahora que has terminado...</strong><br>

- �Te has sentido capaz de llevarla a cabo tras leerla?<br>
- �Cu�nto tiempo te ha costado llevarla a cabo?<br>
- Del 1 al 10, �C�mo valorar�as la dificultad de este test?<br>
</div>
";
    }

    public function getTemplateName()
    {
        return "PruebaMainBundle:Default:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
