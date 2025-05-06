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

/* avatar.html.twig */
class __TwigTemplate_6fb141bc6885f68f2897e3f354a8399f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avatar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avatar.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>Créer votre Avatar 3D</title>
\t<style>
\t\tbody {
\t\t\tmargin: 0;
\t\t\tpadding: 20px;
\t\t\tfont-family: Arial, sans-serif;
\t\t\tbackground-color: #f5f5f5;
\t\t}
\t\t.container {
\t\t\tposition: fixed;
\t\t\tbottom: 20px;
\t\t\tleft: 0;
\t\t\tright: 0;
\t\t\tpadding: 0 20px;
\t\t\tbackground: rgba(255, 255, 255, 0.9);
\t\t}
\t\t.form-group {
\t\t\tdisplay: flex;
\t\t\tgap: 10px;
\t\t\tmax-width: 800px;
\t\t\tmargin: 0 auto;
\t\t\tpadding: 10px;
\t\t}
\t\t.form-control {
\t\t\tflex: 1;
\t\t\tpadding: 8px;
\t\t\tborder: 1px solid #ddd;
\t\t\tborder-radius: 4px;
\t\t}
\t\t.btn-primary {
\t\t\tbackground-color: #007bff;
\t\t\tcolor: white;
\t\t\tborder: none;
\t\t\tpadding: 8px 20px;
\t\t\tborder-radius: 4px;
\t\t\tcursor: pointer;
\t\t}
\t\t.btn-primary:hover {
\t\t\tbackground-color: #0056b3;
\t\t}
\t\tiframe {
\t\t\tborder: none;
\t\t\twidth: 100%;
\t\t\theight: 90vh;
\t\t}
\t</style>
</head>
<body>
\t<!-- Iframe Ready Player Me -->
\t<iframe src=\"https://readyplayer.me/avatar?frameApi\" 
\t\tallow=\"camera *; microphone *; clipboard-write\"
\t\tstyle=\"width: 100%; height: 100vh; border: none;\">
\t</iframe>

\t<div class=\"container\">
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" id=\"avatar-url-input\" class=\"form-control\" readonly>
\t\t\t<button class=\"btn-primary\" id=\"save-avatar\">Enregistrer mon Avatar</button>
\t\t</div>
\t</div>

