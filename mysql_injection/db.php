<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 04-12-17
 * Time: 16:21
 */

$link = mysqli_connect("localhost:3306", "pipo", "declown", "vulnerable_db");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


//print_r($_POST);

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
 * lkjlkj' OR '1' = '1' UNION SELECT 'a
 * lkjlkj' OR '1' = '1' UNION SELECT 'a', database(), 'c';#
 * lkjlkj' OR '1' = '1' UNION SELECT table_schema,table_name, table_type FROM information_Schema.tables WHERE TABLE_TYPE = 'BASE TABLE';#
 */

//$query = "SELECT * FROM user WHERE name = '".$_POST["voornaam"]."' and password = '".MD5($_POST["wachtwoord"])."'";
$query = "SELECT * FROM userplainpasswords WHERE name = '".$_POST["voornaam"]."' and password = '".$_POST["wachtwoord"]."'";
//$query = "SELECT iduser, name FROM userplainpasswords WHERE name = '".$_POST["voornaam"]."' and password = '".$_POST["wachtwoord"]."'";


$result = mysqli_query($link, $query);
if (!mysqli_query($link, $query)) {
    printf("Errormessage: %s\n", mysqli_error($link));
}


include("../layout/header.php");
?>

<h1>MySQL Injection</h1>
<ul><li><a href="index.php">MySQL Injection home</a></li></ul>

<?php
echo "<p>Query: ".$query."</p>";
while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
    print "<h3>Welkom ".$row[1]
    //.$row[0]
    //." "//.$row[2]
    ."</h3><br>";
};

include("../layout/footer.php");