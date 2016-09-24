<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2016452ebf451d175f24781ada48b995e89e59f126fb08bfad690a824d962031 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_247786c9efa7664b34b27c97e220b24225cd55a0762122c954062d7f6ed5547d = $this->env->getExtension("native_profiler");
        $__internal_247786c9efa7664b34b27c97e220b24225cd55a0762122c954062d7f6ed5547d->enter($__internal_247786c9efa7664b34b27c97e220b24225cd55a0762122c954062d7f6ed5547d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_247786c9efa7664b34b27c97e220b24225cd55a0762122c954062d7f6ed5547d->leave($__internal_247786c9efa7664b34b27c97e220b24225cd55a0762122c954062d7f6ed5547d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06d9997672fb656d0a14b48dd02e18b4d2232cfc270eedc59eebfc7a513142cd = $this->env->getExtension("native_profiler");
        $__internal_06d9997672fb656d0a14b48dd02e18b4d2232cfc270eedc59eebfc7a513142cd->enter($__internal_06d9997672fb656d0a14b48dd02e18b4d2232cfc270eedc59eebfc7a513142cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06d9997672fb656d0a14b48dd02e18b4d2232cfc270eedc59eebfc7a513142cd->leave($__internal_06d9997672fb656d0a14b48dd02e18b4d2232cfc270eedc59eebfc7a513142cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_68b7853d00f4776c3b921bf06b04f16529d6a39ebdb8637fda663eaf40cdb0be = $this->env->getExtension("native_profiler");
        $__internal_68b7853d00f4776c3b921bf06b04f16529d6a39ebdb8637fda663eaf40cdb0be->enter($__internal_68b7853d00f4776c3b921bf06b04f16529d6a39ebdb8637fda663eaf40cdb0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_68b7853d00f4776c3b921bf06b04f16529d6a39ebdb8637fda663eaf40cdb0be->leave($__internal_68b7853d00f4776c3b921bf06b04f16529d6a39ebdb8637fda663eaf40cdb0be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fa316a454857fad142730687a73a2d25f4c0f245d1aa9eb6a760c5e0cf3bc07 = $this->env->getExtension("native_profiler");
        $__internal_7fa316a454857fad142730687a73a2d25f4c0f245d1aa9eb6a760c5e0cf3bc07->enter($__internal_7fa316a454857fad142730687a73a2d25f4c0f245d1aa9eb6a760c5e0cf3bc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7fa316a454857fad142730687a73a2d25f4c0f245d1aa9eb6a760c5e0cf3bc07->leave($__internal_7fa316a454857fad142730687a73a2d25f4c0f245d1aa9eb6a760c5e0cf3bc07_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
