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
session_regenerate_id();


$_SESSION['HTTP_HOST']= $_SERVER['HTTP_HOST'];
$_SESSION['HTTP_USER_AGENT']= $_SERVER['HTTP_USER_AGENT'];

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
