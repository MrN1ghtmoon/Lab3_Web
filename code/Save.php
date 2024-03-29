<?php

$category = $_POST['category'];
$title = $_POST['title'];
$email = $_POST['email'];
$desc = $_POST['description'];

$filePath = "categories/{$category}/{$title}.txt";

if (false === file_put_contents($filePath, "$email\n$desc")) {
    throw new Exception('Something went wrong.');
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Save</title>
    </head>
    <body>
    <a href="index.php"><h2>Back</h2></a>
    </body>
</html>