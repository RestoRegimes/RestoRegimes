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
            'fos_user' => array($this, 'block_fos_user'),
            'jumbotron' => array($this, 'block_jumbotron'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ae146dde75595a2e54223f04a4d2920551ebeca762b9f6e8c011dce6fb9bcb3 = $this->env->getExtension("native_profiler");
        $__internal_3ae146dde75595a2e54223f04a4d2920551ebeca762b9f6e8c011dce6fb9bcb3->enter($__internal_3ae146dde75595a2e54223f04a4d2920551ebeca762b9f6e8c011dce6fb9bcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
<div class=\"mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header\">
    <header class=\"mdl-layout__header mdl-layout__header--transparent \">
        <div class=\"mdl-layout__header-row\">
            <span class=\"mdl-layout-title\">Resto'Regimes </span>
            <div class=\"mdl-layout-spacer\"></div>
            <div class=\"mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right\">

                    <label class=\"mdl-button mdl-js-button mdl-button--icon\"
                           for=\"fixed-header-drawer-exp\">
                            <i class=\"material-icons\" >search</i>
                    </label>


            </div>
        </div>
    </header>
    <div class=\"mdl-layout__drawer mdl-layout__drawer\">

        <span class=\"mdl-layout-title\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/images/RRLogo.png"), "html", null, true);
        echo "\" style=\"width: 150px;\"> </span>
        <nav class=\"mdl-navigation\">
            <a class=\"mdl-navigation__link\" href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("rr_core_homepage");
        echo "\">Acceuil</a>
            <a class=\"mdl-navigation__link\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("rr_restaurant_home");
        echo "\">les restaurants</a>
            <a class=\"mdl-navigation__link\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("rr_restaurant_add");
        echo "\">Ajouter un restaurant</a>

            ";
        // line 49
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 50
            echo "                <a class=\"mdl-navigation__link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Mon Compte</a>
                <a class=\"mdl-navigation__link\" href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
            ";
        } else {
            // line 53
            echo "                <a class=\"mdl-navigation__link\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se connecter</a>
                <a class=\"mdl-navigation__link\" href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'enregistrer</a>
                <a class=\"mdl-navigation__link\" href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_registerPro");
            echo "\">Professionnel</a>
            ";
        }
        // line 57
        echo "        </nav>
    </div>
    <main class=\"mdl-layout__content\">
        <div class=\"page-content\">

            ";
        // line 62
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 63
            echo "                Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
            echo "
            ";
        }
        // line 65
        echo "            ";
        $this->displayBlock('fos_user', $context, $blocks);
        // line 67
        echo "            ";
        $this->displayBlock('jumbotron', $context, $blocks);
        // line 69
        echo "
            <div class=\"mdl-grid\">
                <div class=\"mdl-cell mdl-cell--4-col\">
                    <h3>Les Restaurants</h3>
                </div>
                <div class=\"mdl-cell mdl-cell--8-col\">
                    ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "                </div>
            </div>


            ";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "        </div>
    </main>

</div>




";
        // line 91
        $this->displayBlock('javascript', $context, $blocks);
        // line 94
        echo "<!-- /container -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\">
</script>
<script src=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js\"></script>

</body>


