<?php

function __autoload($classname) {
    include_once "$classname.php";
}

$timer = new Timer();
$timer->start();

sleep(2);

echo "Total execution time {$timer->stop()}";
