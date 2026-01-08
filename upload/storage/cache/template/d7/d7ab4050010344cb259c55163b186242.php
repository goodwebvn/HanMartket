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

/* admin/view/template/tool/upgrade.twig */
class __TwigTemplate_068d38c1618837a4646030b1923170b5 extends Template
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
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-rotate\"></i> ";
        // line 15
        yield ($context["text_upgrade"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <fieldset>
          <legend>";
        // line 18
        yield ($context["text_information"] ?? null);
        yield "</legend>
          <div class=\"row mb-3\">
            <div class=\"col\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 22
        yield ($context["text_current_version"] ?? null);
        yield "</strong>
                  <br/>
                  <span";
        // line 24
        if (($context["upgrade"] ?? null)) {
            yield " class=\"text-danger\"";
        }
        yield ">";
        yield ($context["current_version"] ?? null);
        yield "</span>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 30
        yield ($context["text_latest_version"] ?? null);
        yield "</strong>
                  <br/>
                  ";
        // line 32
        yield ($context["latest_version"] ?? null);
        yield "
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>";
        // line 38
        yield ($context["text_date_added"] ?? null);
        yield "</strong>
                  <br/>
                  ";
        // line 40
        yield ($context["date_added"] ?? null);
        yield "
                </div>
              </div>
            </div>
          </div>
          <div class=\"form-control border rounded-start\">
            <div class=\"lead\"><strong>";
        // line 46
        yield ($context["text_change"] ?? null);
        yield "</strong>
              <br/>
              ";
        // line 48
        yield ($context["log"] ?? null);
        yield "
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 53
        yield ($context["text_status"] ?? null);
        yield "</legend>
          <div class=\"input-group input-group-lg\">
            <button type=\"button\" id=\"button-upgrade\" class=\"btn btn-warning btn-lg\"";
        // line 55
        if ( !($context["upgrade"] ?? null)) {
            yield " disabled";
        }
        yield "><i class=\"fa-solid fa-level-up-alt\"></i> ";
        yield ($context["button_upgrade"] ?? null);
        yield "</button>
            <input type=\"text\" id=\"input-upgrade\" value=\"";
        // line 56
        yield ($context["text_ready"] ?? null);
        yield "\" class=\"form-control bg-white\" readonly/>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-upgrade').on('click', function() {
    var element = this;

    \$(element).button('loading');

    if (confirm('";
        // line 69
        yield ($context["text_confirm"] ?? null);
        yield "')) {
        \$('#progress').html('";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_download"] ?? null), "js");
        yield "');

        var next = 'index.php?route=tool/upgrade.download&user_token=";
        // line 72
        yield ($context["user_token"] ?? null);
        yield "&version=";
        yield ($context["latest_version"] ?? null);
        yield "';

        var upgrade = function() {
            return \$.ajax({
                url: next,
                dataType: 'json',
                success: function(json) {
                    console.log(json);

                    \$('#input-upgrade').removeClass('is-valid is-invalid');

                    if (json['error']) {
                        \$('#input-upgrade').val(json['error']);
                        \$('#input-upgrade').addClass('is-invalid');

                        \$(element).button('reset');
                    }

                    if (json['text']) {
                        \$('#input-upgrade').val(json['text']);
                    }

                    if (json['success']) {
                        \$('#input-upgrade').val(json['success']);
                        \$('#input-upgrade').addClass('is-valid');

                        \$(element).button('reset');
                    }

                    if (json['next']) {
                        next = json['next'];

                        chain.attach(upgrade);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                    \$(element).button('reset');
                }
            });
        };

        chain.attach(upgrade);
    }
});
//--></script>
";
        // line 119
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/tool/upgrade.twig";
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
        return array (  239 => 119,  187 => 72,  182 => 70,  178 => 69,  162 => 56,  154 => 55,  149 => 53,  141 => 48,  136 => 46,  127 => 40,  122 => 38,  113 => 32,  108 => 30,  95 => 24,  90 => 22,  83 => 18,  77 => 15,  70 => 10,  59 => 8,  55 => 7,  50 => 5,  42 => 1,);
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
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-rotate\"></i> {{ text_upgrade }}</div>
      <div class=\"card-body\">
        <fieldset>
          <legend>{{ text_information }}</legend>
          <div class=\"row mb-3\">
            <div class=\"col\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>{{ text_current_version }}</strong>
                  <br/>
                  <span{% if upgrade %} class=\"text-danger\"{% endif %}>{{ current_version }}</span>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>{{ text_latest_version }}</strong>
                  <br/>
                  {{ latest_version }}
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-control border rounded-start\">
                <div class=\"lead\"><strong>{{ text_date_added }}</strong>
                  <br/>
                  {{ date_added }}
                </div>
              </div>
            </div>
          </div>
          <div class=\"form-control border rounded-start\">
            <div class=\"lead\"><strong>{{ text_change }}</strong>
              <br/>
              {{ log }}
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>{{ text_status }}</legend>
          <div class=\"input-group input-group-lg\">
            <button type=\"button\" id=\"button-upgrade\" class=\"btn btn-warning btn-lg\"{% if not upgrade %} disabled{% endif %}><i class=\"fa-solid fa-level-up-alt\"></i> {{ button_upgrade }}</button>
            <input type=\"text\" id=\"input-upgrade\" value=\"{{ text_ready }}\" class=\"form-control bg-white\" readonly/>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-upgrade').on('click', function() {
    var element = this;

    \$(element).button('loading');

    if (confirm('{{ text_confirm }}')) {
        \$('#progress').html('{{ text_download|escape('js') }}');

        var next = 'index.php?route=tool/upgrade.download&user_token={{ user_token }}&version={{ latest_version }}';

        var upgrade = function() {
            return \$.ajax({
                url: next,
                dataType: 'json',
                success: function(json) {
                    console.log(json);

                    \$('#input-upgrade').removeClass('is-valid is-invalid');

                    if (json['error']) {
                        \$('#input-upgrade').val(json['error']);
                        \$('#input-upgrade').addClass('is-invalid');

                        \$(element).button('reset');
                    }

                    if (json['text']) {
                        \$('#input-upgrade').val(json['text']);
                    }

                    if (json['success']) {
                        \$('#input-upgrade').val(json['success']);
                        \$('#input-upgrade').addClass('is-valid');

                        \$(element).button('reset');
                    }

                    if (json['next']) {
                        next = json['next'];

                        chain.attach(upgrade);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

                    \$(element).button('reset');
                }
            });
        };

        chain.attach(upgrade);
    }
});
//--></script>
{{ footer }}", "admin/view/template/tool/upgrade.twig", "/var/www/html/admin/view/template/tool/upgrade.twig");
    }
}
