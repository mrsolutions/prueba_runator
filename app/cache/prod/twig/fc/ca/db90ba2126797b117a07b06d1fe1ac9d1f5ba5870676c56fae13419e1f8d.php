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
\t<strong>1)</strong> Imagina que tienes que ofrecer la posibilidad a ciertos usuarios de ver la temperatura que hizo en un determinado día, así como el país y ciudad exacta para una determinada localización.
Para ello, nos gustaría que crearas un microservicio aislado que recibirá una localización exacta (compuesta por latitud y longitud) y una fecha, con el fin de ver cómo trabajarías con APIs de terceros.<br><br>
El proyecto debe aceptar<br>
GET /geoweather/?date=2015-12-01&hour=12:00:00&lat=39.4621944&lon=-0.3274952<br>
Esta llamada debería devolver una estructura similar a esta:<br>
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
Puedes utilizar cualquier API, aunque aconsejamos Google Maps (Geocoding API) para el primer caso y Open Weather (Geographic Coordinates) para el segundo. Regístrate en los servicios web que necesites y estimes oportuno.
Se pide entregar un proyecto en PHP completamente funcional, no importa el framework, aunque nos encantaría que fuera en Symfony o Laravel.<br><br>
<strong>2)</strong> ¿Conoces Facebook? Estamos seguros de que sí. Bien, como sabrás, en Facebook se puede hacer \"me gusta\" a diferentes tipos de objetos: comentarios, posts, páginas, anuncios, etc...
Imagina que queremos implementar \"Likes\" y se te pide diseñar una estructura de datos que permita hacer \"me gusta\" a cualquier tipo de objeto.
Realiza el esquema de base de datos con la solución que llevarías a cabo, acompañado de una explicación de la misma. Si decides acompañar la solución con código, puedes incluirlo en la solución del ejercicio anterior o crear otro proyecto aparte, como te sea más cómodo.<br><br>
Varios consejos extra para ganar puntos:<br>
<br>
- En el ejercicio 1, guardar el resultado de todas las peticiones que se hagan en una base de datos de tu elección. <br>
- Explica las soluciones que has decidido implementar y porqué, para nosotros es importante que sepas comunicarte bien con tu equipo<br>
- Subir el código y las instrucciones para ejecutarlo a Github
- Código limpio y ordenado :)<br>
- Tras acabar envía este documento relleno, con los ficheros que correspondan en un zip y los enlaces correspondientes a Github.<br><br>
<strong>Ahora que has terminado...</strong><br>

- ¿Te has sentido capaz de llevarla a cabo tras leerla?<br>
- ¿Cuánto tiempo te ha costado llevarla a cabo?<br>
- Del 1 al 10, ¿Cómo valorarías la dificultad de este test?<br>
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
