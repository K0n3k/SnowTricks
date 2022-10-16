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
  <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/summernote/summernote-lite.min.js"), "html", null, true);
        echo "\"></script>
  <script>
    \$(document).ready(function() {
        \$('#trick_description').summernote({
        placeholder: 'Description',
        tabsize: 2,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    });
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 30
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
                    <div class=\"d-flex row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 my-4\">
                      <div class=\"col mb-2\">
                        <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\"
                          xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\"
                          preserveAspectRatio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">
                          <title>Placeholder</title>
                          <rect width=\"100%\" height=\"100%\" fill=\"#55595c\" /><text x=\"50%\" y=\"50%\" fill=\"#eceeef\"
                            dy=\".3em\">Thumbnail</text>
                        </svg>
                      </div>
                      <div class=\"col mb-2\">
                        <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\"
                          xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\"
                          preserveAspectRatio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">
                          <title>Placeholder</title>
                          <rect width=\"100%\" height=\"100%\" fill=\"#55595c\" /><text x=\"50%\" y=\"50%\" fill=\"#eceeef\"
                            dy=\".3em\">Thumbnail</text>
                        </svg>
                      </div>
                      <div class=\"col mb-2\">
                        <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\"
                          xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\"
                          preserveAspectRatio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">
                          <title>Placeholder</title>
                          <rect width=\"100%\" height=\"100%\" fill=\"#55595c\" /><text x=\"50%\" y=\"50%\" fill=\"#eceeef\"
                            dy=\".3em\">Thumbnail</text>
                        </svg>
                      </div>
                      <div class=\"col mb-2\">
                        <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\"
                          xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\"
                          preserveAspectRatio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">
                          <title>Placeholder</title>
                          <rect width=\"100%\" height=\"100%\" fill=\"#55595c\" /><text x=\"50%\" y=\"50%\" fill=\"#eceeef\"
                            dy=\".3em\">Thumbnail</text>
                        </svg>
                      </div>
                      <div class=\"col mb-2\">
                        <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\"
                          xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\"
                          preserveAspectRatio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">
                          <title>Placeholder</title>
                          <rect width=\"100%\" height=\"100%\" fill=\"#55595c\" /><text x=\"50%\" y=\"50%\" fill=\"#eceeef\"
                            dy=\".3em\">Thumbnail</text>
                        </svg>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div id=\"trick\">
                      
                        ";
        // line 90
        if ( !array_key_exists("trick", $context)) {
            // line 91
            echo "                          ";
            $context["trick"] = ["name" => "", "description" => "", "groupId" => ["id" => "1"]];
            // line 92
            echo "                          ";
            $context["submitButtonText"] = "Add trick";
            // line 93
            echo "                          ";
            $context["cancelPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            // line 94
            echo "                        ";
        } else {
            // line 95
            echo "                          ";
            $context["submitButtonText"] = "Modify trick";
            // line 96
            echo "                          ";
            $context["cancelPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_trick", ["trickId" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]);
            // line 97
            echo "                        ";
        }
        // line 98
        echo "
                        ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 99, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 100, $this->source); })()), "name", [], "any", false, false, false, 100), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 100, $this->source); })()), "name", [], "any", false, false, false, 100)]);
        echo "
                        ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 101, $this->source); })()), "images", [], "any", false, false, false, 101), 'row');
        echo "
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 102, $this->source); })()), "description", [], "any", false, false, false, 102), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 102, $this->source); })()), "description", [], "any", false, false, false, 102)]);
        echo "
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 103, $this->source); })()), "groupId", [], "any", false, false, false, 103), 'row', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 103, $this->source); })()), "groupId", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103)]);
        echo "
                        <div class=\"buttons row mb-3\">
                          <div class=\"btn-group justify-content-center\">
                          <p class=\"mx-2\">";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 106, $this->source); })()), "Create_Trick", [], "any", false, false, false, 106), 'widget', ["label" => (isset($context["submitButtonText"]) || array_key_exists("submitButtonText", $context) ? $context["submitButtonText"] : (function () { throw new RuntimeError('Variable "submitButtonText" does not exist.', 106, $this->source); })())]);
        echo "</p>
                          <p><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["cancelPath"]) || array_key_exists("cancelPath", $context) ? $context["cancelPath"] : (function () { throw new RuntimeError('Variable "cancelPath" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-danger\">Cancel</a></p>
                          </div>
                        </div>
                        ";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 110, $this->source); })()), 'form_end');
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
        return array (  257 => 110,  251 => 107,  247 => 106,  241 => 103,  237 => 102,  233 => 101,  229 => 100,  225 => 99,  222 => 98,  219 => 97,  216 => 96,  213 => 95,  210 => 94,  207 => 93,  204 => 92,  201 => 91,  199 => 90,  137 => 30,  127 => 29,  99 => 9,  94 => 8,  84 => 7,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}
{% block stylesheet %}
<link href=\"{{ asset(\"Style/summernote/summernote-lite.min.css\") }}\" rel=\"stylesheet\">

{% endblock %}

{% block javascript %}
  <script type=\"text/javascript\" src=\"{{ asset(\"Style/js/jquery.js\") }}\"></script>
  <script src=\"{{ asset(\"Style/summernote/summernote-lite.min.js\") }}\"></script>
  <script>
    \$(document).ready(function() {
        \$('#trick_description').summernote({
        placeholder: 'Description',
        tabsize: 2,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    });
  </script>
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
                    <div class=\"d-flex row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 my-4\">
                      <div class=\"col mb-2\">
                        <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\"
                          xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\"
                          preserveAspectRatio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">
                          <title>Placeholder</title>
                          <rect width=\"100%\" height=\"100%\" fill=\"#55595c\" /><text x=\"50%\" y=\"50%\" fill=\"#eceeef\"
                            dy=\".3em\">Thumbnail</text>
                        </svg>
                      </div>
                      <div class=\"col mb-2\">
                        <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\"
                          xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\"
                          preserveAspectRatio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">
                          <title>Placeholder</title>
                          <rect width=\"100%\" height=\"100%\" fill=\"#55595c\" /><text x=\"50%\" y=\"50%\" fill=\"#eceeef\"
                            dy=\".3em\">Thumbnail</text>
                        </svg>
                      </div>
                      <div class=\"col mb-2\">
                        <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\"
                          xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\"
                          preserveAspectRatio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">
                          <title>Placeholder</title>
                          <rect width=\"100%\" height=\"100%\" fill=\"#55595c\" /><text x=\"50%\" y=\"50%\" fill=\"#eceeef\"
                            dy=\".3em\">Thumbnail</text>
                        </svg>
                      </div>
                      <div class=\"col mb-2\">
                        <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\"
                          xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\"
                          preserveAspectRatio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">
                          <title>Placeholder</title>
                          <rect width=\"100%\" height=\"100%\" fill=\"#55595c\" /><text x=\"50%\" y=\"50%\" fill=\"#eceeef\"
                            dy=\".3em\">Thumbnail</text>
                        </svg>
                      </div>
                      <div class=\"col mb-2\">
                        <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"200\"
                          xmlns=\"http://www.w3.org/2000/svg\" aria-label=\"Placeholder: Thumbnail\"
                          preserveAspectRatio=\"xMidYMid slice\" role=\"img\" focusable=\"false\">
                          <title>Placeholder</title>
                          <rect width=\"100%\" height=\"100%\" fill=\"#55595c\" /><text x=\"50%\" y=\"50%\" fill=\"#eceeef\"
                            dy=\".3em\">Thumbnail</text>
                        </svg>
                      </div>
                    </div>
                    <div class=\"row\">
                      <div id=\"trick\">
                      
                        {% if trick is not defined %}
                          {% set trick = {name: '', description: '', groupId: {'id': '1'}} %}
                          {% set submitButtonText = 'Add trick' %}
                          {% set cancelPath = path('home') %}
                        {% else %}
                          {% set submitButtonText = 'Modify trick' %}
                          {% set cancelPath = path('show_trick', {'trickId' : trick.id }) %}
                        {% endif %}

                        {{ form_start(trickForm) }}
                        {{ form_row(trickForm.name, {'value': trick.name}) }}
                        {{ form_row(trickForm.images) }}
                        {{ form_row(trickForm.description, {'value': trick.description}) }}
                        {{ form_row(trickForm.groupId, {'value': trick.groupId.id}) }}
                        <div class=\"buttons row mb-3\">
                          <div class=\"btn-group justify-content-center\">
                          <p class=\"mx-2\">{{ form_widget(trickForm.Create_Trick, {'label': submitButtonText}) }}</p>
                          <p><a href=\"{{ cancelPath }}\" class=\"btn btn-danger\">Cancel</a></p>
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
{% endblock %}", "trick/addTrick.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin\\templates\\trick\\addTrick.html.twig");
    }
}
