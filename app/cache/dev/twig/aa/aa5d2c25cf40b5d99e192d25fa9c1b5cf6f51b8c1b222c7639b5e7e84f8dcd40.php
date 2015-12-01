<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_21f558913dcedac5aa30e1376fedd26c0904954f7d202d988fa3a9552aa124a4 extends Twig_Template
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
        $__internal_7c4fe32e9d3525079462f94c69888384c6f45905a341bbc6377ba344b32114d6 = $this->env->getExtension("native_profiler");
        $__internal_7c4fe32e9d3525079462f94c69888384c6f45905a341bbc6377ba344b32114d6->enter($__internal_7c4fe32e9d3525079462f94c69888384c6f45905a341bbc6377ba344b32114d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c4fe32e9d3525079462f94c69888384c6f45905a341bbc6377ba344b32114d6->leave($__internal_7c4fe32e9d3525079462f94c69888384c6f45905a341bbc6377ba344b32114d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a7fac05528343c67a3947b60771fe202ac4dbb07efdf0dddc17548f1fd98ce3 = $this->env->getExtension("native_profiler");
        $__internal_2a7fac05528343c67a3947b60771fe202ac4dbb07efdf0dddc17548f1fd98ce3->enter($__internal_2a7fac05528343c67a3947b60771fe202ac4dbb07efdf0dddc17548f1fd98ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2a7fac05528343c67a3947b60771fe202ac4dbb07efdf0dddc17548f1fd98ce3->leave($__internal_2a7fac05528343c67a3947b60771fe202ac4dbb07efdf0dddc17548f1fd98ce3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4a0650d57dba9cfb5492a1e264265724bc53f9ef93e43876077f116a7812ed3 = $this->env->getExtension("native_profiler");
        $__internal_c4a0650d57dba9cfb5492a1e264265724bc53f9ef93e43876077f116a7812ed3->enter($__internal_c4a0650d57dba9cfb5492a1e264265724bc53f9ef93e43876077f116a7812ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c4a0650d57dba9cfb5492a1e264265724bc53f9ef93e43876077f116a7812ed3->leave($__internal_c4a0650d57dba9cfb5492a1e264265724bc53f9ef93e43876077f116a7812ed3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c143a4c122f07ccb321b2620e266757b2cfda3a0ae9617c0e775c3251ce4d822 = $this->env->getExtension("native_profiler");
        $__internal_c143a4c122f07ccb321b2620e266757b2cfda3a0ae9617c0e775c3251ce4d822->enter($__internal_c143a4c122f07ccb321b2620e266757b2cfda3a0ae9617c0e775c3251ce4d822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c143a4c122f07ccb321b2620e266757b2cfda3a0ae9617c0e775c3251ce4d822->leave($__internal_c143a4c122f07ccb321b2620e266757b2cfda3a0ae9617c0e775c3251ce4d822_prof);

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
