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

/* C:\laragon\www\fa21/plugins/umaha/events/components/registration/default.htm */
class __TwigTemplate_63dc960bb59bdf04585a443d9963fea0f2c2d894067e195290276c95c1a2b34b extends \Twig\Template
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
        echo "
<p>Fields marked <span style=\"color: red;\">*</span> are required</p>

    <form
    data-request=\"onRegister\"
    data-request-validate
    data-request-flash
    data-request-success=\"document.getElementById('regForm').reset();\"
    class=\"\"
    id=\"regForm\">
    
    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 12
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 13
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 13, $this->source), "html", null, true);
                echo "\">
            ";
                // line 14
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 14, $this->source), "html", null, true);
                echo "
        </div>
    ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 17
        echo "

    
<div class=\"form-row\">

    ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "title"], "method", false, false, true, 22)) {
            // line 23
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "title"], "method", false, false, true, 23)) ? ("has-error") : (""));
            echo "\">
        <label for=\"title\">
            Title
        </label>
        <select class=\"form-control form-control-lg\" id=\"title\" name=\"title\" title=\"Title\">
            <option value=\"\">
                -- Select One --
            </option>
            <option value=\"Pastor\">
                Apostle
            </option>
            <option value=\"Pastor\">
                Evangelist
            </option>
            <option value=\"Pastor\">
                Prophet
            </option>
            <option value=\"Pastor\">
                Pastor
            </option>
            <option value=\"Bishop\">
                Bishop
            </option>
            <option value=\"Rev.\">
                Rev
            </option>
            <option value=\"Mr\">
                Mr
            </option>
            <option value=\"Mrs\">
                Mrs
            </option>
            <option value=\"Miss\">
                Miss
            </option>
        </select>
        <small>
            <span class=\"text-danger\" data-validate-for=\"title\"></span>
        </small>
    </div>
    ";
        }
        // line 64
        echo "
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
        // line 65
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "name"], "method", false, false, true, 65)) ? ("has-error") : (""));
        echo "\">
        <label for=\"name\">
            Name <span style=\"color: red;\">*</span>
        </label>
        <input class=\"form-control form-control-lg\" id=\"\" name=\"name\" placeholder=\"\" title=\"Name\" type=\"text\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"name\"></span>
        </small>
    </div>

    ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "gender"], "method", false, false, true, 76)) {
            // line 77
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "gender"], "method", false, false, true, 77)) ? ("has-error") : (""));
            echo "\">
        <label>GENDER</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div
                    class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" name=\"gender\" title=\"Male\" type=\"radio\" value=\"Male\"
                        value=\"Yes\" id=\"Male\" checked>
                    <label class=\"form-check-label ml-2\" for=\"Male\">
                        Male
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div
                    class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" name=\"gender\" title=\"Female\" type=\"radio\" value=\"Female\" id=\"Female\">
                    <label class=\"form-check-label ml-2\" for=\"Female\">
                        Female
                    </label>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 102
        echo "
    ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "marital_status"], "method", false, false, true, 103)) {
            // line 104
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "marital_status"], "method", false, false, true, 104)) ? ("has-error") : (""));
            echo "\">
        <label class=\"\" for=\"marital_status\">
            Marital status
        </label>
        <select class=\"form-control form-control-lg\" id=\"marital_status\" name=\"marital_status\" title=\"Marital status\">
            <option value=\"\">
                -- Select One --
            </option>
            <option value=\"Married\">
                Married
            </option>
            <option value=\"Single\">
                Single
            </option>
            <option value=\"Divorced\">
                Divorced
            </option>
            <option value=\"Seperated\">
                Seperated
            </option>
        </select>
        <small>
            <span class=\"text-danger\" data-validate-for=\"marital_status\"></span>
        </small>
    </div>
    ";
        }
        // line 130
        echo "    
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"phone\">
            Phone number <span style=\"color: red;\">*</span>
        </label>
        <input class=\"form-control form-control-lg\" id=\"phone\" name=\"phone\" pattern=\"\" title=\"Phone number\" type=\"number\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"phone\"></span>
        </small>
    </div>

    ";
        // line 142
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "email"], "method", false, false, true, 142)) {
            // line 143
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "email"], "method", false, false, true, 143)) ? ("has-error") : (""));
            echo "\">
        <label class=\"\" for=\"email\">
            Email
        </label>
        <input class=\"form-control form-control-lg\" id=\"email\" name=\"email\" title=\"Email\" type=\"email\" value=\"\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"email\"></span>
        </small>
    </div>
    ";
        }
        // line 154
        echo "
    ";
        // line 155
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "is_partner"], "method", false, false, true, 155)) {
            // line 156
            echo "    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Are you a partner?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div
                    class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" type=\"radio\" name=\"is_partner\" id=\"Yes\"  title=\"Yes\"value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"Yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div
                    class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" type=\"radio\" name=\"is_partner\" id=\"No\"  title=\"No\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"No\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 180
        echo "
    ";
        // line 181
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "occupation"], "method", false, false, true, 181)) {
            // line 182
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"occupation\">
            Occupation
        </label>
        <input class=\"form-control form-control-lg\" id=\"occupation\" name=\"occupation\" title=\"Occupation\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 190
        echo "
    ";
        // line 191
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "location"], "method", false, false, true, 191)) {
            // line 192
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"location\">
            Location <span style=\"color: red;\">*</span>
        </label>
        <input class=\"form-control form-control-lg\" id=\"location\" name=\"location\" title=\"Occupation\" type=\"text\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"location\"></span>
        </small>
    </div>
    ";
        }
        // line 203
        echo "
    ";
        // line 204
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "address"], "method", false, false, true, 204)) {
            // line 205
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"address\">
            Your address
        </label>
        <input class=\"form-control form-control-lg\" id=\"address\" name=\"address\" title=\"Your address\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 213
        echo "
    ";
        // line 214
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "cfc_center"], "method", false, false, true, 214)) {
            // line 215
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"cfc_center\">
            CFC Center
        </label>
        <select class=\"form-control form-control-lg\" id=\"cfc_center\" name=\"cfc_center\" title=\"CFC Center\" type=\"text\">
            ";
            // line 220
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 221
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["centre"], "name", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["centre"], "name", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "        </select>
        </input>
    </div>
    ";
        }
        // line 227
        echo "
    ";
        // line 228
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "service_team"], "method", false, false, true, 228)) {
            // line 229
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"service_team\">
            Service Team
        </label>
        <input class=\"form-control form-control-lg\" id=\"service_team\" name=\"service_team\" title=\"Service Team\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 237
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "position_held"], "method", false, false, true, 237)) {
            // line 238
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"position_held\">
            Position Held
        </label>
        <input class=\"form-control form-control-lg\" id=\"position_held\" name=\"position_held\" title=\"Position Held\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 246
        echo "
    ";
        // line 247
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "church_name"], "method", false, false, true, 247)) {
            // line 248
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"church_name\">
            The name of your church
        </label>
        <input class=\"form-control form-control-lg\" id=\"church_name\" name=\"church_name\" title=\"The name of your church\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 256
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "pastor_name"], "method", false, false, true, 256)) {
            // line 257
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"pastor_name\">
            Your pastor's name
        </label>
        <input class=\"form-control form-control-lg\" id=\"pastor_name\" name=\"pastor_name\" title=\"Your pastor's name\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 265
        echo "
    ";
        // line 266
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "spouse"], "method", false, false, true, 266)) {
            // line 267
            echo "    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Are you coming with your spouse?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"spouse_yes\" name=\"spouse\" title=\"Yes\" type=\"radio\" value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"spouse_yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"spouse_no\" name=\"spouse\" title=\"No\" type=\"radio\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"spouse_no\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 289
        echo "
    ";
        // line 290
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "children"], "method", false, false, true, 290)) {
            // line 291
            echo "    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Are you coming with your children?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"children_yes\" name=\"children\" title=\"Yes\" type=\"radio\" value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"children_yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"children_no\" name=\"children\" title=\"No\" type=\"radio\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"children_no\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 313
        echo "
    ";
        // line 314
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "children_no"], "method", false, false, true, 314)) {
            // line 315
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "children_no"], "method", false, false, true, 315)) ? ("has-error") : (""));
            echo "\">
        <label class=\"\" for=\"children_no\">
            Number of children
        </label>
        <input class=\"form-control form-control-lg\" id=\"children_no\" name=\"children_no\" title=\"Number of children\" type=\"number\" value=\"0\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"children_no\"></span>
        </small>
    </div>
    ";
        }
        // line 326
        echo "    
    ";
        // line 327
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "children_ages"], "method", false, false, true, 327)) {
            // line 328
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "children_ages"], "method", false, false, true, 328)) ? ("has-error") : (""));
            echo "\">
        <label class=\"\" for=\"children_ages\">
            Children Ages <small>(comma seperated)</small>
        </label>
        <input class=\"form-control form-control-lg\" id=\"children_ages\" name=\"children_ages\" title=\"Children ages\" type=\"text\" placeholder=\"example 5, 9, 15\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"children_ages\"></span>
        </small>
    </div>
    ";
        }
        // line 339
        echo "
    ";
        // line 340
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "accommodation"], "method", false, false, true, 340)) {
            // line 341
            echo "    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Do you require accommodation during this event?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"accommodation_yes\" name=\"accommodation\" title=\"Yes\" type=\"radio\" value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"accommodation_yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"accommodation_no\" name=\"accommodation\" title=\"No\" type=\"radio\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"accommodation_no\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 363
        echo "    
    ";
        // line 364
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "feeding"], "method", false, false, true, 364)) {
            // line 365
            echo "    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Do you require feeding during this event?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"feeding_yes\" name=\"feeding\" title=\"Yes\" type=\"radio\" value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"feeding_yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"feeding_no\" name=\"feeding\" title=\"No\" type=\"radio\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"feeding_no\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 387
        echo "
    ";
        // line 388
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "transportation"], "method", false, false, true, 388)) {
            // line 389
            echo "    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Do you require transportation during this event?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"transportation_yes\" name=\"transportation\" title=\"Yes\" type=\"radio\" value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"transportation_yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"transportation_no\" name=\"transportation\" title=\"No\" type=\"radio\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"transportation_no\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 411
        echo "
    ";
        // line 412
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "coming_with_car"], "method", false, false, true, 412)) {
            // line 413
            echo "    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Do you require transportation during this event?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"coming_with_car_yes\" name=\"coming_with_car\" title=\"Yes\" type=\"radio\" value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"coming_with_car_yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"coming_with_car_no\" name=\"coming_with_car\" title=\"No\" type=\"radio\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"coming_with_car_no\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 435
        echo "
    ";
        // line 436
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "assist_with_car"], "method", false, false, true, 436)) {
            // line 437
            echo "    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Do you require transportation during this event?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"assist_with_car_yes\" name=\"assist_with_car\" title=\"Yes\" type=\"radio\" value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"assist_with_car_yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"assist_with_car_no\" name=\"assist_with_car\" title=\"No\" type=\"radio\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"assist_with_car_no\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 459
        echo "
    ";
        // line 460
        if (twig_get_attribute($this->env, $this->source, ($context["Registration"] ?? null), "property", [0 => "attendance_mode"], "method", false, false, true, 460)) {
            // line 461
            echo "    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Will you be attending onsite or online?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"attendance_mode_yes\" name=\"attendance_mode\" title=\"Onsite\" type=\"radio\" value=\"Onsite\" checked>
                    <label class=\"form-check-label ml-2\" for=\"attendance_mode_yes\">
                        Onsite
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"attendance_mode_no\" name=\"attendance_mode\" title=\"Online\" type=\"radio\" value=\"Online\">
                    <label class=\"form-check-label ml-2\" for=\"attendance_mode_no\">
                        Online
                    </label>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 483
        echo "
    ";
        // line 484
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "arrival_date"], "method", false, false, true, 484)) {
            // line 485
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "arrival_date"], "method", false, false, true, 485)) ? ("has-error") : (""));
            echo "\">
        <label class=\"\" for=\"arrival_date\">
            Date of arrival
        </label>
        <input class=\"form-control form-control-lg\" id=\"arrival_date\" name=\"arrival_date\" title=\"Date of arrival\" type=\"date\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"arrival_date\"></span>
        </small>
    </div>
    ";
        }
        // line 496
        echo "
    ";
        // line 497
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "departure_date"], "method", false, false, true, 497)) {
            // line 498
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6 pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "departure_date"], "method", false, false, true, 498)) ? ("has-error") : (""));
            echo "\">
        <label class=\"\" for=\"departure_date\">
            Date of departure
        </label>
        <input class=\"form-control form-control-lg\" id=\"departure_date\" name=\"departure_date\" title=\"Date of departure\" type=\"date\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"departure_date\"></span>
        </small>
    </div>
    ";
        }
        // line 509
        echo "
