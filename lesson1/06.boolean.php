<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variable names</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <?php
                $bool1 = FALSE;
                $bool2 = TRUE;

                if ($bool1) {
                    echo "This will not be rendered in the webpage";
                }

                if ($bool2) {
                    echo "This will be rendered in the webpage";
                }

            ?>
        </div>
            
    </body>
</html>