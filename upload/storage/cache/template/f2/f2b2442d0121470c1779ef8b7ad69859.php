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

/* martket/view/template/marketing/marketing_list.twig */
class __TwigTemplate_5fb9aec360a44cc5df1518f54e44a093 extends Template
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
        yield "<form id=\"form-marketing\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#marketing\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"";
        // line 7
        yield ($context["sort_name"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "m.name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_name"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 8
        yield ($context["sort_code"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "m.code")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_code"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 9
        yield ($context["column_clicks"] ?? null);
        yield "</th>
          <th class=\"text-end\">";
        // line 10
        yield ($context["column_orders"] ?? null);
        yield "</th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"";
        // line 11
        yield ($context["sort_date_added"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "m.date_added")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_date_added"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 12
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 16
        if (($context["marketings"] ?? null)) {
            // line 17
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["marketings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["marketing"]) {
                // line 18
                yield "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "marketing_id", [], "any", false, false, false, 19);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "name", [], "any", false, false, false, 20);
                yield "</td>
              <td>";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "code", [], "any", false, false, false, 21);
                yield "</td>
              <td class=\"text-end\">";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "clicks", [], "any", false, false, false, 22);
                yield "</td>
              <td class=\"text-end\">";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "orders", [], "any", false, false, false, 23);
                yield "</td>
              <td class=\"d-none d-lg-table-cell\">";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "date_added", [], "any", false, false, false, 24);
                yield "</td>
              <td class=\"text-end\"><a href=\"";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["marketing"], "edit", [], "any", false, false, false, 25);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['marketing'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "        ";
        } else {
            // line 29
            yield "          <tr>
            <td class=\"text-center\" colspan=\"8\">";
            // line 30
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 33
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 37
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 38
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "martket/view/template/marketing/marketing_list.twig";
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
        return array (  170 => 38,  166 => 37,  160 => 33,  154 => 30,  151 => 29,  148 => 28,  137 => 25,  133 => 24,  129 => 23,  125 => 22,  121 => 21,  117 => 20,  113 => 19,  110 => 18,  105 => 17,  103 => 16,  96 => 12,  84 => 11,  80 => 10,  76 => 9,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-marketing\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#marketing\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_name }}\"{% if sort == 'm.name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></th>
          <th><a href=\"{{ sort_code }}\"{% if sort == 'm.code' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_code }}</a></th>
          <th class=\"text-end\">{{ column_clicks }}</th>
          <th class=\"text-end\">{{ column_orders }}</th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"{{ sort_date_added }}\"{% if sort == 'm.date_added' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_date_added }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if marketings %}
          {% for marketing in marketings %}
            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ marketing.marketing_id }}\" class=\"form-check-input\"/></td>
              <td>{{ marketing.name }}</td>
              <td>{{ marketing.code }}</td>
              <td class=\"text-end\">{{ marketing.clicks }}</td>
              <td class=\"text-end\">{{ marketing.orders }}</td>
              <td class=\"d-none d-lg-table-cell\">{{ marketing.date_added }}</td>
              <td class=\"text-end\"><a href=\"{{ marketing.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"8\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>", "martket/view/template/marketing/marketing_list.twig", "/var/www/html/martket/view/template/marketing/marketing_list.twig");
    }
}
