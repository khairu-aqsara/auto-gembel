<?php

/* coinmarketcap.phtml */
class __TwigTemplate_1d4347616c2cec23144bd3d221de001e9dc1d27edce997b918cc2b33ed02036f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.phtml", "coinmarketcap.phtml", 1);
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
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coin"]) ? $context["coin"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 6
            echo "            <div class=\"col-sm-4\" style=\"margin-bottom:20px;\">
                <div class=\"coinmarketcap-currency-widget\" data-currency=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "uri", array()), "html", null, true);
            echo "\" data-base=\"IDR\" data-secondary=\"BTC\" data-ticker=\"true\" data-rank=\"false\" data-marketcap=\"true\" data-volume=\"true\" data-stats=\"IDR\" data-statsticker=\"true\"></div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
";
    }

    // line 12
    public function block_script($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"https://files.coinmarketcap.com/static/widget/currency.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "coinmarketcap.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  56 => 12,  51 => 10,  42 => 7,  39 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
        {% for c in coin %}
            <div class=\"col-sm-4\" style=\"margin-bottom:20px;\">
                <div class=\"coinmarketcap-currency-widget\" data-currency=\"{{ c.uri }}\" data-base=\"IDR\" data-secondary=\"BTC\" data-ticker=\"true\" data-rank=\"false\" data-marketcap=\"true\" data-volume=\"true\" data-stats=\"IDR\" data-statsticker=\"true\"></div>
            </div>
        {% endfor %}
    </div>
{% endblock %}
{% block script %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"https://files.coinmarketcap.com/static/widget/currency.js\"></script>
{% endblock %}", "coinmarketcap.phtml", "/Users/Khairu/Desktop/auto-gembel/templates/coinmarketcap.phtml");
    }
}
