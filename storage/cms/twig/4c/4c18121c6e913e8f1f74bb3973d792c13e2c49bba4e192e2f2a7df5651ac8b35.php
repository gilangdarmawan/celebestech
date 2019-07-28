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

/* /Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/site/meta.htm */
class __TwigTemplate_732a2a0a4b6da57e02a5a1ab54c0793ece377e0541f68fc991cdeb06dae98dda extends \Twig\Template
{
    private $source;

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
        // line 2
        echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
";
        // line 5
        if (twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 5)) {
            // line 6
            echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"";
            // line 9
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "summary", [], "any", false, false, false, 9), 140]);
            echo "\">
<meta name=\"title\" content=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "theme_site_name", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
<meta name=\"author\" content=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 11), "first_name", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
<meta name=\"robots\" content==\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 13), "theme_site_name", [], "any", false, false, false, 13), "html", null, true);
            echo "\">
<meta name=\"author\" content=\"themefisher.com\">

<title>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 16), "theme_site_name", [], "any", false, false, false, 16), "html", null, true);
            echo "</title>
";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 17
($context["this"] ?? null), "page", [], "any", false, false, false, 17), "url", [], "any", false, false, false, 17) == "/blog/:page?")) {
            // line 18
            echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"";
            // line 21
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 21), "meta_description", [], "any", true, true, false, 21)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 21), "meta_description", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 21), "site_description", [], "any", false, false, false, 21))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 21), "site_description", [], "any", false, false, false, 21))), "html", null, true);
            echo "\">
<meta name=\"title\" content=\"";
            // line 22
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 22), "meta_title", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 22), "meta_title", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 22), "title", [], "any", false, false, false, 22))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 22), "title", [], "any", false, false, false, 22))), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 22), "theme_site_name", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
<meta name=\"author\" content=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 23), "theme_site_author", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 25), "theme_site_name", [], "any", false, false, false, 25), "html", null, true);
            echo "\">

<title>";
            // line 27
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 27), "meta_title", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 27), "meta_title", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27))), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 27), "theme_site_name", [], "any", false, false, false, 27), "html", null, true);
            echo "</title>
";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 28
($context["blogCategories"] ?? null), "categories", [], "any", false, false, false, 28)) {
            // line 29
            echo "<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"";
            // line 32
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 32), 140]);
            echo "\">
<meta name=\"title\" content=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 33), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 33), "theme_site_name", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
<meta name=\"author\" content=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 34), "theme_site_author", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 36), "theme_site_name", [], "any", false, false, false, 36), "html", null, true);
            echo "\">

<title>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 38), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 38), "theme_site_name", [], "any", false, false, false, 38), "html", null, true);
            echo "</title>
";
        } else {
            // line 40
            echo "
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"";
            // line 44
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 44), "meta_description", [], "any", true, true, false, 44)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 44), "meta_description", [], "any", false, false, false, 44), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 44), "theme_site_description", [], "any", false, false, false, 44))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 44), "theme_site_description", [], "any", false, false, false, 44))), "html", null, true);
            echo "\">
<meta name=\"title\" content=\"";
            // line 45
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 45), "meta_title", [], "any", true, true, false, 45)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 45), "meta_title", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 45), "title", [], "any", false, false, false, 45))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 45), "title", [], "any", false, false, false, 45))), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 45), "theme_site_name", [], "any", false, false, false, 45), "html", null, true);
            echo "\">
<meta name=\"author\" content=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 46), "theme_site_author", [], "any", false, false, false, 46), "html", null, true);
            echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 48), "theme_site_name", [], "any", false, false, false, 48), "html", null, true);
            echo "\">

<title>";
            // line 50
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 50), "meta_title", [], "any", true, true, false, 50)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 50), "meta_title", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 50), "title", [], "any", false, false, false, 50))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 50), "title", [], "any", false, false, false, 50))), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 50), "theme_site_name", [], "any", false, false, false, 50), "html", null, true);
            echo "</title>
