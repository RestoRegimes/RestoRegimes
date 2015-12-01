<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_800a9a7c2fc4d46808f32510bcb21851315cd759f6b683f075af3a834552c631 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'fos_user' => array($this, 'block_fos_user'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_136317beafbb5a7244ad31a90a6941ca6415e3748550ea92ce25eb32774a3a54 = $this->env->getExtension("native_profiler");
        $__internal_136317beafbb5a7244ad31a90a6941ca6415e3748550ea92ce25eb32774a3a54->enter($__internal_136317beafbb5a7244ad31a90a6941ca6415e3748550ea92ce25eb32774a3a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_136317beafbb5a7244ad31a90a6941ca6415e3748550ea92ce25eb32774a3a54->leave($__internal_136317beafbb5a7244ad31a90a6941ca6415e3748550ea92ce25eb32774a3a54_prof);

    }

    // line 2
    public function block_fos_user($context, array $blocks = array())
    {
        $__internal_be568e56efb9bdeb73c5364277f240b8b2195184e1ea7414662ce512f48364a0 = $this->env->getExtension("native_profiler");
        $__internal_be568e56efb9bdeb73c5364277f240b8b2195184e1ea7414662ce512f48364a0->enter($__internal_be568e56efb9bdeb73c5364277f240b8b2195184e1ea7414662ce512f48364a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user"));

        // line 3
        echo "
        <div>
            ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 11
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 13
        echo "        </div>

        ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 16
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 17
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 18
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 19
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
        echo "
        <div>
            ";
        // line 26
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 28
        echo "        </div>
    ";
        
        $__internal_be568e56efb9bdeb73c5364277f240b8b2195184e1ea7414662ce512f48364a0->leave($__internal_be568e56efb9bdeb73c5364277f240b8b2195184e1ea7414662ce512f48364a0_prof);

    }

    // line 26
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0e8aaa2fdc5e17a9ec6ebf02fbe1b5b1a7b0eea34f5899f549d93d2f2ad07ab = $this->env->getExtension("native_profiler");
        $__internal_e0e8aaa2fdc5e17a9ec6ebf02fbe1b5b1a7b0eea34f5899f549d93d2f2ad07ab->enter($__internal_e0e8aaa2fdc5e17a9ec6ebf02fbe1b5b1a7b0eea34f5899f549d93d2f2ad07ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 27
        echo "            ";
        
        $__internal_e0e8aaa2fdc5e17a9ec6ebf02fbe1b5b1a7b0eea34f5899f549d93d2f2ad07ab->leave($__internal_e0e8aaa2fdc5e17a9ec6ebf02fbe1b5b1a7b0eea34f5899f549d93d2f2ad07ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 27,  123 => 26,  115 => 28,  113 => 26,  109 => 24,  106 => 23,  100 => 22,  91 => 19,  86 => 18,  81 => 17,  76 => 16,  74 => 15,  70 => 13,  62 => 11,  56 => 8,  52 => 7,  47 => 6,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/*     {% block fos_user %}*/
/* */
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     {% endblock fos_user %}*/
/* */
/* */
