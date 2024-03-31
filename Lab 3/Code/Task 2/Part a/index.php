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
    <div id="a">
        <form method="post">
            <textarea name="text" rows="8"></textarea>
            <button type="submit" name="count" value="count">Подсчитать</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $text = $_POST['text'];
            $wordCount = str_word_count($text);
            $charCount = strlen($text);

            echo "<p>Слова: $wordCount</p>";
            echo "<p>Символы: $charCount</p>";
        }
        ?>
    </div>
</body>
</html>
