<?php

/* RRCoreBundle:Default:search.html.twig */
class __TwigTemplate_70dbd1077a7e8f5d4812b5e58a5473231d50515066bf66464fd7810a0bbc28d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2072bfd45ca6d09e0fdd27734273b81cce5d775272a4d3fd0df2d6ba48f41cae = $this->env->getExtension("native_profiler");
        $__internal_2072bfd45ca6d09e0fdd27734273b81cce5d775272a4d3fd0df2d6ba48f41cae->enter($__internal_2072bfd45ca6d09e0fdd27734273b81cce5d775272a4d3fd0df2d6ba48f41cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRCoreBundle:Default:search.html.twig"));

        // line 1
        echo "
";
        // line 14
        echo "
<div class=\"mdl-card mdl-shadow--2dp\" style=\"width: 100%;\">
    <div class=\"mdl-card__supporting-text\">
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("rr_core_search")));
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
        <label class=\"mdl-checkbox mdl-js-checkbox \" for=\"form_geo\">
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "radius", array()), 'widget', array("attr" => array("class" => "mdl-textfield__input", "placeholder" => "Distance max (km)")));
        echo "
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "radius", array()), 'label', array("label" => " "));
        echo "
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetarien", array()), 'errors');
        echo "
        <label class=\"tgl\" style=\"font-size:18px;\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetarien", array()), 'widget');
        echo "
            <span id=\"vegetarien\">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetarien", array()), 'label', array("label" => "Vegetarien"));
        echo "</span>
        </label>
        <br><br>
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetalien", array()), 'errors');
        echo "
        <label class=\"tgl\" style=\"font-size:18px;\">
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetalien", array()), 'widget');
        echo "
            <span id=\"vegetalien\">";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vegetalien", array()), 'label', array("label" => "Vegetalien"));
        echo "</span>
        </label>
        <br><br>
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gluten", array()), 'errors');
        echo "
        <label class=\"tgl\" style=\"font-size:18px;\">
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gluten", array()), 'widget');
        echo "
            <span id=\"gluten\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gluten", array()), 'label', array("label" => "Sans Gluten"));
        echo "</span>
        </label>
        <br><br>
        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diabete", array()), 'errors');
        echo "
        <label class=\"tgl\" style=\"font-size:18px;\">
            ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diabete", array()), 'widget');
        echo "
            <span id=\"diabete\">";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "diabete", array()), 'label', array("label" => "Diabete"));
        echo "</span>
        </label>
        <br><br>
        <label class=\"tgl\" style=\"font-size:18px;\">
            ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cholesterol", array()), 'widget');
        echo "
            <span id=\"cholesterol\">";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cholesterol", array()), 'label', array("label" => "Cholesterol"));
        echo "</span>

        </label>
        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Cholesterol", array()), 'errors');
        echo "
        <br><br>

        <button class=\"mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored  mdl-color--green-A400\">
            <i class=\"material-icons\">search</i>
        </button>
        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 72
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

</div>













