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

/* martket/view/template/marketing/contact.twig */
class __TwigTemplate_b1d4d4c019b01c093e3ec581a7f9a4e1 extends Template
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
        <button type=\"button\" id=\"button-send\" class=\"btn btn-primary\"><i class=\"fa-solid fa-envelope\"></i> ";
        // line 6
        yield ($context["button_send"] ?? null);
        yield "</button></div>
      <h1>";
        // line 7
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-envelope\"></i> ";
        // line 17
        yield ($context["text_mail"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form>
          <div class=\"row mb-3\">
            <label for=\"input-store\" class=\"col-sm-2 col-form-label\">";
        // line 21
        yield ($context["entry_store"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                <option value=\"0\">";
        // line 24
        yield ($context["text_default"] ?? null);
        yield "</option>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 26
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 26);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 26);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-to\" class=\"col-sm-2 col-form-label\">";
        // line 32
        yield ($context["entry_to"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"to\" id=\"input-to\" class=\"form-select\">
                <option value=\"newsletter\">";
        // line 35
        yield ($context["text_newsletter"] ?? null);
        yield "</option>
                <option value=\"customer_all\">";
        // line 36
        yield ($context["text_customer_all"] ?? null);
        yield "</option>
                <option value=\"customer_group\">";
        // line 37
        yield ($context["text_customer_group"] ?? null);
        yield "</option>
                <option value=\"customer\">";
        // line 38
        yield ($context["text_customer"] ?? null);
        yield "</option>
                <option value=\"affiliate_all\">";
        // line 39
        yield ($context["text_affiliate_all"] ?? null);
        yield "</option>
                <option value=\"affiliate\">";
        // line 40
        yield ($context["text_affiliate"] ?? null);
        yield "</option>
                <option value=\"product\">";
        // line 41
        yield ($context["text_product"] ?? null);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3 to\" id=\"to-customer-group\">
            <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 46
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 50
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 50);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 50);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-3 to\" id=\"to-customer\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 56
        yield ($context["entry_customer"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"customers\" value=\"\" placeholder=\"";
        // line 58
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
              <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
              <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                <table id=\"mail-customer\" class=\"table m-0\">
                  <tbody></tbody>
                </table>
              </div>
              <div class=\"form-text\">";
        // line 65
        yield ($context["help_customer"] ?? null);
        yield "</div>
            </div>
          </div>
          <div class=\"row mb-3 to\" id=\"to-affiliate\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 69
        yield ($context["entry_affiliate"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"affiliates\" value=\"\" placeholder=\"";
        // line 71
        yield ($context["entry_affiliate"] ?? null);
        yield "\" id=\"input-affiliate\" data-oc-target=\"autocomplete-affiliate\" class=\"form-control\" autocomplete=\"off\"/>
              <ul id=\"autocomplete-affiliate\" class=\"dropdown-menu\"></ul>
              <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                <table id=\"mail-affiliate\" class=\"table m-0\">
                  <tbody></tbody>
                </table>
              </div>
              <div class=\"form-text\">";
        // line 78
        yield ($context["help_affiliate"] ?? null);
        yield "</div>
            </div>
          </div>
          <div class=\"row mb-3 to\" id=\"to-product\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 82
        yield ($context["entry_product"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"products\" value=\"\" placeholder=\"";
        // line 84
        yield ($context["entry_product"] ?? null);
        yield "\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\" autocomplete=\"off\"/>
              <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
              <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                <table id=\"mail-product\" class=\"table m-0\">
                  <tbody></tbody>
                </table>
              </div>
              <div class=\"form-text\">";
        // line 91
        yield ($context["help_product"] ?? null);
        yield "</div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-subject\" class=\"col-sm-2 col-form-label\">";
        // line 95
        yield ($context["entry_subject"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"subject\" value=\"\" placeholder=\"";
        // line 97
        yield ($context["entry_subject"] ?? null);
        yield "\" id=\"input-subject\" class=\"form-control\"/>
              <div id=\"error-subject\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-message\" class=\"col-sm-2 col-form-label\">";
        // line 102
        yield ($context["entry_message"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div id=\"input-message\">
                <textarea name=\"message\" placeholder=\"";
        // line 105
        yield ($context["entry_message"] ?? null);
        yield "\" data-oc-toggle=\"ckeditor\" data-lang=\"";
        yield ($context["ckeditor"] ?? null);
        yield "\" class=\"form-control\"></textarea>
                <div id=\"error-message\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-to').on('change', function() {
    \$('.to').hide();

    \$('#to-' + this.value.replaceAll('_', '-')).show();
});

\$('#input-to').trigger('change');

// Customers
\$('#input-customer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 128
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
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function(item) {
        \$('#input-customer').val('');

        \$('#mail-customer-' + item['value']).remove();

        html = '<tr id=\"mail-customer-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"customer[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#mail-customer tbody').append(html);
    }
});

\$('#mail-customer').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Affiliates
\$('#input-affiliate').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token=";
        // line 165
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request) + '&filter_affiliate=1',
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function(item) {
        \$('#input-affiliate').val('');

        \$('#mail-affiliate-' + item['value']).remove();

        html = '<tr id=\"mail-affiliate-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"affiliate[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#mail-affiliate tbody').append(html);
    }
});

\$('#input-affiliate').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Products
\$('#input-product').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 202
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function(item) {
        \$('#input-product').val('');

        \$('#mail-product-' + item['value']).remove();

        html = '<tr id=\"mail-product-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#mail-product tbody').append(html);
    }
});

\$('#mail-product').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '";
        // line 236
        yield ($context["ckeditor"] ?? null);
        yield "'
});

