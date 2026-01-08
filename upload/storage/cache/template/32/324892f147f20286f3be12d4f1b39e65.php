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

/* admin/view/template/design/translation_list.twig */
class __TwigTemplate_c4a3043173b6c5831396918620b35a8f extends Template
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
        yield "<form id=\"form-translation\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#translation\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"";
        // line 7
        yield ($context["sort_store"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "store")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_store"] ?? null);
        yield "</a></th>
          <th class=\"text-center\"><a href=\"";
        // line 8
        yield ($context["sort_language"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "language")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_language"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 9
        yield ($context["sort_route"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "route")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_route"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 10
        yield ($context["sort_key"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "key")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_key"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 11
        yield ($context["sort_value"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "value")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_value"] ?? null);
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
        if (($context["translations"] ?? null)) {
            // line 17
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["translations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
                // line 18
                yield "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "translation_id", [], "any", false, false, false, 19);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "store", [], "any", false, false, false, 20);
                yield "</td>
              <td class=\"text-center\"><img src=\"";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "image", [], "any", false, false, false, 21);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "language", [], "any", false, false, false, 21);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "language", [], "any", false, false, false, 21);
                yield "\"></td>
              <td>";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "route", [], "any", false, false, false, 22);
                yield "</td>
              <td>";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "key", [], "any", false, false, false, 23);
                yield "</td>
              <td>";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "value", [], "any", false, false, false, 24);
                yield "</td>
              <td class=\"text-end\"><a href=\"";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["translation"], "edit", [], "any", false, false, false, 25);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['translation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "        ";
        } else {
            // line 29
            yield "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
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
        return "admin/view/template/design/translation_list.twig";
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
        return array (  190 => 38,  186 => 37,  180 => 33,  174 => 30,  171 => 29,  168 => 28,  157 => 25,  153 => 24,  149 => 23,  145 => 22,  137 => 21,  133 => 20,  129 => 19,  126 => 18,  121 => 17,  119 => 16,  112 => 12,  100 => 11,  88 => 10,  76 => 9,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-translation\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#translation\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_store }}\"{% if sort == 'store' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_store }}</a></th>
          <th class=\"text-center\"><a href=\"{{ sort_language }}\"{% if sort == 'language' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_language }}</a></th>
          <th><a href=\"{{ sort_route }}\"{% if sort == 'route' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_route }}</a></th>
          <th><a href=\"{{ sort_key }}\"{% if sort == 'key' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_key }}</a></th>
          <th><a href=\"{{ sort_value }}\"{% if sort == 'value' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_value }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if translations %}
          {% for translation in translations %}
            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ translation.translation_id }}\" class=\"form-check-input\"/></td>
              <td>{{ translation.store }}</td>
              <td class=\"text-center\"><img src=\"{{ translation.image }}\" alt=\"{{ translation.language }}\" title=\"{{ translation.language }}\"></td>
              <td>{{ translation.route }}</td>
              <td>{{ translation.key }}</td>
              <td>{{ translation.value }}</td>
              <td class=\"text-end\"><a href=\"{{ translation.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
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
</form>", "admin/view/template/design/translation_list.twig", "/var/www/html/admin/view/template/design/translation_list.twig");
    }
}
