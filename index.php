<?php
require_once("header.tpl.php");
$file = !empty($_GET['file']) ? $_GET['file'] : NULL;
$files = ['task1.php', 'task2.php', 'task3.php', 'task4.php'];
if (in_array($file, $files)) {
    require_once($file);
} else {
    echo 'Choose task to review...</br>';

}
require_once("footer.tpl.php");