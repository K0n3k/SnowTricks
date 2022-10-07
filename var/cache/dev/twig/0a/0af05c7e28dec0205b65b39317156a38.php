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

/* trick/trick.html.twig */
class __TwigTemplate_a34b78e2d740d463b80d0fcc1138aa0f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/trick.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trick/trick.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "trick/trick.html.twig", 1);
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

        echo "Hello TrickController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo " <main>
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
                      <p>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 71, $this->source); })()), "description", [], "any", false, false, false, 71), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"row\">
                      <div class=\"d-inline-flex justify-content-center\">
                        <h4 class=\"mx-3\">Created <span class=\"badge bg-secondary col\">";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 75, $this->source); })()), "publishedDate", [], "any", false, false, false, 75), "Y-m-d"), "html", null, true);
        echo "</span></h4>
                        <h4 class=\"mx-3\">By <span class=\"badge bg-secondary col\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 76, $this->source); })()), "userId", [], "any", false, false, false, 76), "username", [], "any", false, false, false, 76), "html", null, true);
        echo "</span></h4>
                        <h4 class=\"mx-3\">In group <span class=\"badge bg-secondary col\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 77, $this->source); })()), "groupId", [], "any", false, false, false, 77), "name", [], "any", false, false, false, 77), "html", null, true);
        echo "</span></h4>
                        <h4 class=\"mx-3\">Last update <span class=\"badge bg-secondary col\">
                        ";
        // line 79
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 79, $this->source); })()), "lastUpdated", [], "any", false, false, false, 79))) {
            // line 80
            echo "                          Never
                        ";
        } else {
            // line 81
            echo "  
                          ";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 82, $this->source); })()), "lastUpdated", [], "any", false, false, false, 82), "Y-m-d"), "html", null, true);
            echo "
                        ";
        }
        // line 83
        echo "                          
                        </span></h4>
                      </div>
                    </div>
                    <hr>
                    ";
        // line 88
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 89
            echo "                      <div class=\"row\">
                        <div class=\"d-inline-flex justify-content-center align-items-center\">
                          <div class=\"col\">
                            <textarea type=\"textarea\" class=\"form-control\" aria-label=\"\"></textarea>
                          </div>
                          <div class=\"col-2 mx-3 justify-content-end\">
                            <button type=\"submit\" class=\"btn btn-secondary\" placeholder=\"Leave a comment\" aria-label=\"Leave a comment\">Leave a comment</button>
                          </div>
                        </div>
                      </div>
                      <hr>
                    ";
        }
        // line 101
        echo "                   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentarys"]) || array_key_exists("commentarys", $context) ? $context["commentarys"] : (function () { throw new RuntimeError('Variable "commentarys" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentary"]) {
            // line 102
            echo "                    <div class=\"row shadow-sm\" id=\"Commentary_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentary"], "id", [], "any", false, false, false, 102), "html", null, true);
            echo "\">
                      <div class=\"col col-1 mx-3\">
                        <?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\"
                          xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"48px\" viewBox=\"0 0 480 480\"
                          style=\"enable-background:new 0 0 480 480;\" xml:space=\"preserve\">
                          <g>
                            <g>
                              <circle style=\"fill:#B8BAC0;\" cx=\"240\" cy=\"240\" r=\"240\" />
                            </g>
                            <g>
                              <g>
                                <path style=\"fill:#FFFFFF;\"
                                  d=\"M240,360.07c-27.944,0-53.297-11.991-72.003-31.372c-0.014,11.615-0.436,28.379-3.516,40.611
\t\t\t\tc2.02,1.235,3.588,3.262,3.894,5.784c3.992,32.484,34.781,56.977,71.625,56.977c36.836,0,67.625-24.496,71.625-56.977
\t\t\t\tc0.31-2.525,1.844-4.549,3.895-5.78c-3.08-12.233-3.503-28.999-3.517-40.615C293.297,348.079,267.944,360.07,240,360.07z\" />
                              </g>
                            </g>
                            <g>
                              <g>
                                <path style=\"fill:#D7DBE0;\" d=\"M310.44,330.174c-18.549,18.477-43.242,29.896-70.44,29.896
