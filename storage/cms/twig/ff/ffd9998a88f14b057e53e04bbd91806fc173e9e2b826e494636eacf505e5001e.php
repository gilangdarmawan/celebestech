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

/* /Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/site/header.htm */
class __TwigTemplate_0b84ebb9c5febd3d9d688cac3ec9560b82656b1bd4577e3a48d4bd437f9e40e0 extends \Twig\Template
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
        echo "<header class=\"navigation\">
\t<nav class=\"navbar navbar-expand-lg  py-4\" id=\"navbar\">
\t\t<div class=\"container\">
\t\t  <a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
\t\t  \t<img src=\"/themes/mehedi-megakit/assets/images/celebes_tech_logo.png\" alt=\"logo\" >
\t\t  </a>

\t\t  <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample09\" aria-controls=\"navbarsExample09\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"fa fa-bars\"></span>
\t\t  </button>
\t  
\t\t  <div class=\"collapse navbar-collapse text-center\" id=\"navbarsExample09\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t  <li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">About</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">Our company</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pricing");
        echo "\">Pricing</a></li>
\t\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("services");
        echo "\">Services</a></li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Portfolio</a></li>
\t\t\t\t <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog</a></li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-us");
        echo "\">Contact</a></li>
\t\t\t</ul>

\t\t\t<form class=\"form-lg-inline my-2 my-md-0 ml-lg-4 text-center\">
\t\t\t  <a href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact-us");
        echo "\" class=\"btn btn-solid-border btn-round-full\">Get a Quote</a>
\t\t\t</form>
\t\t  </div>
\t\t</div>
\t</nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  84 => 29,  80 => 28,  76 => 27,  72 => 26,  66 => 23,  62 => 22,  54 => 17,  40 => 6,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{##}
{# Header Start #}
<header class=\"navigation\">
\t<nav class=\"navbar navbar-expand-lg  py-4\" id=\"navbar\">
\t\t<div class=\"container\">
\t\t  <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
\t\t  \t<img src=\"/themes/mehedi-megakit/assets/images/celebes_tech_logo.png\" alt=\"logo\" >
\t\t  </a>

\t\t  <button class=\"navbar-toggler collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExample09\" aria-controls=\"navbarsExample09\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"fa fa-bars\"></span>
\t\t  </button>
\t  
\t\t  <div class=\"collapse navbar-collapse text-center\" id=\"navbarsExample09\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t  <li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ 'home'|page }}\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t  </li>
\t\t\t  <li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown03\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">About</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"dropdown03\">
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'about'|page }}\">Our company</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ 'pricing'|page }}\">Pricing</a></li>
\t\t\t\t\t</ul>
\t\t\t  </li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'services'|page }}\">Services</a></li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'portfolio'|page }}\">Portfolio</a></li>
\t\t\t\t <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'blog'|page }}\">Blog</a></li>
\t\t\t   <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ 'contact-us'|page }}\">Contact</a></li>
\t\t\t</ul>

\t\t\t<form class=\"form-lg-inline my-2 my-md-0 ml-lg-4 text-center\">
\t\t\t  <a href=\"{{ 'contact-us'|page }}\" class=\"btn btn-solid-border btn-round-full\">Get a Quote</a>
\t\t\t</form>
\t\t  </div>
\t\t</div>
\t</nav>
</header>
{# Header Close #}", "/Users/altastratus/Documents/Sites/celebestech/themes/mehedi-megakit/partials/site/header.htm", "");
    }
}
