<?php


function base_url($url = BASE_DIR ){
	if($url == BASE_DIR){
		return $url;
	}else{
		return BASE_DIR.DS.$url;
	}
}

function redirect_404(){
	header('location: '.BASE_DIR.DS.'404');
}

/**
* File upload function
*
**/
function file_upload($destination, $filename='file', $type='jpg',$compress_level){
	$upload_error =[];
	$target_file = $destination . basename($_FILES[$file]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if the file is an actual file or fake file
	  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	  if($check !== false) {
	    echo "File is an image - " . $check["mime"] . ".";
	    $uploadOk = 1;
	  } else {
	    echo "File is not an image.";
	    $uploadOk = 0;
	  }
}

function compress_file($destination, $type,$compress_level){

}
?>