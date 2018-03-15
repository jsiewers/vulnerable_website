<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 06-12-17
 * Time: 12:43
 */

session_start();

include("../layout/header.php");
include("nav.php");

if(isset($_SESSION["login"])) {
    echo "<b>Ja, je mag deze beveiligde pagina bekijken!!</b>";
} else {
    echo "<b>Nee, je hebt geen toegang!!!</b>";
}

include("../layout/footer.php");
