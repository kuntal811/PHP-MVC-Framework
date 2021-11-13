<?php
class Upload extends Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->view->load('admin/upload','upload');
	}
	public function submit(){

	}
}
$controller = new Upload();
?>