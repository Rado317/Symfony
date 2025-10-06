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

/* revendication/index.html.twig */
class __TwigTemplate_2984711d0b2b70cc92321752f519a1f7 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "revendication/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "revendication/index.html.twig"));

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

        yield "Gestion des Revendications";
        
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
        yield "<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card shadow-lg\">
                <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                    <div>
                        <h1 class=\"h3 mb-1\">
                            <i class=\"fas fa-bullhorn me-2\"></i>
                            Gestion des Revendications
                        </h1>
                        <p class=\"mb-0 opacity-75\">Liste de toutes les revendications enregistrées</p>
                    </div>
                    <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revendication_new");
        yield "\" class=\"btn btn-light btn-sm\">
                        <i class=\"fas fa-plus me-1\"></i>
                        Nouvelle Revendication
                    </a>
                </div>
                
                <div class=\"card-body\">
                    ";
        // line 25
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["revendications"]) || array_key_exists("revendications", $context) ? $context["revendications"] : (function () { throw new RuntimeError('Variable "revendications" does not exist.', 25, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-striped align-middle\">
                            <thead class=\"table-dark\">
                                <tr>
                                    <th width=\"80\">ID</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th width=\"160\">Date de Création</th>
                                    <th width=\"120\">Statut</th>
                                    <th width=\"150\" class=\"text-center\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["revendications"]) || array_key_exists("revendications", $context) ? $context["revendications"] : (function () { throw new RuntimeError('Variable "revendications" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["revendication"]) {
                // line 40
                yield "                                <tr>
                                    <td>
                                        <span class=\"badge bg-secondary\">#";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "id", [], "any", false, false, false, 42), "html", null, true);
                yield "</span>
                                    </td>
                                    <td>
                                        <strong class=\"text-primary\">";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "titre", [], "any", false, false, false, 45), "html", null, true);
                yield "</strong>
                                    </td>
                                    <td>
                                        <span class=\"text-muted description-preview\" 
                                              data-bs-toggle=\"tooltip\" 
                                              title=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "description", [], "any", false, false, false, 50), "html", null, true);
                yield "\">
                                            ";
                // line 51
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "description", [], "any", false, false, false, 51)) > 80)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "description", [], "any", false, false, false, 51), 0, 80) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "description", [], "any", false, false, false, 51), "html", null, true)));
                yield "
                                        </span>
                                    </td>
                                    <td>
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-calendar me-1\"></i>
                                            ";
                // line 57
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "dateCreation", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "dateCreation", [], "any", false, false, false, 57), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
                yield "
                                        </small>
                                    </td>
                                    <td>
                                        ";
                // line 61
                $context["status_class"] = ["En attente" => "warning", "Validé" => "success", "Rejeté" => "danger", "En cours" => "info"];
                // line 67
                yield "                                        <span class=\"badge bg-";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["status_class"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "statut", [], "any", false, false, false, 67), [], "array", true, true, false, 67) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_class"]) || array_key_exists("status_class", $context) ? $context["status_class"] : (function () { throw new RuntimeError('Variable "status_class" does not exist.', 67, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "statut", [], "any", false, false, false, 67), [], "array", false, false, false, 67)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["status_class"]) || array_key_exists("status_class", $context) ? $context["status_class"] : (function () { throw new RuntimeError('Variable "status_class" does not exist.', 67, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "statut", [], "any", false, false, false, 67), [], "array", false, false, false, 67), "html", null, true)) : ("secondary"));
                yield "\">
                                            ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "statut", [], "any", false, false, false, 68), "html", null, true);
                yield "
                                        </span>
                                    </td>
                                    <td>
                                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                                            <a href=\"";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revendication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-outline-info\" 
                                               data-bs-toggle=\"tooltip\" 
                                               title=\"Voir les détails\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revendication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                yield "\" 
                                               class=\"btn btn-outline-warning\" 
                                               data-bs-toggle=\"tooltip\" 
                                               title=\"Modifier\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['revendication'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            yield "                            </tbody>
                        </table>
                    </div>
                    ";
        } else {
            // line 93
            yield "                    <div class=\"text-center py-5\">
                        <div class=\"empty-state\">
                            <i class=\"fas fa-bullhorn fa-4x text-muted mb-3\"></i>
                            <h3 class=\"text-muted\">Aucune revendication trouvée</h3>
                            <p class=\"text-muted mb-4\">Commencez par créer votre première revendication.</p>
                            <a href=\"";
            // line 98
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revendication_new");
            yield "\" class=\"btn btn-primary btn-lg\">
                                <i class=\"fas fa-plus me-2\"></i>
                                Créer une revendication
                            </a>
                        </div>
                    </div>
                    ";
        }
        // line 105
        yield "                </div>

                ";
        // line 107
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["revendications"]) || array_key_exists("revendications", $context) ? $context["revendications"] : (function () { throw new RuntimeError('Variable "revendications" does not exist.', 107, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "                <div class=\"card-footer bg-light\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"text-muted\">
                            <small>Total : <strong>";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["revendications"]) || array_key_exists("revendications", $context) ? $context["revendications"] : (function () { throw new RuntimeError('Variable "revendications" does not exist.', 111, $this->source); })())), "html", null, true);
            yield "</strong> revendication(s)</small>
                        </div>
                        <a href=\"";
            // line 113
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revendication_new");
            yield "\" class=\"btn btn-primary btn-sm\">
                            <i class=\"fas fa-plus me-1\"></i>
                            Ajouter une revendication
                        </a>
                    </div>
                </div>
                ";
        }
        // line 120
        yield "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 127
        yield "<style>
.card {
    border: none;
    border-radius: 15px;
}

.card-header {
    border-radius: 15px 15px 0 0 !important;
}

.card-footer {
    border-radius: 0 0 15px 15px !important;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
}

.table th {
    border-bottom: 2px solid #dee2e6;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.875rem;
    letter-spacing: 0.5px;
}

.table-hover tbody tr:hover {
    background-color: rgba(0, 123, 255, 0.05) !important;
    transform: translateY(-1px);
    transition: all 0.2s ease;
}

.description-preview {
    cursor: help;
    display: inline-block;
    max-width: 300px;
}

.badge {
    font-size: 0.75em;
    font-weight: 500;
    padding: 0.5em 0.75em;
}

.btn-group .btn {
    border-radius: 6px;
    margin: 0 2px;
}

.empty-state {
    padding: 3rem 1rem;
}

/* Animation pour les lignes du tableau */
.table tbody tr {
    animation: fadeIn 0.3s ease-in;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .table-responsive {
        font-size: 0.875rem;
    }
    
    .description-preview {
        max-width: 150px;
    }
    
    .card-header .d-flex {
        flex-direction: column;
        text-align: center;
    }
    
    .card-header .btn {
        margin-top: 1rem;
    }
    
    .btn-group .btn {
        padding: 0.25rem 0.5rem;
    }
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 219
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 220
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialiser les tooltips Bootstrap
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>
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
        return "revendication/index.html.twig";
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
        return array (  416 => 220,  403 => 219,  302 => 127,  289 => 126,  274 => 120,  264 => 113,  259 => 111,  254 => 108,  252 => 107,  248 => 105,  238 => 98,  231 => 93,  225 => 89,  209 => 79,  200 => 73,  192 => 68,  187 => 67,  185 => 61,  178 => 57,  169 => 51,  165 => 50,  157 => 45,  151 => 42,  147 => 40,  143 => 39,  128 => 26,  126 => 25,  116 => 18,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Revendications{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card shadow-lg\">
                <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                    <div>
                        <h1 class=\"h3 mb-1\">
                            <i class=\"fas fa-bullhorn me-2\"></i>
                            Gestion des Revendications
                        </h1>
                        <p class=\"mb-0 opacity-75\">Liste de toutes les revendications enregistrées</p>
                    </div>
                    <a href=\"{{ path('app_revendication_new') }}\" class=\"btn btn-light btn-sm\">
                        <i class=\"fas fa-plus me-1\"></i>
                        Nouvelle Revendication
                    </a>
                </div>
                
                <div class=\"card-body\">
                    {% if revendications is not empty %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-striped align-middle\">
                            <thead class=\"table-dark\">
                                <tr>
                                    <th width=\"80\">ID</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th width=\"160\">Date de Création</th>
                                    <th width=\"120\">Statut</th>
                                    <th width=\"150\" class=\"text-center\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for revendication in revendications %}
                                <tr>
                                    <td>
                                        <span class=\"badge bg-secondary\">#{{ revendication.id }}</span>
                                    </td>
                                    <td>
                                        <strong class=\"text-primary\">{{ revendication.titre }}</strong>
                                    </td>
                                    <td>
                                        <span class=\"text-muted description-preview\" 
                                              data-bs-toggle=\"tooltip\" 
                                              title=\"{{ revendication.description }}\">
                                            {{ revendication.description|length > 80 ? revendication.description|slice(0, 80) ~ '...' : revendication.description }}
                                        </span>
                                    </td>
                                    <td>
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-calendar me-1\"></i>
                                            {{ revendication.dateCreation ? revendication.dateCreation|date('d/m/Y H:i') : 'N/A' }}
                                        </small>
                                    </td>
                                    <td>
                                        {% set status_class = {
                                            'En attente': 'warning',
                                            'Validé': 'success',
                                            'Rejeté': 'danger',
                                            'En cours': 'info'
                                        } %}
                                        <span class=\"badge bg-{{ status_class[revendication.statut] ?? 'secondary' }}\">
                                            {{ revendication.statut }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                                            <a href=\"{{ path('app_revendication_show', {'id': revendication.id}) }}\" 
                                               class=\"btn btn-outline-info\" 
                                               data-bs-toggle=\"tooltip\" 
                                               title=\"Voir les détails\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"{{ path('app_revendication_edit', {'id': revendication.id}) }}\" 
                                               class=\"btn btn-outline-warning\" 
                                               data-bs-toggle=\"tooltip\" 
                                               title=\"Modifier\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    {% else %}
                    <div class=\"text-center py-5\">
                        <div class=\"empty-state\">
                            <i class=\"fas fa-bullhorn fa-4x text-muted mb-3\"></i>
                            <h3 class=\"text-muted\">Aucune revendication trouvée</h3>
                            <p class=\"text-muted mb-4\">Commencez par créer votre première revendication.</p>
                            <a href=\"{{ path('app_revendication_new') }}\" class=\"btn btn-primary btn-lg\">
                                <i class=\"fas fa-plus me-2\"></i>
                                Créer une revendication
                            </a>
                        </div>
                    </div>
                    {% endif %}
                </div>

                {% if revendications is not empty %}
                <div class=\"card-footer bg-light\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"text-muted\">
                            <small>Total : <strong>{{ revendications|length }}</strong> revendication(s)</small>
                        </div>
                        <a href=\"{{ path('app_revendication_new') }}\" class=\"btn btn-primary btn-sm\">
                            <i class=\"fas fa-plus me-1\"></i>
                            Ajouter une revendication
                        </a>
                    </div>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
<style>
.card {
    border: none;
    border-radius: 15px;
}

.card-header {
    border-radius: 15px 15px 0 0 !important;
}

.card-footer {
    border-radius: 0 0 15px 15px !important;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
}

.table th {
    border-bottom: 2px solid #dee2e6;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.875rem;
    letter-spacing: 0.5px;
}

.table-hover tbody tr:hover {
    background-color: rgba(0, 123, 255, 0.05) !important;
    transform: translateY(-1px);
    transition: all 0.2s ease;
}

.description-preview {
    cursor: help;
    display: inline-block;
    max-width: 300px;
}

.badge {
    font-size: 0.75em;
    font-weight: 500;
    padding: 0.5em 0.75em;
}

.btn-group .btn {
    border-radius: 6px;
    margin: 0 2px;
}

.empty-state {
    padding: 3rem 1rem;
}

/* Animation pour les lignes du tableau */
.table tbody tr {
    animation: fadeIn 0.3s ease-in;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .table-responsive {
        font-size: 0.875rem;
    }
    
    .description-preview {
        max-width: 150px;
    }
    
    .card-header .d-flex {
        flex-direction: column;
        text-align: center;
    }
    
    .card-header .btn {
        margin-top: 1rem;
    }
    
    .btn-group .btn {
        padding: 0.25rem 0.5rem;
    }
}
</style>
{% endblock %}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialiser les tooltips Bootstrap
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
});
</script>
{% endblock %}", "revendication/index.html.twig", "/home/voay/Examen_Symfony_L1C/templates/revendication/index.html.twig");
    }
}
