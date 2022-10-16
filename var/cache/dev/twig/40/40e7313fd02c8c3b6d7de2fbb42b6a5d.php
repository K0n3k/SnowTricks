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
\t\tbtn.remove() ;
\t}
}

function loadMore() {
\t\$.ajax({
\t\turl: \"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loadmore_tricks");
        echo "\",
\t\ttype: \"POST\",
\t\tdata: {offset},

\t\tsuccess: function(result) {
\t\t\tjsonContent = \$.parseJSON(result);
\t\t\t\$.each(jsonContent, function(key, value){
\t\t\tcountTricks++;
\t\t\thtml = \"\";
\t\t\t";
        // line 45
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 46
            echo "\t\t\thtml += '\t<div class=\"modal fade\" id=\"modal_' + value.id + '\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">';
\t\t\thtml += '\t\t<div class=\"modal-dialog\">';
\t\t\thtml += '\t\t\t<div class=\"modal-content\">';
\t\t\thtml += '\t\t\t\t<div class=\"modal-header\">';
\t\t\thtml += '\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Modal title</h1>';
\t\t\thtml += '\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>';
\t\t\thtml += '\t\t\t\t</div>';
\t\t\thtml += '\t\t\t\t<div class=\"modal-body\">';
\t\t\thtml += '\t\t\t\t\t...';
\t\t\thtml += '\t\t\t\t</div>';
\t\t\thtml += '\t\t\t\t<div class=\"modal-footer\">';
\t\t\thtml += '\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>';
\t\t\thtml += '\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Save changes</button>';
\t\t\thtml += '\t\t\t\t</div>';
\t\t\thtml += '\t\t\t</div>';
\t\t\thtml += '\t\t</div>';
\t\t\thtml += '\t</div>';
\t\t\t";
        }
        // line 64
        echo "\t\t\thtml += '\t\t\t\t\t\t<div class=\"col\" id=\"trick_' + value.id + '\">';
\t\t\thtml += '\t\t\t\t<div class=\"card shadow-sm\">';
\t\t\tvar viewRoute = '";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_trick", ["trickId" => "value_id"]);
        echo "';
\t\t\tviewRoute = viewRoute.replace(\"value_id\", value.id);
\t\t\thtml += '\t\t\t\t\t<a href=\"' + viewRoute + '\">';
\t\t\thtml += '\t\t\t\t\t\t<svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\" preserveaspectratio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">';
\t\t\thtml += '\t\t\t\t\t\t\t<title>Placeholder</title>';
\t\t\thtml += '\t\t\t\t\t\t\t<rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text>';
\t\t\thtml += '\t\t\t\t\t\t</svg>';
            html += '\t\t\t\t\t</a>';
\t\t\thtml += '\t\t\t\t\t<div class=\"card-body\">';
\t\t\thtml += '';
\t\t\thtml += '\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center col\">';
\t\t\thtml += '\t\t\t\t\t\t\t<small class=\"text-muted\">' + value.name + '</small>';
\t\t\t";
        // line 78
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 79
            echo "\t\t\t\tvar Editroute = '";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modify_trick", ["trickId" => "value_id"]);
            echo "';
\t\t\t\tEditroute = Editroute.replace(\"value_id\", value.id);
\t\t\t\thtml += '\t\t\t\t\t\t\t<div class=\"btn-group\">';
\t\t\t\thtml += '\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_' + value.id + '\"><img src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/img/trash-svgrepo-com.svg"), "html", null, true);
            echo "\" alt=\"pen icon\" height=\"16\" /></button>';
\t\t\t\thtml += '\t\t\t\t\t\t\t\t<a href=\"' + Editroute + '\" class=\"btn btn-sm btn-outline-secondary\"><img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/img/pencil-svgrepo-com.svg"), "html", null, true);
            echo "\" alt=\"pen icon\" height=\"16\" /></a>';
\t\t\t\thtml += '\t\t\t\t\t\t\t</div>';
\t\t\t";
        }
        // line 86
        echo "\t\t\thtml += '\t\t\t\t\t\t</div>';
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

    // line 105
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 106
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
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tricks"]) || array_key_exists("tricks", $context) ? $context["tricks"] : (function () { throw new RuntimeError('Variable "tricks" does not exist.', 126, $this->source); })()));
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
            // line 127
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
        // line 129
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<button onClick=\"loadMore()\" class=\"btn btn-dark my-3\" id=\"loadMore\">Load More</button>
\t\t\t\t\t";
        // line 133
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 134
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_trick");
            echo "\" class=\"btn btn-dark my-3\">Add a trick</a>
\t\t\t\t\t";
        }
        // line 136
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
        return array (  309 => 136,  303 => 134,  301 => 133,  295 => 129,  278 => 127,  261 => 126,  239 => 106,  229 => 105,  202 => 86,  196 => 83,  192 => 82,  185 => 79,  183 => 78,  168 => 66,  164 => 64,  144 => 46,  142 => 45,  130 => 36,  119 => 28,  108 => 20,  96 => 11,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
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
\t\tbtn.remove() ;
\t}
}

function loadMore() {
\t\$.ajax({
\t\turl: \"{{ path('loadmore_tricks') }}\",
\t\ttype: \"POST\",
\t\tdata: {offset},

\t\tsuccess: function(result) {
\t\t\tjsonContent = \$.parseJSON(result);
\t\t\t\$.each(jsonContent, function(key, value){
\t\t\tcountTricks++;
\t\t\thtml = \"\";
\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\thtml += '\t<div class=\"modal fade\" id=\"modal_' + value.id + '\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">';
\t\t\thtml += '\t\t<div class=\"modal-dialog\">';
\t\t\thtml += '\t\t\t<div class=\"modal-content\">';
\t\t\thtml += '\t\t\t\t<div class=\"modal-header\">';
\t\t\thtml += '\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Modal title</h1>';
\t\t\thtml += '\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>';
\t\t\thtml += '\t\t\t\t</div>';
\t\t\thtml += '\t\t\t\t<div class=\"modal-body\">';
\t\t\thtml += '\t\t\t\t\t...';
\t\t\thtml += '\t\t\t\t</div>';
\t\t\thtml += '\t\t\t\t<div class=\"modal-footer\">';
\t\t\thtml += '\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>';
\t\t\thtml += '\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">Save changes</button>';
\t\t\thtml += '\t\t\t\t</div>';
\t\t\thtml += '\t\t\t</div>';
\t\t\thtml += '\t\t</div>';
\t\t\thtml += '\t</div>';
\t\t\t{% endif %}
\t\t\thtml += '\t\t\t\t\t\t<div class=\"col\" id=\"trick_' + value.id + '\">';
\t\t\thtml += '\t\t\t\t<div class=\"card shadow-sm\">';
\t\t\tvar viewRoute = '{{ path(\"show_trick\", {'trickId': 'value_id'}) }}';
\t\t\tviewRoute = viewRoute.replace(\"value_id\", value.id);
\t\t\thtml += '\t\t\t\t\t<a href=\"' + viewRoute + '\">';
\t\t\thtml += '\t\t\t\t\t\t<svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\" preserveaspectratio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">';
\t\t\thtml += '\t\t\t\t\t\t\t<title>Placeholder</title>';
\t\t\thtml += '\t\t\t\t\t\t\t<rect width=\"100%\" height=\"100%\" fill=\"#55595c\"/><text x=\"50%\" y=\"50%\" fill=\"#eceeef\" dy=\".3em\">Thumbnail</text>';
\t\t\thtml += '\t\t\t\t\t\t</svg>';
            html += '\t\t\t\t\t</a>';
\t\t\thtml += '\t\t\t\t\t<div class=\"card-body\">';
\t\t\thtml += '';
\t\t\thtml += '\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center col\">';
\t\t\thtml += '\t\t\t\t\t\t\t<small class=\"text-muted\">' + value.name + '</small>';
\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\tvar Editroute = '{{ path(\"modify_trick\", {'trickId': 'value_id'}) }}';
\t\t\t\tEditroute = Editroute.replace(\"value_id\", value.id);
\t\t\t\thtml += '\t\t\t\t\t\t\t<div class=\"btn-group\">';
\t\t\t\thtml += '\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_' + value.id + '\"><img src=\"{{ asset(\"Style/img/trash-svgrepo-com.svg\") }}\" alt=\"pen icon\" height=\"16\" /></button>';
\t\t\t\thtml += '\t\t\t\t\t\t\t\t<a href=\"' + Editroute + '\" class=\"btn btn-sm btn-outline-secondary\"><img src=\"{{ asset(\"Style/img/pencil-svgrepo-com.svg\") }}\" alt=\"pen icon\" height=\"16\" /></a>';
\t\t\t\thtml += '\t\t\t\t\t\t\t</div>';
\t\t\t{% endif %}
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
\t\t\t\t\t\t{{ include('trick/_trickCard.html.twig') }}
\t\t\t\t\t{% endfor %}

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
", "trick/tricks.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin\\templates\\trick\\tricks.html.twig");
    }
}
