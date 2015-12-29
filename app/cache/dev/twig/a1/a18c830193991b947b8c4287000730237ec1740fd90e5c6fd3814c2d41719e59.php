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
        $__internal_d6b4dff38bba819ccdf83e3caffc0fbbe85adfb0e07d4493568b2cfebffdd138 = $this->env->getExtension("native_profiler");
        $__internal_d6b4dff38bba819ccdf83e3caffc0fbbe85adfb0e07d4493568b2cfebffdd138->enter($__internal_d6b4dff38bba819ccdf83e3caffc0fbbe85adfb0e07d4493568b2cfebffdd138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('places_autocomplete_widget', $context, $blocks);
        
        $__internal_d6b4dff38bba819ccdf83e3caffc0fbbe85adfb0e07d4493568b2cfebffdd138->leave($__internal_d6b4dff38bba819ccdf83e3caffc0fbbe85adfb0e07d4493568b2cfebffdd138_prof);

    }

    public function block_places_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_455d384795a82aab549e1fd658f54f24ef30a29f1b570853dffa645c426e98af = $this->env->getExtension("native_profiler");
        $__internal_455d384795a82aab549e1fd658f54f24ef30a29f1b570853dffa645c426e98af->enter($__internal_455d384795a82aab549e1fd658f54f24ef30a29f1b570853dffa645c426e98af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "places_autocomplete_widget"));

        // line 2
        echo "    ";
        echo (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html"));
        echo "
    ";
        // line 3
        echo (isset($context["javascripts"]) ? $context["javascripts"] : $this->getContext($context, "javascripts"));
        echo "
";
        
        $__internal_455d384795a82aab549e1fd658f54f24ef30a29f1b570853dffa645c426e98af->leave($__internal_455d384795a82aab549e1fd658f54f24ef30a29f1b570853dffa645c426e98af_prof);

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
