<html>
    <head>
        <title>Array</title>
    </head>
        
    <body>
        <?php
            $myArray = array(34, 39, 56, 67, 76, array('a'=>'apple', 'b'=>'banana', 'c'=>'coconut'));
                echo $myArray[5]['c'];
                echo "<p>there are {$myArray[1]} {$myArray[5]['b']} in the box.</p>";
                echo "<pre>";
                print_r($myArray);
                echo "</pre>";
        
         ?>
    </body>
</html>