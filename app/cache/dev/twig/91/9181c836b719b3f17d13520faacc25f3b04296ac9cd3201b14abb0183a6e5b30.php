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
        $__internal_c1e493e08f08bc9fd3f3a272dcf867de448a76c8a8aa25575208b610402b0d42 = $this->env->getExtension("native_profiler");
        $__internal_c1e493e08f08bc9fd3f3a272dcf867de448a76c8a8aa25575208b610402b0d42->enter($__internal_c1e493e08f08bc9fd3f3a272dcf867de448a76c8a8aa25575208b610402b0d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <!-- Fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"../assets/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"../assets/ico/apple-touch-icon-144-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"../assets/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"../assets/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"../assets/ico/apple-touch-icon-57-precomposed.png\">
</head>

<body>
<div class=\"container-narrow\">
    <div class=\"masthead\">
        <ul class=\"nav nav-pills pull-right\">
            <li>
                <input type=\"text\" class=\"input-small\">
            </li>
            <li>
                <button class=\"btn btn-info\"><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("rr_core_search");
        echo "\">Rechercher</a>
                </button>
            </li>
            <li>
            ";
        // line 38
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 39
            echo "
            ";
        } else {
            // line 41
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profile</a>
            ";
        }
        // line 43
        echo "            </li>
            <li>
            ";
        // line 45
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 46
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a>
            ";
        } else {
            // line 48
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
            ";
        }
        // line 50
        echo "            </li>
            <li>
                <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
            </li>
        </ul>
        <h3 class=\"muted\"><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("rr_core_homepage");
        echo "\">Resto Regimes</a></h3>


    </div>
    <hr>
    ";
        // line 60
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 61
            echo "        Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
            echo "
    ";
        }
        // line 63
        echo "    ";
        $this->displayBlock('fos_user', $context, $blocks);
        // line 65
        echo "    ";
        $this->displayBlock('jumbotron', $context, $blocks);
        // line 67
        echo "    <hr>
    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les Restaurants</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("rr_core_homepage");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("rr_restaurant_home");
        echo "\">les restaurants</a></li>
                <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("rr_restaurant_add");
        echo "\">Ajouter un restaurant</a></li>
            </ul>

        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 79
        $this->displayBlock('body', $context, $blocks);
        // line 81
        echo "        </div>
    </div>
    <hr>

    ";
        // line 85
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "    <hr>
    <div class=\"footer\">


        <div class=\"row-fluid\">
            <div class=\"span9\">
                <a href=\"#\">Contact /</a>
                <a href=\"#\">CGU /</a>
                <a href=\"#\">Mention légales /</a>
                <a href=\"#\">A Propos</a>
            </div>
            <div class=\"span3\">
                <p class=\"\">© RestoRegime ";
        // line 99
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
            </div>

        </div>


    </div>
</div>
";
        // line 107
        $this->displayBlock('javascript', $context, $blocks);
        // line 110
        echo "<!-- /container -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\">
</script>
<script src=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js\"></script>

</body>


