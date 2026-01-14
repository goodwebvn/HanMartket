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

/* martket/view/template/tool/backup_history.twig */
class __TwigTemplate_1d52fbe688df54c5ecf3835ea54cae54 extends Template
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
        yield ($context["column_filename"] ?? null);
        yield "</th>
        <th>";
        // line 6
        yield ($context["column_size"] ?? null);
        yield "</th>
        <th class=\"d-none d-lg-table-cell\">";
        // line 7
        yield ($context["column_date_added"] ?? null);
        yield "</th>
        <th class=\"text-end\">";
        // line 8
        yield ($context["column_action"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 12
        if (($context["histories"] ?? null)) {
            // line 13
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 14
                yield "          <tr>
            <td>";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "filename", [], "any", false, false, false, 15);
                yield "</td>
            <td>";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "size", [], "any", false, false, false, 16);
                yield "</td>
            <td class=\"d-none d-lg-table-cell\">";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 17);
                yield "</td>
            <td class=\"text-end\">
              <button type=\"button\" value=\"";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "filename", [], "any", false, false, false, 19);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_restore"] ?? null);
                yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button>
              <button type=\"button\" onclick=\"location = '";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "download", [], "any", false, false, false, 20);
                yield "';\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_download"] ?? null);
                yield "\" class=\"btn btn-info\"><i class=\"fa-solid fa-download\"></i></button>
              <button type=\"button\" value=\"";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "filename", [], "any", false, false, false, 21);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_delete"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button></td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['history'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "      ";
        } else {
            // line 25
            yield "        <tr>
          <td colspan=\"4\" class=\"text-center\">";
            // line 26
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 29
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">";
        // line 33
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-end\">";
        // line 34
        yield ($context["results"] ?? null);
        yield "</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "martket/view/template/tool/backup_history.twig";
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
        return array (  135 => 34,  131 => 33,  125 => 29,  119 => 26,  116 => 25,  113 => 24,  102 => 21,  96 => 20,  90 => 19,  85 => 17,  81 => 16,  77 => 15,  74 => 14,  69 => 13,  67 => 12,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"table-responsive\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th>{{ column_filename }}</th>
        <th>{{ column_size }}</th>
        <th class=\"d-none d-lg-table-cell\">{{ column_date_added }}</th>
        <th class=\"text-end\">{{ column_action }}</th>
      </tr>
    </thead>
    <tbody>
      {% if histories %}
        {% for history in histories %}
          <tr>
            <td>{{ history.filename }}</td>
            <td>{{ history.size }}</td>
            <td class=\"d-none d-lg-table-cell\">{{ history.date_added }}</td>
            <td class=\"text-end\">
              <button type=\"button\" value=\"{{ history.filename }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_restore }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-rotate\"></i></button>
              <button type=\"button\" onclick=\"location = '{{ history.download }}';\" data-bs-toggle=\"tooltip\" title=\"{{ button_download }}\" class=\"btn btn-info\"><i class=\"fa-solid fa-download\"></i></button>
              <button type=\"button\" value=\"{{ history.filename }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button></td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td colspan=\"4\" class=\"text-center\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
  <div class=\"col-sm-6 text-end\">{{ results }}</div>
</div>
", "martket/view/template/tool/backup_history.twig", "/var/www/html/martket/view/template/tool/backup_history.twig");
    }
}
