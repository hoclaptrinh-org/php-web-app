<html>
<head>
	<title>Chỉnh Sửa Thông Tin Sinh Viên</title>
	<meta charset="utf-8">
</head>
<body>
<h2>Chỉnh Sửa Thông Tin Sinh Viên</h2>
<?php
	require('connect_db.php');

	if (isset($_GET['code']))
		$code = $_GET['code'];
	else
		die('Thiếu mã số sinh viên!');

	// query students table
	$sql = "SELECT * FROM `students` where code = $code";

	$result = mysqli_query($link, $sql);

	if(!$result) {
	    die('Query error: [' . $link->error . ']');
	}
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if (!$row)
		die('Không có sinh viên nào tồn tại với MSSV bạn cung cấp');
	// else
	// 	echo $row['fullname'];
?>

<form action="save.php">
	<p>
		<label for="code">MSSV:</label>
		<input id="code" name="code" type="text" value="<?php echo $row['code'] ;?>">
	</p>
	<p>
		<label for="fullname">Họ & Tên:</label>
		<input id="fullname" name="fullname" type="text" value="<?php echo $row['fullname'] ;?>">
	</p>
	<p>
		<label for="dob">Ngày Sinh:</label>
		<input id="dob" name="dob" type="text" value="<?php echo $row['dob'] ;?>">
	</p>
	<p>
		<label for="gpa">Điểm Trung Bình:</label>
		<input id="gpa" name="gpa" type="text" value="<?php echo $row['gpa'] ;?>">
	</p>
	<p>
		<input type="submit" value="Cập nhật">
	</p>
</form>

</body>
</html>