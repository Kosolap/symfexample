<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1651bfee79fcbb1d4a0e8bd4e4c32288b3c10711ecc2df8b9cc94053bbe78844 extends Twig_Template
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
        $__internal_d931d110ea334aeaa3f61abbd0441f92ce920139af2a405590f7f6009304bf91 = $this->env->getExtension("native_profiler");
        $__internal_d931d110ea334aeaa3f61abbd0441f92ce920139af2a405590f7f6009304bf91->enter($__internal_d931d110ea334aeaa3f61abbd0441f92ce920139af2a405590f7f6009304bf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d931d110ea334aeaa3f61abbd0441f92ce920139af2a405590f7f6009304bf91->leave($__internal_d931d110ea334aeaa3f61abbd0441f92ce920139af2a405590f7f6009304bf91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c8a33e3592f201b869c243d3d42a02974286b7b4785fad78c35bdad5de85a5b = $this->env->getExtension("native_profiler");
        $__internal_5c8a33e3592f201b869c243d3d42a02974286b7b4785fad78c35bdad5de85a5b->enter($__internal_5c8a33e3592f201b869c243d3d42a02974286b7b4785fad78c35bdad5de85a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5c8a33e3592f201b869c243d3d42a02974286b7b4785fad78c35bdad5de85a5b->leave($__internal_5c8a33e3592f201b869c243d3d42a02974286b7b4785fad78c35bdad5de85a5b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a64d8ce247530d7d6f6a2b19436b7030232f5f00424cdb521c1fef0123b7e682 = $this->env->getExtension("native_profiler");
        $__internal_a64d8ce247530d7d6f6a2b19436b7030232f5f00424cdb521c1fef0123b7e682->enter($__internal_a64d8ce247530d7d6f6a2b19436b7030232f5f00424cdb521c1fef0123b7e682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a64d8ce247530d7d6f6a2b19436b7030232f5f00424cdb521c1fef0123b7e682->leave($__internal_a64d8ce247530d7d6f6a2b19436b7030232f5f00424cdb521c1fef0123b7e682_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1816cbd2eecd543ac2bd427d47f466fb0c3d2004449b79b5c39b86f29e10199d = $this->env->getExtension("native_profiler");
        $__internal_1816cbd2eecd543ac2bd427d47f466fb0c3d2004449b79b5c39b86f29e10199d->enter($__internal_1816cbd2eecd543ac2bd427d47f466fb0c3d2004449b79b5c39b86f29e10199d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1816cbd2eecd543ac2bd427d47f466fb0c3d2004449b79b5c39b86f29e10199d->leave($__internal_1816cbd2eecd543ac2bd427d47f466fb0c3d2004449b79b5c39b86f29e10199d_prof);

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
