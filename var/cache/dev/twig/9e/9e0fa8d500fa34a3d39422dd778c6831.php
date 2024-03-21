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
class __TwigTemplate_fd28cb1ff4f040d3e9f800fa93e4a047 extends Template
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

<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
        // line 16
        echo "\t<title>
\t\t";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        // line 19
        echo "\t</title>
\t<link rel=\"icon\" href=\"image/logo_minerva.png\" />
</head>

<body>
\t<header>
\t\t<nav class=\"navbar\">
\t\t\t<div class=\"container-fluid \">
\t\t\t\t<div class=\"col-0 mr-2\">
\t\t\t\t\t<a class=\"navbar-brand \" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 29
=======
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
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/logo_minerva.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"80px\">
\t\t\t\t\t</a>
\t\t\t\t</div>

<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<div class=\"nav-item mx-auto\">
\t\t\t\t\t\t<form class=\"d-flex\" action=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"get\">
\t\t\t\t\t\t\t<input name=\"q\" class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
\t\t\t\t\t\t\t<button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Chercher</button>
\t\t\t\t\t\t</form>
=======
\t\t\t\t\t<div id=\"searchContainer\" data-search-url=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"nav-item mx-auto\">
\t\t\t\t\t\t\t\t<form id=\"searchForm\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<input id=\"searchInput\" class=\"form-control me-sm-2 col-12\" type=\"text\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t\t<button id=\"searchButton\" class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Chercher</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
\t\t\t\t\t</div>
\t\t\t\t</div>


<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
\t\t\t\t<div class=\"nav-item col-0 ml-2\">
\t\t\t\t\t<a class=\"text-secondary\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" aria-expanded=\"false\">
\t\t\t\t\t\t<i class=\"bi bi-person-square\" style=\"font-size: 2rem;\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t";
        // line 48
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 49
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-black\" href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-black\" href=\"";
            // line 54
=======
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
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'inscrire
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
            // line 58
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("monPanier");
            echo "\">Panier</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes-favorie");
            echo "\">Favorie</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 64
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MOD"))) {
                // line 65
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 66
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout");
                echo "\">Ajout</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "email", [], "any", false, false, false, 71), "html", null, true);
=======
            // line 59
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("monPanier");
            echo "\">Panier</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 65
            echo "\t\t\t\t\t\t\t\t";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MOD"))) {
                // line 66
                echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 67
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout");
                echo "\">Ajout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 70
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutDeGenre");
                echo "\">Ajout de genres</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
                // line 73
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutDeType");
                echo "\">Ajout de types</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "email", [], "any", false, false, false, 78), "html", null, true);
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
            echo "
\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle-fill text-white\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
        // line 76
        echo "\t\t\t\t\t</ul>
=======
        // line 83
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t</nav>
<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
\t</header>


\t<nav class=\"navbar navbar-expand-lg\" id=\"categorie\">
\t\t<div class=\"container-fluid\">
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
\t\t\t\taria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"navbar-nav me-auto ms-auto\">
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Littérature Classique</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Theatre</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Aventure</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Science fiction</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Romans</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Aventure</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Post-Apocalyptique</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Dystopie</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Fantasy</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">BD</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Aventure</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Humoristique</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Historique</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Science fiction</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Western</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Fantasy</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Manga</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Shonen</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Shojo</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Seinen</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Josei</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Poésie</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Haïku</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Surréaliste</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Engagé</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Mythe et Légendes</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Religions</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Mythologie Grecque</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Mythologie Nordique</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Mythologie Egyptienne</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>




\t";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 160));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 161
            echo "\t<h2 class=\"alert alerte text-center mt-4 mb-4\" role=\"alert\">
\t\t";
            // line 162
=======
\t</body>
</html></header><nav class=\"navbar navbar-expand-lg\" id=\"categorie\">
<div class=\"container-fluid\">
\t<div class=\"collapse navbar-collapse\">
\t\t<ul class=\"navbar-nav me-auto ms-auto\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"#\">Littérature Classique</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"#\">Romans</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"#\">BD</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"#\">Manga</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"#\">Poésie</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"#\">Mythe et Légendes</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</div></nav>";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 113));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 114
            echo "<h2 class=\"alert alerte text-center mt-4 mb-4\" role=\"alert\">
