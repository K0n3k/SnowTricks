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
<script language = \"javascript\">

offset = 5;

window.onload = function() {
\tshowLoadMore();
};

function showLoadMore() {
\tif(offset >= ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["maxCommentarys"]) || array_key_exists("maxCommentarys", $context) ? $context["maxCommentarys"] : (function () { throw new RuntimeError('Variable "maxCommentarys" does not exist.', 17, $this->source); })()), "html", null, true);
        echo ") {
\t\tbtn = document.getElementById('loadMore');
\t\tbtn.remove();
\t}
}

function loadMore() {
\t\$.ajax({
\t\turl: \"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loadmore_commentarys", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\",
\t\ttype: \"POST\",
\t\tdata: {offset},

\t\tsuccess: function(result) {
\t\t\tjsonContent = \$.parseJSON(result);
\t\t\t\$.each(jsonContent, function(key, value){
        date = new Date(value.publishedDate.date);
\t\t\thtml = \"\";
      html += '\t\t\t <div class=\"row shadow-sm m-3\" id=\"Commentary_' + value.id + '\">';
      html += '                      <div class=\"col col-1 mx-3\">';
      var avatarRoute = '";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["avatars_directory"]) || array_key_exists("avatars_directory", $context) ? $context["avatars_directory"] : (function () { throw new RuntimeError('Variable "avatars_directory" does not exist.', 36, $this->source); })()) . "image")), "html", null, true);
        echo "';
\t\t\tavatarRoute = avatarRoute.replace(\"image\", value.user.avatar);
      html += '<img src=\"'+ avatarRoute +'\" class=\"bd-placeholder-img card-img-top\" width=\"32\" height=\"32\" alt=\"image\"/>';
      html += '                        <p style=\"white-space: nowrap;\">' + value.user.username + '</p>';
      html += '                      <br>';
      html += '                      <p style=\"white-space: nowrap;\">' + date.getFullYear() + '-' + (\"0\" + (date.getMonth() + 1)).slice(-2) + '-' + (\"0\" + (date.getDate() + 1)).slice(-2) +'</p>';
      html += '                      <br>';
      html += '                      </div>';
      html += '                      <div class=\"col\">';
      html += '                        <p>' + value.commentary + '</p>';
      html += '                      </div>';
                          html += '</div>';
\t\t\t\$('#commentarys').append(html);\t
\t\t\t});

\t\t\toffset += 5;
\t\t\tshowLoadMore();

\t\t}
\t})
}

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo " <main>
    <div class=\"album py-5 bg-light position-relative trickPage\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"card shadow-sm\">
              <div class=\"card-body\">
                ";
        // line 69
        echo twig_include($this->env, $context, "trick/_deleteModal.html.twig");
        echo "
                <div class=\"row mb-2\">
                  <div class=\"col\">
                    <h1>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72), "html", null, true);
        echo "</h1>
                  </div>
                  <div class=\"col text-end\">
                    ";
        // line 75
        echo twig_include($this->env, $context, "trick/_deleteModifyButtons.html.twig");
        echo "
                  </div>
                </div>
                <div class=\"justify-content-between align-items-center col\">
                  <div class=\"justify-content-between align-items-center col\">
                  <div class=\"row\">
                        ";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 81, $this->source); })()), "mainMedia", [], "any", false, false, false, 81), "type", [], "any", false, false, false, 81) == "image")) {
            // line 82
            echo "                          <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["images_directory"]) || array_key_exists("images_directory", $context) ? $context["images_directory"] : (function () { throw new RuntimeError('Variable "images_directory" does not exist.', 82, $this->source); })()) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 82, $this->source); })()), "mainMedia", [], "any", false, false, false, 82), "filename", [], "any", false, false, false, 82))), "html", null, true);
            echo "\" alt=\"\">
                        ";
        } else {
            // line 84
            echo "                          <iframe width=\"100%\" height=\"780\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 84, $this->source); })()), "mainMedia", [], "any", false, false, false, 84), "filename", [], "any", false, false, false, 84), "html", null, true);
            echo "\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                        ";
        }
        // line 86
        echo "                  </div>
                  <div class=\"d-flex row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 my-4\">
                  ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 88, $this->source); })()), "medias", [], "any", false, false, false, 88), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return ((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 88, $this->source); })()) != twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 88, $this->source); })()), "mainMedia", [], "any", false, false, false, 88)); }));
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
            // line 89
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
        // line 91
        echo "                  </div>
                    <div class=\"row\" style=\"padding: 10px;\">
                      
                      <p>";
        // line 94
        echo twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 94, $this->source); })()), "description", [], "any", false, false, false, 94);
        echo "</p>
                    </div>
                    <div class=\"row\">
                      <div class=\"d-inline-flex justify-content-center\">
                        <h4 class=\"mx-3\">Created <span class=\"badge bg-secondary col\">";
        // line 98
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 98, $this->source); })()), "publishedDate", [], "any", false, false, false, 98), "Y-m-d"), "html", null, true);
        echo "</span></h4>
                        <h4 class=\"mx-3\">By <span class=\"badge bg-secondary col\">";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "username", [], "any", false, false, false, 99), "html", null, true);
        echo "</span></h4>
                        <h4 class=\"mx-3\">In group <span class=\"badge bg-secondary col\">";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 100, $this->source); })()), "group", [], "any", false, false, false, 100), "name", [], "any", false, false, false, 100), "html", null, true);
        echo "</span></h4>
                        <h4 class=\"mx-3\">Last update <span class=\"badge bg-secondary col\">
                        ";
        // line 102
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 102, $this->source); })()), "lastUpdated", [], "any", false, false, false, 102))) {
            // line 103
            echo "                          Never
                        ";
        } else {
            // line 104
            echo "  
                          ";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 105, $this->source); })()), "lastUpdated", [], "any", false, false, false, 105), "Y-m-d"), "html", null, true);
            echo "
                        ";
        }
        // line 106
        echo "                          
                        </span></h4>
                      </div>
                    </div>
                    <hr>
                    ";
        // line 111
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 112
            echo "                      <div class=\"row\">
                        ";
            // line 113
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaryForm"]) || array_key_exists("commentaryForm", $context) ? $context["commentaryForm"] : (function () { throw new RuntimeError('Variable "commentaryForm" does not exist.', 113, $this->source); })()), 'form');
            echo "
                          <script type=\"text/javascript\">
                            textarea = document.querySelector(\"#";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commentaryForm"]) || array_key_exists("commentaryForm", $context) ? $context["commentaryForm"] : (function () { throw new RuntimeError('Variable "commentaryForm" does not exist.', 115, $this->source); })()), "commentary", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "id", [], "any", false, false, false, 115), "html", null, true);
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
        // line 126
        echo "                    <div id=\"commentarys\" class=\"mb-5\">
                    
                    ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentarys"]) || array_key_exists("commentarys", $context) ? $context["commentarys"] : (function () { throw new RuntimeError('Variable "commentarys" does not exist.', 128, $this->source); })()));
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
            // line 129
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
        // line 131
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
        return array (  360 => 131,  343 => 129,  326 => 128,  322 => 126,  308 => 115,  303 => 113,  300 => 112,  298 => 111,  291 => 106,  286 => 105,  283 => 104,  279 => 103,  277 => 102,  272 => 100,  268 => 99,  264 => 98,  257 => 94,  252 => 91,  235 => 89,  218 => 88,  214 => 86,  208 => 84,  202 => 82,  200 => 81,  191 => 75,  185 => 72,  179 => 69,  170 => 62,  160 => 61,  126 => 36,  112 => 25,  101 => 17,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello TrickController!{% endblock %}


{% block javascript %}
<script language = \"javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js\"></script> 
<script language = \"javascript\">

offset = 5;

window.onload = function() {
\tshowLoadMore();
};

function showLoadMore() {
\tif(offset >= {{ maxCommentarys }}) {
\t\tbtn = document.getElementById('loadMore');
\t\tbtn.remove();
\t}
}

function loadMore() {
\t\$.ajax({
\t\turl: \"{{ path('loadmore_commentarys', {'id': trick.id}) }}\",
\t\ttype: \"POST\",
\t\tdata: {offset},

\t\tsuccess: function(result) {
\t\t\tjsonContent = \$.parseJSON(result);
\t\t\t\$.each(jsonContent, function(key, value){
        date = new Date(value.publishedDate.date);
\t\t\thtml = \"\";
      html += '\t\t\t <div class=\"row shadow-sm m-3\" id=\"Commentary_' + value.id + '\">';
      html += '                      <div class=\"col col-1 mx-3\">';
      var avatarRoute = '{{ asset(avatars_directory ~ 'image') }}';
\t\t\tavatarRoute = avatarRoute.replace(\"image\", value.user.avatar);
      html += '<img src=\"'+ avatarRoute +'\" class=\"bd-placeholder-img card-img-top\" width=\"32\" height=\"32\" alt=\"image\"/>';
      html += '                        <p style=\"white-space: nowrap;\">' + value.user.username + '</p>';
      html += '                      <br>';
      html += '                      <p style=\"white-space: nowrap;\">' + date.getFullYear() + '-' + (\"0\" + (date.getMonth() + 1)).slice(-2) + '-' + (\"0\" + (date.getDate() + 1)).slice(-2) +'</p>';
      html += '                      <br>';
      html += '                      </div>';
      html += '                      <div class=\"col\">';
      html += '                        <p>' + value.commentary + '</p>';
      html += '                      </div>';
                          html += '</div>';
\t\t\t\$('#commentarys').append(html);\t
\t\t\t});

\t\t\toffset += 5;
\t\t\tshowLoadMore();

\t\t}
\t})
}

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
