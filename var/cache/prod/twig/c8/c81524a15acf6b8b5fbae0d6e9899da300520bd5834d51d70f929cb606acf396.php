<?php

/* base.html.twig */
class __TwigTemplate_3a1288223940e3bd255622577fc646a259de1b2cfea3d8e12f1c012368a24c5f extends Twig_Template
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
        $__internal_ba87f5488006807885f67dc412188740732d05831816901939c81a5425b97048 = $this->env->getExtension("native_profiler");
        $__internal_ba87f5488006807885f67dc412188740732d05831816901939c81a5425b97048->enter($__internal_ba87f5488006807885f67dc412188740732d05831816901939c81a5425b97048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ba87f5488006807885f67dc412188740732d05831816901939c81a5425b97048->leave($__internal_ba87f5488006807885f67dc412188740732d05831816901939c81a5425b97048_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_16b48131fe45487b6001c60a04d93edff5043ea1e145bffe2fc4a03ea5fadb10 = $this->env->getExtension("native_profiler");
        $__internal_16b48131fe45487b6001c60a04d93edff5043ea1e145bffe2fc4a03ea5fadb10->enter($__internal_16b48131fe45487b6001c60a04d93edff5043ea1e145bffe2fc4a03ea5fadb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_16b48131fe45487b6001c60a04d93edff5043ea1e145bffe2fc4a03ea5fadb10->leave($__internal_16b48131fe45487b6001c60a04d93edff5043ea1e145bffe2fc4a03ea5fadb10_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6098de2e1c2ed0fd56211fe1a572c8c51f7625b2f0ac3382634897cd7d6492d = $this->env->getExtension("native_profiler");
        $__internal_e6098de2e1c2ed0fd56211fe1a572c8c51f7625b2f0ac3382634897cd7d6492d->enter($__internal_e6098de2e1c2ed0fd56211fe1a572c8c51f7625b2f0ac3382634897cd7d6492d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e6098de2e1c2ed0fd56211fe1a572c8c51f7625b2f0ac3382634897cd7d6492d->leave($__internal_e6098de2e1c2ed0fd56211fe1a572c8c51f7625b2f0ac3382634897cd7d6492d_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_398025bcec451da631dee226cefd1460f1ac9085faf071492318e3132c46a0b3 = $this->env->getExtension("native_profiler");
        $__internal_398025bcec451da631dee226cefd1460f1ac9085faf071492318e3132c46a0b3->enter($__internal_398025bcec451da631dee226cefd1460f1ac9085faf071492318e3132c46a0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_398025bcec451da631dee226cefd1460f1ac9085faf071492318e3132c46a0b3->leave($__internal_398025bcec451da631dee226cefd1460f1ac9085faf071492318e3132c46a0b3_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eff48073c84a7da1bf70ff6c0fe72dad51a4a420053075a9ac6e6180a1b2dbc6 = $this->env->getExtension("native_profiler");
        $__internal_eff48073c84a7da1bf70ff6c0fe72dad51a4a420053075a9ac6e6180a1b2dbc6->enter($__internal_eff48073c84a7da1bf70ff6c0fe72dad51a4a420053075a9ac6e6180a1b2dbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eff48073c84a7da1bf70ff6c0fe72dad51a4a420053075a9ac6e6180a1b2dbc6->leave($__internal_eff48073c84a7da1bf70ff6c0fe72dad51a4a420053075a9ac6e6180a1b2dbc6_prof);

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
