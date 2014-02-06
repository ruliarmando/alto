<?php

/* about.html */
class __TwigTemplate_eb06e119c02b545ef7267c1a0b67e039eda044309bbbc48f9ed8db8960f8ddea extends Twig_Template
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
    <title>About Page</title>
</head>
<body>
    <h2>About Page</h2>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "about.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
