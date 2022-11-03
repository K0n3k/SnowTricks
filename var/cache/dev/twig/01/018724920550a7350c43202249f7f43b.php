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

/* trick/addTrick.html.twig */
class __TwigTemplate_7e536bc0e338453d05351fefb202a3a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'jsDeleteImage' => [$this, 'block_jsDeleteImage'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/addTrick.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/addTrick.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trick/addTrick.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 3
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/summernote/summernote-lite.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 8
        echo "  <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/js/jquery.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/summernote/summernote-lite.min.js"), "html", null, true);
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/js/imagePreview.js"), "html", null, true);
        echo "\"></script>
  ";
        // line 11
        $this->loadTemplate("js/_transformTextArea.js.twig", "trick/addTrick.html.twig", 11)->display($context);
        // line 12
        echo "  ";
        $this->displayBlock('jsDeleteImage', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_jsDeleteImage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsDeleteImage"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jsDeleteImage"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo " 
 <main>
    <div class=\"album py-5 bg-light position-relative trickPage\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"card shadow-sm\">
              <div class=\"card-body\">
                <div class=\"justify-content-between align-items-center col\">
                  <div class=\"justify-content-between align-items-center col\">
                        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 27, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 28
        if ( !array_key_exists("trick", $context)) {
            // line 29
            echo "                      ";
            $context["trick"] = ["name" => "", "description" => "", "group" => ["id" => "1"]];
            // line 30
            echo "                      ";
            $context["submitButtonText"] = "Add trick";
            // line 31
            echo "                    ";
        } else {
            // line 32
            echo "                    
                      ";
            // line 33
            $context["submitButtonText"] = "Modify trick";
            // line 34
            echo "                        <div class=\"row\">
                        ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 35, $this->source); })()), "mainMedia", [], "any", false, false, false, 35), "type", [], "any", false, false, false, 35) == "image")) {
                // line 36
                echo "                          <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 36, $this->source); })()), "mainMedia", [], "any", false, false, false, 36), "filename", [], "any", false, false, false, 36))), "html", null, true);
                echo "\" alt=\"\">
                        ";
            } else {
                // line 38
                echo "                          <iframe width=\"100%\" height=\"780\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 38, $this->source); })()), "mainMedia", [], "any", false, false, false, 38), "filename", [], "any", false, false, false, 38), "html", null, true);
                echo "\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                        ";
            }
            // line 40
            echo "                        </div>
                      <div class=\"d-flex row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 my-4\">
                      
                        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 43, $this->source); })()), "medias", [], "any", false, false, false, 43));
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
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 44
                echo "                            ";
                echo twig_include($this->env, $context, "trick/_medias.html.twig");
                echo "
                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                      </div>
                    ";
        }
        // line 48
        echo "                    
                      <div class=\"d-flex row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 my-4 preview\">
                      </div>
                      <div id=\"trick\">
                      
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53)]);
        echo "
                        ";
        // line 54
        if ( !twig_get_attribute($this->env, $this->source, ($context["trick"] ?? null), "id", [], "any", true, true, false, 54)) {
            // line 55
            echo "                        <p class='text-danger mb-0'>The first image uploaded will be set as main Image!</p>
                        ";
        }
        // line 57
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 57, $this->source); })()), "images", [], "any", false, false, false, 57), 'row');
        echo "
                        <div class=\"mb-3\">
                        <ul id=\"video-fields-list\"
                            style=\"list-style: none;\"
                            data-prototype=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 61, $this->source); })()), "videos", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "prototype", [], "any", false, false, false, 61), 'widget'));
        echo "\"
                            data-widget-tags=\"";
        // line 62
        echo twig_escape_filter($this->env, "<li></li>");
        echo "\"
                            data-widget-counter=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 63, $this->source); })()), "videos", [], "any", false, false, false, 63)), "html", null, true);
        echo "\">
                          ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 64, $this->source); })()), "videos", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 65
            echo "                            <li class=\"mb-3\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["video"], 'widget');
            echo "</li>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                        </ul>
                        <button type=\"button\" class=\"add-another-collection-widget btn btn-dark\" data-list-selector=\"#video-fields-list\">Add another video</button>
                        </div>
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 70, $this->source); })()), "description", [], "any", false, false, false, 70)]);
        echo "
                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 71, $this->source); })()), "group", [], "any", false, false, false, 71), 'row', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 71, $this->source); })()), "group", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71)]);
        echo "
                        <div class=\"buttons row mb-3\">
                          <div class=\"btn-group justify-content-center\">
                          <p class=\"mx-2\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 74, $this->source); })()), "Create_Trick", [], "any", false, false, false, 74), 'widget', ["label" => (isset($context["submitButtonText"]) || array_key_exists("submitButtonText", $context) ? $context["submitButtonText"] : (function () { throw new RuntimeError('Variable "submitButtonText" does not exist.', 74, $this->source); })())]);
        echo "</p>
                          <p><a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "headers", [], "any", false, false, false, 75), "get", [0 => "referer"], "method", false, false, false, 75)), "html", null, true);
        echo "\" class=\"btn btn-danger\" id=\"btnCancel\">Cancel</a></p>
                          </div>
                        </div>
                        ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 78, $this->source); })()), 'form_end');
        echo "
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "trick/addTrick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 78,  309 => 75,  305 => 74,  299 => 71,  295 => 70,  290 => 67,  281 => 65,  277 => 64,  273 => 63,  269 => 62,  265 => 61,  257 => 57,  253 => 55,  251 => 54,  247 => 53,  240 => 48,  236 => 46,  219 => 44,  202 => 43,  197 => 40,  191 => 38,  185 => 36,  183 => 35,  180 => 34,  178 => 33,  175 => 32,  172 => 31,  169 => 30,  166 => 29,  164 => 28,  160 => 27,  148 => 17,  138 => 16,  110 => 12,  108 => 11,  104 => 10,  100 => 9,  95 => 8,  85 => 7,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}
{% block stylesheet %}
<link href=\"{{ asset(\"Style/summernote/summernote-lite.min.css\") }}\" rel=\"stylesheet\">

