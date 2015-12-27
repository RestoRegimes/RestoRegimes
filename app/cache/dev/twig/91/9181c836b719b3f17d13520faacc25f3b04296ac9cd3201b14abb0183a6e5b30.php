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
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa9e9499d540cdf9e15e204543c570b6bca92e5e77c7389608fce48ff7cae8d2 = $this->env->getExtension("native_profiler");
        $__internal_fa9e9499d540cdf9e15e204543c570b6bca92e5e77c7389608fce48ff7cae8d2->enter($__internal_fa9e9499d540cdf9e15e204543c570b6bca92e5e77c7389608fce48ff7cae8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 19
        echo "
</head>

<body>

<div class=\"mdl-layout mdl-js-layout
            mdl-layout--fixed-header\">
    <header class=\"mdl-layout__header\">
        <div class=\"mdl-layout__header-row\">
            <span class=\"mdl-layout-title\" id=\"title\"><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("rr_core_homepage");
        echo "\"><div id=\"RRLogoText\" class=\"mdl-cell--hide-phone\">";
        $this->loadTemplate(":svg:RRtext.svg.twig", "::layout.html.twig", 28)->display($context);
        echo "</div><div class=\"mdl-cell--hide-desktop mdl-cell--hide-tablet\">";
        $this->loadTemplate(":svg:iconRRBlackShadow.svg.twig", "::layout.html.twig", 28)->display($context);
        echo "</div></a></span>
            <div class=\"mdl-layout-spacer\"></div>
            <div class=\"mdl-cell--hide-phone\">Bonjour ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "</div>
            <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right\">

                <label class=\"mdl-button mdl-js-button mdl-button--icon\"
                       for=\"fixed-header-drawer-exp\">
                    <i class=\"material-icons\" >search</i>
                    </label>
                    <div class=\"mdl-textfield__expandable-holder\">
                        ";
        // line 39
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
        // line 49
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 50
            echo "
                    <div class=\"mdl-menu__item mdl-cell--hide-desktop mdl-cell--hide-tablet\">Bonjour ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</div>


                    <a class=\"mdl-menu__item\" href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Mon Compte</a>

                    <a class=\"mdl-menu__item\" href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
                ";
        } else {
            // line 58
            echo "
                    <a class=\"mdl-menu__item\" href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a>

                    <a class=\"mdl-menu__item\" href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Inscription</a>

                    <a class=\"mdl-menu__item\" href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_registerPro");
            echo "\">Professionnel</a>
                ";
        }
        // line 65
        echo "                <a class=\"mdl-menu__item\" href=\"#\">A propos</a>
            </nav>
        </div>


    </header>
    <div id=\"drawer\" class=\"mdl-layout__drawer mdl-layout__drawer\">

        <span class=\"mdl-layout-title\">";
        // line 73
        $this->loadTemplate(":svg:iconRRShadow.svg.twig", "::layout.html.twig", 73)->display($context);
        echo "</span>
        <nav class=\"mdl-navigation\">
            <a class=\"mdl-navigation__link\" href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("rr_core_homepage");
        echo "\">Acceuil</a>
            <a class=\"mdl-navigation__link\" href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("rr_restaurant_home");
        echo "\">les restaurants</a>
            <a class=\"mdl-navigation__link\" href=\"";
        // line 77
        echo $this->env->getExtension('routing')->getPath("rr_restaurant_add");
        echo "\">Ajouter un restaurant</a>

            ";
        // line 79
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 80
            echo "                <a class=\"mdl-navigation__link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Mon Compte</a>
                <a class=\"mdl-navigation__link\" href=\"";
            // line 81
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
            ";
        } else {
            // line 83
            echo "                <a class=\"mdl-navigation__link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se connecter</a>
                <a class=\"mdl-navigation__link\" href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'enregistrer</a>
                <a class=\"mdl-navigation__link\" href=\"";
            // line 85
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_registerPro");
            echo "\">Professionnel</a>
            ";
        }
        // line 87
        echo "        </nav>
    </div>
    <main class=\"mdl-layout__content\">
        <div class=\"page-content\">
            ";
        // line 91
        $this->displayBlock('content', $context, $blocks);
        // line 94
        echo "        </div>
    </main>

</div>




";
        // line 102
        $this->displayBlock('javascript', $context, $blocks);
        // line 105
        echo "
<!-- /container -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\">
</script>
<script src=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js\"></script>

</body>


