<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c17c0e1d3a0f878bc59db3dc381ba8de006d9c02548dc135ef892076e94f61c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16b86a1c9fa07433153eb013582f5b2a4e33604e22acf1a76d9e624c3d86e069 = $this->env->getExtension("native_profiler");
        $__internal_16b86a1c9fa07433153eb013582f5b2a4e33604e22acf1a76d9e624c3d86e069->enter($__internal_16b86a1c9fa07433153eb013582f5b2a4e33604e22acf1a76d9e624c3d86e069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16b86a1c9fa07433153eb013582f5b2a4e33604e22acf1a76d9e624c3d86e069->leave($__internal_16b86a1c9fa07433153eb013582f5b2a4e33604e22acf1a76d9e624c3d86e069_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc5a8532a9c38203c462dabb62b4562031dc5ba41be5fe2fe336c94a8b6fc602 = $this->env->getExtension("native_profiler");
        $__internal_bc5a8532a9c38203c462dabb62b4562031dc5ba41be5fe2fe336c94a8b6fc602->enter($__internal_bc5a8532a9c38203c462dabb62b4562031dc5ba41be5fe2fe336c94a8b6fc602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bc5a8532a9c38203c462dabb62b4562031dc5ba41be5fe2fe336c94a8b6fc602->leave($__internal_bc5a8532a9c38203c462dabb62b4562031dc5ba41be5fe2fe336c94a8b6fc602_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6d60ba2c402d34604ed6e233d4426216c924745529ca5da1bcc78d8fb5edec3 = $this->env->getExtension("native_profiler");
        $__internal_a6d60ba2c402d34604ed6e233d4426216c924745529ca5da1bcc78d8fb5edec3->enter($__internal_a6d60ba2c402d34604ed6e233d4426216c924745529ca5da1bcc78d8fb5edec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a6d60ba2c402d34604ed6e233d4426216c924745529ca5da1bcc78d8fb5edec3->leave($__internal_a6d60ba2c402d34604ed6e233d4426216c924745529ca5da1bcc78d8fb5edec3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d805fe34efd6327849d5b3ccb9f15335521e5685eb6bd7490f468ce59ce988a8 = $this->env->getExtension("native_profiler");
        $__internal_d805fe34efd6327849d5b3ccb9f15335521e5685eb6bd7490f468ce59ce988a8->enter($__internal_d805fe34efd6327849d5b3ccb9f15335521e5685eb6bd7490f468ce59ce988a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d805fe34efd6327849d5b3ccb9f15335521e5685eb6bd7490f468ce59ce988a8->leave($__internal_d805fe34efd6327849d5b3ccb9f15335521e5685eb6bd7490f468ce59ce988a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
