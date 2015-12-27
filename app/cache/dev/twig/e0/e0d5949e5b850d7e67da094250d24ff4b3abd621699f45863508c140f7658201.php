<?php

/* RRCoreBundle:Default:search.html.twig */
class __TwigTemplate_70dbd1077a7e8f5d4812b5e58a5473231d50515066bf66464fd7810a0bbc28d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3b2d2718e0eeb8b7ff8a6a6375846db07c831023eacca18e87871a9f82f1cff = $this->env->getExtension("native_profiler");
        $__internal_f3b2d2718e0eeb8b7ff8a6a6375846db07c831023eacca18e87871a9f82f1cff->enter($__internal_f3b2d2718e0eeb8b7ff8a6a6375846db07c831023eacca18e87871a9f82f1cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRCoreBundle:Default:search.html.twig"));

        // line 1
        echo "
";
        // line 14
        echo "
        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("rr_core_search")));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div id=\"adresse\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'errors');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget', array("attr" => array("class" => "mdl-textfield__input", "placeholder" => "Adresse")));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'label', array("label" => " "));
        echo "</div>

        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "geo", array()), 'errors');
        echo "
        <label class=\"mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect\" for=\"form_geo\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "geo", array()), 'widget', array("attr" => array("class" => "mdl-checkbox__input", "onclick" => "getLocation()")));
        echo "
            <span class=\"mdl-checkbox__label\"><b id=\"geo\">Se Geolocaliser</b></span>

        </label>

        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "radius", array()), 'errors');
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "radius", array()), 'widget', array("attr" => array("class" => "mdl-textfield__input", "placeholder" => "Rayon de recherche (km)")));
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "radius", array()), 'label', array("label" => " "));
        echo "


        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetarien", array()), 'errors');
        echo "
        <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\" for=\"form_vegetarien\">
            <span class=\"mdl-switch__label\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetarien", array()), 'label', array("label" => "Vegetarien"));
        echo "</span>
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetarien", array()), 'widget', array("attr" => array("class" => "mdl-switch__input mdl-color--green-A400")));
        echo "
        </label> <br><br>
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetalien", array()), 'errors');
        echo "
        <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\" for=\"form_vegetalien\">
            <span class=\"mdl-switch__label\">";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetalien", array()), 'label', array("label" => "Vegetalien"));
        echo "</span>
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetalien", array()), 'widget', array("attr" => array("class" => "mdl-switch__input")));
        echo "
        </label> <br><br>
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gluten", array()), 'errors');
        echo "
        <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\" for=\"form_gluten\">
            <span class=\"mdl-switch__label\">";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gluten", array()), 'label', array("label" => "Sans gluten"));
        echo "</span>
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gluten", array()), 'widget', array("attr" => array("class" => "mdl-switch__input")));
        echo "
        </label> <br><br>

        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diabete", array()), 'errors');
        echo "
        <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\" for=\"form_diabete\">
            <span class=\"mdl-switch__label\">";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diabete", array()), 'label', array("label" => "Diabete"));
        echo "</span>
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diabete", array()), 'widget', array("attr" => array("class" => "mdl-switch__input")));
        echo "
        </label> <br><br>

        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cholesterol", array()), 'errors');
        echo "
        <label class=\"mdl-switch mdl-js-switch mdl-js-ripple-effect\" for=\"form_Cholesterol\">
            <span class=\"mdl-switch__label\">";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cholesterol", array()), 'label', array("label" => "cholesterol"));
        echo "</span>
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cholesterol", array()), 'widget', array("attr" => array("class" => "mdl-switch__input")));
        echo "
        </label> <br><br>

        <button class=\"mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored  mdl-color--green-A400\">
            <i class=\"material-icons\">search</i>
        </button>

        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 69
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<div>
    ";
        // line 72
        if (array_key_exists("listRestaurants", $context)) {
            // line 73
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listRestaurants"]) ? $context["listRestaurants"] : $this->getContext($context, "listRestaurants")));
            foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
                // line 74
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["restaurant"], "nom", array()), "html", null, true);
                echo "<br>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "    ";
        }
        // line 77
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
                    click=true;
                } else {
                    z.innerHTML = \"La Geolocation n'est pas supportée par le navigateur.\";
                }
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
            y.value = position.coords.latitude;
            x.value = position.coords.longitude;
            z.innerHTML = \"Addresse trouvée\";
            a.style.visibility = 'hidden';
            ad.value = \"\";
        }
    </script>

";
        
        $__internal_f3b2d2718e0eeb8b7ff8a6a6375846db07c831023eacca18e87871a9f82f1cff->leave($__internal_f3b2d2718e0eeb8b7ff8a6a6375846db07c831023eacca18e87871a9f82f1cff_prof);

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
        return array (  185 => 77,  182 => 76,  173 => 74,  168 => 73,  166 => 72,  159 => 69,  154 => 66,  144 => 59,  140 => 58,  135 => 56,  129 => 53,  125 => 52,  120 => 50,  114 => 47,  110 => 46,  105 => 44,  100 => 42,  96 => 41,  91 => 39,  86 => 37,  82 => 36,  77 => 34,  71 => 31,  67 => 30,  63 => 29,  55 => 24,  50 => 22,  45 => 20,  41 => 19,  37 => 18,  32 => 16,  28 => 15,  25 => 14,  22 => 1,);
    }
}
/* */
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
/*         {{ form_start(form, {'action': path('rr_core_search') }) }}*/
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
/* */
/* */
/*         {{ form_errors(form.vegetarien) }}*/
/*         <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="form_vegetarien">*/
/*             <span class="mdl-switch__label">{{ form_label(form.vegetarien, "Vegetarien") }}</span>*/
/*             {{ form_widget(form.vegetarien, {'attr': {'class': 'mdl-switch__input mdl-color--green-A400'}}) }}*/
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
/*         <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored  mdl-color--green-A400">*/
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
/*                     click=true;*/
/*                 } else {*/
/*                     z.innerHTML = "La Geolocation n'est pas supportée par le navigateur.";*/
/*                 }*/
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
/*             y.value = position.coords.latitude;*/
/*             x.value = position.coords.longitude;*/
/*             z.innerHTML = "Addresse trouvée";*/
/*             a.style.visibility = 'hidden';*/
/*             ad.value = "";*/
/*         }*/
/*     </script>*/
/* */
/* */
