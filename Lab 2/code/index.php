<?php
// task 1 ---------------------------------------------------------------------------------------------------------------
echo "TASK 1 \n <br>";

$very_bad_unclear_name = "15 chicken wings";

$order = & $very_bad_unclear_name;
$order.= ", only with two bones";

echo "\nYour order is: $very_bad_unclear_name";
echo "\n <br>";
