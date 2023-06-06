<?php

session_start();

if(isset($_SESSION['User_Id']))
{
	unset($_SESSION['User_Id']);

}

header("Location: login.php");
die;