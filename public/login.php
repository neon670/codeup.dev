<?php
require_once '../Auth.php';
require_once '../Input.php';

session_start();

// if(!empty($_SESSION['LOGGED_IN_USER']) && $_SESSION['LOGGED_IN_USER'] == 'guest'){
// 	header('Location: authorized.php');
// 	exit();
// };

if(Auth::check()) {
	header('Location: authorized.php');
	exit();
};

if(Input::has('username') && Input::has('password')){
	Auth::attempt(Input::get('username'),Input::get('password'));
}
// $username = isset($_POST['username']) ? $_POST['username'] : '';
// $password = isset($_POST['password']) ? $_POST['password'] : '';
	$message = ' ';
	// if ($username == 'guest' && $password == 'password' ){
		
		$_SESSION['LOGGED_IN_USER'] = $username;
	 	header('Location: authorized.php');
	 exit();
	// }elseif ($username == '' && $password == ''){
	// 	$message = 'Please enter username and password';

	// }else{
	// 	$message = 'Invalid username and password';
	// }
	// $user = Auth::user()
	

// var_dump($_SESSION)
?>


<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>
	<h2> Please input your username and password </h3>
		<?= $message ?>
    <form action = "login.php" method="POST">
        <label>Username</label>
        <input type="username" name="username"><br>
        <label>Password</label>
        <input type="password" name="password">
        <input type="submit" value = "login">
    </form>
</body>
</html>