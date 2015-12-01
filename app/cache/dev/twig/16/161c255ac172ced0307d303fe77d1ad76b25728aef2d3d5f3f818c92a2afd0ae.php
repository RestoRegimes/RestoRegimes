<?php

/* IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig */
class __TwigTemplate_3911bb546faa6391a60cae105a2683ebea0d81431bc84ad7fae13113481dd172 extends Twig_Template
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
        $__internal_454c1986c865ecb1ba34c353fe4c46282c1f3610c3ca86123e3a461a64cea76a = $this->env->getExtension("native_profiler");
        $__internal_454c1986c865ecb1ba34c353fe4c46282c1f3610c3ca86123e3a461a64cea76a->enter($__internal_454c1986c865ecb1ba34c353fe4c46282c1f3610c3ca86123e3a461a64cea76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('places_autocomplete_widget', $context, $blocks);
        
        $__internal_454c1986c865ecb1ba34c353fe4c46282c1f3610c3ca86123e3a461a64cea76a->leave($__internal_454c1986c865ecb1ba34c353fe4c46282c1f3610c3ca86123e3a461a64cea76a_prof);

    }

    public function block_places_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_0f87f1478a1f547a75e787ee7a4eda771023d772beab76eb0c0397c6913aee78 = $this->env->getExtension("native_profiler");
        $__internal_0f87f1478a1f547a75e787ee7a4eda771023d772beab76eb0c0397c6913aee78->enter($__internal_0f87f1478a1f547a75e787ee7a4eda771023d772beab76eb0c0397c6913aee78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "places_autocomplete_widget"));

        // line 2
        echo "    ";
        echo (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html"));
        echo "
    ";
        // line 3
        echo (isset($context["javascripts"]) ? $context["javascripts"] : $this->getContext($context, "javascripts"));
        echo "
";
        
        $__internal_0f87f1478a1f547a75e787ee7a4eda771023d772beab76eb0c0397c6913aee78->leave($__internal_0f87f1478a1f547a75e787ee7a4eda771023d772beab76eb0c0397c6913aee78_prof);

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
