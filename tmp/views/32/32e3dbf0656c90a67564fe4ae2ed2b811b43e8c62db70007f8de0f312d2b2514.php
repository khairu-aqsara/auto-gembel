<?php

/* btcid.phtml */
class __TwigTemplate_cc3dd34d58fb95266490dad9c3d3370b29edd68f98d28db4bd2fa0e94a7d060d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.phtml", "btcid.phtml", 1);
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
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <h4>Aset Monitor &rang; Tambah Aset</h4>
            <p>Sementara hanya suport untuk monitoring asset yang kerupiah</p>
            <hr/>
            <form action=\"/save-aset\" method=\"post\" class=\"form-horizontal\">
                <div class=\"form-group\">
                    <label class=\"control-label col-sm-1\">Aset</label>
                    <div class=\"col-sm-2\">
                        <select name=\"coin\" class=\"form-control input-sm\">
                            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coin"]) ? $context["coin"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 15
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "label", array(), "array"), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                        </select>
                    </div>
                    <label class=\"control-label col-sm-1\">H.beli</label>
                    <div class=\"col-sm-2\">
                        <input type=\"text\" name=\"hbeli\" class=\"form-control input-sm number\" required/>
                    </div>
                    <label class=\"control-label col-sm-1\">Jumlah</label>
                    <div class=\"col-sm-2\">
                        <input type=\"text\" name=\"jml_aset\" class=\"form-control input-sm numberbtc\" required/>
                    </div>
                    <div class=\"col-sm-2\">
                        <button type=\"submit\" class=\"btn btn-sm btn-default\">Simpan</button>
                    </div>
                </div>
            </form>
            ";
        // line 32
        if ((isset($context["aset"]) ? $context["aset"] : null)) {
            // line 33
            echo "            <hr/>
            <table class=\"table table-striped table-bordered\">
                <thead>
                    <tr>
                        <th class=\"text-center\">ASET</th>
                        <th class=\"text-center\">H.BELI</th>
                        <th class=\"text-center\">JML.ASET</th>
                        <th class=\"text-center\">MODAL</th>
                        <th class=\"text-center\">H.SEKARANG</th>
                        <th class=\"text-center\">ASET.SEKARANG</th>
                        <th class=\"text-center\">PROFIT/LOSS</th>
                        <th class=\"text-center\">#</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 48
            $context["tmodal"] = 0;
            // line 49
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["aset"]) ? $context["aset"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["as"]) {
                // line 50
                echo "                        <tr>
                            <td><i class=\"cc ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "name", array(), "array"), "html", null, true);
                echo "\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "label", array(), "array"), "html", null, true);
                echo "</td>
                            <td class=\"money text-right\">";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "hbeli", array(), "array"), "html", null, true);
                echo "</td>
                            <td class=\"text-right moneycoin\">";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "jml", array(), "array"), "html", null, true);
                echo "</td>
                            <td class=\"money text-right\" data-modal=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "modal", array(), "array"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "modal", array(), "array"), "html", null, true);
                echo "</td>
                            <td class=\"vharga harga_";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "kode", array(), "array"), "html", null, true);
                echo " text-right\" data-value=\"\"></td>
                            <td class=\"vmodal modal_";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "kode", array(), "array"), "html", null, true);
                echo " text-right\"></td>
                            <td class=\"vlaba laba_";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "kode", array(), "array"), "html", null, true);
                echo " text-right\"></td>
                            <td class=\"text-center\">
                                <a href=\"/delete-asset/";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["as"], "id", array(), "array"), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a>
                            </td>
                        </tr>
                        ";
                // line 62
                $context["tmodal"] = ((isset($context["tmodal"]) ? $context["tmodal"] : null) + $this->getAttribute($context["as"], "modal", array(), "array"));
                // line 63
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['as'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                    <tr>
                        <td colspan=\"3\">TOTAL PERKIRAAN ASET IDR</td>
                        <td class=\"money text-right\" id=\"tmodal\" data-modal=\"";
            // line 66
            echo twig_escape_filter($this->env, (isset($context["tmodal"]) ? $context["tmodal"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["tmodal"]) ? $context["tmodal"] : null), "html", null, true);
            echo "</td>
                        <td></td>
                        <td class=\"money text-right\" id=\"taset\">0</td>
                        <td class=\"money text-right\" id=\"tlaba\">0</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            ";
        }
        // line 75
        echo "        </div>
    </div>
