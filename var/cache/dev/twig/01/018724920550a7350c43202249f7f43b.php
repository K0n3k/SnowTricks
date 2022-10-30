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
  <script>
    jQuery(document).ready(function () {
      const input = document.querySelector(\"input[type=file]\");
const preview = document.querySelector(\".preview\");
input.addEventListener('change', updateImageDisplay);

  function updateImageDisplay() {
  while(preview.firstChild) {
    preview.removeChild(preview.firstChild);
  }

  const curFiles = input.files;
  if (curFiles.length === 0) {
    const para = document.createElement('p');
    para.textContent = 'No files currently selected for upload';
    preview.appendChild(para);
  } else {
    var \$form = \$('#form');

    for (const file of curFiles) {
      const listItem = document.createElement('div');
      
      
      listItem.classList.add('col', 'mb-2', 'text-center');
      if (validFileType(file)) {
        
      const para = document.createElement('div');
      para.classList.add('form-check');
      
        const image = document.createElement('img');
        image.classList.add('bd-placeholder-img', 'card-img-top');
        image.style.height='200px';
        image.style.width='100%';
        image.src = URL.createObjectURL(file);

        listItem.appendChild(image);
        listItem.appendChild(para);
      } else {
        para.textContent = `File name \${file.name}: Not a valid file type. Update your selection.`;
        listItem.appendChild(para);
      }

      preview.appendChild(listItem);
    }
  }
}

const fileTypes = [
  \"image/apng\",
  \"image/bmp\",
  \"image/gif\",
  \"image/jpeg\",
  \"image/pjpeg\",
  \"image/png\",
  \"image/svg+xml\",
  \"image/tiff\",
  \"image/webp\",
  \"image/x-icon\"
];

function validFileType(file) {
  return fileTypes.includes(file.type);
}

function returnFileSize(number) {
  if (number < 1024) {
    return `\${number} bytes`;
  } else if (number >= 1024 && number < 1048576) {
    return `\${(number / 1024).toFixed(1)} KB`;
  } else if (number >= 1048576) {
    return `\${(number / 1048576).toFixed(1)} MB`;
  }
}
      jQuery('.add-another-collection-widget').click(function (e) {
          var list = jQuery(jQuery(this).attr('data-list-selector'));
          // Try to find the counter of the list or use the length of the list
          var counter = list.data('widget-counter') || list.children().length;

          // grab the prototype template
          var newWidget = list.attr('data-prototype');
          // replace the \"__name__\" used in the id and name of the prototype
          // with a number that's unique to your emails
          // end name attribute looks like name=\"contact[emails][2]\"
          newWidget = newWidget.replace(/__name__/g, counter);
          // Increase the counter
          counter++;
          // And store it, the length cannot be used if deleting widgets is allowed
          list.data('widget-counter', counter);

          // create a new list element and add it to the list
          var newElem = jQuery(list.attr('data-widget-tags')).html(newWidget);
          newElem.appendTo(list);
      });
    });



  </script>
  ";
        // line 124
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

    // line 128
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 129
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
        // line 139
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 139, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 140
        if ( !array_key_exists("trick", $context)) {
            // line 141
            echo "                      ";
            $context["trick"] = ["name" => "", "description" => "", "group" => ["id" => "1"]];
            // line 142
            echo "                      ";
            $context["submitButtonText"] = "Add trick";
            // line 143
            echo "                    ";
        } else {
            // line 144
            echo "                      ";
            $context["submitButtonText"] = "Modify trick";
            // line 145
            echo "                        <div class=\"row\">
                        ";
            // line 146
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 146, $this->source); })()), "mainMedia", [], "any", false, false, false, 146), "type", [], "any", false, false, false, 146) == "image")) {
                // line 147
                echo "                          <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 147, $this->source); })()), "mainMedia", [], "any", false, false, false, 147), "filename", [], "any", false, false, false, 147))), "html", null, true);
                echo "\" alt=\"\">
                        ";
            } else {
                // line 149
                echo "                          <iframe width=\"100%\" height=\"780\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 149, $this->source); })()), "mainMedia", [], "any", false, false, false, 149), "filename", [], "any", false, false, false, 149), "html", null, true);
                echo "\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
                        ";
            }
            // line 151
            echo "                        </div>
                      <div class=\"d-flex row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 my-4\">
                      
                        ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 154, $this->source); })()), "medias", [], "any", false, false, false, 154));
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
                // line 155
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
            // line 157
            echo "                      </div>
                    ";
        }
        // line 159
        echo "                    <div class=\"row\">
                                            </div>
                      <div class=\"d-flex row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 my-4 preview\">
                      </div>
                      <div id=\"trick\">
                      
                        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 165, $this->source); })()), "name", [], "any", false, false, false, 165), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 165, $this->source); })()), "name", [], "any", false, false, false, 165)]);
        echo "
                        ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 166, $this->source); })()), "images", [], "any", false, false, false, 166), 'row');
        echo "
                        <div class=\"mb-3\">
                        <ul id=\"video-fields-list\"
                            style=\"list-style: none;\"
                            data-prototype=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 170, $this->source); })()), "videos", [], "any", false, false, false, 170), "vars", [], "any", false, false, false, 170), "prototype", [], "any", false, false, false, 170), 'widget'));
        echo "\"
                            data-widget-tags=\"";
        // line 171
        echo twig_escape_filter($this->env, "<li></li>");
        echo "\"
                            data-widget-counter=\"";
        // line 172
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 172, $this->source); })()), "videos", [], "any", false, false, false, 172)), "html", null, true);
        echo "\">
                          ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 173, $this->source); })()), "videos", [], "any", false, false, false, 173));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 174
            echo "                            <li class=\"mb-3\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["video"], 'widget');
            echo "</li>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "                        </ul>
                        <button type=\"button\" class=\"add-another-collection-widget btn btn-dark\" data-list-selector=\"#video-fields-list\">Add another video</button>
                        </div>
                        ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 179, $this->source); })()), "description", [], "any", false, false, false, 179), 'row', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 179, $this->source); })()), "description", [], "any", false, false, false, 179)]);
        echo "
                        ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 180, $this->source); })()), "group", [], "any", false, false, false, 180), 'row', ["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 180, $this->source); })()), "group", [], "any", false, false, false, 180), "id", [], "any", false, false, false, 180)]);
        echo "
                        <div class=\"buttons row mb-3\">
                          <div class=\"btn-group justify-content-center\">
                          <p class=\"mx-2\">";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 183, $this->source); })()), "Create_Trick", [], "any", false, false, false, 183), 'widget', ["label" => (isset($context["submitButtonText"]) || array_key_exists("submitButtonText", $context) ? $context["submitButtonText"] : (function () { throw new RuntimeError('Variable "submitButtonText" does not exist.', 183, $this->source); })())]);
        echo "</p>
                          <p><a href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateRelativePath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "request", [], "any", false, false, false, 184), "headers", [], "any", false, false, false, 184), "get", [0 => "referer"], "method", false, false, false, 184)), "html", null, true);
        echo "\" class=\"btn btn-danger\" id=\"btnCancel\">Cancel</a></p>
                          </div>
                        </div>
                        ";
        // line 187
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["trickForm"]) || array_key_exists("trickForm", $context) ? $context["trickForm"] : (function () { throw new RuntimeError('Variable "trickForm" does not exist.', 187, $this->source); })()), 'form_end');
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
        return array (  414 => 187,  408 => 184,  404 => 183,  398 => 180,  394 => 179,  389 => 176,  380 => 174,  376 => 173,  372 => 172,  368 => 171,  364 => 170,  357 => 166,  353 => 165,  345 => 159,  341 => 157,  324 => 155,  307 => 154,  302 => 151,  296 => 149,  290 => 147,  288 => 146,  285 => 145,  282 => 144,  279 => 143,  276 => 142,  273 => 141,  271 => 140,  267 => 139,  255 => 129,  245 => 128,  218 => 124,  100 => 9,  95 => 8,  85 => 7,  71 => 3,  61 => 2,  38 => 1,);
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
  <script>
    jQuery(document).ready(function () {
      const input = document.querySelector(\"input[type=file]\");
const preview = document.querySelector(\".preview\");
input.addEventListener('change', updateImageDisplay);

  function updateImageDisplay() {
  while(preview.firstChild) {
    preview.removeChild(preview.firstChild);
  }

  const curFiles = input.files;
  if (curFiles.length === 0) {
    const para = document.createElement('p');
    para.textContent = 'No files currently selected for upload';
    preview.appendChild(para);
  } else {
    var \$form = \$('#form');

    for (const file of curFiles) {
      const listItem = document.createElement('div');
      
      
      listItem.classList.add('col', 'mb-2', 'text-center');
      if (validFileType(file)) {
        
      const para = document.createElement('div');
      para.classList.add('form-check');
      
        const image = document.createElement('img');
        image.classList.add('bd-placeholder-img', 'card-img-top');
        image.style.height='200px';
        image.style.width='100%';
        image.src = URL.createObjectURL(file);

        listItem.appendChild(image);
        listItem.appendChild(para);
      } else {
        para.textContent = `File name \${file.name}: Not a valid file type. Update your selection.`;
        listItem.appendChild(para);
      }

      preview.appendChild(listItem);
    }
  }
}

const fileTypes = [
  \"image/apng\",
  \"image/bmp\",
  \"image/gif\",
  \"image/jpeg\",
  \"image/pjpeg\",
  \"image/png\",
  \"image/svg+xml\",
  \"image/tiff\",
  \"image/webp\",
  \"image/x-icon\"
];

function validFileType(file) {
  return fileTypes.includes(file.type);
}

function returnFileSize(number) {
  if (number < 1024) {
    return `\${number} bytes`;
  } else if (number >= 1024 && number < 1048576) {
    return `\${(number / 1024).toFixed(1)} KB`;
  } else if (number >= 1048576) {
    return `\${(number / 1048576).toFixed(1)} MB`;
  }
}
      jQuery('.add-another-collection-widget').click(function (e) {
          var list = jQuery(jQuery(this).attr('data-list-selector'));
          // Try to find the counter of the list or use the length of the list
          var counter = list.data('widget-counter') || list.children().length;

          // grab the prototype template
          var newWidget = list.attr('data-prototype');
          // replace the \"__name__\" used in the id and name of the prototype
          // with a number that's unique to your emails
          // end name attribute looks like name=\"contact[emails][2]\"
          newWidget = newWidget.replace(/__name__/g, counter);
          // Increase the counter
          counter++;
          // And store it, the length cannot be used if deleting widgets is allowed
          list.data('widget-counter', counter);

          // create a new list element and add it to the list
          var newElem = jQuery(list.attr('data-widget-tags')).html(newWidget);
          newElem.appendTo(list);
      });
    });



  </script>
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
                    <div class=\"row\">
                                            </div>
                      <div class=\"d-flex row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 my-4 preview\">
                      </div>
                      <div id=\"trick\">
                      
                        {{ form_row(trickForm.name, {'value': trick.name}) }}
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
