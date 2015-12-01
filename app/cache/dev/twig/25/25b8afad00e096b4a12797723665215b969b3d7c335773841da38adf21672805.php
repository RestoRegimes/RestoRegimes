<?php

/* RRRestaurantBundle:Restaurant:view.html.twig */
class __TwigTemplate_9aaf446f3f3d80e8dd1d00589c4fc0165d44b108308898cbccfd47af8fbe346f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("RRRestaurantBundle::layout.html.twig", "RRRestaurantBundle:Restaurant:view.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RRRestaurantBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_490d32ae47c92ca32a76baa90e1fee0c8797f30f00662a075e7f8c55d7a5b230 = $this->env->getExtension("native_profiler");
        $__internal_490d32ae47c92ca32a76baa90e1fee0c8797f30f00662a075e7f8c55d7a5b230->enter($__internal_490d32ae47c92ca32a76baa90e1fee0c8797f30f00662a075e7f8c55d7a5b230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RRRestaurantBundle:Restaurant:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_490d32ae47c92ca32a76baa90e1fee0c8797f30f00662a075e7f8c55d7a5b230->leave($__internal_490d32ae47c92ca32a76baa90e1fee0c8797f30f00662a075e7f8c55d7a5b230_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_3c8a4e47472be7ae696cf429657e417780ad135a7e93d0f38a19f6a226cd8d63 = $this->env->getExtension("native_profiler");
        $__internal_3c8a4e47472be7ae696cf429657e417780ad135a7e93d0f38a19f6a226cd8d63->enter($__internal_3c8a4e47472be7ae696cf429657e417780ad135a7e93d0f38a19f6a226cd8d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<h1>Affichage d'un restaurant</h1>
<li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_delete", array("id" => $this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : $this->getContext($context, "restaurant")), "id", array()))), "html", null, true);
        echo "\">Suprimer</a></li>
<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_edit", array("id" => $this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : $this->getContext($context, "restaurant")), "id", array()))), "html", null, true);
        echo "\">Editer</a></li>
<li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_horaires", array("id" => $this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : $this->getContext($context, "restaurant")), "id", array()))), "html", null, true);
        echo "\">Horaires</a></li>
<li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rr_restaurant_images", array("id" => $this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : $this->getContext($context, "restaurant")), "id", array()))), "html", null, true);
        echo "\">Images</a></li>
<p>
    ";
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "        <p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</p>

<p>
    Ici nous pourrons lire les info du restaurant ayant comme id : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : $this->getContext($context, "restaurant")), "id", array()), "html", null, true);
        echo "<br />
    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : $this->getContext($context, "restaurant")), "nom", array()), "html", null, true);
        echo "<br />
    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : $this->getContext($context, "restaurant")), "telephone", array()), "html", null, true);
        echo "<br />
    ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : $this->getContext($context, "restaurant")), "description", array()), "html", null, true);
        echo "<br />
    <table>
    <thead><th> Horaires: </th><th> Lundi </th><th> Mardi </th><th> Mercredi </th><th> Jeudi </th><th> Vendredi </th><th> Samedi </th><th> Dimanche </th></thead>

        <tr>
            <td>
                Ouverture:
            </td>
            <td>
                ";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "lundi", array(), "any", false, true), "ouverture1", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "lundi", array(), "any", false, true), "ouverture1", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 31
        echo "            </td>
            <td>
                ";
        // line 33
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mardi", array(), "any", false, true), "ouverture1", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mardi", array(), "any", false, true), "ouverture1", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 34
        echo "            </td>
            <td>
                ";
        // line 36
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mercredi", array(), "any", false, true), "ouverture1", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mercredi", array(), "any", false, true), "ouverture1", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 37
        echo "            </td>
            <td>
                ";
        // line 39
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "jeudi", array(), "any", false, true), "ouverture1", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "jeudi", array(), "any", false, true), "ouverture1", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 40
        echo "            </td>
            <td>
                ";
        // line 42
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "vendredi", array(), "any", false, true), "ouverture1", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "vendredi", array(), "any", false, true), "ouverture1", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 43
        echo "            </td>
            <td>
                ";
        // line 45
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "samedi", array(), "any", false, true), "ouverture1", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "samedi", array(), "any", false, true), "ouverture1", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 46
        echo "            </td>
            <td>
                ";
        // line 48
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "dimanche", array(), "any", false, true), "ouverture1", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "dimanche", array(), "any", false, true), "ouverture1", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 49
        echo "            </td>
        </tr>
        <tr>
            <td>
                Fermeture:
            </td>
            <td>
                ";
        // line 56
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "lundi", array(), "any", false, true), "fermeture1", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "lundi", array(), "any", false, true), "fermeture1", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 57
        echo "            </td>
            <td>
                ";
        // line 59
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mardi", array(), "any", false, true), "fermeture1", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mardi", array(), "any", false, true), "fermeture1", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 60
        echo "            </td>
            <td>
                ";
        // line 62
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mercredi", array(), "any", false, true), "fermeture1", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mercredi", array(), "any", false, true), "fermeture1", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 63
        echo "            </td>
            <td>
                ";
        // line 65
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "jeudi", array(), "any", false, true), "fermeture1", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "jeudi", array(), "any", false, true), "fermeture1", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 66
        echo "            </td>
            <td>
                ";
        // line 68
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "vendredi", array(), "any", false, true), "fermeture1", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "vendredi", array(), "any", false, true), "fermeture1", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 69
        echo "            </td>
            <td>
                ";
        // line 71
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "samedi", array(), "any", false, true), "fermeture1", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "samedi", array(), "any", false, true), "fermeture1", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 72
        echo "            </td>
            <td>
                ";
        // line 74
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "dimanche", array(), "any", false, true), "fermeture1", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "dimanche", array(), "any", false, true), "fermeture1", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 75
        echo "            </td>
        </tr>
        <tr>
            <td>
                Ouverture:
            </td>
             <td>
                ";
        // line 82
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "lundi", array(), "any", false, true), "ouverture2", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "lundi", array(), "any", false, true), "ouverture2", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 83
        echo "            </td>
            <td>
                ";
        // line 85
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mardi", array(), "any", false, true), "ouverture2", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mardi", array(), "any", false, true), "ouverture2", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 86
        echo "            </td>
            <td>
                ";
        // line 88
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mercredi", array(), "any", false, true), "ouverture2", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mercredi", array(), "any", false, true), "ouverture2", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 89
        echo "            </td>
            <td>
                ";
        // line 91
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "jeudi", array(), "any", false, true), "ouverture2", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "jeudi", array(), "any", false, true), "ouverture2", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 92
        echo "            </td>
            <td>
                ";
        // line 94
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "vendredi", array(), "any", false, true), "ouverture2", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "vendredi", array(), "any", false, true), "ouverture2", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 95
        echo "            </td>
            <td>
                ";
        // line 97
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "samedi", array(), "any", false, true), "ouverture2", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "samedi", array(), "any", false, true), "ouverture2", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 98
        echo "            </td>
            <td>
                ";
        // line 100
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "dimanche", array(), "any", false, true), "ouverture2", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "dimanche", array(), "any", false, true), "ouverture2", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 101
        echo "            </td>
        </tr>
        <tr>
            <td>
                Fermeture:
            </td>
            <td>
                ";
        // line 108
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "lundi", array(), "any", false, true), "fermeture2", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "lundi", array(), "any", false, true), "fermeture2", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 109
        echo "            </td>
            <td>
                ";
        // line 111
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mardi", array(), "any", false, true), "fermeture2", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mardi", array(), "any", false, true), "fermeture2", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 112
        echo "            </td>
            <td>
                ";
        // line 114
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mercredi", array(), "any", false, true), "fermeture2", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "mercredi", array(), "any", false, true), "fermeture2", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 115
        echo "            </td>
            <td>
                ";
        // line 117
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "jeudi", array(), "any", false, true), "fermeture2", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "jeudi", array(), "any", false, true), "fermeture2", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 118
        echo "            </td>
            <td>
                ";
        // line 120
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "vendredi", array(), "any", false, true), "fermeture2", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "vendredi", array(), "any", false, true), "fermeture2", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 121
        echo "            </td>
            <td>
                ";
        // line 123
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "samedi", array(), "any", false, true), "fermeture2", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "samedi", array(), "any", false, true), "fermeture2", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 124
        echo "            </td>
            <td>
                ";
        // line 126
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "dimanche", array(), "any", false, true), "fermeture2", array(), "any", false, true), "format", array(0 => "H:i"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : null), "dimanche", array(), "any", false, true), "fermeture2", array(), "any", false, true), "format", array(0 => "H:i"), "method"), "fermé")) : ("fermé")), "html", null, true);
        // line 127
        echo "            </td>
        </tr>