";
    }

    // line 79
    public function block_script($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
    <script src=\"https://js.pusher.com/4.1/pusher.min.js\"></script>
    <script src=\"/lib/monitoraset.js\"></script>
    <script>
        \$(function(){
            \$(\"td.money\").number(true);
            var cx = \$(\"td.moneycoin\").text();
            \$(\"td.moneycoin\").number(true,8)
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "btcid.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 80,  176 => 79,  170 => 75,  156 => 66,  152 => 64,  146 => 63,  144 => 62,  138 => 59,  133 => 57,  129 => 56,  125 => 55,  119 => 54,  115 => 53,  111 => 52,  105 => 51,  102 => 50,  97 => 49,  95 => 48,  78 => 33,  76 => 32,  59 => 17,  48 => 15,  44 => 14,  32 => 4,  29 => 3,  11 => 1,);
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
        <div class=\"col-sm-12\">
            <h4>Aset Monitor &rang; Tambah Aset</h4>
            <p>Sementara hanya suport untuk monitoring asset yang kerupiah</p>
            <hr/>
            <form action=\"/save-aset\" method=\"post\" class=\"form-horizontal\">
                <div class=\"form-group\">
                    <label class=\"control-label col-sm-1\">Aset</label>
                    <div class=\"col-sm-2\">
                        <select name=\"coin\" class=\"form-control input-sm\">
                            {% for c in coin %}
                                <option value=\"{{ c['id'] }}\">{{ c['label'] }}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <label class=\"control-label col-sm-1\">H.beli</label>
                    <div class=\"col-sm-2\">
                        <input type=\"text\" name=\"hbeli\" class=\"form-control input-sm number\" required/>
                    </div>
                    <label class=\"control-label col-sm-1\">Jumlah</label>
                    <div class=\"col-sm-2\">
                        <input type=\"text\" name=\"jml_aset\" class=\"form-control input-sm numberbtc\" required/>
                    </div>
                    <div class=\"col-sm-2\">
                        <button type=\"submit\" class=\"btn btn-sm btn-default\">Simpan</button>
                    </div>
                </div>
            </form>
            {% if (aset) %}
            <hr/>
            <table class=\"table table-striped table-bordered\">
                <thead>
                    <tr>
                        <th class=\"text-center\">ASET</th>
                        <th class=\"text-center\">H.BELI</th>
                        <th class=\"text-center\">JML.ASET</th>
                        <th class=\"text-center\">MODAL</th>
                        <th class=\"text-center\">H.SEKARANG</th>
                        <th class=\"text-center\">ASET.SEKARANG</th>
                        <th class=\"text-center\">PROFIT/LOSS</th>
                        <th class=\"text-center\">#</th>
                    </tr>
                </thead>
                <tbody>
                    {% set tmodal=0 %}
                    {% for as in aset %}
                        <tr>
                            <td><i class=\"cc {{ as['name'] }}\"></i> {{ as['label'] }}</td>
                            <td class=\"money text-right\">{{ as['hbeli'] }}</td>
                            <td class=\"text-right moneycoin\">{{ as['jml'] }}</td>
                            <td class=\"money text-right\" data-modal=\"{{ as['modal'] }}\">{{ as['modal'] }}</td>
                            <td class=\"vharga harga_{{ as['kode'] }} text-right\" data-value=\"\"></td>
                            <td class=\"vmodal modal_{{ as['kode'] }} text-right\"></td>
                            <td class=\"vlaba laba_{{ as['kode'] }} text-right\"></td>
                            <td class=\"text-center\">
                                <a href=\"/delete-asset/{{ as['id'] }}\"><span class=\"glyphicon glyphicon-trash\"></span></a>
                            </td>
                        </tr>
                        {% set tmodal = (tmodal+as['modal']) %}
                    {% endfor %}
                    <tr>
                        <td colspan=\"3\">TOTAL PERKIRAAN ASET IDR</td>
                        <td class=\"money text-right\" id=\"tmodal\" data-modal=\"{{ tmodal }}\">{{ tmodal }}</td>
                        <td></td>
                        <td class=\"money text-right\" id=\"taset\">0</td>
                        <td class=\"money text-right\" id=\"tlaba\">0</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            {% endif %}
        </div>
    </div>
{% endblock %}

{% block script %}
    {{ parent() }}
    <script src=\"https://js.pusher.com/4.1/pusher.min.js\"></script>
    <script src=\"/lib/monitoraset.js\"></script>
    <script>
        \$(function(){
            \$(\"td.money\").number(true);
            var cx = \$(\"td.moneycoin\").text();
            \$(\"td.moneycoin\").number(true,8)
        })
    </script>
{% endblock %}", "btcid.phtml", "/Users/Khairu/Desktop/auto-miskin/templates/btcid.phtml");
    }
}
