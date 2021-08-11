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

/* C:\laragon\www\fa21/themes/fa/pages/home.htm */
class __TwigTemplate_af0868c978ea7c6bdeb38ddb9909572637bdb2545457e998c405a3b6d721524a extends \Twig\Template
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
        // line 64
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
        // line 105
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
        // line 135
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
        // line 165
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
        // line 197
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
        // line 226
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
        // line 258
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
        // line 286
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
        // line 313
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
        // line 342
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
        // line 351
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
        // line 362
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
        // line 371
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
        // line 382
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
        // line 391
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
        // line 410
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets/quote-left.svg");
        echo "\" class=\"img-responsive testimonial_quote_icon left\" alt=\"\">
                <div class=\"testimonial-top-group\">
                    <h3 class=\"text-white testimonial-bg-text-large\">Testimonial</h3>
                    <p class=\"testimonial-bg-text text-white\">What previous attendees have experienced</p>
                </div>
                <img src=\"";
        // line 415
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
        // line 953
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brands/1.png");
        echo "\" alt=\"\"></a>
                </div>
            </div>
            <div class=\"brand-item\">
                <div class=\"brand-item-inner\">
                    <a href=\"#\"><img src=\"";
        // line 958
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brands/2.png");
        echo "\" alt=\"\"></a>
                </div>
            </div>
            <div class=\"brand-item\">
                <div class=\"brand-item-inner\">
                    <a href=\"#\"><img src=\"";
        // line 963
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brands/3.png");
        echo "\" alt=\"\"></a>
                </div>
            </div>
            <div class=\"brand-item\">
                <div class=\"brand-item-inner\">
                    <a href=\"#\"><img src=\"";
        // line 968
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brands/4.png");
        echo "\" alt=\"\"></a>
                </div>
            </div>
            <div class=\"brand-item\">
                <div class=\"brand-item-inner\">
                    <a href=\"#\"><img src=\"";
        // line 973
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brands/5.png");
        echo "\" alt=\"\"></a>
                </div>
            </div>
            <div class=\"brand-item\">
                <div class=\"brand-item-inner\">
                    <a href=\"#\"><img src=\"";
        // line 978
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/brands/6.png");
        echo "\" alt=\"\"></a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Brands Area -->



<!-- <div class=\"search-overlay\"></div> -->
<!-- Modal -->
<div class=\"modal pt-100 fade bd-example-modal-xl\" tabindex=\"-1\" role=\"dialog\" id=\"registerModal\"
    aria-labelledby=\"registerModal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl\">
        <div class=\"modal-content\">
            <div class=\"text-center modal-icon\">
                <img src=\"";
        // line 995
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
                    <img src=\"";
        // line 1234
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/assets/thank_you.svg");
        echo "\" class=\"img-responsive w-50 h-50\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\fa21/themes/fa/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1349 => 1234,  1107 => 995,  1087 => 978,  1079 => 973,  1071 => 968,  1063 => 963,  1055 => 958,  1047 => 953,  506 => 415,  498 => 410,  476 => 391,  464 => 382,  450 => 371,  438 => 362,  424 => 351,  412 => 342,  380 => 313,  350 => 286,  319 => 258,  284 => 226,  252 => 197,  217 => 165,  184 => 135,  151 => 105,  107 => 64,  49 => 9,  39 => 1,);
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
                    <img src=\"{{ '/assets/assets/thank_you.svg' | theme }}\" class=\"img-responsive w-50 h-50\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\laragon\\www\\fa21/themes/fa/pages/home.htm", "");
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
