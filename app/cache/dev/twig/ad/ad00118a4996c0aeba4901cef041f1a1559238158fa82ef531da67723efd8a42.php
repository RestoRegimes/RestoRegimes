<?php

/* RRRestaurantBundle::layout.html.twig */
class __TwigTemplate_d2542da1dbd028be1bd2d8ec02e7aa4c5f4a066eafbb9d78cc539da33cda4ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "RRRestaurantBundle::layout.html.twig", 2);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'rrplatform_search' => array($this, 'block_rrplatform_search'),
            'map' => array($this, 'block_map'),
            'fos_user' => array($this, 'block_fos_user'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb354b7ebef41a6f6910e0aa2858e872da18e4fb3a904dc9660bd6dd9a797325 = $this->env->getExtension("native_profiler");
        $__internal_bb354b7ebef41a6f6910e0aa2858e872da18e4fb3a904dc9660bd6dd9a797325->enter($__internal_bb354b7ebef41a6f6910e0aa2858e872da18e4fb3a904dc9660bd6dd9a797325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb354b7ebef41a6f6910e0aa2858e872da18e4fb3a904dc9660bd6dd9a797325->leave($__internal_bb354b7ebef41a6f6910e0aa2858e872da18e4fb3a904dc9660bd6dd9a797325_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_cb9c808e04165a807b17fa4be20d1f4c46192b086c38cbab4f8a594f4e17f81c = $this->env->getExtension("native_profiler");
        $__internal_cb9c808e04165a807b17fa4be20d1f4c46192b086c38cbab4f8a594f4e17f81c->enter($__internal_cb9c808e04165a807b17fa4be20d1f4c46192b086c38cbab4f8a594f4e17f81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_cb9c808e04165a807b17fa4be20d1f4c46192b086c38cbab4f8a594f4e17f81c->leave($__internal_cb9c808e04165a807b17fa4be20d1f4c46192b086c38cbab4f8a594f4e17f81c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fff6cb657ecc76d721c2a12767c233d481546c8ce11ca97e5507c6fd97c772c = $this->env->getExtension("native_profiler");
        $__internal_5fff6cb657ecc76d721c2a12767c233d481546c8ce11ca97e5507c6fd97c772c->enter($__internal_5fff6cb657ecc76d721c2a12767c233d481546c8ce11ca97e5507c6fd97c772c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Resto'Regimes
";
        
        $__internal_5fff6cb657ecc76d721c2a12767c233d481546c8ce11ca97e5507c6fd97c772c->leave($__internal_5fff6cb657ecc76d721c2a12767c233d481546c8ce11ca97e5507c6fd97c772c_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_696699f45dd9205442025b3df3b27347eb910b1c43353a2f843de4e84d829a72 = $this->env->getExtension("native_profiler");
        $__internal_696699f45dd9205442025b3df3b27347eb910b1c43353a2f843de4e84d829a72->enter($__internal_696699f45dd9205442025b3df3b27347eb910b1c43353a2f843de4e84d829a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    <div class=\"mdl-grid\">
        <div class=\"mdl-cell mdl-cell--2-col\">

        </div>
        <div class=\"mdl-cell mdl-cell--10-col\">
            <img src=\"#\" alt=\"Adds\" width=\"100%\" height=\"100px\">
        </div>
    </div>
    <div class=\"mdl-grid\">
        <div class=\"mdl-cell mdl-cell--2-col\">
            ";
        // line 21
        $this->displayBlock('rrplatform_search', $context, $blocks);
        // line 24
        echo "        </div>
        <div class=\"mdl-cell mdl-cell--10-col\">

            <div class=\"mdl-grid\">
                <div class=\"mdl-cell mdl-cell--6-col\">
                    ";
        // line 29
        $this->displayBlock('map', $context, $blocks);
        // line 31
        echo "                    ";
        $this->displayBlock('fos_user', $context, $blocks);
        // line 33
        echo "                </div>
                <div class=\"mdl-cell mdl-cell--6-col\">
                    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "                </div>

            </div>

        </div>

    </div>
";
        
        $__internal_696699f45dd9205442025b3df3b27347eb910b1c43353a2f843de4e84d829a72->leave($__internal_696699f45dd9205442025b3df3b27347eb910b1c43353a2f843de4e84d829a72_prof);

    }

    // line 21
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_275bdd1569f3acdc8f46be859c81b3de082ebf3ab5f9aa08f82f2fea0deb56c6 = $this->env->getExtension("native_profiler");
        $__internal_275bdd1569f3acdc8f46be859c81b3de082ebf3ab5f9aa08f82f2fea0deb56c6->enter($__internal_275bdd1569f3acdc8f46be859c81b3de082ebf3ab5f9aa08f82f2fea0deb56c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 22
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RRCoreBundle:Default:searchFormFull", array()));
        echo "
            ";
        
        $__internal_275bdd1569f3acdc8f46be859c81b3de082ebf3ab5f9aa08f82f2fea0deb56c6->leave($__internal_275bdd1569f3acdc8f46be859c81b3de082ebf3ab5f9aa08f82f2fea0deb56c6_prof);

    }

    // line 29
    public function block_map($context, array $blocks = array())
    {
        $__internal_12b0aafc557fcbd976654876fbbbc3f2b39e4acd8962e69fa0f4bdb842fae963 = $this->env->getExtension("native_profiler");
        $__internal_12b0aafc557fcbd976654876fbbbc3f2b39e4acd8962e69fa0f4bdb842fae963->enter($__internal_12b0aafc557fcbd976654876fbbbc3f2b39e4acd8962e69fa0f4bdb842fae963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "map"));

        // line 30
        echo "                    ";
        
        $__internal_12b0aafc557fcbd976654876fbbbc3f2b39e4acd8962e69fa0f4bdb842fae963->leave($__internal_12b0aafc557fcbd976654876fbbbc3f2b39e4acd8962e69fa0f4bdb842fae963_prof);

    }

    // line 31
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_ead7c9e982dd3bcb921ac0020ce428e1b13febf3c741c39dc3c6bb4fbf6f817a = $this->env->getExtension("native_profiler");
        $__internal_ead7c9e982dd3bcb921ac0020ce428e1b13febf3c741c39dc3c6bb4fbf6f817a->enter($__internal_ead7c9e982dd3bcb921ac0020ce428e1b13febf3c741c39dc3c6bb4fbf6f817a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 32
        echo "                    ";
        
        $__internal_ead7c9e982dd3bcb921ac0020ce428e1b13febf3c741c39dc3c6bb4fbf6f817a->leave($__internal_ead7c9e982dd3bcb921ac0020ce428e1b13febf3c741c39dc3c6bb4fbf6f817a_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fdcbc5d7a1cf5724fe421b2b7d6eeb611df0f3d4edb3c389e51bbbf0b7ad852 = $this->env->getExtension("native_profiler");
        $__internal_6fdcbc5d7a1cf5724fe421b2b7d6eeb611df0f3d4edb3c389e51bbbf0b7ad852->enter($__internal_6fdcbc5d7a1cf5724fe421b2b7d6eeb611df0f3d4edb3c389e51bbbf0b7ad852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "                    ";
        
        $__internal_6fdcbc5d7a1cf5724fe421b2b7d6eeb611df0f3d4edb3c389e51bbbf0b7ad852->leave($__internal_6fdcbc5d7a1cf5724fe421b2b7d6eeb611df0f3d4edb3c389e51bbbf0b7ad852_prof);

    }

    public function getTemplateName()
    {
        return "RRRestaurantBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 36,  160 => 35,  153 => 32,  147 => 31,  140 => 30,  134 => 29,  124 => 22,  118 => 21,  104 => 37,  102 => 35,  98 => 33,  95 => 31,  93 => 29,  86 => 24,  84 => 21,  71 => 10,  65 => 9,  57 => 6,  51 => 5,  40 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* {% block javascript %}*/
/* {% endblock %}*/
/* {% block title %}*/
/*     Resto'Regimes*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="mdl-grid">*/
/*         <div class="mdl-cell mdl-cell--2-col">*/
/* */
/*         </div>*/
/*         <div class="mdl-cell mdl-cell--10-col">*/
/*             <img src="#" alt="Adds" width="100%" height="100px">*/
/*         </div>*/
/*     </div>*/
/*     <div class="mdl-grid">*/
/*         <div class="mdl-cell mdl-cell--2-col">*/
/*             {% block rrplatform_search %}*/
/*                 {{ render(controller('RRCoreBundle:Default:searchFormFull', {})) }}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="mdl-cell mdl-cell--10-col">*/
/* */
/*             <div class="mdl-grid">*/
/*                 <div class="mdl-cell mdl-cell--6-col">*/
/*                     {% block map %}*/
/*                     {% endblock %}*/
/*                     {% block fos_user %}*/
/*                     {% endblock fos_user %}*/
/*                 </div>*/
/*                 <div class="mdl-cell mdl-cell--6-col">*/
/*                     {% block body %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
