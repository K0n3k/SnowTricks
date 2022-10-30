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

/* trick/_medias.html.twig */
class __TwigTemplate_1fbadefbd5d2c49d42721f3ceff9f87c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'jsDeleteImage' => [$this, 'block_jsDeleteImage'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/_medias.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/_medias.html.twig"));

        // line 1
        echo "\t<div class=\"col mb-2 text-center\">
\t\t";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 2, $this->source); })()), "type", [], "any", false, false, false, 2) == "image")) {
            // line 3
            echo "\t\t\t<img src=";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["images_directory"]) || array_key_exists("images_directory", $context) ? $context["images_directory"] : (function () { throw new RuntimeError('Variable "images_directory" does not exist.', 3, $this->source); })()) . twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 3, $this->source); })()), "filename", [], "any", false, false, false, 3))), "html", null, true);
            echo " class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\" alt=\"image\"/>
\t\t";
        } else {
            // line 5
            echo "\t\t\t<iframe width=\"100%\" height=\"200\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 5, $this->source); })()), "filename", [], "any", false, false, false, 5), "html", null, true);
            echo "\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
\t\t";
        }
        // line 7
        echo "\t\t";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "attributes", [], "any", false, false, false, 7), "get", [0 => "_route"], "method", false, false, false, 7) == "modify_trick") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "attributes", [], "any", false, false, false, 7), "get", [0 => "_route"], "method", false, false, false, 7) == "add_trick"))) {
            // line 8
            echo "\t\t\t";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 8, $this->source); })()), "MainMedia", [], "any", false, false, false, 8), "children", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 8, $this->source); })()), "index0", [], "any", false, false, false, 8), [], "array", false, false, false, 8), 'widget', ["label" => "Set as main media"]);
            echo "
\t\t\t<a class=\"btn btn-danger my-2\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_media", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\" data-delete data-token=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9))), "html", null, true);
            echo "\">Delete</a>
\t\t";
        }
        // line 11
        echo "</div>

";
        // line 13
        $this->displayBlock('jsDeleteImage', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_jsDeleteImage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsDeleteImage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsDeleteImage"));

        // line 14
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "attributes", [], "any", false, false, false, 14), "get", [0 => "_route"], "method", false, false, false, 14) == "modify_trick") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "attributes", [], "any", false, false, false, 14), "get", [0 => "_route"], "method", false, false, false, 14) == "add_trick"))) {
            // line 15
            echo "\t<script>
\t\twindow.onload = () => {
\t\t\tbtnCancel = document.getElementById('btnCancel');
\t\t\tlet links = document.querySelectorAll(\"[data-delete]\")
\t\t\tfor(link of links) {
\t\t\t\tlink.addEventListener(\"click\", function(e){
\t\t\t\t\te.preventDefault()
\t\t\t\t\tif(confirm('are you sure to delete this media?')) {
\t\t\t\t\t\tfetch(this.getAttribute(\"href\"), {
\t\t\t\t\t\t\tmethod: \"DELETE\",
\t\t\t\t\t\t\theaders: {
\t\t\t\t\t\t\t\t\"X-Requested-With\": \"XMLHttpRequest\",
\t\t\t\t\t\t\t\t\"Content-type\": \"application/json\"
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tbody: JSON.stringify({\"_token\": this.dataset.token})
\t\t\t\t\t\t}).then(
\t\t\t\t\t\t\tresponse => response.json()
\t\t\t\t\t\t).then(data => {
\t\t\t\t\t\t\tif(data.success){
\t\t\t\t\t\t\t\tthis.parentElement.remove()
\t\t\t\t\t\t\t\tbtnCancel.remove();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\talert(data.error)
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}
\t\t}
\t</script>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "trick/_medias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 15,  99 => 14,  80 => 13,  76 => 11,  69 => 9,  64 => 8,  61 => 7,  55 => 5,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\t<div class=\"col mb-2 text-center\">
\t\t{% if media.type == 'image' %}
\t\t\t<img src={{ asset(images_directory ~ media.filename) }} class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\" alt=\"image\"/>
\t\t{% else %}
\t\t\t<iframe width=\"100%\" height=\"200\" src=\"{{ media.filename }}\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
\t\t{% endif %}
\t\t{% if app.request.attributes.get('_route') == 'modify_trick' or app.request.attributes.get('_route') == 'add_trick' %}
\t\t\t{{ form_widget(trickForm.MainMedia.children[loop.index0], {'label': 'Set as main media'}) }}
\t\t\t<a class=\"btn btn-danger my-2\" href=\"{{ path('delete_media', {'id': media.id}) }}\" data-delete data-token=\"{{ csrf_token('delete' ~ media.id) }}\">Delete</a>
\t\t{% endif %}
</div>

{% block jsDeleteImage %}
{% if app.request.attributes.get('_route') == 'modify_trick' or app.request.attributes.get('_route') == 'add_trick' %}
\t<script>
\t\twindow.onload = () => {
\t\t\tbtnCancel = document.getElementById('btnCancel');
\t\t\tlet links = document.querySelectorAll(\"[data-delete]\")
\t\t\tfor(link of links) {
\t\t\t\tlink.addEventListener(\"click\", function(e){
\t\t\t\t\te.preventDefault()
\t\t\t\t\tif(confirm('are you sure to delete this media?')) {
\t\t\t\t\t\tfetch(this.getAttribute(\"href\"), {
\t\t\t\t\t\t\tmethod: \"DELETE\",
\t\t\t\t\t\t\theaders: {
\t\t\t\t\t\t\t\t\"X-Requested-With\": \"XMLHttpRequest\",
\t\t\t\t\t\t\t\t\"Content-type\": \"application/json\"
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tbody: JSON.stringify({\"_token\": this.dataset.token})
\t\t\t\t\t\t}).then(
\t\t\t\t\t\t\tresponse => response.json()
\t\t\t\t\t\t).then(data => {
\t\t\t\t\t\t\tif(data.success){
\t\t\t\t\t\t\t\tthis.parentElement.remove()
\t\t\t\t\t\t\t\tbtnCancel.remove();
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\talert(data.error)
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t}
\t\t\t\t})
\t\t\t}
\t\t}
\t</script>
{% endif %}
{% endblock %}", "trick/_medias.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin_old\\templates\\trick\\_medias.html.twig");
    }
}
