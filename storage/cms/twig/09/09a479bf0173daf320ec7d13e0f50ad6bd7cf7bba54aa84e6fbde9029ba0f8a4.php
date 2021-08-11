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
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 1
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 2
                echo "    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 2, $this->source), "html", null, true);
                echo "\">
        ";
                // line 3
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 3, $this->source), "html", null, true);
                echo "
    </div>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 6
        echo "
<p>Fields marked <span style=\"color: red;\">*</span> are required</p>

    <form
    data-request=\"onRegister\"
    data-request-validate
    data-request-flash
    data-request-success=\"document.getElementById('regForm').reset();\"
    class=\"\"
    id=\"form\">

    
<div class=\"form-row\">

    ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "title"], "method", false, false, true, 20)) {
            // line 21
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "title"], "method", false, false, true, 21)) ? ("has-error") : (""));
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
        // line 62
        echo "
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
        // line 63
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "name"], "method", false, false, true, 63)) ? ("has-error") : (""));
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
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "gender"], "method", false, false, true, 74)) {
            // line 75
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "gender"], "method", false, false, true, 75)) ? ("has-error") : (""));
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
        // line 100
        echo "
    ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "marital_status"], "method", false, false, true, 101)) {
            // line 102
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "marital_status"], "method", false, false, true, 102)) ? ("has-error") : (""));
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
        // line 128
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
        // line 140
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "email"], "method", false, false, true, 140)) {
            // line 141
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "email"], "method", false, false, true, 141)) ? ("has-error") : (""));
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
        // line 152
        echo "
    ";
        // line 153
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "is_partner"], "method", false, false, true, 153)) {
            // line 154
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
        // line 178
        echo "
    ";
        // line 179
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "occupation"], "method", false, false, true, 179)) {
            // line 180
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"occupation\">
            Occupation
        </label>
        <input class=\"form-control form-control-lg\" id=\"occupation\" name=\"occupation\" title=\"Occupation\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 188
        echo "
    ";
        // line 189
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "location"], "method", false, false, true, 189)) {
            // line 190
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
        // line 201
        echo "
    ";
        // line 202
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "address"], "method", false, false, true, 202)) {
            // line 203
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"address\">
            Your address
        </label>
        <input class=\"form-control form-control-lg\" id=\"address\" name=\"address\" title=\"Your address\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 211
        echo "
    ";
        // line 212
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "cfc_center"], "method", false, false, true, 212)) {
            // line 213
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"cfc_center\">
            CFC Center
        </label>
        <select class=\"form-control form-control-lg\" id=\"cfc_center\" name=\"cfc_center\" title=\"CFC Center\" type=\"text\">
            ";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 219
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["centre"], "name", [], "any", false, false, true, 219), 219, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["centre"], "name", [], "any", false, false, true, 219), 219, $this->source), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "        </select>
        </input>
    </div>
    ";
        }
        // line 225
        echo "
    ";
        // line 226
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "service_team"], "method", false, false, true, 226)) {
            // line 227
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"service_team\">
            Service Team
        </label>
        <input class=\"form-control form-control-lg\" id=\"service_team\" name=\"service_team\" title=\"Service Team\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 235
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "position_held"], "method", false, false, true, 235)) {
            // line 236
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"position_held\">
            Position Held
        </label>
        <input class=\"form-control form-control-lg\" id=\"position_held\" name=\"position_held\" title=\"Position Held\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 244
        echo "
    ";
        // line 245
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "church_name"], "method", false, false, true, 245)) {
            // line 246
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"church_name\">
            The name of your church
        </label>
        <input class=\"form-control form-control-lg\" id=\"church_name\" name=\"church_name\" title=\"The name of your church\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 254
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "pastor_name"], "method", false, false, true, 254)) {
            // line 255
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"pastor_name\">
            Your pastor's name
        </label>
        <input class=\"form-control form-control-lg\" id=\"pastor_name\" name=\"pastor_name\" title=\"Your pastor's name\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 263
        echo "
    ";
        // line 264
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "spouse"], "method", false, false, true, 264)) {
            // line 265
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
        // line 287
        echo "
    ";
        // line 288
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "children"], "method", false, false, true, 288)) {
            // line 289
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
        // line 311
        echo "
    ";
        // line 312
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "children_no"], "method", false, false, true, 312)) {
            // line 313
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "children_no"], "method", false, false, true, 313)) ? ("has-error") : (""));
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
        // line 324
        echo "    
    ";
        // line 325
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "children_ages"], "method", false, false, true, 325)) {
            // line 326
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "children_ages"], "method", false, false, true, 326)) ? ("has-error") : (""));
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
        // line 337
        echo "
    ";
        // line 338
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "accommodation"], "method", false, false, true, 338)) {
            // line 339
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
        // line 361
        echo "    
    ";
        // line 362
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "feeding"], "method", false, false, true, 362)) {
            // line 363
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
        // line 385
        echo "
    ";
        // line 386
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "transportation"], "method", false, false, true, 386)) {
            // line 387
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
        // line 409
        echo "
    ";
        // line 410
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "coming_with_car"], "method", false, false, true, 410)) {
            // line 411
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
        // line 433
        echo "
    ";
        // line 434
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "assist_with_car"], "method", false, false, true, 434)) {
            // line 435
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
        // line 457
        echo "
    ";
        // line 458
        if (twig_get_attribute($this->env, $this->source, ($context["Registration"] ?? null), "property", [0 => "attendance_mode"], "method", false, false, true, 458)) {
            // line 459
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
        // line 481
        echo "
    ";
        // line 482
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "arrival_date"], "method", false, false, true, 482)) {
            // line 483
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "arrival_date"], "method", false, false, true, 483)) ? ("has-error") : (""));
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
        // line 494
        echo "
    ";
        // line 495
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "departure_date"], "method", false, false, true, 495)) {
            // line 496
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6 pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "departure_date"], "method", false, false, true, 496)) ? ("has-error") : (""));
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
        // line 507
        echo "
