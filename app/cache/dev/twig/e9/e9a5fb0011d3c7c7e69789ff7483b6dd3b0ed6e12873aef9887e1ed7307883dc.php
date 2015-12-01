<?php

/* RRRestaurantBundle:Restaurant:add.html.twig */
class __TwigTemplate_f6af9fff53554e81d9cf87e776c9cdc7e8415c160e4ccd5fdd3a7b6216c73d71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("RRRestaurantBundle::layout.html.twig", "RRRestaurantBundle:Restaurant:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RRRestaurantBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59bca25aafaabc1a76776e83bdf786a9d3748ace98d47d0a090ad346c5e88bc4 = $this->env->getExtension("native_profiler");
        $__internal_59bca25aafaabc1a76776e83bdf786a9d3748ace98d47d0a090ad346c5e88bc4->enter($__internal_59bca25aafaabc1a76776e83bdf786a9d3748ace98d47d0a090ad346c5e88bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle:Restaurant:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59bca25aafaabc1a76776e83bdf786a9d3748ace98d47d0a090ad346c5e88bc4->leave($__internal_59bca25aafaabc1a76776e83bdf786a9d3748ace98d47d0a090ad346c5e88bc4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2638cd632c98b5cfee79bab75393ae8adbde33fe536a336681cdd09454a8adc7 = $this->env->getExtension("native_profiler");
        $__internal_2638cd632c98b5cfee79bab75393ae8adbde33fe536a336681cdd09454a8adc7->enter($__internal_2638cd632c98b5cfee79bab75393ae8adbde33fe536a336681cdd09454a8adc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    ";
        // line 7
        if ((array_key_exists("action", $context) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "add"))) {
            // line 8
            echo "        <h2>Ajouter un restaurant</h2>
    ";
        } else {
            // line 10
            echo "        <h2>Modifier un restaurant</h2>
    ";
        }
        // line 12
        echo "    ";
        if ( !array_key_exists("action", $context)) {
            // line 13
            echo "        ";
            echo twig_include($this->env, $context, "RRRestaurantBundle:Restaurant:form.html.twig");
            echo "
    ";
        } elseif ((        // line 14
(isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "horaires")) {
            // line 15
            echo "        ";
            echo twig_include($this->env, $context, "RRRestaurantBundle:Restaurant:formHoraires.html.twig");
            echo "
    ";
        } elseif ((        // line 16
(isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "images")) {
            // line 17
            echo "        ";
            echo twig_include($this->env, $context, "RRRestaurantBundle:Restaurant:formImages.html.twig");
            echo "
    ";
        }
        // line 19
        echo "
    <p>
        Attention : ce restaurant sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
        
        $__internal_2638cd632c98b5cfee79bab75393ae8adbde33fe536a336681cdd09454a8adc7->leave($__internal_2638cd632c98b5cfee79bab75393ae8adbde33fe536a336681cdd09454a8adc7_prof);

    }

    public function getTemplateName()
    {
        return "RRRestaurantBundle:Restaurant:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  70 => 17,  68 => 16,  63 => 15,  61 => 14,  56 => 13,  53 => 12,  49 => 10,  45 => 8,  43 => 7,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "RRRestaurantBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     {% if action is defined and action=="add" %}*/
/*         <h2>Ajouter un restaurant</h2>*/
/*     {% else %}*/
/*         <h2>Modifier un restaurant</h2>*/
/*     {% endif %}*/
/*     {% if action is not defined %}*/
/*         {{ include("RRRestaurantBundle:Restaurant:form.html.twig") }}*/
/*     {% elseif action=="horaires" %}*/
/*         {{ include("RRRestaurantBundle:Restaurant:formHoraires.html.twig") }}*/
/*     {% elseif action=="images" %}*/
/*         {{ include("RRRestaurantBundle:Restaurant:formImages.html.twig") }}*/
/*     {% endif %}*/
/* */
/*     <p>*/
/*         Attention : ce restaurant sera ajoutée directement*/
/*         sur la page d'accueil après validation du formulaire.*/
/*     </p>*/
/* */
/* {% endblock %}*/
