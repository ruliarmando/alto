<?php

/* login.html */
class __TwigTemplate_e89624410ab1ab513511e0a267a308dcd7b16c03a49c4d3feab5f8997924ed92 extends Twig_Template
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
    <title>Login Page</title>
</head>
<body>
    <form action=\"\" method=\"post\">
        <label for=\"username\">Username</label>
        <input type=\"text\" name=\"username\" />
        <br />
        <label for=\"password\">Password</label>
        <input type=\"password\" name=\"password\" />
        <br />
        <input type=\"submit\" value=\"Login\" />
    </form>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