</table>
<br/>
    Adresse:
    ";
        // line 132
        echo $this->env->getExtension('address')->address($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : $this->getContext($context, "restaurant")), "address", array()));
        echo "<br />
    Latitude: ";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : $this->getContext($context, "restaurant")), "address", array()), "latitude", array()), "html", null, true);
        echo "<br />
    Longitude: ";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : $this->getContext($context, "restaurant")), "address", array()), "longitude", array()), "html", null, true);
        echo "<br />
    regimes: <br/>
    ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : $this->getContext($context, "restaurant")), "regimes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["regime"]) {
            // line 137
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["regime"], "libelle", array()), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['regime'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo " <br/>
    images: <br/>
    ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["restaurant"]) ? $context["restaurant"] : $this->getContext($context, "restaurant")), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 141
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["image"], "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "alt", array()), "html", null, true);
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo " <br/>

<br />
";
        // line 145
        echo $this->env->getExtension('ivory_google_map')->renderMap((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo "

</p>
";
        
        $__internal_3c8a4e47472be7ae696cf429657e417780ad135a7e93d0f38a19f6a226cd8d63->leave($__internal_3c8a4e47472be7ae696cf429657e417780ad135a7e93d0f38a19f6a226cd8d63_prof);

    }

    public function getTemplateName()
    {
        return "RRRestaurantBundle:Restaurant:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 145,  334 => 142,  323 => 141,  319 => 140,  315 => 138,  306 => 137,  302 => 136,  297 => 134,  293 => 133,  289 => 132,  282 => 127,  280 => 126,  276 => 124,  274 => 123,  270 => 121,  268 => 120,  264 => 118,  262 => 117,  258 => 115,  256 => 114,  252 => 112,  250 => 111,  246 => 109,  244 => 108,  235 => 101,  233 => 100,  229 => 98,  227 => 97,  223 => 95,  221 => 94,  217 => 92,  215 => 91,  211 => 89,  209 => 88,  205 => 86,  203 => 85,  199 => 83,  197 => 82,  188 => 75,  186 => 74,  182 => 72,  180 => 71,  176 => 69,  174 => 68,  170 => 66,  168 => 65,  164 => 63,  162 => 62,  158 => 60,  156 => 59,  152 => 57,  150 => 56,  141 => 49,  139 => 48,  135 => 46,  133 => 45,  129 => 43,  127 => 42,  123 => 40,  121 => 39,  117 => 37,  115 => 36,  111 => 34,  109 => 33,  105 => 31,  103 => 30,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  74 => 15,  65 => 13,  60 => 12,  55 => 9,  51 => 8,  47 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}*/
/* {% extends "RRRestaurantBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* <h1>Affichage d'un restaurant</h1>*/
/* <li><a href="{{ path('rr_restaurant_delete', {'id': restaurant.id}) }}">Suprimer</a></li>*/
/* <li><a href="{{ path('rr_restaurant_edit', {'id': restaurant.id}) }}">Editer</a></li>*/
/* <li><a href="{{ path('rr_restaurant_horaires', {'id': restaurant.id}) }}">Horaires</a></li>*/
/* <li><a href="{{ path('rr_restaurant_images', {'id': restaurant.id}) }}">Images</a></li>*/
/* <p>*/
/*     {# On affiche tous les messages flash dont le nom est « info » #}*/
/*     {% for message in app.session.flashbag.get('notice') %}*/
/*         <p>Message flash : {{ message }}</p>*/
/*     {% endfor %}*/
/* </p>*/
/* */
/* <p>*/
/*     Ici nous pourrons lire les info du restaurant ayant comme id : {{ restaurant.id }}<br />*/
/*     {{ restaurant.nom }}<br />*/
/*     {{ restaurant.telephone }}<br />*/
/*     {{ restaurant.description }}<br />*/
/*     <table>*/
/*     <thead><th> Horaires: </th><th> Lundi </th><th> Mardi </th><th> Mercredi </th><th> Jeudi </th><th> Vendredi </th><th> Samedi </th><th> Dimanche </th></thead>*/
/* */
/*         <tr>*/
/*             <td>*/
/*                 Ouverture:*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.lundi.ouverture1.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.mardi.ouverture1.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.mercredi.ouverture1.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.jeudi.ouverture1.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.vendredi.ouverture1.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.samedi.ouverture1.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.dimanche.ouverture1.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 Fermeture:*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.lundi.fermeture1.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.mardi.fermeture1.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.mercredi.fermeture1.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.jeudi.fermeture1.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.vendredi.fermeture1.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.samedi.fermeture1.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.dimanche.fermeture1.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 Ouverture:*/
/*             </td>*/
/*              <td>*/
/*                 {{ restaurant.lundi.ouverture2.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.mardi.ouverture2.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.mercredi.ouverture2.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.jeudi.ouverture2.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.vendredi.ouverture2.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.samedi.ouverture2.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.dimanche.ouverture2.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 Fermeture:*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.lundi.fermeture2.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.mardi.fermeture2.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.mercredi.fermeture2.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.jeudi.fermeture2.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.vendredi.fermeture2.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.samedi.fermeture2.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*             <td>*/
/*                 {{ restaurant.dimanche.fermeture2.format("H:i")|default("fermé") }}{# idem que .format()#}*/
/*             </td>*/
/*         </tr>*/
/* </table>*/
/* <br/>*/
/*     Adresse:*/
/*     {{ restaurant.address|address()|raw }}<br />*/
/*     Latitude: {{ restaurant.address.latitude }}<br />*/
/*     Longitude: {{ restaurant.address.longitude }}<br />*/
/*     regimes: <br/>*/
/*     {% for regime in restaurant.regimes %}*/
/*         {{ regime.libelle }}*/
/*     {% endfor %} <br/>*/
/*     images: <br/>*/
/*     {% for image in restaurant.images %}*/
/*         <img src="{{ asset(image.webPath) }}" alt="{{ image.alt }}">*/
/*     {% endfor %} <br/>*/
/* */
/* <br />*/
/* {{ google_map(map) }}*/
/* */
/* </p>*/
/* {% endblock %}*/
