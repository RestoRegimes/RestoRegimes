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
            'jumbotron' => array($this, 'block_jumbotron'),
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
        $__internal_98253a548968f0d743cb0fd181c698b07c3e14beddb4700c205a822d459209b2 = $this->env->getExtension("native_profiler");
        $__internal_98253a548968f0d743cb0fd181c698b07c3e14beddb4700c205a822d459209b2->enter($__internal_98253a548968f0d743cb0fd181c698b07c3e14beddb4700c205a822d459209b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRCoreBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98253a548968f0d743cb0fd181c698b07c3e14beddb4700c205a822d459209b2->leave($__internal_98253a548968f0d743cb0fd181c698b07c3e14beddb4700c205a822d459209b2_prof);

    }

    // line 4
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_22cc4c19f3306606d1cee15cf00405ed16779eb340cd87d005d0617a34243240 = $this->env->getExtension("native_profiler");
        $__internal_22cc4c19f3306606d1cee15cf00405ed16779eb340cd87d005d0617a34243240->enter($__internal_22cc4c19f3306606d1cee15cf00405ed16779eb340cd87d005d0617a34243240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 5
        echo "    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/p5.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/sketch.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_22cc4c19f3306606d1cee15cf00405ed16779eb340cd87d005d0617a34243240->leave($__internal_22cc4c19f3306606d1cee15cf00405ed16779eb340cd87d005d0617a34243240_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_f763aa4b90ff6ca00e6981e400e434782ced1a18bed89bb51c043fe40e6bbefa = $this->env->getExtension("native_profiler");
        $__internal_f763aa4b90ff6ca00e6981e400e434782ced1a18bed89bb51c043fe40e6bbefa->enter($__internal_f763aa4b90ff6ca00e6981e400e434782ced1a18bed89bb51c043fe40e6bbefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "  Resto'Regimes
";
        
        $__internal_f763aa4b90ff6ca00e6981e400e434782ced1a18bed89bb51c043fe40e6bbefa->leave($__internal_f763aa4b90ff6ca00e6981e400e434782ced1a18bed89bb51c043fe40e6bbefa_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_977c8b10d041d61e3c7c38d7705b0f9f9a7723453a7e14e58a0b850ac52ee92d = $this->env->getExtension("native_profiler");
        $__internal_977c8b10d041d61e3c7c38d7705b0f9f9a7723453a7e14e58a0b850ac52ee92d->enter($__internal_977c8b10d041d61e3c7c38d7705b0f9f9a7723453a7e14e58a0b850ac52ee92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('jumbotron', $context, $blocks);
        // line 17
        echo "
    <div class=\"mdl-grid\">
        <div class=\"mdl-cell mdl-cell--2-col\">
            ";
        // line 20
        $this->displayBlock('rrplatform_search', $context, $blocks);
        // line 22
        echo "        </div>
        <div class=\"mdl-cell mdl-cell--8-col\">
            ";
        // line 24
        $this->loadTemplate(":svg:RRtext.svg.twig", "RRCoreBundle:Default:layout.html.twig", 24)->display($context);
        // line 25
        echo "            <div class=\"mdl-grid\">
                <div class=\"mdl-cell mdl-cell--2-col\">

                </div>
                <div class=\"mdl-cell mdl-cell--8-col\">
                    ";
        // line 30
        $this->displayBlock('fos_user', $context, $blocks);
        // line 32
        echo "                </div>
            </div>
            ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        </div>

    </div>
";
        
        $__internal_977c8b10d041d61e3c7c38d7705b0f9f9a7723453a7e14e58a0b850ac52ee92d->leave($__internal_977c8b10d041d61e3c7c38d7705b0f9f9a7723453a7e14e58a0b850ac52ee92d_prof);

    }

    // line 15
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_09e19564e1e9d31d2c6a73629b0901bf28d2f27abead4d24ceaf29c35bd6ad58 = $this->env->getExtension("native_profiler");
        $__internal_09e19564e1e9d31d2c6a73629b0901bf28d2f27abead4d24ceaf29c35bd6ad58->enter($__internal_09e19564e1e9d31d2c6a73629b0901bf28d2f27abead4d24ceaf29c35bd6ad58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 16
        echo "    ";
        
        $__internal_09e19564e1e9d31d2c6a73629b0901bf28d2f27abead4d24ceaf29c35bd6ad58->leave($__internal_09e19564e1e9d31d2c6a73629b0901bf28d2f27abead4d24ceaf29c35bd6ad58_prof);

    }

    // line 20
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_d479b9667746c006fea669a6242f6a41542936b93a0a671c50f2340d4c0e0868 = $this->env->getExtension("native_profiler");
        $__internal_d479b9667746c006fea669a6242f6a41542936b93a0a671c50f2340d4c0e0868->enter($__internal_d479b9667746c006fea669a6242f6a41542936b93a0a671c50f2340d4c0e0868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 21
        echo "            ";
        
        $__internal_d479b9667746c006fea669a6242f6a41542936b93a0a671c50f2340d4c0e0868->leave($__internal_d479b9667746c006fea669a6242f6a41542936b93a0a671c50f2340d4c0e0868_prof);

    }

    // line 30
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_052d110f926b8d1c270f83ae475061a133386d35767d0cf9924aab62a6edf6d9 = $this->env->getExtension("native_profiler");
        $__internal_052d110f926b8d1c270f83ae475061a133386d35767d0cf9924aab62a6edf6d9->enter($__internal_052d110f926b8d1c270f83ae475061a133386d35767d0cf9924aab62a6edf6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 31
        echo "                    ";
        
        $__internal_052d110f926b8d1c270f83ae475061a133386d35767d0cf9924aab62a6edf6d9->leave($__internal_052d110f926b8d1c270f83ae475061a133386d35767d0cf9924aab62a6edf6d9_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_d979653ac099b81ca91556b9c1aa88e8c1af253c1deaa39d340ad2c08420c32b = $this->env->getExtension("native_profiler");
        $__internal_d979653ac099b81ca91556b9c1aa88e8c1af253c1deaa39d340ad2c08420c32b->enter($__internal_d979653ac099b81ca91556b9c1aa88e8c1af253c1deaa39d340ad2c08420c32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "            ";
        
        $__internal_d979653ac099b81ca91556b9c1aa88e8c1af253c1deaa39d340ad2c08420c32b->leave($__internal_d979653ac099b81ca91556b9c1aa88e8c1af253c1deaa39d340ad2c08420c32b_prof);

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
        return array (  169 => 35,  163 => 34,  156 => 31,  150 => 30,  143 => 21,  137 => 20,  130 => 16,  124 => 15,  114 => 36,  112 => 34,  108 => 32,  106 => 30,  99 => 25,  97 => 24,  93 => 22,  91 => 20,  86 => 17,  84 => 15,  81 => 14,  75 => 13,  67 => 10,  61 => 9,  51 => 6,  46 => 5,  40 => 4,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* {% block javascript %}*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('bundles/rrcore/js/p5.js') }}"></script>*/
/*     <script language="javascript" type="text/javascript" src="{{ asset('bundles/rrcore/js/sketch.js') }}"></script>*/
/* */
/* {% endblock %}*/
/* {% block title %}*/
/*   Resto'Regimes*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% block jumbotron %}*/
/*     {% endblock %}*/
/* */
/*     <div class="mdl-grid">*/
/*         <div class="mdl-cell mdl-cell--2-col">*/
/*             {% block rrplatform_search %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="mdl-cell mdl-cell--8-col">*/
/*             {% include(":svg:RRtext.svg.twig") %}*/
/*             <div class="mdl-grid">*/
/*                 <div class="mdl-cell mdl-cell--2-col">*/
/* */
/*                 </div>*/
/*                 <div class="mdl-cell mdl-cell--8-col">*/
/*                     {% block fos_user %}*/
/*                     {% endblock fos_user %}*/
/*                 </div>*/
/*             </div>*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
