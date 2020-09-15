<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Search</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
        <form method="post">  
            Enter First Number:  
            <input type="number" name="number1" /><br> 
            Enter Second Number:  
            <input type="number" name="number2" /><br> 
            <input  type="submit" name="submit" value="Add">  
        </form>  
            <br><br>
        <?php      
        @$number1=$_POST['number1'];   
        @$number2=$_POST['number2'];   
        $number3= $number1 + $number2;   
        echo "Sum of $number1 and $number2 is = $number3";  
        ?>  
        </div>
    </body>
</html>
