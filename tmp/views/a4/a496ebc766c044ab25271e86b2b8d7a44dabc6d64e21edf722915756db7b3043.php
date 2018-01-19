<?php

/* btcidprice.phtml */
class __TwigTemplate_bf1cc594c9feb61b42647e83fd62a0e7dda533ba29880a0551ea169d68566d42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.phtml", "btcidprice.phtml", 1);
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
        <div class=\"col-sm-12\">
            <h4 class=\"text-center\">Live Harga Market dari <a href=\"https://vip.bitcoin.co.id\" target=\"_blank\">https://vip.bitcoin.co.id</a></h4>
        </div>
        <div class=\"col-lg-6 col-md-12 col-xs-12\">
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th class=\"text-center\">MARKET IDR</th>
                        <th class=\"text-center\">HARGA SEKARANG</th>
                        <th class=\"text-left\">( % ) 24</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr id=\"btcidr\" class=\"strong\"></tr>
                        <tr id=\"bchidr\" class=\"strong\"></tr>
                        <tr id=\"btgidr\" class=\"strong\"></tr>
                        <tr id=\"ethidr\" class=\"strong\"></tr>
                        <tr id=\"etcidr\" class=\"strong\"></tr>
                        <tr id=\"ltcidr\" class=\"strong\"></tr>
                        <tr id=\"ignisidr\" class=\"strong\"></tr>
                        <tr id=\"nxtidr\" class=\"strong\"></tr>
                        <tr id=\"wavesidr\" class=\"strong\"></tr>
                        <tr id=\"stridr\" class=\"strong\"></tr>
                        <tr id=\"xrpidr\" class=\"strong\"></tr>
                        <tr id=\"xzcidr\" class=\"strong\"></tr>
                    </tbody>
            </table>
        </div>
        <div class=\"col-lg-6 col-md-12 col-xs-12\">
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th class=\"text-center\">MARKET BTC</th>
                        <th class=\"text-center\">HARGA SEKARANG</th>
                        <th class=\"text-left\">( % ) 24</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr id=\"btsbtc\" class=\"strong\"></tr>
                        <tr id=\"drkbtc\" class=\"strong\"></tr>
                        <tr id=\"dogebtc\" class=\"strong\"></tr>
                        <tr id=\"ethbtc\" class=\"strong\"></tr>
                        <tr id=\"ltcbtc\" class=\"strong\"></tr>
                        <tr id=\"nxtbtc\" class=\"strong\"></tr>
                        <tr id=\"strbtc\" class=\"strong\"></tr>
                        <tr id=\"nembtc\" class=\"strong\"></tr>
                        <tr id=\"xrpbtc\" class=\"strong\"></tr>
                    </tbody>
            </table>
        </div>
    </div>

";
    }

    // line 60
    public function block_script($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
    <script src=\"https://js.pusher.com/4.1/pusher.min.js\"></script>
    <script>var label = ";
        // line 63
        echo (isset($context["coin"]) ? $context["coin"] : null);
        echo ";</script>
    <script src=\"/lib/icon.js\"></script>
    <script src=\"/lib/liveprice.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "btcidprice.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 63,  93 => 61,  90 => 60,  32 => 4,  29 => 3,  11 => 1,);
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
            <h4 class=\"text-center\">Live Harga Market dari <a href=\"https://vip.bitcoin.co.id\" target=\"_blank\">https://vip.bitcoin.co.id</a></h4>
        </div>
        <div class=\"col-lg-6 col-md-12 col-xs-12\">
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th class=\"text-center\">MARKET IDR</th>
                        <th class=\"text-center\">HARGA SEKARANG</th>
                        <th class=\"text-left\">( % ) 24</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr id=\"btcidr\" class=\"strong\"></tr>
                        <tr id=\"bchidr\" class=\"strong\"></tr>
                        <tr id=\"btgidr\" class=\"strong\"></tr>
                        <tr id=\"ethidr\" class=\"strong\"></tr>
                        <tr id=\"etcidr\" class=\"strong\"></tr>
                        <tr id=\"ltcidr\" class=\"strong\"></tr>
                        <tr id=\"ignisidr\" class=\"strong\"></tr>
                        <tr id=\"nxtidr\" class=\"strong\"></tr>
                        <tr id=\"wavesidr\" class=\"strong\"></tr>
                        <tr id=\"stridr\" class=\"strong\"></tr>
                        <tr id=\"xrpidr\" class=\"strong\"></tr>
                        <tr id=\"xzcidr\" class=\"strong\"></tr>
                    </tbody>
            </table>
        </div>
        <div class=\"col-lg-6 col-md-12 col-xs-12\">
            <table class=\"table table-bordered\">
                <thead>
                    <tr>
                        <th class=\"text-center\">MARKET BTC</th>
                        <th class=\"text-center\">HARGA SEKARANG</th>
                        <th class=\"text-left\">( % ) 24</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr id=\"btsbtc\" class=\"strong\"></tr>
                        <tr id=\"drkbtc\" class=\"strong\"></tr>
                        <tr id=\"dogebtc\" class=\"strong\"></tr>
                        <tr id=\"ethbtc\" class=\"strong\"></tr>
                        <tr id=\"ltcbtc\" class=\"strong\"></tr>
                        <tr id=\"nxtbtc\" class=\"strong\"></tr>
                        <tr id=\"strbtc\" class=\"strong\"></tr>
                        <tr id=\"nembtc\" class=\"strong\"></tr>
                        <tr id=\"xrpbtc\" class=\"strong\"></tr>
                    </tbody>
            </table>
        </div>
    </div>

{% endblock %}

{% block script %}
    {{ parent() }}
    <script src=\"https://js.pusher.com/4.1/pusher.min.js\"></script>
    <script>var label = {{ coin|raw }};</script>
    <script src=\"/lib/icon.js\"></script>
    <script src=\"/lib/liveprice.js\"></script>
{% endblock %}
", "btcidprice.phtml", "/Users/Khairu/Desktop/auto-miskin/templates/btcidprice.phtml");
    }
}
