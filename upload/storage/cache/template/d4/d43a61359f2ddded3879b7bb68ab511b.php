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

/* martket/view/template/user/user.twig */
class __TwigTemplate_53eb51abdb2fae8a2429334496d83e8f extends Template
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
        yield "\" onclick=\"\$('#filter-user').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-user\" formaction=\"";
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
      <div id=\"filter-user\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 22
        yield ($context["text_filter"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label class=\"form-label\">";
        // line 26
        yield ($context["entry_username"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_username\" value=\"";
        yield ($context["filter_username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_username"] ?? null);
        yield "\" id=\"input-username\" data-oc-target=\"autocomplete-username\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-username\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">";
        // line 30
        yield ($context["entry_name"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_name\" value=\"";
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">";
        // line 34
        yield ($context["entry_email"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_email\" value=\"";
        yield ($context["filter_email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" data-oc-target=\"autocomplete-email\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-email\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-user-group\" class=\"form-label\">";
        // line 38
        yield ($context["entry_user_group"] ?? null);
        yield "</label> <select name=\"filter_user_group_id\" id=\"input-user-group\" class=\"form-select\">
                  <option value=\"\"></option>
                  ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["user_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user_group"]) {
            // line 41
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "user_group_id", [], "any", false, false, false, 41);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "user_group_id", [], "any", false, false, false, 41) == ($context["filter_user_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "name", [], "any", false, false, false, 41);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">";
        // line 46
        yield ($context["entry_status"] ?? null);
        yield "</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"1\"";
        // line 48
        if ((($context["filter_status"] ?? null) == "1")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                  <option value=\"0\"";
        // line 49
        if ((($context["filter_status"] ?? null) == "0")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_disabled"] ?? null);
        yield "</option>
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-ip\" class=\"form-label\">";
        // line 53
        yield ($context["entry_ip"] ?? null);
        yield "</label> <input type=\"text\" name=\"filter_ip\" value=\"";
        yield ($context["filter_ip"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_ip"] ?? null);
        yield "\" id=\"input-ip\" class=\"form-control\"/>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 56
        yield ($context["button_filter"] ?? null);
        yield "</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"";
        // line 57
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
        // line 65
        yield ($context["text_list"] ?? null);
        yield "</div>
          <div id=\"user\" class=\"card-body\">";
        // line 66
        yield ($context["list"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#user').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#user').load(this.href);
});

\$('#button-filter').on('click', function() {
    url = '';

    var filter_username = \$('#input-username').val();

    if (filter_username) {
        url += '&filter_username=' + encodeURIComponent(filter_username);
    }

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_email = \$('#input-email').val();

    if (filter_email) {
        url += '&filter_email=' + encodeURIComponent(filter_email);
    }

    var filter_user_group_id = \$('#input-user-group').val();

    if (filter_user_group_id !== '') {
        url += '&filter_user_group_id=' + filter_user_group_id;
    }

    var filter_status = \$('#input-status').val();

    if (filter_status !== '') {
        url += '&filter_status=' + filter_status;
    }

    var filter_ip = \$('#input-ip').val();

    if (filter_ip) {
        url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }

    window.history.pushState({}, null, 'index.php?route=user/user&user_token=";
        // line 118
        yield ($context["user_token"] ?? null);
        yield "' + url);

    \$('#user').load('index.php?route=user/user.list&user_token=";
        // line 120
        yield ($context["user_token"] ?? null);
        yield "' + url);
});

\$('#input-username').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=user/user.autocomplete&user_token=";
        // line 126
        yield ($context["user_token"] ?? null);
        yield "&filter_username=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['username'],
                        value: item['user_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-username').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-name').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=user/user.autocomplete&user_token=";
        // line 146
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['user_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-name').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-email').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=user/user.autocomplete&user_token=";
        // line 166
        yield ($context["user_token"] ?? null);
        yield "&filter_email=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['email'],
                        value: item['user_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-email').val(decodeHTMLEntities(item['label']));
    }
});
//--></script>
";
        // line 183
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
        return "martket/view/template/user/user.twig";
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
        return array (  356 => 183,  336 => 166,  313 => 146,  290 => 126,  281 => 120,  276 => 118,  221 => 66,  217 => 65,  206 => 57,  202 => 56,  192 => 53,  181 => 49,  173 => 48,  168 => 46,  163 => 43,  148 => 41,  144 => 40,  139 => 38,  128 => 34,  117 => 30,  106 => 26,  99 => 22,  90 => 15,  79 => 13,  75 => 12,  70 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-user').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <a href=\"{{ add }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-user\" formaction=\"{{ delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
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
      <div id=\"filter-user\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> {{ text_filter }}</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label class=\"form-label\">{{ entry_username }}</label> <input type=\"text\" name=\"filter_username\" value=\"{{ filter_username }}\" placeholder=\"{{ entry_username }}\" id=\"input-username\" data-oc-target=\"autocomplete-username\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-username\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">{{ entry_name }}</label> <input type=\"text\" name=\"filter_name\" value=\"{{ filter_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" data-oc-target=\"autocomplete-name\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-name\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label class=\"form-label\">{{ entry_email }}</label> <input type=\"text\" name=\"filter_email\" value=\"{{ filter_email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" data-oc-target=\"autocomplete-email\" class=\"form-control\" autocomplete=\"off\"/>
                <ul id=\"autocomplete-email\" class=\"dropdown-menu\"></ul>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-user-group\" class=\"form-label\">{{ entry_user_group }}</label> <select name=\"filter_user_group_id\" id=\"input-user-group\" class=\"form-select\">
                  <option value=\"\"></option>
                  {% for user_group in user_groups %}
                    <option value=\"{{ user_group.user_group_id }}\"{% if user_group.user_group_id == filter_user_group_id %} selected{% endif %}>{{ user_group.name }}</option>
                  {% endfor %}
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">{{ entry_status }}</label> <select name=\"filter_status\" id=\"input-status\" class=\"form-select\">
                  <option value=\"\"></option>
                  <option value=\"1\"{% if filter_status == '1' %} selected{% endif %}>{{ text_enabled }}</option>
                  <option value=\"0\"{% if filter_status == '0' %} selected{% endif %}>{{ text_disabled }}</option>
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-ip\" class=\"form-label\">{{ entry_ip }}</label> <input type=\"text\" name=\"filter_ip\" value=\"{{ filter_ip }}\" placeholder=\"{{ entry_ip }}\" id=\"input-ip\" class=\"form-control\"/>
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
          <div id=\"user\" class=\"card-body\">{{ list }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#user').on('click', 'thead a, .pagination a', function(e) {
    e.preventDefault();

    \$('#user').load(this.href);
});

\$('#button-filter').on('click', function() {
    url = '';

    var filter_username = \$('#input-username').val();

    if (filter_username) {
        url += '&filter_username=' + encodeURIComponent(filter_username);
    }

    var filter_name = \$('#input-name').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    var filter_email = \$('#input-email').val();

    if (filter_email) {
        url += '&filter_email=' + encodeURIComponent(filter_email);
    }

    var filter_user_group_id = \$('#input-user-group').val();

    if (filter_user_group_id !== '') {
        url += '&filter_user_group_id=' + filter_user_group_id;
    }

    var filter_status = \$('#input-status').val();

    if (filter_status !== '') {
        url += '&filter_status=' + filter_status;
    }

    var filter_ip = \$('#input-ip').val();

    if (filter_ip) {
        url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }

    window.history.pushState({}, null, 'index.php?route=user/user&user_token={{ user_token }}' + url);

    \$('#user').load('index.php?route=user/user.list&user_token={{ user_token }}' + url);
});

\$('#input-username').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=user/user.autocomplete&user_token={{ user_token }}&filter_username=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['username'],
                        value: item['user_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-username').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-name').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=user/user.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['user_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-name').val(decodeHTMLEntities(item['label']));
    }
});

\$('#input-email').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=user/user.autocomplete&user_token={{ user_token }}&filter_email=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['email'],
                        value: item['user_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-email').val(decodeHTMLEntities(item['label']));
    }
});
//--></script>
{{ footer }}
", "martket/view/template/user/user.twig", "/var/www/html/martket/view/template/user/user.twig");
    }
}
