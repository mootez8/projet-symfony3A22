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

/* back.html.twig */
class __TwigTemplate_f0fdbadd969792eda99e66a734191945 extends Template
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
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "back.html.twig", 1);
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

        yield "Focus - Bootstrap Admin Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <!-- Core CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/vendor/owl-carousel/css/owl.carousel.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/vendor/owl-carousel/css/owl.theme.default.min.css"), "html", null, true);
        yield "\">
  <link href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/vendor/jqvmap/css/jqvmap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
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

        // line 15
        yield "  <!-- Preloader -->
  <div id=\"preloader\">
    <div class=\"sk-three-bounce\">
      <div class=\"sk-child sk-bounce1\"></div>
      <div class=\"sk-child sk-bounce2\"></div>
      <div class=\"sk-child sk-bounce3\"></div>
    </div>
  </div>

  <!-- Main Wrapper -->
  <div id=\"main-wrapper\">

    <!-- Nav Header -->
    <div class=\"nav-header\">
      <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_home");
        yield "\" class=\"brand-logo\">
        <img class=\"logo-abbr\" src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/images/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\">
        <img class=\"logo-compact\" src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/images/logo-text.png"), "html", null, true);
        yield "\" alt=\"Logo Text\">
        <img class=\"brand-title\" src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/images/logo-text.png"), "html", null, true);
        yield "\" alt=\"Brand Title\">
      </a>
      <div class=\"nav-control\">
        <div class=\"hamburger\">
          <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
        </div>
      </div>
    </div>
    <!-- End Nav Header -->

    <!-- Header -->
    <div class=\"header\">
      <div class=\"header-content\">
        <nav class=\"navbar navbar-expand\">
          <div class=\"collapse navbar-collapse justify-content-between\">
            <div class=\"header-left\">
              <div class=\"search_bar dropdown\">
                <span class=\"search_icon p-3 c-pointer\" data-toggle=\"dropdown\">
                  <i class=\"mdi mdi-magnify\"></i>
                </span>
                <div class=\"dropdown-menu p-0 m-0\">
                  <form>
                    <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                  </form>
                </div>
              </div>
            </div>
            <ul class=\"navbar-nav header-right\">
              <li class=\"nav-item dropdown notification_dropdown\">
                <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                  <i class=\"mdi mdi-bell\"></i>
                  <div class=\"pulse-css\"></div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <ul class=\"list-unstyled\">
                    <!-- Notification Items -->
                    <li class=\"media dropdown-item\">
                      <span class=\"success\"><i class=\"ti-user\"></i></span>
                      <div class=\"media-body\">
                        <a href=\"#\">
                          <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully</p>
                        </a>
                      </div>
                      <span class=\"notify-time\">3:20 am</span>
                    </li>
                    <!-- More Notification Items -->
                  </ul>
                  <a class=\"all-notification\" href=\"#\">See all notifications <i class=\"ti-arrow-right\"></i></a>
                </div>
              </li>
              <li class=\"nav-item dropdown header-profile\">
                <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                  <i class=\"mdi mdi-account\"></i>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"icon-user\"></i>
                    <span class=\"ml-2\">Profile </span>
                  </a>
                  <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"icon-envelope-open\"></i>
                    <span class=\"ml-2\">Inbox </span>
                  </a>
                  <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"icon-key\"></i>
                    <span class=\"ml-2\">Logout </span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- End Header -->

    <!-- Sidebar (Left Navigation) -->
    <div class=\"quixnav\">
      <div class=\"quixnav-scroll\">
        <ul class=\"metismenu\" id=\"menu\">
          <li class=\"nav-label first\">Main Menu</li>
          <li>
            <a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
              <i class=\"icon icon-single-04\"></i>
              <span class=\"nav-text\">Dashboard</span>
            </a>
            <ul aria-expanded=\"false\">
              <li><a href=\"#\">Dashboard 1</a></li>
              <li><a href=\"#\">Dashboard 2</a></li>
            </ul>
          </li>

          <!-- APPS -->
          <li class=\"nav-label\">Apps</li>
          <li>
            <a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
              <i class=\"icon icon-app-store\"></i>
              <span class=\"nav-text\">Apps</span>
            </a>
            <ul aria-expanded=\"false\">
              <li><a href=\"#\">Profile</a></li>
              <li><a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_index");
        yield "\">Transport</a></li>
              <li><a href=\"";
        // line 134
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trajet_index");
        yield "\">Trajet</a></li>
              <li>
                <a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">Email</a>
                <ul aria-expanded=\"false\">
                  <li><a href=\"#\">Compose</a></li>
                  <li><a href=\"#\">Inbox</a></li>
                  <li><a href=\"#\">Read</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Calendar</a></li>
            </ul>
          </li>

          <!-- More Menu Items -->

        </ul>
      </div>
    </div>
    <!-- End Sidebar -->

    <!-- Content Body -->
    <div class=\"content-body\">
      <div class=\"container-fluid\">
        ";
        // line 157
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 160
        yield "      </div>
    </div>
    <!-- End Content Body -->

    <!-- Footer -->
    <div class=\"footer\">
      <div class=\"copyright\">
        <p>Copyright © Designed &amp; Developed by Quixkit 2019</p>
      </div>
    </div>
    <!-- End Footer -->

  </div>
  <!-- End Main Wrapper -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 157
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 158
        yield "          <!-- Default content goes here -->
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 176
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

        // line 177
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script src=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/vendor/global/global.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/js/quixnav-init.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/js/custom.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/vendor/raphael/raphael.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/vendor/morris/morris.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/vendor/circle-progress/circle-progress.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/vendor/chart.js/Chart.bundle.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/vendor/gaugeJS/dist/gauge.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/vendor/flot/jquery.flot.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/vendor/flot/jquery.flot.resize.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/vendor/owl-carousel/js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/vendor/jqvmap/js/jquery.vmap.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/vendor/jqvmap/js/jquery.vmap.usa.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/vendor/jquery.counterup/jquery.counterup.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back/theme/js/dashboard/dashboard-1.js"), "html", null, true);
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
        return "back.html.twig";
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
        return array (  435 => 192,  431 => 191,  427 => 190,  423 => 189,  419 => 188,  415 => 187,  411 => 186,  407 => 185,  403 => 184,  399 => 183,  395 => 182,  391 => 181,  387 => 180,  383 => 179,  379 => 178,  374 => 177,  361 => 176,  349 => 158,  336 => 157,  311 => 160,  309 => 157,  283 => 134,  279 => 133,  175 => 32,  171 => 31,  167 => 30,  163 => 29,  147 => 15,  134 => 14,  121 => 11,  117 => 10,  113 => 9,  109 => 8,  103 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Focus - Bootstrap Admin Dashboard{% endblock %}

{% block stylesheets %}
  {{ parent() }}
  <!-- Core CSS -->
  <link rel=\"stylesheet\" href=\"{{ asset('back/theme/vendor/owl-carousel/css/owl.carousel.min.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset('back/theme/vendor/owl-carousel/css/owl.theme.default.min.css') }}\">
  <link href=\"{{ asset('back/theme/vendor/jqvmap/css/jqvmap.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('back/theme/css/style.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
  <!-- Preloader -->
  <div id=\"preloader\">
    <div class=\"sk-three-bounce\">
      <div class=\"sk-child sk-bounce1\"></div>
      <div class=\"sk-child sk-bounce2\"></div>
      <div class=\"sk-child sk-bounce3\"></div>
    </div>
  </div>

  <!-- Main Wrapper -->
  <div id=\"main-wrapper\">

    <!-- Nav Header -->
    <div class=\"nav-header\">
      <a href=\"{{ path('back_home') }}\" class=\"brand-logo\">
        <img class=\"logo-abbr\" src=\"{{ asset('back/theme/images/logo.png') }}\" alt=\"Logo\">
        <img class=\"logo-compact\" src=\"{{ asset('back/theme/images/logo-text.png') }}\" alt=\"Logo Text\">
        <img class=\"brand-title\" src=\"{{ asset('back/theme/images/logo-text.png') }}\" alt=\"Brand Title\">
      </a>
      <div class=\"nav-control\">
        <div class=\"hamburger\">
          <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
        </div>
      </div>
    </div>
    <!-- End Nav Header -->

    <!-- Header -->
    <div class=\"header\">
      <div class=\"header-content\">
        <nav class=\"navbar navbar-expand\">
          <div class=\"collapse navbar-collapse justify-content-between\">
            <div class=\"header-left\">
              <div class=\"search_bar dropdown\">
                <span class=\"search_icon p-3 c-pointer\" data-toggle=\"dropdown\">
                  <i class=\"mdi mdi-magnify\"></i>
                </span>
                <div class=\"dropdown-menu p-0 m-0\">
                  <form>
                    <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                  </form>
                </div>
              </div>
            </div>
            <ul class=\"navbar-nav header-right\">
              <li class=\"nav-item dropdown notification_dropdown\">
                <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                  <i class=\"mdi mdi-bell\"></i>
                  <div class=\"pulse-css\"></div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <ul class=\"list-unstyled\">
                    <!-- Notification Items -->
                    <li class=\"media dropdown-item\">
                      <span class=\"success\"><i class=\"ti-user\"></i></span>
                      <div class=\"media-body\">
                        <a href=\"#\">
                          <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully</p>
                        </a>
                      </div>
                      <span class=\"notify-time\">3:20 am</span>
                    </li>
                    <!-- More Notification Items -->
                  </ul>
                  <a class=\"all-notification\" href=\"#\">See all notifications <i class=\"ti-arrow-right\"></i></a>
                </div>
              </li>
              <li class=\"nav-item dropdown header-profile\">
                <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                  <i class=\"mdi mdi-account\"></i>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"icon-user\"></i>
                    <span class=\"ml-2\">Profile </span>
                  </a>
                  <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"icon-envelope-open\"></i>
                    <span class=\"ml-2\">Inbox </span>
                  </a>
                  <a href=\"#\" class=\"dropdown-item\">
                    <i class=\"icon-key\"></i>
                    <span class=\"ml-2\">Logout </span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- End Header -->

    <!-- Sidebar (Left Navigation) -->
    <div class=\"quixnav\">
      <div class=\"quixnav-scroll\">
        <ul class=\"metismenu\" id=\"menu\">
          <li class=\"nav-label first\">Main Menu</li>
          <li>
            <a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
              <i class=\"icon icon-single-04\"></i>
              <span class=\"nav-text\">Dashboard</span>
            </a>
            <ul aria-expanded=\"false\">
              <li><a href=\"#\">Dashboard 1</a></li>
              <li><a href=\"#\">Dashboard 2</a></li>
            </ul>
          </li>

          <!-- APPS -->
          <li class=\"nav-label\">Apps</li>
          <li>
            <a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
              <i class=\"icon icon-app-store\"></i>
              <span class=\"nav-text\">Apps</span>
            </a>
            <ul aria-expanded=\"false\">
              <li><a href=\"#\">Profile</a></li>
              <li><a href=\"{{ path('app_transport_index') }}\">Transport</a></li>
              <li><a href=\"{{ path('app_trajet_index') }}\">Trajet</a></li>
              <li>
                <a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">Email</a>
                <ul aria-expanded=\"false\">
                  <li><a href=\"#\">Compose</a></li>
                  <li><a href=\"#\">Inbox</a></li>
                  <li><a href=\"#\">Read</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Calendar</a></li>
            </ul>
          </li>

          <!-- More Menu Items -->

        </ul>
      </div>
    </div>
    <!-- End Sidebar -->

    <!-- Content Body -->
    <div class=\"content-body\">
      <div class=\"container-fluid\">
        {% block content %}
          <!-- Default content goes here -->
        {% endblock %}
      </div>
    </div>
    <!-- End Content Body -->

    <!-- Footer -->
    <div class=\"footer\">
      <div class=\"copyright\">
        <p>Copyright © Designed &amp; Developed by Quixkit 2019</p>
      </div>
    </div>
    <!-- End Footer -->

  </div>
  <!-- End Main Wrapper -->
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('back/theme/vendor/global/global.min.js') }}\"></script>
  <script src=\"{{ asset('back/theme/js/quixnav-init.js') }}\"></script>
  <script src=\"{{ asset('back/theme/js/custom.min.js') }}\"></script>
  <script src=\"{{ asset('back/theme/vendor/raphael/raphael.min.js') }}\"></script>
  <script src=\"{{ asset('back/theme/vendor/morris/morris.min.js') }}\"></script>
  <script src=\"{{ asset('back/theme/vendor/circle-progress/circle-progress.min.js') }}\"></script>
  <script src=\"{{ asset('back/theme/vendor/chart.js/Chart.bundle.min.js') }}\"></script>
  <script src=\"{{ asset('back/theme/vendor/gaugeJS/dist/gauge.min.js') }}\"></script>
  <script src=\"{{ asset('back/theme/vendor/flot/jquery.flot.js') }}\"></script>
  <script src=\"{{ asset('back/theme/vendor/flot/jquery.flot.resize.js') }}\"></script>
  <script src=\"{{ asset('back/theme/vendor/owl-carousel/js/owl.carousel.min.js') }}\"></script>
  <script src=\"{{ asset('back/theme/vendor/jqvmap/js/jquery.vmap.min.js') }}\"></script>
  <script src=\"{{ asset('back/theme/vendor/jqvmap/js/jquery.vmap.usa.js') }}\"></script>
  <script src=\"{{ asset('back/theme/vendor/jquery.counterup/jquery.counterup.min.js') }}\"></script>
  <script src=\"{{ asset('back/theme/js/dashboard/dashboard-1.js') }}\"></script>
{% endblock %}
", "back.html.twig", "C:\\Users\\21629\\Desktop\\kk\\TT\\templates\\back.html.twig");
    }
}
