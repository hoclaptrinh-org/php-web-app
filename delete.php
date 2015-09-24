<?php
require('connect_db.php');

if ($_SERVER['REQUEST_METHOD'] != 'GET')
	die('Invalid HTTP method!');

$sql = "DELETE FROM students WHERE code = '".$_POST['code']."'";

// die($sql);

mysqli_query($link, $sql);

$adminURL = 'admin.php';
header('Location: '.$adminURL);
?>