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
            'jumbotron' => array($this, 'block_jumbotron'),
            'fos_user' => array($this, 'block_fos_user'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8383412073d977de277222879b47de2cf254242d37f3e1dc915006822933fa21 = $this->env->getExtension("native_profiler");
        $__internal_8383412073d977de277222879b47de2cf254242d37f3e1dc915006822933fa21->enter($__internal_8383412073d977de277222879b47de2cf254242d37f3e1dc915006822933fa21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 94
        $this->displayBlock('jumbotron', $context, $blocks);
        // line 96
        echo "
            <div class=\"mdl-grid\">
                <div class=\"mdl-cell mdl-cell--2-col\">

                </div>
                <div class=\"mdl-cell mdl-cell--8-col\">
                    ";
        // line 102
        $this->loadTemplate(":svg:RRtext.svg.twig", "::layout.html.twig", 102)->display($context);
        // line 103
        echo "                   <div class=\"mdl-grid\">
                        <div class=\"mdl-cell mdl-cell--2-col\">
                        </div>
                        <div class=\"mdl-cell mdl-cell--8-col\">
                            ";
        // line 107
        $this->displayBlock('fos_user', $context, $blocks);
        // line 109
        echo "                        </div>
                        </div>
                    ";
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 113
        echo "                </div>

            </div>


            ";
        // line 118
        $this->displayBlock('content', $context, $blocks);
        // line 120
        echo "        </div>
    </main>

</div>




";
        // line 128
        $this->displayBlock('javascript', $context, $blocks);
        // line 131
        echo "<!-- /container -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\">
</script>
<script src=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js\"></script>

</body>


</html>";
        
        $__internal_8383412073d977de277222879b47de2cf254242d37f3e1dc915006822933fa21->leave($__internal_8383412073d977de277222879b47de2cf254242d37f3e1dc915006822933fa21_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_7399b5c31fb65629aee00ce335893d7669b7266a0a874aa33a6b0d94331640cc = $this->env->getExtension("native_profiler");
        $__internal_7399b5c31fb65629aee00ce335893d7669b7266a0a874aa33a6b0d94331640cc->enter($__internal_7399b5c31fb65629aee00ce335893d7669b7266a0a874aa33a6b0d94331640cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Resto'Regimes";
        
        $__internal_7399b5c31fb65629aee00ce335893d7669b7266a0a874aa33a6b0d94331640cc->leave($__internal_7399b5c31fb65629aee00ce335893d7669b7266a0a874aa33a6b0d94331640cc_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d046dace412fd50a4dfde2758a4a5fee708c539777d64cf9deb986fab72c693 = $this->env->getExtension("native_profiler");
        $__internal_8d046dace412fd50a4dfde2758a4a5fee708c539777d64cf9deb986fab72c693->enter($__internal_8d046dace412fd50a4dfde2758a4a5fee708c539777d64cf9deb986fab72c693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8d046dace412fd50a4dfde2758a4a5fee708c539777d64cf9deb986fab72c693->leave($__internal_8d046dace412fd50a4dfde2758a4a5fee708c539777d64cf9deb986fab72c693_prof);

    }

    // line 94
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_d7cc6a6ce0da43b01741265acc96cf283460b6e8c426b229c8509fd84a72bc7f = $this->env->getExtension("native_profiler");
        $__internal_d7cc6a6ce0da43b01741265acc96cf283460b6e8c426b229c8509fd84a72bc7f->enter($__internal_d7cc6a6ce0da43b01741265acc96cf283460b6e8c426b229c8509fd84a72bc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 95
        echo "            ";
        
        $__internal_d7cc6a6ce0da43b01741265acc96cf283460b6e8c426b229c8509fd84a72bc7f->leave($__internal_d7cc6a6ce0da43b01741265acc96cf283460b6e8c426b229c8509fd84a72bc7f_prof);

    }

    // line 107
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_86b48e37ed03ff85bf9f83951f878aac9d1eac7d16f0ee86a0904c204b72462f = $this->env->getExtension("native_profiler");
        $__internal_86b48e37ed03ff85bf9f83951f878aac9d1eac7d16f0ee86a0904c204b72462f->enter($__internal_86b48e37ed03ff85bf9f83951f878aac9d1eac7d16f0ee86a0904c204b72462f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 108
        echo "                            ";
        
        $__internal_86b48e37ed03ff85bf9f83951f878aac9d1eac7d16f0ee86a0904c204b72462f->leave($__internal_86b48e37ed03ff85bf9f83951f878aac9d1eac7d16f0ee86a0904c204b72462f_prof);

    }

    // line 111
    public function block_body($context, array $blocks = array())
    {
        $__internal_4303a3c6143ecd70020d17148ea62b46bb95e5965aec05de6d1653a4f685b3c8 = $this->env->getExtension("native_profiler");
        $__internal_4303a3c6143ecd70020d17148ea62b46bb95e5965aec05de6d1653a4f685b3c8->enter($__internal_4303a3c6143ecd70020d17148ea62b46bb95e5965aec05de6d1653a4f685b3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 112
        echo "                    ";
        
        $__internal_4303a3c6143ecd70020d17148ea62b46bb95e5965aec05de6d1653a4f685b3c8->leave($__internal_4303a3c6143ecd70020d17148ea62b46bb95e5965aec05de6d1653a4f685b3c8_prof);

    }

    // line 118
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad978db8aa87545777af9d84a91543713183908a2a72cdf3c74468a6f760658f = $this->env->getExtension("native_profiler");
        $__internal_ad978db8aa87545777af9d84a91543713183908a2a72cdf3c74468a6f760658f->enter($__internal_ad978db8aa87545777af9d84a91543713183908a2a72cdf3c74468a6f760658f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 119
        echo "            ";
        
        $__internal_ad978db8aa87545777af9d84a91543713183908a2a72cdf3c74468a6f760658f->leave($__internal_ad978db8aa87545777af9d84a91543713183908a2a72cdf3c74468a6f760658f_prof);

    }

    // line 128
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_78f136e2818bb8d260acd99cb3aa0a5a7499c44f00e2309fc912c85e7b8fc04e = $this->env->getExtension("native_profiler");
        $__internal_78f136e2818bb8d260acd99cb3aa0a5a7499c44f00e2309fc912c85e7b8fc04e->enter($__internal_78f136e2818bb8d260acd99cb3aa0a5a7499c44f00e2309fc912c85e7b8fc04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 129
        echo "
";
        
        $__internal_78f136e2818bb8d260acd99cb3aa0a5a7499c44f00e2309fc912c85e7b8fc04e->leave($__internal_78f136e2818bb8d260acd99cb3aa0a5a7499c44f00e2309fc912c85e7b8fc04e_prof);

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
        return array (  353 => 129,  347 => 128,  340 => 119,  334 => 118,  327 => 112,  321 => 111,  314 => 108,  308 => 107,  301 => 95,  295 => 94,  285 => 16,  281 => 15,  276 => 14,  270 => 13,  258 => 9,  242 => 131,  240 => 128,  230 => 120,  228 => 118,  221 => 113,  219 => 111,  215 => 109,  213 => 107,  207 => 103,  205 => 102,  197 => 96,  195 => 94,  186 => 87,  181 => 85,  177 => 84,  172 => 83,  167 => 81,  162 => 80,  160 => 79,  155 => 77,  151 => 76,  147 => 75,  142 => 73,  132 => 65,  127 => 63,  122 => 61,  117 => 59,  114 => 58,  109 => 56,  104 => 54,  101 => 53,  99 => 52,  86 => 42,  75 => 33,  67 => 31,  65 => 30,  58 => 28,  47 => 19,  45 => 13,  38 => 9,  29 => 2,);
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
/* */
/* */
/* */
/*             {% block jumbotron %}*/
/*             {% endblock %}*/
/* */
/*             <div class="mdl-grid">*/
/*                 <div class="mdl-cell mdl-cell--2-col">*/
/* */
/*                 </div>*/
/*                 <div class="mdl-cell mdl-cell--8-col">*/
/*                     {% include(":svg:RRtext.svg.twig") %}*/
/*                    <div class="mdl-grid">*/
/*                         <div class="mdl-cell mdl-cell--2-col">*/
/*                         </div>*/
/*                         <div class="mdl-cell mdl-cell--8-col">*/
/*                             {% block fos_user %}*/
/*                             {% endblock fos_user %}*/
/*                         </div>*/
/*                         </div>*/
/*                     {% block body %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/* */
/*             {% block content %}*/
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
