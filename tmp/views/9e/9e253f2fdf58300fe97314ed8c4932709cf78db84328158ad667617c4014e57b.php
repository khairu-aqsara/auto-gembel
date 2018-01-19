<?php

/* cryptocompare.phtml */
class __TwigTemplate_00b84061a98310992b2c6920534a850239a400e3ae5629d772e6bc01f975f8d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.phtml", "cryptocompare.phtml", 1);
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
        <div class=\"col-sm-12\">Comming Soon..</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "cryptocompare.phtml";
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
        <div class=\"col-sm-12\">Comming Soon..</div>
    </div>
{% endblock %}", "cryptocompare.phtml", "/Users/Khairu/Desktop/auto-miskin/templates/cryptocompare.phtml");
    }
}
