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
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RRRestaurantBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d059234b93169a8cfa2ea3f5dfbcb22207cead8248f4eb1a90145165005989eb = $this->env->getExtension("native_profiler");
        $__internal_d059234b93169a8cfa2ea3f5dfbcb22207cead8248f4eb1a90145165005989eb->enter($__internal_d059234b93169a8cfa2ea3f5dfbcb22207cead8248f4eb1a90145165005989eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle:Restaurant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d059234b93169a8cfa2ea3f5dfbcb22207cead8248f4eb1a90145165005989eb->leave($__internal_d059234b93169a8cfa2ea3f5dfbcb22207cead8248f4eb1a90145165005989eb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_97f2c1278e944053973c111a20839f6c98d13997d2d129a04f7c43d2c26712a2 = $this->env->getExtension("native_profiler");
        $__internal_97f2c1278e944053973c111a20839f6c98d13997d2d129a04f7c43d2c26712a2->enter($__internal_97f2c1278e944053973c111a20839f6c98d13997d2d129a04f7c43d2c26712a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Recherche - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_97f2c1278e944053973c111a20839f6c98d13997d2d129a04f7c43d2c26712a2->leave($__internal_97f2c1278e944053973c111a20839f6c98d13997d2d129a04f7c43d2c26712a2_prof);

    }

    // line 8
    public function block_map($context, array $blocks = array())
    {
        $__internal_2a997b6446f3e40dda875e5fbb4159290fbf7b3f601ecbd02522925970414f3e = $this->env->getExtension("native_profiler");
        $__internal_2a997b6446f3e40dda875e5fbb4159290fbf7b3f601ecbd02522925970414f3e->enter($__internal_2a997b6446f3e40dda875e5fbb4159290fbf7b3f601ecbd02522925970414f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "map"));

        // line 9
        echo "    ";
        echo $this->env->getExtension('ivory_google_map')->renderMap((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "
";
        
        $__internal_2a997b6446f3e40dda875e5fbb4159290fbf7b3f601ecbd02522925970414f3e->leave($__internal_2a997b6446f3e40dda875e5fbb4159290fbf7b3f601ecbd02522925970414f3e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef521d8eadb7e086545788ea33376a83358d8ae78ef469d3512bc3f7461ace7b = $this->env->getExtension("native_profiler");
        $__internal_ef521d8eadb7e086545788ea33376a83358d8ae78ef469d3512bc3f7461ace7b->enter($__internal_ef521d8eadb7e086545788ea33376a83358d8ae78ef469d3512bc3f7461ace7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "

    <div class=\"pagination\">
        ";
        // line 15
        $context["count"] = 0;
        // line 16
        echo "        ";
        $context["numPage"] = 1;
        // line 17
        echo "        <div class=\"post\" id=\"page-";
        echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
        echo "\">
       ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listRestaurants"]) ? $context["listRestaurants"] : $this->getContext($context, "listRestaurants")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 19
            echo "            ";
            if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) == 2)) {
                // line 20
                echo "                ";
                $context["numPage"] = ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1);
                // line 21
                echo "                </div>
                <div class=\"post\" id=\"page-";
                // line 22
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
                echo "\">
                ";
                // line 23
                $context["count"] = 0;
                // line 24
                echo "            ";
            }
            // line 25
            echo "                    <div class=\"mdl-card mdl-shadow--2dp\" style=\"width:100%;min-height:100px;\">
                        <div class=\"mdl-card__title\" ";
            // line 26
            if (( !(null === $this->getAttribute($context["restaurant"], "image1", array())) &&  !(null === $this->getAttribute($this->getAttribute($context["restaurant"], "image1", array()), "imageFile", array())))) {
                // line 27
                echo "                            style=\" background: url('";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->env->getExtension('vich_uploader')->asset($this->getAttribute($context["restaurant"], "image1", array()), "imageFile")), "html", null, true);
                echo "') center / cover; \"";
            }
            echo ">
                            <a class=\"mdl-button mdl-button--raised mdl-button--colored\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_view", array("id" => $this->getAttribute($context["restaurant"], "id", array()))), "html", null, true);
            echo "\">
                                ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["restaurant"], "nom", array()), "html", null, true);
            echo "
                            </a>

                        </div>
                        <div class=\"mdl-card__actions mdl-card--border\">
                            <div class=\"mdl-grid\">
                                <div class=\"mdl-cell mdl-cell--8-col\">
                                    ";
            // line 36
            echo $this->env->getExtension('address')->address($this->getAttribute($context["restaurant"], "address", array()));
            echo "
                                </div>
                                <div class=\"mdl-cell mdl-cell--4-col\">
                                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["restaurant"], "regimes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["regime"]) {
                // line 40
                echo "                                        ";
                if (($this->getAttribute($context["regime"], "id", array()) == 1)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/Iconveg.png"), "html", null, true);
                    echo "\">";
                }
                // line 41
                echo "                                        ";
                if (($this->getAttribute($context["regime"], "id", array()) == 2)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/Iconvegan.png"), "html", null, true);
                    echo "\">";
                }
                // line 42
                echo "                                        ";
                if (($this->getAttribute($context["regime"], "id", array()) == 3)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/Icongluten.png"), "html", null, true);
                    echo "\">";
                }
                // line 43
                echo "                                        ";
                if (($this->getAttribute($context["regime"], "id", array()) == 4)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/Icondiabete.png"), "html", null, true);
                    echo "\">";
                }
                // line 44
                echo "                                        ";
                if (($this->getAttribute($context["regime"], "id", array()) == 5)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/Iconchol.png"), "html", null, true);
                    echo "\">";
                }
                // line 45
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['regime'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                                </div>
                            </div>


                        </div>
                        <div class=\"mdl-card__menu\">
                            <button class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect\">
                                <i class=\"material-icons\">share</i>
                            </button>
                        </div>
                    </div>
                    <div style=\"height: 10px;\"></div>
           ";
            // line 58
            $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
            // line 59
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "            <b>Aucun Restaurant trouvé</b>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </div>
    </div>

    <button class=\"mdl-button mdl-button--fab mdl-button--mini-fab\" onclick=\"prevPage()\">
        <
    </button>
    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 69
            echo "        <button class=\"pages mdl-button mdl-button--fab mdl-button--mini-fab\" onclick=\"showPage(";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ")\">
            ";
            // line 70
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "
        </button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    <button class=\"mdl-button mdl-button--fab mdl-button--mini-fab\" onclick=\"nextPage()\">
        >
    </button>





";
        
        $__internal_ef521d8eadb7e086545788ea33376a83358d8ae78ef469d3512bc3f7461ace7b->leave($__internal_ef521d8eadb7e086545788ea33376a83358d8ae78ef469d3512bc3f7461ace7b_prof);

    }

    // line 82
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_16f0aa7b1fe1e11f9bc032f18cf2b990dbffb79cf62ace6e3efb70b937ad9132 = $this->env->getExtension("native_profiler");
        $__internal_16f0aa7b1fe1e11f9bc032f18cf2b990dbffb79cf62ace6e3efb70b937ad9132->enter($__internal_16f0aa7b1fe1e11f9bc032f18cf2b990dbffb79cf62ace6e3efb70b937ad9132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 83
        echo "    <script>

        var page=1;
        var aP = document.getElementsByClassName(\"pages\");

        showPage(page);
        function showPage(page) {
            \$('.pagination .post:not(#page-'+page+')').hide();
            \$('.pagination .post#page-'+page).show();
            for( var i=0;i<\$('.pagination .post').length;i++){
                aP[i].style.backgroundColor= 'rgb(220,220,220)';
            }
            aP[page-1].style.backgroundColor= 'rgb(0,230,118)';
        }
        function prevPage() {
            if (page == 1) {
                page = \$('.pagination .post').length;
            } else {
                page--;
            }
            showPage(page);
        }

        function nextPage() {
            if (page == \$('.pagination .post').length) {
                page = 1;
            } else {
                page++;
            }
            showPage(page);
        }
    </script>
";
        
        $__internal_16f0aa7b1fe1e11f9bc032f18cf2b990dbffb79cf62ace6e3efb70b937ad9132->leave($__internal_16f0aa7b1fe1e11f9bc032f18cf2b990dbffb79cf62ace6e3efb70b937ad9132_prof);

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
        return array (  265 => 83,  259 => 82,  244 => 73,  235 => 70,  230 => 69,  226 => 68,  218 => 62,  211 => 60,  206 => 59,  204 => 58,  190 => 46,  184 => 45,  177 => 44,  170 => 43,  163 => 42,  156 => 41,  149 => 40,  145 => 39,  139 => 36,  129 => 29,  125 => 28,  118 => 27,  116 => 26,  113 => 25,  110 => 24,  108 => 23,  104 => 22,  101 => 21,  98 => 20,  95 => 19,  90 => 18,  85 => 17,  82 => 16,  80 => 15,  75 => 12,  69 => 11,  59 => 9,  53 => 8,  43 => 6,  37 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "RRRestaurantBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Recherche - {{ parent() }}*/
/* {% endblock %}*/
/* {% block map %}*/
/*     {{ google_map(map) }}*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* */
/*     <div class="pagination">*/
/*         {% set count=0 %}*/
/*         {% set numPage=1 %}*/
/*         <div class="post" id="page-{{ numPage }}">*/
/*        {% for restaurant in listRestaurants %}*/
/*             {% if count==2 %}*/
/*                 {% set numPage=numPage+1 %}*/
/*                 </div>*/
/*                 <div class="post" id="page-{{ numPage }}">*/
/*                 {% set count=0 %}*/
/*             {% endif %}*/
/*                     <div class="mdl-card mdl-shadow--2dp" style="width:100%;min-height:100px;">*/
/*                         <div class="mdl-card__title" {% if restaurant.image1 is not null and restaurant.image1.imageFile is not null %}*/
/*                             style=" background: url('{{ asset(vich_uploader_asset(restaurant.image1,'imageFile')) }}') center / cover; "{% endif %}>*/
/*                             <a class="mdl-button mdl-button--raised mdl-button--colored" href="{{ path('rr_restaurant_view', {'id': restaurant.id}) }}">*/
/*                                 {{ restaurant.nom }}*/
/*                             </a>*/
/* */
/*                         </div>*/
/*                         <div class="mdl-card__actions mdl-card--border">*/
/*                             <div class="mdl-grid">*/
/*                                 <div class="mdl-cell mdl-cell--8-col">*/
/*                                     {{ restaurant.address|address()|raw }}*/
/*                                 </div>*/
/*                                 <div class="mdl-cell mdl-cell--4-col">*/
/*                                     {% for regime in restaurant.regimes %}*/
/*                                         {% if regime.id==1%}<img src="{{ asset('bundles/rrcore/images/Iconveg.png') }}">{% endif %}*/
/*                                         {% if regime.id==2%}<img src="{{ asset('bundles/rrcore/images/Iconvegan.png') }}">{% endif %}*/
/*                                         {% if regime.id==3%}<img src="{{ asset('bundles/rrcore/images/Icongluten.png') }}">{% endif %}*/
/*                                         {% if regime.id==4%}<img src="{{ asset('bundles/rrcore/images/Icondiabete.png') }}">{% endif %}*/
/*                                         {% if regime.id==5%}<img src="{{ asset('bundles/rrcore/images/Iconchol.png') }}">{% endif %}*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
/* */
/* */
/*                         </div>*/
/*                         <div class="mdl-card__menu">*/
/*                             <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">*/
/*                                 <i class="material-icons">share</i>*/
/*                             </button>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div style="height: 10px;"></div>*/
/*            {% set count=count+1 %}*/
/*             {% else %}*/
/*             <b>Aucun Restaurant trouvé</b>*/
/*         {% endfor %}*/
/*                 </div>*/
/*     </div>*/
/* */
/*     <button class="mdl-button mdl-button--fab mdl-button--mini-fab" onclick="prevPage()">*/
/*         <*/
/*     </button>*/
/*     {% for i in 1..numPage %}*/
/*         <button class="pages mdl-button mdl-button--fab mdl-button--mini-fab" onclick="showPage({{ i }})">*/
/*             {{ i }}*/
/*         </button>*/
/*     {% endfor %}*/
/*     <button class="mdl-button mdl-button--fab mdl-button--mini-fab" onclick="nextPage()">*/
/*         >*/
/*     </button>*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* {% block javascript %}*/
/*     <script>*/
/* */
/*         var page=1;*/
/*         var aP = document.getElementsByClassName("pages");*/
/* */
/*         showPage(page);*/
/*         function showPage(page) {*/
/*             $('.pagination .post:not(#page-'+page+')').hide();*/
/*             $('.pagination .post#page-'+page).show();*/
/*             for( var i=0;i<$('.pagination .post').length;i++){*/
/*                 aP[i].style.backgroundColor= 'rgb(220,220,220)';*/
/*             }*/
/*             aP[page-1].style.backgroundColor= 'rgb(0,230,118)';*/
/*         }*/
/*         function prevPage() {*/
/*             if (page == 1) {*/
/*                 page = $('.pagination .post').length;*/
/*             } else {*/
/*                 page--;*/
/*             }*/
/*             showPage(page);*/
/*         }*/
/* */
/*         function nextPage() {*/
/*             if (page == $('.pagination .post').length) {*/
/*                 page = 1;*/
/*             } else {*/
/*                 page++;*/
/*             }*/
/*             showPage(page);*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