";
        // line 89
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_2072bfd45ca6d09e0fdd27734273b81cce5d775272a4d3fd0df2d6ba48f41cae->leave($__internal_2072bfd45ca6d09e0fdd27734273b81cce5d775272a4d3fd0df2d6ba48f41cae_prof);

    }

    public function block_javascript($context, array $blocks = array())
    {
        $__internal_32b04f52f39b7767908200fa77c312abf56afa078f3fec29ea1632135fd5ce0d = $this->env->getExtension("native_profiler");
        $__internal_32b04f52f39b7767908200fa77c312abf56afa078f3fec29ea1632135fd5ce0d->enter($__internal_32b04f52f39b7767908200fa77c312abf56afa078f3fec29ea1632135fd5ce0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 90
        echo "    <script>

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
        
        $__internal_32b04f52f39b7767908200fa77c312abf56afa078f3fec29ea1632135fd5ce0d->leave($__internal_32b04f52f39b7767908200fa77c312abf56afa078f3fec29ea1632135fd5ce0d_prof);

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
        return array (  196 => 90,  184 => 89,  163 => 72,  158 => 69,  149 => 63,  143 => 60,  139 => 59,  132 => 55,  128 => 54,  123 => 52,  117 => 49,  113 => 48,  108 => 46,  102 => 43,  98 => 42,  93 => 40,  87 => 37,  83 => 36,  78 => 34,  74 => 33,  70 => 32,  66 => 31,  58 => 26,  53 => 24,  48 => 22,  44 => 21,  40 => 20,  35 => 18,  31 => 17,  26 => 14,  23 => 1,);
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
/* <div class="mdl-card mdl-shadow--2dp" style="width: 100%;">*/
/*     <div class="mdl-card__supporting-text">*/
/*         {{ form_start(form, {'action': path('rr_core_search') }) }}*/
/*         {{ form_errors(form) }}*/
/*         <div id="adresse">*/
/*             {{ form_errors(form.recherche) }}*/
/*             {{ form_widget(form.recherche, {'attr': {'class': 'mdl-textfield__input','placeholder':'Adresse'}}) }}*/
/*             {{ form_label(form.recherche, " ") }}</div>*/
/* */
/*         {{ form_errors(form.geo) }}*/
/*         <label class="mdl-checkbox mdl-js-checkbox " for="form_geo">*/
/*             {{ form_widget(form.geo, {'attr': {'class': 'mdl-checkbox__input','onclick':"getLocation()"}}) }}*/
/*             <span class="mdl-checkbox__label"><b id="geo">Se Geolocaliser</b></span>*/
/* */
/*         </label>*/
/* */
/*         {{ form_errors(form.radius) }}*/
/*         {{ form_widget(form.radius, {'attr': {'class': 'mdl-textfield__input','placeholder':'Distance max (km)'}}) }}*/
/*         {{ form_label(form.radius, " ") }}*/
/*         {{ form_errors(form.vegetarien) }}*/
/*         <label class="tgl" style="font-size:18px;">*/
/*             {{ form_widget(form.vegetarien) }}*/
/*             <span id="vegetarien">{{ form_label(form.vegetarien, "Vegetarien") }}</span>*/
/*         </label>*/
/*         <br><br>*/
/*         {{ form_errors(form.vegetalien) }}*/
/*         <label class="tgl" style="font-size:18px;">*/
/*             {{ form_widget(form.vegetalien) }}*/
/*             <span id="vegetalien">{{ form_label(form.vegetalien, "Vegetalien") }}</span>*/
/*         </label>*/
/*         <br><br>*/
/*         {{ form_errors(form.gluten) }}*/
/*         <label class="tgl" style="font-size:18px;">*/
/*             {{ form_widget(form.gluten) }}*/
/*             <span id="gluten">{{ form_label(form.gluten, "Sans Gluten") }}</span>*/
/*         </label>*/
/*         <br><br>*/
/*         {{ form_errors(form.diabete) }}*/
/*         <label class="tgl" style="font-size:18px;">*/
/*             {{ form_widget(form.diabete) }}*/
/*             <span id="diabete">{{ form_label(form.diabete, "Diabete") }}</span>*/
/*         </label>*/
/*         <br><br>*/
/*         <label class="tgl" style="font-size:18px;">*/
/*             {{ form_widget(form.Cholesterol) }}*/
/*             <span id="cholesterol">{{ form_label(form.Cholesterol, "Cholesterol") }}</span>*/
/* */
/*         </label>*/
/*         {{ form_errors(form.Cholesterol) }}*/
/*         <br><br>*/
/* */
/*         <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored  mdl-color--green-A400">*/
/*             <i class="material-icons">search</i>*/
/*         </button>*/
/*         {{ form_rest(form) }}*/
/* */
/*         {# Fermeture de la balise <form> du formulaire HTML #}*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* {% block javascript %}*/
/*     <script>*/
/* */
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
/* {% endblock %}*/
