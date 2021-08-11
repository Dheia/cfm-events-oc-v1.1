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

/* C:\laragon\www\fa21/themes/fa/partials/site/footer.htm */
class __TwigTemplate_237c9f84bc2c00e686de9bfae4c5d46d1cf7b5c3f1ff7b6970ab9081e9efb92d extends \Twig\Template
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
        echo "<footer class=\"footer-area pt-50 pb-60 theme-bg\" id=\"contact-us\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-2 col-md-6 col-sm-12\">
                <div class=\"footer-widget\">
                    <a href=\"HOME.html\" class=\"text-white\">
                        <img src=\"";
        // line 7
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
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\fa21/themes/fa/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer-area pt-50 pb-60 theme-bg\" id=\"contact-us\">
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
</footer>", "C:\\laragon\\www\\fa21/themes/fa/partials/site/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 7);
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
