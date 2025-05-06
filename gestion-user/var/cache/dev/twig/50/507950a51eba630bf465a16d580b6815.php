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

/* security/login.html.twig */
class __TwigTemplate_fac2addfb5e5373e3655bb75a4dd544d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Connexion | Event Planner</title>
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

        /* Section Gauche - Image */
        .left-section {
            width: 40%;
            position: relative;
            background: url('https://source.unsplash.com/random/800x1200/?art,escape') center/cover;
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

        .welcome-text {
            color: #fff;
            z-index: 3;
        }

        .welcome-text h2 {
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: 600;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .welcome-text p {
            font-size: 16px;
            margin-bottom: 30px;
            line-height: 1.6;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
        }

        /* Section Droite - Formulaire */
        .right-section {
            width: 60%;
            padding: 40px 50px;
            background: #fff;
        }

        .login-header {
            margin-bottom: 30px;
        }

        .login-header h3 {
            font-size: 28px;
            font-weight: 700;
            color: #2a2f4f;
            margin-bottom: 10px;
            position: relative;
            padding-bottom: 10px;
        }

        .login-header h3::after {
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

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .remember-me input[type=\"checkbox\"] {
            width: 16px;
            height: 16px;
        }

        .forgot-password {
            color: #cd7f32;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s;
        }

        .forgot-password:hover {
            color: #2a2f4f;
            text-decoration: underline;
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

        .btn-login {
            background: #cd7f32;
            color: white;
        }

        .btn-login:hover {
            background: #2a2f4f;
            box-shadow: 0 5px 15px rgba(205, 127, 50, 0.3);
        }

        .btn-register {
            background: #f0f0f0;
            color: #555;
        }

        .btn-register:hover {
            background: #e0e0e0;
            color: #2a2f4f;
        }

        .alert {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert-danger {
            background: #ffe5e5;
            color: #e74c3c;
            border: 1px solid #ffcccc;
        }

        .alert-info {
            background: #e5f6fd;
            color: #3498db;
            border: 1px solid #bde9ff;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .left-section, .right-section {
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
        <!-- Section Gauche - Image et texte de bienvenue -->
        <div class=\"left-section\">
            <div class=\"welcome-text\">
                <h2>Bienvenue sur Event Planner</h2>
                <p>Connectez-vous pour accéder à votre espace personnel et découvrir notre univers artistique unique.</p>
            </div>
        </div>

        <!-- Section Droite - Formulaire de connexion -->
        <div class=\"right-section\">
            <div class=\"login-header\">
                <h3>Connexion</h3>
            </div>

            ";
        // line 263
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 263, $this->source); })())) {
            // line 264
            yield "                <div class=\"alert alert-danger\">
                    ";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 265, $this->source); })()), "messageKey", [], "any", false, false, false, 265), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 265, $this->source); })()), "messageData", [], "any", false, false, false, 265), "security"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 268
        yield "
            ";
        // line 269
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 269, $this->source); })()), "user", [], "any", false, false, false, 269)) {
            // line 270
            yield "                <div class=\"alert alert-info\">
                    Vous êtes connecté en tant que <strong>";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 271, $this->source); })()), "user", [], "any", false, false, false, 271), "userIdentifier", [], "any", false, false, false, 271), "html", null, true);
            yield "</strong>,
                    <a href=\"";
            // line 272
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Se déconnecter</a>
                </div>
            ";
        }
        // line 275
        yield "
            <form method=\"post\" action=\"";
        // line 276
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                <div class=\"form-group\">
                    <label for=\"email\">Email</label>
                    <input type=\"email\" id=\"email\" name=\"email\" value=\"";
        // line 279
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 279, $this->source); })()), "html", null, true);
        yield "\" 
                           class=\"form-control\" required autocomplete=\"email\" 
                           placeholder=\"Votre adresse email\">
                </div>

                <div class=\"form-group\">
                    <label for=\"password\">Mot de passe</label>
                    <input type=\"password\" id=\"password\" name=\"password\" 
                           class=\"form-control\" required autocomplete=\"current-password\"
                           placeholder=\"Votre mot de passe\">
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                <div class=\"remember-forgot\">
                    <label class=\"remember-me\">
                        <input type=\"checkbox\" name=\"_remember_me\">
                        <span>Se souvenir de moi</span>
                    </label>
                    <a href=\"";
        // line 298
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"forgot-password\">
                        Mot de passe oublié ?
                    </a>
                </div>

                <button type=\"submit\" class=\"btn btn-login\">
                    <i class=\"fas fa-sign-in-alt\"></i> Se connecter
                </button>

                <a href=\"";
        // line 307
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn btn-register\">
                    <i class=\"fas fa-user-plus\"></i> Créer un compte
                </a>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation des champs de formulaire
            const inputs = document.querySelectorAll('.form-control');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.parentElement.classList.remove('focused');
                    }
                });
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
        return "security/login.html.twig";
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
        return array (  390 => 307,  378 => 298,  368 => 291,  353 => 279,  347 => 276,  344 => 275,  338 => 272,  334 => 271,  331 => 270,  329 => 269,  326 => 268,  320 => 265,  317 => 264,  315 => 263,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Connexion | Event Planner</title>
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

        /* Section Gauche - Image */
        .left-section {
            width: 40%;
            position: relative;
            background: url('https://source.unsplash.com/random/800x1200/?art,escape') center/cover;
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

        .welcome-text {
            color: #fff;
            z-index: 3;
        }

        .welcome-text h2 {
            font-size: 28px;
            margin-bottom: 20px;
            font-weight: 600;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .welcome-text p {
            font-size: 16px;
            margin-bottom: 30px;
            line-height: 1.6;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
        }

        /* Section Droite - Formulaire */
        .right-section {
            width: 60%;
            padding: 40px 50px;
            background: #fff;
        }

        .login-header {
            margin-bottom: 30px;
        }

        .login-header h3 {
            font-size: 28px;
            font-weight: 700;
            color: #2a2f4f;
            margin-bottom: 10px;
            position: relative;
            padding-bottom: 10px;
        }

        .login-header h3::after {
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

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .remember-me input[type=\"checkbox\"] {
            width: 16px;
            height: 16px;
        }

        .forgot-password {
            color: #cd7f32;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s;
        }

        .forgot-password:hover {
            color: #2a2f4f;
            text-decoration: underline;
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

        .btn-login {
            background: #cd7f32;
            color: white;
        }

        .btn-login:hover {
            background: #2a2f4f;
            box-shadow: 0 5px 15px rgba(205, 127, 50, 0.3);
        }

        .btn-register {
            background: #f0f0f0;
            color: #555;
        }

        .btn-register:hover {
            background: #e0e0e0;
            color: #2a2f4f;
        }

        .alert {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .alert-danger {
            background: #ffe5e5;
            color: #e74c3c;
            border: 1px solid #ffcccc;
        }

        .alert-info {
            background: #e5f6fd;
            color: #3498db;
            border: 1px solid #bde9ff;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .left-section, .right-section {
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
        <!-- Section Gauche - Image et texte de bienvenue -->
        <div class=\"left-section\">
            <div class=\"welcome-text\">
                <h2>Bienvenue sur Event Planner</h2>
                <p>Connectez-vous pour accéder à votre espace personnel et découvrir notre univers artistique unique.</p>
            </div>
        </div>

        <!-- Section Droite - Formulaire de connexion -->
        <div class=\"right-section\">
            <div class=\"login-header\">
                <h3>Connexion</h3>
            </div>

            {% if error %}
                <div class=\"alert alert-danger\">
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
            {% endif %}

            {% if app.user %}
                <div class=\"alert alert-info\">
                    Vous êtes connecté en tant que <strong>{{ app.user.userIdentifier }}</strong>,
                    <a href=\"{{ path('app_logout') }}\">Se déconnecter</a>
                </div>
            {% endif %}

            <form method=\"post\" action=\"{{ path('app_login') }}\">
                <div class=\"form-group\">
                    <label for=\"email\">Email</label>
                    <input type=\"email\" id=\"email\" name=\"email\" value=\"{{ last_username }}\" 
                           class=\"form-control\" required autocomplete=\"email\" 
                           placeholder=\"Votre adresse email\">
                </div>

                <div class=\"form-group\">
                    <label for=\"password\">Mot de passe</label>
                    <input type=\"password\" id=\"password\" name=\"password\" 
                           class=\"form-control\" required autocomplete=\"current-password\"
                           placeholder=\"Votre mot de passe\">
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                <div class=\"remember-forgot\">
                    <label class=\"remember-me\">
                        <input type=\"checkbox\" name=\"_remember_me\">
                        <span>Se souvenir de moi</span>
                    </label>
                    <a href=\"{{ path('app_forgot_password_request') }}\" class=\"forgot-password\">
                        Mot de passe oublié ?
                    </a>
                </div>

                <button type=\"submit\" class=\"btn btn-login\">
                    <i class=\"fas fa-sign-in-alt\"></i> Se connecter
                </button>

                <a href=\"{{ path('app_register') }}\" class=\"btn btn-register\">
                    <i class=\"fas fa-user-plus\"></i> Créer un compte
                </a>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation des champs de formulaire
            const inputs = document.querySelectorAll('.form-control');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.parentElement.classList.remove('focused');
                    }
                });
            });
        });
    </script>
</body>
</html>", "security/login.html.twig", "D:\\pidev-user\\templates\\security\\login.html.twig");
    }
}
