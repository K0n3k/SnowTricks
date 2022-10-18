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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loadmore_commentarys", ["trickId" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
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

    // line 134
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 135
        echo " <main>
    <div class=\"album py-5 bg-light position-relative trickPage\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"card shadow-sm\">
              <div class=\"card-body\">
                ";
        // line 142
        echo twig_include($this->env, $context, "trick/_deleteModal.html.twig");
        echo "
                ";
        // line 143
        echo twig_include($this->env, $context, "trick/_deleteModifyButtons.html.twig");
        echo "
                <div class=\"justify-content-between align-items-center col\">
                  <div class=\"justify-content-between align-items-center col\">
                  <div class=\"d-flex row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 my-4\">
                  ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 147, $this->source); })()), "medias", [], "any", false, false, false, 147));
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
            // line 148
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
        // line 150
        echo "                  </div>
                    <div class=\"row\" style=\"padding: 10px;\">
                      <h1>";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 152, $this->source); })()), "name", [], "any", false, false, false, 152), "html", null, true);
        echo "</h1><br>
                      <p>";
        // line 153
        echo twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 153, $this->source); })()), "description", [], "any", false, false, false, 153);
        echo "</p>
                    </div>
                    <div class=\"row\">
                      <div class=\"d-inline-flex justify-content-center\">
                        <h4 class=\"mx-3\">Created <span class=\"badge bg-secondary col\">";
        // line 157
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 157, $this->source); })()), "publishedDate", [], "any", false, false, false, 157), "Y-m-d"), "html", null, true);
        echo "</span></h4>
                        <h4 class=\"mx-3\">By <span class=\"badge bg-secondary col\">";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 158, $this->source); })()), "userId", [], "any", false, false, false, 158), "username", [], "any", false, false, false, 158), "html", null, true);
        echo "</span></h4>
                        <h4 class=\"mx-3\">In group <span class=\"badge bg-secondary col\">";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 159, $this->source); })()), "groupId", [], "any", false, false, false, 159), "name", [], "any", false, false, false, 159), "html", null, true);
        echo "</span></h4>
                        <h4 class=\"mx-3\">Last update <span class=\"badge bg-secondary col\">
                        ";
        // line 161
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 161, $this->source); })()), "lastUpdated", [], "any", false, false, false, 161))) {
            // line 162
            echo "                          Never
                        ";
        } else {
            // line 163
            echo "  
                          ";
            // line 164
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 164, $this->source); })()), "lastUpdated", [], "any", false, false, false, 164), "Y-m-d"), "html", null, true);
            echo "
                        ";
        }
        // line 165
        echo "                          
                        </span></h4>
                      </div>
                    </div>
                    <hr>
                    ";
        // line 170
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 171
            echo "                      <div class=\"row\">
                        ";
            // line 172
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaryForm"]) || array_key_exists("commentaryForm", $context) ? $context["commentaryForm"] : (function () { throw new RuntimeError('Variable "commentaryForm" does not exist.', 172, $this->source); })()), 'form');
            echo "
                          <script type=\"text/javascript\">
                            textarea = document.querySelector(\"#";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commentaryForm"]) || array_key_exists("commentaryForm", $context) ? $context["commentaryForm"] : (function () { throw new RuntimeError('Variable "commentaryForm" does not exist.', 174, $this->source); })()), "commentary", [], "any", false, false, false, 174), "vars", [], "any", false, false, false, 174), "id", [], "any", false, false, false, 174), "html", null, true);
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
        // line 185
        echo "                    <div id=\"commentarys\" class=\"mb-5\">
                    
                    ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentarys"]) || array_key_exists("commentarys", $context) ? $context["commentarys"] : (function () { throw new RuntimeError('Variable "commentarys" does not exist.', 187, $this->source); })()));
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
            // line 188
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
        // line 190
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
        return array (  405 => 190,  388 => 188,  371 => 187,  367 => 185,  353 => 174,  348 => 172,  345 => 171,  343 => 170,  336 => 165,  331 => 164,  328 => 163,  324 => 162,  322 => 161,  317 => 159,  313 => 158,  309 => 157,  302 => 153,  298 => 152,  294 => 150,  277 => 148,  260 => 147,  253 => 143,  249 => 142,  240 => 135,  230 => 134,  112 => 25,  101 => 17,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
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
\t\turl: \"{{ path('loadmore_commentarys', {trickId: trick.id}) }}\",
\t\ttype: \"POST\",
\t\tdata: {offset},

\t\tsuccess: function(result) {
\t\t\tjsonContent = \$.parseJSON(result);
\t\t\t\$.each(jsonContent, function(key, value){
        date = new Date(value.publishedDate.date);
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
                {{ include('trick/_deleteModal.html.twig') }}
                {{ include('trick/_deleteModifyButtons.html.twig') }}
                <div class=\"justify-content-between align-items-center col\">
                  <div class=\"justify-content-between align-items-center col\">
                  <div class=\"d-flex row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 my-4\">
                  {% for media in trick.medias %}
                    {{ include('trick/_medias.html.twig') }}
                  {% endfor %}
                  </div>
                    <div class=\"row\" style=\"padding: 10px;\">
                      <h1>{{ trick.name }}</h1><br>
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

{% endblock %}", "trick/trick.html.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin\\templates\\trick\\trick.html.twig");
    }
}