\t\t\t\tc-27.944,0-53.297-11.991-72.003-31.372c-0.014,11.615-0.436,28.379-3.516,40.611c2.02,1.235,3.588,3.262,3.894,5.784
\t\t\t\tc1.765,14.359,8.778,27.144,19.223,36.954C235.766,405.265,290.437,357.702,310.44,330.174z\" />
                              </g>
                            </g>
                            <g>
                              <g>
                                <path style=\"fill:#FFFFFF;\" d=\"M312,160.07H176c-22.055,0-40,17.945-40,40v48c0,61.758,46.656,112,104,112s104-50.242,104-112
\t\t\t\tv-56C344,174.426,329.648,160.07,312,160.07z\" />
                              </g>
                            </g>
                            <g>
                              <g>
                                <path style=\"fill:#5C546A;\" d=\"M296,72.07H192c-15.047,0-27.695,10.438-31.102,24.449C133.359,100.02,112,123.598,112,152.07v40
\t\t\t\tc0,20.617,8.752,39.851,24,53.52v-45.52c0-22.055,17.945-40,40-40h136c17.648,0,32,14.355,32,32v53.511
\t\t\t\tc15.251-13.667,24-32.899,24-53.511v-48C368,104.371,335.703,72.07,296,72.07z\" />
                              </g>
                            </g>
                            <g>
                              <path style=\"fill:#5C546A;\" d=\"M61.632,400.544C105.562,449.319,169.191,480,240,480s134.438-30.681,178.368-79.456
\t\t\tc-7.66-10.356-18.462-18.77-32.352-22.659c-0.32-0.09-0.641-0.16-0.969-0.207l-63.859-9.582c-0.391-0.059-1.227-0.09-1.625-0.09
\t\t\tc-4.039,0-7.445,3.012-7.938,7.023c-4,32.48-34.789,56.977-71.625,56.977c-36.844,0-67.633-24.492-71.625-56.977
\t\t\tc-0.5-4.129-4.219-7.234-8.141-7.02c-0.469-0.027-0.93,0.012-1.422,0.086l-63.859,9.582c-0.328,0.047-0.648,0.117-0.969,0.207
\t\t\tC80.094,381.775,69.292,390.188,61.632,400.544z\" />
                            </g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                        </svg>
                        ";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentary"], "userId", [], "any", false, false, false, 180), "Username", [], "any", false, false, false, 180), "html", null, true);
            echo "
                      <br>
                      ";
            // line 182
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentary"], "publishedDate", [], "any", false, false, false, 182), "Y-m-d"), "html", null, true);
            echo "
                      <br>
                      </div>
                      <div class=\"col\">
                        <p>";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentary"], "commentary", [], "any", false, false, false, 186), "html", null, true);
            echo "</p>
                      </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentary'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                  </div>
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
        return "trick/trick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 190,  311 => 186,  304 => 182,  299 => 180,  217 => 102,  212 => 101,  198 => 89,  196 => 88,  189 => 83,  184 => 82,  181 => 81,  177 => 80,  175 => 79,  170 => 77,  166 => 76,  162 => 75,  155 => 71,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TrickController!{% endblock %}

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
                      <p>{{ trick.description }}</p>
                    </div>
                    <div class=\"row\">
                      <div class=\"d-inline-flex justify-content-center\">
                        <h4 class=\"mx-3\">Created <span class=\"badge bg-secondary col\">{{ trick.publishedDate|date('Y-m-d') }}</span></h4>
                        <h4 class=\"mx-3\">By <span class=\"badge bg-secondary col\">{{ trick.userId.username }}</span></h4>
                        <h4 class=\"mx-3\">In group <span class=\"badge bg-secondary col\">{{ trick.groupId.name }}</span></h4>
                        <h4 class=\"mx-3\">Last update <span class=\"badge bg-secondary col\">
                        {% if trick.lastUpdated is null %}
                          Never
                        {% else %}  
                          {{ trick.lastUpdated|date('Y-m-d') }}
                        {% endif %}                          
                        </span></h4>
                      </div>
                    </div>
                    <hr>
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                      <div class=\"row\">
                        <div class=\"d-inline-flex justify-content-center align-items-center\">
                          <div class=\"col\">
                            <textarea type=\"textarea\" class=\"form-control\" aria-label=\"\"></textarea>
                          </div>
                          <div class=\"col-2 mx-3 justify-content-end\">
                            <button type=\"submit\" class=\"btn btn-secondary\" placeholder=\"Leave a comment\" aria-label=\"Leave a comment\">Leave a comment</button>
                          </div>
                        </div>
                      </div>
                      <hr>
                    {% endif %}
                   {% for commentary in commentarys %}
                    <div class=\"row shadow-sm\" id=\"Commentary_{{ commentary.id }}\">
                      <div class=\"col col-1 mx-3\">
                        <?xml version=\"1.0\" encoding=\"iso-8859-1\"?>
                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\"
                          xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"48px\" viewBox=\"0 0 480 480\"
                          style=\"enable-background:new 0 0 480 480;\" xml:space=\"preserve\">
                          <g>
                            <g>
                              <circle style=\"fill:#B8BAC0;\" cx=\"240\" cy=\"240\" r=\"240\" />
                            </g>
                            <g>
                              <g>
                                <path style=\"fill:#FFFFFF;\"
                                  d=\"M240,360.07c-27.944,0-53.297-11.991-72.003-31.372c-0.014,11.615-0.436,28.379-3.516,40.611
