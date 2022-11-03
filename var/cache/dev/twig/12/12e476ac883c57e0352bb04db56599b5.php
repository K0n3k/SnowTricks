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

/* js/_loadMoreCommentary.js.twig */
class __TwigTemplate_aad05e16e43094f70da813f2c5b699b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/_loadMoreCommentary.js.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/_loadMoreCommentary.js.twig"));

        // line 1
        echo "<script language = \"javascript\">


window.onload = function() {
\tshowLoadMore(";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["showLoadMore"]) || array_key_exists("showLoadMore", $context) ? $context["showLoadMore"] : (function () { throw new RuntimeError('Variable "showLoadMore" does not exist.', 5, $this->source); })()), "js", null, true);
        echo ");
};

function showLoadMore(show) {
  console.log(show);
\tif(!show) {
\t\tbtn = document.getElementById('loadMore');
\t\tbtn.remove();
\t}
}

function loadMore() {
\t\$.ajax({
\t\turl: \"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("loadmore_commentarys", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["trick"]) || array_key_exists("trick", $context) ? $context["trick"] : (function () { throw new RuntimeError('Variable "trick" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "js", null, true);
        echo "\",
\t\ttype: \"POST\",
\t\tdata: {},

\t\tsuccess: function(result) {
\t\t\tjsonContent = \$.parseJSON(result);
      firstIteration = true;
\t\t\t\$.each(jsonContent, function(key, value){
        if(key === 0) {
          console.log(value);
\t\t\t    showLoadMore(value.showLoadMore);

        } else {

        date = new Date(value.publishedDate.date);
\t\t\thtml = \"\";
      html += '\t\t\t <div class=\"row shadow-sm m-3\" id=\"Commentary_' + value.id + '\">';
      html += '                      <div class=\"col col-1 mx-3\">';
      var avatarRoute = '";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["avatars_directory"]) || array_key_exists("avatars_directory", $context) ? $context["avatars_directory"] : (function () { throw new RuntimeError('Variable "avatars_directory" does not exist.', 36, $this->source); })()) . "image")), "js", null, true);
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
      if(firstIteration) {
\t\t\t\twindow.location.href = '#Commentary_' + value.id;
\t\t\t\tfirstIteration = false;
\t\t\t}
        }
\t\t\t});
      

\t\t}
\t})
}

</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "js/_loadMoreCommentary.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 36,  65 => 18,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script language = \"javascript\">


window.onload = function() {
\tshowLoadMore({{ showLoadMore }});
};

function showLoadMore(show) {
  console.log(show);
\tif(!show) {
\t\tbtn = document.getElementById('loadMore');
\t\tbtn.remove();
\t}
}

function loadMore() {
\t\$.ajax({
\t\turl: \"{{ path('loadmore_commentarys', {'id': trick.id}) }}\",
\t\ttype: \"POST\",
\t\tdata: {},

\t\tsuccess: function(result) {
\t\t\tjsonContent = \$.parseJSON(result);
      firstIteration = true;
\t\t\t\$.each(jsonContent, function(key, value){
        if(key === 0) {
          console.log(value);
\t\t\t    showLoadMore(value.showLoadMore);

        } else {

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
      if(firstIteration) {
\t\t\t\twindow.location.href = '#Commentary_' + value.id;
\t\t\t\tfirstIteration = false;
\t\t\t}
        }
\t\t\t});
      

\t\t}
\t})
}

</script>", "js/_loadMoreCommentary.js.twig", "E:\\Projets\\Openclassrooms\\P6_nguyenhuu_kevin_old\\templates\\js\\_loadMoreCommentary.js.twig");
    }
}
