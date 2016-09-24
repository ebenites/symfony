<?php

/* base.html.twig */
class __TwigTemplate_6d5f5b4e92f0f9cf791c5e521a648102a1b34d25dacb1def71c6f2878ce018c2 extends Twig_Template
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        
        <div id=\"header\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" height=\"60\"/>
            <div class=\"welcome\">Bienvenido: Jorge Flores</div>
        </div>

        <div id=\"menu\">
            <ul>
                <li><a href=\"#\">Inicio</a></li>
                <li><a href=\"#\">Roles</a></li>
                <li><a href=\"#\">Usuarios</a></li>
                <li><a href=\"#\">Salir</a></li>
            </ul>
        </div>

        <div id=\"content\">
        
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "                <div class=\"flash-notice\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
            ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "            
        </div>
        <div id=\"footer\">
            Todos los Derechos Reservados 2015
        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  117 => 35,  112 => 34,  107 => 6,  101 => 5,  90 => 36,  87 => 35,  85 => 34,  82 => 33,  73 => 30,  70 => 29,  66 => 28,  48 => 13,  40 => 8,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*     </head>*/
/*     <body>*/
/*         */
/*         <div id="header">*/
/*             <img src="{{ asset('img/logo.png') }}" height="60"/>*/
/*             <div class="welcome">Bienvenido: Jorge Flores</div>*/
/*         </div>*/
/* */
/*         <div id="menu">*/
/*             <ul>*/
/*                 <li><a href="#">Inicio</a></li>*/
/*                 <li><a href="#">Roles</a></li>*/
/*                 <li><a href="#">Usuarios</a></li>*/
/*                 <li><a href="#">Salir</a></li>*/
/*             </ul>*/
/*         </div>*/
/* */
/*         <div id="content">*/
/*         */
/*             {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*                 <div class="flash-notice">*/
/*                     {{ flashMessage }}*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/*             {% block body %}{% endblock %}*/
/*             {% block javascripts %}{% endblock %}*/
/*             */
/*         </div>*/
/*         <div id="footer">*/
/*             Todos los Derechos Reservados 2015*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
