<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 06-12-17
 * Time: 09:51
 */


/*
 * Werkt met Burp Suite
 * Start website met firefox en netwerkinstellingen met Burp proxy
 * inloggen met jan/test123ga naar beveiligde pagina -> Ja, toegang!
 * ga naar website intercept pagina in burp kopieer PHPSESSIONID
 * open incognitovenster intercept pagina in burp en verander PHPSESSIONID met gekopieerde sessionid
 *
 */

session_start();

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
session_regenerate_id(true);

include("../layout/header.php"); ?>

<?php
include("nav.php");

?>
<form action="session.php" method="POST">
    Login <input type="text" name="voornaam"><br>
    Password <input type="password" name="wachtwoord"><br>
    <input type="submit"><br>
</form>

<a href="session.php">session.php</a>
<?php include("../layout/footer.php"); ?>
