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

/* revendication/new.html.twig */
class __TwigTemplate_3d0c93ab1a5fe5f835d3ca4bb3d3a9d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "revendication/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "revendication/new.html.twig"));

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

        yield "Nouvelle Revendication";
        
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
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-8 col-lg-6\">
            <div class=\"card shadow-lg\">
                <div class=\"card-header bg-primary text-white\">
                    <div class=\"d-flex align-items-center\">
                        <i class=\"fas fa-bullhorn fa-2x me-3\"></i>
                        <div>
                            <h1 class=\"h3 mb-1\">Nouvelle Revendication</h1>
                            <p class=\"mb-0 opacity-75\">Formulaire de création d'une nouvelle revendication</p>
                        </div>
                    </div>
                </div>
                
                <div class=\"card-body p-4\">
                    ";
        // line 21
        yield Twig\Extension\CoreExtension::include($this->env, $context, "revendication/_form.html.twig");
        yield "
                </div>
                
                <div class=\"card-footer bg-light\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_revendication_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>
                            Retour à la liste
                        </a>
                        <button type=\"submit\" form=\"revendication-form\" class=\"btn btn-success\">
                            <i class=\"fas fa-check me-2\"></i>
                            Créer la revendication
                        </button>
                    </div>
                </div>
            </div>

            ";
        // line 39
        yield "            <div class=\"card mt-4 border-0 bg-light\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-primary mb-3\">
                        <i class=\"fas fa-info-circle me-2\"></i>
                        Informations importantes
                    </h5>
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"d-flex\">
                                <i class=\"fas fa-tag text-warning me-3 mt-1\"></i>
                                <div>
                                    <h6 class=\"mb-1\">Titre clair et concis</h6>
                                    <p class=\"text-muted small mb-0\">Choisissez un titre qui résume bien votre revendication</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"d-flex\">
                                <i class=\"fas fa-align-left text-info me-3 mt-1\"></i>
                                <div>
                                    <h6 class=\"mb-1\">Description détaillée</h6>
                                    <p class=\"text-muted small mb-0\">Expliquez clairement l'objet de votre revendication</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"d-flex\">
                                <i class=\"fas fa-list-alt text-success me-3 mt-1\"></i>
                                <div>
                                    <h6 class=\"mb-1\">Statut approprié</h6>
                                    <p class=\"text-muted small mb-0\">Sélectionnez le statut initial de votre revendication</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"d-flex\">
                                <i class=\"fas fa-calendar text-danger me-3 mt-1\"></i>
                                <div>
                                    <h6 class=\"mb-1\">Date automatique</h6>
                                    <p class=\"text-muted small mb-0\">La date de création est enregistrée automatiquement</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 90
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

        // line 91
        yield "<style>
.card {
    border: none;
    border-radius: 15px;
}

.card-header {
    border-radius: 15px 15px 0 0 !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.card-footer {
    border-radius: 0 0 15px 15px !important;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
}

.btn {
    border-radius: 8px;
    font-weight: 500;
    padding: 0.5rem 1.5rem;
    transition: all 0.2s ease;
}

.btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.btn-outline-secondary:hover {
    background-color: #6c757d;
    border-color: #6c757d;
    color: white;
}

.form-control, .form-select {
    border-radius: 8px;
    border: 1px solid #e0e0e0;
    transition: all 0.2s ease;
    padding: 0.75rem 1rem;
}

.form-control:focus, .form-select:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.15);
    transform: translateY(-1px);
}

.form-label {
    font-weight: 600;
    color: #495057;
    margin-bottom: 0.5rem;
}

