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

/* martket/view/template/catalog/subscription_plan_form.twig */
class __TwigTemplate_2fc3f94190d05ef679325a23f2621bf8 extends Template
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
        <button type=\"submit\" form=\"form-subscription-plan\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
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
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-subscription-plan\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 22
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 25
            yield "                <div class=\"input-group\">
                  <div class=\"input-group-text\"><img src=\"";
            // line 26
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 26);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 26);
            yield "\"/></div>
                  <input type=\"text\" name=\"subscription_plan_description[";
            // line 27
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27);
            yield "][name]\" value=\"";
            yield (((($_v0 = ($context["subscription_plan_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["subscription_plan_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27)] ?? null) : null), "name", [], "any", false, false, false, 27)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-name-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 27);
            yield "\" class=\"form-control\"/>
                  <div id=\"error-name-";
            // line 28
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 28);
            yield "\" class=\"invalid-feedback\"></div>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "            </div>
          </div>
          <fieldset>
            <legend>";
        // line 34
        yield ($context["text_trial"] ?? null);
        yield "</legend>
            <div class=\"row mb-3\">
              <label for=\"input-trial-duration\" class=\"col-sm-2 col-form-label\">";
        // line 36
        yield ($context["entry_trial_duration"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"trial_duration\" value=\"";
        // line 38
        yield ($context["trial_duration"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_trial_duration"] ?? null);
        yield "\" id=\"input-trial-duration\" class=\"form-control\"/>
                <div class=\"form-text\">";
        // line 39
        yield ($context["help_trial_duration"] ?? null);
        yield "</div>
                <div id=\"error-trial-duration\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-trial-cycle\" class=\"col-sm-2 col-form-label\">";
        // line 44
        yield ($context["entry_trial_cycle"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"trial_cycle\" value=\"";
        // line 46
        yield ($context["trial_cycle"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_trial_cycle"] ?? null);
        yield "\" id=\"input-trial-cycle\" class=\"form-control\"/>
                <div class=\"form-text\">";
        // line 47
        yield ($context["help_trial_cycle"] ?? null);
        yield "</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-trial-frequency\" class=\"col-sm-2 col-form-label\">";
        // line 51
        yield ($context["entry_trial_frequency"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <select name=\"trial_frequency\" id=\"input-trial-frequency\" class=\"form-select\">
                  ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["frequencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["frequency_option"]) {
            // line 55
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["frequency_option"], "value", [], "any", false, false, false, 55);
            yield "\"";
            if ((($context["trial_frequency"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["frequency_option"], "value", [], "any", false, false, false, 55))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["frequency_option"], "text", [], "any", false, false, false, 55);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['frequency_option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "                </select>
                <div class=\"form-text\">";
        // line 58
        yield ($context["help_trial_frequency"] ?? null);
        yield "</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 62
        yield ($context["entry_trial_status"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"form-check form-switch form-switch-lg\">
                  <input type=\"hidden\" name=\"trial_status\" value=\"0\"/>
                  <input type=\"checkbox\" name=\"trial_status\" value=\"1\" id=\"input-notify\" class=\"form-check-input\"";
        // line 66
        if (($context["trial_status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                </div>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 72
        yield ($context["text_subscription"] ?? null);
        yield "</legend>
            <div class=\"row mb-3\">
              <label for=\"input-duration\" class=\"col-sm-2 col-form-label\">";
        // line 74
        yield ($context["entry_duration"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"duration\" value=\"";
        // line 76
        yield ($context["duration"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_duration"] ?? null);
        yield "\" id=\"input-duration\" class=\"form-control\"/>
                <div class=\"form-text\">";
        // line 77
        yield ($context["help_duration"] ?? null);
        yield "</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-cycle\" class=\"col-sm-2 col-form-label\">";
        // line 81
        yield ($context["entry_cycle"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"cycle\" value=\"";
        // line 83
        yield ($context["cycle"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_cycle"] ?? null);
        yield "\" id=\"input-cycle\" class=\"form-control\"/>
                <div class=\"form-text\">";
        // line 84
        yield ($context["help_cycle"] ?? null);
        yield "</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-frequency\" class=\"col-sm-2 col-form-label\">";
        // line 88
        yield ($context["entry_frequency"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <select name=\"frequency\" id=\"input-frequency\" class=\"form-select\">
                  ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["frequencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["frequency_option"]) {
            // line 92
            yield "                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["frequency_option"], "value", [], "any", false, false, false, 92);
            yield "\"";
            if ((($context["frequency"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["frequency_option"], "value", [], "any", false, false, false, 92))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["frequency_option"], "text", [], "any", false, false, false, 92);
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['frequency_option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "                </select>
                <div class=\"form-text\">";
        // line 95
        yield ($context["help_frequency"] ?? null);
        yield "</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 99
        yield ($context["entry_status"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"form-check form-switch form-switch-lg\">
                  <input type=\"hidden\" name=\"status\" value=\"0\"/>
                  <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 103
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                </div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 108
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"number\" name=\"sort_order\" value=\"";
        // line 110
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
              </div>
            </div>
          </fieldset>
          <input type=\"hidden\" name=\"subscription_plan_id\" value=\"";
        // line 114
        yield ($context["subscription_plan_id"] ?? null);
        yield "\" id=\"input-subscription-plan-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 120
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
        return "martket/view/template/catalog/subscription_plan_form.twig";
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
        return array (  351 => 120,  342 => 114,  333 => 110,  328 => 108,  318 => 103,  311 => 99,  304 => 95,  301 => 94,  286 => 92,  282 => 91,  276 => 88,  269 => 84,  263 => 83,  258 => 81,  251 => 77,  245 => 76,  240 => 74,  235 => 72,  224 => 66,  217 => 62,  210 => 58,  207 => 57,  192 => 55,  188 => 54,  182 => 51,  175 => 47,  169 => 46,  164 => 44,  156 => 39,  150 => 38,  145 => 36,  140 => 34,  135 => 31,  126 => 28,  116 => 27,  110 => 26,  107 => 25,  103 => 24,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-subscription-plan\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
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
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-subscription-plan\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              {% for language in languages %}
                <div class=\"input-group\">
                  <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                  <input type=\"text\" name=\"subscription_plan_description[{{ language.language_id }}][name]\" value=\"{{ subscription_plan_description[language.language_id] ? subscription_plan_description[language.language_id].name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name-{{ language.language_id }}\" class=\"form-control\"/>
                  <div id=\"error-name-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                </div>
              {% endfor %}
            </div>
          </div>
          <fieldset>
            <legend>{{ text_trial }}</legend>
            <div class=\"row mb-3\">
              <label for=\"input-trial-duration\" class=\"col-sm-2 col-form-label\">{{ entry_trial_duration }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"trial_duration\" value=\"{{ trial_duration }}\" placeholder=\"{{ entry_trial_duration }}\" id=\"input-trial-duration\" class=\"form-control\"/>
                <div class=\"form-text\">{{ help_trial_duration }}</div>
                <div id=\"error-trial-duration\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-trial-cycle\" class=\"col-sm-2 col-form-label\">{{ entry_trial_cycle }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"trial_cycle\" value=\"{{ trial_cycle }}\" placeholder=\"{{ entry_trial_cycle }}\" id=\"input-trial-cycle\" class=\"form-control\"/>
                <div class=\"form-text\">{{ help_trial_cycle }}</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-trial-frequency\" class=\"col-sm-2 col-form-label\">{{ entry_trial_frequency }}</label>
              <div class=\"col-sm-10\">
                <select name=\"trial_frequency\" id=\"input-trial-frequency\" class=\"form-select\">
                  {% for frequency_option in frequencies %}
                    <option value=\"{{ frequency_option.value }}\"{% if trial_frequency == frequency_option.value %} selected{% endif %}>{{ frequency_option.text }}</option>
                  {% endfor %}
                </select>
                <div class=\"form-text\">{{ help_trial_frequency }}</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\">{{ entry_trial_status }}</label>
              <div class=\"col-sm-10\">
                <div class=\"form-check form-switch form-switch-lg\">
                  <input type=\"hidden\" name=\"trial_status\" value=\"0\"/>
                  <input type=\"checkbox\" name=\"trial_status\" value=\"1\" id=\"input-notify\" class=\"form-check-input\"{% if trial_status %} checked{% endif %}/>
                </div>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>{{ text_subscription }}</legend>
            <div class=\"row mb-3\">
              <label for=\"input-duration\" class=\"col-sm-2 col-form-label\">{{ entry_duration }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"duration\" value=\"{{ duration }}\" placeholder=\"{{ entry_duration }}\" id=\"input-duration\" class=\"form-control\"/>
                <div class=\"form-text\">{{ help_duration }}</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-cycle\" class=\"col-sm-2 col-form-label\">{{ entry_cycle }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"cycle\" value=\"{{ cycle }}\" placeholder=\"{{ entry_cycle }}\" id=\"input-cycle\" class=\"form-control\"/>
                <div class=\"form-text\">{{ help_cycle }}</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-frequency\" class=\"col-sm-2 col-form-label\">{{ entry_frequency }}</label>
              <div class=\"col-sm-10\">
                <select name=\"frequency\" id=\"input-frequency\" class=\"form-select\">
                  {% for frequency_option in frequencies %}
                    <option value=\"{{ frequency_option.value }}\"{% if frequency == frequency_option.value %} selected{% endif %}>{{ frequency_option.text }}</option>
                  {% endfor %}
                </select>
                <div class=\"form-text\">{{ help_frequency }}</div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
              <div class=\"col-sm-10\">
                <div class=\"form-check form-switch form-switch-lg\">
                  <input type=\"hidden\" name=\"status\" value=\"0\"/>
                  <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
                </div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
              <div class=\"col-sm-10\">
                <input type=\"number\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
              </div>
            </div>
          </fieldset>
          <input type=\"hidden\" name=\"subscription_plan_id\" value=\"{{ subscription_plan_id }}\" id=\"input-subscription-plan-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}
", "martket/view/template/catalog/subscription_plan_form.twig", "/var/www/html/martket/view/template/catalog/subscription_plan_form.twig");
    }
}
