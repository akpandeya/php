<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sum</title>
        <link rel="stylesheet" href="../lesson1/style.css">
    </head>
<body>
    <?php
   
        function calculateSum() {
            
            $array = func_get_args(); //Returns all the aarguments passed to
            // $number = func_num_args();

            // print_r($number);
            // $number_of_arguments = func_num_args();

            $sum = 0;
            
            foreach ($array as $number) {
                $sum += $number;
            }

            return $sum;
        }
        //How to require the number of paramenters

        echo calculateSum(1,2,3,4,5,34, 35);
    ?>
    
</body>
</html>