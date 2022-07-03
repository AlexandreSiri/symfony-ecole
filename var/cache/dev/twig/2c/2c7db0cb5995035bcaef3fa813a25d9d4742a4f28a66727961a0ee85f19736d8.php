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

/* home/index.html.twig */
class __TwigTemplate_44cc69a5551b103350b2703d67d248e994e064971610e39708ae311b18cb4e3f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Accueil
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
        echo "\t<div class=\"home\">
\t\t<div class=\"container\">
\t\t\t<div class=\"presentation\">
\t\t\t\t<h2>Bienvenue sur Aventures Gustatives !</h2>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, nulla. Itaque amet doloremque fugit tenetur porro omnis. Accusamus nam, doloribus exercitationem ipsum fugiat repellat quam ut totam rerum non suscipit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus alias, beatae maiores vero nihil explicabo! Natus rem accusantium ipsam facere sunt iure asperiores. Accusantium ex modi temporibus, eius reiciendis rerum.</p>
\t\t\t</div>
\t\t\t<div class=\"grid\">
\t\t\t\t<div class=\"introduction\">
\t\t\t\t\t<h4>Bonjour</h4>
\t\t\t\t\t<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ipsam, iusto sapiente, sunt necessitatibus laudantium facere natus esse tempore culpa quasi officia.</p>
\t\t\t\t\t<hr class=\"divider body\">
\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t<i class=\"fa-brands fa-facebook\"></i>
\t\t\t\t\t\t<i class=\"fa-brands fa-pinterest\"></i>
\t\t\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"separator\">
\t\t\t\t\t\t<hr class=\"divider brown\">
\t\t\t\t\t\t<i class=\"fa-solid fa-star\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<h3>Elu meilleur blog culinaire</h3>
\t\t\t\t\t<hr class=\"divider brown\">
\t\t\t\t\t<h4>Ma dernière recette</h4>
\t\t\t\t\t";
        // line 31
        if (twig_first($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "\t\t\t\t\t\t<div class=\"recipe\">
\t\t\t\t\t\t\t<img src=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 33, $this->source); })())), "image", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<h6>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 34, $this->source); })())), "title", [], "any", false, false, false, 34), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 35, $this->source); })())), "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">Voir la recette</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"posts\">
\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 41
            echo "\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<img src=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 42), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"card-author\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-user\"></i>
\t\t\t\t\t\t\t\t\t";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 46), "username", [], "any", false, false, false, 46), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t• Le
\t\t\t\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t•
\t\t\t\t\t\t\t\t\t";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 51
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "label", [], "any", false, false, false, 51), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t\t\t";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 55), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"card-content\">
\t\t\t\t\t\t\t\t\t";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 58), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir plus</a>
                                <hr class=\"divider medium\">
                                <div class=\"card-comments\">
                                    <i class=\"fa-solid fa-comment\"></i>
                                    ";
            // line 64
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 64)), "html", null, true);
            echo " commentaires
                                </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 69,  197 => 64,  190 => 60,  185 => 58,  179 => 55,  175 => 53,  166 => 51,  162 => 50,  157 => 48,  152 => 46,  145 => 42,  142 => 41,  138 => 40,  134 => 38,  128 => 35,  124 => 34,  120 => 33,  117 => 32,  115 => 31,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil
{% endblock %}

{% block body %}
\t<div class=\"home\">
\t\t<div class=\"container\">
\t\t\t<div class=\"presentation\">
\t\t\t\t<h2>Bienvenue sur Aventures Gustatives !</h2>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, nulla. Itaque amet doloremque fugit tenetur porro omnis. Accusamus nam, doloribus exercitationem ipsum fugiat repellat quam ut totam rerum non suscipit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus alias, beatae maiores vero nihil explicabo! Natus rem accusantium ipsam facere sunt iure asperiores. Accusantium ex modi temporibus, eius reiciendis rerum.</p>
\t\t\t</div>
\t\t\t<div class=\"grid\">
\t\t\t\t<div class=\"introduction\">
\t\t\t\t\t<h4>Bonjour</h4>
\t\t\t\t\t<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium ipsam, iusto sapiente, sunt necessitatibus laudantium facere natus esse tempore culpa quasi officia.</p>
\t\t\t\t\t<hr class=\"divider body\">
\t\t\t\t\t<div class=\"socials\">
\t\t\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t\t\t<i class=\"fa-brands fa-facebook\"></i>
\t\t\t\t\t\t<i class=\"fa-brands fa-pinterest\"></i>
\t\t\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"separator\">
\t\t\t\t\t\t<hr class=\"divider brown\">
\t\t\t\t\t\t<i class=\"fa-solid fa-star\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<h3>Elu meilleur blog culinaire</h3>
\t\t\t\t\t<hr class=\"divider brown\">
\t\t\t\t\t<h4>Ma dernière recette</h4>
\t\t\t\t\t{% if posts|first%}
\t\t\t\t\t\t<div class=\"recipe\">
\t\t\t\t\t\t\t<img src=\"{{ (posts|first).image }}\">
\t\t\t\t\t\t\t<h6>{{ (posts|first).title }}</h6>
\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path(\"post_detail\", {id: (posts|first).id}) }}\">Voir la recette</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"posts\">
\t\t\t\t\t{% for post in posts %}
\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<img src=\"{{ post.image }}\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"card-author\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-user\"></i>
\t\t\t\t\t\t\t\t\t{{ post.author.username }}
\t\t\t\t\t\t\t\t\t• Le
\t\t\t\t\t\t\t\t\t{{ post.createdAt|date(\"d/m/Y\") }}
\t\t\t\t\t\t\t\t\t•
\t\t\t\t\t\t\t\t\t{% for category in post.categories %}
\t\t\t\t\t\t\t\t\t\t{{ category.label }}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-title\">
\t\t\t\t\t\t\t\t\t{{ post.title }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"card-content\">
\t\t\t\t\t\t\t\t\t{{ post.content }}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"{{ path(\"post_detail\", {id: post.id}) }}\" class=\"btn btn-primary\">Voir plus</a>
                                <hr class=\"divider medium\">
                                <div class=\"card-comments\">
                                    <i class=\"fa-solid fa-comment\"></i>
                                    {{ post.comments|length }} commentaires
                                </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "home/index.html.twig", "/mnt/c/Users/alexs/Desktop/php-symfony-school-main/templates/home/index.html.twig");
    }
}
