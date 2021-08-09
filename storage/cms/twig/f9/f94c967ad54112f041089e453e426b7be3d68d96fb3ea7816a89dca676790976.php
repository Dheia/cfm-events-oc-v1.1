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
    <title>FA21 - ";
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


    <!-- <div class=\"search-overlay\"></div> -->
    <!-- Modal -->
    <div class=\"modal pt-100 fade bd-example-modal-xl\" tabindex=\"-1\" role=\"dialog\" id=\"registerModal\"
        aria-labelledby=\"registerModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"text-center modal-icon\">
                    <img src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/fa_reg_top.svg");
        echo "\" class=\"img-responsive\" alt=\"\">
                </div>
                <div class=\"d-flex mx-auto\">
                    <hr class=\"my-auto horizontal-line-modal\">
                    <h3 class=\"theme-color-text register-text-h2 mt-3 mx-3\" style=\"font-size: 32px !important;\">
                        Register </h3>
                    <hr class=\"my-auto horizontal-line-modal\">
                </div>

                <div class=\"modal-body\">
                    <form>
                        <div class=\"form-row\">
                            <div class=\"col-lg-6 col-sm-12 col-md-6\">
                                <label for=\"title\">Title</label>
                                <select id=\"title\" class=\"form-control form-control-lg\">
                                    <option selected></option>
                                    <option value=\"\">Mr</option>
                                    <option value=\"\">Mrs</option>
                                </select>
                            </div>
                            <div class=\"col-lg-6 col-sm-12 col-md-6\">
                                <label for=\"name\">Name</label>
                                <input type=\"text\" class=\"form-control form-control-lg\">
                            </div>

                            <div class=\"col-lg-6 col-sm-12 pt-50\">
                                <label>Gender</label>
                                <div class=\"d-flex\">
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"male\"
                                                value=\"Male\" checked>
                                            <label class=\"form-check-label ml-2\" for=\"male\">
                                                Male
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"female\"
                                                value=\"Female\">
                                            <label class=\"form-check-label ml-2\" for=\"female\">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 pt-50\">
                                <label for=\"title\">Marital Status</label>
                                <select id=\"title\" class=\"form-control form-control-lg\">
                                    <option selected></option>
                                    <option value=\"\">Single</option>
                                    <option value=\"\">Married</option>
                                    <option value=\"\">Divorced</option>
                                </select>
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label for=\"title\">Location</label>
                                <select id=\"title\" class=\"form-control form-control-lg\">
                                    <option selected></option>
                                    <option value=\"\">Abuja</option>
                                    <option value=\"\">Abidjan</option>
                                    <option value=\"\">Kaduna</option>
                                </select>
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label>ARE YOU A PARTNER?</label>
                                <div class=\"d-flex\">
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"partner\" id=\"yes\"
                                                value=\"Yes\" checked>
                                            <label class=\"form-check-label ml-2\" for=\"yes\">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"partner\" id=\"no\"
                                                value=\"No\">
                                            <label class=\"form-check-label ml-2\" for=\"no\">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label>DO YOU REQUIRE ACCOMMODATION
                                    DURING THIS EVENT?</label>
                                <div class=\"d-flex\">
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"accomodation\"
                                                id=\"acor_yes\" value=\"Yes\" checked>
                                            <label class=\"form-check-label ml-2\" for=\"acor_yes\">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"accomodation\"
                                                id=\"acor_no\" value=\"No\">
                                            <label class=\"form-check-label ml-2\" for=\"acor_no\">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label>DO YOU REQUIRE FEEDING DURING THIS EVENT?</label>
                                <div class=\"d-flex\">
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"feeding\" id=\"feeding_yes\"
                                                value=\"Yes\" checked>
                                            <label class=\"form-check-label ml-2\" for=\"feeding_yes\">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"feeding\" id=\"feeding_no\"
                                                value=\"No\">
                                            <label class=\"form-check-label ml-2\" for=\"feeding_no\">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label>DO YOU REQUIRE TRANSPORTATION DURING THIS EVENT?</label>
                                <div class=\"d-flex\">
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"transportation\"
                                                id=\"transportation_yes\" value=\"Yes\" checked>
                                            <label class=\"form-check-label ml-2\" for=\"transportation_yes\">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"transportation\"
                                                id=\"transportation_no\" value=\"No\">
                                            <label class=\"form-check-label ml-2\" for=\"transportation_no\">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label>WILL YOU BE ATTENDING ONSITE OR ONLINE?</label>
                                <div class=\"d-flex\">
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_yes\"
                                                value=\"Yes\" checked>
                                            <label class=\"form-check-label ml-2\" for=\"mode_yes\">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_no\"
                                                value=\"No\">
                                            <label class=\"form-check-label ml-2\" for=\"mode_no\">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label>DATE OF ARRIVAL?</label>
                                <input type=\"date\" class=\"form-control form-control-lg\">
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label>DATE OF DEPARTURE?</label>
                                <input type=\"date\" class=\"form-control form-control-lg\">
                            </div>
                        </div>

                        <div class=\"text-center pt-100 pb-20\">
                            <input class=\"btn btn-lg btn-danger text-white register-btn\" value=\"Submit\">
                        </div>

                        <div class=\"text-center pt-20 pb-50\">
                            <p class=\"text-muted\">Register your kids <a class=\"theme-color-text\" href=\"#\">here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal pt-100 fade bd-example-modal-xl\" tabindex=\"-1\" role=\"dialog\" id=\"thankYouModal\"
        aria-labelledby=\"thankYouModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"text-center modal-icon\">
                    <img src=\"./assets/assets/fa_reg_top.svg\" class=\"img-responsive\" alt=\"\">
                </div>
                <div class=\"mx-auto\">
                    <h3 class=\"theme-color-text thankyou-text-h2 mx-3\">
                        Thank You</h3>
                    <p class=\"thankyou-text-p text-center\">for registering</p>
                </div>
                <div class=\"modal-body\">
                    <div class=\"text-center\">
                        <img src=\"./assets/assets/thank_you.svg\" class=\"img-responsive w-50 h-50\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Header Area -->
    <div class=\"header-area\">
        <div class=\"container\">
            <div class=\"header-wrapper\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-6\">
                        <div class=\"site-logo\">
                            <a href=\"./\">
                                <img src=\"";
        // line 313
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
                                    <button class=\"btn btn-danger\" data-toggle=\"modal\"
                                        data-target=\"#registerModal\">Register</button>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Area -->
    <!-- Start Slider Area -->
    <div class=\"slider-area \">
        <div class=\"container-fluid p-0\">
            <div class=\"row no-gutters\">
                <div class=\"col-12\">
                    <div class=\"slider-carousel owl-carousel\">
                        <div class=\"single-slider slider-bg-1 text-center\">
                            <div class=\"slider-inner\">
                                <div class=\"mx-auto w-75\">
                                    <h1 class=\"text-white text-center font-weight-bold\">Join
                                        the gathering of
                                        thousands of believers
                                        at the 21st Faith Adventure </h1>
                                </div>
                                <a class=\"btn btn-danger text-center pt-70\"
                                    style=\"height: 60px !important; width: 223px; font-size: 28px !important;\"
                                    href=\"javascript:void(0)\" data-toggle=\"modal\"
                                    data-target=\"#registerModal\">Register</a>
                            </div>
                        </div>
                        <div class=\"single-slider slider-bg-2 text-center\">
                            <div class=\"slider-inner\">
                                <div>
                                    <img src=\"";
        // line 367
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/event.svg");
        echo "\" class=\"img-responsive\" width=\"300px\"
                                        height=\"200px\" alt=\"\">
                                </div>
                                <a class=\"btn search-trigger btn-danger text-center mt-50\"
                                    style=\"height: 60px !important; width: 223px; font-size: 28px !important;\"
                                    href=\"javascript:void(0)\" data-toggle=\"modal\"
                                    data-target=\"#registerModal\">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- Start About -->
    <div class=\"about_resource\" id=\"feature\">
        <div class=\"container-fluid about_resource_wrapper\">
            <div class=\"container pt-50 pb-100\">
                <div class=\"row\">
                    <div class=\"col-lg-7\">
                        <div class=\"mt-50\">
                            <div class=\"w-25\" style=\"border-top: #4053A4 8px solid !important\"></div>
                            <h2 style=\"font-size: 60px;\" class=\"text-color-theme pt-20\">ABOUT FAITH ADVENTURE</h2>
                            <p class=\"lead\">Faith Adventure is an annual conference by CFCIC bringing together believers
                                from all over
                                the world to the ancient city of Gboko for a week filled with an adventure of faith.
                                It started twenty one years ago with a few attendees and has grown to thousands of
                                people
                                attending early on-site and off-site.
                                People have come from in and out of Nigeria who have been nightly blessed and impacted
                                by
                                the word, worship and warm fellowship they received.
                                It's a week of the Spirit filled with love, joy, power, anointing, fellowship,
                                revelation,
                                joy, laughter, celebration, prayer, worship, shouts of joy and so much more...
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-5\">
                        <img src=\"";
        // line 408
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/hero images.png");
        echo "\" class=\"img-responsive w-100\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
    <!-- Start Features -->
    <div class=\"resources\">
        <div class=\"container-fluid resource_wrapper\">
            <div class=\"container\">
                <div class=\"row\" data-aos=\"fade-down\" data-aos-duration=\"500\">
                    <div class=\"col-lg-12 mb-70 mt-50\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
                        <div style=\"border-top: #627BE5 5px solid !important; width: 100px;\"></div>
                        <h3 style=\"font-size: 60px;\" class=\"text-white mt-10\">FEATURES</h3>
                    </div>
                    <div class=\"col-lg-12 col-md-6 col-sm-12\" data-aos=\"fade-up\" data-aos-duration=\"1500\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <h4 class=\"display-5 text-white\">01</h4>
                                <div style=\"border-left: #627BE5 3px solid !important;\">
                                    <h4 class=\"p-3 text-white\">WORD</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"features-card\" style=\"background: #627BE5;\">
                                    <div class=\"features-card-flex\">
                                        <div class=\"\">
                                            <div class=\"p-3\">
                                                <img src=\"";
        // line 437
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/word.png");
        echo "\"
                                                    class=\"img-responsive features-img rounded-circle\" alt=\"\">
                                            </div>
                                        </div>
                                        <div class=\"p-2\">
                                            <p class=\"features-text\">Enjoy simple, practical and time tested
                                                truth that
                                                will be shared by ministers with decades of experience and powerful
                                                anointing.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-12 mt-5 col-md-6\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <h4 class=\"display-5 text-white\">02</h4>
                                <div style=\"border-left: #627BE5 3px solid !important;\">
                                    <h4 class=\"p-3 text-white\">WORSHIP</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"features-card\" style=\"background: #627BE5;\">
                                    <div class=\"features-card-flex\">
                                        <div class=\"\">
                                            <div class=\"p-3\">
                                                <img src=\"";
        // line 467
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/worship.png");
        echo "\"
                                                    class=\"img-responsive features-img rounded-circle\" alt=\"\">
                                            </div>
                                        </div>
                                        <div class=\"p-2\">
                                            <p class=\"features-text\">Join us as we give God our heartfelt
                                                worship and
                                                resounding
                                                praise together lead by anointed ministers of the gospel in music
                                                burdened
                                                to make FA21 a phenomenon.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-12 mt-5 col-md-6\" data-aos=\"fade-up\" data-aos-duration=\"2500\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <h4 class=\"display-5 text-white\">03</h4>
                                <div style=\"border-left: #627BE5 3px solid !important;\">
                                    <h4 class=\"p-3 text-white\">FELLOWSHIP</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"features-card\" style=\"background: #627BE5;\">
                                    <div class=\"features-card-flex\">
                                        <div class=\"\">
                                            <div class=\"p-3\">
                                                <img src=\"";
        // line 499
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/fellowship.png");
        echo "\"
                                                    class=\"img-responsive features-img rounded-circle\" alt=\"\">
                                            </div>
                                        </div>
                                        <div class=\"p-2\">
                                            <p class=\"features-text\">
                                                A great way to build relationships with people while growing
                                                in your walk with God, you don’t have to do life alone.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-12 mt-5 col-md-6\" data-aos=\"fade-up\" data-aos-duration=\"3000\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <h4 class=\"display-5 text-white\">04</h4>
                                <div style=\"border-left: #627BE5 3px solid !important;\">
                                    <h4 class=\"p-3 text-white\">HEALING & MIRACLE</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"features-card\" style=\"background: #627BE5;\">
                                    <div class=\"features-card-flex\">
                                        <div class=\"\">
                                            <div class=\"p-3\">
                                                <img src=\"";
        // line 528
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/healing_miracle.png");
        echo "\"
                                                    class=\"img-responsive features-img rounded-circle\" alt=\"\">
                                            </div>
                                        </div>
                                        <div class=\"p-2\">
                                            <p class=\"features-text\">
                                                God is still in the business,
                                                FA21 will be charged with God’s ever consuming power to heal and
                                                deliver,
                                                you won’t only be a witness but also a recipient.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=\"col-lg-12 mt-5 col-md-6\" data-aos=\"fade-up\" data-aos-duration=\"3500\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <h4 class=\"display-5 text-white\">05</h4>
                                <div style=\"border-left: #627BE5 3px solid !important;\">
                                    <h4 class=\"p-3 text-white\">THE SOUND WORSHIP CONCERT</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"features-card\" style=\"background: #627BE5;\">
                                    <div class=\"features-card-flex\">
                                        <div class=\"\">
                                            <div class=\"p-3\">
                                                <img src=\"";
        // line 560
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/the_sound.png");
        echo "\"
                                                    class=\"img-responsive features-img rounded-circle\" alt=\"\">
                                            </div>
                                        </div>
                                        <div class=\"p-2\">
                                            <p class=\"features-text\">
                                                With the gifted Voice of Creation and other music ministers will be full
                                                of soul inspiring renditions you don’t want to miss.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-12 mt-5 col-md-6\" data-aos=\"fade-up\" data-aos-duration=\"4000\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <h4 class=\"display-5 text-white\">06</h4>
                                <div style=\"border-left: #627BE5 3px solid !important;\">
                                    <h4 class=\"p-3 text-white\">STRATEGY WORKSHOPS</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"features-card\" style=\"background: #627BE5;\">
                                    <div class=\"features-card-flex\">
                                        <div class=\"p-3\">
                                            <img src=\"";
        // line 588
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/strategy.png");
        echo "\"
                                                class=\"img-responsive features-img rounded-circle\" alt=\"\">
                                        </div>
                                        <div class=\"p-2\">
                                            <p class=\"features-text\">
                                                Learn how you fit into God's agenda and the spread of the gospel in this
                                                season.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-12 mt-5 col-md-6\" data-aos=\"fade-up\" data-aos-duration=\"4500\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <h4 class=\"display-5 text-white\">07</h4>
                                <div style=\"border-left: #627BE5 3px solid !important;\">
                                    <h4 class=\"p-3 text-white\">HOLY GHOST MEETINGS</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"features-card\" style=\"background: #627BE5;\">
                                    <div class=\"features-card-flex\">
                                        <div class=\"p-3\">
                                            <img src=\"";
        // line 615
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/strategy.png");
        echo "\"
                                                class=\"img-responsive features-img rounded-circle\" alt=\"\">
                                        </div>
                                        <div class=\"p-2\">
                                            <p class=\"features-text\">
                                                Encounter the mighty presence of the Holy Spirit, look forward to
                                                a life changing encounter where burdens will be lifted,
                                                chains broken and the be filled with transcending peace of the Holy
                                                Spirit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12 mb-10 mt-70\" data-aos=\"fade-up\" data-aos-duration=\"1200\">
                        <div class=\"ml-auto\" style=\"border-top: #627BE5 8px solid !important; width: 100px;\"></div>
                        <h4 class=\"text-white ml-auto pt-2 w-50 text-right display-4\">MINISTERING IN WORD</h4>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-10 col-sm-12\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-sm-12\">
                                <div class=\"ministers-card\">
                                    <div class=\"ministers-icon text-center\">
                                        <img src=\"";
        // line 644
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/Ellipse 22.svg");
        echo "\" class=\"img-responsive ministers-image\"
                                            alt=\"\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 col-sm-12 mt-lg-5\">
                                <div class=\"ministers-card\">
                                    <div class=\"ministers-icon text-center\">
                                        <img src=\"";
        // line 653
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/Ellipse 22.svg");
        echo "\" class=\"img-responsive ministers-image\"
                                            alt=\"\">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-lg-6 col-sm-12\">
                                <div class=\"ministers-card\">
                                    <div class=\"ministers-icon text-center\">
                                        <img src=\"";
        // line 664
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/Ellipse 22.svg");
        echo "\" class=\"img-responsive ministers-image\"
                                            alt=\"\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 col-sm-12 mt-lg-5\">
                                <div class=\"ministers-card\">
                                    <div class=\"ministers-icon text-center\">
                                        <img src=\"";
        // line 673
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/Ellipse 22.svg");
        echo "\" class=\"img-responsive ministers-image\"
                                            alt=\"\">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row pb-150\">
                            <div class=\"col-lg-6 col-sm-12\">
                                <div class=\"ministers-card\">
                                    <div class=\"ministers-icon text-center\">
                                        <img src=\"";
        // line 684
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/Ellipse 22.svg");
        echo "\" class=\"img-responsive ministers-image\"
                                            alt=\"\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 col-sm-12 mt-lg-5\">
                                <div class=\"ministers-card\">
                                    <div class=\"ministers-icon text-center\">
                                        <img src=\"";
        // line 693
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/Ellipse 22.svg");
        echo "\" class=\"img-responsive ministers-image\"
                                            alt=\"\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2\"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->
    <!-- Start Testimonails Area -->
    <div class=\"testimonial_resourse mb-100\">
        <div class=\"container-flud testimonial_resourse_wrapper\">
            <div class=\"testimonial-container mx-auto\">
                <div class=\"testimonial-bg-blue\">
                    <img src=\"";
        // line 711
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/quote-left.svg");
        echo "\" class=\"img-responsive testimonial_quote_icon left\" alt=\"\">
                    <div class=\"testimonial-top-group\">
                        <h3 class=\"text-white testimonial-bg-text-large\">Testimonial</h3>
                        <p class=\"testimonial-bg-text text-white\">What previous attendees have experienced</p>
                    </div>
                    <img src=\"";
        // line 716
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/quote-right.svg");
        echo "\" class=\"img-responsive testimonial_quote_icon right\"
                        alt=\"\">
                </div>
                <div class=\"\">
                    <div class=\"\">
                        <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                    <p class=\"testimonial-text\">
                                        Good Morning Sir<br>
                                        Thank you sir for the labour Room on Friday, I was truly blessed!
                                        I had severe back and chest pains on Friday. During the labor room, while
                                        praying, I
                                        kept
                                        stretching as I couldn't pace for long.
                                        You gave a word concerning healing from a back pain and I received it! I
                                        slept
                                        and
                                        woke up
                                        sweating but with no pain, continued with activities for the day, then I
                                        remembered
                                        the
                                        prophecy.
                                        I am fine and I feel better than I've felt in days!
                                        God forever be praised
                                        Thank you sir.
                                        Sis S.I
                                    </p>
                                </div>
                                <div class=\"carousel-item\">
                                    <p class=\"testimonial-text\">
                                        Good Morning Sir<br>
                                        Thank you sir for the labour Room on Friday, I was truly blessed!
                                        I had severe back and chest pains on Friday. During the labor room, while
                                        praying, I
                                        kept
                                        stretching as I couldn't pace for long.
                                        You gave a word concerning healing from a back pain and I received it! I
                                        slept
                                        and
                                        woke up
                                        sweating but with no pain, continued with activities for the day, then I
                                        remembered
                                        the
                                        prophecy.
                                        I am fine and I feel better than I've felt in days!
                                        God forever be praised
                                        Thank you sir.
                                        Sis S.I
                                    </p>
                                </div>
                                <div class=\"carousel-item\">
                                    <p class=\"testimonial-text\">
                                        Good Morning Sir<br>
                                        Thank you sir for the labour Room on Friday, I was truly blessed!
                                        I had severe back and chest pains on Friday. During the labor room, while
                                        praying, I
                                        kept
                                        stretching as I couldn't pace for long.
                                        You gave a word concerning healing from a back pain and I received it! I
                                        slept
                                        and
                                        woke up
                                        sweating but with no pain, continued with activities for the day, then I
                                        remembered
                                        the
                                        prophecy.
                                        I am fine and I feel better than I've felt in days!
                                        God forever be praised
                                        Thank you sir.
                                        Sis S.I
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-4\"></div>
                            <div class=\"col-lg-4\"></div>
                            <div class=\"col-lg-4\">
                                <div class=\"ml-auto testimonial-button-group\">
                                    <a role=\"button\"
                                        class=\"btn theme-bg testimonial-button btn-left text-light rounded-circle\"
                                        href=\"#carouselExampleControls\" data-slide=\"prev\"><i
                                            class=\"text-center fa fa-chevron-left\"></i></a>

                                    <a role=\"button\"
                                        class=\"btn btn-sm theme-bg testimonial-button btn-right text-light rounded-circle\"
                                        href=\"#carouselExampleControls\" data-slide=\"next\"><i
                                            class=\"text-center fa fa-chevron-right\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Latest Project Area -->
    <!-- FAQS -->
    <div class=\"faq_resource\" id=\"faq\">
        <div class=\"container-fluid pb-70 faq_resource_wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 \">
                        <div class=\"col-lg-12 text-center mt-20\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
                            <hr class=\"mx-auto horizontal-line\">
                            <h4 id=\"faq\" class=\"text-center font-weight-bold  theme-color-text\">
                                FAQS</h4>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"accordion\" id=\"accordionExample\">
                            <div class=\"card faq-card text-dark\">
                                <div class=\"card-header\" id=\"headingOne\">
                                    <div class=\"faq-card_text-h2\" data-toggle=\"collapse\" data-target=\"#collapseOne\"
                                        aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                        1. What group of people is FA for?
                                    </div>
                                </div>

                                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            Faith Adventure is for one and all. Everyone is welcome to partake in this
                                            life-changing experience.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingTwo\">
                                    <div class=\"faq-card_text-h2\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
                                        aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                        2. Where and when will this year’s FA hold?
                                    </div>
                                </div>
                                <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            FA’21 will take place from the 12th-19th of September, 2021 at the Theatre
                                            of
                                            Faith,
                                            Christ Family Centre, Gboko in Benue State, Nigeria.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingThree\">
                                    <div class=\"faq-card_text-h2 mb-0\" type=\"button\" data-toggle=\"collapse\"
                                        data-target=\"#collapseThree\" aria-expanded=\"false\"
                                        aria-controls=\"collapseThree\">
                                        3. How do I get to the venue of the programme?
                                    </div>
                                </div>
                                <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            The Theatre of Faith is located in Gboko, Benue State. Gboko is a few hours
                                            drive
                                            from Makurdi, the capital of Benue State. The Church is behind Gboko Hills,
                                            Off
                                            Ring
                                            Road, GRA, Gboko, Benue State. You can also locate the address on Google
                                            Maps
                                            for
                                            further clarification.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card faq-card mt-2\">
                                <div class=\"card-header\" id=\"headingFour\">
                                    <div class=\"faq-card_text-h2 mb-0\" data-toggle=\"collapse\"
                                        data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                        4. Is FA a paid or a free programme?
                                    </div>
                                </div>
                                <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            Faith Adventure is absolutely FREE! Feel free to invite as many people as
                                            you
                                            would
                                            like.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingFive\">
                                    <div class=\"faq-card_text-h2 mb-0\" data-toggle=\"collapse\"
                                        data-target=\"#collapseFive\" aria-expanded=\"false\" aria-controls=\"collapseFive\">
                                        5. What is accommodation like for people who have never visited Gboko?
                                    </div>
                                </div>
                                <div id=\"collapseFive\" class=\"collapse\" aria-labelledby=\"headingFive\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            There are discounted hotels available for attendees. Visit the registration
                                            link
                                            to
                                            view rates or call *insert accomodation personnel contact*
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingSix\">
                                    <div class=\"faq-card_text-h2 mb-0\" data-toggle=\"collapse\" data-target=\"#collapseSix\"
                                        aria-expanded=\"false\" aria-controls=\"collapseSix\">
                                        6. How many sessions are there each day?
                                    </div>
                                </div>
                                <div id=\"collapseSix\" class=\"collapse\" aria-labelledby=\"headingSix\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            There are two sessions daily, with the exception of the final day of the
                                            conference
                                            which is usually just the morning session. There are also strategy sessions
                                            right
                                            before the start of the evening sessions on certain days during the week.
                                            You
                                            are
                                            advised to make time to join in those as well as it will be an enlightening
                                            time
                                            and
                                            an extremely educating session you wouldn’t want to miss.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingSix\">
                                    <div class=\"faq-card_text-h2 mb-0\" data-toggle=\"collapse\"
                                        data-target=\"#collapseSeven\" aria-expanded=\"false\"
                                        aria-controls=\"collapseSeven\">
                                        7. How can I stay updated on CFCIC events and messages all year round?
                                    </div>
                                </div>
                                <div id=\"collapseSeven\" class=\"collapse\" aria-labelledby=\"headingSeven\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            You can follow us on any of our on Facebook, Youtube, and Instagram
                                            (@christfamilyministry) on Twitter (@ChristFMins). You could also visit our
                                            website
                                            (christfamilyministries.org) for the latest information in the Ministry.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingEight\">
                                    <div class=\"faq-card_text-h2 mb-0\" data-toggle=\"collapse\"
                                        data-target=\"#collapseEight\" aria-expanded=\"false\"
                                        aria-controls=\"collapseEight\">
                                        8. How do I partner/give to Faith Adventure?
                                    </div>
                                </div>
                                <div id=\"collapseEight\" class=\"collapse\" aria-labelledby=\"headingEight\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            You can give towards the meeting by sowing your desired seed to the account
                                            number
                                            below:
                                            Christ Family Ministry
                                            1017235346
                                            Zenith Bank.

                                            Insert DOM account details
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingNine\">
                                    <div class=\"faq-card_text-h2 mb-0\" data-toggle=\"collapse\"
                                        data-target=\"#collapseNine\" aria-expanded=\"false\" aria-controls=\"collapseNine\">
                                        9. Are livestream options available?
                                    </div>
                                </div>
                                <div id=\"collapseNine\" class=\"collapse\" aria-labelledby=\"headingNine\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            We encourage you to gather with fellow believers and be present physically
                                            at
                                            the
                                            conference. If however, you are unable to travel down to Gboko, you can
                                            stream
                                            live
                                            through Mixlr on mixlr.com/cfm-live and through YouTube on
                                            youtube.com/christfamilyministry.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingTen\">
                                    <div class=\"faq-card_text-h2 mb-0\" data-toggle=\"collapse\" data-target=\"#collapseTen\"
                                        aria-expanded=\"false\" aria-controls=\"collapseTen\">
                                        10. Who do I call if I need more information?
                                    </div>
                                </div>
                                <div id=\"collapseTen\" class=\"collapse\" aria-labelledby=\"headingTen\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            If you need to contact us for more information on the conference or any
                                            other
                                            thing
                                            you wish to inquire about the ministry, you can reach us on
                                            media@christfamilyministries.org or send an SMS to *insert number here*
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us Area -->
    <!-- Start Working With Us Area -->
    <div class=\"testimonial_2_resource\">
        <div class=\"container-fluid testimonial_2_resourse_wrapper\">
            <div class=\"container theme-color-text\">
                <h4 class=\"text-center theme-color-text\">TESTIMONIES</h4>
                <div class=\"row\">
                    <div class=\"pt-100 col-lg-6 mx-auto\">
                        <p>Good morning Sir,</p>
                        <p class=\"\">
                            Thank you sir for the labour Room on Friday, I was truly blessed!
                            I had severe back and chest pains on Friday. During the labor room, while praying, I kept
                            stretching as I couldn't pace for long.
                            You gave a word concerning healing from a back pain and I received it! I slept and woke up
                            sweating but with no pain, continued with activities for the day, then I remembered the
                            prophecy.
                            I am fine and I feel better than I've felt in days!
                            God forever be praised
                            Thank you sir.
                        </p>
                        <p>Sis S.I</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Working With Us Area -->
    <!-- Start Carousel Area -->
    <!-- <div class=\"carousel-area pt-80 pb-80\" id=\"blog\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"section-title\">
                        <h4>Latest blog Posts</h4>
                    </div>
                    <div class=\"blog-carousel owl-carousel\">
                        <div class=\"single-blog-item\">
                            <div class=\"single-blog-img\">
                                <img src=\"assets/img/blog_01.jpg\" alt=\"\">
                                <span>October 25, 2017</span>
                            </div>
                            <div class=\"blog-content\">
                                <h5 class=\"post-heading\"><a href=\"#\">10 Tips for a Business Strong Start</a> </h5>
                                <p class=\"post-content-text\">Donec sit amet neque lectus. Ut vitae turpis justo. Nullam
                                    a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra
                                    orci.</p>
                                <div class=\"blog-btn\">
                                    <div class=\"blog-tags\">
                                        <i class=\"fas fa-tags\"></i>
                                        <a href=\"#\">Development</a>,
                                        <a href=\"#\">Maketing</a>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-inline read-more-btn\"><i
                                            class=\"fas fa-plus-square\"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-blog-item\">
                            <div class=\"single-blog-img\">
                                <img src=\"assets/img/blog_02.jpg\" alt=\"\">
                                <span>October 25, 2017</span>
                            </div>
                            <div class=\"blog-content\">
                                <h5 class=\"post-heading\"><a href=\"#\">10 Tips for a Business Strong Start</a> </h5>
                                <p class=\"post-content-text\">Donec sit amet neque lectus. Ut vitae turpis justo. Nullam
                                    a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra
                                    orci.</p>
                                <div class=\"blog-btn\">
                                    <div class=\"blog-tags\">
                                        <i class=\"fas fa-tags\"></i>
                                        <a href=\"#\">Development</a>,
                                        <a href=\"#\">Maketing</a>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-inline read-more-btn\"><i
                                            class=\"fas fa-plus-square\"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-blog-item\">
                            <div class=\"single-blog-img\">
                                <img src=\"assets/img/blog_03.jpg\" alt=\"\">
                                <span>October 25, 2017</span>
                            </div>
                            <div class=\"blog-content\">
                                <h5 class=\"post-heading\"><a href=\"#\">10 Tips for a Business Strong Start</a> </h5>
                                <p class=\"post-content-text\">Donec sit amet neque lectus. Ut vitae turpis justo. Nullam
                                    a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra
                                    orci.</p>
                                <div class=\"blog-btn\">
                                    <div class=\"blog-tags\">
                                        <i class=\"fas fa-tags\"></i>
                                        <a href=\"#\">Development</a>,
                                        <a href=\"#\">Maketing</a>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-inline read-more-btn\"><i
                                            class=\"fas fa-plus-square\"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-blog-item\">
                            <div class=\"single-blog-img\">
                                <img src=\"assets/img/blog_04.jpg\" alt=\"\">
                                <span>October 25, 2017</span>
                            </div>
                            <div class=\"blog-content\">
                                <h5 class=\"post-heading\"><a href=\"#\">10 Tips for a Business Strong Start</a> </h5>
                                <p class=\"post-content-text\">Donec sit amet neque lectus. Ut vitae turpis justo. Nullam
                                    a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra
                                    orci.</p>
                                <div class=\"blog-btn\">
                                    <div class=\"blog-tags\">
                                        <i class=\"fas fa-tags\"></i>
                                        <a href=\"#\">Development</a>,
                                        <a href=\"#\">Maketing</a>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-inline read-more-btn\"><i
                                            class=\"fas fa-plus-square\"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"section-title\">
                        <h4>Testimonials</h4>
                    </div>
                    <div class=\"testimonial-carousel owl-carousel\">
                        <div class=\"single-testimonial-item \">
                            <div class=\"testimonial-content d-flex\">
                                <i class=\"fas fa-quote-left\"></i>
                                <p> Nullam faucibus, magna non fringilla ullamcorper, mi libero tempus arcu, fermentum
                                    lacinia sapien lacus eget dui. Interdum et malesuada fames ac ante ipsum primis in
                                    faucibus. Etiam tincidunt odio dolor</p>
                            </div>
                            <div class=\"author-details d-flex\">
                                <div class=\"author-img\">
                                    <img src=\"assets/img/user_01.png\" alt=\"\">
                                </div>
                                <div class=\"author-content\">
                                    <a href=\"#\">Michael Green</a>
                                    <span>Product Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-testimonial-item \">
                            <div class=\"testimonial-content d-flex\">
                                <i class=\"fas fa-quote-left\"></i>
                                <p> Nullam faucibus, magna non fringilla ullamcorper, mi libero tempus arcu, fermentum
                                    lacinia sapien lacus eget dui. Interdum et malesuada fames ac ante ipsum primis in
                                    faucibus. Etiam tincidunt odio dolor</p>
                            </div>
                            <div class=\"author-details d-flex\">
                                <div class=\"author-img\">
                                    <img src=\"assets/img/user_02.png\" alt=\"\">
                                </div>
                                <div class=\"author-content\">
                                    <a href=\"#\">Michael Green</a>
                                    <span>Product Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-testimonial-item \">
                            <div class=\"testimonial-content d-flex\">
                                <i class=\"fas fa-quote-left\"></i>
                                <p> Nullam faucibus, magna non fringilla ullamcorper, mi libero tempus arcu, fermentum
                                    lacinia sapien lacus eget dui. Interdum et malesuada fames ac ante ipsum primis in
                                    faucibus. Etiam tincidunt odio dolor</p>
                            </div>
                            <div class=\"author-details d-flex\">
                                <div class=\"author-img\">
                                    <img src=\"assets/img/user_03.png\" alt=\"\">
                                </div>
                                <div class=\"author-content\">
                                    <a href=\"#\">Michael Green</a>
                                    <span>Product Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Carousel Area -->
    <!-- Start Brands Area -->
    <!-- <div class=\"brand-area gray-bg pt-70 pb-70\">
        <div class=\"container\">
            <div class=\"brand-carousel owl-carousel\">
                <div class=\"brand-item\">
                    <div class=\"brand-item-inner\">
                        <a href=\"#\"><img src=\"";
        // line 1250
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brands/1.png");
        echo "\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"brand-item\">
                    <div class=\"brand-item-inner\">
                        <a href=\"#\"><img src=\"";
        // line 1255
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brands/2.png");
        echo "\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"brand-item\">
                    <div class=\"brand-item-inner\">
                        <a href=\"#\"><img src=\"";
        // line 1260
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brands/3.png");
        echo "\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"brand-item\">
                    <div class=\"brand-item-inner\">
                        <a href=\"#\"><img src=\"";
        // line 1265
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brands/4.png");
        echo "\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"brand-item\">
                    <div class=\"brand-item-inner\">
                        <a href=\"#\"><img src=\"";
        // line 1270
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brands/5.png");
        echo "\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"brand-item\">
                    <div class=\"brand-item-inner\">
                        <a href=\"#\"><img src=\"";
        // line 1275
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brands/6.png");
        echo "\" alt=\"\"></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Brands Area -->
    <!-- Start Footer Area -->
    <footer class=\"footer-area pt-50 pb-60 theme-bg\" id=\"contact-us\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-2 col-md-6 col-sm-12\">
                    <div class=\"footer-widget\">
                        <a href=\"HOME.html\" class=\"text-white\">
                            <img src=\"";
        // line 1289
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
        // line 1399
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/popper.min.js");
        echo "\"></script>
    <!-- Bootstrap.js -->
    <script src=\"";
        // line 1401
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap-4.3.1.min.js");
        echo "\"></script>
    <!-- Modernizr.js -->
    <script src=\"";
        // line 1403
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/modernizr-3.5.0.min.js");
        echo "\"></script>
    <!-- Owl.Carousel.js -->
    <script src=\"";
        // line 1405
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/owl.carousel-2.3.4.min.js");
        echo "\"></script>
    <script src=\"";
        // line 1406
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/owl.carousel2.thumbs.min.js");
        echo "\"></script>
    <!-- Waypoints.js -->
    <script src=\"";
        // line 1408
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/waypoints-4.0.1.min.js");
        echo "\"></script>
    <!-- ColorNip.js -->
    <script src=\"";
        // line 1410
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/colornip.min.js");
        echo "\"></script>
    <!-- SlickNav.js -->
    <script src=\"";
        // line 1412
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/slicknav.min.js");
        echo "\"></script>
    <!-- ScrollUp.js -->
    <script src=\"";
        // line 1414
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/jquery.scrollUp.min.js");
        echo "\"></script>
    <!-- MagnificPopup.js -->
    <script src=\"";
        // line 1416
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/magnific-popup.min.js");
        echo "\"></script>

    <!-- AOS -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js\"
        integrity=\"sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==\"
        crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <!-- Main.js -->
    <script src=\"";
        // line 1423
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
        return array (  1610 => 1423,  1600 => 1416,  1595 => 1414,  1590 => 1412,  1585 => 1410,  1580 => 1408,  1575 => 1406,  1571 => 1405,  1566 => 1403,  1561 => 1401,  1556 => 1399,  1443 => 1289,  1426 => 1275,  1418 => 1270,  1410 => 1265,  1402 => 1260,  1394 => 1255,  1386 => 1250,  849 => 716,  841 => 711,  820 => 693,  808 => 684,  794 => 673,  782 => 664,  768 => 653,  756 => 644,  724 => 615,  694 => 588,  663 => 560,  628 => 528,  596 => 499,  561 => 467,  528 => 437,  496 => 408,  452 => 367,  395 => 313,  138 => 59,  122 => 46,  111 => 38,  107 => 37,  101 => 34,  96 => 32,  91 => 30,  86 => 28,  81 => 26,  76 => 24,  71 => 22,  66 => 20,  58 => 15,  52 => 12,  39 => 1,);
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
    <title>FA21 - {{ this.page.title }}</title>

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


    <!-- <div class=\"search-overlay\"></div> -->
    <!-- Modal -->
    <div class=\"modal pt-100 fade bd-example-modal-xl\" tabindex=\"-1\" role=\"dialog\" id=\"registerModal\"
        aria-labelledby=\"registerModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"text-center modal-icon\">
                    <img src=\"{{ 'assets/assets/fa_reg_top.svg' | theme }}\" class=\"img-responsive\" alt=\"\">
                </div>
                <div class=\"d-flex mx-auto\">
                    <hr class=\"my-auto horizontal-line-modal\">
                    <h3 class=\"theme-color-text register-text-h2 mt-3 mx-3\" style=\"font-size: 32px !important;\">
                        Register </h3>
                    <hr class=\"my-auto horizontal-line-modal\">
                </div>

                <div class=\"modal-body\">
                    <form>
                        <div class=\"form-row\">
                            <div class=\"col-lg-6 col-sm-12 col-md-6\">
                                <label for=\"title\">Title</label>
                                <select id=\"title\" class=\"form-control form-control-lg\">
                                    <option selected></option>
                                    <option value=\"\">Mr</option>
                                    <option value=\"\">Mrs</option>
                                </select>
                            </div>
                            <div class=\"col-lg-6 col-sm-12 col-md-6\">
                                <label for=\"name\">Name</label>
                                <input type=\"text\" class=\"form-control form-control-lg\">
                            </div>

                            <div class=\"col-lg-6 col-sm-12 pt-50\">
                                <label>Gender</label>
                                <div class=\"d-flex\">
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"male\"
                                                value=\"Male\" checked>
                                            <label class=\"form-check-label ml-2\" for=\"male\">
                                                Male
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"gender\" id=\"female\"
                                                value=\"Female\">
                                            <label class=\"form-check-label ml-2\" for=\"female\">
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-6 pt-50\">
                                <label for=\"title\">Marital Status</label>
                                <select id=\"title\" class=\"form-control form-control-lg\">
                                    <option selected></option>
                                    <option value=\"\">Single</option>
                                    <option value=\"\">Married</option>
                                    <option value=\"\">Divorced</option>
                                </select>
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label for=\"title\">Location</label>
                                <select id=\"title\" class=\"form-control form-control-lg\">
                                    <option selected></option>
                                    <option value=\"\">Abuja</option>
                                    <option value=\"\">Abidjan</option>
                                    <option value=\"\">Kaduna</option>
                                </select>
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label>ARE YOU A PARTNER?</label>
                                <div class=\"d-flex\">
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"partner\" id=\"yes\"
                                                value=\"Yes\" checked>
                                            <label class=\"form-check-label ml-2\" for=\"yes\">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"partner\" id=\"no\"
                                                value=\"No\">
                                            <label class=\"form-check-label ml-2\" for=\"no\">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label>DO YOU REQUIRE ACCOMMODATION
                                    DURING THIS EVENT?</label>
                                <div class=\"d-flex\">
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"accomodation\"
                                                id=\"acor_yes\" value=\"Yes\" checked>
                                            <label class=\"form-check-label ml-2\" for=\"acor_yes\">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"accomodation\"
                                                id=\"acor_no\" value=\"No\">
                                            <label class=\"form-check-label ml-2\" for=\"acor_no\">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label>DO YOU REQUIRE FEEDING DURING THIS EVENT?</label>
                                <div class=\"d-flex\">
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"feeding\" id=\"feeding_yes\"
                                                value=\"Yes\" checked>
                                            <label class=\"form-check-label ml-2\" for=\"feeding_yes\">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"feeding\" id=\"feeding_no\"
                                                value=\"No\">
                                            <label class=\"form-check-label ml-2\" for=\"feeding_no\">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label>DO YOU REQUIRE TRANSPORTATION DURING THIS EVENT?</label>
                                <div class=\"d-flex\">
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"transportation\"
                                                id=\"transportation_yes\" value=\"Yes\" checked>
                                            <label class=\"form-check-label ml-2\" for=\"transportation_yes\">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"transportation\"
                                                id=\"transportation_no\" value=\"No\">
                                            <label class=\"form-check-label ml-2\" for=\"transportation_no\">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label>WILL YOU BE ATTENDING ONSITE OR ONLINE?</label>
                                <div class=\"d-flex\">
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_yes\"
                                                value=\"Yes\" checked>
                                            <label class=\"form-check-label ml-2\" for=\"mode_yes\">
                                                Yes
                                            </label>
                                        </div>
                                    </div>
                                    <div class=\"\">
                                        <div
                                            class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                                            <input class=\"form-check-input\" type=\"radio\" name=\"mode\" id=\"mode_no\"
                                                value=\"No\">
                                            <label class=\"form-check-label ml-2\" for=\"mode_no\">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label>DATE OF ARRIVAL?</label>
                                <input type=\"date\" class=\"form-control form-control-lg\">
                            </div>

                            <div class=\"col-lg-6 pt-50\">
                                <label>DATE OF DEPARTURE?</label>
                                <input type=\"date\" class=\"form-control form-control-lg\">
                            </div>
                        </div>

                        <div class=\"text-center pt-100 pb-20\">
                            <input class=\"btn btn-lg btn-danger text-white register-btn\" value=\"Submit\">
                        </div>

                        <div class=\"text-center pt-20 pb-50\">
                            <p class=\"text-muted\">Register your kids <a class=\"theme-color-text\" href=\"#\">here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal pt-100 fade bd-example-modal-xl\" tabindex=\"-1\" role=\"dialog\" id=\"thankYouModal\"
        aria-labelledby=\"thankYouModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <div class=\"text-center modal-icon\">
                    <img src=\"./assets/assets/fa_reg_top.svg\" class=\"img-responsive\" alt=\"\">
                </div>
                <div class=\"mx-auto\">
                    <h3 class=\"theme-color-text thankyou-text-h2 mx-3\">
                        Thank You</h3>
                    <p class=\"thankyou-text-p text-center\">for registering</p>
                </div>
                <div class=\"modal-body\">
                    <div class=\"text-center\">
                        <img src=\"./assets/assets/thank_you.svg\" class=\"img-responsive w-50 h-50\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Header Area -->
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
                                    <button class=\"btn btn-danger\" data-toggle=\"modal\"
                                        data-target=\"#registerModal\">Register</button>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Area -->
    <!-- Start Slider Area -->
    <div class=\"slider-area \">
        <div class=\"container-fluid p-0\">
            <div class=\"row no-gutters\">
                <div class=\"col-12\">
                    <div class=\"slider-carousel owl-carousel\">
                        <div class=\"single-slider slider-bg-1 text-center\">
                            <div class=\"slider-inner\">
                                <div class=\"mx-auto w-75\">
                                    <h1 class=\"text-white text-center font-weight-bold\">Join
                                        the gathering of
                                        thousands of believers
                                        at the 21st Faith Adventure </h1>
                                </div>
                                <a class=\"btn btn-danger text-center pt-70\"
                                    style=\"height: 60px !important; width: 223px; font-size: 28px !important;\"
                                    href=\"javascript:void(0)\" data-toggle=\"modal\"
                                    data-target=\"#registerModal\">Register</a>
                            </div>
                        </div>
                        <div class=\"single-slider slider-bg-2 text-center\">
                            <div class=\"slider-inner\">
                                <div>
                                    <img src=\"{{ 'assets/assets/event.svg' | theme }}\" class=\"img-responsive\" width=\"300px\"
                                        height=\"200px\" alt=\"\">
                                </div>
                                <a class=\"btn search-trigger btn-danger text-center mt-50\"
                                    style=\"height: 60px !important; width: 223px; font-size: 28px !important;\"
                                    href=\"javascript:void(0)\" data-toggle=\"modal\"
                                    data-target=\"#registerModal\">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->

    <!-- Start About -->
    <div class=\"about_resource\" id=\"feature\">
        <div class=\"container-fluid about_resource_wrapper\">
            <div class=\"container pt-50 pb-100\">
                <div class=\"row\">
                    <div class=\"col-lg-7\">
                        <div class=\"mt-50\">
                            <div class=\"w-25\" style=\"border-top: #4053A4 8px solid !important\"></div>
                            <h2 style=\"font-size: 60px;\" class=\"text-color-theme pt-20\">ABOUT FAITH ADVENTURE</h2>
                            <p class=\"lead\">Faith Adventure is an annual conference by CFCIC bringing together believers
                                from all over
                                the world to the ancient city of Gboko for a week filled with an adventure of faith.
                                It started twenty one years ago with a few attendees and has grown to thousands of
                                people
                                attending early on-site and off-site.
                                People have come from in and out of Nigeria who have been nightly blessed and impacted
                                by
                                the word, worship and warm fellowship they received.
                                It's a week of the Spirit filled with love, joy, power, anointing, fellowship,
                                revelation,
                                joy, laughter, celebration, prayer, worship, shouts of joy and so much more...
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-5\">
                        <img src=\"{{ 'assets/assets/hero images.png' | theme }}\" class=\"img-responsive w-100\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
    <!-- Start Features -->
    <div class=\"resources\">
        <div class=\"container-fluid resource_wrapper\">
            <div class=\"container\">
                <div class=\"row\" data-aos=\"fade-down\" data-aos-duration=\"500\">
                    <div class=\"col-lg-12 mb-70 mt-50\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
                        <div style=\"border-top: #627BE5 5px solid !important; width: 100px;\"></div>
                        <h3 style=\"font-size: 60px;\" class=\"text-white mt-10\">FEATURES</h3>
                    </div>
                    <div class=\"col-lg-12 col-md-6 col-sm-12\" data-aos=\"fade-up\" data-aos-duration=\"1500\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <h4 class=\"display-5 text-white\">01</h4>
                                <div style=\"border-left: #627BE5 3px solid !important;\">
                                    <h4 class=\"p-3 text-white\">WORD</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"features-card\" style=\"background: #627BE5;\">
                                    <div class=\"features-card-flex\">
                                        <div class=\"\">
                                            <div class=\"p-3\">
                                                <img src=\"{{ 'assets/assets/word.png' | theme }}\"
                                                    class=\"img-responsive features-img rounded-circle\" alt=\"\">
                                            </div>
                                        </div>
                                        <div class=\"p-2\">
                                            <p class=\"features-text\">Enjoy simple, practical and time tested
                                                truth that
                                                will be shared by ministers with decades of experience and powerful
                                                anointing.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-12 mt-5 col-md-6\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <h4 class=\"display-5 text-white\">02</h4>
                                <div style=\"border-left: #627BE5 3px solid !important;\">
                                    <h4 class=\"p-3 text-white\">WORSHIP</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"features-card\" style=\"background: #627BE5;\">
                                    <div class=\"features-card-flex\">
                                        <div class=\"\">
                                            <div class=\"p-3\">
                                                <img src=\"{{ 'assets/assets/worship.png' | theme }}\"
                                                    class=\"img-responsive features-img rounded-circle\" alt=\"\">
                                            </div>
                                        </div>
                                        <div class=\"p-2\">
                                            <p class=\"features-text\">Join us as we give God our heartfelt
                                                worship and
                                                resounding
                                                praise together lead by anointed ministers of the gospel in music
                                                burdened
                                                to make FA21 a phenomenon.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-12 mt-5 col-md-6\" data-aos=\"fade-up\" data-aos-duration=\"2500\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <h4 class=\"display-5 text-white\">03</h4>
                                <div style=\"border-left: #627BE5 3px solid !important;\">
                                    <h4 class=\"p-3 text-white\">FELLOWSHIP</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"features-card\" style=\"background: #627BE5;\">
                                    <div class=\"features-card-flex\">
                                        <div class=\"\">
                                            <div class=\"p-3\">
                                                <img src=\"{{ 'assets/assets/fellowship.png' | theme }}\"
                                                    class=\"img-responsive features-img rounded-circle\" alt=\"\">
                                            </div>
                                        </div>
                                        <div class=\"p-2\">
                                            <p class=\"features-text\">
                                                A great way to build relationships with people while growing
                                                in your walk with God, you don’t have to do life alone.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-12 mt-5 col-md-6\" data-aos=\"fade-up\" data-aos-duration=\"3000\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <h4 class=\"display-5 text-white\">04</h4>
                                <div style=\"border-left: #627BE5 3px solid !important;\">
                                    <h4 class=\"p-3 text-white\">HEALING & MIRACLE</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"features-card\" style=\"background: #627BE5;\">
                                    <div class=\"features-card-flex\">
                                        <div class=\"\">
                                            <div class=\"p-3\">
                                                <img src=\"{{ 'assets/assets/healing_miracle.png' | theme }}\"
                                                    class=\"img-responsive features-img rounded-circle\" alt=\"\">
                                            </div>
                                        </div>
                                        <div class=\"p-2\">
                                            <p class=\"features-text\">
                                                God is still in the business,
                                                FA21 will be charged with God’s ever consuming power to heal and
                                                deliver,
                                                you won’t only be a witness but also a recipient.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=\"col-lg-12 mt-5 col-md-6\" data-aos=\"fade-up\" data-aos-duration=\"3500\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <h4 class=\"display-5 text-white\">05</h4>
                                <div style=\"border-left: #627BE5 3px solid !important;\">
                                    <h4 class=\"p-3 text-white\">THE SOUND WORSHIP CONCERT</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"features-card\" style=\"background: #627BE5;\">
                                    <div class=\"features-card-flex\">
                                        <div class=\"\">
                                            <div class=\"p-3\">
                                                <img src=\"{{ 'assets/assets/the_sound.png' | theme }}\"
                                                    class=\"img-responsive features-img rounded-circle\" alt=\"\">
                                            </div>
                                        </div>
                                        <div class=\"p-2\">
                                            <p class=\"features-text\">
                                                With the gifted Voice of Creation and other music ministers will be full
                                                of soul inspiring renditions you don’t want to miss.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-12 mt-5 col-md-6\" data-aos=\"fade-up\" data-aos-duration=\"4000\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <h4 class=\"display-5 text-white\">06</h4>
                                <div style=\"border-left: #627BE5 3px solid !important;\">
                                    <h4 class=\"p-3 text-white\">STRATEGY WORKSHOPS</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"features-card\" style=\"background: #627BE5;\">
                                    <div class=\"features-card-flex\">
                                        <div class=\"p-3\">
                                            <img src=\"{{ 'assets/assets/strategy.png' | theme }}\"
                                                class=\"img-responsive features-img rounded-circle\" alt=\"\">
                                        </div>
                                        <div class=\"p-2\">
                                            <p class=\"features-text\">
                                                Learn how you fit into God's agenda and the spread of the gospel in this
                                                season.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-12 mt-5 col-md-6\" data-aos=\"fade-up\" data-aos-duration=\"4500\">
                        <div class=\"row\">
                            <div class=\"col-lg-4\">
                                <h4 class=\"display-5 text-white\">07</h4>
                                <div style=\"border-left: #627BE5 3px solid !important;\">
                                    <h4 class=\"p-3 text-white\">HOLY GHOST MEETINGS</h4>
                                </div>
                            </div>
                            <div class=\"col-lg-8\">
                                <div class=\"features-card\" style=\"background: #627BE5;\">
                                    <div class=\"features-card-flex\">
                                        <div class=\"p-3\">
                                            <img src=\"{{ 'assets/assets/strategy.png' | theme }}\"
                                                class=\"img-responsive features-img rounded-circle\" alt=\"\">
                                        </div>
                                        <div class=\"p-2\">
                                            <p class=\"features-text\">
                                                Encounter the mighty presence of the Holy Spirit, look forward to
                                                a life changing encounter where burdens will be lifted,
                                                chains broken and the be filled with transcending peace of the Holy
                                                Spirit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12 mb-10 mt-70\" data-aos=\"fade-up\" data-aos-duration=\"1200\">
                        <div class=\"ml-auto\" style=\"border-top: #627BE5 8px solid !important; width: 100px;\"></div>
                        <h4 class=\"text-white ml-auto pt-2 w-50 text-right display-4\">MINISTERING IN WORD</h4>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-10 col-sm-12\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-sm-12\">
                                <div class=\"ministers-card\">
                                    <div class=\"ministers-icon text-center\">
                                        <img src=\"{{ 'assets/assets/Ellipse 22.svg' | theme }}\" class=\"img-responsive ministers-image\"
                                            alt=\"\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 col-sm-12 mt-lg-5\">
                                <div class=\"ministers-card\">
                                    <div class=\"ministers-icon text-center\">
                                        <img src=\"{{ 'assets/assets/Ellipse 22.svg' | theme }}\" class=\"img-responsive ministers-image\"
                                            alt=\"\">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-lg-6 col-sm-12\">
                                <div class=\"ministers-card\">
                                    <div class=\"ministers-icon text-center\">
                                        <img src=\"{{ 'assets/assets/Ellipse 22.svg' | theme }}\" class=\"img-responsive ministers-image\"
                                            alt=\"\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 col-sm-12 mt-lg-5\">
                                <div class=\"ministers-card\">
                                    <div class=\"ministers-icon text-center\">
                                        <img src=\"{{ 'assets/assets/Ellipse 22.svg' | theme }}\" class=\"img-responsive ministers-image\"
                                            alt=\"\">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row pb-150\">
                            <div class=\"col-lg-6 col-sm-12\">
                                <div class=\"ministers-card\">
                                    <div class=\"ministers-icon text-center\">
                                        <img src=\"{{ 'assets/assets/Ellipse 22.svg' | theme }}\" class=\"img-responsive ministers-image\"
                                            alt=\"\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6 col-sm-12 mt-lg-5\">
                                <div class=\"ministers-card\">
                                    <div class=\"ministers-icon text-center\">
                                        <img src=\"{{ 'assets/assets/Ellipse 22.svg' | theme }}\" class=\"img-responsive ministers-image\"
                                            alt=\"\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-2\"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->
    <!-- Start Testimonails Area -->
    <div class=\"testimonial_resourse mb-100\">
        <div class=\"container-flud testimonial_resourse_wrapper\">
            <div class=\"testimonial-container mx-auto\">
                <div class=\"testimonial-bg-blue\">
                    <img src=\"{{ 'assets/assets/quote-left.svg' | theme }}\" class=\"img-responsive testimonial_quote_icon left\" alt=\"\">
                    <div class=\"testimonial-top-group\">
                        <h3 class=\"text-white testimonial-bg-text-large\">Testimonial</h3>
                        <p class=\"testimonial-bg-text text-white\">What previous attendees have experienced</p>
                    </div>
                    <img src=\"{{ 'assets/assets/quote-right.svg' | theme }}\" class=\"img-responsive testimonial_quote_icon right\"
                        alt=\"\">
                </div>
                <div class=\"\">
                    <div class=\"\">
                        <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                    <p class=\"testimonial-text\">
                                        Good Morning Sir<br>
                                        Thank you sir for the labour Room on Friday, I was truly blessed!
                                        I had severe back and chest pains on Friday. During the labor room, while
                                        praying, I
                                        kept
                                        stretching as I couldn't pace for long.
                                        You gave a word concerning healing from a back pain and I received it! I
                                        slept
                                        and
                                        woke up
                                        sweating but with no pain, continued with activities for the day, then I
                                        remembered
                                        the
                                        prophecy.
                                        I am fine and I feel better than I've felt in days!
                                        God forever be praised
                                        Thank you sir.
                                        Sis S.I
                                    </p>
                                </div>
                                <div class=\"carousel-item\">
                                    <p class=\"testimonial-text\">
                                        Good Morning Sir<br>
                                        Thank you sir for the labour Room on Friday, I was truly blessed!
                                        I had severe back and chest pains on Friday. During the labor room, while
                                        praying, I
                                        kept
                                        stretching as I couldn't pace for long.
                                        You gave a word concerning healing from a back pain and I received it! I
                                        slept
                                        and
                                        woke up
                                        sweating but with no pain, continued with activities for the day, then I
                                        remembered
                                        the
                                        prophecy.
                                        I am fine and I feel better than I've felt in days!
                                        God forever be praised
                                        Thank you sir.
                                        Sis S.I
                                    </p>
                                </div>
                                <div class=\"carousel-item\">
                                    <p class=\"testimonial-text\">
                                        Good Morning Sir<br>
                                        Thank you sir for the labour Room on Friday, I was truly blessed!
                                        I had severe back and chest pains on Friday. During the labor room, while
                                        praying, I
                                        kept
                                        stretching as I couldn't pace for long.
                                        You gave a word concerning healing from a back pain and I received it! I
                                        slept
                                        and
                                        woke up
                                        sweating but with no pain, continued with activities for the day, then I
                                        remembered
                                        the
                                        prophecy.
                                        I am fine and I feel better than I've felt in days!
                                        God forever be praised
                                        Thank you sir.
                                        Sis S.I
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-lg-4\"></div>
                            <div class=\"col-lg-4\"></div>
                            <div class=\"col-lg-4\">
                                <div class=\"ml-auto testimonial-button-group\">
                                    <a role=\"button\"
                                        class=\"btn theme-bg testimonial-button btn-left text-light rounded-circle\"
                                        href=\"#carouselExampleControls\" data-slide=\"prev\"><i
                                            class=\"text-center fa fa-chevron-left\"></i></a>

                                    <a role=\"button\"
                                        class=\"btn btn-sm theme-bg testimonial-button btn-right text-light rounded-circle\"
                                        href=\"#carouselExampleControls\" data-slide=\"next\"><i
                                            class=\"text-center fa fa-chevron-right\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Latest Project Area -->
    <!-- FAQS -->
    <div class=\"faq_resource\" id=\"faq\">
        <div class=\"container-fluid pb-70 faq_resource_wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12 \">
                        <div class=\"col-lg-12 text-center mt-20\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
                            <hr class=\"mx-auto horizontal-line\">
                            <h4 id=\"faq\" class=\"text-center font-weight-bold  theme-color-text\">
                                FAQS</h4>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"accordion\" id=\"accordionExample\">
                            <div class=\"card faq-card text-dark\">
                                <div class=\"card-header\" id=\"headingOne\">
                                    <div class=\"faq-card_text-h2\" data-toggle=\"collapse\" data-target=\"#collapseOne\"
                                        aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                        1. What group of people is FA for?
                                    </div>
                                </div>

                                <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            Faith Adventure is for one and all. Everyone is welcome to partake in this
                                            life-changing experience.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingTwo\">
                                    <div class=\"faq-card_text-h2\" data-toggle=\"collapse\" data-target=\"#collapseTwo\"
                                        aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                        2. Where and when will this year’s FA hold?
                                    </div>
                                </div>
                                <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            FA’21 will take place from the 12th-19th of September, 2021 at the Theatre
                                            of
                                            Faith,
                                            Christ Family Centre, Gboko in Benue State, Nigeria.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingThree\">
                                    <div class=\"faq-card_text-h2 mb-0\" type=\"button\" data-toggle=\"collapse\"
                                        data-target=\"#collapseThree\" aria-expanded=\"false\"
                                        aria-controls=\"collapseThree\">
                                        3. How do I get to the venue of the programme?
                                    </div>
                                </div>
                                <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingThree\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            The Theatre of Faith is located in Gboko, Benue State. Gboko is a few hours
                                            drive
                                            from Makurdi, the capital of Benue State. The Church is behind Gboko Hills,
                                            Off
                                            Ring
                                            Road, GRA, Gboko, Benue State. You can also locate the address on Google
                                            Maps
                                            for
                                            further clarification.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card faq-card mt-2\">
                                <div class=\"card-header\" id=\"headingFour\">
                                    <div class=\"faq-card_text-h2 mb-0\" data-toggle=\"collapse\"
                                        data-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
                                        4. Is FA a paid or a free programme?
                                    </div>
                                </div>
                                <div id=\"collapseFour\" class=\"collapse\" aria-labelledby=\"headingFour\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            Faith Adventure is absolutely FREE! Feel free to invite as many people as
                                            you
                                            would
                                            like.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingFive\">
                                    <div class=\"faq-card_text-h2 mb-0\" data-toggle=\"collapse\"
                                        data-target=\"#collapseFive\" aria-expanded=\"false\" aria-controls=\"collapseFive\">
                                        5. What is accommodation like for people who have never visited Gboko?
                                    </div>
                                </div>
                                <div id=\"collapseFive\" class=\"collapse\" aria-labelledby=\"headingFive\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            There are discounted hotels available for attendees. Visit the registration
                                            link
                                            to
                                            view rates or call *insert accomodation personnel contact*
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingSix\">
                                    <div class=\"faq-card_text-h2 mb-0\" data-toggle=\"collapse\" data-target=\"#collapseSix\"
                                        aria-expanded=\"false\" aria-controls=\"collapseSix\">
                                        6. How many sessions are there each day?
                                    </div>
                                </div>
                                <div id=\"collapseSix\" class=\"collapse\" aria-labelledby=\"headingSix\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            There are two sessions daily, with the exception of the final day of the
                                            conference
                                            which is usually just the morning session. There are also strategy sessions
                                            right
                                            before the start of the evening sessions on certain days during the week.
                                            You
                                            are
                                            advised to make time to join in those as well as it will be an enlightening
                                            time
                                            and
                                            an extremely educating session you wouldn’t want to miss.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingSix\">
                                    <div class=\"faq-card_text-h2 mb-0\" data-toggle=\"collapse\"
                                        data-target=\"#collapseSeven\" aria-expanded=\"false\"
                                        aria-controls=\"collapseSeven\">
                                        7. How can I stay updated on CFCIC events and messages all year round?
                                    </div>
                                </div>
                                <div id=\"collapseSeven\" class=\"collapse\" aria-labelledby=\"headingSeven\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            You can follow us on any of our on Facebook, Youtube, and Instagram
                                            (@christfamilyministry) on Twitter (@ChristFMins). You could also visit our
                                            website
                                            (christfamilyministries.org) for the latest information in the Ministry.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingEight\">
                                    <div class=\"faq-card_text-h2 mb-0\" data-toggle=\"collapse\"
                                        data-target=\"#collapseEight\" aria-expanded=\"false\"
                                        aria-controls=\"collapseEight\">
                                        8. How do I partner/give to Faith Adventure?
                                    </div>
                                </div>
                                <div id=\"collapseEight\" class=\"collapse\" aria-labelledby=\"headingEight\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            You can give towards the meeting by sowing your desired seed to the account
                                            number
                                            below:
                                            Christ Family Ministry
                                            1017235346
                                            Zenith Bank.

                                            Insert DOM account details
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingNine\">
                                    <div class=\"faq-card_text-h2 mb-0\" data-toggle=\"collapse\"
                                        data-target=\"#collapseNine\" aria-expanded=\"false\" aria-controls=\"collapseNine\">
                                        9. Are livestream options available?
                                    </div>
                                </div>
                                <div id=\"collapseNine\" class=\"collapse\" aria-labelledby=\"headingNine\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            We encourage you to gather with fellow believers and be present physically
                                            at
                                            the
                                            conference. If however, you are unable to travel down to Gboko, you can
                                            stream
                                            live
                                            through Mixlr on mixlr.com/cfm-live and through YouTube on
                                            youtube.com/christfamilyministry.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class=\"card faq-card text-dark mt-2\">
                                <div class=\"card-header\" id=\"headingTen\">
                                    <div class=\"faq-card_text-h2 mb-0\" data-toggle=\"collapse\" data-target=\"#collapseTen\"
                                        aria-expanded=\"false\" aria-controls=\"collapseTen\">
                                        10. Who do I call if I need more information?
                                    </div>
                                </div>
                                <div id=\"collapseTen\" class=\"collapse\" aria-labelledby=\"headingTen\"
                                    data-parent=\"#accordionExample\">
                                    <div class=\"card-body\">
                                        <p class=\"faq-card_text-p\">
                                            If you need to contact us for more information on the conference or any
                                            other
                                            thing
                                            you wish to inquire about the ministry, you can reach us on
                                            media@christfamilyministries.org or send an SMS to *insert number here*
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us Area -->
    <!-- Start Working With Us Area -->
    <div class=\"testimonial_2_resource\">
        <div class=\"container-fluid testimonial_2_resourse_wrapper\">
            <div class=\"container theme-color-text\">
                <h4 class=\"text-center theme-color-text\">TESTIMONIES</h4>
                <div class=\"row\">
                    <div class=\"pt-100 col-lg-6 mx-auto\">
                        <p>Good morning Sir,</p>
                        <p class=\"\">
                            Thank you sir for the labour Room on Friday, I was truly blessed!
                            I had severe back and chest pains on Friday. During the labor room, while praying, I kept
                            stretching as I couldn't pace for long.
                            You gave a word concerning healing from a back pain and I received it! I slept and woke up
                            sweating but with no pain, continued with activities for the day, then I remembered the
                            prophecy.
                            I am fine and I feel better than I've felt in days!
                            God forever be praised
                            Thank you sir.
                        </p>
                        <p>Sis S.I</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Working With Us Area -->
    <!-- Start Carousel Area -->
    <!-- <div class=\"carousel-area pt-80 pb-80\" id=\"blog\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"section-title\">
                        <h4>Latest blog Posts</h4>
                    </div>
                    <div class=\"blog-carousel owl-carousel\">
                        <div class=\"single-blog-item\">
                            <div class=\"single-blog-img\">
                                <img src=\"assets/img/blog_01.jpg\" alt=\"\">
                                <span>October 25, 2017</span>
                            </div>
                            <div class=\"blog-content\">
                                <h5 class=\"post-heading\"><a href=\"#\">10 Tips for a Business Strong Start</a> </h5>
                                <p class=\"post-content-text\">Donec sit amet neque lectus. Ut vitae turpis justo. Nullam
                                    a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra
                                    orci.</p>
                                <div class=\"blog-btn\">
                                    <div class=\"blog-tags\">
                                        <i class=\"fas fa-tags\"></i>
                                        <a href=\"#\">Development</a>,
                                        <a href=\"#\">Maketing</a>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-inline read-more-btn\"><i
                                            class=\"fas fa-plus-square\"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-blog-item\">
                            <div class=\"single-blog-img\">
                                <img src=\"assets/img/blog_02.jpg\" alt=\"\">
                                <span>October 25, 2017</span>
                            </div>
                            <div class=\"blog-content\">
                                <h5 class=\"post-heading\"><a href=\"#\">10 Tips for a Business Strong Start</a> </h5>
                                <p class=\"post-content-text\">Donec sit amet neque lectus. Ut vitae turpis justo. Nullam
                                    a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra
                                    orci.</p>
                                <div class=\"blog-btn\">
                                    <div class=\"blog-tags\">
                                        <i class=\"fas fa-tags\"></i>
                                        <a href=\"#\">Development</a>,
                                        <a href=\"#\">Maketing</a>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-inline read-more-btn\"><i
                                            class=\"fas fa-plus-square\"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-blog-item\">
                            <div class=\"single-blog-img\">
                                <img src=\"assets/img/blog_03.jpg\" alt=\"\">
                                <span>October 25, 2017</span>
                            </div>
                            <div class=\"blog-content\">
                                <h5 class=\"post-heading\"><a href=\"#\">10 Tips for a Business Strong Start</a> </h5>
                                <p class=\"post-content-text\">Donec sit amet neque lectus. Ut vitae turpis justo. Nullam
                                    a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra
                                    orci.</p>
                                <div class=\"blog-btn\">
                                    <div class=\"blog-tags\">
                                        <i class=\"fas fa-tags\"></i>
                                        <a href=\"#\">Development</a>,
                                        <a href=\"#\">Maketing</a>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-inline read-more-btn\"><i
                                            class=\"fas fa-plus-square\"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-blog-item\">
                            <div class=\"single-blog-img\">
                                <img src=\"assets/img/blog_04.jpg\" alt=\"\">
                                <span>October 25, 2017</span>
                            </div>
                            <div class=\"blog-content\">
                                <h5 class=\"post-heading\"><a href=\"#\">10 Tips for a Business Strong Start</a> </h5>
                                <p class=\"post-content-text\">Donec sit amet neque lectus. Ut vitae turpis justo. Nullam
                                    a sodales est, at viverra sem. Mauris vitae pellentesque nisi, sit amet viverra
                                    orci.</p>
                                <div class=\"blog-btn\">
                                    <div class=\"blog-tags\">
                                        <i class=\"fas fa-tags\"></i>
                                        <a href=\"#\">Development</a>,
                                        <a href=\"#\">Maketing</a>
                                    </div>
                                    <a href=\"#\" class=\"btn btn-inline read-more-btn\"><i
                                            class=\"fas fa-plus-square\"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"section-title\">
                        <h4>Testimonials</h4>
                    </div>
                    <div class=\"testimonial-carousel owl-carousel\">
                        <div class=\"single-testimonial-item \">
                            <div class=\"testimonial-content d-flex\">
                                <i class=\"fas fa-quote-left\"></i>
                                <p> Nullam faucibus, magna non fringilla ullamcorper, mi libero tempus arcu, fermentum
                                    lacinia sapien lacus eget dui. Interdum et malesuada fames ac ante ipsum primis in
                                    faucibus. Etiam tincidunt odio dolor</p>
                            </div>
                            <div class=\"author-details d-flex\">
                                <div class=\"author-img\">
                                    <img src=\"assets/img/user_01.png\" alt=\"\">
                                </div>
                                <div class=\"author-content\">
                                    <a href=\"#\">Michael Green</a>
                                    <span>Product Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-testimonial-item \">
                            <div class=\"testimonial-content d-flex\">
                                <i class=\"fas fa-quote-left\"></i>
                                <p> Nullam faucibus, magna non fringilla ullamcorper, mi libero tempus arcu, fermentum
                                    lacinia sapien lacus eget dui. Interdum et malesuada fames ac ante ipsum primis in
                                    faucibus. Etiam tincidunt odio dolor</p>
                            </div>
                            <div class=\"author-details d-flex\">
                                <div class=\"author-img\">
                                    <img src=\"assets/img/user_02.png\" alt=\"\">
                                </div>
                                <div class=\"author-content\">
                                    <a href=\"#\">Michael Green</a>
                                    <span>Product Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"single-testimonial-item \">
                            <div class=\"testimonial-content d-flex\">
                                <i class=\"fas fa-quote-left\"></i>
                                <p> Nullam faucibus, magna non fringilla ullamcorper, mi libero tempus arcu, fermentum
                                    lacinia sapien lacus eget dui. Interdum et malesuada fames ac ante ipsum primis in
                                    faucibus. Etiam tincidunt odio dolor</p>
                            </div>
                            <div class=\"author-details d-flex\">
                                <div class=\"author-img\">
                                    <img src=\"assets/img/user_03.png\" alt=\"\">
                                </div>
                                <div class=\"author-content\">
                                    <a href=\"#\">Michael Green</a>
                                    <span>Product Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Carousel Area -->
    <!-- Start Brands Area -->
    <!-- <div class=\"brand-area gray-bg pt-70 pb-70\">
        <div class=\"container\">
            <div class=\"brand-carousel owl-carousel\">
                <div class=\"brand-item\">
                    <div class=\"brand-item-inner\">
                        <a href=\"#\"><img src=\"{{ 'assets/img/brands/1.png' | theme }}\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"brand-item\">
                    <div class=\"brand-item-inner\">
                        <a href=\"#\"><img src=\"{{ 'assets/img/brands/2.png' | theme }}\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"brand-item\">
                    <div class=\"brand-item-inner\">
                        <a href=\"#\"><img src=\"{{ 'assets/img/brands/3.png' | theme }}\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"brand-item\">
                    <div class=\"brand-item-inner\">
                        <a href=\"#\"><img src=\"{{ 'assets/img/brands/4.png' | theme }}\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"brand-item\">
                    <div class=\"brand-item-inner\">
                        <a href=\"#\"><img src=\"{{ 'assets/img/brands/5.png' | theme }}\" alt=\"\"></a>
                    </div>
                </div>
                <div class=\"brand-item\">
                    <div class=\"brand-item-inner\">
                        <a href=\"#\"><img src=\"{{ 'assets/img/brands/6.png' | theme }}\" alt=\"\"></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Brands Area -->
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
        static $tags = array();
        static $filters = array("escape" => 12, "theme" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
