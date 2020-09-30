<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>var_dump</title>
    <link rel="stylesheet" href="../lesson1/style.css">
</head>
<body>
    <div class="container">
        <?php
            function exampleFunction($arg_1, $arg_2, /* ..., */ $arg_n)
            {
                echo "Example function.\n";
                return $retval;
            }

            exampleFunction(1,2,3);

        ?>
    </div>
    
</body>
</html>