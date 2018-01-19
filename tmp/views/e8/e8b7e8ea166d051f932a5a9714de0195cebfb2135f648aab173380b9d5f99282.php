<?php

/* home.phtml */
class __TwigTemplate_959ee8cd6a3d1ba1770ad6e017c8294da9fcf4798605944bdcafd31b3687ab26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.phtml", "home.phtml", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
            <p>Auto Gembel Monitoring untuk melihat perkembangan harga crypto currencies, Sumber utama diambil dari <a href=\"https://vip.bitcoin.co.id\" target=\"_blank\">vip.bitcoin.co.id</a><br/> dan beberapa data lainya diambil dari public api yang tersedia, seperti: 
                <ol>
                    <li><a href=\"https://www.cryptocompare.com/api\" target=\"_blank\">CryptoCompare</a></li>
                    <li><a href=\"https://coinmarketcap.com/api/\" target=\"_blank\">CoinmarketCap</a></li>
                </ol>
            </p>
            <p>Ini merupakan <strong>projek kurang-kerjaan</strong>, jika anda merasa isinya tidak sesuai dengan yang anda harapkan <strong>jangan komplain</strong><br/>Jika anda mau sourcesnya silahkan download di <a href=\"#\" target=\"_blank\">Auto Gembel Github</a></p>

            <p>Website ini dibangun menggunakan:
            <ol>
                <li><a href=\"https://www.slimframework.com\" target=\"_blank\">PHP Slim Framework</a></li>
                <li><a href=\"https://github.com/slimphp/Twig-View\" target=\"_blank\">Twig-View</a></li>
                <li><a href=\"https://getbootstrap.com\" target=\"_blank\">Bootstrap 3.3</a></li>
                <li><a href=\"https://github.com/allienworks/cryptocoins\" target=\"_blank\">Cryptocoin WebFonts</a></li>
            </ol>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "home.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
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
            <p>Auto Gembel Monitoring untuk melihat perkembangan harga crypto currencies, Sumber utama diambil dari <a href=\"https://vip.bitcoin.co.id\" target=\"_blank\">vip.bitcoin.co.id</a><br/> dan beberapa data lainya diambil dari public api yang tersedia, seperti: 
                <ol>
                    <li><a href=\"https://www.cryptocompare.com/api\" target=\"_blank\">CryptoCompare</a></li>
                    <li><a href=\"https://coinmarketcap.com/api/\" target=\"_blank\">CoinmarketCap</a></li>
                </ol>
            </p>
            <p>Ini merupakan <strong>projek kurang-kerjaan</strong>, jika anda merasa isinya tidak sesuai dengan yang anda harapkan <strong>jangan komplain</strong><br/>Jika anda mau sourcesnya silahkan download di <a href=\"#\" target=\"_blank\">Auto Gembel Github</a></p>

            <p>Website ini dibangun menggunakan:
            <ol>
                <li><a href=\"https://www.slimframework.com\" target=\"_blank\">PHP Slim Framework</a></li>
                <li><a href=\"https://github.com/slimphp/Twig-View\" target=\"_blank\">Twig-View</a></li>
                <li><a href=\"https://getbootstrap.com\" target=\"_blank\">Bootstrap 3.3</a></li>
                <li><a href=\"https://github.com/allienworks/cryptocoins\" target=\"_blank\">Cryptocoin WebFonts</a></li>
            </ol>
            </p>
        </div>
    </div>
{% endblock %}", "home.phtml", "/Users/Khairu/Desktop/auto-miskin/templates/home.phtml");
    }
}
