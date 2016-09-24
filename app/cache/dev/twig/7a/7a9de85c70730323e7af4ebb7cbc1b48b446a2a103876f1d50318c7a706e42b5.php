<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_23e41a798fdf1861e9d167fd3093ef7e3c38dbc6d7d83d2851b4530e496a75da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_007119427b30ed42337e67096bbabcb56cb5aac6c79d1ddcad56fd377581b83b = $this->env->getExtension("native_profiler");
        $__internal_007119427b30ed42337e67096bbabcb56cb5aac6c79d1ddcad56fd377581b83b->enter($__internal_007119427b30ed42337e67096bbabcb56cb5aac6c79d1ddcad56fd377581b83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_007119427b30ed42337e67096bbabcb56cb5aac6c79d1ddcad56fd377581b83b->leave($__internal_007119427b30ed42337e67096bbabcb56cb5aac6c79d1ddcad56fd377581b83b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0801b6aed14a1abd19091eae09d1d27876ba702ec0d92c1e74cd4f822910c510 = $this->env->getExtension("native_profiler");
        $__internal_0801b6aed14a1abd19091eae09d1d27876ba702ec0d92c1e74cd4f822910c510->enter($__internal_0801b6aed14a1abd19091eae09d1d27876ba702ec0d92c1e74cd4f822910c510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0801b6aed14a1abd19091eae09d1d27876ba702ec0d92c1e74cd4f822910c510->leave($__internal_0801b6aed14a1abd19091eae09d1d27876ba702ec0d92c1e74cd4f822910c510_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b720b9d1a79d217e40bc6e391c8d3cfab972ff88129640558841fe09d71f028e = $this->env->getExtension("native_profiler");
        $__internal_b720b9d1a79d217e40bc6e391c8d3cfab972ff88129640558841fe09d71f028e->enter($__internal_b720b9d1a79d217e40bc6e391c8d3cfab972ff88129640558841fe09d71f028e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b720b9d1a79d217e40bc6e391c8d3cfab972ff88129640558841fe09d71f028e->leave($__internal_b720b9d1a79d217e40bc6e391c8d3cfab972ff88129640558841fe09d71f028e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4485a51340ce5f5e8963f1e86d18a669f6939a3f43769a8cec252ad1555f210 = $this->env->getExtension("native_profiler");
        $__internal_a4485a51340ce5f5e8963f1e86d18a669f6939a3f43769a8cec252ad1555f210->enter($__internal_a4485a51340ce5f5e8963f1e86d18a669f6939a3f43769a8cec252ad1555f210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a4485a51340ce5f5e8963f1e86d18a669f6939a3f43769a8cec252ad1555f210->leave($__internal_a4485a51340ce5f5e8963f1e86d18a669f6939a3f43769a8cec252ad1555f210_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
