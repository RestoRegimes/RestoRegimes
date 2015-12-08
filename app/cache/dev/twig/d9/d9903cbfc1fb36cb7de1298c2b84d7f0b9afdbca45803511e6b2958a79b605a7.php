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
        $__internal_4b037469f288c2a1a7ce51a89b6b3ef5f1f96e991e27ae0257106920a9f4dd75 = $this->env->getExtension("native_profiler");
        $__internal_4b037469f288c2a1a7ce51a89b6b3ef5f1f96e991e27ae0257106920a9f4dd75->enter($__internal_4b037469f288c2a1a7ce51a89b6b3ef5f1f96e991e27ae0257106920a9f4dd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b037469f288c2a1a7ce51a89b6b3ef5f1f96e991e27ae0257106920a9f4dd75->leave($__internal_4b037469f288c2a1a7ce51a89b6b3ef5f1f96e991e27ae0257106920a9f4dd75_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b15ebb36961d67830cab9e166eca22103abf9cbb4f3b6089c6e99fb058e7ccfc = $this->env->getExtension("native_profiler");
        $__internal_b15ebb36961d67830cab9e166eca22103abf9cbb4f3b6089c6e99fb058e7ccfc->enter($__internal_b15ebb36961d67830cab9e166eca22103abf9cbb4f3b6089c6e99fb058e7ccfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b15ebb36961d67830cab9e166eca22103abf9cbb4f3b6089c6e99fb058e7ccfc->leave($__internal_b15ebb36961d67830cab9e166eca22103abf9cbb4f3b6089c6e99fb058e7ccfc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_08ebed18aba317ce7c0afd5001759a15cf97f5c592b5260907aa3b20c75ea79b = $this->env->getExtension("native_profiler");
        $__internal_08ebed18aba317ce7c0afd5001759a15cf97f5c592b5260907aa3b20c75ea79b->enter($__internal_08ebed18aba317ce7c0afd5001759a15cf97f5c592b5260907aa3b20c75ea79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_08ebed18aba317ce7c0afd5001759a15cf97f5c592b5260907aa3b20c75ea79b->leave($__internal_08ebed18aba317ce7c0afd5001759a15cf97f5c592b5260907aa3b20c75ea79b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_73b263098d632d8940d622b1662073422e9863c4e3238f11c74076625cb7cddc = $this->env->getExtension("native_profiler");
        $__internal_73b263098d632d8940d622b1662073422e9863c4e3238f11c74076625cb7cddc->enter($__internal_73b263098d632d8940d622b1662073422e9863c4e3238f11c74076625cb7cddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_73b263098d632d8940d622b1662073422e9863c4e3238f11c74076625cb7cddc->leave($__internal_73b263098d632d8940d622b1662073422e9863c4e3238f11c74076625cb7cddc_prof);

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
