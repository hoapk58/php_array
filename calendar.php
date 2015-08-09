<html>
    <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>PHP Calendar</title>
    </head>
        
    <body>
            <?php
                $thang = array(
                            1 => "Tháng 1", 
                            2 => "Tháng 2", 
                            3 => "Tháng 3", 
                            4 => "Tháng 4", 
                            5 => "Tháng 5", 
                            6 => "Tháng 6", 
                            7 => "Tháng 7",
                            8 => "Tháng 8", 
                            9 => "Tháng 9", 
                            10 => "Tháng 10", 
                            11 => "Tháng 11", 
                            12 => "Tháng 12"
                            );
                $ngay = range(1,31);
                $nam = range(2012, 2030);
            ?>
    <form action="" method="post">
        <select>
            <option>Chọn ngày</option>
            <?php
                foreach($ngay as $k => $v) {
                    echo "<option value='{$k}'>".$v."</option>";
                }
                
            ?>
        </select>
        
        <select>
            <option>Chọn thang</option>
            <?php
                foreach($thang as $k => $v) {
                    echo "<option value='{$k}'>".$v."</option>";
                }
                
            ?>
        </select>
        
        <select>
            <option>Chọn nam</option>
            <?php
                foreach($nam as $k => $v) {
                    echo "<option value='{$k}'>".$v."</option>";
                }
                
            ?>
        </select>
  
    </form>
        
    </body>
</html>