</html>";
        
        $__internal_3ae146dde75595a2e54223f04a4d2920551ebeca762b9f6e8c011dce6fb9bcb3->leave($__internal_3ae146dde75595a2e54223f04a4d2920551ebeca762b9f6e8c011dce6fb9bcb3_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b127aa761f2b70b3f24b8aa04f566dfa44b66a005c4f0329f7cd40c39c7ac78 = $this->env->getExtension("native_profiler");
        $__internal_2b127aa761f2b70b3f24b8aa04f566dfa44b66a005c4f0329f7cd40c39c7ac78->enter($__internal_2b127aa761f2b70b3f24b8aa04f566dfa44b66a005c4f0329f7cd40c39c7ac78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Resto'Regimes";
        
        $__internal_2b127aa761f2b70b3f24b8aa04f566dfa44b66a005c4f0329f7cd40c39c7ac78->leave($__internal_2b127aa761f2b70b3f24b8aa04f566dfa44b66a005c4f0329f7cd40c39c7ac78_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6c5ddcc8a9fe7b17b80cef37f41220bb7f8c2a50196076c5f2714152b349a13 = $this->env->getExtension("native_profiler");
        $__internal_e6c5ddcc8a9fe7b17b80cef37f41220bb7f8c2a50196076c5f2714152b349a13->enter($__internal_e6c5ddcc8a9fe7b17b80cef37f41220bb7f8c2a50196076c5f2714152b349a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e6c5ddcc8a9fe7b17b80cef37f41220bb7f8c2a50196076c5f2714152b349a13->leave($__internal_e6c5ddcc8a9fe7b17b80cef37f41220bb7f8c2a50196076c5f2714152b349a13_prof);

    }

    // line 65
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_9f3699ae9d44f10b6a8672329aea4b49533df81439cf3bb2c8063277cacc274d = $this->env->getExtension("native_profiler");
        $__internal_9f3699ae9d44f10b6a8672329aea4b49533df81439cf3bb2c8063277cacc274d->enter($__internal_9f3699ae9d44f10b6a8672329aea4b49533df81439cf3bb2c8063277cacc274d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 66
        echo "            ";
        
        $__internal_9f3699ae9d44f10b6a8672329aea4b49533df81439cf3bb2c8063277cacc274d->leave($__internal_9f3699ae9d44f10b6a8672329aea4b49533df81439cf3bb2c8063277cacc274d_prof);

    }

    // line 67
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_710da97fc0bc9ab8163ebb089b03bd1cce177c7f769e8dad803ab78358ad6e0f = $this->env->getExtension("native_profiler");
        $__internal_710da97fc0bc9ab8163ebb089b03bd1cce177c7f769e8dad803ab78358ad6e0f->enter($__internal_710da97fc0bc9ab8163ebb089b03bd1cce177c7f769e8dad803ab78358ad6e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 68
        echo "            ";
        
        $__internal_710da97fc0bc9ab8163ebb089b03bd1cce177c7f769e8dad803ab78358ad6e0f->leave($__internal_710da97fc0bc9ab8163ebb089b03bd1cce177c7f769e8dad803ab78358ad6e0f_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_4594fd2a005e10bfd6dbd6cb31ce56b692225adcaf45c92cdc7d973ca6576317 = $this->env->getExtension("native_profiler");
        $__internal_4594fd2a005e10bfd6dbd6cb31ce56b692225adcaf45c92cdc7d973ca6576317->enter($__internal_4594fd2a005e10bfd6dbd6cb31ce56b692225adcaf45c92cdc7d973ca6576317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 76
        echo "                    ";
        
        $__internal_4594fd2a005e10bfd6dbd6cb31ce56b692225adcaf45c92cdc7d973ca6576317->leave($__internal_4594fd2a005e10bfd6dbd6cb31ce56b692225adcaf45c92cdc7d973ca6576317_prof);

    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
        $__internal_2c42365e0875f0d4249621dd0b805ebce70cdc5f721c90f38d6f2d18e747fd7c = $this->env->getExtension("native_profiler");
        $__internal_2c42365e0875f0d4249621dd0b805ebce70cdc5f721c90f38d6f2d18e747fd7c->enter($__internal_2c42365e0875f0d4249621dd0b805ebce70cdc5f721c90f38d6f2d18e747fd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 82
        echo "            ";
        
        $__internal_2c42365e0875f0d4249621dd0b805ebce70cdc5f721c90f38d6f2d18e747fd7c->leave($__internal_2c42365e0875f0d4249621dd0b805ebce70cdc5f721c90f38d6f2d18e747fd7c_prof);

    }

    // line 91
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_58cd594ad60971285b560b44c337d2550dbbcb7c6242af92b2dc987b429ceda8 = $this->env->getExtension("native_profiler");
        $__internal_58cd594ad60971285b560b44c337d2550dbbcb7c6242af92b2dc987b429ceda8->enter($__internal_58cd594ad60971285b560b44c337d2550dbbcb7c6242af92b2dc987b429ceda8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 92
        echo "
";
        
        $__internal_58cd594ad60971285b560b44c337d2550dbbcb7c6242af92b2dc987b429ceda8->leave($__internal_58cd594ad60971285b560b44c337d2550dbbcb7c6242af92b2dc987b429ceda8_prof);

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
        return array (  281 => 92,  275 => 91,  268 => 82,  262 => 81,  255 => 76,  249 => 75,  242 => 68,  236 => 67,  229 => 66,  223 => 65,  213 => 16,  209 => 15,  204 => 14,  198 => 13,  186 => 9,  170 => 94,  168 => 91,  158 => 83,  156 => 81,  150 => 77,  148 => 75,  140 => 69,  137 => 67,  134 => 65,  126 => 63,  124 => 62,  117 => 57,  112 => 55,  108 => 54,  103 => 53,  98 => 51,  93 => 50,  91 => 49,  86 => 47,  82 => 46,  78 => 45,  73 => 43,  47 => 19,  45 => 13,  38 => 9,  29 => 2,);
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
/* <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer*/
/*             mdl-layout--fixed-header">*/
/*     <header class="mdl-layout__header mdl-layout__header--transparent ">*/
/*         <div class="mdl-layout__header-row">*/
/*             <span class="mdl-layout-title">Resto'Regimes </span>*/
/*             <div class="mdl-layout-spacer"></div>*/
/*             <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable*/
/*                   mdl-textfield--floating-label mdl-textfield--align-right">*/
/* */
/*                     <label class="mdl-button mdl-js-button mdl-button--icon"*/
/*                            for="fixed-header-drawer-exp">*/
/*                             <i class="material-icons" >search</i>*/
/*                     </label>*/
/* */
/* */
/*             </div>*/
/*         </div>*/
/*     </header>*/
/*     <div class="mdl-layout__drawer mdl-layout__drawer">*/
/* */
/*         <span class="mdl-layout-title"><img src="{{ asset('bundles/rrcore/images/RRLogo.png') }}" style="width: 150px;"> </span>*/
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
/*             {% if app.user is not null %}*/
/*                 Bonjour {{ app.user.username }} - {{ app.user.email }}*/
/*             {% endif %}*/
/*             {% block fos_user %}*/
/*             {% endblock fos_user %}*/
/*             {% block jumbotron %}*/
/*             {% endblock %}*/
/* */
/*             <div class="mdl-grid">*/
/*                 <div class="mdl-cell mdl-cell--4-col">*/
/*                     <h3>Les Restaurants</h3>*/
/*                 </div>*/
/*                 <div class="mdl-cell mdl-cell--8-col">*/
/*                     {% block body %}*/
/*                     {% endblock %}*/
/*                 </div>*/
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
