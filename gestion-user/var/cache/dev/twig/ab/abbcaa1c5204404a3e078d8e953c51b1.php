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

/* backOffice/user/UserShow.html.twig */
class __TwigTemplate_12db8a48211f7fdaf2eda4719c5902b8 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/user/UserShow.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/user/UserShow.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "backOffice/user/UserShow.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
<style>
    /* Dashboard Container */
    .dashboard-container {
        padding: 1.5rem;
        background: #ffffff;
        min-height: 100vh;
    }

    /* Header Section */
    .dashboard-header {
        background: #ffffff;
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .header-info {
        display: flex;
        gap: 1.5rem;
        align-items: center;
    }

    .datetime-display {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #000000;
        font-size: 0.9rem;
        background: #f8f9fa;
        padding: 0.5rem 1rem;
        border-radius: 6px;
    }

    .datetime-display i {
        color: #2196F3;
    }

    .user-info {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: #e3f2fd;
        padding: 0.5rem 1rem;
        border-radius: 6px;
    }

    .user-info i {
        color: #2196F3;
    }

    /* Search Section */
    .search-section {
        margin-bottom: 1.5rem;
    }

    .search-bar {
        background: #ffffff;
        border-radius: 8px;
        padding: 0.75rem;
        position: relative;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .search-input {
        width: 100%;
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 6px;
        padding: 0.5rem 1rem 0.5rem 2.5rem;
        color: #000000;
        font-size: 0.9rem;
    }

    .search-input:focus {
        outline: none;
        border-color: #2196F3;
        box-shadow: 0 0 0 2px rgba(33, 150, 243, 0.1);
    }

    .search-icon {
        position: absolute;
        left: 1.25rem;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
    }

    /* Users Table */
    .users-table {
        background: #ffffff;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        font-size: 0.9rem;
    }

    .table th {
        background: #f8f9fa;
        color: #000000;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.8rem;
        padding: 0.75rem 1rem;
        border-bottom: 2px solid #dee2e6;
        white-space: nowrap;
    }

    .table td {
        padding: 0.75rem 1rem;
        color: #000000;
        border-bottom: 1px solid #dee2e6;
        vertical-align: middle;
    }

    .table tbody tr:hover {
        background: #f8f9fa;
    }

    /* User Info */
    .user-details {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
    }

    .user-name {
        font-weight: 600;
        color: #000000;
    }

    .user-email {
        font-size: 0.85rem;
        color: #6c757d;
    }

    /* Badges */
    .badge {
        padding: 0.25rem 0.75rem;
        border-radius: 4px;
        font-size: 0.8rem;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .badge-admin {
        background: #e3f2fd;
        color: #1976D2;
    }

    .badge-user {
        background: #e8f5e9;
        color: #2e7d32;
    }

    .badge-verified {
        background: #e8f5e9;
        color: #2e7d32;
    }

    .badge-unverified {
        background: #ffebee;
        color: #c62828;
    }

    /* Action Buttons */
    .btn-group {
        display: flex;
        gap: 0.5rem;
    }

    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem;
        transition: all 0.2s ease-in-out;
    }

    .btn-sm:hover {
        transform: translateY(-1px);
    }

    .btn-primary {
        background-color: #2196F3;
        border-color: #2196F3;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #1976D2;
        border-color: #1976D2;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        color: #fff;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        color: #fff;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #000;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }

    /* Pagination */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        margin-top: 1.5rem;
    }

    .page-info {
        font-size: 0.9rem;
        color: #000000;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .dashboard-container {
            padding: 1rem;
        }

        .header-info {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }

        .table {
            display: block;
            overflow-x: auto;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 278
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

        // line 279
        yield "    <div class=\"dashboard-container\">
        <!-- Header -->
        <div class=\"dashboard-header\">
            <div class=\"header-info\">
                <div class=\"datetime-display\">
                    <i class=\"fas fa-calendar-clock\"></i>
                    <span>";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d H:i:s"), "html", null, true);
        yield "</span>
                </div>
                <div class=\"user-info\">
                    <i class=\"fas fa-user-circle\"></i>
                    <span class=\"user-name\">";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 289, $this->source); })()), "user", [], "any", false, false, false, 289), "nom", [], "any", false, false, false, 289), "html", null, true);
        yield "</span>
                </div>
            </div>
            <div class=\"add-user-section\">
                <a href=\"";
        // line 293
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_user");
        yield "\" class=\"btn btn-success\">
                    <i class=\"fas fa-user-plus\"></i>
                    <span>Ajouter un utilisateur</span>
                </a>
            </div>
        </div>

        <!-- Search Section -->
        <div class=\"search-section\">
            <form method=\"get\" action=\"";
        // line 302
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_showuser");
        yield "\" class=\"search-form\">
                <div class=\"search-bar\">
                    <i class=\"fas fa-search search-icon\"></i>
                    <input type=\"text\" 
                           name=\"search\" 
                           class=\"search-input\" 
                           placeholder=\"Rechercher un utilisateur...\"
                           value=\"";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchTerm", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 309, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\">
                </div>

                <div class=\"filters-bar mt-3\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <select name=\"role\" class=\"form-select\">
                                <option value=\"\">Tous les rôles</option>
                                <option value=\"ROLE_ADMIN\" ";
        // line 317
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "role", [], "any", true, true, false, 317) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 317, $this->source); })()), "role", [], "any", false, false, false, 317) == "ROLE_ADMIN"))) {
            yield "selected";
        }
        yield ">Administrateur</option>
                                <option value=\"ROLE_USER\" ";
        // line 318
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "role", [], "any", true, true, false, 318) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 318, $this->source); })()), "role", [], "any", false, false, false, 318) == "ROLE_USER"))) {
            yield "selected";
        }
        yield ">Utilisateur</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <select name=\"status\" class=\"form-select\">
                                <option value=\"\">Tous les statuts</option>
                                <option value=\"active\" ";
        // line 324
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 324) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 324, $this->source); })()), "status", [], "any", false, false, false, 324) == "active"))) {
            yield "selected";
        }
        yield ">Actif</option>
                                <option value=\"banned\" ";
        // line 325
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "status", [], "any", true, true, false, 325) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 325, $this->source); })()), "status", [], "any", false, false, false, 325) == "banned"))) {
            yield "selected";
        }
        yield ">Banni</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <input type=\"number\" 
                                   name=\"minAge\" 
                                   class=\"form-control\" 
                                   placeholder=\"Âge minimum\"
                                   value=\"";
        // line 333
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "minAge", [], "any", true, true, false, 333)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 333, $this->source); })()), "minAge", [], "any", false, false, false, 333), "html", null, true)) : (""));
        yield "\">
                        </div>
                        <div class=\"col-md-3\">
                            <input type=\"number\" 
                                   name=\"maxAge\" 
                                   class=\"form-control\" 
                                   placeholder=\"Âge maximum\"
                                   value=\"";
        // line 340
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["filters"] ?? null), "maxAge", [], "any", true, true, false, 340)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 340, $this->source); })()), "maxAge", [], "any", false, false, false, 340), "html", null, true)) : (""));
        yield "\">
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-12 text-end\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-search\"></i> Rechercher
                            </button>
                            <a href=\"";
        // line 348
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_showuser");
        yield "\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-times\"></i> Réinitialiser
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Results Summary -->
        ";
        // line 358
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 358, $this->source); })())) ||  !Twig\Extension\CoreExtension::testEmpty((isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 358, $this->source); })())))) {
            // line 359
            yield "            <div class=\"alert alert-info mt-3\">
                <i class=\"fas fa-info-circle\"></i>
                Résultats de la recherche : ";
            // line 361
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 361, $this->source); })())), "html", null, true);
            yield " utilisateur(s) trouvé(s)
                ";
            // line 362
            if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 362, $this->source); })()))) {
                // line 363
                yield "                    pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 363, $this->source); })()), "html", null, true);
                yield "\"
                ";
            }
            // line 365
            yield "            </div>
        ";
        }
        // line 367
        yield "
        <!-- Users Table -->
        <div class=\"users-table\">
            <table class=\"table\" id=\"usersTable\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom & Prénom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Age</th>
                        <th>Rôle</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 384
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 384, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 385
            yield "                    <tr>
                        <td>#";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 386), "html", null, true);
            yield "</td>
                        <td>
                            <div class=\"user-details\">
                                <span class=\"user-name\">";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 389), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 389), "html", null, true);
            yield "</span>
                            </div>
                        </td>
                        <td>";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 392), "html", null, true);
            yield "</td>
                        <td>";
            // line 393
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numtlf", [], "any", false, false, false, 393), "html", null, true);
            yield "</td>
                        <td>";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "age", [], "any", false, false, false, 394), "html", null, true);
            yield " ans</td>
                        <td>
                            ";
            // line 396
            if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 396))) {
                // line 397
                yield "                                <span class=\"badge badge-admin\">
                                    <i class=\"fas fa-user-shield\"></i>
                                    Admin
                                </span>
                            ";
            } else {
                // line 402
                yield "                                <span class=\"badge badge-user\">
                                    <i class=\"fas fa-user\"></i>
                                    Utilisateur
                                </span>
                            ";
            }
            // line 407
            yield "                        </td>
                        <td>
                            ";
            // line 409
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBanned", [], "method", false, false, false, 409)) {
                // line 410
                yield "                                <span class=\"badge badge-danger\">
                                    <i class=\"fas fa-ban\"></i>
                                    Banni
                                </span>
                            ";
            } else {
                // line 415
                yield "                                <span class=\"badge badge-success\">
                                    <i class=\"fas fa-check\"></i>
                                    Actif
                                </span>
                            ";
            }
            // line 420
            yield "                        </td>
                        <td>
                            <div class=\"btn-group\" role=\"group\">
                                <a href=\"";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 423)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\" title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                ";
            // line 426
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isAdmin", [], "method", false, false, false, 426)) {
                // line 427
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ban_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 427)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-sm ";
                // line 428
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBanned", [], "method", false, false, false, 428)) {
                    yield "btn-success";
                } else {
                    yield "btn-warning";
                }
                yield "\"
                                       onclick=\"return confirm('Êtes-vous sûr de vouloir ";
                // line 429
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBanned", [], "method", false, false, false, 429)) {
                    yield "débloquer";
                } else {
                    yield "bloquer";
                }
                yield " cet utilisateur ?')\"
                                       title=\"";
                // line 430
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBanned", [], "method", false, false, false, 430)) {
                    yield "Débloquer";
                } else {
                    yield "Bloquer";
                }
                yield "\">
                                        <i class=\"fas ";
                // line 431
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isBanned", [], "method", false, false, false, 431)) {
                    yield "fa-unlock";
                } else {
                    yield "fa-ban";
                }
                yield "\"></i>
                                    </a>
                                    <a href=\"";
                // line 433
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 433)]), "html", null, true);
                yield "\" 
                                       class=\"btn btn-danger btn-sm\"
                                       onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ? Cette action est irréversible.')\"
                                       title=\"Supprimer\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                ";
            }
            // line 440
            yield "                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 444
        yield "                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class=\"pagination\">
            <button id=\"prevPage\" class=\"btn btn-secondary\">
                <i class=\"fas fa-chevron-left\"></i> Précédent
            </button>
            <span class=\"page-info\">
                Page <span id=\"currentPage\">1</span> sur <span id=\"totalPages\">1</span>
            </span>
            <button id=\"nextPage\" class=\"btn btn-secondary\">
                Suivant <i class=\"fas fa-chevron-right\"></i>
            </button>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 463
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

        // line 464
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Pagination
            const tableRows = document.querySelectorAll('#usersTable tbody tr');
            const itemsPerPage = 15;
            let currentPage = 1;

            function showPage(page) {
                const start = (page - 1) * itemsPerPage;
                const end = start + itemsPerPage;
                
                tableRows.forEach((row, index) => {
                    row.style.display = (index >= start && index < end) ? '' : 'none';
                });
                
                document.getElementById('currentPage').textContent = page;
                updatePaginationButtons(page);
            }

            function updatePaginationButtons(page) {
                const totalPages = Math.ceil(tableRows.length / itemsPerPage);
                document.getElementById('totalPages').textContent = totalPages;
                
                const prevButton = document.getElementById('prevPage');
                const nextButton = document.getElementById('nextPage');
                
                prevButton.disabled = page <= 1;
                nextButton.disabled = page >= totalPages;
            }

            // Event listeners for pagination
            document.getElementById('prevPage').addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            document.getElementById('nextPage').addEventListener('click', () => {
                const totalPages = Math.ceil(tableRows.length / itemsPerPage);
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });

            // Search functionality
            const searchInput = document.getElementById('searchInput');
            
            function filterTable() {
                const searchTerm = searchInput.value.toLowerCase();
                let visibleRows = 0;

                tableRows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    const isVisible = text.includes(searchTerm);
                    row.style.display = isVisible ? '' : 'none';
                    if (isVisible) visibleRows++;
                });

                currentPage = 1;
                showPage(1);
            }

            searchInput.addEventListener('input', filterTable);

            // Initialize pagination
            showPage(1);
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
        return "backOffice/user/UserShow.html.twig";
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
        return array (  723 => 464,  710 => 463,  682 => 444,  673 => 440,  663 => 433,  654 => 431,  646 => 430,  638 => 429,  630 => 428,  625 => 427,  623 => 426,  617 => 423,  612 => 420,  605 => 415,  598 => 410,  596 => 409,  592 => 407,  585 => 402,  578 => 397,  576 => 396,  571 => 394,  567 => 393,  563 => 392,  555 => 389,  549 => 386,  546 => 385,  542 => 384,  523 => 367,  519 => 365,  513 => 363,  511 => 362,  507 => 361,  503 => 359,  501 => 358,  488 => 348,  477 => 340,  467 => 333,  454 => 325,  448 => 324,  437 => 318,  431 => 317,  420 => 309,  410 => 302,  398 => 293,  391 => 289,  384 => 285,  376 => 279,  363 => 278,  78 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
<style>
    /* Dashboard Container */
    .dashboard-container {
        padding: 1.5rem;
        background: #ffffff;
        min-height: 100vh;
    }

    /* Header Section */
    .dashboard-header {
        background: #ffffff;
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .header-info {
        display: flex;
        gap: 1.5rem;
        align-items: center;
    }

    .datetime-display {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #000000;
        font-size: 0.9rem;
        background: #f8f9fa;
        padding: 0.5rem 1rem;
        border-radius: 6px;
    }

    .datetime-display i {
        color: #2196F3;
    }

    .user-info {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: #e3f2fd;
        padding: 0.5rem 1rem;
        border-radius: 6px;
    }

    .user-info i {
        color: #2196F3;
    }

    /* Search Section */
    .search-section {
        margin-bottom: 1.5rem;
    }

    .search-bar {
        background: #ffffff;
        border-radius: 8px;
        padding: 0.75rem;
        position: relative;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .search-input {
        width: 100%;
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 6px;
        padding: 0.5rem 1rem 0.5rem 2.5rem;
        color: #000000;
        font-size: 0.9rem;
    }

    .search-input:focus {
        outline: none;
        border-color: #2196F3;
        box-shadow: 0 0 0 2px rgba(33, 150, 243, 0.1);
    }

    .search-icon {
        position: absolute;
        left: 1.25rem;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
    }

    /* Users Table */
    .users-table {
        background: #ffffff;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        font-size: 0.9rem;
    }

    .table th {
        background: #f8f9fa;
        color: #000000;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.8rem;
        padding: 0.75rem 1rem;
        border-bottom: 2px solid #dee2e6;
        white-space: nowrap;
    }

    .table td {
        padding: 0.75rem 1rem;
        color: #000000;
        border-bottom: 1px solid #dee2e6;
        vertical-align: middle;
    }

    .table tbody tr:hover {
        background: #f8f9fa;
    }

    /* User Info */
    .user-details {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
    }

    .user-name {
        font-weight: 600;
        color: #000000;
    }

    .user-email {
        font-size: 0.85rem;
        color: #6c757d;
    }

    /* Badges */
    .badge {
        padding: 0.25rem 0.75rem;
        border-radius: 4px;
        font-size: 0.8rem;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .badge-admin {
        background: #e3f2fd;
        color: #1976D2;
    }

    .badge-user {
        background: #e8f5e9;
        color: #2e7d32;
    }

    .badge-verified {
        background: #e8f5e9;
        color: #2e7d32;
    }

    .badge-unverified {
        background: #ffebee;
        color: #c62828;
    }

    /* Action Buttons */
    .btn-group {
        display: flex;
        gap: 0.5rem;
    }

    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem;
        transition: all 0.2s ease-in-out;
    }

    .btn-sm:hover {
        transform: translateY(-1px);
    }

    .btn-primary {
        background-color: #2196F3;
        border-color: #2196F3;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #1976D2;
        border-color: #1976D2;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        color: #fff;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        color: #fff;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
        color: #000;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }

    /* Pagination */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        margin-top: 1.5rem;
    }

    .page-info {
        font-size: 0.9rem;
        color: #000000;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .dashboard-container {
            padding: 1rem;
        }

        .header-info {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }

        .table {
            display: block;
            overflow-x: auto;
        }
    }
</style>
{% endblock %}

{% block body %}
    <div class=\"dashboard-container\">
        <!-- Header -->
        <div class=\"dashboard-header\">
            <div class=\"header-info\">
                <div class=\"datetime-display\">
                    <i class=\"fas fa-calendar-clock\"></i>
                    <span>{{ \"now\"|date(\"Y-m-d H:i:s\") }}</span>
                </div>
                <div class=\"user-info\">
                    <i class=\"fas fa-user-circle\"></i>
                    <span class=\"user-name\">{{ app.user.nom }}</span>
                </div>
            </div>
            <div class=\"add-user-section\">
                <a href=\"{{ path('ajouter_user') }}\" class=\"btn btn-success\">
                    <i class=\"fas fa-user-plus\"></i>
                    <span>Ajouter un utilisateur</span>
                </a>
            </div>
        </div>

        <!-- Search Section -->
        <div class=\"search-section\">
            <form method=\"get\" action=\"{{ path('back_showuser') }}\" class=\"search-form\">
                <div class=\"search-bar\">
                    <i class=\"fas fa-search search-icon\"></i>
                    <input type=\"text\" 
                           name=\"search\" 
                           class=\"search-input\" 
                           placeholder=\"Rechercher un utilisateur...\"
                           value=\"{{ searchTerm|default('') }}\">
                </div>

                <div class=\"filters-bar mt-3\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <select name=\"role\" class=\"form-select\">
                                <option value=\"\">Tous les rôles</option>
                                <option value=\"ROLE_ADMIN\" {% if filters.role is defined and filters.role == 'ROLE_ADMIN' %}selected{% endif %}>Administrateur</option>
                                <option value=\"ROLE_USER\" {% if filters.role is defined and filters.role == 'ROLE_USER' %}selected{% endif %}>Utilisateur</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <select name=\"status\" class=\"form-select\">
                                <option value=\"\">Tous les statuts</option>
                                <option value=\"active\" {% if filters.status is defined and filters.status == 'active' %}selected{% endif %}>Actif</option>
                                <option value=\"banned\" {% if filters.status is defined and filters.status == 'banned' %}selected{% endif %}>Banni</option>
                            </select>
                        </div>
                        <div class=\"col-md-3\">
                            <input type=\"number\" 
                                   name=\"minAge\" 
                                   class=\"form-control\" 
                                   placeholder=\"Âge minimum\"
                                   value=\"{{ filters.minAge is defined ? filters.minAge : '' }}\">
                        </div>
                        <div class=\"col-md-3\">
                            <input type=\"number\" 
                                   name=\"maxAge\" 
                                   class=\"form-control\" 
                                   placeholder=\"Âge maximum\"
                                   value=\"{{ filters.maxAge is defined ? filters.maxAge : '' }}\">
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-12 text-end\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-search\"></i> Rechercher
                            </button>
                            <a href=\"{{ path('back_showuser') }}\" class=\"btn btn-secondary\">
                                <i class=\"fas fa-times\"></i> Réinitialiser
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Results Summary -->
        {% if searchTerm is not empty or filters is not empty %}
            <div class=\"alert alert-info mt-3\">
                <i class=\"fas fa-info-circle\"></i>
                Résultats de la recherche : {{ users|length }} utilisateur(s) trouvé(s)
                {% if searchTerm is not empty %}
                    pour \"{{ searchTerm }}\"
                {% endif %}
            </div>
        {% endif %}

        <!-- Users Table -->
        <div class=\"users-table\">
            <table class=\"table\" id=\"usersTable\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom & Prénom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Age</th>
                        <th>Rôle</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for user in users %}
                    <tr>
                        <td>#{{ user.id }}</td>
                        <td>
                            <div class=\"user-details\">
                                <span class=\"user-name\">{{ user.nom }} {{ user.prenom }}</span>
                            </div>
                        </td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.numtlf }}</td>
                        <td>{{ user.age }} ans</td>
                        <td>
                            {% if 'ROLE_ADMIN' in user.roles %}
                                <span class=\"badge badge-admin\">
                                    <i class=\"fas fa-user-shield\"></i>
                                    Admin
                                </span>
                            {% else %}
                                <span class=\"badge badge-user\">
                                    <i class=\"fas fa-user\"></i>
                                    Utilisateur
                                </span>
                            {% endif %}
                        </td>
                        <td>
                            {% if user.isBanned() %}
                                <span class=\"badge badge-danger\">
                                    <i class=\"fas fa-ban\"></i>
                                    Banni
                                </span>
                            {% else %}
                                <span class=\"badge badge-success\">
                                    <i class=\"fas fa-check\"></i>
                                    Actif
                                </span>
                            {% endif %}
                        </td>
                        <td>
                            <div class=\"btn-group\" role=\"group\">
                                <a href=\"{{ path('edit_user', {'id': user.id}) }}\" class=\"btn btn-primary btn-sm\" title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                {% if not user.isAdmin() %}
                                    <a href=\"{{ path('ban_user', {'id': user.id}) }}\" 
                                       class=\"btn btn-sm {% if user.isBanned() %}btn-success{% else %}btn-warning{% endif %}\"
                                       onclick=\"return confirm('Êtes-vous sûr de vouloir {% if user.isBanned() %}débloquer{% else %}bloquer{% endif %} cet utilisateur ?')\"
                                       title=\"{% if user.isBanned() %}Débloquer{% else %}Bloquer{% endif %}\">
                                        <i class=\"fas {% if user.isBanned() %}fa-unlock{% else %}fa-ban{% endif %}\"></i>
                                    </a>
                                    <a href=\"{{ path('delete_user', {'id': user.id}) }}\" 
                                       class=\"btn btn-danger btn-sm\"
                                       onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ? Cette action est irréversible.')\"
                                       title=\"Supprimer\">
                                        <i class=\"fas fa-trash\"></i>
                                    </a>
                                {% endif %}
                            </div>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class=\"pagination\">
            <button id=\"prevPage\" class=\"btn btn-secondary\">
                <i class=\"fas fa-chevron-left\"></i> Précédent
            </button>
            <span class=\"page-info\">
                Page <span id=\"currentPage\">1</span> sur <span id=\"totalPages\">1</span>
            </span>
            <button id=\"nextPage\" class=\"btn btn-secondary\">
                Suivant <i class=\"fas fa-chevron-right\"></i>
            </button>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Pagination
            const tableRows = document.querySelectorAll('#usersTable tbody tr');
            const itemsPerPage = 15;
            let currentPage = 1;

            function showPage(page) {
                const start = (page - 1) * itemsPerPage;
                const end = start + itemsPerPage;
                
                tableRows.forEach((row, index) => {
                    row.style.display = (index >= start && index < end) ? '' : 'none';
                });
                
                document.getElementById('currentPage').textContent = page;
                updatePaginationButtons(page);
            }

            function updatePaginationButtons(page) {
                const totalPages = Math.ceil(tableRows.length / itemsPerPage);
                document.getElementById('totalPages').textContent = totalPages;
                
                const prevButton = document.getElementById('prevPage');
                const nextButton = document.getElementById('nextPage');
                
                prevButton.disabled = page <= 1;
                nextButton.disabled = page >= totalPages;
            }

            // Event listeners for pagination
            document.getElementById('prevPage').addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            document.getElementById('nextPage').addEventListener('click', () => {
                const totalPages = Math.ceil(tableRows.length / itemsPerPage);
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });

            // Search functionality
            const searchInput = document.getElementById('searchInput');
            
            function filterTable() {
                const searchTerm = searchInput.value.toLowerCase();
                let visibleRows = 0;

                tableRows.forEach(row => {
                    const text = row.textContent.toLowerCase();
                    const isVisible = text.includes(searchTerm);
                    row.style.display = isVisible ? '' : 'none';
                    if (isVisible) visibleRows++;
                });

                currentPage = 1;
                showPage(1);
            }

            searchInput.addEventListener('input', filterTable);

            // Initialize pagination
            showPage(1);
        });
    </script>
{% endblock %}", "backOffice/user/UserShow.html.twig", "C:\\Users\\DELL\\Desktop\\pidev-user\\templates\\backOffice\\user\\UserShow.html.twig");
    }
}
