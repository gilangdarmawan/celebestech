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

/* /Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/layouts/cms-layout.htm */
class __TwigTemplate_fc63971f1188c480e3129dada13b1c56816952ad001fdc89d1a019f05da29dff extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "</head>

<body>
";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "<div class=\"main-wrapper\">";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "</div>";
        // line 15
        echo "
";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/layouts/cms-layout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  66 => 17,  63 => 15,  61 => 14,  57 => 13,  55 => 12,  53 => 11,  49 => 10,  44 => 6,  40 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
<!doctype html>
<html lang=\"en\">
<head>
{% partial 'site/meta.htm' %}
</head>

<body>
{# Header with TopBar #}
{% partial 'site/header.htm' %}
<div class=\"main-wrapper\">{# Main Wrapper #}
{% page %}
{% partial 'site/footer.htm' %}
</div>{# End Main Wrapper #}

{# JavaScripts #}
{% partial 'site/scripts.htm' %}
</body>
</html>", "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/layouts/cms-layout.htm", "");
    }
}
