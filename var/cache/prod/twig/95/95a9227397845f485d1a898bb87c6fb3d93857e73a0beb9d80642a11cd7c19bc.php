<?php

/* info/dinamic.html.twig */
class __TwigTemplate_d29d2cb4575c1a1b9a62e7553fc2d1b488c9b09c656e7955c4c2716f99abce57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "info/dinamic.html.twig", 1);
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
        $__internal_dd8ae1c2a3712a57476150634931741f8b479d64b74d1940dd4967673ba24a60 = $this->env->getExtension("native_profiler");
        $__internal_dd8ae1c2a3712a57476150634931741f8b479d64b74d1940dd4967673ba24a60->enter($__internal_dd8ae1c2a3712a57476150634931741f8b479d64b74d1940dd4967673ba24a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "info/dinamic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd8ae1c2a3712a57476150634931741f8b479d64b74d1940dd4967673ba24a60->leave($__internal_dd8ae1c2a3712a57476150634931741f8b479d64b74d1940dd4967673ba24a60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4ea2fdf8f55ae3212787f66309aa668accc4e08518358825d531693e0a1d664 = $this->env->getExtension("native_profiler");
        $__internal_d4ea2fdf8f55ae3212787f66309aa668accc4e08518358825d531693e0a1d664->enter($__internal_d4ea2fdf8f55ae3212787f66309aa668accc4e08518358825d531693e0a1d664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <br>
    <br>
    <select id=\"blabla\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["dat"]) {
            // line 9
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["dat"]);
            foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                // line 10
                echo "                <option>";
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </select>

    <table class=\"testTable\" id=\"resultTable\">
        <tbody>

        </tbody>
    </table>

";
        
        $__internal_d4ea2fdf8f55ae3212787f66309aa668accc4e08518358825d531693e0a1d664->leave($__internal_d4ea2fdf8f55ae3212787f66309aa668accc4e08518358825d531693e0a1d664_prof);

    }

    public function getTemplateName()
    {
        return "info/dinamic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 13,  64 => 12,  55 => 10,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <br>*/
/*     <br>*/
/*     <select id="blabla">*/
/*         {% for dat in data %}*/
/*             {% for k in dat %}*/
/*                 <option>{{ k }}</option>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     </select>*/
/* */
/*     <table class="testTable" id="resultTable">*/
/*         <tbody>*/
/* */
/*         </tbody>*/
/*     </table>*/
/* */
/* {% endblock %}*/
