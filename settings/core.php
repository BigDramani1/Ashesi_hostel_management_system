<?php
//for header redirection
ob_start();

//start session
session_start(); 

//get the name of the current page
$current_file = $_SERVER['SCRIPT_NAME']; 

//function to check for login
function check_login(){
	//check if login session exit
	if (!isset($_SESSION['customer_id'])) 
	{
		//redirect to login page
    	header('Location: ../login/index.php');
	}
}

//function to check for permission 
function check_permission(){
	//get session role
	if (isset($_SESSION['user_role'])) {
		//assign session to an array
		return $_SESSION['user_role'];
	}
}
?>