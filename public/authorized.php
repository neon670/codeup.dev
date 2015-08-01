<?php
require_once '../Auth.php';
require_once '../Input.php';

session_start();
// $username = ' ';

// var_dump($_SESSION);
//if user is not logged in direct to login page
// if (!isset($_SESSION['LOGGED_IN_USER'])) {
// 	header('Location: login.php');
// 	exit();
// }
if(!Auth::check()){
	header('Location: login.php');
	exit();
}

$username = Auth::user();
?>


<DOCTYPE <html>
<head>
	<title></title>
</head>
<body>
	<h1> AUTHORIZED </h1>
	<br>
	<h2> Welcome <?= $username ?></h2>
	<a href="logout.php">Log Out</a>
</body>
</html>