<?php
	include 'db_connect.php';
	$delete = $conn->query("DELETE FROM attendance WHERE `id` = '".$_GET['id']."'");
	if($delete){
		echo json_encode(array("status"=>1,"msg"=>"Data successfully deleted."));
	}
	$conn->close();