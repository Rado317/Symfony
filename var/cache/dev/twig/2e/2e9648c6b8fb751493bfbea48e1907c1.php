<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* categorie/index.html.twig */
class __TwigTemplate_d0871c4ebb089ad244bf512442389a7a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste des catégories";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container mt-5\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"text-primary fw-bold\">📂 Liste des catégories</h1>
        <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_new");
        yield "\" class=\"btn btn-success\">
            ➕ Ajouter une catégorie
        </a>
    </div>

    ";
        // line 14
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 14, $this->source); })()))) {
            // line 15
            yield "        <div class=\"alert alert-warning text-center\">
            Aucune catégorie trouvée 😢
        </div>
    ";
        } else {
            // line 19
            yield "        <div class=\"table-responsive shadow-sm rounded\">
            <table class=\"table table-hover align-middle\">
                <thead class=\"table-dark\">
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Nom</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\" class=\"text-center\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 31
                yield "                        <tr>
                            <td class=\"fw-bold\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 32), "html", null, true);
                yield "</td>
                            <td>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 33), "html", null, true);
                yield "</td>
                            <td>";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 34), "html", null, true);
                yield "</td>
                            <td class=\"text-center\">
                                <a href=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-info text-white me-2\">
                                    <i class=\"bi bi-eye\"></i> Voir
                                </a>
                                <a href=\"";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-warning text-white\">
                                    <i class=\"bi bi-pencil\"></i> Modifier
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "                </tbody>
            </table>
        </div>
    ";
        }
        // line 49
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "categorie/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  178 => 49,  172 => 45,  160 => 39,  154 => 36,  149 => 34,  145 => 33,  141 => 32,  138 => 31,  134 => 30,  121 => 19,  115 => 15,  113 => 14,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des catégories{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"text-primary fw-bold\">📂 Liste des catégories</h1>
        <a href=\"{{ path('app_categorie_new') }}\" class=\"btn btn-success\">
            ➕ Ajouter une catégorie
        </a>
    </div>

    {% if categories is empty %}
        <div class=\"alert alert-warning text-center\">
            Aucune catégorie trouvée 😢
        </div>
    {% else %}
        <div class=\"table-responsive shadow-sm rounded\">
            <table class=\"table table-hover align-middle\">
                <thead class=\"table-dark\">
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Nom</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\" class=\"text-center\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for categorie in categories %}
                        <tr>
                            <td class=\"fw-bold\">{{ categorie.id }}</td>
                            <td>{{ categorie.nom }}</td>
                            <td>{{ categorie.description }}</td>
                            <td class=\"text-center\">
                                <a href=\"{{ path('app_categorie_show', {'id': categorie.id}) }}\" class=\"btn btn-sm btn-info text-white me-2\">
                                    <i class=\"bi bi-eye\"></i> Voir
                                </a>
                                <a href=\"{{ path('app_categorie_edit', {'id': categorie.id}) }}\" class=\"btn btn-sm btn-warning text-white\">
                                    <i class=\"bi bi-pencil\"></i> Modifier
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% endif %}
</div>
{% endblock %}
", "categorie/index.html.twig", "/home/voay/Examen_Symfony_L1C/templates/categorie/index.html.twig");
    }
}