</div>

<div class=\"text-center pt-100 pb-20\">
    <button data-attach-loading type=\"submit\" class=\"btn btn-lg btn-danger text-white register-btn btn-h7\" style=\"padding: 10px border-radius: 4px; background-image: none;\">Register</button>
</div>

<div class=\"text-center pt-20 pb-50\">
    <p class=\"text-muted\">Register your kids <a class=\"theme-color-text\" href=\"#\">here</a></p>
</div>

";
        // line 520
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\fa21/plugins/umaha/events/components/registration/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  728 => 520,  715 => 509,  700 => 498,  698 => 497,  695 => 496,  680 => 485,  678 => 484,  675 => 483,  651 => 461,  649 => 460,  646 => 459,  622 => 437,  620 => 436,  617 => 435,  593 => 413,  591 => 412,  588 => 411,  564 => 389,  562 => 388,  559 => 387,  535 => 365,  533 => 364,  530 => 363,  506 => 341,  504 => 340,  501 => 339,  486 => 328,  484 => 327,  481 => 326,  466 => 315,  464 => 314,  461 => 313,  437 => 291,  435 => 290,  432 => 289,  408 => 267,  406 => 266,  403 => 265,  393 => 257,  390 => 256,  380 => 248,  378 => 247,  375 => 246,  365 => 238,  362 => 237,  352 => 229,  350 => 228,  347 => 227,  341 => 223,  330 => 221,  326 => 220,  319 => 215,  317 => 214,  314 => 213,  304 => 205,  302 => 204,  299 => 203,  286 => 192,  284 => 191,  281 => 190,  271 => 182,  269 => 181,  266 => 180,  240 => 156,  238 => 155,  235 => 154,  220 => 143,  218 => 142,  204 => 130,  174 => 104,  172 => 103,  169 => 102,  140 => 77,  138 => 76,  124 => 65,  121 => 64,  76 => 23,  74 => 22,  67 => 17,  60 => 14,  55 => 13,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<p>Fields marked <span style=\"color: red;\">*</span> are required</p>

    <form
    data-request=\"onRegister\"
    data-request-validate
    data-request-flash
    data-request-success=\"document.getElementById('regForm').reset();\"
    class=\"\"
    id=\"regForm\">
    
    {% flash %}
        <div class=\"alert alert-{{ type }}\">
            {{ message }}
        </div>
    {% endflash %}


    
