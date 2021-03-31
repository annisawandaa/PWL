<!DOCTYPE HTML>
<html>
    <body>
        <?php
        $gust_str = "Sunset di ujung pantai indah";
        //Menghitung dan menampilkan jumlah string pada kata
        echo str_word_count($gust_str);
        ?>
    </body>
<br>
<br> 
</html>

<!DOCTYPE HTML>
<html>
    <body>
        <?php
        $gust_str = "Saya lelah berikan ssemangat "; 
        //Menampilkan string yg di replace
        echo str_replace("semangat", "hadiah", $gust_str);
        ?>
    </body>
<br> <br>
</html>

<!DOCTYPE HTML>
<html>
    <body>
        <?php
        $gust_str = "Jangan terlalu overthinking ";
        //Menampilkan string yg di replace
        echo strrev($gust_str)
        ?>
    </body>
</html>