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
            echo "<pre>"; //HTML tag for Preformatted string
            $nameArray = ["Maksim", "Ilya", "Avanindra"];

            // var_dump($nameArray);
            // print_r($nameArray);
            
            // print_r("<br>");


            // $menuArray = array ( "0" => "Home", // Change 0 to become a string
            //                      1 => "Departments", //Change it out of order
            //                      2 => "Academics",
            //                      3 => "Contact",
            //                     );
            
            // print_r("number of emelement in the array menuArray is " . count($menuArray) . "<br>");

            // print_r($menuArray);
            
            

            This:
            $a = array( 'color' => 'red',
                        'taste' => 'sweet',
                        'shape' => 'round',
                        'name'  => 'apple',
                        4        // key will be 0
                     );

           

            // $b = array('a', 'b', 'c');
            // print_r($a);
            // print_r($b);

            // // // . . .is completely equivalent with this:
            // $a = array();
            // $a['color'] = 'red';
            // $a['taste'] = 'sweet';
            // $a['shape'] = 'round';
            // $a['name']  = 'apple';
            // $a[]        = 4;        // key will be 0

            // $b = array();
            // $b[] = 'a';
            // $b[] = 'b';
            // $b[] = 'c';

            // print_r($a);
            // print_r($b);

            // After the above code is executed, $a will be the array
            // array('color' => 'red', 'taste' => 'sweet', 'shape' => 'round', 
            // 'name' => 'apple', 0 => 4), and $b will be the array 
            // array(0 => 'a', 1 => 'b', 2 => 'c'), or simply array('a', 'b', 'c').

            // echo("<br>");

            $array = array(
                1    => "a",
                "1"  => "b",
                1.5  => "c",
                true => "d",
            );
            print_r($array);

            echo "</pre>";

        ?>
    </div>
    
</body>
</html>