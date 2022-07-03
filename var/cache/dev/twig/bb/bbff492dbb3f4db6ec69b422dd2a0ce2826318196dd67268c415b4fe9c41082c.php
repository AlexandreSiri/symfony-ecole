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

/* base.html.twig */
class __TwigTemplate_606d3e6b2f2667226294886dc08115b3165cb7c81fc9f3eaa5485449bd17f322 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t";
        // line 12
        echo "\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\">
\t\t";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
\t\t";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "\t</head>
\t<body>
\t\t<ul class=\"navbar\">
\t\t\t<li>
\t\t\t\t<a href=\"/\">Accueil</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("posts");
        echo "\">Recettes</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">A propos</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
\t\t\t</li>
\t\t\t";
        // line 35
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 36
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Déconnexion</a>
\t\t\t\t</li>
\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 44
        echo "\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 45
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Administration</a>
\t\t\t\t</li>
\t\t\t";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_AUTHOR")) {
            // line 49
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("author");
            echo "\">Auteur</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 53
        echo "\t\t</ul>
\t\t<div class=\"header\">
\t\t\t<img src=\"/assets/images/logo.png\"/>
\t\t\t<h1>Aventures gustatives</h1>
\t\t</div>
\t\t<hr class=\"divider medium header\">
\t\t";
        // line 60
        echo "\t\t<div class=\"alerts\">
\t\t\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 62
            echo "\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t";
            // line 63
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 67
            echo "\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t";
            // line 68
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t</div>
\t\t";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "\t\t<div class=\"footer\">
\t\t\t<div class=\"copyright\">
\t\t\t\t© 2022 par AVENTURES GUSTATIVES
\t\t\t</div>
\t\t\t<div class=\"socials\">
\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t<i class=\"fa-brands fa-facebook\"></i>
\t\t\t\t<i class=\"fa-brands fa-pinterest\"></i>
\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t</div>
\t\t</div>
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("main");
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("main");
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 72,  263 => 18,  253 => 17,  240 => 14,  230 => 13,  210 => 6,  187 => 73,  185 => 72,  182 => 71,  173 => 68,  170 => 67,  165 => 66,  156 => 63,  153 => 62,  149 => 61,  146 => 60,  138 => 53,  132 => 50,  129 => 49,  123 => 46,  120 => 45,  117 => 44,  111 => 41,  108 => 40,  102 => 37,  99 => 36,  97 => 35,  92 => 33,  86 => 30,  80 => 27,  71 => 20,  69 => 17,  66 => 16,  64 => 13,  61 => 12,  56 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css\">
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('main') }}
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('main') }}
\t\t{% endblock %}
\t</head>
\t<body>
\t\t<ul class=\"navbar\">
\t\t\t<li>
\t\t\t\t<a href=\"/\">Accueil</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path(\"posts\") }}\">Recettes</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path(\"about\") }}\">A propos</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path(\"contact\") }}\">Contact</a>
\t\t\t</li>
\t\t\t{% if is_granted('ROLE_USER') %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path(\"logout\") }}\">Déconnexion</a>
\t\t\t\t</li>
\t\t\t{% else %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path(\"login\") }}\">Connexion</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path(\"admin\") }}\">Administration</a>
\t\t\t\t</li>
\t\t\t{% elseif is_granted('ROLE_AUTHOR') %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ path(\"author\") }}\">Auteur</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t</ul>
\t\t<div class=\"header\">
\t\t\t<img src=\"/assets/images/logo.png\"/>
\t\t\t<h1>Aventures gustatives</h1>
\t\t</div>
\t\t<hr class=\"divider medium header\">
\t\t{# {{ app.flashes()|length }} #}
\t\t<div class=\"alerts\">
\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t<div class=\"alert alert-success\">
\t\t\t\t\t{{ message }}
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t{% for message in app.flashes('danger') %}
\t\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t\t{{ message }}
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t\t{% block body %}{% endblock %}
\t\t<div class=\"footer\">
\t\t\t<div class=\"copyright\">
\t\t\t\t© 2022 par AVENTURES GUSTATIVES
\t\t\t</div>
\t\t\t<div class=\"socials\">
\t\t\t\t<i class=\"fa-brands fa-instagram\"></i>
\t\t\t\t<i class=\"fa-brands fa-facebook\"></i>
\t\t\t\t<i class=\"fa-brands fa-pinterest\"></i>
\t\t\t\t<i class=\"fa-brands fa-youtube\"></i>
\t\t\t</div>
\t\t</div>
\t</body>
</html>
", "base.html.twig", "/mnt/c/Users/alexs/Desktop/php-symfony-school-main/templates/base.html.twig");
    }
}
