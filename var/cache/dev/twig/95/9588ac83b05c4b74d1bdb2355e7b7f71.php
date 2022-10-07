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

/* trick/index.html.twig */
class __TwigTemplate_7b82d2c05e989ba6aa72cc3993ab8af0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trick/index.html.twig", 1);
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
<script language = \"javascript\">

offset = 15;
countTricks = ";
        // line 11
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 11, $this->source); })())), "html", null, true);
        echo ";

window.onload = function() {
\tshowLoadMore();
\tshowDownArrow();
};

function showDownArrow() {
\tdownArrow = document.getElementById('downArrow');
\tif(countTricks > ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["tricksLimit"]) || array_key_exists("tricksLimit", $context) ? $context["tricksLimit"] : (function () { throw new RuntimeError('Variable "tricksLimit" does not exist.', 20, $this->source); })()), "html", null, true);
        echo ") {
\t\tdownArrow.style.visibility = 'visible';
\t} else {
\t\tdownArrow.style.visibility = 'hidden';
\t}
}

function showLoadMore() {
\tif(offset >= ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["maxTricks"]) || array_key_exists("maxTricks", $context) ? $context["maxTricks"] : (function () { throw new RuntimeError('Variable "maxTricks" does not exist.', 28, $this->source); })()), "html", null, true);
        echo ") {
\t\tbtn = document.getElementById('loadMore');
\t\tbtn.style.visibility = 'hidden';
\t}
}

function loadMore() {
\t\$.ajax({
\t\turl: \"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricksAjax");
        echo "\",
\t\ttype: \"POST\",
\t\tdata: {offset},

\t\tsuccess: function(result) {
\t\t\tjsonContent = \$.parseJSON(result);
\t\t\t\$.each(jsonContent, function(key, value){
\t\t\tcountTricks++;
\t\t\thtml = \"\";
\t\t\thtml += '\t\t\t\t\t\t<div class=\"col\" id=\"trick_' + value.id + '\">';
\t\t\thtml += '\t\t\t\t<div class=\"card shadow-sm\">';
\t\t\thtml += '\t\t\t\t\t<a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks");
        echo "/' + value.id + '\">';
\t\t\thtml += '\t\t\t\t\t\t<svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\" preserveaspectratio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">';
\t\t\thtml += '\t\t\t\t\t\t\t<title>Placeholder</title>';
\t\t\thtml += '\t\t\t\t\t\t\t<rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text>';
\t\t\thtml += '\t\t\t\t\t\t</svg>';
            html += '\t\t\t\t\t</a>';
\t\t\thtml += '\t\t\t\t\t<div class=\"card-body\">';
\t\t\thtml += '';
\t\t\thtml += '\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center col\">';
\t\t\thtml += '\t\t\t\t\t\t\t<small class=\"text-muted\">' + value.name + '</small>';
\t\t\thtml += '\t\t\t\t\t\t\t";
        // line 57
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            echo "';
\t\t\thtml += '\t\t\t\t\t\t\t<div class=\"btn-group\">';
\t\t\thtml += '\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>';
\t\t\thtml += '\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>';
\t\t\thtml += '\t\t\t\t\t\t\t</div>';
\t\t\thtml += '\t\t\t\t\t\t\t";
        }
        // line 62
        echo "';
\t\t\thtml += '\t\t\t\t\t\t</div>';
\t\t\thtml += '\t\t\t\t\t</div>';
\t\t\thtml += '\t\t\t\t</div>';
\t\t\thtml += '\t\t\t</div>';
\t\t\t
\t\t\t\$('#tricksCards').append(html);\t
\t\t\t});

\t\t\toffset += 15;
\t\t\tshowLoadMore();
\t\t\tshowDownArrow();

\t\t}
\t})
}

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 83
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
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 103, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 104
            echo "\t\t\t\t\t\t<div class=\"col\" id=\"trick_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 104), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t\t<a href=\"";
            // line 106
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tricks");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 106), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\" preserveaspectratio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">
\t\t\t\t\t\t\t\t\t<title>Placeholder</title>
\t\t\t\t\t\t\t\t\t<rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text>
\t\t\t\t\t\t\t\t</svg>
                            </a>
\t\t\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center col\">
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 115), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t\t\t\t";
            // line 116
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 117
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 122
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "
\t\t\t\t</div>
\t\t\t\t<button onClick=\"loadMore()\" class=\"btn btn-dark my-3 position-absolute bottom-0 start-50 translate-middle-x\" id=\"loadMore\">Load More</button>
\t\t\t\t<a href=\"#tricks\" id=\"downArrow\">
\t\t\t\t\t<div class=\"arrow_container\">
\t\t\t\t\t\t<div class=\"chevron2\"></div>
\t\t\t\t\t\t<div class=\"chevron2\"></div>
\t\t\t\t\t\t<div class=\"chevron2\"></div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>

