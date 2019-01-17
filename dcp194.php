<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testcase);
for($p = 1; $p <= $testcase; $p++)
{
    $str = trim(fgets(STDIN));
    $l = strlen($str);
    $a = '88';
    if ($l == 11)
        $c = $a.$str;
    else
        $c = $str;
    fprintf(STDOUT,$c);
    
}