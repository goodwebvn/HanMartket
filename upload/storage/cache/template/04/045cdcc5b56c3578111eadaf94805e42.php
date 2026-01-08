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

/* extension/opencart/admin/view/template/report/customer_activity_list.twig */
class __TwigTemplate_d1bcceb4679cae37025a343c54794c1a extends Template
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
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th class=\"text-start\">";
        // line 5
        yield ($context["column_comment"] ?? null);
        yield "</th>
        <th class=\"text-start\">";
        // line 6
        yield ($context["column_ip"] ?? null);
        yield "</th>
        <th class=\"text-start\">";
        // line 7
        yield ($context["column_date_added"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if (($context["activities"] ?? null)) {
            // line 12
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["activities"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
                // line 13
                yield "          <tr>
            <td class=\"text-start\">";
                // line 14
                yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "comment", [], "any", false, false, false, 14);
                yield "</td>
            <td class=\"text-start\">";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "ip", [], "any", false, false, false, 15);
                yield "</td>
            <td class=\"text-start\">";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "date_added", [], "any", false, false, false, 16);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "      ";
        } else {
            // line 20
            yield "        <tr>
          <td class=\"text-center\" colspan=\"3\">";
            // line 21
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 24
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 28
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 29
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
        return "extension/opencart/admin/view/template/report/customer_activity_list.twig";
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
        return array (  112 => 29,  108 => 28,  102 => 24,  96 => 21,  93 => 20,  90 => 19,  81 => 16,  77 => 15,  73 => 14,  70 => 13,  65 => 12,  63 => 11,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th class=\"text-start\">{{ column_comment }}</th>
        <th class=\"text-start\">{{ column_ip }}</th>
        <th class=\"text-start\">{{ column_date_added }}</th>
      </tr>
    </thead>
    <tbody>
      {% if activities %}
        {% for activity in activities %}
          <tr>
            <td class=\"text-start\">{{ activity.comment }}</td>
            <td class=\"text-start\">{{ activity.ip }}</td>
            <td class=\"text-start\">{{ activity.date_added }}</td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"3\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>", "extension/opencart/admin/view/template/report/customer_activity_list.twig", "/var/www/html/extension/opencart/admin/view/template/report/customer_activity_list.twig");
    }
}
