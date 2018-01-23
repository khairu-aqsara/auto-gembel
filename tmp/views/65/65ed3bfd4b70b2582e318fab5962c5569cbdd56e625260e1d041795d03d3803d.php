<?php

/* template.phtml */
class __TwigTemplate_a27f5ecd765b455e52f53fa77ae9deb835690b76abf18eddda0dc05d7aac72fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Auto Gembel (0.2)</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Anonymous+Pro:400,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/lib/style.css\">
    <link rel=\"stylesheet\" href=\"/lib/webfont/cryptocoins.css\">
    <link rel=\"stylesheet\" href=\"/lib/webfont/cryptocoins-colors.css\">
</head>
<body>
    <nav class=\"navbar navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-main-menu\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"/\"><i class=\"cc BTC\" title=\"BTC\"></i> Auto Gembel <span class=\"badge\">(0.2)</span></a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-main-menu\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"/assets-monitor\">Monitor Aset</a></li>
                    <li><a href=\"/src/btc-indonesia\">Monitor Harga</a></li>
                    <li><a href=\"/chat-monitor\">Chat Bitcoin Indonesia</a></li>
                    <li><a href=\"/coinmarketcap\">Coinmarketcap</a></li>
                    <li><a href=\"/coinhils\">Coinhills</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container\">
        ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "    </div>

    ";
        // line 43
        $this->displayBlock('script', $context, $blocks);
        // line 49
        echo "</body>
</html>";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
    }

    // line 43
    public function block_script($context, array $blocks = array())
    {
        // line 44
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"/lib/jquery.number.min.js\"></script>
        <script src=\"/lib/app.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "template.phtml";
    }

    public function getDebugInfo()
    {
        return array (  83 => 44,  80 => 43,  75 => 40,  70 => 49,  68 => 43,  64 => 41,  62 => 40,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Auto Gembel (0.2)</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Anonymous+Pro:400,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/lib/style.css\">
    <link rel=\"stylesheet\" href=\"/lib/webfont/cryptocoins.css\">
    <link rel=\"stylesheet\" href=\"/lib/webfont/cryptocoins-colors.css\">
</head>
<body>
    <nav class=\"navbar navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-main-menu\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"/\"><i class=\"cc BTC\" title=\"BTC\"></i> Auto Gembel <span class=\"badge\">(0.2)</span></a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-main-menu\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"/assets-monitor\">Monitor Aset</a></li>
                    <li><a href=\"/src/btc-indonesia\">Monitor Harga</a></li>
                    <li><a href=\"/chat-monitor\">Chat Bitcoin Indonesia</a></li>
                    <li><a href=\"/coinmarketcap\">Coinmarketcap</a></li>
                    <li><a href=\"/coinhils\">Coinhills</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=\"container\">
        {% block body %}{% endblock %}
    </div>

    {% block script %}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"/lib/jquery.number.min.js\"></script>
        <script src=\"/lib/app.js\"></script>
    {% endblock %}
</body>
</html>", "template.phtml", "/Users/Khairu/Desktop/auto-gembel/templates/template.phtml");
    }
}
