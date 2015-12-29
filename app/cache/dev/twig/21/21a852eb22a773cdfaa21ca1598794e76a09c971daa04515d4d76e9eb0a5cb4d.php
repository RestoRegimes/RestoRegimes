<?php

/* RRCoreBundle:Default:layout.html.twig */
class __TwigTemplate_505f575b2f13eab1bcae0fd5fade30d75002fbec942b5091d5e832a7f290d2d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "RRCoreBundle:Default:layout.html.twig", 3);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'rrplatform_search' => array($this, 'block_rrplatform_search'),
            'fos_user' => array($this, 'block_fos_user'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e43904a44c6bb02ea486c332e8292b871c313c3daaa8b5d3c381e3c233ae7e18 = $this->env->getExtension("native_profiler");
        $__internal_e43904a44c6bb02ea486c332e8292b871c313c3daaa8b5d3c381e3c233ae7e18->enter($__internal_e43904a44c6bb02ea486c332e8292b871c313c3daaa8b5d3c381e3c233ae7e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRCoreBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e43904a44c6bb02ea486c332e8292b871c313c3daaa8b5d3c381e3c233ae7e18->leave($__internal_e43904a44c6bb02ea486c332e8292b871c313c3daaa8b5d3c381e3c233ae7e18_prof);

    }

    // line 4
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e52bea767d08ebb96bc0de086b132b9c787a92f0c12148bbad644c3fc3728ec6 = $this->env->getExtension("native_profiler");
        $__internal_e52bea767d08ebb96bc0de086b132b9c787a92f0c12148bbad644c3fc3728ec6->enter($__internal_e52bea767d08ebb96bc0de086b132b9c787a92f0c12148bbad644c3fc3728ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_e52bea767d08ebb96bc0de086b132b9c787a92f0c12148bbad644c3fc3728ec6->leave($__internal_e52bea767d08ebb96bc0de086b132b9c787a92f0c12148bbad644c3fc3728ec6_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_eadaddb560a6dfeb7cf7d38a9cce0fa7736458771ba83e37bfb731e8b988bdbd = $this->env->getExtension("native_profiler");
        $__internal_eadaddb560a6dfeb7cf7d38a9cce0fa7736458771ba83e37bfb731e8b988bdbd->enter($__internal_eadaddb560a6dfeb7cf7d38a9cce0fa7736458771ba83e37bfb731e8b988bdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Resto'Regimes
";
        
        $__internal_eadaddb560a6dfeb7cf7d38a9cce0fa7736458771ba83e37bfb731e8b988bdbd->leave($__internal_eadaddb560a6dfeb7cf7d38a9cce0fa7736458771ba83e37bfb731e8b988bdbd_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_d51e72e819aa0e17e6c042b63b0aac81fe9d8de14075ff74e4d19d92443df661 = $this->env->getExtension("native_profiler");
        $__internal_d51e72e819aa0e17e6c042b63b0aac81fe9d8de14075ff74e4d19d92443df661->enter($__internal_d51e72e819aa0e17e6c042b63b0aac81fe9d8de14075ff74e4d19d92443df661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <div class=\"mdl-grid\">
        <div class=\"mdl-cell mdl-cell--2-col\">
            ";
        // line 13
        $this->displayBlock('rrplatform_search', $context, $blocks);
        // line 16
        echo "        </div>
        <div class=\"mdl-cell mdl-cell--10-col\">

            <div class=\"mdl-grid\">
                <div class=\"mdl-cell mdl-cell--2-col\">

                </div>
                <div class=\"mdl-cell mdl-cell--8-col\">
                    ";
        // line 24
        $this->displayBlock('fos_user', $context, $blocks);
        // line 26
        echo "                    ";
        if (array_key_exists("listRestaurants", $context)) {
            // line 27
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listRestaurants"]) ? $context["listRestaurants"] : $this->getContext($context, "listRestaurants")));
            foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
                // line 28
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["restaurant"], "nom", array()), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    ";
        }
        // line 31
        echo "                </div>
            </div>
            ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        </div>

    </div>
";
        
        $__internal_d51e72e819aa0e17e6c042b63b0aac81fe9d8de14075ff74e4d19d92443df661->leave($__internal_d51e72e819aa0e17e6c042b63b0aac81fe9d8de14075ff74e4d19d92443df661_prof);

    }

    // line 13
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_31828bc04f72a8189a2a3e806e053c497d5cce49e08ccc0b3063dd89c58ca7e9 = $this->env->getExtension("native_profiler");
        $__internal_31828bc04f72a8189a2a3e806e053c497d5cce49e08ccc0b3063dd89c58ca7e9->enter($__internal_31828bc04f72a8189a2a3e806e053c497d5cce49e08ccc0b3063dd89c58ca7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 14
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RRCoreBundle:Default:searchFormFull", array()));
        echo "
            ";
        
        $__internal_31828bc04f72a8189a2a3e806e053c497d5cce49e08ccc0b3063dd89c58ca7e9->leave($__internal_31828bc04f72a8189a2a3e806e053c497d5cce49e08ccc0b3063dd89c58ca7e9_prof);

    }

    // line 24
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_199cd2616fdd27cddf528202100b0510df6744d5647af0c6dff03c57d439c87f = $this->env->getExtension("native_profiler");
        $__internal_199cd2616fdd27cddf528202100b0510df6744d5647af0c6dff03c57d439c87f->enter($__internal_199cd2616fdd27cddf528202100b0510df6744d5647af0c6dff03c57d439c87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 25
        echo "                    ";
        
        $__internal_199cd2616fdd27cddf528202100b0510df6744d5647af0c6dff03c57d439c87f->leave($__internal_199cd2616fdd27cddf528202100b0510df6744d5647af0c6dff03c57d439c87f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1707c38d5acf0a2ad6e89a268783c1d7945cd6bd3859a820fe8ae69de22d1e4 = $this->env->getExtension("native_profiler");
        $__internal_e1707c38d5acf0a2ad6e89a268783c1d7945cd6bd3859a820fe8ae69de22d1e4->enter($__internal_e1707c38d5acf0a2ad6e89a268783c1d7945cd6bd3859a820fe8ae69de22d1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "            ";
        
        $__internal_e1707c38d5acf0a2ad6e89a268783c1d7945cd6bd3859a820fe8ae69de22d1e4->leave($__internal_e1707c38d5acf0a2ad6e89a268783c1d7945cd6bd3859a820fe8ae69de22d1e4_prof);

    }

    public function getTemplateName()
    {
        return "RRCoreBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 34,  153 => 33,  146 => 25,  140 => 24,  130 => 14,  124 => 13,  114 => 35,  112 => 33,  108 => 31,  105 => 30,  96 => 28,  91 => 27,  88 => 26,  86 => 24,  76 => 16,  74 => 13,  70 => 11,  64 => 10,  56 => 7,  50 => 6,  39 => 4,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* {% block javascript %}*/
/* {% endblock %}*/
/* {% block title %}*/
/*   Resto'Regimes*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="mdl-grid">*/
/*         <div class="mdl-cell mdl-cell--2-col">*/
/*             {% block rrplatform_search %}*/
/*                 {{ render(controller('RRCoreBundle:Default:searchFormFull', {})) }}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="mdl-cell mdl-cell--10-col">*/
/* */
/*             <div class="mdl-grid">*/
/*                 <div class="mdl-cell mdl-cell--2-col">*/
/* */
/*                 </div>*/
/*                 <div class="mdl-cell mdl-cell--8-col">*/
/*                     {% block fos_user %}*/
/*                     {% endblock fos_user %}*/
/*                     {% if listRestaurants is defined %}*/
/*                     {% for restaurant in listRestaurants %}*/
/*                         {{ restaurant.nom }}*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
