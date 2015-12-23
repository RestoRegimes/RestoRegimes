<?php

/* RRCoreBundle:Default:search.html.twig */
class __TwigTemplate_70dbd1077a7e8f5d4812b5e58a5473231d50515066bf66464fd7810a0bbc28d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RRCoreBundle:Default:layout.html.twig", "RRCoreBundle:Default:search.html.twig", 1);
        $this->blocks = array(
            'rrplatform_body' => array($this, 'block_rrplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RRCoreBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4a5adab4ff1eb743e07a9c3a552bf2cb0902cb4930b23631bd3e96a9b4353ee = $this->env->getExtension("native_profiler");
        $__internal_d4a5adab4ff1eb743e07a9c3a552bf2cb0902cb4930b23631bd3e96a9b4353ee->enter($__internal_d4a5adab4ff1eb743e07a9c3a552bf2cb0902cb4930b23631bd3e96a9b4353ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRCoreBundle:Default:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4a5adab4ff1eb743e07a9c3a552bf2cb0902cb4930b23631bd3e96a9b4353ee->leave($__internal_d4a5adab4ff1eb743e07a9c3a552bf2cb0902cb4930b23631bd3e96a9b4353ee_prof);

    }

    // line 2
    public function block_rrplatform_body($context, array $blocks = array())
    {
        $__internal_128b00694c7309ea7f7757437d95ab3a528cd92f9844bfd74824ac5e6c454065 = $this->env->getExtension("native_profiler");
        $__internal_128b00694c7309ea7f7757437d95ab3a528cd92f9844bfd74824ac5e6c454065->enter($__internal_128b00694c7309ea7f7757437d95ab3a528cd92f9844bfd74824ac5e6c454065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_body"));

        // line 3
        echo "




<div class=\"container-fluid\">
    <div class=\"row-fluid\">
        <div class=\"span12\">
        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'row');
        echo "<br>
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "radius", array()), 'row');
        echo "<br>

        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetarien", array()), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetarien", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetarien", array()), 'label', array("label" => "Vegetarien"));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetalien", array()), 'errors');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetalien", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetalien", array()), 'label', array("label" => "Vegetalien"));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gluten", array()), 'errors');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gluten", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gluten", array()), 'label', array("label" => "Sans gluten"));
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diabete", array()), 'errors');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diabete", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diabete", array()), 'label', array("label" => "Diabete"));
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cholesterol", array()), 'errors');
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cholesterol", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cholesterol", array()), 'label', array("label" => "cholesterol"));
        echo "<br>



        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 37
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>

    </div>
</div>
<div>
    ";
        // line 43
        if (array_key_exists("listRestaurants", $context)) {
            // line 44
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listRestaurants"]) ? $context["listRestaurants"] : $this->getContext($context, "listRestaurants")));
            foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
                // line 45
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["restaurant"], "nom", array()), "html", null, true);
                echo "<br>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    ";
        }
        // line 48
        echo "</div>

";
        
        $__internal_128b00694c7309ea7f7757437d95ab3a528cd92f9844bfd74824ac5e6c454065->leave($__internal_128b00694c7309ea7f7757437d95ab3a528cd92f9844bfd74824ac5e6c454065_prof);

    }

    public function getTemplateName()
    {
        return "RRCoreBundle:Default:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 48,  161 => 47,  152 => 45,  147 => 44,  145 => 43,  135 => 37,  130 => 34,  123 => 30,  119 => 29,  115 => 28,  111 => 27,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  62 => 14,  58 => 13,  54 => 12,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "RRCoreBundle:Default:layout.html.twig" %}*/
/* {% block rrplatform_body %}*/
/* */
/* */
/* */
/* */
/* */
/* <div class="container-fluid">*/
/*     <div class="row-fluid">*/
/*         <div class="span12">*/
/*         {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*         {{ form_errors(form) }}*/
/*         {{ form_row(form.recherche) }}<br>*/
/*         {{ form_row(form.radius) }}<br>*/
/* */
/*         {{ form_errors(form.vegetarien) }}*/
/*         {{ form_widget(form.vegetarien, {'attr': {'class': 'form-control'}}) }}*/
/*         {{ form_label(form.vegetarien, "Vegetarien") }}*/
/*         {{ form_errors(form.vegetalien) }}*/
/*         {{ form_widget(form.vegetalien, {'attr': {'class': 'form-control'}}) }}*/
/*         {{ form_label(form.vegetalien, "Vegetalien") }}*/
/*         {{ form_errors(form.gluten) }}*/
/*         {{ form_widget(form.gluten, {'attr': {'class': 'form-control'}}) }}*/
/*         {{ form_label(form.gluten, "Sans gluten") }}*/
/*         {{ form_errors(form.diabete) }}*/
/*         {{ form_widget(form.diabete, {'attr': {'class': 'form-control'}}) }}*/
/*         {{ form_label(form.diabete, "Diabete") }}*/
/*         {{ form_errors(form.Cholesterol) }}*/
/*         {{ form_widget(form.Cholesterol, {'attr': {'class': 'form-control'}}) }}*/
/*         {{ form_label(form.Cholesterol, "cholesterol") }}<br>*/
/* */
/* */
/* */
/*         {{ form_rest(form) }}*/
/* */
/*         {# Fermeture de la balise <form> du formulaire HTML #}*/
/*         {{ form_end(form) }}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* <div>*/
/*     {% if listRestaurants is defined %}*/
/*         {% for restaurant in listRestaurants %}*/
/*             {{ restaurant.nom }}<br>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
