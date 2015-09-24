<html>
<head>
	<title>Chèn Dữ Liệu</title>
	<meta charset="utf-8">
</head>
<body>
<h2>Chèn Dữ Liệu</h2>
<?php
	require('connect_db.php');
?>

<form method="POST" action="store.php">
	<p>
		<label for="code">MSSV:</label>
		<input id="code" name="code" type="text" value="" required="true">
	</p>
	<p>
		<label for="fullname">Họ & Tên:</label>
		<input id="fullname" name="fullname" type="text" value="" required="true">
	</p>
	<p>
		<label for="dob">Ngày Sinh:</label>
		<input id="dob" name="dob" type="text" value="" required="true">
	</p>
	<p>
		<label for="gpa">Điểm Trung Bình:</label>
		<input id="gpa" name="gpa" type="text" value="" required="true">
	</p>
	<p>
		<input type="submit" value="Cập nhật">
	</p>
</form>

</body>
</html>