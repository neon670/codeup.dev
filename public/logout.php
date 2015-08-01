<?php

require_once '../Auth.php';
require_once '../Input.php';

session_start();
function endSession()
{
    // Unset all of the session variables.
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();
    header('Location: login.php');
}
endSession();

?>


<DOCTYPE <html>
<head>
	<title>Log Out</title>
</head>
<body>

	<h1>LOGGED OUT</h1>
	<a href="login.php">Return to Login</a>
</body>
</html>