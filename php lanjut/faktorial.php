<!DOCTYPE html>
<html lang="en">
<head>
    <title>Faktorial</title>
    <style>
       
        td{
            text-align: center;
            size: 40px;
            padding: 6px;
            background-color:cyan;
            }
        table{
            width: 71%;
            }

        input[type=submit]:hover {
            background-color: red;
            } 
        input[type=text] {
            text-align: center;
            width: 35%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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
    <form action="" method="POST">
        <input type="text" name="no" id="no"> 
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $count=1;
            $batas = $_POST['no'];
            for($i=1; $i<= $batas; $i++){
                $count=$count*$i;
            }
            echo "<table border =1>
                <tr>
                <td>$count</td>
                </tr>
                </table>";
        }
    ?>
</body>
</html>