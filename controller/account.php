<?php

class Account extends Controller{

	function __construct(){
		parent::__construct();
	}

	function index(){
		$this->view->load('login',$title='Account');
	}



};
//var_dump($view);
$controller = new Account();

method_exists($controller,$action) ? $controller->{$action}() : null;


?>