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

/* registration/register.html.twig */
class __TwigTemplate_7712f528e38d2644957f09629405b8eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Inscription | Event Planner</title>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

\t\t<!-- Styles CSS -->
\t\t<style>
\t\t\t/* Design global */
\t\t\t* {
\t\t\t\tbox-sizing: border-box;
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t}

\t\t\tbody {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: center;
\t\t\t\talign-items: center;
\t\t\t\tmin-height: 100vh;
\t\t\t\tbackground: linear-gradient(135deg, #2a2f4f, #cd7f32);
\t\t\t\tfont-family: 'Poppins', sans-serif;
\t\t\t\tpadding: 20px;
\t\t\t}

\t\t\t.container {
\t\t\t\tdisplay: flex;
\t\t\t\twidth: 1000px;
\t\t\t\tmax-width: 100%;
\t\t\t\tbackground: #fff;
\t\t\t\tborder-radius: 16px;
\t\t\t\toverflow: hidden;
\t\t\t\tbox-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
\t\t\t\ttransition: transform 0.3s ease;
\t\t\t\tposition: relative;
\t\t\t}

\t\t\t.container:hover {
\t\t\t\ttransform: translateY(-5px);
\t\t\t}

\t\t\t/* Section Gauche - Avatar + Image animée */
\t\t\t.left-section {
\t\t\t\twidth: 40%;
\t\t\t\tposition: relative;
\t\t\t\tbackground: url('https://source.unsplash.com/random/800x1200/?art,escape') center/cover;
\t\t\t\tdisplay: flex;
\t\t\t\tflex-direction: column;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t\ttext-align: center;
\t\t\t\tpadding: 40px 20px;
\t\t\t\tz-index: 2;
\t\t\t}

\t\t\t.left-section::before {
\t\t\t\tcontent: '';
\t\t\t\tposition: absolute;
\t\t\t\ttop: 0;
\t\t\t\tleft: 0;
\t\t\t\tright: 0;
\t\t\t\tbottom: 0;
\t\t\t\tbackground: linear-gradient(135deg, rgba(42, 47, 79, 0.85), rgba(205, 127, 50, 0.85));
\t\t\t\tz-index: -1;
\t\t\t}

\t\t\t.avatar-container {
\t\t\t\twidth: 140px;
\t\t\t\theight: 140px;
\t\t\t\tbackground: rgba(255, 255, 255, 0.2);
\t\t\t\tborder-radius: 50%;
\t\t\t\tpadding: 5px;
\t\t\t\tmargin-bottom: 20px;
\t\t\t\tbox-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
\t\t\t\tanimation: pulse 2s infinite;
\t\t\t\tposition: relative;
\t\t\t\tz-index: 3;
\t\t\t}

\t\t\t@keyframes pulse {
\t\t\t\t0% {
\t\t\t\t\tbox-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
\t\t\t\t}
\t\t\t\t70% {
\t\t\t\t\tbox-shadow: 0 0 0 15px rgba(255, 255, 255, 0);
\t\t\t\t}
\t\t\t\t100% {
\t\t\t\t\tbox-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
\t\t\t\t}
\t\t\t}

\t\t\t.avatar-animation {
\t\t\t\twidth: 100%;
\t\t\t\theight: 100%;
\t\t\t\tborder-radius: 50%;
\t\t\t\tobject-fit: cover;
\t\t\t\tborder: 3px solid #fff;
\t\t\t\tdisplay: block;
\t\t\t}

\t\t\t.left-section h2 {
\t\t\t\tcolor: #fff;
\t\t\t\tfont-size: 28px;
\t\t\t\tmargin-bottom: 10px;
\t\t\t\tfont-weight: 600;
\t\t\t\ttext-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
\t\t\t\tposition: relative;
\t\t\t\tz-index: 3;
\t\t\t}

\t\t\t.left-section p {
\t\t\t\tcolor: #fff;
\t\t\t\tfont-size: 16px;
\t\t\t\tmargin-bottom: 25px;
\t\t\t\tmax-width: 80%;
\t\t\t\tline-height: 1.5;
\t\t\t\ttext-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
\t\t\t\tposition: relative;
\t\t\t\tz-index: 3;
\t\t\t}

\t\t\t.btn-avatar {
\t\t\t\tbackground: #fff;
\t\t\t\tcolor: #2a2f4f;
\t\t\t\tpadding: 15px 25px;
\t\t\t\tborder-radius: 30px;
\t\t\t\tfont-size: 15px;
\t\t\t\tfont-weight: 600;
\t\t\t\tcursor: pointer;
\t\t\t\ttext-decoration: none;
\t\t\t\ttransition: 0.3s;
\t\t\t\tdisplay: inline-block;
\t\t\t\tborder: none;
\t\t\t\tbox-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
\t\t\t\tposition: relative;
\t\t\t\toverflow: hidden;
\t\t\t\tz-index: 3;
\t\t\t}

\t\t\t.btn-avatar::before {
\t\t\t\tcontent: '';
\t\t\t\tposition: absolute;
\t\t\t\ttop: 0;
\t\t\t\tleft: 0;
\t\t\t\twidth: 0%;
\t\t\t\theight: 100%;
\t\t\t\tbackground: #cd7f32;
\t\t\t\ttransition: all 0.4s ease;
\t\t\t\tz-index: -1;
\t\t\t\tborder-radius: 30px;
\t\t\t}

\t\t\t.btn-avatar:hover {
\t\t\t\tcolor: #fff;
\t\t\t}

\t\t\t.btn-avatar:hover::before {
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.btn-avatar i {
\t\t\t\tmargin-right: 8px;
\t\t\t}

\t\t\t@keyframes fadeIn {
\t\t\t\tfrom {
\t\t\t\t\topacity: 0;
\t\t\t\t\ttransform: translateY(-20px);
\t\t\t\t}
\t\t\t\tto {
\t\t\t\t\topacity: 1;
\t\t\t\t\ttransform: translateY(0);
\t\t\t\t}
\t\t\t}

\t\t\t/* Section Droite - Formulaire */
\t\t\t.right-section {
\t\t\t\twidth: 60%;
\t\t\t\tpadding: 40px 50px;
\t\t\t\tbackground: #fff;
\t\t\t\tposition: relative;
\t\t\t\tz-index: 1;
\t\t\t}

\t\t\th3 {
\t\t\t\tfont-size: 28px;
\t\t\t\tfont-weight: 700;
\t\t\t\tcolor: #2a2f4f;
\t\t\t\tmargin-bottom: 25px;
\t\t\t\tposition: relative;
\t\t\t\tpadding-bottom: 10px;
\t\t\t}

\t\t\th3::after {
\t\t\t\tcontent: '';
\t\t\t\tposition: absolute;
\t\t\t\tbottom: 0;
\t\t\t\tleft: 0;
\t\t\t\twidth: 50px;
\t\t\t\theight: 4px;
\t\t\t\tbackground: #cd7f32;
\t\t\t\tborder-radius: 10px;
\t\t\t}

\t\t\t.form-group {
\t\t\t\tdisplay: flex;
\t\t\t\tflex-direction: column;
\t\t\t\tmargin-bottom: 20px;
\t\t\t\tposition: relative;
\t\t\t}

\t\t\t.form-group label {
\t\t\t\tfont-size: 15px;
\t\t\t\tcolor: #555;
\t\t\t\tfont-weight: 500;
\t\t\t\tmargin-bottom: 8px;
\t\t\t}

\t\t\t.form-group input {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 15px;
\t\t\t\tborder: 2px solid #eee;
\t\t\t\tborder-radius: 10px;
\t\t\t\tfont-size: 15px;
\t\t\t\ttransition: all 0.3s ease;
\t\t\t\tbackground: #f9f9f9;
\t\t\t\tcolor: #333;
\t\t\t\tfont-family: 'Poppins', sans-serif;
\t\t\t}

\t\t\t.form-group input:focus {
\t\t\t\tborder-color: #cd7f32;
\t\t\t\toutline: none;
\t\t\t\tbox-shadow: 0 0 8px rgba(205, 127, 50, 0.3);
\t\t\t\tbackground: #fff;
\t\t\t}

\t\t\t.form-group input::placeholder {
\t\t\t\tcolor: #aaa;
\t\t\t\tfont-weight: 300;
\t\t\t}

\t\t\t.text-danger {
\t\t\t\tcolor: #e74c3c;
\t\t\t\tfont-size: 13px;
\t\t\t\tmargin-top: 5px;
\t\t\t}

\t\t\t/* Regroupement des champs Nom et Prénom */
\t\t\t.name-group {
\t\t\t\tdisplay: flex;
\t\t\t\tgap: 20px;
\t\t\t\tmargin-bottom: 20px;
\t\t\t}

\t\t\t.name-group .form-group {
\t\t\t\twidth: 50%;
\t\t\t\tmargin-bottom: 0;
\t\t\t}

\t\t\t/* Sélecteur de rôle stylisé */
\t\t\t.role-group {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: flex-start;
\t\t\t\tgap: 20px;
\t\t\t\tmargin-top: 15px;
\t\t\t}

\t\t\t.role-option {
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t\twidth: 150px;
\t\t\t\theight: 55px;
\t\t\t\tborder-radius: 12px;
\t\t\t\tborder: 2px solid #eee;
\t\t\t\tcolor: #666;
\t\t\t\tfont-weight: 500;
\t\t\t\tcursor: pointer;
\t\t\t\ttransition: all 0.3s;
\t\t\t\tfont-size: 15px;
\t\t\t\tbackground: #f9f9f9;
\t\t\t\ttext-align: center;
\t\t\t\tbox-shadow: 0 3px 6px rgba(0, 0, 0, 0.05);
\t\t\t}

\t\t\t.role-option i {
\t\t\t\tmargin-right: 10px;
\t\t\t\tfont-size: 18px;
\t\t\t}

\t\t\t/* Rôle sélectionné */
\t\t\t.role-option.active {
\t\t\t\tbackground: #2a2f4f;
\t\t\t\tcolor: white;
\t\t\t\tborder-color: #2a2f4f;
\t\t\t\ttransform: translateY(-3px);
\t\t\t\tbox-shadow: 0 6px 12px rgba(42, 47, 79, 0.2);
\t\t\t}

\t\t\t/* Animation au survol */
\t\t\t.role-option:hover {
\t\t\t\tborder-color: #cd7f32;
\t\t\t\tcolor: #cd7f32;
\t\t\t\ttransform: translateY(-2px);
\t\t\t}

\t\t\t/* Caché l'input radio */
\t\t\t.role-option input {
\t\t\t\tdisplay: none;
\t\t\t}

\t\t\t/* Espacement entre les champs et les boutons */
\t\t\t.buttons {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: space-between;
\t\t\t\tmargin-top: 40px;
\t\t\t\tposition: relative;
\t\t\t\tz-index: 2;
\t\t\t}

\t\t\t.btn {
\t\t\t\tpadding: 15px 30px;
\t\t\t\tborder-radius: 12px;
\t\t\t\tfont-size: 16px;
\t\t\t\tfont-weight: 600;
\t\t\t\tcursor: pointer;
\t\t\t\ttransition: all 0.3s;
\t\t\t\ttext-align: center;
\t\t\t\ttext-decoration: none;
\t\t\t\tdisplay: inline-block;
\t\t\t\twidth: 48%;
\t\t\t\tfont-family: 'Poppins', sans-serif;
\t\t\t\tposition: relative;
\t\t\t\toverflow: hidden;
\t\t\t\tz-index: 1;
\t\t\t}

\t\t\t.btn-cancel {
\t\t\t\tbackground: #f0f0f0;
\t\t\t\tcolor: #555;
\t\t\t\tborder: none;
\t\t\t}

\t\t\t.btn-confirm {
\t\t\t\tbackground: #cd7f32;
\t\t\t\tcolor: white;
\t\t\t\tborder: none;
\t\t\t}

\t\t\t.btn::before {
\t\t\t\tcontent: '';
\t\t\t\tposition: absolute;
\t\t\t\ttop: 0;
\t\t\t\tleft: 0;
\t\t\t\twidth: 0%;
\t\t\t\theight: 100%;
\t\t\t\tz-index: -1;
\t\t\t\ttransition: all 0.4s ease;
\t\t\t}

\t\t\t.btn-cancel::before {
\t\t\t\tbackground: #e0e0e0;
\t\t\t}

\t\t\t.btn-confirm::before {
\t\t\t\tbackground: #2a2f4f;
\t\t\t}

\t\t\t.btn:hover::before {
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.btn-cancel:hover {
\t\t\t\tbox-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
\t\t\t}

\t\t\t.btn-confirm:hover {
\t\t\t\tbox-shadow: 0 5px 15px rgba(205, 127, 50, 0.3);
\t\t\t}

\t\t\t.signin-section {
        text-align: center;
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #eee;
    }

    .signin-section h4 {
        color: #2a2f4f;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .signin-section h4::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 100%;
        height: 3px;
        background: #cd7f32;
        border-radius: 10px;
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .signin-section:hover h4::after {
        transform: scaleX(1);
    }

    .signin-link-container {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    .signin-link {
        color: #2a2f4f;
        font-size: 15px;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        position: relative;
        padding: 8px 12px;
        border-radius: 8px;
    }

    .signin-link:hover {
        color: #cd7f32;
        transform: translateY(-2px);
    }

    .signin-link i {
        margin-left: 8px;
        transition: transform 0.3s ease;
    }

    .signin-link:hover i {
        transform: translateX(5px);
    }

\t\t\t/* Responsive design */
\t\t\t@media (max-width: 768px) {
\t\t\t\t.container {
\t\t\t\t\tflex-direction: column;
\t\t\t\t\twidth: 100%;
\t\t\t\t}

\t\t\t\t.left-section, .right-section {
\t\t\t\t\twidth: 100%;
\t\t\t\t}

\t\t\t\t.left-section {
\t\t\t\t\tpadding: 40px 20px;
\t\t\t\t\torder: -1;
\t\t\t\t}

\t\t\t\t.right-section {
\t\t\t\t\tpadding: 40px 30px;
\t\t\t\t}

\t\t\t\t.name-group {
\t\t\t\t\tflex-direction: column;
\t\t\t\t\tgap: 15px;
\t\t\t\t}

\t\t\t\t.name-group .form-group {
\t\t\t\t\twidth: 100%;
\t\t\t\t\tmargin-bottom: 0;
\t\t\t\t}

\t\t\t\t.role-group {
\t\t\t\t\tflex-direction: column;
\t\t\t\t\talign-items: center;
\t\t\t\t}

\t\t\t\t.role-option {
\t\t\t\t\twidth: 100%;
\t\t\t\t}
\t\t\t}

\t\t\t/* Animation de chargement */
\t\t\t.form-loading {
\t\t\t\tposition: relative;
\t\t\t}

\t\t\t.form-loading::after {
\t\t\t\tcontent: '';
\t\t\t\tposition: absolute;
\t\t\t\twidth: 100%;
\t\t\t\theight: 3px;
\t\t\t\tbackground: linear-gradient(to right, #2a2f4f, #cd7f32);
\t\t\t\tbottom: 0;
\t\t\t\tleft: 0;
\t\t\t\tanimation: formLoading 2s infinite;
\t\t\t}

\t\t\t@keyframes formLoading {
\t\t\t\t0% { width: 0%; left: 0; }
\t\t\t\t50% { width: 100%; left: 0; }
\t\t\t\t100% { width: 0%; left: 100%; }
\t\t\t}

\t\t\t
\t\t</style>
\t</head>
\t<body>

\t\t<div class=\"container\">
\t\t\t<!-- Section Gauche - Avatar + Image animée -->
\t\t\t<div class=\"left-section\">
\t\t\t\t<div class=\"avatar-container\">
\t\t\t\t\t";
        // line 522
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 522, $this->source); })()), "session", [], "any", false, false, false, 522), "get", ["temp_avatar_url"], "method", false, false, false, 522)) {
            // line 523
            yield "\t\t\t\t\t\t<img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 523, $this->source); })()), "session", [], "any", false, false, false, 523), "get", ["temp_avatar_url"], "method", false, false, false, 523), [".glb" => ".png"]), "html", null, true);
            yield "\" class=\"avatar-animation\" alt=\"Avatar\">
\t\t\t\t\t";
        } else {
            // line 525
            yield "\t\t\t\t\t\t<img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/images/default_avatar.png"), "html", null, true);
            yield "\" class=\"avatar-animation\" alt=\"Avatar Animation\">
