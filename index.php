<?php
include '/autoload.php';
?>
<html>
	<head>
		<title>Fast Tasking</title>
		<link rel="stylesheet" href="app/style.css">
	</head>
	<body>
		<header class="content">
			<div class="header_left">
				<h1>FastTasking.com</h1>
				<p>Manager of your life</p>	
			</div>
			<div class="header_right">
				<? if($user->status) 
					echo "adasd";
				?>
			</div>
		</header>
		<!--
		<section class="content">
			<form action="" id="addTask">
				<p>Название задачи:</p>
				<input type="text" class="addtask_name">
				<p>Описание задачи:</p>
				<input type="text" class="addtask_description">
				<input type="submit" class="addtask_button" value="добавить">
			</form>
		</section>
		-->
	</body>
</html>