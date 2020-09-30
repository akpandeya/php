<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variable Copy</title>
        <link rel="stylesheet" href="../lesson1/style.css">
    </head>
    <body>

        <div class="container">
            <?php 

                // Copying by value
                $name = "Maksim"; 
                $anotherName = $name;
                $name = "Avanindra";


                echo "Name: ". $name . "<br>";
                echo "Another Name: ". $anotherName . "<br> <br>";

                //Copying by reference

                $name = "Maksim"; 
                $anotherName = &$name;
                $name = "Avanindra";


                echo "Name: ". $name . "<br>";
                echo "Another Name: ". $anotherName . "<br>";



            ?> 
    
        </div>
        
    </body>
</html>