<?php
	require_once 'db_connect.php';
	$delete = $conn->query("DELETE FROM `employee` WHERE `id` = '".$_GET['id']."'");
	if($delete){
		echo json_encode(array("status"=>1,'msg'=>"Data successfully deleted."));
	}
	$conn->close();