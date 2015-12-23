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
        $__internal_f10266cdd44be1fb5f378a3bceff392364fbfb63d4f6e7b8d9a81aef37714ec4 = $this->env->getExtension("native_profiler");
        $__internal_f10266cdd44be1fb5f378a3bceff392364fbfb63d4f6e7b8d9a81aef37714ec4->enter($__internal_f10266cdd44be1fb5f378a3bceff392364fbfb63d4f6e7b8d9a81aef37714ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryGoogleMapBundle:Form:places_autocomplete_widget.html.twig"));

        // line 1
        $this->displayBlock('places_autocomplete_widget', $context, $blocks);
        
        $__internal_f10266cdd44be1fb5f378a3bceff392364fbfb63d4f6e7b8d9a81aef37714ec4->leave($__internal_f10266cdd44be1fb5f378a3bceff392364fbfb63d4f6e7b8d9a81aef37714ec4_prof);

    }

    public function block_places_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_522cefe2da7ead031229923453c193a7d7283066631e2e83e140fb311b0a563d = $this->env->getExtension("native_profiler");
        $__internal_522cefe2da7ead031229923453c193a7d7283066631e2e83e140fb311b0a563d->enter($__internal_522cefe2da7ead031229923453c193a7d7283066631e2e83e140fb311b0a563d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "places_autocomplete_widget"));

        // line 2
        echo "    ";
        echo (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html"));
        echo "
    ";
        // line 3
        echo (isset($context["javascripts"]) ? $context["javascripts"] : $this->getContext($context, "javascripts"));
        echo "
";
        
        $__internal_522cefe2da7ead031229923453c193a7d7283066631e2e83e140fb311b0a563d->leave($__internal_522cefe2da7ead031229923453c193a7d7283066631e2e83e140fb311b0a563d_prof);

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
