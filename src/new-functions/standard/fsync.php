<?php

$file = 'test_fsync.txt';

$stream = fopen($file, 'w');
fwrite($stream, 'test data');
fwrite($stream, "\r\n");
fwrite($stream, 'additional data');

fsync($stream);

fclose($stream);
