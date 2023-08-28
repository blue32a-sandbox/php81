<?php

// 引数を展開した後の名前付き引数

function foo (...$args) {
    var_dump($args);
}

// 引数を ... で展開した後に、名前付き引数を指定できる
foo(...[1, 2], hoge: 'hoge');

// Fatal error: Cannot use argument unpacking after named arguments
// foo(hoge: 'hoge', ...[1, 2]);
