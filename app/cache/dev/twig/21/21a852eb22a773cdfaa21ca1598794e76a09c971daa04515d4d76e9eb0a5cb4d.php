<?php

/* RRCoreBundle:Default:layout.html.twig */
class __TwigTemplate_505f575b2f13eab1bcae0fd5fade30d75002fbec942b5091d5e832a7f290d2d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "RRCoreBundle:Default:layout.html.twig", 3);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'title' => array($this, 'block_title'),
            'jumbotron' => array($this, 'block_jumbotron'),
            'body' => array($this, 'block_body'),
            'rrplatform_body' => array($this, 'block_rrplatform_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_799017c254851c038a7556f6106eac395aaae55a4b7bd2b4feaa6fd2c7886682 = $this->env->getExtension("native_profiler");
        $__internal_799017c254851c038a7556f6106eac395aaae55a4b7bd2b4feaa6fd2c7886682->enter($__internal_799017c254851c038a7556f6106eac395aaae55a4b7bd2b4feaa6fd2c7886682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRCoreBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_799017c254851c038a7556f6106eac395aaae55a4b7bd2b4feaa6fd2c7886682->leave($__internal_799017c254851c038a7556f6106eac395aaae55a4b7bd2b4feaa6fd2c7886682_prof);

    }

    // line 4
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9f86d37381e52336b6955d95e497d7ee2a837cb1841dc938b8b6c3e8ee6b33d5 = $this->env->getExtension("native_profiler");
        $__internal_9f86d37381e52336b6955d95e497d7ee2a837cb1841dc938b8b6c3e8ee6b33d5->enter($__internal_9f86d37381e52336b6955d95e497d7ee2a837cb1841dc938b8b6c3e8ee6b33d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 5
        echo "    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/p5.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/sketch.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_9f86d37381e52336b6955d95e497d7ee2a837cb1841dc938b8b6c3e8ee6b33d5->leave($__internal_9f86d37381e52336b6955d95e497d7ee2a837cb1841dc938b8b6c3e8ee6b33d5_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bc605c7915777e4822318b54a91a4492ba70fae3eb9f096833d2bd33d159762 = $this->env->getExtension("native_profiler");
        $__internal_7bc605c7915777e4822318b54a91a4492ba70fae3eb9f096833d2bd33d159762->enter($__internal_7bc605c7915777e4822318b54a91a4492ba70fae3eb9f096833d2bd33d159762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "  Resto'Regimes
";
        
        $__internal_7bc605c7915777e4822318b54a91a4492ba70fae3eb9f096833d2bd33d159762->leave($__internal_7bc605c7915777e4822318b54a91a4492ba70fae3eb9f096833d2bd33d159762_prof);

    }

    // line 12
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_b96cca4e500832a541e494990adaf63333a20920d7cc389f49ecb6ec80e87003 = $this->env->getExtension("native_profiler");
        $__internal_b96cca4e500832a541e494990adaf63333a20920d7cc389f49ecb6ec80e87003->enter($__internal_b96cca4e500832a541e494990adaf63333a20920d7cc389f49ecb6ec80e87003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 13
        echo "
";
        
        $__internal_b96cca4e500832a541e494990adaf63333a20920d7cc389f49ecb6ec80e87003->leave($__internal_b96cca4e500832a541e494990adaf63333a20920d7cc389f49ecb6ec80e87003_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_e523328c6357f8cbdd356046f2d9aec54b393e21448253c52620ae24cbc35c75 = $this->env->getExtension("native_profiler");
        $__internal_e523328c6357f8cbdd356046f2d9aec54b393e21448253c52620ae24cbc35c75->enter($__internal_e523328c6357f8cbdd356046f2d9aec54b393e21448253c52620ae24cbc35c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('rrplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_e523328c6357f8cbdd356046f2d9aec54b393e21448253c52620ae24cbc35c75->leave($__internal_e523328c6357f8cbdd356046f2d9aec54b393e21448253c52620ae24cbc35c75_prof);

    }

    // line 17
    public function block_rrplatform_body($context, array $blocks = array())
    {
        $__internal_d3963172460a10860afe26250c2e26ab293d2806d8139338f0649d656ad0face = $this->env->getExtension("native_profiler");
        $__internal_d3963172460a10860afe26250c2e26ab293d2806d8139338f0649d656ad0face->enter($__internal_d3963172460a10860afe26250c2e26ab293d2806d8139338f0649d656ad0face_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_body"));

        // line 18
        echo "    ";
        
        $__internal_d3963172460a10860afe26250c2e26ab293d2806d8139338f0649d656ad0face->leave($__internal_d3963172460a10860afe26250c2e26ab293d2806d8139338f0649d656ad0face_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_e64b06e10513e1153b25c2a46f92ef57d837a34316b66979ec271f68fc3ae021 = $this->env->getExtension("native_profiler");
        $__internal_e64b06e10513e1153b25c2a46f92ef57d837a34316b66979ec271f68fc3ae021->enter($__internal_e64b06e10513e1153b25c2a46f92ef57d837a34316b66979ec271f68fc3ae021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "
";
        
        $__internal_e64b06e10513e1153b25c2a46f92ef57d837a34316b66979ec271f68fc3ae021->leave($__internal_e64b06e10513e1153b25c2a46f92ef57d837a34316b66979ec271f68fc3ae021_prof);

    }

    public function getTemplateName()
    {
        return "RRCoreBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 22,  120 => 21,  113 => 18,  107 => 17,  99 => 19,  97 => 17,  94 => 16,  88 => 15,  80 => 13,  74 => 12,  66 => 10,  60 => 9,  50 => 6,  45 => 5,  39 => 4,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* {% block javascript %}*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('bundles/rrcore/js/p5.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('bundles/rrcore/js/sketch.js') }}"></script>*/
/* */
/* {% endblock %}*/
/* {% block title %}*/
/*   Resto'Regimes*/
/* {% endblock %}*/
/* {% block jumbotron %}*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* */
/*     {% block rrplatform_body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/* {% block content %}*/
/* */
/* {% endblock %}*/
