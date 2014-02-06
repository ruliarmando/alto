<?php

/* plus.html */
class __TwigTemplate_377e523ca9871f1ca5955e64edda1868337eefc54fc6d02f74ba17f32eae61e3 extends Twig_Template
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
