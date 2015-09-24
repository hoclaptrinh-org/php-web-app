<html>
<head>
	<title>Trang admin</title>
	<meta charset="utf-8">
</head>
<body>
<h2>Trang admin</h2>
<?php
	require('connect_db.php');

	// query students table
	$sql = 'SELECT * FROM `students`';

	$result = mysqli_query($link, $sql);

	if(!$result) {
	    die('Query error: [' . $db->error . ']');
	}
?>
<table>
	<thead>
		<tr>
			<th>MSSV</th>
			<th>Họ & Tên</th>
			<th>Ngày Sinh</th>
			<th>Điểm Trung Bình</th>
		</tr>
	</thead>
	<tbody>
		<?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : ?>
			<tr>
				<td><?php echo $row['code']; ?></td>
				<td><?php echo $row['fullname']; ?></td>
				<td><?php echo $row['dob']; ?></td>
				<td><?php echo $row['gpa']; ?></td>
			</tr>
		<?php endwhile; ?>
	</tbody>
</table>
<style type="text/css">
	table tr td {
		border-bottom: 2px solid #ccc;
		padding-left: 15px;
		padding-right: 15px;
	}
</style>
</body>
</html>