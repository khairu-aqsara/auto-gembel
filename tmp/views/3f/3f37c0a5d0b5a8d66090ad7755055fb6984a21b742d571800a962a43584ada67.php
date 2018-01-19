<?php

/* details.phtml */
class __TwigTemplate_c143612c647f4041da8f4da386f0a102e8da85d2dcfbe250626576e3e65750d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.phtml", "details.phtml", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-sm-12 col-lg-5 col-sm-12\">
            <h4><i class=\"cc ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "name", array(), "array"), "html", null, true);
        echo "\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "label", array(), "array"), "html", null, true);
        echo " &rang; Bitcoin Indonesia</h4>
            <table class=\"table table-striped table-bordered\">
                <tr>
                    <td class=\"text-center\">Last</td>
                    <td class=\"text-center\">24.h</td>
                    <td class=\"text-center\">Low</td>
                    <td class=\"text-center\">High</td>
                </tr>
                <tr>
                    <td class=\"text-center strong\" id=\"last_price\"></td>
                    <td class=\"text-center strong\" id=\"change\"></td>
                    <td class=\"text-center strong\" id=\"low_price\"></td>
                    <td class=\"text-center strong\" id=\"high_price\"></td>
                </tr>
            </table>
            <div id=\"chartnya\"></div>
            <p>
                <a href=\"https://vip.bitcoin.co.id/chart/";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "id", array()), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-sm btn-default\">Advanced Chart</a>
            </p>
        </div>
        <div class=\"col-sm-12 col-lg-7 col-sm-12\">
            <h4><i class=\"cc ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "name", array(), "array"), "html", null, true);
        echo "\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "label", array(), "array"), "html", null, true);
        echo " &rang; Around The Exchanger</h4>
            <div class=\"row\">
                <div class=\"col-lg-6 col-sm-12\">
                    <table class=\"table\">
                        <tr>
                            <td colspan=\"2\" class=\"text-muted\">coinmarketcap.com</td>
                        </tr>
                        <tr>
                            <td id=\"marketkap-price\" colspan=\"2\" class=\"strong\"></td>
                        </tr>
                        <tr>
                            <td id=\"marketkap-change1h\" class=\"text-left strong\"></td>
                            <td id=\"marketkap-change24h\" class=\"text-right strong\"></td>
                        </tr>
                    </table>
                </div>
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exchange"]) ? $context["exchange"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ex"]) {
            // line 45
            echo "                <div class=\"col-lg-6 col-sm-12\" id=\"";
            echo twig_escape_filter($this->env, $context["ex"], "html", null, true);
            echo "\">
                    <table class=\"table\">
                        <tr>
                            <td colspan=\"2\" class=\"text-muted\">";
            // line 48
            echo twig_escape_filter($this->env, $context["ex"], "html", null, true);
            echo "</td>
                        </tr>
                        <tr>
                            <td id=\"";
            // line 51
            echo twig_escape_filter($this->env, $context["ex"], "html", null, true);
            echo "-price\" colspan=\"2\" class=\"strong\"></td>
                        </tr>
                        <tr>
                            <td id=\"";
            // line 54
            echo twig_escape_filter($this->env, $context["ex"], "html", null, true);
            echo "-change1h\" class=\"text-left strong\"></td>
                            <td id=\"";
            // line 55
            echo twig_escape_filter($this->env, $context["ex"], "html", null, true);
            echo "-change24h\" class=\"text-right strong\"></td>
                        </tr>
                    </table>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ex'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </div>
        </div>
    </div>

";
    }

    // line 66
    public function block_script($context, array $blocks = array())
    {
        // line 67
        echo "    ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
    <script src=\"https://vip.bitcoin.co.id/js/highstocks-4.2.5/highstock-all.js\"></script>
    <script src=\"https://vip.bitcoin.co.id/js/highstocks-4.2.5/modules/exporting.js\"></script>
    <script src=\"https://vip.bitcoin.co.id/js/highstocks-4.2.5/modules/indicators/js/indicators.js\"></script>
    <script src=\"https://vip.bitcoin.co.id/js/highstocks-4.2.5/modules/indicators/js/sma.js\"></script>
    <script src=\"https://vip.bitcoin.co.id/js/highstocks-4.2.5/modules/indicators/js/bb.js\"></script>
    <script src=\"https://js.pusher.com/4.1/pusher.min.js\"></script>
    <script> 
        var parameter = \"tradedata-";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "id", array(), "array"), "html", null, true);
        echo "\";
        var key = \"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "id", array(), "array"), "html", null, true);
        echo "\";
        var labelnya =\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "label", array(), "array"), "html", null, true);
        echo "\";
        var jenis =\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "exc", array(), "array"), "html", null, true);
        echo "\";
        var coin = \"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mcoin"]) ? $context["mcoin"] : null), "id", array(), "array"), "html", null, true);
        echo "\";
        var uri = \"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mcoin"]) ? $context["mcoin"] : null), "uri", array(), "array"), "html", null, true);
        echo "\";
        var lbl = \"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mcoin"]) ? $context["mcoin"] : null), "label", array(), "array"), "html", null, true);
        echo "\";
        var idr = ";
        // line 82
        echo (isset($context["idr"]) ? $context["idr"] : null);
        echo ";
    </script>
    <script src=\"/lib/details.js\"></script>
    <script src=\"/lib/details-external.js\"></script>
    <script>
        \$(document).ready(function(){
            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exchange"]) ? $context["exchange"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["exc"]) {
            // line 89
            echo "                CryptoCompareApi('";
            echo twig_escape_filter($this->env, $context["exc"], "html", null, true);
            echo "');
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
            setInterval(function(){
                    MarketKap();
                    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exchange"]) ? $context["exchange"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["exc"]) {
            // line 95
            echo "                        CryptoCompareApi('";
            echo twig_escape_filter($this->env, $context["exc"], "html", null, true);
            echo "');
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "            }, 60000);
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "details.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 97,  207 => 95,  203 => 94,  198 => 91,  189 => 89,  185 => 88,  176 => 82,  172 => 81,  168 => 80,  164 => 79,  160 => 78,  156 => 77,  152 => 76,  148 => 75,  136 => 67,  133 => 66,  125 => 60,  114 => 55,  110 => 54,  104 => 51,  98 => 48,  91 => 45,  87 => 44,  66 => 28,  59 => 24,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"template.phtml\" %}

{% block body %}

    <div class=\"row\">
        <div class=\"col-sm-12 col-lg-5 col-sm-12\">
            <h4><i class=\"cc {{ row['name'] }}\"></i> {{ row['label'] }} &rang; Bitcoin Indonesia</h4>
            <table class=\"table table-striped table-bordered\">
                <tr>
                    <td class=\"text-center\">Last</td>
                    <td class=\"text-center\">24.h</td>
                    <td class=\"text-center\">Low</td>
                    <td class=\"text-center\">High</td>
                </tr>
                <tr>
                    <td class=\"text-center strong\" id=\"last_price\"></td>
                    <td class=\"text-center strong\" id=\"change\"></td>
                    <td class=\"text-center strong\" id=\"low_price\"></td>
                    <td class=\"text-center strong\" id=\"high_price\"></td>
                </tr>
            </table>
            <div id=\"chartnya\"></div>
            <p>
                <a href=\"https://vip.bitcoin.co.id/chart/{{ row.id }}\" target=\"_blank\" class=\"btn btn-sm btn-default\">Advanced Chart</a>
            </p>
        </div>
        <div class=\"col-sm-12 col-lg-7 col-sm-12\">
            <h4><i class=\"cc {{ row['name'] }}\"></i> {{ row['label'] }} &rang; Around The Exchanger</h4>
            <div class=\"row\">
                <div class=\"col-lg-6 col-sm-12\">
                    <table class=\"table\">
                        <tr>
                            <td colspan=\"2\" class=\"text-muted\">coinmarketcap.com</td>
                        </tr>
                        <tr>
                            <td id=\"marketkap-price\" colspan=\"2\" class=\"strong\"></td>
                        </tr>
                        <tr>
                            <td id=\"marketkap-change1h\" class=\"text-left strong\"></td>
                            <td id=\"marketkap-change24h\" class=\"text-right strong\"></td>
                        </tr>
                    </table>
                </div>
                {% for ex in exchange %}
                <div class=\"col-lg-6 col-sm-12\" id=\"{{ ex }}\">
                    <table class=\"table\">
                        <tr>
                            <td colspan=\"2\" class=\"text-muted\">{{ ex }}</td>
                        </tr>
                        <tr>
                            <td id=\"{{ ex }}-price\" colspan=\"2\" class=\"strong\"></td>
                        </tr>
                        <tr>
                            <td id=\"{{ ex }}-change1h\" class=\"text-left strong\"></td>
                            <td id=\"{{ ex }}-change24h\" class=\"text-right strong\"></td>
                        </tr>
                    </table>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>

{% endblock %}

{% block script %}
    {{ parent() }}
    <script src=\"https://vip.bitcoin.co.id/js/highstocks-4.2.5/highstock-all.js\"></script>
    <script src=\"https://vip.bitcoin.co.id/js/highstocks-4.2.5/modules/exporting.js\"></script>
    <script src=\"https://vip.bitcoin.co.id/js/highstocks-4.2.5/modules/indicators/js/indicators.js\"></script>
    <script src=\"https://vip.bitcoin.co.id/js/highstocks-4.2.5/modules/indicators/js/sma.js\"></script>
    <script src=\"https://vip.bitcoin.co.id/js/highstocks-4.2.5/modules/indicators/js/bb.js\"></script>
    <script src=\"https://js.pusher.com/4.1/pusher.min.js\"></script>
    <script> 
        var parameter = \"tradedata-{{ row['id'] }}\";
        var key = \"{{ row['id'] }}\";
        var labelnya =\"{{ row['label'] }}\";
        var jenis =\"{{ row['exc'] }}\";
        var coin = \"{{ mcoin['id'] }}\";
        var uri = \"{{ mcoin['uri'] }}\";
        var lbl = \"{{ mcoin['label'] }}\";
        var idr = {{ idr|raw }};
    </script>
    <script src=\"/lib/details.js\"></script>
    <script src=\"/lib/details-external.js\"></script>
    <script>
        \$(document).ready(function(){
            {% for exc in  exchange %}
                CryptoCompareApi('{{ exc }}');
            {% endfor %}

            setInterval(function(){
                    MarketKap();
                    {% for exc in  exchange %}
                        CryptoCompareApi('{{ exc }}');
                    {% endfor %}
            }, 60000);
        });
    </script>
{% endblock %}", "details.phtml", "/Users/Khairu/Desktop/auto-miskin/templates/details.phtml");
    }
}
