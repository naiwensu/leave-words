<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Right</title>
</head>
<body>
		<form action="__APP__/Message/doMess" method="post" enctype="multipart/form-data">
			留言题目：<input type="text" name="title"/><br/>
			留言内容：<textarea name="content"></textarea><br/>
			附&nbsp;&nbsp;&nbsp;&nbsp;件：<input type="file" name="filename"/><br/>
			<input type="submit"/>


		</form>
</body>
</html>