\t";
            // line 115
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</h2>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
        // line 163
=======
        // line 116
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
        $this->displayBlock('body', $context, $blocks);
        echo "<footer>
\t\t<div class=\"container-fluid py-4\">
\t\t\t<div class=\"row g-0\">
<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
\t\t\t\t<div class=\"col-md-4 col-12 offset-md-1 \">
\t\t\t\t\t<div class=\"row g-0 mb-3\">
\t\t\t\t\t\t<h3>A propos
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\tImaginé en 2023 par Tristan Provost et mis en service durant cette même année,
\t\t\t\t\t\tMinerva est une librairie fictive imaginée dans le but de créer un site de commerce pour le cour
\t\t\t\t\t\tde monsieur Legales.<br>
\t\t\t\t\t\tChez Minerva retrouvez des centaines (?) de livres adaptés à tous les âges et tous les goûts.
\t\t\t\t\t\tQue vous soyez plutôt science fiction ou fantasy, roman policier ou bandes dessinées Minerva
\t\t\t\t\t\taura de quoi satisfaire vos envies de lecture.
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2 col-6 offset-md-2 piedpage \">
\t\t\t\t\t<div class=\"row p-2\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 182
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous contacter</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row p-2\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\">FAQ</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2 col-6 piedpage \">
\t\t\t\t\t<div class=\"row p-2\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentionslegales");
        echo "\">Mentions légales</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row p-2\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">Conditions générales d'utilisations
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row p-2\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 197
=======
\t\t\t\tImaginé en 2023 par Tristan Provost et mis en service durant cette même année, 
\t\t\t\t\t\t\t\tMinerva est une librairie fictive imaginée dans le but de créer un site de commerce pour le cour de monsieur Legales.<br>
\t\t\t\tChez Minerva retrouvez des centaines (?) de livres adaptés à tous les âges et tous les goûts.
\t\t\t\t\t\t\t\tQue vous soyez plutôt science fiction ou fantasy, roman policier ou bandes dessinées Minerva aura de quoi satisfaire vos envies de lecture.
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-2 col-6 offset-md-2 piedpage \">
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Nous contacter</a>
\t\t\t</div>
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("faq");
        echo "\">FAQ</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-2 col-6 piedpage \">
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentionslegales");
        echo "\">Mentions légales</a>
\t\t\t</div>
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">Conditions générales d'utilisations
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"row p-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 148
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("charte");
        echo "\">
\t\t\t\t\t\t\tVos données personnelles
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
\t</footer>";
        // line 204
        $this->displayBlock('javascripts', $context, $blocks);
        // line 209
        echo "</body>
=======
\t</div>
</div></footer>";
        // line 154
        $this->displayBlock('javascripts', $context, $blocks);
        // line 156
        echo "</body></html>
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "\t<!-- Bootstrap CSS -->
\t<link href=\"https://bootswatch.com/5/lumen/bootstrap.min.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css\">
\t<link rel=\"stylesheet\"
\t\thref=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\" />
\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/stylesheet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
\t";
=======
\t\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style/carrouselCSS.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
    // line 17
=======
    // line 16
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Minerva -
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
    // line 163
=======
    // line 116
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
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

<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
    // line 204
=======
    // line 154
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
        // line 205
        echo "\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\"
\t\tintegrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\"
\t\tcrossorigin=\"anonymous\"></script>
\t";
=======
        // line 155
        echo "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/carrousel.js"), "html", null, true);
        echo "\"></script>";
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
        
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
<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
        return array (  485 => 205,  475 => 204,  457 => 163,  437 => 17,  425 => 14,  418 => 9,  408 => 8,  396 => 209,  394 => 204,  384 => 197,  377 => 193,  371 => 190,  363 => 185,  357 => 182,  335 => 163,  327 => 162,  324 => 161,  320 => 160,  306 => 149,  302 => 148,  298 => 147,  294 => 146,  284 => 139,  280 => 138,  276 => 137,  266 => 130,  262 => 129,  258 => 128,  254 => 127,  244 => 120,  240 => 119,  236 => 118,  232 => 117,  228 => 116,  224 => 115,  214 => 108,  210 => 107,  206 => 106,  202 => 105,  192 => 98,  188 => 97,  184 => 96,  162 => 76,  154 => 71,  150 => 70,  147 => 69,  141 => 66,  138 => 65,  136 => 64,  131 => 62,  125 => 59,  122 => 58,  115 => 54,  108 => 50,  105 => 49,  103 => 48,  87 => 35,  78 => 29,  74 => 28,  63 => 19,  61 => 17,  58 => 16,  56 => 8,  47 => 1,);
