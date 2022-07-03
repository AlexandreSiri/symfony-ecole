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

/* post/detail.html.twig */
class __TwigTemplate_7d56e7a2cfeab94ad878202959ad640bb3344f71ef7e97997a7ab9951062ea41 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "post/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "post/detail.html.twig", 1);
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

        echo "Recette | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "
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
        echo "\t<div class=\"container post\">
\t\t<div class=\"post-container\">
\t\t\t<div class=\"post-author\">
\t\t\t\t<i class=\"fa-solid fa-user\"></i>
\t\t\t\t";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 11, $this->source); })()), "author", [], "any", false, false, false, 11), "username", [], "any", false, false, false, 11), "html", null, true);
        echo "
\t\t\t\t• Le
\t\t\t\t";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 13, $this->source); })()), "createdAt", [], "any", false, false, false, 13), "d/m/Y"), "html", null, true);
        echo "
\t\t\t\t•
\t\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 15, $this->source); })()), "categories", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "label", [], "any", false, false, false, 16), "html", null, true);
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t</div>
\t\t\t<div class=\"post-title\">
\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 22, $this->source); })()), "image", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
\t\t\t<p class=\"post-content\">
\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 24, $this->source); })()), "content", [], "any", false, false, false, 24), "html", null, true);
        echo "
\t\t\t</p>
\t\t\t<hr class=\"divider medium\">
\t\t\t<div class=\"post-comments\">
\t\t\t\t<i class=\"fa-solid fa-comment\"></i>
\t\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 29, $this->source); })()), "comments", [], "any", false, false, false, 29)), "html", null, true);
        echo "
\t\t\t\tcommentaires
\t\t\t\t<div class=\"comments\">
\t\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 32, $this->source); })()), "comments", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 33
            echo "\t\t\t\t\t\t<div class=\"comment\">
\t\t\t\t\t\t\t<div class=\"comment-title\">
\t\t\t\t\t\t\t\tRédigé par
\t\t\t\t\t\t\t\t";
            // line 36
            if (twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 36)) {
                // line 37
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 37), "username", [], "any", false, false, false, 37), "html", null, true);
                echo ", le
\t\t\t\t\t\t\t\t";
            } else {
                // line 39
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "username", [], "any", false, false, false, 39), "html", null, true);
                echo ", le
\t\t\t\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 41), "d/m/Y H:i"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t";
            // line 42
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AUTHOR") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 44
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 44, $this->source); })()), "author", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)))) || ((twig_get_attribute($this->env, $this->source,             // line 45
$context["comment"], "author", [], "any", false, false, false, 45) && twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45))))) {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">Supprimer</a>
\t\t\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"comment-body\">
\t\t\t\t\t\t\t\t";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 51), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t<div class=\"new-comment\">
\t\t\t\t<h6>Laisser un commentaire</h6>


\t\t\t\t";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_start');
        echo "
\t\t\t\t";
        // line 63
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 64
            echo "\t\t\t\t\t";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "username", [], "any", false, false, false, 64), "setRendered", [], "method", false, false, false, 64);
            // line 65
            echo "\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "username", [], "any", false, false, false, 66), 'row', ["attr" => ["required" => true]]);
            echo "
\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "content", [], "any", false, false, false, 68), 'row');
        echo "

\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
\t\t\t\t";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t<div class=\"last-posts\">
\t\t\t<h6>Recettes récentes</h6>
\t\t\t<div class=\"grid\">
\t\t\t\t";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["last_posts"]) || array_key_exists("last_posts", $context) ? $context["last_posts"] : (function () { throw new RuntimeError('Variable "last_posts" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 77
            echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 78), "html", null, true);
            echo "\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t\t";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 81), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"card-content\">
\t\t\t\t\t\t\t\t";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 84), "html", null, true);
            echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir plus</a>
\t\t\t\t\t\t\t<hr class=\"divider medium\">
\t\t\t\t\t\t\t<div class=\"card-comments\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-comment\"></i>
\t\t\t\t\t\t\t\t";
            // line 90
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 90)), "html", null, true);
            echo "
