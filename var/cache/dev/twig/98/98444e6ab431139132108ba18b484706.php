<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* mail/registrationLink.html.twig */
class __TwigTemplate_2ee3477ed4dd2298d98713f9b7b4162c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/registrationLink.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mail/registrationLink.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
  <meta name=\"generator\" content=\"Hugo 0.72.0\">
  <title>Album example · Bootstrap</title>

  <link rel=\"canonical\" href=\"https://v5.getbootstrap.com/docs/5.0/examples/album/\">


</head>

<body>

<h1>Welcome on snowtrick ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "username", [], "any", false, false, false, 19), "html", null, true);
        echo " !</h1>
<a href=\"http://localhost";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_userToken", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["registrationToken"]) || array_key_exists("registrationToken", $context) ? $context["registrationToken"] : (function () { throw new RuntimeError('Variable "registrationToken" does not exist.', 20, $this->source); })()), "token", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\">Validate my account</a>


</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "mail/registrationLink.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  63 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
  <meta name=\"generator\" content=\"Hugo 0.72.0\">
  <title>Album example · Bootstrap</title>

  <link rel=\"canonical\" href=\"https://v5.getbootstrap.com/docs/5.0/examples/album/\">


</head>

<body>

<h1>Welcome on snowtrick {{ user.username }} !</h1>
<a href=\"http://localhost{{ path('app_userToken', { 'token': registrationToken.token }) }}\">Validate my account</a>


</body>

</html>", "mail/registrationLink.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin\\templates\\mail\\registrationLink.html.twig");
    }
}
