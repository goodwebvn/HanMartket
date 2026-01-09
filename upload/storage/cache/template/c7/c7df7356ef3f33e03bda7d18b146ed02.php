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

/* martket/view/template/report/online.twig */
class __TwigTemplate_295ec24aeac2494a89f84b067aea8f5c extends Template
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
      <div class=\"float-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
        // line 5
        yield ($context["button_filter"] ?? null);
        yield "\" onclick=\"\$('#filter-online').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"button\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_refresh"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-rotate\"></i></button>
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
    <div class=\"row\">
      <div id=\"filter-online\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 20
        yield ($context["text_filter"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label class=\"form-label\">";
        // line 24
        yield ($context["entry_customer"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"filter_customer\" value=\"\" placeholder=\"";
        // line 25
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-ip\" class=\"form-label\">";
        // line 29
        yield ($context["entry_ip"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"filter_ip\" value=\"\" id=\"input-ip\" placeholder=\"";
        // line 30
        yield ($context["entry_ip"] ?? null);
        yield "\" class=\"form-control\"/>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 33
        yield ($context["button_filter"] ?? null);
        yield "</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 34
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
        // line 42
        yield ($context["text_list"] ?? null);
        yield "</div>
          <div id=\"online\" class=\"card-body\">";
        // line 43
        yield ($context["list"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#online').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#online').load(this.href);
});

\$('#button-filter, #button-refresh').on('click', function() {
    var url = '';

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_ip = \$('#input-ip').val();

    if (filter_ip) {
        url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }

    \$('#online').load('index.php?route=report/online.list&user_token=";
        // line 71
        yield ($context["user_token"] ?? null);
        yield "' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 77
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
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
//--></script>
";
        // line 94
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
        return "martket/view/template/report/online.twig";
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
        return array (  195 => 94,  175 => 77,  166 => 71,  135 => 43,  131 => 42,  120 => 34,  116 => 33,  110 => 30,  106 => 29,  99 => 25,  95 => 24,  88 => 20,  79 => 13,  68 => 11,  64 => 10,  59 => 8,  54 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-online').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"button\" id=\"button-refresh\" data-bs-toggle=\"tooltip\" title=\"{{ button_refresh }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-rotate\"></i></button>
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
      <div id=\"filter-online\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> {{ text_filter }}</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label class=\"form-label\">{{ entry_customer }}</label>
                <input type=\"text\" name=\"filter_customer\" value=\"\" placeholder=\"{{ entry_customer }}\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-ip\" class=\"form-label\">{{ entry_ip }}</label>
                <input type=\"text\" name=\"filter_ip\" value=\"\" id=\"input-ip\" placeholder=\"{{ entry_ip }}\" class=\"form-control\"/>
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
          <div id=\"online\" class=\"card-body\">{{ list }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#online').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#online').load(this.href);
});

\$('#button-filter, #button-refresh').on('click', function() {
    var url = '';

    var filter_customer = \$('#input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_ip = \$('#input-ip').val();

    if (filter_ip) {
        url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }

    \$('#online').load('index.php?route=report/online.list&user_token={{ user_token }}' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
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
//--></script>
{{ footer }}
", "martket/view/template/report/online.twig", "/var/www/html/martket/view/template/report/online.twig");
    }
}
