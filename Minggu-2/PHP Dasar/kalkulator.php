<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calculator</title> 
    </head>
<body>

    <form method="GET">
        <label> Bilangan 1 = </label> 
        <input type="text" name="b1">
        <br>
        <label> Bilangan 2 = </label>      
        <input type="text" name="b2">
        <br>
        <label>hitung</label>
        <input type="submit" name="submit" value="=">
    </form>
    <br>
    <?php
        
        if(isset($_GET['submit'])){
            $x= $_GET['b1'];
            $y= $_GET['b2'];
            echo "Bilangan 1 = " .$x;
            echo "<br>";
            echo "Bilangan 2 = " .$y;
            echo "<br>";
            echo "<br>";
            echo "Berikut merupakan hasil dari setiap operasi";
            echo "<br>";
            echo "<br>";
            echo "PEJUMLAHAN ";
            echo "<br>";
            echo "Operator : + ";
            echo "<br>";
            echo "Hasil : ";
            $tambah = $x + $y;
            echo $tambah;
            echo "<br>";
            echo "<br>";
            echo "PENGURANGAN";
            echo "<br>";
            echo "Operator : - ";
            echo "<br>";
            echo "Hasil : ";
            $kurang = $x - $y;
            echo $kurang;
            echo "<br>";
            echo "<br>";
            echo "PERKALIAN";
            echo "<br>";
            echo "Operator : * ";
            echo "<br>";
            echo "Hasil : ";
            $kali = $x * $y;
            echo $kali;
            echo "<br>";
            echo "<br>";
            echo "PEMBAGIAN";
            echo "<br>";
            echo "Operator : / ";
            echo "<br>";
            echo "Hasil : ";
            $bagi = $x / $y;
            echo $bagi;
            echo "<br>";
            echo "<br>";
            echo "MODULUS";
            echo "<br>";
            echo "Operator : % ";
            echo "<br>";
            echo "Hasil : ";
            $mod = $x % $y;
            echo $mod;
        }
    ?>
    </body> 
</html>