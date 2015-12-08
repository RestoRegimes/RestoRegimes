<?php

/* ::layout.html.twig */
class __TwigTemplate_89b9f24a0337cfe7a67db9a182c9b116f11eba7b789fbb75eba5565085d51923 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'fos_user' => array($this, 'block_fos_user'),
            'jumbotron' => array($this, 'block_jumbotron'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
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
        // line 16
        echo "    ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 19
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
                <button class=\"btn btn-info\"><a href=\"#\">Rechercher</a>
                </button>
            </li>
            <li>
            ";
        // line 40
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 41
            echo "
            ";
        } else {
            // line 43
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profile</a>
            ";
        }
        // line 45
        echo "            </li>
            <li>
            ";
        // line 47
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 48
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a>
            ";
        } else {
            // line 50
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
            ";
        }
        // line 52
        echo "            </li>
            <li>
                <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
            </li>
        </ul>
        <h3 class=\"muted\"><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("rr_core_homepage");
        echo "\">Resto Regimes</a></h3>


    </div>
    <hr>
    ";
        // line 62
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 63
            echo "        Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
            echo "
    ";
        }
        // line 65
        echo "    ";
        $this->displayBlock('fos_user', $context, $blocks);
        // line 67
        echo "    ";
        $this->displayBlock('jumbotron', $context, $blocks);
        // line 69
        echo "    <hr>
    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les Restaurants</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("rr_core_homepage");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("rr_restaurant_home");
        echo "\">les restaurants</a></li>
                <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("rr_restaurant_add");
        echo "\">Ajouter un restaurant</a></li>
            </ul>

        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "        </div>
    </div>
    <hr>

    ";
        // line 87
        $this->displayBlock('content', $context, $blocks);
        // line 89
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
        // line 101
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
            </div>

        </div>


    </div>
</div>
<!-- /container -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\">
</script>
<script src=\"//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js\"></script>
</body>


</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "RR Platform";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
    }

    // line 65
    public function block_fos_user($context, array $blocks = array())
    {
        // line 66
        echo "    ";
    }

    // line 67
    public function block_jumbotron($context, array $blocks = array())
    {
        // line 68
        echo "    ";
    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        // line 82
        echo "            ";
    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
        // line 88
        echo "    ";
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
        return array (  254 => 88,  251 => 87,  247 => 82,  244 => 81,  240 => 68,  237 => 67,  233 => 66,  230 => 65,  225 => 17,  222 => 16,  216 => 14,  212 => 13,  209 => 12,  206 => 11,  200 => 7,  179 => 101,  165 => 89,  163 => 87,  157 => 83,  155 => 81,  147 => 76,  143 => 75,  139 => 74,  132 => 69,  129 => 67,  126 => 65,  118 => 63,  116 => 62,  108 => 57,  102 => 54,  98 => 52,  92 => 50,  86 => 48,  84 => 47,  80 => 45,  74 => 43,  70 => 41,  68 => 40,  45 => 19,  42 => 16,  40 => 11,  33 => 7,  26 => 2,);
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
/*     {% endblock %}*/
/*     {% block javascript %}*/
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
/*                 <button class="btn btn-info"><a href="#">Rechercher</a>*/
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
/* <!-- /container -->*/
/* <!-- Placed at the end of the document so the pages load faster -->*/
/* <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">*/
/* </script>*/
/* <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>*/
/* </body>*/
/* */
/* */
/* </html>*/
