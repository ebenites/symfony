<?php

/* :Roles:registrar.html.twig */
class __TwigTemplate_84274777006134de94b61a35c89099a28865c0135d6d0a628654241b713271c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Roles:registrar.html.twig", 1);
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
<form action=\"../registrar/\" method=\"POST\" class=\"ligthform\">
    <fieldset>
        <legend>Registro de Rol</legend>
        <label>Nombre</label><input type=\"text\" name=\"nombre\" maxlength=\"20\"/>
        <input type=\"submit\" value=\"Guardar\" class=\"btn btn-primary\"/>
    </fieldset>
</form>

<br/>

<a href=\"../\" class=\"btn btn-default\">&lt;&lt; Regresar</a>

";
    }

    public function getTemplateName()
    {
        return ":Roles:registrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/* <form action="../registrar/" method="POST" class="ligthform">*/
/*     <fieldset>*/
/*         <legend>Registro de Rol</legend>*/
/*         <label>Nombre</label><input type="text" name="nombre" maxlength="20"/>*/
/*         <input type="submit" value="Guardar" class="btn btn-primary"/>*/
/*     </fieldset>*/
/* </form>*/
/* */
/* <br/>*/
/* */
/* <a href="../" class="btn btn-default">&lt;&lt; Regresar</a>*/
/* */
/* {% endblock %}*/
/* */
