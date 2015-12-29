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
            'title' => array($this, 'block_title'),
            'rrplatform_search' => array($this, 'block_rrplatform_search'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60ee037611d7fe3b0121d8c9bd2020d0ebd30502462c3d8e62b67243e6503f0c = $this->env->getExtension("native_profiler");
        $__internal_60ee037611d7fe3b0121d8c9bd2020d0ebd30502462c3d8e62b67243e6503f0c->enter($__internal_60ee037611d7fe3b0121d8c9bd2020d0ebd30502462c3d8e62b67243e6503f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRCoreBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60ee037611d7fe3b0121d8c9bd2020d0ebd30502462c3d8e62b67243e6503f0c->leave($__internal_60ee037611d7fe3b0121d8c9bd2020d0ebd30502462c3d8e62b67243e6503f0c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c17cace3cc0fad99fa8e11a666fa38641efe9b8c4aaa6583376b910cd538ca1e = $this->env->getExtension("native_profiler");
        $__internal_c17cace3cc0fad99fa8e11a666fa38641efe9b8c4aaa6583376b910cd538ca1e->enter($__internal_c17cace3cc0fad99fa8e11a666fa38641efe9b8c4aaa6583376b910cd538ca1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Resto'Regimes
";
        
        $__internal_c17cace3cc0fad99fa8e11a666fa38641efe9b8c4aaa6583376b910cd538ca1e->leave($__internal_c17cace3cc0fad99fa8e11a666fa38641efe9b8c4aaa6583376b910cd538ca1e_prof);

    }

    // line 7
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_90078737613ca903ad35abd489b583581a832c45dd51d48bbb2f08aad515d5cd = $this->env->getExtension("native_profiler");
        $__internal_90078737613ca903ad35abd489b583581a832c45dd51d48bbb2f08aad515d5cd->enter($__internal_90078737613ca903ad35abd489b583581a832c45dd51d48bbb2f08aad515d5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 8
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RRCoreBundle:Default:searchFormFull", array()));
        echo "
";
        
        $__internal_90078737613ca903ad35abd489b583581a832c45dd51d48bbb2f08aad515d5cd->leave($__internal_90078737613ca903ad35abd489b583581a832c45dd51d48bbb2f08aad515d5cd_prof);

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
        return array (  55 => 8,  49 => 7,  41 => 5,  35 => 4,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* {% block title %}*/
/*   Resto'Regimes*/
/* {% endblock %}*/
/* {% block rrplatform_search %}*/
/*     {{ render(controller('RRCoreBundle:Default:searchFormFull', {})) }}*/
/* {% endblock %}*/
/* */
