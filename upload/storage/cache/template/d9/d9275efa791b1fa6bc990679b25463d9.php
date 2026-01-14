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

/* martket/view/template/localisation/location_form.twig */
class __TwigTemplate_b77fe1f16ee8aa7075080a21a58cc50f extends Template
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
        <button type=\"submit\" form=\"form-location\" formaction=\"";
        // line 6
        yield ($context["save"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 19
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-location\" action=\"";
        // line 21
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 23
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 25
        yield ($context["name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 30
        yield ($context["entry_address"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea type=\"text\" name=\"address\" rows=\"5\" placeholder=\"";
        // line 32
        yield ($context["entry_address"] ?? null);
        yield "\" id=\"input-address\" class=\"form-control\">";
        yield ($context["address"] ?? null);
        yield "</textarea>
              <div id=\"error-address\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 37
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 39
        yield ($context["telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\"/>
              <div class=\"form-text\">";
        // line 40
        yield ($context["help_telephone"] ?? null);
        yield "</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">";
        // line 44
        yield ($context["entry_geocode"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"geocode\" value=\"";
        // line 46
        yield ($context["geocode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_geocode"] ?? null);
        yield "\" id=\"input-geocode\" class=\"form-control\"/>
              <div class=\"form-text\">";
        // line 47
        yield ($context["help_geocode"] ?? null);
        yield "</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 51
        yield ($context["entry_image"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                <img src=\"";
        // line 54
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/>
                <input type=\"hidden\" name=\"image\" value=\"";
        // line 55
        yield ($context["image"] ?? null);
        yield "\" id=\"input-image\"/>
                <div class=\"d-grid\">
                  <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 57
        yield ($context["button_edit"] ?? null);
        yield "</button>
                  <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 58
        yield ($context["button_clear"] ?? null);
        yield "</button>
                </div>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-open\" class=\"col-sm-2 col-form-label\">";
        // line 64
        yield ($context["entry_open"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"open\" rows=\"5\" placeholder=\"";
        // line 66
        yield ($context["entry_open"] ?? null);
        yield "\" id=\"input-open\" class=\"form-control\">";
        yield ($context["open"] ?? null);
        yield "</textarea>
              <div class=\"form-text\">";
        // line 67
        yield ($context["help_open"] ?? null);
        yield "</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 71
        yield ($context["entry_comment"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 73
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-comment\" class=\"form-control\">";
        yield ($context["comment"] ?? null);
        yield "</textarea>
              <div class=\"form-text\">";
        // line 74
        yield ($context["help_comment"] ?? null);
        yield "</div>
            </div>
          </div>
          <input type=\"hidden\" name=\"location_id\" value=\"";
        // line 77
        yield ($context["location_id"] ?? null);
        yield "\" id=\"input-location-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 83
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "martket/view/template/localisation/location_form.twig";
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
        return array (  241 => 83,  232 => 77,  226 => 74,  220 => 73,  215 => 71,  208 => 67,  202 => 66,  197 => 64,  188 => 58,  184 => 57,  179 => 55,  173 => 54,  167 => 51,  160 => 47,  154 => 46,  149 => 44,  142 => 40,  136 => 39,  131 => 37,  121 => 32,  116 => 30,  106 => 25,  101 => 23,  96 => 21,  91 => 19,  84 => 14,  73 => 12,  69 => 11,  64 => 9,  57 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-location\" formaction=\"{{ save }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
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
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-location\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"{{ name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-address\" class=\"col-sm-2 col-form-label\">{{ entry_address }}</label>
            <div class=\"col-sm-10\">
              <textarea type=\"text\" name=\"address\" rows=\"5\" placeholder=\"{{ entry_address }}\" id=\"input-address\" class=\"form-control\">{{ address }}</textarea>
              <div id=\"error-address\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">{{ entry_telephone }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
              <div class=\"form-text\">{{ help_telephone }}</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">{{ entry_geocode }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"geocode\" value=\"{{ geocode }}\" placeholder=\"{{ entry_geocode }}\" id=\"input-geocode\" class=\"form-control\"/>
              <div class=\"form-text\">{{ help_geocode }}</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-image\" class=\"col-sm-2 col-form-label\">{{ entry_image }}</label>
            <div class=\"col-sm-10\">
              <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                <img src=\"{{ thumb }}\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/>
                <input type=\"hidden\" name=\"image\" value=\"{{ image }}\" id=\"input-image\"/>
                <div class=\"d-grid\">
                  <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                  <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                </div>
              </div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-open\" class=\"col-sm-2 col-form-label\">{{ entry_open }}</label>
            <div class=\"col-sm-10\">
              <textarea name=\"open\" rows=\"5\" placeholder=\"{{ entry_open }}\" id=\"input-open\" class=\"form-control\">{{ open }}</textarea>
              <div class=\"form-text\">{{ help_open }}</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">{{ entry_comment }}</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"5\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\">{{ comment }}</textarea>
              <div class=\"form-text\">{{ help_comment }}</div>
            </div>
          </div>
          <input type=\"hidden\" name=\"location_id\" value=\"{{ location_id }}\" id=\"input-location-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}", "martket/view/template/localisation/location_form.twig", "/var/www/html/martket/view/template/localisation/location_form.twig");
    }
}