{% endblock %}

{% block javascript %}
  <script type=\"text/javascript\" src=\"{{ asset(\"Style/js/jquery.js\") }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset(\"Style/summernote/summernote-lite.min.js\") }}\"></script>
  <script type=\"text/javascript\" src=\"{{ asset(\"Style/js/imagePreview.js\") }}\"></script>
  {% include('js/_transformTextArea.js.twig') %}
  {% block jsDeleteImage %}{% endblock %}
{% endblock %}


 {% block body %}
 
 <main>
    <div class=\"album py-5 bg-light position-relative trickPage\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"card shadow-sm\">
              <div class=\"card-body\">
                <div class=\"justify-content-between align-items-center col\">
                  <div class=\"justify-content-between align-items-center col\">
                        {{ form_start(trickForm) }}
                    {% if trick is not defined %}
                      {% set trick = {name: '', description: '', group: {'id': '1'}} %}
                      {% set submitButtonText = 'Add trick' %}
                    {% else %}
                    
                      {% set submitButtonText = 'Modify trick' %}
                        <div class=\"row\">
                        {% if trick.mainMedia.type == 'image' %}
                          <img src=\"{{ asset('/uploads/images/' ~ trick.mainMedia.filename) }}\" alt=\"\">
                        {% else %}
                          <iframe width=\"100%\" height=\"780\" src=\"{{ trick.mainMedia.filename }}\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                        {% endif %}
                        </div>
                      <div class=\"d-flex row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 my-4\">
                      
                        {% for media in trick.medias %}
                            {{ include('trick/_medias.html.twig') }}
                        {% endfor %}
                      </div>
                    {% endif %}
                    
                      <div class=\"d-flex row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 my-4 preview\">
                      </div>
                      <div id=\"trick\">
                      
                        {{ form_row(trickForm.name, {'value': trick.name}) }}
                        {% if trick.id is not defined %}
                        <p class='text-danger mb-0'>The first image uploaded will be set as main Image!</p>
                        {% endif %}
                        {{ form_row(trickForm.images) }}
                        <div class=\"mb-3\">
                        <ul id=\"video-fields-list\"
                            style=\"list-style: none;\"
                            data-prototype=\"{{ form_widget(trickForm.videos.vars.prototype)|e }}\"
                            data-widget-tags=\"{{ '<li></li>'|e }}\"
                            data-widget-counter=\"{{ trickForm.videos|length }}\">
                          {% for video in trickForm.videos %}
                            <li class=\"mb-3\">{{ form_widget(video) }}</li>
                          {% endfor %}
                        </ul>
                        <button type=\"button\" class=\"add-another-collection-widget btn btn-dark\" data-list-selector=\"#video-fields-list\">Add another video</button>
                        </div>
                        {{ form_row(trickForm.description, {'value': trick.description}) }}
                        {{ form_row(trickForm.group, {'value': trick.group.id}) }}
                        <div class=\"buttons row mb-3\">
                          <div class=\"btn-group justify-content-center\">
                          <p class=\"mx-2\">{{ form_widget(trickForm.Create_Trick, {'label': submitButtonText}) }}</p>
                          <p><a href=\"{{ relative_path(app.request.headers.get('referer')) }}\" class=\"btn btn-danger\" id=\"btnCancel\">Cancel</a></p>
                          </div>
                        </div>
                        {{ form_end(trickForm) }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>
{% endblock %}", "trick/addTrick.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin_old\\templates\\trick\\addTrick.html.twig");
    }
}
