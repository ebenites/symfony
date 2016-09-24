<?php

/* Usuarios/editar.html.twig */
class __TwigTemplate_5b7289ce04df097a72add20cf774d840959d4872b2bdbc9d14d5de67b16b979d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Usuarios/editar.html.twig", 1);
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
        $__internal_e3e48a5e278dccc3e8e06810b1a2aa57a771d6d4d4a1ac60713b15f622169f33 = $this->env->getExtension("native_profiler");
        $__internal_e3e48a5e278dccc3e8e06810b1a2aa57a771d6d4d4a1ac60713b15f622169f33->enter($__internal_e3e48a5e278dccc3e8e06810b1a2aa57a771d6d4d4a1ac60713b15f622169f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Usuarios/editar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3e48a5e278dccc3e8e06810b1a2aa57a771d6d4d4a1ac60713b15f622169f33->leave($__internal_e3e48a5e278dccc3e8e06810b1a2aa57a771d6d4d4a1ac60713b15f622169f33_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc0d75d2cf812bcf429cf8ed05ba135f6d2e8555463986495b41035b7828a82c = $this->env->getExtension("native_profiler");
        $__internal_fc0d75d2cf812bcf429cf8ed05ba135f6d2e8555463986495b41035b7828a82c->enter($__internal_fc0d75d2cf812bcf429cf8ed05ba135f6d2e8555463986495b41035b7828a82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("app_usuarios_editar", array("id" => $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\" class=\"ligthform\">
    <fieldset>
        <legend>Actualizar de Usuario</legend>
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "id", array()), "html", null, true);
        echo "\"/>
        <label>Username</label><input type=\"text\" name=\"username\" maxlength=\"20\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "username", array()), "html", null, true);
        echo "\"/><br/>
        <label>Password</label><input type=\"password\" name=\"password\" maxlength=\"40\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "password", array()), "html", null, true);
        echo "\"/><br/>
        <label>Nombres</label><input type=\"text\" name=\"nombres\" maxlength=\"100\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "nombres", array()), "html", null, true);
        echo "\"/><br/>
        <label>Email</label><input type=\"email\" name=\"email\" maxlength=\"100\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "email", array()), "html", null, true);
        echo "\"/><br/>
        <label>Rol</label><select name=\"roles_id\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["rol"]) {
            // line 15
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["rol"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "rol", array()), "id", array()))) {
                echo " selected=\"selected\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rol"], "nombre", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </select><br/>
        <input type=\"submit\" value=\"Guardar\"/>
    </fieldset>
</form>

<br/>

<a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("app_usuarios_index");
        echo "\" class=\"btn btn-default\">&lt;&lt; Regresar</a>

";
        
        $__internal_fc0d75d2cf812bcf429cf8ed05ba135f6d2e8555463986495b41035b7828a82c->leave($__internal_fc0d75d2cf812bcf429cf8ed05ba135f6d2e8555463986495b41035b7828a82c_prof);

    }

    public function getTemplateName()
    {
        return "Usuarios/editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 24,  89 => 17,  74 => 15,  70 => 14,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/* <form action="{{ path('app_usuarios_editar', { 'id' : usuario.id }) }}" method="POST" class="ligthform">*/
/*     <fieldset>*/
/*         <legend>Actualizar de Usuario</legend>*/
/*         <input type="hidden" name="id" value="{{ usuario.id }}"/>*/
/*         <label>Username</label><input type="text" name="username" maxlength="20" value="{{ usuario.username }}"/><br/>*/
/*         <label>Password</label><input type="password" name="password" maxlength="40" value="{{ usuario.password }}"/><br/>*/
/*         <label>Nombres</label><input type="text" name="nombres" maxlength="100" value="{{ usuario.nombres }}"/><br/>*/
/*         <label>Email</label><input type="email" name="email" maxlength="100" value="{{ usuario.email }}"/><br/>*/
/*         <label>Rol</label><select name="roles_id">*/
/*             {% for rol in roles %}*/
/*                 <option value="{{ rol.id }}" {% if rol.id == usuario.rol.id %} selected="selected" {% endif %}>{{ rol.nombre }}</option>*/
/*             {% endfor %}*/
/*         </select><br/>*/
/*         <input type="submit" value="Guardar"/>*/
/*     </fieldset>*/
/* </form>*/
/* */
/* <br/>*/
/* */
/* <a href="{{ path('app_usuarios_index') }}" class="btn btn-default">&lt;&lt; Regresar</a>*/
/* */
/* {% endblock %}*/
/* */
