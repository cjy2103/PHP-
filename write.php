
<form action="./write_ok.php" method="post">  <!-- POST 방식 보안을 위해 네이버 검색창 = GET 방식으로 주소창을 수정하면 내용이 바뀜 보안과 관련 없는건 GET방식-->
	<fieldset>
		<legend>글작성</legend>
		<ui>
			<li>
				<label>
					제목
					<input type="text" name="subject" />
				</label>
			</li>
			<li>
				<label>
					작성자
					<input type="text" name="writer" />
				</label>
			</li>
			<li>
				<label>
					내용
					<input type="text" name="content" />
				</label>
			</li>
		</ui>
		<p>
			<button type="button" onclick="history.back();">취소</button>
			<button type="submit">완료</button>
		</p>
	</fieldset>
</form>