\t\t\t\t\t";
        }
        // line 527
        yield "\t\t\t\t</div>
\t\t\t\t<h2>Crée ton propre avatar !</h2>
\t\t\t\t<p>Personnalise ton expérience Event Planner avec un avatar unique qui te représente.</p>
\t\t\t\t<a href=\"";
        // line 530
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avatar_create");
        yield "\" class=\"btn-avatar\">
\t\t\t\t\t<i class=\"fas fa-magic\"></i> Crée ton avatar
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<!-- Section Droite - Formulaire -->
\t\t\t<div class=\"right-section\">
\t\t\t\t<h3>Inscription</h3>

\t\t\t\t";
        // line 539
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 539, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "form-loading"]]);
        yield "

\t\t\t\t<!-- Nom et Prénom ensemble -->
\t\t\t\t<div class=\"name-group\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 544
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 544, $this->source); })()), "nom", [], "any", false, false, false, 544), 'label', ["label" => "Nom"]);
        yield "
\t\t\t\t\t\t";
        // line 545
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 545, $this->source); })()), "nom", [], "any", false, false, false, 545), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom"]]);
        yield "
\t\t\t\t\t\t<div class=\"text-danger\">";
        // line 546
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 546, $this->source); })()), "nom", [], "any", false, false, false, 546), 'errors');
        yield "</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 550
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 550, $this->source); })()), "prenom", [], "any", false, false, false, 550), 'label', ["label" => "Prénom"]);
        yield "
