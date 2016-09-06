<?php

/* info/static.html.twig */
class __TwigTemplate_e74900046b1b23e8302a9313f507b33e3e6878861c294ca6d89f9cb0a5f9dc78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "info/static.html.twig", 1);
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
        $__internal_c4756f3ff11af2d45b92046ab901cda39950b5cd093eb7fcbcc781ae4e974741 = $this->env->getExtension("native_profiler");
        $__internal_c4756f3ff11af2d45b92046ab901cda39950b5cd093eb7fcbcc781ae4e974741->enter($__internal_c4756f3ff11af2d45b92046ab901cda39950b5cd093eb7fcbcc781ae4e974741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "info/static.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4756f3ff11af2d45b92046ab901cda39950b5cd093eb7fcbcc781ae4e974741->leave($__internal_c4756f3ff11af2d45b92046ab901cda39950b5cd093eb7fcbcc781ae4e974741_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8a4118060a11ff3c91af4a0f697c9e1e87aac8f4ca5c6f69aecb61d51079e78 = $this->env->getExtension("native_profiler");
        $__internal_b8a4118060a11ff3c91af4a0f697c9e1e87aac8f4ca5c6f69aecb61d51079e78->enter($__internal_b8a4118060a11ff3c91af4a0f697c9e1e87aac8f4ca5c6f69aecb61d51079e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))) > 0)) {
            // line 6
            echo "    <table class=\"testTable\">
        <tr>
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["titles"]) ? $context["titles"] : $this->getContext($context, "titles")));
            foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                // line 9
                echo "                <th>";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </tr>
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
                // line 13
                echo "            <tr>
                ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["callData"]) ? $context["callData"] : $this->getContext($context, "callData")));
                foreach ($context['_seq'] as $context["_key"] => $context["inf"]) {
                    // line 15
                    echo "
                   <td>
                        ";
                    // line 17
                    if ($this->getAttribute($this->getAttribute($context["el"], "getData", array(0 => $context["inf"]), "method", false, true), "timestamp", array(), "any", true, true)) {
                        // line 18
                        echo "                        ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["el"], "getData", array(0 => $context["inf"]), "method"), "m/d/Y"), "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 20
                        echo "                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["el"], "getData", array(0 => $context["inf"]), "method"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 22
                    echo "                   </td>

                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inf'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    </table>
";
        }
        // line 30
        echo "    <br/>





";
        
        $__internal_b8a4118060a11ff3c91af4a0f697c9e1e87aac8f4ca5c6f69aecb61d51079e78->leave($__internal_b8a4118060a11ff3c91af4a0f697c9e1e87aac8f4ca5c6f69aecb61d51079e78_prof);

    }

    public function getTemplateName()
    {
        return "info/static.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 30,  110 => 28,  102 => 25,  94 => 22,  88 => 20,  82 => 18,  80 => 17,  76 => 15,  72 => 14,  69 => 13,  65 => 12,  62 => 11,  53 => 9,  49 => 8,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% if data|length > 0 %}*/
/*     <table class="testTable">*/
/*         <tr>*/
/*             {% for title in titles %}*/
/*                 <th>{{ title }}</th>*/
/*             {% endfor %}*/
/*         </tr>*/
/*         {% for el in data %}*/
/*             <tr>*/
/*                 {% for inf in callData %}*/
/* */
/*                    <td>*/
/*                         {% if el.getData(inf).timestamp is defined %}*/
/*                         {{ el.getData(inf)|date('m/d/Y') }}*/
/*                         {% else %}*/
/*                         {{ el.getData(inf) }}*/
/*                         {% endif %}*/
/*                    </td>*/
/* */
/*                 {% endfor %}*/
/* */
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endif %}*/
/*     <br/>*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
