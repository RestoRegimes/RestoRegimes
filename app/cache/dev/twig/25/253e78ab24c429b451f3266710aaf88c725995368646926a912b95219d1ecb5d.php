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
        $__internal_0bfcdc18f555c83f472e5bed1908577824e08e596031e7ca040247ef070b1332 = $this->env->getExtension("native_profiler");
        $__internal_0bfcdc18f555c83f472e5bed1908577824e08e596031e7ca040247ef070b1332->enter($__internal_0bfcdc18f555c83f472e5bed1908577824e08e596031e7ca040247ef070b1332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle:Restaurant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bfcdc18f555c83f472e5bed1908577824e08e596031e7ca040247ef070b1332->leave($__internal_0bfcdc18f555c83f472e5bed1908577824e08e596031e7ca040247ef070b1332_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_66c35a47fdcb2db8322922713dad409e70b6049a623a977bb365db2f7069d16a = $this->env->getExtension("native_profiler");
        $__internal_66c35a47fdcb2db8322922713dad409e70b6049a623a977bb365db2f7069d16a->enter($__internal_66c35a47fdcb2db8322922713dad409e70b6049a623a977bb365db2f7069d16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_66c35a47fdcb2db8322922713dad409e70b6049a623a977bb365db2f7069d16a->leave($__internal_66c35a47fdcb2db8322922713dad409e70b6049a623a977bb365db2f7069d16a_prof);

    }

    // line 8
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_110bb3cd5407821f2af2601cfee565927cf9e0f33a5f99f8974c08b6d6af6886 = $this->env->getExtension("native_profiler");
        $__internal_110bb3cd5407821f2af2601cfee565927cf9e0f33a5f99f8974c08b6d6af6886->enter($__internal_110bb3cd5407821f2af2601cfee565927cf9e0f33a5f99f8974c08b6d6af6886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 9
        echo "    ";
        echo $this->env->getExtension('ivory_google_map')->renderMap((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "
";
        
        $__internal_110bb3cd5407821f2af2601cfee565927cf9e0f33a5f99f8974c08b6d6af6886->leave($__internal_110bb3cd5407821f2af2601cfee565927cf9e0f33a5f99f8974c08b6d6af6886_prof);

    }

    // line 11
    public function block_rrrestaurant_body($context, array $blocks = array())
    {
        $__internal_a26aa988c8ae1cf71cbcef61b5ed8d6b2e5544974faf755e437dc079f94f3161 = $this->env->getExtension("native_profiler");
        $__internal_a26aa988c8ae1cf71cbcef61b5ed8d6b2e5544974faf755e437dc079f94f3161->enter($__internal_a26aa988c8ae1cf71cbcef61b5ed8d6b2e5544974faf755e437dc079f94f3161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrrestaurant_body"));

        // line 12
        echo "
    <h2>Liste des restaurants</h2>

    <ul>
       ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listRestaurants"]) ? $context["listRestaurants"] : $this->getContext($context, "listRestaurants")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 17
            echo "            <li>
                <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_view", array("id" => $this->getAttribute($context["restaurant"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["restaurant"], "nom", array()), "html", null, true);
            echo "
                </a>
                regimes: <br/>
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["restaurant"], "regimes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["regime"]) {
                // line 23
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["regime"], "libelle", array()), "html", null, true);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['regime'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo " <br/>
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_delete", array("id" => $this->getAttribute($context["restaurant"], "id", array()))), "html", null, true);
            echo "\">Suprimer</a><br/>
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_edit", array("id" => $this->getAttribute($context["restaurant"], "id", array()))), "html", null, true);
            echo "\">Editer</a><br/>
            </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "            <li>Pas (encore !) de restaurants</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </ul>
    <ul class=\"pagination\">
  ";
        // line 34
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 35
            echo "    <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
      <a href=\"";
            // line 36
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
        // line 39
        echo "</ul>

";
        
        $__internal_a26aa988c8ae1cf71cbcef61b5ed8d6b2e5544974faf755e437dc079f94f3161->leave($__internal_a26aa988c8ae1cf71cbcef61b5ed8d6b2e5544974faf755e437dc079f94f3161_prof);

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
        return array (  160 => 39,  149 => 36,  142 => 35,  137 => 34,  133 => 31,  126 => 29,  118 => 26,  114 => 25,  111 => 24,  102 => 23,  98 => 22,  92 => 19,  88 => 18,  85 => 17,  80 => 16,  74 => 12,  68 => 11,  58 => 9,  52 => 8,  42 => 6,  36 => 5,  11 => 3,);
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
