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
            'rrplatform_search' => array($this, 'block_rrplatform_search'),
            'fos_user' => array($this, 'block_fos_user'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7c24ae7b6ed80130cb94fba3d80687b876ab8c876cdef73d651ddc08cacaa55 = $this->env->getExtension("native_profiler");
        $__internal_d7c24ae7b6ed80130cb94fba3d80687b876ab8c876cdef73d651ddc08cacaa55->enter($__internal_d7c24ae7b6ed80130cb94fba3d80687b876ab8c876cdef73d651ddc08cacaa55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 117
        echo "        </div>
    </main>

</div>





";
        // line 126
        $this->displayBlock('javascript', $context, $blocks);
        // line 129
        echo "<!-- /container -->
<!-- Placed at the end of the document so the pages load faster -->

</body>


</html>";
        
        $__internal_d7c24ae7b6ed80130cb94fba3d80687b876ab8c876cdef73d651ddc08cacaa55->leave($__internal_d7c24ae7b6ed80130cb94fba3d80687b876ab8c876cdef73d651ddc08cacaa55_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_827f30be57cd7e400a9af938e06b991109a742b3648a53f8aa650e980ab9f5af = $this->env->getExtension("native_profiler");
        $__internal_827f30be57cd7e400a9af938e06b991109a742b3648a53f8aa650e980ab9f5af->enter($__internal_827f30be57cd7e400a9af938e06b991109a742b3648a53f8aa650e980ab9f5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Resto'Regimes";
        
        $__internal_827f30be57cd7e400a9af938e06b991109a742b3648a53f8aa650e980ab9f5af->leave($__internal_827f30be57cd7e400a9af938e06b991109a742b3648a53f8aa650e980ab9f5af_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c638b4de9425d9ad71db63466ee07efcbb5c4b0c7fbbfaaea9c0f1b0ef16d095 = $this->env->getExtension("native_profiler");
        $__internal_c638b4de9425d9ad71db63466ee07efcbb5c4b0c7fbbfaaea9c0f1b0ef16d095->enter($__internal_c638b4de9425d9ad71db63466ee07efcbb5c4b0c7fbbfaaea9c0f1b0ef16d095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c638b4de9425d9ad71db63466ee07efcbb5c4b0c7fbbfaaea9c0f1b0ef16d095->leave($__internal_c638b4de9425d9ad71db63466ee07efcbb5c4b0c7fbbfaaea9c0f1b0ef16d095_prof);

    }

    // line 94
    public function block_content($context, array $blocks = array())
    {
        $__internal_6477516754e4a9446bc06568f43c3a8f99bdd06ae2c0f0ea987d5a30fe71c74f = $this->env->getExtension("native_profiler");
        $__internal_6477516754e4a9446bc06568f43c3a8f99bdd06ae2c0f0ea987d5a30fe71c74f->enter($__internal_6477516754e4a9446bc06568f43c3a8f99bdd06ae2c0f0ea987d5a30fe71c74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 95
        echo "                <div class=\"mdl-grid\">
                    <div class=\"mdl-cell mdl-cell--2-col\">
                        ";
        // line 97
        $this->displayBlock('rrplatform_search', $context, $blocks);
        // line 99
        echo "                    </div>
                    <div class=\"mdl-cell mdl-cell--10-col\">

                        <div class=\"mdl-grid\">
                            <div class=\"mdl-cell mdl-cell--2-col\">

                            </div>
                            <div class=\"mdl-cell mdl-cell--8-col\">
                                ";
        // line 107
        $this->displayBlock('fos_user', $context, $blocks);
        // line 109
        echo "                            </div>
                        </div>
                        ";
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "                    </div>

                </div>
            ";
        
        $__internal_6477516754e4a9446bc06568f43c3a8f99bdd06ae2c0f0ea987d5a30fe71c74f->leave($__internal_6477516754e4a9446bc06568f43c3a8f99bdd06ae2c0f0ea987d5a30fe71c74f_prof);

    }

    // line 97
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_c2dc642bfe72719c6fbf778c38a022b6c647bb7432fbbd4216d496a900816f30 = $this->env->getExtension("native_profiler");
        $__internal_c2dc642bfe72719c6fbf778c38a022b6c647bb7432fbbd4216d496a900816f30->enter($__internal_c2dc642bfe72719c6fbf778c38a022b6c647bb7432fbbd4216d496a900816f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 98
        echo "                        ";
        
        $__internal_c2dc642bfe72719c6fbf778c38a022b6c647bb7432fbbd4216d496a900816f30->leave($__internal_c2dc642bfe72719c6fbf778c38a022b6c647bb7432fbbd4216d496a900816f30_prof);

    }

    // line 107
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_8bb148c2523a2dc9d2f156f89aa7193665664ec5c1ce3fb35b6efe9b44bc2ffb = $this->env->getExtension("native_profiler");
        $__internal_8bb148c2523a2dc9d2f156f89aa7193665664ec5c1ce3fb35b6efe9b44bc2ffb->enter($__internal_8bb148c2523a2dc9d2f156f89aa7193665664ec5c1ce3fb35b6efe9b44bc2ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 108
        echo "                                ";
        
        $__internal_8bb148c2523a2dc9d2f156f89aa7193665664ec5c1ce3fb35b6efe9b44bc2ffb->leave($__internal_8bb148c2523a2dc9d2f156f89aa7193665664ec5c1ce3fb35b6efe9b44bc2ffb_prof);

    }

    // line 111
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fd7aadfe6219641c7fdfa9f617e6418715a530c4f01c8ca3319c839b8a220d6 = $this->env->getExtension("native_profiler");
        $__internal_3fd7aadfe6219641c7fdfa9f617e6418715a530c4f01c8ca3319c839b8a220d6->enter($__internal_3fd7aadfe6219641c7fdfa9f617e6418715a530c4f01c8ca3319c839b8a220d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 112
        echo "                        ";
        
        $__internal_3fd7aadfe6219641c7fdfa9f617e6418715a530c4f01c8ca3319c839b8a220d6->leave($__internal_3fd7aadfe6219641c7fdfa9f617e6418715a530c4f01c8ca3319c839b8a220d6_prof);

    }

    // line 126
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_7b6f0d78b32d5928ae46689941482b32aa0d21b985bb0ee75279989abc6c231d = $this->env->getExtension("native_profiler");
        $__internal_7b6f0d78b32d5928ae46689941482b32aa0d21b985bb0ee75279989abc6c231d->enter($__internal_7b6f0d78b32d5928ae46689941482b32aa0d21b985bb0ee75279989abc6c231d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 127
        echo "
";
        
        $__internal_7b6f0d78b32d5928ae46689941482b32aa0d21b985bb0ee75279989abc6c231d->leave($__internal_7b6f0d78b32d5928ae46689941482b32aa0d21b985bb0ee75279989abc6c231d_prof);

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
        return array (  353 => 127,  347 => 126,  340 => 112,  334 => 111,  327 => 108,  321 => 107,  314 => 98,  308 => 97,  298 => 113,  296 => 111,  292 => 109,  290 => 107,  280 => 99,  278 => 97,  274 => 95,  268 => 94,  258 => 18,  253 => 16,  249 => 15,  244 => 14,  238 => 13,  226 => 9,  213 => 129,  211 => 126,  200 => 117,  198 => 94,  192 => 90,  187 => 88,  183 => 87,  178 => 86,  173 => 84,  168 => 83,  166 => 82,  161 => 80,  157 => 79,  153 => 78,  148 => 76,  138 => 68,  133 => 66,  128 => 64,  123 => 62,  120 => 61,  115 => 59,  110 => 57,  104 => 54,  101 => 53,  99 => 52,  86 => 42,  76 => 34,  68 => 32,  66 => 31,  57 => 29,  47 => 21,  45 => 13,  38 => 9,  29 => 2,);
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
/*                 <div class="mdl-grid">*/
/*                     <div class="mdl-cell mdl-cell--2-col">*/
/*                         {% block rrplatform_search %}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                     <div class="mdl-cell mdl-cell--10-col">*/
/* */
/*                         <div class="mdl-grid">*/
/*                             <div class="mdl-cell mdl-cell--2-col">*/
/* */
/*                             </div>*/
/*                             <div class="mdl-cell mdl-cell--8-col">*/
/*                                 {% block fos_user %}*/
/*                                 {% endblock fos_user %}*/
/*                             </div>*/
/*                         </div>*/
/*                         {% block body %}*/
/*                         {% endblock %}*/
/*                     </div>*/
/* */
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
/* {% block javascript %}*/
/* */
/* {% endblock %}*/
/* <!-- /container -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* */
/* </body>*/
/* */
/* */
/* </html>*/
