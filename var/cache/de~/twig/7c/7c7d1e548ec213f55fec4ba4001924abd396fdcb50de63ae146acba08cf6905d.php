<?php

/* base.html.twig */
class __TwigTemplate_230a3fa644c5d729838f3cd1f3b340a59e0526234bc7408a12a3a25244bd759a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd1b383bcc333caa07438baaa29e38166338204be2004436fa4bb85a705de02f = $this->env->getExtension("native_profiler");
        $__internal_fd1b383bcc333caa07438baaa29e38166338204be2004436fa4bb85a705de02f->enter($__internal_fd1b383bcc333caa07438baaa29e38166338204be2004436fa4bb85a705de02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fd1b383bcc333caa07438baaa29e38166338204be2004436fa4bb85a705de02f->leave($__internal_fd1b383bcc333caa07438baaa29e38166338204be2004436fa4bb85a705de02f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c91e275ed3754819837bb29458f94541ee799404f161591039fadb0c4a6bc00d = $this->env->getExtension("native_profiler");
        $__internal_c91e275ed3754819837bb29458f94541ee799404f161591039fadb0c4a6bc00d->enter($__internal_c91e275ed3754819837bb29458f94541ee799404f161591039fadb0c4a6bc00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c91e275ed3754819837bb29458f94541ee799404f161591039fadb0c4a6bc00d->leave($__internal_c91e275ed3754819837bb29458f94541ee799404f161591039fadb0c4a6bc00d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3590f0f1adabf0c3c7ed10830d6404dd1e85d76a62500bbe376d145e7ac59833 = $this->env->getExtension("native_profiler");
        $__internal_3590f0f1adabf0c3c7ed10830d6404dd1e85d76a62500bbe376d145e7ac59833->enter($__internal_3590f0f1adabf0c3c7ed10830d6404dd1e85d76a62500bbe376d145e7ac59833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3590f0f1adabf0c3c7ed10830d6404dd1e85d76a62500bbe376d145e7ac59833->leave($__internal_3590f0f1adabf0c3c7ed10830d6404dd1e85d76a62500bbe376d145e7ac59833_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9353980d6b68d8707d595c8bac78755253e6df591af4937cbb4febb959a6d6f4 = $this->env->getExtension("native_profiler");
        $__internal_9353980d6b68d8707d595c8bac78755253e6df591af4937cbb4febb959a6d6f4->enter($__internal_9353980d6b68d8707d595c8bac78755253e6df591af4937cbb4febb959a6d6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9353980d6b68d8707d595c8bac78755253e6df591af4937cbb4febb959a6d6f4->leave($__internal_9353980d6b68d8707d595c8bac78755253e6df591af4937cbb4febb959a6d6f4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0c836de124cf0e09c38bb81bb4bb4e4f41af71aeca5693d7221baa38ba699759 = $this->env->getExtension("native_profiler");
        $__internal_0c836de124cf0e09c38bb81bb4bb4e4f41af71aeca5693d7221baa38ba699759->enter($__internal_0c836de124cf0e09c38bb81bb4bb4e4f41af71aeca5693d7221baa38ba699759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0c836de124cf0e09c38bb81bb4bb4e4f41af71aeca5693d7221baa38ba699759->leave($__internal_0c836de124cf0e09c38bb81bb4bb4e4f41af71aeca5693d7221baa38ba699759_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