/* Animation d'entrée */
.card {
    animation: slideUp 0.4s ease-out;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Styles pour la carte d'information */
.bg-light {
    background-color: #f8f9fa !important;
}

.text-primary {
    color: #007bff !important;
}

/* Responsive */
@media (max-width: 768px) {
    .container-fluid {
        padding: 1rem;
    }
    
    .card-header .d-flex {
        flex-direction: column;
        text-align: center;
    }
    
    .card-header i {
        margin-bottom: 0.5rem;
        margin-right: 0 !important;
    }
    
    .card-footer .d-flex {
        flex-direction: column;
        gap: 1rem;
    }
    
    .card-footer .btn {
        width: 100%;
        justify-content: center;
    }
    
    .card-body {
        padding: 1.5rem !important;
    }
}

/* Amélioration de la lisibilité */
h1, h5, h6 {
    color: #2c3e50;
}

.text-muted {
    color: #6c757d !important;
}

/* Effet de focus pour les boutons */
.btn:focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
</style>
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
        return "revendication/new.html.twig";
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
        return array (  214 => 91,  201 => 90,  141 => 39,  126 => 26,  118 => 21,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Revendication{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-8 col-lg-6\">
            <div class=\"card shadow-lg\">
                <div class=\"card-header bg-primary text-white\">
                    <div class=\"d-flex align-items-center\">
                        <i class=\"fas fa-bullhorn fa-2x me-3\"></i>
                        <div>
                            <h1 class=\"h3 mb-1\">Nouvelle Revendication</h1>
                            <p class=\"mb-0 opacity-75\">Formulaire de création d'une nouvelle revendication</p>
                        </div>
                    </div>
                </div>
                
                <div class=\"card-body p-4\">
                    {{ include('revendication/_form.html.twig') }}
                </div>
                
                <div class=\"card-footer bg-light\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"{{ path('app_revendication_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>
                            Retour à la liste
                        </a>
                        <button type=\"submit\" form=\"revendication-form\" class=\"btn btn-success\">
                            <i class=\"fas fa-check me-2\"></i>
                            Créer la revendication
                        </button>
                    </div>
                </div>
            </div>

            {# Guide d'aide #}
            <div class=\"card mt-4 border-0 bg-light\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-primary mb-3\">
                        <i class=\"fas fa-info-circle me-2\"></i>
                        Informations importantes
                    </h5>
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"d-flex\">
                                <i class=\"fas fa-tag text-warning me-3 mt-1\"></i>
                                <div>
                                    <h6 class=\"mb-1\">Titre clair et concis</h6>
                                    <p class=\"text-muted small mb-0\">Choisissez un titre qui résume bien votre revendication</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"d-flex\">
                                <i class=\"fas fa-align-left text-info me-3 mt-1\"></i>
                                <div>
                                    <h6 class=\"mb-1\">Description détaillée</h6>
                                    <p class=\"text-muted small mb-0\">Expliquez clairement l'objet de votre revendication</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"d-flex\">
                                <i class=\"fas fa-list-alt text-success me-3 mt-1\"></i>
                                <div>
                                    <h6 class=\"mb-1\">Statut approprié</h6>
                                    <p class=\"text-muted small mb-0\">Sélectionnez le statut initial de votre revendication</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"d-flex\">
                                <i class=\"fas fa-calendar text-danger me-3 mt-1\"></i>
                                <div>
                                    <h6 class=\"mb-1\">Date automatique</h6>
                                    <p class=\"text-muted small mb-0\">La date de création est enregistrée automatiquement</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.card-footer {
    border-radius: 0 0 15px 15px !important;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
}

.btn {
    border-radius: 8px;
    font-weight: 500;
    padding: 0.5rem 1.5rem;
    transition: all 0.2s ease;
}

.btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.btn-outline-secondary:hover {
    background-color: #6c757d;
    border-color: #6c757d;
    color: white;
}

.form-control, .form-select {
    border-radius: 8px;
    border: 1px solid #e0e0e0;
    transition: all 0.2s ease;
    padding: 0.75rem 1rem;
}

.form-control:focus, .form-select:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.15);
    transform: translateY(-1px);
}

.form-label {
    font-weight: 600;
    color: #495057;
    margin-bottom: 0.5rem;
}

/* Animation d'entrée */
.card {
    animation: slideUp 0.4s ease-out;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Styles pour la carte d'information */
.bg-light {
    background-color: #f8f9fa !important;
}

.text-primary {
    color: #007bff !important;
}

/* Responsive */
@media (max-width: 768px) {
    .container-fluid {
        padding: 1rem;
    }
    
    .card-header .d-flex {
        flex-direction: column;
        text-align: center;
    }
    
    .card-header i {
        margin-bottom: 0.5rem;
        margin-right: 0 !important;
    }
    
    .card-footer .d-flex {
        flex-direction: column;
        gap: 1rem;
    }
    
    .card-footer .btn {
        width: 100%;
        justify-content: center;
    }
    
    .card-body {
        padding: 1.5rem !important;
    }
}

/* Amélioration de la lisibilité */
h1, h5, h6 {
    color: #2c3e50;
}

.text-muted {
    color: #6c757d !important;
}

/* Effet de focus pour les boutons */
.btn:focus {
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
</style>
{% endblock %}", "revendication/new.html.twig", "/home/voay/Examen_Symfony_L1C/templates/revendication/new.html.twig");
    }
}
