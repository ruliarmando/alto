<?php
define('BASEPATH', __DIR__);

if(!session_id()) @session_start();

require 'vendor/autoload.php';
require 'conf/db.php';
$routeCollections = require 'conf/routes.php';
$appConfig = require 'conf/app.php';

$pimpleContainer = new Pimple($appConfig);

$altoRouter = new AltoRouter($routeCollections, dirname($_SERVER['SCRIPT_NAME']));

$matchRoute = $altoRouter->match();

$pimpleContainer['router'] = $altoRouter;

if($matchRoute['target'] !== NULL){
	$moduleName = $matchRoute['target']['m'];
    $controllerName = $matchRoute['target']['c'];
    $actionName = $matchRoute['target']['a'];
    
    $controllerClassWithNamespace = '\\App\\'.$moduleName.'\\Controllers\\'.$controllerName;
    
    $theController = new $controllerClassWithNamespace();
    $theController->setModule($moduleName);
    $theController->setContainer($pimpleContainer);
    
    call_user_func_array(array($theController, $actionName), $matchRoute['params']);
}else{
	require 'common/templates/404.html';
}