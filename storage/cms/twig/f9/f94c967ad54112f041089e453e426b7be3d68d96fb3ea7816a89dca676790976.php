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
    <meta name=\"description\"
        content=\"Be-one is a clean HTML5/CSS3 template suitable for Business, Corporate, Taxes, Broker, Ad...\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    <!-- Title -->
    <title>FA'21 - ";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 12), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</title>

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/favicon.ico");
        echo "\">


    <!-- CSS Here -->
    <!-- MagnificPopup.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\">
    <!-- SlickNav.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slicknav.min.css");
        echo "\">
    <!-- Owl.carousel.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel-2.3.4.min.css");
        echo "\">
    <!-- Fontawesome.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/fontawesome-free-5.12.0.min.css");
        echo "\">
    <!-- Bootstrap.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap-4.3.1.min.css");
        echo "\">
    <!-- Default.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/default.css");
        echo "\">
    <!-- Style.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
    <!-- Responsive.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/responsive.css");
        echo "\">

    <!-- ColorNip.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/colornip.min.css");
        echo "\">
    <link id=\"theme\" rel=\"stylesheet\" href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme-colors/theme-default.css");
        echo "\">

    <!-- AOS animation -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css\"
        integrity=\"sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==\"
        crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

    <!-- Jquery -->
    <script src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-3.4.1.min.js");
        echo "\"></script>