\$('#button-send').on('click', function() {
    var element = this;

    \$(element).button('loading');

    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }

    var next = 'index.php?route=marketing/contact.send&user_token=";
        // line 248
        yield ($context["user_token"] ?? null);
        yield "';

    var send = function() {
        return \$.ajax({
            url: next,
            type: 'post',
            data: \$('#content form').serialize(),
            dataType: 'json',
            success: function(json) {
                console.log(json);

                \$('.invalid-feedback').removeClass('d-block');

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (key in json['error']) {
                        \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                        \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                    }

                    \$(element).button('reset');
                }

                if (json['text']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['text'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$(element).button('reset');
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(send);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).button('reset');
            }
        });
    };

    chain.attach(send);
});
//--></script>
";
        // line 301
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
        return "martket/view/template/marketing/contact.twig";
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
        return array (  486 => 301,  430 => 248,  415 => 236,  378 => 202,  338 => 165,  298 => 128,  270 => 105,  264 => 102,  256 => 97,  251 => 95,  244 => 91,  234 => 84,  229 => 82,  222 => 78,  212 => 71,  207 => 69,  200 => 65,  190 => 58,  185 => 56,  179 => 52,  168 => 50,  164 => 49,  158 => 46,  150 => 41,  146 => 40,  142 => 39,  138 => 38,  134 => 37,  130 => 36,  126 => 35,  120 => 32,  114 => 28,  103 => 26,  99 => 25,  95 => 24,  89 => 21,  82 => 17,  75 => 12,  64 => 10,  60 => 9,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"button\" id=\"button-send\" class=\"btn btn-primary\"><i class=\"fa-solid fa-envelope\"></i> {{ button_send }}</button></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-envelope\"></i> {{ text_mail }}</div>
      <div class=\"card-body\">
        <form>
          <div class=\"row mb-3\">
            <label for=\"input-store\" class=\"col-sm-2 col-form-label\">{{ entry_store }}</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                <option value=\"0\">{{ text_default }}</option>
                {% for store in stores %}
                  <option value=\"{{ store.store_id }}\">{{ store.name }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-to\" class=\"col-sm-2 col-form-label\">{{ entry_to }}</label>
            <div class=\"col-sm-10\">
              <select name=\"to\" id=\"input-to\" class=\"form-select\">
                <option value=\"newsletter\">{{ text_newsletter }}</option>
                <option value=\"customer_all\">{{ text_customer_all }}</option>
                <option value=\"customer_group\">{{ text_customer_group }}</option>
                <option value=\"customer\">{{ text_customer }}</option>
                <option value=\"affiliate_all\">{{ text_affiliate_all }}</option>
                <option value=\"affiliate\">{{ text_affiliate }}</option>
                <option value=\"product\">{{ text_product }}</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3 to\" id=\"to-customer-group\">
            <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">{{ entry_customer_group }}</label>
            <div class=\"col-sm-10\">
              <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                {% for customer_group in customer_groups %}
                  <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"row mb-3 to\" id=\"to-customer\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_customer }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"customers\" value=\"\" placeholder=\"{{ entry_customer }}\" id=\"input-customer\" data-oc-target=\"autocomplete-customer\" class=\"form-control\" autocomplete=\"off\"/>
              <ul id=\"autocomplete-customer\" class=\"dropdown-menu\"></ul>
              <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                <table id=\"mail-customer\" class=\"table m-0\">
                  <tbody></tbody>
                </table>
              </div>
              <div class=\"form-text\">{{ help_customer }}</div>
            </div>
          </div>
          <div class=\"row mb-3 to\" id=\"to-affiliate\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"affiliates\" value=\"\" placeholder=\"{{ entry_affiliate }}\" id=\"input-affiliate\" data-oc-target=\"autocomplete-affiliate\" class=\"form-control\" autocomplete=\"off\"/>
              <ul id=\"autocomplete-affiliate\" class=\"dropdown-menu\"></ul>
              <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                <table id=\"mail-affiliate\" class=\"table m-0\">
                  <tbody></tbody>
                </table>
              </div>
              <div class=\"form-text\">{{ help_affiliate }}</div>
            </div>
          </div>
          <div class=\"row mb-3 to\" id=\"to-product\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_product }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"products\" value=\"\" placeholder=\"{{ entry_product }}\" id=\"input-product\" data-oc-target=\"autocomplete-product\" class=\"form-control\" autocomplete=\"off\"/>
              <ul id=\"autocomplete-product\" class=\"dropdown-menu\"></ul>
              <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                <table id=\"mail-product\" class=\"table m-0\">
                  <tbody></tbody>
                </table>
              </div>
              <div class=\"form-text\">{{ help_product }}</div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-subject\" class=\"col-sm-2 col-form-label\">{{ entry_subject }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"subject\" value=\"\" placeholder=\"{{ entry_subject }}\" id=\"input-subject\" class=\"form-control\"/>
              <div id=\"error-subject\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-message\" class=\"col-sm-2 col-form-label\">{{ entry_message }}</label>
            <div class=\"col-sm-10\">
              <div id=\"input-message\">
                <textarea name=\"message\" placeholder=\"{{ entry_message }}\" data-oc-toggle=\"ckeditor\" data-lang=\"{{ ckeditor }}\" class=\"form-control\"></textarea>
                <div id=\"error-message\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-to').on('change', function() {
    \$('.to').hide();

    \$('#to-' + this.value.replaceAll('_', '-')).show();
});

