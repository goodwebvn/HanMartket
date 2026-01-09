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

/* martket/view/template/report/report.twig */
class __TwigTemplate_1f5b54cdf88175caca948509f0489fd1 extends Template
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
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_filter"] ?? null);
        yield "\" onclick=\"\$('#filter-report').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
      </div>
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
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-chart-bar\"></i> ";
        // line 18
        yield ($context["text_type"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <div class=\"card\">
          <div class=\"card-body bg-light\">
            <div class=\"input-group\">
              <select name=\"report\" id=\"input-report\" class=\"form-select\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["reports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 25
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "href", [], "any", false, false, false, 25);
            yield "\"";
            if ((($context["code"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["report"], "code", [], "any", false, false, false, 25))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["report"], "text", [], "any", false, false, false, 25);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['report'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "              </select>
              <div class=\"input-group-text\"><i class=\"fa-solid fa-filter\"></i>&nbsp;";
        // line 28
        yield ($context["text_filter"] ?? null);
        yield "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id=\"report\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-report').on('change', function(e) {
    if (\$(this).val()) {
        \$('#report').load(this.value);
    }
});

\$('#input-report').trigger('change');
//--></script>
";
        // line 46
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
        return "martket/view/template/report/report.twig";
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
        return array (  135 => 46,  114 => 28,  111 => 27,  96 => 25,  92 => 24,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-report').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
      </div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-chart-bar\"></i> {{ text_type }}</div>
      <div class=\"card-body\">
        <div class=\"card\">
          <div class=\"card-body bg-light\">
            <div class=\"input-group\">
              <select name=\"report\" id=\"input-report\" class=\"form-select\">
                {% for report in reports %}
                  <option value=\"{{ report.href }}\"{% if code == report.code %} selected{% endif %}>{{ report.text }}</option>
                {% endfor %}
              </select>
              <div class=\"input-group-text\"><i class=\"fa-solid fa-filter\"></i>&nbsp;{{ text_filter }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id=\"report\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-report').on('change', function(e) {
    if (\$(this).val()) {
        \$('#report').load(this.value);
    }
});

\$('#input-report').trigger('change');
//--></script>
{{ footer }}
", "martket/view/template/report/report.twig", "/var/www/html/martket/view/template/report/report.twig");
    }
}
