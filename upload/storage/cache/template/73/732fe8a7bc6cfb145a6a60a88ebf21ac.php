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

/* martket/view/template/localisation/currency_form.twig */
class __TwigTemplate_fb47ec908457dce3eb8b7898f9860152 extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-currency\" formaction=\"";
        // line 6
        yield ($context["save"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 17
        yield ($context["text_iso"] ?? null);
        yield "</div>
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 19
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-currency\" action=\"";
        // line 21
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-title\" class=\"col-sm-2 col-form-label\">";
        // line 23
        yield ($context["entry_title"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"title\" value=\"";
        // line 25
        yield ($context["title"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_title"] ?? null);
        yield "\" id=\"input-title\" class=\"form-control\"/>
              <div id=\"error-title\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-code\" class=\"col-sm-2 col-form-label\">";
        // line 30
        yield ($context["entry_code"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"code\" value=\"";
        // line 32
        yield ($context["code"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_code"] ?? null);
        yield "\" id=\"input-code\" class=\"form-control\"/>
              <div class=\"form-text\">";
        // line 33
        yield ($context["help_code"] ?? null);
        yield "</div>
              <div id=\"error-code\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-symbol-left\" class=\"col-sm-2 col-form-label\">";
        // line 38
        yield ($context["entry_symbol_left"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_left\" value=\"";
        // line 40
        yield ($context["symbol_left"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_symbol_left"] ?? null);
        yield "\" id=\"input-symbol-left\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-symbol-right\" class=\"col-sm-2 col-form-label\">";
        // line 44
        yield ($context["entry_symbol_right"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_right\" value=\"";
        // line 46
        yield ($context["symbol_right"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_symbol_right"] ?? null);
        yield "\" id=\"input-symbol-right\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-decimal-place\" class=\"col-sm-2 col-form-label\">";
        // line 50
        yield ($context["entry_decimal_place"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"decimal_place\" value=\"";
        // line 52
        yield ($context["decimal_place"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_decimal_place"] ?? null);
        yield "\" id=\"input-decimal-place\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-value\" class=\"col-sm-2 col-form-label\">";
        // line 56
        yield ($context["entry_value"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"value\" value=\"";
        // line 58
        yield ($context["value"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_value"] ?? null);
        yield "\" id=\"input-value\" class=\"form-control\"/>
              <div class=\"form-text\">";
        // line 59
        yield ($context["help_value"] ?? null);
        yield "</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 63
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 67
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"currency_id\" value=\"";
        // line 71
        yield ($context["currency_id"] ?? null);
        yield "\" id=\"input-currency-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 77
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
        return "martket/view/template/localisation/currency_form.twig";
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
        return array (  223 => 77,  214 => 71,  205 => 67,  198 => 63,  191 => 59,  185 => 58,  180 => 56,  171 => 52,  166 => 50,  157 => 46,  152 => 44,  143 => 40,  138 => 38,  130 => 33,  124 => 32,  119 => 30,  109 => 25,  104 => 23,  99 => 21,  94 => 19,  89 => 17,  83 => 13,  72 => 11,  68 => 10,  63 => 8,  57 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-currency\" formaction=\"{{ save }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_iso }}</div>
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-currency\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-title\" class=\"col-sm-2 col-form-label\">{{ entry_title }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"title\" value=\"{{ title }}\" placeholder=\"{{ entry_title }}\" id=\"input-title\" class=\"form-control\"/>
              <div id=\"error-title\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-code\" class=\"col-sm-2 col-form-label\">{{ entry_code }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"code\" value=\"{{ code }}\" placeholder=\"{{ entry_code }}\" id=\"input-code\" class=\"form-control\"/>
              <div class=\"form-text\">{{ help_code }}</div>
              <div id=\"error-code\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-symbol-left\" class=\"col-sm-2 col-form-label\">{{ entry_symbol_left }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_left\" value=\"{{ symbol_left }}\" placeholder=\"{{ entry_symbol_left }}\" id=\"input-symbol-left\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-symbol-right\" class=\"col-sm-2 col-form-label\">{{ entry_symbol_right }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"symbol_right\" value=\"{{ symbol_right }}\" placeholder=\"{{ entry_symbol_right }}\" id=\"input-symbol-right\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-decimal-place\" class=\"col-sm-2 col-form-label\">{{ entry_decimal_place }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"decimal_place\" value=\"{{ decimal_place }}\" placeholder=\"{{ entry_decimal_place }}\" id=\"input-decimal-place\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-value\" class=\"col-sm-2 col-form-label\">{{ entry_value }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"value\" value=\"{{ value }}\" placeholder=\"{{ entry_value }}\" id=\"input-value\" class=\"form-control\"/>
              <div class=\"form-text\">{{ help_value }}</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"currency_id\" value=\"{{ currency_id }}\" id=\"input-currency-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}
", "martket/view/template/localisation/currency_form.twig", "/var/www/html/martket/view/template/localisation/currency_form.twig");
    }
}
