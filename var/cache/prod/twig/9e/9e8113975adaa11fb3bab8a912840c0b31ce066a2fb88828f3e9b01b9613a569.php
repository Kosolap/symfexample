<?php

/* info/dinamic.html.twig */
class __TwigTemplate_9460ebc905d0e7b89641dbb38b89fcc6eb5b0a0579d34033e9cbac3d2582e4be extends Twig_Template
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
        $__internal_b10c1e21a00454eec1cda56b256e731ac08e547bbfcf1802e19d327ff4066810 = $this->env->getExtension("native_profiler");
        $__internal_b10c1e21a00454eec1cda56b256e731ac08e547bbfcf1802e19d327ff4066810->enter($__internal_b10c1e21a00454eec1cda56b256e731ac08e547bbfcf1802e19d327ff4066810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "info/dinamic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b10c1e21a00454eec1cda56b256e731ac08e547bbfcf1802e19d327ff4066810->leave($__internal_b10c1e21a00454eec1cda56b256e731ac08e547bbfcf1802e19d327ff4066810_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9f7085e2373d653f24d69a392f87f8f75a38d846780a01dd24237bd99657790 = $this->env->getExtension("native_profiler");
        $__internal_a9f7085e2373d653f24d69a392f87f8f75a38d846780a01dd24237bd99657790->enter($__internal_a9f7085e2373d653f24d69a392f87f8f75a38d846780a01dd24237bd99657790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <table class=\"testTable\">
    </table>

";
        
        $__internal_a9f7085e2373d653f24d69a392f87f8f75a38d846780a01dd24237bd99657790->leave($__internal_a9f7085e2373d653f24d69a392f87f8f75a38d846780a01dd24237bd99657790_prof);

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
/*     <table class="testTable">*/
/*     </table>*/
/* */
/* {% endblock %}*/