\t\t\t\t\t\t";
        // line 551
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 551, $this->source); })()), "prenom", [], "any", false, false, false, 551), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre prénom"]]);
        yield "
\t\t\t\t\t\t<div class=\"text-danger\">";
        // line 552
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 552, $this->source); })()), "prenom", [], "any", false, false, false, 552), 'errors');
        yield "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Email -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 558
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 558, $this->source); })()), "email", [], "any", false, false, false, 558), 'label', ["label" => "Email"]);
        yield "
\t\t\t\t\t";
        // line 559
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 559, $this->source); })()), "email", [], "any", false, false, false, 559), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "exemple@email.com"]]);
        yield "
\t\t\t\t\t<div class=\"text-danger\">";
        // line 560
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 560, $this->source); })()), "email", [], "any", false, false, false, 560), 'errors');
        yield "</div>
\t\t\t\t</div>

\t\t\t\t<!-- Age -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 565
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 565, $this->source); })()), "age", [], "any", false, false, false, 565), 'label', ["label" => "Âge"]);
        yield "
\t\t\t\t\t";
        // line 566
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 566, $this->source); })()), "age", [], "any", false, false, false, 566), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre âge"]]);
        yield "
\t\t\t\t\t<div class=\"text-danger\">";
        // line 567
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 567, $this->source); })()), "age", [], "any", false, false, false, 567), 'errors');
        yield "</div>
