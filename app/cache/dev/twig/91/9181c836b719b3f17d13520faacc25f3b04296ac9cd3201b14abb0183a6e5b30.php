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
        $__internal_1b078874dfa59cfe7d6743dc23066e2fbdf6a2eceebebb68d520dbc473052bfe = $this->env->getExtension("native_profiler");
        $__internal_1b078874dfa59cfe7d6743dc23066e2fbdf6a2eceebebb68d520dbc473052bfe->enter($__internal_1b078874dfa59cfe7d6743dc23066e2fbdf6a2eceebebb68d520dbc473052bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_1b078874dfa59cfe7d6743dc23066e2fbdf6a2eceebebb68d520dbc473052bfe->leave($__internal_1b078874dfa59cfe7d6743dc23066e2fbdf6a2eceebebb68d520dbc473052bfe_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad80c99ae3032a23d51f56ce3ed4f7a881d425784bb9a707269b83ac21f5a8ad = $this->env->getExtension("native_profiler");
        $__internal_ad80c99ae3032a23d51f56ce3ed4f7a881d425784bb9a707269b83ac21f5a8ad->enter($__internal_ad80c99ae3032a23d51f56ce3ed4f7a881d425784bb9a707269b83ac21f5a8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Resto'Regimes";
        
        $__internal_ad80c99ae3032a23d51f56ce3ed4f7a881d425784bb9a707269b83ac21f5a8ad->leave($__internal_ad80c99ae3032a23d51f56ce3ed4f7a881d425784bb9a707269b83ac21f5a8ad_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8992fb2d1a2827dcf590c3eb2598771ca02e2bd7afb2dee20a135bc9f898a4e = $this->env->getExtension("native_profiler");
        $__internal_f8992fb2d1a2827dcf590c3eb2598771ca02e2bd7afb2dee20a135bc9f898a4e->enter($__internal_f8992fb2d1a2827dcf590c3eb2598771ca02e2bd7afb2dee20a135bc9f898a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f8992fb2d1a2827dcf590c3eb2598771ca02e2bd7afb2dee20a135bc9f898a4e->leave($__internal_f8992fb2d1a2827dcf590c3eb2598771ca02e2bd7afb2dee20a135bc9f898a4e_prof);

    }

    // line 94
    public function block_content($context, array $blocks = array())
    {
        $__internal_326c729f2daeb0e6a7d3566b2d21322305e11d2fe7b6325f537e41103a7ff932 = $this->env->getExtension("native_profiler");
        $__internal_326c729f2daeb0e6a7d3566b2d21322305e11d2fe7b6325f537e41103a7ff932->enter($__internal_326c729f2daeb0e6a7d3566b2d21322305e11d2fe7b6325f537e41103a7ff932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_326c729f2daeb0e6a7d3566b2d21322305e11d2fe7b6325f537e41103a7ff932->leave($__internal_326c729f2daeb0e6a7d3566b2d21322305e11d2fe7b6325f537e41103a7ff932_prof);

    }

    // line 97
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_70c469a22f5ca07fc3c3881b551d022183909cecc52f5eb725176586259392df = $this->env->getExtension("native_profiler");
        $__internal_70c469a22f5ca07fc3c3881b551d022183909cecc52f5eb725176586259392df->enter($__internal_70c469a22f5ca07fc3c3881b551d022183909cecc52f5eb725176586259392df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 98
        echo "                        ";
        
        $__internal_70c469a22f5ca07fc3c3881b551d022183909cecc52f5eb725176586259392df->leave($__internal_70c469a22f5ca07fc3c3881b551d022183909cecc52f5eb725176586259392df_prof);

    }

    // line 107
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_277a3ba2066614e75399ab2c0df664e32cb71f292f2b8c59b6f67cc0119cdfe0 = $this->env->getExtension("native_profiler");
        $__internal_277a3ba2066614e75399ab2c0df664e32cb71f292f2b8c59b6f67cc0119cdfe0->enter($__internal_277a3ba2066614e75399ab2c0df664e32cb71f292f2b8c59b6f67cc0119cdfe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 108
        echo "                                ";
        
        $__internal_277a3ba2066614e75399ab2c0df664e32cb71f292f2b8c59b6f67cc0119cdfe0->leave($__internal_277a3ba2066614e75399ab2c0df664e32cb71f292f2b8c59b6f67cc0119cdfe0_prof);

    }

    // line 111
    public function block_body($context, array $blocks = array())
    {
        $__internal_66293d24a309a102d3f2244e952d0f292e39c092550b1d4042010368db258227 = $this->env->getExtension("native_profiler");
        $__internal_66293d24a309a102d3f2244e952d0f292e39c092550b1d4042010368db258227->enter($__internal_66293d24a309a102d3f2244e952d0f292e39c092550b1d4042010368db258227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 112
        echo "                        ";
        
        $__internal_66293d24a309a102d3f2244e952d0f292e39c092550b1d4042010368db258227->leave($__internal_66293d24a309a102d3f2244e952d0f292e39c092550b1d4042010368db258227_prof);

    }

    // line 126
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d5f66099ae70f7498cc878891d75ee5fbd906b9b05c2b8ac91d3c84594ff2880 = $this->env->getExtension("native_profiler");
        $__internal_d5f66099ae70f7498cc878891d75ee5fbd906b9b05c2b8ac91d3c84594ff2880->enter($__internal_d5f66099ae70f7498cc878891d75ee5fbd906b9b05c2b8ac91d3c84594ff2880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 127
        echo "
";
        
        $__internal_d5f66099ae70f7498cc878891d75ee5fbd906b9b05c2b8ac91d3c84594ff2880->leave($__internal_d5f66099ae70f7498cc878891d75ee5fbd906b9b05c2b8ac91d3c84594ff2880_prof);

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
