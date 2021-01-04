<?php 
	$db = new PDO("mysql:host=127.0.0.1;dbname=20201229;charset=utf8", "root", "");

	
	$page = $_GET['page'] ?? 'list';
	$idx = $_GET['idx'] ?? NULL;

	$titles = [
		'list' => '게시물 목록',
		'view' => '게시물 조회',
		'update' => '게시물 수정',
		'write' => '게시물 작성'
	];
	

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $titles[$page]?></title>
</head>
<body>
	<p><?php echo $page?></p>
	<?php include_once("./{$page}.php")?> 
</body>
</html> 