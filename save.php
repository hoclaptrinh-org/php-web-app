<?php
require('connect_db.php');

if ($_SERVER['REQUEST_METHOD'] != 'POST')
	die('Invalid HTTP method!');
// else
// 	print_r($_POST);

$sql = "UPDATE students SET fullname = '".$_POST['fullname']."', dob = '".$_POST['dob']."', gpa = '".$_POST['gpa']."'"
	." WHERE code = '".$_POST['code']."'";

// die($sql);

mysqli_query($link, $sql);

$adminURL = 'admin.php';
header('Location: '.$adminURL);
?>