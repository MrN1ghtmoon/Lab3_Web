<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 2</title>
</head>
<body>
    <h2>Task 2 (a) Form. Sessions and Cookies</h2>
    <?php
    if(isset($_POST['submit'])) {
        $text = $_POST['text'];

        // Подсчет количества слов
        $wordCount = str_word_count($text);

        // Подсчет количества символов
        $charCount = strlen($text);
    }
    echo "Number of words: " . $wordCount . "<br />";
    echo "Number of characters: " . $charCount;
    ?>

    <form method="POST">
        <textarea name="text" rows="5" cols ="40"></textarea>
        <br />
        <input type="submit" name="submit" value="Calculate">
    </form>

    <a href = "index.php"><h2>Back</h2></a>
</body>
</html>


