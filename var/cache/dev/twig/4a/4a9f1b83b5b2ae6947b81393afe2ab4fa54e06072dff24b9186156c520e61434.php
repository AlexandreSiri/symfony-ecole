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

/* post/index.html.twig */
class __TwigTemplate_eb56d543bae25e360cc71dd10b8b8e78a3e6186a025d33076841481ca3ee3807 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
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

        echo "Recettes
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"container posts\">
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "\t\t\t<div class=\"card\">
\t\t\t\t<img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"card-author\">
\t\t\t\t\t\t<i class=\"fa-solid fa-user\"></i>
\t\t\t\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 14), "username", [], "any", false, false, false, 14), "html", null, true);
            echo "
\t\t\t\t\t\t• Le
\t\t\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t•
\t\t\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 19
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "label", [], "any", false, false, false, 19), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"card-content\">
\t\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 26), "html", null, true);
            echo "
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir plus</a>
\t\t\t\t\t<hr class=\"divider medium\">
\t\t\t\t\t<div class=\"card-comments\">
\t\t\t\t\t\t<i class=\"fa-solid fa-comment\"></i>
\t\t\t\t\t\t";
            // line 32
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 32)), "html", null, true);
            echo "
\t\t\t\t\t\tcommentaires
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 38,  151 => 32,  144 => 28,  139 => 26,  133 => 23,  129 => 21,  120 => 19,  116 => 18,  111 => 16,  106 => 14,  99 => 10,  96 => 9,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recettes
{% endblock %}

{% block body %}
\t<div class=\"container posts\">
\t\t{% for post in posts %}
\t\t\t<div class=\"card\">
\t\t\t\t<img src=\"{{ post.image }}\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"card-author\">
\t\t\t\t\t\t<i class=\"fa-solid fa-user\"></i>
\t\t\t\t\t\t{{ post.author.username }}
\t\t\t\t\t\t• Le
\t\t\t\t\t\t{{ post.createdAt|date(\"d/m/Y\") }}
\t\t\t\t\t\t•
\t\t\t\t\t\t{% for category in post.categories %}
\t\t\t\t\t\t\t{{ category.label }}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t{{ post.title }}
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"card-content\">
\t\t\t\t\t\t{{ post.content }}
\t\t\t\t\t</p>
\t\t\t\t\t<a href=\"{{ path(\"post_detail\", {id: post.id}) }}\" class=\"btn btn-primary\">Voir plus</a>
\t\t\t\t\t<hr class=\"divider medium\">
\t\t\t\t\t<div class=\"card-comments\">
\t\t\t\t\t\t<i class=\"fa-solid fa-comment\"></i>
\t\t\t\t\t\t{{ post.comments|length }}
\t\t\t\t\t\tcommentaires
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>
{% endblock %}
", "post/index.html.twig", "/mnt/c/Users/alexs/Desktop/php-symfony-school-main/templates/post/index.html.twig");
    }
}
