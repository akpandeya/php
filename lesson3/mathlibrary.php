<?php
        function calculateSum($x, $y) {

            $array = func_get_args(); //Returns all the aarguments passed to
            
            $sum = 0;
            
            foreach ($array as $number) {
                $sum += $number;
            }

            return $sum;
        }


        function calculateAverage($x, $y) {

            $array = func_get_args(); //Returns all the aarguments passed to
            $number_of_arguments = func_num_args();
            
            $sum = 0;
            
            foreach ($array as $number) {
                $sum += $number;
            }

            return $sum/$number_of_arguments;
        }
       
    ?>