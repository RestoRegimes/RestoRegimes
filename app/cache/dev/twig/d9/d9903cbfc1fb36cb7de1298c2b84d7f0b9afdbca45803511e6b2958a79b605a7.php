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
        $__internal_3f29d83a35f8e83fcc8a7ef07a7024cb8919f6570aad95e7069fa0d6358f2a1d = $this->env->getExtension("native_profiler");
        $__internal_3f29d83a35f8e83fcc8a7ef07a7024cb8919f6570aad95e7069fa0d6358f2a1d->enter($__internal_3f29d83a35f8e83fcc8a7ef07a7024cb8919f6570aad95e7069fa0d6358f2a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f29d83a35f8e83fcc8a7ef07a7024cb8919f6570aad95e7069fa0d6358f2a1d->leave($__internal_3f29d83a35f8e83fcc8a7ef07a7024cb8919f6570aad95e7069fa0d6358f2a1d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_100619833a3c354a395f6147657e483aec70fa34185ae0c8ec75b64d84c6066e = $this->env->getExtension("native_profiler");
        $__internal_100619833a3c354a395f6147657e483aec70fa34185ae0c8ec75b64d84c6066e->enter($__internal_100619833a3c354a395f6147657e483aec70fa34185ae0c8ec75b64d84c6066e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_100619833a3c354a395f6147657e483aec70fa34185ae0c8ec75b64d84c6066e->leave($__internal_100619833a3c354a395f6147657e483aec70fa34185ae0c8ec75b64d84c6066e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_97070c5e949fa5bd43c9d1730d6261bccfe010f70c2e9792999f6e25637b5bbc = $this->env->getExtension("native_profiler");
        $__internal_97070c5e949fa5bd43c9d1730d6261bccfe010f70c2e9792999f6e25637b5bbc->enter($__internal_97070c5e949fa5bd43c9d1730d6261bccfe010f70c2e9792999f6e25637b5bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_97070c5e949fa5bd43c9d1730d6261bccfe010f70c2e9792999f6e25637b5bbc->leave($__internal_97070c5e949fa5bd43c9d1730d6261bccfe010f70c2e9792999f6e25637b5bbc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbc4e693afaa4d3ad4c9fbb6cc90a3b1c3322ab132fc6670e0d4ada08ac74722 = $this->env->getExtension("native_profiler");
        $__internal_cbc4e693afaa4d3ad4c9fbb6cc90a3b1c3322ab132fc6670e0d4ada08ac74722->enter($__internal_cbc4e693afaa4d3ad4c9fbb6cc90a3b1c3322ab132fc6670e0d4ada08ac74722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cbc4e693afaa4d3ad4c9fbb6cc90a3b1c3322ab132fc6670e0d4ada08ac74722->leave($__internal_cbc4e693afaa4d3ad4c9fbb6cc90a3b1c3322ab132fc6670e0d4ada08ac74722_prof);

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
