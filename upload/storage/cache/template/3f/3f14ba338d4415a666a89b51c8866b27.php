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

/* martket/view/template/setting/setting.twig */
class __TwigTemplate_31e8bfdb53ae5f572616f3391ca3b8c1 extends Template
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
        <button type=\"submit\" form=\"form-setting\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
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
        yield ($context["text_edit"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-setting\" action=\"";
        // line 21
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 23
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 24
        yield ($context["tab_store"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 25
        yield ($context["tab_local"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        yield ($context["tab_option"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        yield ($context["tab_image"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        yield ($context["tab_mail"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        yield ($context["tab_server"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <fieldset>
                <legend>";
        // line 34
        yield ($context["text_site"] ?? null);
        yield "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 36
        yield ($context["entry_name"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_name\" value=\"";
        // line 38
        yield ($context["config_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\"/>
                    <div id=\"error-name\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">";
        // line 43
        yield ($context["entry_theme"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                      ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 47
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 47);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 47) == ($context["config_theme"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 47);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "                    </select>
                    <br/>
                    <img src=\"\" alt=\"\" id=\"theme-thumb\" class=\"img-thumbnail\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">";
        // line 55
        yield ($context["entry_layout"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                      ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 59
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 59);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 59) == ($context["config_layout_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 59);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">";
        // line 65
        yield ($context["entry_logo"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                      <img src=\"";
        // line 68
        yield ($context["logo"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_logo\" value=\"";
        yield ($context["config_logo"] ?? null);
        yield "\" id=\"input-logo\"/>
                      <div class=\"d-grid\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 70
        yield ($context["button_edit"] ?? null);
        yield "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 71
        yield ($context["button_clear"] ?? null);
        yield "</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-icon\" class=\"col-sm-2 col-form-label\">";
        // line 77
        yield ($context["entry_icon"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                      <img src=\"";
        // line 80
        yield ($context["icon"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-icon\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_icon\" value=\"";
        yield ($context["config_icon"] ?? null);
        yield "\" id=\"input-icon\"/>
                      <div class=\"d-grid\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 82
        yield ($context["button_edit"] ?? null);
        yield "</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 83
        yield ($context["button_clear"] ?? null);
        yield "</button>
                      </div>
                    </div>
                    <div class=\"form-text\">";
        // line 86
        yield ($context["help_icon"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 91
        yield ($context["text_meta"] ?? null);
        yield "</legend>
                <ul class=\"nav nav-tabs\">
                  ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 94
            yield "                    <li class=\"nav-item\"><a href=\"#language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 94);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 94)) {
                yield " active";
            }
            yield "\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 94);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 94);
            yield "\"/> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 94);
            yield "</a></li>
                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "                </ul>
                <div class=\"tab-content\">
                  ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 99
            yield "                    <div id=\"language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 99);
            yield "\" class=\"tab-pane";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 99)) {
                yield " active";
            }
            yield "\">
                      <div class=\"row mb-3 required\">
                        <label for=\"input-meta-title-";
            // line 101
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 101);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_title"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_description[";
            // line 103
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103);
            yield "][meta_title]\" value=\"";
            yield (((($_v0 = ($context["config_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["config_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103)] ?? null) : null), "meta_title", [], "any", false, false, false, 103)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_meta_title"] ?? null);
            yield "\" id=\"input-meta-title-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103);
            yield "\" class=\"form-control\"/>
                          <div id=\"error-meta-title-";
            // line 104
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 104);
            yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-meta-description-";
            // line 108
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_description"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_description[";
            // line 110
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110);
            yield "][meta_description]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_description"] ?? null);
            yield "\" id=\"input-meta-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110);
            yield "\" class=\"form-control\">";
            yield (((($_v2 = ($context["config_description"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["config_description"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 110)] ?? null) : null), "meta_description", [], "any", false, false, false, 110)) : (""));
            yield "</textarea>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-meta-keyword-";
            // line 114
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 114);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_description[";
            // line 116
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116);
            yield "][meta_keyword]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "\" id=\"input-meta-keyword-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116);
            yield "\" class=\"form-control\">";
            yield (((($_v4 = ($context["config_description"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["config_description"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 116)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 116)) : (""));
            yield "</textarea>
                        </div>
                      </div>
                    </div>
                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "                </div>
              </fieldset>
            </div>
            <div id=\"tab-store\" class=\"tab-pane\">
              <div class=\"row mb-3 required\">
                <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">";
        // line 126
        yield ($context["entry_owner"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 128
        yield ($context["config_owner"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_owner"] ?? null);
        yield "\" id=\"input-owner\" class=\"form-control\"/>
                  <div id=\"error-owner\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-address\" class=\"col-sm-2 col-form-label\">";
        // line 133
        yield ($context["entry_address"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" rows=\"5\" placeholder=\"";
        // line 135
        yield ($context["entry_address"] ?? null);
        yield "\" id=\"input-address\" class=\"form-control\">";
        yield ($context["config_address"] ?? null);
        yield "</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">";
        // line 139
        yield ($context["entry_geocode"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 141
        yield ($context["config_geocode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_geocode"] ?? null);
        yield "\" id=\"input-geocode\" class=\"form-control\"/>
                  <div class=\"form-text\">";
        // line 142
        yield ($context["help_geocode"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 146
        yield ($context["entry_email"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 148
        yield ($context["config_email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
                  <div id=\"error-email\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
        // line 153
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 155
        yield ($context["config_telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\"/>
                  <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 160
        yield ($context["entry_image"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                    <img src=\"";
        // line 163
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_image\" value=\"";
        yield ($context["config_image"] ?? null);
        yield "\" id=\"input-image\"/>
                    <div class=\"d-grid\">
                      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 165
        yield ($context["button_edit"] ?? null);
        yield "</button>
                      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 166
        yield ($context["button_clear"] ?? null);
        yield "</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-open\" class=\"col-sm-2 col-form-label\">";
        // line 172
        yield ($context["entry_open"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 174
        yield ($context["entry_open"] ?? null);
        yield "\" id=\"input-open\" class=\"form-control\">";
        yield ($context["config_open"] ?? null);
        yield "</textarea>
                  <div class=\"form-text\">";
        // line 175
        yield ($context["help_open"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">";
        // line 179
        yield ($context["entry_comment"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 181
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-comment\" class=\"form-control\">";
        yield ($context["config_comment"] ?? null);
        yield "</textarea>
                  <div class=\"form-text\">";
        // line 182
        yield ($context["help_comment"] ?? null);
        yield "</div>
                </div>
              </div>
              ";
        // line 185
        if (($context["locations"] ?? null)) {
            // line 186
            yield "                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
            // line 187
            yield ($context["entry_location"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 191
                yield "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                // line 192
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 192);
                yield "\" id=\"input-location-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 192);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 192), ($context["config_location"] ?? null))) {
                    yield " checked";
                }
                yield "/> <label for=\"input-location-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 192);
                yield "\" class=\"form-check-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 192);
                yield "</label>
                        </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            yield "                    </div>
                    <div class=\"form-text\">";
            // line 196
            yield ($context["help_location"] ?? null);
            yield "</div>
                  </div>
                </div>
              ";
        }
        // line 200
        yield "            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 203
        yield ($context["text_region"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-country\" class=\"col-sm-2 col-form-label\">";
        // line 205
        yield ($context["entry_country"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_country_id\" id=\"input-country\" class=\"form-select\">
                      ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 209
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 209);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 209) == ($context["config_country_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 209);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">";
        // line 215
        yield ($context["entry_zone"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-select\"></select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">";
        // line 221
        yield ($context["entry_timezone"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-select\">
                      ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 225
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 225);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 225) == ($context["config_timezone"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 225);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['timezone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        yield "                    </select>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>";
        // line 233
        yield ($context["text_language"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-language-catalog\" class=\"col-sm-2 col-form-label\">";
        // line 235
        yield ($context["entry_language"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_catalog\" id=\"input-language-catalog\" class=\"form-select\">
                      ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 239
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 239);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 239) == ($context["config_language_catalog"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 239);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-language-admin\" class=\"col-sm-2 col-form-label\">";
        // line 245
        yield ($context["entry_language_admin"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_admin\" id=\"input-language-admin\" class=\"form-select\">
                      ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 249
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 249);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 249) == ($context["config_language_admin"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 249);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        yield "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 256
        yield ($context["text_currency"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">";
        // line 258
        yield ($context["entry_currency"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency\" id=\"input-currency\" class=\"form-select\">
                      ";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 262
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 262);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 262) == ($context["config_currency"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 262);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        yield "                    </select>
                    <div class=\"form-text\">";
        // line 265
        yield ($context["help_currency"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">";
        // line 269
        yield ($context["entry_currency_engine"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-select\">
                      ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 273
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 273);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 273) == ($context["config_currency_engine"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 273);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency_engine'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 279
        yield ($context["entry_currency_auto"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_currency_auto\" value=\"0\"/> <input type=\"checkbox\" name=\"config_currency_auto\" value=\"1\" id=\"input-currency-auto\" class=\"form-check-input\"";
        // line 282
        if (($context["config_currency_auto"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 284
        yield ($context["help_currency_auto"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 289
        yield ($context["text_measurement"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 291
        yield ($context["entry_length_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-select\">
                      ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 295
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 295);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 295) == ($context["config_length_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 295);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['length_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        yield "                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 301
        yield ($context["entry_weight_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                      ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 305
            yield "                        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 305);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 305) == ($context["config_weight_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 305);
            yield "</option>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['weight_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        yield "                    </select>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-option\" class=\"tab-pane\">
              <div class=\"accordion\" id=\"accordion-option\">
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-product\">";
        // line 315
        yield ($context["text_product"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-product\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3 required\">
                        <label for=\"input-product-description-length\" class=\"col-sm-2 col-form-label\">";
        // line 319
        yield ($context["entry_product_description_length"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_product_description_length\" value=\"";
        // line 321
        yield ($context["config_product_description_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_product_description_length"] ?? null);
        yield "\" id=\"input-product-description-length\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 322
        yield ($context["help_product_description_length"] ?? null);
        yield "</div>
                          <div id=\"error-product-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-pagination\" class=\"col-sm-2 col-form-label\">";
        // line 327
        yield ($context["entry_pagination"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination\" value=\"";
        // line 329
        yield ($context["config_pagination"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_pagination"] ?? null);
        yield "\" id=\"input-pagination\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 330
        yield ($context["help_pagination"] ?? null);
        yield "</div>
                          <div id=\"error-pagination\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 335
        yield ($context["entry_product_count"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_product_count\" value=\"0\"/> <input type=\"checkbox\" name=\"config_product_count\" value=\"1\" id=\"input-product-count\" class=\"form-check-input\"";
        // line 338
        if (($context["config_product_count"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 340
        yield ($context["help_product_count"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-pagination-admin\" class=\"col-sm-2 col-form-label\">";
        // line 344
        yield ($context["entry_pagination_admin"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination_admin\" value=\"";
        // line 346
        yield ($context["config_pagination_admin"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_pagination_admin"] ?? null);
        yield "\" id=\"input-pagination-admin\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 347
        yield ($context["help_pagination"] ?? null);
        yield "</div>
                          <div id=\"error-pagination-admin\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-autocomplete-limit\" class=\"col-sm-2 col-form-label\">";
        // line 352
        yield ($context["entry_autocomplete_limit"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_autocomplete_limit\" value=\"";
        // line 354
        yield ($context["config_autocomplete_limit"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_autocomplete_limit"] ?? null);
        yield "\" id=\"input-autocomplete-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 355
        yield ($context["help_autocomplete_limit"] ?? null);
        yield "</div>
                          <div id=\"error-autocomplete-limit\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 360
        yield ($context["entry_product_report"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_product_report_status\" value=\"0\"/> <input type=\"checkbox\" name=\"config_product_report_status\" value=\"1\" id=\"input-product-report\" class=\"form-check-input\"";
        // line 363
        if (($context["config_product_report_status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 365
        yield ($context["help_product_report"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-review\">";
        // line 372
        yield ($context["text_review"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-review\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 376
        yield ($context["entry_review_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_review_status\" value=\"0\"/> <input type=\"checkbox\" name=\"config_review_status\" value=\"1\" id=\"input-review-status\" class=\"form-check-input\"";
        // line 379
        if (($context["config_review_status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 381
        yield ($context["help_review"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 385
        yield ($context["entry_review_purchased"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_review_purchased\" value=\"0\"/> <input type=\"checkbox\" name=\"config_review_purchased\" value=\"1\" id=\"input-review-purchased\" class=\"form-check-input\"";
        // line 388
        if (($context["config_review_purchased"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 390
        yield ($context["help_review_purchased"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 394
        yield ($context["entry_review_guest"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_review_guest\" value=\"0\"/> <input type=\"checkbox\" name=\"config_review_guest\" value=\"1\" id=\"input-review-guest\" class=\"form-check-input\"";
        // line 397
        if (($context["config_review_guest"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 399
        yield ($context["help_review_guest"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-cms\">";
        // line 406
        yield ($context["text_cms"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-cms\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3 required\">
                        <label for=\"input-article-description-length\" class=\"col-sm-2 col-form-label\">";
        // line 410
        yield ($context["entry_article_description_length"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_article_description_length\" value=\"";
        // line 412
        yield ($context["config_article_description_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_article_description_length"] ?? null);
        yield "\" id=\"input-article-description-length\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 413
        yield ($context["help_article_description_length"] ?? null);
        yield "</div>
                          <div id=\"error-article-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 418
        yield ($context["entry_comment_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_comment_status\" value=\"0\"/> <input type=\"checkbox\" name=\"config_comment_status\" value=\"1\" id=\"input-comment-status\" class=\"form-check-input\"";
        // line 421
        if (($context["config_comment_status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 423
        yield ($context["help_comment_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 427
        yield ($context["entry_comment_approve"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_comment_approve\" value=\"0\"/> <input type=\"checkbox\" name=\"config_comment_approve\" value=\"1\" id=\"input-comment-approve\" class=\"form-check-input\"";
        // line 430
        if (($context["config_comment_approve"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 432
        yield ($context["help_comment_approve"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-comment-interval\" class=\"col-sm-2 col-form-label\">";
        // line 436
        yield ($context["entry_comment_interval"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_comment_interval\" value=\"";
        // line 438
        yield ($context["config_comment_interval"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_comment_interval"] ?? null);
        yield "\" id=\"input-comment-interval\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 439
        yield ($context["help_comment_interval"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-legal\">";
        // line 446
        yield ($context["text_legal"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-legal\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">";
        // line 450
        yield ($context["entry_cookie"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-select\">
                            <option value=\"0\">";
        // line 453
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 454
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 455
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 455);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 455) == ($context["config_cookie_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 455);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 457
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 458
        yield ($context["help_cookie"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">";
        // line 462
        yield ($context["entry_gdpr"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-select\">
                            <option value=\"0\">";
        // line 465
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 466
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 467
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 467);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 467) == ($context["config_gdpr_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 467);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 469
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 470
        yield ($context["help_gdpr"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">";
        // line 474
        yield ($context["entry_gdpr_limit"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_gdpr_limit\" value=\"";
        // line 476
        yield ($context["config_gdpr_limit"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_gdpr_limit"] ?? null);
        yield "\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 477
        yield ($context["help_gdpr_limit"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-tax\">";
        // line 484
        yield ($context["text_tax"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-tax\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 488
        yield ($context["entry_tax"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_tax\" value=\"0\"/> <input type=\"checkbox\" name=\"config_tax\" value=\"1\" id=\"input-tax\" class=\"form-check-input\"";
        // line 491
        if (($context["config_tax"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">";
        // line 496
        yield ($context["entry_tax_default"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                            <option value=\"\">";
        // line 499
        yield ($context["text_none"] ?? null);
        yield "</option>
                            <option value=\"shipping\"";
        // line 500
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_shipping"] ?? null);
        yield "</option>
                            <option value=\"payment\"";
        // line 501
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_payment"] ?? null);
        yield "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 503
        yield ($context["help_tax_default"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">";
        // line 507
        yield ($context["entry_tax_customer"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                            <option value=\"\">";
        // line 510
        yield ($context["text_none"] ?? null);
        yield "</option>
                            <option value=\"shipping\"";
        // line 511
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_shipping"] ?? null);
        yield "</option>
                            <option value=\"payment\"";
        // line 512
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_payment"] ?? null);
        yield "</option>
                          </select>
                          <div class=\"form-text\">";
        // line 514
        yield ($context["help_tax_customer"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-account\">";
        // line 521
        yield ($context["text_account"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-account\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 525
        yield ($context["entry_customer_online"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_online\" value=\"0\"/> <input type=\"checkbox\" name=\"config_customer_online\" value=\"1\" id=\"input-customer-online\" class=\"form-check-input\"";
        // line 528
        if (($context["config_customer_online"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 530
        yield ($context["help_customer_online"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-online-expire\" class=\"col-sm-2 col-form-label\">";
        // line 534
        yield ($context["entry_customer_online_expire"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"config_customer_online_expire\" value=\"";
        // line 537
        yield ($context["config_customer_online_expire"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer_online_expire"] ?? null);
        yield "\" id=\"input-customer-online-expire\" class=\"form-control\"/> <span class=\"input-group-text\" id=\"basic-addon2\">";
        yield ($context["text_hour"] ?? null);
        yield "</span>
                          </div>
                          <div class=\"form-text\">";
        // line 539
        yield ($context["help_customer_online_expire"] ?? null);
        yield "</div>
                          <div id=\"error-customer-online-expire\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 544
        yield ($context["entry_customer_activity"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_activity\" value=\"0\"/> <input type=\"checkbox\" name=\"config_customer_activity\" value=\"1\" id=\"input-customer-activity\" class=\"form-check-input\"";
        // line 547
        if (($context["config_customer_activity"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 549
        yield ($context["help_customer_activity"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 553
        yield ($context["entry_customer_search"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_search\" value=\"0\"/> <input type=\"checkbox\" name=\"config_customer_search\" value=\"1\" id=\"input-customer-search\" class=\"form-check-input\"";
        // line 556
        if (($context["config_customer_search"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">";
        // line 561
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                            ";
        // line 564
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 565
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 565);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 565) == ($context["config_customer_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 565);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 567
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 568
        yield ($context["help_customer_group"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 572
        yield ($context["entry_customer_group_display"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-customer-group-display\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 575
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 576
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
            // line 577
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 577);
            yield "\" id=\"input-customer-group-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 577);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 577), ($context["config_customer_group_display"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-customer-group-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 577);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 577);
            yield "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 580
        yield "                          </div>
                          <div class=\"form-text\">";
        // line 581
        yield ($context["help_customer_group_display"] ?? null);
        yield "</div>
                          <div id=\"error-customer-group-display\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 586
        yield ($context["entry_customer_price"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_price\" value=\"0\"/> <input type=\"checkbox\" name=\"config_customer_price\" value=\"1\" id=\"input-customer-price\" class=\"form-check-input\"";
        // line 589
        if (($context["config_customer_price"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 591
        yield ($context["help_customer_price"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 595
        yield ($context["entry_telephone_display"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_telephone_display\" value=\"0\"/> <input type=\"checkbox\" name=\"config_telephone_display\" value=\"1\" id=\"input-telephone-display\" class=\"form-check-input\"";
        // line 598
        if (($context["config_telephone_display"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 603
        yield ($context["entry_telephone_required"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_telephone_required\" value=\"0\"/> <input type=\"checkbox\" name=\"config_telephone_required\" value=\"1\" id=\"input-telephone-required\" class=\"form-check-input\"";
        // line 606
        if (($context["config_telephone_required"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-account\" class=\"col-sm-2 col-form-label\">";
        // line 611
        yield ($context["entry_account"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_account_id\" id=\"input-account\" class=\"form-select\">
                            <option value=\"0\">";
        // line 614
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 615
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 616
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 616);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 616) == ($context["config_account_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 616);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 618
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 619
        yield ($context["help_account"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <fieldset>
                        <legend>";
        // line 623
        yield ($context["text_security"] ?? null);
        yield "</legend>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">";
        // line 625
        yield ($context["entry_2fa"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"form-check form-switch form-switch-lg\">
                              <input type=\"hidden\" name=\"config_2fa\" value=\"0\"/>
                              <input type=\"checkbox\" name=\"config_2fa\" value=\"1\" id=\"input-2fa\" class=\"form-check-input\"";
        // line 629
        if (($context["config_2fa"] ?? null)) {
            yield " checked";
        }
        yield "/>
                            </div>
                            <div class=\"form-text\">";
        // line 631
        yield ($context["help_2fa"] ?? null);
        yield "</div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">";
        // line 635
        yield ($context["entry_login_attempts"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 637
        yield ($context["config_login_attempts"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_login_attempts"] ?? null);
        yield "\" id=\"input-login-attempts\" class=\"form-control\"/>
                            <div class=\"form-text\">";
        // line 638
        yield ($context["help_login_attempts"] ?? null);
        yield "</div>
                            <div id=\"error-login-attempts\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">";
        // line 643
        yield ($context["entry_password"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <div class=\"form-control\" style=\"overflow: auto;\">
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_uppercase\" value=\"1\" id=\"input-password-uppercase\" class=\"form-check-input\"";
        // line 647
        if (($context["config_password_uppercase"] ?? null)) {
            yield " checked";
        }
        yield "/>
                                <label for=\"input-password-uppercase\" class=\"form-check-label\">";
        // line 648
        yield ($context["text_password_uppercase"] ?? null);
        yield "</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_lowercase\" value=\"1\" id=\"input-password-lowercase\" class=\"form-check-input\"";
        // line 651
        if (($context["config_password_lowercase"] ?? null)) {
            yield " checked";
        }
        yield "/>
                                <label for=\"input-password-lowercase\" class=\"form-check-label\">";
        // line 652
        yield ($context["text_password_lowercase"] ?? null);
        yield "</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_number\" value=\"1\" id=\"input-password-number\" class=\"form-check-input\"";
        // line 655
        if (($context["config_password_number"] ?? null)) {
            yield " checked";
        }
        yield "/>
                                <label for=\"input-password-number\" class=\"form-check-label\">";
        // line 656
        yield ($context["text_password_number"] ?? null);
        yield "</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_symbol\" value=\"1\" id=\"input-password-symbol\" class=\"form-check-input\"";
        // line 659
        if (($context["config_password_symbol"] ?? null)) {
            yield " checked";
        }
        yield "/>
                                <label for=\"input-password-symbol\" class=\"form-check-label\">";
        // line 660
        yield ($context["text_password_symbol"] ?? null);
        yield "</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-password-length\" class=\"col-sm-2 col-form-label\">";
        // line 666
        yield ($context["entry_password_length"] ?? null);
        yield "</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_password_length\" value=\"";
        // line 668
        yield ($context["config_password_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password_length"] ?? null);
        yield "\" id=\"input-password-length\" class=\"form-control\"/>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-checkout\">";
        // line 677
        yield ($context["text_checkout"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-checkout\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">";
        // line 681
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 683
        yield ($context["config_invoice_prefix"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 684
        yield ($context["help_invoice_prefix"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 688
        yield ($context["entry_cart_weight"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_cart_weight\" value=\"0\"/> <input type=\"checkbox\" name=\"config_cart_weight\" value=\"1\" id=\"input-cart-weight\" class=\"form-check-input\"";
        // line 691
        if (($context["config_cart_weight"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 693
        yield ($context["help_cart_weight"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 697
        yield ($context["entry_checkout_guest"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_checkout_guest\" value=\"0\"/> <input type=\"checkbox\" name=\"config_checkout_guest\" value=\"1\" id=\"input-checkout-guest\" class=\"form-check-input\"";
        // line 700
        if (($context["config_checkout_guest"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 702
        yield ($context["help_checkout_guest"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 706
        yield ($context["entry_checkout_payment_address"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_checkout_payment_address\" value=\"0\"/> <input type=\"checkbox\" name=\"config_checkout_payment_address\" value=\"1\" id=\"input-checkout-payment-address\" class=\"form-check-input\"";
        // line 709
        if (($context["config_checkout_payment_address"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 711
        yield ($context["help_checkout_payment_address"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 715
        yield ($context["entry_checkout_shipping_address"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_checkout_shipping_address\" value=\"0\"/> <input type=\"checkbox\" name=\"config_checkout_shipping_address\" value=\"1\" id=\"input-checkout-shipping-address\" class=\"form-check-input\"";
        // line 718
        if (($context["config_checkout_shipping_address"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 720
        yield ($context["help_checkout_shipping_address"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">";
        // line 724
        yield ($context["entry_checkout"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-select\">
                            <option value=\"0\">";
        // line 727
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 728
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 729
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 729);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 729) == ($context["config_checkout_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 729);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 731
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 732
        yield ($context["help_checkout"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">";
        // line 736
        yield ($context["entry_order_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                            ";
        // line 739
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 740
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 740);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 740) == ($context["config_order_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 740);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 742
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 743
        yield ($context["help_order_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 747
        yield ($context["entry_processing_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-processing-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 750
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 751
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
            // line 752
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 752);
            yield "\" id=\"input-processing-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 752);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 752), ($context["config_processing_status"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-processing-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 752);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 752);
            yield "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 755
        yield "                          </div>
                          <div class=\"form-text\">";
        // line 756
        yield ($context["help_processing_status"] ?? null);
        yield "</div>
                          <div id=\"error-processing-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 761
        yield ($context["entry_complete_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-complete-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 764
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 765
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
            // line 766
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 766);
            yield "\" id=\"input-complete-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 766);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 766), ($context["config_complete_status"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-complete-status-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 766);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 766);
            yield "</label>
                              </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 769
        yield "                          </div>
                          <div class=\"form-text\">";
        // line 770
        yield ($context["help_complete_status"] ?? null);
        yield "</div>
                          <div id=\"error-complete-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-failed-status\" class=\"col-sm-2 col-form-label\">";
        // line 775
        yield ($context["entry_failed_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_failed_status_id\" id=\"input-failed-status\" class=\"form-select\">
                            ";
        // line 778
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 779
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 779);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 779) == ($context["config_failed_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 779);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 781
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 782
        yield ($context["help_failed_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-void-status\" class=\"col-sm-2 col-form-label\">";
        // line 786
        yield ($context["entry_void_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_void_status_id\" id=\"input-void-status\" class=\"form-select\">
                            ";
        // line 789
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 790
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 790);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 790) == ($context["config_void_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 790);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 792
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 793
        yield ($context["help_void_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">";
        // line 797
        yield ($context["entry_fraud_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-select\">
                            ";
        // line 800
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 801
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 801);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 801) == ($context["config_fraud_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 801);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 803
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 804
        yield ($context["help_fraud_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-api\" class=\"col-sm-2 col-form-label\">";
        // line 808
        yield ($context["entry_api"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_api_id\" id=\"input-api\" class=\"form-select\">
                            <option value=\"0\">";
        // line 811
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 812
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 813
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 813);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 813) == ($context["config_api_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 813);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['api'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 815
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 816
        yield ($context["help_api"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-subscription\">";
        // line 823
        yield ($context["text_subscription"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-subscription\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-status\" class=\"col-sm-2 col-form-label\">";
        // line 828
        yield ($context["entry_subscription_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_status_id\" id=\"input-subscription-status\" class=\"form-select\">
                            ";
        // line 831
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 832
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 832);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 832) == ($context["config_subscription_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 832);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 834
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 835
        yield ($context["help_subscription"] ?? null);
        yield "</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-active-status\" class=\"col-sm-2 col-form-label\">";
        // line 840
        yield ($context["entry_subscription_active_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_active_status_id\" id=\"input-subscription-active-status\" class=\"form-select\">
                            ";
        // line 843
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 844
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 844);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 844) == ($context["config_subscription_active_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 844);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 846
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-expired-status\" class=\"col-sm-2 col-form-label\">";
        // line 851
        yield ($context["entry_subscription_expired_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_expired_status_id\" id=\"input-subscription-expired-status\" class=\"form-select\">
                            ";
        // line 854
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 855
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 855);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 855) == ($context["config_subscription_expired_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 855);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 857
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-suspended-status\" class=\"col-sm-2 col-form-label\">";
        // line 862
        yield ($context["entry_subscription_suspended_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_suspended_status_id\" id=\"input-subscription-suspended-status\" class=\"form-select\">
                            ";
        // line 865
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 866
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 866);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 866) == ($context["config_subscription_suspended_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 866);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 868
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-canceled-status\" class=\"col-sm-2 col-form-label\">";
        // line 873
        yield ($context["entry_subscription_canceled_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_canceled_status_id\" id=\"input-subscription-canceled-status\" class=\"form-select\">
                            ";
        // line 876
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 877
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 877);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 877) == ($context["config_subscription_canceled_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 877);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 879
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-failed-status\" class=\"col-sm-2 col-form-label\">";
        // line 884
        yield ($context["entry_subscription_failed_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_failed_status_id\" id=\"input-subscription-failed-status\" class=\"form-select\">
                            ";
        // line 887
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 888
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 888);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 888) == ($context["config_subscription_failed_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 888);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 890
        yield "                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-denied-status\" class=\"col-sm-2 col-form-label\">";
        // line 895
        yield ($context["entry_subscription_denied_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_denied_status_id\" id=\"input-subscription-denied-status\" class=\"form-select\">
                            ";
        // line 898
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_status"]) {
            // line 899
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 899);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "subscription_status_id", [], "any", false, false, false, 899) == ($context["config_subscription_denied_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_status"], "name", [], "any", false, false, false, 899);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 901
        yield "                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-stock\">";
        // line 909
        yield ($context["text_stock"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-stock\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 913
        yield ($context["entry_stock_display"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_stock_display\" value=\"0\"/> <input type=\"checkbox\" name=\"config_stock_display\" value=\"1\" id=\"input-stock-display\" class=\"form-check-input\"";
        // line 916
        if (($context["config_stock_display"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 918
        yield ($context["help_stock_display"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 922
        yield ($context["entry_stock_warning"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_stock_warning\" value=\"0\"/> <input type=\"checkbox\" name=\"config_stock_warning\" value=\"1\" id=\"input-stock-warning\" class=\"form-check-input\"";
        // line 925
        if (($context["config_stock_warning"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 927
        yield ($context["help_stock_warning"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 931
        yield ($context["entry_stock_checkout"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_stock_checkout\" value=\"0\"/> <input type=\"checkbox\" name=\"config_stock_checkout\" value=\"1\" id=\"input-stock-checkout\" class=\"form-check-input\"";
        // line 934
        if (($context["config_stock_checkout"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 936
        yield ($context["help_stock_checkout"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 940
        yield ($context["entry_stock_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                            ";
        // line 943
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 944
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 944);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 944) == ($context["config_stock_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 944);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stock_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 946
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 947
        yield ($context["help_stock_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-affiliate\">";
        // line 954
        yield ($context["text_affiliate"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-affiliate\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 958
        yield ($context["entry_affiliate_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_affiliate_status\" value=\"0\"/> <input type=\"checkbox\" name=\"config_affiliate_status\" value=\"1\" id=\"input-affiliate-status\" class=\"form-check-input\"";
        // line 961
        if (($context["config_affiliate_status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 963
        yield ($context["help_affiliate_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">";
        // line 967
        yield ($context["entry_affiliate_group"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-select\">
                            ";
        // line 970
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 971
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 971);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 971) == ($context["config_affiliate_group_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 971);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 973
        yield "                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 977
        yield ($context["entry_affiliate_approval"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_affiliate_approval\" value=\"0\"/> <input type=\"checkbox\" name=\"config_affiliate_approval\" value=\"1\" id=\"input-affiliate-approval\" class=\"form-check-input\"";
        // line 980
        if (($context["config_affiliate_approval"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 982
        yield ($context["help_affiliate_approval"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 986
        yield ($context["entry_affiliate_auto"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_affiliate_auto\" value=\"0\"/> <input type=\"checkbox\" name=\"config_affiliate_auto\" value=\"1\" id=\"input-affiliate-auto\" class=\"form-check-input\"";
        // line 989
        if (($context["config_affiliate_auto"] ?? null)) {
            yield " checked";
        }
        yield "/>
                          </div>
                          <div class=\"form-text\">";
        // line 991
        yield ($context["help_affiliate_auto"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">";
        // line 995
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 997
        yield ($context["config_affiliate_commission"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 998
        yield ($context["help_affiliate_commission"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-expire\" class=\"col-sm-2 col-form-label\">";
        // line 1002
        yield ($context["entry_affiliate_expire"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_expire\" value=\"";
        // line 1004
        yield ($context["config_affiliate_expire"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate_expire"] ?? null);
        yield "\" id=\"input-affiliate-expire\" class=\"form-control\"/>
                          <div class=\"form-text\">";
        // line 1005
        yield ($context["help_affiliate_expire"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">";
        // line 1009
        yield ($context["entry_affiliate"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-select\">
                            <option value=\"0\">";
        // line 1012
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 1013
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1014
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1014);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1014) == ($context["config_affiliate_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1014);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1016
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1017
        yield ($context["help_affiliate"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-return\">";
        // line 1024
        yield ($context["text_return"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-return\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">";
        // line 1028
        yield ($context["entry_return_status"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-select\">
                            ";
        // line 1031
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 1032
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1032);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 1032) == ($context["config_return_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 1032);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1034
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1035
        yield ($context["help_return_status"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-return\" class=\"col-sm-2 col-form-label\">";
        // line 1039
        yield ($context["entry_return"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_id\" id=\"input-return\" class=\"form-select\">
                            <option value=\"0\">";
        // line 1042
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 1043
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1044
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1044);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 1044) == ($context["config_return_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 1044);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1046
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1047
        yield ($context["help_return"] ?? null);
        yield "</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-captcha\">";
        // line 1054
        yield ($context["text_captcha"] ?? null);
        yield "</button></h2>
                  <div id=\"collapse-captcha\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">";
        // line 1058
        yield ($context["entry_captcha"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-select\">
                            <option value=\"\">";
        // line 1061
        yield ($context["text_none"] ?? null);
        yield "</option>
                            ";
        // line 1062
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 1063
            yield "                              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1063);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 1063) == ($context["config_captcha"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 1063);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captcha'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1065
        yield "                          </select>
                          <div class=\"form-text\">";
        // line 1066
        yield ($context["help_captcha"] ?? null);
        yield "</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">";
        // line 1070
        yield ($context["entry_captcha_page"] ?? null);
        yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            ";
        // line 1073
        $context["captcha_page_row"] = 0;
        // line 1074
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 1075
            yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
            // line 1076
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1076);
            yield "\" id=\"input-captcha-";
            yield ($context["captcha_page_row"] ?? null);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 1076), ($context["config_captcha_page"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-captcha-";
            yield ($context["captcha_page_row"] ?? null);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 1076);
            yield "</label>
                              </div>
                              ";
            // line 1078
            $context["captcha_page_row"] = (($context["captcha_page_row"] ?? null) + 1);
            // line 1079
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captcha_page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1080
        yield "                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1090
        yield ($context["text_image_size"] ?? null);
        yield "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-default-width\" class=\"col-sm-2 col-form-label\">";
        // line 1092
        yield ($context["entry_image_default"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-default\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_default_width\" value=\"";
        // line 1096
        yield ($context["config_image_default_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-default-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_default_height\" value=\"";
        // line 1099
        yield ($context["config_image_default_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-default-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-default\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-category-width\" class=\"col-sm-2 col-form-label\">";
        // line 1106
        yield ($context["entry_image_category"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-category\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_width\" value=\"";
        // line 1110
        yield ($context["config_image_category_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-category-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_height\" value=\"";
        // line 1113
        yield ($context["config_image_category_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-category-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-category\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-thumb-width\" class=\"col-sm-2 col-form-label\">";
        // line 1120
        yield ($context["entry_image_thumb"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-thumb\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_width\" value=\"";
        // line 1124
        yield ($context["config_image_thumb_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-thumb-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_height\" value=\"";
        // line 1127
        yield ($context["config_image_thumb_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-thumb-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-thumb\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-popup-width\" class=\"col-sm-2 col-form-label\">";
        // line 1134
        yield ($context["entry_image_popup"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-popup\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_width\" value=\"";
        // line 1138
        yield ($context["config_image_popup_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-popup-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_height\" value=\"";
        // line 1141
        yield ($context["config_image_popup_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-popup-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-popup\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-product-width\" class=\"col-sm-2 col-form-label\">";
        // line 1148
        yield ($context["entry_image_product"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-product\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_width\" value=\"";
        // line 1152
        yield ($context["config_image_product_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-product-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_height\" value=\"";
        // line 1155
        yield ($context["config_image_product_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-product-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-product\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-additional-width\" class=\"col-sm-2 col-form-label\">";
        // line 1162
        yield ($context["entry_image_additional"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-additional\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_width\" value=\"";
        // line 1166
        yield ($context["config_image_additional_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-additional-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_height\" value=\"";
        // line 1169
        yield ($context["config_image_additional_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-additional-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-additional\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-related-width\" class=\"col-sm-2 col-form-label\">";
        // line 1176
        yield ($context["entry_image_related"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-related\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_width\" value=\"";
        // line 1180
        yield ($context["config_image_related_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-related-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_height\" value=\"";
        // line 1183
        yield ($context["config_image_related_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-related-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-related\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-article-width\" class=\"col-sm-2 col-form-label\">";
        // line 1190
        yield ($context["entry_image_article"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-article\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_article_width\" value=\"";
        // line 1194
        yield ($context["config_image_article_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-article-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_article_height\" value=\"";
        // line 1197
        yield ($context["config_image_article_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-article-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-article\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-topic-width\" class=\"col-sm-2 col-form-label\">";
        // line 1204
        yield ($context["entry_image_topic"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-topic\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_topic_width\" value=\"";
        // line 1208
        yield ($context["config_image_topic_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-topic-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_topic_height\" value=\"";
        // line 1211
        yield ($context["config_image_topic_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-topic-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-topic\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-compare-width\" class=\"col-sm-2 col-form-label\">";
        // line 1218
        yield ($context["entry_image_compare"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-compare\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_width\" value=\"";
        // line 1222
        yield ($context["config_image_compare_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-compare-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_height\" value=\"";
        // line 1225
        yield ($context["config_image_compare_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-compare-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-compare\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-wishlist-width\" class=\"col-sm-2 col-form-label\">";
        // line 1232
        yield ($context["entry_image_wishlist"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-wishlist\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_width\" value=\"";
        // line 1236
        yield ($context["config_image_wishlist_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-wishlist-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_height\" value=\"";
        // line 1239
        yield ($context["config_image_wishlist_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-wishlist-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-wishlist\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-cart-width\" class=\"col-sm-2 col-form-label\">";
        // line 1246
        yield ($context["entry_image_cart"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-cart\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_width\" value=\"";
        // line 1250
        yield ($context["config_image_cart_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-cart-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_height\" value=\"";
        // line 1253
        yield ($context["config_image_cart_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-cart-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-cart\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-location-width\" class=\"col-sm-2 col-form-label\">";
        // line 1260
        yield ($context["entry_image_location"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-location\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_width\" value=\"";
        // line 1264
        yield ($context["config_image_location_width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-image-location-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_height\" value=\"";
        // line 1267
        yield ($context["config_image_location_height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-image-location-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-location\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1277
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">";
        // line 1279
        yield ($context["entry_mail_engine"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-select\">
                      <option value=\"\">";
        // line 1282
        yield ($context["text_none"] ?? null);
        yield "</option>
                      <option value=\"mail\"";
        // line 1283
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_mail"] ?? null);
        yield "</option>
                      <option value=\"smtp\"";
        // line 1284
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_smtp"] ?? null);
        yield "</option>
                    </select>
                    <div class=\"form-text\">";
        // line 1286
        yield ($context["help_mail_engine"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">";
        // line 1290
        yield ($context["entry_mail_parameter"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1292
        yield ($context["config_mail_parameter"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_parameter"] ?? null);
        yield "\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1293
        yield ($context["help_mail_parameter"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1298
        yield ($context["text_smtp"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">";
        // line 1300
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1302
        yield ($context["config_mail_smtp_hostname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1303
        yield ($context["help_mail_smtp_hostname"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">";
        // line 1307
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1309
        yield ($context["config_mail_smtp_username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">";
        // line 1313
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1315
        yield ($context["config_mail_smtp_password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1316
        yield ($context["help_mail_smtp_password"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">";
        // line 1320
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1322
        yield ($context["config_mail_smtp_port"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">";
        // line 1326
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1328
        yield ($context["config_mail_smtp_timeout"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1333
        yield ($context["text_mail_alert"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1335
        yield ($context["entry_mail_alert"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 1338
        $context["mail_alert_row"] = 0;
        // line 1339
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1340
            yield "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
            // line 1341
            yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1341);
            yield "\" id=\"input-mail-alert-";
            yield ($context["mail_alert_row"] ?? null);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1341), ($context["config_mail_alert"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-mail-alert-";
            yield ($context["mail_alert_row"] ?? null);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1341);
            yield "</label>
                        </div>
                        ";
            // line 1343
            $context["mail_alert_row"] = (($context["mail_alert_row"] ?? null) + 1);
            // line 1344
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mail_alert'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1345
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 1346
        yield ($context["help_mail_alert"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">";
        // line 1350
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1352
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "\" id=\"input-mail-alert-email\" class=\"form-control\">";
        yield ($context["config_mail_alert_email"] ?? null);
        yield "</textarea>
                    <div class=\"form-text\">";
        // line 1353
        yield ($context["help_mail_alert_email"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1360
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1362
        yield ($context["entry_maintenance"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_maintenance\" value=\"0\"/> <input type=\"checkbox\" name=\"config_maintenance\" value=\"1\" id=\"input-maintenance\" class=\"form-check-input\"";
        // line 1365
        if (($context["config_maintenance"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 1367
        yield ($context["help_maintenance"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-expire\" class=\"col-sm-2 col-form-label\">";
        // line 1371
        yield ($context["entry_session_expire"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_session_expire\" value=\"";
        // line 1373
        yield ($context["config_session_expire"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_session_expire"] ?? null);
        yield "\" id=\"input-session-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1374
        yield ($context["help_session_expire"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-samesite\" class=\"col-sm-2 col-form-label\">";
        // line 1378
        yield ($context["entry_session_samesite"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_session_samesite\" id=\"input-session-samesite\" class=\"form-select\">
                      <option value=\"None\"";
        // line 1381
        if ((($context["config_session_samesite"] ?? null) == "None")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_none"] ?? null);
        yield "</option>
                      <option value=\"Lax\"";
        // line 1382
        if ((($context["config_session_samesite"] ?? null) == "Lax")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_lax"] ?? null);
        yield "</option>
                      <option value=\"Strict\"";
        // line 1383
        if ((($context["config_session_samesite"] ?? null) == "Strict")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_strict"] ?? null);
        yield "</option>
                    </select>
                    <div class=\"form-text\">";
        // line 1385
        yield ($context["help_session_samesite"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1389
        yield ($context["entry_seo_url"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_seo_url\" value=\"0\"/> <input type=\"checkbox\" name=\"config_seo_url\" value=\"1\" id=\"input-seo-url\" class=\"form-check-input\"";
        // line 1392
        if (($context["config_seo_url"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 1394
        yield ($context["help_seo_url"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-compression\" class=\"col-sm-2 col-form-label\">";
        // line 1398
        yield ($context["entry_compression"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1400
        yield ($context["config_compression"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_compression"] ?? null);
        yield "\" id=\"input-compression\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1401
        yield ($context["help_compression"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1406
        yield ($context["text_security"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1408
        yield ($context["entry_user_2fa"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_user_2fa\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_user_2fa\" value=\"1\" id=\"input-user-2fa\" class=\"form-check-input\"";
        // line 1412
        if (($context["config_user_2fa"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 1414
        yield ($context["help_user_2fa"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-2fa-expire\" class=\"col-sm-2 col-form-label\">";
        // line 1418
        yield ($context["entry_2fa_expire"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"number\" name=\"config_2fa_expire\" value=\"";
        // line 1420
        yield ($context["config_2fa_expire"] ?? null);
        yield "\" id=\"input-2fa-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1421
        yield ($context["help_2fa_expire"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1425
        yield ($context["entry_password"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"overflow: auto;\">
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_uppercase\" value=\"1\" id=\"input-user-password-uppercase\" class=\"form-check-input\"";
        // line 1429
        if (($context["config_user_password_uppercase"] ?? null)) {
            yield " checked";
        }
        yield "/>
                        <label for=\"input-user-password-uppercase\" class=\"form-check-label\">";
        // line 1430
        yield ($context["text_password_uppercase"] ?? null);
        yield "</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_lowercase\" value=\"1\" id=\"input-user-password-lowercase\" class=\"form-check-input\"";
        // line 1433
        if (($context["config_user_password_lowercase"] ?? null)) {
            yield " checked";
        }
        yield "/>
                        <label for=\"input-user-password-lowercase\" class=\"form-check-label\">";
        // line 1434
        yield ($context["text_password_lowercase"] ?? null);
        yield "</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_number\" value=\"1\" id=\"input-user-password-number\" class=\"form-check-input\"";
        // line 1437
        if (($context["config_user_password_number"] ?? null)) {
            yield " checked";
        }
        yield "/>
                        <label for=\"input-user-password-number\" class=\"form-check-label\">";
        // line 1438
        yield ($context["text_password_number"] ?? null);
        yield "</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_symbol\" value=\"1\" id=\"input-user-password-symbol\" class=\"form-check-input\"";
        // line 1441
        if (($context["config_user_password_symbol"] ?? null)) {
            yield " checked";
        }
        yield "/>
                        <label for=\"input-user-password-symbol\" class=\"form-check-label\">";
        // line 1442
        yield ($context["text_password_symbol"] ?? null);
        yield "</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-user-password-length\" class=\"col-sm-2 col-form-label\">";
        // line 1448
        yield ($context["entry_password_length"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_user_password_length\" value=\"";
        // line 1450
        yield ($context["config_user_password_length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password_length"] ?? null);
        yield "\" id=\"input-user-password-length\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1454
        yield ($context["entry_shared"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_shared\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_shared\" value=\"1\" id=\"input-shared\" class=\"form-check-input\"";
        // line 1458
        if (($context["config_shared"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                    <div class=\"form-text\">";
        // line 1460
        yield ($context["help_shared"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1465
        yield ($context["text_upload"] ?? null);
        yield "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-file-max-size\" class=\"col-sm-2 col-form-label\">";
        // line 1467
        yield ($context["entry_file_max_size"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1469
        yield ($context["config_file_max_size"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_file_max_size"] ?? null);
        yield "\" id=\"input-file-max-size\" class=\"form-control\"/>
                    <div class=\"form-text\">";
        // line 1470
        yield ($context["help_file_max_size"] ?? null);
        yield "</div>
                    <div id=\"error-file-max-size\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-ext-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1475
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1477
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        yield ($context["config_file_ext_allowed"] ?? null);
        yield "</textarea>
                    <div class=\"form-text\">";
        // line 1478
        yield ($context["help_file_ext_allowed"] ?? null);
        yield "</div>
                    <div id=\"error-file-ext-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-mime-allowed\" class=\"col-sm-2 col-form-label\">";
        // line 1483
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1485
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        yield ($context["config_file_mime_allowed"] ?? null);
        yield "</textarea>
                    <div class=\"form-text\">";
        // line 1486
        yield ($context["help_file_mime_allowed"] ?? null);
        yield "</div>
                    <div id=\"error-file-mime-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1492
        yield ($context["text_error"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1494
        yield ($context["entry_error_display"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_error_display\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_error_display\" value=\"1\" id=\"input-error-display\" class=\"form-check-input\"";
        // line 1498
        if (($context["config_error_display"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 1503
        yield ($context["entry_error_log"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_error_log\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_error_log\" value=\"1\" id=\"input-error-log\" class=\"form-check-input\"";
        // line 1507
        if (($context["config_error_log"] ?? null)) {
            yield " checked";
        }
        yield "/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-error-filename\" class=\"col-sm-2 col-form-label\">";
        // line 1512
        yield ($context["entry_error_filename"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1514
        yield ($context["config_error_filename"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_error_filename"] ?? null);
        yield "\" id=\"input-error-filename\" class=\"form-control\"/>
                    <div id=\"error-error-filename\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-theme').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=setting/setting.theme&user_token=";
        // line 1531
        yield ($context["user_token"] ?? null);
        yield "&theme=' + this.value,
        dataType: 'html',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(html) {
            \$('#theme-thumb').attr('src', html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-theme').trigger('change');

\$('#input-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token=";
        // line 1554
        yield ($context["user_token"] ?? null);
        yield "&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#input-zone').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#input-zone').prop('disabled', false);
        },
        success: function(json) {
            html = '<option value=\"\">";
        // line 1565
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '";
        // line 1571
        yield ($context["config_zone_id"] ?? null);
        yield "') {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>";
        // line 1578
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';
            }

            \$('#input-zone').html(html);

            \$('#button-save').prop('disabled', false);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-country').trigger('change');
//--></script>
";
        // line 1593
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
        return "martket/view/template/setting/setting.twig";
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
        return array (  3951 => 1593,  3933 => 1578,  3923 => 1571,  3914 => 1565,  3900 => 1554,  3874 => 1531,  3852 => 1514,  3847 => 1512,  3837 => 1507,  3830 => 1503,  3820 => 1498,  3813 => 1494,  3808 => 1492,  3799 => 1486,  3793 => 1485,  3788 => 1483,  3780 => 1478,  3774 => 1477,  3769 => 1475,  3761 => 1470,  3755 => 1469,  3750 => 1467,  3745 => 1465,  3737 => 1460,  3730 => 1458,  3723 => 1454,  3714 => 1450,  3709 => 1448,  3700 => 1442,  3694 => 1441,  3688 => 1438,  3682 => 1437,  3676 => 1434,  3670 => 1433,  3664 => 1430,  3658 => 1429,  3651 => 1425,  3644 => 1421,  3640 => 1420,  3635 => 1418,  3628 => 1414,  3621 => 1412,  3614 => 1408,  3609 => 1406,  3601 => 1401,  3595 => 1400,  3590 => 1398,  3583 => 1394,  3576 => 1392,  3570 => 1389,  3563 => 1385,  3554 => 1383,  3546 => 1382,  3538 => 1381,  3532 => 1378,  3525 => 1374,  3519 => 1373,  3514 => 1371,  3507 => 1367,  3500 => 1365,  3494 => 1362,  3489 => 1360,  3479 => 1353,  3473 => 1352,  3468 => 1350,  3461 => 1346,  3458 => 1345,  3452 => 1344,  3450 => 1343,  3435 => 1341,  3432 => 1340,  3427 => 1339,  3425 => 1338,  3419 => 1335,  3414 => 1333,  3404 => 1328,  3399 => 1326,  3390 => 1322,  3385 => 1320,  3378 => 1316,  3372 => 1315,  3367 => 1313,  3358 => 1309,  3353 => 1307,  3346 => 1303,  3340 => 1302,  3335 => 1300,  3330 => 1298,  3322 => 1293,  3316 => 1292,  3311 => 1290,  3304 => 1286,  3295 => 1284,  3287 => 1283,  3283 => 1282,  3277 => 1279,  3272 => 1277,  3257 => 1267,  3249 => 1264,  3242 => 1260,  3230 => 1253,  3222 => 1250,  3215 => 1246,  3203 => 1239,  3195 => 1236,  3188 => 1232,  3176 => 1225,  3168 => 1222,  3161 => 1218,  3149 => 1211,  3141 => 1208,  3134 => 1204,  3122 => 1197,  3114 => 1194,  3107 => 1190,  3095 => 1183,  3087 => 1180,  3080 => 1176,  3068 => 1169,  3060 => 1166,  3053 => 1162,  3041 => 1155,  3033 => 1152,  3026 => 1148,  3014 => 1141,  3006 => 1138,  2999 => 1134,  2987 => 1127,  2979 => 1124,  2972 => 1120,  2960 => 1113,  2952 => 1110,  2945 => 1106,  2933 => 1099,  2925 => 1096,  2918 => 1092,  2913 => 1090,  2901 => 1080,  2895 => 1079,  2893 => 1078,  2878 => 1076,  2875 => 1075,  2870 => 1074,  2868 => 1073,  2862 => 1070,  2855 => 1066,  2852 => 1065,  2837 => 1063,  2833 => 1062,  2829 => 1061,  2823 => 1058,  2816 => 1054,  2806 => 1047,  2803 => 1046,  2788 => 1044,  2784 => 1043,  2780 => 1042,  2774 => 1039,  2767 => 1035,  2764 => 1034,  2749 => 1032,  2745 => 1031,  2739 => 1028,  2732 => 1024,  2722 => 1017,  2719 => 1016,  2704 => 1014,  2700 => 1013,  2696 => 1012,  2690 => 1009,  2683 => 1005,  2677 => 1004,  2672 => 1002,  2665 => 998,  2659 => 997,  2654 => 995,  2647 => 991,  2640 => 989,  2634 => 986,  2627 => 982,  2620 => 980,  2614 => 977,  2608 => 973,  2593 => 971,  2589 => 970,  2583 => 967,  2576 => 963,  2569 => 961,  2563 => 958,  2556 => 954,  2546 => 947,  2543 => 946,  2528 => 944,  2524 => 943,  2518 => 940,  2511 => 936,  2504 => 934,  2498 => 931,  2491 => 927,  2484 => 925,  2478 => 922,  2471 => 918,  2464 => 916,  2458 => 913,  2451 => 909,  2441 => 901,  2426 => 899,  2422 => 898,  2416 => 895,  2409 => 890,  2394 => 888,  2390 => 887,  2384 => 884,  2377 => 879,  2362 => 877,  2358 => 876,  2352 => 873,  2345 => 868,  2330 => 866,  2326 => 865,  2320 => 862,  2313 => 857,  2298 => 855,  2294 => 854,  2288 => 851,  2281 => 846,  2266 => 844,  2262 => 843,  2256 => 840,  2248 => 835,  2245 => 834,  2230 => 832,  2226 => 831,  2220 => 828,  2212 => 823,  2202 => 816,  2199 => 815,  2184 => 813,  2180 => 812,  2176 => 811,  2170 => 808,  2163 => 804,  2160 => 803,  2145 => 801,  2141 => 800,  2135 => 797,  2128 => 793,  2125 => 792,  2110 => 790,  2106 => 789,  2100 => 786,  2093 => 782,  2090 => 781,  2075 => 779,  2071 => 778,  2065 => 775,  2057 => 770,  2054 => 769,  2035 => 766,  2032 => 765,  2028 => 764,  2022 => 761,  2014 => 756,  2011 => 755,  1992 => 752,  1989 => 751,  1985 => 750,  1979 => 747,  1972 => 743,  1969 => 742,  1954 => 740,  1950 => 739,  1944 => 736,  1937 => 732,  1934 => 731,  1919 => 729,  1915 => 728,  1911 => 727,  1905 => 724,  1898 => 720,  1891 => 718,  1885 => 715,  1878 => 711,  1871 => 709,  1865 => 706,  1858 => 702,  1851 => 700,  1845 => 697,  1838 => 693,  1831 => 691,  1825 => 688,  1818 => 684,  1812 => 683,  1807 => 681,  1800 => 677,  1786 => 668,  1781 => 666,  1772 => 660,  1766 => 659,  1760 => 656,  1754 => 655,  1748 => 652,  1742 => 651,  1736 => 648,  1730 => 647,  1723 => 643,  1715 => 638,  1709 => 637,  1704 => 635,  1697 => 631,  1690 => 629,  1683 => 625,  1678 => 623,  1671 => 619,  1668 => 618,  1653 => 616,  1649 => 615,  1645 => 614,  1639 => 611,  1629 => 606,  1623 => 603,  1613 => 598,  1607 => 595,  1600 => 591,  1593 => 589,  1587 => 586,  1579 => 581,  1576 => 580,  1557 => 577,  1554 => 576,  1550 => 575,  1544 => 572,  1537 => 568,  1534 => 567,  1519 => 565,  1515 => 564,  1509 => 561,  1499 => 556,  1493 => 553,  1486 => 549,  1479 => 547,  1473 => 544,  1465 => 539,  1456 => 537,  1450 => 534,  1443 => 530,  1436 => 528,  1430 => 525,  1423 => 521,  1413 => 514,  1404 => 512,  1396 => 511,  1392 => 510,  1386 => 507,  1379 => 503,  1370 => 501,  1362 => 500,  1358 => 499,  1352 => 496,  1342 => 491,  1336 => 488,  1329 => 484,  1319 => 477,  1313 => 476,  1308 => 474,  1301 => 470,  1298 => 469,  1283 => 467,  1279 => 466,  1275 => 465,  1269 => 462,  1262 => 458,  1259 => 457,  1244 => 455,  1240 => 454,  1236 => 453,  1230 => 450,  1223 => 446,  1213 => 439,  1207 => 438,  1202 => 436,  1195 => 432,  1188 => 430,  1182 => 427,  1175 => 423,  1168 => 421,  1162 => 418,  1154 => 413,  1148 => 412,  1143 => 410,  1136 => 406,  1126 => 399,  1119 => 397,  1113 => 394,  1106 => 390,  1099 => 388,  1093 => 385,  1086 => 381,  1079 => 379,  1073 => 376,  1066 => 372,  1056 => 365,  1049 => 363,  1043 => 360,  1035 => 355,  1029 => 354,  1024 => 352,  1016 => 347,  1010 => 346,  1005 => 344,  998 => 340,  991 => 338,  985 => 335,  977 => 330,  971 => 329,  966 => 327,  958 => 322,  952 => 321,  947 => 319,  940 => 315,  930 => 307,  915 => 305,  911 => 304,  905 => 301,  899 => 297,  884 => 295,  880 => 294,  874 => 291,  869 => 289,  861 => 284,  854 => 282,  848 => 279,  842 => 275,  827 => 273,  823 => 272,  817 => 269,  810 => 265,  807 => 264,  792 => 262,  788 => 261,  782 => 258,  777 => 256,  770 => 251,  755 => 249,  751 => 248,  745 => 245,  739 => 241,  724 => 239,  720 => 238,  714 => 235,  709 => 233,  701 => 227,  686 => 225,  682 => 224,  676 => 221,  667 => 215,  661 => 211,  646 => 209,  642 => 208,  636 => 205,  631 => 203,  626 => 200,  619 => 196,  616 => 195,  597 => 192,  594 => 191,  590 => 190,  584 => 187,  581 => 186,  579 => 185,  573 => 182,  567 => 181,  562 => 179,  555 => 175,  549 => 174,  544 => 172,  535 => 166,  531 => 165,  522 => 163,  516 => 160,  506 => 155,  501 => 153,  491 => 148,  486 => 146,  479 => 142,  473 => 141,  468 => 139,  459 => 135,  454 => 133,  444 => 128,  439 => 126,  432 => 121,  407 => 116,  400 => 114,  387 => 110,  380 => 108,  373 => 104,  363 => 103,  356 => 101,  346 => 99,  329 => 98,  325 => 96,  298 => 94,  281 => 93,  276 => 91,  268 => 86,  262 => 83,  258 => 82,  249 => 80,  243 => 77,  234 => 71,  230 => 70,  221 => 68,  215 => 65,  209 => 61,  194 => 59,  190 => 58,  184 => 55,  176 => 49,  161 => 47,  157 => 46,  151 => 43,  141 => 38,  136 => 36,  131 => 34,  123 => 29,  119 => 28,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  99 => 23,  94 => 21,  89 => 19,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-setting\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_edit }}</div>
      <div class=\"card-body\">
        <form id=\"form-setting\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-store\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_store }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-local\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_local }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_option }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_image }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-mail\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_mail }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-server\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_server }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div id=\"tab-general\" class=\"tab-pane active\">
              <fieldset>
                <legend>{{ text_site }}</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_name\" value=\"{{ config_name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
                    <div id=\"error-name\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-theme\" class=\"col-sm-2 col-form-label\">{{ entry_theme }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_theme\" id=\"input-theme\" class=\"form-select\">
                      {% for theme in themes %}
                        <option value=\"{{ theme.value }}\"{% if theme.value == config_theme %} selected{% endif %}>{{ theme.text }}</option>
                      {% endfor %}
                    </select>
                    <br/>
                    <img src=\"\" alt=\"\" id=\"theme-thumb\" class=\"img-thumbnail\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-layout\" class=\"col-sm-2 col-form-label\">{{ entry_layout }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-select\">
                      {% for layout in layouts %}
                        <option value=\"{{ layout.layout_id }}\"{% if layout.layout_id == config_layout_id %} selected{% endif %}>{{ layout.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-logo\" class=\"col-sm-2 col-form-label\">{{ entry_logo }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                      <img src=\"{{ logo }}\" alt=\"\" title=\"\" id=\"thumb-logo\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_logo\" value=\"{{ config_logo }}\" id=\"input-logo\"/>
                      <div class=\"d-grid\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-logo\" data-oc-thumb=\"#thumb-logo\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-icon\" class=\"col-sm-2 col-form-label\">{{ entry_icon }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                      <img src=\"{{ icon }}\" alt=\"\" title=\"\" id=\"thumb-icon\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_icon\" value=\"{{ config_icon }}\" id=\"input-icon\"/>
                      <div class=\"d-grid\">
                        <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                        <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-icon\" data-oc-thumb=\"#thumb-icon\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                      </div>
                    </div>
                    <div class=\"form-text\">{{ help_icon }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_meta }}</legend>
                <ul class=\"nav nav-tabs\">
                  {% for language in languages %}
                    <li class=\"nav-item\"><a href=\"#language-{{ language.language_id }}\" data-bs-toggle=\"tab\" class=\"nav-link{% if loop.first %} active{% endif %}\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>
                  {% endfor %}
                </ul>
                <div class=\"tab-content\">
                  {% for language in languages %}
                    <div id=\"language-{{ language.language_id }}\" class=\"tab-pane{% if loop.first %} active{% endif %}\">
                      <div class=\"row mb-3 required\">
                        <label for=\"input-meta-title-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_title }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_description[{{ language.language_id }}][meta_title]\" value=\"{{ config_description[language.language_id] ? config_description[language.language_id].meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title-{{ language.language_id }}\" class=\"form-control\"/>
                          <div id=\"error-meta-title-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-meta-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_description }}</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_description[{{ language.language_id }}][meta_description]\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description-{{ language.language_id }}\" class=\"form-control\">{{ config_description[language.language_id] ? config_description[language.language_id].meta_description }}</textarea>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-meta-keyword-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_keyword }}</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"config_description[{{ language.language_id }}][meta_keyword]\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword-{{ language.language_id }}\" class=\"form-control\">{{ config_description[language.language_id] ? config_description[language.language_id].meta_keyword }}</textarea>
                        </div>
                      </div>
                    </div>
                  {% endfor %}
                </div>
              </fieldset>
            </div>
            <div id=\"tab-store\" class=\"tab-pane\">
              <div class=\"row mb-3 required\">
                <label for=\"input-owner\" class=\"col-sm-2 col-form-label\">{{ entry_owner }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"{{ config_owner }}\" placeholder=\"{{ entry_owner }}\" id=\"input-owner\" class=\"form-control\"/>
                  <div id=\"error-owner\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-address\" class=\"col-sm-2 col-form-label\">{{ entry_address }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" rows=\"5\" placeholder=\"{{ entry_address }}\" id=\"input-address\" class=\"form-control\">{{ config_address }}</textarea>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-geocode\" class=\"col-sm-2 col-form-label\">{{ entry_geocode }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"{{ config_geocode }}\" placeholder=\"{{ entry_geocode }}\" id=\"input-geocode\" class=\"form-control\"/>
                  <div class=\"form-text\">{{ help_geocode }}</div>
                </div>
              </div>
              <div class=\"row mb-3 required\">
                <label for=\"input-email\" class=\"col-sm-2 col-form-label\">{{ entry_email }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"{{ config_email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
                  <div id=\"error-email\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">{{ entry_telephone }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"{{ config_telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
                  <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-image\" class=\"col-sm-2 col-form-label\">{{ entry_image }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                    <img src=\"{{ thumb }}\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"config_image\" value=\"{{ config_image }}\" id=\"input-image\"/>
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
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"{{ entry_open }}\" id=\"input-open\" class=\"form-control\">{{ config_open }}</textarea>
                  <div class=\"form-text\">{{ help_open }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label for=\"input-comment\" class=\"col-sm-2 col-form-label\">{{ entry_comment }}</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"{{ entry_comment }}\" id=\"input-comment\" class=\"form-control\">{{ config_comment }}</textarea>
                  <div class=\"form-text\">{{ help_comment }}</div>
                </div>
              </div>
              {% if locations %}
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_location }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      {% for location in locations %}
                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_location[]\" value=\"{{ location.location_id }}\" id=\"input-location-{{ location.location_id }}\" class=\"form-check-input\"{% if location.location_id in config_location %} checked{% endif %}/> <label for=\"input-location-{{ location.location_id }}\" class=\"form-check-label\">{{ location.name }}</label>
                        </div>
                      {% endfor %}
                    </div>
                    <div class=\"form-text\">{{ help_location }}</div>
                  </div>
                </div>
              {% endif %}
            </div>
            <div id=\"tab-local\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_region }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-country\" class=\"col-sm-2 col-form-label\">{{ entry_country }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_country_id\" id=\"input-country\" class=\"form-select\">
                      {% for country in countries %}
                        <option value=\"{{ country.country_id }}\"{% if country.country_id == config_country_id %} selected{% endif %}>{{ country.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-zone\" class=\"col-sm-2 col-form-label\">{{ entry_zone }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-select\"></select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-timezone\" class=\"col-sm-2 col-form-label\">{{ entry_timezone }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-select\">
                      {% for timezone in timezones %}
                        <option value=\"{{ timezone.value }}\"{% if timezone.value == config_timezone %} selected{% endif %}>{{ timezone.text }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </fieldset>

              <fieldset>
                <legend>{{ text_language }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-language-catalog\" class=\"col-sm-2 col-form-label\">{{ entry_language }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_catalog\" id=\"input-language-catalog\" class=\"form-select\">
                      {% for language in languages %}
                        <option value=\"{{ language.code }}\"{% if language.code == config_language_catalog %} selected{% endif %}>{{ language.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-language-admin\" class=\"col-sm-2 col-form-label\">{{ entry_language_admin }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_language_admin\" id=\"input-language-admin\" class=\"form-select\">
                      {% for language in languages %}
                        <option value=\"{{ language.code }}\"{% if language.code == config_language_admin %} selected{% endif %}>{{ language.name }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_currency }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-currency\" class=\"col-sm-2 col-form-label\">{{ entry_currency }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency\" id=\"input-currency\" class=\"form-select\">
                      {% for currency in currencies %}
                        <option value=\"{{ currency.code }}\"{% if currency.code == config_currency %} selected{% endif %}>{{ currency.title }}</option>
                      {% endfor %}
                    </select>
                    <div class=\"form-text\">{{ help_currency }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-currency-engine\" class=\"col-sm-2 col-form-label\">{{ entry_currency_engine }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-select\">
                      {% for currency_engine in currency_engines %}
                        <option value=\"{{ currency_engine.value }}\"{% if currency_engine.value == config_currency_engine %} selected{% endif %}>{{ currency_engine.text }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_currency_auto }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_currency_auto\" value=\"0\"/> <input type=\"checkbox\" name=\"config_currency_auto\" value=\"1\" id=\"input-currency-auto\" class=\"form-check-input\"{% if config_currency_auto %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_currency_auto }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_measurement }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">{{ entry_length_class }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-select\">
                      {% for length_class in length_classes %}
                        <option value=\"{{ length_class.length_class_id }}\"{% if length_class.length_class_id == config_length_class_id %} selected{% endif %}>{{ length_class.title }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">{{ entry_weight_class }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                      {% for weight_class in weight_classes %}
                        <option value=\"{{ weight_class.weight_class_id }}\"{% if weight_class.weight_class_id == config_weight_class_id %} selected{% endif %}>{{ weight_class.title }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-option\" class=\"tab-pane\">
              <div class=\"accordion\" id=\"accordion-option\">
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-product\">{{ text_product }}</button></h2>
                  <div id=\"collapse-product\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3 required\">
                        <label for=\"input-product-description-length\" class=\"col-sm-2 col-form-label\">{{ entry_product_description_length }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_product_description_length\" value=\"{{ config_product_description_length }}\" placeholder=\"{{ entry_product_description_length }}\" id=\"input-product-description-length\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_product_description_length }}</div>
                          <div id=\"error-product-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-pagination\" class=\"col-sm-2 col-form-label\">{{ entry_pagination }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination\" value=\"{{ config_pagination }}\" placeholder=\"{{ entry_pagination }}\" id=\"input-pagination\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_pagination }}</div>
                          <div id=\"error-pagination\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_product_count }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_product_count\" value=\"0\"/> <input type=\"checkbox\" name=\"config_product_count\" value=\"1\" id=\"input-product-count\" class=\"form-check-input\"{% if config_product_count %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_product_count }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-pagination-admin\" class=\"col-sm-2 col-form-label\">{{ entry_pagination_admin }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_pagination_admin\" value=\"{{ config_pagination_admin }}\" placeholder=\"{{ entry_pagination_admin }}\" id=\"input-pagination-admin\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_pagination }}</div>
                          <div id=\"error-pagination-admin\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label for=\"input-autocomplete-limit\" class=\"col-sm-2 col-form-label\">{{ entry_autocomplete_limit }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_autocomplete_limit\" value=\"{{ config_autocomplete_limit }}\" placeholder=\"{{ entry_autocomplete_limit }}\" id=\"input-autocomplete-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_autocomplete_limit }}</div>
                          <div id=\"error-autocomplete-limit\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3 required\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_product_report }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_product_report_status\" value=\"0\"/> <input type=\"checkbox\" name=\"config_product_report_status\" value=\"1\" id=\"input-product-report\" class=\"form-check-input\"{% if config_product_report_status %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_product_report }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-review\">{{ text_review }}</button></h2>
                  <div id=\"collapse-review\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_review_status }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_review_status\" value=\"0\"/> <input type=\"checkbox\" name=\"config_review_status\" value=\"1\" id=\"input-review-status\" class=\"form-check-input\"{% if config_review_status %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_review }}</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_review_purchased }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_review_purchased\" value=\"0\"/> <input type=\"checkbox\" name=\"config_review_purchased\" value=\"1\" id=\"input-review-purchased\" class=\"form-check-input\"{% if config_review_purchased %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_review_purchased }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_review_guest }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_review_guest\" value=\"0\"/> <input type=\"checkbox\" name=\"config_review_guest\" value=\"1\" id=\"input-review-guest\" class=\"form-check-input\"{% if config_review_guest %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_review_guest }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-cms\">{{ text_cms }}</button></h2>
                  <div id=\"collapse-cms\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3 required\">
                        <label for=\"input-article-description-length\" class=\"col-sm-2 col-form-label\">{{ entry_article_description_length }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_article_description_length\" value=\"{{ config_article_description_length }}\" placeholder=\"{{ entry_article_description_length }}\" id=\"input-article-description-length\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_article_description_length }}</div>
                          <div id=\"error-article-description-length\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_comment_status }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_comment_status\" value=\"0\"/> <input type=\"checkbox\" name=\"config_comment_status\" value=\"1\" id=\"input-comment-status\" class=\"form-check-input\"{% if config_comment_status %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_comment_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_comment_approve }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_comment_approve\" value=\"0\"/> <input type=\"checkbox\" name=\"config_comment_approve\" value=\"1\" id=\"input-comment-approve\" class=\"form-check-input\"{% if config_comment_approve %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_comment_approve }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-comment-interval\" class=\"col-sm-2 col-form-label\">{{ entry_comment_interval }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_comment_interval\" value=\"{{ config_comment_interval }}\" placeholder=\"{{ entry_comment_interval }}\" id=\"input-comment-interval\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_comment_interval }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-legal\">{{ text_legal }}</button></h2>
                  <div id=\"collapse-legal\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-cookie\" class=\"col-sm-2 col-form-label\">{{ entry_cookie }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_cookie_id\" id=\"input-cookie\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_cookie_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_cookie }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr\" class=\"col-sm-2 col-form-label\">{{ entry_gdpr }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_gdpr_id\" id=\"input-gdpr\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_gdpr_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_gdpr }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-gdpr-limit\" class=\"col-sm-2 col-form-label\">{{ entry_gdpr_limit }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_gdpr_limit\" value=\"{{ config_gdpr_limit }}\" placeholder=\"{{ entry_gdpr_limit }}\" id=\"input-gdpr-limit\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_gdpr_limit }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-tax\">{{ text_tax }}</button></h2>
                  <div id=\"collapse-tax\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_tax }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_tax\" value=\"0\"/> <input type=\"checkbox\" name=\"config_tax\" value=\"1\" id=\"input-tax\" class=\"form-check-input\"{% if config_tax %} checked{% endif %}/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-default\" class=\"col-sm-2 col-form-label\">{{ entry_tax_default }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-select\">
                            <option value=\"\">{{ text_none }}</option>
                            <option value=\"shipping\"{% if config_tax_default == 'shipping' %} selected{% endif %}>{{ text_shipping }}</option>
                            <option value=\"payment\"{% if config_tax_default == 'payment' %} selected{% endif %}>{{ text_payment }}</option>
                          </select>
                          <div class=\"form-text\">{{ help_tax_default }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-tax-customer\" class=\"col-sm-2 col-form-label\">{{ entry_tax_customer }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-select\">
                            <option value=\"\">{{ text_none }}</option>
                            <option value=\"shipping\"{% if config_tax_customer == 'shipping' %} selected{% endif %}>{{ text_shipping }}</option>
                            <option value=\"payment\"{% if config_tax_customer == 'payment' %} selected{% endif %}>{{ text_payment }}</option>
                          </select>
                          <div class=\"form-text\">{{ help_tax_customer }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-account\">{{ text_account }}</button></h2>
                  <div id=\"collapse-account\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_online }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_online\" value=\"0\"/> <input type=\"checkbox\" name=\"config_customer_online\" value=\"1\" id=\"input-customer-online\" class=\"form-check-input\"{% if config_customer_online %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_customer_online }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-online-expire\" class=\"col-sm-2 col-form-label\">{{ entry_customer_online_expire }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"config_customer_online_expire\" value=\"{{ config_customer_online_expire }}\" placeholder=\"{{ entry_customer_online_expire }}\" id=\"input-customer-online-expire\" class=\"form-control\"/> <span class=\"input-group-text\" id=\"basic-addon2\">{{ text_hour }}</span>
                          </div>
                          <div class=\"form-text\">{{ help_customer_online_expire }}</div>
                          <div id=\"error-customer-online-expire\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_activity }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_activity\" value=\"0\"/> <input type=\"checkbox\" name=\"config_customer_activity\" value=\"1\" id=\"input-customer-activity\" class=\"form-check-input\"{% if config_customer_activity %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_customer_activity }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_search }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_search\" value=\"0\"/> <input type=\"checkbox\" name=\"config_customer_search\" value=\"1\" id=\"input-customer-search\" class=\"form-check-input\"{% if config_customer_search %} checked{% endif %}/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-customer-group\" class=\"col-sm-2 col-form-label\">{{ entry_customer_group }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == config_customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_customer_group }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_group_display }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-customer-group-display\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for customer_group in customer_groups %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"{{ customer_group.customer_group_id }}\" id=\"input-customer-group-{{ customer_group.customer_group_id }}\" class=\"form-check-input\"{% if customer_group.customer_group_id in config_customer_group_display %} checked{% endif %}/> <label for=\"input-customer-group-{{ customer_group.customer_group_id }}\" class=\"form-check-label\">{{ customer_group.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"form-text\">{{ help_customer_group_display }}</div>
                          <div id=\"error-customer-group-display\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_customer_price }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_customer_price\" value=\"0\"/> <input type=\"checkbox\" name=\"config_customer_price\" value=\"1\" id=\"input-customer-price\" class=\"form-check-input\"{% if config_customer_price %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_customer_price }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_telephone_display }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_telephone_display\" value=\"0\"/> <input type=\"checkbox\" name=\"config_telephone_display\" value=\"1\" id=\"input-telephone-display\" class=\"form-check-input\"{% if config_telephone_display %} checked{% endif %}/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_telephone_required }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_telephone_required\" value=\"0\"/> <input type=\"checkbox\" name=\"config_telephone_required\" value=\"1\" id=\"input-telephone-required\" class=\"form-check-input\"{% if config_telephone_required %} checked{% endif %}/>
                          </div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-account\" class=\"col-sm-2 col-form-label\">{{ entry_account }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_account_id\" id=\"input-account\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_account_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_account }}</div>
                        </div>
                      </div>
                      <fieldset>
                        <legend>{{ text_security }}</legend>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">{{ entry_2fa }}</label>
                          <div class=\"col-sm-10\">
                            <div class=\"form-check form-switch form-switch-lg\">
                              <input type=\"hidden\" name=\"config_2fa\" value=\"0\"/>
                              <input type=\"checkbox\" name=\"config_2fa\" value=\"1\" id=\"input-2fa\" class=\"form-check-input\"{% if config_2fa %} checked{% endif %}/>
                            </div>
                            <div class=\"form-text\">{{ help_2fa }}</div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-login-attempts\" class=\"col-sm-2 col-form-label\">{{ entry_login_attempts }}</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_login_attempts\" value=\"{{ config_login_attempts }}\" placeholder=\"{{ entry_login_attempts }}\" id=\"input-login-attempts\" class=\"form-control\"/>
                            <div class=\"form-text\">{{ help_login_attempts }}</div>
                            <div id=\"error-login-attempts\" class=\"invalid-feedback\"></div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label class=\"col-sm-2 col-form-label\">{{ entry_password }}</label>
                          <div class=\"col-sm-10\">
                            <div class=\"form-control\" style=\"overflow: auto;\">
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_uppercase\" value=\"1\" id=\"input-password-uppercase\" class=\"form-check-input\"{% if config_password_uppercase %} checked{% endif %}/>
                                <label for=\"input-password-uppercase\" class=\"form-check-label\">{{ text_password_uppercase }}</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_lowercase\" value=\"1\" id=\"input-password-lowercase\" class=\"form-check-input\"{% if config_password_lowercase %} checked{% endif %}/>
                                <label for=\"input-password-lowercase\" class=\"form-check-label\">{{ text_password_lowercase }}</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_number\" value=\"1\" id=\"input-password-number\" class=\"form-check-input\"{% if config_password_number %} checked{% endif %}/>
                                <label for=\"input-password-number\" class=\"form-check-label\">{{ text_password_number }}</label>
                              </div>
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_password_symbol\" value=\"1\" id=\"input-password-symbol\" class=\"form-check-input\"{% if config_password_symbol %} checked{% endif %}/>
                                <label for=\"input-password-symbol\" class=\"form-check-label\">{{ text_password_symbol }}</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class=\"row mb-3\">
                          <label for=\"input-password-length\" class=\"col-sm-2 col-form-label\">{{ entry_password_length }}</label>
                          <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"config_password_length\" value=\"{{ config_password_length }}\" placeholder=\"{{ entry_password_length }}\" id=\"input-password-length\" class=\"form-control\"/>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </div>

                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-checkout\">{{ text_checkout }}</button></h2>
                  <div id=\"collapse-checkout\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-invoice-prefix\" class=\"col-sm-2 col-form-label\">{{ entry_invoice_prefix }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_invoice_prefix\" value=\"{{ config_invoice_prefix }}\" placeholder=\"{{ entry_invoice_prefix }}\" id=\"input-invoice-prefix\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_invoice_prefix }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_cart_weight }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_cart_weight\" value=\"0\"/> <input type=\"checkbox\" name=\"config_cart_weight\" value=\"1\" id=\"input-cart-weight\" class=\"form-check-input\"{% if config_cart_weight %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_cart_weight }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_checkout_guest }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_checkout_guest\" value=\"0\"/> <input type=\"checkbox\" name=\"config_checkout_guest\" value=\"1\" id=\"input-checkout-guest\" class=\"form-check-input\"{% if config_checkout_guest %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_checkout_guest }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_checkout_payment_address }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_checkout_payment_address\" value=\"0\"/> <input type=\"checkbox\" name=\"config_checkout_payment_address\" value=\"1\" id=\"input-checkout-payment-address\" class=\"form-check-input\"{% if config_checkout_payment_address %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_checkout_payment_address }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_checkout_shipping_address }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_checkout_shipping_address\" value=\"0\"/> <input type=\"checkbox\" name=\"config_checkout_shipping_address\" value=\"1\" id=\"input-checkout-shipping-address\" class=\"form-check-input\"{% if config_checkout_shipping_address %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_checkout_shipping_address }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-checkout\" class=\"col-sm-2 col-form-label\">{{ entry_checkout }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_checkout_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_checkout }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-order-status\" class=\"col-sm-2 col-form-label\">{{ entry_order_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_order_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_order_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_processing_status }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-processing-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for order_status in order_statuses %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"{{ order_status.order_status_id }}\" id=\"input-processing-status-{{ order_status.order_status_id }}\" class=\"form-check-input\"{% if order_status.order_status_id in config_processing_status %} checked{% endif %}/> <label for=\"input-processing-status-{{ order_status.order_status_id }}\" class=\"form-check-label\">{{ order_status.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"form-text\">{{ help_processing_status }}</div>
                          <div id=\"error-processing-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_complete_status }}</label>
                        <div class=\"col-sm-10\">
                          <div id=\"input-complete-status\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% for order_status in order_statuses %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"{{ order_status.order_status_id }}\" id=\"input-complete-status-{{ order_status.order_status_id }}\" class=\"form-check-input\"{% if order_status.order_status_id in config_complete_status %} checked{% endif %}/> <label for=\"input-complete-status-{{ order_status.order_status_id }}\" class=\"form-check-label\">{{ order_status.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div class=\"form-text\">{{ help_complete_status }}</div>
                          <div id=\"error-complete-status\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-failed-status\" class=\"col-sm-2 col-form-label\">{{ entry_failed_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_failed_status_id\" id=\"input-failed-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_failed_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_failed_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-void-status\" class=\"col-sm-2 col-form-label\">{{ entry_void_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_void_status_id\" id=\"input-void-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_void_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_void_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-fraud-status\" class=\"col-sm-2 col-form-label\">{{ entry_fraud_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-select\">
                            {% for order_status in order_statuses %}
                              <option value=\"{{ order_status.order_status_id }}\"{% if order_status.order_status_id == config_fraud_status_id %} selected{% endif %}>{{ order_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_fraud_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-api\" class=\"col-sm-2 col-form-label\">{{ entry_api }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_api_id\" id=\"input-api\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for api in apis %}
                              <option value=\"{{ api.api_id }}\"{% if api.api_id == config_api_id %} selected{% endif %}>{{ api.username }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_api }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-subscription\">{{ text_subscription }}</button></h2>
                  <div id=\"collapse-subscription\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_status_id\" id=\"input-subscription-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_subscription }}</div>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-active-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_active_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_active_status_id\" id=\"input-subscription-active-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_active_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-expired-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_expired_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_expired_status_id\" id=\"input-subscription-expired-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_expired_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-suspended-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_suspended_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_suspended_status_id\" id=\"input-subscription-suspended-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_suspended_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-canceled-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_canceled_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_canceled_status_id\" id=\"input-subscription-canceled-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_canceled_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-failed-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_failed_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_failed_status_id\" id=\"input-subscription-failed-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_failed_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                      <div class=\"row mb-3\">
                        <label for=\"input-subscription-denied-status\" class=\"col-sm-2 col-form-label\">{{ entry_subscription_denied_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_subscription_denied_status_id\" id=\"input-subscription-denied-status\" class=\"form-select\">
                            {% for subscription_status in subscription_statuses %}
                              <option value=\"{{ subscription_status.subscription_status_id }}\"{% if subscription_status.subscription_status_id == config_subscription_denied_status_id %} selected{% endif %}>{{ subscription_status.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-stock\">{{ text_stock }}</button></h2>
                  <div id=\"collapse-stock\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_stock_display }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_stock_display\" value=\"0\"/> <input type=\"checkbox\" name=\"config_stock_display\" value=\"1\" id=\"input-stock-display\" class=\"form-check-input\"{% if config_stock_display %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_stock_display }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_stock_warning }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_stock_warning\" value=\"0\"/> <input type=\"checkbox\" name=\"config_stock_warning\" value=\"1\" id=\"input-stock-warning\" class=\"form-check-input\"{% if config_stock_warning %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_stock_warning }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_stock_checkout }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_stock_checkout\" value=\"0\"/> <input type=\"checkbox\" name=\"config_stock_checkout\" value=\"1\" id=\"input-stock-checkout\" class=\"form-check-input\"{% if config_stock_checkout %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_stock_checkout }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">{{ entry_stock_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                            {% for stock_status in stock_statuses %}
                              <option value=\"{{ stock_status.stock_status_id }}\"{% if stock_status.stock_status_id == config_stock_status_id %} selected{% endif %}>{{ stock_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_stock_status }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-affiliate\">{{ text_affiliate }}</button></h2>
                  <div id=\"collapse-affiliate\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate_status }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_affiliate_status\" value=\"0\"/> <input type=\"checkbox\" name=\"config_affiliate_status\" value=\"1\" id=\"input-affiliate-status\" class=\"form-check-input\"{% if config_affiliate_status %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_affiliate_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-group\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate_group }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == config_affiliate_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate_approval }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_affiliate_approval\" value=\"0\"/> <input type=\"checkbox\" name=\"config_affiliate_approval\" value=\"1\" id=\"input-affiliate-approval\" class=\"form-check-input\"{% if config_affiliate_approval %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_affiliate_approval }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_affiliate_auto }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"config_affiliate_auto\" value=\"0\"/> <input type=\"checkbox\" name=\"config_affiliate_auto\" value=\"1\" id=\"input-affiliate-auto\" class=\"form-check-input\"{% if config_affiliate_auto %} checked{% endif %}/>
                          </div>
                          <div class=\"form-text\">{{ help_affiliate_auto }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-commission\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate_commission }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_commission\" value=\"{{ config_affiliate_commission }}\" placeholder=\"{{ entry_affiliate_commission }}\" id=\"input-affiliate-commission\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_affiliate_commission }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate-expire\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate_expire }}</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"config_affiliate_expire\" value=\"{{ config_affiliate_expire }}\" placeholder=\"{{ entry_affiliate_expire }}\" id=\"input-affiliate-expire\" class=\"form-control\"/>
                          <div class=\"form-text\">{{ help_affiliate_expire }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label for=\"input-affiliate\" class=\"col-sm-2 col-form-label\">{{ entry_affiliate }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_affiliate_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_affiliate }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-return\">{{ text_return }}</button></h2>
                  <div id=\"collapse-return\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mb-3\">
                        <label for=\"input-return-status\" class=\"col-sm-2 col-form-label\">{{ entry_return_status }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-select\">
                            {% for return_status in return_statuses %}
                              <option value=\"{{ return_status.return_status_id }}\"{% if return_status.return_status_id == config_return_status_id %} selected{% endif %}>{{ return_status.name }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_return_status }}</div>
                        </div>
                      </div>
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-return\" class=\"col-sm-2 col-form-label\">{{ entry_return }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_return_id\" id=\"input-return\" class=\"form-select\">
                            <option value=\"0\">{{ text_none }}</option>
                            {% for information in informations %}
                              <option value=\"{{ information.information_id }}\"{% if information.information_id == config_return_id %} selected{% endif %}>{{ information.title }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_return }}</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item\">
                  <h2 class=\"accordion-header\"><button type=\"button\" class=\"accordion-button collapsed\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-captcha\">{{ text_captcha }}</button></h2>
                  <div id=\"collapse-captcha\" class=\"accordion-collapse collapse\" data-bs-parent=\"#accordion-option\">
                    <div class=\"accordion-body\">
                      <div class=\"row mt-2 mb-3\">
                        <label for=\"input-captcha\" class=\"col-sm-2 col-form-label\">{{ entry_captcha }}</label>
                        <div class=\"col-sm-10\">
                          <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-select\">
                            <option value=\"\">{{ text_none }}</option>
                            {% for captcha in captchas %}
                              <option value=\"{{ captcha.value }}\"{% if captcha.value == config_captcha %} selected{% endif %}>{{ captcha.text }}</option>
                            {% endfor %}
                          </select>
                          <div class=\"form-text\">{{ help_captcha }}</div>
                        </div>
                      </div>
                      <div class=\"row mb-3\">
                        <label class=\"col-sm-2 col-form-label\">{{ entry_captcha_page }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                            {% set captcha_page_row = 0 %}
                            {% for captcha_page in captcha_pages %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"{{ captcha_page.value }}\" id=\"input-captcha-{{ captcha_page_row }}\" class=\"form-check-input\"{% if captcha_page.value in config_captcha_page %} checked{% endif %}/> <label for=\"input-captcha-{{ captcha_page_row }}\" class=\"form-check-label\">{{ captcha_page.text }}</label>
                              </div>
                              {% set captcha_page_row = captcha_page_row + 1 %}
                            {% endfor %}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_image_size }}</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-default-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_default }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-default\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_default_width\" value=\"{{ config_image_default_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-default-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_default_height\" value=\"{{ config_image_default_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-default-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-default\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-category-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_category }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-category\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_width\" value=\"{{ config_image_category_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-category-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_category_height\" value=\"{{ config_image_category_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-category-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-category\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-thumb-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_thumb }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-thumb\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_width\" value=\"{{ config_image_thumb_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-thumb-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_thumb_height\" value=\"{{ config_image_thumb_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-thumb-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-thumb\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-popup-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_popup }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-popup\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_width\" value=\"{{ config_image_popup_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-popup-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_popup_height\" value=\"{{ config_image_popup_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-popup-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-popup\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-product-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_product }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-product\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_width\" value=\"{{ config_image_product_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-product-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_product_height\" value=\"{{ config_image_product_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-product-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-product\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-additional-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_additional }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-additional\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_width\" value=\"{{ config_image_additional_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-additional-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_additional_height\" value=\"{{ config_image_additional_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-additional-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-additional\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-related-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_related }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-related\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_width\" value=\"{{ config_image_related_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-related-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_related_height\" value=\"{{ config_image_related_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-related-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-related\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-article-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_article }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-article\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_article_width\" value=\"{{ config_image_article_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-article-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_article_height\" value=\"{{ config_image_article_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-article-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-article\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-topic-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_topic }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-topic\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_topic_width\" value=\"{{ config_image_topic_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-topic-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_topic_height\" value=\"{{ config_image_topic_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-topic-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-topic\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-compare-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_compare }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-compare\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_width\" value=\"{{ config_image_compare_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-compare-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_compare_height\" value=\"{{ config_image_compare_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-compare-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-compare\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-wishlist-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_wishlist }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-wishlist\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_width\" value=\"{{ config_image_wishlist_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-wishlist-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_wishlist_height\" value=\"{{ config_image_wishlist_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-wishlist-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-wishlist\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-cart-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_cart }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-cart\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_width\" value=\"{{ config_image_cart_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-cart-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_cart_height\" value=\"{{ config_image_cart_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-cart-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-cart\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-image-location-width\" class=\"col-sm-2 col-form-label\">{{ entry_image_location }}</label>
                  <div class=\"col-sm-10\">
                    <div id=\"input-image-location\" class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_width\" value=\"{{ config_image_location_width }}\" placeholder=\"{{ entry_width }}\" id=\"input-image-location-width\" class=\"form-control\"/>
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"config_image_location_height\" value=\"{{ config_image_location_height }}\" placeholder=\"{{ entry_height }}\" id=\"input-image-location-height\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div id=\"error-image-location\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-mail\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-engine\" class=\"col-sm-2 col-form-label\">{{ entry_mail_engine }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-select\">
                      <option value=\"\">{{ text_none }}</option>
                      <option value=\"mail\"{% if config_mail_engine == 'mail' %} selected{% endif %}>{{ text_mail }}</option>
                      <option value=\"smtp\"{% if config_mail_engine == 'smtp' %} selected{% endif %}>{{ text_smtp }}</option>
                    </select>
                    <div class=\"form-text\">{{ help_mail_engine }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-parameter\" class=\"col-sm-2 col-form-label\">{{ entry_mail_parameter }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"{{ config_mail_parameter }}\" placeholder=\"{{ entry_mail_parameter }}\" id=\"input-mail-parameter\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_mail_parameter }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_smtp }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-hostname\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_hostname }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"{{ config_mail_smtp_hostname }}\" placeholder=\"{{ entry_mail_smtp_hostname }}\" id=\"input-mail-smtp-hostname\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_mail_smtp_hostname }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-username\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_username }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"{{ config_mail_smtp_username }}\" placeholder=\"{{ entry_mail_smtp_username }}\" id=\"input-mail-smtp-username\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-password\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_password }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"{{ config_mail_smtp_password }}\" placeholder=\"{{ entry_mail_smtp_password }}\" id=\"input-mail-smtp-password\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_mail_smtp_password }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-port\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_port }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"{{ config_mail_smtp_port }}\" placeholder=\"{{ entry_mail_smtp_port }}\" id=\"input-mail-smtp-port\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-smtp-timeout\" class=\"col-sm-2 col-form-label\">{{ entry_mail_smtp_timeout }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"{{ config_mail_smtp_timeout }}\" placeholder=\"{{ entry_mail_smtp_timeout }}\" id=\"input-mail-smtp-timeout\" class=\"form-control\"/>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_mail_alert }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_mail_alert }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      {% set mail_alert_row = 0 %}
                      {% for mail_alert in mail_alerts %}
                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"{{ mail_alert.value }}\" id=\"input-mail-alert-{{ mail_alert_row }}\" class=\"form-check-input\"{% if mail_alert.value in config_mail_alert %} checked{% endif %}/> <label for=\"input-mail-alert-{{ mail_alert_row }}\" class=\"form-check-label\">{{ mail_alert.text }}</label>
                        </div>
                        {% set mail_alert_row = mail_alert_row + 1 %}
                      {% endfor %}
                    </div>
                    <div class=\"form-text\">{{ help_mail_alert }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-mail-alert-email\" class=\"col-sm-2 col-form-label\">{{ entry_mail_alert_email }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"{{ entry_mail_alert_email }}\" id=\"input-mail-alert-email\" class=\"form-control\">{{ config_mail_alert_email }}</textarea>
                    <div class=\"form-text\">{{ help_mail_alert_email }}</div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-server\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_general }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_maintenance }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_maintenance\" value=\"0\"/> <input type=\"checkbox\" name=\"config_maintenance\" value=\"1\" id=\"input-maintenance\" class=\"form-check-input\"{% if config_maintenance %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_maintenance }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-expire\" class=\"col-sm-2 col-form-label\">{{ entry_session_expire }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_session_expire\" value=\"{{ config_session_expire }}\" placeholder=\"{{ entry_session_expire }}\" id=\"input-session-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_session_expire }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-session-samesite\" class=\"col-sm-2 col-form-label\">{{ entry_session_samesite }}</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_session_samesite\" id=\"input-session-samesite\" class=\"form-select\">
                      <option value=\"None\"{% if config_session_samesite == 'None' %} selected{% endif %}>{{ text_none }}</option>
                      <option value=\"Lax\"{% if config_session_samesite == 'Lax' %} selected{% endif %}>{{ text_lax }}</option>
                      <option value=\"Strict\"{% if config_session_samesite == 'Strict' %} selected{% endif %}>{{ text_strict }}</option>
                    </select>
                    <div class=\"form-text\">{{ help_session_samesite }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_seo_url }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_seo_url\" value=\"0\"/> <input type=\"checkbox\" name=\"config_seo_url\" value=\"1\" id=\"input-seo-url\" class=\"form-check-input\"{% if config_seo_url %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_seo_url }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-compression\" class=\"col-sm-2 col-form-label\">{{ entry_compression }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"{{ config_compression }}\" placeholder=\"{{ entry_compression }}\" id=\"input-compression\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_compression }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_security }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_user_2fa }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_user_2fa\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_user_2fa\" value=\"1\" id=\"input-user-2fa\" class=\"form-check-input\"{% if config_user_2fa %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_user_2fa }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-2fa-expire\" class=\"col-sm-2 col-form-label\">{{ entry_2fa_expire }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"number\" name=\"config_2fa_expire\" value=\"{{ config_2fa_expire }}\" id=\"input-2fa-expire\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_2fa_expire }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_password }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-control\" style=\"overflow: auto;\">
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_uppercase\" value=\"1\" id=\"input-user-password-uppercase\" class=\"form-check-input\"{% if config_user_password_uppercase %} checked{% endif %}/>
                        <label for=\"input-user-password-uppercase\" class=\"form-check-label\">{{ text_password_uppercase }}</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_lowercase\" value=\"1\" id=\"input-user-password-lowercase\" class=\"form-check-input\"{% if config_user_password_lowercase %} checked{% endif %}/>
                        <label for=\"input-user-password-lowercase\" class=\"form-check-label\">{{ text_password_lowercase }}</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_number\" value=\"1\" id=\"input-user-password-number\" class=\"form-check-input\"{% if config_user_password_number %} checked{% endif %}/>
                        <label for=\"input-user-password-number\" class=\"form-check-label\">{{ text_password_number }}</label>
                      </div>
                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"config_user_password_symbol\" value=\"1\" id=\"input-user-password-symbol\" class=\"form-check-input\"{% if config_user_password_symbol %} checked{% endif %}/>
                        <label for=\"input-user-password-symbol\" class=\"form-check-label\">{{ text_password_symbol }}</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-user-password-length\" class=\"col-sm-2 col-form-label\">{{ entry_password_length }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_user_password_length\" value=\"{{ config_user_password_length }}\" placeholder=\"{{ entry_password_length }}\" id=\"input-user-password-length\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_shared }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_shared\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_shared\" value=\"1\" id=\"input-shared\" class=\"form-check-input\"{% if config_shared %} checked{% endif %}/>
                    </div>
                    <div class=\"form-text\">{{ help_shared }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_upload }}</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-file-max-size\" class=\"col-sm-2 col-form-label\">{{ entry_file_max_size }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"{{ config_file_max_size }}\" placeholder=\"{{ entry_file_max_size }}\" id=\"input-file-max-size\" class=\"form-control\"/>
                    <div class=\"form-text\">{{ help_file_max_size }}</div>
                    <div id=\"error-file-max-size\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-ext-allowed\" class=\"col-sm-2 col-form-label\">{{ entry_file_ext_allowed }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"{{ entry_file_ext_allowed }}\" id=\"input-file-ext-allowed\" class=\"form-control\">{{ config_file_ext_allowed }}</textarea>
                    <div class=\"form-text\">{{ help_file_ext_allowed }}</div>
                    <div id=\"error-file-ext-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-file-mime-allowed\" class=\"col-sm-2 col-form-label\">{{ entry_file_mime_allowed }}</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"{{ entry_file_mime_allowed }}\" id=\"input-file-mime-allowed\" class=\"form-control\">{{ config_file_mime_allowed }}</textarea>
                    <div class=\"form-text\">{{ help_file_mime_allowed }}</div>
                    <div id=\"error-file-mime-allowed\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_error }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_error_display }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_error_display\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_error_display\" value=\"1\" id=\"input-error-display\" class=\"form-check-input\"{% if config_error_display %} checked{% endif %}/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_error_log }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"form-check form-switch form-switch-lg\">
                      <input type=\"hidden\" name=\"config_error_log\" value=\"0\"/>
                      <input type=\"checkbox\" name=\"config_error_log\" value=\"1\" id=\"input-error-log\" class=\"form-check-input\"{% if config_error_log %} checked{% endif %}/>
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3 required\">
                  <label for=\"input-error-filename\" class=\"col-sm-2 col-form-label\">{{ entry_error_filename }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"{{ config_error_filename }}\" placeholder=\"{{ entry_error_filename }}\" id=\"input-error-filename\" class=\"form-control\"/>
                    <div id=\"error-error-filename\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-theme').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=setting/setting.theme&user_token={{ user_token }}&theme=' + this.value,
        dataType: 'html',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(html) {
            \$('#theme-thumb').attr('src', html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-theme').trigger('change');

\$('#input-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country.country&user_token={{ user_token }}&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#input-zone').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#input-zone').prop('disabled', false);
        },
        success: function(json) {
            html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '{{ config_zone_id }}') {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>{{ text_none|escape('js') }}</option>';
            }

            \$('#input-zone').html(html);

            \$('#button-save').prop('disabled', false);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-country').trigger('change');
//--></script>
{{ footer }}
", "martket/view/template/setting/setting.twig", "/var/www/html/martket/view/template/setting/setting.twig");
    }
}
