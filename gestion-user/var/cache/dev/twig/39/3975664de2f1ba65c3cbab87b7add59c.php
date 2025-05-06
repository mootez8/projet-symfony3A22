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

/* trajet/edit.html.twig */
class __TwigTemplate_ab61246c45f82f27395347baad05e93d extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet/edit.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "trajet/edit.html.twig", 1);
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

        yield "Edit Trajet";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "  <div class=\"container-fluid\">
    <h1 class=\"mb-4\">Edit Trajet</h1>

    <div class=\"card p-4\">
      <div class=\"card-body\">
        ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        yield "
        
        <div class=\"row mb-3\">
          <div class=\"col-md-6\">
            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "departure", [], "any", false, false, false, 15), 'row', ["label" => "Departure", "attr" => ["class" => "form-control"]]);
        yield "
          </div>
          <div class=\"col-md-6\">
            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "schedule", [], "any", false, false, false, 18), 'row', ["label" => "Schedule", "attr" => ["class" => "form-control"]]);
        yield "
          </div>
        </div>

        <div class=\"row mb-3\">
          <div class=\"col-md-6\">
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "price", [], "any", false, false, false, 24), 'row', ["label" => "Price", "attr" => ["class" => "form-control"]]);
        yield "
          </div>
        </div>

        <div class=\"mt-4\">
          <button type=\"submit\" class=\"btn btn-warning btn-lg\">
            <i class=\"mdi mdi-pencil\"></i> Update Trajet
          </button>
          <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trajet_index");
        yield "\" class=\"btn btn-secondary btn-lg ml-3\">
            <i class=\"mdi mdi-arrow-left\"></i> Back to Trajet List
          </a>
        </div>

        ";
        // line 37
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        yield "
      </div>
    </div>

    <div class=\"mt-4\">
      <h5>Delete Trajet</h5>
      ";
        // line 43
        yield Twig\Extension\CoreExtension::include($this->env, $context, "trajet/_delete_form.html.twig");
        yield "
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
        return "trajet/edit.html.twig";
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
        return array (  157 => 43,  148 => 37,  140 => 32,  129 => 24,  120 => 18,  114 => 15,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Edit Trajet{% endblock %}

{% block content %}
  <div class=\"container-fluid\">
    <h1 class=\"mb-4\">Edit Trajet</h1>

    <div class=\"card p-4\">
      <div class=\"card-body\">
        {{ form_start(form) }}
        
        <div class=\"row mb-3\">
          <div class=\"col-md-6\">
            {{ form_row(form.departure, {'label': 'Departure', 'attr': {'class': 'form-control'}}) }}
          </div>
          <div class=\"col-md-6\">
            {{ form_row(form.schedule, {'label': 'Schedule', 'attr': {'class': 'form-control'}}) }}
          </div>
        </div>

        <div class=\"row mb-3\">
          <div class=\"col-md-6\">
            {{ form_row(form.price, {'label': 'Price', 'attr': {'class': 'form-control'}}) }}
          </div>
        </div>

        <div class=\"mt-4\">
          <button type=\"submit\" class=\"btn btn-warning btn-lg\">
            <i class=\"mdi mdi-pencil\"></i> Update Trajet
          </button>
          <a href=\"{{ path('app_trajet_index') }}\" class=\"btn btn-secondary btn-lg ml-3\">
            <i class=\"mdi mdi-arrow-left\"></i> Back to Trajet List
          </a>
        </div>

        {{ form_end(form) }}
      </div>
    </div>

    <div class=\"mt-4\">
      <h5>Delete Trajet</h5>
      {{ include('trajet/_delete_form.html.twig') }}
    </div>
  </div>
{% endblock %}
", "trajet/edit.html.twig", "C:\\Users\\21629\\Desktop\\kk\\TT\\templates\\trajet\\edit.html.twig");
    }
}