\t\t\t\t\t\t\t\tcommentaires
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "post/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 96,  273 => 90,  266 => 86,  261 => 84,  255 => 81,  249 => 78,  246 => 77,  242 => 76,  234 => 71,  227 => 68,  221 => 66,  218 => 65,  215 => 64,  213 => 63,  209 => 62,  200 => 55,  190 => 51,  186 => 49,  180 => 47,  178 => 45,  177 => 44,  176 => 42,  171 => 41,  165 => 39,  159 => 37,  157 => 36,  152 => 33,  148 => 32,  142 => 29,  134 => 24,  129 => 22,  124 => 20,  120 => 18,  111 => 16,  107 => 15,  102 => 13,  97 => 11,  91 => 7,  81 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recette | {{ post.title }}
{% endblock %}

{% block body %}
\t<div class=\"container post\">
\t\t<div class=\"post-container\">
\t\t\t<div class=\"post-author\">
\t\t\t\t<i class=\"fa-solid fa-user\"></i>
\t\t\t\t{{ post.author.username }}
\t\t\t\t• Le
\t\t\t\t{{ post.createdAt|date(\"d/m/Y\") }}
\t\t\t\t•
\t\t\t\t{% for category in post.categories %}
\t\t\t\t\t{{ category.label }}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<div class=\"post-title\">
\t\t\t\t{{ post.title }}
\t\t\t</div>
\t\t\t<img src=\"{{ post.image }}\">
\t\t\t<p class=\"post-content\">
\t\t\t\t{{ post.content }}
\t\t\t</p>
\t\t\t<hr class=\"divider medium\">
\t\t\t<div class=\"post-comments\">
\t\t\t\t<i class=\"fa-solid fa-comment\"></i>
\t\t\t\t{{ post.comments|length }}
\t\t\t\tcommentaires
\t\t\t\t<div class=\"comments\">
\t\t\t\t\t{% for comment in post.comments %}
\t\t\t\t\t\t<div class=\"comment\">
\t\t\t\t\t\t\t<div class=\"comment-title\">
\t\t\t\t\t\t\t\tRédigé par
\t\t\t\t\t\t\t\t{% if comment.author %}
\t\t\t\t\t\t\t\t\t{{ comment.author.username }}, le
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{{ comment.username }}, le
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{{ comment.createdAt|date(\"d/m/Y H:i\") }}
\t\t\t\t\t\t\t\t{% if 
\t\t\t\t\t\t\t\t\tis_granted('ROLE_ADMIN') or 
\t\t\t\t\t\t\t\t\t(is_granted('ROLE_AUTHOR') and app.user.id == post.author.id) or
\t\t\t\t\t\t\t\t\t(comment.author and app.user and (comment.author.id == app.user.id))
\t\t\t\t\t\t\t\t%}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path(\"comment_delete\", {id: comment.id}) }}\">Supprimer</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"comment-body\">
\t\t\t\t\t\t\t\t{{ comment.content }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t\t<div class=\"new-comment\">
\t\t\t\t<h6>Laisser un commentaire</h6>


\t\t\t\t{{ form_start(form) }}
\t\t\t\t{% if is_granted('ROLE_USER') %}
\t\t\t\t\t{% do form.username.setRendered() %}
\t\t\t\t{% else %}
\t\t\t\t\t{{ form_row(form.username, {attr: {required: true}}) }}
\t\t\t\t{% endif %}
\t\t\t\t{{ form_row(form.content) }}

\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t<div class=\"last-posts\">
\t\t\t<h6>Recettes récentes</h6>
\t\t\t<div class=\"grid\">
\t\t\t\t{% for post in last_posts %}
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<img src=\"{{ post.image }}\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t\t{{ post.title }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"card-content\">
\t\t\t\t\t\t\t\t{{ post.content }}
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"{{ path(\"post_detail\", {id: post.id}) }}\" class=\"btn btn-primary\">Voir plus</a>
\t\t\t\t\t\t\t<hr class=\"divider medium\">
\t\t\t\t\t\t\t<div class=\"card-comments\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-comment\"></i>
\t\t\t\t\t\t\t\t{{ post.comments|length }}
\t\t\t\t\t\t\t\tcommentaires
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "post/detail.html.twig", "/mnt/c/Users/alexs/Desktop/php-symfony-school-main/templates/post/detail.html.twig");
    }
}
