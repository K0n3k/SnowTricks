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

/* header/_header.html.twig */
class __TwigTemplate_2d6450feb564f3d979750a3cbe1e0b5d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/_header.html.twig"));

        // line 1
        $this->displayBlock('header', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 2
        echo "
<header>
  <div class=\"d-block d-sm-none shadow-sm bg-dark fixed-bottom text-center\">
      <a href=";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "><img width=\"32\" height=\"32\" src=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/img/house-door-fill.svg"), "html", null, true);
        echo " alt=\"house door\"></a>
    ";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 7
            echo "      <a href=";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "><img width=\"32\" height=\"32\" src=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/img/door-open.svg"), "html", null, true);
            echo " alt=\"door open\"></a>
\t\t";
        } else {
            // line 9
            echo "      <a href=";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sign-in");
            echo "><img width=\"32\" height=\"32\" src=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/img/box-arrow-in-right.svg"), "html", null, true);
            echo " alt=\"box arrow in right\"></a>
\t\t";
        }
        // line 11
        echo "  </div>

    <div class=\"navbar navbar-dark bg-dark shadow-sm d-none d-sm-block\">
      <div class=\"container\">
        <div class=\"col justify-content-start\">
            <a href=\"/\" class=\"navbar-brand d-flex align-items-center\">
              <strong>Snowtricks</strong>
            </a>
        </div>
        <div class=\"col justify-content-end text-white d-flex\">
            <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"text-white\">Home</a> &nbsp;|&nbsp;
            <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "#tricks\" class=\"text-white\">Tricks</a> &nbsp;|&nbsp;
\t\t";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 24
            echo "\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle text-white\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "Username", [], "any", false, false, false, 25), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo ">Logout</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 33
            echo "            <a href=";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sign-in");
            echo " class=\"text-white\">Sign-in</a> &nbsp;|&nbsp;
            <a href=";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sign-up");
            echo " class=\"text-white\">Sign-up</a>
\t\t";
        }
        // line 36
        echo "        </div>
      </div>
    </div>
  </header>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "header/_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 36,  136 => 34,  131 => 33,  123 => 28,  117 => 25,  114 => 24,  112 => 23,  108 => 22,  104 => 21,  92 => 11,  84 => 9,  76 => 7,  74 => 6,  68 => 5,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}

<header>
  <div class=\"d-block d-sm-none shadow-sm bg-dark fixed-bottom text-center\">
      <a href={{ path('home') }}><img width=\"32\" height=\"32\" src={{ asset('Style/img/house-door-fill.svg') }} alt=\"house door\"></a>
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
      <a href={{ path('logout') }}><img width=\"32\" height=\"32\" src={{ asset('Style/img/door-open.svg') }} alt=\"door open\"></a>
\t\t{% else %}
      <a href={{ path('sign-in') }}><img width=\"32\" height=\"32\" src={{ asset('Style/img/box-arrow-in-right.svg') }} alt=\"box arrow in right\"></a>
\t\t{% endif %}
  </div>

    <div class=\"navbar navbar-dark bg-dark shadow-sm d-none d-sm-block\">
      <div class=\"container\">
        <div class=\"col justify-content-start\">
            <a href=\"/\" class=\"navbar-brand d-flex align-items-center\">
              <strong>Snowtricks</strong>
            </a>
        </div>
        <div class=\"col justify-content-end text-white d-flex\">
            <a href=\"{{ path('home') }}\" class=\"text-white\">Home</a> &nbsp;|&nbsp;
            <a href=\"{{ path('home') }}#tricks\" class=\"text-white\">Tricks</a> &nbsp;|&nbsp;
\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle text-white\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-expanded=\"false\">{{ app.user.Username }}</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton1\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href={{path('logout')}}>Logout</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
            <a href={{path('sign-in')}} class=\"text-white\">Sign-in</a> &nbsp;|&nbsp;
            <a href={{path('sign-up')}} class=\"text-white\">Sign-up</a>
\t\t{% endif %}
        </div>
      </div>
    </div>
  </header>

{% endblock %}
", "header/_header.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin_old\\templates\\header\\_header.html.twig");
    }
}
