<?php

require_once('include/init.php'); 

$segment = ( uri_segment(1) == 'index.php' ) ? 2 : 1;
$requested_url = uri_segment($segment);


/**
* Get the controller and action
**/
echo $controller = (null != $requested_url && $requested_url != '')? $requested_url : 'home';
echo $action = (uri_segment($segment+1)=='')? 'index' : uri_segment($segment+1);



/**
* If controller exists then load otherwise open 404 page
**/
file_exists('controller/'.$controller.'.php') ? require_once('controller/'.$controller.'.php'):require_once('controller/404.php'); 
method_exists($controller,$action) ? $controller->{$action}() : redirect_404();
?>