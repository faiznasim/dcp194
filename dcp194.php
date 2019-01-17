<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testcase);
for($p = 1; $p <= $testcase; $p++)
{
    $str = fgets(STDIN);
    $l = strlen($str);
    $a = "88";
    if ($l == 11)
        $c = $a.$str;
    else
        $c = $str;
    if($c[4] == "1")
        fprintf(STDOUT, "%s Citycell\n", $c);
    else if($c[4] == "5")
        fprintf(STDOUT, "%s Teletalk\n", $c);
    else if($c[4] == "6")
        fprintf(STDOUT, "%s Airtel\n", $c);
    else if($c[4] == "7")
        fprintf(STDOUT, "%s Grameenphone\n", $c);
    else if($c[4] == "8")
        fprintf(STDOUT, "%s Robi\n", $c);
    else if ($c[4] == "9")
        fprintf(STDOUT, "%s Banglalink\n", $c);
    
}