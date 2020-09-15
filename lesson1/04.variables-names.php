<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variable names</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php 

            $name = "Maksim"; //String
            $age = 18; // Integer
            $bill  = 20.5; //Float
            $show = TRUE; //Boolean 
            //Validity of Variable Name


            // $4site = 'not yet';     // invalid; starts with a number
            $_4site = 'not yet';    // valid; starts with an underscore
            $täyte = 'mansikka';    // valid; 'ä' is (Extended) ASCII 228.
            


        ?> 
        <div class="container">
            <?php
                echo "<strong> Details". ' </strong> <br>';

                if ($show) {
                    echo "Name: " .$name . '<br>';
                    echo "Age: ". $age . '<br>';
                    echo "Bill: ". $bill. '<br>';

                }

                
            ?>
        </div>
            
    </body>
</html>