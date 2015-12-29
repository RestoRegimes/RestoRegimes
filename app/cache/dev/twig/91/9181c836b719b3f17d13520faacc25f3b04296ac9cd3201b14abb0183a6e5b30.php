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
            'infos' => array($this, 'block_infos'),
            'map' => array($this, 'block_map'),
            'fos_user' => array($this, 'block_fos_user'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ea6d72f1ea5e561d0aa813b8550f9388216fbd436409d54a872f165c372e318 = $this->env->getExtension("native_profiler");
        $__internal_6ea6d72f1ea5e561d0aa813b8550f9388216fbd436409d54a872f165c372e318->enter($__internal_6ea6d72f1ea5e561d0aa813b8550f9388216fbd436409d54a872f165c372e318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 122
        echo "        </div>
    </main>

</div>






<!-- /container -->
<!-- Placed at the end of the document so the pages load faster -->

</body>

";
        // line 137
        $this->displayBlock('javascript', $context, $blocks);
        // line 140
        echo "</html>";
        
        $__internal_6ea6d72f1ea5e561d0aa813b8550f9388216fbd436409d54a872f165c372e318->leave($__internal_6ea6d72f1ea5e561d0aa813b8550f9388216fbd436409d54a872f165c372e318_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d0a51b124a219793e2a2880d1716b4a4e978401cbeef18c15555161ba43cdd8 = $this->env->getExtension("native_profiler");
        $__internal_1d0a51b124a219793e2a2880d1716b4a4e978401cbeef18c15555161ba43cdd8->enter($__internal_1d0a51b124a219793e2a2880d1716b4a4e978401cbeef18c15555161ba43cdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Resto'Regimes";
        
        $__internal_1d0a51b124a219793e2a2880d1716b4a4e978401cbeef18c15555161ba43cdd8->leave($__internal_1d0a51b124a219793e2a2880d1716b4a4e978401cbeef18c15555161ba43cdd8_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bfa4aec07ab940a671f0faf4acfbcba3240271e6f8ce296f9e3decd1c8401ee6 = $this->env->getExtension("native_profiler");
        $__internal_bfa4aec07ab940a671f0faf4acfbcba3240271e6f8ce296f9e3decd1c8401ee6->enter($__internal_bfa4aec07ab940a671f0faf4acfbcba3240271e6f8ce296f9e3decd1c8401ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_bfa4aec07ab940a671f0faf4acfbcba3240271e6f8ce296f9e3decd1c8401ee6->leave($__internal_bfa4aec07ab940a671f0faf4acfbcba3240271e6f8ce296f9e3decd1c8401ee6_prof);

    }

    // line 94
    public function block_content($context, array $blocks = array())
    {
        $__internal_1fd8da544322b96a152d5964e1c5b4335636a3b32cc732a8fea223cee412265c = $this->env->getExtension("native_profiler");
        $__internal_1fd8da544322b96a152d5964e1c5b4335636a3b32cc732a8fea223cee412265c->enter($__internal_1fd8da544322b96a152d5964e1c5b4335636a3b32cc732a8fea223cee412265c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    ";
        // line 108
        $this->displayBlock('infos', $context, $blocks);
        // line 120
        echo "                </div>
            ";
        
        $__internal_1fd8da544322b96a152d5964e1c5b4335636a3b32cc732a8fea223cee412265c->leave($__internal_1fd8da544322b96a152d5964e1c5b4335636a3b32cc732a8fea223cee412265c_prof);

    }

    // line 99
    public function block_adds($context, array $blocks = array())
    {
        $__internal_41b517b2fa44550d1245c71c43f865350dccfbe5892b671683b886f8bd713107 = $this->env->getExtension("native_profiler");
        $__internal_41b517b2fa44550d1245c71c43f865350dccfbe5892b671683b886f8bd713107->enter($__internal_41b517b2fa44550d1245c71c43f865350dccfbe5892b671683b886f8bd713107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adds"));

        // line 100
        echo "                        ";
        
        $__internal_41b517b2fa44550d1245c71c43f865350dccfbe5892b671683b886f8bd713107->leave($__internal_41b517b2fa44550d1245c71c43f865350dccfbe5892b671683b886f8bd713107_prof);

    }

    // line 105
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_c183ee5acb222c415172fe62126b2d3f81f6c81d4a17c4f3262eb47a37df3645 = $this->env->getExtension("native_profiler");
        $__internal_c183ee5acb222c415172fe62126b2d3f81f6c81d4a17c4f3262eb47a37df3645->enter($__internal_c183ee5acb222c415172fe62126b2d3f81f6c81d4a17c4f3262eb47a37df3645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 106
        echo "                        ";
        
        $__internal_c183ee5acb222c415172fe62126b2d3f81f6c81d4a17c4f3262eb47a37df3645->leave($__internal_c183ee5acb222c415172fe62126b2d3f81f6c81d4a17c4f3262eb47a37df3645_prof);

    }

    // line 108
    public function block_infos($context, array $blocks = array())
    {
        $__internal_3152512f89e1e9326f978a14444b9939cfd693f60500a5ee76c44613643c7de9 = $this->env->getExtension("native_profiler");
        $__internal_3152512f89e1e9326f978a14444b9939cfd693f60500a5ee76c44613643c7de9->enter($__internal_3152512f89e1e9326f978a14444b9939cfd693f60500a5ee76c44613643c7de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "infos"));

        // line 109
        echo "                    <div class=\"mdl-cell mdl-cell--5-col mdl-cell--6-col-phone mdl-cell--4-col-tablet\">
                        ";
        // line 110
        $this->displayBlock('map', $context, $blocks);
        // line 112
        echo "                        ";
        $this->displayBlock('fos_user', $context, $blocks);
        // line 114
        echo "                    </div>
                    <div class=\"mdl-cell mdl-cell--5-col mdl-cell--6-col-phone mdl-cell--8-col-tablet\">
                        ";
        // line 116
        $this->displayBlock('body', $context, $blocks);
        // line 118
        echo "                    </div>
                    ";
        
        $__internal_3152512f89e1e9326f978a14444b9939cfd693f60500a5ee76c44613643c7de9->leave($__internal_3152512f89e1e9326f978a14444b9939cfd693f60500a5ee76c44613643c7de9_prof);

    }

    // line 110
    public function block_map($context, array $blocks = array())
    {
        $__internal_3cf9e26760a8c59f1bfe7a2db40097b1df46e172725e4253e26d52cc0212366c = $this->env->getExtension("native_profiler");
        $__internal_3cf9e26760a8c59f1bfe7a2db40097b1df46e172725e4253e26d52cc0212366c->enter($__internal_3cf9e26760a8c59f1bfe7a2db40097b1df46e172725e4253e26d52cc0212366c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "map"));

        // line 111
        echo "                        ";
        
        $__internal_3cf9e26760a8c59f1bfe7a2db40097b1df46e172725e4253e26d52cc0212366c->leave($__internal_3cf9e26760a8c59f1bfe7a2db40097b1df46e172725e4253e26d52cc0212366c_prof);

    }

    // line 112
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_62892123f2eb6a8ef414271bde0b5d4455732395b6c36b67f09653d14f02b78e = $this->env->getExtension("native_profiler");
        $__internal_62892123f2eb6a8ef414271bde0b5d4455732395b6c36b67f09653d14f02b78e->enter($__internal_62892123f2eb6a8ef414271bde0b5d4455732395b6c36b67f09653d14f02b78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 113
        echo "                        ";
        
        $__internal_62892123f2eb6a8ef414271bde0b5d4455732395b6c36b67f09653d14f02b78e->leave($__internal_62892123f2eb6a8ef414271bde0b5d4455732395b6c36b67f09653d14f02b78e_prof);

    }

    // line 116
    public function block_body($context, array $blocks = array())
    {
        $__internal_721975a8b1f01f1b1f381370dafcd96911b1961df7817c4b3394e24c2ad9cb00 = $this->env->getExtension("native_profiler");
        $__internal_721975a8b1f01f1b1f381370dafcd96911b1961df7817c4b3394e24c2ad9cb00->enter($__internal_721975a8b1f01f1b1f381370dafcd96911b1961df7817c4b3394e24c2ad9cb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 117
        echo "                        ";
        
        $__internal_721975a8b1f01f1b1f381370dafcd96911b1961df7817c4b3394e24c2ad9cb00->leave($__internal_721975a8b1f01f1b1f381370dafcd96911b1961df7817c4b3394e24c2ad9cb00_prof);

    }

    // line 137
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_5fbf7b9eeada6fb303c73395781f1e67c634f38f44ce18a872766b7f04f7d9c6 = $this->env->getExtension("native_profiler");
        $__internal_5fbf7b9eeada6fb303c73395781f1e67c634f38f44ce18a872766b7f04f7d9c6->enter($__internal_5fbf7b9eeada6fb303c73395781f1e67c634f38f44ce18a872766b7f04f7d9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 138
        echo "
";
        
        $__internal_5fbf7b9eeada6fb303c73395781f1e67c634f38f44ce18a872766b7f04f7d9c6->leave($__internal_5fbf7b9eeada6fb303c73395781f1e67c634f38f44ce18a872766b7f04f7d9c6_prof);

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
        return array (  405 => 138,  399 => 137,  392 => 117,  386 => 116,  379 => 113,  373 => 112,  366 => 111,  360 => 110,  352 => 118,  350 => 116,  346 => 114,  343 => 112,  341 => 110,  338 => 109,  332 => 108,  325 => 106,  319 => 105,  312 => 100,  306 => 99,  298 => 120,  296 => 108,  293 => 107,  291 => 105,  285 => 101,  283 => 99,  277 => 95,  271 => 94,  261 => 18,  256 => 16,  252 => 15,  247 => 14,  241 => 13,  229 => 9,  222 => 140,  220 => 137,  203 => 122,  201 => 94,  195 => 90,  190 => 88,  186 => 87,  181 => 86,  176 => 84,  171 => 83,  169 => 82,  164 => 80,  160 => 79,  156 => 78,  151 => 76,  141 => 68,  136 => 66,  131 => 64,  126 => 62,  123 => 61,  118 => 59,  113 => 57,  107 => 54,  104 => 53,  102 => 52,  89 => 42,  79 => 34,  71 => 32,  69 => 31,  60 => 29,  50 => 21,  48 => 13,  41 => 9,  32 => 2,);
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
/*                     {% block infos%}*/
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
/*                     {% endblock %}*/
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