\t<script>
\tdocument.addEventListener(\"DOMContentLoaded\", function () {
\t\tconst iframe = document.querySelector('iframe');
\t\tconst saveButton = document.getElementById(\"save-avatar\");
\t\tconst urlInput = document.getElementById(\"avatar-url-input\");

\t\tiframe.onload = function () {
\t\t\tiframe.contentWindow.postMessage(
\t\t\t\tJSON.stringify({
\t\t\t\t\ttarget: \"readyplayerme\",
\t\t\t\t\ttype: \"subscribe\",
\t\t\t\t\teventName: \"v1.avatar.exported\"
\t\t\t\t}),
\t\t\t\t\"*\"
\t\t\t);
\t\t};

\t\twindow.addEventListener(\"message\", (event) => {
\t\t\ttry {
\t\t\t\tlet message = event.data;
\t\t\t\tif (typeof message === \"string\") {
\t\t\t\t\tmessage = JSON.parse(message);
\t\t\t\t}

\t\t\t\tif (message.source === \"readyplayerme\" && message.eventName === \"v1.avatar.exported\") {
\t\t\t\t\turlInput.value = message.data.url;
\t\t\t\t}
\t\t\t} catch (error) {
\t\t\t\tconsole.error(\"Erreur lors du traitement du message:\", error);
\t\t\t}
\t\t});

\t\tsaveButton.addEventListener(\"click\", function () {
\t\t\tconst avatarUrl = urlInput.value.trim();
\t\t\t
\t\t\tif (!avatarUrl) {
\t\t\t\talert(\"Veuillez attendre que l'avatar soit généré\");
\t\t\t\treturn;
\t\t\t}

\t\t\tfetch(\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_update_avatar3d");
        yield "\", {
\t\t\t\tmethod: \"POST\",
\t\t\t\theaders: { 
\t\t\t\t\t\"Content-Type\": \"application/x-www-form-urlencoded\"
\t\t\t\t},
\t\t\t\tbody: \"avatar_url=\" + encodeURIComponent(avatarUrl)
\t\t\t})
\t\t\t.then(response => response.json())
\t\t\t.then(data => {
\t\t\t\tif (data.success) {
\t\t\t\t\talert(\"Avatar enregistré avec succès !\");
\t\t\t\t\twindow.location.href = \"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\";
\t\t\t\t} else {
\t\t\t\t\talert(data.message || \"Erreur lors de l'enregistrement de l'avatar\");
\t\t\t\t}
\t\t\t})
\t\t\t.catch(error => {
\t\t\t\tconsole.error(\"Erreur:\", error);
\t\t\t\talert(\"Une erreur est survenue lors de l'enregistrement de l'avatar\");
\t\t\t});
\t\t});
\t});
\t</script>
</body>
</html>
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
        return "avatar.html.twig";
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
        return array (  170 => 118,  156 => 107,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>Créer votre Avatar 3D</title>
\t<style>
\t\tbody {
\t\t\tmargin: 0;
\t\t\tpadding: 20px;
\t\t\tfont-family: Arial, sans-serif;
\t\t\tbackground-color: #f5f5f5;
\t\t}
\t\t.container {
\t\t\tposition: fixed;
\t\t\tbottom: 20px;
\t\t\tleft: 0;
\t\t\tright: 0;
\t\t\tpadding: 0 20px;
\t\t\tbackground: rgba(255, 255, 255, 0.9);
\t\t}
\t\t.form-group {
\t\t\tdisplay: flex;
\t\t\tgap: 10px;
\t\t\tmax-width: 800px;
\t\t\tmargin: 0 auto;
\t\t\tpadding: 10px;
\t\t}
\t\t.form-control {
\t\t\tflex: 1;
\t\t\tpadding: 8px;
\t\t\tborder: 1px solid #ddd;
\t\t\tborder-radius: 4px;
\t\t}
\t\t.btn-primary {
\t\t\tbackground-color: #007bff;
\t\t\tcolor: white;
\t\t\tborder: none;
\t\t\tpadding: 8px 20px;
\t\t\tborder-radius: 4px;
\t\t\tcursor: pointer;
\t\t}
\t\t.btn-primary:hover {
\t\t\tbackground-color: #0056b3;
\t\t}
\t\tiframe {
\t\t\tborder: none;
\t\t\twidth: 100%;
\t\t\theight: 90vh;
\t\t}
\t</style>
</head>
<body>
\t<!-- Iframe Ready Player Me -->
\t<iframe src=\"https://readyplayer.me/avatar?frameApi\" 
\t\tallow=\"camera *; microphone *; clipboard-write\"
\t\tstyle=\"width: 100%; height: 100vh; border: none;\">
\t</iframe>

\t<div class=\"container\">
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" id=\"avatar-url-input\" class=\"form-control\" readonly>
\t\t\t<button class=\"btn-primary\" id=\"save-avatar\">Enregistrer mon Avatar</button>
\t\t</div>
\t</div>

\t<script>
\tdocument.addEventListener(\"DOMContentLoaded\", function () {
\t\tconst iframe = document.querySelector('iframe');
\t\tconst saveButton = document.getElementById(\"save-avatar\");
\t\tconst urlInput = document.getElementById(\"avatar-url-input\");

\t\tiframe.onload = function () {
\t\t\tiframe.contentWindow.postMessage(
\t\t\t\tJSON.stringify({
\t\t\t\t\ttarget: \"readyplayerme\",
\t\t\t\t\ttype: \"subscribe\",
\t\t\t\t\teventName: \"v1.avatar.exported\"
\t\t\t\t}),
\t\t\t\t\"*\"
\t\t\t);
\t\t};

\t\twindow.addEventListener(\"message\", (event) => {
\t\t\ttry {
\t\t\t\tlet message = event.data;
\t\t\t\tif (typeof message === \"string\") {
\t\t\t\t\tmessage = JSON.parse(message);
\t\t\t\t}

\t\t\t\tif (message.source === \"readyplayerme\" && message.eventName === \"v1.avatar.exported\") {
\t\t\t\t\turlInput.value = message.data.url;
\t\t\t\t}
\t\t\t} catch (error) {
\t\t\t\tconsole.error(\"Erreur lors du traitement du message:\", error);
\t\t\t}
\t\t});

\t\tsaveButton.addEventListener(\"click\", function () {
\t\t\tconst avatarUrl = urlInput.value.trim();
\t\t\t
\t\t\tif (!avatarUrl) {
\t\t\t\talert(\"Veuillez attendre que l'avatar soit généré\");
\t\t\t\treturn;
\t\t\t}

\t\t\tfetch(\"{{ path('user_update_avatar3d') }}\", {
\t\t\t\tmethod: \"POST\",
\t\t\t\theaders: { 
\t\t\t\t\t\"Content-Type\": \"application/x-www-form-urlencoded\"
\t\t\t\t},
\t\t\t\tbody: \"avatar_url=\" + encodeURIComponent(avatarUrl)
\t\t\t})
\t\t\t.then(response => response.json())
\t\t\t.then(data => {
\t\t\t\tif (data.success) {
\t\t\t\t\talert(\"Avatar enregistré avec succès !\");
\t\t\t\t\twindow.location.href = \"{{ path('app_register') }}\";
\t\t\t\t} else {
\t\t\t\t\talert(data.message || \"Erreur lors de l'enregistrement de l'avatar\");
\t\t\t\t}
\t\t\t})
\t\t\t.catch(error => {
\t\t\t\tconsole.error(\"Erreur:\", error);
\t\t\t\talert(\"Une erreur est survenue lors de l'enregistrement de l'avatar\");
\t\t\t});
\t\t});
\t});
\t</script>
</body>
</html>
", "avatar.html.twig", "C:\\Users\\DELL\\Desktop\\pidev-user\\templates\\avatar.html.twig");
    }
}
