<html>
    <head>
        <title>Array</title>
    </head>
        
    <body>
        <?php
            $myArray = array(2,3,7,8,34, 39, 56, 67,76);      
         ?>
         Count : <?php echo count($myArray); ?> <br />
         Max : <?php echo max($myArray);?><br />
         Min : <?php echo min($myArray);?><br />
         Sort: <?php sort($myArray); echo "<pre>"; print_r($myArray); echo "</pre>"; ?>
         Reverse Sort: <?php rsort($myArray); echo "<pre>"; print_r($myArray); echo "</pre>"; ?>
         Implode: <?php echo implode('*', $myArray);?>
         
         <?php
            $myEmails = 'izwebz@yahoo.com, admin@yahoo.com, support@izwebz.com';
            $split = explode(',', $myEmails);         
            echo "<pre>";
            print_r($split);
            echo "</pre>";
            
            $last = end($split);
            echo $last;
         ?>
         
    </body>
</html>