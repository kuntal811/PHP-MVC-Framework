<?php

class Error_404 extends Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->view->load('404',$title='Page not found');
	}



};
//var_dump($view);
$controller = new Error_404();

//method_exists($controller,$action) ? $controller->{$action}() : header("Location:".base_url('404'));


?>