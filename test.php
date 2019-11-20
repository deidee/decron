<?php

$content = file_get_contents('test.txt');
$counter = intval($content);
$counter++;
file_put_contents('test.txt', $counter);

echo $counter;
