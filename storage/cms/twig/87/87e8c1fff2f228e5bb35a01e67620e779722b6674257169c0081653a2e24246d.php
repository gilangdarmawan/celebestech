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

/* /Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/home/cta.htm */
class __TwigTemplate_20c0eee029ba331e5cc634861c8a86d2a9280de9acad63b1ccc9bc44a05c374e extends \Twig\Template
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
        echo "<section class=\"section cta\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<div class=\"cta-item  bg-white p-5 rounded\">
\t\t\t\t\t<span class=\"h6 text-color\">We create for you</span>
\t\t\t\t\t<h2 class=\"mt-2 mb-4\">Entrust Your Project to Our Best Team of Professionals</h2>
\t\t\t\t\t<p class=\"lead mb-4\">Have any project on mind? For immidiate support :</p>
\t\t\t\t\t<h3><i class=\"ti-mobile mr-3 text-color\"></i>+23 876 65 455</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/home/cta.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Section CTA Start #}
<section class=\"section cta\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<div class=\"cta-item  bg-white p-5 rounded\">
\t\t\t\t\t<span class=\"h6 text-color\">We create for you</span>
\t\t\t\t\t<h2 class=\"mt-2 mb-4\">Entrust Your Project to Our Best Team of Professionals</h2>
\t\t\t\t\t<p class=\"lead mb-4\">Have any project on mind? For immidiate support :</p>
\t\t\t\t\t<h3><i class=\"ti-mobile mr-3 text-color\"></i>+23 876 65 455</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{# Section CTA End #}", "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/home/cta.htm", "");
    }
}
