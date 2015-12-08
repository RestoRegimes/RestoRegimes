<?php

/* RRCoreBundle:Default:layout.html.twig */
class __TwigTemplate_92496e61fa403b899906ee880a3806c57122b635ea77a3347cab558f54a616f4 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_javascript($context, array $blocks = array())
    {
        // line 5
        echo "    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/p5.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/sketch.js"), "html", null, true);
        echo "\"></script>

";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        // line 10
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_jumbotron($context, array $blocks = array())
    {
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
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 35
    public function block_rrplatform_body($context, array $blocks = array())
    {
        // line 36
        echo "    ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
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
        return array (  111 => 40,  108 => 39,  104 => 36,  101 => 35,  96 => 37,  93 => 35,  87 => 30,  84 => 28,  81 => 27,  69 => 19,  61 => 13,  58 => 12,  51 => 10,  48 => 9,  41 => 6,  36 => 5,  33 => 4,  11 => 3,);
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
