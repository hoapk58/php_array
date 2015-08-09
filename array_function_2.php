<html>
    <head>
        <title>Array</title>
    </head>
        
    <body>
        <pre>
        <?php
            $myArray = array('html', 'css', 'wordpress', 'jquery', 'php', 'javascript'); 

            $array = array('photoshop', 'illustrator',  'corelDraw', 'thinkpad');

            $rand = array_rand($myArray);

            $viet_hoa = array_map('ucfirst', $array);
            foreach ($viet_hoa as $hoa) {
                echo "<li>{$hoa}</li>";
            }

            //shuffle($myArray);
            if(in_array('csss', $myArray)) {
                echo "yes, it is in array";
            }

            //$merged = array_merge($myArray, $array);

            //$myArray[]  = 'ajax';

            //array_splice($myArray, 3, 1, 'oop');

            //unset($myArray[5]);

            //array_splice($myArray,3, 2);

            //print_r($myArray[$rand]);

         ?>
         </pre>
    </body>
</html>