\t\t\t\tc2.02,1.235,3.588,3.262,3.894,5.784c3.992,32.484,34.781,56.977,71.625,56.977c36.836,0,67.625-24.496,71.625-56.977
\t\t\t\tc0.31-2.525,1.844-4.549,3.895-5.78c-3.08-12.233-3.503-28.999-3.517-40.615C293.297,348.079,267.944,360.07,240,360.07z\" />
                              </g>
                            </g>
                            <g>
                              <g>
                                <path style=\"fill:#D7DBE0;\" d=\"M310.44,330.174c-18.549,18.477-43.242,29.896-70.44,29.896
\t\t\t\tc-27.944,0-53.297-11.991-72.003-31.372c-0.014,11.615-0.436,28.379-3.516,40.611c2.02,1.235,3.588,3.262,3.894,5.784
\t\t\t\tc1.765,14.359,8.778,27.144,19.223,36.954C235.766,405.265,290.437,357.702,310.44,330.174z\" />
                              </g>
                            </g>
                            <g>
                              <g>
                                <path style=\"fill:#FFFFFF;\" d=\"M312,160.07H176c-22.055,0-40,17.945-40,40v48c0,61.758,46.656,112,104,112s104-50.242,104-112
\t\t\t\tv-56C344,174.426,329.648,160.07,312,160.07z\" />
                              </g>
                            </g>
                            <g>
                              <g>
                                <path style=\"fill:#5C546A;\" d=\"M296,72.07H192c-15.047,0-27.695,10.438-31.102,24.449C133.359,100.02,112,123.598,112,152.07v40
\t\t\t\tc0,20.617,8.752,39.851,24,53.52v-45.52c0-22.055,17.945-40,40-40h136c17.648,0,32,14.355,32,32v53.511
\t\t\t\tc15.251-13.667,24-32.899,24-53.511v-48C368,104.371,335.703,72.07,296,72.07z\" />
                              </g>
                            </g>
                            <g>
                              <path style=\"fill:#5C546A;\" d=\"M61.632,400.544C105.562,449.319,169.191,480,240,480s134.438-30.681,178.368-79.456
\t\t\tc-7.66-10.356-18.462-18.77-32.352-22.659c-0.32-0.09-0.641-0.16-0.969-0.207l-63.859-9.582c-0.391-0.059-1.227-0.09-1.625-0.09
\t\t\tc-4.039,0-7.445,3.012-7.938,7.023c-4,32.48-34.789,56.977-71.625,56.977c-36.844,0-67.633-24.492-71.625-56.977
\t\t\tc-0.5-4.129-4.219-7.234-8.141-7.02c-0.469-0.027-0.93,0.012-1.422,0.086l-63.859,9.582c-0.328,0.047-0.648,0.117-0.969,0.207
\t\t\tC80.094,381.775,69.292,390.188,61.632,400.544z\" />
                            </g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                        </svg>
                        {{ commentary.userId.Username }}
                      <br>
                      {{ commentary.publishedDate|date('Y-m-d') }}
                      <br>
                      </div>
                      <div class=\"col\">
                        <p>{{ commentary.commentary }}</p>
                      </div>
                    </div>
                    {% endfor %}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

{% endblock %}", "trick/trick.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin\\templates\\trick\\trick.html.twig");
    }
}
