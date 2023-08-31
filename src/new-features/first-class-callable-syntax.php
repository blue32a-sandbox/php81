<?php

// https://www.php.net/manual/ja/functions.first_class_callable_syntax.php

class Foo
{
    public function method()
    {
        echo __METHOD__, PHP_EOL;
    }
    public static function staticmethod()
    {
        echo __METHOD__, PHP_EOL;
    }
    public function __invoke()
    {
        echo __METHOD__, PHP_EOL;
    }
}

$foo = new Foo();
$classStr = 'Foo';
$methodStr = 'method';
$staticmethodStr = 'staticmethod';

$f1 = strlen(...);
var_dump($f1('Hello'));

$f2 = $foo(...);
$f2();

$f3 = $foo->method(...);
$f3();

$f4 = $foo->$methodStr(...);
$f4();

$f5 = Foo::staticmethod(...);
$f5();

$f6 = $classStr::$staticmethodStr(...);
$f6();

$f7 = 'strlen'(...);
var_dump($f7('Hello'));

$f8 = [$foo, 'method'](...);
$f8();

$f9 = [Foo::class, 'staticmethod'](...);
$f9();