\$('#input-to').trigger('change');

// Customers
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
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function(item) {
        \$('#input-customer').val('');

        \$('#mail-customer-' + item['value']).remove();

        html = '<tr id=\"mail-customer-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"customer[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#mail-customer tbody').append(html);
    }
});

\$('#mail-customer').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Affiliates
\$('#input-affiliate').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=customer/customer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request) + '&filter_affiliate=1',
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['customer_id']
                    }
                }));
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function(item) {
        \$('#input-affiliate').val('');

        \$('#mail-affiliate-' + item['value']).remove();

        html = '<tr id=\"mail-affiliate-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"affiliate[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#mail-affiliate tbody').append(html);
    }
});

\$('#input-affiliate').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Products
\$('#input-product').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    },
    'select': function(item) {
        \$('#input-product').val('');

        \$('#mail-product-' + item['value']).remove();

        html = '<tr id=\"mail-product-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#mail-product tbody').append(html);
    }
});

\$('#mail-product').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '{{ ckeditor }}'
});

\$('#button-send').on('click', function() {
    var element = this;

    \$(element).button('loading');

    for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }

    var next = 'index.php?route=marketing/contact.send&user_token={{ user_token }}';

    var send = function() {
        return \$.ajax({
            url: next,
            type: 'post',
            data: \$('#content form').serialize(),
            dataType: 'json',
            success: function(json) {
                console.log(json);

                \$('.invalid-feedback').removeClass('d-block');

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (key in json['error']) {
                        \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                        \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                    }

                    \$(element).button('reset');
                }

                if (json['text']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['text'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$(element).button('reset');
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(send);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).button('reset');
            }
        });
    };

    chain.attach(send);
});
//--></script>
{{ footer }}
", "martket/view/template/marketing/contact.twig", "/var/www/html/martket/view/template/marketing/contact.twig");
    }
}