</html>";
        
        $__internal_fa9e9499d540cdf9e15e204543c570b6bca92e5e77c7389608fce48ff7cae8d2->leave($__internal_fa9e9499d540cdf9e15e204543c570b6bca92e5e77c7389608fce48ff7cae8d2_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b315fb77228b17e669f05fc620b1e4812906e22896e76e3310147cdb070ca36 = $this->env->getExtension("native_profiler");
        $__internal_5b315fb77228b17e669f05fc620b1e4812906e22896e76e3310147cdb070ca36->enter($__internal_5b315fb77228b17e669f05fc620b1e4812906e22896e76e3310147cdb070ca36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Resto'Regimes";
        
        $__internal_5b315fb77228b17e669f05fc620b1e4812906e22896e76e3310147cdb070ca36->leave($__internal_5b315fb77228b17e669f05fc620b1e4812906e22896e76e3310147cdb070ca36_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d27e5b5deb24111bc53b2e1a84b0e6ffdc7fe4edbf520812af27b219ddd69233 = $this->env->getExtension("native_profiler");
        $__internal_d27e5b5deb24111bc53b2e1a84b0e6ffdc7fe4edbf520812af27b219ddd69233->enter($__internal_d27e5b5deb24111bc53b2e1a84b0e6ffdc7fe4edbf520812af27b219ddd69233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/css/material.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/material.min.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
    ";
        
        $__internal_d27e5b5deb24111bc53b2e1a84b0e6ffdc7fe4edbf520812af27b219ddd69233->leave($__internal_d27e5b5deb24111bc53b2e1a84b0e6ffdc7fe4edbf520812af27b219ddd69233_prof);

    }

    // line 91
    public function block_content($context, array $blocks = array())
    {
        $__internal_5d0a601bc4b427d2919717dd45c410d99683f15a3aaddd54cdef1bda69f398ac = $this->env->getExtension("native_profiler");
        $__internal_5d0a601bc4b427d2919717dd45c410d99683f15a3aaddd54cdef1bda69f398ac->enter($__internal_5d0a601bc4b427d2919717dd45c410d99683f15a3aaddd54cdef1bda69f398ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 92
        echo "
            ";
        
        $__internal_5d0a601bc4b427d2919717dd45c410d99683f15a3aaddd54cdef1bda69f398ac->leave($__internal_5d0a601bc4b427d2919717dd45c410d99683f15a3aaddd54cdef1bda69f398ac_prof);

    }

    // line 102
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_ec514122e0a06c39aa22a443446be7fe7e897c76ea4108c691e2bcb6132fb52d = $this->env->getExtension("native_profiler");
        $__internal_ec514122e0a06c39aa22a443446be7fe7e897c76ea4108c691e2bcb6132fb52d->enter($__internal_ec514122e0a06c39aa22a443446be7fe7e897c76ea4108c691e2bcb6132fb52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 103
        echo "
";
        
        $__internal_ec514122e0a06c39aa22a443446be7fe7e897c76ea4108c691e2bcb6132fb52d->leave($__internal_ec514122e0a06c39aa22a443446be7fe7e897c76ea4108c691e2bcb6132fb52d_prof);

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
        return array (  278 => 103,  272 => 102,  264 => 92,  258 => 91,  248 => 16,  244 => 15,  239 => 14,  233 => 13,  221 => 9,  204 => 105,  202 => 102,  192 => 94,  190 => 91,  184 => 87,  179 => 85,  175 => 84,  170 => 83,  165 => 81,  160 => 80,  158 => 79,  153 => 77,  149 => 76,  145 => 75,  140 => 73,  130 => 65,  125 => 63,  120 => 61,  115 => 59,  112 => 58,  107 => 56,  102 => 54,  96 => 51,  93 => 50,  91 => 49,  78 => 39,  64 => 30,  55 => 28,  44 => 19,  42 => 13,  35 => 9,  26 => 2,);
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
/*         <script src="{{ asset('bundles/rrcore/js/material.min.js') }}"></script>*/
/*         <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">*/
/*     {% endblock %}*/
/* */
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
/*             <div class="mdl-cell--hide-phone">Bonjour {{ app.user.username }} - {{ app.user.email }}</div>*/
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
/* */
/*             {% endblock %}*/
/*         </div>*/
/*     </main>*/
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* {% block javascript %}*/
/* */
/* {% endblock %}*/
/* */
/* <!-- /container -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">*/
/* </script>*/
/* <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>*/
/* */
/* </body>*/
/* */
/* */
/* </html>*/
