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
        $__internal_52bc8e69be7754008fdfac96f2713a652eb9979ccf2de9d3092b0d4724a3e0d1 = $this->env->getExtension("native_profiler");
        $__internal_52bc8e69be7754008fdfac96f2713a652eb9979ccf2de9d3092b0d4724a3e0d1->enter($__internal_52bc8e69be7754008fdfac96f2713a652eb9979ccf2de9d3092b0d4724a3e0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52bc8e69be7754008fdfac96f2713a652eb9979ccf2de9d3092b0d4724a3e0d1->leave($__internal_52bc8e69be7754008fdfac96f2713a652eb9979ccf2de9d3092b0d4724a3e0d1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_84266934bcbe49c7fff112f92eecf6200c31f5ddf15e7fbc365555005ca93e39 = $this->env->getExtension("native_profiler");
        $__internal_84266934bcbe49c7fff112f92eecf6200c31f5ddf15e7fbc365555005ca93e39->enter($__internal_84266934bcbe49c7fff112f92eecf6200c31f5ddf15e7fbc365555005ca93e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Restaurants - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_84266934bcbe49c7fff112f92eecf6200c31f5ddf15e7fbc365555005ca93e39->leave($__internal_84266934bcbe49c7fff112f92eecf6200c31f5ddf15e7fbc365555005ca93e39_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbeb68bf68c709cb21d39a3945b68879cb4dff6e5b6ed6cedf7da8a61cf53745 = $this->env->getExtension("native_profiler");
        $__internal_cbeb68bf68c709cb21d39a3945b68879cb4dff6e5b6ed6cedf7da8a61cf53745->enter($__internal_cbeb68bf68c709cb21d39a3945b68879cb4dff6e5b6ed6cedf7da8a61cf53745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cbeb68bf68c709cb21d39a3945b68879cb4dff6e5b6ed6cedf7da8a61cf53745->leave($__internal_cbeb68bf68c709cb21d39a3945b68879cb4dff6e5b6ed6cedf7da8a61cf53745_prof);

    }

    // line 17
    public function block_rrrestaurant_body($context, array $blocks = array())
    {
        $__internal_99dc1309a52e7788c752d6db5213e605beeaa91ac88be8f0aa53adfd164ad022 = $this->env->getExtension("native_profiler");
        $__internal_99dc1309a52e7788c752d6db5213e605beeaa91ac88be8f0aa53adfd164ad022->enter($__internal_99dc1309a52e7788c752d6db5213e605beeaa91ac88be8f0aa53adfd164ad022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrrestaurant_body"));

        // line 18
        echo "    ";
        
        $__internal_99dc1309a52e7788c752d6db5213e605beeaa91ac88be8f0aa53adfd164ad022->leave($__internal_99dc1309a52e7788c752d6db5213e605beeaa91ac88be8f0aa53adfd164ad022_prof);

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
