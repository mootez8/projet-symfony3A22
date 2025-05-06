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

/* front/profile.html.twig */
class __TwigTemplate_2d3416968575bc1ae94c225a3baaaf1b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/profile.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Profile - Event Planner</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --success-color: #28a745;
            --background-color: #f8f9fa;
            --text-color: #212529;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .page-header {
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--primary-color);
        }

        .page-header h1 {
            color: var(--primary-color);
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .page-header p {
            color: var(--secondary-color);
            font-size: 1.1rem;
        }

        .avatar-container {
            width: 150px;
            height: 150px;
            margin: 0 auto 2rem;
            position: relative;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 3px solid var(--primary-color);
        }

        .avatar-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .avatar-upload {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            padding: 0.5rem;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .avatar-container:hover .avatar-upload {
            opacity: 1;
        }

        .avatar-upload label {
            color: white;
            cursor: pointer;
            margin: 0;
            font-size: 0.9rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text-color);
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background-color: var(--secondary-color);
            color: white;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            transform: translateY(-1px);
        }

        .profile-container {
            display: flex;
            gap: 2rem;
            margin-top: 2rem;
        }

        .left-section {
            flex: 0 0 300px;
            text-align: center;
        }

        .right-section {
            flex: 1;
        }

        .button-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            justify-content: center;
        }

        @media (max-width: 768px) {
            .profile-container {
                flex-direction: column;
            }

            .left-section {
                flex: none;
                width: 100%;
            }

            .container {
                margin: 1rem;
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"page-header\">
            <h1>My Profile</h1>
            <p>Manage your personal information and profile picture</p>
        </div>

        <div class=\"profile-container\">
            <!-- Left Section - Avatar -->
            <div class=\"left-section\">
                <div class=\"avatar-container\">
                    ";
        // line 196
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "photoDeProfile", [], "any", false, false, false, 196)) {
            // line 197
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 197, $this->source); })()), "photoFile"), "html", null, true);
            yield "\" class=\"avatar-image\" alt=\"Profile Avatar\">
                    ";
        } else {
            // line 199
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontOffice/img/default-avatar.png"), "html", null, true);
            yield "\" class=\"avatar-image\" alt=\"Default Avatar\">
                    ";
        }
        // line 201
        yield "                    <div class=\"avatar-upload\">
                        <label for=\"profile_photoFile\">
                            <i class=\"fas fa-camera\"></i> Change Photo
                        </label>
                    </div>
                </div>
            </div>

            <!-- Right Section - Form -->
            <div class=\"right-section\">
                ";
        // line 211
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), 'form_start', ["attr" => ["class" => "profile-form", "novalidate" => "novalidate"]]);
        yield "
                    <div class=\"form-group\">
                        ";
        // line 213
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "photoFile", [], "any", false, false, false, 213), 'label');
        yield "
                        ";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "photoFile", [], "any", false, false, false, 214), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 215
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), "photoFile", [], "any", false, false, false, 215), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 219
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "nom", [], "any", false, false, false, 219), 'label');
        yield "
                        ";
        // line 220
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), "nom", [], "any", false, false, false, 220), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 221
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "nom", [], "any", false, false, false, 221), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 225
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "prenom", [], "any", false, false, false, 225), 'label');
        yield "
                        ";
        // line 226
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })()), "prenom", [], "any", false, false, false, 226), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 227
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "prenom", [], "any", false, false, false, 227), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 231
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "email", [], "any", false, false, false, 231), 'label');
        yield "
                        ";
        // line 232
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "email", [], "any", false, false, false, 232), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 233
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "email", [], "any", false, false, false, 233), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 237
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "numtlf", [], "any", false, false, false, 237), 'label');
        yield "
                        ";
        // line 238
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "numtlf", [], "any", false, false, false, 238), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 239
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "numtlf", [], "any", false, false, false, 239), 'errors');
        yield "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 243
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "age", [], "any", false, false, false, 243), 'label');
        yield "
                        ";
        // line 244
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "age", [], "any", false, false, false, 244), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        ";
        // line 245
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "age", [], "any", false, false, false, 245), 'errors');
        yield "
                    </div>

                    <div class=\"button-group\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> Save Changes
                        </button>
                        <a href=\"";
        // line 252
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-home\"></i> Return to Home
                        </a>
                    </div>
                ";
        // line 256
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.querySelector('#profile_photoFile');
            const avatarImage = document.querySelector('.avatar-image');

            fileInput.addEventListener('change', function(e) {
                if (this.files && this.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        avatarImage.src = e.target.result;
                    };
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
    </script>
</body>
</html> ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/profile.html.twig";
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
        return array (  376 => 256,  369 => 252,  359 => 245,  355 => 244,  351 => 243,  344 => 239,  340 => 238,  336 => 237,  329 => 233,  325 => 232,  321 => 231,  314 => 227,  310 => 226,  306 => 225,  299 => 221,  295 => 220,  291 => 219,  284 => 215,  280 => 214,  276 => 213,  271 => 211,  259 => 201,  253 => 199,  247 => 197,  245 => 196,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Profile - Event Planner</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\">
    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --success-color: #28a745;
            --background-color: #f8f9fa;
            --text-color: #212529;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .page-header {
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid var(--primary-color);
        }

        .page-header h1 {
            color: var(--primary-color);
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .page-header p {
            color: var(--secondary-color);
            font-size: 1.1rem;
        }

        .avatar-container {
            width: 150px;
            height: 150px;
            margin: 0 auto 2rem;
            position: relative;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 3px solid var(--primary-color);
        }

        .avatar-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .avatar-upload {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            padding: 0.5rem;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .avatar-container:hover .avatar-upload {
            opacity: 1;
        }

        .avatar-upload label {
            color: white;
            cursor: pointer;
            margin: 0;
            font-size: 0.9rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text-color);
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-1px);
        }

        .btn-secondary {
            background-color: var(--secondary-color);
            color: white;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            transform: translateY(-1px);
        }

        .profile-container {
            display: flex;
            gap: 2rem;
            margin-top: 2rem;
        }

        .left-section {
            flex: 0 0 300px;
            text-align: center;
        }

        .right-section {
            flex: 1;
        }

        .button-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            justify-content: center;
        }

        @media (max-width: 768px) {
            .profile-container {
                flex-direction: column;
            }

            .left-section {
                flex: none;
                width: 100%;
            }

            .container {
                margin: 1rem;
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"page-header\">
            <h1>My Profile</h1>
            <p>Manage your personal information and profile picture</p>
        </div>

        <div class=\"profile-container\">
            <!-- Left Section - Avatar -->
            <div class=\"left-section\">
                <div class=\"avatar-container\">
                    {% if user.photoDeProfile %}
                        <img src=\"{{ vich_uploader_asset(user, 'photoFile') }}\" class=\"avatar-image\" alt=\"Profile Avatar\">
                    {% else %}
                        <img src=\"{{ asset('assets/frontOffice/img/default-avatar.png') }}\" class=\"avatar-image\" alt=\"Default Avatar\">
                    {% endif %}
                    <div class=\"avatar-upload\">
                        <label for=\"profile_photoFile\">
                            <i class=\"fas fa-camera\"></i> Change Photo
                        </label>
                    </div>
                </div>
            </div>

            <!-- Right Section - Form -->
            <div class=\"right-section\">
                {{ form_start(form, {'attr': {'class': 'profile-form', 'novalidate': 'novalidate'}}) }}
                    <div class=\"form-group\">
                        {{ form_label(form.photoFile) }}
                        {{ form_widget(form.photoFile, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.photoFile) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.nom) }}
                        {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.nom) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.prenom) }}
                        {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.prenom) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.email) }}
                        {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.email) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.numtlf) }}
                        {{ form_widget(form.numtlf, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.numtlf) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.age) }}
                        {{ form_widget(form.age, {'attr': {'class': 'form-control'}}) }}
                        {{ form_errors(form.age) }}
                    </div>

                    <div class=\"button-group\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> Save Changes
                        </button>
                        <a href=\"{{ path('app_home') }}\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-home\"></i> Return to Home
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.querySelector('#profile_photoFile');
            const avatarImage = document.querySelector('.avatar-image');

            fileInput.addEventListener('change', function(e) {
                if (this.files && this.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        avatarImage.src = e.target.result;
                    };
                    reader.readAsDataURL(this.files[0]);
                }
            });
        });
    </script>
</body>
</html> ", "front/profile.html.twig", "D:\\pidev-user\\templates\\front\\profile.html.twig");
    }
}
