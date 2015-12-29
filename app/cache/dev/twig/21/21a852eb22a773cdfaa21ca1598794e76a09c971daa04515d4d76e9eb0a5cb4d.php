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
            'content' => array($this, 'block_content'),
            'rrplatform_search' => array($this, 'block_rrplatform_search'),
            'fos_user' => array($this, 'block_fos_user'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e868467d98844680ae0dd0d17336471018600ee675c63cf8cedfd8e773ccbb6 = $this->env->getExtension("native_profiler");
        $__internal_9e868467d98844680ae0dd0d17336471018600ee675c63cf8cedfd8e773ccbb6->enter($__internal_9e868467d98844680ae0dd0d17336471018600ee675c63cf8cedfd8e773ccbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRCoreBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e868467d98844680ae0dd0d17336471018600ee675c63cf8cedfd8e773ccbb6->leave($__internal_9e868467d98844680ae0dd0d17336471018600ee675c63cf8cedfd8e773ccbb6_prof);

    }

    // line 4
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_8306fa8a80604ced596212b901bc42304e820900ea40090d44141fec3272e120 = $this->env->getExtension("native_profiler");
        $__internal_8306fa8a80604ced596212b901bc42304e820900ea40090d44141fec3272e120->enter($__internal_8306fa8a80604ced596212b901bc42304e820900ea40090d44141fec3272e120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_8306fa8a80604ced596212b901bc42304e820900ea40090d44141fec3272e120->leave($__internal_8306fa8a80604ced596212b901bc42304e820900ea40090d44141fec3272e120_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_f80f1c1f05b7cd6e4bce3d0c849d2db2aae819972c58fa19aea6e7a3a836c294 = $this->env->getExtension("native_profiler");
        $__internal_f80f1c1f05b7cd6e4bce3d0c849d2db2aae819972c58fa19aea6e7a3a836c294->enter($__internal_f80f1c1f05b7cd6e4bce3d0c849d2db2aae819972c58fa19aea6e7a3a836c294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "  Resto'Regimes
";
        
        $__internal_f80f1c1f05b7cd6e4bce3d0c849d2db2aae819972c58fa19aea6e7a3a836c294->leave($__internal_f80f1c1f05b7cd6e4bce3d0c849d2db2aae819972c58fa19aea6e7a3a836c294_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_e12f970fdd9bd92027598bed18188fdcaea9dfcc02c89affdf7d9db7be948dd8 = $this->env->getExtension("native_profiler");
        $__internal_e12f970fdd9bd92027598bed18188fdcaea9dfcc02c89affdf7d9db7be948dd8->enter($__internal_e12f970fdd9bd92027598bed18188fdcaea9dfcc02c89affdf7d9db7be948dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    <div class=\"mdl-grid\">
        <div class=\"mdl-cell mdl-cell--2-col\">
            ";
        // line 13
        $this->displayBlock('rrplatform_search', $context, $blocks);
        // line 16
        echo "        </div>
        <div class=\"mdl-cell mdl-cell--10-col\">

            <div class=\"mdl-grid\">
                <div class=\"mdl-cell mdl-cell--2-col\">

                </div>
                <div class=\"mdl-cell mdl-cell--8-col\">
                    ";
        // line 24
        $this->displayBlock('fos_user', $context, $blocks);
        // line 26
        echo "                    ";
        if (array_key_exists("listRestaurants", $context)) {
            // line 27
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listRestaurants"]) ? $context["listRestaurants"] : $this->getContext($context, "listRestaurants")));
            foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
                // line 28
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["restaurant"], "nom", array()), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    ";
        }
        // line 31
        echo "                </div>
            </div>
            ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        </div>

    </div>
";
        
        $__internal_e12f970fdd9bd92027598bed18188fdcaea9dfcc02c89affdf7d9db7be948dd8->leave($__internal_e12f970fdd9bd92027598bed18188fdcaea9dfcc02c89affdf7d9db7be948dd8_prof);

    }

    // line 13
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_8bf3b5360a2c60c4c151e904f611a10368161738595f1ac768b60707f6740af9 = $this->env->getExtension("native_profiler");
        $__internal_8bf3b5360a2c60c4c151e904f611a10368161738595f1ac768b60707f6740af9->enter($__internal_8bf3b5360a2c60c4c151e904f611a10368161738595f1ac768b60707f6740af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 14
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RRCoreBundle:Default:searchFormFull", array()));
        echo "
            ";
        
        $__internal_8bf3b5360a2c60c4c151e904f611a10368161738595f1ac768b60707f6740af9->leave($__internal_8bf3b5360a2c60c4c151e904f611a10368161738595f1ac768b60707f6740af9_prof);

    }

    // line 24
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_de6bd11d859caaebe848c24004551e5ec2872bcce85aba120f103b85ce573297 = $this->env->getExtension("native_profiler");
        $__internal_de6bd11d859caaebe848c24004551e5ec2872bcce85aba120f103b85ce573297->enter($__internal_de6bd11d859caaebe848c24004551e5ec2872bcce85aba120f103b85ce573297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 25
        echo "                    ";
        
        $__internal_de6bd11d859caaebe848c24004551e5ec2872bcce85aba120f103b85ce573297->leave($__internal_de6bd11d859caaebe848c24004551e5ec2872bcce85aba120f103b85ce573297_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b441f53a2f6cd9afa735fb248fec39b488fbcd14af5e3fbd99ed9d4f27c04084 = $this->env->getExtension("native_profiler");
        $__internal_b441f53a2f6cd9afa735fb248fec39b488fbcd14af5e3fbd99ed9d4f27c04084->enter($__internal_b441f53a2f6cd9afa735fb248fec39b488fbcd14af5e3fbd99ed9d4f27c04084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "            ";
        
        $__internal_b441f53a2f6cd9afa735fb248fec39b488fbcd14af5e3fbd99ed9d4f27c04084->leave($__internal_b441f53a2f6cd9afa735fb248fec39b488fbcd14af5e3fbd99ed9d4f27c04084_prof);

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
        return array (  159 => 34,  153 => 33,  146 => 25,  140 => 24,  130 => 14,  124 => 13,  114 => 35,  112 => 33,  108 => 31,  105 => 30,  96 => 28,  91 => 27,  88 => 26,  86 => 24,  76 => 16,  74 => 13,  70 => 11,  64 => 10,  56 => 7,  50 => 6,  39 => 4,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* {% block javascript %}*/
/* {% endblock %}*/
/* {% block title %}*/
/*   Resto'Regimes*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="mdl-grid">*/
/*         <div class="mdl-cell mdl-cell--2-col">*/
/*             {% block rrplatform_search %}*/
/*                 {{ render(controller('RRCoreBundle:Default:searchFormFull', {})) }}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="mdl-cell mdl-cell--10-col">*/
/* */
/*             <div class="mdl-grid">*/
/*                 <div class="mdl-cell mdl-cell--2-col">*/
/* */
/*                 </div>*/
/*                 <div class="mdl-cell mdl-cell--8-col">*/
/*                     {% block fos_user %}*/
/*                     {% endblock fos_user %}*/
/*                     {% if listRestaurants is defined %}*/
/*                     {% for restaurant in listRestaurants %}*/
/*                         {{ restaurant.nom }}*/
/*                     {% endfor %}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
