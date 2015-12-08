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
        $__internal_8314323fdcda19245b04702c8dfd24308b32a9ca81d818f3d60e6baa98eb1e8a = $this->env->getExtension("native_profiler");
        $__internal_8314323fdcda19245b04702c8dfd24308b32a9ca81d818f3d60e6baa98eb1e8a->enter($__internal_8314323fdcda19245b04702c8dfd24308b32a9ca81d818f3d60e6baa98eb1e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('places_autocomplete_widget', $context, $blocks);
        
        $__internal_8314323fdcda19245b04702c8dfd24308b32a9ca81d818f3d60e6baa98eb1e8a->leave($__internal_8314323fdcda19245b04702c8dfd24308b32a9ca81d818f3d60e6baa98eb1e8a_prof);

    }

    public function block_places_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_4c24054752b9a6c2fa51a28f03703964d8e0f9b5f0c35531f8583e231c624790 = $this->env->getExtension("native_profiler");
        $__internal_4c24054752b9a6c2fa51a28f03703964d8e0f9b5f0c35531f8583e231c624790->enter($__internal_4c24054752b9a6c2fa51a28f03703964d8e0f9b5f0c35531f8583e231c624790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "places_autocomplete_widget"));

        // line 2
        echo "    ";
        echo (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html"));
        echo "
    ";
        // line 3
        echo (isset($context["javascripts"]) ? $context["javascripts"] : $this->getContext($context, "javascripts"));
        echo "
";
        
        $__internal_4c24054752b9a6c2fa51a28f03703964d8e0f9b5f0c35531f8583e231c624790->leave($__internal_4c24054752b9a6c2fa51a28f03703964d8e0f9b5f0c35531f8583e231c624790_prof);

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
