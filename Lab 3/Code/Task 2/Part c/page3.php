<?php
session_start();
if (false === isset($_POST['name'], $_POST['surname'], $_POST['age'], $_POST['income']))
{
    header('Location: /');
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$_SESSION['data'] = [$_POST['name'], $_POST['surname'], $_POST['age'], $_POST['income']];
echo "<ui>";

    foreach ($_SESSION['data'] as $item)
    {
        echo "<li>$item</li>";
    }
    echo "<ui>";
?>
</body>
</html>
