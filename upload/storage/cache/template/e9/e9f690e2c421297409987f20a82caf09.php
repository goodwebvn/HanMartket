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

/* admin/view/template/cms/comment_list.twig */
class __TwigTemplate_247ce4e23581e4b4e7e3f9d9b8f911e1 extends Template
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
        yield "<form id=\"form-comment\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#comment\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
        <th>";
        // line 6
        yield ($context["column_comment"] ?? null);
        yield "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 10
        if (($context["comments"] ?? null)) {
            // line 11
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 12
                yield "          <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "status", [], "any", false, false, false, 12)) {
                    yield " class=\"table-active opacity-50\"";
                }
                yield ">
            <td class=\"text-center\" rowspan=\"2\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 13
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "article_comment_id", [], "any", false, false, false, 13);
                yield "\" class=\"form-check-input\"/></td>
            <td><a href=\"";
                // line 14
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "article_edit", [], "any", false, false, false, 14);
                yield "\" target=\"_blank\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "article", [], "any", false, false, false, 14);
                yield "</a>
              <p>
                ";
                // line 16
                if (CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "customer_edit", [], "any", false, false, false, 16)) {
                    // line 17
                    yield "                  <small>";
                    yield ($context["text_by"] ?? null);
                    yield " <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "customer_edit", [], "any", false, false, false, 17);
                    yield "\" target=\"_blank\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 17);
                    yield "</a></small>
                ";
                } else {
                    // line 19
                    yield "                  <small> - ";
                    yield ($context["text_by"] ?? null);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 19);
                    yield "</small>
                ";
                }
                // line 21
                yield "                <small> - ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "date_added", [], "any", false, false, false, 21);
                yield "</small>
                <br/>
                <small>";
                // line 23
                yield ($context["text_rating"] ?? null);
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "rating", [], "any", false, false, false, 23);
                yield "</small>
              </p>
              <p>";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 25);
                yield "</p>
            </td>
          </tr>
          <tr>
            <td class=\"text-end\">
              ";
                // line 30
                if (CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "approve", [], "any", false, false, false, 30)) {
                    // line 31
                    yield "                <button type=\"button\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "approve", [], "any", false, false, false, 31);
                    yield "\" data-bs-toggle=\"tooltip\" title=\"";
                    yield ($context["button_approve"] ?? null);
                    yield "\" class=\"btn btn-success\"><i class=\"fa-solid fa-check\"></i></button>
              ";
                } else {
                    // line 33
                    yield "                <button type=\"button\" class=\"btn btn-success\" disabled><i class=\"fa-solid fa-check\"></i></button>
              ";
                }
                // line 35
                yield "              <button type=\"button\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "spam", [], "any", false, false, false, 35);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_spam"] ?? null);
                yield "\" class=\"btn btn-warning\"><i class=\"fa-solid fa-ban\"></i></button>
              <button type=\"button\" value=\"";
                // line 36
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "delete", [], "any", false, false, false, 36);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_delete"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-trash-can\"></i></button>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "      ";
        } else {
            // line 41
            yield "        <tr>
          <td class=\"text-center\" colspan=\"2\">";
            // line 42
            yield ($context["text_no_results"] ?? null);
            yield "</td>
        </tr>
      ";
        }
        // line 45
        yield "    </tbody>
  </table>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 48
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 49
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/cms/comment_list.twig";
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
        return array (  178 => 49,  174 => 48,  169 => 45,  163 => 42,  160 => 41,  157 => 40,  145 => 36,  138 => 35,  134 => 33,  126 => 31,  124 => 30,  116 => 25,  109 => 23,  103 => 21,  95 => 19,  85 => 17,  83 => 16,  76 => 14,  72 => 13,  65 => 12,  60 => 11,  58 => 10,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-comment\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#comment\">
  <table class=\"table table-bordered\">
    <thead>
      <tr>
        <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
        <th>{{ column_comment }}</th>
      </tr>
    </thead>
    <tbody>
      {% if comments %}
        {% for comment in comments %}
          <tr{% if not comment.status %} class=\"table-active opacity-50\"{% endif %}>
            <td class=\"text-center\" rowspan=\"2\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ comment.article_comment_id }}\" class=\"form-check-input\"/></td>
            <td><a href=\"{{ comment.article_edit }}\" target=\"_blank\">{{ comment.article }}</a>
              <p>
                {% if comment.customer_edit %}
                  <small>{{ text_by }} <a href=\"{{ comment.customer_edit }}\" target=\"_blank\">{{ comment.author }}</a></small>
                {% else %}
                  <small> - {{ text_by }} {{ comment.author }}</small>
                {% endif %}
                <small> - {{ comment.date_added }}</small>
                <br/>
                <small>{{ text_rating }} {{ comment.rating }}</small>
              </p>
              <p>{{ comment.comment }}</p>
            </td>
          </tr>
          <tr>
            <td class=\"text-end\">
              {% if comment.approve %}
                <button type=\"button\" value=\"{{ comment.approve }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_approve }}\" class=\"btn btn-success\"><i class=\"fa-solid fa-check\"></i></button>
              {% else %}
                <button type=\"button\" class=\"btn btn-success\" disabled><i class=\"fa-solid fa-check\"></i></button>
              {% endif %}
              <button type=\"button\" value=\"{{ comment.spam }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_spam }}\" class=\"btn btn-warning\"><i class=\"fa-solid fa-ban\"></i></button>
              <button type=\"button\" value=\"{{ comment.delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-trash-can\"></i></button>
            </td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td class=\"text-center\" colspan=\"2\">{{ text_no_results }}</td>
        </tr>
      {% endif %}
    </tbody>
  </table>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>", "admin/view/template/cms/comment_list.twig", "/var/www/html/admin/view/template/cms/comment_list.twig");
    }
}
