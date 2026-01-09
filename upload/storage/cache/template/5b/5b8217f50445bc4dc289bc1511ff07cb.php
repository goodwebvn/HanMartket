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

/* martket/view/template/report/online_list.twig */
class __TwigTemplate_6fc34e7ec71e01e9aadbc7832daa9f8c extends Template
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
        <th>";
        // line 5
        yield ($context["column_ip"] ?? null);
        yield "</th>
        <th>";
        // line 6
        yield ($context["column_customer"] ?? null);
        yield "</th>
        <th>";
        // line 7
        yield ($context["column_url"] ?? null);
        yield "</th>
        <th>";
        // line 8
        yield ($context["column_referer"] ?? null);
        yield "</th>
        <th>";
        // line 9
        yield ($context["column_date_added"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 10
        yield ($context["column_action"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 14
        if (($context["customers"] ?? null)) {
            // line 15
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 16
                yield "          <tr>
            <td><a href=\"https://whatismyipaddress.com/ip/";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "ip", [], "any", false, false, false, 17);
                yield "\" rel=\"noreferrer\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "ip", [], "any", false, false, false, 17);
                yield "</a></td>
            <td>";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer", [], "any", false, false, false, 18);
                yield "</td>
            <td><a href=\"";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "url", [], "any", false, false, false, 19);
                yield "\" rel=\"noreferrer\" target=\"_blank\">";
                yield Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "url", [], "any", false, false, false, 19), "", 30), "<br/>");
                yield "</a></td>
            <td>";
                // line 20
                if (CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "referer", [], "any", false, false, false, 20)) {
                    yield "<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "referer", [], "any", false, false, false, 20);
                    yield "\" rel=\"noreferrer\" target=\"_blank\">";
                    yield Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "referer", [], "any", false, false, false, 20), "", 30), "<br/>");
                    yield "</a>";
                }
                yield "</td>
            <td>";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "date_added", [], "any", false, false, false, 21);
                yield "</td>
            <td class=\"text-end\">";
                // line 22
                if (CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 22)) {
                    yield "<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 22);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_edit"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>";
                } else {
                    yield "<button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_edit"] ?? null);
                    yield "\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa-solid fa-pencil\"></i></button>";
                }
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "      ";
        } else {
            // line 26
            yield "        <tr>
          <td class=\"text-center\" colspan=\"6\">";
            // line 27
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 30
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 34
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 35
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
        return "martket/view/template/report/online_list.twig";
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
        return array (  156 => 35,  152 => 34,  146 => 30,  140 => 27,  137 => 26,  134 => 25,  115 => 22,  111 => 21,  101 => 20,  95 => 19,  91 => 18,  85 => 17,  82 => 16,  77 => 15,  75 => 14,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <th>{{ column_ip }}</th>
        <th>{{ column_customer }}</th>
        <th>{{ column_url }}</th>
        <th>{{ column_referer }}</th>
        <th>{{ column_date_added }}</th>
        <th class=\"text-end\">{{ column_action }}</th>
      </tr>
    </thead>
    <tbody>
      {% if customers %}
        {% for customer in customers %}
          <tr>
            <td><a href=\"https://whatismyipaddress.com/ip/{{ customer.ip }}\" rel=\"noreferrer\" target=\"_blank\">{{ customer.ip }}</a></td>
            <td>{{ customer.customer }}</td>
            <td><a href=\"{{ customer.url }}\" rel=\"noreferrer\" target=\"_blank\">{{ customer.url|split('', 30)|join('<br/>') }}</a></td>
            <td>{% if customer.referer %}<a href=\"{{ customer.referer }}\" rel=\"noreferrer\" target=\"_blank\">{{ customer.referer|split('', 30)|join('<br/>') }}</a>{% endif %}</td>
            <td>{{ customer.date_added }}</td>
            <td class=\"text-end\">{% if customer.customer_id %}<a href=\"{{ customer.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a>{% else %}<button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa-solid fa-pencil\"></i></button>{% endif %}</td>
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
</div>", "martket/view/template/report/online_list.twig", "/var/www/html/martket/view/template/report/online_list.twig");
    }
}
