<?php

/* :Roles:editar.html.twig */
class __TwigTemplate_13df4061c5de9d9c39858c9ad13266296b013efc423a46cf8fcf84d7216c851d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Roles:editar.html.twig", 1);
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
<form action=\"../../editar/";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : null), "id", array()), "html", null, true);
        echo "/\" method=\"POST\" class=\"ligthform\">
    <fieldset>
        <legend>Actualizar de Rol</legend>
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : null), "id", array()), "html", null, true);
        echo "\"/>
        <label>Nombre</label><input type=\"text\" name=\"nombre\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rol"]) ? $context["rol"] : null), "nombre", array()), "html", null, true);
        echo "\" maxlength=\"20\"/>
        <input type=\"submit\" value=\"Guardar\" class=\"btn btn-primary\"/>
    </fieldset>
</form>

<br/>

<a href=\"../../\" class=\"btn btn-default\">&lt;&lt; Regresar</a>

";
    }

    public function getTemplateName()
    {
        return ":Roles:editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/* <form action="../../editar/{{ rol.id }}/" method="POST" class="ligthform">*/
/*     <fieldset>*/
/*         <legend>Actualizar de Rol</legend>*/
/*         <input type="hidden" name="id" value="{{ rol.id }}"/>*/
/*         <label>Nombre</label><input type="text" name="nombre" value="{{ rol.nombre }}" maxlength="20"/>*/
/*         <input type="submit" value="Guardar" class="btn btn-primary"/>*/
/*     </fieldset>*/
/* </form>*/
/* */
/* <br/>*/
/* */
/* <a href="../../" class="btn btn-default">&lt;&lt; Regresar</a>*/
/* */
/* {% endblock %}*/
/* */
