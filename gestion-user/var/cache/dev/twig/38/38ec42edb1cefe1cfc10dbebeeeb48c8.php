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

/* backOffice/user/UserEdit.html.twig */
class __TwigTemplate_cf9488f6a4d322736de9840039ea3537 extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/user/UserEdit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/user/UserEdit.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "backOffice/user/UserEdit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "<div class=\"container mt-4\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-8 offset-md-2\">
                    <h2 class=\"text-center mb-4\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 8, $this->source); })()), "html", null, true);
        yield " Utilisateur</h2>

                    ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        yield "

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Nom</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        yield "
                            <small class=\"text-danger\">";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'errors');
        yield "</small>
                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Prénom</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom"]]);
        yield "
                            <small class=\"text-danger\">";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "prenom", [], "any", false, false, false, 24), 'errors');
        yield "</small>
                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Email</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        yield "
                            <small class=\"text-danger\">";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'errors');
        yield "</small>
                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Téléphone</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "numtlf", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numéro de téléphone"]]);
        yield "
                            <small class=\"text-danger\">";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "numtlf", [], "any", false, false, false, 40), 'errors');
        yield "</small>
                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Âge</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "age", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Âge"]]);
        yield "
                            <small class=\"text-danger\">";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "age", [], "any", false, false, false, 48), 'errors');
        yield "</small>
                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Avatar URL</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "avatarUrl", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "URL de l'avatar"]]);
        yield "
                            <small class=\"text-danger\">";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "avatarUrl", [], "any", false, false, false, 56), 'errors');
        yield "</small>
                            ";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "avatarUrl", [], "any", false, false, false, 57)) {
            // line 58
            yield "                                <div class=\"mt-2\">
                                    <img src=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "avatarUrl", [], "any", false, false, false, 59), "html", null, true);
            yield "\" alt=\"Avatar\" class=\"img-thumbnail\" style=\"max-width: 100px;\">
                                </div>
                            ";
        }
        // line 62
        yield "                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Photo de profil</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "photoFile", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <small class=\"text-danger\">";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "photoFile", [], "any", false, false, false, 69), 'errors');
        yield "</small>
                            ";
        // line 70
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "photoDeProfile", [], "any", false, false, false, 70)) {
            // line 71
            yield "                                <div class=\"mt-2\">
                                    <img src=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "photoFile"), "html", null, true);
            yield "\" alt=\"Photo de profil\" class=\"img-thumbnail\" style=\"max-width: 100px;\">
                                </div>
                            ";
        }
        // line 75
        yield "                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Mot de passe</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "plainPassword", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Laisser vide si inchangé"]]);
        yield "
                            <small class=\"text-danger\">";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "plainPassword", [], "any", false, false, false, 82), 'errors');
        yield "</small>
                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Rôles</label>
                        <div class=\"col-sm-9\">
                            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "roles", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            <small class=\"text-danger\">";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "roles", [], "any", false, false, false, 90), 'errors');
        yield "</small>
                        </div>
                    </div>

                    <div class=\"form-group row mt-4\">
                        <div class=\"col-sm-9 offset-sm-3\">
                            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 96, $this->source); })()), "html", null, true);
        yield "</button>
                            <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_showuser");
        yield "\" class=\"btn btn-secondary\">Retour</a>
                        </div>
                    </div>

                    ";
        // line 101
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .page-container {
        min-height: 100vh;
        background: linear-gradient(135deg, #1a1f2c 0%, #2d3a66 100%);
        padding: 2rem;
    }

    .form-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        transform: translateY(0);
        transition: all 0.3s ease;
        animation: fadeInUp 0.6s ease;
    }

    .form-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
    }

    .form-header {
        background: rgba(33, 150, 243, 0.1);
        padding: 2rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .form-title {
        color: #fff;
        font-size: 2rem;
        font-weight: 600;
        text-align: center;
        margin: 0;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .form-body {
        padding: 2rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
        opacity: 0;
        animation: slideInRight 0.5s ease forwards;
    }

    .form-group:nth-child(odd) {
        animation-delay: 0.2s;
    }

    .form-group:nth-child(even) {
        animation-delay: 0.4s;
    }

    .form-label {
        color: rgba(255, 255, 255, 0.9);
        font-weight: 500;
        font-size: 0.95rem;
        margin-bottom: 0.5rem;
        display: block;
        transition: all 0.3s ease;
    }

    .form-control {
        background: rgba(255, 255, 255, 0.07);
        border: 2px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        color: #fff;
        padding: 0.8rem 1rem;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        background: rgba(255, 255, 255, 0.1);
        border-color: #2196F3;
        box-shadow: 0 0 0 4px rgba(33, 150, 243, 0.15);
        transform: translateY(-2px);
    }

    .form-control::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }

    .avatar-preview {
        position: relative;
        margin-top: 1rem;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .avatar-preview img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 15px;
        border: 3px solid rgba(33, 150, 243, 0.5);
        transition: all 0.3s ease;
    }

    .avatar-preview:hover img {
        transform: scale(1.05);
        border-color: #2196F3;
    }

    .role-selector {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1rem;
        margin-top: 0.5rem;
    }

    .role-option {
        background: rgba(255, 255, 255, 0.07);
        border: 2px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        padding: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .role-option:hover {
        background: rgba(33, 150, 243, 0.1);
        border-color: #2196F3;
        transform: translateY(-2px);
    }

    .role-option.selected {
        background: rgba(33, 150, 243, 0.2);
        border-color: #2196F3;
    }

    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        padding: 1rem;
        background: rgba(0, 0, 0, 0.1);
        border-radius: 12px;
    }

    .btn {
        padding: 0.8rem 1.5rem;
        border-radius: 12px;
        font-weight: 500;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .btn-primary {
        background: linear-gradient(135deg, #2196F3, #1976D2);
        color: white;
        box-shadow: 0 4px 15px rgba(33, 150, 243, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(33, 150, 243, 0.4);
    }

    .btn-secondary {
        background: rgba(255, 255, 255, 0.1);
        color: white;
    }

    .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-2px);
    }

    .error-feedback {
        color: #ff4d4d;
        font-size: 0.85rem;
        margin-top: 0.5rem;
        opacity: 0;
        animation: fadeIn 0.3s ease forwards;
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .page-container {
            padding: 1rem;
        }

        .form-card {
            border-radius: 15px;
        }

        .form-header {
            padding: 1.5rem;
        }

        .form-body {
            padding: 1.5rem;
        }

        .form-title {
            font-size: 1.5rem;
        }

        .role-selector {
            grid-template-columns: 1fr;
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
        return "backOffice/user/UserEdit.html.twig";
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
        return array (  258 => 101,  251 => 97,  247 => 96,  238 => 90,  234 => 89,  224 => 82,  220 => 81,  212 => 75,  206 => 72,  203 => 71,  201 => 70,  197 => 69,  193 => 68,  185 => 62,  179 => 59,  176 => 58,  174 => 57,  170 => 56,  166 => 55,  156 => 48,  152 => 47,  142 => 40,  138 => 39,  128 => 32,  124 => 31,  114 => 24,  110 => 23,  100 => 16,  96 => 15,  88 => 10,  83 => 8,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block body %}
<div class=\"container mt-4\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-md-8 offset-md-2\">
                    <h2 class=\"text-center mb-4\">{{ titre }} Utilisateur</h2>

                    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Nom</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom'}}) }}
                            <small class=\"text-danger\">{{ form_errors(form.nom) }}</small>
                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Prénom</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Prénom'}}) }}
                            <small class=\"text-danger\">{{ form_errors(form.prenom) }}</small>
                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Email</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'Email'}}) }}
                            <small class=\"text-danger\">{{ form_errors(form.email) }}</small>
                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Téléphone</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.numtlf, {'attr': {'class': 'form-control', 'placeholder': 'Numéro de téléphone'}}) }}
                            <small class=\"text-danger\">{{ form_errors(form.numtlf) }}</small>
                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Âge</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.age, {'attr': {'class': 'form-control', 'placeholder': 'Âge'}}) }}
                            <small class=\"text-danger\">{{ form_errors(form.age) }}</small>
                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Avatar URL</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.avatarUrl, {'attr': {'class': 'form-control', 'placeholder': 'URL de l\\'avatar'}}) }}
                            <small class=\"text-danger\">{{ form_errors(form.avatarUrl) }}</small>
                            {% if user.avatarUrl %}
                                <div class=\"mt-2\">
                                    <img src=\"{{ user.avatarUrl }}\" alt=\"Avatar\" class=\"img-thumbnail\" style=\"max-width: 100px;\">
                                </div>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Photo de profil</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.photoFile, {'attr': {'class': 'form-control'}}) }}
                            <small class=\"text-danger\">{{ form_errors(form.photoFile) }}</small>
                            {% if user.photoDeProfile %}
                                <div class=\"mt-2\">
                                    <img src=\"{{ vich_uploader_asset(user, 'photoFile') }}\" alt=\"Photo de profil\" class=\"img-thumbnail\" style=\"max-width: 100px;\">
                                </div>
                            {% endif %}
                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Mot de passe</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Laisser vide si inchangé'}}) }}
                            <small class=\"text-danger\">{{ form_errors(form.plainPassword) }}</small>
                        </div>
                    </div>

                    <div class=\"form-group row mb-3\">
                        <label class=\"col-sm-3 col-form-label\">Rôles</label>
                        <div class=\"col-sm-9\">
                            {{ form_widget(form.roles, {'attr': {'class': 'form-control'}}) }}
                            <small class=\"text-danger\">{{ form_errors(form.roles) }}</small>
                        </div>
                    </div>

                    <div class=\"form-group row mt-4\">
                        <div class=\"col-sm-9 offset-sm-3\">
                            <button type=\"submit\" class=\"btn btn-primary\">{{ titre }}</button>
                            <a href=\"{{ path('back_showuser') }}\" class=\"btn btn-secondary\">Retour</a>
                        </div>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .page-container {
        min-height: 100vh;
        background: linear-gradient(135deg, #1a1f2c 0%, #2d3a66 100%);
        padding: 2rem;
    }

    .form-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        transform: translateY(0);
        transition: all 0.3s ease;
        animation: fadeInUp 0.6s ease;
    }

    .form-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
    }

    .form-header {
        background: rgba(33, 150, 243, 0.1);
        padding: 2rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
    }

    .form-title {
        color: #fff;
        font-size: 2rem;
        font-weight: 600;
        text-align: center;
        margin: 0;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .form-body {
        padding: 2rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
        opacity: 0;
        animation: slideInRight 0.5s ease forwards;
    }

    .form-group:nth-child(odd) {
        animation-delay: 0.2s;
    }

    .form-group:nth-child(even) {
        animation-delay: 0.4s;
    }

    .form-label {
        color: rgba(255, 255, 255, 0.9);
        font-weight: 500;
        font-size: 0.95rem;
        margin-bottom: 0.5rem;
        display: block;
        transition: all 0.3s ease;
    }

    .form-control {
        background: rgba(255, 255, 255, 0.07);
        border: 2px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        color: #fff;
        padding: 0.8rem 1rem;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        background: rgba(255, 255, 255, 0.1);
        border-color: #2196F3;
        box-shadow: 0 0 0 4px rgba(33, 150, 243, 0.15);
        transform: translateY(-2px);
    }

    .form-control::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }

    .avatar-preview {
        position: relative;
        margin-top: 1rem;
        border-radius: 15px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .avatar-preview img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 15px;
        border: 3px solid rgba(33, 150, 243, 0.5);
        transition: all 0.3s ease;
    }

    .avatar-preview:hover img {
        transform: scale(1.05);
        border-color: #2196F3;
    }

    .role-selector {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 1rem;
        margin-top: 0.5rem;
    }

    .role-option {
        background: rgba(255, 255, 255, 0.07);
        border: 2px solid rgba(255, 255, 255, 0.1);
        border-radius: 12px;
        padding: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;
    }

    .role-option:hover {
        background: rgba(33, 150, 243, 0.1);
        border-color: #2196F3;
        transform: translateY(-2px);
    }

    .role-option.selected {
        background: rgba(33, 150, 243, 0.2);
        border-color: #2196F3;
    }

    .form-actions {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        padding: 1rem;
        background: rgba(0, 0, 0, 0.1);
        border-radius: 12px;
    }

    .btn {
        padding: 0.8rem 1.5rem;
        border-radius: 12px;
        font-weight: 500;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .btn-primary {
        background: linear-gradient(135deg, #2196F3, #1976D2);
        color: white;
        box-shadow: 0 4px 15px rgba(33, 150, 243, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(33, 150, 243, 0.4);
    }

    .btn-secondary {
        background: rgba(255, 255, 255, 0.1);
        color: white;
    }

    .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-2px);
    }

    .error-feedback {
        color: #ff4d4d;
        font-size: 0.85rem;
        margin-top: 0.5rem;
        opacity: 0;
        animation: fadeIn 0.3s ease forwards;
    }

    @keyframes slideInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .page-container {
            padding: 1rem;
        }

        .form-card {
            border-radius: 15px;
        }

        .form-header {
            padding: 1.5rem;
        }

        .form-body {
            padding: 1.5rem;
        }

        .form-title {
            font-size: 1.5rem;
        }

        .role-selector {
            grid-template-columns: 1fr;
        }
    }
</style>
{% endblock %}", "backOffice/user/UserEdit.html.twig", "C:\\Users\\DELL\\Desktop\\pidev-user\\templates\\backOffice\\user\\UserEdit.html.twig");
    }
}
