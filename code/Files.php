<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Task 3</title>
    </head>
    <body>
        <h2>Task 3. Files</h2>
        <form action="Save.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" required><br />
            <label for="category">Categories</label>
            <select name="category" required>
                <?php //создаём выпадающий список категорий
                $categories = array_filter(glob("./categories/*"), 'is_dir');
                foreach ($categories as $category) {
                    $name = basename($category);
                    echo "<option value=\"$name\">$name</option>";
                }
                ?>
            </select>
            <br />
            <label for="title">Title</label>
            <input type="text" name="title" required>
            <br />
            <label for="description">Description:</label><br />
            <textarea rows="5" cols = "32" name="description"></textarea>
            <br />
            <input type="submit" value="Add">
        </form>
        <div id="table">
            <table>
                <thead>
                <th>Email</th>
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
                </thead>
                <tbody>
                    <?php
                    $files = glob("categories/*/*.txt");
                    foreach ($files as $file) {
                        $data = file($file);
                        $categories = basename(dirname($file));
                        $title = basename($file, ".txt");
                        $email = $data[0];
                        $description = $data[1];
                        echo "<tr>
                            <td>$email</td><td>$categories</td>
                            <td>$title</td><td>$description</td>
                            </tr>";
                    }
                    ?>
                    </tbody>
            </table>
        </div>
        <a href="index.php"><h2>Back</h2></a>
    </body>
</html>