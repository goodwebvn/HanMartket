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

/* martket/view/template/customer/customer_approval_list.twig */
class __TwigTemplate_e7db51e0287cd6db5be0d9cbb090bddd extends Template
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
        yield "<form id=\"form-customer-approval\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#customer-approval\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th>";
        // line 7
        yield ($context["column_customer"] ?? null);
        yield "</th>
          <th>";
        // line 8
        yield ($context["column_email"] ?? null);
        yield "</th>
          <th>";
        // line 9
        yield ($context["column_customer_group"] ?? null);
        yield "</th>
          <th>";
        // line 10
        yield ($context["column_type"] ?? null);
        yield "</th>
          <th>";
        // line 11
        yield ($context["column_date_added"] ?? null);
        yield "</th>
          <th class=\"text-end\">";
        // line 12
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 16
        if (($context["customer_approvals"] ?? null)) {
            // line 17
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_approvals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_approval"]) {
                // line 18
                yield "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_approval"], "customer_approval_id", [], "any", false, false, false, 19);
                yield "\" class=\"form-check-input\"/></td>
              <td><a href=\"";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_approval"], "edit", [], "any", false, false, false, 20);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_approval"], "customer", [], "any", false, false, false, 20);
                yield "</a></td>
              <td>";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_approval"], "email", [], "any", false, false, false, 21);
                yield "</td>
              <td>";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_approval"], "customer_group", [], "any", false, false, false, 22);
                yield "</td>
              <td>";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_approval"], "type", [], "any", false, false, false, 23);
                yield "</td>
              <td>";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_approval"], "date_added", [], "any", false, false, false, 24);
                yield "</td>
              <td class=\"text-end text-nowrap\"><button type=\"button\" value=\"";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_approval"], "approve", [], "any", false, false, false, 25);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_approve"] ?? null);
                yield "\" class=\"btn btn-success\"><i class=\"fa-solid fa-thumbs-up\"></i></button>
                <button type=\"button\" value=\"";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_approval"], "deny", [], "any", false, false, false, 26);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_deny"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-thumbs-down\"></i></button></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer_approval'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "        ";
        } else {
            // line 30
            yield "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 31
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 34
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 38
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 39
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
        return "martket/view/template/customer/customer_approval_list.twig";
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
        return array (  154 => 39,  150 => 38,  144 => 34,  138 => 31,  135 => 30,  132 => 29,  121 => 26,  115 => 25,  111 => 24,  107 => 23,  103 => 22,  99 => 21,  93 => 20,  89 => 19,  86 => 18,  81 => 17,  79 => 16,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-customer-approval\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#customer-approval\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th>{{ column_customer }}</th>
          <th>{{ column_email }}</th>
          <th>{{ column_customer_group }}</th>
          <th>{{ column_type }}</th>
          <th>{{ column_date_added }}</th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if customer_approvals %}
          {% for customer_approval in customer_approvals %}
            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ customer_approval.customer_approval_id }}\" class=\"form-check-input\"/></td>
              <td><a href=\"{{ customer_approval.edit }}\">{{ customer_approval.customer }}</a></td>
              <td>{{ customer_approval.email }}</td>
              <td>{{ customer_approval.customer_group }}</td>
              <td>{{ customer_approval.type }}</td>
              <td>{{ customer_approval.date_added }}</td>
              <td class=\"text-end text-nowrap\"><button type=\"button\" value=\"{{ customer_approval.approve }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_approve }}\" class=\"btn btn-success\"><i class=\"fa-solid fa-thumbs-up\"></i></button>
                <button type=\"button\" value=\"{{ customer_approval.deny }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_deny }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-thumbs-down\"></i></button></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"7\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>", "martket/view/template/customer/customer_approval_list.twig", "/var/www/html/martket/view/template/customer/customer_approval_list.twig");
    }
}
