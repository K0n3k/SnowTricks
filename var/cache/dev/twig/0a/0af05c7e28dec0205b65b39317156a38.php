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
        $this->loadTemplate("js/_loadMoreCommentary.js.twig", "trick/trick.html.twig", 8)->display($context);
        
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
        echo " <main>
    <div class=\"album py-5 bg-light position-relative trickPage\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"card shadow-sm\">
              <div class=\"card-body\">
                ";
        // line 19
        echo twig_include($this->env, $context, "trick/_deleteModal.html.twig");
        echo "
                <div class=\"row mb-2\">
                  <div class=\"col\">
                    <h1>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "</h1>
                  </div>
                  <div class=\"col text-end\">
                    ";
        // line 25
        echo twig_include($this->env, $context, "trick/_deleteModifyButtons.html.twig");
        echo "
                  </div>
                </div>
                <div class=\"justify-content-between align-items-center col\">
                  <div class=\"justify-content-between align-items-center col\">
                  <div class=\"row\">
                        ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 31, $this->source); })()), "mainMedia", [], "any", false, false, false, 31), "type", [], "any", false, false, false, 31) == "image")) {
            // line 32
            echo "                          <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["images_directory"]) || array_key_exists("images_directory", $context) ? $context["images_directory"] : (function () { throw new RuntimeError('Variable "images_directory" does not exist.', 32, $this->source); })()) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 32, $this->source); })()), "mainMedia", [], "any", false, false, false, 32), "filename", [], "any", false, false, false, 32))), "html", null, true);
            echo "\" alt=\"\">
                        ";
        } else {
            // line 34
            echo "                          <iframe width=\"100%\" height=\"780\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 34, $this->source); })()), "mainMedia", [], "any", false, false, false, 34), "filename", [], "any", false, false, false, 34), "html", null, true);
            echo "\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                        ";
        }
        // line 36
        echo "                  </div>
                  <div class=\"d-flex row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 my-4\">
                  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 38, $this->source); })()), "medias", [], "any", false, false, false, 38), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 38, $this->source); })()) != twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 38, $this->source); })()), "mainMedia", [], "any", false, false, false, 38)); }));
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
            // line 39
            echo "                    ";
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
        // line 41
        echo "                  </div>
                    <div class=\"row\" style=\"padding: 10px;\">
                      
                      <p>";
        // line 44
        echo twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44);
        echo "</p>
                    </div>
                    <div class=\"row\">
                      <div class=\"d-inline-flex justify-content-center\">
                        <h4 class=\"mx-3\">Created <span class=\"badge bg-secondary col\">";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 48, $this->source); })()), "publishedDate", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true);
        echo "</span></h4>
                        <h4 class=\"mx-3\">By <span class=\"badge bg-secondary col\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "username", [], "any", false, false, false, 49), "html", null, true);
        echo "</span></h4>
                        <h4 class=\"mx-3\">In group <span class=\"badge bg-secondary col\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 50, $this->source); })()), "group", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
        echo "</span></h4>
                        <h4 class=\"mx-3\">Last update <span class=\"badge bg-secondary col\">
                        ";
        // line 52
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 52, $this->source); })()), "lastUpdated", [], "any", false, false, false, 52))) {
            // line 53
            echo "                          Never
                        ";
        } else {
            // line 54
            echo "  
                          ";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 55, $this->source); })()), "lastUpdated", [], "any", false, false, false, 55), "Y-m-d"), "html", null, true);
            echo "
                        ";
        }
        // line 56
        echo "                          
                        </span></h4>
                      </div>
                    </div>
                    <hr>
                    ";
        // line 61
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 62
            echo "                      <div class=\"row\">
                        ";
            // line 63
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaryForm"]) || array_key_exists("commentaryForm", $context) ? $context["commentaryForm"] : (function () { throw new RuntimeError('Variable "commentaryForm" does not exist.', 63, $this->source); })()), 'form');
            echo "
                          <script type=\"text/javascript\">
                            textarea = document.querySelector(\"#";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commentaryForm"]) || array_key_exists("commentaryForm", $context) ? $context["commentaryForm"] : (function () { throw new RuntimeError('Variable "commentaryForm" does not exist.', 65, $this->source); })()), "commentary", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
            echo "\");
                            textarea.addEventListener('input', autoResize, false);
                          
                            function autoResize() {
                                this.style.height = 'auto';
                                this.style.height = this.scrollHeight + 'px';
                            }
                          </script>
                      </div>
                      <hr>
                    ";
        }
        // line 76
        echo "                    <div id=\"commentarys\" class=\"mb-5\">
                    
                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentarys"]) || array_key_exists("commentarys", $context) ? $context["commentarys"] : (function () { throw new RuntimeError('Variable "commentarys" does not exist.', 78, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["commentary"]) {
            // line 79
            echo "                      ";
            echo twig_include($this->env, $context, "trick/_commentarys.html.twig");
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentary'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                    </div>
                  </div>
                  <div class=\"row\">
                  <button onClick=\"loadMore()\" class=\"btn btn-dark my-3 position-absolute bottom-0 start-50 translate-middle-x\" id=\"loadMore\">Load More</button>
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
        return "trick/trick.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 81,  285 => 79,  268 => 78,  264 => 76,  250 => 65,  245 => 63,  242 => 62,  240 => 61,  233 => 56,  228 => 55,  225 => 54,  221 => 53,  219 => 52,  214 => 50,  210 => 49,  206 => 48,  199 => 44,  194 => 41,  177 => 39,  160 => 38,  156 => 36,  150 => 34,  144 => 32,  142 => 31,  133 => 25,  127 => 22,  121 => 19,  112 => 12,  102 => 11,  92 => 8,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TrickController!{% endblock %}


