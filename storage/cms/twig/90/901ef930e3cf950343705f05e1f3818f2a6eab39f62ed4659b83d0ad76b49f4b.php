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

/* C:\laragon\www\fa21/themes/fa/partials/site/header.htm */
class __TwigTemplate_a53a9a65dfbb81c530736d8c598bb196bdf8575ff9820d8e2e97d98f6477e431 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Start Header Area -->
<div class=\"header-area\">
    <div class=\"container\">
        <div class=\"header-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-6\">
                    <div class=\"site-logo\">
                        <a href=\"./\">
                            <img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/CFM logo.svg");
        echo "\" alt=\"\">
                        </a>
                        <!-- <h2>BE-ONE</h2>
                        <a data-toggle=\"tooltip\" title=\"Be-one\" href=\"index.html\"></a> -->
                    </div>
                </div>
                <div class=\"col-6 d-lg-none static text-right\">
                    <div class=\"show-mobile-menu\"></div>
                </div>
                <div class=\"col-lg-9 text-right d-none d-lg-block\">
                    <nav class=\"menu-wrapper\">
                        <ul class=\"main-menu\" id=\"mobile-menu\">
                            <li class=\"active\"><a href=\"#\">Home</a></li>
                            <li><a href=\"#feature\">About FA21</a></li>
                            <li><a href=\"#portfolio\">Testimonials</a></li>
                            <li><a href=\"#page\">Schedule</a></li>
                            <li><a href=\"#faq\">FAQ</a></li>
                            <li>
                                <a type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#thankYouModal\">Thank You</a></li>
                            <li class=\"text-left\">
                                    <button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#registerModal\">Register</button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Area -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\fa21/themes/fa/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Start Header Area -->
<div class=\"header-area\">
    <div class=\"container\">
        <div class=\"header-wrapper\">
            <div class=\"row\">
                <div class=\"col-lg-3 col-6\">
                    <div class=\"site-logo\">
                        <a href=\"./\">
                            <img src=\"{{ 'assets/assets/CFM logo.svg' | theme }}\" alt=\"\">
                        </a>
                        <!-- <h2>BE-ONE</h2>
                        <a data-toggle=\"tooltip\" title=\"Be-one\" href=\"index.html\"></a> -->
                    </div>
                </div>
                <div class=\"col-6 d-lg-none static text-right\">
                    <div class=\"show-mobile-menu\"></div>
                </div>
                <div class=\"col-lg-9 text-right d-none d-lg-block\">
                    <nav class=\"menu-wrapper\">
                        <ul class=\"main-menu\" id=\"mobile-menu\">
                            <li class=\"active\"><a href=\"#\">Home</a></li>
                            <li><a href=\"#feature\">About FA21</a></li>
                            <li><a href=\"#portfolio\">Testimonials</a></li>
                            <li><a href=\"#page\">Schedule</a></li>
                            <li><a href=\"#faq\">FAQ</a></li>
                            <li>
                                <a type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#thankYouModal\">Thank You</a></li>
                            <li class=\"text-left\">
                                    <button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#registerModal\">Register</button>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Area -->", "C:\\laragon\\www\\fa21/themes/fa/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
