<?php

namespace App\IntersectionTypes;

interface Foo
{
    public function foo();
}

interface Bar
{
    public function bar();
}

class FooBar implements Foo, Bar
{
    public function foo()
    {
        echo __METHOD__, PHP_EOL;
    }

    public function bar()
    {
        echo __METHOD__, PHP_EOL;
    }
}

// FooとBarの交差型
function test(Foo&Bar $obj)
{
    $obj->foo();
    $obj->bar();
}

$foobar = new FooBar();
test($foobar);
