<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fa4f26b77dd6f6a882586c71400bfb5962606799fd42a805f2b10324c061216c extends Twig_Template
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
        $__internal_c5e7c9faf658400a14632f91dce8403ce0e5a93dd98e141e6d5489ea685db0dd = $this->env->getExtension("native_profiler");
        $__internal_c5e7c9faf658400a14632f91dce8403ce0e5a93dd98e141e6d5489ea685db0dd->enter($__internal_c5e7c9faf658400a14632f91dce8403ce0e5a93dd98e141e6d5489ea685db0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5e7c9faf658400a14632f91dce8403ce0e5a93dd98e141e6d5489ea685db0dd->leave($__internal_c5e7c9faf658400a14632f91dce8403ce0e5a93dd98e141e6d5489ea685db0dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a93cbf9ef3a712387d41ed6c7e284c421899a935bc9bfa1386b693b56dedcaa6 = $this->env->getExtension("native_profiler");
        $__internal_a93cbf9ef3a712387d41ed6c7e284c421899a935bc9bfa1386b693b56dedcaa6->enter($__internal_a93cbf9ef3a712387d41ed6c7e284c421899a935bc9bfa1386b693b56dedcaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a93cbf9ef3a712387d41ed6c7e284c421899a935bc9bfa1386b693b56dedcaa6->leave($__internal_a93cbf9ef3a712387d41ed6c7e284c421899a935bc9bfa1386b693b56dedcaa6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_acaad49eda2c292cd6b100c7c59f4369ee3a5a6e05ad90f37946f394ab384ddf = $this->env->getExtension("native_profiler");
        $__internal_acaad49eda2c292cd6b100c7c59f4369ee3a5a6e05ad90f37946f394ab384ddf->enter($__internal_acaad49eda2c292cd6b100c7c59f4369ee3a5a6e05ad90f37946f394ab384ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_acaad49eda2c292cd6b100c7c59f4369ee3a5a6e05ad90f37946f394ab384ddf->leave($__internal_acaad49eda2c292cd6b100c7c59f4369ee3a5a6e05ad90f37946f394ab384ddf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a15832482eff8928b830582cf4fdc8190944be838dba9d198958adbe0db17d39 = $this->env->getExtension("native_profiler");
        $__internal_a15832482eff8928b830582cf4fdc8190944be838dba9d198958adbe0db17d39->enter($__internal_a15832482eff8928b830582cf4fdc8190944be838dba9d198958adbe0db17d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a15832482eff8928b830582cf4fdc8190944be838dba9d198958adbe0db17d39->leave($__internal_a15832482eff8928b830582cf4fdc8190944be838dba9d198958adbe0db17d39_prof);

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
