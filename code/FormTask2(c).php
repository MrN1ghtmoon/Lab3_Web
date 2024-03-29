<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $salary = $_POST["salary"];
    $PlaceOfWork = $_POST["PlaceOfWork"];

    $userData = [
        'name' => $name,
        'age' => $age,
        'salary' => $salary,
        'PlaceOfWork' => $PlaceOfWork
    ];

    $_SESSION['userData'] = $userData;

    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Task 2 (c)</title>
    </head>
    <body>
        <h2>Task 2 (c) Form. Sessions and Cookies</h2>
        <form method="post">
            Enter your Name:
            <input type="text" name="name"><br />
            Enter your Age:
            <input type="number" name="age"><br />
            Enter your Salary:
            <input type="text" name="salary"><br />
            Enter your Place Of Work:
            <input type="text" name="PlaceOfWork"><br />
            <input type="submit" value="Submit">
        </form>
        <a href = "index.php"><h2>Back</h2></a>
    </body>
</html>
