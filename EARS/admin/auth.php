<?php
	session_start();
	if(!isset($_SESSION['login_id'])){
		header('location: index.php');
	}
	require_once 'db_connect.php';
	$user_qry = $conn->query("SELECT * FROM users WHERE `id` = '".$_SESSION['login_id']."' ");
	$user = $user_qry->fetch_array();
	$user_name = $user['firstname']." ".$user['lastname'];
?>