<?php

/* :Roles:index.html.twig */
class __TwigTemplate_84f17a267bd643fbf328ca8d62f5314c62fbfb4bcdce201c4a70be962555a68d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Roles:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
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
    }

    public function getTemplateName()
    {
        return ":Roles:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 30,  70 => 27,  66 => 26,  62 => 25,  58 => 24,  55 => 23,  51 => 22,  31 => 4,  28 => 3,  11 => 1,);
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
