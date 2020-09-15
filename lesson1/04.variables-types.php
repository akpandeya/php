<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
    $name = "Maksim"; //String
    $age = 18; // Integer
    $bill  = 20.5; //Float
    $show = TRUE; //Boolean 

    //String
    //Single Quoted
    $showSingleQuoted = TRUE;
    $single1 = 'You may type in one line';
    $single2 = 'You may type in one line
            or multiple lines';
    // If you want to escape any character use \
    $single3 = 'Student said "I\'ll learn PHP" '; // Outputs: Student said "I\'ll learn PHP
    // If you want to print a backlash(\) any character use \\
    $single4 = 'You have delted the file C:\\newfile !'; // Outputs: You have delted the file C:\newfile

    $single5 = 'This will not expand: \n a newline'; //Single quote does not escape any othe instance

    //Double Quoted
    $showDoubleQuoted = TRUE;
    $double1 = "I have to pay you \$Five"; //Example of New Line
    $double2 = "This will expand: \r a newline";





    //Integer
    $a = 1234; // decimal number
    $a = 0123; // octal number (equivalent to 83 decimal)
    $a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
    $a = 0b11111111; // binary number (equivalent to 255 decimal)
    // $a = 1_234_567; // decimal number (as of PHP 7.4.0)


    //Float
    $a = 1.234; 
    $b = 1.2e3; 
    $c = 7E-10;
    // $d = 1_234.567; // as of PHP 7.4.0; does not work in previous versions


    //Boolean

?> 
<div class="container">
    <?php
        echo "<strong> Details". ' </strong> <br>';

        if ($show) {
            echo "Name: " .$name . '<br>';
            echo "Age: ". $age . '<br>';
            echo "Bill: ". $bill. '<br>';

        }

        if ($showSingleQuoted) {
            echo "<br><strong> Single Quoted String". ' </strong> <br>';
            echo $single1 . '<br>';
            echo $single2 . '<br>';
            echo $single3. '<br>';
            echo $single4. '<br>';
            echo $single5. '<br>';

        }

        if ($showDoubleQuoted) {
            echo "<br><strong> Double Quoted String". ' </strong> <br>';
            echo $double1 . '<br>';
            echo $double2 . '<br>';
            // echo $double3. '<br>';
            // echo $double4. '<br>';
            // echo $double5. '<br>';

        }
        
        

    ?>
</div>
    
</body>
</html>