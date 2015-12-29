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
            'rrplatform_search' => array($this, 'block_rrplatform_search'),
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
        $__internal_3a792182868f6510832ec65641ffe40c6a260390b691e0a8de7eb816b4877296 = $this->env->getExtension("native_profiler");
        $__internal_3a792182868f6510832ec65641ffe40c6a260390b691e0a8de7eb816b4877296->enter($__internal_3a792182868f6510832ec65641ffe40c6a260390b691e0a8de7eb816b4877296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle:Restaurant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a792182868f6510832ec65641ffe40c6a260390b691e0a8de7eb816b4877296->leave($__internal_3a792182868f6510832ec65641ffe40c6a260390b691e0a8de7eb816b4877296_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfedd055dbf707ed34b78341aaaa99e5ed9e757f395b91f9e7683230cdad86ec = $this->env->getExtension("native_profiler");
        $__internal_bfedd055dbf707ed34b78341aaaa99e5ed9e757f395b91f9e7683230cdad86ec->enter($__internal_bfedd055dbf707ed34b78341aaaa99e5ed9e757f395b91f9e7683230cdad86ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Recherche - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bfedd055dbf707ed34b78341aaaa99e5ed9e757f395b91f9e7683230cdad86ec->leave($__internal_bfedd055dbf707ed34b78341aaaa99e5ed9e757f395b91f9e7683230cdad86ec_prof);

    }

    // line 8
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_f96be7390f5a530b5f66766847b4cb427b35d01a5b95dbdc787cddd8765980c6 = $this->env->getExtension("native_profiler");
        $__internal_f96be7390f5a530b5f66766847b4cb427b35d01a5b95dbdc787cddd8765980c6->enter($__internal_f96be7390f5a530b5f66766847b4cb427b35d01a5b95dbdc787cddd8765980c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 9
        echo "    ";
        $this->loadTemplate("RRCoreBundle:Default:search.html.twig", "RRRestaurantBundle:Restaurant:index.html.twig", 9)->display($context);
        
        $__internal_f96be7390f5a530b5f66766847b4cb427b35d01a5b95dbdc787cddd8765980c6->leave($__internal_f96be7390f5a530b5f66766847b4cb427b35d01a5b95dbdc787cddd8765980c6_prof);

    }

    // line 11
    public function block_map($context, array $blocks = array())
    {
        $__internal_b56e92cfb8c2456b5e83a9424776d412388c8841cc22b7e968b486cac5aaeaab = $this->env->getExtension("native_profiler");
        $__internal_b56e92cfb8c2456b5e83a9424776d412388c8841cc22b7e968b486cac5aaeaab->enter($__internal_b56e92cfb8c2456b5e83a9424776d412388c8841cc22b7e968b486cac5aaeaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "map"));

        // line 12
        echo "    ";
        echo $this->env->getExtension('ivory_google_map')->renderMap((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "
";
        
        $__internal_b56e92cfb8c2456b5e83a9424776d412388c8841cc22b7e968b486cac5aaeaab->leave($__internal_b56e92cfb8c2456b5e83a9424776d412388c8841cc22b7e968b486cac5aaeaab_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0928665926e72165b7f97325416eb0055f56e496a3d0203504ee6ca0d1d9d8d = $this->env->getExtension("native_profiler");
        $__internal_e0928665926e72165b7f97325416eb0055f56e496a3d0203504ee6ca0d1d9d8d->enter($__internal_e0928665926e72165b7f97325416eb0055f56e496a3d0203504ee6ca0d1d9d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "

    <div class=\"pagination\">
        ";
        // line 19
        $context["count"] = 0;
        // line 20
        echo "        ";
        $context["numPage"] = 1;
        // line 21
        echo "        <div class=\"post\" id=\"page-";
        echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
        echo "\">
       ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listRestaurants"]) ? $context["listRestaurants"] : $this->getContext($context, "listRestaurants")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 23
            echo "            ";
            if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) == 2)) {
                // line 24
                echo "                ";
                $context["numPage"] = ((isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")) + 1);
                // line 25
                echo "                </div>
                <div class=\"post\" id=\"page-";
                // line 26
                echo twig_escape_filter($this->env, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage")), "html", null, true);
                echo "\">
                ";
                // line 27
                $context["count"] = 0;
                // line 28
                echo "            ";
            }
            // line 29
            echo "                    <div class=\"mdl-card mdl-shadow--2dp\" style=\"width:100%;min-height:100px;\">
                        <div class=\"mdl-card__title\" ";
            // line 30
            if (( !(null === $this->getAttribute($context["restaurant"], "image1", array())) &&  !(null === $this->getAttribute($this->getAttribute($context["restaurant"], "image1", array()), "imageFile", array())))) {
                // line 31
                echo "                            style=\" background: url('";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->env->getExtension('vich_uploader')->asset($this->getAttribute($context["restaurant"], "image1", array()), "imageFile")), "html", null, true);
                echo "') center / cover; \"";
            }
            echo ">
                            <a class=\"mdl-button mdl-button--raised mdl-button--colored\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_view", array("id" => $this->getAttribute($context["restaurant"], "id", array()))), "html", null, true);
            echo "\">
                                ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["restaurant"], "nom", array()), "html", null, true);
            echo "
                            </a>

                        </div>
                        <div class=\"mdl-card__actions mdl-card--border\">
                            <div class=\"mdl-grid\">
                                <div class=\"mdl-cell mdl-cell--8-col\">
                                    ";
            // line 40
            echo $this->env->getExtension('address')->address($this->getAttribute($context["restaurant"], "address", array()));
            echo "
                                </div>
                                <div class=\"mdl-cell mdl-cell--4-col\">
                                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["restaurant"], "regimes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["regime"]) {
                // line 44
                echo "                                        ";
                if (($this->getAttribute($context["regime"], "id", array()) == 1)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/Iconveg.png"), "html", null, true);
                    echo "\">";
                }
                // line 45
                echo "                                        ";
                if (($this->getAttribute($context["regime"], "id", array()) == 2)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/Iconvegan.png"), "html", null, true);
                    echo "\">";
                }
                // line 46
                echo "                                        ";
                if (($this->getAttribute($context["regime"], "id", array()) == 3)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/Icongluten.png"), "html", null, true);
                    echo "\">";
                }
                // line 47
                echo "                                        ";
                if (($this->getAttribute($context["regime"], "id", array()) == 4)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/Icondiabete.png"), "html", null, true);
                    echo "\">";
                }
                // line 48
                echo "                                        ";
                if (($this->getAttribute($context["regime"], "id", array()) == 5)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/Iconchol.png"), "html", null, true);
                    echo "\">";
                }
                // line 49
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['regime'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
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
            // line 62
            $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
            // line 63
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "            <b>Aucun Restaurant trouvé</b>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </div>
    </div>

    <button class=\"mdl-button mdl-button--fab mdl-button--mini-fab\" onclick=\"prevPage()\">
        <
    </button>
    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numPage"]) ? $context["numPage"] : $this->getContext($context, "numPage"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 73
            echo "        <button class=\"pages mdl-button mdl-button--fab mdl-button--mini-fab\" onclick=\"showPage(";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo ")\">
            ";
            // line 74
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "
        </button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "    <button class=\"mdl-button mdl-button--fab mdl-button--mini-fab\" onclick=\"nextPage()\">
        >
    </button>





";
        
        $__internal_e0928665926e72165b7f97325416eb0055f56e496a3d0203504ee6ca0d1d9d8d->leave($__internal_e0928665926e72165b7f97325416eb0055f56e496a3d0203504ee6ca0d1d9d8d_prof);

    }

    // line 86
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6f18783c58811e8f60f5b41e1fe229a1f018e7ebc4bcc73f3cafbed9369286f9 = $this->env->getExtension("native_profiler");
        $__internal_6f18783c58811e8f60f5b41e1fe229a1f018e7ebc4bcc73f3cafbed9369286f9->enter($__internal_6f18783c58811e8f60f5b41e1fe229a1f018e7ebc4bcc73f3cafbed9369286f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 87
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
        
        $__internal_6f18783c58811e8f60f5b41e1fe229a1f018e7ebc4bcc73f3cafbed9369286f9->leave($__internal_6f18783c58811e8f60f5b41e1fe229a1f018e7ebc4bcc73f3cafbed9369286f9_prof);

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
        return array (  280 => 87,  274 => 86,  259 => 77,  250 => 74,  245 => 73,  241 => 72,  233 => 66,  226 => 64,  221 => 63,  219 => 62,  205 => 50,  199 => 49,  192 => 48,  185 => 47,  178 => 46,  171 => 45,  164 => 44,  160 => 43,  154 => 40,  144 => 33,  140 => 32,  133 => 31,  131 => 30,  128 => 29,  125 => 28,  123 => 27,  119 => 26,  116 => 25,  113 => 24,  110 => 23,  105 => 22,  100 => 21,  97 => 20,  95 => 19,  90 => 16,  84 => 15,  74 => 12,  68 => 11,  60 => 9,  54 => 8,  44 => 6,  38 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "RRRestaurantBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Recherche - {{ parent() }}*/
/* {% endblock %}*/
/* {% block rrplatform_search %}*/
/*     {% include "RRCoreBundle:Default:search.html.twig" %}*/
/* {% endblock %}*/
/* {% block map %}*/
/*     {{ google_map(map) }}*/
/* {% endblock %}*/
/* */
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
