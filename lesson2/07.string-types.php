<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <link rel="stylesheet" href="../lesson1/style.css">
</head>
<body>

<?php 

    //String

    //Single Quoted
    $showSingleQuoted = TRUE;
    $a = 'A string variable';
    $single1 = 'You may type in one line';
    $single2 = 'You may type in one line


            or multiple lines';
    // If you want to escape any character use \
    $single3 = 'Student said "I\'ll learn PHP" '; // Outputs: Student said "I'll learn PHP"
    // If you want to print a backslash(\) any character use \\
    $single4 = 'You have delted the file C:\\newfile !'; // Outputs: You have delted the file C:\newfile

    $single5 = 'Value of variable a $a will not be shown'; //Single quote does not show a variable value
    $single6 = 'Backslash before symbol \n will not be skipped'; //Single quote does not escape any othe instance

    //Double Quoted
    //Anything which can be done in single quotes can also be done using double quotes
    $showDoubleQuoted = TRUE;

    $double1 = "<pre> This will expand: \n a newline </pre>"; //Skips the n but HTML cannot display a newline
    $double2 = "Value of variable a is: $a "; //Double displays the contenst of the variable
    $double3 = "Symbol \$a will  shown"; //Double quote escapes the value of variable if backslash

?> 
<div class="container">
    <?php
        
        if ($showSingleQuoted) {
            echo "<br><strong> Single Quoted String". ' </strong> <br>';
            echo $single1 . '<br>';
            echo $single2 . '<br>';
            echo $single3. '<br>';
            echo $single4. '<br>';
            echo $single5. '<br>';
            echo $single6. '<br>';

        }

        if ($showDoubleQuoted) {
            echo "<br><strong> Double Quoted String". ' </strong> <br>';
            echo $double1 . '<br>';
            echo $double2 . '<br>';
            echo $double3. '<br>';
            // echo $double4. '<br>';
            // echo $double5. '<br>';

        }
        
        

    ?>
</div>
    
</body>
</html>