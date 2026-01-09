<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* catalog/view/template/account/returns_form.twig */
class __TwigTemplate_98baaa6d59a51463618499a137163b96 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield "
<div id=\"account-return\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 9
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <p>";
        // line 11
        yield ($context["text_description"] ?? null);
        yield "</p>
      <form id=\"form-return\" action=\"";
        // line 12
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>";
        // line 14
        yield ($context["text_order"] ?? null);
        yield "</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-order-id\" class=\"col-sm-2 col-form-label\">";
        // line 16
        yield ($context["entry_order_id"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 18
        yield ($context["order_id"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_order_id"] ?? null);
        yield "\" id=\"input-order-id\" class=\"form-control\"/>
              <div id=\"error-order-id\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-date-ordered\" class=\"col-sm-2 col-form-label\">";
        // line 23
        yield ($context["entry_date_ordered"] ?? null);
        yield "</label>
            <div class=\"col-sm-10 col-md-4\">
              <input type=\"date\" name=\"date_ordered\" value=\"";
        // line 25
        yield ($context["date_ordered"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_ordered"] ?? null);
        yield "\" id=\"input-date-ordered\" class=\"form-control\"/>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 30
        yield ($context["text_customer"] ?? null);
        yield "</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 32
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 34
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 39
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 41
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 46
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 48
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          ";
        // line 52
        if (($context["config_telephone_display"] ?? null)) {
            // line 53
            yield "          <div class=\"row mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                yield " required";
            }
            yield "\">
            <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
            // line 54
            yield ($context["entry_telephone"] ?? null);
            yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"";
            // line 56
            yield ($context["telephone"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_telephone"] ?? null);
            yield "\" id=\"input-telephone\" class=\"form-control\"/>
              <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          ";
        }
        // line 61
        yield "        </fieldset>
        <fieldset>
          <legend>";
        // line 63
        yield ($context["text_product"] ?? null);
        yield "</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-product\" class=\"col-sm-2 col-form-label\">";
        // line 65
        yield ($context["entry_product"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 67
        yield ($context["product_id"] ?? null);
        yield "\"/>
              <input type=\"text\" name=\"product\" value=\"";
        // line 68
        yield ($context["product"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_product"] ?? null);
        yield "\" id=\"input-product\" class=\"form-control\"/>
              <div id=\"error-product\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-model\" class=\"col-sm-2 col-form-label\">";
        // line 73
        yield ($context["entry_model"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 75
        yield ($context["model"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_model"] ?? null);
        yield "\" id=\"input-model\" class=\"form-control\"/>
              <div id=\"error-model\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">";
        // line 80
        yield ($context["entry_quantity"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"quantity\" value=\"1\" placeholder=\"";
        // line 82
        yield ($context["entry_quantity"] ?? null);
        yield "\" id=\"input-quantity\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 86
        yield ($context["entry_reason"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div id=\"input-reason\">
                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 90
            yield "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"return_reason_id\" value=\"";
            // line 91
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 91);
            yield "\" id=\"input-return-reason-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 91);
            yield "\" class=\"form-check-input\"/> <label for=\"input-return-reason-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 91);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 91);
            yield "</label>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return_reason'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "              </div>
              <div id=\"error-reason\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 99
        yield ($context["entry_opened"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"opened\" value=\"1\" id=\"input-opened-yes\" class=\"form-check-input\" checked/>
                <label for=\"input-opened-yes\" class=\"form-check-label\">";
        // line 103
        yield ($context["text_yes"] ?? null);
        yield "</label>
              </div>
              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"opened\" value=\"0\" id=\"input-opened-no\" class=\"form-check-input\"/>
                <label for=\"input-opened-no\" class=\"form-check-label\">";
        // line 107
        yield ($context["text_no"] ?? null);
        yield "</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 112
        yield ($context["entry_fault_detail"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 114
        yield ($context["entry_fault_detail"] ?? null);
        yield "\" id=\"input-comment\" class=\"form-control\"></textarea>
            </div>
          </div>
          ";
        // line 117
        yield ($context["captcha"] ?? null);
        yield "
        </fieldset>
        <div class=\"row\">
          <div class=\"col-3\"><a href=\"";
        // line 120
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-light\">";
        yield ($context["button_back"] ?? null);
        yield "</a></div>
          <div class=\"col text-end\">
            ";
        // line 122
        if (($context["text_agree"] ?? null)) {
            // line 123
            yield "              <div class=\"form-check form-switch form-switch-lg form-check-reverse form-check-inline\">
                <label class=\"form-check-label\">";
            // line 124
            yield ($context["text_agree"] ?? null);
            yield "</label>
                <input type=\"hidden\" name=\"agree\" value=\"0\"/>
                <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-agree\" class=\"form-check-input\"/>
              </div>
            ";
        }
        // line 129
        yield "            <button type=\"submit\" class=\"btn btn-primary\">";
        yield ($context["button_submit"] ?? null);
        yield "</button>
          </div>
        </div>
      </form>
      ";
        // line 133
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 134
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 136
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/returns_form.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  361 => 136,  356 => 134,  352 => 133,  344 => 129,  336 => 124,  333 => 123,  331 => 122,  324 => 120,  318 => 117,  312 => 114,  307 => 112,  299 => 107,  292 => 103,  285 => 99,  278 => 94,  263 => 91,  260 => 90,  256 => 89,  250 => 86,  243 => 82,  238 => 80,  228 => 75,  223 => 73,  213 => 68,  209 => 67,  204 => 65,  199 => 63,  195 => 61,  185 => 56,  180 => 54,  173 => 53,  171 => 52,  162 => 48,  157 => 46,  147 => 41,  142 => 39,  132 => 34,  127 => 32,  122 => 30,  112 => 25,  107 => 23,  97 => 18,  92 => 16,  87 => 14,  82 => 12,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-return\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <p>{{ text_description }}</p>
      <form id=\"form-return\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>{{ text_order }}</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-order-id\" class=\"col-sm-2 col-form-label\">{{ entry_order_id }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"order_id\" value=\"{{ order_id }}\" placeholder=\"{{ entry_order_id }}\" id=\"input-order-id\" class=\"form-control\"/>
              <div id=\"error-order-id\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-date-ordered\" class=\"col-sm-2 col-form-label\">{{ entry_date_ordered }}</label>
            <div class=\"col-sm-10 col-md-4\">
              <input type=\"date\" name=\"date_ordered\" value=\"{{ date_ordered }}\" placeholder=\"{{ entry_date_ordered }}\" id=\"input-date-ordered\" class=\"form-control\"/>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>{{ text_customer }}</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">{{ entry_firstname }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">{{ entry_lastname }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">{{ entry_email }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          {% if config_telephone_display %}
          <div class=\"row mb-3{% if config_telephone_required %} required{% endif %}\">
            <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">{{ entry_telephone }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
              <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          {% endif %}
        </fieldset>
        <fieldset>
          <legend>{{ text_product }}</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-product\" class=\"col-sm-2 col-form-label\">{{ entry_product }}</label>
            <div class=\"col-sm-10\">
              <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\"/>
              <input type=\"text\" name=\"product\" value=\"{{ product }}\" placeholder=\"{{ entry_product }}\" id=\"input-product\" class=\"form-control\"/>
              <div id=\"error-product\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-model\" class=\"col-sm-2 col-form-label\">{{ entry_model }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"model\" value=\"{{ model }}\" placeholder=\"{{ entry_model }}\" id=\"input-model\" class=\"form-control\"/>
              <div id=\"error-model\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">{{ entry_quantity }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"quantity\" value=\"1\" placeholder=\"{{ entry_quantity }}\" id=\"input-quantity\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_reason }}</label>
            <div class=\"col-sm-10\">
              <div id=\"input-reason\">
                {% for return_reason in return_reasons %}
                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"return_reason_id\" value=\"{{ return_reason.return_reason_id }}\" id=\"input-return-reason-{{ return_reason.return_reason_id }}\" class=\"form-check-input\"/> <label for=\"input-return-reason-{{ return_reason.return_reason_id }}\" class=\"form-check-label\">{{ return_reason.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-reason\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_opened }}</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"opened\" value=\"1\" id=\"input-opened-yes\" class=\"form-check-input\" checked/>
                <label for=\"input-opened-yes\" class=\"form-check-label\">{{ text_yes }}</label>
              </div>
              <div class=\"form-check form-check-inline\">
                <input type=\"radio\" name=\"opened\" value=\"0\" id=\"input-opened-no\" class=\"form-check-input\"/>
                <label for=\"input-opened-no\" class=\"form-check-label\">{{ text_no }}</label>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">{{ entry_fault_detail }}</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"5\" placeholder=\"{{ entry_fault_detail }}\" id=\"input-comment\" class=\"form-control\"></textarea>
            </div>
          </div>
          {{ captcha }}
        </fieldset>
        <div class=\"row\">
          <div class=\"col-3\"><a href=\"{{ back }}\" class=\"btn btn-light\">{{ button_back }}</a></div>
          <div class=\"col text-end\">
            {% if text_agree %}
              <div class=\"form-check form-switch form-switch-lg form-check-reverse form-check-inline\">
                <label class=\"form-check-label\">{{ text_agree }}</label>
                <input type=\"hidden\" name=\"agree\" value=\"0\"/>
                <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-agree\" class=\"form-check-input\"/>
              </div>
            {% endif %}
            <button type=\"submit\" class=\"btn btn-primary\">{{ button_submit }}</button>
          </div>
        </div>
      </form>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/account/returns_form.twig", "/var/www/html/catalog/view/template/account/returns_form.twig");
    }
}
