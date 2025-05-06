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

/* base2.html.twig */
class __TwigTemplate_790ad224cad2571606a360a2ac655968 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>Eventplanner - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/owl-carousel/css/owl.carousel.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/owl-carousel/css/owl.theme.default.min.css"), "html", null, true);
        yield "\">
    <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/jqvmap/css/jqvmap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/admin.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <style>
        /* Global text color */
        body, 
        .content-body,
        .card,
        .form-control,
        .btn,
        .nav-text,
        .header-left,
        .header-right,
        .dropdown-menu,
        .dropdown-item,
        .table,
        .table th,
        .table td,
        label,
        h1, h2, h3, h4, h5, h6,
        p,
        span,
        a:not(.btn) {
            color: #000000 !important;
        }

        /* Ensure form inputs have black text */
        input, 
        select, 
        textarea {
            color: #000000 !important;
        }

        /* Ensure dropdowns have black text */
        .dropdown-menu {
            background-color: #ffffff;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
        }

        /* Ensure table headers and cells have black text */
        .table thead th {
            color: #000000 !important;
            background-color: #f8f9fa;
        }

        .table tbody td {
            color: #000000 !important;
        }

        /* Ensure form labels have black text */
        label {
            color: #000000 !important;
        }

        /* Ensure buttons have appropriate contrast */
        .btn-primary,
        .btn-secondary,
        .btn-success,
        .btn-danger,
        .btn-warning,
        .btn-info {
            color: #ffffff !important;
        }

        .btn-outline-primary,
        .btn-outline-secondary,
        .btn-outline-success,
        .btn-outline-danger,
        .btn-outline-warning,
        .btn-outline-info {
            color: #000000 !important;
        }
    </style>
    ";
        // line 89
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 90
        yield "</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id=\"preloader\">
        <div class=\"sk-three-bounce\">
            <div class=\"sk-child sk-bounce1\"></div>
            <div class=\"sk-child sk-bounce2\"></div>
            <div class=\"sk-child sk-bounce3\"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id=\"main-wrapper\">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class=\"nav-header\">
            <a href=\"index.html\" class=\"brand-logo\">
                <img class=\"logo-abbr\" src=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/images/logo.png"), "html", null, true);
        yield "\" alt=\"\">
                <img class=\"logo-compact\" src=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/images/logo-text.png"), "html", null, true);
        yield "\" alt=\"\">
                <img class=\"brand-title\" src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/images/logo-text.png"), "html", null, true);
        yield "\" alt=\"\">
            </a>

            <div class=\"nav-control\">
                <div class=\"hamburger\">
                    <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class=\"header\">
            <div class=\"header-content\">
                <nav class=\"navbar navbar-expand\">
                    <div class=\"collapse navbar-collapse justify-content-between\">
                        <div class=\"header-left\">
                            <div class=\"search_bar\">
  
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
                                        <li class=\"media dropdown-item\">
                                            <span class=\"success\"><i class=\"ti-user\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"#\">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"primary\"><i class=\"ti-shopping-cart\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"#\">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"danger\"><i class=\"ti-bookmark\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"#\">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"primary\"><i class=\"ti-heart\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"#\">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"success\"><i class=\"ti-image\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"#\">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class=\"all-notification\" href=\"#\">See all notifications <i
                                            class=\"ti-arrow-right\"></i></a>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown header-profile\">
                                <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-account\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a href=\"./app-profile.html\" class=\"dropdown-item\">
                                        <i class=\"icon-user\"></i>
                                        <span class=\"ml-2\">Profile </span>
                                    </a>
                                    <a href=\"./email-inbox.html\" class=\"dropdown-item\">
                                        <i class=\"icon-envelope-open\"></i>
                                        <span class=\"ml-2\">Inbox </span>
                                    </a>
                                    <a href=\"./page-login.html\" class=\"dropdown-item\">
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
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class=\"quixnav\">
            <div class=\"quixnav-scroll\">
                <ul class=\"metismenu\" id=\"menu\">
                    <li class=\"nav-label first\">Main Menu</li>
                    <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 247
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_office_home");
        yield "\">Dashboard</a></li>
                        </ul>
                    </li>
                   
                    <li class=\"nav-label\">Gestion des Utilisateurs</li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
                            <i class=\"icon icon-users\"></i>
                            <span class=\"nav-text\">Utilisateurs</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"";
        // line 258
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_showuser");
        yield "\">Liste des Utilisateurs</a></li>
                            <li><a href=\"";
        // line 259
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_user");
        yield "\">Ajouter un Utilisateur</a></li>
                        </ul>
                    </li>

                   <li>
    <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
        <i class=\"icon icon-chart-bar-33\"></i>
        <span class=\"nav-text\">Charts</span>
    </a>
   
</li>

                   


                    <li class=\"nav-label\">Table</li>
<li>
    <a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
        <i class=\"icon icon-layout-25\"></i>
        <span class=\"nav-text\">Table</span>
    </a>
   
     
