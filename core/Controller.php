<?php

namespace Roo;

class Controller{
    
    protected $module;
    protected $container;
    
    public function setModule($module_name){
        $this->module = $module_name;
    }
    
    public function setContainer($container){
        $this->container = $container;
    }
    
    public function render($template, $data=array()){
        $loader = new \Twig_Loader_Filesystem(array(
            BASEPATH."/module/{$this->module}/Templates",
            BASEPATH."/common/templates",
        ));
        $twig = new \Twig_Environment($loader, array(
            'cache'=>BASEPATH.'/cache',
            'auto_reload'=>true,
        ));
        
        $template = $twig->loadTemplate($template);
        $template->display($data);
    }
    
    public function redirect($to, $statusCode=302){
        header('Location: '.$this->container['base_url'].$to, true, $statusCode);
        exit();
    }
}