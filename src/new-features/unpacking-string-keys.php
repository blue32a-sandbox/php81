<?php

// 文字列をキーとして持つ配列のアンパック

$arr1 = [1, 'a' => 'b'];
$arr2 = [...$arr1, 'c' => 'd'];
var_dump($arr2); // [0 => 1, "a" => "b", "c" => "d"]
