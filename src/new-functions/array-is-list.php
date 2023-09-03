<?php

// https://www.php.net/manual/ja/function.array-is-list.php

// リストとは、配列のキーが連続した数値 (0 から count($array)-1) である配列

var_dump(array_is_list([])); // true
var_dump(array_is_list(['apple', 2, 3])); // true
var_dump(array_is_list([0 => 'apple', 'orange'])); // true

var_dump(array_is_list([1 => 'apple', 'orange'])); // false
var_dump(array_is_list([1 => 'apple', 0 => 'orange'])); // false
var_dump(array_is_list([0 => 'apple', 'foo' => 'bar'])); // false
var_dump(array_is_list([0 => 'apple', 2 => 'bar'])); // false
