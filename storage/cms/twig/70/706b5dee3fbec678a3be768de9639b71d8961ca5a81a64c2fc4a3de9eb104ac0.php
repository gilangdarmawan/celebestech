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

/* /Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/layouts/blog-layout.htm */
class __TwigTemplate_10730d2f8a99c8d6afb74ec3cb613f019e6a85a12caccb92cfc712e37b61797a extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "</head>
<body>
";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "<div class=\"main-wrapper\">";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/blogintroheader"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "</div>";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/layouts/blog-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  66 => 16,  64 => 14,  60 => 13,  58 => 12,  54 => 11,  52 => 10,  48 => 9,  44 => 6,  40 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<!doctype html>
<html lang=\"en\">
<head>
{% partial 'site/meta' %}
</head>
<body>
{# Header with TopBar #}
{% partial 'site/header' %}
<div class=\"main-wrapper\">{# Main Wrapper #}
{% partial 'site/blogintroheader' %}
{% page %}
{% partial 'site/footer' %}
</div>{# End Main Wrapper #}
{# JavaScripts #}
{% partial 'site/scripts' %}
</body>
</html>", "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/layouts/blog-layout.htm", "");
    }
}
