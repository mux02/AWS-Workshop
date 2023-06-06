<?php

session_start();

if(isset($_SESSION['User_Id']))
{
	unset($_SESSION['User_Id']); // To delete any data in session array with 'User_Id' index

}

header("Location: login.php");
die;