<html>
<head>
	<title>Kết Nối Database</title>
	<meta charset="utf-8">
</head>
<body>
<h2>Kết Nối Database</h2>
<?php
$link = mysqli_connect('localhost', 'root', 'my_password', 'hoclaptrinh_org');

if(!$link){
    die('Không thể kết nối với database: ' . $mysqli_connect_errno($link));
} else {
    echo "<p>Kết nối thành công</p>";
}
?>
<div class="copyright" style="background: #d9edf7; color: #31708f; padding: 15px 15px;">&copy; hoclaptrinh.org 2015</div>
</body>
</html>