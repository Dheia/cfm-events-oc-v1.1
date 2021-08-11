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

/* C:\laragon\www\fa21/themes/fa/layouts/default.htm */
class __TwigTemplate_a69a4db036472b40a8dde97c0904393e5ec8000b7831c857bdb028e4cff6bdeb extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Faith Adventure 2021\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    <!-- Title -->
    <title>FA 21 - ";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</title>

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.ico");
        echo "\">


    <!-- CSS Here -->
    <!-- MagnificPopup.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\">
    <!-- SlickNav.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slicknav.min.css");
        echo "\">
    <!-- Owl.carousel.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel-2.3.4.min.css");
        echo "\">
    <!-- Fontawesome.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/fontawesome-free-5.12.0.min.css");
        echo "\">
    <!-- Bootstrap.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap-4.3.1.min.css");
        echo "\">
    <!-- Default.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/default.css");
        echo "\">
    <!-- Style.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
    <!-- Responsive.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\">

    <!-- ColorNip.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/colornip.min.css");
        echo "\">
    <link id=\"theme\" rel=\"stylesheet\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme-colors/theme-default.css");
        echo "\">

    <!-- AOS animation -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css\"
        integrity=\"sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==\"
        crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

    ";
        // line 44
        $context['__placeholder_css_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('css', $context['__placeholder_css_default_contents']);
        unset($context['__placeholder_css_default_contents']);        // line 45
        echo "
    ";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 47
        echo "
</head>
<body>
    ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "
    ";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 53
        echo "
    <!-- Start Footer Area -->
    ";
        // line 55
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 56
        echo "    <!-- End Footer Area -->

    <!-- End Copyright Area -->
    <div class=\"copyright-area theme-bg\">
        <div class=\"container\">
            <div class=\"row \">
                <div class=\"col-12 text-center\">
                    <div class=\"copyright-area \">
                        <p class=\"text-white\">

                            &copy; 2021 Christ Family Ministry |
                            <a class=\"text-white\" href=\"#\">Terms & Conditions</a>
                            | <a class=\"text-white\" href=\"#\">Privacy
                                Statement</a> | <a class=\"text-white\" href=\"#\">Contact Us</a> |
                            <a class=\"text-white\" href=\"#\">Disclaimer</a> | <a class=\"text-white\" href=\"#\">Site Map</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area -->
    <!-- JS -->
    <!-- Jquery.js -->
    <script src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-3.4.1.min.js");
        echo "\"></script>
    <!-- Popper.js -->
    <script src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script>
    <!-- Bootstrap.js -->
    <script src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap-4.3.1.min.js");
        echo "\"></script>
    <!-- Modernizr.js -->
    <script src=\"";
        // line 86
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/modernizr-3.5.0.min.js");
        echo "\"></script>
    <!-- Owl.Carousel.js -->
    <script src=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/owl.carousel-2.3.4.min.js");
        echo "\"></script>
    <script src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/owl.carousel2.thumbs.min.js");
        echo "\"></script>
    <!-- Waypoints.js -->
    <script src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/waypoints-4.0.1.min.js");
        echo "\"></script>
    <!-- ColorNip.js -->
    <script src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/colornip.min.js");
        echo "\"></script>
    <!-- SlickNav.js -->
    <script src=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/slicknav.min.js");
        echo "\"></script>
    <!-- ScrollUp.js -->
    <script src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/jquery.scrollUp.min.js");
        echo "\"></script>
    <!-- MagnificPopup.js -->
    <script src=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/magnific-popup.min.js");
        echo "\"></script>

    <!-- AOS -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js\"
        integrity=\"sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==\"
        crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- Main.js -->
    <script src=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>

    ";
        // line 108
        $context['__placeholder_js_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('js', $context['__placeholder_js_default_contents']);
        unset($context['__placeholder_js_default_contents']);        // line 109
        echo "
    ";
        // line 110
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 111
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 112
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\fa21/themes/fa/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 112,  256 => 111,  245 => 110,  242 => 109,  240 => 108,  235 => 106,  225 => 99,  220 => 97,  215 => 95,  210 => 93,  205 => 91,  200 => 89,  196 => 88,  191 => 86,  186 => 84,  181 => 82,  176 => 80,  150 => 56,  146 => 55,  142 => 53,  140 => 52,  137 => 51,  133 => 50,  128 => 47,  125 => 46,  122 => 45,  120 => 44,  110 => 37,  106 => 36,  100 => 33,  95 => 31,  90 => 29,  85 => 27,  80 => 25,  75 => 23,  70 => 21,  65 => 19,  57 => 14,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Faith Adventure 2021\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    <!-- Title -->
    <title>FA 21 - {{ this.page.title }}</title>

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ 'assets/img/favicon.ico' | theme }}\">


    <!-- CSS Here -->
    <!-- MagnificPopup.css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/magnific-popup.css' | theme }}\">
    <!-- SlickNav.css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/slicknav.min.css' | theme }}\">
    <!-- Owl.carousel.css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.carousel-2.3.4.min.css' | theme }}\">
    <!-- Fontawesome.css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/fontawesome-free-5.12.0.min.css' | theme }}\">
    <!-- Bootstrap.css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap-4.3.1.min.css' | theme }}\">
    <!-- Default.css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/default.css' | theme }}\">
    <!-- Style.css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css' | theme }}\">
    <!-- Responsive.css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/responsive.css' | theme }}\">

    <!-- ColorNip.css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/colornip.min.css' | theme }}\">
    <link id=\"theme\" rel=\"stylesheet\" href=\"{{ 'assets/css/theme-colors/theme-default.css' | theme }}\">

    <!-- AOS animation -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css\"
        integrity=\"sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==\"
        crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

    {% placeholder css %}

    {% styles %}

