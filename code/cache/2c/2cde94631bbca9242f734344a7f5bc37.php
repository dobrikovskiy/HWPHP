<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* auth-template.twig */
class __TwigTemplate_3e0801f3ac2e1564bd0a65ffa1ad4d42 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ( !($context["user_authorized"] ?? null)) {
            // line 2
            echo "    <div class=\"col-md-3 text-end\">
        <a href=\"/user/login/\" class=\"btn btn-primary\">Войти</a>
    </div>
";
        } else {
            // line 6
            echo "    <p>Добро пожаловать на сайт!</p>
";
        }
    }

    public function getTemplateName()
    {
        return "auth-template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth-template.twig", "/data/mysite.local/src/Domain/Views/auth-template.twig");
    }
}
