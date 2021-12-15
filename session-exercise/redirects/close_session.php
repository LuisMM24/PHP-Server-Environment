<!-- This is the last file which will be responsible for destroying the session and redirecting to the login page.-->
<?php
session_start();
//delete variables of session
unset($_SESSION);
// destroy session cookie
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}


// destroy the session
session_destroy();
header("location:./../index.php");
