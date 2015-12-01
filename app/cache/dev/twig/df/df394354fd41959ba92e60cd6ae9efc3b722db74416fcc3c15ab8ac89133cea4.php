<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a2349cf7212a0eec4361beb49ef5f0edb6e1c36a334f60983518517b28aea88f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa88af408baca13e379f98a9272e7cb02e59a10764db8f580d4e377ceb095ba5 = $this->env->getExtension("native_profiler");
        $__internal_fa88af408baca13e379f98a9272e7cb02e59a10764db8f580d4e377ceb095ba5->enter($__internal_fa88af408baca13e379f98a9272e7cb02e59a10764db8f580d4e377ceb095ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa88af408baca13e379f98a9272e7cb02e59a10764db8f580d4e377ceb095ba5->leave($__internal_fa88af408baca13e379f98a9272e7cb02e59a10764db8f580d4e377ceb095ba5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_813dbaf57f7ebbb8a372b23a62893c101d1b55c7da3f45491a1956dbf15f389a = $this->env->getExtension("native_profiler");
        $__internal_813dbaf57f7ebbb8a372b23a62893c101d1b55c7da3f45491a1956dbf15f389a->enter($__internal_813dbaf57f7ebbb8a372b23a62893c101d1b55c7da3f45491a1956dbf15f389a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_813dbaf57f7ebbb8a372b23a62893c101d1b55c7da3f45491a1956dbf15f389a->leave($__internal_813dbaf57f7ebbb8a372b23a62893c101d1b55c7da3f45491a1956dbf15f389a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
