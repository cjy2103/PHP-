<?php 
	$db = new PDO("mysql:host=127.0.0.1;dbname=20201229;charset=utf8", "root", "");
	$row = $db->query("SELECT * FROM board WHERE idx = '{$_GET['idx']}'") -> fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">		
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<ul>
		<li><?php echo $row->idx ?>		</li>
		<li><?php echo $row->subject ?> </li>
		<li><?php echo $row->writer ?>	</li>
		<li><?php echo $row->reg_date ?></li>
		<li><?php echo $row->content ?>	</li>
	
	</ul>
	<p>
		<a href="./">글목록</a>
		<a href="./update.php?idx=<?php echo $_GET['idx']?>">글수정</a>
		<a href="./delete.php?idx=<?php echo $_GET['idx']?>"">글삭제</a>
		<a href="./write.php">글작성</a>
	</p>
</body>
</html>