";
        }
        // line 52
        echo "
";
        // line 54
        echo "<link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
";
        // line 56
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/plugins/bootstrap/css/bootstrap.min.css", 1 => "assets/plugins/themify/css/themify-icons.css", 2 => "assets/plugins/fontawesome/css/all.css", 3 => "assets/plugins/magnific-popup/dist/magnific-popup.css", 4 => "assets/plugins/slick-carousel/slick/slick.css", 5 => "assets/plugins/slick-carousel/slick/slick-theme.css"]);
        // line 63
        echo "\" rel=\"stylesheet\">
";
        // line 65
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/scss/style.scss"]);
        // line 67
        echo "\" rel=\"stylesheet\">";
    }

    public function getTemplateName()
    {
        return "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/site/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 67,  187 => 65,  184 => 63,  181 => 56,  176 => 54,  173 => 52,  166 => 50,  161 => 48,  156 => 46,  150 => 45,  146 => 44,  140 => 40,  133 => 38,  128 => 36,  123 => 34,  117 => 33,  113 => 32,  108 => 29,  106 => 28,  100 => 27,  95 => 25,  90 => 23,  84 => 22,  80 => 21,  75 => 18,  73 => 17,  67 => 16,  61 => 13,  56 => 11,  50 => 10,  46 => 9,  41 => 6,  39 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
{# Meta Tags #}
{% if blogPost.post %}
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"{{ html_limit(post.summary, 140)|raw }}\">
<meta name=\"title\" content=\"{{ post.title }} - {{ this.theme.theme_site_name }}\">
<meta name=\"author\" content=\"{{ post.user.first_name }}\">
<meta name=\"robots\" content==\"index, follow\">
<meta name=\"generator\" content=\"{{ this.theme.theme_site_name }}\">
<meta name=\"author\" content=\"themefisher.com\">

<title>{{ post.title }} - {{ this.theme.theme_site_name }}</title>
{% elseif this.page.url == '/blog/:page?' %}
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.site_description) }}\">
<meta name=\"title\" content=\"{{ this.page.meta_title|default(this.page.title) }} - {{ this.theme.theme_site_name }}\">
<meta name=\"author\" content=\"{{ this.theme.theme_site_author }}\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"{{ this.theme.theme_site_name }}\">

<title>{{ this.page.meta_title|default(this.page.title) }} - {{ this.theme.theme_site_name }}</title>
{% elseif blogCategories.categories %}
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"{{ html_limit(category.description, 140)|raw }}\">
<meta name=\"title\" content=\"{{ category.name }} - {{ this.theme.theme_site_name }}\">
<meta name=\"author\" content=\"{{ this.theme.theme_site_author }}\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"{{ this.theme.theme_site_name }}\">

<title>{{ category.name }} - {{ this.theme.theme_site_name }}</title>
{% else %}

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.theme_site_description) }}\">
<meta name=\"title\" content=\"{{ this.page.meta_title|default(this.page.title) }} - {{ this.theme.theme_site_name }}\">
<meta name=\"author\" content=\"{{ this.theme.theme_site_author }}\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"{{ this.theme.theme_site_name }}\">

<title>{{ this.page.meta_title|default(this.page.title) }} - {{ this.theme.theme_site_name }}</title>
{% endif %}

{# Favicon #}
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
{# CSS #}
<link href=\"{{ [
  'assets/plugins/bootstrap/css/bootstrap.min.css',
  'assets/plugins/themify/css/themify-icons.css',
  'assets/plugins/fontawesome/css/all.css',
  'assets/plugins/magnific-popup/dist/magnific-popup.css',
  'assets/plugins/slick-carousel/slick/slick.css',
  'assets/plugins/slick-carousel/slick/slick-theme.css'
]|theme }}\" rel=\"stylesheet\">
{# Style SCSS #}
<link href=\"{{ [
  'assets/scss/style.scss'
]|theme }}\" rel=\"stylesheet\">", "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/site/meta.htm", "");
    }
}
