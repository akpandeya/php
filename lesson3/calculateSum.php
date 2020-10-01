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