</div>


    <div class=\"text-center pt-100 pb-20\">
        <button data-attach-loading type=\"submit\" class=\"btn btn-lg btn-danger text-white register-btn btn-h7\" style=\"padding: 10px border-radius: 4px; background-image: none;\">Register</button>
    </div>

";
        // line 515
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
        return array (  721 => 515,  711 => 507,  696 => 496,  694 => 495,  691 => 494,  676 => 483,  674 => 482,  671 => 481,  647 => 459,  645 => 458,  642 => 457,  618 => 435,  616 => 434,  613 => 433,  589 => 411,  587 => 410,  584 => 409,  560 => 387,  558 => 386,  555 => 385,  531 => 363,  529 => 362,  526 => 361,  502 => 339,  500 => 338,  497 => 337,  482 => 326,  480 => 325,  477 => 324,  462 => 313,  460 => 312,  457 => 311,  433 => 289,  431 => 288,  428 => 287,  404 => 265,  402 => 264,  399 => 263,  389 => 255,  386 => 254,  376 => 246,  374 => 245,  371 => 244,  361 => 236,  358 => 235,  348 => 227,  346 => 226,  343 => 225,  337 => 221,  326 => 219,  322 => 218,  315 => 213,  313 => 212,  310 => 211,  300 => 203,  298 => 202,  295 => 201,  282 => 190,  280 => 189,  277 => 188,  267 => 180,  265 => 179,  262 => 178,  236 => 154,  234 => 153,  231 => 152,  216 => 141,  214 => 140,  200 => 128,  170 => 102,  168 => 101,  165 => 100,  136 => 75,  134 => 74,  120 => 63,  117 => 62,  72 => 21,  70 => 20,  54 => 6,  47 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% flash %}
    <div class=\"alert alert-{{ type }}\">
        {{ message }}
    </div>
{% endflash %}

<p>Fields marked <span style=\"color: red;\">*</span> are required</p>

    <form
    data-request=\"onRegister\"
    data-request-validate
    data-request-flash
    data-request-success=\"document.getElementById('regForm').reset();\"
    class=\"\"
    id=\"form\">

    
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

{{ form_close() }}
", "C:\\laragon\\www\\fa21/plugins/umaha/events/components/registration/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("flash" => 1, "if" => 20, "for" => 218);
        static $filters = array("escape" => 2);
        static $functions = array("form_close" => 515);

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
