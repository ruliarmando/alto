<?php

/* plus.html */
class __TwigTemplate_dc12e0b55afe4b8a4d74864068e259e2689d7c5fdd430deb901b10d7b6ad24f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
    <title>Plus Page</title>
</head>
<body>
    ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["num1"]) ? $context["num1"] : null), "html", null, true);
        echo " + ";
        echo twig_escape_filter($this->env, (isset($context["num2"]) ? $context["num2"] : null), "html", null, true);
        echo " = ";
        echo twig_escape_filter($this->env, ((isset($context["num1"]) ? $context["num1"] : null) + (isset($context["num2"]) ? $context["num2"] : null)), "html", null, true);
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "plus.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }
}
