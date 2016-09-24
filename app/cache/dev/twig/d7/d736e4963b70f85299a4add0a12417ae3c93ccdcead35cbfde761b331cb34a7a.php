<?php

/* base.html.twig */
class __TwigTemplate_cb445fedf54d06991663d5b104ce4c0e79dbb356454c3c7073a9be6fdf27d418 extends Twig_Template
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
        $__internal_890c08a3ba3af366218e77c8ed420bb18ca537f22036d86a66aefcd481175eba = $this->env->getExtension("native_profiler");
        $__internal_890c08a3ba3af366218e77c8ed420bb18ca537f22036d86a66aefcd481175eba->enter($__internal_890c08a3ba3af366218e77c8ed420bb18ca537f22036d86a66aefcd481175eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        <!-- jQuery -->
        <script src=\"//code.jquery.com/jquery-1.11.3.min.js\"></script>
        
        <!-- Bootstrap -->
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" rel=\"stylesheet\">
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>

        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    </head>
    <body>
        
        <div id=\"header\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" height=\"60\"/>
            <div class=\"welcome\">Bienvenido: Jorge Flores</div>
        </div>

        <div id=\"menu\">
            <ul>
                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Inicio</a></li>
                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("app_roles_index");
        echo "\">Roles</a></li>
                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("app_usuarios_index");
        echo "\">Usuarios</a></li>
                <li><a href=\"#\">Categorias</a></li>
                <li><a href=\"#\">Productos</a></li>
                <li><a href=\"#\">Salir</a></li>
            </ul>
        </div>

        <div id=\"content\">
        
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 39
            echo "                <div class=\"flash-notice\">
                    ";
            // line 40
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
            ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "            
        </div>
        <div id=\"footer\">
            Todos los Derechos Reservados ";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
        </div>
    </body>
</html>
";
        
        $__internal_890c08a3ba3af366218e77c8ed420bb18ca537f22036d86a66aefcd481175eba->leave($__internal_890c08a3ba3af366218e77c8ed420bb18ca537f22036d86a66aefcd481175eba_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_eed48355ba0d48e9dc43f6d0f48cf7500f054eb96e7b987e42ec0fa0e535414e = $this->env->getExtension("native_profiler");
        $__internal_eed48355ba0d48e9dc43f6d0f48cf7500f054eb96e7b987e42ec0fa0e535414e->enter($__internal_eed48355ba0d48e9dc43f6d0f48cf7500f054eb96e7b987e42ec0fa0e535414e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_eed48355ba0d48e9dc43f6d0f48cf7500f054eb96e7b987e42ec0fa0e535414e->leave($__internal_eed48355ba0d48e9dc43f6d0f48cf7500f054eb96e7b987e42ec0fa0e535414e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a8c44dfe18a201610b29be83cc9bae0acb38bb103e4e103d44b5fc79184c2b2 = $this->env->getExtension("native_profiler");
        $__internal_5a8c44dfe18a201610b29be83cc9bae0acb38bb103e4e103d44b5fc79184c2b2->enter($__internal_5a8c44dfe18a201610b29be83cc9bae0acb38bb103e4e103d44b5fc79184c2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a8c44dfe18a201610b29be83cc9bae0acb38bb103e4e103d44b5fc79184c2b2->leave($__internal_5a8c44dfe18a201610b29be83cc9bae0acb38bb103e4e103d44b5fc79184c2b2_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_08fceb58c967f9e4d9278478f9440b1b848992ba0c8a23b9c19c61f71adabfa0 = $this->env->getExtension("native_profiler");
        $__internal_08fceb58c967f9e4d9278478f9440b1b848992ba0c8a23b9c19c61f71adabfa0->enter($__internal_08fceb58c967f9e4d9278478f9440b1b848992ba0c8a23b9c19c61f71adabfa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_08fceb58c967f9e4d9278478f9440b1b848992ba0c8a23b9c19c61f71adabfa0->leave($__internal_08fceb58c967f9e4d9278478f9440b1b848992ba0c8a23b9c19c61f71adabfa0_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4af7cd870dd29610021f781e88cf6acdd8b337f5ba6299a1767b4506b51420bf = $this->env->getExtension("native_profiler");
        $__internal_4af7cd870dd29610021f781e88cf6acdd8b337f5ba6299a1767b4506b51420bf->enter($__internal_4af7cd870dd29610021f781e88cf6acdd8b337f5ba6299a1767b4506b51420bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4af7cd870dd29610021f781e88cf6acdd8b337f5ba6299a1767b4506b51420bf->leave($__internal_4af7cd870dd29610021f781e88cf6acdd8b337f5ba6299a1767b4506b51420bf_prof);

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
        return array (  163 => 45,  152 => 44,  141 => 6,  129 => 5,  117 => 49,  112 => 46,  109 => 45,  107 => 44,  104 => 43,  95 => 40,  92 => 39,  88 => 38,  76 => 29,  72 => 28,  68 => 27,  59 => 21,  51 => 16,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         */
/*         <!-- jQuery -->*/
/*         <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>*/
/*         */
/*         <!-- Bootstrap -->*/
/*         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/* */
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
/*                 <li><a href="{{ path('homepage') }}">Inicio</a></li>*/
/*                 <li><a href="{{ path('app_roles_index') }}">Roles</a></li>*/
/*                 <li><a href="{{ path('app_usuarios_index') }}">Usuarios</a></li>*/
/*                 <li><a href="#">Categorias</a></li>*/
/*                 <li><a href="#">Productos</a></li>*/
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
/*             Todos los Derechos Reservados {{ "now"|date("Y") }}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
