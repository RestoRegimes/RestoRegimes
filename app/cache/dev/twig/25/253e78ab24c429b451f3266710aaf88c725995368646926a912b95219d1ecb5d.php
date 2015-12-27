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
            'map' => array($this, 'block_map'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RRRestaurantBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af70831b8c4e9e0df695890348d43b15c0dd81fb70e87c0d497c1cbd987bbfbf = $this->env->getExtension("native_profiler");
        $__internal_af70831b8c4e9e0df695890348d43b15c0dd81fb70e87c0d497c1cbd987bbfbf->enter($__internal_af70831b8c4e9e0df695890348d43b15c0dd81fb70e87c0d497c1cbd987bbfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle:Restaurant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af70831b8c4e9e0df695890348d43b15c0dd81fb70e87c0d497c1cbd987bbfbf->leave($__internal_af70831b8c4e9e0df695890348d43b15c0dd81fb70e87c0d497c1cbd987bbfbf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5b76d5dfdc7b499ae6b89b911064a16576a2db54a213af0651b8b97ef6b46d0 = $this->env->getExtension("native_profiler");
        $__internal_f5b76d5dfdc7b499ae6b89b911064a16576a2db54a213af0651b8b97ef6b46d0->enter($__internal_f5b76d5dfdc7b499ae6b89b911064a16576a2db54a213af0651b8b97ef6b46d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f5b76d5dfdc7b499ae6b89b911064a16576a2db54a213af0651b8b97ef6b46d0->leave($__internal_f5b76d5dfdc7b499ae6b89b911064a16576a2db54a213af0651b8b97ef6b46d0_prof);

    }

    // line 8
    public function block_map($context, array $blocks = array())
    {
        $__internal_5a69b295cf4045680e4abf587bbdd932cb80e17897be7d12f96278962b8e1539 = $this->env->getExtension("native_profiler");
        $__internal_5a69b295cf4045680e4abf587bbdd932cb80e17897be7d12f96278962b8e1539->enter($__internal_5a69b295cf4045680e4abf587bbdd932cb80e17897be7d12f96278962b8e1539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "map"));

        // line 9
        echo "    ";
        echo $this->env->getExtension('ivory_google_map')->renderMap((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "
";
        
        $__internal_5a69b295cf4045680e4abf587bbdd932cb80e17897be7d12f96278962b8e1539->leave($__internal_5a69b295cf4045680e4abf587bbdd932cb80e17897be7d12f96278962b8e1539_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_48781108a5acee598d64118c741467aea746af155fd1f73387b4b798b5022c31 = $this->env->getExtension("native_profiler");
        $__internal_48781108a5acee598d64118c741467aea746af155fd1f73387b4b798b5022c31->enter($__internal_48781108a5acee598d64118c741467aea746af155fd1f73387b4b798b5022c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div class=\"mdl-tabs mdl-js-tabs mdl-js-ripple-effect\">
  ";
        // line 34
        echo "        ";
        if (array_key_exists("listRestaurant", $context)) {
            // line 35
            echo "            <div class=\"mdl-tabs__tab-bar\">
                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 37
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_home", array("page" => $context["p"])), "html", null, true);
                echo "\">
                    <button class=\"mdl-button mdl-js-button mdl-button";
                // line 38
                if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    echo "--accent mdl-button--raised";
                } else {
                    echo "--primary mdl-js-ripple-effect";
                }
                echo "\">
                        ";
                // line 39
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                    </button>
                    </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </div>
        ";
        }
        // line 45
        echo "    </div>

";
        
        $__internal_48781108a5acee598d64118c741467aea746af155fd1f73387b4b798b5022c31->leave($__internal_48781108a5acee598d64118c741467aea746af155fd1f73387b4b798b5022c31_prof);

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
        return array (  174 => 45,  170 => 43,  160 => 39,  152 => 38,  147 => 37,  143 => 36,  140 => 35,  137 => 34,  133 => 31,  126 => 29,  118 => 26,  114 => 25,  111 => 24,  102 => 23,  98 => 22,  92 => 19,  88 => 18,  85 => 17,  80 => 16,  74 => 12,  68 => 11,  58 => 9,  52 => 8,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "RRRestaurantBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* {% block map %}*/
/*     {{ google_map(map) }}*/
/* {% endblock %}*/
/* {% block body %}*/
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
/*         {% if listRestaurant is defined %}*/
/*             <div class="mdl-tabs__tab-bar">*/
/*                 {% for p in range(1, nbPages) %}*/
/*                     <a href="{{ path('rr_restaurant_home', {'page': p}) }}">*/
/*                     <button class="mdl-button mdl-js-button mdl-button{% if p == page %}--accent mdl-button--raised{% else %}--primary mdl-js-ripple-effect{% endif %}">*/
/*                         {{ p }}*/
/*                     </button>*/
/*                     </a>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
