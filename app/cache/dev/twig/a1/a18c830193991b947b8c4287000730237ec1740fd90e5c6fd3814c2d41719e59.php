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
        $__internal_315e9d6c97b1094880b412d15c823c1d043b5a88cb1558943d2c85e690b7d4e0 = $this->env->getExtension("native_profiler");
        $__internal_315e9d6c97b1094880b412d15c823c1d043b5a88cb1558943d2c85e690b7d4e0->enter($__internal_315e9d6c97b1094880b412d15c823c1d043b5a88cb1558943d2c85e690b7d4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('places_autocomplete_widget', $context, $blocks);
        
        $__internal_315e9d6c97b1094880b412d15c823c1d043b5a88cb1558943d2c85e690b7d4e0->leave($__internal_315e9d6c97b1094880b412d15c823c1d043b5a88cb1558943d2c85e690b7d4e0_prof);

    }

    public function block_places_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_d514c18515da86b852a0f45fff20c242ff013cbf52bcd4fe839a6df43fc039bd = $this->env->getExtension("native_profiler");
        $__internal_d514c18515da86b852a0f45fff20c242ff013cbf52bcd4fe839a6df43fc039bd->enter($__internal_d514c18515da86b852a0f45fff20c242ff013cbf52bcd4fe839a6df43fc039bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "places_autocomplete_widget"));

        // line 2
        echo "    ";
        echo (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html"));
        echo "
    ";
        // line 3
        echo (isset($context["javascripts"]) ? $context["javascripts"] : $this->getContext($context, "javascripts"));
        echo "
";
        
        $__internal_d514c18515da86b852a0f45fff20c242ff013cbf52bcd4fe839a6df43fc039bd->leave($__internal_d514c18515da86b852a0f45fff20c242ff013cbf52bcd4fe839a6df43fc039bd_prof);

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
