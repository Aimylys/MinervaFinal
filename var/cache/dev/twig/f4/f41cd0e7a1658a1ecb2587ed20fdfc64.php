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
class __TwigTemplate_192a8728762fa4e718b9ec1121f4ff5f extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("image/logo_minerva.png"), "html", null, true);
        echo "\" alt=\"logo\" width=\"80px\">
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<div class=\"nav-item mx-auto\">
\t\t\t\t\t\t<form class=\"d-flex\" action=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"get\">
\t\t\t\t\t\t\t<input name=\"q\" class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
\t\t\t\t\t\t\t<button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Chercher</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>


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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'inscrire
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
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
            echo "
\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle-fill text-white\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t</nav>
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
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
\t</h2>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        $this->displayBlock('body', $context, $blocks);
        echo "<footer>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("charte");
        echo "\">
\t\t\t\t\t\t\tVos données personnelles
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>";
        // line 204
        $this->displayBlock('javascripts', $context, $blocks);
        // line 209
        echo "</body>

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
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
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

    // line 163
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

    // line 204
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 205
        echo "\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js\"
\t\tintegrity=\"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ\"
\t\tcrossorigin=\"anonymous\"></script>
\t";
        
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
        return array (  485 => 205,  475 => 204,  457 => 163,  437 => 17,  425 => 14,  418 => 9,  408 => 8,  396 => 209,  394 => 204,  384 => 197,  377 => 193,  371 => 190,  363 => 185,  357 => 182,  335 => 163,  327 => 162,  324 => 161,  320 => 160,  306 => 149,  302 => 148,  298 => 147,  294 => 146,  284 => 139,  280 => 138,  276 => 137,  266 => 130,  262 => 129,  258 => 128,  254 => 127,  244 => 120,  240 => 119,  236 => 118,  232 => 117,  228 => 116,  224 => 115,  214 => 108,  210 => 107,  206 => 106,  202 => 105,  192 => 98,  188 => 97,  184 => 96,  162 => 76,  154 => 71,  150 => 70,  147 => 69,  141 => 66,  138 => 65,  136 => 64,  131 => 62,  125 => 59,  122 => 58,  115 => 54,  108 => 50,  105 => 49,  103 => 48,  87 => 35,  78 => 29,  74 => 28,  63 => 19,  61 => 17,  58 => 16,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">

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
\t\t\t\t\t</div>
\t\t\t\t</div>


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
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t</nav>
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
    }
}
