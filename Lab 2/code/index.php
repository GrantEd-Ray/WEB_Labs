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

//task 16 ---------------------------------------------------------------------------------------------------------------
echo "\n <br>TASK 16 \n <br>";

function increaseEnthusiasm(string $yourSentence) : string
{
    return $yourSentence . "!!!"; // Зачем ограничиваться одним знаком, если можно три?!
}

echo increaseEnthusiasm("АХАХАХАХАХАХАХАХАХАХ") . "\n <br>";

function repeatThreeTimes(string $mySentence) : string
{
    return $mySentence . $mySentence . $mySentence;
}

echo repeatThreeTimes("ПОВТОРИТЬ 3 РАЗА!! ") . "\n <br>";

echo increaseEnthusiasm(repeatThreeTimes('ТОПТЕЛЕ')) . "\n <br>";

function cut(string $ourSentence, int $numbers = 10)
{
    $sentence = "";
    for ($i = 0; $i < $numbers; $i++)
    {
        $sentence .= $ourSentence[$i];
    }
    return $sentence;
}
echo cut("Bugs will be everywhere.", 4) . "\n <br>";

$someRandomMas = [5, 458, -151, 1, 69, 0, 111111, -32, 360];
function recursion($mas, $index = 0)
{
    if ($index < count($mas))
    {
        echo $mas[$index] . " ";
        return recursion($mas, $index + 1);
    }
    echo "\n <br>";
}
recursion($someRandomMas);

function numSum($justNum)
{
    $res = array_sum(str_split($justNum));
    if ($res > 9)
    {
        return numSum($res);
    }
    else
    {
        return $res;
    }
}
echo numSum(88005553535) . "\n <br>";

//task 17 ---------------------------------------------------------------------------------------------------------------
echo "\n <br>TASK 17 \n <br>";

$tree = [];
for ($i = 0; $i < 5; $i++)
{
    $tree[] = str_repeat('x', $i + 1);
}
for ($i = 0; $i < count($tree); $i++)
{
    echo $tree[$i] . "\n <br>";
}

function arrayFill($value, $count)
{
    $newArray = [];
    for ($i = 0; $i < $count; $i++)
    {
        $newArray[] = $value;
    }
    return $newArray;
}
$someArray = arrayFill('x', 5);
for ($i = 0; $i < count($someArray); $i++)
{
    echo $someArray[$i] . " ";
}
echo "\n <br>";

$array2D = [[1, 2, 3], [4, 5], [6]];
$arrayNon2D = $array2D[0];
for ($i = 1; $i < count($array2D); $i++)
{
    $arrayNon2D = array_merge($arrayNon2D, $array2D[$i]);
}
foreach ($arrayNon2D as $value)
{
    echo "$value ";
}
echo "\n <br>";

$newArray2D = [];
for ($i = 0; $i < 3; $i++)
{
    $array1D = [];
    for ($j = 0; $j < 3; $j++)
    {
        $array1D[] = 3 * $i + $j + 1;
    }
    $newArray2D[] = $array1D;
}

foreach ($newArray2D as $array1D)
{
    foreach ($array1D as $value)
    {
        echo $value . " ";
    }
    echo "\n <br>";
}

$simpleArray = [2, 5, 3, 9];
$simpleArray[0] *= $simpleArray[1];
$simpleArray[2] *= $simpleArray[3];
$result = array_sum($simpleArray);
echo $result . "\n <br>";

$user = ['name' => 'Михаил', 'surname' => 'Зубенко', 'patronymic' => 'Петрович'];
echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'] . "\n <br>";

$date = ['year' => 2024, 'month' => 'March' , 'day' => 10];
echo $date['year'] . '-' . $date['month'] . '-' . $date['day'] . "\n <br>";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr) . "\n <br>";

echo end($arr) . " " . prev($arr) . "\n <br>";
