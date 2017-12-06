<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 04-12-17
 * Time: 16:21
 */

$link = mysqli_connect("localhost", "pipo", "declown", "vulnerable_db");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


print_r($_POST);

/*
 * Gebruik inserts sql met plain passwords
 * plak achter inlognaam: lkjlkj' OR '1' = '1
 *

$query = "SELECT * FROM user WHERE name = '".$_POST["voornaam"]."' and password = '".$_POST["password"]."'";

echo "<br>".$query."<br>";

$result = mysqli_query($link, $query);
if (!mysqli_query($link, $query)) {
    printf("Errormessage: %s\n", mysqli_error($link));
}


while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    print $row[0]." ".$row[1]." ".$row[2]."<br>";
};


*/

/*
 * Gebruik inserts sql met MD5 passwords
 * plak achter inlognaam: lkjlkj' OR '1' = '1
 * of plak: jan ' #
 *
 */

$query = "SELECT * FROM user WHERE name = '".$_POST["voornaam"]."' and password = '".MD5($_POST["wachtwoord"])."'";

echo "<br>".$query."<br>";

$result = mysqli_query($link, $query);
if (!mysqli_query($link, $query)) {
    printf("Errormessage: %s\n", mysqli_error($link));
}


while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    print $row[0]." ".$row[1]." ".$row[2]."<br>";
};