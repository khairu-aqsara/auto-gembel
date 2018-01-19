<?php

/* chat.phtml */
class __TwigTemplate_fc29d8a1a75033ed654ba89398eec89c127623e7126021d11f419a5d1b989119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.phtml", "chat.phtml", 1);
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
            <h4 class=\"text-center\">Live Chat dari <a href=\"https://vip.bitcoin.co.id\" target=\"_blank\">https://vip.bitcoin.co.id</a></h4>
            <p class=\"text-center text-danger\">Chat ini hanya berupa viewer untuk hiburan semata, anda tidak bisa membalas chat,<br/>Jika ingin membalas chat silahkan gunakan website resmi Bitcoin Indonesia</p>
        </div>
        <div class=\"col-lg-12 col-md-12 col-xs-12\">
            <div id=\"chat\">

            </div>
        </div>
    </div>

";
    }

    // line 19
    public function block_script($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
    <script src=\"https://js.pusher.com/4.1/pusher.min.js\"></script>
    <script src=\"/lib/livechat.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "chat.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  49 => 19,  32 => 4,  29 => 3,  11 => 1,);
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
            <h4 class=\"text-center\">Live Chat dari <a href=\"https://vip.bitcoin.co.id\" target=\"_blank\">https://vip.bitcoin.co.id</a></h4>
            <p class=\"text-center text-danger\">Chat ini hanya berupa viewer untuk hiburan semata, anda tidak bisa membalas chat,<br/>Jika ingin membalas chat silahkan gunakan website resmi Bitcoin Indonesia</p>
        </div>
        <div class=\"col-lg-12 col-md-12 col-xs-12\">
            <div id=\"chat\">

            </div>
        </div>
    </div>

{% endblock %}

{% block script %}
    {{ parent() }}
    <script src=\"https://js.pusher.com/4.1/pusher.min.js\"></script>
    <script src=\"/lib/livechat.js\"></script>
{% endblock %}
", "chat.phtml", "/Users/Khairu/Desktop/auto-miskin/templates/chat.phtml");
    }
}
