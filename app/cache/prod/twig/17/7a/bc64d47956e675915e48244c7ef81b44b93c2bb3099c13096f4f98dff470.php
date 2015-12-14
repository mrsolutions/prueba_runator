<?php

/* PruebaMainBundle:Default:lista.html.twig */
class __TwigTemplate_177abc64d47956e675915e48244c7ef81b44b93c2bb3099c13096f4f98dff470 extends Twig_Template
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
\t<div class=\"fb-like\" data-href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "\" data-layout=\"button_count\" data-action=\"like\" data-show-faces=\"false\" data-share=\"false\"></div>
\t<br>
\t\t<h4>Lista:</h4><br>
\t<table>
\t\t<tr>
\t\t\t<th>ID</th>
\t\t\t<th>Fecha</th>
\t\t\t<th>Hora</th>
\t\t\t<th>Latitud</th>
\t\t\t<th>Longitud</th>
\t\t\t<th>Tiempo</th>
\t\t\t<th>País</th>
\t\t\t<th>Región</th>
\t\t\t<th>Población</th>
\t\t</tr>
\t\t\t";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entradas"]) ? $context["entradas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entrada"]) {
            // line 24
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entrada"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entrada"], "fecha", array()), "d-m-Y"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entrada"], "hora", array()), "H:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entrada"], "lat", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entrada"], "lon", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entrada"], "poblacion", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entrada"], "tiempo", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entrada"], "pais", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entrada"], "region", array()), "html", null, true);
            echo "</td>\t\t\t\t
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrada'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "PruebaMainBundle:Default:lista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  107 => 33,  103 => 32,  99 => 31,  95 => 30,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  75 => 25,  72 => 24,  68 => 23,  50 => 8,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
