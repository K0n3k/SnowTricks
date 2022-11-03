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

/* trick/tricks.html.twig */
class __TwigTemplate_c3c803a6890b71a3d1a18b1cfb8daefa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascript' => [$this, 'block_javascript'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/tricks.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/tricks.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trick/tricks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello TrickController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 7
        echo "<script language = \"javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script> 
";
        // line 8
        $this->loadTemplate("js/_loadMoreTricks.js.twig", "trick/tricks.html.twig", 8)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
\t<main>

\t\t<div class=\"hero p-0 m-0\">
\t\t\t<h1 class=\"slogan d-inline\">The snow must go on</h1>
\t\t\t<a href=\"#tricks\">
\t\t\t\t<div class=\"arrow_container\">
\t\t\t\t\t<div class=\"chevron\"></div>
\t\t\t\t\t<div class=\"chevron\"></div>
\t\t\t\t\t<div class=\"chevron\"></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>

\t\t<div class=\"album py-5 bg-light position-relative\" id=\"tricks\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3 mb-3\" id=\"tricksCards\">

\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 31, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 32
            echo "\t\t\t\t\t\t";
            echo twig_include($this->env, $context, "trick/_trickCard.html.twig");
            echo "
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<button onClick=\"loadMore()\" class=\"btn btn-dark my-3\" id=\"loadMore\">Load More</button>
\t\t\t\t\t";
        // line 38
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 39
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_trick");
            echo "\" class=\"btn btn-dark my-3\">Add a trick</a>
\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t</div>
\t\t\t\t<a href=\"#tricks\" id=\"downArrow\">
\t\t\t\t\t<div class=\"arrow_container\">
\t\t\t\t\t\t<div class=\"chevron2\"></div>
\t\t\t\t\t\t<div class=\"chevron2\"></div>
\t\t\t\t\t\t<div class=\"chevron2\"></div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</main>

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "trick/tricks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 41,  176 => 39,  174 => 38,  168 => 34,  151 => 32,  134 => 31,  113 => 12,  103 => 11,  93 => 8,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TrickController!
{% endblock %}

{% block javascript %}
<script language = \"javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script> 
{% include('js/_loadMoreTricks.js.twig') %}
{% endblock %}

{% block body %}

\t<main>

\t\t<div class=\"hero p-0 m-0\">
\t\t\t<h1 class=\"slogan d-inline\">The snow must go on</h1>
\t\t\t<a href=\"#tricks\">
\t\t\t\t<div class=\"arrow_container\">
\t\t\t\t\t<div class=\"chevron\"></div>
\t\t\t\t\t<div class=\"chevron\"></div>
\t\t\t\t\t<div class=\"chevron\"></div>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>

\t\t<div class=\"album py-5 bg-light position-relative\" id=\"tricks\">
\t\t\t<div class=\"container\">

\t\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3 mb-3\" id=\"tricksCards\">

\t\t\t\t\t{% for trick in tricks %}
\t\t\t\t\t\t{{ include('trick/_trickCard.html.twig') }}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<button onClick=\"loadMore()\" class=\"btn btn-dark my-3\" id=\"loadMore\">Load More</button>
\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t<a href=\"{{ path('add_trick') }}\" class=\"btn btn-dark my-3\">Add a trick</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<a href=\"#tricks\" id=\"downArrow\">
\t\t\t\t\t<div class=\"arrow_container\">
\t\t\t\t\t\t<div class=\"chevron2\"></div>
\t\t\t\t\t\t<div class=\"chevron2\"></div>
\t\t\t\t\t\t<div class=\"chevron2\"></div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</main>

\t{% endblock %}
", "trick/tricks.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin_old\\templates\\trick\\tricks.html.twig");
    }
}
