<?php

class Test
{
    public readonly string $val;

    public function __construct(string $val)
    {
        $this->val = $val;
    }
}

$test = new Test('foo');
var_dump($test->val);

// Fatal error: Uncaught Error: Cannot modify readonly property Test::$val
// $test->val = 'bar';
