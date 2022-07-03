<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/index.html.twig */
class __TwigTemplate_1c2012112f97ff1ede7b3f5640a7f0ed2123fd4f0a947ad133a710283e633482 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 5
            echo "\t\tAdministration
\t";
        } else {
            // line 7
            echo "\t\tAuteur
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
\t<div class=\"container admin home\">
\t\t";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 15
            echo "\t\t\t<h4>Administration</h4>
\t\t";
        } else {
            // line 17
            echo "\t\t\t<h4>Auteur</h4>
\t\t";
        }
        // line 19
        echo "\t\t<div class=\"buttons\">
\t\t\t";
        // line 20
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 21
            echo "\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_create");
            echo "\" class=\"btn btn-primary\">Ajouter un article</a>
\t\t\t\t<a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_list");
            echo "\" class=\"btn btn-primary\">Utilisateurs</a>
\t\t\t\t<a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_list");
            echo "\" class=\"btn btn-primary\">Contact</a>
\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AUTHOR")) {
            // line 25
            echo "\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_post_create");
            echo "\" class=\"btn btn-primary\">Ajouter un article</a>
\t\t\t";
        }
        // line 27
        echo "\t\t</div>
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"id\">ID</th>
\t\t\t\t\t<th class=\"title\">Titre</th>
\t\t\t\t\t<th class=\"categories\">Catégories</th>
\t\t\t\t\t<th class=\"actions\">Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 39
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"id\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"title\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td class=\"categories\">
\t\t\t\t\t\t\t";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 43));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 44
                echo "\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "label", [], "any", false, false, false, 44), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t";
                // line 45
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 45)) {
                    echo ",
\t\t\t\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
            // line 51
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 52
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-brown\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">Modifier</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\">Supprimer</a>
\t\t\t\t\t\t\t\t";
            } else {
                // line 55
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-brown\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_post_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\">Modifier</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author_post_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\">Supprimer</a>
\t\t\t\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 62,  234 => 58,  229 => 56,  224 => 55,  219 => 53,  214 => 52,  212 => 51,  207 => 48,  193 => 47,  188 => 45,  183 => 44,  166 => 43,  161 => 41,  157 => 40,  154 => 39,  150 => 38,  137 => 27,  131 => 25,  126 => 23,  122 => 22,  117 => 21,  115 => 20,  112 => 19,  108 => 17,  104 => 15,  102 => 14,  98 => 12,  88 => 11,  76 => 7,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{% if is_granted('ROLE_ADMIN') %}
\t\tAdministration
\t{% else %}
\t\tAuteur
\t{% endif %}
{% endblock %}

{% block body %}

\t<div class=\"container admin home\">
\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<h4>Administration</h4>
\t\t{% else %}
\t\t\t<h4>Auteur</h4>
\t\t{% endif %}
\t\t<div class=\"buttons\">
\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t<a href=\"{{ path(\"admin_post_create\") }}\" class=\"btn btn-primary\">Ajouter un article</a>
\t\t\t\t<a href=\"{{ path(\"admin_user_list\") }}\" class=\"btn btn-primary\">Utilisateurs</a>
\t\t\t\t<a href=\"{{ path(\"admin_contact_list\") }}\" class=\"btn btn-primary\">Contact</a>
\t\t\t{% elseif is_granted('ROLE_AUTHOR') %}
\t\t\t\t<a href=\"{{ path(\"author_post_create\") }}\" class=\"btn btn-primary\">Ajouter un article</a>
\t\t\t{% endif %}
\t\t</div>
\t\t<table>
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"id\">ID</th>
\t\t\t\t\t<th class=\"title\">Titre</th>
\t\t\t\t\t<th class=\"categories\">Catégories</th>
\t\t\t\t\t<th class=\"actions\">Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for post in posts %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"id\">{{ post.id }}</td>
\t\t\t\t\t\t<td class=\"title\">{{ post.title }}</td>
\t\t\t\t\t\t<td class=\"categories\">
\t\t\t\t\t\t\t{% for category in post.categories%}
\t\t\t\t\t\t\t\t{{ category.label }}
\t\t\t\t\t\t\t\t{% if not loop.last %},
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-brown\" href=\"{{ path(\"admin_post_edit\", {id: post.id}) }}\">Modifier</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"{{ path(\"admin_post_delete\", {id: post.id}) }}\">Supprimer</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-brown\" href=\"{{ path(\"author_post_edit\", {id: post.id}) }}\">Modifier</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"{{ path(\"author_post_delete\", {id: post.id}) }}\">Supprimer</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>
{% endblock %}
", "admin/index.html.twig", "/mnt/c/Users/alexs/Desktop/php-symfony-school-main/templates/admin/index.html.twig");
    }
}
