<?php

use \Fiber;

# https://www.php.net/manual/en/language.fibers.php

/**
 * ...
 * 
 */
/* $fiber = new \Fiber(function () {
    var_dump(\Fiber::suspend('fiber'));
});

$value = $fiber->start();
$fiber->resume('test');
 */

$fiber = new Fiber(function (): void {
    $value = Fiber::suspend('fiber');
    echo "Value used to resume fiber: ", $value, PHP_EOL;
});
