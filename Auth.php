<?php
require_once 'Log_a.php';
class Auth
{
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	public function __construct() {}
	public static function attempt($username, $password)
	{
		if (password_verify($password, self::$password ) && $username == 'guest' ) 
		{
		
			$_SESSION['LOGGED_IN_USER'] = $username;
			$user = new Log_a();
			$user->logInfo("user $username logged in");

	 
		}else{
			$user = new Log_a();
			$user->logError("User $username failed to log in!");
		
			}

		
			// return $message

		// static function logError($message)
		// {
		// 	$this->logMessage('[Error]', $message);
	}

		public static function user($username)
		{
			return !isset($_SESSION['LOGGED_IN_USER']);
		}

		public static function check()
		{
			return isset($_SESSION['LOGGED_IN_USER']) ? true : false;
		}
		
		public static function logout()
		{
			$_SESSION = array();

			if (ini_get("session.use_cookies")) {
	        $params = session_get_cookie_params();
	        setcookie(session_name(), '', time() - 42000,
	            $params["path"], $params["domain"],
	            $params["secure"], $params["httponly"]
	        	);
	    	}
			// header('Location: login.php');
	    }
	    // session_destroy();

	}
?>