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
  console.log(offset);
\tif(offset >= ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["maxCommentarys"]) || array_key_exists("maxCommentarys", $context) ? $context["maxCommentarys"] : (function () { throw new RuntimeError('Variable "maxCommentarys" does not exist.', 18, $this->source); })()), "html", null, true);
        echo ") {
\t\tbtn = document.getElementById('loadMore');
\t\tbtn.style.visibility = 'hidden';
\t}
}

function loadMore() {
\t\$.ajax({
\t\turl: \"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentarysAjax", ["trickId" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\",
\t\ttype: \"POST\",
\t\tdata: {offset},

\t\tsuccess: function(result) {
\t\t\tjsonContent = \$.parseJSON(result);
\t\t\t\$.each(jsonContent, function(key, value){
        date = new Date(value.publishedDate.timestamp * 1000);
\t\t\thtml = \"\";
      html += '\t\t\t <div class=\"row shadow-sm m-3\" id=\"Commentary_' + value.id + '\">';
      html += '                      <div class=\"col col-1 mx-3\">';
      html += '                        <?xml version=\"1.0\" encoding=\"iso-8859-1\"?>';
      html += '                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->';
      html += '                        <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\"';
      html += '                          xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"48px\" viewBox=\"0 0 480 480\"';
      html += '                          style=\"enable-background:new 0 0 480 480;\" xml:space=\"preserve\">';
      html += '                          <g>';
      html += '                            <g>';
      html += '                              <circle style=\"fill:#B8BAC0;\" cx=\"240\" cy=\"240\" r=\"240\" />';
      html += '                            </g>';
      html += '                            <g>';
      html += '                              <g>';
      html += '                                <path style=\"fill:#FFFFFF;\"';
      html += '                                  d=\"M240,360.07c-27.944,0-53.297-11.991-72.003-31.372c-0.014,11.615-0.436,28.379-3.516,40.611';
      html += '\t\t\t\tc2.02,1.235,3.588,3.262,3.894,5.784c3.992,32.484,34.781,56.977,71.625,56.977c36.836,0,67.625-24.496,71.625-56.977';
      html += '\t\t\t\tc0.31-2.525,1.844-4.549,3.895-5.78c-3.08-12.233-3.503-28.999-3.517-40.615C293.297,348.079,267.944,360.07,240,360.07z\" />';
      html += '                              </g>';
      html += '                            </g>';
      html += '                            <g>';
      html += '                              <g>';
      html += '                                <path style=\"fill:#D7DBE0;\" d=\"M310.44,330.174c-18.549,18.477-43.242,29.896-70.44,29.896';
      html += '\t\t\t\tc-27.944,0-53.297-11.991-72.003-31.372c-0.014,11.615-0.436,28.379-3.516,40.611c2.02,1.235,3.588,3.262,3.894,5.784';
      html += '\t\t\t\tc1.765,14.359,8.778,27.144,19.223,36.954C235.766,405.265,290.437,357.702,310.44,330.174z\" />';
      html += '                              </g>';
      html += '                            </g>';
      html += '                            <g>';
      html += '                              <g>';
      html += '                                <path style=\"fill:#FFFFFF;\" d=\"M312,160.07H176c-22.055,0-40,17.945-40,40v48c0,61.758,46.656,112,104,112s104-50.242,104-112';
      html += '\t\t\t\tv-56C344,174.426,329.648,160.07,312,160.07z\" />';
      html += '                              </g>';
      html += '                            </g>';
      html += '                            <g>';
      html += '                              <g>';
      html += '                                <path style=\"fill:#5C546A;\" d=\"M296,72.07H192c-15.047,0-27.695,10.438-31.102,24.449C133.359,100.02,112,123.598,112,152.07v40';
      html += '\t\t\t\tc0,20.617,8.752,39.851,24,53.52v-45.52c0-22.055,17.945-40,40-40h136c17.648,0,32,14.355,32,32v53.511';
      html += '\t\t\t\tc15.251-13.667,24-32.899,24-53.511v-48C368,104.371,335.703,72.07,296,72.07z\" />';
      html += '                              </g>';
      html += '                            </g>';
      html += '                            <g>';
      html += '                              <path style=\"fill:#5C546A;\" d=\"M61.632,400.544C105.562,449.319,169.191,480,240,480s134.438-30.681,178.368-79.456';
      html += '\t\t\tc-7.66-10.356-18.462-18.77-32.352-22.659c-0.32-0.09-0.641-0.16-0.969-0.207l-63.859-9.582c-0.391-0.059-1.227-0.09-1.625-0.09';
      html += '\t\t\tc-4.039,0-7.445,3.012-7.938,7.023c-4,32.48-34.789,56.977-71.625,56.977c-36.844,0-67.633-24.492-71.625-56.977';
      html += '\t\t\tc-0.5-4.129-4.219-7.234-8.141-7.02c-0.469-0.027-0.93,0.012-1.422,0.086l-63.859,9.582c-0.328,0.047-0.648,0.117-0.969,0.207';
      html += '\t\t\tC80.094,381.775,69.292,390.188,61.632,400.544z\" />';
      html += '                            </g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                        </svg>';
      html += '                        <p style=\"white-space: nowrap;\">' + value.userId.username + '</p>';
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

    // line 135
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 136
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
        // line 201
        echo twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 201, $this->source); })()), "description", [], "any", false, false, false, 201);
        echo "</p>
                    </div>
                    <div class=\"row\">
                      <div class=\"d-inline-flex justify-content-center\">
                        <h4 class=\"mx-3\">Created <span class=\"badge bg-secondary col\">";
        // line 205
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 205, $this->source); })()), "publishedDate", [], "any", false, false, false, 205), "Y-m-d"), "html", null, true);
        echo "</span></h4>
                        <h4 class=\"mx-3\">By <span class=\"badge bg-secondary col\">";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 206, $this->source); })()), "userId", [], "any", false, false, false, 206), "username", [], "any", false, false, false, 206), "html", null, true);
        echo "</span></h4>
                        <h4 class=\"mx-3\">In group <span class=\"badge bg-secondary col\">";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 207, $this->source); })()), "groupId", [], "any", false, false, false, 207), "name", [], "any", false, false, false, 207), "html", null, true);
        echo "</span></h4>
                        <h4 class=\"mx-3\">Last update <span class=\"badge bg-secondary col\">
                        ";
        // line 209
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 209, $this->source); })()), "lastUpdated", [], "any", false, false, false, 209))) {
            // line 210
            echo "                          Never
                        ";
        } else {
            // line 211
            echo "  
                          ";
            // line 212
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 212, $this->source); })()), "lastUpdated", [], "any", false, false, false, 212), "Y-m-d"), "html", null, true);
            echo "
                        ";
        }
        // line 213
        echo "                          
                        </span></h4>
                      </div>
                    </div>
                    <hr>
                    ";
        // line 218
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 219
            echo "                      <div class=\"row\">
                        ";
            // line 220
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaryForm"]) || array_key_exists("commentaryForm", $context) ? $context["commentaryForm"] : (function () { throw new RuntimeError('Variable "commentaryForm" does not exist.', 220, $this->source); })()), 'form');
            echo "
                      </div>
                      <hr>
                    ";
        }
        // line 224
        echo "                    <div id=\"commentarys\" class=\"mb-5\">
                    
                   ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentarys"]) || array_key_exists("commentarys", $context) ? $context["commentarys"] : (function () { throw new RuntimeError('Variable "commentarys" does not exist.', 226, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentary"]) {
            // line 227
            echo "                    <div class=\"row shadow-sm m-3\" id=\"Commentary_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentary"], "id", [], "any", false, false, false, 227), "html", null, true);
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
                        <p style=\"white-space: nowrap;\">";
            // line 305
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentary"], "userId", [], "any", false, false, false, 305), "Username", [], "any", false, false, false, 305), "html", null, true);
            echo "</p>
                      <br>
                      <p style=\"white-space: nowrap;\">";
            // line 307
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentary"], "publishedDate", [], "any", false, false, false, 307), "Y-m-d"), "html", null, true);
            echo "</p>
                      <br>
                      </div>
                      <div class=\"col\">
                        <p>";
            // line 311
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentary"], "commentary", [], "any", false, false, false, 311), "html", null, true);
            echo "</p>
                      </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentary'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 315
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
        return array (  473 => 315,  463 => 311,  456 => 307,  451 => 305,  369 => 227,  365 => 226,  361 => 224,  354 => 220,  351 => 219,  349 => 218,  342 => 213,  337 => 212,  334 => 211,  330 => 210,  328 => 209,  323 => 207,  319 => 206,  315 => 205,  308 => 201,  241 => 136,  231 => 135,  113 => 26,  102 => 18,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
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
  console.log(offset);
\tif(offset >= {{ maxCommentarys }}) {
\t\tbtn = document.getElementById('loadMore');
\t\tbtn.style.visibility = 'hidden';
\t}
}

