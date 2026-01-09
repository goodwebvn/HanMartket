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

/* martket/view/template/marketing/affiliate.twig */
class __TwigTemplate_1f14d57f3ea4e32aadb611ea9fcc4b33 extends Template
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
        yield "\" onclick=\"\$('#filter-affiliate').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"button\" id=\"button-calculate\" data-bs-toggle=\"tooltip\" title=\"";
        // line 7
        yield ($context["button_calculate"] ?? null);
        yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-sync\"></i></button>
        <button type=\"submit\" form=\"form-affiliate\" formaction=\"";
        // line 8
        yield ($context["csv"] ?? null);
        yield "\" id=\"button-csv\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_csv"] ?? null);
        yield "\" class=\"btn btn-info\"><i class=\"fa-solid fa-file-csv\"></i></button>
        <button type=\"submit\" form=\"form-affiliate\" formaction=\"";
        // line 9
        yield ($context["complete"] ?? null);
        yield "\" data-oc-toggle=\"ajax\" id=\"button-complete\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_complete"] ?? null);
        yield "\" class=\"btn btn-success\"><i class=\"fa-solid fa-credit-card\"></i></button>
        <a href=\"";
        // line 10
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-affiliate\" formaction=\"";
        // line 11
        yield ($context["delete"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>";
        // line 13
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-affiliate\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 25
        yield ($context["text_filter"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label class=\"form-label\">";
        // line 29
        yield ($context["entry_customer"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_customer\" value=\"";
        yield ($context["filter_customer"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-tracking\" class=\"form-label\">";
        // line 33
        yield ($context["entry_tracking"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_tracking\" value=\"";
        yield ($context["filter_tracking"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_tracking"] ?? null);
        yield "\" id=\"input-tracking\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-payment-method\" class=\"form-label\">";
        // line 36
        yield ($context["entry_payment_method"] ?? null);
        yield "</label> <select name=\"filter_payment_method\" id=\"input-payment-method\" class=\"form-select\">
                  <option value=\"\"></option>
                  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["payment_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
            // line 39
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "value", [], "any", false, false, false, 39);
            yield "\"";
            if ((($context["filter_payment_method"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "value", [], "any", false, false, false, 39))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "text", [], "any", false, false, false, 39);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['payment_method'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-commission\" class=\"form-label\">";
        // line 44
        yield ($context["entry_commission"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_commission\" value=\"";
        yield ($context["filter_commission"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_commission"] ?? null);
        yield "\" id=\"input-commission\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-from\" class=\"form-label\">";
        // line 47
        yield ($context["entry_date_from"] ?? null);
        yield "</label>
                <input type=\"date\" name=\"filter_date_from\" value=\"";
        // line 48
        yield ($context["filter_date_from"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_from"] ?? null);
        yield "\" id=\"input-date-from\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-to\" class=\"form-label\">";
        // line 51
        yield ($context["entry_date_to"] ?? null);
        yield "</label>
                <input type=\"date\" name=\"filter_date_to\" value=\"";
        // line 52
        yield ($context["filter_date_to"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_to"] ?? null);
        yield "\" id=\"input-date-to\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">";
        // line 55
        yield ($context["entry_status"] ?? null);
        yield "</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"1\"";
        // line 57
        if ((($context["filter_status"] ?? null) == "1")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                  <option value=\"0\"";
        // line 58
        if ((($context["filter_status"] ?? null) == "0")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-limit\" class=\"form-label\">";
        // line 62
        yield ($context["entry_limit"] ?? null);
        yield "</label> <select name=\"limit\" id=\"input-limit\" class=\"form-select\">
                  ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 64
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 64);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 64) == ($context["limit"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 64);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['limits'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "                </select>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 69
        yield ($context["button_filter"] ?? null);
        yield "</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 70
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
        // line 78
        yield ($context["text_list"] ?? null);
        yield "</div>
          <div id=\"affiliate\" class=\"card-body\">";
        // line 79
        yield ($context["list"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#affiliate').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#affiliate').load(this.href);
});

\$('#button-filter').on('click', function() {
    url = '';

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_tracking = \$('#input-tracking').val();

    if (filter_tracking) {
        url += '&filter_tracking=' + encodeURIComponent(filter_tracking);
    }

    var filter_payment_method = \$('#input-payment-method').val();

    if (filter_payment_method) {
        url += '&filter_payment_method=' + filter_payment_method;
    }

    var filter_commission = \$('#input-commission').val();

    if (filter_commission) {
        url += '&filter_commission=' + filter_commission;
    }

    var filter_date_from = \$('#input-date-from').val();

    if (filter_date_from) {
        url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
    }

    var filter_date_to = \$('#input-date-to').val();

    if (filter_date_to) {
        url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
    }

    var filter_status = \$('#input-status').val();

    if (filter_status !== '') {
        url += '&filter_status=' + filter_status;
    }

    var limit = \$('#input-limit').val();

    if (limit) {
        url += '&limit=' + limit;
    }

    window.history.pushState({}, null, 'index.php?route=marketing/affiliate&user_token=";
        // line 143
        yield ($context["user_token"] ?? null);
        yield "' + url);

    \$('#affiliate').load('index.php?route=marketing/affiliate.list&user_token=";
        // line 145
        yield ($context["user_token"] ?? null);
        yield "' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 151
        yield ($context["user_token"] ?? null);
        yield "&filter_affiliate=1&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-customer').val(decodeHTMLEntities(item['label']));
    }
});

\$('#button-calculate').on('click', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=marketing/affiliate.calculate&user_token=";
        // line 174
        yield ($context["user_token"] ?? null);
        yield "',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                url = '';

                var filter_customer = \$('#input-customer').val();

                if (filter_customer) {
                    url += '&filter_customer=' + encodeURIComponent(filter_customer);
                }

                var filter_tracking = \$('#input-tracking').val();

                if (filter_tracking) {
                    url += '&filter_tracking=' + encodeURIComponent(filter_tracking);
                }

                var filter_payment_method = \$('#input-payment-method').val();

                if (filter_payment_method) {
                    url += '&filter_payment_method=' + filter_payment_method;
                }

                var filter_commission = \$('#input-commission').val();

                if (filter_commission) {
                    url += '&filter_commission=' + filter_commission;
                }

                var filter_date_from = \$('#input-date-from').val();

                if (filter_date_from) {
                    url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
                }

                var filter_date_to = \$('#input-date-to').val();

                if (filter_date_to) {
                    url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
                }

                var filter_status = \$('#input-status').val();

                if (filter_status !== '') {
                    url += '&filter_status=' + filter_status;
                }

                var limit = \$('#input-limit').val();

                if (limit) {
                    url += '&limit=' + limit;
                }

                \$('#affiliate').load('index.php?route=marketing/affiliate.list&user_token=";
        // line 242
        yield ($context["user_token"] ?? null);
        yield "' + url);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 251
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
        return "martket/view/template/marketing/affiliate.twig";
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
        return array (  467 => 251,  455 => 242,  384 => 174,  358 => 151,  349 => 145,  344 => 143,  277 => 79,  273 => 78,  262 => 70,  258 => 69,  253 => 66,  238 => 64,  234 => 63,  230 => 62,  219 => 58,  211 => 57,  206 => 55,  198 => 52,  194 => 51,  186 => 48,  182 => 47,  172 => 44,  167 => 41,  152 => 39,  148 => 38,  143 => 36,  133 => 33,  122 => 29,  115 => 25,  106 => 18,  95 => 16,  91 => 15,  86 => 13,  77 => 11,  71 => 10,  65 => 9,  59 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-affiliate').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"button\" id=\"button-calculate\" data-bs-toggle=\"tooltip\" title=\"{{ button_calculate }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-sync\"></i></button>
        <button type=\"submit\" form=\"form-affiliate\" formaction=\"{{ csv }}\" id=\"button-csv\" data-bs-toggle=\"tooltip\" title=\"{{ button_csv }}\" class=\"btn btn-info\"><i class=\"fa-solid fa-file-csv\"></i></button>
        <button type=\"submit\" form=\"form-affiliate\" formaction=\"{{ complete }}\" data-oc-toggle=\"ajax\" id=\"button-complete\" data-bs-toggle=\"tooltip\" title=\"{{ button_complete }}\" class=\"btn btn-success\"><i class=\"fa-solid fa-credit-card\"></i></button>
        <a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-affiliate\" formaction=\"{{ delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
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
      <div id=\"filter-affiliate\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> {{ text_filter }}</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label class=\"form-label\">{{ entry_customer }}</label> <input type=\"text\" name=\"filter_customer\" value=\"{{ filter_customer }}\" placeholder=\"{{ entry_customer }}\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-tracking\" class=\"form-label\">{{ entry_tracking }}</label> <input type=\"text\" name=\"filter_tracking\" value=\"{{ filter_tracking }}\" placeholder=\"{{ entry_tracking }}\" id=\"input-tracking\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-payment-method\" class=\"form-label\">{{ entry_payment_method }}</label> <select name=\"filter_payment_method\" id=\"input-payment-method\" class=\"form-select\">
                  <option value=\"\"></option>
                  {% for payment_method in payment_methods %}
                    <option value=\"{{ payment_method.value }}\"{% if filter_payment_method == payment_method.value %} selected{% endif %}>{{ payment_method.text }}</option>
                  {% endfor %}
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-commission\" class=\"form-label\">{{ entry_commission }}</label> <input type=\"text\" name=\"filter_commission\" value=\"{{ filter_commission }}\" placeholder=\"{{ entry_commission }}\" id=\"input-commission\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-from\" class=\"form-label\">{{ entry_date_from }}</label>
                <input type=\"date\" name=\"filter_date_from\" value=\"{{ filter_date_from }}\" placeholder=\"{{ entry_date_from }}\" id=\"input-date-from\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-to\" class=\"form-label\">{{ entry_date_to }}</label>
                <input type=\"date\" name=\"filter_date_to\" value=\"{{ filter_date_to }}\" placeholder=\"{{ entry_date_to }}\" id=\"input-date-to\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">{{ entry_status }}</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"1\"{% if filter_status == '1' %} selected{% endif %}>{{ text_enabled }}</option>
                  <option value=\"0\"{% if filter_status == '0' %} selected{% endif %}>{{ text_disabled }}</option>
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-limit\" class=\"form-label\">{{ entry_limit }}</label> <select name=\"limit\" id=\"input-limit\" class=\"form-select\">
                  {% for limits in limits %}
                    <option value=\"{{ limits.value }}\"{% if limits.value == limit %} selected{% endif %}>{{ limits.text }}</option>
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
          <div id=\"affiliate\" class=\"card-body\">{{ list }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#affiliate').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#affiliate').load(this.href);
});

\$('#button-filter').on('click', function() {
    url = '';

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_tracking = \$('#input-tracking').val();

    if (filter_tracking) {
        url += '&filter_tracking=' + encodeURIComponent(filter_tracking);
    }

    var filter_payment_method = \$('#input-payment-method').val();

    if (filter_payment_method) {
        url += '&filter_payment_method=' + filter_payment_method;
    }

    var filter_commission = \$('#input-commission').val();

    if (filter_commission) {
        url += '&filter_commission=' + filter_commission;
    }

    var filter_date_from = \$('#input-date-from').val();

    if (filter_date_from) {
        url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
    }

    var filter_date_to = \$('#input-date-to').val();

    if (filter_date_to) {
        url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
    }

    var filter_status = \$('#input-status').val();

    if (filter_status !== '') {
        url += '&filter_status=' + filter_status;
    }

    var limit = \$('#input-limit').val();

    if (limit) {
        url += '&limit=' + limit;
    }

    window.history.pushState({}, null, 'index.php?route=marketing/affiliate&user_token={{ user_token }}' + url);

    \$('#affiliate').load('index.php?route=marketing/affiliate.list&user_token={{ user_token }}' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token={{ user_token }}&filter_affiliate=1&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-customer').val(decodeHTMLEntities(item['label']));
    }
});

\$('#button-calculate').on('click', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=marketing/affiliate.calculate&user_token={{ user_token }}',
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                url = '';

                var filter_customer = \$('#input-customer').val();

                if (filter_customer) {
                    url += '&filter_customer=' + encodeURIComponent(filter_customer);
                }

                var filter_tracking = \$('#input-tracking').val();

                if (filter_tracking) {
                    url += '&filter_tracking=' + encodeURIComponent(filter_tracking);
                }

                var filter_payment_method = \$('#input-payment-method').val();

                if (filter_payment_method) {
                    url += '&filter_payment_method=' + filter_payment_method;
                }

                var filter_commission = \$('#input-commission').val();

                if (filter_commission) {
                    url += '&filter_commission=' + filter_commission;
                }

                var filter_date_from = \$('#input-date-from').val();

                if (filter_date_from) {
                    url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
                }

                var filter_date_to = \$('#input-date-to').val();

                if (filter_date_to) {
                    url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
                }

                var filter_status = \$('#input-status').val();

                if (filter_status !== '') {
                    url += '&filter_status=' + filter_status;
                }

                var limit = \$('#input-limit').val();

                if (limit) {
                    url += '&limit=' + limit;
                }

                \$('#affiliate').load('index.php?route=marketing/affiliate.list&user_token={{ user_token }}' + url);
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "martket/view/template/marketing/affiliate.twig", "/var/www/html/martket/view/template/marketing/affiliate.twig");
    }
}
