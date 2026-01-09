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

/* martket/view/template/design/layout_form.twig */
class __TwigTemplate_0523f6b7957e40282b230f31583434ca extends Template
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
        <button type=\"submit\" form=\"form-layout\" data-bs-toggle=\"tooltip\" title=\"";
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
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-layout\" action=\"";
        // line 21
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>";
        // line 23
        yield ($context["text_route"] ?? null);
        yield "</legend>
            <div class=\"row mb-3 required\">
              <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 25
        yield ($context["entry_name"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 27
        yield ($context["name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\"/>
                <div id=\"error-name\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <br/>
            <table id=\"route\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <th";
        // line 35
        yield ($context["entry_store"] ?? null);
        yield "</td>
                  <th>";
        // line 36
        yield ($context["entry_route"] ?? null);
        yield "</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                ";
        // line 41
        $context["route_row"] = 0;
        // line 42
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layout_routes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 43
            yield "                  <tr id=\"route-row-";
            yield ($context["route_row"] ?? null);
            yield "\">
                    <td>
                      <select name=\"layout_route[";
            // line 45
            yield ($context["route_row"] ?? null);
            yield "][store_id]\" class=\"form-select\">
                        <option value=\"0\">";
            // line 46
            yield ($context["text_default"] ?? null);
            yield "</option>
                        ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 48
                yield "                          <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 48);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 48) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_route"], "store_id", [], "any", false, false, false, 48))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 48);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "                      </select></td>
                      <td><input type=\"text\" name=\"layout_route[";
            // line 51
            yield ($context["route_row"] ?? null);
            yield "][route]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_route"], "route", [], "any", false, false, false, 51);
            yield "\" placeholder=\"";
            yield ($context["entry_route"] ?? null);
            yield "\" class=\"form-control\"/></td>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#route-row-";
            // line 52
            yield ($context["route_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 54
            $context["route_row"] = (($context["route_row"] ?? null) + 1);
            // line 55
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout_route'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-end\"><button type=\"button\" onclick=\"addRoute();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 60
        yield ($context["button_route_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 66
        yield ($context["text_module"] ?? null);
        yield "</legend>
            ";
        // line 67
        $context["module_row"] = 0;
        // line 68
        yield "            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th class=\"text-center\">";
        // line 73
        yield ($context["text_column_left"] ?? null);
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 78
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 78) == "column_left")) {
                // line 79
                yield "                        <tr id=\"module-row-";
                yield ($context["module_row"] ?? null);
                yield "\">
                          <td>
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 82
                yield ($context["module_row"] ?? null);
                yield "][code]\" class=\"form-select input-sm\">
                                ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 84
                    yield "                                  <optgroup label=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 84);
                    yield "\">
                                    ";
                    // line 85
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 85)) {
                        // line 86
                        yield "                                      <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 86);
                        yield "\"";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 86) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 86))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 86);
                        yield "</option>
                                    ";
                    } else {
                        // line 88
                        yield "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 88));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 89
                            yield "                                      <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 89);
                            yield "\"";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 89) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 89))) {
                                yield " selected";
                            }
                            yield ">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 89);
                            yield "</option>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 91
                        yield "                                  ";
                    }
                    // line 92
                    yield "                                </optgroup>
                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                yield "                              </select>
                              <input type=\"hidden\" name=\"layout_module[";
                // line 95
                yield ($context["module_row"] ?? null);
                yield "][position]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 95);
                yield "\"/><input type=\"hidden\" name=\"layout_module[";
                yield ($context["module_row"] ?? null);
                yield "][sort_order]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 95);
                yield "\"/> <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 95);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 96
                yield ($context["module_row"] ?? null);
                yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        ";
                // line 100
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 101
                yield "                      ";
            }
            // line 102
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout_module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('column-left');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 106
        yield ($context["button_module_add"] ?? null);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
                <table id=\"module-content-top\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th class=\"text-center\">";
        // line 115
        yield ($context["text_content_top"] ?? null);
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 120
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 120) == "content_top")) {
                // line 121
                yield "                        <tr id=\"module-row-";
                yield ($context["module_row"] ?? null);
                yield "\">
                          <td>
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 124
                yield ($context["module_row"] ?? null);
                yield "][code]\" class=\"form-select input-sm\">
                                ";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 126
                    yield "                                  <optgroup label=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 126);
                    yield "\">
                                    ";
                    // line 127
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 127)) {
                        // line 128
                        yield "                                      <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 128);
                        yield "\"";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 128) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 128))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 128);
                        yield "</option>
                                    ";
                    } else {
                        // line 130
                        yield "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 130));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 131
                            yield "                                        <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 131);
                            yield "\"";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 131) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 131))) {
                                yield " selected";
                            }
                            yield ">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 131);
                            yield "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 133
                        yield "                                    ";
                    }
                    // line 134
                    yield "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                yield "                              </select>
                              <input type=\"hidden\" name=\"layout_module[";
                // line 137
                yield ($context["module_row"] ?? null);
                yield "][position]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 137);
                yield "\"/> <input type=\"hidden\" name=\"layout_module[";
                yield ($context["module_row"] ?? null);
                yield "][sort_order]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 137);
                yield "\"/> <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 137);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 138
                yield ($context["module_row"] ?? null);
                yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div></td>
                        </tr>
                        ";
                // line 141
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 142
                yield "                      ";
            }
            // line 143
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout_module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('content-top');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 147
        yield ($context["button_module_add"] ?? null);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th class=\"text-center\">";
        // line 154
        yield ($context["text_content_bottom"] ?? null);
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 159
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 159) == "content_bottom")) {
                // line 160
                yield "                        <tr id=\"module-row-";
                yield ($context["module_row"] ?? null);
                yield "\">
                          <td>
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 163
                yield ($context["module_row"] ?? null);
                yield "][code]\" class=\"form-select input-sm\">
                                ";
                // line 164
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 165
                    yield "                                  <optgroup label=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 165);
                    yield "\">
                                    ";
                    // line 166
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 166)) {
                        // line 167
                        yield "                                      <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 167);
                        yield "\"";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 167) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 167))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 167);
                        yield "</option>
                                    ";
                    } else {
                        // line 169
                        yield "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 169));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 170
                            yield "                                        <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 170);
                            yield "\"";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 170) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 170))) {
                                yield " selected";
                            }
                            yield ">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 170);
                            yield "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 172
                        yield "                                    ";
                    }
                    // line 173
                    yield "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 175
                yield "                              </select>
                              <input type=\"hidden\" name=\"layout_module[";
                // line 176
                yield ($context["module_row"] ?? null);
                yield "][position]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 176);
                yield "\"/> <input type=\"hidden\" name=\"layout_module[";
                yield ($context["module_row"] ?? null);
                yield "][sort_order]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 176);
                yield "\"/> <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 176);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 177
                yield ($context["module_row"] ?? null);
                yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div></td>
                        </tr>
                        ";
                // line 180
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 181
                yield "                      ";
            }
            // line 182
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout_module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('content-bottom');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 186
        yield ($context["button_module_add"] ?? null);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th class=\"text-center\">";
        // line 195
        yield ($context["text_column_right"] ?? null);
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layout_modules"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 200
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 200) == "column_right")) {
                // line 201
                yield "                        <tr id=\"module-row-";
                yield ($context["module_row"] ?? null);
                yield "\">
                          <td class=\"text-end\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[";
                // line 204
                yield ($context["module_row"] ?? null);
                yield "][code]\" class=\"form-select input-sm\">
                                ";
                // line 205
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 206
                    yield "                                  <optgroup label=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 206);
                    yield "\">
                                    ";
                    // line 207
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 207)) {
                        // line 208
                        yield "                                      <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 208);
                        yield "\"";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 208) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 208))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 208);
                        yield "</option>
                                    ";
                    } else {
                        // line 210
                        yield "                                      ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 210));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 211
                            yield "                                        <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 211);
                            yield "\"";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 211) == CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "code", [], "any", false, false, false, 211))) {
                                yield " selected";
                            }
                            yield ">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 211);
                            yield "</option>
                                      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 213
                        yield "                                    ";
                    }
                    // line 214
                    yield "                                  </optgroup>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 216
                yield "                              </select>
                              <input type=\"hidden\" name=\"layout_module[";
                // line 217
                yield ($context["module_row"] ?? null);
                yield "][position]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "position", [], "any", false, false, false, 217);
                yield "\"/> <input type=\"hidden\" name=\"layout_module[";
                yield ($context["module_row"] ?? null);
                yield "][sort_order]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "sort_order", [], "any", false, false, false, 217);
                yield "\"/> <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout_module"], "edit", [], "any", false, false, false, 217);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-";
                // line 218
                yield ($context["module_row"] ?? null);
                yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div></td>
                        </tr>
                        ";
                // line 221
                $context["module_row"] = (($context["module_row"] ?? null) + 1);
                // line 222
                yield "                      ";
            }
            // line 223
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout_module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('column-right');\" data-bs-toggle=\"tooltip\" title=\"";
        // line 227
        yield ($context["button_module_add"] ?? null);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </fieldset>
          <input type=\"hidden\" name=\"layout_id\" value=\"";
        // line 234
        yield ($context["layout_id"] ?? null);
        yield "\" id=\"input-layout-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var route_row = ";
        // line 241
        yield ($context["route_row"] ?? null);
        yield ";