<div class=\"form-row\">

    {% if __SELF__.property('title') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 {{ errors.has('title') ? 'has-error' : '' }}\">
        <label for=\"title\">
            Title
        </label>
        <select class=\"form-control form-control-lg\" id=\"title\" name=\"title\" title=\"Title\">
            <option value=\"\">
                -- Select One --
            </option>
            <option value=\"Pastor\">
                Apostle
            </option>
            <option value=\"Pastor\">
                Evangelist
            </option>
            <option value=\"Pastor\">
                Prophet
            </option>
            <option value=\"Pastor\">
                Pastor
            </option>
            <option value=\"Bishop\">
                Bishop
            </option>
            <option value=\"Rev.\">
                Rev
            </option>
            <option value=\"Mr\">
                Mr
            </option>
            <option value=\"Mrs\">
                Mrs
            </option>
            <option value=\"Miss\">
                Miss
            </option>
        </select>
        <small>
            <span class=\"text-danger\" data-validate-for=\"title\"></span>
        </small>
    </div>
    {% endif %}

    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 {{ errors.has('name') ? 'has-error' : '' }}\">
        <label for=\"name\">
            Name <span style=\"color: red;\">*</span>
        </label>
        <input class=\"form-control form-control-lg\" id=\"\" name=\"name\" placeholder=\"\" title=\"Name\" type=\"text\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"name\"></span>
        </small>
    </div>

    {% if __SELF__.property('gender') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 {{ errors.has('gender') ? 'has-error' : '' }}\">
        <label>GENDER</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div
                    class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" name=\"gender\" title=\"Male\" type=\"radio\" value=\"Male\"
                        value=\"Yes\" id=\"Male\" checked>
                    <label class=\"form-check-label ml-2\" for=\"Male\">
                        Male
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div
                    class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" name=\"gender\" title=\"Female\" type=\"radio\" value=\"Female\" id=\"Female\">
                    <label class=\"form-check-label ml-2\" for=\"Female\">
                        Female
                    </label>
                </div>
            </div>
        </div>
    </div>
    {% endif %}

    {% if __SELF__.property('marital_status') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 {{ errors.has('marital_status') ? 'has-error' : '' }}\">
        <label class=\"\" for=\"marital_status\">
            Marital status
        </label>
        <select class=\"form-control form-control-lg\" id=\"marital_status\" name=\"marital_status\" title=\"Marital status\">
            <option value=\"\">
                -- Select One --
            </option>
            <option value=\"Married\">
                Married
            </option>
            <option value=\"Single\">
                Single
            </option>
            <option value=\"Divorced\">
                Divorced
            </option>
            <option value=\"Seperated\">
                Seperated
            </option>
        </select>
        <small>
            <span class=\"text-danger\" data-validate-for=\"marital_status\"></span>
        </small>
    </div>
    {% endif %}
    
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"phone\">
            Phone number <span style=\"color: red;\">*</span>
        </label>
        <input class=\"form-control form-control-lg\" id=\"phone\" name=\"phone\" pattern=\"\" title=\"Phone number\" type=\"number\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"phone\"></span>
        </small>
    </div>

    {% if __SELF__.property('email') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 {{ errors.has('email') ? 'has-error' : '' }}\">
        <label class=\"\" for=\"email\">
            Email
        </label>
        <input class=\"form-control form-control-lg\" id=\"email\" name=\"email\" title=\"Email\" type=\"email\" value=\"\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"email\"></span>
        </small>
    </div>
    {% endif %}

    {% if __SELF__.property('is_partner') %}
    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Are you a partner?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div
                    class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" type=\"radio\" name=\"is_partner\" id=\"Yes\"  title=\"Yes\"value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"Yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div
                    class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" type=\"radio\" name=\"is_partner\" id=\"No\"  title=\"No\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"No\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    {% endif %}

    {% if __SELF__.property('occupation') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"occupation\">
            Occupation
        </label>
        <input class=\"form-control form-control-lg\" id=\"occupation\" name=\"occupation\" title=\"Occupation\" type=\"text\">
        </input>
    </div>
    {% endif %}

    {% if __SELF__.property('location') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"location\">
            Location <span style=\"color: red;\">*</span>
        </label>
        <input class=\"form-control form-control-lg\" id=\"location\" name=\"location\" title=\"Occupation\" type=\"text\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"location\"></span>
        </small>
    </div>
    {% endif %}

    {% if __SELF__.property('address') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"address\">
            Your address
        </label>
        <input class=\"form-control form-control-lg\" id=\"address\" name=\"address\" title=\"Your address\" type=\"text\">
        </input>
    </div>
    {% endif %}

    {% if __SELF__.property('cfc_center') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"cfc_center\">
            CFC Center
        </label>
        <select class=\"form-control form-control-lg\" id=\"cfc_center\" name=\"cfc_center\" title=\"CFC Center\" type=\"text\">
            {% for centre in centres %}
            <option value=\"{{ centre.name }}\">{{ centre.name }}</option>
            {% endfor %}
        </select>
        </input>
    </div>
    {% endif %}

    {% if __SELF__.property('service_team') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"service_team\">
            Service Team
        </label>
        <input class=\"form-control form-control-lg\" id=\"service_team\" name=\"service_team\" title=\"Service Team\" type=\"text\">
        </input>
    </div>
    {% endif %}
    {% if __SELF__.property('position_held') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"position_held\">
            Position Held
        </label>
        <input class=\"form-control form-control-lg\" id=\"position_held\" name=\"position_held\" title=\"Position Held\" type=\"text\">
        </input>
    </div>
    {% endif %}

    {% if __SELF__.property('church_name') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"church_name\">
            The name of your church
        </label>
        <input class=\"form-control form-control-lg\" id=\"church_name\" name=\"church_name\" title=\"The name of your church\" type=\"text\">
        </input>
    </div>
    {% endif %}
    {% if __SELF__.property('pastor_name') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"pastor_name\">
            Your pastor's name
        </label>
        <input class=\"form-control form-control-lg\" id=\"pastor_name\" name=\"pastor_name\" title=\"Your pastor's name\" type=\"text\">
        </input>
    </div>
    {% endif %}

    {% if __SELF__.property('spouse') %}
    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Are you coming with your spouse?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"spouse_yes\" name=\"spouse\" title=\"Yes\" type=\"radio\" value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"spouse_yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"spouse_no\" name=\"spouse\" title=\"No\" type=\"radio\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"spouse_no\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    {% endif %}

    {% if __SELF__.property('children') %}
    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Are you coming with your children?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"children_yes\" name=\"children\" title=\"Yes\" type=\"radio\" value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"children_yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"children_no\" name=\"children\" title=\"No\" type=\"radio\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"children_no\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    {% endif %}

    {% if __SELF__.property('children_no') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 {{ errors.has('children_no') ? 'has-error' : '' }}\">
        <label class=\"\" for=\"children_no\">
            Number of children
        </label>
        <input class=\"form-control form-control-lg\" id=\"children_no\" name=\"children_no\" title=\"Number of children\" type=\"number\" value=\"0\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"children_no\"></span>
        </small>
    </div>
    {% endif %}
    
    {% if __SELF__.property('children_ages') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 {{ errors.has('children_ages') ? 'has-error' : '' }}\">
        <label class=\"\" for=\"children_ages\">
            Children Ages <small>(comma seperated)</small>
        </label>
        <input class=\"form-control form-control-lg\" id=\"children_ages\" name=\"children_ages\" title=\"Children ages\" type=\"text\" placeholder=\"example 5, 9, 15\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"children_ages\"></span>
        </small>
    </div>
    {% endif %}

    {% if __SELF__.property('accommodation') %}
    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Do you require accommodation during this event?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"accommodation_yes\" name=\"accommodation\" title=\"Yes\" type=\"radio\" value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"accommodation_yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"accommodation_no\" name=\"accommodation\" title=\"No\" type=\"radio\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"accommodation_no\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    {% endif %}
    
    {% if __SELF__.property('feeding') %}
    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Do you require feeding during this event?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"feeding_yes\" name=\"feeding\" title=\"Yes\" type=\"radio\" value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"feeding_yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"feeding_no\" name=\"feeding\" title=\"No\" type=\"radio\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"feeding_no\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    {% endif %}

    {% if __SELF__.property('transportation') %}
    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Do you require transportation during this event?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"transportation_yes\" name=\"transportation\" title=\"Yes\" type=\"radio\" value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"transportation_yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"transportation_no\" name=\"transportation\" title=\"No\" type=\"radio\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"transportation_no\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    {% endif %}

    {% if __SELF__.property('coming_with_car') %}
    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Do you require transportation during this event?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"coming_with_car_yes\" name=\"coming_with_car\" title=\"Yes\" type=\"radio\" value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"coming_with_car_yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"coming_with_car_no\" name=\"coming_with_car\" title=\"No\" type=\"radio\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"coming_with_car_no\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    {% endif %}

    {% if __SELF__.property('assist_with_car') %}
    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Do you require transportation during this event?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"assist_with_car_yes\" name=\"assist_with_car\" title=\"Yes\" type=\"radio\" value=\"1\" checked>
                    <label class=\"form-check-label ml-2\" for=\"assist_with_car_yes\">
                        Yes
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"assist_with_car_no\" name=\"assist_with_car\" title=\"No\" type=\"radio\" value=\"0\">
                    <label class=\"form-check-label ml-2\" for=\"assist_with_car_no\">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>
    {% endif %}

    {% if Registration.property('attendance_mode') %}
    <div class=\"col-lg-6 col-sm-12 pt-50\">
        <label>Will you be attending onsite or online?</label>
        <div class=\"d-flex\">
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"attendance_mode_yes\" name=\"attendance_mode\" title=\"Onsite\" type=\"radio\" value=\"Onsite\" checked>
                    <label class=\"form-check-label ml-2\" for=\"attendance_mode_yes\">
                        Onsite
                    </label>
                </div>
            </div>
            <div class=\"\">
                <div class=\"form-check checkbox form-check-inline d-flex justify-content-center border text-center\">
                    <input class=\"form-check-input\" id=\"attendance_mode_no\" name=\"attendance_mode\" title=\"Online\" type=\"radio\" value=\"Online\">
                    <label class=\"form-check-label ml-2\" for=\"attendance_mode_no\">
                        Online
                    </label>
                </div>
            </div>
        </div>
    </div>
    {% endif %}

    {% if __SELF__.property('arrival_date') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 {{ errors.has('arrival_date') ? 'has-error' : '' }}\">
        <label class=\"\" for=\"arrival_date\">
            Date of arrival
        </label>
        <input class=\"form-control form-control-lg\" id=\"arrival_date\" name=\"arrival_date\" title=\"Date of arrival\" type=\"date\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"arrival_date\"></span>
        </small>
    </div>
    {% endif %}

    {% if __SELF__.property('departure_date') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6 pt-50 {{ errors.has('departure_date') ? 'has-error' : '' }}\">
        <label class=\"\" for=\"departure_date\">
            Date of departure
        </label>
        <input class=\"form-control form-control-lg\" id=\"departure_date\" name=\"departure_date\" title=\"Date of departure\" type=\"date\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"departure_date\"></span>
        </small>
    </div>
    {% endif %}

</div>

<div class=\"text-center pt-100 pb-20\">
    <button data-attach-loading type=\"submit\" class=\"btn btn-lg btn-danger text-white register-btn btn-h7\" style=\"padding: 10px border-radius: 4px; background-image: none;\">Register</button>
</div>

<div class=\"text-center pt-20 pb-50\">
    <p class=\"text-muted\">Register your kids <a class=\"theme-color-text\" href=\"#\">here</a></p>
</div>

{{ form_close() }}
", "C:\\laragon\\www\\fa21/plugins/umaha/events/components/registration/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("flash" => 12, "if" => 22, "for" => 220);
        static $filters = array("escape" => 13);
        static $functions = array("form_close" => 520);

        try {
            $this->sandbox->checkSecurity(
                ['flash', 'if', 'for'],
                ['escape'],
                ['form_close']
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
