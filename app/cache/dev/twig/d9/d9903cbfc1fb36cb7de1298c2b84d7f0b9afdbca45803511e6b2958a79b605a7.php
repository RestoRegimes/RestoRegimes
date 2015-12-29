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
        $__internal_b243416f43abc9f5e8af63dd5e88a282d41f3c9b23e476fc60565716d60bcf39 = $this->env->getExtension("native_profiler");
        $__internal_b243416f43abc9f5e8af63dd5e88a282d41f3c9b23e476fc60565716d60bcf39->enter($__internal_b243416f43abc9f5e8af63dd5e88a282d41f3c9b23e476fc60565716d60bcf39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b243416f43abc9f5e8af63dd5e88a282d41f3c9b23e476fc60565716d60bcf39->leave($__internal_b243416f43abc9f5e8af63dd5e88a282d41f3c9b23e476fc60565716d60bcf39_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_30bbf003f5336fd9fa8d538dedd3dc24c3b8f87905e65fa6c660731190b93bb3 = $this->env->getExtension("native_profiler");
        $__internal_30bbf003f5336fd9fa8d538dedd3dc24c3b8f87905e65fa6c660731190b93bb3->enter($__internal_30bbf003f5336fd9fa8d538dedd3dc24c3b8f87905e65fa6c660731190b93bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_30bbf003f5336fd9fa8d538dedd3dc24c3b8f87905e65fa6c660731190b93bb3->leave($__internal_30bbf003f5336fd9fa8d538dedd3dc24c3b8f87905e65fa6c660731190b93bb3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d8c206a74a4501fa961ff52fa10a7f3c890f68746f51bb0b93fcbde95706763 = $this->env->getExtension("native_profiler");
        $__internal_6d8c206a74a4501fa961ff52fa10a7f3c890f68746f51bb0b93fcbde95706763->enter($__internal_6d8c206a74a4501fa961ff52fa10a7f3c890f68746f51bb0b93fcbde95706763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6d8c206a74a4501fa961ff52fa10a7f3c890f68746f51bb0b93fcbde95706763->leave($__internal_6d8c206a74a4501fa961ff52fa10a7f3c890f68746f51bb0b93fcbde95706763_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_44a87beeb9c476ca54b1b433c1c3042469760090f110a9c28039d0113c6f0844 = $this->env->getExtension("native_profiler");
        $__internal_44a87beeb9c476ca54b1b433c1c3042469760090f110a9c28039d0113c6f0844->enter($__internal_44a87beeb9c476ca54b1b433c1c3042469760090f110a9c28039d0113c6f0844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_44a87beeb9c476ca54b1b433c1c3042469760090f110a9c28039d0113c6f0844->leave($__internal_44a87beeb9c476ca54b1b433c1c3042469760090f110a9c28039d0113c6f0844_prof);

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
