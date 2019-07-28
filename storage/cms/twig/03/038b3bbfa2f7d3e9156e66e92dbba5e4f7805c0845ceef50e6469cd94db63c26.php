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

/* /Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/site/footer.htm */
class __TwigTemplate_0387793a4b882653da116fff86d306a3a0ca17d384f31522afacbd400b6dfbe1 extends \Twig\Template
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
        echo "<footer class=\"footer section\">
\t<div class=\"container\">
\t\t<div class=\"footer-btm pt-4\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Celebes Tech</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 text-left text-lg-right\">
\t\t\t\t\t<ul class=\"list-inline footer-socials\">
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"ti-headphone-alt mr-2\"></i>+62 812 3456 7890</a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"ti-email mr-2\"></i>support@celebestech.com</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Footer Start #}
<footer class=\"footer section\">
\t<div class=\"container\">
\t\t<div class=\"footer-btm pt-4\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; {{ \"now\"|date(\"Y\") }} Celebes Tech</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 text-left text-lg-right\">
\t\t\t\t\t<ul class=\"list-inline footer-socials\">
                        <li class=\"list-inline-item\"><a href=\"#\"><i class=\"ti-headphone-alt mr-2\"></i>+62 812 3456 7890</a></li>
\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\"><i class=\"ti-email mr-2\"></i>support@celebestech.com</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
{# Footer Close #}", "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/site/footer.htm", "");
    }
}
