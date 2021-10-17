<?php

session_start();

if (isset($_SESSION['status']) && isset($_SESSION['name']) && isset($_SESSION['email'])) {
	$sessionStatus = $_SESSION['status'];
	$sessionName = $_SESSION['name'];
	$sessionEmail = $_SESSION['email'];
}else{
	$sessionStatus = false;
	$sessionName = "";
	$sessionEmail = "";
}

?>