</li>


                  
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
       <div class=\"content-body\">
    <div class=\"container-fluid\">
        ";
        // line 298
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 300
        yield "    </div>
</div>

        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class=\"footer\">
            
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src=\"";
        // line 336
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/global/global.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/quixnav-init.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/custom.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 339
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/admin.js"), "html", null, true);
        yield "\"></script>

    <!-- Vectormap -->
    <script src=\"";
        // line 342
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/raphael/raphael.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/morris/morris.min.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/circle-progress/circle-progress.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/chart.js/Chart.bundle.min.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 348
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/gaugeJS/dist/gauge.min.js"), "html", null, true);
        yield "\"></script>

    <!--  flot-chart js -->
    <script src=\"";
        // line 351
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/flot/jquery.flot.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 352
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/flot/jquery.flot.resize.js"), "html", null, true);
        yield "\"></script>

    <!-- Owl Carousel -->
    <script src=\"";
        // line 355
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/owl-carousel/js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Counter Up -->
    <script src=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/jqvmap/js/jquery.vmap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/jqvmap/js/jquery.vmap.usa.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendor/jquery.counterup/jquery.counterup.min.js"), "html", null, true);
        yield "\"></script>

    <script src=\"";
        // line 362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/dashboard/dashboard-1.js"), "html", null, true);
        yield "\"></script>
    ";
        // line 363
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 364
        yield "</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 89
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 298
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

        // line 299
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 363
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base2.html.twig";
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
        return array (  566 => 363,  555 => 299,  542 => 298,  520 => 89,  506 => 364,  504 => 363,  500 => 362,  495 => 360,  491 => 359,  487 => 358,  481 => 355,  475 => 352,  471 => 351,  465 => 348,  460 => 346,  456 => 345,  451 => 343,  447 => 342,  441 => 339,  437 => 338,  433 => 337,  429 => 336,  391 => 300,  389 => 298,  347 => 259,  343 => 258,  329 => 247,  200 => 121,  196 => 120,  192 => 119,  161 => 90,  159 => 89,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>Eventplanner - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('images/favicon.png') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('back-office/vendor/owl-carousel/css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('back-office/vendor/owl-carousel/css/owl.theme.default.min.css') }}\">
    <link href=\"{{ asset('back-office/vendor/jqvmap/css/jqvmap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('back-office/css/style.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/admin.css') }}\" rel=\"stylesheet\">
    <style>
        /* Global text color */
        body, 
        .content-body,
        .card,
        .form-control,
        .btn,
        .nav-text,
        .header-left,
        .header-right,
        .dropdown-menu,
        .dropdown-item,
        .table,
        .table th,
        .table td,
        label,
        h1, h2, h3, h4, h5, h6,
        p,
        span,
        a:not(.btn) {
            color: #000000 !important;
        }

        /* Ensure form inputs have black text */
        input, 
        select, 
        textarea {
            color: #000000 !important;
        }

        /* Ensure dropdowns have black text */
        .dropdown-menu {
            background-color: #ffffff;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
        }

        /* Ensure table headers and cells have black text */
        .table thead th {
            color: #000000 !important;
            background-color: #f8f9fa;
        }

        .table tbody td {
            color: #000000 !important;
        }

        /* Ensure form labels have black text */
        label {
            color: #000000 !important;
        }

        /* Ensure buttons have appropriate contrast */
        .btn-primary,
        .btn-secondary,
        .btn-success,
        .btn-danger,
        .btn-warning,
        .btn-info {
            color: #ffffff !important;
        }

        .btn-outline-primary,
        .btn-outline-secondary,
        .btn-outline-success,
        .btn-outline-danger,
        .btn-outline-warning,
        .btn-outline-info {
            color: #000000 !important;
        }
    </style>
    {% block stylesheets %}{% endblock %}
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id=\"preloader\">
        <div class=\"sk-three-bounce\">
            <div class=\"sk-child sk-bounce1\"></div>
            <div class=\"sk-child sk-bounce2\"></div>
            <div class=\"sk-child sk-bounce3\"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id=\"main-wrapper\">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class=\"nav-header\">
            <a href=\"index.html\" class=\"brand-logo\">
                <img class=\"logo-abbr\" src=\"{{ asset('back-office/images/logo.png') }}\" alt=\"\">
                <img class=\"logo-compact\" src=\"{{ asset('back-office/images/logo-text.png') }}\" alt=\"\">
                <img class=\"brand-title\" src=\"{{ asset('back-office/images/logo-text.png') }}\" alt=\"\">
            </a>

            <div class=\"nav-control\">
                <div class=\"hamburger\">
                    <span class=\"line\"></span><span class=\"line\"></span><span class=\"line\"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class=\"header\">
            <div class=\"header-content\">
                <nav class=\"navbar navbar-expand\">
                    <div class=\"collapse navbar-collapse justify-content-between\">
                        <div class=\"header-left\">
                            <div class=\"search_bar\">
  
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
                                        <li class=\"media dropdown-item\">
                                            <span class=\"success\"><i class=\"ti-user\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"#\">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"primary\"><i class=\"ti-shopping-cart\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"#\">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"danger\"><i class=\"ti-bookmark\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"#\">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"primary\"><i class=\"ti-heart\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"#\">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                        <li class=\"media dropdown-item\">
                                            <span class=\"success\"><i class=\"ti-image\"></i></span>
                                            <div class=\"media-body\">
                                                <a href=\"#\">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class=\"notify-time\">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class=\"all-notification\" href=\"#\">See all notifications <i
                                            class=\"ti-arrow-right\"></i></a>
                                </div>
                            </li>
                            <li class=\"nav-item dropdown header-profile\">
                                <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\">
                                    <i class=\"mdi mdi-account\"></i>
                                </a>
                                <div class=\"dropdown-menu dropdown-menu-right\">
                                    <a href=\"./app-profile.html\" class=\"dropdown-item\">
                                        <i class=\"icon-user\"></i>
                                        <span class=\"ml-2\">Profile </span>
                                    </a>
                                    <a href=\"./email-inbox.html\" class=\"dropdown-item\">
                                        <i class=\"icon-envelope-open\"></i>
                                        <span class=\"ml-2\">Inbox </span>
                                    </a>
                                    <a href=\"./page-login.html\" class=\"dropdown-item\">
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
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class=\"quixnav\">
            <div class=\"quixnav-scroll\">
                <ul class=\"metismenu\" id=\"menu\">
                    <li class=\"nav-label first\">Main Menu</li>
                    <li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\"><i
                                class=\"icon icon-single-04\"></i><span class=\"nav-text\">Dashboard</span></a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{ path('back_office_home') }}\">Dashboard</a></li>
                        </ul>
                    </li>
                   
                    <li class=\"nav-label\">Gestion des Utilisateurs</li>
                    <li>
                        <a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
                            <i class=\"icon icon-users\"></i>
                            <span class=\"nav-text\">Utilisateurs</span>
                        </a>
                        <ul aria-expanded=\"false\">
                            <li><a href=\"{{ path('back_showuser') }}\">Liste des Utilisateurs</a></li>
                            <li><a href=\"{{ path('ajouter_user') }}\">Ajouter un Utilisateur</a></li>
                        </ul>
                    </li>

                   <li>
    <a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">
        <i class=\"icon icon-chart-bar-33\"></i>
        <span class=\"nav-text\">Charts</span>
    </a>
   
</li>

                   


                    <li class=\"nav-label\">Table</li>
<li>
    <a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
        <i class=\"icon icon-layout-25\"></i>
        <span class=\"nav-text\">Table</span>
    </a>
   
     
</li>


                  
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
       <div class=\"content-body\">
    <div class=\"container-fluid\">
        {% block body %}
        {% endblock %}
    </div>
</div>

        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class=\"footer\">
            
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src=\"{{ asset('back-office/vendor/global/global.min.js') }}\"></script>
    <script src=\"{{ asset('back-office/js/quixnav-init.js') }}\"></script>
    <script src=\"{{ asset('back-office/js/custom.min.js') }}\"></script>
    <script src=\"{{ asset('js/admin.js') }}\"></script>

    <!-- Vectormap -->
    <script src=\"{{ asset('back-office/vendor/raphael/raphael.min.js') }}\"></script>
    <script src=\"{{ asset('back-office/vendor/morris/morris.min.js') }}\"></script>

    <script src=\"{{ asset('back-office/vendor/circle-progress/circle-progress.min.js') }}\"></script>
    <script src=\"{{ asset('back-office/vendor/chart.js/Chart.bundle.min.js') }}\"></script>

    <script src=\"{{ asset('back-office/vendor/gaugeJS/dist/gauge.min.js') }}\"></script>

    <!--  flot-chart js -->
    <script src=\"{{ asset('back-office/vendor/flot/jquery.flot.js') }}\"></script>
    <script src=\"{{ asset('back-office/vendor/flot/jquery.flot.resize.js') }}\"></script>

    <!-- Owl Carousel -->
    <script src=\"{{ asset('back-office/vendor/owl-carousel/js/owl.carousel.min.js') }}\"></script>

    <!-- Counter Up -->
    <script src=\"{{ asset('back-office/vendor/jqvmap/js/jquery.vmap.min.js') }}\"></script>
    <script src=\"{{ asset('back-office/vendor/jqvmap/js/jquery.vmap.usa.js') }}\"></script>
    <script src=\"{{ asset('back-office/vendor/jquery.counterup/jquery.counterup.min.js') }}\"></script>

    <script src=\"{{ asset('/js/dashboard/dashboard-1.js') }}\"></script>
    {% block javascripts %}{% endblock %}
</body>

</html>
", "base2.html.twig", "C:\\Users\\DELL\\Desktop\\pidev-user\\templates\\base2.html.twig");
    }
}
