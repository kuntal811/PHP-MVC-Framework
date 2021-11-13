<?php

class Checkout extends Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->view->load('checkout',$title='Checkout');
	}



};
//var_dump($view);
$controller = new Checkout();

method_exists($controller,$action) ? $controller->{$action}() : null;


?>