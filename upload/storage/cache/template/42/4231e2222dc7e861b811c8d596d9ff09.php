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

/* admin/view/template/tool/log.twig */
class __TwigTemplate_241cd530ab474dad0f7018e1a5418e78 extends Template
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
      <h1>";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 14
        if (($context["error_warning"] ?? null)) {
            // line 15
            yield "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    ";
        }
        // line 17
        yield "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-triangle-exclamation\"></i> ";
        // line 18
        yield ($context["text_list"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          ";
        // line 21
        $context["i"] = 0;
        // line 22
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["logs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 23
            yield "            <li class=\"nav-item\"><a href=\"#tab-log-";
            yield ($context["i"] ?? null);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if ((($context["i"] ?? null) == 0)) {
                yield " active";
            }
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["log"], "name", [], "any", false, false, false, 23);
            yield "</a></li>
            ";
            // line 24
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 25
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['log'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "        </ul>
        <div class=\"tab-content\">
          ";
        // line 28
        $context["i"] = 0;
        // line 29
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["logs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 30
            yield "            <div id=\"tab-log-";
            yield ($context["i"] ?? null);
            yield "\" class=\"tab-pane";
            if ((($context["i"] ?? null) == 0)) {
                yield " active";
            }
            yield "\">
              ";
            // line 31
            if (CoreExtension::getAttribute($this->env, $this->source, $context["log"], "error", [], "any", false, false, false, 31)) {
                // line 32
                yield "                <div class=\"alert alert-danger\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["log"], "error", [], "any", false, false, false, 32);
                yield "</div>
              ";
            }
            // line 34
            yield "              <textarea name=\"log\" wrap=\"off\" rows=\"15\" id=\"input-log-";
            yield ($context["i"] ?? null);
            yield "\" class=\"form-control\" readonly>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["log"], "output", [], "any", false, false, false, 34);
            yield "</textarea>
              <br/>
              <div class=\"row row-cols-2\">
                <div class=\"col\">
                  <a href=\"";
            // line 38
            yield CoreExtension::getAttribute($this->env, $this->source, $context["log"], "download", [], "any", false, false, false, 38);
            yield "\" class=\"btn btn-primary w-100\"";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["log"], "download", [], "any", false, false, false, 38)) {
                yield " disabled";
            }
            yield "><i class=\"fa-solid fa-download\"></i> ";
            yield ($context["button_download"] ?? null);
            yield "</a>
                </div>
                <div class=\"col\">
                  <button type=\"button\" value=\"";
            // line 41
            yield CoreExtension::getAttribute($this->env, $this->source, $context["log"], "clear", [], "any", false, false, false, 41);
            yield "\" data-oc-target=\"input-log-";
            yield ($context["i"] ?? null);
            yield "\" class=\"btn btn-danger w-100\"><i class=\"fa-solid fa-eraser\"></i> ";
            yield ($context["button_clear"] ?? null);
            yield "</button>
                </div>
              </div>
            </div>
            ";
            // line 45
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 46
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['log'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('.tab-content .btn-danger').on('click', function() {
    var element = this;

    if (confirm('";
        // line 56
        yield ($context["text_confirm"] ?? null);
        yield "')) {
        \$.ajax({
            url: \$(element).attr('value'),
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

                    \$('#' + \$(element).attr('data-oc-target')).val('');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
});
//--></script>
";
        // line 86
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/tool/log.twig";
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
        return array (  232 => 86,  199 => 56,  188 => 47,  182 => 46,  180 => 45,  169 => 41,  157 => 38,  147 => 34,  141 => 32,  139 => 31,  130 => 30,  125 => 29,  123 => 28,  119 => 26,  113 => 25,  111 => 24,  100 => 23,  95 => 22,  93 => 21,  87 => 18,  84 => 17,  78 => 15,  76 => 14,  70 => 10,  59 => 8,  55 => 7,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
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
      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_warning }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-triangle-exclamation\"></i> {{ text_list }}</div>
      <div class=\"card-body\">
        <ul class=\"nav nav-tabs\">
          {% set i = 0 %}
          {% for log in logs %}
            <li class=\"nav-item\"><a href=\"#tab-log-{{ i }}\" data-bs-toggle=\"tab\" class=\"nav-link{% if i == 0 %} active{% endif %}\">{{ log.name }}</a></li>
            {% set i = i + 1 %}
          {% endfor %}
        </ul>
        <div class=\"tab-content\">
          {% set i = 0 %}
          {% for log in logs %}
            <div id=\"tab-log-{{ i }}\" class=\"tab-pane{% if i == 0 %} active{% endif %}\">
              {% if log.error %}
                <div class=\"alert alert-danger\">{{ log.error }}</div>
              {% endif %}
              <textarea name=\"log\" wrap=\"off\" rows=\"15\" id=\"input-log-{{ i }}\" class=\"form-control\" readonly>{{ log.output }}</textarea>
              <br/>
              <div class=\"row row-cols-2\">
                <div class=\"col\">
                  <a href=\"{{ log.download }}\" class=\"btn btn-primary w-100\"{% if not log.download %} disabled{% endif %}><i class=\"fa-solid fa-download\"></i> {{ button_download }}</a>
                </div>
                <div class=\"col\">
                  <button type=\"button\" value=\"{{ log.clear }}\" data-oc-target=\"input-log-{{ i }}\" class=\"btn btn-danger w-100\"><i class=\"fa-solid fa-eraser\"></i> {{ button_clear }}</button>
                </div>
              </div>
            </div>
            {% set i = i + 1 %}
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('.tab-content .btn-danger').on('click', function() {
    var element = this;

    if (confirm('{{ text_confirm }}')) {
        \$.ajax({
            url: \$(element).attr('value'),
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

                    \$('#' + \$(element).attr('data-oc-target')).val('');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
});
//--></script>
{{ footer }}", "admin/view/template/tool/log.twig", "/var/www/html/admin/view/template/tool/log.twig");
    }
}
