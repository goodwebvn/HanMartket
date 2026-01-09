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

/* martket/view/template/customer/gdpr_list.twig */
class __TwigTemplate_cbffba706e9989cc0ee56ac9a783f717 extends Template
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
        yield "<form id=\"form-gdpr\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#gdpr\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th>";
        // line 7
        yield ($context["column_email"] ?? null);
        yield "</th>
          <th>";
        // line 8
        yield ($context["column_request"] ?? null);
        yield "</th>
          <th>";
        // line 9
        yield ($context["column_status"] ?? null);
        yield "</th>
          <th class=\"d-none d-lg-table-cell\">";
        // line 10
        yield ($context["column_date_added"] ?? null);
        yield "</th>
          <th class=\"text-end\">";
        // line 11
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 15
        if (($context["gdprs"] ?? null)) {
            // line 16
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["gdprs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["gdpr"]) {
                // line 17
                yield "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["gdpr"], "gdpr_id", [], "any", false, false, false, 18);
                yield "\" class=\"form-check-input\"/></td>
              <td>
                ";
                // line 20
                if (CoreExtension::getAttribute($this->env, $this->source, $context["gdpr"], "edit", [], "any", false, false, false, 20)) {
                    // line 21
                    yield "                  <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["gdpr"], "edit", [], "any", false, false, false, 21);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["gdpr"], "email", [], "any", false, false, false, 21);
                    yield "</a>
                ";
                } else {
                    // line 23
                    yield "                  ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["gdpr"], "email", [], "any", false, false, false, 23);
                    yield "
                ";
                }
                // line 24
                yield "</td>
              <td>";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["gdpr"], "action", [], "any", false, false, false, 25);
                yield "</td>
              <td>
                ";
                // line 27
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["gdpr"], "status", [], "any", false, false, false, 27) == "-1")) {
                    // line 28
                    yield "                  <span class=\"badge bg-danger\">";
                    yield ($context["text_denied"] ?? null);
                    yield "</span>
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 29
$context["gdpr"], "status", [], "any", false, false, false, 29) == "0")) {
                    // line 30
                    yield "                  <span class=\"badge bg-secondary\">";
                    yield ($context["text_unverified"] ?? null);
                    yield "</span>
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 31
$context["gdpr"], "status", [], "any", false, false, false, 31) == "1")) {
                    // line 32
                    yield "                  <span class=\"badge bg-warning\">";
                    yield ($context["text_pending"] ?? null);
                    yield "</span>
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 33
$context["gdpr"], "status", [], "any", false, false, false, 33) == "2")) {
                    // line 34
                    yield "                  <span class=\"badge bg-info\">";
                    yield ($context["text_processing"] ?? null);
                    yield "</span>
                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 35
$context["gdpr"], "status", [], "any", false, false, false, 35) == "3")) {
                    // line 36
                    yield "                  <span class=\"badge bg-success\">";
                    yield ($context["text_complete"] ?? null);
                    yield "</span>
                ";
                }
                // line 37
                yield "</td>
              <td class=\"d-none d-lg-table-cell\">";
                // line 38
                yield CoreExtension::getAttribute($this->env, $this->source, $context["gdpr"], "date_added", [], "any", false, false, false, 38);
                yield "</td>
              <td class=\"text-end text-nowrap\"><button type=\"button\" value=\"";
                // line 39
                yield CoreExtension::getAttribute($this->env, $this->source, $context["gdpr"], "approve", [], "any", false, false, false, 39);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["text_approve"] ?? null);
                yield "\" class=\"btn btn-success\"><i class=\"fa-solid fa-check\"></i></button>
                <button type=\"button\" value=\"";
                // line 40
                yield CoreExtension::getAttribute($this->env, $this->source, $context["gdpr"], "deny", [], "any", false, false, false, 40);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["text_deny"] ?? null);
                yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
                <button type=\"button\" value=\"";
                // line 41
                yield CoreExtension::getAttribute($this->env, $this->source, $context["gdpr"], "delete", [], "any", false, false, false, 41);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["text_delete"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['gdpr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "        ";
        } else {
            // line 45
            yield "          <tr>
            <td class=\"text-center\" colspan=\"6\">";
            // line 46
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 49
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 53
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 54
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "martket/view/template/customer/gdpr_list.twig";
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
        return array (  202 => 54,  198 => 53,  192 => 49,  186 => 46,  183 => 45,  180 => 44,  169 => 41,  163 => 40,  157 => 39,  153 => 38,  150 => 37,  144 => 36,  142 => 35,  137 => 34,  135 => 33,  130 => 32,  128 => 31,  123 => 30,  121 => 29,  116 => 28,  114 => 27,  109 => 25,  106 => 24,  100 => 23,  92 => 21,  90 => 20,  85 => 18,  82 => 17,  77 => 16,  75 => 15,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-gdpr\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#gdpr\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th>{{ column_email }}</th>
          <th>{{ column_request }}</th>
          <th>{{ column_status }}</th>
          <th class=\"d-none d-lg-table-cell\">{{ column_date_added }}</th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if gdprs %}
          {% for gdpr in gdprs %}
            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ gdpr.gdpr_id }}\" class=\"form-check-input\"/></td>
              <td>
                {% if gdpr.edit %}
                  <a href=\"{{ gdpr.edit }}\">{{ gdpr.email }}</a>
                {% else %}
                  {{ gdpr.email }}
                {% endif %}</td>
              <td>{{ gdpr.action }}</td>
              <td>
                {% if gdpr.status == '-1' %}
                  <span class=\"badge bg-danger\">{{ text_denied }}</span>
                {% elseif gdpr.status == '0' %}
                  <span class=\"badge bg-secondary\">{{ text_unverified }}</span>
                {% elseif gdpr.status == '1' %}
                  <span class=\"badge bg-warning\">{{ text_pending }}</span>
                {% elseif gdpr.status == '2' %}
                  <span class=\"badge bg-info\">{{ text_processing }}</span>
                {% elseif gdpr.status == '3' %}
                  <span class=\"badge bg-success\">{{ text_complete }}</span>
                {% endif %}</td>
              <td class=\"d-none d-lg-table-cell\">{{ gdpr.date_added }}</td>
              <td class=\"text-end text-nowrap\"><button type=\"button\" value=\"{{ gdpr.approve }}\" data-bs-toggle=\"tooltip\" title=\"{{ text_approve }}\" class=\"btn btn-success\"><i class=\"fa-solid fa-check\"></i></button>
                <button type=\"button\" value=\"{{ gdpr.deny }}\" data-bs-toggle=\"tooltip\" title=\"{{ text_deny }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
                <button type=\"button\" value=\"{{ gdpr.delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ text_delete }}\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"6\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>
", "martket/view/template/customer/gdpr_list.twig", "/var/www/html/martket/view/template/customer/gdpr_list.twig");
    }
}
