<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 06-12-17
 * Time: 14:23
 */

include("nav.php");

if (isset($_COOKIE['geheim'])) {
    unset($_COOKIE['geheim']);
    setcookie('geheim', '', time() - 3600, '/'); // empty value and old timestamp
}
