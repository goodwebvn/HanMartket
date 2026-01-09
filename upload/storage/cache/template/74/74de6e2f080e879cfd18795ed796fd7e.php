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

/* martket/view/template/report/statistics_list.twig */
class __TwigTemplate_9fa7c4c48201b1fdbdf8bf4b0137efa2 extends Template
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
        <th>";
        // line 5
        yield ($context["column_name"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 6
        yield ($context["column_value"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 7
        yield ($context["column_action"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 11
        if (($context["statistics"] ?? null)) {
            // line 12
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["statistics"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["statistic"]) {
                // line 13
                yield "          <tr>
            <td>";
                // line 14
                yield CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "name", [], "any", false, false, false, 14);
                yield "</td>
            <td class=\"text-end\">";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "value", [], "any", false, false, false, 15);
                yield "</td>
            <td class=\"text-end\"><a href=\"";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["statistic"], "href", [], "any", false, false, false, 16);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_refresh"] ?? null);
                yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></a></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['statistic'], $context['_parent']);
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
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "martket/view/template/report/statistics_list.twig";
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
        return array (  104 => 24,  98 => 21,  95 => 20,  92 => 19,  81 => 16,  77 => 15,  73 => 14,  70 => 13,  65 => 12,  63 => 11,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th>{{ column_name }}</th>
        <th class=\"text-end\">{{ column_value }}</th>
        <th class=\"text-end\">{{ column_action }}</th>
      </tr>
    </thead>
    <tbody>
      {% if statistics %}
        {% for statistic in statistics %}
          <tr>
            <td>{{ statistic.name }}</td>
            <td class=\"text-end\">{{ statistic.value }}</td>
            <td class=\"text-end\"><a href=\"{{ statistic.href }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_refresh }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></a></td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"3\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>", "martket/view/template/report/statistics_list.twig", "/var/www/html/martket/view/template/report/statistics_list.twig");
    }
}
