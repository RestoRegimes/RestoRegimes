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
            'map' => array($this, 'block_map'),
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
        $__internal_6832a1d048a1adb4624faef25f4e09b4338c00af23fc69dcc913c1e81596c162 = $this->env->getExtension("native_profiler");
        $__internal_6832a1d048a1adb4624faef25f4e09b4338c00af23fc69dcc913c1e81596c162->enter($__internal_6832a1d048a1adb4624faef25f4e09b4338c00af23fc69dcc913c1e81596c162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6832a1d048a1adb4624faef25f4e09b4338c00af23fc69dcc913c1e81596c162->leave($__internal_6832a1d048a1adb4624faef25f4e09b4338c00af23fc69dcc913c1e81596c162_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_fc7bac2b7a2f7725ea4a5a9e4494f5adeb3aa6241e24a820e5dd9f8cafe2c6fd = $this->env->getExtension("native_profiler");
        $__internal_fc7bac2b7a2f7725ea4a5a9e4494f5adeb3aa6241e24a820e5dd9f8cafe2c6fd->enter($__internal_fc7bac2b7a2f7725ea4a5a9e4494f5adeb3aa6241e24a820e5dd9f8cafe2c6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_fc7bac2b7a2f7725ea4a5a9e4494f5adeb3aa6241e24a820e5dd9f8cafe2c6fd->leave($__internal_fc7bac2b7a2f7725ea4a5a9e4494f5adeb3aa6241e24a820e5dd9f8cafe2c6fd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9ef992c2719c37223b3fdb221a4b3b4c04b1b808e65b68164ee664af5256b4b = $this->env->getExtension("native_profiler");
        $__internal_a9ef992c2719c37223b3fdb221a4b3b4c04b1b808e65b68164ee664af5256b4b->enter($__internal_a9ef992c2719c37223b3fdb221a4b3b4c04b1b808e65b68164ee664af5256b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Resto'Regimes
";
        
        $__internal_a9ef992c2719c37223b3fdb221a4b3b4c04b1b808e65b68164ee664af5256b4b->leave($__internal_a9ef992c2719c37223b3fdb221a4b3b4c04b1b808e65b68164ee664af5256b4b_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_e5cfeafed81d72664b21e5722313e32ed70968040e20a3fd9097214f652c998b = $this->env->getExtension("native_profiler");
        $__internal_e5cfeafed81d72664b21e5722313e32ed70968040e20a3fd9097214f652c998b->enter($__internal_e5cfeafed81d72664b21e5722313e32ed70968040e20a3fd9097214f652c998b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
    <div class=\"mdl-grid\">
        <div class=\"mdl-cell mdl-cell--2-col\">

        </div>
        <div class=\"mdl-cell mdl-cell--10-col\">
            <img src=\"#\" alt=\"Adds\" width=\"100%\" height=\"100px\">
        </div>
    </div>
    <div class=\"mdl-grid\">
        <div class=\"mdl-cell mdl-cell--2-col\">
            ";
        // line 21
        $this->displayBlock('rrplatform_search', $context, $blocks);
        // line 24
        echo "        </div>
        <div class=\"mdl-cell mdl-cell--10-col\">

            <div class=\"mdl-grid\">
                <div class=\"mdl-cell mdl-cell--6-col\">
                    ";
        // line 29
        $this->displayBlock('map', $context, $blocks);
        // line 31
        echo "                    ";
        $this->displayBlock('fos_user', $context, $blocks);
        // line 33
        echo "                </div>
                <div class=\"mdl-cell mdl-cell--6-col\">
                    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "                </div>

            </div>

        </div>

    </div>
";
        
        $__internal_e5cfeafed81d72664b21e5722313e32ed70968040e20a3fd9097214f652c998b->leave($__internal_e5cfeafed81d72664b21e5722313e32ed70968040e20a3fd9097214f652c998b_prof);

    }

    // line 21
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_d13a9e4c04b52b325f7b794b9ab05c4efed89a1f46765368b9be0a7cf4e6c908 = $this->env->getExtension("native_profiler");
        $__internal_d13a9e4c04b52b325f7b794b9ab05c4efed89a1f46765368b9be0a7cf4e6c908->enter($__internal_d13a9e4c04b52b325f7b794b9ab05c4efed89a1f46765368b9be0a7cf4e6c908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 22
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RRCoreBundle:Default:searchFormFull", array()));
        echo "
            ";
        
        $__internal_d13a9e4c04b52b325f7b794b9ab05c4efed89a1f46765368b9be0a7cf4e6c908->leave($__internal_d13a9e4c04b52b325f7b794b9ab05c4efed89a1f46765368b9be0a7cf4e6c908_prof);

    }

    // line 29
    public function block_map($context, array $blocks = array())
    {
        $__internal_dbfd48ffcaa4308e4975ca1cda241f7fe6c0158fde93d879c1282ae9102a5104 = $this->env->getExtension("native_profiler");
        $__internal_dbfd48ffcaa4308e4975ca1cda241f7fe6c0158fde93d879c1282ae9102a5104->enter($__internal_dbfd48ffcaa4308e4975ca1cda241f7fe6c0158fde93d879c1282ae9102a5104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "map"));

        // line 30
        echo "                    ";
        
        $__internal_dbfd48ffcaa4308e4975ca1cda241f7fe6c0158fde93d879c1282ae9102a5104->leave($__internal_dbfd48ffcaa4308e4975ca1cda241f7fe6c0158fde93d879c1282ae9102a5104_prof);

    }

    // line 31
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_3e4e6dc2a543da0a6853ca33bb447360e58f9ad24f9bab336648dd24a2e747cb = $this->env->getExtension("native_profiler");
        $__internal_3e4e6dc2a543da0a6853ca33bb447360e58f9ad24f9bab336648dd24a2e747cb->enter($__internal_3e4e6dc2a543da0a6853ca33bb447360e58f9ad24f9bab336648dd24a2e747cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 32
        echo "                    ";
        
        $__internal_3e4e6dc2a543da0a6853ca33bb447360e58f9ad24f9bab336648dd24a2e747cb->leave($__internal_3e4e6dc2a543da0a6853ca33bb447360e58f9ad24f9bab336648dd24a2e747cb_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_9986a038a4a56680633fe80c8883d02e8f5b25dea428108e9d42cb0fee27aaa0 = $this->env->getExtension("native_profiler");
        $__internal_9986a038a4a56680633fe80c8883d02e8f5b25dea428108e9d42cb0fee27aaa0->enter($__internal_9986a038a4a56680633fe80c8883d02e8f5b25dea428108e9d42cb0fee27aaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "                    ";
        
        $__internal_9986a038a4a56680633fe80c8883d02e8f5b25dea428108e9d42cb0fee27aaa0->leave($__internal_9986a038a4a56680633fe80c8883d02e8f5b25dea428108e9d42cb0fee27aaa0_prof);

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
        return array (  166 => 36,  160 => 35,  153 => 32,  147 => 31,  140 => 30,  134 => 29,  124 => 22,  118 => 21,  104 => 37,  102 => 35,  98 => 33,  95 => 31,  93 => 29,  86 => 24,  84 => 21,  71 => 10,  65 => 9,  57 => 6,  51 => 5,  40 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "::layout.html.twig" %}*/
/* {% block javascript %}*/
/* {% endblock %}*/
/* {% block title %}*/
/*     Resto'Regimes*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="mdl-grid">*/
/*         <div class="mdl-cell mdl-cell--2-col">*/
/* */
/*         </div>*/
/*         <div class="mdl-cell mdl-cell--10-col">*/
/*             <img src="#" alt="Adds" width="100%" height="100px">*/
/*         </div>*/
/*     </div>*/
/*     <div class="mdl-grid">*/
/*         <div class="mdl-cell mdl-cell--2-col">*/
/*             {% block rrplatform_search %}*/
/*                 {{ render(controller('RRCoreBundle:Default:searchFormFull', {})) }}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="mdl-cell mdl-cell--10-col">*/
/* */
/*             <div class="mdl-grid">*/
/*                 <div class="mdl-cell mdl-cell--6-col">*/
/*                     {% block map %}*/
/*                     {% endblock %}*/
/*                     {% block fos_user %}*/
/*                     {% endblock fos_user %}*/
/*                 </div>*/
/*                 <div class="mdl-cell mdl-cell--6-col">*/
/*                     {% block body %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
