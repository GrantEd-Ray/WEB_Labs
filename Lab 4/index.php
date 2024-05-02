<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avito</title>
</head>
<body>
    <div id="form">
        <form action="save.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" required>

            <label for="category">Category</label>
            <select name="category" required>
                <?php
                    $categories = scandir('categories');

                    foreach ($categories as $category)
                    {
                        if (is_dir("categories/$category") && $category !== '.' && $category !== '..')
                        {
                            echo "<option value=$category> $category </option>>";
                        }
                    }
                ?>
            </select>

            <label for="title">Title</label>
            <input type="text" name="title" required>

            <label for="description">Description</label>
            <textarea rows="3" name="description"></textarea>

            <input type="submit" value="save">
        </form>
    </div>
    <div id="table">

        <table>
            <thead>
            <th>Category</th>
            <th>Email</th>
            <th>Title</th>
            <th>Description</th>
            </thead>
            <tbody>
                <?php
                    $categories = scandir('categories');
                    foreach ($categories as $category)
                    {
                        if (is_dir("categories/$category") && $category !== '.' && $category !== '..')
                        {
                            $emails = scandir("categories/$category");
                            foreach ($emails as $email)
                            {
                                if (is_dir("categories/$category/$email") && $email !== '.' && $email !== '..')
                                {
                                    $titles = scandir("categories/$category/$email");
                                    foreach ($titles as $title)
                                    {
                                        if ($title !== '.' && $title !== '..')
                                        {
                                            $description = file_get_contents("categories/$category/$email/$title");

                                            echo '<tr>';
                                            echo "<td>$category</td>";
                                            echo "<td>$email</td>";
                                            echo "<td>".substr($title, 0, strlen($title) - 4) ."</td>";
                                            echo "<td>$description</td>";
                                            echo '</tr>';
                                        }


                                    }
                                }
                            }
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
