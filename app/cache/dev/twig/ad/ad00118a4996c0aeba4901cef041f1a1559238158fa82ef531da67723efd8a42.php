<?php

/* RRRestaurantBundle::layout.html.twig */
class __TwigTemplate_d2542da1dbd028be1bd2d8ec02e7aa4c5f4a066eafbb9d78cc539da33cda4ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "RRRestaurantBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'rrrestaurant_body' => array($this, 'block_rrrestaurant_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f619322e364fcdd1aed5d47b671723f815e046a500b6bde0a171c63720e6bfd = $this->env->getExtension("native_profiler");
        $__internal_7f619322e364fcdd1aed5d47b671723f815e046a500b6bde0a171c63720e6bfd->enter($__internal_7f619322e364fcdd1aed5d47b671723f815e046a500b6bde0a171c63720e6bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f619322e364fcdd1aed5d47b671723f815e046a500b6bde0a171c63720e6bfd->leave($__internal_7f619322e364fcdd1aed5d47b671723f815e046a500b6bde0a171c63720e6bfd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_03af5b2c008aa126a2bd90c6f96abf695863282945a7c42eb052ebf0abadd50e = $this->env->getExtension("native_profiler");
        $__internal_03af5b2c008aa126a2bd90c6f96abf695863282945a7c42eb052ebf0abadd50e->enter($__internal_03af5b2c008aa126a2bd90c6f96abf695863282945a7c42eb052ebf0abadd50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Restaurants - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_03af5b2c008aa126a2bd90c6f96abf695863282945a7c42eb052ebf0abadd50e->leave($__internal_03af5b2c008aa126a2bd90c6f96abf695863282945a7c42eb052ebf0abadd50e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0b66715a9a246fe05f1394c98526849d6ec893b2d0615b86d4a0acc27ef8df7 = $this->env->getExtension("native_profiler");
        $__internal_a0b66715a9a246fe05f1394c98526849d6ec893b2d0615b86d4a0acc27ef8df7->enter($__internal_a0b66715a9a246fe05f1394c98526849d6ec893b2d0615b86d4a0acc27ef8df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    <h1>Restaurants</h1>

    <hr>

    ";
        // line 17
        echo "    ";
        $this->displayBlock('rrrestaurant_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_a0b66715a9a246fe05f1394c98526849d6ec893b2d0615b86d4a0acc27ef8df7->leave($__internal_a0b66715a9a246fe05f1394c98526849d6ec893b2d0615b86d4a0acc27ef8df7_prof);

    }

    // line 17
    public function block_rrrestaurant_body($context, array $blocks = array())
    {
        $__internal_a6bd6e8a3c87f12113ab095bb5a3da51388bb7fcd9f5cf53f5f2114594fc5fae = $this->env->getExtension("native_profiler");
        $__internal_a6bd6e8a3c87f12113ab095bb5a3da51388bb7fcd9f5cf53f5f2114594fc5fae->enter($__internal_a6bd6e8a3c87f12113ab095bb5a3da51388bb7fcd9f5cf53f5f2114594fc5fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrrestaurant_body"));

        // line 18
        echo "    ";
        
        $__internal_a6bd6e8a3c87f12113ab095bb5a3da51388bb7fcd9f5cf53f5f2114594fc5fae->leave($__internal_a6bd6e8a3c87f12113ab095bb5a3da51388bb7fcd9f5cf53f5f2114594fc5fae_prof);

    }

    public function getTemplateName()
    {
        return "RRRestaurantBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Restaurants - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*     <h1>Restaurants</h1>*/
/* */
/*     <hr>*/
/* */
/*     {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*     {% block rrrestaurant_body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
