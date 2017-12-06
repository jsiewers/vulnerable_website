<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 06-12-17
 * Time: 12:43
 */

session_start();
include("nav.php");

if($_SESSION["login"]) {
    echo "Ja, je mag deze beveiligde pagina bekijken!!";
} else {
    echo "Nee, je hebt geen toegang!!!";
}