function loadMore() {
\t\$.ajax({
\t\turl: \"{{ path('app_commentarysAjax', {trickId: trick.id}) }}\",
\t\ttype: \"POST\",
\t\tdata: {offset},

\t\tsuccess: function(result) {
\t\t\tjsonContent = \$.parseJSON(result);
\t\t\t\$.each(jsonContent, function(key, value){
        date = new Date(value.publishedDate.timestamp * 1000);
\t\t\thtml = \"\";
      html += '\t\t\t <div class=\"row shadow-sm m-3\" id=\"Commentary_' + value.id + '\">';
      html += '                      <div class=\"col col-1 mx-3\">';
      html += '                        <?xml version=\"1.0\" encoding=\"iso-8859-1\"?>';
      html += '                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->';
      html += '                        <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\"';
      html += '                          xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"48px\" viewBox=\"0 0 480 480\"';
      html += '                          style=\"enable-background:new 0 0 480 480;\" xml:space=\"preserve\">';
      html += '                          <g>';
      html += '                            <g>';
      html += '                              <circle style=\"fill:#B8BAC0;\" cx=\"240\" cy=\"240\" r=\"240\" />';
      html += '                            </g>';
      html += '                            <g>';
      html += '                              <g>';
      html += '                                <path style=\"fill:#FFFFFF;\"';
      html += '                                  d=\"M240,360.07c-27.944,0-53.297-11.991-72.003-31.372c-0.014,11.615-0.436,28.379-3.516,40.611';
      html += '\t\t\t\tc2.02,1.235,3.588,3.262,3.894,5.784c3.992,32.484,34.781,56.977,71.625,56.977c36.836,0,67.625-24.496,71.625-56.977';
      html += '\t\t\t\tc0.31-2.525,1.844-4.549,3.895-5.78c-3.08-12.233-3.503-28.999-3.517-40.615C293.297,348.079,267.944,360.07,240,360.07z\" />';
      html += '                              </g>';
      html += '                            </g>';
      html += '                            <g>';
      html += '                              <g>';
      html += '                                <path style=\"fill:#D7DBE0;\" d=\"M310.44,330.174c-18.549,18.477-43.242,29.896-70.44,29.896';
      html += '\t\t\t\tc-27.944,0-53.297-11.991-72.003-31.372c-0.014,11.615-0.436,28.379-3.516,40.611c2.02,1.235,3.588,3.262,3.894,5.784';
      html += '\t\t\t\tc1.765,14.359,8.778,27.144,19.223,36.954C235.766,405.265,290.437,357.702,310.44,330.174z\" />';
      html += '                              </g>';
      html += '                            </g>';
      html += '                            <g>';
      html += '                              <g>';
      html += '                                <path style=\"fill:#FFFFFF;\" d=\"M312,160.07H176c-22.055,0-40,17.945-40,40v48c0,61.758,46.656,112,104,112s104-50.242,104-112';
      html += '\t\t\t\tv-56C344,174.426,329.648,160.07,312,160.07z\" />';
      html += '                              </g>';
      html += '                            </g>';
      html += '                            <g>';
      html += '                              <g>';
      html += '                                <path style=\"fill:#5C546A;\" d=\"M296,72.07H192c-15.047,0-27.695,10.438-31.102,24.449C133.359,100.02,112,123.598,112,152.07v40';
      html += '\t\t\t\tc0,20.617,8.752,39.851,24,53.52v-45.52c0-22.055,17.945-40,40-40h136c17.648,0,32,14.355,32,32v53.511';
      html += '\t\t\t\tc15.251-13.667,24-32.899,24-53.511v-48C368,104.371,335.703,72.07,296,72.07z\" />';
      html += '                              </g>';
      html += '                            </g>';
      html += '                            <g>';
      html += '                              <path style=\"fill:#5C546A;\" d=\"M61.632,400.544C105.562,449.319,169.191,480,240,480s134.438-30.681,178.368-79.456';
      html += '\t\t\tc-7.66-10.356-18.462-18.77-32.352-22.659c-0.32-0.09-0.641-0.16-0.969-0.207l-63.859-9.582c-0.391-0.059-1.227-0.09-1.625-0.09';
      html += '\t\t\tc-4.039,0-7.445,3.012-7.938,7.023c-4,32.48-34.789,56.977-71.625,56.977c-36.844,0-67.633-24.492-71.625-56.977';
      html += '\t\t\tc-0.5-4.129-4.219-7.234-8.141-7.02c-0.469-0.027-0.93,0.012-1.422,0.086l-63.859,9.582c-0.328,0.047-0.648,0.117-0.969,0.207';
      html += '\t\t\tC80.094,381.775,69.292,390.188,61.632,400.544z\" />';
      html += '                            </g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                          <g>';
      html += '                          </g>';
      html += '                        </svg>';
      html += '                        <p style=\"white-space: nowrap;\">' + value.userId.username + '</p>';
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
                      <p>{{ trick.description|raw }}</p>
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
                        {{ form(commentaryForm) }}
                      </div>
                      <hr>
                    {% endif %}
                    <div id=\"commentarys\" class=\"mb-5\">
                    
                   {% for commentary in commentarys %}
                    <div class=\"row shadow-sm m-3\" id=\"Commentary_{{ commentary.id }}\">
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
                        <p style=\"white-space: nowrap;\">{{ commentary.userId.Username }}</p>
                      <br>
                      <p style=\"white-space: nowrap;\">{{ commentary.publishedDate|date('Y-m-d') }}</p>
                      <br>
                      </div>
                      <div class=\"col\">
                        <p>{{ commentary.commentary }}</p>
                      </div>
                    </div>
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

{% endblock %}", "trick/trick.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin\\templates\\trick\\trick.html.twig");
    }
}
