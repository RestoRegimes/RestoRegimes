<?php

/* ::layout.html.twig */
class __TwigTemplate_90fe6951d125c69b7908983ee4f7cf9f790bbe82254b8a3bbdcebe8c280c7902 extends Twig_Template
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
        $__internal_65af81af82f239584e6a2b4c41fb679445562d44e8d780efdf0bff658fdc3a81 = $this->env->getExtension("native_profiler");
        $__internal_65af81af82f239584e6a2b4c41fb679445562d44e8d780efdf0bff658fdc3a81->enter($__internal_65af81af82f239584e6a2b4c41fb679445562d44e8d780efdf0bff658fdc3a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 41
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Login</a>
            ";
        } else {
            // line 43
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Logout</a>
            ";
        }
        // line 45
        echo "            </li>
            <li>
                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
            </li>
        </ul>
        <h3 class=\"muted\"><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("rr_core_homepage");
        echo "\">Resto Regimes</a></h3>


    </div>
    <hr>
    ";
        // line 55
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 56
            echo "        Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
            echo "
    ";
        }
        // line 58
        echo "    ";
        $this->displayBlock('fos_user', $context, $blocks);
        // line 60
        echo "    ";
        $this->displayBlock('jumbotron', $context, $blocks);
        // line 62
        echo "    <hr>
    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les Restaurants</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("rr_core_homepage");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("rr_restaurant_home");
        echo "\">les restaurants</a></li>
                <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("rr_restaurant_add");
        echo "\">Ajouter un restaurant</a></li>
            </ul>

        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "        </div>
    </div>
    <hr>

    ";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 82
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
        // line 94
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
        
        $__internal_65af81af82f239584e6a2b4c41fb679445562d44e8d780efdf0bff658fdc3a81->leave($__internal_65af81af82f239584e6a2b4c41fb679445562d44e8d780efdf0bff658fdc3a81_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a1c7d1be3fdc447658c919d8ac79b0e90331ad46f5ae21fcad679b1a30e64d3 = $this->env->getExtension("native_profiler");
        $__internal_4a1c7d1be3fdc447658c919d8ac79b0e90331ad46f5ae21fcad679b1a30e64d3->enter($__internal_4a1c7d1be3fdc447658c919d8ac79b0e90331ad46f5ae21fcad679b1a30e64d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "RR Platform";
        
        $__internal_4a1c7d1be3fdc447658c919d8ac79b0e90331ad46f5ae21fcad679b1a30e64d3->leave($__internal_4a1c7d1be3fdc447658c919d8ac79b0e90331ad46f5ae21fcad679b1a30e64d3_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16a48f6da8f742d83eca52055b51e839222ab8f3b00e0152155dc4112e1a4d18 = $this->env->getExtension("native_profiler");
        $__internal_16a48f6da8f742d83eca52055b51e839222ab8f3b00e0152155dc4112e1a4d18->enter($__internal_16a48f6da8f742d83eca52055b51e839222ab8f3b00e0152155dc4112e1a4d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_16a48f6da8f742d83eca52055b51e839222ab8f3b00e0152155dc4112e1a4d18->leave($__internal_16a48f6da8f742d83eca52055b51e839222ab8f3b00e0152155dc4112e1a4d18_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_bbc35a979db38f2ff79034b4a31d69847790c82f9705e09513048152b37f7ecd = $this->env->getExtension("native_profiler");
        $__internal_bbc35a979db38f2ff79034b4a31d69847790c82f9705e09513048152b37f7ecd->enter($__internal_bbc35a979db38f2ff79034b4a31d69847790c82f9705e09513048152b37f7ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 17
        echo "
    ";
        
        $__internal_bbc35a979db38f2ff79034b4a31d69847790c82f9705e09513048152b37f7ecd->leave($__internal_bbc35a979db38f2ff79034b4a31d69847790c82f9705e09513048152b37f7ecd_prof);

    }

    // line 58
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_446f77ade3e32d97d9a8256972096670d818911fb2f740bdf50c7948d1fe8e99 = $this->env->getExtension("native_profiler");
        $__internal_446f77ade3e32d97d9a8256972096670d818911fb2f740bdf50c7948d1fe8e99->enter($__internal_446f77ade3e32d97d9a8256972096670d818911fb2f740bdf50c7948d1fe8e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 59
        echo "    ";
        
        $__internal_446f77ade3e32d97d9a8256972096670d818911fb2f740bdf50c7948d1fe8e99->leave($__internal_446f77ade3e32d97d9a8256972096670d818911fb2f740bdf50c7948d1fe8e99_prof);

    }

    // line 60
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_2602992a73d0f93f8ea002b9fc6c026ff9a5dff0d5c77a4d8a4bc18f1839a430 = $this->env->getExtension("native_profiler");
        $__internal_2602992a73d0f93f8ea002b9fc6c026ff9a5dff0d5c77a4d8a4bc18f1839a430->enter($__internal_2602992a73d0f93f8ea002b9fc6c026ff9a5dff0d5c77a4d8a4bc18f1839a430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 61
        echo "    ";
        
        $__internal_2602992a73d0f93f8ea002b9fc6c026ff9a5dff0d5c77a4d8a4bc18f1839a430->leave($__internal_2602992a73d0f93f8ea002b9fc6c026ff9a5dff0d5c77a4d8a4bc18f1839a430_prof);

    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        $__internal_7658c03418db0464bb5c478370690fd50203d41e8d08a652bf4d6687abe9ad88 = $this->env->getExtension("native_profiler");
        $__internal_7658c03418db0464bb5c478370690fd50203d41e8d08a652bf4d6687abe9ad88->enter($__internal_7658c03418db0464bb5c478370690fd50203d41e8d08a652bf4d6687abe9ad88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 75
        echo "            ";
        
        $__internal_7658c03418db0464bb5c478370690fd50203d41e8d08a652bf4d6687abe9ad88->leave($__internal_7658c03418db0464bb5c478370690fd50203d41e8d08a652bf4d6687abe9ad88_prof);

    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
        $__internal_87e923117c98c9d8fd58f397d68846a249516ae8436e1b27e6427ba20f72e078 = $this->env->getExtension("native_profiler");
        $__internal_87e923117c98c9d8fd58f397d68846a249516ae8436e1b27e6427ba20f72e078->enter($__internal_87e923117c98c9d8fd58f397d68846a249516ae8436e1b27e6427ba20f72e078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 81
        echo "    ";
        
        $__internal_87e923117c98c9d8fd58f397d68846a249516ae8436e1b27e6427ba20f72e078->leave($__internal_87e923117c98c9d8fd58f397d68846a249516ae8436e1b27e6427ba20f72e078_prof);

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
        return array (  283 => 81,  277 => 80,  270 => 75,  264 => 74,  257 => 61,  251 => 60,  244 => 59,  238 => 58,  230 => 17,  224 => 16,  215 => 14,  211 => 13,  208 => 12,  202 => 11,  190 => 7,  166 => 94,  152 => 82,  150 => 80,  144 => 76,  142 => 74,  134 => 69,  130 => 68,  126 => 67,  119 => 62,  116 => 60,  113 => 58,  105 => 56,  103 => 55,  95 => 50,  89 => 47,  85 => 45,  79 => 43,  73 => 41,  71 => 40,  48 => 19,  45 => 16,  43 => 11,  36 => 7,  29 => 2,);
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
