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

/* soutient/index.html.twig */
class __TwigTemplate_e39ccb9c9e491362b9b3a930f18e643b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soutient/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soutient/index.html.twig"));

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

        yield "Gestion des Soutiens";
        
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
                    <h1 class=\"h3 mb-0\">
                        <i class=\"fas fa-hands-helping me-2\"></i>
                        Gestion des Soutiens
                    </h1>
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_soutient_new");
        yield "\" class=\"btn btn-light btn-sm\">
                        <i class=\"fas fa-plus me-1\"></i>
                        Nouveau Soutien
                    </a>
                </div>
                
                <div class=\"card-body\">
                    ";
        // line 23
        yield "                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light\">
                                    <i class=\"fas fa-search\"></i>
                                </span>
                                <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher...\">
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <select class=\"form-select\" id=\"filterDate\">
                                <option value=\"\">Toutes les dates</option>
                                <option value=\"today\">Aujourd'hui</option>
                                <option value=\"week\">Cette semaine</option>
                                <option value=\"month\">Ce mois</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <button class=\"btn btn-outline-secondary w-100\" id=\"resetFilters\">
                                <i class=\"fas fa-refresh me-1\"></i>
                                Réinitialiser
                            </button>
                        </div>
                    </div>

                    ";
        // line 49
        yield "                    <div class=\"row mb-4\">
                        <div class=\"col-md-3\">
                            <div class=\"card bg-info text-white\">
                                <div class=\"card-body py-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"flex-grow-1\">
                                            <h4 class=\"mb-0\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["soutients"]) || array_key_exists("soutients", $context) ? $context["soutients"] : (function () { throw new RuntimeError('Variable "soutients" does not exist.', 55, $this->source); })())), "html", null, true);
        yield "</h4>
                                            <small>Total Soutiens</small>
                                        </div>
                                        <i class=\"fas fa-inbox fa-2x opacity-50\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"card bg-success text-white\">
                                <div class=\"card-body py-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"flex-grow-1\">
                                            <h4 class=\"mb-0\" id=\"todayCount\">0</h4>
                                            <small>Aujourd'hui</small>
                                        </div>
                                        <i class=\"fas fa-calendar-day fa-2x opacity-50\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"card bg-warning text-white\">
                                <div class=\"card-body py-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"flex-grow-1\">
                                            <h4 class=\"mb-0\" id=\"weekCount\">0</h4>
                                            <small>Cette semaine</small>
                                        </div>
                                        <i class=\"fas fa-calendar-week fa-2x opacity-50\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"card bg-danger text-white\">
                                <div class=\"card-body py-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"flex-grow-1\">
                                            <h4 class=\"mb-0\" id=\"monthCount\">0</h4>
                                            <small>Ce mois</small>
                                        </div>
                                        <i class=\"fas fa-calendar-alt fa-2x opacity-50\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 105
        yield "                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-striped\" id=\"soutientTable\">
                            <thead class=\"table-dark\">
                                <tr>
                                    <th width=\"80\">ID</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th width=\"180\">Date</th>
                                    <th width=\"120\" class=\"text-center\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["soutients"]) || array_key_exists("soutients", $context) ? $context["soutients"] : (function () { throw new RuntimeError('Variable "soutients" does not exist.', 118, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["soutient"]) {
            // line 119
            yield "                                <tr class=\"align-middle\">
                                    <td>
                                        <span class=\"badge bg-secondary\">#";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["soutient"], "id", [], "any", false, false, false, 121), "html", null, true);
            yield "</span>
                                    </td>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"avatar-sm bg-primary rounded-circle d-flex align-items-center justify-content-center me-2\">
                                                <span class=\"text-white fw-bold\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["soutient"], "nom", [], "any", false, false, false, 126))), "html", null, true);
            yield "</span>
                                            </div>
                                            <strong>";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["soutient"], "nom", [], "any", false, false, false, 128), "html", null, true);
            yield "</strong>
                                        </div>
                                    </td>
                                    <td>
                                        <a href=\"mailto:";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["soutient"], "email", [], "any", false, false, false, 132), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                                            <i class=\"fas fa-envelope me-1 text-muted\"></i>
                                            ";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["soutient"], "email", [], "any", false, false, false, 134), "html", null, true);
            yield "
                                        </a>
                                    </td>
                                    <td>
                                        <span class=\"message-preview\" data-bs-toggle=\"tooltip\" title=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["soutient"], "message", [], "any", false, false, false, 138), "html", null, true);
            yield "\">
                                            ";
            // line 139
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["soutient"], "message", [], "any", false, false, false, 139)) > 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["soutient"], "message", [], "any", false, false, false, 139), 0, 50) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["soutient"], "message", [], "any", false, false, false, 139), "html", null, true)));
            yield "
                                        </span>
                                    </td>
                                    <td>
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-clock me-1\"></i>
                                            ";
            // line 145
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["soutient"], "dateSoutient", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["soutient"], "dateSoutient", [], "any", false, false, false, 145), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
            yield "
                                        </small>
                                    </td>
                                    <td>
                                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                                            <a href=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_soutient_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["soutient"], "id", [], "any", false, false, false, 150)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-info\" 
                                               data-bs-toggle=\"tooltip\" 
                                               title=\"Voir détails\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_soutient_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["soutient"], "id", [], "any", false, false, false, 156)]), "html", null, true);
            yield "\" 
                                               class=\"btn btn-warning\" 
                                               data-bs-toggle=\"tooltip\" 
                                               title=\"Modifier\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                            <button type=\"button\" 
                                                    class=\"btn btn-danger\" 
                                                    data-bs-toggle=\"modal\" 
                                                    data-bs-target=\"#deleteModal\"
                                                    data-soutient-id=\"";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["soutient"], "id", [], "any", false, false, false, 166), "html", null, true);
            yield "\"
                                                    data-soutient-name=\"";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["soutient"], "nom", [], "any", false, false, false, 167), "html", null, true);
            yield "\"
                                                    title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 174
        if (!$context['_iterated']) {
            // line 175
            yield "                                <tr>
                                    <td colspan=\"6\" class=\"text-center py-5\">
                                        <div class=\"empty-state\">
                                            <i class=\"fas fa-inbox fa-3x text-muted mb-3\"></i>
                                            <h4 class=\"text-muted\">Aucun soutien trouvé</h4>
                                            <p class=\"text-muted\">Commencez par ajouter votre premier soutien.</p>
                                            <a href=\"";
            // line 181
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_soutient_new");
            yield "\" class=\"btn btn-primary mt-2\">
                                                <i class=\"fas fa-plus me-1\"></i>
                                                Ajouter un soutien
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['soutient'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        yield "                            </tbody>
                        </table>
                    </div>

                    ";
        // line 194
        yield "                    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["soutients"]) || array_key_exists("soutients", $context) ? $context["soutients"] : (function () { throw new RuntimeError('Variable "soutients" does not exist.', 194, $this->source); })())) > 10)) {
            // line 195
            yield "                    <div class=\"d-flex justify-content-between align-items-center mt-4\">
                        <div class=\"text-muted\">
                            Affichage de <strong>";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["soutients"]) || array_key_exists("soutients", $context) ? $context["soutients"] : (function () { throw new RuntimeError('Variable "soutients" does not exist.', 197, $this->source); })())), "html", null, true);
            yield "</strong> soutien(s)
                        </div>
                        <nav>
                            <ul class=\"pagination mb-0\">
                                <li class=\"page-item disabled\">
                                    <a class=\"page-link\" href=\"#\">Précédent</a>
                                </li>
                                <li class=\"page-item active\">
                                    <a class=\"page-link\" href=\"#\">1</a>
                                </li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\">2</a>
                                </li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\">3</a>
                                </li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\">Suivant</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    ";
        }
        // line 220
        yield "                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 227
        yield "<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir supprimer le soutien de <strong id=\"soutientName\"></strong> ?</p>
                <p class=\"text-danger\"><small>Cette action est irréversible.</small></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash me-1\"></i>
                        Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 257
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

        // line 258
        yield "<style>
.avatar-sm {
    width: 32px;
    height: 32px;
    font-size: 14px;
}

.empty-state {
    padding: 2rem;
}

.message-preview {
    cursor: pointer;
}

.table-hover tbody tr:hover {
    background-color: rgba(0, 123, 255, 0.05) !important;
}

.card {
    border: none;
    border-radius: 15px;
}

.card-header {
    border-radius: 15px 15px 0 0 !important;
}

.btn-group .btn {
    border-radius: 8px;
    margin: 0 2px;
}

.badge {
    font-size: 0.75em;
}

/* Animation pour les nouvelles lignes */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.table tbody tr {
    animation: fadeIn 0.3s ease-in;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 307
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

        // line 308
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialiser les tooltips Bootstrap
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Gestion de la recherche
    const searchInput = document.getElementById('searchInput');
    const table = document.getElementById('soutientTable');
    const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

    searchInput.addEventListener('keyup', function() {
        const filter = this.value.toLowerCase();
        Array.from(rows).forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(filter) ? '' : 'none';
        });
        updateStatistics();
    });

    // Gestion du modal de suppression
    const deleteModal = document.getElementById('deleteModal');
    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const soutientId = button.getAttribute('data-soutient-id');
            const soutientName = button.getAttribute('data-soutient-name');
            
            document.getElementById('soutientName').textContent = soutientName;
            document.getElementById('deleteForm').action = `/soutient/\${soutientId}`;
            
            // Générer le token CSRF dynamiquement (vous devrez peut-être l'adapter selon votre configuration)
            document.getElementById('deleteToken').value = '";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete"), "html", null, true);
        yield "';
        });
    }

    // Calcul des statistiques
    function updateStatistics() {
        const today = new Date();
        const todayStart = new Date(today.getFullYear(), today.getMonth(), today.getDate());
        
        let todayCount = 0;
        let weekCount = 0;
        let monthCount = 0;

        Array.from(rows).forEach(row => {
            if (row.style.display !== 'none') {
                const dateCell = row.cells[4];
                const dateText = dateCell.querySelector('small')?.textContent;
                if (dateText && dateText !== 'N/A') {
                    // Convertir la date du format français vers Date object
                    const parts = dateText.split(' ')[0].split('/');
                    if (parts.length === 3) {
                        const rowDate = new Date(parts[2], parts[1] - 1, parts[0]);
                        
                        // Aujourd'hui
                        if (rowDate >= todayStart) {
                            todayCount++;
                        }
                        
                        // Cette semaine (simplifié)
                        const weekAgo = new Date(today);
                        weekAgo.setDate(today.getDate() - 7);
                        if (rowDate >= weekAgo) {
                            weekCount++;
                        }
                        
                        // Ce mois
                        if (rowDate.getMonth() === today.getMonth() && rowDate.getFullYear() === today.getFullYear()) {
                            monthCount++;
                        }
                    }
                }
            }
        });

        document.getElementById('todayCount').textContent = todayCount;
        document.getElementById('weekCount').textContent = weekCount;
        document.getElementById('monthCount').textContent = monthCount;
    }

    // Filtrage par date
    document.getElementById('filterDate').addEventListener('change', function() {
        const filterValue = this.value;
        const today = new Date();
        
        Array.from(rows).forEach(row => {
            const dateCell = row.cells[4];
            const dateText = dateCell.querySelector('small')?.textContent;
            
            let showRow = true;
            
            if (dateText && dateText !== 'N/A' && filterValue) {
                const parts = dateText.split(' ')[0].split('/');
                if (parts.length === 3) {
                    const rowDate = new Date(parts[2], parts[1] - 1, parts[0]);
                    
                    switch(filterValue) {
                        case 'today':
                            const todayStart = new Date(today.getFullYear(), today.getMonth(), today.getDate());
                            showRow = rowDate >= todayStart;
                            break;
                        case 'week':
                            const weekAgo = new Date(today);
                            weekAgo.setDate(today.getDate() - 7);
                            showRow = rowDate >= weekAgo;
                            break;
                        case 'month':
                            showRow = rowDate.getMonth() === today.getMonth() && rowDate.getFullYear() === today.getFullYear();
                            break;
                    }
                }
            }
            
            row.style.display = showRow ? '' : 'none';
        });
        
        updateStatistics();
    });

    // Réinitialisation des filtres
    document.getElementById('resetFilters').addEventListener('click', function() {
        searchInput.value = '';
        document.getElementById('filterDate').value = '';
        Array.from(rows).forEach(row => {
            row.style.display = '';
        });
        updateStatistics();
    });

    // Initialiser les statistiques
    updateStatistics();
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
        return "soutient/index.html.twig";
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
        return array (  555 => 342,  519 => 308,  506 => 307,  448 => 258,  435 => 257,  396 => 227,  388 => 220,  362 => 197,  358 => 195,  355 => 194,  349 => 189,  335 => 181,  327 => 175,  325 => 174,  313 => 167,  309 => 166,  296 => 156,  287 => 150,  279 => 145,  270 => 139,  266 => 138,  259 => 134,  254 => 132,  247 => 128,  242 => 126,  234 => 121,  230 => 119,  225 => 118,  210 => 105,  158 => 55,  150 => 49,  123 => 23,  113 => 15,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Soutiens{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card shadow-lg\">
                <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                    <h1 class=\"h3 mb-0\">
                        <i class=\"fas fa-hands-helping me-2\"></i>
                        Gestion des Soutiens
                    </h1>
                    <a href=\"{{ path('app_soutient_new') }}\" class=\"btn btn-light btn-sm\">
                        <i class=\"fas fa-plus me-1\"></i>
                        Nouveau Soutien
                    </a>
                </div>
                
                <div class=\"card-body\">
                    {# Filtres et recherche #}
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6\">
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light\">
                                    <i class=\"fas fa-search\"></i>
                                </span>
                                <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher...\">
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <select class=\"form-select\" id=\"filterDate\">
                                <option value=\"\">Toutes les dates</option>
                                <option value=\"today\">Aujourd'hui</option>
                                <option value=\"week\">Cette semaine</option>
                                <option value=\"month\">Ce mois</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <button class=\"btn btn-outline-secondary w-100\" id=\"resetFilters\">
                                <i class=\"fas fa-refresh me-1\"></i>
                                Réinitialiser
                            </button>
                        </div>
                    </div>

                    {# Statistiques #}
                    <div class=\"row mb-4\">
                        <div class=\"col-md-3\">
                            <div class=\"card bg-info text-white\">
                                <div class=\"card-body py-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"flex-grow-1\">
                                            <h4 class=\"mb-0\">{{ soutients|length }}</h4>
                                            <small>Total Soutiens</small>
                                        </div>
                                        <i class=\"fas fa-inbox fa-2x opacity-50\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"card bg-success text-white\">
                                <div class=\"card-body py-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"flex-grow-1\">
                                            <h4 class=\"mb-0\" id=\"todayCount\">0</h4>
                                            <small>Aujourd'hui</small>
                                        </div>
                                        <i class=\"fas fa-calendar-day fa-2x opacity-50\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"card bg-warning text-white\">
                                <div class=\"card-body py-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"flex-grow-1\">
                                            <h4 class=\"mb-0\" id=\"weekCount\">0</h4>
                                            <small>Cette semaine</small>
                                        </div>
                                        <i class=\"fas fa-calendar-week fa-2x opacity-50\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"card bg-danger text-white\">
                                <div class=\"card-body py-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"flex-grow-1\">
                                            <h4 class=\"mb-0\" id=\"monthCount\">0</h4>
                                            <small>Ce mois</small>
                                        </div>
                                        <i class=\"fas fa-calendar-alt fa-2x opacity-50\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {# Tableau #}
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover table-striped\" id=\"soutientTable\">
                            <thead class=\"table-dark\">
                                <tr>
                                    <th width=\"80\">ID</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th width=\"180\">Date</th>
                                    <th width=\"120\" class=\"text-center\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for soutient in soutients %}
                                <tr class=\"align-middle\">
                                    <td>
                                        <span class=\"badge bg-secondary\">#{{ soutient.id }}</span>
                                    </td>
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            <div class=\"avatar-sm bg-primary rounded-circle d-flex align-items-center justify-content-center me-2\">
                                                <span class=\"text-white fw-bold\">{{ soutient.nom|first|upper }}</span>
                                            </div>
                                            <strong>{{ soutient.nom }}</strong>
                                        </div>
                                    </td>
                                    <td>
                                        <a href=\"mailto:{{ soutient.email }}\" class=\"text-decoration-none\">
                                            <i class=\"fas fa-envelope me-1 text-muted\"></i>
                                            {{ soutient.email }}
                                        </a>
                                    </td>
                                    <td>
                                        <span class=\"message-preview\" data-bs-toggle=\"tooltip\" title=\"{{ soutient.message }}\">
                                            {{ soutient.message|length > 50 ? soutient.message|slice(0, 50) ~ '...' : soutient.message }}
                                        </span>
                                    </td>
                                    <td>
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-clock me-1\"></i>
                                            {{ soutient.dateSoutient ? soutient.dateSoutient|date('d/m/Y H:i') : 'N/A' }}
                                        </small>
                                    </td>
                                    <td>
                                        <div class=\"btn-group btn-group-sm\" role=\"group\">
                                            <a href=\"{{ path('app_soutient_show', {'id': soutient.id}) }}\" 
                                               class=\"btn btn-info\" 
                                               data-bs-toggle=\"tooltip\" 
                                               title=\"Voir détails\">
                                                <i class=\"fas fa-eye\"></i>
                                            </a>
                                            <a href=\"{{ path('app_soutient_edit', {'id': soutient.id}) }}\" 
                                               class=\"btn btn-warning\" 
                                               data-bs-toggle=\"tooltip\" 
                                               title=\"Modifier\">
                                                <i class=\"fas fa-edit\"></i>
                                            </a>
                                            <button type=\"button\" 
                                                    class=\"btn btn-danger\" 
                                                    data-bs-toggle=\"modal\" 
                                                    data-bs-target=\"#deleteModal\"
                                                    data-soutient-id=\"{{ soutient.id }}\"
                                                    data-soutient-name=\"{{ soutient.nom }}\"
                                                    title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"6\" class=\"text-center py-5\">
                                        <div class=\"empty-state\">
                                            <i class=\"fas fa-inbox fa-3x text-muted mb-3\"></i>
                                            <h4 class=\"text-muted\">Aucun soutien trouvé</h4>
                                            <p class=\"text-muted\">Commencez par ajouter votre premier soutien.</p>
                                            <a href=\"{{ path('app_soutient_new') }}\" class=\"btn btn-primary mt-2\">
                                                <i class=\"fas fa-plus me-1\"></i>
                                                Ajouter un soutien
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    {# Pagination #}
                    {% if soutients|length > 10 %}
                    <div class=\"d-flex justify-content-between align-items-center mt-4\">
                        <div class=\"text-muted\">
                            Affichage de <strong>{{ soutients|length }}</strong> soutien(s)
                        </div>
                        <nav>
                            <ul class=\"pagination mb-0\">
                                <li class=\"page-item disabled\">
                                    <a class=\"page-link\" href=\"#\">Précédent</a>
                                </li>
                                <li class=\"page-item active\">
                                    <a class=\"page-link\" href=\"#\">1</a>
                                </li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\">2</a>
                                </li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\">3</a>
                                </li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\">Suivant</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>

{# Modal de suppression #}
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i>
                    Confirmer la suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <p>Êtes-vous sûr de vouloir supprimer le soutien de <strong id=\"soutientName\"></strong> ?</p>
                <p class=\"text-danger\"><small>Cette action est irréversible.</small></p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\">
                    <button type=\"submit\" class=\"btn btn-danger\">
                        <i class=\"fas fa-trash me-1\"></i>
                        Supprimer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
<style>
.avatar-sm {
    width: 32px;
    height: 32px;
    font-size: 14px;
}

.empty-state {
    padding: 2rem;
}

.message-preview {
    cursor: pointer;
}

.table-hover tbody tr:hover {
    background-color: rgba(0, 123, 255, 0.05) !important;
}

.card {
    border: none;
    border-radius: 15px;
}

.card-header {
    border-radius: 15px 15px 0 0 !important;
}

.btn-group .btn {
    border-radius: 8px;
    margin: 0 2px;
}

.badge {
    font-size: 0.75em;
}

/* Animation pour les nouvelles lignes */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.table tbody tr {
    animation: fadeIn 0.3s ease-in;
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

    // Gestion de la recherche
    const searchInput = document.getElementById('searchInput');
    const table = document.getElementById('soutientTable');
    const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');

    searchInput.addEventListener('keyup', function() {
        const filter = this.value.toLowerCase();
        Array.from(rows).forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(filter) ? '' : 'none';
        });
        updateStatistics();
    });

    // Gestion du modal de suppression
    const deleteModal = document.getElementById('deleteModal');
    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const soutientId = button.getAttribute('data-soutient-id');
            const soutientName = button.getAttribute('data-soutient-name');
            
            document.getElementById('soutientName').textContent = soutientName;
            document.getElementById('deleteForm').action = `/soutient/\${soutientId}`;
            
            // Générer le token CSRF dynamiquement (vous devrez peut-être l'adapter selon votre configuration)
            document.getElementById('deleteToken').value = '{{ csrf_token('delete') }}';
        });
    }

    // Calcul des statistiques
    function updateStatistics() {
        const today = new Date();
        const todayStart = new Date(today.getFullYear(), today.getMonth(), today.getDate());
        
        let todayCount = 0;
        let weekCount = 0;
        let monthCount = 0;

        Array.from(rows).forEach(row => {
            if (row.style.display !== 'none') {
                const dateCell = row.cells[4];
                const dateText = dateCell.querySelector('small')?.textContent;
                if (dateText && dateText !== 'N/A') {
                    // Convertir la date du format français vers Date object
                    const parts = dateText.split(' ')[0].split('/');
                    if (parts.length === 3) {
                        const rowDate = new Date(parts[2], parts[1] - 1, parts[0]);
                        
                        // Aujourd'hui
                        if (rowDate >= todayStart) {
                            todayCount++;
                        }
                        
                        // Cette semaine (simplifié)
                        const weekAgo = new Date(today);
                        weekAgo.setDate(today.getDate() - 7);
                        if (rowDate >= weekAgo) {
                            weekCount++;
                        }
                        
                        // Ce mois
                        if (rowDate.getMonth() === today.getMonth() && rowDate.getFullYear() === today.getFullYear()) {
                            monthCount++;
                        }
                    }
                }
            }
        });

        document.getElementById('todayCount').textContent = todayCount;
        document.getElementById('weekCount').textContent = weekCount;
        document.getElementById('monthCount').textContent = monthCount;
    }

    // Filtrage par date
    document.getElementById('filterDate').addEventListener('change', function() {
        const filterValue = this.value;
        const today = new Date();
        
        Array.from(rows).forEach(row => {
            const dateCell = row.cells[4];
            const dateText = dateCell.querySelector('small')?.textContent;
            
            let showRow = true;
            
            if (dateText && dateText !== 'N/A' && filterValue) {
                const parts = dateText.split(' ')[0].split('/');
                if (parts.length === 3) {
                    const rowDate = new Date(parts[2], parts[1] - 1, parts[0]);
                    
                    switch(filterValue) {
                        case 'today':
                            const todayStart = new Date(today.getFullYear(), today.getMonth(), today.getDate());
                            showRow = rowDate >= todayStart;
                            break;
                        case 'week':
                            const weekAgo = new Date(today);
                            weekAgo.setDate(today.getDate() - 7);
                            showRow = rowDate >= weekAgo;
                            break;
                        case 'month':
                            showRow = rowDate.getMonth() === today.getMonth() && rowDate.getFullYear() === today.getFullYear();
                            break;
                    }
                }
            }
            
            row.style.display = showRow ? '' : 'none';
        });
        
        updateStatistics();
    });

    // Réinitialisation des filtres
    document.getElementById('resetFilters').addEventListener('click', function() {
        searchInput.value = '';
        document.getElementById('filterDate').value = '';
        Array.from(rows).forEach(row => {
            row.style.display = '';
        });
        updateStatistics();
    });

    // Initialiser les statistiques
    updateStatistics();
});
</script>
{% endblock %}", "soutient/index.html.twig", "/home/voay/Examen_Symfony_L1C/templates/soutient/index.html.twig");
    }
}