</head>
<body>
    {% partial 'site/header' %}

    {% page %}

    <!-- Start Footer Area -->
    {% partial 'site/footer' %}
    <!-- End Footer Area -->

    <!-- End Copyright Area -->
    <div class=\"copyright-area theme-bg\">
        <div class=\"container\">
            <div class=\"row \">
                <div class=\"col-12 text-center\">
                    <div class=\"copyright-area \">
                        <p class=\"text-white\">

                            &copy; 2021 Christ Family Ministry |
                            <a class=\"text-white\" href=\"#\">Terms & Conditions</a>
                            | <a class=\"text-white\" href=\"#\">Privacy
                                Statement</a> | <a class=\"text-white\" href=\"#\">Contact Us</a> |
                            <a class=\"text-white\" href=\"#\">Disclaimer</a> | <a class=\"text-white\" href=\"#\">Site Map</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area -->
    <!-- JS -->
    <!-- Jquery.js -->
    <script src=\"{{ 'assets/js/jquery-3.4.1.min.js' | theme }}\"></script>
    <!-- Popper.js -->
    <script src=\"{{ 'assets/js/popper.min.js' | theme }}\"></script>
    <!-- Bootstrap.js -->
    <script src=\"{{ 'assets/js/bootstrap-4.3.1.min.js' | theme }}\"></script>
    <!-- Modernizr.js -->
    <script src=\"{{ 'assets/js/vendor/modernizr-3.5.0.min.js' | theme }}\"></script>
    <!-- Owl.Carousel.js -->
    <script src=\"{{ 'assets/js/vendor/owl.carousel-2.3.4.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/vendor/owl.carousel2.thumbs.min.js' | theme }}\"></script>
    <!-- Waypoints.js -->
    <script src=\"{{ 'assets/js/vendor/waypoints-4.0.1.min.js' | theme }}\"></script>
    <!-- ColorNip.js -->
    <script src=\"{{ 'assets/js/vendor/colornip.min.js' | theme }}\"></script>
    <!-- SlickNav.js -->
    <script src=\"{{ 'assets/js/vendor/slicknav.min.js' | theme }}\"></script>
    <!-- ScrollUp.js -->
    <script src=\"{{ 'assets/js/vendor/jquery.scrollUp.min.js' | theme }}\"></script>
    <!-- MagnificPopup.js -->
    <script src=\"{{ 'assets/js/vendor/magnific-popup.min.js' | theme }}\"></script>

    <!-- AOS -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js\"
        integrity=\"sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==\"
        crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- Main.js -->
    <script src=\"{{ 'assets/js/main.js' | theme }}\"></script>

    {% placeholder js %}

    {% framework extras %}
    {% scripts %}

</body>
</html>", "C:\\laragon\\www\\fa21/themes/fa/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("placeholder" => 44, "styles" => 46, "partial" => 50, "page" => 52, "framework" => 110, "scripts" => 111);
        static $filters = array("escape" => 11, "theme" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['placeholder', 'styles', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
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
