<?php

class Foo
{
    public function test()
    {
        echo __METHOD__, PHP_EOL;
    }
}

class Bar
{
    public function __construct($foo = new Foo())
    {
        $foo->test();
    }
}

$bar = new Bar();

const FOO = new Foo();
FOO->test();
