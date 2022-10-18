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
        echo "<div class=\"col mb-2\">
\t<img src=";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 2, $this->source); })()), "filename", [], "any", false, false, false, 2))), "html", null, true);
        echo " class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\" alt=\"image\"/>
\t";
        // line 3
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "attributes", [], "any", false, false, false, 3), "get", [0 => "_route"], "method", false, false, false, 3) == "modify_trick") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "attributes", [], "any", false, false, false, 3), "get", [0 => "_route"], "method", false, false, false, 3) == "add_trick"))) {
            // line 4
            echo "\t\t<a class=\"btn btn-danger\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_image", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]), "html", null, true);
            echo "\" data-delete data-token=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4))), "html", null, true);
            echo "\">Delete</a>
\t";
        }
        // line 6
        echo "</div>

";
        // line 8
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "attributes", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8) == "modify_trick") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "attributes", [], "any", false, false, false, 8), "get", [0 => "_route"], "method", false, false, false, 8) == "add_trick"))) {
            // line 9
            echo "\t<script>
\t\twindow.onload = () => {
\t\t\tbtnCancel = document.getElementById('btnCancel');
\t\t\tlet links = document.querySelectorAll(\"[data-delete]\")
\t\t\tfor(link of links) {
\t\t\t\tlink.addEventListener(\"click\", function(e){
\t\t\t\t\te.preventDefault()
\t\t\t\t\tif(confirm('are you sure to delete this image?')) {
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  66 => 9,  64 => 8,  60 => 6,  52 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col mb-2\">
\t<img src={{ asset('/uploads/images/' ~ media.filename) }} class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\" alt=\"image\"/>
\t{% if app.request.attributes.get('_route') == 'modify_trick' or app.request.attributes.get('_route') == 'add_trick' %}
\t\t<a class=\"btn btn-danger\" href=\"{{ path('delete_image', {'id': media.id}) }}\" data-delete data-token=\"{{ csrf_token('delete' ~ media.id) }}\">Delete</a>
\t{% endif %}
</div>

{% if app.request.attributes.get('_route') == 'modify_trick' or app.request.attributes.get('_route') == 'add_trick' %}
\t<script>
\t\twindow.onload = () => {
\t\t\tbtnCancel = document.getElementById('btnCancel');
\t\t\tlet links = document.querySelectorAll(\"[data-delete]\")
\t\t\tfor(link of links) {
\t\t\t\tlink.addEventListener(\"click\", function(e){
\t\t\t\t\te.preventDefault()
\t\t\t\t\tif(confirm('are you sure to delete this image?')) {
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
{% endif %}", "trick/_medias.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin\\templates\\trick\\_medias.html.twig");
    }
}
