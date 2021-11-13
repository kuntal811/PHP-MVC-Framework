<?php

class Home extends Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->view->load('home',$title='Eshopper');
	}



};
//var_dump($view);
$controller = new Home();

method_exists($controller,$action) ? $controller->{$action}() : null;


?>