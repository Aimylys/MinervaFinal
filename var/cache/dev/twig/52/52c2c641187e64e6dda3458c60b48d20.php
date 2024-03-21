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

/* base/index.html.twig */
class __TwigTemplate_db5733bda1bc68814d8030d484bde291 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "base/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "Accueil
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
\t<div class=\"carrousel-container my-5\">
\t\t<span class=\"material-symbols-outlined arrow left-arrow\" id=\"btavant\">
\t\t\tnavigate_before
\t\t</span>
\t\t<ul id=\"carrousel\">
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/festiparis.jpg\" class=\"d-block w-100\" alt=\"paris\">
\t\t\t</li>
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/bdangouleme.jpeg\" class=\"d-block w-100\" alt=\"bdangoueleme\">
\t\t\t</li>
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/saintmalo.jpeg\" class=\"d-block w-100\" alt=\"saintmalo\">
\t\t\t</li>
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/salonlivre.jpeg\" class=\"d-block w-100\" alt=\"salonlivre\">
\t\t\t</li>
\t\t</ul>
\t\t<span class=\"material-symbols-outlined arrow right-arrow\" id=\"btafter\">
\t\t\tnavigate_next
\t\t</span>
\t</div>


\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livre"]) || array_key_exists("livre", $context) ? $context["livre"] : (function () { throw new RuntimeError('Variable "livre" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 35
            echo "\t\t\t<div class=\"card m-2\" style=\"max-width: 540px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"image/couverture/";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "couverture", [], "any", false, false, false, 38), "html", null, true);
            echo "\" alt=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "couverture", [], "any", false, false, false, 38), "html", null, true);
            echo " class=\"img-fluid rounded-start\">
\t\t\t\t\t\t<p class=\"card-text mt-4 ms-2\">
\t\t\t\t\t\t\t<small class=\"text-muted\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "editeur", [], "any", false, false, false, 40), "html", null, true);
            echo "</small>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            // line 45
            echo "\t\t\t\t\t\t<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t<strong>";
            // line 46
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "prix", [], "any", false, false, false, 46), 2), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<sup>€</sup>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "titre", [], "any", false, false, false, 53), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<p class=\"card-text mt-3\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "auteur", [], "any", false, false, false, 54), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<p class=\"card-text mt-4 overflow-auto\" style=\"height: 282px\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "resume", [], "any", false, false, false, 55), "html", null, true);
            echo "</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t";
            // line 60
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 61
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "\t\t\t\t\t\t\t";
                    // line 75
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 76
                    echo "\t\t\t\t\t\t\t";
                    // line 81
                    echo "\t\t\t\t\t\t";
                }
                // line 82
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\topen_in_new
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutPanier", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tACHETER
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 93
            echo "\t\t\t\t\t";
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 94
                echo "\t\t\t\t\t\t";
                // line 99
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detail", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 99)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\topen_in_new
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 104)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tACHETER
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            // line 110
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base/index.html.twig";
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
        return array (  234 => 113,  226 => 110,  217 => 104,  208 => 99,  206 => 94,  203 => 93,  194 => 87,  185 => 82,  182 => 81,  180 => 76,  177 => 75,  175 => 62,  172 => 61,  170 => 60,  162 => 55,  158 => 54,  154 => 53,  144 => 46,  141 => 45,  136 => 40,  129 => 38,  124 => 35,  120 => 34,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{parent()}}Accueil
{% endblock %}

{% block body %}

\t<div class=\"carrousel-container my-5\">
\t\t<span class=\"material-symbols-outlined arrow left-arrow\" id=\"btavant\">
\t\t\tnavigate_before
\t\t</span>
\t\t<ul id=\"carrousel\">
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/festiparis.jpg\" class=\"d-block w-100\" alt=\"paris\">
\t\t\t</li>
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/bdangouleme.jpeg\" class=\"d-block w-100\" alt=\"bdangoueleme\">
\t\t\t</li>
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/saintmalo.jpeg\" class=\"d-block w-100\" alt=\"saintmalo\">
\t\t\t</li>
\t\t\t<li class=\"carou\">
\t\t\t\t<img src=\"image/salonlivre.jpeg\" class=\"d-block w-100\" alt=\"salonlivre\">
\t\t\t</li>
\t\t</ul>
\t\t<span class=\"material-symbols-outlined arrow right-arrow\" id=\"btafter\">
\t\t\tnavigate_next
\t\t</span>
\t</div>


\t<div class=\"d-flex flex-wrap justify-content-center\">
\t\t{% for l in livre %}
\t\t\t<div class=\"card m-2\" style=\"max-width: 540px;\">
\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<img src=\"image/couverture/{{l.couverture}}\" alt={{l.couverture}} class=\"img-fluid rounded-start\">
\t\t\t\t\t\t<p class=\"card-text mt-4 ms-2\">
\t\t\t\t\t\t\t<small class=\"text-muted\">{{l.editeur}}</small>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t{#<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t<small class=\"text-muted\">{{l.format}}</small>
\t\t\t\t\t\t</p>#}
\t\t\t\t\t\t<p class=\"card-text ms-2\">
\t\t\t\t\t\t\t<strong>{{l.prix|number_format(2)}}
\t\t\t\t\t\t\t\t<sup>€</sup>
\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">{{l.titre}}</h4>
\t\t\t\t\t\t\t<p class=\"card-text mt-3\">{{l.auteur}}</p>
\t\t\t\t\t\t\t<p class=\"card-text mt-4 overflow-auto\" style=\"height: 282px\">{{l.resume}}</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t{% if is_granted ('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t{#{% if l in app.user.favories %}
\t\t\t\t\t\t\t\t<a href=\"{{path('favorie', {'id': l.id, 'action': 'supprimer'}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\tbookmark_added
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<a href=\"{{path('favorie', {'id': l.id, 'action': 'ajouter'}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\t\tbookmark_add
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}#}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{#<button class=\"btn btn-secondary\">
\t\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\t\tbookmark
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</button>#}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<a href=\"{{path('detail', {'id': l.id}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\topen_in_new
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{path('ajoutPanier', {'id': l.id}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tACHETER
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if not is_granted ('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t{#<a href=\"{{path('app_login', {'id': l.id}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\tbookmark
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>#}
\t\t\t\t\t\t<a href=\"{{path('detail', {'id': l.id}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span class=\"material-symbols-outlined\">
\t\t\t\t\t\t\t\topen_in_new
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{path('app_login', {'id': l.id}) }}\" class=\"btn btn-secondary\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\tACHETER
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>


{% endblock %}

", "base/index.html.twig", "/var/www/html/Minerva3/templates/base/index.html.twig");
    }
}
