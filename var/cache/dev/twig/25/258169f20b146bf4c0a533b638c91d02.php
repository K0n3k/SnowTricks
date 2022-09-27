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

/* header/header.html.twig */
class __TwigTemplate_e6412856cd9b612b533bfeb0e34a927e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header/header.html.twig"));

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
<header class=\"d-flex flex-wrap justify-content-end py-3 text-bg-dark text-white\">
<div class=\"row\">

</div>
<div class=\"row\">
      <ul class=\"nav nav-pills text-decoration-none\">
        <li class=\"nav-item\"><a href=\"/\" class=\"nav-link text-white\">Home</a></li>
        <li class=\"nav-item\"><a href=\"/figure/tricks\" class=\"nav-link text-white\">Tricks</a></li>
        ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "          <li class=\"nav-item\"><a href=\"/user/logout\" class=\"nav-link text-white\">Logout</a></li>
        ";
        } else {
            // line 14
            echo "          <li class=\"nav-item\"><a href=\"/user/sign-in\" class=\"nav-link text-white\">Sign-in</a></li>
          <li class=\"nav-item\"><a href=\"/user/sign-up\" class=\"nav-link text-white\">Sign-up</a></li>
        ";
        }
        // line 17
        echo "      </ul>
</div>
</header>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "header/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 17,  80 => 14,  76 => 12,  74 => 11,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}

<header class=\"d-flex flex-wrap justify-content-end py-3 text-bg-dark text-white\">
<div class=\"row\">

</div>
<div class=\"row\">
      <ul class=\"nav nav-pills text-decoration-none\">
        <li class=\"nav-item\"><a href=\"/\" class=\"nav-link text-white\">Home</a></li>
        <li class=\"nav-item\"><a href=\"/figure/tricks\" class=\"nav-link text-white\">Tricks</a></li>
        {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
          <li class=\"nav-item\"><a href=\"/user/logout\" class=\"nav-link text-white\">Logout</a></li>
        {% else %}
          <li class=\"nav-item\"><a href=\"/user/sign-in\" class=\"nav-link text-white\">Sign-in</a></li>
          <li class=\"nav-item\"><a href=\"/user/sign-up\" class=\"nav-link text-white\">Sign-up</a></li>
        {% endif %}
      </ul>
</div>
</header>

{% endblock %}", "header/header.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin\\templates\\header\\header.html.twig");
    }
}
