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

/* martket/view/template/tool/backup.twig */
class __TwigTemplate_b22edabb19e0f6f3e8871506cd13bd36 extends Template
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
      <div class=\"float-end\"><button type=\"button\" id=\"button-upload\" data-bs-toggle=\"tooltip\" title=\"";
        // line 5
        yield ($context["button_upload"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i></button></div>
      <h1>";
        // line 6
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-exchange-alt\"></i> ";
        // line 16
        yield ($context["heading_title"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <fieldset>
          <legend>";
        // line 19
        yield ($context["text_progress"] ?? null);
        yield "</legend>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 21
        yield ($context["entry_progress"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div id=\"progress-backup\" class=\"progress\">
                <div id=\"progress-bar\" class=\"progress-bar\"></div>
              </div>
              <div id=\"progress-text\"></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 31
        yield ($context["text_option"] ?? null);
        yield "</legend>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 33
        yield ($context["entry_export"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                <div class=\"form-check\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"input-backup-all\" onchange=\"\$(this).parent().parent().find(':checkbox').not(this).prop('checked', \$(this).prop('checked'));\"/>
                  <label for=\"input-backup-all\" class=\"form-check-label\">";
        // line 38
        yield ($context["text_all"] ?? null);
        yield "</label>
                </div>
                ";
        // line 40
        $context["table_row"] = 0;
        // line 41
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tables"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 42
            yield "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"backup[]\" value=\"";
            // line 43
            yield $context["table"];
            yield "\" id=\"input-backup-";
            yield ($context["table_row"] ?? null);
            yield "\" class=\"form-check-input\" checked/> <label for=\"input-backup-";
            yield ($context["table_row"] ?? null);
            yield "\" class=\"form-check-label\">";
            yield $context["table"];
            yield "</label>
                  </div>
                  ";
            // line 45
            $context["table_row"] = (($context["table_row"] ?? null) + 1);
            // line 46
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['table'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <div class=\"offset-sm-2 col-sm-10 text-end\">
              <button type=\"button\" id=\"button-backup\" class=\"btn btn-success\"><i class=\"fa-solid fa-download\"></i> ";
        // line 52
        yield ($context["button_backup"] ?? null);
        yield "</button>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 57
        yield ($context["text_history"] ?? null);
        yield "</legend>
          <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
        // line 58
        yield ($context["text_import"] ?? null);
        yield "</div>
          <div id=\"history\">";
        // line 59
        yield ($context["history"] ?? null);
        yield "</div>
        </fieldset>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-backup').on('click', function() {
    var element = this;

    \$(element).button('loading');

    \$('#button-upload, #history .btn').prop('disabled', true);

    \$('#progress-bar').css('width', '0%');
    \$('#progress-bar').removeClass('bg-danger bg-success');

    var next = 'index.php?route=tool/backup.backup&user_token=";
        // line 76
        yield ($context["user_token"] ?? null);
        yield "&table=' + \$('input[name^=\\'backup\\']:checked').first().val();

    var backup = function() {
        return \$.ajax({
            url: next,
            type: 'post',
            data: \$('input[name^=\\'backup\\']:checked'),
            dataType: 'json',
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#progress-bar').addClass('bg-danger');
                    \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

                    \$('#history').load('index.php?route=tool/backup.history&user_token=";
        // line 91
        yield ($context["user_token"] ?? null);
        yield "');

                    \$(element).button('reset');
                    \$('#button-upload, #history .btn').prop('disabled', false);
                }

                if (json['text']) {
                    \$('#progress-text').html(json['text']);
                }

                if (json['success']) {
                    \$('#progress-bar').css('width', '100%').addClass('bg-success');
                    \$('#progress-text').html('<div class=\"text-success\">' + json['success'] + '</div>');

                    \$('#history').load('index.php?route=tool/backup.history&user_token=";
        // line 105
        yield ($context["user_token"] ?? null);
        yield "');

                    \$(element).button('reset');
                    \$('#button-upload, #history .btn').prop('disabled', false);
                }

                if (json['progress']) {
                    \$('#progress-bar').css('width', json['progress'] + '%');
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(backup);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).button('reset');
                \$('#button-upload, #history .btn').prop('disabled', false);
            }
        });
    };

    chain.attach(backup);
});

// Restore
\$('#history').on('click', '.btn-warning', function() {
    var element = this;

    \$(element).button('loading');

    \$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', true);

    \$('#progress-bar').css('width', '0%');
    \$('#progress-bar').removeClass('bg-danger bg-success');

    var next = 'index.php?route=tool/backup.restore&user_token=";
        // line 144
        yield ($context["user_token"] ?? null);
        yield "&filename=' + encodeURIComponent(\$(this).val());

    var restore = function() {
        return \$.ajax({
            url: next,
            type: 'post',
            dataType: 'json',
            success: function(json) {
                console.log(json);

                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#progress-bar').addClass('bg-danger');
                    \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

                    \$('#history').load('index.php?route=tool/backup.history&user_token=";
        // line 160
        yield ($context["user_token"] ?? null);
        yield "');

                    \$(element).button('reset');

                    \$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);
                }

                if (json['progress']) {
                    \$('#progress-bar').css('width', json['progress'] + '%');
                }

                if (json['text']) {
                    \$('#progress-text').html(json['text']);
                }

                if (json['success']) {
                    \$('#progress-bar').css('width', '100%').addClass('bg-success');
                    \$('#progress-text').html('<div class=\"text-success\">' + json['success'] + '</div>');

                    \$('#history').load('index.php?route=tool/backup.history&user_token=";
        // line 179
        yield ($context["user_token"] ?? null);
        yield "');

                    \$(element).button('reset');

                    \$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(restore);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).button('reset');

                \$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);
            }
        });
    }

    chain.attach(restore);
});

// Upload
\$('#button-upload').on('click', function() {
    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"upload\" /></form>');

    \$('#form-upload input[name=\\'upload\\']').trigger('click');

    \$('#form-upload input[name=\\'upload\\']').on('change', function() {
        if ((this.files[0].size / 1024) > ";
        // line 214
        yield ($context["config_file_max_size"] ?? null);
        yield ") {
            \$(this).val('');

            alert('";
        // line 217
        yield ($context["error_upload_size"] ?? null);
        yield "');
        }
    });

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
        if (\$('#form-upload input[name=\\'upload\\']').val() !== '') {
            clearInterval(timer);

            \$.ajax({
                url: 'index.php?route=tool/backup.upload&user_token=";
        // line 230
        yield ($context["user_token"] ?? null);
        yield "',
                type: 'post',
                dataType: 'json',
                data: new FormData(\$('#form-upload')[0]),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    \$('#button-upload').button('loading');
                },
                complete: function() {
                    \$('#button-upload').button('reset');
                },
                success: function(json) {
                    \$('.alert-dismissible').remove();

                    if (json['error']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    if (json['success']) {
                        \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                        \$('#history').load('index.php?route=tool/backup.history&user_token=";
        // line 253
        yield ($context["user_token"] ?? null);
        yield "');
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        }
    }, 500);
});

// Delete
\$('#history').on('click', '.btn-danger', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=tool/backup.delete&user_token=";
        // line 269
        yield ($context["user_token"] ?? null);
        yield "&filename=' + encodeURIComponent(\$(element).val()),
        type: 'post',
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
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=tool/backup.history&user_token=";
        // line 288
        yield ($context["user_token"] ?? null);
        yield "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 297
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
        return "martket/view/template/tool/backup.twig";
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
        return array (  452 => 297,  440 => 288,  418 => 269,  399 => 253,  373 => 230,  357 => 217,  351 => 214,  313 => 179,  291 => 160,  272 => 144,  230 => 105,  213 => 91,  195 => 76,  175 => 59,  171 => 58,  167 => 57,  159 => 52,  152 => 47,  146 => 46,  144 => 45,  133 => 43,  130 => 42,  125 => 41,  123 => 40,  118 => 38,  110 => 33,  105 => 31,  92 => 21,  87 => 19,  81 => 16,  74 => 11,  63 => 9,  59 => 8,  54 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\"><button type=\"button\" id=\"button-upload\" data-bs-toggle=\"tooltip\" title=\"{{ button_upload }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i></button></div>
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
      <div class=\"card-header\"><i class=\"fa-solid fa-exchange-alt\"></i> {{ heading_title }}</div>
      <div class=\"card-body\">
        <fieldset>
          <legend>{{ text_progress }}</legend>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_progress }}</label>
            <div class=\"col-sm-10\">
              <div id=\"progress-backup\" class=\"progress\">
                <div id=\"progress-bar\" class=\"progress-bar\"></div>
              </div>
              <div id=\"progress-text\"></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>{{ text_option }}</legend>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_export }}</label>
            <div class=\"col-sm-10\">
              <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                <div class=\"form-check\">
                  <input type=\"checkbox\" class=\"form-check-input\" id=\"input-backup-all\" onchange=\"\$(this).parent().parent().find(':checkbox').not(this).prop('checked', \$(this).prop('checked'));\"/>
                  <label for=\"input-backup-all\" class=\"form-check-label\">{{ text_all }}</label>
                </div>
                {% set table_row = 0 %}
                {% for table in tables %}
                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"backup[]\" value=\"{{ table }}\" id=\"input-backup-{{ table_row }}\" class=\"form-check-input\" checked/> <label for=\"input-backup-{{ table_row }}\" class=\"form-check-label\">{{ table }}</label>
                  </div>
                  {% set table_row = table_row + 1 %}
                {% endfor %}
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <div class=\"offset-sm-2 col-sm-10 text-end\">
              <button type=\"button\" id=\"button-backup\" class=\"btn btn-success\"><i class=\"fa-solid fa-download\"></i> {{ button_backup }}</button>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>{{ text_history }}</legend>
          <div class=\"alert alert-info\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ text_import }}</div>
          <div id=\"history\">{{ history }}</div>
        </fieldset>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-backup').on('click', function() {
    var element = this;

    \$(element).button('loading');

    \$('#button-upload, #history .btn').prop('disabled', true);

    \$('#progress-bar').css('width', '0%');
    \$('#progress-bar').removeClass('bg-danger bg-success');

    var next = 'index.php?route=tool/backup.backup&user_token={{ user_token }}&table=' + \$('input[name^=\\'backup\\']:checked').first().val();

    var backup = function() {
        return \$.ajax({
            url: next,
            type: 'post',
            data: \$('input[name^=\\'backup\\']:checked'),
            dataType: 'json',
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#progress-bar').addClass('bg-danger');
                    \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

                    \$('#history').load('index.php?route=tool/backup.history&user_token={{ user_token }}');

                    \$(element).button('reset');
                    \$('#button-upload, #history .btn').prop('disabled', false);
                }

                if (json['text']) {
                    \$('#progress-text').html(json['text']);
                }

                if (json['success']) {
                    \$('#progress-bar').css('width', '100%').addClass('bg-success');
                    \$('#progress-text').html('<div class=\"text-success\">' + json['success'] + '</div>');

                    \$('#history').load('index.php?route=tool/backup.history&user_token={{ user_token }}');

                    \$(element).button('reset');
                    \$('#button-upload, #history .btn').prop('disabled', false);
                }

                if (json['progress']) {
                    \$('#progress-bar').css('width', json['progress'] + '%');
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(backup);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).button('reset');
                \$('#button-upload, #history .btn').prop('disabled', false);
            }
        });
    };

    chain.attach(backup);
});

// Restore
\$('#history').on('click', '.btn-warning', function() {
    var element = this;

    \$(element).button('loading');

    \$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', true);

    \$('#progress-bar').css('width', '0%');
    \$('#progress-bar').removeClass('bg-danger bg-success');

    var next = 'index.php?route=tool/backup.restore&user_token={{ user_token }}&filename=' + encodeURIComponent(\$(this).val());

    var restore = function() {
        return \$.ajax({
            url: next,
            type: 'post',
            dataType: 'json',
            success: function(json) {
                console.log(json);

                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#progress-bar').addClass('bg-danger');
                    \$('#progress-text').html('<div class=\"text-danger\">' + json['error'] + '</div>');

                    \$('#history').load('index.php?route=tool/backup.history&user_token={{ user_token }}');

                    \$(element).button('reset');

                    \$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);
                }

                if (json['progress']) {
                    \$('#progress-bar').css('width', json['progress'] + '%');
                }

                if (json['text']) {
                    \$('#progress-text').html(json['text']);
                }

                if (json['success']) {
                    \$('#progress-bar').css('width', '100%').addClass('bg-success');
                    \$('#progress-text').html('<div class=\"text-success\">' + json['success'] + '</div>');

                    \$('#history').load('index.php?route=tool/backup.history&user_token={{ user_token }}');

                    \$(element).button('reset');

                    \$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);
                }

                if (json['next']) {
                    next = json['next'];

                    chain.attach(restore);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                \$(element).button('reset');

                \$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);
            }
        });
    }

    chain.attach(restore);
});

// Upload
\$('#button-upload').on('click', function() {
    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"upload\" /></form>');

    \$('#form-upload input[name=\\'upload\\']').trigger('click');

    \$('#form-upload input[name=\\'upload\\']').on('change', function() {
        if ((this.files[0].size / 1024) > {{ config_file_max_size }}) {
            \$(this).val('');

            alert('{{ error_upload_size }}');
        }
    });

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
        if (\$('#form-upload input[name=\\'upload\\']').val() !== '') {
            clearInterval(timer);

            \$.ajax({
                url: 'index.php?route=tool/backup.upload&user_token={{ user_token }}',
                type: 'post',
                dataType: 'json',
                data: new FormData(\$('#form-upload')[0]),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    \$('#button-upload').button('loading');
                },
                complete: function() {
                    \$('#button-upload').button('reset');
                },
                success: function(json) {
                    \$('.alert-dismissible').remove();

                    if (json['error']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    if (json['success']) {
                        \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                        \$('#history').load('index.php?route=tool/backup.history&user_token={{ user_token }}');
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        }
    }, 500);
});

// Delete
\$('#history').on('click', '.btn-danger', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=tool/backup.delete&user_token={{ user_token }}&filename=' + encodeURIComponent(\$(element).val()),
        type: 'post',
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
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#history').load('index.php?route=tool/backup.history&user_token={{ user_token }}');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "martket/view/template/tool/backup.twig", "/var/www/html/martket/view/template/tool/backup.twig");
    }
}
