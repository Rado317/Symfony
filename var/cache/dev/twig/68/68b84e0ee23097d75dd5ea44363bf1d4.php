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

/* home/index.html.twig */
class __TwigTemplate_c9a9e19a9bd98f0c56b357aca71dc6a2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "Plateforme de Revendications Citoyennes";
        
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
        yield "<div class=\"container mt-4\">
    <div class=\"jumbotron bg-light p-5 rounded\">
        <h1 class=\"display-4\">🏛️ Plateforme de Revendications Citoyennes</h1>
        <p class=\"lead\">Découvrez les revendications, soutenez les causes qui vous tiennent à cœur et participez au débat public.</p>
        <hr class=\"my-4\">
        <p>Explorez les différentes catégories de revendications et ajoutez votre soutien aux initiatives qui vous semblent importantes.</p>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revendication_new");
        yield "\" class=\"btn btn-primary btn-lg\">➕ Proposer une revendication</a>
    </div>

    <h2 class=\"mb-4\">📋 Liste des Revendications</h2>

    <!-- Filtres -->
    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-md-4\">
                    <label for=\"categorie\" class=\"form-label\">Filtrer par catégorie</label>
                    <select name=\"categorie\" id=\"categorie\" class=\"form-select\">
                        <option value=\"\">Toutes les catégories</option>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 26
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 26), "html", null, true);
            yield "\" ";
            yield ((((isset($context["selectedCategorie"]) || array_key_exists("selectedCategorie", $context) ? $context["selectedCategorie"] : (function () { throw new RuntimeError('Variable "selectedCategorie" does not exist.', 26, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 26))) ? ("selected") : (""));
            yield ">
                                ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 27), "html", null, true);
            yield "
                            </option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "                    </select>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"statut\" class=\"form-label\">Filtrer par statut</label>
                    <select name=\"statut\" id=\"statut\" class=\"form-select\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"en_attente\" ";
        // line 36
        yield ((((isset($context["selectedStatut"]) || array_key_exists("selectedStatut", $context) ? $context["selectedStatut"] : (function () { throw new RuntimeError('Variable "selectedStatut" does not exist.', 36, $this->source); })()) == "en_attente")) ? ("selected") : (""));
        yield ">⏳ En attente</option>
                        <option value=\"validee\" ";
        // line 37
        yield ((((isset($context["selectedStatut"]) || array_key_exists("selectedStatut", $context) ? $context["selectedStatut"] : (function () { throw new RuntimeError('Variable "selectedStatut" does not exist.', 37, $this->source); })()) == "validee")) ? ("selected") : (""));
        yield ">✅ Validée</option>
                        <option value=\"rejetee\" ";
        // line 38
        yield ((((isset($context["selectedStatut"]) || array_key_exists("selectedStatut", $context) ? $context["selectedStatut"] : (function () { throw new RuntimeError('Variable "selectedStatut" does not exist.', 38, $this->source); })()) == "rejetee")) ? ("selected") : (""));
        yield ">❌ Rejetée</option>
                    </select>
                </div>
                <div class=\"col-md-4 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-primary\">🔍 Filtrer</button>
                    <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-secondary ms-2\">🔄 Réinitialiser</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Liste des revendications -->
    <div class=\"row\">
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["revendications"]) || array_key_exists("revendications", $context) ? $context["revendications"] : (function () { throw new RuntimeError('Variable "revendications" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["revendication"]) {
            // line 52
            yield "            <div class=\"col-md-6 mb-4\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "titre", [], "any", false, false, false, 55), "html", null, true);
            yield "</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\">
                            📁 Catégorie: ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "categorie", [], "any", false, false, false, 57), "nom", [], "any", false, false, false, 57), "html", null, true);
            yield " | 
                            📊 Statut: 
                            <span class=\"badge 
                                ";
            // line 60
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "statut", [], "any", false, false, false, 60) == "validee")) {
                yield "bg-success
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 61
$context["revendication"], "statut", [], "any", false, false, false, 61) == "rejetee")) {
                yield "bg-danger
                                ";
            } else {
                // line 62
                yield "bg-warning";
            }
            yield "\">
                                ";
            // line 63
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "statut", [], "any", false, false, false, 63) == "validee")) {
                yield "✅ Validée
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 64
$context["revendication"], "statut", [], "any", false, false, false, 64) == "rejetee")) {
                yield "❌ Rejetée
                                ";
            } else {
                // line 65
                yield "⏳ En attente";
            }
            // line 66
            yield "                            </span>
                        </h6>
                        <p class=\"card-text\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "description", [], "any", false, false, false, 68), 0, 150), "html", null, true);
            yield "...</p>
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <small class=\"text-muted\">
                                📅 ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "dateCreation", [], "any", false, false, false, 71), "d/m/Y"), "html", null, true);
            yield " | 
                                👍 ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "soutiens", [], "any", false, false, false, 72)), "html", null, true);
            yield " soutien(s)
                            </small>
                            <div>
                                <a href=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revendication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["revendication"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\" 
                                   class=\"btn btn-outline-primary btn-sm\">👁️ Voir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 82
        if (!$context['_iterated']) {
            // line 83
            yield "            <div class=\"col-12\">
                <div class=\"alert alert-info\">
                    📝 Aucune revendication trouvée avec ces critères.
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['revendication'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "    </div>
</div>
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
        return "home/index.html.twig";
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
        return array (  271 => 89,  260 => 83,  258 => 82,  246 => 75,  240 => 72,  236 => 71,  230 => 68,  226 => 66,  223 => 65,  218 => 64,  214 => 63,  209 => 62,  204 => 61,  200 => 60,  194 => 57,  189 => 55,  184 => 52,  179 => 51,  168 => 43,  160 => 38,  156 => 37,  152 => 36,  144 => 30,  135 => 27,  128 => 26,  124 => 25,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Plateforme de Revendications Citoyennes{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"jumbotron bg-light p-5 rounded\">
        <h1 class=\"display-4\">🏛️ Plateforme de Revendications Citoyennes</h1>
        <p class=\"lead\">Découvrez les revendications, soutenez les causes qui vous tiennent à cœur et participez au débat public.</p>
        <hr class=\"my-4\">
        <p>Explorez les différentes catégories de revendications et ajoutez votre soutien aux initiatives qui vous semblent importantes.</p>
        <a href=\"{{ path('app_revendication_new') }}\" class=\"btn btn-primary btn-lg\">➕ Proposer une revendication</a>
    </div>

    <h2 class=\"mb-4\">📋 Liste des Revendications</h2>

    <!-- Filtres -->
    <div class=\"card mb-4\">
        <div class=\"card-body\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-md-4\">
                    <label for=\"categorie\" class=\"form-label\">Filtrer par catégorie</label>
                    <select name=\"categorie\" id=\"categorie\" class=\"form-select\">
                        <option value=\"\">Toutes les catégories</option>
                        {% for categorie in categories %}
                            <option value=\"{{ categorie.id }}\" {{ selectedCategorie == categorie.id ? 'selected' : '' }}>
                                {{ categorie.nom }}
                            </option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"col-md-4\">
                    <label for=\"statut\" class=\"form-label\">Filtrer par statut</label>
                    <select name=\"statut\" id=\"statut\" class=\"form-select\">
                        <option value=\"\">Tous les statuts</option>
                        <option value=\"en_attente\" {{ selectedStatut == 'en_attente' ? 'selected' : '' }}>⏳ En attente</option>
                        <option value=\"validee\" {{ selectedStatut == 'validee' ? 'selected' : '' }}>✅ Validée</option>
                        <option value=\"rejetee\" {{ selectedStatut == 'rejetee' ? 'selected' : '' }}>❌ Rejetée</option>
                    </select>
                </div>
                <div class=\"col-md-4 d-flex align-items-end\">
                    <button type=\"submit\" class=\"btn btn-primary\">🔍 Filtrer</button>
                    <a href=\"{{ path('app_home') }}\" class=\"btn btn-secondary ms-2\">🔄 Réinitialiser</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Liste des revendications -->
    <div class=\"row\">
        {% for revendication in revendications %}
            <div class=\"col-md-6 mb-4\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ revendication.titre }}</h5>
                        <h6 class=\"card-subtitle mb-2 text-muted\">
                            📁 Catégorie: {{ revendication.categorie.nom }} | 
                            📊 Statut: 
                            <span class=\"badge 
                                {% if revendication.statut == 'validee' %}bg-success
                                {% elseif revendication.statut == 'rejetee' %}bg-danger
                                {% else %}bg-warning{% endif %}\">
                                {% if revendication.statut == 'validee' %}✅ Validée
                                {% elseif revendication.statut == 'rejetee' %}❌ Rejetée
                                {% else %}⏳ En attente{% endif %}
                            </span>
                        </h6>
                        <p class=\"card-text\">{{ revendication.description|slice(0, 150) }}...</p>
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <small class=\"text-muted\">
                                📅 {{ revendication.dateCreation|date('d/m/Y') }} | 
                                👍 {{ revendication.soutiens|length }} soutien(s)
                            </small>
                            <div>
                                <a href=\"{{ path('app_revendication_show', {'id': revendication.id}) }}\" 
                                   class=\"btn btn-outline-primary btn-sm\">👁️ Voir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <div class=\"alert alert-info\">
                    📝 Aucune revendication trouvée avec ces critères.
                </div>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}", "home/index.html.twig", "/home/voay/Examen_Symfony_L1C/templates/home/index.html.twig");
    }
}
