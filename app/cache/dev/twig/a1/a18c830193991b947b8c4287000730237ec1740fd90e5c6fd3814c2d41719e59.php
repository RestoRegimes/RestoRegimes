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
        $__internal_156251889e20b316712f0a5fe94c39839e402498b3a2068d169b806f6366bf1f = $this->env->getExtension("native_profiler");
        $__internal_156251889e20b316712f0a5fe94c39839e402498b3a2068d169b806f6366bf1f->enter($__internal_156251889e20b316712f0a5fe94c39839e402498b3a2068d169b806f6366bf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('places_autocomplete_widget', $context, $blocks);
        
        $__internal_156251889e20b316712f0a5fe94c39839e402498b3a2068d169b806f6366bf1f->leave($__internal_156251889e20b316712f0a5fe94c39839e402498b3a2068d169b806f6366bf1f_prof);

    }

    public function block_places_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_9fba7990624c864c869970d521b5025d8614dc68f975c84565b363557695720e = $this->env->getExtension("native_profiler");
        $__internal_9fba7990624c864c869970d521b5025d8614dc68f975c84565b363557695720e->enter($__internal_9fba7990624c864c869970d521b5025d8614dc68f975c84565b363557695720e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "places_autocomplete_widget"));

        // line 2
        echo "    ";
        echo (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html"));
        echo "
    ";
        // line 3
        echo (isset($context["javascripts"]) ? $context["javascripts"] : $this->getContext($context, "javascripts"));
        echo "
";
        
        $__internal_9fba7990624c864c869970d521b5025d8614dc68f975c84565b363557695720e->leave($__internal_9fba7990624c864c869970d521b5025d8614dc68f975c84565b363557695720e_prof);

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
