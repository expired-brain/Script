<?php
// $data = "bal bal"
// file_put_contents('title.txt', $data);
$startcrime = shell_exec('python run-crime.py');
$output = shell_exec('ps -ef');
echo $output;