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

/* martket/view/template/sale/order_invoice.twig */
class __TwigTemplate_889b99dc87cd2c9f2c8722b87daa4d0f extends Template
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
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<head>
  <meta charset=\"UTF-8\"/>
  <title>";
        // line 5
        yield ($context["title"] ?? null);
        yield "</title>
  <base href=\"";
        // line 6
        yield ($context["base"] ?? null);
        yield "\"/>
  <link href=\"";
        // line 7
        yield ($context["bootstrap_css"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 8
        yield ($context["icons"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>
  <script src=\"";
        // line 9
        yield ($context["jquery"] ?? null);
        yield "\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 10
        yield ($context["bootstrap_js"] ?? null);
        yield "\" type=\"text/javascript\"></script>
  <link href=\"";
        // line 11
        yield ($context["stylesheet"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>
</head>
<body>
<div class=\"container\">
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 16
            yield "    <div style=\"page-break-after: always;\">
      <h1>";
            // line 17
            yield ($context["text_invoice"] ?? null);
            yield " #";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 17);
            yield "</h1>
      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 21
            yield ($context["text_invoice"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 23
            if (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 23)) {
                // line 24
                yield "                ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "invoice_no", [], "any", false, false, false, 24);
                yield "
              ";
            } else {
                // line 26
                yield "                &nbsp;
              ";
            }
            // line 28
            yield "            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 33
            yield ($context["text_order_id"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 35
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 35);
            yield "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 41
            yield ($context["text_date_added"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 43
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 43);
            yield "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 49
            yield ($context["text_store"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 51
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "store_name", [], "any", false, false, false, 51);
            yield "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 57
            yield ($context["text_store_address"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 59
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "store_address", [], "any", false, false, false, 59);
            yield "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 65
            yield ($context["text_store_telephone"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 67
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "store_telephone", [], "any", false, false, false, 67);
            yield "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 73
            yield ($context["text_store_email"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 75
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "store_email", [], "any", false, false, false, 75);
            yield "
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>";
            // line 81
            yield ($context["text_payment_method"] ?? null);
            yield "</strong>
              <br/>
              ";
            // line 83
            yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "payment_method", [], "any", false, false, false, 83);
            yield "
            </div>
          </div>
        </div>
        ";
            // line 87
            if (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 87)) {
                // line 88
                yield "          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
                // line 90
                yield ($context["text_shipping_method"] ?? null);
                yield "</strong>
                <br/>
                ";
                // line 92
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "shipping_method", [], "any", false, false, false, 92);
                yield "
              </div>
            </div>
          </div>
        ";
            }
            // line 97
            yield "      </div>

      <div class=\"row\">
        ";
            // line 100
            if (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "payment_address", [], "any", false, false, false, 100)) {
                // line 101
                yield "          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
                // line 103
                yield ($context["text_payment_address"] ?? null);
                yield "</strong>
                <br/>
                ";
                // line 105
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "payment_address", [], "any", false, false, false, 105);
                yield "
              </div>
            </div>
          </div>
        ";
            }
            // line 110
            yield "
        ";
            // line 111
            if (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 111)) {
                // line 112
                yield "          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
                // line 114
                yield ($context["text_shipping_address"] ?? null);
                yield "</strong>
                <br/>
                ";
                // line 116
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "shipping_address", [], "any", false, false, false, 116);
                yield "
              </div>
            </div>
          </div>
        ";
            }
            // line 121
            yield "      </div>

      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <th>";
            // line 126
            yield ($context["column_product"] ?? null);
            yield "</th>
            <th>";
            // line 127
            yield ($context["column_model"] ?? null);
            yield "</th>
            <th class=\"text-end\">";
            // line 128
            yield ($context["column_quantity"] ?? null);
            yield "</th>
            <th class=\"text-end\">";
            // line 129
            yield ($context["column_price"] ?? null);
            yield "</th>
            <th class=\"text-end\">";
            // line 130
            yield ($context["column_total"] ?? null);
            yield "</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "product", [], "any", false, false, false, 134));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 135
                yield "            <tr>
              <td>";
                // line 136
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 136);
                yield "
                ";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 137));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 138
                    yield "                  <br/>
                  <small> - ";
                    // line 139
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 139);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 139);
                    yield "</small>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                yield "
                ";
                // line 142
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 142)) {
                    // line 143
                    yield "                  <br/>
                  <small> - ";
                    // line 144
                    yield ($context["text_points"] ?? null);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 144);
                    yield "</small>
                ";
                }
                // line 146
                yield "
                ";
                // line 147
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 147)) {
                    // line 148
                    yield "                  <br/>
                  <small> - ";
                    // line 149
                    yield ($context["text_subscription"] ?? null);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 149);
                    yield " </small>
                ";
                }
                // line 150
                yield "</td>

              <td>";
                // line 152
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 152);
                yield "</td>
              <td class=\"text-end\">";
                // line 153
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 153);
                yield "</td>
              <td class=\"text-end\">";
                // line 154
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 154);
                yield "</td>
              <td class=\"text-end\">";
                // line 155
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 155);
                yield "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 158));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 159
                yield "            <tr>
              <td class=\"text-end\" colspan=\"4\"><b>";
                // line 160
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 160);
                yield "</b></td>
              <td class=\"text-end\">";
                // line 161
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 161);
                yield "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            yield "        </tbody>
      </table>
      ";
            // line 166
            if (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 166)) {
                // line 167
                yield "        <div class=\"row\">
          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>";
                // line 170
                yield ($context["text_comment"] ?? null);
                yield "</strong>
                <br/>
                ";
                // line 172
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "comment", [], "any", false, false, false, 172);
                yield "
              </div>
            </div>
          </div>
        </div>
      ";
            }
            // line 178
            yield "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        yield "</div>
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "martket/view/template/sale/order_invoice.twig";
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
        return array (  451 => 180,  444 => 178,  435 => 172,  430 => 170,  425 => 167,  423 => 166,  419 => 164,  410 => 161,  406 => 160,  403 => 159,  398 => 158,  389 => 155,  385 => 154,  381 => 153,  377 => 152,  373 => 150,  366 => 149,  363 => 148,  361 => 147,  358 => 146,  351 => 144,  348 => 143,  346 => 142,  343 => 141,  333 => 139,  330 => 138,  326 => 137,  322 => 136,  319 => 135,  315 => 134,  308 => 130,  304 => 129,  300 => 128,  296 => 127,  292 => 126,  285 => 121,  277 => 116,  272 => 114,  268 => 112,  266 => 111,  263 => 110,  255 => 105,  250 => 103,  246 => 101,  244 => 100,  239 => 97,  231 => 92,  226 => 90,  222 => 88,  220 => 87,  213 => 83,  208 => 81,  199 => 75,  194 => 73,  185 => 67,  180 => 65,  171 => 59,  166 => 57,  157 => 51,  152 => 49,  143 => 43,  138 => 41,  129 => 35,  124 => 33,  117 => 28,  113 => 26,  107 => 24,  105 => 23,  100 => 21,  91 => 17,  88 => 16,  84 => 15,  77 => 11,  73 => 10,  69 => 9,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
  <meta charset=\"UTF-8\"/>
  <title>{{ title }}</title>
  <base href=\"{{ base }}\"/>
  <link href=\"{{ bootstrap_css }}\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"{{ icons }}\" type=\"text/css\" rel=\"stylesheet\"/>
  <script src=\"{{ jquery }}\" type=\"text/javascript\"></script>
  <script src=\"{{ bootstrap_js }}\" type=\"text/javascript\"></script>
  <link href=\"{{ stylesheet }}\" type=\"text/css\" rel=\"stylesheet\"/>
</head>
<body>
<div class=\"container\">
  {% for order in orders %}
    <div style=\"page-break-after: always;\">
      <h1>{{ text_invoice }} #{{ order.order_id }}</h1>
      <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4\">
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_invoice }}</strong>
              <br/>
              {% if order.invoice_no %}
                {{ order.invoice_no }}
              {% else %}
                &nbsp;
              {% endif %}
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_order_id }}</strong>
              <br/>
              {{ order.order_id }}
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_date_added }}</strong>
              <br/>
              {{ order.date_added }}
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_store }}</strong>
              <br/>
              {{ order.store_name }}
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_store_address }}</strong>
              <br/>
              {{ order.store_address }}
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_store_telephone }}</strong>
              <br/>
              {{ order.store_telephone }}
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_store_email }}</strong>
              <br/>
              {{ order.store_email }}
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"form-control-plaintext p-0 border rounded mb-3\">
            <div class=\"lead p-2\"><strong>{{ text_payment_method }}</strong>
              <br/>
              {{ order.payment_method }}
            </div>
          </div>
        </div>
        {% if order.shipping_method %}
          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>{{ text_shipping_method }}</strong>
                <br/>
                {{ order.shipping_method }}
              </div>
            </div>
          </div>
        {% endif %}
      </div>

      <div class=\"row\">
        {% if order.payment_address %}
          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>{{ text_payment_address }}</strong>
                <br/>
                {{ order.payment_address }}
              </div>
            </div>
          </div>
        {% endif %}

        {% if order.shipping_address %}
          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>{{ text_shipping_address }}</strong>
                <br/>
                {{ order.shipping_address }}
              </div>
            </div>
          </div>
        {% endif %}
      </div>

      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <th>{{ column_product }}</th>
            <th>{{ column_model }}</th>
            <th class=\"text-end\">{{ column_quantity }}</th>
            <th class=\"text-end\">{{ column_price }}</th>
            <th class=\"text-end\">{{ column_total }}</th>
          </tr>
        </thead>
        <tbody>
          {% for product in order.product %}
            <tr>
              <td>{{ product.name }}
                {% for option in product.option %}
                  <br/>
                  <small> - {{ option.name }}: {{ option.value }}</small>
                {% endfor %}

                {% if product.reward %}
                  <br/>
                  <small> - {{ text_points }} {{ product.reward }}</small>
                {% endif %}

                {% if product.subscription %}
                  <br/>
                  <small> - {{ text_subscription }} {{ product.subscription }} </small>
                {% endif %}</td>

              <td>{{ product.model }}</td>
              <td class=\"text-end\">{{ product.quantity }}</td>
              <td class=\"text-end\">{{ product.price }}</td>
              <td class=\"text-end\">{{ product.total }}</td>
            </tr>
          {% endfor %}
          {% for total in order.total %}
            <tr>
              <td class=\"text-end\" colspan=\"4\"><b>{{ total.title }}</b></td>
              <td class=\"text-end\">{{ total.text }}</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
      {% if order.comment %}
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"form-control-plaintext p-0 border rounded mb-3\">
              <div class=\"lead p-2\"><strong>{{ text_comment }}</strong>
                <br/>
                {{ order.comment }}
              </div>
            </div>
          </div>
        </div>
      {% endif %}
    </div>
  {% endfor %}
</div>
</body>
</html>
", "martket/view/template/sale/order_invoice.twig", "/var/www/html/martket/view/template/sale/order_invoice.twig");
    }
}
