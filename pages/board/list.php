<?php
	$rows = $db->query("SELECT * FROM board") -> fetchAll(PDO::FETCH_OBJ);
?>
<ul>
	<?php foreach ($rows as $row): ?>
		<li>
			<?php echo $row->idx ?>	/
			 <a href="./?page=view&amp;idx=<?php echo $row->idx?>"><?php echo $row->subject ?></a> /<!-- ? 붙는순간 GET 방식을 사용하겠다 라는 의미  -->
			<?php echo $row->writer ?>	/
			<?php echo $row->reg_date ?>	/
		</li>
	<?php endforeach ?>
</ul>
<p>
	<a href="./?page=write">글작성</a>
</p>
