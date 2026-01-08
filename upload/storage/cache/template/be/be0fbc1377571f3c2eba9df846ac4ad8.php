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

/* admin/view/template/design/seo_url.twig */
class __TwigTemplate_54104ff5533d900b93f84e3c8433df9d extends Template
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
        yield "\" onclick=\"\$('#filter-seo').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-seo-url\" formaction=\"";
        // line 8
        yield ($context["delete"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-seo\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 22
        yield ($context["text_filter"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label for=\"input-keyword\" class=\"form-label\">";
        // line 26
        yield ($context["entry_keyword"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_keyword\" value=\"";
        yield ($context["filter_keyword"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_keyword"] ?? null);
        yield "\" id=\"input-keyword\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-key\" class=\"form-label\">";
        // line 29
        yield ($context["entry_key"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_key\" value=\"";
        yield ($context["filter_key"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_key"] ?? null);
        yield "\" id=\"input-key\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-value\" class=\"form-label\">";
        // line 32
        yield ($context["entry_value"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_value\" value=\"";
        yield ($context["filter_value"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_value"] ?? null);
        yield "\" id=\"input-value\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-store\" class=\"form-label\">";
        // line 35
        yield ($context["entry_store"] ?? null);
        yield "</label> <select name=\"filter_store_id\" id=\"input-store\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"0\"";
        // line 37
        if ((($context["filter_store_id"] ?? null) == "0")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_default"] ?? null);
        yield "</option>
                  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 39
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 39);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 39) == ($context["filter_store_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 39);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-language\" class=\"form-label\">";
        // line 44
        yield ($context["entry_language"] ?? null);
        yield "</label> <select name=\"filter_language_id\" id=\"input-language\" class=\"form-select\">
                  <option value=\"\"></option>
                  ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 47
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47) == ($context["filter_language_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 47);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                </select>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 52
        yield ($context["button_filter"] ?? null);
        yield "</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 53
        yield ($context["button_reset"] ?? null);
        yield "\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 61
        yield ($context["text_list"] ?? null);
        yield "</div>
          <div id=\"seo-url\" class=\"card-body\">";
        // line 62
        yield ($context["list"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#seo-url').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#seo-url').load(this.href);
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_keyword = \$('#input-keyword').val();

    if (filter_keyword) {
        url += '&filter_keyword=' + encodeURIComponent(filter_keyword);
    }

    var filter_key = \$('#input-key').val();

    if (filter_key) {
        url += '&filter_key=' + encodeURIComponent(filter_key);
    }

    var filter_value = \$('#input-value').val();

    if (filter_value) {
        url += '&filter_value=' + encodeURIComponent(filter_value);
    }

    var filter_store_id = \$('#input-store').val();

    if (filter_store_id) {
        url += '&filter_store_id=' + filter_store_id;
    }

    var filter_language_id = \$('#input-language').val();

    if (filter_language_id) {
        url += '&filter_language_id=' + filter_language_id;
    }

    window.history.pushState({}, null, 'index.php?route=design/seo_url&user_token=";
        // line 108
        yield ($context["user_token"] ?? null);
        yield "' + url);

    \$('#seo-url').load('index.php?route=design/seo_url.list&user_token=";
        // line 110
        yield ($context["user_token"] ?? null);
        yield "' + url);
});
//--></script>
";
        // line 113
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
        return "admin/view/template/design/seo_url.twig";
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
        return array (  281 => 113,  275 => 110,  270 => 108,  221 => 62,  217 => 61,  206 => 53,  202 => 52,  197 => 49,  182 => 47,  178 => 46,  173 => 44,  168 => 41,  153 => 39,  149 => 38,  141 => 37,  136 => 35,  126 => 32,  116 => 29,  106 => 26,  99 => 22,  90 => 15,  79 => 13,  75 => 12,  70 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-seo').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-seo-url\" formaction=\"{{ delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
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
    <div class=\"row\">
      <div id=\"filter-seo\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> {{ text_filter }}</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label for=\"input-keyword\" class=\"form-label\">{{ entry_keyword }}</label> <input type=\"text\" name=\"filter_keyword\" value=\"{{ filter_keyword }}\" placeholder=\"{{ entry_keyword }}\" id=\"input-keyword\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-key\" class=\"form-label\">{{ entry_key }}</label> <input type=\"text\" name=\"filter_key\" value=\"{{ filter_key }}\" placeholder=\"{{ entry_key }}\" id=\"input-key\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-value\" class=\"form-label\">{{ entry_value }}</label> <input type=\"text\" name=\"filter_value\" value=\"{{ filter_value }}\" placeholder=\"{{ entry_value }}\" id=\"input-value\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-store\" class=\"form-label\">{{ entry_store }}</label> <select name=\"filter_store_id\" id=\"input-store\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"0\"{% if filter_store_id == '0' %} selected{% endif %}>{{ text_default }}</option>
                  {% for store in stores %}
                    <option value=\"{{ store.store_id }}\"{% if store.store_id == filter_store_id %} selected{% endif %}>{{ store.name }}</option>
                  {% endfor %}
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-language\" class=\"form-label\">{{ entry_language }}</label> <select name=\"filter_language_id\" id=\"input-language\" class=\"form-select\">
                  <option value=\"\"></option>
                  {% for language in languages %}
                    <option value=\"{{ language.language_id }}\"{% if language.language_id == filter_language_id %} selected{% endif %}>{{ language.name }}</option>
                  {% endfor %}
                </select>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> {{ button_filter }}</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_list }}</div>
          <div id=\"seo-url\" class=\"card-body\">{{ list }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#seo-url').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#seo-url').load(this.href);
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_keyword = \$('#input-keyword').val();

    if (filter_keyword) {
        url += '&filter_keyword=' + encodeURIComponent(filter_keyword);
    }

    var filter_key = \$('#input-key').val();

    if (filter_key) {
        url += '&filter_key=' + encodeURIComponent(filter_key);
    }

    var filter_value = \$('#input-value').val();

    if (filter_value) {
        url += '&filter_value=' + encodeURIComponent(filter_value);
    }

    var filter_store_id = \$('#input-store').val();

    if (filter_store_id) {
        url += '&filter_store_id=' + filter_store_id;
    }

    var filter_language_id = \$('#input-language').val();

    if (filter_language_id) {
        url += '&filter_language_id=' + filter_language_id;
    }

    window.history.pushState({}, null, 'index.php?route=design/seo_url&user_token={{ user_token }}' + url);

    \$('#seo-url').load('index.php?route=design/seo_url.list&user_token={{ user_token }}' + url);
});
//--></script>
{{ footer }}
", "admin/view/template/design/seo_url.twig", "/var/www/html/admin/view/template/design/seo_url.twig");
    }
}
