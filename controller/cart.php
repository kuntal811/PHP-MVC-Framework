<?php

class Cart extends Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->view->load('cart',$title='Cart');
	}



};
//var_dump($view);
$controller = new Cart();

#method_exists($controller,$action) ? $controller->{$action}() : null;
?>