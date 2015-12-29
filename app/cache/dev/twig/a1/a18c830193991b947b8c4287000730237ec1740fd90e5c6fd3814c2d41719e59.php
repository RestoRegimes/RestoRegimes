<?php

/* IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig */
class __TwigTemplate_b277f7f2068b5cd524ea40c7f34d78ca3230d269cd72c012688c9d97d81d301a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'places_autocomplete_widget' => array($this, 'block_places_autocomplete_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caa01e17f1407dfb9742c5e663ba15c114679d8c9852bcfec1e26544a53bc553 = $this->env->getExtension("native_profiler");
        $__internal_caa01e17f1407dfb9742c5e663ba15c114679d8c9852bcfec1e26544a53bc553->enter($__internal_caa01e17f1407dfb9742c5e663ba15c114679d8c9852bcfec1e26544a53bc553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('places_autocomplete_widget', $context, $blocks);
        
        $__internal_caa01e17f1407dfb9742c5e663ba15c114679d8c9852bcfec1e26544a53bc553->leave($__internal_caa01e17f1407dfb9742c5e663ba15c114679d8c9852bcfec1e26544a53bc553_prof);

    }

    public function block_places_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_20de508585d48b4f6a459af22c860238cb8d8a59a75105cdbfbaf2a02826f1e5 = $this->env->getExtension("native_profiler");
        $__internal_20de508585d48b4f6a459af22c860238cb8d8a59a75105cdbfbaf2a02826f1e5->enter($__internal_20de508585d48b4f6a459af22c860238cb8d8a59a75105cdbfbaf2a02826f1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "places_autocomplete_widget"));

        // line 2
        echo "    ";
        echo (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html"));
        echo "
    ";
        // line 3
        echo (isset($context["javascripts"]) ? $context["javascripts"] : $this->getContext($context, "javascripts"));
        echo "
";
        
        $__internal_20de508585d48b4f6a459af22c860238cb8d8a59a75105cdbfbaf2a02826f1e5->leave($__internal_20de508585d48b4f6a459af22c860238cb8d8a59a75105cdbfbaf2a02826f1e5_prof);

    }

    public function getTemplateName()
    {
        return "IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block places_autocomplete_widget %}*/
/*     {{ html | raw }}*/
/*     {{ javascripts | raw }}*/
/* {% endblock %}*/
/* */
