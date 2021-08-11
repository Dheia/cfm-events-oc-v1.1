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
        <input class=\"form-control\" id=\"phone\" name=\"phone\" pattern=\"\" title=\"Phone number\" type=\"number\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"phone\"></span>
        </small>
    </div>
    ";
        // line 139
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "email"], "method", false, false, true, 139)) {
            // line 140
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "email"], "method", false, false, true, 140)) ? ("has-error") : (""));
            echo "\">
        <label class=\"\" for=\"email\">
            Email
        </label>
        <input class=\"form-control\" id=\"email\" name=\"email\" title=\"Email\" type=\"email\" value=\"\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"email\"></span>
        </small>
    </div>
    ";
        }
        // line 151
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "is_partner"], "method", false, false, true, 151)) {
            // line 152
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label for=\"\">
            Are you a partner?
        </label>
        <div class=\"radio\">
            <label>
                <input checked=\"checked\" id=\"Yes\" name=\"is_partner\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input id=\"No\" name=\"is_partner\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
        </div>
    </div>
    ";
        }
        // line 168
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "occupation"], "method", false, false, true, 168)) {
            // line 169
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"occupation\">
            Occupation
        </label>
        <input class=\"form-control\" id=\"occupation\" name=\"occupation\" title=\"Occupation\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 177
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "location"], "method", false, false, true, 177)) {
            // line 178
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"location\">
            Location <span style=\"color: red;\">*</span>
        </label>
        <input class=\"form-control\" id=\"location\" name=\"location\" title=\"Occupation\" type=\"text\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"location\"></span>
        </small>
    </div>
    ";
        }
        // line 189
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "address"], "method", false, false, true, 189)) {
            // line 190
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"address\">
            Your address
        </label>
        <input class=\"form-control\" id=\"address\" name=\"address\" title=\"Your address\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 198
        echo "
    ";
        // line 199
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "cfc_center"], "method", false, false, true, 199)) {
            // line 200
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"cfc_center\">
            CFC Center
        </label>
        <select class=\"form-control\" id=\"cfc_center\" name=\"cfc_center\" title=\"CFC Center\" type=\"text\">
            ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
                // line 206
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["centre"], "name", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["centre"], "name", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "        </select>
        </input>
    </div>
    ";
        }
        // line 212
        echo "
    ";
        // line 213
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "service_team"], "method", false, false, true, 213)) {
            // line 214
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"service_team\">
            Service Team
        </label>
        <input class=\"form-control\" id=\"service_team\" name=\"service_team\" title=\"Service Team\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 222
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "position_held"], "method", false, false, true, 222)) {
            // line 223
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"position_held\">
            Position Held
        </label>
        <input class=\"form-control\" id=\"position_held\" name=\"position_held\" title=\"Position Held\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 231
        echo "
    ";
        // line 232
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "church_name"], "method", false, false, true, 232)) {
            // line 233
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"church_name\">
            The name of your church
        </label>
        <input class=\"form-control\" id=\"church_name\" name=\"church_name\" title=\"The name of your church\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 241
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "pastor_name"], "method", false, false, true, 241)) {
            // line 242
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"pastor_name\">
            Your pastor's name
        </label>
        <input class=\"form-control\" id=\"pastor_name\" name=\"pastor_name\" title=\"Your pastor's name\" type=\"text\">
        </input>
    </div>
    ";
        }
        // line 250
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "spouse"], "method", false, false, true, 250)) {
            // line 251
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "spouse"], "method", false, false, true, 251)) ? ("has-error") : (""));
            echo "\">
        <label for=\"\">
            Are you coming with your spouse?
        </label>
        <div class=\"radio\">
            <label>
                <input id=\"Yes\" name=\"spouse\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input id=\"No\" name=\"spouse\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
            <small>
                <span class=\"text-danger\" data-validate-for=\"spouse\"></span>
            </small>
        </div>
    </div>
    ";
        }
        // line 270
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "children"], "method", false, false, true, 270)) {
            // line 271
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "children"], "method", false, false, true, 271)) ? ("has-error") : (""));
            echo "\">
        <label for=\"\">
            Are you coming with your children?
        </label>
        <div class=\"radio\">
            <label>
                <input id=\"Yes\" name=\"children\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input id=\"No\" name=\"children\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
            <small>
                <span class=\"text-danger\" data-validate-for=\"children\"></span>
            </small>
        </div>
    </div>
    ";
        }
        // line 290
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "children_no"], "method", false, false, true, 290)) {
            // line 291
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "children_no"], "method", false, false, true, 291)) ? ("has-error") : (""));
            echo "\">
        <label class=\"\" for=\"children_no\">
            Number of children
        </label>
        <input class=\"form-control\" id=\"children_no\" name=\"children_no\" title=\"Number of children\" type=\"number\" value=\"0\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"children_no\"></span>
        </small>
    </div>
    ";
        }
        // line 302
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "children_ages"], "method", false, false, true, 302)) {
            // line 303
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "children_ages"], "method", false, false, true, 303)) ? ("has-error") : (""));
            echo "\">
        <label class=\"\" for=\"children_ages\">
            Children Ages <small>(comma seperated)</small>
        </label>
        <input class=\"form-control\" id=\"children_ages\" name=\"children_ages\" title=\"Children ages\" type=\"text\" placeholder=\"example 5, 9, 15\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"children_ages\"></span>
        </small>
    </div>
    ";
        }
        // line 314
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "accommodation"], "method", false, false, true, 314)) {
            // line 315
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label for=\"\">
            Do you require accommodation during this event?
        </label>
        <div class=\"radio\">
            <label>
                <input id=\"Yes\" name=\"accommodation\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input checked=\"checked\" id=\"No\" name=\"accommodation\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
        </div>
    </div>
    ";
        }
        // line 331
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "feeding"], "method", false, false, true, 331)) {
            // line 332
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label for=\"\">
            Do you require feeding during this event?
        </label>
        <div class=\"radio\">
            <label>
                <input id=\"Yes\" name=\"feeding\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input checked=\"checked\" id=\"No\" name=\"feeding\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
        </div>
    </div>
    ";
        }
        // line 348
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "transportation"], "method", false, false, true, 348)) {
            // line 349
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label for=\"\">
            Do you require transportation during this event?
        </label>
        <div class=\"radio\">
            <label>
                <input id=\"Yes\" name=\"transportation\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input checked=\"checked\" id=\"No\" name=\"transportation\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
        </div>
    </div>
    ";
        }
        // line 365
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "coming_with_car"], "method", false, false, true, 365)) {
            // line 366
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label for=\"\">
            Are you coming with a car?
        </label>
        <div class=\"radio\">
            <label>
                <input id=\"Yes\" name=\"coming_with_car\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input checked=\"checked\" id=\"No\" name=\"coming_with_car\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
        </div>
    </div>
    ";
        }
        // line 382
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "assist_with_car"], "method", false, false, true, 382)) {
            // line 383
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label for=\"\">
            Are you willing to use your car to transport people to and fro the event venue?
        </label>
        <div class=\"radio\">
            <label>
                <input id=\"Yes\" name=\"assist_with_car\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input checked=\"checked\" id=\"No\" name=\"assist_with_car\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
        </div>
    </div>
    ";
        }
        // line 399
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Registration"] ?? null), "property", [0 => "attendance_mode"], "method", false, false, true, 399)) {
            // line 400
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "attendance_mode"], "method", false, false, true, 400)) ? ("has-error") : (""));
            echo "\">
        <label for=\"\">
            Will you be attending onsite or online?
        </label>
        <div class=\"radio\">
            <label>
                <input checked=\"checked\" id=\"Onsite\" name=\"attendance_mode\" title=\"Onsite\" type=\"radio\" value=\"Onsite\">&nbsp Onsite
                </input>
            </label>
            <label>
                <input id=\"Online\" name=\"attendance_mode\" title=\"Online\" type=\"radio\" value=\"Online\"> &nbsp Online
                </input>
            </label>
        </div>
        <small>
            <span class=\"text-danger\" data-validate-for=\"attendance_mode\" style=\"color: red\"></span>
        </small>
    </div>
    ";
        }
        // line 419
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "arrival_date"], "method", false, false, true, 419)) {
            // line 420
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "arrival_date"], "method", false, false, true, 420)) ? ("has-error") : (""));
            echo "\">
        <label class=\"\" for=\"arrival_date\">
            Date of arrival
        </label>
        <input class=\"form-control\" id=\"arrival_date\" name=\"arrival_date\" title=\"Date of arrival\" type=\"date\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"arrival_date\"></span>
        </small>
    </div>
    ";
        }
        // line 431
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "departure_date"], "method", false, false, true, 431)) {
            // line 432
            echo "    <div class=\"col-lg-6 col-sm-12 col-md-6 pt-50 ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "has", [0 => "departure_date"], "method", false, false, true, 432)) ? ("has-error") : (""));
            echo "\">
        <label class=\"\" for=\"departure_date\">
            Date of departure
        </label>
        <input class=\"form-control\" id=\"departure_date\" name=\"departure_date\" title=\"Date of departure\" type=\"date\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"departure_date\"></span>
        </small>
    </div>
    ";
        }
        // line 443
        echo "    </div>

    <button data-attach-loading type=\"submit\" class=\"btn btn-primary btn-h7\" style=\"padding: 10px border-radius: 4px; background-image: none;\">Register</button>

