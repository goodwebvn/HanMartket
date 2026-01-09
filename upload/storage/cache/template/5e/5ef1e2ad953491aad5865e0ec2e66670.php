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

/* martket/view/template/marketplace/startup_list.twig */
class __TwigTemplate_44cfa0cedc5b7e36c697e832928b3ac2 extends Template
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
        yield "<form id=\"form-startup\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#startup\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"";
        // line 7
        yield ($context["sort_code"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "code")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_code"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 8
        yield ($context["sort_action"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "action")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_action"] ?? null);
        yield "</a></th>
          <th class=\"text-end\"><a href=\"";
        // line 9
        yield ($context["sort_sort_order"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "sort_order")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_sort_order"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 10
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 14
        if (($context["startups"] ?? null)) {
            // line 15
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["startups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["startup"]) {
                // line 16
                yield "            <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["startup"], "status", [], "any", false, false, false, 16)) {
                    yield " class=\"table-active opacity-50\"";
                }
                yield ">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["startup"], "startup_id", [], "any", false, false, false, 17);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["startup"], "code", [], "any", false, false, false, 18);
                yield "</td>
              <td>";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["startup"], "action", [], "any", false, false, false, 19);
                yield "</td>
              <td class=\"text-end\">";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["startup"], "sort_order", [], "any", false, false, false, 20);
                yield "</td>
              <td class=\"text-end text-nowrap\">";
                // line 21
                if (CoreExtension::getAttribute($this->env, $this->source, $context["startup"], "description", [], "any", false, false, false, 21)) {
                    // line 22
                    yield "                <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-startup-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["startup"], "startup_id", [], "any", false, false, false, 22);
                    yield "\" class=\"btn btn-info\"><i class=\"fa-solid fa-info-circle\"></i></button>
              ";
                } else {
                    // line 24
                    yield "                <button type=\"button\" class=\"btn btn-info\" disabled><i class=\"fa-solid fa-info-circle\"></i></button>
              ";
                }
                // line 26
                yield "              ";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["startup"], "status", [], "any", false, false, false, 26)) {
                    // line 27
                    yield "                <button type=\"button\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["startup"], "enable", [], "any", false, false, false, 27);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_enable"] ?? null);
                    yield "\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>
              ";
                } else {
                    // line 29
                    yield "                <button type=\"button\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["startup"], "disable", [], "any", false, false, false, 29);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_disable"] ?? null);
                    yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
              ";
                }
                // line 30
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['startup'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "        ";
        } else {
            // line 34
            yield "          <tr>
            <td class=\"text-center\" colspan=\"5\">";
            // line 35
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 38
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 42
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 43
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>
";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["startups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["startup"]) {
            // line 47
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["startup"], "description", [], "any", false, false, false, 47)) {
                // line 48
                yield "    <div id=\"modal-startup-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["startup"], "startup_id", [], "any", false, false, false, 48);
                yield "\" class=\"modal\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\"><i class=\"fa-solid fa-info-circle\"></i> ";
                // line 52
                yield ($context["text_info"] ?? null);
                yield "</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
          </div>
          <div class=\"modal-body\"><textarea rows=\"5\" class=\"form-control\" readonly>";
                // line 55
                yield CoreExtension::getAttribute($this->env, $this->source, $context["startup"], "description", [], "any", false, false, false, 55);
                yield "</textarea></div>
        </div>
      </div>
    </div>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['startup'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "martket/view/template/marketplace/startup_list.twig";
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
        return array (  213 => 55,  207 => 52,  199 => 48,  196 => 47,  192 => 46,  186 => 43,  182 => 42,  176 => 38,  170 => 35,  167 => 34,  164 => 33,  156 => 30,  148 => 29,  140 => 27,  137 => 26,  133 => 24,  127 => 22,  125 => 21,  121 => 20,  117 => 19,  113 => 18,  109 => 17,  102 => 16,  97 => 15,  95 => 14,  88 => 10,  76 => 9,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-startup\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#startup\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_code }}\"{% if sort == 'code' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_code }}</a></th>
          <th><a href=\"{{ sort_action }}\"{% if sort == 'action' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_action }}</a></th>
          <th class=\"text-end\"><a href=\"{{ sort_sort_order }}\"{% if sort == 'sort_order' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_sort_order }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if startups %}
          {% for startup in startups %}
            <tr{% if not startup.status %} class=\"table-active opacity-50\"{% endif %}>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ startup.startup_id }}\" class=\"form-check-input\"/></td>
              <td>{{ startup.code }}</td>
              <td>{{ startup.action }}</td>
              <td class=\"text-end\">{{ startup.sort_order }}</td>
              <td class=\"text-end text-nowrap\">{% if startup.description %}
                <button type=\"button\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-startup-{{ startup.startup_id }}\" class=\"btn btn-info\"><i class=\"fa-solid fa-info-circle\"></i></button>
              {% else %}
                <button type=\"button\" class=\"btn btn-info\" disabled><i class=\"fa-solid fa-info-circle\"></i></button>
              {% endif %}
              {% if not startup.status %}
                <button type=\"button\" value=\"{{ startup.enable }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_enable }}\" class=\"btn btn-success\"><i class=\"fa-solid fa-plus-circle\"></i></button>
              {% else %}
                <button type=\"button\" value=\"{{ startup.disable }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_disable }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button>
              {% endif %}</td>
            </tr>
        {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"5\">{{ text_no_results }}</td>
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
{% for startup in startups %}
  {% if startup.description %}
    <div id=\"modal-startup-{{ startup.startup_id }}\" class=\"modal\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_info }}</h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
          </div>
          <div class=\"modal-body\"><textarea rows=\"5\" class=\"form-control\" readonly>{{ startup.description }}</textarea></div>
        </div>
      </div>
    </div>
  {% endif %}
{% endfor %}", "martket/view/template/marketplace/startup_list.twig", "/var/www/html/martket/view/template/marketplace/startup_list.twig");
    }
}
