<?php

/* ::layout.html.twig */
class __TwigTemplate_edac31b67019276a33b8505dcd87d6a8be755b950d10d1c4c6cb30f9a9f64a1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'adds' => array($this, 'block_adds'),
            'rrplatform_search' => array($this, 'block_rrplatform_search'),
            'map' => array($this, 'block_map'),
            'fos_user' => array($this, 'block_fos_user'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff27f50944291af8a61d162901d2329003fc26ce61a66d0fbe5ad42165d9617c = $this->env->getExtension("native_profiler");
        $__internal_ff27f50944291af8a61d162901d2329003fc26ce61a66d0fbe5ad42165d9617c->enter($__internal_ff27f50944291af8a61d162901d2329003fc26ce61a66d0fbe5ad42165d9617c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">



<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "</head>

<body>

<div class=\"mdl-layout mdl-js-layout
            mdl-layout--fixed-header\">
    <header class=\"mdl-layout__header\">
        <div class=\"mdl-layout__header-row\">
            <span class=\"mdl-layout-title\" id=\"title\"><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("rr_core_homepage");
        echo "\"><div id=\"RRLogoText\" class=\"mdl-cell--hide-phone\">";
        $this->loadTemplate(":svg:RRtext.svg.twig", "::layout.html.twig", 29)->display($context);
        echo "</div><div class=\"mdl-cell--hide-desktop mdl-cell--hide-tablet\">";
        $this->loadTemplate(":svg:iconRRBlackShadow.svg.twig", "::layout.html.twig", 29)->display($context);
        echo "</div></a></span>
            <div class=\"mdl-layout-spacer\"></div>
            ";
        // line 31
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 32
            echo "            <div class=\"mdl-cell--hide-phone\">Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
            echo "</div>
            ";
        }
        // line 34
        echo "            <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right\">

                <label class=\"mdl-button mdl-js-button mdl-button--icon\"
                       for=\"fixed-header-drawer-exp\">
                    <i class=\"material-icons\" >search</i>
                    </label>
                    <div class=\"mdl-textfield__expandable-holder\">
                        ";
        // line 42
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RRCoreBundle:Default:searchForm", array()));
        echo "
                    </div>
                </label>


            </div>
            <button class=\"mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect\" id=\"more-button\">
                <i class=\"material-icons\">more_vert</i>
            </button>
            <nav class=\"mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect\" for=\"more-button\">
                ";
        // line 52
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 53
            echo "
                    <div class=\"mdl-menu__item mdl-cell--hide-desktop mdl-cell--hide-tablet\">Bonjour ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</div>


                    <a class=\"mdl-menu__item\" href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Mon Compte</a>

                    <a class=\"mdl-menu__item\" href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
                ";
        } else {
            // line 61
            echo "
                    <a class=\"mdl-menu__item\" href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>

                    <a class=\"mdl-menu__item\" href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Inscription</a>

                    <a class=\"mdl-menu__item\" href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_registerPro");
            echo "\">Professionnel</a>
                ";
        }
        // line 68
        echo "                <a class=\"mdl-menu__item\" href=\"#\">A propos</a>
            </nav>
        </div>


    </header>
    <div id=\"drawer\" class=\"mdl-layout__drawer mdl-layout__drawer\">

        <span class=\"mdl-layout-title\">";
        // line 76
        $this->loadTemplate(":svg:iconRRShadow.svg.twig", "::layout.html.twig", 76)->display($context);
        echo "</span>
        <nav class=\"mdl-navigation\">
            <a class=\"mdl-navigation__link\" href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("rr_core_homepage");
        echo "\">Acceuil</a>
            <a class=\"mdl-navigation__link\" href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("rr_restaurant_home");
        echo "\">les restaurants</a>
            <a class=\"mdl-navigation__link\" href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("rr_restaurant_add");
        echo "\">Ajouter un restaurant</a>

            ";
        // line 82
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 83
            echo "                <a class=\"mdl-navigation__link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Mon Compte</a>
                <a class=\"mdl-navigation__link\" href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
            ";
        } else {
            // line 86
            echo "                <a class=\"mdl-navigation__link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se connecter</a>
                <a class=\"mdl-navigation__link\" href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'enregistrer</a>
                <a class=\"mdl-navigation__link\" href=\"";
            // line 88
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_registerPro");
            echo "\">Professionnel</a>
            ";
        }
        // line 90
        echo "        </nav>
    </div>
    <main class=\"mdl-layout__content\">
        <div class=\"page-content\">
            ";
        // line 94
        $this->displayBlock('content', $context, $blocks);
        // line 120
        echo "        </div>
    </main>

