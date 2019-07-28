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

/* /Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/home/slider.htm */
class __TwigTemplate_3a3895dd184707b3d39831d2ede625324ff02c82994d81558f3ff6f5af664aba extends \Twig\Template
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
        // line 3
        echo "<section class=\"slider\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-9 col-md-10\">
\t\t\t\t<div class=\"block\">
\t\t\t\t\t<span class=\"d-block mb-3 text-white text-capitalize\">Prepare for new future</span>
\t\t\t\t\t<h1 class=\"animated fadeInUp mb-5\">Our work is <br>presentation of our <br>capabilities.</h1>
\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"btn btn-main animated fadeInUp btn-round-full\" >Get started<i class=\"btn-icon fa fa-angle-right ml-2\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/home/slider.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Slider Start #}
<section class=\"slider\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-9 col-md-10\">
\t\t\t\t<div class=\"block\">
\t\t\t\t\t<span class=\"d-block mb-3 text-white text-capitalize\">Prepare for new future</span>
\t\t\t\t\t<h1 class=\"animated fadeInUp mb-5\">Our work is <br>presentation of our <br>capabilities.</h1>
\t\t\t\t\t<a href=\"#\" target=\"_blank\" class=\"btn btn-main animated fadeInUp btn-round-full\" >Get started<i class=\"btn-icon fa fa-angle-right ml-2\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{# Slider End #}", "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/home/slider.htm", "");
    }
}
