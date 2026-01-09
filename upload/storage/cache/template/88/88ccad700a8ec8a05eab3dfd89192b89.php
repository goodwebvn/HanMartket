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

/* catalog/view/template/information/sitemap.twig */
class __TwigTemplate_ed63f9e54a6813afb029d0453816ad10 extends Template
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
        yield "
<div id=\"information-sitemap\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 9
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <ul>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 15
            yield "              <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "href", [], "any", false, false, false, 15);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 15);
            yield "</a>
                ";
            // line 16
            if (CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 16)) {
                // line 17
                yield "                  <ul>
                    ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 19
                    yield "                      <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "href", [], "any", false, false, false, 19);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 19);
                    yield "</a>
                        ";
                    // line 20
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 20)) {
                        // line 21
                        yield "                          <ul>
                            ";
                        // line 22
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 22));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 23
                            yield "                              <li><a href=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "href", [], "any", false, false, false, 23);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 23);
                            yield "</a></li>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['category_3'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        yield "                          </ul>
                        ";
                    }
                    // line 27
                    yield "                      </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category_2'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                yield "                  </ul>
                ";
            }
            // line 31
            yield "              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category_1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "          </ul>
        </div>
        <div class=\"col-sm-6\">
          <ul>
            <li><a href=\"";
        // line 37
        yield ($context["special"] ?? null);
        yield "\">";
        yield ($context["text_special"] ?? null);
        yield "</a></li>
            <li><a href=\"";
        // line 38
        yield ($context["account"] ?? null);
        yield "\">";
        yield ($context["text_account"] ?? null);
        yield "</a>
              <ul>
                <li><a href=\"";
        // line 40
        yield ($context["edit"] ?? null);
        yield "\">";
        yield ($context["text_edit"] ?? null);
        yield "</a></li>
                <li><a href=\"";
        // line 41
        yield ($context["password"] ?? null);
        yield "\">";
        yield ($context["text_password"] ?? null);
        yield "</a></li>
                <li><a href=\"";
        // line 42
        yield ($context["address"] ?? null);
        yield "\">";
        yield ($context["text_address"] ?? null);
        yield "</a></li>
                <li><a href=\"";
        // line 43
        yield ($context["history"] ?? null);
        yield "\">";
        yield ($context["text_history"] ?? null);
        yield "</a></li>
                <li><a href=\"";
        // line 44
        yield ($context["download"] ?? null);
        yield "\">";
        yield ($context["text_download"] ?? null);
        yield "</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 47
        yield ($context["cart"] ?? null);
        yield "\">";
        yield ($context["text_cart"] ?? null);
        yield "</a></li>
            <li><a href=\"";
        // line 48
        yield ($context["checkout"] ?? null);
        yield "\">";
        yield ($context["text_checkout"] ?? null);
        yield "</a></li>
            <li><a href=\"";
        // line 49
        yield ($context["search"] ?? null);
        yield "\">";
        yield ($context["text_search"] ?? null);
        yield "</a></li>
            <li>";
        // line 50
        yield ($context["text_information"] ?? null);
        yield "
              <ul>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 53
            yield "                  <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 53);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 53);
            yield "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "                <li><a href=\"";
        yield ($context["contact"] ?? null);
        yield "\">";
        yield ($context["text_contact"] ?? null);
        yield "</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      ";
        // line 61
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 62
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 64
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
        return "catalog/view/template/information/sitemap.twig";
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
        return array (  260 => 64,  255 => 62,  251 => 61,  239 => 55,  228 => 53,  224 => 52,  219 => 50,  213 => 49,  207 => 48,  201 => 47,  193 => 44,  187 => 43,  181 => 42,  175 => 41,  169 => 40,  162 => 38,  156 => 37,  150 => 33,  143 => 31,  139 => 29,  132 => 27,  128 => 25,  117 => 23,  113 => 22,  110 => 21,  108 => 20,  101 => 19,  97 => 18,  94 => 17,  92 => 16,  85 => 15,  81 => 14,  74 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"information-sitemap\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <ul>
            {% for category_1 in categories %}
              <li><a href=\"{{ category_1.href }}\">{{ category_1.name }}</a>
                {% if category_1.children %}
                  <ul>
                    {% for category_2 in category_1.children %}
                      <li><a href=\"{{ category_2.href }}\">{{ category_2.name }}</a>
                        {% if category_2.children %}
                          <ul>
                            {% for category_3 in category_2.children %}
                              <li><a href=\"{{ category_3.href }}\">{{ category_3.name }}</a></li>
                            {% endfor %}
                          </ul>
                        {% endif %}
                      </li>
                    {% endfor %}
                  </ul>
                {% endif %}
              </li>
            {% endfor %}
          </ul>
        </div>
        <div class=\"col-sm-6\">
          <ul>
            <li><a href=\"{{ special }}\">{{ text_special }}</a></li>
            <li><a href=\"{{ account }}\">{{ text_account }}</a>
              <ul>
                <li><a href=\"{{ edit }}\">{{ text_edit }}</a></li>
                <li><a href=\"{{ password }}\">{{ text_password }}</a></li>
                <li><a href=\"{{ address }}\">{{ text_address }}</a></li>
                <li><a href=\"{{ history }}\">{{ text_history }}</a></li>
                <li><a href=\"{{ download }}\">{{ text_download }}</a></li>
              </ul>
            </li>
            <li><a href=\"{{ cart }}\">{{ text_cart }}</a></li>
            <li><a href=\"{{ checkout }}\">{{ text_checkout }}</a></li>
            <li><a href=\"{{ search }}\">{{ text_search }}</a></li>
            <li>{{ text_information }}
              <ul>
                {% for information in informations %}
                  <li><a href=\"{{ information.href }}\">{{ information.title }}</a></li>
                {% endfor %}
                <li><a href=\"{{ contact }}\">{{ text_contact }}</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}
", "catalog/view/template/information/sitemap.twig", "/var/www/html/catalog/view/template/information/sitemap.twig");
    }
}
