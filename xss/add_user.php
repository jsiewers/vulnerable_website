<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 06-12-17
 * Time: 13:36
 */

if(isset($_POST['knop'])) {
    extract($_POST);
    $link = mysqli_connect("localhost", "pipo", "declown", "vulnerable_db");
    $query = "INSERT into user (name, password) VALUES ('".$naam."' , '".$password."')";
    if (!mysqli_query($link, $query)) {
        printf("Errormessage: %s\n", mysqli_error($link));
    }
}

include("nav.php");
?>
<form action="#" method="POST">
    Naam: <input type="text" name="naam"><br>
    Wachtwoord: <input type="text" name="password">
    <input type="submit" name="knop">
</form>
