<?php

/* RRRestaurantBundle:Restaurant:index.html.twig */
class __TwigTemplate_5159c13af36d3e62ad842ef633cbc9da3a9b4e4f7f4fc646e522a9a26e8ef9e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("RRRestaurantBundle::layout.html.twig", "RRRestaurantBundle:Restaurant:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jumbotron' => array($this, 'block_jumbotron'),
            'rrrestaurant_body' => array($this, 'block_rrrestaurant_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RRRestaurantBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79eea162645a5347e15ef102b4bd5c37990673c4e79d409e08c018bc8d83dc4b = $this->env->getExtension("native_profiler");
        $__internal_79eea162645a5347e15ef102b4bd5c37990673c4e79d409e08c018bc8d83dc4b->enter($__internal_79eea162645a5347e15ef102b4bd5c37990673c4e79d409e08c018bc8d83dc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle:Restaurant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79eea162645a5347e15ef102b4bd5c37990673c4e79d409e08c018bc8d83dc4b->leave($__internal_79eea162645a5347e15ef102b4bd5c37990673c4e79d409e08c018bc8d83dc4b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2126ebf49a1b08ab804558f8ee144f3e032047c31b3862c5587a40fdecfd9ffb = $this->env->getExtension("native_profiler");
        $__internal_2126ebf49a1b08ab804558f8ee144f3e032047c31b3862c5587a40fdecfd9ffb->enter($__internal_2126ebf49a1b08ab804558f8ee144f3e032047c31b3862c5587a40fdecfd9ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2126ebf49a1b08ab804558f8ee144f3e032047c31b3862c5587a40fdecfd9ffb->leave($__internal_2126ebf49a1b08ab804558f8ee144f3e032047c31b3862c5587a40fdecfd9ffb_prof);

    }

    // line 8
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_812e31107dff31e137e43ec9c9019e6bc57fe5611b880380f634691494e0ea6b = $this->env->getExtension("native_profiler");
        $__internal_812e31107dff31e137e43ec9c9019e6bc57fe5611b880380f634691494e0ea6b->enter($__internal_812e31107dff31e137e43ec9c9019e6bc57fe5611b880380f634691494e0ea6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 9
        echo "    <div class=\"mdl-grid\">
        <div class=\"mdl-cell mdl-cell--12-col\">";
        // line 10
        echo $this->env->getExtension('ivory_google_map')->renderMap((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "</div>
    </div>



";
        
        $__internal_812e31107dff31e137e43ec9c9019e6bc57fe5611b880380f634691494e0ea6b->leave($__internal_812e31107dff31e137e43ec9c9019e6bc57fe5611b880380f634691494e0ea6b_prof);

    }

    // line 16
    public function block_rrrestaurant_body($context, array $blocks = array())
    {
        $__internal_db512025f1fe645ba8d2c336604661615a80b3bbb8a822f641585ceb6440a68c = $this->env->getExtension("native_profiler");
        $__internal_db512025f1fe645ba8d2c336604661615a80b3bbb8a822f641585ceb6440a68c->enter($__internal_db512025f1fe645ba8d2c336604661615a80b3bbb8a822f641585ceb6440a68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrrestaurant_body"));

        // line 17
        echo "
    <h2>Liste des restaurants</h2>

    <ul>
       ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listRestaurants"]) ? $context["listRestaurants"] : $this->getContext($context, "listRestaurants")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 22
            echo "            <li>
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_view", array("id" => $this->getAttribute($context["restaurant"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["restaurant"], "nom", array()), "html", null, true);
            echo "
                </a>
                regimes: <br/>
                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["restaurant"], "regimes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["regime"]) {
                // line 28
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["regime"], "libelle", array()), "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['regime'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo " <br/>
                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_delete", array("id" => $this->getAttribute($context["restaurant"], "id", array()))), "html", null, true);
            echo "\">Suprimer</a><br/>
                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_edit", array("id" => $this->getAttribute($context["restaurant"], "id", array()))), "html", null, true);
            echo "\">Editer</a><br/>
            </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "            <li>Pas (encore !) de restaurants</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </ul>
    <div class=\"mdl-tabs mdl-js-tabs mdl-js-ripple-effect\">
  ";
        // line 39
        echo "        <div class=\"mdl-tabs__tab-bar\">
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 41
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_home", array("page" => $context["p"])), "html", null, true);
            echo "\">
                <button class=\"mdl-button mdl-js-button mdl-button";
            // line 42
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo "--accent mdl-button--raised";
            } else {
                echo "--primary mdl-js-ripple-effect";
            }
            echo "\">
                    ";
            // line 43
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "
                </button>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
    </div>

";
        
        $__internal_db512025f1fe645ba8d2c336604661615a80b3bbb8a822f641585ceb6440a68c->leave($__internal_db512025f1fe645ba8d2c336604661615a80b3bbb8a822f641585ceb6440a68c_prof);

    }

    public function getTemplateName()
    {
        return "RRRestaurantBundle:Restaurant:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 47,  163 => 43,  155 => 42,  150 => 41,  146 => 40,  143 => 39,  139 => 36,  132 => 34,  124 => 31,  120 => 30,  117 => 29,  108 => 28,  104 => 27,  98 => 24,  94 => 23,  91 => 22,  86 => 21,  80 => 17,  74 => 16,  61 => 10,  58 => 9,  52 => 8,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "RRRestaurantBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* {% block jumbotron %}*/
/*     <div class="mdl-grid">*/
/*         <div class="mdl-cell mdl-cell--12-col">{{ google_map(map) }}</div>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* {% block rrrestaurant_body %}*/
/* */
/*     <h2>Liste des restaurants</h2>*/
/* */
/*     <ul>*/
/*        {% for restaurant in listRestaurants %}*/
/*             <li>*/
/*                 <a href="{{ path('rr_restaurant_view', {'id': restaurant.id}) }}">*/
/*                     {{ restaurant.nom }}*/
/*                 </a>*/
/*                 regimes: <br/>*/
/*                 {% for regime in restaurant.regimes %}*/
/*                     {{ regime.libelle }}*/
/*                 {% endfor %} <br/>*/
/*                 <a href="{{ path('rr_restaurant_delete', {'id': restaurant.id}) }}">Suprimer</a><br/>*/
/*                 <a href="{{ path('rr_restaurant_edit', {'id': restaurant.id}) }}">Editer</a><br/>*/
/*             </li>*/
/*             {% else %}*/
/*             <li>Pas (encore !) de restaurants</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">*/
/*   {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}*/
/*         <div class="mdl-tabs__tab-bar">*/
/*             {% for p in range(1, nbPages) %}*/
/*                 <a href="{{ path('rr_restaurant_home', {'page': p}) }}">*/
/*                 <button class="mdl-button mdl-js-button mdl-button{% if p == page %}--accent mdl-button--raised{% else %}--primary mdl-js-ripple-effect{% endif %}">*/
/*                     {{ p }}*/
/*                 </button>*/
/*                 </a>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
