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
        <select class="operasi" name="operasi">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">x</option>
				<option value="/">/</option>
                <option value="%">%</option>
		</select>
        <label>hitung</label>
        <input type="submit" name="submit" value="=">
    </form>
    <br>
    <?php
        
        if(isset($_GET['submit'])){
            $x= $_GET['b1'];
            $y= $_GET['b2'];
            $z= $_GET['operasi'];
            echo "Bilangan 1 = " .$x;
            echo "<br>";
            echo "Bilangan 2 = " .$y;
            echo "<br>";
            echo "<br>";
            echo "Berikut merupakan hasil dari setiap operasi";
            echo "<br>";
            echo "<br>";

            if($z == '+'){
                echo "PEJUMLAHAN ";
                echo "<br>";
                echo "Operator : + ";
                echo "<br>";
                echo "Hasil : ";
                $tambah = $x + $y;
                echo $tambah;
            }else if($z == '-'){
                echo "PENGURANGAN";
                echo "<br>";
                echo "Operator : - ";
                echo "<br>";
                echo "Hasil : ";
                $kurang = $x - $y;
                echo $kurang;
            }else if($z == '*'){
                echo "PERKALIAN";
                echo "<br>";
                echo "Operator : * ";
                echo "<br>";
                echo "Hasil : ";
                $kali = $x * $y;
                echo $kali;
            }else if($z == '/'){
                echo "PEMBAGIAN";
                echo "<br>";
                echo "Operator : / ";
                echo "<br>";
                echo "Hasil : ";
                $bagi = $x / $y;
                echo $bagi;
            }else if($z == '%'){
                echo "MODULUS";
                echo "<br>";
                echo "Operator : % ";
                echo "<br>";
                echo "Hasil : ";
                $mod = $x % $y;
                echo $mod;
            }
        }
    ?>
    </body> 
</html>