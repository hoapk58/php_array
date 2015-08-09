<html>
    <head>
        <title>Start Up</title>
    </head>
        
    <body>
        <?php 
            $file = $_SERVER['SCRIPT_FILENAME'];
            $user = $_SERVER['HTTP_USER_AGENT'];
            $server = $_SERVER['SERVER_SOFTWARE'];
            
            // In ra file dang xem
            echo "Ban dang xem file: {$file}" . "<br/>";
            // in ra thong tin cua trinh duyet nguoi dung
            echo "Ban dang dung: {$user}" . "<br/>";
            // in ra thong tin cuar server
            echo "Thong tin server cuar ban: {$server}" . "<br/>";
        ?>
    </body>
</html>