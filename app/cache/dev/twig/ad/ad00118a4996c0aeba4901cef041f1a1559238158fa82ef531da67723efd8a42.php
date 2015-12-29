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
        $__internal_569848987552914dcc2ac4cdfb5fdc6a42a82e5c6b0cc1b05b71de840ac0045a = $this->env->getExtension("native_profiler");
        $__internal_569848987552914dcc2ac4cdfb5fdc6a42a82e5c6b0cc1b05b71de840ac0045a->enter($__internal_569848987552914dcc2ac4cdfb5fdc6a42a82e5c6b0cc1b05b71de840ac0045a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_569848987552914dcc2ac4cdfb5fdc6a42a82e5c6b0cc1b05b71de840ac0045a->leave($__internal_569848987552914dcc2ac4cdfb5fdc6a42a82e5c6b0cc1b05b71de840ac0045a_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_55ca577f5eeeca21ebce2314b0c146ec49f56ff4c5e76d96839ebb11251ef494 = $this->env->getExtension("native_profiler");
        $__internal_55ca577f5eeeca21ebce2314b0c146ec49f56ff4c5e76d96839ebb11251ef494->enter($__internal_55ca577f5eeeca21ebce2314b0c146ec49f56ff4c5e76d96839ebb11251ef494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_55ca577f5eeeca21ebce2314b0c146ec49f56ff4c5e76d96839ebb11251ef494->leave($__internal_55ca577f5eeeca21ebce2314b0c146ec49f56ff4c5e76d96839ebb11251ef494_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2892ba80661a0b7865fd0b14207250839bac76d32d68832fb618e29169eb5281 = $this->env->getExtension("native_profiler");
        $__internal_2892ba80661a0b7865fd0b14207250839bac76d32d68832fb618e29169eb5281->enter($__internal_2892ba80661a0b7865fd0b14207250839bac76d32d68832fb618e29169eb5281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Resto'Regimes
";
        
        $__internal_2892ba80661a0b7865fd0b14207250839bac76d32d68832fb618e29169eb5281->leave($__internal_2892ba80661a0b7865fd0b14207250839bac76d32d68832fb618e29169eb5281_prof);

    }

    // line 9
    public function block_adds($context, array $blocks = array())
    {
        $__internal_df574a588d895d354281fc5d478f5e0c27698c6c303dec27308c25807bd21670 = $this->env->getExtension("native_profiler");
        $__internal_df574a588d895d354281fc5d478f5e0c27698c6c303dec27308c25807bd21670->enter($__internal_df574a588d895d354281fc5d478f5e0c27698c6c303dec27308c25807bd21670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adds"));

        // line 10
        echo "    <img src=\"#\" alt=\"Adds\" width=\"100%\" height=\"100px\">
";
        
        $__internal_df574a588d895d354281fc5d478f5e0c27698c6c303dec27308c25807bd21670->leave($__internal_df574a588d895d354281fc5d478f5e0c27698c6c303dec27308c25807bd21670_prof);

    }

    // line 13
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_b06359060e28cd8a0349392b3a0fbdd0a26b220d2a0d14c99389bd10ee2fc7bb = $this->env->getExtension("native_profiler");
        $__internal_b06359060e28cd8a0349392b3a0fbdd0a26b220d2a0d14c99389bd10ee2fc7bb->enter($__internal_b06359060e28cd8a0349392b3a0fbdd0a26b220d2a0d14c99389bd10ee2fc7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 14
        echo "    ";
        $this->loadTemplate("RRCoreBundle:Default:search.html.twig", "RRRestaurantBundle::layout.html.twig", 14)->display($context);
        
        $__internal_b06359060e28cd8a0349392b3a0fbdd0a26b220d2a0d14c99389bd10ee2fc7bb->leave($__internal_b06359060e28cd8a0349392b3a0fbdd0a26b220d2a0d14c99389bd10ee2fc7bb_prof);

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
/*     {% include "RRCoreBundle:Default:search.html.twig" %}*/
/* {% endblock %}*/
/* */
