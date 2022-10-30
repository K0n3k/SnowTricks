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
\t\t";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 3, $this->source); })()), "mainMedia", [], "any", false, false, false, 3), "type", [], "any", false, false, false, 3) == "image")) {
            // line 4
            echo "\t\t\t";
            $context["src"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["images_directory"]) || array_key_exists("images_directory", $context) ? $context["images_directory"] : (function () { throw new RuntimeError('Variable "images_directory" does not exist.', 4, $this->source); })()) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 4, $this->source); })()), "mainMedia", [], "any", false, false, false, 4), "filename", [], "any", false, false, false, 4)));
            // line 5
            echo "\t\t";
        } else {
            // line 6
            echo "\t\t\t";
            if (twig_in_filter("youtube", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 6, $this->source); })()), "mainMedia", [], "any", false, false, false, 6), "filename", [], "any", false, false, false, 6))) {
                // line 7
                echo "\t\t\t\t";
                $context["src"] = (("https://i3.ytimg.com/vi/" . twig_trim_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 7, $this->source); })()), "mainMedia", [], "any", false, false, false, 7), "filename", [], "any", false, false, false, 7), "https://www.youtube.com/embed/")) . "/hqdefault.jpg");
                // line 8
                echo "\t\t\t";
            }
            // line 9
            echo "\t\t\t";
            if (twig_in_filter("dailymotion", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 9, $this->source); })()), "mainMedia", [], "any", false, false, false, 9), "filename", [], "any", false, false, false, 9))) {
                // line 10
                echo "\t\t\t\t";
                $context["src"] = ("https://www.dailymotion.com/thumbnail/video/" . twig_trim_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 10, $this->source); })()), "mainMedia", [], "any", false, false, false, 10), "filename", [], "any", false, false, false, 10), "https://www.dailymotion.com/embed/video/"));
                // line 11
                echo "\t\t\t";
            }
            // line 12
            echo "\t\t\t";
            if (twig_in_filter("vimeo", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 12, $this->source); })()), "mainMedia", [], "any", false, false, false, 12), "filename", [], "any", false, false, false, 12))) {
                // line 13
                echo "\t\t\t\t";
                $context["src"] = (("https://vumbnail.com/" . twig_trim_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 13, $this->source); })()), "mainMedia", [], "any", false, false, false, 13), "filename", [], "any", false, false, false, 13), "https://player.vimeo.com/video/")) . ".jpg");
                // line 14
                echo "\t\t\t";
            }
            // line 15
            echo "\t\t";
        }
        // line 16
        echo "\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_trick", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">
\t\t\t<img src=";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\" alt=\"image\"/>
\t\t</a>
\t\t\t
\t\t<div class=\"card-body\">
\t\t\t<div class=\"d-flex justify-content-between align-items-center col\">
\t\t\t\t<small class=\"text-muted\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "</small>
\t\t\t\t\t";
        // line 23
        echo twig_include($this->env, $context, "trick/_deleteModifyButtons.html.twig");
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 29
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
        return array (  113 => 29,  104 => 23,  100 => 22,  92 => 17,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col\" id=\"trick_{{ trick.id }}\">
\t<div class=\"card shadow-sm\">
\t\t{% if trick.mainMedia.type == 'image' %}
\t\t\t{% set src = asset(images_directory ~ trick.mainMedia.filename) %}
\t\t{% else %}
\t\t\t{% if 'youtube' in trick.mainMedia.filename %}
\t\t\t\t{% set src = \"https://i3.ytimg.com/vi/\" ~ trick.mainMedia.filename|trim('https://www.youtube.com/embed/') ~ \"/hqdefault.jpg\" %}
\t\t\t{% endif %}
\t\t\t{% if 'dailymotion' in trick.mainMedia.filename %}
\t\t\t\t{% set src = \"https://www.dailymotion.com/thumbnail/video/\" ~ trick.mainMedia.filename|trim('https://www.dailymotion.com/embed/video/') %}
\t\t\t{% endif %}
\t\t\t{% if 'vimeo' in trick.mainMedia.filename %}
\t\t\t\t{% set src = \"https://vumbnail.com/\" ~ trick.mainMedia.filename|trim('https://player.vimeo.com/video/') ~ \".jpg\" %}
\t\t\t{% endif %}
\t\t{% endif %}
\t\t<a href=\"{{ path('show_trick', {'id': trick.id}) }}\">
\t\t\t<img src={{ src }} class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\" alt=\"image\"/>
\t\t</a>
\t\t\t
\t\t<div class=\"card-body\">
\t\t\t<div class=\"d-flex justify-content-between align-items-center col\">
\t\t\t\t<small class=\"text-muted\">{{ trick.name }}</small>
\t\t\t\t\t{{ include('trick/_deleteModifyButtons.html.twig') }}
\t\t\t</div>
\t\t</div>
\t</div>
</div>

{{ include('trick/_deleteModal.html.twig') }}", "trick/_trickCard.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin_old\\templates\\trick\\_trickCard.html.twig");
    }
}
