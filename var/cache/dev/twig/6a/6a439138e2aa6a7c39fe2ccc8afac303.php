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

/* soutient/new.html.twig */
class __TwigTemplate_ae22570df2d8f4380f78162245e2182a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soutient/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "soutient/new.html.twig"));

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

        yield "Nouveau Soutien";
        
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
                        <i class=\"fas fa-plus-circle fa-2x me-3\"></i>
                        <div>
                            <h1 class=\"h3 mb-0\">Nouveau Soutien</h1>
                            <p class=\"mb-0 opacity-75\">Ajouter un nouveau message de soutien</p>
                        </div>
                    </div>
                </div>
                
                <div class=\"card-body p-4\">
                    ";
        // line 21
        yield Twig\Extension\CoreExtension::include($this->env, $context, "soutient/_form.html.twig");
        yield "
                </div>
                
                <div class=\"card-footer bg-light\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_soutient_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>
                            Retour à la liste
                        </a>
                        <button type=\"submit\" form=\"soutient-form\" class=\"btn btn-success\">
                            <i class=\"fas fa-check me-2\"></i>
                            Créer le soutien
                        </button>
                    </div>
                </div>
            </div>

            ";
        // line 39
        yield "            <div class=\"card mt-4 border-0 bg-light\">
                <div class=\"card-body\">
                    <div class=\"row text-center\">
                        <div class=\"col-md-4 mb-3 mb-md-0\">
                            <div class=\"d-flex align-items-center justify-content-center\">
                                <i class=\"fas fa-info-circle text-primary me-2\"></i>
                                <small class=\"text-muted\">Tous les champs sont requis</small>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3 mb-md-0\">
                            <div class=\"d-flex align-items-center justify-content-center\">
                                <i class=\"fas fa-shield-alt text-success me-2\"></i>
                                <small class=\"text-muted\">Données sécurisées</small>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"d-flex align-items-center justify-content-center\">
                                <i class=\"fas fa-clock text-warning me-2\"></i>
                                <small class=\"text-muted\">Validation instantanée</small>
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

    // line 68
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

        // line 69
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
    transition: all 0.2s ease;
}

.btn:hover {
    transform: translateY(-1px);
}

.form-control, .form-select {
    border-radius: 8px;
    border: 1px solid #e0e0e0;
    transition: all 0.2s ease;
}

.form-control:focus, .form-select:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.1);
}

/* Animation subtle */
.card {
    animation: slideUp 0.3s ease-out;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive adjustments */
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
        return "soutient/new.html.twig";
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
        return array (  192 => 69,  179 => 68,  141 => 39,  126 => 26,  118 => 21,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouveau Soutien{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-8 col-lg-6\">
            <div class=\"card shadow-lg\">
                <div class=\"card-header bg-primary text-white\">
                    <div class=\"d-flex align-items-center\">
                        <i class=\"fas fa-plus-circle fa-2x me-3\"></i>
                        <div>
                            <h1 class=\"h3 mb-0\">Nouveau Soutien</h1>
                            <p class=\"mb-0 opacity-75\">Ajouter un nouveau message de soutien</p>
                        </div>
                    </div>
                </div>
                
                <div class=\"card-body p-4\">
                    {{ include('soutient/_form.html.twig') }}
                </div>
                
                <div class=\"card-footer bg-light\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <a href=\"{{ path('app_soutient_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>
                            Retour à la liste
                        </a>
                        <button type=\"submit\" form=\"soutient-form\" class=\"btn btn-success\">
                            <i class=\"fas fa-check me-2\"></i>
                            Créer le soutien
                        </button>
                    </div>
                </div>
            </div>

            {# Informations supplémentaires #}
            <div class=\"card mt-4 border-0 bg-light\">
                <div class=\"card-body\">
                    <div class=\"row text-center\">
                        <div class=\"col-md-4 mb-3 mb-md-0\">
                            <div class=\"d-flex align-items-center justify-content-center\">
                                <i class=\"fas fa-info-circle text-primary me-2\"></i>
                                <small class=\"text-muted\">Tous les champs sont requis</small>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3 mb-md-0\">
                            <div class=\"d-flex align-items-center justify-content-center\">
                                <i class=\"fas fa-shield-alt text-success me-2\"></i>
                                <small class=\"text-muted\">Données sécurisées</small>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"d-flex align-items-center justify-content-center\">
                                <i class=\"fas fa-clock text-warning me-2\"></i>
                                <small class=\"text-muted\">Validation instantanée</small>
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
    transition: all 0.2s ease;
}

.btn:hover {
    transform: translateY(-1px);
}

.form-control, .form-select {
    border-radius: 8px;
    border: 1px solid #e0e0e0;
    transition: all 0.2s ease;
}

.form-control:focus, .form-select:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.1);
}

/* Animation subtle */
.card {
    animation: slideUp 0.3s ease-out;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive adjustments */
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
}
</style>
{% endblock %}", "soutient/new.html.twig", "/home/voay/Examen_Symfony_L1C/templates/soutient/new.html.twig");
    }
}