\t\t\t\t</div>

\t\t\t\t<!-- Numéro de téléphone -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 572
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 572, $this->source); })()), "numtlf", [], "any", false, false, false, 572), 'label', ["label" => "Numéro de téléphone"]);
        yield "
\t\t\t\t\t";
        // line 573
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 573, $this->source); })()), "numtlf", [], "any", false, false, false, 573), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 06 12 34 56 78"]]);
        yield "
\t\t\t\t\t<div class=\"text-danger\">";
        // line 574
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 574, $this->source); })()), "numtlf", [], "any", false, false, false, 574), 'errors');
        yield "</div>
\t\t\t\t</div>

\t\t\t\t<!-- Mot de passe -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 579
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 579, $this->source); })()), "plainPassword", [], "any", false, false, false, 579), 'label', ["label" => "Mot de passe"]);
        yield "
\t\t\t\t\t";
        // line 580
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 580, $this->source); })()), "plainPassword", [], "any", false, false, false, 580), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Créez un mot de passe sécurisé"]]);
        yield "
\t\t\t\t\t<div class=\"text-danger\">";
        // line 581
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 581, $this->source); })()), "plainPassword", [], "any", false, false, false, 581), 'errors');
        yield "</div>
\t\t\t\t</div>
                
                <!-- Rôle -->
                <div class=\"form-group\">
                    ";
        // line 586
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 586, $this->source); })()), "roles", [], "any", false, false, false, 586), 'label', ["label" => "Choisissez votre rôle"]);
        yield "
                    <div class=\"role-group\">
                        ";
        // line 588
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 588, $this->source); })()), "roles", [], "any", false, false, false, 588), "vars", [], "any", false, false, false, 588), "choices", [], "any", false, false, false, 588));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 589
            yield "                            <label class=\"role-option ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 589), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 589, $this->source); })()), "roles", [], "any", false, false, false, 589), "vars", [], "any", false, false, false, 589), "data", [], "any", false, false, false, 589))) {
                yield "active";
            }
            yield "\">
                                <input type=\"radio\" name=\"";
            // line 590
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 590, $this->source); })()), "roles", [], "any", false, false, false, 590), "vars", [], "any", false, false, false, 590), "full_name", [], "any", false, false, false, 590), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 590), "html", null, true);
            yield "\"
                                      ";
            // line 591
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 591), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 591, $this->source); })()), "roles", [], "any", false, false, false, 591), "vars", [], "any", false, false, false, 591), "data", [], "any", false, false, false, 591))) {
                yield "checked";
            }
            // line 592
            yield "                                      class=\"form-check-input\" onclick=\"updateRoleSelection(this)\">
                                ";
            // line 593
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 593) == "ROLE_USER")) {
                // line 594
                yield "                                    <i class=\"fas fa-user\"></i> Utilisateur
                                ";
            } else {
                // line 596
                yield "                                    <i class=\"fas fa-user-shield\"></i> Administrateur
                                ";
            }
            // line 598
            yield "                            </label>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 600
        yield "                    </div>
                    <div class=\"text-danger\">";
        // line 601
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 601, $this->source); })()), "roles", [], "any", false, false, false, 601), 'errors');
        yield "</div>
                </div>

\t\t\t\t<!-- Champ caché pour l'URL de l'avatar -->
\t\t\t\t";
        // line 605
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 605, $this->source); })()), "avatarUrl", [], "any", false, false, false, 605), 'widget');
        yield "

\t\t\t\t<!-- Boutons -->
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<a href=\"";
        // line 609
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-cancel\">Annuler</a>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-confirm\">Créer mon compte</button>
\t\t\t\t</div>

\t\t\t\t";
        // line 613
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 613, $this->source); })()), 'form_end');
        yield "
                
                <!-- Nouveau lien vers la page de connexion -->
                <div class=\"signin-link-container\">
                    <a href=\"";
        // line 617
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"signin-link\">
                        Vous avez déjà un compte ? Connectez-vous <i class=\"fas fa-arrow-right\"></i>
                    </a>
                </div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Script pour activer/désactiver les rôles -->
\t\t<script>
\t\t\tdocument.addEventListener('DOMContentLoaded', function() {
    // Masquer les champs de rôle générés automatiquement qui apparaissent en double
    const roleFields = document.querySelectorAll('[name^=\"registrationForm[roles]\"]');
    roleFields.forEach(field => {
        const parentDiv = field.closest('.form-group');
        if (parentDiv && !parentDiv.querySelector('.role-group')) {
            parentDiv.style.display = 'none';
        }
    });
});

\t\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
                // Remove loading animation once page is fully loaded
                setTimeout(function() {
                    document.querySelector('.form-loading').classList.remove('form-loading');
                }, 1000);
                
                // Function to handle role selection
                function updateRoleSelection(input) {
                    // Remove active class from all options
                    document.querySelectorAll('.role-option').forEach(function(option) {
                        option.classList.remove(\"active\");
                    });
                    
                    // Add active class to selected option
                    input.closest('.role-option').classList.add(\"active\");
                    
                    // Check the radio input
                    input.checked = true;
                }
                
                // Add click event listener to all role options
                document.querySelectorAll('.role-option').forEach(function(option) {
                    option.addEventListener(\"click\", function() {
                        // Get the radio input inside this option
                        const input = this.querySelector('input[type=\"radio\"]');
                        updateRoleSelection(input);
                    });
                });
                
                // Hide the default Symfony-generated checkboxes
                const originalRoleField = document.querySelector('div:not(.role-group) > input[name^=\"registrationForm[roles]\"]');
                if (originalRoleField) {
                    const parentGroup = originalRoleField.closest('.form-group');
                    if (parentGroup && !parentGroup.querySelector('.role-group')) {
                        parentGroup.style.display = 'none';
                    }
                }
                
                // Add the updateRoleSelection function to global scope for the onclick handler
                window.updateRoleSelection = updateRoleSelection;
                
                // Add input focus animations
                const formInputs = document.querySelectorAll('.form-control');
                formInputs.forEach(input => {
                    input.addEventListener('focus', function() {
                        this.parentElement.classList.add('input-focus');
                    });
                    
                    input.addEventListener('blur', function() {
                        this.parentElement.classList.remove('input-focus');
                    });
                });
            });

