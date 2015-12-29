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
        $__internal_d48fd68b3d8eabca917b6b3f7aacc2ff7029dfcaa17b93fa1aece7e4de2be42a = $this->env->getExtension("native_profiler");
        $__internal_d48fd68b3d8eabca917b6b3f7aacc2ff7029dfcaa17b93fa1aece7e4de2be42a->enter($__internal_d48fd68b3d8eabca917b6b3f7aacc2ff7029dfcaa17b93fa1aece7e4de2be42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d48fd68b3d8eabca917b6b3f7aacc2ff7029dfcaa17b93fa1aece7e4de2be42a->leave($__internal_d48fd68b3d8eabca917b6b3f7aacc2ff7029dfcaa17b93fa1aece7e4de2be42a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ebdf79b5584c0117cf5463e4635e4440639260a08ff61e9227a234d92e03b259 = $this->env->getExtension("native_profiler");
        $__internal_ebdf79b5584c0117cf5463e4635e4440639260a08ff61e9227a234d92e03b259->enter($__internal_ebdf79b5584c0117cf5463e4635e4440639260a08ff61e9227a234d92e03b259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ebdf79b5584c0117cf5463e4635e4440639260a08ff61e9227a234d92e03b259->leave($__internal_ebdf79b5584c0117cf5463e4635e4440639260a08ff61e9227a234d92e03b259_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbd71144d0d9ead5a0ee2b713fd4dd2154b902c95457abf5d05c146139b351e2 = $this->env->getExtension("native_profiler");
        $__internal_bbd71144d0d9ead5a0ee2b713fd4dd2154b902c95457abf5d05c146139b351e2->enter($__internal_bbd71144d0d9ead5a0ee2b713fd4dd2154b902c95457abf5d05c146139b351e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bbd71144d0d9ead5a0ee2b713fd4dd2154b902c95457abf5d05c146139b351e2->leave($__internal_bbd71144d0d9ead5a0ee2b713fd4dd2154b902c95457abf5d05c146139b351e2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e85dbf5da07d96fd578707516b45f76a232934e7a2fa985635f4fd8284225bd7 = $this->env->getExtension("native_profiler");
        $__internal_e85dbf5da07d96fd578707516b45f76a232934e7a2fa985635f4fd8284225bd7->enter($__internal_e85dbf5da07d96fd578707516b45f76a232934e7a2fa985635f4fd8284225bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e85dbf5da07d96fd578707516b45f76a232934e7a2fa985635f4fd8284225bd7->leave($__internal_e85dbf5da07d96fd578707516b45f76a232934e7a2fa985635f4fd8284225bd7_prof);

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
