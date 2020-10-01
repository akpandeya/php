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
        function printKeyValue($array) {

            
            foreach ($array as $key => $value) {
                echo "$key : $value <br>";
            }
        }

        $personal_details = array("Name" => "Avanindra", "Occupation" => "Researcher", "Age" => 29, "Country" => "India");

        printKeyValue($personal_details);
    ?>
    
</body>
</html>