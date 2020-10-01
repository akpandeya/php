<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Results</title>
        <link rel="stylesheet" href="../lesson1/style.css">
    </head>
<body>
    <?php
    echo "<pre>";
        // echo "GET METHOD <br>";
        // print_r($_GET);

        // echo "<br>POST METHOD <br>";
        // print_r($_POST);

        $number1 = $_POST['number1'];
        $number2 = $_POST['n2'];

        $sum = $_POST['number1'] + $_POST['n2'];

        echo "The sum of " . $number1 . " and " . $number2 . " is " . $sum;
        echo "</pre>";
    ?>
    
</body>
</html>