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

/* trick/_trickCard.html.twig */
class __TwigTemplate_9eddc4e46aaf56916a5146d2aaf06cdb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/_trickCard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/_trickCard.html.twig"));

        // line 1
        echo "<div class=\"col\" id=\"trick_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<div class=\"card shadow-sm\">
\t\t<a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_trick", ["trickId" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\">
\t\t\t<svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\" preserveaspectratio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">
\t\t\t\t<title>Placeholder</title>
\t\t\t\t<rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text>
\t\t\t</svg>
\t\t</a>
\t\t<div class=\"card-body\">
\t\t\t<div class=\"d-flex justify-content-between align-items-center col\">
\t\t\t\t<small class=\"text-muted\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</small>
\t\t\t\t\t";
        // line 12
        echo twig_include($this->env, $context, "trick/_deleteModifyButtons.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 18
        echo twig_include($this->env, $context, "trick/_deleteModal.html.twig");
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "trick/_trickCard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  64 => 12,  60 => 11,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col\" id=\"trick_{{ trick.id }}\">
\t<div class=\"card shadow-sm\">
\t\t<a href=\"{{ path('show_trick', {'trickId': trick.id}) }}\">
\t\t\t<svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\" preserveaspectratio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">
\t\t\t\t<title>Placeholder</title>
\t\t\t\t<rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text>
\t\t\t</svg>
\t\t</a>
\t\t<div class=\"card-body\">
\t\t\t<div class=\"d-flex justify-content-between align-items-center col\">
\t\t\t\t<small class=\"text-muted\">{{ trick.name }}</small>
\t\t\t\t\t{{ include('trick/_deleteModifyButtons.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
</div>

{{ include('trick/_deleteModal.html.twig') }}", "trick/_trickCard.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin\\templates\\trick\\_trickCard.html.twig");
    }
}
