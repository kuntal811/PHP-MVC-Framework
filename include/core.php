<?php
class View{
	protected $data;

	public function __call($func,$arg){

		switch($func){

			/**
			 * @function load 
			 * @param 1 : Page to load;
			 * @param 2 : Page title
			 * @param 3 : data varable to used in view;
			 *
			**/
			case 'load':
						switch(count($arg)){
							case 2:
									$this->load_view($arg);
									break;
							case 3:	
									$this->load_view_with_arg($arg);
									break;
							default:
								echo "Call view->load with invalid number of argument";
						break;
					}
		}
	}

	public function load_view($arg){

		$page = $arg[0];
		$title = $arg[1];
		$content = "template_parts/".$page.".php";
		require_once("theme/template.php");
	}

	public function load_view_with_arg($arg){

		$page = $arg[0];
		$title = $arg[1];
		$data	= $arg[2];
		$content = "template_parts/".$page.".php";
		require_once("theme/template.php");
	}

};

class Controller{
	protected $view;
	function __construct(){
		$this->view = new View();
	}
}
?>