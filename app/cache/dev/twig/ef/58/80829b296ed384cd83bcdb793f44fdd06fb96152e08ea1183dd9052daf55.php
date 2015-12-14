<?php

/* PruebaMainBundle:Default:contacto.html.twig */
class __TwigTemplate_ef5880829b296ed384cd83bcdb793f44fdd06fb96152e08ea1183dd9052daf55 extends Twig_Template
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
        echo "Prueba Runator - Contacto";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container theme-showcase\" role=\"main\">
\t<br><br><br>
\t\t<h4>Contacto:</h4><br>
\t<table>
\t\t<tr><td>Carlos Moros Serrano</td></tr>
\t\t<tr><td><i class=\"fa fa-envelope\"></i> carlostopo@hotmail.es</td></tr>
\t\t<tr><td><i class=\"fa fa-phone\"></i> España: (+34) 639408845</td></tr>
\t\t<tr><td><i class=\"fa fa-phone\"></i> Alemania: (+49) 15903555569</td></tr>
\t</table>
\t<br>
\t<div class=\"fb-like col-sm-12\" data-href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\" data-layout=\"button_count\" data-action=\"like\" data-show-faces=\"false\" data-share=\"false\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PruebaMainBundle:Default:contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