</head>
<body>

    ";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 52
        echo "
    <!-- Start Footer Area -->
    <footer class=\"footer-area pt-50 pb-60 theme-bg\" id=\"contact-us\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-6 col-sm-12\">
                    <div class=\"footer-widget\">
                        <a href=\"HOME.html\" class=\"text-white\">
                            <img src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/CFM_logo_footer.svg");
        echo "\" alt=\"Christ Family Ministry Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 col-sm-6\">
                    <div class=\"footer-widget\">
                        <div class=\"widget-title\">
                            <h6>About CFM</h6>
                        </div>
                        <div>
                            <p><a class=\"text-white\" href=\"#\">Vision</a></p>
                            <p><a class=\"text-white\" href=\"#\">Mission</a></p>
                            <p><a class=\"text-white\" href=\"#\">Core Values</a></p>
                            <p><a class=\"text-white\" href=\"#\">History</a></p>
                            <p><a class=\"text-white\" href=\"#\">Our Senior Pastors</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6 col-xm-6\">
                    <div class=\"footer-widget\">
                        <div class=\"widget-title\">
                            <h6>Centers</h6>
                        </div>
                        <div>
                            <p><a class=\"text-white\" href=\"#\">Abuja</a></p>
                            <p><a class=\"text-white\" href=\"#\">Gboko</a></p>
                            <p><a class=\"text-white\" href=\"#\">Makurdi</a></p>
                            <p><a class=\"text-white\" href=\"#\">Kaduna</a></p>
                            <p><a class=\"text-white\" href=\"#\">Shagamu</a></p>
                            <p><a class=\"text-white\" href=\"#\">Abidjan</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <div class=\"footer-widget\">
                        <div class=\"widget-title\">
                            <h6>Ministries</h6>
                        </div>
                        <div>
                            <p><a class=\"text-white\" href=\"#\">CFC</a></p>
                            <p><a class=\"text-white\" href=\"#\">Vine life fellowship</a></p>
                            <p><a class=\"text-white\" href=\"#\">WOMOC</a></p>
                            <p><a class=\"text-white\" href=\"#\">NCBI</a></p>
                            <p><a class=\"text-white\" href=\"#\">CFC Music</a></p>
                            <p><a class=\"text-white\" href=\"#\">CFC Kids</a></p>
                            <p><a class=\"text-white\" href=\"#\">Mission</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <div class=\"footer-widget\">
                        <div class=\"widget-title\">
                            <h6>Media Centers</h6>
                        </div>
                        <div>
                            <p><a class=\"text-white\" href=\"#\">Blog</a></p>
                            <p><a class=\"text-white\" href=\"#\">Daily devotional</a></p>
                            <p><a class=\"text-white\" href=\"#\">Sermons</a></p>
                            <p><a class=\"text-white\" href=\"#\">Higher life magazines</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <div class=\"footer-widget\">
                        <div class=\"widget-title\">
                            <h6>Stay Connected</h6>
                        </div>
                        <ul class=\"social-links\">
                            <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a></li>
                            <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>
                            <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-google-plus-g\"></i></a></li>
                            <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                        </ul>
                        <div class=\"newsletter-text\">
                            <p>Subscribe our news letter</p>
                        </div>
                        <form action=\"index.html\" class=\"newsletter-form\">
                            <input type=\"email\" class=\"form-control subscrption-input text-light\"
                                placeholder=\"Your email\">
                            <button class=\"btn btn-subscribe btn-light text-dark mt-1\"><i
                                    class=\"fas fa-arrow-right\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
    <!-- Popper.js -->
    <script src=\"";
        // line 170
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script>
    <!-- Bootstrap.js -->
    <script src=\"";
        // line 172
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap-4.3.1.min.js");
        echo "\"></script>
    <!-- Modernizr.js -->
    <script src=\"";
        // line 174
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/modernizr-3.5.0.min.js");
        echo "\"></script>
    <!-- Owl.Carousel.js -->
    <script src=\"";
        // line 176
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/owl.carousel-2.3.4.min.js");
        echo "\"></script>
    <script src=\"";
        // line 177
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/owl.carousel2.thumbs.min.js");
        echo "\"></script>
    <!-- Waypoints.js -->
    <script src=\"";
        // line 179
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/waypoints-4.0.1.min.js");
        echo "\"></script>
    <!-- ColorNip.js -->
    <script src=\"";
        // line 181
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/colornip.min.js");
        echo "\"></script>
    <!-- SlickNav.js -->
    <script src=\"";
        // line 183
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/slicknav.min.js");
        echo "\"></script>
    <!-- ScrollUp.js -->
    <script src=\"";
        // line 185
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/jquery.scrollUp.min.js");
        echo "\"></script>
    <!-- MagnificPopup.js -->
    <script src=\"";
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/magnific-popup.min.js");
        echo "\"></script>

    <!-- AOS -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js\"
        integrity=\"sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==\"
        crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- Main.js -->
    <script src=\"";
        // line 194
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
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
        return array (  309 => 194,  299 => 187,  294 => 185,  289 => 183,  284 => 181,  279 => 179,  274 => 177,  270 => 176,  265 => 174,  260 => 172,  255 => 170,  142 => 60,  132 => 52,  130 => 51,  122 => 46,  111 => 38,  107 => 37,  101 => 34,  96 => 32,  91 => 30,  86 => 28,  81 => 26,  76 => 24,  71 => 22,  66 => 20,  58 => 15,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\"
        content=\"Be-one is a clean HTML5/CSS3 template suitable for Business, Corporate, Taxes, Broker, Ad...\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">


    <!-- Title -->
    <title>FA'21 - {{ this.page.title }}</title>

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

    <!-- Jquery -->
    <script src=\"{{ 'assets/js/jquery-3.4.1.min.js' | theme }}\"></script>

</head>
<body>

    {% page %}

    <!-- Start Footer Area -->
    <footer class=\"footer-area pt-50 pb-60 theme-bg\" id=\"contact-us\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-6 col-sm-12\">
                    <div class=\"footer-widget\">
                        <a href=\"HOME.html\" class=\"text-white\">
                            <img src=\"{{ 'assets/assets/CFM_logo_footer.svg' | theme }}\" alt=\"Christ Family Ministry Logo\">
                        </a>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6 col-sm-6\">
                    <div class=\"footer-widget\">
                        <div class=\"widget-title\">
                            <h6>About CFM</h6>
                        </div>
                        <div>
                            <p><a class=\"text-white\" href=\"#\">Vision</a></p>
                            <p><a class=\"text-white\" href=\"#\">Mission</a></p>
                            <p><a class=\"text-white\" href=\"#\">Core Values</a></p>
                            <p><a class=\"text-white\" href=\"#\">History</a></p>
                            <p><a class=\"text-white\" href=\"#\">Our Senior Pastors</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 col-sm-6 col-xm-6\">
                    <div class=\"footer-widget\">
                        <div class=\"widget-title\">
                            <h6>Centers</h6>
                        </div>
                        <div>
                            <p><a class=\"text-white\" href=\"#\">Abuja</a></p>
                            <p><a class=\"text-white\" href=\"#\">Gboko</a></p>
                            <p><a class=\"text-white\" href=\"#\">Makurdi</a></p>
                            <p><a class=\"text-white\" href=\"#\">Kaduna</a></p>
                            <p><a class=\"text-white\" href=\"#\">Shagamu</a></p>
                            <p><a class=\"text-white\" href=\"#\">Abidjan</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <div class=\"footer-widget\">
                        <div class=\"widget-title\">
                            <h6>Ministries</h6>
                        </div>
                        <div>
                            <p><a class=\"text-white\" href=\"#\">CFC</a></p>
                            <p><a class=\"text-white\" href=\"#\">Vine life fellowship</a></p>
                            <p><a class=\"text-white\" href=\"#\">WOMOC</a></p>
                            <p><a class=\"text-white\" href=\"#\">NCBI</a></p>
                            <p><a class=\"text-white\" href=\"#\">CFC Music</a></p>
                            <p><a class=\"text-white\" href=\"#\">CFC Kids</a></p>
                            <p><a class=\"text-white\" href=\"#\">Mission</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <div class=\"footer-widget\">
                        <div class=\"widget-title\">
                            <h6>Media Centers</h6>
                        </div>
                        <div>
                            <p><a class=\"text-white\" href=\"#\">Blog</a></p>
                            <p><a class=\"text-white\" href=\"#\">Daily devotional</a></p>
                            <p><a class=\"text-white\" href=\"#\">Sermons</a></p>
                            <p><a class=\"text-white\" href=\"#\">Higher life magazines</a></p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-6\">
                    <div class=\"footer-widget\">
                        <div class=\"widget-title\">
                            <h6>Stay Connected</h6>
                        </div>
                        <ul class=\"social-links\">
                            <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a></li>
                            <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>
                            <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-google-plus-g\"></i></a></li>
                            <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                        </ul>
                        <div class=\"newsletter-text\">
                            <p>Subscribe our news letter</p>
                        </div>
                        <form action=\"index.html\" class=\"newsletter-form\">
                            <input type=\"email\" class=\"form-control subscrption-input text-light\"
                                placeholder=\"Your email\">
                            <button class=\"btn btn-subscribe btn-light text-dark mt-1\"><i
                                    class=\"fas fa-arrow-right\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
</body>
</html>", "C:\\laragon\\www\\fa21/themes/fa/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("page" => 51);
        static $filters = array("escape" => 12, "theme" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['page'],
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
