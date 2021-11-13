<?php

class Product extends Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->view->load('product',$title='Product');
	}



};
//var_dump($view);
$controller = new Product();

method_exists($controller,$action) ? $controller->{$action}() : null;


?>