<html>
<head>
	<title>Xác Thực Người Dùng</title>
	<meta charset="utf-8">
</head>
<body>
<h2>Authenticate</h2>
<div>
	<p><strong>ID:</strong> <?php echo $_POST['id'];?></p>
	<p><strong>Mật khẩu:</strong> <?php echo $_POST['password'];?></p>
	<?php
		if ($_POST['id'] == 'GV1258' && $_POST['password'] ==  123456) {
			$adminURL = 'admin.php';
			header('Location: '.$adminURL);
			exit();
		} else {
			echo "<p>Sai ID hoặc mật khẩu</p>";
		}
	?>
</div>
</body>
</html>