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
        $__internal_78b5bb42780661801c52decf057013a4fe4be22d579e47b74fb955c188ade85e = $this->env->getExtension("native_profiler");
        $__internal_78b5bb42780661801c52decf057013a4fe4be22d579e47b74fb955c188ade85e->enter($__internal_78b5bb42780661801c52decf057013a4fe4be22d579e47b74fb955c188ade85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle:Restaurant:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78b5bb42780661801c52decf057013a4fe4be22d579e47b74fb955c188ade85e->leave($__internal_78b5bb42780661801c52decf057013a4fe4be22d579e47b74fb955c188ade85e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_82ca4acf2fdb79f409bf67de14c5337c7841e44616dc46fc6eb73d956f8782f2 = $this->env->getExtension("native_profiler");
        $__internal_82ca4acf2fdb79f409bf67de14c5337c7841e44616dc46fc6eb73d956f8782f2->enter($__internal_82ca4acf2fdb79f409bf67de14c5337c7841e44616dc46fc6eb73d956f8782f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_82ca4acf2fdb79f409bf67de14c5337c7841e44616dc46fc6eb73d956f8782f2->leave($__internal_82ca4acf2fdb79f409bf67de14c5337c7841e44616dc46fc6eb73d956f8782f2_prof);

    }

    // line 8
    public function block_map($context, array $blocks = array())
    {
        $__internal_da0b322704ee97b6dfc11ed493b9143dc919868bec2c87b7e15c776f0dcf8da0 = $this->env->getExtension("native_profiler");
        $__internal_da0b322704ee97b6dfc11ed493b9143dc919868bec2c87b7e15c776f0dcf8da0->enter($__internal_da0b322704ee97b6dfc11ed493b9143dc919868bec2c87b7e15c776f0dcf8da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "map"));

        // line 9
        echo "    ";
        echo $this->env->getExtension('ivory_google_map')->renderMap((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "
";
        
        $__internal_da0b322704ee97b6dfc11ed493b9143dc919868bec2c87b7e15c776f0dcf8da0->leave($__internal_da0b322704ee97b6dfc11ed493b9143dc919868bec2c87b7e15c776f0dcf8da0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ffd4cdf57debe9a24b250d88558b005bc62e206f462372dd9621bc43c7483f4 = $this->env->getExtension("native_profiler");
        $__internal_8ffd4cdf57debe9a24b250d88558b005bc62e206f462372dd9621bc43c7483f4->enter($__internal_8ffd4cdf57debe9a24b250d88558b005bc62e206f462372dd9621bc43c7483f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\" style=\"height:400px;\">
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
            echo "                    <div class=\"mdl-card mdl-shadow--2dp\" style=\"width:90%;min-height:100px;\">
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
                            ";
            // line 34
            echo $this->env->getExtension('address')->address($this->getAttribute($context["restaurant"], "address", array()));
            echo "
                            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["restaurant"], "regimes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["regime"]) {
                // line 36
                echo "                                ";
                if (($this->getAttribute($context["regime"], "id", array()) == 1)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/markerV.png"), "html", null, true);
                    echo "\">";
                }
                // line 37
                echo "                                ";
                if (($this->getAttribute($context["regime"], "id", array()) == 2)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/markerVL.png"), "html", null, true);
                    echo "\">";
                }
                // line 38
                echo "                                ";
                if (($this->getAttribute($context["regime"], "id", array()) == 3)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/markerG.png"), "html", null, true);
                    echo "\">";
                }
                // line 39
                echo "                                ";
                if (($this->getAttribute($context["regime"], "id", array()) == 4)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/markerD.png"), "html", null, true);
                    echo "\">";
                }
                // line 40
                echo "                                ";
                if (($this->getAttribute($context["regime"], "id", array()) == 5)) {
                    echo "<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/markerC.png"), "html", null, true);
                    echo "\">";
                }
                // line 41
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['regime'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                        </div>
                        <div class=\"mdl-card__menu\">
                            <button class=\"mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect\">
                                <i class=\"material-icons\">share</i>
                            </button>
                        </div>
                    </div>
                    <div style=\"height: 10px;\"></div>
           ";
            // line 50
            $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
            // line 51
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "            <b>Aucun Restaurant trouvé</b>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                </div>
    </div>

    <a href=\"#\" id=\"prev\" onclick=\"prevPage()\">Prev page</a>
    <a href=\"#\" id=\"next\" onclick=\"nextPage()\">Next page</a>
    <script>
        var page=1;
        showPage(page);
        function showPage(page) {
            \$('.pagination .post:not(#page-'+page+')').hide();
            \$('.pagination .post#page-'+page).show();
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
        
        $__internal_8ffd4cdf57debe9a24b250d88558b005bc62e206f462372dd9621bc43c7483f4->leave($__internal_8ffd4cdf57debe9a24b250d88558b005bc62e206f462372dd9621bc43c7483f4_prof);

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
        return array (  209 => 54,  202 => 52,  197 => 51,  195 => 50,  185 => 42,  179 => 41,  172 => 40,  165 => 39,  158 => 38,  151 => 37,  144 => 36,  140 => 35,  136 => 34,  128 => 29,  124 => 28,  117 => 27,  115 => 26,  112 => 25,  109 => 24,  107 => 23,  103 => 22,  100 => 21,  97 => 20,  94 => 19,  89 => 18,  84 => 17,  81 => 16,  79 => 15,  74 => 12,  68 => 11,  58 => 9,  52 => 8,  42 => 6,  36 => 5,  11 => 3,);
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
/* */
/*     <div class="pagination">*/
/*         {% set count=0 %}*/
/*         {% set numPage=1 %}*/
/*         <div class="post" id="page-{{ numPage }}" style="height:400px;">*/
/*        {% for restaurant in listRestaurants %}*/
/*             {% if count==2 %}*/
/*                 {% set numPage=numPage+1 %}*/
/*                 </div>*/
/*                 <div class="post" id="page-{{ numPage }}">*/
/*                 {% set count=0 %}*/
/*             {% endif %}*/
/*                     <div class="mdl-card mdl-shadow--2dp" style="width:90%;min-height:100px;">*/
/*                         <div class="mdl-card__title" {% if restaurant.image1 is not null and restaurant.image1.imageFile is not null %}*/
/*                             style=" background: url('{{ asset(vich_uploader_asset(restaurant.image1,'imageFile')) }}') center / cover; "{% endif %}>*/
/*                             <a class="mdl-button mdl-button--raised mdl-button--colored" href="{{ path('rr_restaurant_view', {'id': restaurant.id}) }}">*/
/*                                 {{ restaurant.nom }}*/
/*                             </a>*/
/* */
/*                         </div>*/
/*                         <div class="mdl-card__actions mdl-card--border">*/
/*                             {{ restaurant.address|address()|raw }}*/
/*                             {% for regime in restaurant.regimes %}*/
/*                                 {% if regime.id==1%}<img src="{{ asset('bundles/rrcore/images/markerV.png') }}">{% endif %}*/
/*                                 {% if regime.id==2%}<img src="{{ asset('bundles/rrcore/images/markerVL.png') }}">{% endif %}*/
/*                                 {% if regime.id==3%}<img src="{{ asset('bundles/rrcore/images/markerG.png') }}">{% endif %}*/
/*                                 {% if regime.id==4%}<img src="{{ asset('bundles/rrcore/images/markerD.png') }}">{% endif %}*/
/*                                 {% if regime.id==5%}<img src="{{ asset('bundles/rrcore/images/markerC.png') }}">{% endif %}*/
/*                             {% endfor %}*/
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
/*     <a href="#" id="prev" onclick="prevPage()">Prev page</a>*/
/*     <a href="#" id="next" onclick="nextPage()">Next page</a>*/
/*     <script>*/
/*         var page=1;*/
/*         showPage(page);*/
/*         function showPage(page) {*/
/*             $('.pagination .post:not(#page-'+page+')').hide();*/
/*             $('.pagination .post#page-'+page).show();*/
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
/* */
/* */
/* */
/* {% endblock %}*/
