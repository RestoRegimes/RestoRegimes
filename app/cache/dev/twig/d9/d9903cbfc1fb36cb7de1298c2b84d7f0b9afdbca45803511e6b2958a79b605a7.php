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
        $__internal_4c9e3adba5dabde1f6734139521103c99570f9520353d911a3f81ca12567e2bc = $this->env->getExtension("native_profiler");
        $__internal_4c9e3adba5dabde1f6734139521103c99570f9520353d911a3f81ca12567e2bc->enter($__internal_4c9e3adba5dabde1f6734139521103c99570f9520353d911a3f81ca12567e2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c9e3adba5dabde1f6734139521103c99570f9520353d911a3f81ca12567e2bc->leave($__internal_4c9e3adba5dabde1f6734139521103c99570f9520353d911a3f81ca12567e2bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64348d2a57f4d1196e9edd2163ded75e2a2f074d4be4426c2ddbb6bb45258269 = $this->env->getExtension("native_profiler");
        $__internal_64348d2a57f4d1196e9edd2163ded75e2a2f074d4be4426c2ddbb6bb45258269->enter($__internal_64348d2a57f4d1196e9edd2163ded75e2a2f074d4be4426c2ddbb6bb45258269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_64348d2a57f4d1196e9edd2163ded75e2a2f074d4be4426c2ddbb6bb45258269->leave($__internal_64348d2a57f4d1196e9edd2163ded75e2a2f074d4be4426c2ddbb6bb45258269_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_316df55f58982342bc65c9fef8cc36228c480598b8b790a09c0117cfab25300b = $this->env->getExtension("native_profiler");
        $__internal_316df55f58982342bc65c9fef8cc36228c480598b8b790a09c0117cfab25300b->enter($__internal_316df55f58982342bc65c9fef8cc36228c480598b8b790a09c0117cfab25300b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_316df55f58982342bc65c9fef8cc36228c480598b8b790a09c0117cfab25300b->leave($__internal_316df55f58982342bc65c9fef8cc36228c480598b8b790a09c0117cfab25300b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8ae878c08142b5409f9f1fff0367ee788718d985a0bc80fd8e57ad479250a07 = $this->env->getExtension("native_profiler");
        $__internal_b8ae878c08142b5409f9f1fff0367ee788718d985a0bc80fd8e57ad479250a07->enter($__internal_b8ae878c08142b5409f9f1fff0367ee788718d985a0bc80fd8e57ad479250a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b8ae878c08142b5409f9f1fff0367ee788718d985a0bc80fd8e57ad479250a07->leave($__internal_b8ae878c08142b5409f9f1fff0367ee788718d985a0bc80fd8e57ad479250a07_prof);

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