{% block javascript %}
<script language = \"javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script> 
{% include('js/_loadMoreCommentary.js.twig') %}
{% endblock %}

{% block body %}
 <main>
    <div class=\"album py-5 bg-light position-relative trickPage\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"card shadow-sm\">
              <div class=\"card-body\">
                {{ include('trick/_deleteModal.html.twig') }}
                <div class=\"row mb-2\">
                  <div class=\"col\">
                    <h1>{{ trick.name }}</h1>
                  </div>
                  <div class=\"col text-end\">
                    {{ include('trick/_deleteModifyButtons.html.twig') }}
                  </div>
                </div>
                <div class=\"justify-content-between align-items-center col\">
                  <div class=\"justify-content-between align-items-center col\">
                  <div class=\"row\">
                        {% if trick.mainMedia.type == 'image' %}
                          <img src=\"{{ asset(images_directory ~ trick.mainMedia.filename) }}\" alt=\"\">
                        {% else %}
                          <iframe width=\"100%\" height=\"780\" src=\"{{ trick.mainMedia.filename }}\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                        {% endif %}
                  </div>
                  <div class=\"d-flex row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 my-4\">
                  {% for media in trick.medias|filter( v => v != trick.mainMedia) %}
                    {{ include('trick/_medias.html.twig') }}
                  {% endfor %}
                  </div>
                    <div class=\"row\" style=\"padding: 10px;\">
                      
                      <p>{{ trick.description|raw }}</p>
                    </div>
                    <div class=\"row\">
                      <div class=\"d-inline-flex justify-content-center\">
                        <h4 class=\"mx-3\">Created <span class=\"badge bg-secondary col\">{{ trick.publishedDate|date('Y-m-d') }}</span></h4>
                        <h4 class=\"mx-3\">By <span class=\"badge bg-secondary col\">{{ trick.user.username }}</span></h4>
                        <h4 class=\"mx-3\">In group <span class=\"badge bg-secondary col\">{{ trick.group.name }}</span></h4>
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
                        {{ form(commentaryForm) }}
                          <script type=\"text/javascript\">
                            textarea = document.querySelector(\"#{{ commentaryForm.commentary.vars.id }}\");
                            textarea.addEventListener('input', autoResize, false);
                          
                            function autoResize() {
                                this.style.height = 'auto';
                                this.style.height = this.scrollHeight + 'px';
                            }
                          </script>
                      </div>
                      <hr>
                    {% endif %}
                    <div id=\"commentarys\" class=\"mb-5\">
                    
                    {% for commentary in commentarys %}
                      {{ include('trick/_commentarys.html.twig') }}
                    {% endfor %}
                    </div>
                  </div>
                  <div class=\"row\">
                  <button onClick=\"loadMore()\" class=\"btn btn-dark my-3 position-absolute bottom-0 start-50 translate-middle-x\" id=\"loadMore\">Load More</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

{% endblock %}", "trick/trick.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin_old\\templates\\trick\\trick.html.twig");
    }
}
