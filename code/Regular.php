<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Task 1</title>
    </head>
    <body>
        <h2>Task 1 (a). Regular expressions</h2>
        <?php
        $str = 'ahb acb aeb aeeb adcb axeb';
        preg_match_all('/a..b/', $str, $matches);
        foreach ($matches[0] as $match)
        {
            echo $match."<br />";
        }
        ?>
        <h2>Task 1 (b). Regular expressions</h2>
        <?php
        $string = 'a1b2c3d4e5';
        $newString = preg_replace_callback(
            '/(\d+)/',
            function($matches) {
                return $matches[0] ** 3;
            },
            $string
        );
        echo $newString."<br />";
        ?>
        <a href = "index.php"><h2>Back</h2></a>
    </body>
</html>