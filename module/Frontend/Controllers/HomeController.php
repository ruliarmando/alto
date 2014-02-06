<?php

namespace App\Frontend\Controllers;

use \Roo\Controller;
use \ORM;

class HomeController extends Controller{
    
    public function index(){
        $threads = ORM::forTable('thread')
            ->select('thread.*')
            ->select('kategori.nama', 'nama_kategori')
            ->join('kategori', array('thread.kategori_id', '=', 'kategori.id'))
            ->findMany();
        $this->render('index.html', array(
            'threads'=>$threads,
        ));
    }
    
    public function about(){
        $this->render('about.html');
    }
    
    public function redirectTo(){
        $this->redirect('/about');
    }
    
    public function hello($name='foobar'){
        $this->render('hello.html', array(
            'name'=>ucfirst($name),
        ));
    }
    
    public function plus($num1, $num2){
        $this->render('plus.html', array(
            'num1'=>$num1,
            'num2'=>$num2
        ));
    }
}