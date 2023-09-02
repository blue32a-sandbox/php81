<?php

class Foo
{
    public const X = 'foo';
    final public const Y = 'foo';
}

class Bar extends Foo
{
    public const X = 'bar';
    public const Y = 'bar';
}

// Fatal error: Bar::Y cannot override final constant Foo::Y
