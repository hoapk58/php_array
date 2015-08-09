<html>
    <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Strings Functions</title>
    </head>
        
    <body>
        <?php 
             $string1 = "nhan sắc có hạn";
             $string2 = " thủ đoạn vô biên";
             $string3 = $string1;
             $string3 .= $string2; 
             echo $string3;
        ?>
        
        <p><strong>String Length: </strong><?php echo strlen($string1); ?></p>
        <p><strong>String Uppercase: </strong><?php echo strtoupper($string2); ?></p>
        <p><strong>String lowercase: </strong><?php echo strtolower($string2); ?></p>
        <p><strong>String chữ đầu: </strong><?php echo ucfirst($string1); ?></p>
        <p><strong>String tất cả chữ đầu: </strong><?php echo ucwords($string1); ?></p>
        <p><strong>String thay thế: </strong><?php echo str_replace('biên', 'song', $string3); ?></p>
        
        
    </body>
</html>