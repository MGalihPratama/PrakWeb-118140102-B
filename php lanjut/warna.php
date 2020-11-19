<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        font{
            border: solid ;
            padding: 12px 20px;
            text-align: center;
            
        }
        input[type=text], select {
            text-align: center;
            width: 35%;
            padding: 12px 20px;
            margin: 8px 0;s
            border: 1px solid #ccc;
            border-radius: 4px;
            
            }
        input[type=submit]:hover {
            background-color: red;
            } 
        input[type=submit] {
            
            width: 35%;
            background-color: pink;
            color: black;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }
    </style>
</head>
<body>
<form method="post">
        <input type="text" name="karakter" id="karakter">
        <select name="warna" id="warna">
            <option value="none">none</option>
            <option value="hijau">Hijau</option>
            <option value="hitam">Hitam</option>
            <option value="kuning">kuning</option>
        </select>
		<input type="submit" name="hitung" value="Gas Keun">
    </form>
    <br>
    

    <?php
    function bar($color="red"){
        $nama = $_POST['karakter'];
        $panjang=strlen($nama);
        $spasi = substr_count($nama, ' ');
        $total = $panjang - $spasi;
        
        if($total <= 10) {
            $harga = $total*300;
        }else if ($total > 10 && $total <=20){
            $harga = $total*500;
        }else{
            $harga = $total*700; 
        }
        echo '<font color="'.$color.'"> '.$nama.' </font><br><br><br>';   
        echo '<font>Panjang karakter '.$total.'.  Harga = '.$harga.'</font>' ; 
        
       
    }
    error_reporting(0);
    if(isset($_POST['hitung'])){
        if($_POST['warna']=="hitam"){
            bar(black);
        }else if($_POST['warna']=="hijau"){
            bar(green);   
        }else if($_POST['warna']=="kuning"){
            bar(yellow);    
        }else{
            bar(red);
        }
    }
    ?>
</body>
</html>