<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 07-12-17
 * Time: 15:28
 */
?>

<ul>

    <?php
$dir    = './';
$files = scandir($dir);

foreach($files as $file) {
    echo "<li><a href='".$file."'>".$file."</a></li>";
}
?>

</ul>
