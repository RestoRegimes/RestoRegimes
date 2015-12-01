<?php

/* RRRestaurantBundle::layout.html.twig */
class __TwigTemplate_0025e731cc2c25139d17955c81bb7910ee2afc5022cb04e2c5b3b0fd242c13d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "RRRestaurantBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'rrrestaurant_body' => array($this, 'block_rrrestaurant_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_827fd63def339d40cf182a8327a0e9db8e999864d86eb697e943b05815981574 = $this->env->getExtension("native_profiler");
        $__internal_827fd63def339d40cf182a8327a0e9db8e999864d86eb697e943b05815981574->enter($__internal_827fd63def339d40cf182a8327a0e9db8e999864d86eb697e943b05815981574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_827fd63def339d40cf182a8327a0e9db8e999864d86eb697e943b05815981574->leave($__internal_827fd63def339d40cf182a8327a0e9db8e999864d86eb697e943b05815981574_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cea4d1bd280f6fc3dbd2378d1054eb9bb6a029edbae9c52fc6af76fad4ae3f3c = $this->env->getExtension("native_profiler");
        $__internal_cea4d1bd280f6fc3dbd2378d1054eb9bb6a029edbae9c52fc6af76fad4ae3f3c->enter($__internal_cea4d1bd280f6fc3dbd2378d1054eb9bb6a029edbae9c52fc6af76fad4ae3f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Restaurants - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cea4d1bd280f6fc3dbd2378d1054eb9bb6a029edbae9c52fc6af76fad4ae3f3c->leave($__internal_cea4d1bd280f6fc3dbd2378d1054eb9bb6a029edbae9c52fc6af76fad4ae3f3c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_222112432ad75fa529dde1153fe366f4ee74a4fc6411524e7165e944bded45b9 = $this->env->getExtension("native_profiler");
        $__internal_222112432ad75fa529dde1153fe366f4ee74a4fc6411524e7165e944bded45b9->enter($__internal_222112432ad75fa529dde1153fe366f4ee74a4fc6411524e7165e944bded45b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    <h1>Restaurants</h1>

    <hr>

    ";
        // line 17
        echo "    ";
        $this->displayBlock('rrrestaurant_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_222112432ad75fa529dde1153fe366f4ee74a4fc6411524e7165e944bded45b9->leave($__internal_222112432ad75fa529dde1153fe366f4ee74a4fc6411524e7165e944bded45b9_prof);

    }

    // line 17
    public function block_rrrestaurant_body($context, array $blocks = array())
    {
        $__internal_25e7cb4b058a10d961dc195c123d4669d1eaab93e0b3bc817e6a7fd2b4e64c4f = $this->env->getExtension("native_profiler");
        $__internal_25e7cb4b058a10d961dc195c123d4669d1eaab93e0b3bc817e6a7fd2b4e64c4f->enter($__internal_25e7cb4b058a10d961dc195c123d4669d1eaab93e0b3bc817e6a7fd2b4e64c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrrestaurant_body"));

        // line 18
        echo "    ";
        
        $__internal_25e7cb4b058a10d961dc195c123d4669d1eaab93e0b3bc817e6a7fd2b4e64c4f->leave($__internal_25e7cb4b058a10d961dc195c123d4669d1eaab93e0b3bc817e6a7fd2b4e64c4f_prof);

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
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Restaurants - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*     <h1>Restaurants</h1>*/
/* */
/*     <hr>*/
/* */
/*     {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*     {% block rrrestaurant_body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
