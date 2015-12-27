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
        $__internal_05335d3e527d09fd12421c321913cb96b05476b3972b7b365568f5cf60a2fe86 = $this->env->getExtension("native_profiler");
        $__internal_05335d3e527d09fd12421c321913cb96b05476b3972b7b365568f5cf60a2fe86->enter($__internal_05335d3e527d09fd12421c321913cb96b05476b3972b7b365568f5cf60a2fe86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRCoreBundle:Default:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05335d3e527d09fd12421c321913cb96b05476b3972b7b365568f5cf60a2fe86->leave($__internal_05335d3e527d09fd12421c321913cb96b05476b3972b7b365568f5cf60a2fe86_prof);

    }

    // line 4
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_5b1e56c789c2cfdb58044bbce729337c46a989bdd70d914dff4613b157152472 = $this->env->getExtension("native_profiler");
        $__internal_5b1e56c789c2cfdb58044bbce729337c46a989bdd70d914dff4613b157152472->enter($__internal_5b1e56c789c2cfdb58044bbce729337c46a989bdd70d914dff4613b157152472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 5
        echo "    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/p5.js"), "html", null, true);
        echo "\"></script>
    <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/rrcore/js/sketch.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_5b1e56c789c2cfdb58044bbce729337c46a989bdd70d914dff4613b157152472->leave($__internal_5b1e56c789c2cfdb58044bbce729337c46a989bdd70d914dff4613b157152472_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_355f63985cb0157fa0da598067d675779f5c19e68de42beca370b94a833ca5a5 = $this->env->getExtension("native_profiler");
        $__internal_355f63985cb0157fa0da598067d675779f5c19e68de42beca370b94a833ca5a5->enter($__internal_355f63985cb0157fa0da598067d675779f5c19e68de42beca370b94a833ca5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "  Resto'Regimes
";
        
        $__internal_355f63985cb0157fa0da598067d675779f5c19e68de42beca370b94a833ca5a5->leave($__internal_355f63985cb0157fa0da598067d675779f5c19e68de42beca370b94a833ca5a5_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad8c76fe525e0ddfc7f5f89e957183fde11b99f104311756d573ea66f6baec05 = $this->env->getExtension("native_profiler");
        $__internal_ad8c76fe525e0ddfc7f5f89e957183fde11b99f104311756d573ea66f6baec05->enter($__internal_ad8c76fe525e0ddfc7f5f89e957183fde11b99f104311756d573ea66f6baec05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "

    <div class=\"mdl-grid\">
        <div class=\"mdl-cell mdl-cell--3-col\">


            ";
        // line 20
        $this->displayBlock('rrplatform_search', $context, $blocks);
        // line 23
        echo "        </div>
        <div class=\"mdl-cell mdl-cell--8-col\">

            <div class=\"mdl-grid\">
                <div class=\"mdl-cell mdl-cell--2-col\">

                </div>
                <div class=\"mdl-cell mdl-cell--8-col\">
                    ";
        // line 31
        $this->displayBlock('fos_user', $context, $blocks);
        // line 33
        echo "                    ";
        if (array_key_exists("listRestaurants", $context)) {
            // line 34
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listRestaurants"]) ? $context["listRestaurants"] : $this->getContext($context, "listRestaurants")));
            foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
                // line 35
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["restaurant"], "nom", array()), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    ";
        }
        // line 38
        echo "                </div>
            </div>
            ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "        </div>

    </div>
";
        
        $__internal_ad8c76fe525e0ddfc7f5f89e957183fde11b99f104311756d573ea66f6baec05->leave($__internal_ad8c76fe525e0ddfc7f5f89e957183fde11b99f104311756d573ea66f6baec05_prof);

    }

    // line 20
    public function block_rrplatform_search($context, array $blocks = array())
    {
        $__internal_5123671a2a58e32ad2705ebf4c1d77c1b77d112b586409538a17d1f4268592a8 = $this->env->getExtension("native_profiler");
        $__internal_5123671a2a58e32ad2705ebf4c1d77c1b77d112b586409538a17d1f4268592a8->enter($__internal_5123671a2a58e32ad2705ebf4c1d77c1b77d112b586409538a17d1f4268592a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rrplatform_search"));

        // line 21
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("RRCoreBundle:Default:searchFormFull", array()));
        echo "
            ";
        
        $__internal_5123671a2a58e32ad2705ebf4c1d77c1b77d112b586409538a17d1f4268592a8->leave($__internal_5123671a2a58e32ad2705ebf4c1d77c1b77d112b586409538a17d1f4268592a8_prof);

    }

    // line 31
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_ce55c97e6baff88563531280bf948cb7333d303af8a6dc12c705590d4a66076b = $this->env->getExtension("native_profiler");
        $__internal_ce55c97e6baff88563531280bf948cb7333d303af8a6dc12c705590d4a66076b->enter($__internal_ce55c97e6baff88563531280bf948cb7333d303af8a6dc12c705590d4a66076b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 32
        echo "                    ";
        
        $__internal_ce55c97e6baff88563531280bf948cb7333d303af8a6dc12c705590d4a66076b->leave($__internal_ce55c97e6baff88563531280bf948cb7333d303af8a6dc12c705590d4a66076b_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c8c05f7d04282a89d471edd909951339a4ef8c30481e33c6d7b17622981dc89 = $this->env->getExtension("native_profiler");
        $__internal_3c8c05f7d04282a89d471edd909951339a4ef8c30481e33c6d7b17622981dc89->enter($__internal_3c8c05f7d04282a89d471edd909951339a4ef8c30481e33c6d7b17622981dc89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "            ";
        
        $__internal_3c8c05f7d04282a89d471edd909951339a4ef8c30481e33c6d7b17622981dc89->leave($__internal_3c8c05f7d04282a89d471edd909951339a4ef8c30481e33c6d7b17622981dc89_prof);

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
        return array (  173 => 41,  167 => 40,  160 => 32,  154 => 31,  144 => 21,  138 => 20,  128 => 42,  126 => 40,  122 => 38,  119 => 37,  110 => 35,  105 => 34,  102 => 33,  100 => 31,  90 => 23,  88 => 20,  80 => 14,  74 => 13,  66 => 10,  60 => 9,  50 => 6,  45 => 5,  39 => 4,  11 => 3,);
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
/* */
/*     <div class="mdl-grid">*/
/*         <div class="mdl-cell mdl-cell--3-col">*/
/* */
/* */
/*             {% block rrplatform_search %}*/
/*                 {{ render(controller('RRCoreBundle:Default:searchFormFull', {})) }}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="mdl-cell mdl-cell--8-col">*/
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
