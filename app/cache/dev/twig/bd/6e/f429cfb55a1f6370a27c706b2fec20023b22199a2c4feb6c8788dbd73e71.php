<?php

/* PruebaMainBundle:Default:confirmacion.html.twig */
class __TwigTemplate_bd6ef429cfb55a1f6370a27c706b2fec20023b22199a2c4feb6c8788dbd73e71 extends Twig_Template
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

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<br>
<div class=\"container theme-showcase\" role=\"main\">
\t<div class=\"jumbotron\">
\t\t<p>Los datos consultados son:</p>
\t\t<div class=\"col-sm-6\">
\t\t
\t";
        // line 9
        echo "\t";
        // line 10
        echo "\t";
        // line 11
        echo "\t";
        // line 12
        echo "\t";
        // line 13
        echo "\t";
        // line 14
        echo "\t";
        // line 15
        echo "\t";
        // line 16
        echo "\t
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td><strong>Latitud:</strong></td>
\t\t\t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "lat", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><strong>Longitud:</strong></td>
\t\t\t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "lon", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><strong>País:</strong></td>
\t\t\t\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "pais", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><strong>Población:</strong></td>
\t\t\t\t\t<td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "poblacion", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><strong>Región</strong></td>
\t\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "region", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><strong>Estado del tiempo:</strong></td>
\t\t\t\t\t<td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "tiempo", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t\t<div class=\"col-sm-6\">
\t\t\t";
        // line 46
        echo "\t\t\t<img alt=\"300\" border=1 src=\"https://maps.googleapis.com/maps/api/staticmap?center=";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "lat", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "lon", array()), "html", null, true);
        echo "&zoom=14&size=300x300&language=es_ES&sensor=false\">
\t\t</div>
\t\t<div class\"col-sm-12\">
\t\t\t<div class=\"fb-like\" data-href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\" data-layout=\"button_count\" data-action=\"like\" data-show-faces=\"false\" data-share=\"false\"></div>
\t\t</div>
\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "PruebaMainBundle:Default:confirmacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  109 => 46,  101 => 40,  94 => 36,  87 => 32,  80 => 28,  73 => 24,  66 => 20,  60 => 16,  58 => 15,  56 => 14,  54 => 13,  52 => 12,  50 => 11,  48 => 10,  46 => 9,  38 => 2,  11 => 1,);
    }
}
