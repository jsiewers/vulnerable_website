<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 06-12-17
 * Time: 12:57
 */
session_start();
session_destroy();

include("../layout/header.php");
include("nav.php");
include("../layout/footer.php");
