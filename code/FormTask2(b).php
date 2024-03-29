<?php
session_start();
if ('POST' === $_SERVER['REQUEST_METHOD']) {
    if (isset($_POST['surname'])) {
        $_SESSION['surname'] = $_POST['surname'];
    }
    if (isset($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
    }
    if (isset($_POST['age'])) {
        $_SESSION['age'] = $_POST['age'];
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 2(b)</title>
</head>
<body>
    <h2>Task 2 (b) Form. Sessions and Cookies</h2>
    <?php
    if (isset($_SESSION['surname'], $_SESSION['name'], $_SESSION['age'])) {
        echo 'Surname: ' . $_SESSION['surname'];
        echo '<br />';
        echo 'Name: ' . $_SESSION['name'];
        echo '<br />';
        echo 'Age: ' . $_SESSION['age'];
        echo '<br />';
    }
    ?>
    <form method="post">
        Enter your surname:
        <input type = "text" name = "surname"><br />

        Enter your name:
        <input type = "text" name = "name"><br />

        Enter your age:
        <input type = "number" name = "age"><br />
        <input type = "submit" value = "Submit"><br />
    <a href = "index.php"><h2>Back</h2></a>
</body>
</html>
