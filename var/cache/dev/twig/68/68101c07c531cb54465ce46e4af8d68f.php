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
class __TwigTemplate_69b9a4b8a86116f8a1d97c5ec8c9d765 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "\t\t<title>
\t\t\t";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        // line 18
        echo "\t\t</title>
\t\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
\t</head>
\t<body>

\t\t<header>
\t\t\t<nav class=\"navbar\">
\t\t\t\t<div class=\"container-fluid \">
\t\t\t\t\t<div class=\"col-0 mr-2\">
\t\t\t\t\t\t<a class=\"navbar-brand \" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/logo_minerva.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"80px\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"searchContainer\" data-search-url=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\">
    \t\t\t\t\t<div class=\"col-6\">
        \t\t\t\t\t<div class=\"nav-item mx-auto\">
            \t\t\t\t\t<form id=\"searchForm\" class=\"d-flex\">
                \t\t\t\t\t<input id=\"searchInput\" class=\"form-control me-sm-2 col-12\" type=\"text\" placeholder=\"Search\">
                \t\t\t\t\t<button id=\"searchButton\" class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Chercher</button>
            \t\t\t\t\t</form>
        \t\t\t\t\t</div>
    \t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"nav-item col-0 ml-2\">
\t\t\t\t\t\t<a class=\"text-secondary\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"bi bi-person-square\" style=\"font-size: 2rem;\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t";
        // line 49
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 50
            echo "\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-black\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-black\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'inscrire
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        } else {
            // line 59
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("monPanier");
            echo "\">Panier</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes-favorie");
            echo "\">Favorie</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 65
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MOD"))) {
                // line 66
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 67
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout");
                echo "\">Ajout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "email", [], "any", false, false, false, 72), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle-fill text-white\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>


\t<nav class=\"navbar navbar-expand-lg\" id=\"categorie\">
\t<div class=\"container-fluid \">
\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
\t<div class=\"collapse navbar-collapse\">
\t\t<ul class=\"navbar-nav me-auto ms-auto\">
\t\t\t<li class=\"nav-item dropdown \">
\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Littérature Classique</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Theatre</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Aventure</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Science fiction</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Romans</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Aventure</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Post-Apocalyptique</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Dystopie</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Fantasy</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">BD</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Aventure</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Humoristique</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Historique</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Science fiction</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Western</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Fantasy</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Manga</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Shonen</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Shojo</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Seinen</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Josei</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Poésie</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Haïku</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Surréaliste</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Engagé</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Mythe et Légendes</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Religions</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Mythologie Grecque</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Mythologie Nordique</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Mythologie Egyptienne</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>

\t</div>
</div></nav>




";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 154));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 155
            echo "<h2 class=\"alert alerte text-center mt-4 mb-4\" role=\"alert\">
\t";
            // line 156
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
</h2>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        $this->displayBlock('body', $context, $blocks);
        echo "<footer>
<div class=\"container-fluid py-4\">
\t<div class=\"row g-0\">
\t\t<div class=\"col-md-4 col-12 offset-md-1 \">
\t\t\t<div class=\"row g-0 mb-3\">
\t\t\t\t<h3>A propos
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"row g-0\">
\t\t\t\tImaginé en 2023 par Tristan Provost et mis en service durant cette même année, 
\t\t\t\tMinerva est une librairie fictive imaginée dans le but de créer un site de commerce pour le cour de monsieur Legales.<br>
\t\t\t\tChez Minerva retrouvez des centaines (?) de livres adaptés à tous les âges et tous les goûts.
\t\t\t\tQue vous soyez plutôt science fiction ou fantasy, roman policier ou bandes dessinées Minerva aura de quoi satisfaire vos envies de lecture.
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-2 col-6 offset-md-2 piedpage \">
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous contacter</a>
\t\t\t</div>
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 177
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\">FAQ</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-2 col-6 piedpage \">
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentionslegales");
        echo "\">Mentions légales</a>
\t\t\t</div>
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">Conditions générales d'utilisations
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 189
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("charte");
        echo "\">
\t\t\t\t\tVos données personnelles
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div></footer>";
        // line 195
        $this->displayBlock('javascripts', $context, $blocks);
        // line 197
        echo "</body></html>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t\t\t<!-- Bootstrap CSS -->
\t\t\t<link href=\"https://bootswatch.com/5/lumen/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css\">
\t\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\"/>
\t\t\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/stylesheet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/carrouselCSS.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Minerva -
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 157
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 195
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 196
        echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/carrousel.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  486 => 197,  483 => 196,  473 => 195,  455 => 157,  435 => 16,  423 => 13,  419 => 12,  413 => 8,  403 => 7,  390 => 197,  388 => 195,  379 => 189,  372 => 185,  366 => 182,  358 => 177,  352 => 174,  332 => 157,  324 => 156,  321 => 155,  317 => 154,  303 => 143,  299 => 142,  295 => 141,  291 => 140,  282 => 134,  278 => 133,  274 => 132,  265 => 126,  261 => 125,  257 => 124,  253 => 123,  244 => 117,  240 => 116,  236 => 115,  232 => 114,  228 => 113,  224 => 112,  215 => 106,  211 => 105,  207 => 104,  203 => 103,  194 => 97,  190 => 96,  186 => 95,  166 => 77,  158 => 72,  154 => 71,  151 => 70,  145 => 67,  142 => 66,  140 => 65,  135 => 63,  129 => 60,  126 => 59,  119 => 55,  112 => 51,  109 => 50,  107 => 49,  87 => 32,  80 => 28,  76 => 27,  65 => 19,  62 => 18,  60 => 16,  57 => 15,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t{% block stylesheets %}
