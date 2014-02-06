<?php

/* login.html */
class __TwigTemplate_cb5a6b2223f6dd94ad8af5b4904a57c0e49d45701e970fd3859a6a76c35fc53a extends Twig_Template
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
        <input type=\"submit\" value=\"Login\" name=\"submit\" />
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
