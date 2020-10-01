<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Get Numbers</title>
        <link rel="stylesheet" href="../lesson1/style.css">
    </head>
    <body>
        <div class="container">
            <form action="calculateSum.php" method="post">

            <?php

            for($i = 0; $i < $_POST['number']; $i++) {
                echo " <input type='number1' placeholder = 'Number $i' name = 'number$i'> <br>";
            }

            ?>
                <input type="submit" value="Add">
            </form>
        </div>

        <?php
        function calculateSum($array) {

            $sum = 0;
            
            foreach ($array as $number) {
                $sum += $number;
            }

            return $sum;
        }

        echo calculateSum($_POST);


?>
        
    </body>
</html>