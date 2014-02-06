<?php

return array(
    array('GET', '/', array('m'=>'Frontend', 'c'=>'HomeController', 'a'=>'index'), 'home'),
    array('GET', '/about', array('m'=>'Frontend', 'c'=>'HomeController', 'a'=>'about'), 'about'),
    array('GET', '/redirect', array('m'=>'Frontend', 'c'=>'HomeController', 'a'=>'redirectTo'), 'redirect'),
    array('GET', '/hello/[a:name]?', array('m'=>'Frontend', 'c'=>'HomeController', 'a'=>'hello'), 'hello'),
    array('GET|POST', '/login', array('m'=>'Frontend', 'c'=>'AuthController', 'a'=>'login'), 'login'),
    array('GET', '/[i:num1]/plus/[i:num2]', array('m'=>'Frontend', 'c'=>'HomeController', 'a'=>'plus'), 'plus'),
);