<?php

	include_once 'login.php';
	
	$crud = new crud();
	
	$id = $_POST['delete_id'];
	
	if($crud->delete($id,"campaign")){
		echo "success";
	}


?>
