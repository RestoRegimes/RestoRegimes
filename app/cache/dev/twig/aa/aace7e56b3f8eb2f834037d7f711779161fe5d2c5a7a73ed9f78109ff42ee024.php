<?php

/* RRCoreBundle:Default:layout.html.twig */
class __TwigTemplate_6f173648fd584633d42fca0608aac5e5e9f9bb0d25f2854c9252bbe7e773d02d extends Twig_Template
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
        $__internal_15041a58bf2d6daf05175dbd1934a70cc18a0a7b2e1c1f0475ee8bbb63aa746b = $this->env->getExtension("native_profiler");
        $__internal_15041a58bf2d6daf05175dbd1934a70cc18a0a7b2e1c1f0475ee8bbb63aa746b->enter($__internal_15041a58bf2d6daf05175dbd1934a70cc18a0a7b2e1c1f0475ee8bbb63aa746b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRCoreBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15041a58bf2d6daf05175dbd1934a70cc18a0a7b2e1c1f0475ee8bbb63aa746b->leave($__internal_15041a58bf2d6daf05175dbd1934a70cc18a0a7b2e1c1f0475ee8bbb63aa746b_prof);

    }

    // line 4
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_60dda91f645c563ab2f06e019812e0cc76938ffb2d24847a4bfe6e3f2635db05 = $this->env->getExtension("native_profiler");
        $__internal_60dda91f645c563ab2f06e019812e0cc76938ffb2d24847a4bfe6e3f2635db05->enter($__internal_60dda91f645c563ab2f06e019812e0cc76938ffb2d24847a4bfe6e3f2635db05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 5
        echo "    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/p5.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/sketch.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_60dda91f645c563ab2f06e019812e0cc76938ffb2d24847a4bfe6e3f2635db05->leave($__internal_60dda91f645c563ab2f06e019812e0cc76938ffb2d24847a4bfe6e3f2635db05_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_35f96cf236076fc75ac70ce2f2d51c98ea42db96c835584d66b2e575c7d71a5f = $this->env->getExtension("native_profiler");
        $__internal_35f96cf236076fc75ac70ce2f2d51c98ea42db96c835584d66b2e575c7d71a5f->enter($__internal_35f96cf236076fc75ac70ce2f2d51c98ea42db96c835584d66b2e575c7d71a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_35f96cf236076fc75ac70ce2f2d51c98ea42db96c835584d66b2e575c7d71a5f->leave($__internal_35f96cf236076fc75ac70ce2f2d51c98ea42db96c835584d66b2e575c7d71a5f_prof);

    }

    // line 12
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_16e8821b239cab21810bb11f49e522fcfaf1f446fb25d290b1e84cbf65bd4cdd = $this->env->getExtension("native_profiler");
        $__internal_16e8821b239cab21810bb11f49e522fcfaf1f446fb25d290b1e84cbf65bd4cdd->enter($__internal_16e8821b239cab21810bb11f49e522fcfaf1f446fb25d290b1e84cbf65bd4cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

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
        
        $__internal_16e8821b239cab21810bb11f49e522fcfaf1f446fb25d290b1e84cbf65bd4cdd->leave($__internal_16e8821b239cab21810bb11f49e522fcfaf1f446fb25d290b1e84cbf65bd4cdd_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4057b29ea978f0557910db1373ab75fec2fdf4e581f36c5df06dd8b89166092 = $this->env->getExtension("native_profiler");
        $__internal_a4057b29ea978f0557910db1373ab75fec2fdf4e581f36c5df06dd8b89166092->enter($__internal_a4057b29ea978f0557910db1373ab75fec2fdf4e581f36c5df06dd8b89166092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a4057b29ea978f0557910db1373ab75fec2fdf4e581f36c5df06dd8b89166092->leave($__internal_a4057b29ea978f0557910db1373ab75fec2fdf4e581f36c5df06dd8b89166092_prof);

    }

    // line 35
    public function block_rrplatform_body($context, array $blocks = array())
    {
        $__internal_24d2f61bbc2c72de78e8b7a9413e401422750c9ea804287e558090bcbe706a57 = $this->env->getExtension("native_profiler");
        $__internal_24d2f61bbc2c72de78e8b7a9413e401422750c9ea804287e558090bcbe706a57->enter($__internal_24d2f61bbc2c72de78e8b7a9413e401422750c9ea804287e558090bcbe706a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_body"));

        // line 36
        echo "    ";
        
        $__internal_24d2f61bbc2c72de78e8b7a9413e401422750c9ea804287e558090bcbe706a57->leave($__internal_24d2f61bbc2c72de78e8b7a9413e401422750c9ea804287e558090bcbe706a57_prof);

    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        $__internal_0bd2ebaaa7dabc13bbda4ede7e62038c21184c77a6248f9faaf7cbe2faa0ac2f = $this->env->getExtension("native_profiler");
        $__internal_0bd2ebaaa7dabc13bbda4ede7e62038c21184c77a6248f9faaf7cbe2faa0ac2f->enter($__internal_0bd2ebaaa7dabc13bbda4ede7e62038c21184c77a6248f9faaf7cbe2faa0ac2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_0bd2ebaaa7dabc13bbda4ede7e62038c21184c77a6248f9faaf7cbe2faa0ac2f->leave($__internal_0bd2ebaaa7dabc13bbda4ede7e62038c21184c77a6248f9faaf7cbe2faa0ac2f_prof);

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
