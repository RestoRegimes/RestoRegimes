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
            'jumbotron' => array($this, 'block_jumbotron'),
            'body' => array($this, 'block_body'),
            'rrplatform_body' => array($this, 'block_rrplatform_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfa905ffd6b957e783e137bc0fd8c5323f35a6860e491ad0aeee9ae67d04b52b = $this->env->getExtension("native_profiler");
        $__internal_cfa905ffd6b957e783e137bc0fd8c5323f35a6860e491ad0aeee9ae67d04b52b->enter($__internal_cfa905ffd6b957e783e137bc0fd8c5323f35a6860e491ad0aeee9ae67d04b52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRCoreBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfa905ffd6b957e783e137bc0fd8c5323f35a6860e491ad0aeee9ae67d04b52b->leave($__internal_cfa905ffd6b957e783e137bc0fd8c5323f35a6860e491ad0aeee9ae67d04b52b_prof);

    }

    // line 4
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_307693fbe48a3d166475ebe5e1373b0505089b5d68b01cacdad464a66be2a4c9 = $this->env->getExtension("native_profiler");
        $__internal_307693fbe48a3d166475ebe5e1373b0505089b5d68b01cacdad464a66be2a4c9->enter($__internal_307693fbe48a3d166475ebe5e1373b0505089b5d68b01cacdad464a66be2a4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 5
        echo "    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/p5.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/sketch.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_307693fbe48a3d166475ebe5e1373b0505089b5d68b01cacdad464a66be2a4c9->leave($__internal_307693fbe48a3d166475ebe5e1373b0505089b5d68b01cacdad464a66be2a4c9_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_633149fae52b448b2b369656e7db876a93e8226720f18d8627201f92eb2bd3a8 = $this->env->getExtension("native_profiler");
        $__internal_633149fae52b448b2b369656e7db876a93e8226720f18d8627201f92eb2bd3a8->enter($__internal_633149fae52b448b2b369656e7db876a93e8226720f18d8627201f92eb2bd3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_633149fae52b448b2b369656e7db876a93e8226720f18d8627201f92eb2bd3a8->leave($__internal_633149fae52b448b2b369656e7db876a93e8226720f18d8627201f92eb2bd3a8_prof);

    }

    // line 12
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_e719ea9a5fc80b36e6b200a7137c6b17469e3a07ef01654ac7d24e371e284ff8 = $this->env->getExtension("native_profiler");
        $__internal_e719ea9a5fc80b36e6b200a7137c6b17469e3a07ef01654ac7d24e371e284ff8->enter($__internal_e719ea9a5fc80b36e6b200a7137c6b17469e3a07ef01654ac7d24e371e284ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 13
        echo "    <div class=\"jumbotron\" >

    <div id=\"jumbotron\"></div>
        <div id=\"jumbotron1\">
        <h1>Un Régime?&nbsp;<div class=\"\">Un Resto!</div></h1>
        <p class=\"lead\">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <a class=\"btn btn-large btn-success\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
        </div>




    </div>
";
        
        $__internal_e719ea9a5fc80b36e6b200a7137c6b17469e3a07ef01654ac7d24e371e284ff8->leave($__internal_e719ea9a5fc80b36e6b200a7137c6b17469e3a07ef01654ac7d24e371e284ff8_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9b23c3ba220c5b5766e577d3470478f1d4518b2fd562610332584ffb6ab16e2 = $this->env->getExtension("native_profiler");
        $__internal_a9b23c3ba220c5b5766e577d3470478f1d4518b2fd562610332584ffb6ab16e2->enter($__internal_a9b23c3ba220c5b5766e577d3470478f1d4518b2fd562610332584ffb6ab16e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "
    ";
        // line 30
        echo "    <h1>Restaurants</h1>

    <hr>

    ";
        // line 35
        echo "    ";
        $this->displayBlock('rrplatform_body', $context, $blocks);
        // line 37
        echo "
";
        
        $__internal_a9b23c3ba220c5b5766e577d3470478f1d4518b2fd562610332584ffb6ab16e2->leave($__internal_a9b23c3ba220c5b5766e577d3470478f1d4518b2fd562610332584ffb6ab16e2_prof);

    }

    // line 35
    public function block_rrplatform_body($context, array $blocks = array())
    {
        $__internal_e09bb23e043350dd0b95ca874200f8a0bc8b2755bf496a273d7e250174e169ef = $this->env->getExtension("native_profiler");
        $__internal_e09bb23e043350dd0b95ca874200f8a0bc8b2755bf496a273d7e250174e169ef->enter($__internal_e09bb23e043350dd0b95ca874200f8a0bc8b2755bf496a273d7e250174e169ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_body"));

        // line 36
        echo "    ";
        
        $__internal_e09bb23e043350dd0b95ca874200f8a0bc8b2755bf496a273d7e250174e169ef->leave($__internal_e09bb23e043350dd0b95ca874200f8a0bc8b2755bf496a273d7e250174e169ef_prof);

    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b734552dd9f6d85aa080c1f6d05603d79a3f7329fcbbcb9a83efbf26a841fea = $this->env->getExtension("native_profiler");
        $__internal_0b734552dd9f6d85aa080c1f6d05603d79a3f7329fcbbcb9a83efbf26a841fea->enter($__internal_0b734552dd9f6d85aa080c1f6d05603d79a3f7329fcbbcb9a83efbf26a841fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "    <div class=\"row-fluid marketing\">
        <div class=\"span6\">
            <h4>Subheading</h4>

            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.
            </p>
            <h4>Subheading</h4>

            <p class=\"\">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
            <h4>Subheading</h4>

            <p class=\"\">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
        <div class=\"span6\">
            <h4>Subheading</h4>

            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.
            </p>
            <h4>Subheading</h4>

            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
            <h4>Subheading</h4>

            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
    </div>
";
        
        $__internal_0b734552dd9f6d85aa080c1f6d05603d79a3f7329fcbbcb9a83efbf26a841fea->leave($__internal_0b734552dd9f6d85aa080c1f6d05603d79a3f7329fcbbcb9a83efbf26a841fea_prof);

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
        return array (  150 => 40,  144 => 39,  137 => 36,  131 => 35,  123 => 37,  120 => 35,  114 => 30,  111 => 28,  105 => 27,  90 => 19,  82 => 13,  76 => 12,  66 => 10,  60 => 9,  50 => 6,  45 => 5,  39 => 4,  11 => 3,);
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
/*     Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* {% block jumbotron %}*/
/*     <div class="jumbotron" >*/
/* */
/*     <div id="jumbotron"></div>*/
/*         <div id="jumbotron1">*/
/*         <h1>Un Régime?&nbsp;<div class="">Un Resto!</div></h1>*/
/*         <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>*/
/*             <a class="btn btn-large btn-success" href="{{ path('fos_user_registration_register') }}">S'inscrire</a>*/
/*         </div>*/
/* */
/* */
/* */
/* */
/*     </div>*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/*     {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*     <h1>Restaurants</h1>*/
/* */
/*     <hr>*/
/* */
/*     {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*     {% block rrplatform_body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/* {% block content %}*/
/*     <div class="row-fluid marketing">*/
/*         <div class="span6">*/
/*             <h4>Subheading</h4>*/
/* */
/*             <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.*/
/*             </p>*/
/*             <h4>Subheading</h4>*/
/* */
/*             <p class="">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>*/
/*             <h4>Subheading</h4>*/
/* */
/*             <p class="">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>*/
/*         </div>*/
/*         <div class="span6">*/
/*             <h4>Subheading</h4>*/
/* */
/*             <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.*/
/*             </p>*/
/*             <h4>Subheading</h4>*/
/* */
/*             <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>*/
/*             <h4>Subheading</h4>*/
/* */
/*             <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
