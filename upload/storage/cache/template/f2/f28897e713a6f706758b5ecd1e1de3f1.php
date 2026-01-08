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

/* admin/view/template/design/seo_url_list.twig */
class __TwigTemplate_34fee132c6e77cc6360657645ca3e1a6 extends Template
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
        yield "<form id=\"form-seo-url\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#seo-url\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"";
        // line 7
        yield ($context["sort_keyword"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "keyword")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_keyword"] ?? null);
        yield "</a></th>
          <th><a href=\"";
        // line 8
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
        // line 9
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
          <th><a href=\"";
        // line 10
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
          <th class=\"d-none d-lg-table-cell\"><a href=\"";
        // line 11
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
          <th class=\"text-center d-none d-lg-table-cell\"><a href=\"";
        // line 12
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
          <th class=\"text-end\">";
        // line 13
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 17
        if (($context["seo_urls"] ?? null)) {
            // line 18
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["seo_urls"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["seo_url"]) {
                // line 19
                yield "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["seo_url"], "seo_url_id", [], "any", false, false, false, 20);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["seo_url"], "keyword", [], "any", false, false, false, 21);
                yield "</td>
              <td>";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["seo_url"], "key", [], "any", false, false, false, 22);
                yield "</td>
              <td>";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["seo_url"], "value", [], "any", false, false, false, 23);
                yield "</td>
              <td>";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["seo_url"], "sort_order", [], "any", false, false, false, 24);
                yield "</td>
              <td class=\"d-none d-lg-table-cell\">";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["seo_url"], "store", [], "any", false, false, false, 25);
                yield "</td>
              <td class=\"text-center d-none d-lg-table-cell\"><img src=\"";
                // line 26
                yield CoreExtension::getAttribute($this->env, $this->source, $context["seo_url"], "image", [], "any", false, false, false, 26);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["seo_url"], "language", [], "any", false, false, false, 26);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["seo_url"], "language", [], "any", false, false, false, 26);
                yield "\"></td>
              <td class=\"text-end\"><a href=\"";
                // line 27
                yield CoreExtension::getAttribute($this->env, $this->source, $context["seo_url"], "edit", [], "any", false, false, false, 27);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['seo_url'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "        ";
        } else {
            // line 31
            yield "          <tr>
            <td class=\"text-center\" colspan=\"7\">";
            // line 32
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 35
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 39
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 40
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
        return "admin/view/template/design/seo_url_list.twig";
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
        return array (  206 => 40,  202 => 39,  196 => 35,  190 => 32,  187 => 31,  184 => 30,  173 => 27,  165 => 26,  161 => 25,  157 => 24,  153 => 23,  149 => 22,  145 => 21,  141 => 20,  138 => 19,  133 => 18,  131 => 17,  124 => 13,  112 => 12,  100 => 11,  88 => 10,  76 => 9,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-seo-url\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#seo-url\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_keyword }}\"{% if sort == 'keyword' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_keyword }}</a></th>
          <th><a href=\"{{ sort_key }}\"{% if sort == 'key' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_key }}</a></th>
          <th><a href=\"{{ sort_value }}\"{% if sort == 'value' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_value }}</a></th>
          <th><a href=\"{{ sort_sort_order }}\"{% if sort == 'sort_order' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_sort_order }}</a></th>
          <th class=\"d-none d-lg-table-cell\"><a href=\"{{ sort_store }}\"{% if sort == 'store' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_store }}</a></th>
          <th class=\"text-center d-none d-lg-table-cell\"><a href=\"{{ sort_language }}\"{% if sort == 'language' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_language }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if seo_urls %}
          {% for seo_url in seo_urls %}
            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ seo_url.seo_url_id }}\" class=\"form-check-input\"/></td>
              <td>{{ seo_url.keyword }}</td>
              <td>{{ seo_url.key }}</td>
              <td>{{ seo_url.value }}</td>
              <td>{{ seo_url.sort_order }}</td>
              <td class=\"d-none d-lg-table-cell\">{{ seo_url.store }}</td>
              <td class=\"text-center d-none d-lg-table-cell\"><img src=\"{{ seo_url.image }}\" alt=\"{{ seo_url.language }}\" title=\"{{ seo_url.language }}\"></td>
              <td class=\"text-end\"><a href=\"{{ seo_url.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
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
</form>", "admin/view/template/design/seo_url_list.twig", "/var/www/html/admin/view/template/design/seo_url_list.twig");
    }
}
