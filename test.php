<?php

$content = file_get_contents('decron/test.txt');
$counter = intval($content);
$counter++;
file_put_contents('decron/test.txt', $counter);

echo $counter;
