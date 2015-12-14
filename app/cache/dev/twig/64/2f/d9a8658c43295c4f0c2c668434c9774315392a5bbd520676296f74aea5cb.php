<?php

/* PruebaMainBundle:Default:form.html.twig */
class __TwigTemplate_642fd9a8658c43295c4f0c2c668434c9774315392a5bbd520676296f74aea5cb extends Twig_Template
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
        echo "Prueba Runator - Temperatura";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container theme-showcase\" role=\"main\">
\t<div class=\"jumbotron\">
\t";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t    <table>
\t    \t<tr>
\t    \t\t<td class=\"form_error\">";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</td>
\t    \t\t<td></td>
\t    \t\t<td></td>
    \t\t</tr>
    \t\t<tr>
\t    \t\t<td class=\"form_error\">";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lat", array()), 'errors');
        echo "</td>
\t    \t\t<td class=\"form_label\">";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lat", array()), 'label');
        echo "</td>
\t    \t\t<td class=\"form_input\">";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lat", array()), 'widget');
        echo "</td>
    \t\t</tr>
    \t\t<tr>
\t    \t\t<td class=\"form_error\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lon", array()), 'errors');
        echo "</td>
\t    \t\t<td class=\"form_label\">";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lon", array()), 'label');
        echo "</td>
\t    \t\t<td class=\"form_input\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lon", array()), 'widget');
        echo "</td>
    \t\t</tr>
    \t\t<tr>
\t    \t\t<td class=\"form_error\">";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'errors');
        echo "</td>
\t    \t\t<td class=\"form_label\">";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'label');
        echo "</td>
\t    \t\t<td class=\"form_input\">";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fecha", array()), 'widget');
        echo "</td>
    \t\t</tr>
    \t\t<tr>
\t    \t\t<td class=\"form_error\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hora", array()), 'errors');
        echo "</td>
\t    \t\t<td class=\"form_label\">";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hora", array()), 'label');
        echo "</td>
\t    \t\t<td class=\"form_input\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hora", array()), 'widget');
        echo "</td>
    \t\t</tr>
    \t\t<tr>
    \t\t\t<td></td>
    \t\t\t<td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enviar", array()), 'widget');
        echo "</td>
    \t\t\t<td></td>
    \t\t</tr>
\t    </table> 
\t    ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t    <br>
\t    <div class=\"fb-like col-sm-12\" data-href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\" data-layout=\"button_count\" data-action=\"like\" data-show-faces=\"false\" data-share=\"false\"></div>
\t    
";
    }

    public function getTemplateName()
    {
        return "PruebaMainBundle:Default:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 43,  128 => 41,  121 => 37,  114 => 33,  110 => 32,  106 => 31,  100 => 28,  96 => 27,  92 => 26,  86 => 23,  82 => 22,  78 => 21,  72 => 18,  68 => 17,  64 => 16,  56 => 11,  50 => 8,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
