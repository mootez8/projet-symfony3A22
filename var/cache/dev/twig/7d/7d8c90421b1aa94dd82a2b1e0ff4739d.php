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

/* transport/index.html.twig */
class __TwigTemplate_1177f91e12b7c104f8cdc80fe3d8fb54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "transport/index.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "transport/index.html.twig", 1);
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

        yield "Transport List";
        
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
    <h1 class=\"mb-4\">Transport List</h1>

    <div class=\"list-group\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["transports"]) || array_key_exists("transports", $context) ? $context["transports"] : (function () { throw new RuntimeError('Variable "transports" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 11
            yield "        <div class=\"list-group-item d-flex justify-content-between align-items-center mb-3\">
          <div>
            <h5 class=\"mb-1\">";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "typeTransport", [], "any", false, false, false, 13), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "capacityTransport", [], "any", false, false, false, 13), "html", null, true);
            yield "</h5>
            <p class=\"mb-1\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "statusTransport", [], "any", false, false, false, 14), "html", null, true);
            yield "</p>
          </div>
          
          <div class=\"btn-group\">
            <a href=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
              <i class=\"mdi mdi-eye\"></i> View
            </a>
            <a href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">
              <i class=\"mdi mdi-pencil\"></i> Edit
            </a>
            <form method=\"post\" action=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\" style=\"display:inline;\">
              <input type=\"hidden\" name=\"_token\" value=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["transport"], "id", [], "any", false, false, false, 25))), "html", null, true);
            yield "\">
              <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                <i class=\"mdi mdi-delete\"></i> Delete
              </button>
            </form>
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        // line 32
        if (!$context['_iterated']) {
            // line 33
            yield "        <p>No transports found.</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['transport'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "    </div>

    <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_transport_new");
        yield "\" class=\"btn btn-success mt-4\">
      <i class=\"mdi mdi-plus\"></i> Create New Transport
    </a>
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
        return "transport/index.html.twig";
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
        return array (  169 => 37,  165 => 35,  158 => 33,  156 => 32,  144 => 25,  140 => 24,  134 => 21,  128 => 18,  121 => 14,  115 => 13,  111 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Transport List{% endblock %}

{% block content %}
  <div class=\"container-fluid\">
    <h1 class=\"mb-4\">Transport List</h1>

    <div class=\"list-group\">
      {% for transport in transports %}
        <div class=\"list-group-item d-flex justify-content-between align-items-center mb-3\">
          <div>
            <h5 class=\"mb-1\">{{ transport.typeTransport }} - {{ transport.capacityTransport }}</h5>
            <p class=\"mb-1\">{{ transport.statusTransport }}</p>
          </div>
          
          <div class=\"btn-group\">
            <a href=\"{{ path('app_transport_show', {'id': transport.id}) }}\" class=\"btn btn-info btn-sm\">
              <i class=\"mdi mdi-eye\"></i> View
            </a>
            <a href=\"{{ path('app_transport_edit', {'id': transport.id}) }}\" class=\"btn btn-warning btn-sm\">
              <i class=\"mdi mdi-pencil\"></i> Edit
            </a>
            <form method=\"post\" action=\"{{ path('app_transport_delete', {'id': transport.id}) }}\" style=\"display:inline;\">
              <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ transport.id) }}\">
              <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                <i class=\"mdi mdi-delete\"></i> Delete
              </button>
            </form>
          </div>
        </div>
      {% else %}
        <p>No transports found.</p>
      {% endfor %}
    </div>

    <a href=\"{{ path('app_transport_new') }}\" class=\"btn btn-success mt-4\">
      <i class=\"mdi mdi-plus\"></i> Create New Transport
    </a>
  </div>
{% endblock %}
", "transport/index.html.twig", "C:\\Users\\21629\\Desktop\\kk\\TT\\templates\\transport\\index.html.twig");
    }
}
