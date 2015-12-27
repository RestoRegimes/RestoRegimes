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
            'jumbotron' => array($this, 'block_jumbotron'),
            'rrplatform_search' => array($this, 'block_rrplatform_search'),
            'fos_user' => array($this, 'block_fos_user'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27897972704959e6f5b64f20a86a35536eadd6dc32f480a9e64998bab06220c6 = $this->env->getExtension("native_profiler");
        $__internal_27897972704959e6f5b64f20a86a35536eadd6dc32f480a9e64998bab06220c6->enter($__internal_27897972704959e6f5b64f20a86a35536eadd6dc32f480a9e64998bab06220c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
            <span class=\"mdl-layout-title\"><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("rr_core_homepage");
        echo "\">";
        $this->loadTemplate(":svg:iconRRBlackShadow.svg.twig", "::layout.html.twig", 28)->display($context);
        echo "</a></span>
            <div class=\"mdl-layout-spacer\"></div>
            ";
        // line 30
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 31
            echo "                Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
            echo "
            ";
        }
        // line 33
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
    <div class=\"mdl-layout__drawer mdl-layout__drawer\">

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
        // line 122
        echo "        </div>
    </main>

</div>




";
        // line 130
        $this->displayBlock('javascript', $context, $blocks);
        // line 133
        echo "<!-- /container -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\">
</script>
<script src=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js\"></script>

</body>


</html>";
        
        $__internal_27897972704959e6f5b64f20a86a35536eadd6dc32f480a9e64998bab06220c6->leave($__internal_27897972704959e6f5b64f20a86a35536eadd6dc32f480a9e64998bab06220c6_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_41fe0f6511af7721ee732e053945506132780e212a4f850b93cbcad1f310c170 = $this->env->getExtension("native_profiler");
        $__internal_41fe0f6511af7721ee732e053945506132780e212a4f850b93cbcad1f310c170->enter($__internal_41fe0f6511af7721ee732e053945506132780e212a4f850b93cbcad1f310c170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Resto'Regimes";
        
        $__internal_41fe0f6511af7721ee732e053945506132780e212a4f850b93cbcad1f310c170->leave($__internal_41fe0f6511af7721ee732e053945506132780e212a4f850b93cbcad1f310c170_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8c22dc2bbbdefa6e74b1cab2ee93131b83e9d0dcf4ad1a3389944ed1b8acf949 = $this->env->getExtension("native_profiler");
        $__internal_8c22dc2bbbdefa6e74b1cab2ee93131b83e9d0dcf4ad1a3389944ed1b8acf949->enter($__internal_8c22dc2bbbdefa6e74b1cab2ee93131b83e9d0dcf4ad1a3389944ed1b8acf949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8c22dc2bbbdefa6e74b1cab2ee93131b83e9d0dcf4ad1a3389944ed1b8acf949->leave($__internal_8c22dc2bbbdefa6e74b1cab2ee93131b83e9d0dcf4ad1a3389944ed1b8acf949_prof);

    }

    // line 91
    public function block_content($context, array $blocks = array())
    {
        $__internal_06eb00d2a46b7f0b2c96469f5073c2cdd17ae3ce11ec582ef34d8e17d5b4abaa = $this->env->getExtension("native_profiler");
        $__internal_06eb00d2a46b7f0b2c96469f5073c2cdd17ae3ce11ec582ef34d8e17d5b4abaa->enter($__internal_06eb00d2a46b7f0b2c96469f5073c2cdd17ae3ce11ec582ef34d8e17d5b4abaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 92
        echo "


                ";
        // line 95
        $this->displayBlock('jumbotron', $context, $blocks);
        // line 97
        echo "
                <div class=\"mdl-grid\">
                    <div class=\"mdl-cell mdl-cell--2-col\">
                        ";
        // line 100
        $this->displayBlock('rrplatform_search', $context, $blocks);
        // line 102
        echo "                    </div>
                    <div class=\"mdl-cell mdl-cell--8-col\">
                        ";
        // line 104
        $this->loadTemplate(":svg:RRtext.svg.twig", "::layout.html.twig", 104)->display($context);
        // line 105
        echo "                        <div class=\"mdl-grid\">
                            <div class=\"mdl-cell mdl-cell--2-col\">

                            </div>
                            <div class=\"mdl-cell mdl-cell--8-col\">
                                ";
        // line 110
        $this->displayBlock('fos_user', $context, $blocks);
        // line 112
        echo "                            </div>
                        </div>
                        ";
        // line 114
        $this->displayBlock('body', $context, $blocks);
        // line 116
        echo "                    </div>

                </div>


            ";
        
        $__internal_06eb00d2a46b7f0b2c96469f5073c2cdd17ae3ce11ec582ef34d8e17d5b4abaa->leave($__internal_06eb00d2a46b7f0b2c96469f5073c2cdd17ae3ce11ec582ef34d8e17d5b4abaa_prof);

    }

    // line 95
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_a4f6e7e36a22bfef3e2be0489b93c97159e1071855a5c7a103fe49a81939b736 = $this->env->getExtension("native_profiler");
        $__internal_a4f6e7e36a22bfef3e2be0489b93c97159e1071855a5c7a103fe49a81939b736->enter($__internal_a4f6e7e36a22bfef3e2be0489b93c97159e1071855a5c7a103fe49a81939b736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 96
        echo "                ";
        
        $__internal_a4f6e7e36a22bfef3e2be0489b93c97159e1071855a5c7a103fe49a81939b736->leave($__internal_a4f6e7e36a22bfef3e2be0489b93c97159e1071855a5c7a103fe49a81939b736_prof);

    }

    // line 100
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_5b1b97f8ed937285754b7df74279e715f94cf57b6d45520d2e65154671bca6a1 = $this->env->getExtension("native_profiler");
        $__internal_5b1b97f8ed937285754b7df74279e715f94cf57b6d45520d2e65154671bca6a1->enter($__internal_5b1b97f8ed937285754b7df74279e715f94cf57b6d45520d2e65154671bca6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 101
        echo "                        ";
        
        $__internal_5b1b97f8ed937285754b7df74279e715f94cf57b6d45520d2e65154671bca6a1->leave($__internal_5b1b97f8ed937285754b7df74279e715f94cf57b6d45520d2e65154671bca6a1_prof);

    }

    // line 110
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_25479fa86ff2e0646fc864d63194ef63201526220710856c254b4fce9bd19975 = $this->env->getExtension("native_profiler");
        $__internal_25479fa86ff2e0646fc864d63194ef63201526220710856c254b4fce9bd19975->enter($__internal_25479fa86ff2e0646fc864d63194ef63201526220710856c254b4fce9bd19975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 111
        echo "                                ";
        
        $__internal_25479fa86ff2e0646fc864d63194ef63201526220710856c254b4fce9bd19975->leave($__internal_25479fa86ff2e0646fc864d63194ef63201526220710856c254b4fce9bd19975_prof);

    }

    // line 114
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa2f6d43f1238ec8cacd3c8855c6995ba52652a61e52fd026bc777a81617b7bc = $this->env->getExtension("native_profiler");
        $__internal_fa2f6d43f1238ec8cacd3c8855c6995ba52652a61e52fd026bc777a81617b7bc->enter($__internal_fa2f6d43f1238ec8cacd3c8855c6995ba52652a61e52fd026bc777a81617b7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 115
        echo "                        ";
        
        $__internal_fa2f6d43f1238ec8cacd3c8855c6995ba52652a61e52fd026bc777a81617b7bc->leave($__internal_fa2f6d43f1238ec8cacd3c8855c6995ba52652a61e52fd026bc777a81617b7bc_prof);

    }

    // line 130
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_590a27563c8d8e74fe5b21b2b929ce272a21994cd57707aaf623f764869fb021 = $this->env->getExtension("native_profiler");
        $__internal_590a27563c8d8e74fe5b21b2b929ce272a21994cd57707aaf623f764869fb021->enter($__internal_590a27563c8d8e74fe5b21b2b929ce272a21994cd57707aaf623f764869fb021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 131
        echo "
";
        
        $__internal_590a27563c8d8e74fe5b21b2b929ce272a21994cd57707aaf623f764869fb021->leave($__internal_590a27563c8d8e74fe5b21b2b929ce272a21994cd57707aaf623f764869fb021_prof);

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
        return array (  371 => 131,  365 => 130,  358 => 115,  352 => 114,  345 => 111,  339 => 110,  332 => 101,  326 => 100,  319 => 96,  313 => 95,  301 => 116,  299 => 114,  295 => 112,  293 => 110,  286 => 105,  284 => 104,  280 => 102,  278 => 100,  273 => 97,  271 => 95,  266 => 92,  260 => 91,  250 => 16,  246 => 15,  241 => 14,  235 => 13,  223 => 9,  207 => 133,  205 => 130,  195 => 122,  193 => 91,  187 => 87,  182 => 85,  178 => 84,  173 => 83,  168 => 81,  163 => 80,  161 => 79,  156 => 77,  152 => 76,  148 => 75,  143 => 73,  133 => 65,  128 => 63,  123 => 61,  118 => 59,  115 => 58,  110 => 56,  105 => 54,  102 => 53,  100 => 52,  87 => 42,  76 => 33,  68 => 31,  66 => 30,  59 => 28,  48 => 19,  46 => 13,  39 => 9,  30 => 2,);
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
/*             <span class="mdl-layout-title"><a href="{{ path('rr_core_homepage') }}">{% include(":svg:iconRRBlackShadow.svg.twig") %}</a></span>*/
/*             <div class="mdl-layout-spacer"></div>*/
/*             {% if app.user is not null %}*/
/*                 Bonjour {{ app.user.username }} - {{ app.user.email }}*/
/*             {% endif %}*/
/*             <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable*/
/*                   mdl-textfield--floating-label mdl-textfield--align-right">*/
/* */
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
/*     <div class="mdl-layout__drawer mdl-layout__drawer">*/
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
/* */
/* */
/*                 {% block jumbotron %}*/
/*                 {% endblock %}*/
/* */
/*                 <div class="mdl-grid">*/
/*                     <div class="mdl-cell mdl-cell--2-col">*/
/*                         {% block rrplatform_search %}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                     <div class="mdl-cell mdl-cell--8-col">*/
/*                         {% include(":svg:RRtext.svg.twig") %}*/
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
/* */
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
