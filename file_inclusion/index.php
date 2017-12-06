<?php

ini_set('allow_url_include', true);
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 05-12-17
 * Time: 13:16
 */

$link = mysqli_connect("localhost", "pipo", "declown", "vulnerable_db");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


// ?file=included_file.php
// hack 1 file: ../../../../../etc/passwd

/*
$included_file= $_GET['file'];
 */

// hack 2 file: ../../../../../etc/passwd%00 met null-byte aan het eind werkt niet in php 7.1.2
print $_GET['file'].".php";
$included_file= $_GET['file'].".php";

include($included_file);

