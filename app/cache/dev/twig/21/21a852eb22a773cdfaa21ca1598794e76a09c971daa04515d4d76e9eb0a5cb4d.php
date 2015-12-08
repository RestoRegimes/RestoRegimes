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
        $__internal_5bad8ab5b11750ef6c9ae619ff2ddf4e16e49be8ebda6557a9e614cc7c4df61c = $this->env->getExtension("native_profiler");
        $__internal_5bad8ab5b11750ef6c9ae619ff2ddf4e16e49be8ebda6557a9e614cc7c4df61c->enter($__internal_5bad8ab5b11750ef6c9ae619ff2ddf4e16e49be8ebda6557a9e614cc7c4df61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRCoreBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bad8ab5b11750ef6c9ae619ff2ddf4e16e49be8ebda6557a9e614cc7c4df61c->leave($__internal_5bad8ab5b11750ef6c9ae619ff2ddf4e16e49be8ebda6557a9e614cc7c4df61c_prof);

    }

    // line 4
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_44311035f01943c91335463fdc5ddbbf238194d60c125bed05c26d680af0e291 = $this->env->getExtension("native_profiler");
        $__internal_44311035f01943c91335463fdc5ddbbf238194d60c125bed05c26d680af0e291->enter($__internal_44311035f01943c91335463fdc5ddbbf238194d60c125bed05c26d680af0e291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 5
        echo "    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/p5.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/sketch.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_44311035f01943c91335463fdc5ddbbf238194d60c125bed05c26d680af0e291->leave($__internal_44311035f01943c91335463fdc5ddbbf238194d60c125bed05c26d680af0e291_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_0004a06b5b31d212d1dae45ff44adebc9571cbef5a3043ae02e95827af9a1854 = $this->env->getExtension("native_profiler");
        $__internal_0004a06b5b31d212d1dae45ff44adebc9571cbef5a3043ae02e95827af9a1854->enter($__internal_0004a06b5b31d212d1dae45ff44adebc9571cbef5a3043ae02e95827af9a1854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0004a06b5b31d212d1dae45ff44adebc9571cbef5a3043ae02e95827af9a1854->leave($__internal_0004a06b5b31d212d1dae45ff44adebc9571cbef5a3043ae02e95827af9a1854_prof);

    }

    // line 12
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_3c9c288ace81ca36015173c7e6b9f29bc203abc5bc21707d86580e75ca3379ed = $this->env->getExtension("native_profiler");
        $__internal_3c9c288ace81ca36015173c7e6b9f29bc203abc5bc21707d86580e75ca3379ed->enter($__internal_3c9c288ace81ca36015173c7e6b9f29bc203abc5bc21707d86580e75ca3379ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

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
        
        $__internal_3c9c288ace81ca36015173c7e6b9f29bc203abc5bc21707d86580e75ca3379ed->leave($__internal_3c9c288ace81ca36015173c7e6b9f29bc203abc5bc21707d86580e75ca3379ed_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e8ce7e0b371f8ab2b01b3ed5557659ee20465dfeb7167b0163688139f506b0e = $this->env->getExtension("native_profiler");
        $__internal_6e8ce7e0b371f8ab2b01b3ed5557659ee20465dfeb7167b0163688139f506b0e->enter($__internal_6e8ce7e0b371f8ab2b01b3ed5557659ee20465dfeb7167b0163688139f506b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6e8ce7e0b371f8ab2b01b3ed5557659ee20465dfeb7167b0163688139f506b0e->leave($__internal_6e8ce7e0b371f8ab2b01b3ed5557659ee20465dfeb7167b0163688139f506b0e_prof);

    }

    // line 35
    public function block_rrplatform_body($context, array $blocks = array())
    {
        $__internal_7e334182dbcc62f6e60927f7aee532a0f8916eceb82940541337cbad1e52878b = $this->env->getExtension("native_profiler");
        $__internal_7e334182dbcc62f6e60927f7aee532a0f8916eceb82940541337cbad1e52878b->enter($__internal_7e334182dbcc62f6e60927f7aee532a0f8916eceb82940541337cbad1e52878b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_body"));

        // line 36
        echo "    ";
        
        $__internal_7e334182dbcc62f6e60927f7aee532a0f8916eceb82940541337cbad1e52878b->leave($__internal_7e334182dbcc62f6e60927f7aee532a0f8916eceb82940541337cbad1e52878b_prof);

    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        $__internal_fae7787204b0687c72e247928491c3b2a4d3ac2b4237ad9f249853f7873c71c8 = $this->env->getExtension("native_profiler");
        $__internal_fae7787204b0687c72e247928491c3b2a4d3ac2b4237ad9f249853f7873c71c8->enter($__internal_fae7787204b0687c72e247928491c3b2a4d3ac2b4237ad9f249853f7873c71c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_fae7787204b0687c72e247928491c3b2a4d3ac2b4237ad9f249853f7873c71c8->leave($__internal_fae7787204b0687c72e247928491c3b2a4d3ac2b4237ad9f249853f7873c71c8_prof);

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
