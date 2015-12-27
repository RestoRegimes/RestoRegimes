<?php

/* RRRestaurantBundle::layout.html.twig */
class __TwigTemplate_d2542da1dbd028be1bd2d8ec02e7aa4c5f4a066eafbb9d78cc539da33cda4ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout.html.twig", "RRRestaurantBundle::layout.html.twig", 2);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'rrplatform_search' => array($this, 'block_rrplatform_search'),
            'body' => array($this, 'block_body'),
            'fos_user' => array($this, 'block_fos_user'),
            'map' => array($this, 'block_map'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a5e11d18a52e5c66523bcc2b0e2d7124395940948f0fac2a3fc1a9a42ed4ad7 = $this->env->getExtension("native_profiler");
        $__internal_5a5e11d18a52e5c66523bcc2b0e2d7124395940948f0fac2a3fc1a9a42ed4ad7->enter($__internal_5a5e11d18a52e5c66523bcc2b0e2d7124395940948f0fac2a3fc1a9a42ed4ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a5e11d18a52e5c66523bcc2b0e2d7124395940948f0fac2a3fc1a9a42ed4ad7->leave($__internal_5a5e11d18a52e5c66523bcc2b0e2d7124395940948f0fac2a3fc1a9a42ed4ad7_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_96985ba1817dc4987ee5d9a1e455eae757b09ddf06aec0fdfd728f4ad287d38e = $this->env->getExtension("native_profiler");
        $__internal_96985ba1817dc4987ee5d9a1e455eae757b09ddf06aec0fdfd728f4ad287d38e->enter($__internal_96985ba1817dc4987ee5d9a1e455eae757b09ddf06aec0fdfd728f4ad287d38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 4
        echo "    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/p5.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/sketch.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_96985ba1817dc4987ee5d9a1e455eae757b09ddf06aec0fdfd728f4ad287d38e->leave($__internal_96985ba1817dc4987ee5d9a1e455eae757b09ddf06aec0fdfd728f4ad287d38e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_568ceb269d5e3e7348e10b1086d6e914605dd75a7227192a278e491e0d7213b9 = $this->env->getExtension("native_profiler");
        $__internal_568ceb269d5e3e7348e10b1086d6e914605dd75a7227192a278e491e0d7213b9->enter($__internal_568ceb269d5e3e7348e10b1086d6e914605dd75a7227192a278e491e0d7213b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    Resto'Regimes
";
        
        $__internal_568ceb269d5e3e7348e10b1086d6e914605dd75a7227192a278e491e0d7213b9->leave($__internal_568ceb269d5e3e7348e10b1086d6e914605dd75a7227192a278e491e0d7213b9_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f313628ef92a668a5cdd7cace802c5106489215a0da53dcf42c8363ff0f644b = $this->env->getExtension("native_profiler");
        $__internal_9f313628ef92a668a5cdd7cace802c5106489215a0da53dcf42c8363ff0f644b->enter($__internal_9f313628ef92a668a5cdd7cace802c5106489215a0da53dcf42c8363ff0f644b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "
    <div class=\"mdl-grid\">
        <div class=\"mdl-cell mdl-cell--3-col\">

        </div>
        <div class=\"mdl-cell mdl-cell--9-col\">
            <img src=\"#\" alt=\"Adds\" width=\"100%\" height=\"100px\">
        </div>
    </div>
    <div class=\"mdl-grid\">
        <div class=\"mdl-cell mdl-cell--3-col\">
            ";
        // line 24
        $this->displayBlock('rrplatform_search', $context, $blocks);
        // line 27
        echo "        </div>
        <div class=\"mdl-cell mdl-cell--9-col\">

            <div class=\"mdl-grid\">
                <div class=\"mdl-cell mdl-cell--6-col\">
                    ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "                    ";
        $this->displayBlock('fos_user', $context, $blocks);
        // line 36
        echo "                </div>
                <div class=\"mdl-cell mdl-cell--6-col\">
                    ";
        // line 38
        $this->displayBlock('map', $context, $blocks);
        // line 40
        echo "                </div>

            </div>

        </div>

    </div>
";
        
        $__internal_9f313628ef92a668a5cdd7cace802c5106489215a0da53dcf42c8363ff0f644b->leave($__internal_9f313628ef92a668a5cdd7cace802c5106489215a0da53dcf42c8363ff0f644b_prof);

    }

    // line 24
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_6589dfdf7050ca82ee30bd46cb680818c0c765a87033e33ba622aec2dc7b882b = $this->env->getExtension("native_profiler");
        $__internal_6589dfdf7050ca82ee30bd46cb680818c0c765a87033e33ba622aec2dc7b882b->enter($__internal_6589dfdf7050ca82ee30bd46cb680818c0c765a87033e33ba622aec2dc7b882b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 25
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RRCoreBundle:Default:searchFormFull", array()));
        echo "
            ";
        
        $__internal_6589dfdf7050ca82ee30bd46cb680818c0c765a87033e33ba622aec2dc7b882b->leave($__internal_6589dfdf7050ca82ee30bd46cb680818c0c765a87033e33ba622aec2dc7b882b_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_de980ea0cbf3ad87006a466acc512a0bac3b321c913e15942ef2a252bcbbf4d6 = $this->env->getExtension("native_profiler");
        $__internal_de980ea0cbf3ad87006a466acc512a0bac3b321c913e15942ef2a252bcbbf4d6->enter($__internal_de980ea0cbf3ad87006a466acc512a0bac3b321c913e15942ef2a252bcbbf4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "                    ";
        
        $__internal_de980ea0cbf3ad87006a466acc512a0bac3b321c913e15942ef2a252bcbbf4d6->leave($__internal_de980ea0cbf3ad87006a466acc512a0bac3b321c913e15942ef2a252bcbbf4d6_prof);

    }

    // line 34
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_89dbe1ae3f9b6a56ae8385e7c9c1b70169f03033672495617bc673a6cb36615d = $this->env->getExtension("native_profiler");
        $__internal_89dbe1ae3f9b6a56ae8385e7c9c1b70169f03033672495617bc673a6cb36615d->enter($__internal_89dbe1ae3f9b6a56ae8385e7c9c1b70169f03033672495617bc673a6cb36615d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 35
        echo "                    ";
        
        $__internal_89dbe1ae3f9b6a56ae8385e7c9c1b70169f03033672495617bc673a6cb36615d->leave($__internal_89dbe1ae3f9b6a56ae8385e7c9c1b70169f03033672495617bc673a6cb36615d_prof);

    }

    // line 38
    public function block_map($context, array $blocks = array())
    {
        $__internal_d00eafb0d3368138b00f076e66bfac5a142e07fa77e50e975d8812fec068d0d4 = $this->env->getExtension("native_profiler");
        $__internal_d00eafb0d3368138b00f076e66bfac5a142e07fa77e50e975d8812fec068d0d4->enter($__internal_d00eafb0d3368138b00f076e66bfac5a142e07fa77e50e975d8812fec068d0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "map"));

        // line 39
        echo "                    ";
        
        $__internal_d00eafb0d3368138b00f076e66bfac5a142e07fa77e50e975d8812fec068d0d4->leave($__internal_d00eafb0d3368138b00f076e66bfac5a142e07fa77e50e975d8812fec068d0d4_prof);

    }

    public function getTemplateName()
    {
        return "RRRestaurantBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 39,  170 => 38,  163 => 35,  157 => 34,  150 => 33,  144 => 32,  134 => 25,  128 => 24,  114 => 40,  112 => 38,  108 => 36,  105 => 34,  103 => 32,  96 => 27,  94 => 24,  81 => 13,  75 => 12,  67 => 9,  61 => 8,  51 => 5,  46 => 4,  40 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* {% block javascript %}*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('bundles/rrcore/js/p5.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('bundles/rrcore/js/sketch.js') }}"></script>*/
/* */
/* {% endblock %}*/
/* {% block title %}*/
/*     Resto'Regimes*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="mdl-grid">*/
/*         <div class="mdl-cell mdl-cell--3-col">*/
/* */
/*         </div>*/
/*         <div class="mdl-cell mdl-cell--9-col">*/
/*             <img src="#" alt="Adds" width="100%" height="100px">*/
/*         </div>*/
/*     </div>*/
/*     <div class="mdl-grid">*/
/*         <div class="mdl-cell mdl-cell--3-col">*/
/*             {% block rrplatform_search %}*/
/*                 {{ render(controller('RRCoreBundle:Default:searchFormFull', {})) }}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="mdl-cell mdl-cell--9-col">*/
/* */
/*             <div class="mdl-grid">*/
/*                 <div class="mdl-cell mdl-cell--6-col">*/
/*                     {% block body %}*/
/*                     {% endblock %}*/
/*                     {% block fos_user %}*/
/*                     {% endblock fos_user %}*/
/*                 </div>*/
/*                 <div class="mdl-cell mdl-cell--6-col">*/
/*                     {% block map %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