</div>






<!-- /container -->
<!-- Placed at the end of the document so the pages load faster -->

</body>

";
        // line 135
        $this->displayBlock('javascript', $context, $blocks);
        // line 138
        echo "</html>";
        
        $__internal_ff27f50944291af8a61d162901d2329003fc26ce61a66d0fbe5ad42165d9617c->leave($__internal_ff27f50944291af8a61d162901d2329003fc26ce61a66d0fbe5ad42165d9617c_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_e36b72d58074b7a0f71122bf6ca66065fdee2a90026234ae12fe58e00448c7bc = $this->env->getExtension("native_profiler");
        $__internal_e36b72d58074b7a0f71122bf6ca66065fdee2a90026234ae12fe58e00448c7bc->enter($__internal_e36b72d58074b7a0f71122bf6ca66065fdee2a90026234ae12fe58e00448c7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Resto'Regimes";
        
        $__internal_e36b72d58074b7a0f71122bf6ca66065fdee2a90026234ae12fe58e00448c7bc->leave($__internal_e36b72d58074b7a0f71122bf6ca66065fdee2a90026234ae12fe58e00448c7bc_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bf8037488a7e4bff63e722bca23ca2ca298128892e7572596ef3f31cb2c1ed61 = $this->env->getExtension("native_profiler");
        $__internal_bf8037488a7e4bff63e722bca23ca2ca298128892e7572596ef3f31cb2c1ed61->enter($__internal_bf8037488a7e4bff63e722bca23ca2ca298128892e7572596ef3f31cb2c1ed61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/css/material.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/css/simplePagination.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/material.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    ";
        
        $__internal_bf8037488a7e4bff63e722bca23ca2ca298128892e7572596ef3f31cb2c1ed61->leave($__internal_bf8037488a7e4bff63e722bca23ca2ca298128892e7572596ef3f31cb2c1ed61_prof);

    }

    // line 94
    public function block_content($context, array $blocks = array())
    {
        $__internal_cc288cab2dfaac29458ff03be44eeab10d0cbd5b86a54a93d1b9a29f2e68e00b = $this->env->getExtension("native_profiler");
        $__internal_cc288cab2dfaac29458ff03be44eeab10d0cbd5b86a54a93d1b9a29f2e68e00b->enter($__internal_cc288cab2dfaac29458ff03be44eeab10d0cbd5b86a54a93d1b9a29f2e68e00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 95
        echo "                <div class=\"mdl-grid mdl-grid--no-spacing\">
                    <div class=\"mdl-cell mdl-cell--2-col\">
                    </div>
                    <div class=\"mdl-cell mdl-cell--10-col\">
                        ";
        // line 99
        $this->displayBlock('adds', $context, $blocks);
        // line 101
        echo "                    </div>
                </div>
                <div class=\"mdl-grid\">
                    <div class=\"mdl-cell mdl-cell--2-col mdl-cell--6-col-phone  mdl-cell--4-col-tablet\">
                        ";
        // line 105
        $this->displayBlock('rrplatform_search', $context, $blocks);
        // line 107
        echo "                    </div>
                    <div class=\"mdl-cell mdl-cell--5-col mdl-cell--6-col-phone mdl-cell--4-col-tablet\">
                        ";
        // line 109
        $this->displayBlock('map', $context, $blocks);
        // line 111
        echo "                        ";
        $this->displayBlock('fos_user', $context, $blocks);
        // line 113
        echo "                    </div>
                    <div class=\"mdl-cell mdl-cell--5-col mdl-cell--6-col-phone mdl-cell--8-col-tablet\">
                        ";
        // line 115
        $this->displayBlock('body', $context, $blocks);
        // line 117
        echo "                    </div>
                </div>
            ";
        
        $__internal_cc288cab2dfaac29458ff03be44eeab10d0cbd5b86a54a93d1b9a29f2e68e00b->leave($__internal_cc288cab2dfaac29458ff03be44eeab10d0cbd5b86a54a93d1b9a29f2e68e00b_prof);

    }

    // line 99
    public function block_adds($context, array $blocks = array())
    {
        $__internal_bf251ce23a062cf33dea2bbcb26aac2847e4662f4247a7de6c2ffc99763fb632 = $this->env->getExtension("native_profiler");
        $__internal_bf251ce23a062cf33dea2bbcb26aac2847e4662f4247a7de6c2ffc99763fb632->enter($__internal_bf251ce23a062cf33dea2bbcb26aac2847e4662f4247a7de6c2ffc99763fb632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adds"));

        // line 100
        echo "                        ";
        
        $__internal_bf251ce23a062cf33dea2bbcb26aac2847e4662f4247a7de6c2ffc99763fb632->leave($__internal_bf251ce23a062cf33dea2bbcb26aac2847e4662f4247a7de6c2ffc99763fb632_prof);

    }

    // line 105
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_01f0db96c82661086a6f70c771876887938f8e5ab3aacd3be7df92cca8279eae = $this->env->getExtension("native_profiler");
        $__internal_01f0db96c82661086a6f70c771876887938f8e5ab3aacd3be7df92cca8279eae->enter($__internal_01f0db96c82661086a6f70c771876887938f8e5ab3aacd3be7df92cca8279eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 106
        echo "                        ";
        
        $__internal_01f0db96c82661086a6f70c771876887938f8e5ab3aacd3be7df92cca8279eae->leave($__internal_01f0db96c82661086a6f70c771876887938f8e5ab3aacd3be7df92cca8279eae_prof);

    }

    // line 109
    public function block_map($context, array $blocks = array())
    {
        $__internal_a455e55af3562bd03728f02abbfe29914187bfccd4d809233ac30300ba932514 = $this->env->getExtension("native_profiler");
        $__internal_a455e55af3562bd03728f02abbfe29914187bfccd4d809233ac30300ba932514->enter($__internal_a455e55af3562bd03728f02abbfe29914187bfccd4d809233ac30300ba932514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "map"));

        // line 110
        echo "                        ";
        
        $__internal_a455e55af3562bd03728f02abbfe29914187bfccd4d809233ac30300ba932514->leave($__internal_a455e55af3562bd03728f02abbfe29914187bfccd4d809233ac30300ba932514_prof);

    }

    // line 111
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_19d0b9930138d6ae609e6b56db3d101258dd133b12532668bee40fc0920f2a82 = $this->env->getExtension("native_profiler");
        $__internal_19d0b9930138d6ae609e6b56db3d101258dd133b12532668bee40fc0920f2a82->enter($__internal_19d0b9930138d6ae609e6b56db3d101258dd133b12532668bee40fc0920f2a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 112
        echo "                        ";
        
        $__internal_19d0b9930138d6ae609e6b56db3d101258dd133b12532668bee40fc0920f2a82->leave($__internal_19d0b9930138d6ae609e6b56db3d101258dd133b12532668bee40fc0920f2a82_prof);

    }

    // line 115
    public function block_body($context, array $blocks = array())
    {
        $__internal_585fe704576d24f2b0da141bc88b2f0245fc4877094e3746569a8eb92650a3aa = $this->env->getExtension("native_profiler");
        $__internal_585fe704576d24f2b0da141bc88b2f0245fc4877094e3746569a8eb92650a3aa->enter($__internal_585fe704576d24f2b0da141bc88b2f0245fc4877094e3746569a8eb92650a3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 116
        echo "                        ";
        
        $__internal_585fe704576d24f2b0da141bc88b2f0245fc4877094e3746569a8eb92650a3aa->leave($__internal_585fe704576d24f2b0da141bc88b2f0245fc4877094e3746569a8eb92650a3aa_prof);

    }

    // line 135
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d83cfaf92a68c79f41848e2e265ff99b12def9696c4117f3caf1529e75b6f5a9 = $this->env->getExtension("native_profiler");
        $__internal_d83cfaf92a68c79f41848e2e265ff99b12def9696c4117f3caf1529e75b6f5a9->enter($__internal_d83cfaf92a68c79f41848e2e265ff99b12def9696c4117f3caf1529e75b6f5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 136
        echo "
";
        
        $__internal_d83cfaf92a68c79f41848e2e265ff99b12def9696c4117f3caf1529e75b6f5a9->leave($__internal_d83cfaf92a68c79f41848e2e265ff99b12def9696c4117f3caf1529e75b6f5a9_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 136,  381 => 135,  374 => 116,  368 => 115,  361 => 112,  355 => 111,  348 => 110,  342 => 109,  335 => 106,  329 => 105,  322 => 100,  316 => 99,  307 => 117,  305 => 115,  301 => 113,  298 => 111,  296 => 109,  292 => 107,  290 => 105,  284 => 101,  282 => 99,  276 => 95,  270 => 94,  260 => 18,  255 => 16,  251 => 15,  246 => 14,  240 => 13,  228 => 9,  221 => 138,  219 => 135,  202 => 120,  200 => 94,  194 => 90,  189 => 88,  185 => 87,  180 => 86,  175 => 84,  170 => 83,  168 => 82,  163 => 80,  159 => 79,  155 => 78,  150 => 76,  140 => 68,  135 => 66,  130 => 64,  125 => 62,  122 => 61,  117 => 59,  112 => 57,  106 => 54,  103 => 53,  101 => 52,  88 => 42,  78 => 34,  70 => 32,  68 => 31,  59 => 29,  49 => 21,  47 => 13,  40 => 9,  31 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* */
/* */
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{% block title %}Resto'Regimes{% endblock %}</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/rrcore/css/material.min.css') }}" type="text/css" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/rrcore/css/style.css') }}" type="text/css" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/rrcore/css/simplePagination.css') }}" type="text/css" />*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>*/
/*         <script src="{{ asset('bundles/rrcore/js/material.min.js') }}"></script>*/
/*         <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">*/
/*     {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/* */
/* <div class="mdl-layout mdl-js-layout*/
/*             mdl-layout--fixed-header">*/
/*     <header class="mdl-layout__header">*/
/*         <div class="mdl-layout__header-row">*/
/*             <span class="mdl-layout-title" id="title"><a href="{{ path('rr_core_homepage') }}"><div id="RRLogoText" class="mdl-cell--hide-phone">{% include(":svg:RRtext.svg.twig") %}</div><div class="mdl-cell--hide-desktop mdl-cell--hide-tablet">{% include(":svg:iconRRBlackShadow.svg.twig") %}</div></a></span>*/
/*             <div class="mdl-layout-spacer"></div>*/
/*             {% if app.user is not null %}*/
/*             <div class="mdl-cell--hide-phone">Bonjour {{ app.user.username }} - {{ app.user.email }}</div>*/
/*             {% endif %}*/
/*             <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable*/
/*                   mdl-textfield--floating-label mdl-textfield--align-right">*/
/* */
/*                 <label class="mdl-button mdl-js-button mdl-button--icon"*/
/*                        for="fixed-header-drawer-exp">*/
/*                     <i class="material-icons" >search</i>*/
/*                     </label>*/
/*                     <div class="mdl-textfield__expandable-holder">*/
/*                         {{ render(controller('RRCoreBundle:Default:searchForm', {})) }}*/
/*                     </div>*/
/*                 </label>*/
/* */
/* */
/*             </div>*/
/*             <button class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">*/
/*                 <i class="material-icons">more_vert</i>*/
/*             </button>*/
/*             <nav class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">*/
/*                 {% if app.user is not null %}*/
/* */
/*                     <div class="mdl-menu__item mdl-cell--hide-desktop mdl-cell--hide-tablet">Bonjour {{ app.user.username }}</div>*/
/* */
/* */
/*                     <a class="mdl-menu__item" href="{{ path('fos_user_profile_show') }}">Mon Compte</a>*/
/* */
/*                     <a class="mdl-menu__item" href="{{ path('fos_user_security_logout') }}">Logout</a>*/
/*                 {% else %}*/
/* */
/*                     <a class="mdl-menu__item" href="{{ path('fos_user_security_login') }}">Connexion</a>*/
/* */
/*                     <a class="mdl-menu__item" href="{{ path('fos_user_registration_register') }}">Inscription</a>*/
/* */
/*                     <a class="mdl-menu__item" href="{{ path('fos_user_registration_registerPro') }}">Professionnel</a>*/
/*                 {% endif %}*/
/*                 <a class="mdl-menu__item" href="#">A propos</a>*/
/*             </nav>*/
/*         </div>*/
/* */
/* */
/*     </header>*/
/*     <div id="drawer" class="mdl-layout__drawer mdl-layout__drawer">*/
/* */
/*         <span class="mdl-layout-title">{% include(":svg:iconRRShadow.svg.twig") %}</span>*/
/*         <nav class="mdl-navigation">*/
/*             <a class="mdl-navigation__link" href="{{ path('rr_core_homepage') }}">Acceuil</a>*/
/*             <a class="mdl-navigation__link" href="{{ path('rr_restaurant_home') }}">les restaurants</a>*/
/*             <a class="mdl-navigation__link" href="{{ path('rr_restaurant_add') }}">Ajouter un restaurant</a>*/
/* */
/*             {% if app.user is not null %}*/
/*                 <a class="mdl-navigation__link" href="{{ path('fos_user_profile_show') }}">Mon Compte</a>*/
/*                 <a class="mdl-navigation__link" href="{{ path('fos_user_security_logout') }}">Logout</a>*/
/*             {% else %}*/
/*                 <a class="mdl-navigation__link" href="{{ path('fos_user_security_login') }}">Se connecter</a>*/
/*                 <a class="mdl-navigation__link" href="{{ path('fos_user_registration_register') }}">S'enregistrer</a>*/
/*                 <a class="mdl-navigation__link" href="{{ path('fos_user_registration_registerPro') }}">Professionnel</a>*/
/*             {% endif %}*/
/*         </nav>*/
/*     </div>*/
/*     <main class="mdl-layout__content">*/
/*         <div class="page-content">*/
/*             {% block content %}*/
/*                 <div class="mdl-grid mdl-grid--no-spacing">*/
/*                     <div class="mdl-cell mdl-cell--2-col">*/
/*                     </div>*/
/*                     <div class="mdl-cell mdl-cell--10-col">*/
/*                         {% block adds %}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="mdl-grid">*/
/*                     <div class="mdl-cell mdl-cell--2-col mdl-cell--6-col-phone  mdl-cell--4-col-tablet">*/
/*                         {% block rrplatform_search %}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                     <div class="mdl-cell mdl-cell--5-col mdl-cell--6-col-phone mdl-cell--4-col-tablet">*/
/*                         {% block map %}*/
/*                         {% endblock %}*/
/*                         {% block fos_user %}*/
/*                         {% endblock fos_user %}*/
/*                     </div>*/
/*                     <div class="mdl-cell mdl-cell--5-col mdl-cell--6-col-phone mdl-cell--8-col-tablet">*/
/*                         {% block body %}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock %}*/
/*         </div>*/
/*     </main>*/
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* <!-- /container -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* */
/* </body>*/
/* */
/* {% block javascript %}*/
/* */
/* {% endblock %}*/
/* </html>*/
