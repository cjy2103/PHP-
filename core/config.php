 <?php
	$param = isset($_GET['param']) ? explode('/',$_GET['param']) : [];
	$page =  $param[0] ?? 'list';
	$idx  =  $param[1] ?? NULL;


	$titles = [
		'list' => '게시물 목록',
		'view' => '게시물 조회',
		'update' => '게시물 수정',
		'write' => '게시물 작성'
	];