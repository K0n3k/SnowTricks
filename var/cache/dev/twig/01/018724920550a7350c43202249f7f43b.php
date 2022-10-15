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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/summernote/summernote-bs5.min.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/summernote/summernote-bs5.min.js"), "html", null, true);
        echo "\"></script>
  <script>
    \$(document).ready(function() {
        \$('#trick_description').summernote({
        placeholder: 'Description',
        tabsize: 2,
        height: 400,
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

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo " 
 <main>
    <div class=\"album py-5 bg-light position-relative trickPage\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"card shadow-sm\">
              <div class=\"card-body\">
                <div class=\"buttons\">
                  <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">
                      View
                    </button>
                    <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                  </div>
                </div>
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
                      ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 97, $this->source); })()), 'form');
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
        return array (  206 => 97,  138 => 31,  128 => 30,  99 => 9,  94 => 8,  84 => 7,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}
{% block stylesheet %}
<link href=\"{{ asset(\"Style/summernote/summernote-bs5.min.css\") }}\" rel=\"stylesheet\">

{% endblock %}

{% block javascript %}
  <script type=\"text/javascript\" src=\"{{ asset(\"Style/js/jquery.js\") }}\"></script>
  <script src=\"{{ asset(\"Style/summernote/summernote-bs5.min.js\") }}\"></script>
  <script>
    \$(document).ready(function() {
        \$('#trick_description').summernote({
        placeholder: 'Description',
        tabsize: 2,
        height: 400,
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
                <div class=\"buttons\">
                  <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">
                      View
                    </button>
                    <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Edit</button>
                  </div>
                </div>
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
                      {{ form(trickForm) }}
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
