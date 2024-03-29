<?php //Task 2(c)
session_start();

// Получить сохраненные данные из переменной сессии
$userData = $_SESSION["userData"];

// Проверить, что данные существуют
if ($userData) {
    // Вывести каждый элемент массива в своем теге <li>
    echo "<ul>";
    foreach ($userData as $data) {
        echo "<li>" . $data . "</li>";
    }
    echo "</ul>";
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
    <a href="Regular.php"><h2>Regular</h2></a>
    <a href="Form.php"><h2>Form</h2></a>
    <a href="FormTask2(b).php"><h2>FormTask2(b)</h2></a>
    <a href="FormTask2(c).php"><h2>FormTask2(c)</h2></a>
    <a href="FormTask2(c).php"><h2>Files</h2></a>
</body>
</html>
