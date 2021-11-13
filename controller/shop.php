<?php

class Shop extends Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->view->load('shop',$title='shooop');
	}



};
//var_dump($view);
$controller = new shop();

method_exists($controller,$action) ? $controller->{$action}() : redirect_404();


?>