function addRoute() {
    html = '<tr id=\"route-row-' + route_row + '\">';
    html += '  <td><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-select\">';
    html += '  <option value=\"0\">";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_default"] ?? null), "js");
        yield "</option>';
  ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 248
            yield "    html += '<option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 248);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 248), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        yield "    html += '  </select></td>';
    html += '  <td><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_route"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#route-row-' + route_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#route tbody').append(html);

    route_row++;
}

var module_row = ";
        // line 260
        yield ($context["module_row"] ?? null);
        yield ";

function addModule(type) {
    html = '<tr id=\"module-row-' + module_row + '\">';
    html += '  <td><div class=\"input-group input-group-sm\">';
    html += '    <select name=\"layout_module[' + module_row + '][code]\" class=\"form-select input-sm\">';
  ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 267
            yield "    html += '    <optgroup label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 267), "js");
            yield "\">';
  ";
            // line 268
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 268)) {
                // line 269
                yield "    html += '      <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "code", [], "any", false, false, false, 269), "js");
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 269), "js");
                yield "</option>';
  ";
            } else {
                // line 271
                yield "  ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 271));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 272
                    yield "    html += '      <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "code", [], "any", false, false, false, 272), "js");
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 272), "js");
                    yield "</option>';
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 274
                yield "  ";
            }
            // line 275
            yield "    html += '    </optgroup>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        yield "    html += '  </select>';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replaceAll('-', '_') + '\" />';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
    html += '  <a href=\"\" data-bs-toggle=\"tooltip\" title=\"";
        // line 280
        yield ($context["button_edit"] ?? null);
        yield "\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row-' + module_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_remove"] ?? null);
        yield "\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>';
    html += '  </div></td>';
    html += '</tr>';

    \$('#module-' + type + ' tbody').append(html);

    \$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
        \$(element).val(i);
    });

    \$('#module-' + type + ' select:last').trigger('change');

    module_row++;
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').on('change', 'select[name*=\\'code\\']', function() {
    var part = this.value.split('.');

    if (typeof part[2] == 'undefined') {
        \$(this).parent().find('a').attr('href', 'index.php?route=extension/' + part[0] + '/module/' + part[1] + '&user_token=";
        // line 299
        yield ($context["user_token"] ?? null);
        yield "');
    } else {
        \$(this).parent().find('a').attr('href', 'index.php?route=extension/' + part[0] + '/module/' + part[1] + '&user_token=";
        // line 301
        yield ($context["user_token"] ?? null);
        yield "&module_id=' + part[2]);
    }
});
//--></script>
";
        // line 305
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "martket/view/template/design/layout_form.twig";
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
        return array (  899 => 305,  892 => 301,  887 => 299,  863 => 280,  858 => 277,  851 => 275,  848 => 274,  837 => 272,  832 => 271,  824 => 269,  822 => 268,  817 => 267,  813 => 266,  804 => 260,  793 => 252,  789 => 251,  786 => 250,  775 => 248,  771 => 247,  767 => 246,  759 => 241,  749 => 234,  739 => 227,  734 => 224,  728 => 223,  725 => 222,  723 => 221,  715 => 218,  701 => 217,  698 => 216,  691 => 214,  688 => 213,  673 => 211,  668 => 210,  656 => 208,  654 => 207,  649 => 206,  645 => 205,  641 => 204,  634 => 201,  631 => 200,  627 => 199,  620 => 195,  608 => 186,  603 => 183,  597 => 182,  594 => 181,  592 => 180,  584 => 177,  570 => 176,  567 => 175,  560 => 173,  557 => 172,  542 => 170,  537 => 169,  525 => 167,  523 => 166,  518 => 165,  514 => 164,  510 => 163,  503 => 160,  500 => 159,  496 => 158,  489 => 154,  479 => 147,  474 => 144,  468 => 143,  465 => 142,  463 => 141,  455 => 138,  441 => 137,  438 => 136,  431 => 134,  428 => 133,  413 => 131,  408 => 130,  396 => 128,  394 => 127,  389 => 126,  385 => 125,  381 => 124,  374 => 121,  371 => 120,  367 => 119,  360 => 115,  348 => 106,  343 => 103,  337 => 102,  334 => 101,  332 => 100,  323 => 96,  309 => 95,  306 => 94,  299 => 92,  296 => 91,  281 => 89,  276 => 88,  264 => 86,  262 => 85,  257 => 84,  253 => 83,  249 => 82,  242 => 79,  239 => 78,  235 => 77,  228 => 73,  221 => 68,  219 => 67,  215 => 66,  206 => 60,  200 => 56,  194 => 55,  192 => 54,  185 => 52,  177 => 51,  174 => 50,  159 => 48,  155 => 47,  151 => 46,  147 => 45,  141 => 43,  136 => 42,  134 => 41,  126 => 36,  122 => 35,  109 => 27,  104 => 25,  99 => 23,  94 => 21,  89 => 19,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-layout\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
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
        <form id=\"form-layout\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>{{ text_route }}</legend>
            <div class=\"row mb-3 required\">
              <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"{{ name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
                <div id=\"error-name\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <br/>
            <table id=\"route\" class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <th{{ entry_store }}</td>
                  <th>{{ entry_route }}</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                {% set route_row = 0 %}
                {% for layout_route in layout_routes %}
                  <tr id=\"route-row-{{ route_row }}\">
                    <td>
                      <select name=\"layout_route[{{ route_row }}][store_id]\" class=\"form-select\">
                        <option value=\"0\">{{ text_default }}</option>
                        {% for store in stores %}
                          <option value=\"{{ store.store_id }}\"{% if store.store_id == layout_route.store_id %} selected{% endif %}>{{ store.name }}</option>
                        {% endfor %}
                      </select></td>
                      <td><input type=\"text\" name=\"layout_route[{{ route_row }}][route]\" value=\"{{ layout_route.route }}\" placeholder=\"{{ entry_route }}\" class=\"form-control\"/></td>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#route-row-{{ route_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                  </tr>
                  {% set route_row = route_row + 1 %}
                {% endfor %}
              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-end\"><button type=\"button\" onclick=\"addRoute();\" data-bs-toggle=\"tooltip\" title=\"{{ button_route_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend>{{ text_module }}</legend>
            {% set module_row = 0 %}
            <div class=\"row\">
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th class=\"text-center\">{{ text_column_left }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for layout_module in layout_modules %}
                      {% if layout_module.position == 'column_left' %}
                        <tr id=\"module-row-{{ module_row }}\">
                          <td>
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[{{ module_row }}][code]\" class=\"form-select input-sm\">
                                {% for extension in extensions %}
                                  <optgroup label=\"{{ extension.name }}\">
                                    {% if not extension.module %}
                                      <option value=\"{{ extension.code }}\"{% if extension.code == layout_module.code %} selected{% endif %}>{{ extension.name }}</option>
                                    {% else %}
                                      {% for module in extension.module %}
                                      <option value=\"{{ module.code }}\"{% if module.code == layout_module.code %} selected{% endif %}>{{ module.name }}</option>
                                    {% endfor %}
                                  {% endif %}
                                </optgroup>
                              {% endfor %}
                              </select>
                              <input type=\"hidden\" name=\"layout_module[{{ module_row }}][position]\" value=\"{{ layout_module.position }}\"/><input type=\"hidden\" name=\"layout_module[{{ module_row }}][sort_order]\" value=\"{{ layout_module.sort_order }}\"/> <a href=\"{{ layout_module.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-{{ module_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div>
                          </td>
                        </tr>
                        {% set module_row = module_row + 1 %}
                      {% endif %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('column-left');\" data-bs-toggle=\"tooltip\" title=\"{{ button_module_add }}\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
                <table id=\"module-content-top\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th class=\"text-center\">{{ text_content_top }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for layout_module in layout_modules %}
                      {% if layout_module.position == 'content_top' %}
                        <tr id=\"module-row-{{ module_row }}\">
                          <td>
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[{{ module_row }}][code]\" class=\"form-select input-sm\">
                                {% for extension in extensions %}
                                  <optgroup label=\"{{ extension.name }}\">
                                    {% if not extension.module %}
                                      <option value=\"{{ extension.code }}\"{% if extension.code == layout_module.code %} selected{% endif %}>{{ extension.name }}</option>
                                    {% else %}
                                      {% for module in extension.module %}
                                        <option value=\"{{ module.code }}\"{% if module.code == layout_module.code %} selected{% endif %}>{{ module.name }}</option>
                                      {% endfor %}
                                    {% endif %}
                                  </optgroup>
                                {% endfor %}
                              </select>
                              <input type=\"hidden\" name=\"layout_module[{{ module_row }}][position]\" value=\"{{ layout_module.position }}\"/> <input type=\"hidden\" name=\"layout_module[{{ module_row }}][sort_order]\" value=\"{{ layout_module.sort_order }}\"/> <a href=\"{{ layout_module.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-{{ module_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div></td>
                        </tr>
                        {% set module_row = module_row + 1 %}
                      {% endif %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('content-top');\" data-bs-toggle=\"tooltip\" title=\"{{ button_module_add }}\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th class=\"text-center\">{{ text_content_bottom }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for layout_module in layout_modules %}
                      {% if layout_module.position == 'content_bottom' %}
                        <tr id=\"module-row-{{ module_row }}\">
                          <td>
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[{{ module_row }}][code]\" class=\"form-select input-sm\">
                                {% for extension in extensions %}
                                  <optgroup label=\"{{ extension.name }}\">
                                    {% if not extension.module %}
                                      <option value=\"{{ extension.code }}\"{% if extension.code == layout_module.code %} selected{% endif %}>{{ extension.name }}</option>
                                    {% else %}
                                      {% for module in extension.module %}
                                        <option value=\"{{ module.code }}\"{% if module.code == layout_module.code %} selected{% endif %}>{{ module.name }}</option>
                                      {% endfor %}
                                    {% endif %}
                                  </optgroup>
                                {% endfor %}
                              </select>
                              <input type=\"hidden\" name=\"layout_module[{{ module_row }}][position]\" value=\"{{ layout_module.position }}\"/> <input type=\"hidden\" name=\"layout_module[{{ module_row }}][sort_order]\" value=\"{{ layout_module.sort_order }}\"/> <a href=\"{{ layout_module.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-{{ module_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div></td>
                        </tr>
                        {% set module_row = module_row + 1 %}
                      {% endif %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('content-bottom');\" data-bs-toggle=\"tooltip\" title=\"{{ button_module_add }}\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th class=\"text-center\">{{ text_column_right }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for layout_module in layout_modules %}
                      {% if layout_module.position == 'column_right' %}
                        <tr id=\"module-row-{{ module_row }}\">
                          <td class=\"text-end\">
                            <div class=\"input-group input-group-sm\">
                              <select name=\"layout_module[{{ module_row }}][code]\" class=\"form-select input-sm\">
                                {% for extension in extensions %}
                                  <optgroup label=\"{{ extension.name }}\">
                                    {% if not extension.module %}
                                      <option value=\"{{ extension.code }}\"{% if extension.code == layout_module.code %} selected{% endif %}>{{ extension.name }}</option>
                                    {% else %}
                                      {% for module in extension.module %}
                                        <option value=\"{{ module.code }}\"{% if module.code == layout_module.code %} selected{% endif %}>{{ module.name }}</option>
                                      {% endfor %}
                                    {% endif %}
                                  </optgroup>
                                {% endfor %}
                              </select>
                              <input type=\"hidden\" name=\"layout_module[{{ module_row }}][position]\" value=\"{{ layout_module.position }}\"/> <input type=\"hidden\" name=\"layout_module[{{ module_row }}][sort_order]\" value=\"{{ layout_module.sort_order }}\"/> <a href=\"{{ layout_module.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a>
                              <button type=\"button\" onclick=\"\$('#module-row-{{ module_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>
                            </div></td>
                        </tr>
                        {% set module_row = module_row + 1 %}
                      {% endif %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-end\"><button type=\"button\" onclick=\"addModule('column-right');\" data-bs-toggle=\"tooltip\" title=\"{{ button_module_add }}\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </fieldset>
          <input type=\"hidden\" name=\"layout_id\" value=\"{{ layout_id }}\" id=\"input-layout-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
var route_row = {{ route_row }};

function addRoute() {
    html = '<tr id=\"route-row-' + route_row + '\">';
    html += '  <td><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-select\">';
    html += '  <option value=\"0\">{{ text_default|escape('js') }}</option>';
  {% for store in stores %}
    html += '<option value=\"{{ store.store_id }}\">{{ store.name|escape('js') }}</option>';
  {% endfor %}
    html += '  </select></td>';
    html += '  <td><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"{{ entry_route|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#route-row-' + route_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#route tbody').append(html);

    route_row++;
}

var module_row = {{ module_row }};

function addModule(type) {
    html = '<tr id=\"module-row-' + module_row + '\">';
    html += '  <td><div class=\"input-group input-group-sm\">';
    html += '    <select name=\"layout_module[' + module_row + '][code]\" class=\"form-select input-sm\">';
  {% for extension in extensions %}
    html += '    <optgroup label=\"{{ extension.name|escape('js') }}\">';
  {% if not extension.module %}
    html += '      <option value=\"{{ extension.code|escape('js') }}\">{{ extension.name|escape('js') }}</option>';
  {% else %}
  {% for module in extension.module %}
    html += '      <option value=\"{{ module.code|escape('js') }}\">{{ module.name|escape('js') }}</option>';
  {% endfor %}
  {% endif %}
    html += '    </optgroup>';
  {% endfor %}
    html += '  </select>';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replaceAll('-', '_') + '\" />';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
    html += '  <a href=\"\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-pencil fa-fw\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row-' + module_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger btn-sm\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i></button>';
    html += '  </div></td>';
    html += '</tr>';

    \$('#module-' + type + ' tbody').append(html);

    \$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
        \$(element).val(i);
    });

    \$('#module-' + type + ' select:last').trigger('change');

    module_row++;
}

\$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').on('change', 'select[name*=\\'code\\']', function() {
    var part = this.value.split('.');

    if (typeof part[2] == 'undefined') {
        \$(this).parent().find('a').attr('href', 'index.php?route=extension/' + part[0] + '/module/' + part[1] + '&user_token={{ user_token }}');
    } else {
        \$(this).parent().find('a').attr('href', 'index.php?route=extension/' + part[0] + '/module/' + part[1] + '&user_token={{ user_token }}&module_id=' + part[2]);
    }
});
//--></script>
{{ footer }}", "martket/view/template/design/layout_form.twig", "/var/www/html/martket/view/template/design/layout_form.twig");
    }
}
