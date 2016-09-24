<?php

/* Roles/index.html.twig */
class __TwigTemplate_e49710e51c450554cef2c8ef8395f20a1bcee16c255c46374d7bf11bcf107904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Roles/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_997ccf98b37e0ba5709a84cdccc1800c3b380c2dcec42283f085de2787cc2b81 = $this->env->getExtension("native_profiler");
        $__internal_997ccf98b37e0ba5709a84cdccc1800c3b380c2dcec42283f085de2787cc2b81->enter($__internal_997ccf98b37e0ba5709a84cdccc1800c3b380c2dcec42283f085de2787cc2b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Roles/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_997ccf98b37e0ba5709a84cdccc1800c3b380c2dcec42283f085de2787cc2b81->leave($__internal_997ccf98b37e0ba5709a84cdccc1800c3b380c2dcec42283f085de2787cc2b81_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e881fe5aa3ea2271dd31f3f51dd3badea526d0e78316e33fb33eb320181a14fc = $this->env->getExtension("native_profiler");
        $__internal_e881fe5aa3ea2271dd31f3f51dd3badea526d0e78316e33fb33eb320181a14fc->enter($__internal_e881fe5aa3ea2271dd31f3f51dd3badea526d0e78316e33fb33eb320181a14fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
<h2>Mantenimiento de Roles</h2>

<table border=\"1\" width=\"100%\" class=\"gridtable\">
    <caption>Lista de Roles</caption>
    <colgroup>
        <col width=\"80\"/>
        <col/>
        <col width=\"80\"/>
        <col width=\"80\"/>
    </colgroup>
    <thead>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </thead>
    <tbody>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 23
            echo "        <tr>
            <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "nombre", array()), "html", null, true);
            echo "</td>
            <td><a href=\"editar/";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "id", array()), "html", null, true);
            echo "\">Editar</a></td>
            <td><a href=\"eliminar/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "id", array()), "html", null, true);
            echo "\">Eliminar</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "   </tbody>
</table>

<br/>

<a href=\"registrar/\" class=\"btn btn-default\">Nuevo</a>

";
        
        $__internal_e881fe5aa3ea2271dd31f3f51dd3badea526d0e78316e33fb33eb320181a14fc->leave($__internal_e881fe5aa3ea2271dd31f3f51dd3badea526d0e78316e33fb33eb320181a14fc_prof);

    }

    public function getTemplateName()
    {
        return "Roles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  79 => 27,  75 => 26,  71 => 25,  67 => 24,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/* <h2>Mantenimiento de Roles</h2>*/
/* */
/* <table border="1" width="100%" class="gridtable">*/
/*     <caption>Lista de Roles</caption>*/
/*     <colgroup>*/
/*         <col width="80"/>*/
/*         <col/>*/
/*         <col width="80"/>*/
/*         <col width="80"/>*/
/*     </colgroup>*/
/*     <thead>*/
/*         <th>ID</th>*/
/*         <th>NOMBRE</th>*/
/*         <th>&nbsp;</th>*/
/*         <th>&nbsp;</th>*/
/*     </thead>*/
/*     <tbody>*/
/*     {% for rol in roles %}*/
/*         <tr>*/
/*             <td>{{ rol.id }}</td>*/
/*             <td>{{ rol.nombre }}</td>*/
/*             <td><a href="editar/{{ rol.id }}">Editar</a></td>*/
/*             <td><a href="eliminar/{{ rol.id }}">Eliminar</a></td>*/
/*         </tr>*/
/*     {% endfor %}*/
/*    </tbody>*/
/* </table>*/
/* */
/* <br/>*/
/* */
/* <a href="registrar/" class="btn btn-default">Nuevo</a>*/
/* */
/* {% endblock %}*/
/* */
