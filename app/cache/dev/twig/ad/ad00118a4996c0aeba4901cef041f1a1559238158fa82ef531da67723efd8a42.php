<?php

/* RRRestaurantBundle::layout.html.twig */
class __TwigTemplate_d2542da1dbd028be1bd2d8ec02e7aa4c5f4a066eafbb9d78cc539da33cda4ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "RRRestaurantBundle::layout.html.twig", 2);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'title' => array($this, 'block_title'),
            'adds' => array($this, 'block_adds'),
            'rrplatform_search' => array($this, 'block_rrplatform_search'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11445f17912ccf55c0da4c166e1d9f506f2ebb8aec0b9b2877add294d063153a = $this->env->getExtension("native_profiler");
        $__internal_11445f17912ccf55c0da4c166e1d9f506f2ebb8aec0b9b2877add294d063153a->enter($__internal_11445f17912ccf55c0da4c166e1d9f506f2ebb8aec0b9b2877add294d063153a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11445f17912ccf55c0da4c166e1d9f506f2ebb8aec0b9b2877add294d063153a->leave($__internal_11445f17912ccf55c0da4c166e1d9f506f2ebb8aec0b9b2877add294d063153a_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c10862235d256b5eab2abb0822a2d362cb59ef7b03ed50c77d821b0376db9ea3 = $this->env->getExtension("native_profiler");
        $__internal_c10862235d256b5eab2abb0822a2d362cb59ef7b03ed50c77d821b0376db9ea3->enter($__internal_c10862235d256b5eab2abb0822a2d362cb59ef7b03ed50c77d821b0376db9ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_c10862235d256b5eab2abb0822a2d362cb59ef7b03ed50c77d821b0376db9ea3->leave($__internal_c10862235d256b5eab2abb0822a2d362cb59ef7b03ed50c77d821b0376db9ea3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9af6f8566f5e1a1d3338c740c9c798eed723963a48f020c8ce6bdae270ff5a43 = $this->env->getExtension("native_profiler");
        $__internal_9af6f8566f5e1a1d3338c740c9c798eed723963a48f020c8ce6bdae270ff5a43->enter($__internal_9af6f8566f5e1a1d3338c740c9c798eed723963a48f020c8ce6bdae270ff5a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Resto'Regimes
";
        
        $__internal_9af6f8566f5e1a1d3338c740c9c798eed723963a48f020c8ce6bdae270ff5a43->leave($__internal_9af6f8566f5e1a1d3338c740c9c798eed723963a48f020c8ce6bdae270ff5a43_prof);

    }

    // line 9
    public function block_adds($context, array $blocks = array())
    {
        $__internal_29f99146deb567472d20b154a0a2532e6f5c2bff5beb45b2799e6fb626f2c5e9 = $this->env->getExtension("native_profiler");
        $__internal_29f99146deb567472d20b154a0a2532e6f5c2bff5beb45b2799e6fb626f2c5e9->enter($__internal_29f99146deb567472d20b154a0a2532e6f5c2bff5beb45b2799e6fb626f2c5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adds"));

        // line 10
        echo "    <img src=\"#\" alt=\"Adds\" width=\"100%\" height=\"100px\">
";
        
        $__internal_29f99146deb567472d20b154a0a2532e6f5c2bff5beb45b2799e6fb626f2c5e9->leave($__internal_29f99146deb567472d20b154a0a2532e6f5c2bff5beb45b2799e6fb626f2c5e9_prof);

    }

    // line 13
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_efca6a0c8a661705cf2f95a841f611b8e64bc045a220976c4cbfc753b15a91c9 = $this->env->getExtension("native_profiler");
        $__internal_efca6a0c8a661705cf2f95a841f611b8e64bc045a220976c4cbfc753b15a91c9->enter($__internal_efca6a0c8a661705cf2f95a841f611b8e64bc045a220976c4cbfc753b15a91c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RRCoreBundle:Default:searchFormFull", array()));
        echo "
";
        
        $__internal_efca6a0c8a661705cf2f95a841f611b8e64bc045a220976c4cbfc753b15a91c9->leave($__internal_efca6a0c8a661705cf2f95a841f611b8e64bc045a220976c4cbfc753b15a91c9_prof);

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
        return array (  82 => 14,  76 => 13,  68 => 10,  62 => 9,  54 => 6,  48 => 5,  37 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* {% block javascript %}*/
/* {% endblock %}*/
/* {% block title %}*/
/*     Resto'Regimes*/
/* {% endblock %}*/
/* */
/* {% block adds %}*/
/*     <img src="#" alt="Adds" width="100%" height="100px">*/
/* {% endblock %}*/
/* */
/* {% block rrplatform_search %}*/
/*     {{ render(controller('RRCoreBundle:Default:searchFormFull', {})) }}*/
/* {% endblock %}*/
/* */
/* */
