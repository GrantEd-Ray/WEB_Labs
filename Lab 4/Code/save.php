<?php
function redirectToHome(): void
{
    header('Location: /');

    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description']))
{
    redirectToHome();
}

$category = $_POST['category'];
$email = $_POST['email'];
$title = $_POST['title'];
$desc = $_POST['description'];

//$position = strripos($email, '@');
//$user = substr($email, 0, $position);

mkdir("categories/$category/$email");

$filePath = "categories/{$category}/{$email}/{$title}.txt";

if (false ===file_put_contents($filePath, $desc))
{
    throw new Exception('Something went wrong');
}
chmod($filePath, 0777);
redirectToHome();

