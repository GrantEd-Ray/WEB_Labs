<?php
// task 1 ---------------------------------------------------------------------------------------------------------------
echo "TASK 1 \n <br>";

$very_bad_unclear_name = "15 chicken wings";

$order = & $very_bad_unclear_name;
$order.= ", only with two bones";

echo "\nYour order is: $very_bad_unclear_name";
echo "\n <br>";

//task 2 ----------------------------------------------------------------------------------------------------------------
echo "\n <br>TASK 2 \n <br>";

$itJustWorks = 76;
echo $itJustWorks . "\n <br>";

$halfLife = 3;
echo $halfLife . "\n <br>";

$someFloat = 7.052;
echo "$someFloat\n <br>";

$mods = -64;
echo $itJustWorks + $mods;
echo "\n <br>";

$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month;
echo "\n <br>";

//task 11 ---------------------------------------------------------------------------------------------------------------
echo "\n <br>TASK 11 \n <br>";

$num_languages = 4;
$months = 11;
$days = $months * 16;

$days_per_language = $days / $num_languages;

echo "$days_per_language\n <br>";

//task 12 ---------------------------------------------------------------------------------------------------------------
echo "\n <br>TASK 12 \n <br>";

echo 8 ** 2;
echo "\n <br>";

//task 13 ---------------------------------------------------------------------------------------------------------------
echo "\n <br>TASK 13 \n <br>";

$my_num = 17;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
echo "\n <br>";

//task 14 ---------------------------------------------------------------------------------------------------------------
echo "\n <br>TASK 14 \n <br>";

$a = 10;
$b = 3;
echo ($a % $b) . "\n <br>";

if ($a % $b == 0)
{
    echo "Делится\n <br>";
} else
{
    echo 'Делится с остатком: ' . ($a % $b) . "\n <br>";
}

$st = pow(2, 10);
echo $st . "\n <br>";

echo sqrt(245) . "\n <br>";

$mas = [4, 2, 5, 19, 13, 0, 10];
$res = 0;
foreach ($mas as $value)
{
    $res += $value;
}
echo sqrt($res) . "\n <br>";

echo round(sqrt(379)) . "\n <br>";
echo round(sqrt(379), 1) . "\n <br>";
echo round(sqrt(379), 2) . "\n <br>";

$mas1 = ['floor' => floor(sqrt(587)), 'ceil' => ceil(sqrt(587))];
echo $mas1['ceil'] . ' ' . $mas1['floor'] . "\n <br>";

$mas2 = [4, -2, 5, 19, -130, 0, 10];
echo min($mas2) . "\n <br>";
echo max($mas2) . "\n <br>";

echo random_int(1, 100) . "\n <br>";

$randomMas = [];
while (count($randomMas) < 10)
{
    $randomMas[] = random_int(1, 1000);
}

foreach ($randomMas as $value)
{
    echo $value . " ";
}
echo "\n <br>";

for ($count = 0; $count < 3; $count++)
{
    $a = random_int(-50, 50);
    $b = random_int(-50, 50);
    echo $a . ' - ' . $b . ' = ' . (abs($a - $b)) . "\n <br>";
}

$mas3 = [5, -2, 46, -15, 0, -8, 100];
foreach($mas3 as &$masValue)
{
    $masValue = abs($masValue);
}
unset($masValue);

foreach($mas3 as $masValue)
{
    echo $masValue . ' ';
}
echo "\n <br>";

$thisNum = 86;
$divs = [1, $thisNum];
for ($i = 2; $i < ceil(sqrt($thisNum)) + 1; $i++)
{
    if ($thisNum % $i == 0)
    {
        array_push($divs, $i, $thisNum / $i);
    }
}

foreach($divs as $Value)
{
    echo $Value . ' ';
}
echo "\n <br>";

$someMas = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$index = 0;

while ($sum <= 10)
{
    $sum += $someMas[$index];
    $index++;
}
echo $index . "\n <br>";

//task 15 ---------------------------------------------------------------------------------------------------------------
echo "\n <br> TASK 15 \n <br>";

function printStringReturnNumber()
{
    echo "This function is useless\n <br>";
    return 26;
}

$my_num = printStringReturnNumber();

echo $my_num . "\n <br>";
