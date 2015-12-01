<?php

/* RRRestaurantBundle:Restaurant:index.html.twig */
class __TwigTemplate_b40fe85705e239459d3b30cdc9ea5d17fb6cf5344aa8108446c83d520f0906b9 extends Twig_Template
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
        $__internal_72b407e51a565954088ab505d922f47c96e9a65960c4b405de7697f274ce532c = $this->env->getExtension("native_profiler");
        $__internal_72b407e51a565954088ab505d922f47c96e9a65960c4b405de7697f274ce532c->enter($__internal_72b407e51a565954088ab505d922f47c96e9a65960c4b405de7697f274ce532c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle:Restaurant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b407e51a565954088ab505d922f47c96e9a65960c4b405de7697f274ce532c->leave($__internal_72b407e51a565954088ab505d922f47c96e9a65960c4b405de7697f274ce532c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e56bf4e05ccd25f28ad4079934255caab3ed65e1ce8500d9e316058f1190f7a9 = $this->env->getExtension("native_profiler");
        $__internal_e56bf4e05ccd25f28ad4079934255caab3ed65e1ce8500d9e316058f1190f7a9->enter($__internal_e56bf4e05ccd25f28ad4079934255caab3ed65e1ce8500d9e316058f1190f7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e56bf4e05ccd25f28ad4079934255caab3ed65e1ce8500d9e316058f1190f7a9->leave($__internal_e56bf4e05ccd25f28ad4079934255caab3ed65e1ce8500d9e316058f1190f7a9_prof);

    }

    // line 8
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_bef2cb6d8245bbf4cba973cf75833a1f0f0a8ca0c30a8b050574a986f85f1a48 = $this->env->getExtension("native_profiler");
        $__internal_bef2cb6d8245bbf4cba973cf75833a1f0f0a8ca0c30a8b050574a986f85f1a48->enter($__internal_bef2cb6d8245bbf4cba973cf75833a1f0f0a8ca0c30a8b050574a986f85f1a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 9
        echo "    ";
        echo $this->env->getExtension('ivory_google_map')->renderMap((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "

";
        
        $__internal_bef2cb6d8245bbf4cba973cf75833a1f0f0a8ca0c30a8b050574a986f85f1a48->leave($__internal_bef2cb6d8245bbf4cba973cf75833a1f0f0a8ca0c30a8b050574a986f85f1a48_prof);

    }

    // line 12
    public function block_rrrestaurant_body($context, array $blocks = array())
    {
        $__internal_38a2df88f6c3cf77dcbfcd74b796dce2ffbcb745a90ef450baa9dbc80ec173ce = $this->env->getExtension("native_profiler");
        $__internal_38a2df88f6c3cf77dcbfcd74b796dce2ffbcb745a90ef450baa9dbc80ec173ce->enter($__internal_38a2df88f6c3cf77dcbfcd74b796dce2ffbcb745a90ef450baa9dbc80ec173ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrrestaurant_body"));

        // line 13
        echo "
    <h2>Liste des restaurants</h2>

    <ul>
       ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listRestaurants"]) ? $context["listRestaurants"] : $this->getContext($context, "listRestaurants")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 18
            echo "            <li>
                <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_view", array("id" => $this->getAttribute($context["restaurant"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["restaurant"], "nom", array()), "html", null, true);
            echo "
                </a>
                regimes: <br/>
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["restaurant"], "regimes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["regime"]) {
                // line 24
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["regime"], "libelle", array()), "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['regime'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo " <br/>
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_delete", array("id" => $this->getAttribute($context["restaurant"], "id", array()))), "html", null, true);
            echo "\">Suprimer</a><br/>
                <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_edit", array("id" => $this->getAttribute($context["restaurant"], "id", array()))), "html", null, true);
            echo "\">Editer</a><br/>
            </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            echo "            <li>Pas (encore !) de restaurants</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </ul>
    <ul class=\"pagination\">
  ";
        // line 35
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 36
            echo "    <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
      <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</ul>

";
        
        $__internal_38a2df88f6c3cf77dcbfcd74b796dce2ffbcb745a90ef450baa9dbc80ec173ce->leave($__internal_38a2df88f6c3cf77dcbfcd74b796dce2ffbcb745a90ef450baa9dbc80ec173ce_prof);

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
        return array (  161 => 40,  150 => 37,  143 => 36,  138 => 35,  134 => 32,  127 => 30,  119 => 27,  115 => 26,  112 => 25,  103 => 24,  99 => 23,  93 => 20,  89 => 19,  86 => 18,  81 => 17,  75 => 13,  69 => 12,  58 => 9,  52 => 8,  42 => 6,  36 => 5,  11 => 3,);
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
/*     {{ google_map(map) }}*/
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
/*     <ul class="pagination">*/
/*   {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}*/
/*   {% for p in range(1, nbPages) %}*/
/*     <li{% if p == page %} class="active"{% endif %}>*/
/*       <a href="{{ path('rr_restaurant_home', {'page': p}) }}">{{ p }}</a>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/* */
/* {% endblock %}*/
