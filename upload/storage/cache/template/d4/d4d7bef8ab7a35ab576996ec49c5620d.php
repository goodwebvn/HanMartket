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

/* extension/opencart/admin/view/template/report/customer_order_list.twig */
class __TwigTemplate_388da534dfa7019fab8dbdf5539aaca3 extends Template
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
        yield "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th class=\"text-start\">";
        // line 5
        yield ($context["column_customer"] ?? null);
        yield "</th>
        <th class=\"text-start\">";
        // line 6
        yield ($context["column_email"] ?? null);
        yield "</th>
        <th class=\"text-start\">";
        // line 7
        yield ($context["column_customer_group"] ?? null);
        yield "</th>
        <th class=\"text-start\">";
        // line 8
        yield ($context["column_status"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 9
        yield ($context["column_orders"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 10
        yield ($context["column_products"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 11
        yield ($context["column_total"] ?? null);
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
        if (($context["customers"] ?? null)) {
            // line 17
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 18
                yield "          <tr>
            <td class=\"text-start\">";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer", [], "any", false, false, false, 19);
                yield "</td>
            <td class=\"text-start\">";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 20);
                yield "</td>
            <td class=\"text-start\">";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer_group", [], "any", false, false, false, 21);
                yield "</td>
            <td class=\"text-start\">";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "status", [], "any", false, false, false, 22);
                yield "</td>
            <td class=\"text-end\">";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "orders", [], "any", false, false, false, 23);
                yield "</td>
            <td class=\"text-end\">";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "products", [], "any", false, false, false, 24);
                yield "</td>
            <td class=\"text-end\">";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "total", [], "any", false, false, false, 25);
                yield "</td>
            <td class=\"text-end\"><a href=\"";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 26);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "      ";
        } else {
            // line 30
            yield "        <tr>
          <td class=\"text-center\" colspan=\"8\">";
            // line 31
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 34
        yield "    </tbody>
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
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/opencart/admin/view/template/report/customer_order_list.twig";
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
        return array (  154 => 39,  150 => 38,  144 => 34,  138 => 31,  135 => 30,  132 => 29,  121 => 26,  117 => 25,  113 => 24,  109 => 23,  105 => 22,  101 => 21,  97 => 20,  93 => 19,  90 => 18,  85 => 17,  83 => 16,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th class=\"text-start\">{{ column_customer }}</th>
        <th class=\"text-start\">{{ column_email }}</th>
        <th class=\"text-start\">{{ column_customer_group }}</th>
        <th class=\"text-start\">{{ column_status }}</th>
        <th class=\"text-end\">{{ column_orders }}</th>
        <th class=\"text-end\">{{ column_products }}</th>
        <th class=\"text-end\">{{ column_total }}</th>
        <th class=\"text-end\">{{ column_action }}</th>
      </tr>
    </thead>
    <tbody>
      {% if customers %}
        {% for customer in customers %}
          <tr>
            <td class=\"text-start\">{{ customer.customer }}</td>
            <td class=\"text-start\">{{ customer.email }}</td>
            <td class=\"text-start\">{{ customer.customer_group }}</td>
            <td class=\"text-start\">{{ customer.status }}</td>
            <td class=\"text-end\">{{ customer.orders }}</td>
            <td class=\"text-end\">{{ customer.products }}</td>
            <td class=\"text-end\">{{ customer.total }}</td>
            <td class=\"text-end\"><a href=\"{{ customer.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
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
</div>", "extension/opencart/admin/view/template/report/customer_order_list.twig", "/var/www/html/extension/opencart/admin/view/template/report/customer_order_list.twig");
    }
}
