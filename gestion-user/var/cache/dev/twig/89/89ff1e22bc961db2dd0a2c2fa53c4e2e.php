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

/* reset_password/email.html.twig */
class __TwigTemplate_128f20faa86b83f66029fde839ce4af4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        // line 1
        yield "<h1>Réinitialisation de votre mot de passe Event Planner</h1>

<p>Bonjour,</p>

<p>Une demande de réinitialisation de mot de passe a été effectuée pour votre compte.</p>

<p>Pour réinitialiser votre mot de passe, cliquez sur le lien ci-dessous :</p>

<p><a href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reset_password", ["token" => (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 9, $this->source); })())])), "html", null, true);
        yield "\">Réinitialiser mon mot de passe</a></p>

<p>Ce lien expirera dans 1 heure.</p>

<p>Si vous n'avez pas demandé cette réinitialisation, ignorez cet email.</p>

<p>Cordialement,<br>L'équipe Event Planner</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reset_password/email.html.twig";
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
        return array (  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>Réinitialisation de votre mot de passe Event Planner</h1>

<p>Bonjour,</p>

<p>Une demande de réinitialisation de mot de passe a été effectuée pour votre compte.</p>

<p>Pour réinitialiser votre mot de passe, cliquez sur le lien ci-dessous :</p>

<p><a href=\"{{ absolute_url(path('app_reset_password', {token: resetToken})) }}\">Réinitialiser mon mot de passe</a></p>

<p>Ce lien expirera dans 1 heure.</p>

<p>Si vous n'avez pas demandé cette réinitialisation, ignorez cet email.</p>

<p>Cordialement,<br>L'équipe Event Planner</p>
", "reset_password/email.html.twig", "C:\\Users\\DELL\\Desktop\\pidev-user\\templates\\reset_password\\email.html.twig");
    }
}
