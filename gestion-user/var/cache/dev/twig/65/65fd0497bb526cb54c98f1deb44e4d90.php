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

/* base-front.html.twig */
class __TwigTemplate_7d2c9999b25f3915ca37fb0bf5e369a2 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'navbar' => [$this, 'block_navbar'],
            'hero' => [$this, 'block_hero'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <title>";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">

    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 107
        yield "  </head>
  <body>
    
    ";
        // line 110
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 175
        yield "    <!-- END nav -->
    
    ";
        // line 177
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 196
        yield "
    ";
        // line 197
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 200
        yield "
    ";
        // line 201
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 259
        yield "
    ";
        // line 260
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 278
        yield "    
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
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

        yield "eventPlanner";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/open-iconic-bootstrap.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/aos.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ionicons.min.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.timepicker.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icomoon.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\">
    <style>
        /* Module Links Styling */
        .nav-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .nav-link i {
            font-size: 1.1rem;
        }

        /* Placeholder Links Styling */
        .nav-link[href=\"#\"] {
            opacity: 0.8;
            cursor: not-allowed;
        }

        .nav-link[href=\"#\"]:hover {
            opacity: 0.8;
        }

        /* Authentication Links Styling */
        .nav-item.cta .nav-link {
            background: #f8b400;
            color: #000000;
            border-radius: 4px;
            padding: 0.5rem 1rem;
        }

        .nav-item.cta .nav-link:hover {
            background: #e6a800;
            color: #000000;
        }

        /* Profile Picture Styling */
        .profile-picture {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #f8b400;
            transition: transform 0.3s ease;
        }

        .profile-picture:hover {
            transform: scale(1.1);
        }

        .profile-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            color: inherit;
        }

        .profile-link:hover {
            text-decoration: none;
            color: inherit;
        }

        /* Responsive Adjustments */
        @media (max-width: 991px) {
            .navbar-nav {
                padding: 1rem 0;
            }
            
            .nav-link {
                padding: 0.5rem 0;
            }
            
            .nav-item.cta {
                margin: 0.5rem 0;
            }

            .profile-picture {
                width: 35px;
                height: 35px;
            }
        }
    </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 110
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 111
        yield "    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Event<span>Planner.</span></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"oi oi-menu\"></span> Menu
        </button>

        <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\"><a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">Home</a></li>
            
            <!-- Module Links -->
            <li class=\"nav-item\">
              <a href=\"#\" class=\"nav-link\" title=\"Coming Soon\">
                <i class=\"icon-calendar\"></i> Événement
              </a>
            </li>
            <li class=\"nav-item\">
              <a href=\"#\" class=\"nav-link\" title=\"Coming Soon\">
                <i class=\"icon-comment\"></i> Réclamation
              </a>
            </li>
            <li class=\"nav-item\">
              <a href=\"#\" class=\"nav-link\" title=\"Coming Soon\">
                <i class=\"icon-check-square-o\"></i> Réservation
              </a>
            </li>
            <li class=\"nav-item\">
              <a href=\"#\" class=\"nav-link\" title=\"Coming Soon\">
                <i class=\"icon-truck\"></i> Transport
              </a>
            </li>
            
            <!-- Authentication Links -->
            ";
        // line 145
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 146
            yield "                <li class=\"nav-item\">
                    <a href=\"";
            // line 147
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"profile-link\">
                        ";
            // line 148
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "user", [], "any", false, false, false, 148), "photoDeProfile", [], "any", false, false, false, 148)) {
                // line 149
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "user", [], "any", false, false, false, 149), "photoFile"), "html", null, true);
                yield "\" alt=\"Profile Picture\" class=\"profile-picture\">
                        ";
            } else {
                // line 151
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/frontOffice/img/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default Avatar\" class=\"profile-picture\">
                        ";
            }
            // line 153
            yield "                        <span class=\"nav-link\">
                            <i class=\"icon-user\"></i> Profile
                        </span>
                    </a>
                </li>
                <li class=\"nav-item cta mr-md-2\">
                    <a href=\"";
            // line 159
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"nav-link\">
                        <i class=\"icon-lock\"></i> Logout
                    </a>
                </li>
            ";
        } else {
            // line 164
            yield "                <li class=\"nav-item cta mr-md-2\">
                    <a href=\"";
            // line 165
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"nav-link\">
                        <i class=\"icon-lock\"></i> Login
                    </a>
                </li>
            ";
        }
        // line 170
        yield "          </ul>
        </div>
      </div>
    </nav>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 177
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        // line 178
        yield "    <div class=\"hero-wrap js-fullheight\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bg_1.jpg"), "html", null, true);
        yield "');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-start\" data-scrollax-parent=\"true\">
          <div class=\"col-xl-10 ftco-animate\" data-scrollax=\" properties: { translateY: '70%' }\">
            <h1 class=\"mb-4\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\"> Developer <br><span>Conference 2019</span></h1>
            <p class=\"mb-4\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">December 21-24, 2019. Paris, Italy</p>
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

    // line 197
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

        // line 198
        yield "    <!-- Add your page-specific content here -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 201
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 202
        yield "    <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">EventPlanner</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4 ml-md-5\">
              <h2 class=\"ftco-heading-2\">Useful Links</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"py-2 d-block\">Speakers</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Schedule</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Events</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
             <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">Privacy</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"py-2 d-block\">Career</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">About Us</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Contact Us</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Services</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">Have a Questions?</h2>
              <div class=\"block-23 mb-3\">
                <ul>
                  <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">ariana soghra esprit</span></li>
                  <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">92856741</span></a></li>
                  <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">abdoutouiti@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 text-center\">
            <p>&copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart color-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a></p>
          </div>
        </div>
      </div>
    </footer>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 260
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 261
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/aos.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.timepicker.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/google-map.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
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
        return "base-front.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  631 => 276,  627 => 275,  623 => 274,  619 => 273,  615 => 272,  611 => 271,  607 => 270,  603 => 269,  599 => 268,  595 => 267,  591 => 266,  587 => 265,  583 => 264,  579 => 263,  575 => 262,  570 => 261,  557 => 260,  490 => 202,  477 => 201,  465 => 198,  452 => 197,  422 => 178,  409 => 177,  394 => 170,  386 => 165,  383 => 164,  375 => 159,  367 => 153,  361 => 151,  355 => 149,  353 => 148,  349 => 147,  346 => 146,  344 => 145,  316 => 120,  306 => 113,  302 => 111,  289 => 110,  193 => 22,  189 => 21,  185 => 20,  181 => 19,  177 => 18,  173 => 17,  169 => 16,  165 => 15,  161 => 14,  157 => 13,  153 => 12,  148 => 11,  135 => 10,  112 => 4,  99 => 278,  97 => 260,  94 => 259,  92 => 201,  89 => 200,  87 => 197,  84 => 196,  82 => 177,  78 => 175,  76 => 110,  71 => 107,  69 => 10,  60 => 4,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <title>{% block title %}eventPlanner{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">

    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/open-iconic-bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.theme.default.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/aos.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/ionicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datepicker.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery.timepicker.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/flaticon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/icomoon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <style>
        /* Module Links Styling */
        .nav-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .nav-link i {
            font-size: 1.1rem;
        }

        /* Placeholder Links Styling */
        .nav-link[href=\"#\"] {
            opacity: 0.8;
            cursor: not-allowed;
        }

        .nav-link[href=\"#\"]:hover {
            opacity: 0.8;
        }

        /* Authentication Links Styling */
        .nav-item.cta .nav-link {
            background: #f8b400;
            color: #000000;
            border-radius: 4px;
            padding: 0.5rem 1rem;
        }

        .nav-item.cta .nav-link:hover {
            background: #e6a800;
            color: #000000;
        }

        /* Profile Picture Styling */
        .profile-picture {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #f8b400;
            transition: transform 0.3s ease;
        }

        .profile-picture:hover {
            transform: scale(1.1);
        }

        .profile-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            color: inherit;
        }

        .profile-link:hover {
            text-decoration: none;
            color: inherit;
        }

        /* Responsive Adjustments */
        @media (max-width: 991px) {
            .navbar-nav {
                padding: 1rem 0;
            }
            
            .nav-link {
                padding: 0.5rem 0;
            }
            
            .nav-item.cta {
                margin: 0.5rem 0;
            }

            .profile-picture {
                width: 35px;
                height: 35px;
            }
        }
    </style>
    {% endblock %}
  </head>
  <body>
    
    {% block navbar %}
    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
      <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">Event<span>Planner.</span></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"oi oi-menu\"></span> Menu
        </button>

        <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\"><a href=\"{{ path('app_home') }}\" class=\"nav-link\">Home</a></li>
            
            <!-- Module Links -->
            <li class=\"nav-item\">
              <a href=\"#\" class=\"nav-link\" title=\"Coming Soon\">
                <i class=\"icon-calendar\"></i> Événement
              </a>
            </li>
            <li class=\"nav-item\">
              <a href=\"#\" class=\"nav-link\" title=\"Coming Soon\">
                <i class=\"icon-comment\"></i> Réclamation
              </a>
            </li>
            <li class=\"nav-item\">
              <a href=\"#\" class=\"nav-link\" title=\"Coming Soon\">
                <i class=\"icon-check-square-o\"></i> Réservation
              </a>
            </li>
            <li class=\"nav-item\">
              <a href=\"#\" class=\"nav-link\" title=\"Coming Soon\">
                <i class=\"icon-truck\"></i> Transport
              </a>
            </li>
            
            <!-- Authentication Links -->
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <li class=\"nav-item\">
                    <a href=\"{{ path('app_profile') }}\" class=\"profile-link\">
                        {% if app.user.photoDeProfile %}
                            <img src=\"{{ vich_uploader_asset(app.user, 'photoFile') }}\" alt=\"Profile Picture\" class=\"profile-picture\">
                        {% else %}
                            <img src=\"{{ asset('assets/frontOffice/img/default-avatar.png') }}\" alt=\"Default Avatar\" class=\"profile-picture\">
                        {% endif %}
                        <span class=\"nav-link\">
                            <i class=\"icon-user\"></i> Profile
                        </span>
                    </a>
                </li>
                <li class=\"nav-item cta mr-md-2\">
                    <a href=\"{{ path('app_logout') }}\" class=\"nav-link\">
                        <i class=\"icon-lock\"></i> Logout
                    </a>
                </li>
            {% else %}
                <li class=\"nav-item cta mr-md-2\">
                    <a href=\"{{ path('app_login') }}\" class=\"nav-link\">
                        <i class=\"icon-lock\"></i> Login
                    </a>
                </li>
            {% endif %}
          </ul>
        </div>
      </div>
    </nav>
    {% endblock %}
    <!-- END nav -->
    
    {% block hero %}
    <div class=\"hero-wrap js-fullheight\" style=\"background-image: url('{{ asset('images/bg_1.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-start\" data-scrollax-parent=\"true\">
          <div class=\"col-xl-10 ftco-animate\" data-scrollax=\" properties: { translateY: '70%' }\">
            <h1 class=\"mb-4\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\"> Developer <br><span>Conference 2019</span></h1>
            <p class=\"mb-4\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\">December 21-24, 2019. Paris, Italy</p>
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

    {% block content %}
    <!-- Add your page-specific content here -->
    {% endblock %}

    {% block footer %}
    <footer class=\"ftco-footer ftco-bg-dark ftco-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">EventPlanner</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4 ml-md-5\">
              <h2 class=\"ftco-heading-2\">Useful Links</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"py-2 d-block\">Speakers</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Schedule</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Events</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
             <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">Privacy</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"py-2 d-block\">Career</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">About Us</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Contact Us</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Services</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">Have a Questions?</h2>
              <div class=\"block-23 mb-3\">
                <ul>
                  <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">ariana soghra esprit</span></li>
                  <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">92856741</span></a></li>
                  <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">abdoutouiti@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 text-center\">
            <p>&copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"icon-heart color-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a></p>
          </div>
        </div>
      </div>
    </footer>
    {% endblock %}

    {% block scripts %}
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery-migrate-3.0.1.min.js') }}\"></script>
    <script src=\"{{ asset('js/popper.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.easing.1.3.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.waypoints.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.stellar.min.js') }}\"></script>
    <script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
    <script src=\"{{ asset('js/aos.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.animateNumber.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datepicker.js') }}\"></script>
    <script src=\"{{ asset('js/jquery.timepicker.min.js') }}\"></script>
    <script src=\"{{ asset('js/scrollax.min.js') }}\"></script>
    <script src=\"{{ asset('js/google-map.js') }}\"></script>
    <script src=\"{{ asset('js/main.js') }}\"></script>
    {% endblock %}
    
  </body>
</html>", "base-front.html.twig", "C:\\Users\\DELL\\Desktop\\pidev-user\\templates\\base-front.html.twig");
    }
}
