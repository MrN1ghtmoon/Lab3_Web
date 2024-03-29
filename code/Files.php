<doctype html>
    <html lang="en">
    <head>
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Task 3</title>
    </head>
    <body>
    <h1>Task 3 Files</h1>

    <form action="Save.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required><br />
        <label for="title">Title</label>
        <input type="text" name="title" required>
        <br />
        <label for="categories">Categories</label>
        <select name="categories" required>
            <option value="cars">Cars</option>
            <option value="music">Music</option>
            <option value="TypesOfSport">Types of Sport</option>
        </select>
        <br />

        <label for="description">Description:</label><br>
        <textarea name="text" rows="20" cols="48" required></textarea><br>

        <button type="submit">Add</button>
    </form>
    <a href="index.php"><h2>Back</h2></a>
    </body>
    </html>