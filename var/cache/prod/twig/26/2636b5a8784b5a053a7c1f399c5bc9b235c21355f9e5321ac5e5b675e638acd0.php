<?php

/* default/index.html.twig */
class __TwigTemplate_fd6bbdce1ced66af2d2496bc1cdf53fa5b60cb32cc953aa4d49645639152cdbd extends Twig_Template
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
        $__internal_ef16bd2eb66a6c36eb6274f7e5a2edfaa7d538f766dcd575b65baceb1457e131 = $this->env->getExtension("native_profiler");
        $__internal_ef16bd2eb66a6c36eb6274f7e5a2edfaa7d538f766dcd575b65baceb1457e131->enter($__internal_ef16bd2eb66a6c36eb6274f7e5a2edfaa7d538f766dcd575b65baceb1457e131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef16bd2eb66a6c36eb6274f7e5a2edfaa7d538f766dcd575b65baceb1457e131->leave($__internal_ef16bd2eb66a6c36eb6274f7e5a2edfaa7d538f766dcd575b65baceb1457e131_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_979fcff9ef102616ee1a867512db2a3f527f130aba8b40e4399f06ab2bf31362 = $this->env->getExtension("native_profiler");
        $__internal_979fcff9ef102616ee1a867512db2a3f527f130aba8b40e4399f06ab2bf31362->enter($__internal_979fcff9ef102616ee1a867512db2a3f527f130aba8b40e4399f06ab2bf31362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


";
        
        $__internal_979fcff9ef102616ee1a867512db2a3f527f130aba8b40e4399f06ab2bf31362->leave($__internal_979fcff9ef102616ee1a867512db2a3f527f130aba8b40e4399f06ab2bf31362_prof);

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
/* */
/* */
/* {% endblock %}*/
/* */
