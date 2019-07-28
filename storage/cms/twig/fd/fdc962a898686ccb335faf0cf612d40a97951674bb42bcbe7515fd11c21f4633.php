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

/* /Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/home/about.htm */
class __TwigTemplate_0fe0a48d0359e248d8aca69f2c07dd9c901812928153eeb17701939248faf915 extends \Twig\Template
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
        echo "<section class=\"section about position-relative\">
\t<div class=\"bg-about\"></div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 offset-lg-6 offset-md-0\">
\t\t\t\t<div class=\"about-item \">
\t\t\t\t\t<span class=\"h6 text-color\">What we are</span>
\t\t\t\t\t<h2 class=\"mt-3 mb-4 position-relative content-title\">We are dynamic team of creative people</h2>
\t\t\t\t\t<div class=\"about-content\">
                        <p>Celebes tech solves our clients’ toughest challenges by providing unmatched services in strategy consulting, digital, technology and solution. We drive innovation to improve the way the world works & lives.</p>
                        <p class=\"mb-5\">With our expertise across all major industries, we deliver transformational outcomes for a demanding new digital world.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/home/about.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Section About Start #}
<section class=\"section about position-relative\">
\t<div class=\"bg-about\"></div>
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 offset-lg-6 offset-md-0\">
\t\t\t\t<div class=\"about-item \">
\t\t\t\t\t<span class=\"h6 text-color\">What we are</span>
\t\t\t\t\t<h2 class=\"mt-3 mb-4 position-relative content-title\">We are dynamic team of creative people</h2>
\t\t\t\t\t<div class=\"about-content\">
                        <p>Celebes tech solves our clients’ toughest challenges by providing unmatched services in strategy consulting, digital, technology and solution. We drive innovation to improve the way the world works & lives.</p>
                        <p class=\"mb-5\">With our expertise across all major industries, we deliver transformational outcomes for a demanding new digital world.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{# Section About End #}", "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/home/about.htm", "");
    }
}