\t\t</main>

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "trick/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 127,  263 => 122,  256 => 117,  254 => 116,  250 => 115,  236 => 106,  230 => 104,  226 => 103,  204 => 83,  194 => 82,  166 => 62,  157 => 57,  144 => 47,  130 => 36,  119 => 28,  108 => 20,  96 => 11,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TrickController!
{% endblock %}

{% block javascript %}
<script language = \"javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script> 
<script language = \"javascript\">

offset = 15;
countTricks = {{ tricks|length }};

window.onload = function() {
\tshowLoadMore();
\tshowDownArrow();
};

function showDownArrow() {
\tdownArrow = document.getElementById('downArrow');
\tif(countTricks > {{ tricksLimit }}) {
\t\tdownArrow.style.visibility = 'visible';
\t} else {
\t\tdownArrow.style.visibility = 'hidden';
\t}
}

function showLoadMore() {
\tif(offset >= {{ maxTricks }}) {
\t\tbtn = document.getElementById('loadMore');
\t\tbtn.style.visibility = 'hidden';
\t}
}

function loadMore() {
\t\$.ajax({
\t\turl: \"{{ path('app_tricksAjax') }}\",
\t\ttype: \"POST\",
\t\tdata: {offset},

\t\tsuccess: function(result) {
\t\t\tjsonContent = \$.parseJSON(result);
\t\t\t\$.each(jsonContent, function(key, value){
\t\t\tcountTricks++;
\t\t\thtml = \"\";
\t\t\thtml += '\t\t\t\t\t\t<div class=\"col\" id=\"trick_' + value.id + '\">';
\t\t\thtml += '\t\t\t\t<div class=\"card shadow-sm\">';
\t\t\thtml += '\t\t\t\t\t<a href=\"{{ path(\"app_tricks\") }}/' + value.id + '\">';
\t\t\thtml += '\t\t\t\t\t\t<svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\" preserveaspectratio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">';
\t\t\thtml += '\t\t\t\t\t\t\t<title>Placeholder</title>';
\t\t\thtml += '\t\t\t\t\t\t\t<rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text>';
\t\t\thtml += '\t\t\t\t\t\t</svg>';
            html += '\t\t\t\t\t</a>';
\t\t\thtml += '\t\t\t\t\t<div class=\"card-body\">';
\t\t\thtml += '';
\t\t\thtml += '\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center col\">';
\t\t\thtml += '\t\t\t\t\t\t\t<small class=\"text-muted\">' + value.name + '</small>';
\t\t\thtml += '\t\t\t\t\t\t\t{% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}';
\t\t\thtml += '\t\t\t\t\t\t\t<div class=\"btn-group\">';
\t\t\thtml += '\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>';
\t\t\thtml += '\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>';
\t\t\thtml += '\t\t\t\t\t\t\t</div>';
\t\t\thtml += '\t\t\t\t\t\t\t{% endif %}';
\t\t\thtml += '\t\t\t\t\t\t</div>';
\t\t\thtml += '\t\t\t\t\t</div>';
\t\t\thtml += '\t\t\t\t</div>';
\t\t\thtml += '\t\t\t</div>';
\t\t\t
\t\t\t\$('#tricksCards').append(html);\t
\t\t\t});

\t\t\toffset += 15;
\t\t\tshowLoadMore();
\t\t\tshowDownArrow();

\t\t}
\t})
}

</script>
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
\t\t\t\t\t\t<div class=\"col\" id=\"trick_{{ trick.id }}\">
\t\t\t\t\t\t\t<div class=\"card shadow-sm\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_tricks') }}/{{ trick.id }}\">
\t\t\t\t\t\t\t\t<svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\" preserveaspectratio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">
\t\t\t\t\t\t\t\t\t<title>Placeholder</title>
\t\t\t\t\t\t\t\t\t<rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text>
\t\t\t\t\t\t\t\t</svg>
                            </a>
\t\t\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center col\">
\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">{{ trick.name }}</small>
\t\t\t\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">View</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>
\t\t\t\t<button onClick=\"loadMore()\" class=\"btn btn-dark my-3 position-absolute bottom-0 start-50 translate-middle-x\" id=\"loadMore\">Load More</button>
\t\t\t\t<a href=\"#tricks\" id=\"downArrow\">
\t\t\t\t\t<div class=\"arrow_container\">
\t\t\t\t\t\t<div class=\"chevron2\"></div>
\t\t\t\t\t\t<div class=\"chevron2\"></div>
\t\t\t\t\t\t<div class=\"chevron2\"></div>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>

\t\t</main>

\t{% endblock %}
", "trick/index.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin\\templates\\trick\\index.html.twig");
    }
}
