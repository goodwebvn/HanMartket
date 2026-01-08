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

/* admin/view/template/cms/comment.twig */
class __TwigTemplate_ad87eb8c75996185031363ec2f76cb2c extends Template
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
        yield "\" onclick=\"\$('#filter-comment').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"button\" id=\"button-rating\" data-bs-toggle=\"tooltip\" title=\"";
        // line 7
        yield ($context["button_rating"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-sync\"></i></button>
        <button type=\"submit\" form=\"form-comment\" formaction=\"";
        // line 8
        yield ($context["approve"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_approve"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"btn btn-success\"><i class=\"fa-solid fa-check\"></i></button>
        <button type=\"submit\" form=\"form-comment\" formaction=\"";
        // line 9
        yield ($context["spam"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_spam"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"btn btn-warning\"><i class=\"fa-solid fa-ban\"></i></button>
        <button type=\"submit\" form=\"form-comment\" formaction=\"";
        // line 10
        yield ($context["delete"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" onclick=\"return confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
      </div>
      <h1>";
        // line 12
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-comment\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa fa-filter\"></i> ";
        // line 24
        yield ($context["text_filter"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label for=\"input-keyword\" class=\"form-label\">";
        // line 28
        yield ($context["entry_keyword"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"filter_keyword\" value=\"\" placeholder=\"";
        // line 29
        yield ($context["entry_keyword"] ?? null);
        yield "\" id=\"input-keyword\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-article\" class=\"form-label\">";
        // line 32
        yield ($context["entry_article"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"filter_article\" value=\"\" placeholder=\"";
        // line 33
        yield ($context["entry_article"] ?? null);
        yield "\" id=\"input-article\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-customer\" class=\"form-label\">";
        // line 36
        yield ($context["entry_customer"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"filter_customer\" value=\"\" placeholder=\"";
        // line 37
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">";
        // line 40
        yield ($context["entry_status"] ?? null);
        yield "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\"/>
                  <option value=\"\"></option>
                  <option value=\"0\">";
        // line 43
        yield ($context["text_disabled"] ?? null);
        yield "</option>
                  <option value=\"1\">";
        // line 44
        yield ($context["text_enabled"] ?? null);
        yield "</option>
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-from\" class=\"form-label\">";
        // line 48
        yield ($context["entry_date_from"] ?? null);
        yield "</label>
                <input type=\"date\" name=\"filter_date_from\" value=\"";
        // line 49
        yield ($context["filter_date_from"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_from"] ?? null);
        yield "\" id=\"input-date-from\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-to\" class=\"form-label\">";
        // line 52
        yield ($context["entry_date_to"] ?? null);
        yield "</label>
                <input type=\"date\" name=\"filter_date_to\" value=\"";
        // line 53
        yield ($context["filter_date_to"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_to"] ?? null);
        yield "\" id=\"input-date-to\" class=\"form-control\"/>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa fa-filter\"></i> ";
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
          <div class=\"card-header\"><i class=\"fa fa-list\"></i> ";
        // line 65
        yield ($context["text_list"] ?? null);
        yield "</div>
          <div class=\"card-body\">
            <div id=\"comment\">";
        // line 67
        yield ($context["list"] ?? null);
        yield "</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#comment').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#comment').load(this.href);
});

\$('#comment').on('click', '.btn-success, .btn-warning, .btn-danger', function() {
    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_keyword = \$('input-keyword').val();

    if (filter_keyword) {
        url += '&filter_keyword=' + encodeURIComponent(filter_keyword);
    }

    var filter_article = \$('input-article').val();

    if (filter_article) {
        url += '&filter_article=' + encodeURIComponent(filter_article);
    }

    var filter_customer = \$('input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_status = \$('input-status').val();

    if (filter_status) {
        url += '&filter_status=' + filter_status;
    }

    var filter_date_from = \$('#input-date-from').val();

    if (filter_date_from) {
        url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
    }

    var filter_date_to = \$('#input-date-to').val();

    if (filter_date_to) {
        url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
    }

    \$('#comment').load('index.php?route=cms/comment.list&user_token=";
        // line 149
        yield ($context["user_token"] ?? null);
        yield "' + url);
});

\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 155
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

\$('#input-email').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 175
        yield ($context["user_token"] ?? null);
        yield "&filter_email=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['email'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-email').val(decodeHTMLEntities(item['label']));
    }
});

\$('#button-rating').on('click', function() {
    var element = this;

    \$(element).button('loading');

    var next = 'index.php?route=cms/comment.rating&user_token=";
        // line 197
        yield ($context["user_token"] ?? null);
        yield "';

    var rate = function() {
        return \$.ajax({
            url: next,
            dataType: 'json',
            success: function(json) {
                console.log(json);

                \$('.alert-dismissible').remove();
                \$('.invalid-feedback').removeClass('d-block');

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$(element).button('reset');
                }

                if (json['text']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['text'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$(element).button('reset');

                    \$('#comment').load(\$('#form-comment').attr('data-oc-load'));
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(rate);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).button('reset');
            }
        });
    };

    chain.attach(rate);
});
//--></script>
";
        // line 244
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
        return "admin/view/template/cms/comment.twig";
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
        return array (  403 => 244,  353 => 197,  328 => 175,  305 => 155,  296 => 149,  211 => 67,  206 => 65,  195 => 57,  191 => 56,  183 => 53,  179 => 52,  171 => 49,  167 => 48,  160 => 44,  156 => 43,  150 => 40,  144 => 37,  140 => 36,  134 => 33,  130 => 32,  124 => 29,  120 => 28,  113 => 24,  104 => 17,  93 => 15,  89 => 14,  84 => 12,  75 => 10,  67 => 9,  59 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" onclick=\"\$('#filter-comment').toggleClass('d-none');\" class=\"btn btn-light d-lg-none\"><i class=\"fa-solid fa-filter\"></i></button>
        <button type=\"button\" id=\"button-rating\" data-bs-toggle=\"tooltip\" title=\"{{ button_rating }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-sync\"></i></button>
        <button type=\"submit\" form=\"form-comment\" formaction=\"{{ approve }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_approve }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-success\"><i class=\"fa-solid fa-check\"></i></button>
        <button type=\"submit\" form=\"form-comment\" formaction=\"{{ spam }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_spam }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-warning\"><i class=\"fa-solid fa-ban\"></i></button>
        <button type=\"submit\" form=\"form-comment\" formaction=\"{{ delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" onclick=\"return confirm('{{ text_confirm }}');\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button>
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
      <div id=\"filter-comment\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa fa-filter\"></i> {{ text_filter }}</div>
          <div class=\"card-body\">
            <form id=\"form-filter\">
              <div class=\"mb-3\">
                <label for=\"input-keyword\" class=\"form-label\">{{ entry_keyword }}</label>
                <input type=\"text\" name=\"filter_keyword\" value=\"\" placeholder=\"{{ entry_keyword }}\" id=\"input-keyword\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-article\" class=\"form-label\">{{ entry_article }}</label>
                <input type=\"text\" name=\"filter_article\" value=\"\" placeholder=\"{{ entry_article }}\" id=\"input-article\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-customer\" class=\"form-label\">{{ entry_customer }}</label>
                <input type=\"text\" name=\"filter_customer\" value=\"\" placeholder=\"{{ entry_customer }}\" id=\"input-customer\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-status\" class=\"form-label\">{{ entry_status }}</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\"/>
                  <option value=\"\"></option>
                  <option value=\"0\">{{ text_disabled }}</option>
                  <option value=\"1\">{{ text_enabled }}</option>
                </select>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-from\" class=\"form-label\">{{ entry_date_from }}</label>
                <input type=\"date\" name=\"filter_date_from\" value=\"{{ filter_date_from }}\" placeholder=\"{{ entry_date_from }}\" id=\"input-date-from\" class=\"form-control\"/>
              </div>
              <div class=\"mb-3\">
                <label for=\"input-date-to\" class=\"form-label\">{{ entry_date_to }}</label>
                <input type=\"date\" name=\"filter_date_to\" value=\"{{ filter_date_to }}\" placeholder=\"{{ entry_date_to }}\" id=\"input-date-to\" class=\"form-control\"/>
              </div>
              <div class=\"text-end\">
                <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa fa-filter\"></i> {{ button_filter }}</button>
                <button type=\"reset\" data-bs-toggle=\"tooltip\" title=\"{{ button_reset }}\" class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-filter-circle-xmark\"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class=\"col-lg-9 col-md-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fa fa-list\"></i> {{ text_list }}</div>
          <div class=\"card-body\">
            <div id=\"comment\">{{ list }}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#comment').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#comment').load(this.href);
});

\$('#comment').on('click', '.btn-success, .btn-warning, .btn-danger', function() {
    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#button-filter').on('click', function() {
    var url = '';

    var filter_keyword = \$('input-keyword').val();

    if (filter_keyword) {
        url += '&filter_keyword=' + encodeURIComponent(filter_keyword);
    }

    var filter_article = \$('input-article').val();

    if (filter_article) {
        url += '&filter_article=' + encodeURIComponent(filter_article);
    }

    var filter_customer = \$('input-customer').val();

    if (filter_customer) {
        url += '&filter_customer=' + encodeURIComponent(filter_customer);
    }

    var filter_status = \$('input-status').val();

    if (filter_status) {
        url += '&filter_status=' + filter_status;
    }

    var filter_date_from = \$('#input-date-from').val();

    if (filter_date_from) {
        url += '&filter_date_from=' + encodeURIComponent(filter_date_from);
    }

    var filter_date_to = \$('#input-date-to').val();

    if (filter_date_to) {
        url += '&filter_date_to=' + encodeURIComponent(filter_date_to);
    }

    \$('#comment').load('index.php?route=cms/comment.list&user_token={{ user_token }}' + url);
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

\$('#input-email').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token={{ user_token }}&filter_email=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['email'],
                        value: item['customer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-email').val(decodeHTMLEntities(item['label']));
    }
});

\$('#button-rating').on('click', function() {
    var element = this;

    \$(element).button('loading');

    var next = 'index.php?route=cms/comment.rating&user_token={{ user_token }}';

    var rate = function() {
        return \$.ajax({
            url: next,
            dataType: 'json',
            success: function(json) {
                console.log(json);

                \$('.alert-dismissible').remove();
                \$('.invalid-feedback').removeClass('d-block');

                if (json['error']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$(element).button('reset');
                }

                if (json['text']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['text'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$(element).button('reset');

                    \$('#comment').load(\$('#form-comment').attr('data-oc-load'));
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(rate);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).button('reset');
            }
        });
    };

    chain.attach(rate);
});
//--></script>
{{ footer }}
", "admin/view/template/cms/comment.twig", "/var/www/html/admin/view/template/cms/comment.twig");
    }
}
