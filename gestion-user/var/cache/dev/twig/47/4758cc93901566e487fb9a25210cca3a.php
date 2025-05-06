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

/* avatar_viewer.html.twig */
class __TwigTemplate_3c5617d94ccb7835ac98230d56586ed9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avatar_viewer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avatar_viewer.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <title>Visualisation Avatar 3D</title>
    <style>
        body { 
            margin: 0; 
            padding: 0;
            overflow: hidden;
        }
        .viewer-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class=\"viewer-container\">
        <iframe
            src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((isset($context["avatar_url"]) || array_key_exists("avatar_url", $context) ? $context["avatar_url"] : (function () { throw new RuntimeError('Variable "avatar_url" does not exist.', 23, $this->source); })()), [".glb" => ".html"]), "html", null, true);
        yield "\"
            style=\"width: 100%; height: 100%; border: none;\"
            allow=\"camera *; microphone *\"
        ></iframe>
    </div>
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
        return "avatar_viewer.html.twig";
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
        return array (  72 => 23,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Visualisation Avatar 3D</title>
    <style>
        body { 
            margin: 0; 
            padding: 0;
            overflow: hidden;
        }
        .viewer-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class=\"viewer-container\">
        <iframe
            src=\"{{ avatar_url|replace({'.glb': '.html'}) }}\"
            style=\"width: 100%; height: 100%; border: none;\"
            allow=\"camera *; microphone *\"
        ></iframe>
    </div>
</body>
</html> ", "avatar_viewer.html.twig", "C:\\Users\\DELL\\Desktop\\pidev-user\\templates\\avatar_viewer.html.twig");
    }
}
