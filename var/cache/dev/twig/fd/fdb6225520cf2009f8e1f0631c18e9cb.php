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

/* trick/_commentarys.html.twig */
class __TwigTemplate_6b1aaee76bcd4734c9db55c5d68a9b1f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/_commentarys.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/_commentarys.html.twig"));

        // line 1
        echo "<div class=\"row shadow-sm m-3\" id=\"Commentary_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commentary"]) || array_key_exists("commentary", $context) ? $context["commentary"] : (function () { throw new RuntimeError('Variable "commentary" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
\t<div class=\"col col-1 mx-3\">
\t<div class=\"row row-cols-1\">
\t\t<img src=";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["avatars_directory"]) || array_key_exists("avatars_directory", $context) ? $context["avatars_directory"] : (function () { throw new RuntimeError('Variable "avatars_directory" does not exist.', 4, $this->source); })()) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commentary"]) || array_key_exists("commentary", $context) ? $context["commentary"] : (function () { throw new RuntimeError('Variable "commentary" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "avatar", [], "any", false, false, false, 4))), "html", null, true);
        echo " class=\"bd-placeholder-img card-img-top\" width=\"32\" height=\"32\" alt=\"image\"/>
\t\t";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commentary"]) || array_key_exists("commentary", $context) ? $context["commentary"] : (function () { throw new RuntimeError('Variable "commentary" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5), "Username", [], "any", false, false, false, 5), "html", null, true);
        echo "
\t\t<br>
\t\t";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commentary"]) || array_key_exists("commentary", $context) ? $context["commentary"] : (function () { throw new RuntimeError('Variable "commentary" does not exist.', 7, $this->source); })()), "publishedDate", [], "any", false, false, false, 7), "Y-m-d"), "html", null, true);
        echo "
\t\t
\t</div>
\t</div>
\t<div class=\"col\">
\t<div class=\"row\">
\t</div>
\t\t<p>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commentary"]) || array_key_exists("commentary", $context) ? $context["commentary"] : (function () { throw new RuntimeError('Variable "commentary" does not exist.', 14, $this->source); })()), "commentary", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "trick/_commentarys.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  59 => 7,  54 => 5,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row shadow-sm m-3\" id=\"Commentary_{{ commentary.id }}\">
\t<div class=\"col col-1 mx-3\">
\t<div class=\"row row-cols-1\">
\t\t<img src={{ asset(avatars_directory ~ commentary.user.avatar) }} class=\"bd-placeholder-img card-img-top\" width=\"32\" height=\"32\" alt=\"image\"/>
\t\t{{ commentary.user.Username }}
\t\t<br>
\t\t{{ commentary.publishedDate|date('Y-m-d') }}
\t\t
\t</div>
\t</div>
\t<div class=\"col\">
\t<div class=\"row\">
\t</div>
\t\t<p>{{ commentary.commentary }}</p>
\t</div>
</div>
", "trick/_commentarys.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin_old\\templates\\trick\\_commentarys.html.twig");
    }
}
