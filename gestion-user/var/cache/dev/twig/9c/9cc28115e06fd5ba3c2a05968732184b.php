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

/* reset_password/reset.html.twig */
class __TwigTemplate_163bcd9a67c8ffdb7a3a89bb52180c91 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        // line 1
        yield "

";
        // line 3
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 194
        yield "
";
        // line 195
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 3
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

        // line 4
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #2a2f4f, #cd7f32);
            font-family: 'Poppins', sans-serif;
            padding: 0;
            margin: 0;
            overflow: hidden; /* Empêche le scroll inutile */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            max-width: 100%;
            padding: 20px;
        }

        .reset-password-container {
            display: flex;
            width: 900px; /* Ajustement de la taille */
            max-width: 100%;
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            position: relative; /* Correction du chevauchement */
        }

        /* Section Gauche */
        .left-section {
            width: 40%;
            min-height: 100%;
            background: url('https://source.unsplash.com/random/800x1200/?art,password') no-repeat center center;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px;
            position: relative;
        }

        .left-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(42, 47, 79, 0.85), rgba(205, 127, 50, 0.85));
            z-index: 1;
        }

        .left-section .icon-container {
            font-size: 64px;
            color: white;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .left-section h2, .left-section p {
            color: #fff;
            position: relative;
            z-index: 2;
        }

        /* Section Droite */
        .right-section {
            width: 60%;
            padding: 50px;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .reset-header {
            margin-bottom: 30px;
        }

        .reset-header h2 {
            font-size: 28px;
            font-weight: 700;
            color: #2a2f4f;
            margin-bottom: 10px;
            position: relative;
            padding-bottom: 10px;
        }

        .reset-header h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 4px;
            background: #cd7f32;
            border-radius: 10px;
        }

        /* Formulaire */
        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
            font-size: 15px;
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border: 2px solid #eee;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f9f9f9;
        }

        .form-control:focus {
            border-color: #cd7f32;
            outline: none;
            box-shadow: 0 0 8px rgba(205, 127, 50, 0.3);
            background: #fff;
        }

        .btn-primary {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            background: #cd7f32;
            color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-primary:hover {
            background: #2a2f4f;
            box-shadow: 0 5px 15px rgba(205, 127, 50, 0.3);
        }

        @media (max-width: 768px) {
            .reset-password-container {
                flex-direction: column;
                width: 100%;
                height: auto;
            }

            .left-section, .right-section {
                width: 100%;
                padding: 30px;
            }

            .left-section {
                height: 200px; /* Réduction de la hauteur */
                background-size: cover;
            }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 195
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

        // line 196
        yield "<div class=\"container\">
    <div class=\"reset-password-container\">
        <!-- Section Gauche -->
        <div class=\"left-section\">
            <div class=\"icon-container\">
                <i class=\"fas fa-shield-alt\"></i>
            </div>
            <h2>Sécurisez votre compte</h2>
            <p>Créez un nouveau mot de passe fort pour protéger votre compte.</p>
        </div>

        <!-- Section Droite -->
        <div class=\"right-section\">
            <div class=\"reset-header\">
                <h2>Nouveau mot de passe</h2>
            </div>

            ";
        // line 213
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 213, $this->source); })()), 'form_start');
        yield "
                <div class=\"form-group\">
                    ";
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 215, $this->source); })()), "plainPassword", [], "any", false, false, false, 215), "first", [], "any", false, false, false, 215), 'label', ["label" => "Nouveau mot de passe"]);
        yield "
                    ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 216, $this->source); })()), "plainPassword", [], "any", false, false, false, 216), "first", [], "any", false, false, false, 216), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre nouveau mot de passe"]]);
        yield "
                </div>

                <div class=\"form-group\">
                    ";
        // line 220
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 220, $this->source); })()), "plainPassword", [], "any", false, false, false, 220), "second", [], "any", false, false, false, 220), 'label', ["label" => "Confirmer le mot de passe"]);
        yield "
                    ";
        // line 221
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 221, $this->source); })()), "plainPassword", [], "any", false, false, false, 221), "second", [], "any", false, false, false, 221), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Confirmez votre nouveau mot de passe"]]);
        yield "
                </div>

                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-check-circle\"></i>
                    Enregistrer mon nouveau mot de passe
                </button>
            ";
        // line 228
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 228, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
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
        return "reset_password/reset.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  345 => 228,  335 => 221,  331 => 220,  324 => 216,  320 => 215,  315 => 213,  296 => 196,  283 => 195,  83 => 4,  70 => 3,  59 => 195,  56 => 194,  54 => 3,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #2a2f4f, #cd7f32);
            font-family: 'Poppins', sans-serif;
            padding: 0;
            margin: 0;
            overflow: hidden; /* Empêche le scroll inutile */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            max-width: 100%;
            padding: 20px;
        }

        .reset-password-container {
            display: flex;
            width: 900px; /* Ajustement de la taille */
            max-width: 100%;
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            position: relative; /* Correction du chevauchement */
        }

        /* Section Gauche */
        .left-section {
            width: 40%;
            min-height: 100%;
            background: url('https://source.unsplash.com/random/800x1200/?art,password') no-repeat center center;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px;
            position: relative;
        }

        .left-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(42, 47, 79, 0.85), rgba(205, 127, 50, 0.85));
            z-index: 1;
        }

        .left-section .icon-container {
            font-size: 64px;
            color: white;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .left-section h2, .left-section p {
            color: #fff;
            position: relative;
            z-index: 2;
        }

        /* Section Droite */
        .right-section {
            width: 60%;
            padding: 50px;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .reset-header {
            margin-bottom: 30px;
        }

        .reset-header h2 {
            font-size: 28px;
            font-weight: 700;
            color: #2a2f4f;
            margin-bottom: 10px;
            position: relative;
            padding-bottom: 10px;
        }

        .reset-header h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 4px;
            background: #cd7f32;
            border-radius: 10px;
        }

        /* Formulaire */
        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
            font-size: 15px;
        }

        .form-control {
            width: 100%;
            padding: 15px;
            border: 2px solid #eee;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f9f9f9;
        }

        .form-control:focus {
            border-color: #cd7f32;
            outline: none;
            box-shadow: 0 0 8px rgba(205, 127, 50, 0.3);
            background: #fff;
        }

        .btn-primary {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            background: #cd7f32;
            color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-primary:hover {
            background: #2a2f4f;
            box-shadow: 0 5px 15px rgba(205, 127, 50, 0.3);
        }

        @media (max-width: 768px) {
            .reset-password-container {
                flex-direction: column;
                width: 100%;
                height: auto;
            }

            .left-section, .right-section {
                width: 100%;
                padding: 30px;
            }

            .left-section {
                height: 200px; /* Réduction de la hauteur */
                background-size: cover;
            }
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"reset-password-container\">
        <!-- Section Gauche -->
        <div class=\"left-section\">
            <div class=\"icon-container\">
                <i class=\"fas fa-shield-alt\"></i>
            </div>
            <h2>Sécurisez votre compte</h2>
            <p>Créez un nouveau mot de passe fort pour protéger votre compte.</p>
        </div>

        <!-- Section Droite -->
        <div class=\"right-section\">
            <div class=\"reset-header\">
                <h2>Nouveau mot de passe</h2>
            </div>

            {{ form_start(resetForm) }}
                <div class=\"form-group\">
                    {{ form_label(resetForm.plainPassword.first, 'Nouveau mot de passe') }}
                    {{ form_widget(resetForm.plainPassword.first, { 'attr': {'class': 'form-control', 'placeholder': 'Entrez votre nouveau mot de passe'} }) }}
                </div>

                <div class=\"form-group\">
                    {{ form_label(resetForm.plainPassword.second, 'Confirmer le mot de passe') }}
                    {{ form_widget(resetForm.plainPassword.second, { 'attr': {'class': 'form-control', 'placeholder': 'Confirmez votre nouveau mot de passe'} }) }}
                </div>

                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-check-circle\"></i>
                    Enregistrer mon nouveau mot de passe
                </button>
            {{ form_end(resetForm) }}
        </div>
    </div>
</div>
{% endblock %}
", "reset_password/reset.html.twig", "C:\\Users\\DELL\\Desktop\\pidev-user\\templates\\reset_password\\reset.html.twig");
    }
}
