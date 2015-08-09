<html>
    <head>
        <title>Start Up</title>
    </head>
        
    <body>
        <?php
            if(isset($_POST['submit'])) {
                echo "<p><strong>Nguyên bản:</strong></p>";
                echo "<p><strong>htmlspecialchars()</strong></p>";
                echo htmlspecialchars($_POST['text']);
                echo "<p><strong>htmlentities()</strong></p>";
                echo htmlentities($_POST['text']);
                echo "<p><strong>strip_tags()</strong></p>";
                echo strip_tags($_POST['text']);
            }
        ?>
        <form action='' method='post'>
            <lable for'try_me'>Gõ vào mã HTML</lable>
            <textarea cols='20' rows='20' name='text'></textarea>
            <input type='submit' name='submit' value='Try It' />
        </form>
    </body>
</html>