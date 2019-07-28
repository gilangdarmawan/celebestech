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

/* /Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/pages/home.htm */
class __TwigTemplate_c0e1a4796daaae9f1cd2d05f8ced0ac8aa6dd9a98523641f934c94ad104368d8 extends \Twig\Template
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
        // line 1
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<!-- ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/intro"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " -->
";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "<!-- ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/counter"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " -->
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "<!-- ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/cta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " -->
";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/contacthome"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  61 => 6,  57 => 5,  50 => 4,  46 => 3,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'home/slider' %}
<!-- {% partial 'home/intro' %} -->
{% partial 'home/about' %}
<!-- {% partial 'home/counter' %} -->
{% partial 'home/services' %}
<!-- {% partial 'home/cta' %} -->
{% partial 'home/contacthome' %}", "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/pages/home.htm", "");
    }
}
