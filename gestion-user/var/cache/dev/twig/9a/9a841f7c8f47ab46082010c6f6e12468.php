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

/* home.html.twig */
class __TwigTemplate_73099a6256747b04822b54a0b91def8c extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Eventalk - Free Bootstrap 4 Template";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/open-iconic-bootstrap.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/animate.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/owl.carousel.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/owl.theme.default.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/magnific-popup.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/aos.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/ionicons.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap-datepicker.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/jquery.timepicker.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/flaticon.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/icomoon.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
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

        // line 23
        yield "  ";
        // line 24
        yield "  <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/index.html"), "html", null, true);
        yield "\">Even<span>talk.</span></a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\">
        <span class=\"oi oi-menu\"></span> Menu
      </button>
      <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item\"><a href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/index.html"), "html", null, true);
        yield "\" class=\"nav-link\">Home</a></li>
          <li class=\"nav-item\"><a href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/about.html"), "html", null, true);
        yield "\" class=\"nav-link\">About</a></li>
          <li class=\"nav-item\"><a href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/speakers.html"), "html", null, true);
        yield "\" class=\"nav-link\">Speakers</a></li>
          <li class=\"nav-item\"><a href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/schedule.html"), "html", null, true);
        yield "\" class=\"nav-link\">Schedule</a></li>
          <li class=\"nav-item\"><a href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/blog.html"), "html", null, true);
        yield "\" class=\"nav-link\">Blog</a></li>
          <li class=\"nav-item\"><a href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/contact.html"), "html", null, true);
        yield "\" class=\"nav-link\">Contact</a></li>
          <li class=\"nav-item cta mr-md-2\"><a href=\"#\" class=\"nav-link\">Buy Ticket</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END Navigation -->

  ";
        // line 46
        yield "  <div class=\"hero-wrap js-fullheight\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/bg_1.jpg"), "html", null, true);
        yield "');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row no-gutters slider-text js-fullheight align-items-center\">
        <div class=\"col-xl-10 ftco-animate\">
          <h1 class=\"mb-4\">Developer <br><span>Conference 2019</span></h1>
          <p class=\"mb-4\">December 21-24, 2019. Paris, Italy</p>
          <div id=\"timer\" class=\"d-flex mb-3\">
            <div class=\"time\" id=\"days\"></div>
            <div class=\"time pl-4\" id=\"hours\"></div>
            <div class=\"time pl-4\" id=\"minutes\"></div>
            <div class=\"time pl-4\" id=\"seconds\"></div>
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

    // line 65
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

        // line 66
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/popper.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.easing.1.3.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.waypoints.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.stellar.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/aos.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.animateNumber.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap-datepicker.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.timepicker.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/scrollax.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=false\"></script>
  <script src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/google-map.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/main.js"), "html", null, true);
        yield "\"></script>
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
        return "home.html.twig";
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
        return array (  332 => 83,  328 => 82,  323 => 80,  319 => 79,  315 => 78,  311 => 77,  307 => 76,  303 => 75,  299 => 74,  295 => 73,  291 => 72,  287 => 71,  283 => 70,  279 => 69,  275 => 68,  271 => 67,  266 => 66,  253 => 65,  223 => 46,  212 => 37,  208 => 36,  204 => 35,  200 => 34,  196 => 33,  192 => 32,  183 => 26,  179 => 24,  177 => 23,  164 => 22,  151 => 19,  147 => 18,  143 => 17,  139 => 16,  135 => 15,  131 => 14,  127 => 13,  123 => 12,  119 => 11,  115 => 10,  111 => 9,  107 => 8,  102 => 7,  89 => 6,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/front.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Eventalk - Free Bootstrap 4 Template{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{ asset('front/css/open-iconic-bootstrap.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('front/css/animate.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('front/css/owl.carousel.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('front/css/owl.theme.default.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('front/css/magnific-popup.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('front/css/aos.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('front/css/ionicons.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('front/css/bootstrap-datepicker.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('front/css/jquery.timepicker.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('front/css/flaticon.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('front/css/icomoon.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('front/css/style.css') }}\">
{% endblock %}

{% block body %}
  {# Navigation with direct links to static pages in public/front #}
  <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"{{ asset('front/index.html') }}\">Even<span>talk.</span></a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\">
        <span class=\"oi oi-menu\"></span> Menu
      </button>
      <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item\"><a href=\"{{ asset('front/index.html') }}\" class=\"nav-link\">Home</a></li>
          <li class=\"nav-item\"><a href=\"{{ asset('front/about.html') }}\" class=\"nav-link\">About</a></li>
          <li class=\"nav-item\"><a href=\"{{ asset('front/speakers.html') }}\" class=\"nav-link\">Speakers</a></li>
          <li class=\"nav-item\"><a href=\"{{ asset('front/schedule.html') }}\" class=\"nav-link\">Schedule</a></li>
          <li class=\"nav-item\"><a href=\"{{ asset('front/blog.html') }}\" class=\"nav-link\">Blog</a></li>
          <li class=\"nav-item\"><a href=\"{{ asset('front/contact.html') }}\" class=\"nav-link\">Contact</a></li>
          <li class=\"nav-item cta mr-md-2\"><a href=\"#\" class=\"nav-link\">Buy Ticket</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END Navigation -->

  {# Hero Section with a background image from public/front/images #}
  <div class=\"hero-wrap js-fullheight\" style=\"background-image: url('{{ asset('front/images/bg_1.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
      <div class=\"row no-gutters slider-text js-fullheight align-items-center\">
        <div class=\"col-xl-10 ftco-animate\">
          <h1 class=\"mb-4\">Developer <br><span>Conference 2019</span></h1>
          <p class=\"mb-4\">December 21-24, 2019. Paris, Italy</p>
          <div id=\"timer\" class=\"d-flex mb-3\">
            <div class=\"time\" id=\"days\"></div>
            <div class=\"time pl-4\" id=\"hours\"></div>
            <div class=\"time pl-4\" id=\"minutes\"></div>
            <div class=\"time pl-4\" id=\"seconds\"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('front/js/jquery.min.js') }}\"></script>
  <script src=\"{{ asset('front/js/jquery-migrate-3.0.1.min.js') }}\"></script>
  <script src=\"{{ asset('front/js/popper.min.js') }}\"></script>
  <script src=\"{{ asset('front/js/bootstrap.min.js') }}\"></script>
  <script src=\"{{ asset('front/js/jquery.easing.1.3.js') }}\"></script>
  <script src=\"{{ asset('front/js/jquery.waypoints.min.js') }}\"></script>
  <script src=\"{{ asset('front/js/jquery.stellar.min.js') }}\"></script>
  <script src=\"{{ asset('front/js/owl.carousel.min.js') }}\"></script>
  <script src=\"{{ asset('front/js/jquery.magnific-popup.min.js') }}\"></script>
  <script src=\"{{ asset('front/js/aos.js') }}\"></script>
  <script src=\"{{ asset('front/js/jquery.animateNumber.min.js') }}\"></script>
  <script src=\"{{ asset('front/js/bootstrap-datepicker.js') }}\"></script>
  <script src=\"{{ asset('front/js/jquery.timepicker.min.js') }}\"></script>
  <script src=\"{{ asset('front/js/scrollax.min.js') }}\"></script>
  <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=false\"></script>
  <script src=\"{{ asset('front/js/google-map.js') }}\"></script>
  <script src=\"{{ asset('front/js/main.js') }}\"></script>
{% endblock %}
", "home.html.twig", "C:\\Users\\21629\\Desktop\\kk\\TT\\templates\\home.html.twig");
    }
}
