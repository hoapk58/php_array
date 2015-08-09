<html>
    <head>
        <title>Numbers</title>
    </head>
        
    <body>
        <?php 
            $num = 3.14;
            echo round($num, 1)."<br/>";
            echo ceil($num)."<br/>";
            echo floor($num)."<br/>";
            echo rand()."<br/>";
            echo rand(1,100)."<br/>";
            
            $float = 30456;
            echo number_format($float, 2)."<br/>";

        ?>
        
        <?php
        // gan gia tri cho bien
        $so_luong = 30;
        $gia = 30.343;
        $thue = .05;
        
        // Tao function tinh tong
        
        function tinh_tong($so_luong, $gia, $thue = .05) {
            $tong_cong = $so_luong * $gia;
            //$tong_cong = $tong_cong + ($tong_cong * $thue);
            $tong_cong += ($tong_cong * $thue);
            return $tong_cong;
            
        }
        
        echo "<p>Ban mua tong so la:<strong> {$so_luong}</strong> voi gia cua moi qua la:<strong> {$gia}</strong>
         voi tong so tien phai tra la:<strong>".tinh_tong($so_luong, $gia).  " </strong> da bao gom
        thue GTGT la:<strong> {$thue}</strong></p>";
        $total = tinh_tong($so_luong, $gia);
        if($total) {
            echo "Yes, co tra lai gia tri";
        }
        ?>
        
        
    </body>
</html>