\t\t\t<!-- Bootstrap CSS -->
\t\t\t<link href=\"https://bootswatch.com/5/lumen/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css\">
\t\t\t<link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\"/>
\t\t\t<link href=\"{{asset('style/stylesheet.css') }}\" rel=\"stylesheet\">
\t\t\t<link href=\"{{asset('style/carrouselCSS.css') }}\" rel=\"stylesheet\">
\t\t{% endblock %}
\t\t<title>
\t\t\t{% block title %}Minerva -
\t\t\t{% endblock %}
\t\t</title>
\t\t<script src=\"{{ asset('js/main.js') }}\"></script>
\t</head>
\t<body>

\t\t<header>
\t\t\t<nav class=\"navbar\">
\t\t\t\t<div class=\"container-fluid \">
\t\t\t\t\t<div class=\"col-0 mr-2\">
\t\t\t\t\t\t<a class=\"navbar-brand \" href=\"{{path('index')}}\">
\t\t\t\t\t\t\t<img src=\"{{ asset('image/logo_minerva.png')}}\" alt=\"logo\" width=\"80px\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t\t<div id=\"searchContainer\" data-search-url=\"{{ path('search') }}\">
    \t\t\t\t\t<div class=\"col-6\">
        \t\t\t\t\t<div class=\"nav-item mx-auto\">
            \t\t\t\t\t<form id=\"searchForm\" class=\"d-flex\">
                \t\t\t\t\t<input id=\"searchInput\" class=\"form-control me-sm-2 col-12\" type=\"text\" placeholder=\"Search\">
                \t\t\t\t\t<button id=\"searchButton\" class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Chercher</button>
            \t\t\t\t\t</form>
        \t\t\t\t\t</div>
    \t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"nav-item col-0 ml-2\">
\t\t\t\t\t\t<a class=\"text-secondary\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"bi bi-person-square\" style=\"font-size: 2rem;\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t{% if not is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-black\" href=\"{{path('app_login')}}\">Se connecter
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link text-black\" href=\"{{path('app_register')}}\">S'inscrire
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('monPanier')}}\">Panier</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('mes-favorie')}}\">Favorie</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MOD')%}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('ajout')}}\">Ajout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">
\t\t\t\t\t\t\t\t\t\t{{app.user.email}}
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle-fill text-white\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t</header>


\t<nav class=\"navbar navbar-expand-lg\" id=\"categorie\">
\t<div class=\"container-fluid \">
\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
\t<div class=\"collapse navbar-collapse\">
\t\t<ul class=\"navbar-nav me-auto ms-auto\">
\t\t\t<li class=\"nav-item dropdown \">
\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Littérature Classique</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Theatre</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Aventure</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Science fiction</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Romans</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Aventure</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Post-Apocalyptique</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Dystopie</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Fantasy</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">BD</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Aventure</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Humoristique</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Historique</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Science fiction</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Western</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Fantasy</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Manga</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Shonen</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Shojo</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Seinen</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Josei</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Poésie</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Haïku</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Surréaliste</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Engagé</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Mythe et Légendes</a>
\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Religions</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Mythologie Grecque</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Mythologie Nordique</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Mythologie Egyptienne</a>
\t\t\t\t</div>
\t\t\t</li>
\t\t</ul>

\t</div>
</div></nav>




{% for message in app.flashes('notice') %}
<h2 class=\"alert alerte text-center mt-4 mb-4\" role=\"alert\">
\t{{ message }}
</h2>{% endfor %}{% block body %}{% endblock %}<footer>
<div class=\"container-fluid py-4\">
\t<div class=\"row g-0\">
\t\t<div class=\"col-md-4 col-12 offset-md-1 \">
\t\t\t<div class=\"row g-0 mb-3\">
\t\t\t\t<h3>A propos
\t\t\t\t</h3>
\t\t\t</div>
\t\t\t<div class=\"row g-0\">
\t\t\t\tImaginé en 2023 par Tristan Provost et mis en service durant cette même année, 
\t\t\t\tMinerva est une librairie fictive imaginée dans le but de créer un site de commerce pour le cour de monsieur Legales.<br>
\t\t\t\tChez Minerva retrouvez des centaines (?) de livres adaptés à tous les âges et tous les goûts.
\t\t\t\tQue vous soyez plutôt science fiction ou fantasy, roman policier ou bandes dessinées Minerva aura de quoi satisfaire vos envies de lecture.
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-2 col-6 offset-md-2 piedpage \">
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('contact')}}\">Nous contacter</a>
\t\t\t</div>
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('faq')}}\">FAQ</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-2 col-6 piedpage \">
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('mentionslegales')}}\">Mentions légales</a>
\t\t\t</div>
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('cgu')}}\">Conditions générales d'utilisations
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"{{path('charte')}}\">
\t\t\t\t\tVos données personnelles
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div></footer>{% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
<script src=\"{{asset('js/carrousel.js') }}\"></script>{% endblock %}</body></html>


", "base.html.twig", "/var/www/html/minerva2/templates/base.html.twig");
    }
}