";
        // line 447
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
        return array (  643 => 447,  637 => 443,  622 => 432,  619 => 431,  604 => 420,  601 => 419,  578 => 400,  575 => 399,  557 => 383,  554 => 382,  536 => 366,  533 => 365,  515 => 349,  512 => 348,  494 => 332,  491 => 331,  473 => 315,  470 => 314,  455 => 303,  452 => 302,  437 => 291,  434 => 290,  411 => 271,  408 => 270,  385 => 251,  382 => 250,  372 => 242,  369 => 241,  359 => 233,  357 => 232,  354 => 231,  344 => 223,  341 => 222,  331 => 214,  329 => 213,  326 => 212,  320 => 208,  309 => 206,  305 => 205,  298 => 200,  296 => 199,  293 => 198,  283 => 190,  280 => 189,  267 => 178,  264 => 177,  254 => 169,  251 => 168,  233 => 152,  230 => 151,  215 => 140,  213 => 139,  200 => 128,  170 => 102,  168 => 101,  165 => 100,  136 => 75,  134 => 74,  120 => 63,  117 => 62,  72 => 21,  70 => 20,  54 => 6,  47 => 3,  42 => 2,  39 => 1,);
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
        <input class=\"form-control\" id=\"phone\" name=\"phone\" pattern=\"\" title=\"Phone number\" type=\"number\">
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
        <input class=\"form-control\" id=\"email\" name=\"email\" title=\"Email\" type=\"email\" value=\"\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"email\"></span>
        </small>
    </div>
    {% endif %}
    {% if __SELF__.property('is_partner') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label for=\"\">
            Are you a partner?
        </label>
        <div class=\"radio\">
            <label>
                <input checked=\"checked\" id=\"Yes\" name=\"is_partner\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input id=\"No\" name=\"is_partner\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
        </div>
    </div>
    {% endif %}
    {% if __SELF__.property('occupation') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"occupation\">
            Occupation
        </label>
        <input class=\"form-control\" id=\"occupation\" name=\"occupation\" title=\"Occupation\" type=\"text\">
        </input>
    </div>
    {% endif %}
    {% if __SELF__.property('location') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"location\">
            Location <span style=\"color: red;\">*</span>
        </label>
        <input class=\"form-control\" id=\"location\" name=\"location\" title=\"Occupation\" type=\"text\">
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
        <input class=\"form-control\" id=\"address\" name=\"address\" title=\"Your address\" type=\"text\">
        </input>
    </div>
    {% endif %}

    {% if __SELF__.property('cfc_center') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"cfc_center\">
            CFC Center
        </label>
        <select class=\"form-control\" id=\"cfc_center\" name=\"cfc_center\" title=\"CFC Center\" type=\"text\">
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
        <input class=\"form-control\" id=\"service_team\" name=\"service_team\" title=\"Service Team\" type=\"text\">
        </input>
    </div>
    {% endif %}
    {% if __SELF__.property('position_held') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"position_held\">
            Position Held
        </label>
        <input class=\"form-control\" id=\"position_held\" name=\"position_held\" title=\"Position Held\" type=\"text\">
        </input>
    </div>
    {% endif %}

    {% if __SELF__.property('church_name') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"church_name\">
            The name of your church
        </label>
        <input class=\"form-control\" id=\"church_name\" name=\"church_name\" title=\"The name of your church\" type=\"text\">
        </input>
    </div>
    {% endif %}
    {% if __SELF__.property('pastor_name') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label class=\"\" for=\"pastor_name\">
            Your pastor's name
        </label>
        <input class=\"form-control\" id=\"pastor_name\" name=\"pastor_name\" title=\"Your pastor's name\" type=\"text\">
        </input>
    </div>
    {% endif %}
    {% if __SELF__.property('spouse') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 {{ errors.has('spouse') ? 'has-error' : '' }}\">
        <label for=\"\">
            Are you coming with your spouse?
        </label>
        <div class=\"radio\">
            <label>
                <input id=\"Yes\" name=\"spouse\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input id=\"No\" name=\"spouse\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
            <small>
                <span class=\"text-danger\" data-validate-for=\"spouse\"></span>
            </small>
        </div>
    </div>
    {% endif %}
    {% if __SELF__.property('children') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 {{ errors.has('children') ? 'has-error' : '' }}\">
        <label for=\"\">
            Are you coming with your children?
        </label>
        <div class=\"radio\">
            <label>
                <input id=\"Yes\" name=\"children\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input id=\"No\" name=\"children\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
            <small>
                <span class=\"text-danger\" data-validate-for=\"children\"></span>
            </small>
        </div>
    </div>
    {% endif %}
    {% if __SELF__.property('children_no') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 {{ errors.has('children_no') ? 'has-error' : '' }}\">
        <label class=\"\" for=\"children_no\">
            Number of children
        </label>
        <input class=\"form-control\" id=\"children_no\" name=\"children_no\" title=\"Number of children\" type=\"number\" value=\"0\">
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
        <input class=\"form-control\" id=\"children_ages\" name=\"children_ages\" title=\"Children ages\" type=\"text\" placeholder=\"example 5, 9, 15\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"children_ages\"></span>
        </small>
    </div>
    {% endif %}
    {% if __SELF__.property('accommodation') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label for=\"\">
            Do you require accommodation during this event?
        </label>
        <div class=\"radio\">
            <label>
                <input id=\"Yes\" name=\"accommodation\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input checked=\"checked\" id=\"No\" name=\"accommodation\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
        </div>
    </div>
    {% endif %}
    {% if __SELF__.property('feeding') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label for=\"\">
            Do you require feeding during this event?
        </label>
        <div class=\"radio\">
            <label>
                <input id=\"Yes\" name=\"feeding\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input checked=\"checked\" id=\"No\" name=\"feeding\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
        </div>
    </div>
    {% endif %}
    {% if __SELF__.property('transportation') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label for=\"\">
            Do you require transportation during this event?
        </label>
        <div class=\"radio\">
            <label>
                <input id=\"Yes\" name=\"transportation\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input checked=\"checked\" id=\"No\" name=\"transportation\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
        </div>
    </div>
    {% endif %}
    {% if __SELF__.property('coming_with_car') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label for=\"\">
            Are you coming with a car?
        </label>
        <div class=\"radio\">
            <label>
                <input id=\"Yes\" name=\"coming_with_car\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input checked=\"checked\" id=\"No\" name=\"coming_with_car\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
        </div>
    </div>
    {% endif %}
    {% if __SELF__.property('assist_with_car') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50\">
        <label for=\"\">
            Are you willing to use your car to transport people to and fro the event venue?
        </label>
        <div class=\"radio\">
            <label>
                <input id=\"Yes\" name=\"assist_with_car\" title=\"Yes\" type=\"radio\" value=\"1\"> Yes
                </input>
            </label>
            <label>
                <input checked=\"checked\" id=\"No\" name=\"assist_with_car\" title=\"No\" type=\"radio\" value=\"0\"> No
                </input>
            </label>
        </div>
    </div>
    {% endif %}
    {% if Registration.property('attendance_mode') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 {{ errors.has('attendance_mode') ? 'has-error' : '' }}\">
        <label for=\"\">
            Will you be attending onsite or online?
        </label>
        <div class=\"radio\">
            <label>
                <input checked=\"checked\" id=\"Onsite\" name=\"attendance_mode\" title=\"Onsite\" type=\"radio\" value=\"Onsite\">&nbsp Onsite
                </input>
            </label>
            <label>
                <input id=\"Online\" name=\"attendance_mode\" title=\"Online\" type=\"radio\" value=\"Online\"> &nbsp Online
                </input>
            </label>
        </div>
        <small>
            <span class=\"text-danger\" data-validate-for=\"attendance_mode\" style=\"color: red\"></span>
        </small>
    </div>
    {% endif %}
    {% if __SELF__.property('arrival_date') %}
    <div class=\"col-lg-6 col-sm-12 col-md-6  pt-50 {{ errors.has('arrival_date') ? 'has-error' : '' }}\">
        <label class=\"\" for=\"arrival_date\">
            Date of arrival
        </label>
        <input class=\"form-control\" id=\"arrival_date\" name=\"arrival_date\" title=\"Date of arrival\" type=\"date\">
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
        <input class=\"form-control\" id=\"departure_date\" name=\"departure_date\" title=\"Date of departure\" type=\"date\">
        </input>
        <small>
            <span class=\"text-danger\" data-validate-for=\"departure_date\"></span>
        </small>
    </div>
    {% endif %}
    </div>

    <button data-attach-loading type=\"submit\" class=\"btn btn-primary btn-h7\" style=\"padding: 10px border-radius: 4px; background-image: none;\">Register</button>

{{ form_close() }}
", "C:\\laragon\\www\\fa21/plugins/umaha/events/components/registration/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("flash" => 1, "if" => 20, "for" => 205);
        static $filters = array("escape" => 2);
        static $functions = array("form_close" => 447);

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
