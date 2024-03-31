<?php
$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a..b/', $str, $matches);
print_r($matches[0]);

$str = 'a1b2c3';
$res = preg_replace_callback('/[0-9]+/', function ($match)
{
    return $match[0] ** 3;
}, $str);
echo $res;
?>
