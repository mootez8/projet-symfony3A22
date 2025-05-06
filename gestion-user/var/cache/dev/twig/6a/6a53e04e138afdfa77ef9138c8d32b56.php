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

/* reset_password/request.html.twig */
class __TwigTemplate_d0d9ff7c910dbf88c9b7bf59fd049c88 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Réinitialisation du mot de passe | Event Planner</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontOffice/newimg/logoicon.png"), "html", null, true);
        yield "\">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #2a2f4f, #cd7f32);
            font-family: 'Poppins', sans-serif;
            padding: 20px;
        }

        .container {
            display: flex;
            width: 1000px;
            max-width: 100%;
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        /* Section Gauche */
        .left-section {
            width: 40%;
            position: relative;
            background: url('https://source.unsplash.com/random/800x1200/?art,security') center/cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px;
            z-index: 2;
        }

        .left-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(42, 47, 79, 0.85), rgba(205, 127, 50, 0.85));
            z-index: -1;
        }

        .left-section .icon-container {
            font-size: 64px;
            color: white;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .left-section h2 {
            color: #fff;
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: 600;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .left-section p {
            color: #fff;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
            padding: 0 20px;
        }

        /* Section Droite */
        .right-section {
            width: 60%;
            padding: 40px 50px;
            background: #fff;
        }

        .reset-header {
            margin-bottom: 30px;
        }

        .reset-header h3 {
            font-size: 28px;
            font-weight: 700;
            color: #2a2f4f;
            margin-bottom: 10px;
            position: relative;
            padding-bottom: 10px;
        }

        .reset-header h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 4px;
            background: #cd7f32;
            border-radius: 10px;
        }

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

        .form-group input {
            width: 100%;
            padding: 15px;
            border: 2px solid #eee;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f9f9f9;
        }

        .form-group input:focus {
            border-color: #cd7f32;
            outline: none;
            box-shadow: 0 0 8px rgba(205, 127, 50, 0.3);
            background: #fff;
        }

        .form-group.error input {
            border-color: #e74c3c;
            background-color: #fff8f8;
        }

        .invalid-feedback {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 5px;
            display: none;
        }

        .form-group.error .invalid-feedback {
            display: block;
        }

        .btn {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 15px;
        }

        .btn-primary {
            background: #cd7f32;
            color: white;
        }

        .btn-primary:hover {
            background: #2a2f4f;
            box-shadow: 0 5px 15px rgba(205, 127, 50, 0.3);
        }

        .btn-secondary {
            background: #f0f0f0;
            color: #555;
        }

        .btn-secondary:hover {
            background: #e0e0e0;
            color: #2a2f4f;
        }

        .alert {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 14px;
            display: flex;
            align-items: center;
        }

        .alert i {
            margin-right: 10px;
            font-size: 18px;
        }

        .alert-danger {
            background: #ffe5e5;
            color: #e74c3c;
            border: 1px solid #ffcccc;
        }

        .alert-success {
            background: #e8f8f5;
            color: #27ae60;
            border: 1px solid #d1f2ea;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .left-section,
            .right-section {
                width: 100%;
            }

            .left-section {
                padding: 40px 20px;
            }

            .right-section {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <!-- Section Gauche -->
        <div class=\"left-section\">
            <div class=\"icon-container\">
                <i class=\"fas fa-key\"></i>
            </div>
            <h2>Réinitialisation du mot de passe</h2>
            <p>Entrez votre adresse e-mail et nous vous enverrons un lien pour réinitialiser votre mot de passe en toute sécurité.</p>
        </div>

        <!-- Section Droite -->
        <div class=\"right-section\">
            <div class=\"reset-header\">
                <h3>Réinitialiser le mot de passe</h3>
            </div>

            ";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 263, $this->source); })()), "flashes", ["error"], "method", false, false, false, 263));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 264
            yield "                <div class=\"alert alert-danger\">
                    <i class=\"fas fa-exclamation-circle\"></i>
                    ";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        yield "
            ";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 270, $this->source); })()), "flashes", ["success"], "method", false, false, false, 270));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 271
            yield "                <div class=\"alert alert-success\">
                    <i class=\"fas fa-check-circle\"></i>
                    ";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        yield "
            <form method=\"post\" id=\"resetForm\">
                <div class=\"form-group\">
                    <label for=\"email\">Adresse e-mail</label>
                    <input type=\"email\" 
                           id=\"email\"
                           name=\"email\" 
                           class=\"form-control\" 
                           required 
                           value=\"";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 285, $this->source); })()), "request", [], "any", false, false, false, 285), "query", [], "any", false, false, false, 285), "get", ["email"], "method", false, false, false, 285), "html", null, true);
        yield "\"
                           placeholder=\"Entrez votre adresse e-mail\"
                           pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,}\$\">
                    <div class=\"invalid-feedback\">
                        Veuillez entrer une adresse email valide
                    </div>
                </div>

                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-paper-plane\"></i> Envoyer le lien de réinitialisation
                </button>

                <a href=\"";
        // line 297
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la connexion
                </a>
            </form>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('resetForm');
        const emailInput = form.querySelector('input[name=\"email\"]');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const emailGroup = emailInput.closest('.form-group');
            
            if (!emailInput.value || !emailInput.checkValidity()) {
                emailGroup.classList.add('error');
                return;
            }

            emailGroup.classList.remove('error');
            form.submit();
        });

        emailInput.addEventListener('input', function() {
            this.closest('.form-group').classList.remove('error');
        });
    });
    </script>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reset_password/request.html.twig";
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
        return array (  378 => 297,  363 => 285,  352 => 276,  343 => 273,  339 => 271,  335 => 270,  332 => 269,  323 => 266,  319 => 264,  315 => 263,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Réinitialisation du mot de passe | Event Planner</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/frontOffice/newimg/logoicon.png') }}\">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #2a2f4f, #cd7f32);
            font-family: 'Poppins', sans-serif;
            padding: 20px;
        }

        .container {
            display: flex;
            width: 1000px;
            max-width: 100%;
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        /* Section Gauche */
        .left-section {
            width: 40%;
            position: relative;
            background: url('https://source.unsplash.com/random/800x1200/?art,security') center/cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px;
            z-index: 2;
        }

        .left-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(42, 47, 79, 0.85), rgba(205, 127, 50, 0.85));
            z-index: -1;
        }

        .left-section .icon-container {
            font-size: 64px;
            color: white;
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .left-section h2 {
            color: #fff;
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: 600;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .left-section p {
            color: #fff;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
            padding: 0 20px;
        }

        /* Section Droite */
        .right-section {
            width: 60%;
            padding: 40px 50px;
            background: #fff;
        }

        .reset-header {
            margin-bottom: 30px;
        }

        .reset-header h3 {
            font-size: 28px;
            font-weight: 700;
            color: #2a2f4f;
            margin-bottom: 10px;
            position: relative;
            padding-bottom: 10px;
        }

        .reset-header h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 4px;
            background: #cd7f32;
            border-radius: 10px;
        }

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

        .form-group input {
            width: 100%;
            padding: 15px;
            border: 2px solid #eee;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f9f9f9;
        }

        .form-group input:focus {
            border-color: #cd7f32;
            outline: none;
            box-shadow: 0 0 8px rgba(205, 127, 50, 0.3);
            background: #fff;
        }

        .form-group.error input {
            border-color: #e74c3c;
            background-color: #fff8f8;
        }

        .invalid-feedback {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 5px;
            display: none;
        }

        .form-group.error .invalid-feedback {
            display: block;
        }

        .btn {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 15px;
        }

        .btn-primary {
            background: #cd7f32;
            color: white;
        }

        .btn-primary:hover {
            background: #2a2f4f;
            box-shadow: 0 5px 15px rgba(205, 127, 50, 0.3);
        }

        .btn-secondary {
            background: #f0f0f0;
            color: #555;
        }

        .btn-secondary:hover {
            background: #e0e0e0;
            color: #2a2f4f;
        }

        .alert {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 14px;
            display: flex;
            align-items: center;
        }

        .alert i {
            margin-right: 10px;
            font-size: 18px;
        }

        .alert-danger {
            background: #ffe5e5;
            color: #e74c3c;
            border: 1px solid #ffcccc;
        }

        .alert-success {
            background: #e8f8f5;
            color: #27ae60;
            border: 1px solid #d1f2ea;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .left-section,
            .right-section {
                width: 100%;
            }

            .left-section {
                padding: 40px 20px;
            }

            .right-section {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <!-- Section Gauche -->
        <div class=\"left-section\">
            <div class=\"icon-container\">
                <i class=\"fas fa-key\"></i>
            </div>
            <h2>Réinitialisation du mot de passe</h2>
            <p>Entrez votre adresse e-mail et nous vous enverrons un lien pour réinitialiser votre mot de passe en toute sécurité.</p>
        </div>

        <!-- Section Droite -->
        <div class=\"right-section\">
            <div class=\"reset-header\">
                <h3>Réinitialiser le mot de passe</h3>
            </div>

            {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger\">
                    <i class=\"fas fa-exclamation-circle\"></i>
                    {{ message }}
                </div>
            {% endfor %}

            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    <i class=\"fas fa-check-circle\"></i>
                    {{ message }}
                </div>
            {% endfor %}

            <form method=\"post\" id=\"resetForm\">
                <div class=\"form-group\">
                    <label for=\"email\">Adresse e-mail</label>
                    <input type=\"email\" 
                           id=\"email\"
                           name=\"email\" 
                           class=\"form-control\" 
                           required 
                           value=\"{{ app.request.query.get('email') }}\"
                           placeholder=\"Entrez votre adresse e-mail\"
                           pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,}\$\">
                    <div class=\"invalid-feedback\">
                        Veuillez entrer une adresse email valide
                    </div>
                </div>

                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-paper-plane\"></i> Envoyer le lien de réinitialisation
                </button>

                <a href=\"{{ path('app_login') }}\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour à la connexion
                </a>
            </form>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('resetForm');
        const emailInput = form.querySelector('input[name=\"email\"]');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const emailGroup = emailInput.closest('.form-group');
            
            if (!emailInput.value || !emailInput.checkValidity()) {
                emailGroup.classList.add('error');
                return;
            }

            emailGroup.classList.remove('error');
            form.submit();
        });

        emailInput.addEventListener('input', function() {
            this.closest('.form-group').classList.remove('error');
        });
    });
    </script>
</body>
</html>", "reset_password/request.html.twig", "C:\\Users\\DELL\\Desktop\\pidev-user\\templates\\reset_password\\request.html.twig");
    }
}
