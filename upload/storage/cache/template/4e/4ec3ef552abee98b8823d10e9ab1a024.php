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

/* extension/opencart/admin/view/template/sale/import_order.twig */
class __TwigTemplate_19a1b2a4b9d6372e5774702fc29c3c58 extends Template
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
        <a href=\"";
        // line 6
        yield ($context["download_sample"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_download_sample"] ?? null);
        yield "\" class=\"btn btn-info\"><i class=\"fa-solid fa-download\"></i> ";
        yield ($context["button_download_sample"] ?? null);
        yield "</a>
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
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            yield "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
      </div>
    ";
        }
        // line 22
        yield "    ";
        if (($context["success"] ?? null)) {
            // line 23
            yield "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
      </div>
    ";
        }
        // line 27
        yield "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-upload\"></i> ";
        // line 28
        yield ($context["text_upload_file"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-import\" enctype=\"multipart/form-data\">
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-file\">";
        // line 32
        yield ($context["entry_file"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"file\" name=\"file\" id=\"input-file\" accept=\".csv,.xlsx\" class=\"form-control\" required/>
              <div class=\"form-text\">";
        // line 35
        yield ($context["help_file"] ?? null);
        yield "</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-order-status\">";
        // line 39
        yield ($context["entry_order_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-select\">
                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 43
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 43);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 43) == ($context["default_order_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 43);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "              </select>
              <div class=\"form-text\">";
        // line 46
        yield ($context["help_order_status"] ?? null);
        yield "</div>
            </div>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-import\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
        // line 50
        yield ($context["button_import"] ?? null);
        yield "</button>
          </div>
        </form>
      </div>
    </div>

    <div id=\"import-result\" class=\"card mt-3\" style=\"display: none;\">
      <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 57
        yield ($context["text_import_result"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <div id=\"result-statistics\" class=\"row mb-3\"></div>
        <div id=\"result-errors\" class=\"alert alert-danger\" style=\"display: none;\"></div>
      </div>
    </div>

    <div class=\"card mt-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 65
        yield ($context["text_file_format"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <p>";
        // line 67
        yield ($context["text_file_format_description"] ?? null);
        yield "</p>
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>";
        // line 72
        yield ($context["column_name"] ?? null);
        yield "</th>
                <th>";
        // line 73
        yield ($context["column_description"] ?? null);
        yield "</th>
                <th>";
        // line 74
        yield ($context["column_required"] ?? null);
        yield "</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>order_code</strong></td>
                <td>";
        // line 80
        yield ($context["text_order_code_desc"] ?? null);
        yield "</td>
                <td><span class=\"badge bg-danger\">";
        // line 81
        yield ($context["text_required"] ?? null);
        yield "</span></td>
              </tr>
              <tr>
                <td><strong>order_date</strong></td>
                <td>";
        // line 85
        yield ($context["text_order_date_desc"] ?? null);
        yield "</td>
                <td><span class=\"badge bg-secondary\">";
        // line 86
        yield ($context["text_optional"] ?? null);
        yield "</span></td>
              </tr>
              <tr>
                <td><strong>customer_name</strong></td>
                <td>";
        // line 90
        yield ($context["text_customer_name_desc"] ?? null);
        yield "</td>
                <td><span class=\"badge bg-secondary\">";
        // line 91
        yield ($context["text_optional"] ?? null);
        yield "</span></td>
              </tr>
              <tr>
                <td><strong>customer_phone</strong></td>
                <td>";
        // line 95
        yield ($context["text_customer_phone_desc"] ?? null);
        yield "</td>
                <td><span class=\"badge bg-secondary\">";
        // line 96
        yield ($context["text_optional"] ?? null);
        yield "</span></td>
              </tr>
              <tr>
                <td><strong>product_name</strong></td>
                <td>";
        // line 100
        yield ($context["text_product_name_desc"] ?? null);
        yield "</td>
                <td><span class=\"badge bg-danger\">";
        // line 101
        yield ($context["text_required"] ?? null);
        yield "</span></td>
              </tr>
              <tr>
                <td><strong>quantity</strong></td>
                <td>";
        // line 105
        yield ($context["text_quantity_desc"] ?? null);
        yield "</td>
                <td><span class=\"badge bg-danger\">";
        // line 106
        yield ($context["text_required"] ?? null);
        yield "</span></td>
              </tr>
              <tr>
                <td><strong>price</strong></td>
                <td>";
        // line 110
        yield ($context["text_price_desc"] ?? null);
        yield "</td>
                <td><span class=\"badge bg-danger\">";
        // line 111
        yield ($context["text_required"] ?? null);
        yield "</span></td>
              </tr>
              <tr>
                <td><strong>payment_method</strong></td>
                <td>";
        // line 115
        yield ($context["text_payment_method_desc"] ?? null);
        yield "</td>
                <td><span class=\"badge bg-secondary\">";
        // line 116
        yield ($context["text_optional"] ?? null);
        yield "</span></td>
              </tr>
              <tr>
                <td><strong>order_status</strong></td>
                <td>";
        // line 120
        yield ($context["text_order_status_desc"] ?? null);
        yield "</td>
                <td><span class=\"badge bg-secondary\">";
        // line 121
        yield ($context["text_optional"] ?? null);
        yield "</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-import').on('submit', function(e) {
    e.preventDefault();
    
    var formData = new FormData(this);
    
    var \$button = \$('#button-import');
    var originalText = \$button.html();
    
    \$button.prop('disabled', true).html('<i class=\"fa-solid fa-spinner fa-spin\"></i> ";
        // line 139
        yield ($context["text_importing"] ?? null);
        yield "');
    \$('#import-result').hide();
    \$('#result-statistics').html('');
    \$('#result-errors').hide().html('');
    
    // Đảm bảo user_token được truyền trong URL (OpenCart yêu cầu user_token trong GET parameter)
    var uploadUrl = '";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["upload"] ?? null), "js");
        yield "';
    if (uploadUrl.indexOf('user_token=') === -1) {
        uploadUrl += (uploadUrl.indexOf('?') === -1 ? '?' : '&') + 'user_token=";
        // line 147
        yield ($context["user_token"] ?? null);
        yield "';
    }
    
    \$.ajax({
        url: uploadUrl,
        type: 'POST',
        data: formData,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        success: function(json) {
            \$button.prop('disabled', false).html(originalText);
            
            if (json['success']) {
                // Hiển thị kết quả thống kê
                var statsHtml = '<div class=\"col-md-4\"><div class=\"card bg-primary text-white\"><div class=\"card-body\"><h5>";
        // line 163
        yield ($context["text_total_rows"] ?? null);
        yield "</h5><h2>' + json['statistics']['total_rows'] + '</h2></div></div></div>';
                statsHtml += '<div class=\"col-md-4\"><div class=\"card bg-success text-white\"><div class=\"card-body\"><h5>";
        // line 164
        yield ($context["text_orders_created"] ?? null);
        yield "</h5><h2>' + json['statistics']['orders_created'] + '</h2></div></div></div>';
                statsHtml += '<div class=\"col-md-4\"><div class=\"card bg-info text-white\"><div class=\"card-body\"><h5>";
        // line 165
        yield ($context["text_products_created"] ?? null);
        yield "</h5><h2>' + json['statistics']['products_created'] + '</h2></div></div></div>';
                \$('#result-statistics').html(statsHtml);
                
                // Hiển thị lỗi nếu có
                if (json['statistics']['errors'] && json['statistics']['errors'].length > 0) {
                    var errorsHtml = '<h5><i class=\"fa-solid fa-exclamation-triangle\"></i> ";
        // line 170
        yield ($context["text_errors"] ?? null);
        yield " (' + json['statistics']['errors'].length + ')</h5><ul>';
                    for (var i = 0; i < json['statistics']['errors'].length; i++) {
                        errorsHtml += '<li>' + json['statistics']['errors'][i] + '</li>';
                    }
                    errorsHtml += '</ul>';
                    \$('#result-errors').html(errorsHtml).show();
                }
                
                \$('#import-result').show();
                
                // Reset form
                \$('#form-import')[0].reset();
            } else {
                alert(json['error'] || '";
        // line 183
        yield ($context["error_unknown"] ?? null);
        yield "');
                
                if (json['errors'] && json['errors'].length > 0) {
                    var errorsHtml = '<h5><i class=\"fa-solid fa-exclamation-triangle\"></i> ";
        // line 186
        yield ($context["text_errors"] ?? null);
        yield " (' + json['errors'].length + ')</h5><ul>';
                    for (var i = 0; i < json['errors'].length; i++) {
                        errorsHtml += '<li>' + json['errors'][i] + '</li>';
                    }
                    errorsHtml += '</ul>';
                    \$('#result-errors').html(errorsHtml).show();
                    \$('#import-result').show();
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            \$button.prop('disabled', false).html(originalText);
            
            // Kiểm tra nếu response là HTML (thường là trang đăng nhập)
            if (xhr.responseText && xhr.responseText.indexOf('<!DOCTYPE') !== -1) {
                alert('";
        // line 201
        yield ($context["error_upload"] ?? null);
        yield ": Phiên đăng nhập đã hết hạn. Vui lòng đăng nhập lại và thử lại.');
                // Redirect về trang đăng nhập
                window.location.href = 'index.php?route=common/login';
            } else {
                var errorMsg = '";
        // line 205
        yield ($context["error_upload"] ?? null);
        yield "';
                if (xhr.responseJSON && xhr.responseJSON.error) {
                    errorMsg += ': ' + xhr.responseJSON.error;
                } else if (thrownError) {
                    errorMsg += ': ' + thrownError;
                } else {
                    errorMsg += ': ' + xhr.statusText + ' (HTTP ' + xhr.status + ')';
                }
                alert(errorMsg);
            }
        }
    });
});
//--></script>
";
        // line 219
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
        return "extension/opencart/admin/view/template/sale/import_order.twig";
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
        return array (  442 => 219,  425 => 205,  418 => 201,  400 => 186,  394 => 183,  378 => 170,  370 => 165,  366 => 164,  362 => 163,  343 => 147,  338 => 145,  329 => 139,  308 => 121,  304 => 120,  297 => 116,  293 => 115,  286 => 111,  282 => 110,  275 => 106,  271 => 105,  264 => 101,  260 => 100,  253 => 96,  249 => 95,  242 => 91,  238 => 90,  231 => 86,  227 => 85,  220 => 81,  216 => 80,  207 => 74,  203 => 73,  199 => 72,  191 => 67,  186 => 65,  175 => 57,  165 => 50,  158 => 46,  155 => 45,  140 => 43,  136 => 42,  130 => 39,  123 => 35,  117 => 32,  110 => 28,  107 => 27,  99 => 23,  96 => 22,  88 => 18,  86 => 17,  80 => 13,  69 => 11,  65 => 10,  60 => 8,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <a href=\"{{ download_sample }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_download_sample }}\" class=\"btn btn-info\"><i class=\"fa-solid fa-download\"></i> {{ button_download_sample }}</a>
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
    {% if error_warning %}
      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-exclamation-circle\"></i> {{ error_warning }}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
      </div>
    {% endif %}
    {% if success %}
      <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> {{ success }}
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
      </div>
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-upload\"></i> {{ text_upload_file }}</div>
      <div class=\"card-body\">
        <form id=\"form-import\" enctype=\"multipart/form-data\">
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-file\">{{ entry_file }}</label>
            <div class=\"col-sm-10\">
              <input type=\"file\" name=\"file\" id=\"input-file\" accept=\".csv,.xlsx\" class=\"form-control\" required/>
              <div class=\"form-text\">{{ help_file }}</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-order-status\">{{ entry_order_status }}</label>
            <div class=\"col-sm-10\">
              <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-select\">
                {% for order_status in order_statuses %}
                  <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == default_order_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                {% endfor %}
              </select>
              <div class=\"form-text\">{{ help_order_status }}</div>
            </div>
          </div>
          <div class=\"text-end\">
            <button type=\"submit\" id=\"button-import\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_import }}</button>
          </div>
        </form>
      </div>
    </div>

    <div id=\"import-result\" class=\"card mt-3\" style=\"display: none;\">
      <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_import_result }}</div>
      <div class=\"card-body\">
        <div id=\"result-statistics\" class=\"row mb-3\"></div>
        <div id=\"result-errors\" class=\"alert alert-danger\" style=\"display: none;\"></div>
      </div>
    </div>

    <div class=\"card mt-3\">
      <div class=\"card-header\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_file_format }}</div>
      <div class=\"card-body\">
        <p>{{ text_file_format_description }}</p>
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <th>{{ column_name }}</th>
                <th>{{ column_description }}</th>
                <th>{{ column_required }}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong>order_code</strong></td>
                <td>{{ text_order_code_desc }}</td>
                <td><span class=\"badge bg-danger\">{{ text_required }}</span></td>
              </tr>
              <tr>
                <td><strong>order_date</strong></td>
                <td>{{ text_order_date_desc }}</td>
                <td><span class=\"badge bg-secondary\">{{ text_optional }}</span></td>
              </tr>
              <tr>
                <td><strong>customer_name</strong></td>
                <td>{{ text_customer_name_desc }}</td>
                <td><span class=\"badge bg-secondary\">{{ text_optional }}</span></td>
              </tr>
              <tr>
                <td><strong>customer_phone</strong></td>
                <td>{{ text_customer_phone_desc }}</td>
                <td><span class=\"badge bg-secondary\">{{ text_optional }}</span></td>
              </tr>
              <tr>
                <td><strong>product_name</strong></td>
                <td>{{ text_product_name_desc }}</td>
                <td><span class=\"badge bg-danger\">{{ text_required }}</span></td>
              </tr>
              <tr>
                <td><strong>quantity</strong></td>
                <td>{{ text_quantity_desc }}</td>
                <td><span class=\"badge bg-danger\">{{ text_required }}</span></td>
              </tr>
              <tr>
                <td><strong>price</strong></td>
                <td>{{ text_price_desc }}</td>
                <td><span class=\"badge bg-danger\">{{ text_required }}</span></td>
              </tr>
              <tr>
                <td><strong>payment_method</strong></td>
                <td>{{ text_payment_method_desc }}</td>
                <td><span class=\"badge bg-secondary\">{{ text_optional }}</span></td>
              </tr>
              <tr>
                <td><strong>order_status</strong></td>
                <td>{{ text_order_status_desc }}</td>
                <td><span class=\"badge bg-secondary\">{{ text_optional }}</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#form-import').on('submit', function(e) {
    e.preventDefault();
    
    var formData = new FormData(this);
    
    var \$button = \$('#button-import');
    var originalText = \$button.html();
    
    \$button.prop('disabled', true).html('<i class=\"fa-solid fa-spinner fa-spin\"></i> {{ text_importing }}');
    \$('#import-result').hide();
    \$('#result-statistics').html('');
    \$('#result-errors').hide().html('');
    
    // Đảm bảo user_token được truyền trong URL (OpenCart yêu cầu user_token trong GET parameter)
    var uploadUrl = '{{ upload|escape('js') }}';
    if (uploadUrl.indexOf('user_token=') === -1) {
        uploadUrl += (uploadUrl.indexOf('?') === -1 ? '?' : '&') + 'user_token={{ user_token }}';
    }
    
    \$.ajax({
        url: uploadUrl,
        type: 'POST',
        data: formData,
        dataType: 'json',
        cache: false,
        contentType: false,
        processData: false,
        success: function(json) {
            \$button.prop('disabled', false).html(originalText);
            
            if (json['success']) {
                // Hiển thị kết quả thống kê
                var statsHtml = '<div class=\"col-md-4\"><div class=\"card bg-primary text-white\"><div class=\"card-body\"><h5>{{ text_total_rows }}</h5><h2>' + json['statistics']['total_rows'] + '</h2></div></div></div>';
                statsHtml += '<div class=\"col-md-4\"><div class=\"card bg-success text-white\"><div class=\"card-body\"><h5>{{ text_orders_created }}</h5><h2>' + json['statistics']['orders_created'] + '</h2></div></div></div>';
                statsHtml += '<div class=\"col-md-4\"><div class=\"card bg-info text-white\"><div class=\"card-body\"><h5>{{ text_products_created }}</h5><h2>' + json['statistics']['products_created'] + '</h2></div></div></div>';
                \$('#result-statistics').html(statsHtml);
                
                // Hiển thị lỗi nếu có
                if (json['statistics']['errors'] && json['statistics']['errors'].length > 0) {
                    var errorsHtml = '<h5><i class=\"fa-solid fa-exclamation-triangle\"></i> {{ text_errors }} (' + json['statistics']['errors'].length + ')</h5><ul>';
                    for (var i = 0; i < json['statistics']['errors'].length; i++) {
                        errorsHtml += '<li>' + json['statistics']['errors'][i] + '</li>';
                    }
                    errorsHtml += '</ul>';
                    \$('#result-errors').html(errorsHtml).show();
                }
                
                \$('#import-result').show();
                
                // Reset form
                \$('#form-import')[0].reset();
            } else {
                alert(json['error'] || '{{ error_unknown }}');
                
                if (json['errors'] && json['errors'].length > 0) {
                    var errorsHtml = '<h5><i class=\"fa-solid fa-exclamation-triangle\"></i> {{ text_errors }} (' + json['errors'].length + ')</h5><ul>';
                    for (var i = 0; i < json['errors'].length; i++) {
                        errorsHtml += '<li>' + json['errors'][i] + '</li>';
                    }
                    errorsHtml += '</ul>';
                    \$('#result-errors').html(errorsHtml).show();
                    \$('#import-result').show();
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            \$button.prop('disabled', false).html(originalText);
            
            // Kiểm tra nếu response là HTML (thường là trang đăng nhập)
            if (xhr.responseText && xhr.responseText.indexOf('<!DOCTYPE') !== -1) {
                alert('{{ error_upload }}: Phiên đăng nhập đã hết hạn. Vui lòng đăng nhập lại và thử lại.');
                // Redirect về trang đăng nhập
                window.location.href = 'index.php?route=common/login';
            } else {
                var errorMsg = '{{ error_upload }}';
                if (xhr.responseJSON && xhr.responseJSON.error) {
                    errorMsg += ': ' + xhr.responseJSON.error;
                } else if (thrownError) {
                    errorMsg += ': ' + thrownError;
                } else {
                    errorMsg += ': ' + xhr.statusText + ' (HTTP ' + xhr.status + ')';
                }
                alert(errorMsg);
            }
        }
    });
});
//--></script>
{{ footer }}
", "extension/opencart/admin/view/template/sale/import_order.twig", "/var/www/html/extension/opencart/admin/view/template/sale/import_order.twig");
    }
}
