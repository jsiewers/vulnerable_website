<?php

/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 06-12-17
 * Time: 13:36
 */
session_start();

if(isset($_POST['knop'])) {
    extract($_POST);
    $link = mysqli_connect("localhost:3306", "pipo", "declown", "vulnerable_db");
    $query = "INSERT into user (name, password) VALUES ('".$naam."' , '".$password."')";
    if (!mysqli_query($link, $query)) {
        printf("Errormessage: %s\n", mysqli_error($link));
    }
}
include("../layout/header.php");
include("nav.php");
?>

<h3>Gebruiker toevoegen</h3>

<form action="#" method="POST">
    Naam: <input type="text" name="naam"><br>
    Wachtwoord: <input type="text" name="password"><br>
    <input type="submit" name="knop">
</form>
<?php include("../layout/footer.php"); ?>
