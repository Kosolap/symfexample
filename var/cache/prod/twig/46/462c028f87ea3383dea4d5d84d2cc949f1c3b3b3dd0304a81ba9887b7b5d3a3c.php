<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_05dc1f3ebf6ec2cb8ef83d562434f31c3652bdf8ceafe55ef8342a10e5a4d69e extends Twig_Template
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
        $__internal_dd4a9f6f3912b8d6e033b55ec41d7afd1a76ea60cebd4f954892d1c4690c1f56 = $this->env->getExtension("native_profiler");
        $__internal_dd4a9f6f3912b8d6e033b55ec41d7afd1a76ea60cebd4f954892d1c4690c1f56->enter($__internal_dd4a9f6f3912b8d6e033b55ec41d7afd1a76ea60cebd4f954892d1c4690c1f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd4a9f6f3912b8d6e033b55ec41d7afd1a76ea60cebd4f954892d1c4690c1f56->leave($__internal_dd4a9f6f3912b8d6e033b55ec41d7afd1a76ea60cebd4f954892d1c4690c1f56_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_23a4dc16c06cc417aad1ce5e5ae78d40c0e87464d2cdd983d660a99bcf6db6d9 = $this->env->getExtension("native_profiler");
        $__internal_23a4dc16c06cc417aad1ce5e5ae78d40c0e87464d2cdd983d660a99bcf6db6d9->enter($__internal_23a4dc16c06cc417aad1ce5e5ae78d40c0e87464d2cdd983d660a99bcf6db6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_23a4dc16c06cc417aad1ce5e5ae78d40c0e87464d2cdd983d660a99bcf6db6d9->leave($__internal_23a4dc16c06cc417aad1ce5e5ae78d40c0e87464d2cdd983d660a99bcf6db6d9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6077b0c4dda0e0c919b0edf9c9a58bc7394c8afe347854c25ee94873ae4758bf = $this->env->getExtension("native_profiler");
        $__internal_6077b0c4dda0e0c919b0edf9c9a58bc7394c8afe347854c25ee94873ae4758bf->enter($__internal_6077b0c4dda0e0c919b0edf9c9a58bc7394c8afe347854c25ee94873ae4758bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6077b0c4dda0e0c919b0edf9c9a58bc7394c8afe347854c25ee94873ae4758bf->leave($__internal_6077b0c4dda0e0c919b0edf9c9a58bc7394c8afe347854c25ee94873ae4758bf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_303af29604b6cc20ea1263ba73590a192424fb963caaaeed9ea899178d324dc1 = $this->env->getExtension("native_profiler");
        $__internal_303af29604b6cc20ea1263ba73590a192424fb963caaaeed9ea899178d324dc1->enter($__internal_303af29604b6cc20ea1263ba73590a192424fb963caaaeed9ea899178d324dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_303af29604b6cc20ea1263ba73590a192424fb963caaaeed9ea899178d324dc1->leave($__internal_303af29604b6cc20ea1263ba73590a192424fb963caaaeed9ea899178d324dc1_prof);

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