</html>";
        
        $__internal_c1e493e08f08bc9fd3f3a272dcf867de448a76c8a8aa25575208b610402b0d42->leave($__internal_c1e493e08f08bc9fd3f3a272dcf867de448a76c8a8aa25575208b610402b0d42_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dab2ca09d9d7d7f07315212563269ff33d588f389c8408a850e9f99633ccb6e0 = $this->env->getExtension("native_profiler");
        $__internal_dab2ca09d9d7d7f07315212563269ff33d588f389c8408a850e9f99633ccb6e0->enter($__internal_dab2ca09d9d7d7f07315212563269ff33d588f389c8408a850e9f99633ccb6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "RR Platform";
        
        $__internal_dab2ca09d9d7d7f07315212563269ff33d588f389c8408a850e9f99633ccb6e0->leave($__internal_dab2ca09d9d7d7f07315212563269ff33d588f389c8408a850e9f99633ccb6e0_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_63965adef47f114af4309daa4b4154493e24670a6c42e01dc7f53f58f3ea6947 = $this->env->getExtension("native_profiler");
        $__internal_63965adef47f114af4309daa4b4154493e24670a6c42e01dc7f53f58f3ea6947->enter($__internal_63965adef47f114af4309daa4b4154493e24670a6c42e01dc7f53f58f3ea6947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link href=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/css/style.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />

    ";
        
        $__internal_63965adef47f114af4309daa4b4154493e24670a6c42e01dc7f53f58f3ea6947->leave($__internal_63965adef47f114af4309daa4b4154493e24670a6c42e01dc7f53f58f3ea6947_prof);

    }

    // line 63
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_24c2d11af983fe2bbb071987233b1a61903245c1c496716b349d3a6e2f32eb3d = $this->env->getExtension("native_profiler");
        $__internal_24c2d11af983fe2bbb071987233b1a61903245c1c496716b349d3a6e2f32eb3d->enter($__internal_24c2d11af983fe2bbb071987233b1a61903245c1c496716b349d3a6e2f32eb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 64
        echo "    ";
        
        $__internal_24c2d11af983fe2bbb071987233b1a61903245c1c496716b349d3a6e2f32eb3d->leave($__internal_24c2d11af983fe2bbb071987233b1a61903245c1c496716b349d3a6e2f32eb3d_prof);

    }

    // line 65
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_d11d9f308ccfcbc61eff293704b2b2360c55836c0bd9a0d90f7a33a58857d7fc = $this->env->getExtension("native_profiler");
        $__internal_d11d9f308ccfcbc61eff293704b2b2360c55836c0bd9a0d90f7a33a58857d7fc->enter($__internal_d11d9f308ccfcbc61eff293704b2b2360c55836c0bd9a0d90f7a33a58857d7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 66
        echo "    ";
        
        $__internal_d11d9f308ccfcbc61eff293704b2b2360c55836c0bd9a0d90f7a33a58857d7fc->leave($__internal_d11d9f308ccfcbc61eff293704b2b2360c55836c0bd9a0d90f7a33a58857d7fc_prof);

    }

    // line 79
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c2c82f8850201b08b6216faed269ea3edf63b8324122a597f8ed051437b0560 = $this->env->getExtension("native_profiler");
        $__internal_5c2c82f8850201b08b6216faed269ea3edf63b8324122a597f8ed051437b0560->enter($__internal_5c2c82f8850201b08b6216faed269ea3edf63b8324122a597f8ed051437b0560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 80
        echo "            ";
        
        $__internal_5c2c82f8850201b08b6216faed269ea3edf63b8324122a597f8ed051437b0560->leave($__internal_5c2c82f8850201b08b6216faed269ea3edf63b8324122a597f8ed051437b0560_prof);

    }

    // line 85
    public function block_content($context, array $blocks = array())
    {
        $__internal_1847d5430d77d50b3f59543b759a8d69173789c7368e0791d0466f6a1920e03a = $this->env->getExtension("native_profiler");
        $__internal_1847d5430d77d50b3f59543b759a8d69173789c7368e0791d0466f6a1920e03a->enter($__internal_1847d5430d77d50b3f59543b759a8d69173789c7368e0791d0466f6a1920e03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 86
        echo "    ";
        
        $__internal_1847d5430d77d50b3f59543b759a8d69173789c7368e0791d0466f6a1920e03a->leave($__internal_1847d5430d77d50b3f59543b759a8d69173789c7368e0791d0466f6a1920e03a_prof);

    }

    // line 107
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_46d6ecf6c115744ce81def0cac73e2e2c6ceaf4c9a7e814f1afa8ae3b1194f4a = $this->env->getExtension("native_profiler");
        $__internal_46d6ecf6c115744ce81def0cac73e2e2c6ceaf4c9a7e814f1afa8ae3b1194f4a->enter($__internal_46d6ecf6c115744ce81def0cac73e2e2c6ceaf4c9a7e814f1afa8ae3b1194f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 108
        echo "
";
        
        $__internal_46d6ecf6c115744ce81def0cac73e2e2c6ceaf4c9a7e814f1afa8ae3b1194f4a->leave($__internal_46d6ecf6c115744ce81def0cac73e2e2c6ceaf4c9a7e814f1afa8ae3b1194f4a_prof);

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
        return array (  304 => 108,  298 => 107,  291 => 86,  285 => 85,  278 => 80,  272 => 79,  265 => 66,  259 => 65,  252 => 64,  246 => 63,  236 => 14,  232 => 13,  229 => 12,  223 => 11,  211 => 7,  195 => 110,  193 => 107,  182 => 99,  168 => 87,  166 => 85,  160 => 81,  158 => 79,  150 => 74,  146 => 73,  142 => 72,  135 => 67,  132 => 65,  129 => 63,  121 => 61,  119 => 60,  111 => 55,  105 => 52,  101 => 50,  95 => 48,  89 => 46,  87 => 45,  83 => 43,  77 => 41,  73 => 39,  71 => 38,  64 => 34,  45 => 17,  43 => 11,  36 => 7,  29 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{% block title %}RR Platform{% endblock %}</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     {% block stylesheets %}*/
/*         <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-responsive.min.css" rel="stylesheet">*/
/*         <link rel="stylesheet" href="{{ asset('bundles/rrcore/css/style.min.css') }}" type="text/css" />*/
/*         <link rel="stylesheet" href="{{ asset('bundles/rrcore/css/style.css') }}" type="text/css" />*/
/* */
/*     {% endblock %}*/
/*     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/*     <!-- Fav and touch icons -->*/
/*     <link rel="shortcut icon" href="../assets/ico/favicon.ico">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">*/
/*     <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">*/
/* </head>*/
/* */
/* <body>*/
/* <div class="container-narrow">*/
/*     <div class="masthead">*/
/*         <ul class="nav nav-pills pull-right">*/
/*             <li>*/
/*                 <input type="text" class="input-small">*/
/*             </li>*/
/*             <li>*/
/*                 <button class="btn btn-info"><a href="{{ path('rr_core_search') }}">Rechercher</a>*/
/*                 </button>*/
/*             </li>*/
/*             <li>*/
/*             {% if app.user is null %}*/
/* */
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_profile_show') }}">Profile</a>*/
/*             {% endif %}*/
/*             </li>*/
/*             <li>*/
/*             {% if app.user is null %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">Login</a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_logout') }}">Logout</a>*/
/*             {% endif %}*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_registration_register') }}">S'inscrire</a>*/
/*             </li>*/
/*         </ul>*/
/*         <h3 class="muted"><a href="{{ path('rr_core_homepage') }}">Resto Regimes</a></h3>*/
/* */
/* */
/*     </div>*/
/*     <hr>*/
/*     {% if app.user is not null %}*/
/*         Bonjour {{ app.user.username }} - {{ app.user.email }}*/
/*     {% endif %}*/
/*     {% block fos_user %}*/
/*     {% endblock fos_user %}*/
/*     {% block jumbotron %}*/
/*     {% endblock %}*/
/*     <hr>*/
/*     <div class="row">*/
/*         <div id="menu" class="col-md-3">*/
/*             <h3>Les Restaurants</h3>*/
/*             <ul class="nav nav-pills nav-stacked">*/
/*                 <li><a href="{{ path('rr_core_homepage') }}">Accueil</a></li>*/
/*                 <li><a href="{{ path('rr_restaurant_home') }}">les restaurants</a></li>*/
/*                 <li><a href="{{ path('rr_restaurant_add') }}">Ajouter un restaurant</a></li>*/
/*             </ul>*/
/* */
/*         </div>*/
/*         <div id="content" class="col-md-9">*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/*     <hr>*/
/* */
/*     {% block content %}*/
/*     {% endblock %}*/
/*     <hr>*/
/*     <div class="footer">*/
/* */
/* */
/*         <div class="row-fluid">*/
/*             <div class="span9">*/
/*                 <a href="#">Contact /</a>*/
/*                 <a href="#">CGU /</a>*/
/*                 <a href="#">Mention légales /</a>*/
/*                 <a href="#">A Propos</a>*/
/*             </div>*/
/*             <div class="span3">*/
/*                 <p class="">© RestoRegime {{ 'now'|date('Y') }}</p>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/* */
/*     </div>*/
/* </div>*/
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
