<?php

/* default/index.html.twig */
class __TwigTemplate_3681e33f95a795cb1ed26c17c8ff6b204282175067f99eaa777babfc28623793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_fa5deb1debf9491c7764586d00e3b98e835f0ed5babc5bcb97a2a9ed6fb3a418 = $this->env->getExtension("native_profiler");
        $__internal_fa5deb1debf9491c7764586d00e3b98e835f0ed5babc5bcb97a2a9ed6fb3a418->enter($__internal_fa5deb1debf9491c7764586d00e3b98e835f0ed5babc5bcb97a2a9ed6fb3a418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa5deb1debf9491c7764586d00e3b98e835f0ed5babc5bcb97a2a9ed6fb3a418->leave($__internal_fa5deb1debf9491c7764586d00e3b98e835f0ed5babc5bcb97a2a9ed6fb3a418_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_360148cce30c53f9eb07045ee805f48851d20a08eb7248a2413b38a25ecbb2eb = $this->env->getExtension("native_profiler");
        $__internal_360148cce30c53f9eb07045ee805f48851d20a08eb7248a2413b38a25ecbb2eb->enter($__internal_360148cce30c53f9eb07045ee805f48851d20a08eb7248a2413b38a25ecbb2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    HELLO!

";
        
        $__internal_360148cce30c53f9eb07045ee805f48851d20a08eb7248a2413b38a25ecbb2eb->leave($__internal_360148cce30c53f9eb07045ee805f48851d20a08eb7248a2413b38a25ecbb2eb_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     HELLO!*/
/* */
/* {% endblock %}*/
/* */
