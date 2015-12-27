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
            'rrplatform_search' => array($this, 'block_rrplatform_search'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RRCoreBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61d58f28c724fcb8989dbd52993d1795189ebe1acc0245fd1d10d71c7ed1d268 = $this->env->getExtension("native_profiler");
        $__internal_61d58f28c724fcb8989dbd52993d1795189ebe1acc0245fd1d10d71c7ed1d268->enter($__internal_61d58f28c724fcb8989dbd52993d1795189ebe1acc0245fd1d10d71c7ed1d268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRCoreBundle:Default:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61d58f28c724fcb8989dbd52993d1795189ebe1acc0245fd1d10d71c7ed1d268->leave($__internal_61d58f28c724fcb8989dbd52993d1795189ebe1acc0245fd1d10d71c7ed1d268_prof);

    }

    // line 2
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_f2288549c2df64d307cc06733ecf0204d8380d52a0315dc351936c536df98be4 = $this->env->getExtension("native_profiler");
        $__internal_f2288549c2df64d307cc06733ecf0204d8380d52a0315dc351936c536df98be4->enter($__internal_f2288549c2df64d307cc06733ecf0204d8380d52a0315dc351936c536df98be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 15
        echo "
            <p id=\"demo\"></p>
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-vertical")));
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div id=\"adresse\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'errors');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget', array("attr" => array("class" => "mdl-textfield__input", "placeholder" => "Adresse")));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'label', array("label" => " "));
        echo "</div>

        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "geo", array()), 'errors');
        echo "
        <label class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect\" for=\"form_geo\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "geo", array()), 'widget', array("attr" => array("class" => "mdl-checkbox__input", "onclick" => "getLocation()")));
        echo "
            <span class=\"mdl-checkbox__label\"><b id=\"geo\">Se Geolocaliser</b></span>

        </label>

        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "radius", array()), 'errors');
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "radius", array()), 'widget', array("attr" => array("class" => "mdl-textfield__input", "placeholder" => "Rayon de recherche (km)")));
        echo "
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "radius", array()), 'label', array("label" => " "));
        echo "
        <br>
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetarien", array()), 'errors');
        echo "
        <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\" for=\"form_vegetarien\">
            <span class=\"mdl-switch__label\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetarien", array()), 'label', array("label" => "Vegetarien"));
        echo "</span>
            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetarien", array()), 'widget', array("attr" => array("class" => "mdl-switch__input")));
        echo "
        </label> <br><br>
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetalien", array()), 'errors');
        echo "
        <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\" for=\"form_vegetalien\">
            <span class=\"mdl-switch__label\">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetalien", array()), 'label', array("label" => "Vegetalien"));
        echo "</span>
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetalien", array()), 'widget', array("attr" => array("class" => "mdl-switch__input")));
        echo "
        </label> <br><br>
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gluten", array()), 'errors');
        echo "
        <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\" for=\"form_gluten\">
            <span class=\"mdl-switch__label\">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gluten", array()), 'label', array("label" => "Sans gluten"));
        echo "</span>
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gluten", array()), 'widget', array("attr" => array("class" => "mdl-switch__input")));
        echo "
        </label> <br><br>

        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diabete", array()), 'errors');
        echo "
        <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\" for=\"form_diabete\">
            <span class=\"mdl-switch__label\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diabete", array()), 'label', array("label" => "Diabete"));
        echo "</span>
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diabete", array()), 'widget', array("attr" => array("class" => "mdl-switch__input")));
        echo "
        </label> <br><br>

        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cholesterol", array()), 'errors');
        echo "
        <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\" for=\"form_Cholesterol\">
            <span class=\"mdl-switch__label\">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cholesterol", array()), 'label', array("label" => "cholesterol"));
        echo "</span>
            ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cholesterol", array()), 'widget', array("attr" => array("class" => "mdl-switch__input")));
        echo "
        </label> <br><br>

        <button class=\"mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored\">
            <i class=\"material-icons\">search</i>
        </button>

        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 70
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<div>
    ";
        // line 73
        if (array_key_exists("listRestaurants", $context)) {
            // line 74
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listRestaurants"]) ? $context["listRestaurants"] : $this->getContext($context, "listRestaurants")));
            foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
                // line 75
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["restaurant"], "nom", array()), "html", null, true);
                echo "<br>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "    ";
        }
        // line 78
        echo "</div>


    <script>
        var x = document.getElementById(\"form_lng\");
        var y = document.getElementById(\"form_lat\");
        var z = document.getElementById(\"geo\");
        var a = document.getElementById(\"adresse\");
        var ad= document.getElementById(\"form_recherche\");
        var click=false;

        function getLocation() {
            if(!click){
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    z.innerHTML = \"La Geolocation n'est pas supportée par le navigateur.\";
                }
                click=true;
            }else{
                x.value = \"\";
                y.value = \"\";
                z.innerHTML = \"Se Geolocaliser\";
                a.style.visibility = 'visible';
                ad.value = \"\";
                click=false;
            }
        }

        function showPosition(position) {
            x.value = position.coords.latitude;
            y.value = position.coords.longitude;
            z.innerHTML = \"Addresse trouvée\";
            a.style.visibility = 'hidden';
            ad.value = \"\";
        }
    </script>

";
        
        $__internal_f2288549c2df64d307cc06733ecf0204d8380d52a0315dc351936c536df98be4->leave($__internal_f2288549c2df64d307cc06733ecf0204d8380d52a0315dc351936c536df98be4_prof);

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
        return array (  200 => 78,  197 => 77,  188 => 75,  183 => 74,  181 => 73,  174 => 70,  169 => 67,  159 => 60,  155 => 59,  150 => 57,  144 => 54,  140 => 53,  135 => 51,  129 => 48,  125 => 47,  120 => 45,  115 => 43,  111 => 42,  106 => 40,  101 => 38,  97 => 37,  92 => 35,  87 => 33,  83 => 32,  79 => 31,  71 => 26,  66 => 24,  61 => 22,  57 => 21,  53 => 20,  48 => 18,  44 => 17,  40 => 15,  34 => 2,  11 => 1,);
    }
}
/* {% extends "RRCoreBundle:Default:layout.html.twig" %}*/
/* {% block rrplatform_search %}*/
/* {# data form*/
/* {% if data is defined %}*/
/*     lat:{{ data.lat }}<br>*/
/*     lng: {{ data.lng }}<br>*/
/*     veg:{{ data.vegetarien }}<br>*/
/*     vegl:{{ data.vegetalien }}<br>*/
/*     glu:{{ data.gluten }}<br>*/
/*     dia:{{ data.diabete }}<br>*/
/*     cho:{{ data.Cholesterol }}<br>*/
/*     rech:{{ data.recherche }}<br>*/
/*     rad:{{ data.radius }}<br>*/
/* {% endif %}#}*/
/* */
/*             <p id="demo"></p>*/
/*         {{ form_start(form, {'attr': {'class': 'form-vertical'}}) }}*/
/*         {{ form_errors(form) }}*/
/*     <div id="adresse">*/
/*         {{ form_errors(form.recherche) }}*/
/*         {{ form_widget(form.recherche, {'attr': {'class': 'mdl-textfield__input','placeholder':'Adresse'}}) }}*/
/*         {{ form_label(form.recherche, " ") }}</div>*/
/* */
/*         {{ form_errors(form.geo) }}*/
/*         <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="form_geo">*/
/*             {{ form_widget(form.geo, {'attr': {'class': 'mdl-checkbox__input','onclick':"getLocation()"}}) }}*/
/*             <span class="mdl-checkbox__label"><b id="geo">Se Geolocaliser</b></span>*/
/* */
/*         </label>*/
/* */
/*         {{ form_errors(form.radius) }}*/
/*         {{ form_widget(form.radius, {'attr': {'class': 'mdl-textfield__input','placeholder':'Rayon de recherche (km)'}}) }}*/
/*         {{ form_label(form.radius, " ") }}*/
/*         <br>*/
/*         {{ form_errors(form.vegetarien) }}*/
/*         <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="form_vegetarien">*/
/*             <span class="mdl-switch__label">{{ form_label(form.vegetarien, "Vegetarien") }}</span>*/
/*             {{ form_widget(form.vegetarien, {'attr': {'class': 'mdl-switch__input'}}) }}*/
/*         </label> <br><br>*/
/*         {{ form_errors(form.vegetalien) }}*/
/*         <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="form_vegetalien">*/
/*             <span class="mdl-switch__label">{{ form_label(form.vegetalien, "Vegetalien") }}</span>*/
/*             {{ form_widget(form.vegetalien, {'attr': {'class': 'mdl-switch__input'}}) }}*/
/*         </label> <br><br>*/
/*         {{ form_errors(form.gluten) }}*/
/*         <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="form_gluten">*/
/*             <span class="mdl-switch__label">{{ form_label(form.gluten, "Sans gluten") }}</span>*/
/*             {{ form_widget(form.gluten, {'attr': {'class': 'mdl-switch__input'}}) }}*/
/*         </label> <br><br>*/
/* */
/*         {{ form_errors(form.diabete) }}*/
/*         <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="form_diabete">*/
/*             <span class="mdl-switch__label">{{ form_label(form.diabete, "Diabete") }}</span>*/
/*             {{ form_widget(form.diabete, {'attr': {'class': 'mdl-switch__input'}}) }}*/
/*         </label> <br><br>*/
/* */
/*         {{ form_errors(form.Cholesterol) }}*/
/*         <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="form_Cholesterol">*/
/*             <span class="mdl-switch__label">{{ form_label(form.Cholesterol, "cholesterol") }}</span>*/
/*             {{ form_widget(form.Cholesterol, {'attr': {'class': 'mdl-switch__input'}}) }}*/
/*         </label> <br><br>*/
/* */
/*         <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">*/
/*             <i class="material-icons">search</i>*/
/*         </button>*/
/* */
/*         {{ form_rest(form) }}*/
/* */
/*         {# Fermeture de la balise <form> du formulaire HTML #}*/
/*         {{ form_end(form) }}*/
/* */
/* <div>*/
/*     {% if listRestaurants is defined %}*/
/*         {% for restaurant in listRestaurants %}*/
/*             {{ restaurant.nom }}<br>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* </div>*/
/* */
/* */
/*     <script>*/
/*         var x = document.getElementById("form_lng");*/
/*         var y = document.getElementById("form_lat");*/
/*         var z = document.getElementById("geo");*/
/*         var a = document.getElementById("adresse");*/
/*         var ad= document.getElementById("form_recherche");*/
/*         var click=false;*/
/* */
/*         function getLocation() {*/
/*             if(!click){*/
/*                 if (navigator.geolocation) {*/
/*                     navigator.geolocation.getCurrentPosition(showPosition);*/
/*                 } else {*/
/*                     z.innerHTML = "La Geolocation n'est pas supportée par le navigateur.";*/
/*                 }*/
/*                 click=true;*/
/*             }else{*/
/*                 x.value = "";*/
/*                 y.value = "";*/
/*                 z.innerHTML = "Se Geolocaliser";*/
/*                 a.style.visibility = 'visible';*/
/*                 ad.value = "";*/
/*                 click=false;*/
/*             }*/
/*         }*/
/* */
/*         function showPosition(position) {*/
/*             x.value = position.coords.latitude;*/
/*             y.value = position.coords.longitude;*/
/*             z.innerHTML = "Addresse trouvée";*/
/*             a.style.visibility = 'hidden';*/
/*             ad.value = "";*/
/*         }*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
