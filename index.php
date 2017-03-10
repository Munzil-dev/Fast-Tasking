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
				<? 
					
					if($status):
				?>
					<div class="personal">
						<span><?=$user->getName(true);?></span>
						<a href="/personal">Личный кабинет</a>
						<a href="/?q=exit">Выход</a>
					</div>
				<?	else: ?>
					
					<div class="enter"> 
						<a href="/?q=register">Регистрация</a>
					</div>

				<? 	endif;?>

			</div>
		</header>
		<section class="content">
			<?if($status):?>
			
			<form action="" id="addTask" class="form_style">
				<p>Название задачи:</p>
				<input type="text" class="addtask_name def_input">
				<p>Описание задачи:</p>
				<input type="text" class="addtask_description def_input">
				<input type="submit" class="addtask_button but_input" value="добавить">
			</form>
			
			<?else:?>
			
			<form action="/" method="post" id="authorization" class="form_style">
				<p>Ваш логин:</p>
				<input type="text" name="login" class="def_input">
				<p>Ваш пароль:</p>
				<input type="password" name="pass" class="def_input">
				<input type="hidden" name="q" value="enter">
				<input type="submit" class="but_input" value="Войти">
			</form>

			<?endif;?>
			
		</section>
		
	</body>
</html>