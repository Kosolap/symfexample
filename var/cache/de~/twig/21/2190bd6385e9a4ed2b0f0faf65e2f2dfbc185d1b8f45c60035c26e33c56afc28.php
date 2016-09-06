<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_07fa9310fb6ceab9686765c45f29700a468a0b9018d9538fec6e40ed8ebb4cfc extends Twig_Template
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
        $__internal_af5de36ec5875d6102f87e1bd718feafeb2b52a9568cb8db4d646ec67acc79df = $this->env->getExtension("native_profiler");
        $__internal_af5de36ec5875d6102f87e1bd718feafeb2b52a9568cb8db4d646ec67acc79df->enter($__internal_af5de36ec5875d6102f87e1bd718feafeb2b52a9568cb8db4d646ec67acc79df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af5de36ec5875d6102f87e1bd718feafeb2b52a9568cb8db4d646ec67acc79df->leave($__internal_af5de36ec5875d6102f87e1bd718feafeb2b52a9568cb8db4d646ec67acc79df_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c85b98c88689fcba81eab9e6431cd37b1df92096c1ce1e1b03dd02d7b8ffed0e = $this->env->getExtension("native_profiler");
        $__internal_c85b98c88689fcba81eab9e6431cd37b1df92096c1ce1e1b03dd02d7b8ffed0e->enter($__internal_c85b98c88689fcba81eab9e6431cd37b1df92096c1ce1e1b03dd02d7b8ffed0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c85b98c88689fcba81eab9e6431cd37b1df92096c1ce1e1b03dd02d7b8ffed0e->leave($__internal_c85b98c88689fcba81eab9e6431cd37b1df92096c1ce1e1b03dd02d7b8ffed0e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e3934d3baef509e52e5d81ea08a29cab21a6fac19c8c9ded046e1ae7f70bcfdb = $this->env->getExtension("native_profiler");
        $__internal_e3934d3baef509e52e5d81ea08a29cab21a6fac19c8c9ded046e1ae7f70bcfdb->enter($__internal_e3934d3baef509e52e5d81ea08a29cab21a6fac19c8c9ded046e1ae7f70bcfdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e3934d3baef509e52e5d81ea08a29cab21a6fac19c8c9ded046e1ae7f70bcfdb->leave($__internal_e3934d3baef509e52e5d81ea08a29cab21a6fac19c8c9ded046e1ae7f70bcfdb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_34b02728db89d3e71852feeaa9db68c1fcfde92c36101ad9bedd0c7d80c6dc84 = $this->env->getExtension("native_profiler");
        $__internal_34b02728db89d3e71852feeaa9db68c1fcfde92c36101ad9bedd0c7d80c6dc84->enter($__internal_34b02728db89d3e71852feeaa9db68c1fcfde92c36101ad9bedd0c7d80c6dc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_34b02728db89d3e71852feeaa9db68c1fcfde92c36101ad9bedd0c7d80c6dc84->leave($__internal_34b02728db89d3e71852feeaa9db68c1fcfde92c36101ad9bedd0c7d80c6dc84_prof);

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