=======
        return array (  373 => 156,  370 => 155,  360 => 154,  342 => 116,  322 => 16,  310 => 13,  306 => 12,  300 => 8,  290 => 7,  278 => 156,  276 => 154,  267 => 148,  260 => 144,  254 => 141,  246 => 136,  240 => 133,  220 => 116,  212 => 115,  209 => 114,  205 => 113,  173 => 83,  165 => 78,  161 => 77,  158 => 76,  152 => 73,  146 => 70,  140 => 67,  137 => 66,  134 => 65,  129 => 60,  126 => 59,  119 => 55,  112 => 51,  109 => 50,  107 => 49,  87 => 32,  80 => 28,  76 => 27,  65 => 19,  62 => 18,  60 => 16,  57 => 15,  55 => 7,  47 => 1,);
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php

<head>
\t<!-- Required meta tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t{% block stylesheets %}
\t<!-- Bootstrap CSS -->
\t<link href=\"https://bootswatch.com/5/lumen/bootstrap.min.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css\">
\t<link rel=\"stylesheet\"
\t\thref=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200\" />
\t<link href=\"{{asset('style/stylesheet.css') }}\" rel=\"stylesheet\">
\t{% endblock %}
\t<title>
\t\t{% block title %}Minerva -
\t\t{% endblock %}
\t</title>
\t<link rel=\"icon\" href=\"image/logo_minerva.png\" />
</head>

<body>
\t<header>
\t\t<nav class=\"navbar\">
\t\t\t<div class=\"container-fluid \">
\t\t\t\t<div class=\"col-0 mr-2\">
\t\t\t\t\t<a class=\"navbar-brand \" href=\"{{path('index')}}\">
\t\t\t\t\t\t<img src=\"{{ asset('image/logo_minerva.png')}}\" alt=\"logo\" width=\"80px\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<div class=\"nav-item mx-auto\">
\t\t\t\t\t\t<form class=\"d-flex\" action=\"{{path('search')}}\" method=\"get\">
\t\t\t\t\t\t\t<input name=\"q\" class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
\t\t\t\t\t\t\t<button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Chercher</button>
\t\t\t\t\t\t</form>
=======
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
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"nav-item mx-auto\">
\t\t\t\t\t\t\t\t<form id=\"searchForm\" class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<input id=\"searchInput\" class=\"form-control me-sm-2 col-12\" type=\"text\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t\t<button id=\"searchButton\" class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Chercher</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
\t\t\t\t\t</div>
\t\t\t\t</div>


<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
\t\t\t\t<div class=\"nav-item col-0 ml-2\">
\t\t\t\t\t<a class=\"text-secondary\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\" aria-expanded=\"false\">
\t\t\t\t\t\t<i class=\"bi bi-person-square\" style=\"font-size: 2rem;\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t{% if not is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-black\" href=\"{{path('app_login')}}\">Se connecter
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-black\" href=\"{{path('app_register')}}\">S'inscrire
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('monPanier')}}\">Panier</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('mes-favorie')}}\">Favorie</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MOD')%}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('ajout')}}\">Ajout</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">
\t\t\t\t\t\t\t\t{{app.user.email}}
\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle-fill text-white\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
=======
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
\t\t\t\t\t\t\t\t{#<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('mes-favorie')}}\">Favorie</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>#}
\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') or is_granted('ROLE_MOD')%}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('ajout')}}\">Ajout</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('ajoutDeGenre')}}\">Ajout de genres</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('ajoutDeType')}}\">Ajout de types</a>
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
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t</nav>
<<<<<<< HEAD:var/cache/dev/twig/f4/f41cd0e7a1658a1ecb2587ed20fdfc64.php
\t</header>


\t<nav class=\"navbar navbar-expand-lg\" id=\"categorie\">
\t\t<div class=\"container-fluid\">
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\"
\t\t\t\taria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t\t<ul class=\"navbar-nav me-auto ms-auto\">
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Littérature Classique</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Theatre</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Aventure</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Science fiction</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Romans</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Aventure</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Post-Apocalyptique</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Dystopie</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Fantasy</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">BD</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Aventure</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Humoristique</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Historique</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Science fiction</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Western</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Fantasy</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Manga</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Shonen</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Shojo</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Seinen</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Josei</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Poésie</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Haïku</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Surréaliste</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Engagé</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown mx-3\">
\t\t\t\t\t\t<a class=\"nav-link catexte\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\"
\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">Mythe et Légendes</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Religions</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Mythologie Grecque</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Mythologie Nordique</a>
\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path('index')}}\">Mythologie Egyptienne</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>