\t\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t\t\t// Mettre à jour le champ avatarUrl lorsque l'avatar est créé
\t\t\t\t";
        // line 693
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 693, $this->source); })()), "session", [], "any", false, false, false, 693), "get", ["avatar_url"], "method", false, false, false, 693)) {
            // line 694
            yield "\t\t\t\t\tdocument.querySelector('[name=\"registration_form[avatarUrl]\"]').value = \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 694, $this->source); })()), "session", [], "any", false, false, false, 694), "get", ["avatar_url"], "method", false, false, false, 694), "html", null, true);
            yield "\";
\t\t\t\t";
        }
        // line 696
        yield "\t\t\t});
\t\t</script>
\t</body>
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
        return "registration/register.html.twig";
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
        return array (  870 => 696,  864 => 694,  862 => 693,  783 => 617,  776 => 613,  769 => 609,  762 => 605,  755 => 601,  752 => 600,  745 => 598,  741 => 596,  737 => 594,  735 => 593,  732 => 592,  728 => 591,  722 => 590,  715 => 589,  711 => 588,  706 => 586,  698 => 581,  694 => 580,  690 => 579,  682 => 574,  678 => 573,  674 => 572,  666 => 567,  662 => 566,  658 => 565,  650 => 560,  646 => 559,  642 => 558,  633 => 552,  629 => 551,  625 => 550,  618 => 546,  614 => 545,  610 => 544,  602 => 539,  590 => 530,  585 => 527,  579 => 525,  573 => 523,  571 => 522,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Inscription | Event Planner</title>
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
\t\t<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

\t\t<!-- Styles CSS -->
\t\t<style>
\t\t\t/* Design global */
\t\t\t* {
\t\t\t\tbox-sizing: border-box;
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t}

\t\t\tbody {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: center;
\t\t\t\talign-items: center;
\t\t\t\tmin-height: 100vh;
\t\t\t\tbackground: linear-gradient(135deg, #2a2f4f, #cd7f32);
\t\t\t\tfont-family: 'Poppins', sans-serif;
\t\t\t\tpadding: 20px;
\t\t\t}

\t\t\t.container {
\t\t\t\tdisplay: flex;
\t\t\t\twidth: 1000px;
\t\t\t\tmax-width: 100%;
\t\t\t\tbackground: #fff;
\t\t\t\tborder-radius: 16px;
\t\t\t\toverflow: hidden;
\t\t\t\tbox-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
\t\t\t\ttransition: transform 0.3s ease;
\t\t\t\tposition: relative;
\t\t\t}

\t\t\t.container:hover {
\t\t\t\ttransform: translateY(-5px);
\t\t\t}

\t\t\t/* Section Gauche - Avatar + Image animée */
\t\t\t.left-section {
\t\t\t\twidth: 40%;
\t\t\t\tposition: relative;
\t\t\t\tbackground: url('https://source.unsplash.com/random/800x1200/?art,escape') center/cover;
\t\t\t\tdisplay: flex;
\t\t\t\tflex-direction: column;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t\ttext-align: center;
\t\t\t\tpadding: 40px 20px;
\t\t\t\tz-index: 2;
\t\t\t}

\t\t\t.left-section::before {
\t\t\t\tcontent: '';
\t\t\t\tposition: absolute;
\t\t\t\ttop: 0;
\t\t\t\tleft: 0;
\t\t\t\tright: 0;
\t\t\t\tbottom: 0;
\t\t\t\tbackground: linear-gradient(135deg, rgba(42, 47, 79, 0.85), rgba(205, 127, 50, 0.85));
\t\t\t\tz-index: -1;
\t\t\t}

\t\t\t.avatar-container {
\t\t\t\twidth: 140px;
\t\t\t\theight: 140px;
\t\t\t\tbackground: rgba(255, 255, 255, 0.2);
\t\t\t\tborder-radius: 50%;
\t\t\t\tpadding: 5px;
\t\t\t\tmargin-bottom: 20px;
\t\t\t\tbox-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
\t\t\t\tanimation: pulse 2s infinite;
\t\t\t\tposition: relative;
\t\t\t\tz-index: 3;
\t\t\t}

\t\t\t@keyframes pulse {
\t\t\t\t0% {
\t\t\t\t\tbox-shadow: 0 0 0 0 rgba(255, 255, 255, 0.4);
\t\t\t\t}
\t\t\t\t70% {
\t\t\t\t\tbox-shadow: 0 0 0 15px rgba(255, 255, 255, 0);
\t\t\t\t}
\t\t\t\t100% {
\t\t\t\t\tbox-shadow: 0 0 0 0 rgba(255, 255, 255, 0);
\t\t\t\t}
\t\t\t}

\t\t\t.avatar-animation {
\t\t\t\twidth: 100%;
\t\t\t\theight: 100%;
\t\t\t\tborder-radius: 50%;
\t\t\t\tobject-fit: cover;
\t\t\t\tborder: 3px solid #fff;
\t\t\t\tdisplay: block;
\t\t\t}

\t\t\t.left-section h2 {
\t\t\t\tcolor: #fff;
\t\t\t\tfont-size: 28px;
\t\t\t\tmargin-bottom: 10px;
\t\t\t\tfont-weight: 600;
\t\t\t\ttext-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
\t\t\t\tposition: relative;
\t\t\t\tz-index: 3;
\t\t\t}

\t\t\t.left-section p {
\t\t\t\tcolor: #fff;
\t\t\t\tfont-size: 16px;
\t\t\t\tmargin-bottom: 25px;
\t\t\t\tmax-width: 80%;
\t\t\t\tline-height: 1.5;
\t\t\t\ttext-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
\t\t\t\tposition: relative;
\t\t\t\tz-index: 3;
\t\t\t}

\t\t\t.btn-avatar {
\t\t\t\tbackground: #fff;
\t\t\t\tcolor: #2a2f4f;
\t\t\t\tpadding: 15px 25px;
\t\t\t\tborder-radius: 30px;
\t\t\t\tfont-size: 15px;
\t\t\t\tfont-weight: 600;
\t\t\t\tcursor: pointer;
\t\t\t\ttext-decoration: none;
\t\t\t\ttransition: 0.3s;
\t\t\t\tdisplay: inline-block;
\t\t\t\tborder: none;
\t\t\t\tbox-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
\t\t\t\tposition: relative;
\t\t\t\toverflow: hidden;
\t\t\t\tz-index: 3;
\t\t\t}

\t\t\t.btn-avatar::before {
\t\t\t\tcontent: '';
\t\t\t\tposition: absolute;
\t\t\t\ttop: 0;
\t\t\t\tleft: 0;
\t\t\t\twidth: 0%;
\t\t\t\theight: 100%;
\t\t\t\tbackground: #cd7f32;
\t\t\t\ttransition: all 0.4s ease;
\t\t\t\tz-index: -1;
\t\t\t\tborder-radius: 30px;
\t\t\t}

\t\t\t.btn-avatar:hover {
\t\t\t\tcolor: #fff;
\t\t\t}

\t\t\t.btn-avatar:hover::before {
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.btn-avatar i {
\t\t\t\tmargin-right: 8px;
\t\t\t}

\t\t\t@keyframes fadeIn {
\t\t\t\tfrom {
\t\t\t\t\topacity: 0;
\t\t\t\t\ttransform: translateY(-20px);
\t\t\t\t}
\t\t\t\tto {
\t\t\t\t\topacity: 1;
\t\t\t\t\ttransform: translateY(0);
\t\t\t\t}
\t\t\t}

\t\t\t/* Section Droite - Formulaire */
\t\t\t.right-section {
\t\t\t\twidth: 60%;
\t\t\t\tpadding: 40px 50px;
\t\t\t\tbackground: #fff;
\t\t\t\tposition: relative;
\t\t\t\tz-index: 1;
\t\t\t}

\t\t\th3 {
\t\t\t\tfont-size: 28px;
\t\t\t\tfont-weight: 700;
\t\t\t\tcolor: #2a2f4f;
\t\t\t\tmargin-bottom: 25px;
\t\t\t\tposition: relative;
\t\t\t\tpadding-bottom: 10px;
\t\t\t}

\t\t\th3::after {
\t\t\t\tcontent: '';
\t\t\t\tposition: absolute;
\t\t\t\tbottom: 0;
\t\t\t\tleft: 0;
\t\t\t\twidth: 50px;
\t\t\t\theight: 4px;
\t\t\t\tbackground: #cd7f32;
\t\t\t\tborder-radius: 10px;
\t\t\t}

\t\t\t.form-group {
\t\t\t\tdisplay: flex;
\t\t\t\tflex-direction: column;
\t\t\t\tmargin-bottom: 20px;
\t\t\t\tposition: relative;
\t\t\t}

\t\t\t.form-group label {
\t\t\t\tfont-size: 15px;
\t\t\t\tcolor: #555;
\t\t\t\tfont-weight: 500;
\t\t\t\tmargin-bottom: 8px;
\t\t\t}

\t\t\t.form-group input {
\t\t\t\twidth: 100%;
\t\t\t\tpadding: 15px;
\t\t\t\tborder: 2px solid #eee;
\t\t\t\tborder-radius: 10px;
\t\t\t\tfont-size: 15px;
\t\t\t\ttransition: all 0.3s ease;
\t\t\t\tbackground: #f9f9f9;
\t\t\t\tcolor: #333;
\t\t\t\tfont-family: 'Poppins', sans-serif;
\t\t\t}

\t\t\t.form-group input:focus {
\t\t\t\tborder-color: #cd7f32;
\t\t\t\toutline: none;
\t\t\t\tbox-shadow: 0 0 8px rgba(205, 127, 50, 0.3);
\t\t\t\tbackground: #fff;
\t\t\t}

\t\t\t.form-group input::placeholder {
\t\t\t\tcolor: #aaa;
\t\t\t\tfont-weight: 300;
\t\t\t}

\t\t\t.text-danger {
\t\t\t\tcolor: #e74c3c;
\t\t\t\tfont-size: 13px;
\t\t\t\tmargin-top: 5px;
\t\t\t}

\t\t\t/* Regroupement des champs Nom et Prénom */
\t\t\t.name-group {
\t\t\t\tdisplay: flex;
\t\t\t\tgap: 20px;
\t\t\t\tmargin-bottom: 20px;
\t\t\t}

\t\t\t.name-group .form-group {
\t\t\t\twidth: 50%;
\t\t\t\tmargin-bottom: 0;
\t\t\t}

\t\t\t/* Sélecteur de rôle stylisé */
\t\t\t.role-group {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: flex-start;
\t\t\t\tgap: 20px;
\t\t\t\tmargin-top: 15px;
\t\t\t}

\t\t\t.role-option {
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t\twidth: 150px;
\t\t\t\theight: 55px;
\t\t\t\tborder-radius: 12px;
\t\t\t\tborder: 2px solid #eee;
\t\t\t\tcolor: #666;
\t\t\t\tfont-weight: 500;
\t\t\t\tcursor: pointer;
\t\t\t\ttransition: all 0.3s;
\t\t\t\tfont-size: 15px;
\t\t\t\tbackground: #f9f9f9;
\t\t\t\ttext-align: center;
\t\t\t\tbox-shadow: 0 3px 6px rgba(0, 0, 0, 0.05);
\t\t\t}

\t\t\t.role-option i {
\t\t\t\tmargin-right: 10px;
\t\t\t\tfont-size: 18px;
\t\t\t}

\t\t\t/* Rôle sélectionné */
\t\t\t.role-option.active {
\t\t\t\tbackground: #2a2f4f;
\t\t\t\tcolor: white;
\t\t\t\tborder-color: #2a2f4f;
\t\t\t\ttransform: translateY(-3px);
\t\t\t\tbox-shadow: 0 6px 12px rgba(42, 47, 79, 0.2);
\t\t\t}

\t\t\t/* Animation au survol */
\t\t\t.role-option:hover {
\t\t\t\tborder-color: #cd7f32;
\t\t\t\tcolor: #cd7f32;
\t\t\t\ttransform: translateY(-2px);
\t\t\t}

\t\t\t/* Caché l'input radio */
\t\t\t.role-option input {
\t\t\t\tdisplay: none;
\t\t\t}

\t\t\t/* Espacement entre les champs et les boutons */
\t\t\t.buttons {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: space-between;
\t\t\t\tmargin-top: 40px;
\t\t\t\tposition: relative;
\t\t\t\tz-index: 2;
\t\t\t}

\t\t\t.btn {
\t\t\t\tpadding: 15px 30px;
\t\t\t\tborder-radius: 12px;
\t\t\t\tfont-size: 16px;
\t\t\t\tfont-weight: 600;
\t\t\t\tcursor: pointer;
\t\t\t\ttransition: all 0.3s;
\t\t\t\ttext-align: center;
\t\t\t\ttext-decoration: none;
\t\t\t\tdisplay: inline-block;
\t\t\t\twidth: 48%;
\t\t\t\tfont-family: 'Poppins', sans-serif;
\t\t\t\tposition: relative;
\t\t\t\toverflow: hidden;
\t\t\t\tz-index: 1;
\t\t\t}

\t\t\t.btn-cancel {
\t\t\t\tbackground: #f0f0f0;
\t\t\t\tcolor: #555;
\t\t\t\tborder: none;
\t\t\t}

\t\t\t.btn-confirm {
\t\t\t\tbackground: #cd7f32;
\t\t\t\tcolor: white;
\t\t\t\tborder: none;
\t\t\t}

\t\t\t.btn::before {
\t\t\t\tcontent: '';
\t\t\t\tposition: absolute;
\t\t\t\ttop: 0;
\t\t\t\tleft: 0;
\t\t\t\twidth: 0%;
\t\t\t\theight: 100%;
\t\t\t\tz-index: -1;
\t\t\t\ttransition: all 0.4s ease;
\t\t\t}

\t\t\t.btn-cancel::before {
\t\t\t\tbackground: #e0e0e0;
\t\t\t}

\t\t\t.btn-confirm::before {
\t\t\t\tbackground: #2a2f4f;
\t\t\t}

\t\t\t.btn:hover::before {
\t\t\t\twidth: 100%;
\t\t\t}

\t\t\t.btn-cancel:hover {
\t\t\t\tbox-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
\t\t\t}

\t\t\t.btn-confirm:hover {
\t\t\t\tbox-shadow: 0 5px 15px rgba(205, 127, 50, 0.3);
\t\t\t}

\t\t\t.signin-section {
        text-align: center;
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #eee;
    }

    .signin-section h4 {
        color: #2a2f4f;
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .signin-section h4::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 100%;
        height: 3px;
        background: #cd7f32;
        border-radius: 10px;
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .signin-section:hover h4::after {
        transform: scaleX(1);
    }

    .signin-link-container {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    .signin-link {
        color: #2a2f4f;
        font-size: 15px;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        position: relative;
        padding: 8px 12px;
        border-radius: 8px;
    }

    .signin-link:hover {
        color: #cd7f32;
        transform: translateY(-2px);
    }

    .signin-link i {
        margin-left: 8px;
        transition: transform 0.3s ease;
    }

    .signin-link:hover i {
        transform: translateX(5px);
    }

\t\t\t/* Responsive design */
\t\t\t@media (max-width: 768px) {
\t\t\t\t.container {
\t\t\t\t\tflex-direction: column;
\t\t\t\t\twidth: 100%;
\t\t\t\t}

\t\t\t\t.left-section, .right-section {
\t\t\t\t\twidth: 100%;
\t\t\t\t}

\t\t\t\t.left-section {
\t\t\t\t\tpadding: 40px 20px;
\t\t\t\t\torder: -1;
\t\t\t\t}

\t\t\t\t.right-section {
\t\t\t\t\tpadding: 40px 30px;
\t\t\t\t}

\t\t\t\t.name-group {
\t\t\t\t\tflex-direction: column;
\t\t\t\t\tgap: 15px;
\t\t\t\t}

\t\t\t\t.name-group .form-group {
\t\t\t\t\twidth: 100%;
\t\t\t\t\tmargin-bottom: 0;
\t\t\t\t}

\t\t\t\t.role-group {
\t\t\t\t\tflex-direction: column;
\t\t\t\t\talign-items: center;
\t\t\t\t}

\t\t\t\t.role-option {
\t\t\t\t\twidth: 100%;
\t\t\t\t}
\t\t\t}

\t\t\t/* Animation de chargement */
\t\t\t.form-loading {
\t\t\t\tposition: relative;
\t\t\t}

\t\t\t.form-loading::after {
\t\t\t\tcontent: '';
\t\t\t\tposition: absolute;
\t\t\t\twidth: 100%;
\t\t\t\theight: 3px;
\t\t\t\tbackground: linear-gradient(to right, #2a2f4f, #cd7f32);
\t\t\t\tbottom: 0;
\t\t\t\tleft: 0;
\t\t\t\tanimation: formLoading 2s infinite;
\t\t\t}

\t\t\t@keyframes formLoading {
\t\t\t\t0% { width: 0%; left: 0; }
\t\t\t\t50% { width: 100%; left: 0; }
\t\t\t\t100% { width: 0%; left: 100%; }
\t\t\t}

\t\t\t
\t\t</style>
\t</head>
\t<body>

\t\t<div class=\"container\">
\t\t\t<!-- Section Gauche - Avatar + Image animée -->
\t\t\t<div class=\"left-section\">
\t\t\t\t<div class=\"avatar-container\">
\t\t\t\t\t{% if app.session.get('temp_avatar_url') %}
\t\t\t\t\t\t<img src=\"{{ app.session.get('temp_avatar_url')|replace({'.glb': '.png'}) }}\" class=\"avatar-animation\" alt=\"Avatar\">
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/default_avatar.png') }}\" class=\"avatar-animation\" alt=\"Avatar Animation\">
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<h2>Crée ton propre avatar !</h2>
\t\t\t\t<p>Personnalise ton expérience Event Planner avec un avatar unique qui te représente.</p>
\t\t\t\t<a href=\"{{ path('avatar_create') }}\" class=\"btn-avatar\">
\t\t\t\t\t<i class=\"fas fa-magic\"></i> Crée ton avatar
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<!-- Section Droite - Formulaire -->
\t\t\t<div class=\"right-section\">
\t\t\t\t<h3>Inscription</h3>

\t\t\t\t{{ form_start(registrationForm, {'attr': {'novalidate': 'novalidate', 'class': 'form-loading'}}) }}

\t\t\t\t<!-- Nom et Prénom ensemble -->
\t\t\t\t<div class=\"name-group\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(registrationForm.nom, 'Nom') }}
\t\t\t\t\t\t{{ form_widget(registrationForm.nom, {'attr': {'class': 'form-control', 'placeholder': 'Votre nom'}}) }}
\t\t\t\t\t\t<div class=\"text-danger\">{{ form_errors(registrationForm.nom) }}</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_label(registrationForm.prenom, 'Prénom') }}
\t\t\t\t\t\t{{ form_widget(registrationForm.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Votre prénom'}}) }}
\t\t\t\t\t\t<div class=\"text-danger\">{{ form_errors(registrationForm.prenom) }}</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Email -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(registrationForm.email, 'Email') }}
\t\t\t\t\t{{ form_widget(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'exemple@email.com'}}) }}
\t\t\t\t\t<div class=\"text-danger\">{{ form_errors(registrationForm.email) }}</div>
\t\t\t\t</div>

\t\t\t\t<!-- Age -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(registrationForm.age, 'Âge') }}
\t\t\t\t\t{{ form_widget(registrationForm.age, {'attr': {'class': 'form-control', 'placeholder': 'Votre âge'}}) }}
\t\t\t\t\t<div class=\"text-danger\">{{ form_errors(registrationForm.age) }}</div>
\t\t\t\t</div>

\t\t\t\t<!-- Numéro de téléphone -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(registrationForm.numtlf, 'Numéro de téléphone') }}
\t\t\t\t\t{{ form_widget(registrationForm.numtlf, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 06 12 34 56 78'}}) }}
\t\t\t\t\t<div class=\"text-danger\">{{ form_errors(registrationForm.numtlf) }}</div>
\t\t\t\t</div>

\t\t\t\t<!-- Mot de passe -->
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(registrationForm.plainPassword, 'Mot de passe') }}
\t\t\t\t\t{{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Créez un mot de passe sécurisé'}}) }}
\t\t\t\t\t<div class=\"text-danger\">{{ form_errors(registrationForm.plainPassword) }}</div>
\t\t\t\t</div>
                
                <!-- Rôle -->
                <div class=\"form-group\">
                    {{ form_label(registrationForm.roles, 'Choisissez votre rôle') }}
                    <div class=\"role-group\">
                        {% for choice in registrationForm.roles.vars.choices %}
                            <label class=\"role-option {% if choice.value in registrationForm.roles.vars.data %}active{% endif %}\">
                                <input type=\"radio\" name=\"{{ registrationForm.roles.vars.full_name }}\" value=\"{{ choice.value }}\"
                                      {% if choice.value in registrationForm.roles.vars.data %}checked{% endif %}
                                      class=\"form-check-input\" onclick=\"updateRoleSelection(this)\">
                                {% if choice.value == 'ROLE_USER' %}
                                    <i class=\"fas fa-user\"></i> Utilisateur
                                {% else %}
                                    <i class=\"fas fa-user-shield\"></i> Administrateur
                                {% endif %}
                            </label>
                        {% endfor %}
                    </div>
                    <div class=\"text-danger\">{{ form_errors(registrationForm.roles) }}</div>
                </div>

\t\t\t\t<!-- Champ caché pour l'URL de l'avatar -->
\t\t\t\t{{ form_widget(registrationForm.avatarUrl) }}

\t\t\t\t<!-- Boutons -->
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<a href=\"{{ path('app_login') }}\" class=\"btn btn-cancel\">Annuler</a>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-confirm\">Créer mon compte</button>
\t\t\t\t</div>

\t\t\t\t{{ form_end(registrationForm) }}
                
                <!-- Nouveau lien vers la page de connexion -->
                <div class=\"signin-link-container\">
                    <a href=\"{{ path('app_login') }}\" class=\"signin-link\">
                        Vous avez déjà un compte ? Connectez-vous <i class=\"fas fa-arrow-right\"></i>
                    </a>
                </div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Script pour activer/désactiver les rôles -->
\t\t<script>
\t\t\tdocument.addEventListener('DOMContentLoaded', function() {
    // Masquer les champs de rôle générés automatiquement qui apparaissent en double
    const roleFields = document.querySelectorAll('[name^=\"registrationForm[roles]\"]');
    roleFields.forEach(field => {
        const parentDiv = field.closest('.form-group');
        if (parentDiv && !parentDiv.querySelector('.role-group')) {
            parentDiv.style.display = 'none';
        }
    });
});

\t\t\tdocument.addEventListener(\"DOMContentLoaded\", function() {
                // Remove loading animation once page is fully loaded
                setTimeout(function() {
                    document.querySelector('.form-loading').classList.remove('form-loading');
                }, 1000);
                
                // Function to handle role selection
                function updateRoleSelection(input) {
                    // Remove active class from all options
                    document.querySelectorAll('.role-option').forEach(function(option) {
                        option.classList.remove(\"active\");
                    });
                    
                    // Add active class to selected option
                    input.closest('.role-option').classList.add(\"active\");
                    
                    // Check the radio input
                    input.checked = true;
                }
                
                // Add click event listener to all role options
                document.querySelectorAll('.role-option').forEach(function(option) {
                    option.addEventListener(\"click\", function() {
                        // Get the radio input inside this option
                        const input = this.querySelector('input[type=\"radio\"]');
                        updateRoleSelection(input);
                    });
                });
                
                // Hide the default Symfony-generated checkboxes
                const originalRoleField = document.querySelector('div:not(.role-group) > input[name^=\"registrationForm[roles]\"]');
                if (originalRoleField) {
                    const parentGroup = originalRoleField.closest('.form-group');
                    if (parentGroup && !parentGroup.querySelector('.role-group')) {
                        parentGroup.style.display = 'none';
                    }
                }
                
                // Add the updateRoleSelection function to global scope for the onclick handler
                window.updateRoleSelection = updateRoleSelection;
                
                // Add input focus animations
                const formInputs = document.querySelectorAll('.form-control');
                formInputs.forEach(input => {
                    input.addEventListener('focus', function() {
                        this.parentElement.classList.add('input-focus');
                    });
                    
                    input.addEventListener('blur', function() {
                        this.parentElement.classList.remove('input-focus');
                    });
                });
            });

\t\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t\t\t// Mettre à jour le champ avatarUrl lorsque l'avatar est créé
\t\t\t\t{% if app.session.get('avatar_url') %}
\t\t\t\t\tdocument.querySelector('[name=\"registration_form[avatarUrl]\"]').value = \"{{ app.session.get('avatar_url') }}\";
\t\t\t\t{% endif %}
\t\t\t});
\t\t</script>
\t</body>
</html>", "registration/register.html.twig", "C:\\Users\\DELL\\Desktop\\pidev-user\\templates\\registration\\register.html.twig");
    }
}
