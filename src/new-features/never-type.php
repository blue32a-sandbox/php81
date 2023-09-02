<?php

function throwException(): never
{
    throw new Exception('throw exception');
}

try {
    throwException();
} catch (Exception $e) {
    echo $e->getMessage(), PHP_EOL;
}

function sayHelloAndExit(): never
{
    echo 'Hello!', PHP_EOL;
    exit;
}

sayHelloAndExit();