\t{% for message in app.flashes('notice') %}
\t<h2 class=\"alert alerte text-center mt-4 mb-4\" role=\"alert\">
\t\t{{ message }}
\t</h2>{% endfor %}{% block body %}{% endblock %}<footer>
\t\t<div class=\"container-fluid py-4\">
\t\t\t<div class=\"row g-0\">
\t\t\t\t<div class=\"col-md-4 col-12 offset-md-1 \">
\t\t\t\t\t<div class=\"row g-0 mb-3\">
\t\t\t\t\t\t<h3>A propos
\t\t\t\t\t\t</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\tImaginé en 2023 par Tristan Provost et mis en service durant cette même année,
\t\t\t\t\t\tMinerva est une librairie fictive imaginée dans le but de créer un site de commerce pour le cour
\t\t\t\t\t\tde monsieur Legales.<br>
\t\t\t\t\t\tChez Minerva retrouvez des centaines (?) de livres adaptés à tous les âges et tous les goûts.
\t\t\t\t\t\tQue vous soyez plutôt science fiction ou fantasy, roman policier ou bandes dessinées Minerva
\t\t\t\t\t\taura de quoi satisfaire vos envies de lecture.
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2 col-6 offset-md-2 piedpage \">
\t\t\t\t\t<div class=\"row p-2\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('contact')}}\">Nous contacter</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row p-2\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('faq')}}\">FAQ</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-2 col-6 piedpage \">
\t\t\t\t\t<div class=\"row p-2\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('mentionslegales')}}\">Mentions légales</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row p-2\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('cgu')}}\">Conditions générales d'utilisations
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row p-2\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('charte')}}\">
\t\t\t\t\t\t\tVos données personnelles
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>{% block javascripts %}
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\"
\t\tintegrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\"
\t\tcrossorigin=\"anonymous\"></script>
\t{% endblock %}
</body>

</html>", "base.html.twig", "/var/www/html/Minerva3/templates/base.html.twig");
=======
\t</body>
</html></header><nav class=\"navbar navbar-expand-lg\" id=\"categorie\">
<div class=\"container-fluid\">
\t<div class=\"collapse navbar-collapse\">
\t\t<ul class=\"navbar-nav me-auto ms-auto\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"#\">Littérature Classique</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"#\">Romans</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"#\">BD</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"#\">Manga</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"#\">Poésie</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item mx-3\">
\t\t\t\t<a class=\"nav-link catexte\" href=\"#\">Mythe et Légendes</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</div></nav>{% for message in app.flashes('notice') %}
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
\t\t\t\t\t\t\t\tMinerva est une librairie fictive imaginée dans le but de créer un site de commerce pour le cour de monsieur Legales.<br>
\t\t\t\tChez Minerva retrouvez des centaines (?) de livres adaptés à tous les âges et tous les goûts.
\t\t\t\t\t\t\t\tQue vous soyez plutôt science fiction ou fantasy, roman policier ou bandes dessinées Minerva aura de quoi satisfaire vos envies de lecture.
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

", "base.html.twig", "/var/www/html/Minerva3/templates/base.html.twig");
>>>>>>> cdfe72354769ebadb4b0a9125a50c266b3d18639:var/cache/dev/twig/9e/9e0fa8d500fa34a3d39422dd778c6831.php
    }
}
