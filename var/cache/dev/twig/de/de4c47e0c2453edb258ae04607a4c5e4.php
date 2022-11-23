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

/* js/_loadMoreTricks.js.twig */
class __TwigTemplate_cace7814061b5a2df1a1b034d131de1f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/_loadMoreTricks.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/_loadMoreTricks.js.twig"));

        // line 1
        echo "<script language=\"javascript\">

window.onload = function () {
    showLoadMore(";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["showLoadMore"]) || array_key_exists("showLoadMore", $context) ? $context["showLoadMore"] : (function () { throw new RuntimeError('Variable "showLoadMore" does not exist.', 4, $this->source); })()), "js", null, true);
        echo ");
    showDownArrow(";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["showDownArrow"]) || array_key_exists("showDownArrow", $context) ? $context["showDownArrow"] : (function () { throw new RuntimeError('Variable "showDownArrow" does not exist.', 5, $this->source); })()), "js", null, true);
        echo ");
};

function showDownArrow(show) {
    downArrow = document.getElementById('downArrow');
    if (show) {
        downArrow.style.visibility = 'visible';
    } else {
        downArrow.style.visibility = 'hidden';
    }
}

function showLoadMore(show) {
    if (! show) {
        btn = document.getElementById('loadMore');
        btn.remove();
    }
}

function loadMore() {
    \$.ajax({
        url: \"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loadmore_tricks"), "js", null, true);
        echo "\",
        type: \"POST\",
        data: {},

        success: function (result) {

            jsonContent = \$.parseJSON(result);
            firstIteration = true;
            \$.each(jsonContent, function (key, value) {
                if (key === 0) {
                    showLoadMore(value.showLoadMore);

                } else if (key === 1) {
                    showDownArrow(value.showDownArrow);
                } else {
                    html = \"\";

                    ";
        // line 43
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 44
            echo "                    html += '<div class=\"modal fade\" id=\"modal_' + value.id + '\" tabindex=\"-1\" aria-labelledby=\"ModalLabel_' + value.id + '\" aria-hidden=\"true\">';
                    html += '   <div class=\"modal-dialog\">';
                    html += '       <div class=\"modal-content\">';
                    html += '           <div class=\"modal-header\">';
                    html += '               <h1 class=\"modal-title fs-5\" id=\"ModalLabel_' + value.id + '\">Modal title</h1>';
                    html += '               <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>';
                    html += '\t\t    </div>';
                    html += '\t\t    <div class=\"modal-body\">';
                    html += '\t\t        <p>This action is irremediable, are you sure to delete <strong>' + value.name + '</strong>?</p>';
                    html += '\t\t    </div>';
                    html += '\t\t    <div class=\"modal-footer\">';

                    var trickRoute = '";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_trick", ["id" => "value_id"]), "js", null, true);
            echo "';
                    trickRoute = trickRoute.replace(\"value_id\", value.id);

                    html += '\t\t        <a href=\"' + trickRoute + '\" type=\"button\" class=\"btn btn-dark\">Delete</a>';
                    html += '\t\t\t    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>';
                    html += '\t\t    </div>';
                    html += '\t    </div>';
                    html += '   </div>';
                    html += '</div>';
                    ";
        }
        // line 66
        echo "
                    html += '<div class=\"col\" id=\"trick_' + value.id + '\">';
                    html += '   <div class=\"card shadow-sm\">';

                    var viewRoute = '";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_trick", ["slug" => "value_slug"]), "js", null, true);
        echo "';
                    viewRoute = viewRoute.replace(\"value_slug\", value.slug);

                    html += '       <a href=\"' + viewRoute + '\">';
                    if (value.mainMedia.includes('youtube')) {
                        var src = value.mainMedia.replace('https://www.youtube.com/embed/', 'https://i3.ytimg.com/vi/') + '/hqdefault.jpg';
                    }
                    if (value.mainMedia.includes('dailymotion')) {
                        var src = value.mainMedia.replace('embed', 'thumbnail');
                    }
                    if (value.mainMedia.includes('vimeo')) {
                        var src = value.mainMedia.replace('https://player.vimeo.com/video/', 'https://vumbnail.com/') + '.jpg';
                    }
                    if (value.mainMediaType == 'image') {
                        var src = \"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["images_directory"]) || array_key_exists("images_directory", $context) ? $context["images_directory"] : (function () { throw new RuntimeError('Variable "images_directory" does not exist.', 84, $this->source); })()), "js", null, true);
        echo "\" + value.mainMedia;
                    }
                    html += '       <img src=\"' + src + '\" class=\"bd-placeholder-img card-img-top img-fluid\" width=\"100%\" height=\"225\" alt=\"mainImage\">';
                    html += '\t\t</a>';
                    html += '\t\t<div class=\"card-body\">';
                    html += '\t\t    <div class=\"d-flex justify-content-between align-items-center col\">';
                    html += '\t\t\t    <small class=\"text-muted\">' + value.name + '</small>';

                    ";
        // line 92
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 93
            echo "
                    var Editroute = '";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modify_trick", ["slug" => "value_slug"]), "js", null, true);
            echo "';
                    Editroute = Editroute.replace(\"value_slug\", value.slug);

                    html += '\t\t\t    <div class=\"btn-group\">';
                    html += '\t\t\t        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_' + value.id + '\"><img src=\"  ";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/img/trash-svgrepo-com.svg"), "js", null, true);
            echo "\" alt=\"pen icon\" height=\"16\" /></button>';
                    html += '\t\t\t\t    <a href=\"' + Editroute + '\" class=\"btn btn-sm btn-outline-secondary\"><img src=\"  ";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Style/img/pencil-svgrepo-com.svg"), "js", null, true);
            echo "\" alt=\"pen icon\" height=\"16\" /></a>';
                    html += '\t\t\t    </div>';
                    ";
        }
        // line 102
        echo "                    html += '\t\t\t</div>';
                    html += '\t\t</div>';
                    html += '\t</div>';
                    html += '</div>';

                    \$('#tricksCards').append(html);
                    if (firstIteration) {
                        window.location.href = '#trick_' + value.id;
                        firstIteration = false;
                    }
                }
            });
        }
    })
}
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "js/_loadMoreTricks.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 102,  175 => 99,  171 => 98,  164 => 94,  161 => 93,  159 => 92,  148 => 84,  131 => 70,  125 => 66,  112 => 56,  98 => 44,  96 => 43,  76 => 26,  52 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script language=\"javascript\">

window.onload = function () {
    showLoadMore({{ showLoadMore }});
    showDownArrow({{ showDownArrow }});
};

function showDownArrow(show) {
    downArrow = document.getElementById('downArrow');
    if (show) {
        downArrow.style.visibility = 'visible';
    } else {
        downArrow.style.visibility = 'hidden';
    }
}

function showLoadMore(show) {
    if (! show) {
        btn = document.getElementById('loadMore');
        btn.remove();
    }
}

function loadMore() {
    \$.ajax({
        url: \"{{ path('loadmore_tricks') }}\",
        type: \"POST\",
        data: {},

        success: function (result) {

            jsonContent = \$.parseJSON(result);
            firstIteration = true;
            \$.each(jsonContent, function (key, value) {
                if (key === 0) {
                    showLoadMore(value.showLoadMore);

                } else if (key === 1) {
                    showDownArrow(value.showDownArrow);
                } else {
                    html = \"\";

                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    html += '<div class=\"modal fade\" id=\"modal_' + value.id + '\" tabindex=\"-1\" aria-labelledby=\"ModalLabel_' + value.id + '\" aria-hidden=\"true\">';
                    html += '   <div class=\"modal-dialog\">';
                    html += '       <div class=\"modal-content\">';
                    html += '           <div class=\"modal-header\">';
                    html += '               <h1 class=\"modal-title fs-5\" id=\"ModalLabel_' + value.id + '\">Modal title</h1>';
                    html += '               <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>';
                    html += '\t\t    </div>';
                    html += '\t\t    <div class=\"modal-body\">';
                    html += '\t\t        <p>This action is irremediable, are you sure to delete <strong>' + value.name + '</strong>?</p>';
                    html += '\t\t    </div>';
                    html += '\t\t    <div class=\"modal-footer\">';

                    var trickRoute = '{{ path(\"delete_trick\", {'id': 'value_id'}) }}';
                    trickRoute = trickRoute.replace(\"value_id\", value.id);

                    html += '\t\t        <a href=\"' + trickRoute + '\" type=\"button\" class=\"btn btn-dark\">Delete</a>';
                    html += '\t\t\t    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>';
                    html += '\t\t    </div>';
                    html += '\t    </div>';
                    html += '   </div>';
                    html += '</div>';
                    {% endif %}

                    html += '<div class=\"col\" id=\"trick_' + value.id + '\">';
                    html += '   <div class=\"card shadow-sm\">';

                    var viewRoute = '{{ path(\"show_trick\", {'slug': 'value_slug'}) }}';
                    viewRoute = viewRoute.replace(\"value_slug\", value.slug);

                    html += '       <a href=\"' + viewRoute + '\">';
                    if (value.mainMedia.includes('youtube')) {
                        var src = value.mainMedia.replace('https://www.youtube.com/embed/', 'https://i3.ytimg.com/vi/') + '/hqdefault.jpg';
                    }
                    if (value.mainMedia.includes('dailymotion')) {
                        var src = value.mainMedia.replace('embed', 'thumbnail');
                    }
                    if (value.mainMedia.includes('vimeo')) {
                        var src = value.mainMedia.replace('https://player.vimeo.com/video/', 'https://vumbnail.com/') + '.jpg';
                    }
                    if (value.mainMediaType == 'image') {
                        var src = \"{{ images_directory }}\" + value.mainMedia;
                    }
                    html += '       <img src=\"' + src + '\" class=\"bd-placeholder-img card-img-top img-fluid\" width=\"100%\" height=\"225\" alt=\"mainImage\">';
                    html += '\t\t</a>';
                    html += '\t\t<div class=\"card-body\">';
                    html += '\t\t    <div class=\"d-flex justify-content-between align-items-center col\">';
                    html += '\t\t\t    <small class=\"text-muted\">' + value.name + '</small>';

                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                    var Editroute = '{{ path(\"modify_trick\", {'slug': 'value_slug'}) }}';
                    Editroute = Editroute.replace(\"value_slug\", value.slug);

                    html += '\t\t\t    <div class=\"btn-group\">';
                    html += '\t\t\t        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" data-bs-toggle=\"modal\" data-bs-target=\"#modal_' + value.id + '\"><img src=\"  {{ asset(\"Style/img/trash-svgrepo-com.svg\") }}\" alt=\"pen icon\" height=\"16\" /></button>';
                    html += '\t\t\t\t    <a href=\"' + Editroute + '\" class=\"btn btn-sm btn-outline-secondary\"><img src=\"  {{ asset(\"Style/img/pencil-svgrepo-com.svg\") }}\" alt=\"pen icon\" height=\"16\" /></a>';
                    html += '\t\t\t    </div>';
                    {% endif %}
                    html += '\t\t\t</div>';
                    html += '\t\t</div>';
                    html += '\t</div>';
                    html += '</div>';

                    \$('#tricksCards').append(html);
                    if (firstIteration) {
                        window.location.href = '#trick_' + value.id;
                        firstIteration = false;
                    }
                }
            });
        }
    })
}
</script>
", "js/_loadMoreTricks.js.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin_old\\templates\\js\\_loadMoreTricks.js.twig");
    }
}
