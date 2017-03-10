<?
	include 'classes/user.php';
	if ($_POST['q'] == 'enter') {
		$user = new User($_POST['login']);
		$user->checkEnter($_POST['pass']);
		//$status = $user->check_status();
	}
	//include 'app/config.php';
	
	$user = new User('Developer');
	$status = $user->check_status();
?>