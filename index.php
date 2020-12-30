<?php 
	$db = new PDO("mysql:host=127.0.0.1;dbname=20201229;charset=utf8", "root", "");
	$rows = $db->query("SELECT * FROM board") -> fetchAll(PDO::FETCH_OBJ);


	// print_r($rows);

	// foreach ($rows[0] as $key => $value) {
	// 	echo "<p> {$key} => {$value} </p>";
	// }
	// exit;
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>게시물 목록</title>
</head>
<body>
	<ul>
		<?php foreach ($rows as $row): ?>
			<li>
				<?php echo $row->idx ?>	/
				<?php echo $row->subject ?>	/
				<?php echo $row->writer ?>	/
				<?php echo $row->reg_date ?>	/
			</li>
		<?php endforeach ?>
	</ul>
	<p>
		<a href="./write.php">글작성</a>
	</p>
</body>
</html> 