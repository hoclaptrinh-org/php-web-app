<?php
require('connect_db.php');

if ($_SERVER['REQUEST_METHOD'] != 'POST')
	die('Invalid HTTP method!');
// else
// 	print_r($_POST);

$sql = "INSERT INTO students(code, fullname, dob, gpa) VALUES(${POST['code']}, ${POST['fullname']}, ${POST['dob']}, ${POST['gpa']})";

// die($sql);

mysqli_query($link, $sql);

$adminURL = 'admin.php';
header('Location: '.$adminURL);
?>