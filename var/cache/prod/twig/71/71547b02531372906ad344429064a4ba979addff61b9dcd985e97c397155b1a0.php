<?php

/* base.html.twig */
class __TwigTemplate_8c08f2e3260f2314327c11d0e49f63f80e8bb15c378282710fbffe13cad9566e extends Twig_Template
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
        $__internal_52486a3abf5f2cd416fa262d623f00eef4dce2b75354ff85e49d800b82173aa8 = $this->env->getExtension("native_profiler");
        $__internal_52486a3abf5f2cd416fa262d623f00eef4dce2b75354ff85e49d800b82173aa8->enter($__internal_52486a3abf5f2cd416fa262d623f00eef4dce2b75354ff85e49d800b82173aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo "
        ";
        // line 9
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"> </script>

        ";
        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/assets/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 16
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/jquery-ui/themes/base/jquery-ui.min.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>


    </head>
    <body>
        <div>
            <ul class=\"dropdown\">

                <li class=\"dropdown-top\">
                    <a class=\"dropdown-top\" href=\"/\">Справочники</a>
                    <ul class=\"dropdown-inside\">
                        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("User");
        echo "\">Пользователи</a></li>
                        <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("Region");
        echo "\">Регионы</a></li>
                        <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("Reason");
        echo "\">Причины</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <br/>
        <div>
            ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "        </div>
        ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "    </body>
</html>
";
        
        $__internal_52486a3abf5f2cd416fa262d623f00eef4dce2b75354ff85e49d800b82173aa8->leave($__internal_52486a3abf5f2cd416fa262d623f00eef4dce2b75354ff85e49d800b82173aa8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0f9bbd4e96933e039c407835eddc2975276524ff6726eef52c39d7ea797d694 = $this->env->getExtension("native_profiler");
        $__internal_b0f9bbd4e96933e039c407835eddc2975276524ff6726eef52c39d7ea797d694->enter($__internal_b0f9bbd4e96933e039c407835eddc2975276524ff6726eef52c39d7ea797d694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b0f9bbd4e96933e039c407835eddc2975276524ff6726eef52c39d7ea797d694->leave($__internal_b0f9bbd4e96933e039c407835eddc2975276524ff6726eef52c39d7ea797d694_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a964b88f03eeb7d58334d9fddbfc3131276a4eb74bbc9a2e86e0721b8dd3da3f = $this->env->getExtension("native_profiler");
        $__internal_a964b88f03eeb7d58334d9fddbfc3131276a4eb74bbc9a2e86e0721b8dd3da3f->enter($__internal_a964b88f03eeb7d58334d9fddbfc3131276a4eb74bbc9a2e86e0721b8dd3da3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a964b88f03eeb7d58334d9fddbfc3131276a4eb74bbc9a2e86e0721b8dd3da3f->leave($__internal_a964b88f03eeb7d58334d9fddbfc3131276a4eb74bbc9a2e86e0721b8dd3da3f_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_53ae4d11ab2642f9c0030aa1781ea87364f4a08df7229370e330eccf4155d4e7 = $this->env->getExtension("native_profiler");
        $__internal_53ae4d11ab2642f9c0030aa1781ea87364f4a08df7229370e330eccf4155d4e7->enter($__internal_53ae4d11ab2642f9c0030aa1781ea87364f4a08df7229370e330eccf4155d4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_53ae4d11ab2642f9c0030aa1781ea87364f4a08df7229370e330eccf4155d4e7->leave($__internal_53ae4d11ab2642f9c0030aa1781ea87364f4a08df7229370e330eccf4155d4e7_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f3fd2136b72818e4e0069a77b0c965127c3b3d87297b5bc39b40958cc27a066b = $this->env->getExtension("native_profiler");
        $__internal_f3fd2136b72818e4e0069a77b0c965127c3b3d87297b5bc39b40958cc27a066b->enter($__internal_f3fd2136b72818e4e0069a77b0c965127c3b3d87297b5bc39b40958cc27a066b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f3fd2136b72818e4e0069a77b0c965127c3b3d87297b5bc39b40958cc27a066b->leave($__internal_f3fd2136b72818e4e0069a77b0c965127c3b3d87297b5bc39b40958cc27a066b_prof);

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
        return array (  158 => 44,  147 => 42,  136 => 6,  124 => 5,  115 => 45,  113 => 44,  110 => 43,  108 => 42,  97 => 34,  93 => 33,  89 => 32,  75 => 21,  71 => 20,  67 => 19,  62 => 17,  57 => 16,  52 => 13,  47 => 12,  41 => 9,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/* */
/*         {# JQuery#}*/
/*         <script src="{{ asset('assets/jquery/dist/jquery.min.js') }}"> </script>*/
/* */
/*         {# Bootstrap #}*/
/*         <link rel="stylesheet" href="{{ asset('/assets/bootstrap/dist/css/bootstrap.min.css') }}" />*/
/*         <script src="{{ asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/* */
/*         {# JQuery UI#}*/
/*         <link rel="stylesheet" href="{{ asset('assets/jquery-ui/themes/base/jquery-ui.min.css') }}">*/
/*         <script src="{{ asset('assets/jquery-ui/jquery-ui.min.js') }}"></script>*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/main.css') }}" />*/
/*         <script src="{{ asset('js/main.js') }}"></script>*/
/* */
/* */
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             <ul class="dropdown">*/
/* */
/*                 <li class="dropdown-top">*/
/*                     <a class="dropdown-top" href="/">Справочники</a>*/
/*                     <ul class="dropdown-inside">*/
/*                         <li><a href="{{ path('User') }}">Пользователи</a></li>*/
/*                         <li><a href="{{ path('Region') }}">Регионы</a></li>*/
/*                         <li><a href="{{ path('Reason') }}">Причины</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/* */
/*             </ul>*/
/*         </div>*/
/*         <br/>*/
/*         <div>*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
