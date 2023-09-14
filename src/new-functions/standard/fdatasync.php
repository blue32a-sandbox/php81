<?php

$file = 'test_fdatasync.txt';

$stream = fopen($file, 'w');

fwrite($stream, 'test data');
fwrite($stream, "\r\n");
fwrite($stream, 'additional data');

fdatasync($stream);

fclose($stream);
