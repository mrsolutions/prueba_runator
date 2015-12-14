<?php

/* base.html.twig */
class __TwigTemplate_28f23857a372941296b1b02ff0dbcffd95e56bae26021d80454a59e7e5cb0033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
";
        // line 6
        echo "<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

<title>
";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "</title>

";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
";
        // line 25
        echo "</head>

<body role=\"document\">
";
        // line 29
        echo "<div id=\"fb-root\"></div>

<nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button class =\"active\">
";
        // line 41
        echo "          <a class=\"navbar-brand\" href= \"http://www.runator.com/es\">Runator</a>
";
        // line 43
        echo "        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href= \"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("prueba_clima");
        echo "\"><i class=\"fa fa-sun-o fa-2x\"></i></a></li>
            <li><a href= \"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("prueba_info");
        echo "\"><i class=\"fa fa-info-circle fa-2x\"></i></a></li>
            <li><a href= \"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("prueba_contacto");
        echo "\"><i class=\"fa fa-envelope-o fa-2x\"></i></a></li>
            <li><a href= \"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("prueba_lista");
        echo "\"><i class=\"fa fa-list-alt fa-2x\"></i></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br>

\t";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        echo " 
\t
\t";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "</body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Prueba Runator";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 
";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c19c7c7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c19c7c7_0") : $this->env->getExtension('assets')->getAssetUrl("css/c19c7c7_bootstrap-theme_1.css");
            // line 20
            echo "<link rel='stylesheet' href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
";
            // asset "c19c7c7_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c19c7c7_1") : $this->env->getExtension('assets')->getAssetUrl("css/c19c7c7_bootstrap_2.css");
            echo "<link rel='stylesheet' href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
";
            // asset "c19c7c7_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c19c7c7_2") : $this->env->getExtension('assets')->getAssetUrl("css/c19c7c7_font-awesome_3.css");
            echo "<link rel='stylesheet' href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
";
            // asset "c19c7c7_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c19c7c7_3") : $this->env->getExtension('assets')->getAssetUrl("css/c19c7c7_misestilos_4.css");
            echo "<link rel='stylesheet' href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
";
            // asset "c19c7c7_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c19c7c7_4") : $this->env->getExtension('assets')->getAssetUrl("css/c19c7c7_leaflet_5.css");
            echo "<link rel='stylesheet' href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
";
        } else {
            // asset "c19c7c7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c19c7c7") : $this->env->getExtension('assets')->getAssetUrl("css/c19c7c7.css");
            echo "<link rel='stylesheet' href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
";
        }
        unset($context["asset_url"]);
        // line 21
        echo " 
";
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        // line 59
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/misajustes/js/facebook.js"), "html", null, true);
        echo "\"></script>
";
        // line 68
        echo "\t";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 68,  178 => 60,  173 => 59,  170 => 58,  164 => 56,  159 => 21,  121 => 20,  117 => 14,  112 => 13,  106 => 10,  100 => 69,  98 => 58,  93 => 56,  83 => 49,  79 => 48,  75 => 47,  71 => 46,  66 => 43,  63 => 41,  50 => 29,  45 => 25,  42 => 23,  40 => 13,  36 => 11,  34 => 10,  28 => 6,  23 => 1,);
    }
}
