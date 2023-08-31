<?php

// https://www.php.net/manual/ja/language.fibers.php

$fiber = new Fiber(function (): void {
    echo 'Run callback', PHP_EOL;
    $value = Fiber::suspend('fiber'); // return "test"
    echo 'Value used to resume fiber: ' , $value, PHP_EOL;
});

$value = $fiber->start(); // return "fiber"

echo 'Value from fiber suspending: ', $value, PHP_EOL;

$fiber->resume('test');

// Run callback
// Value from fiber suspending: fiber
// Value used to resume fiber: test
