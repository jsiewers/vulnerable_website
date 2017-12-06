<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 06-12-17
 * Time: 09:51
 */

session_start();
include("nav.php");

?>
<form action="session.php" method="POST">
    Login <input type="text" name="voornaam"><br>
    Password <input type="password" name="wachtwoord"><br>
    <input type="submit"><br>
</form>

<a href="session.php">session.php</a>
