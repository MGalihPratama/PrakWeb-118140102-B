<?php 
include "koneksi.php";

    
    if(isset($_POST['cariData'])!=""){
        $cari= $_POST['cari'];
          
        if ($data = $mysqli->query("SELECT * FROM mahasiswa WHERE nama LIKE '".$cari."'")) {
            echo "<table border=1>";
            echo "<tr>";
                echo "<td>NRP</td>";
                echo "<td>Nama</td>";
                echo "<td>Alamat</td>";
                echo "<td>ID Jurusan</td>";
                echo "<td colspan=2>Aksi</td>";
            echo "</tr>";
        }
        if(mysqli_num_rows($data = $mysqli->query("SELECT * FROM mahasiswa WHERE nama LIKE '".$cari."'"))){
        foreach ($data as $hasil) {
            echo "<tr>";
                echo "<td>".$hasil['nrp']."</td>";
                echo "<td>".$hasil['nama']."</td>";
                echo "<td>".$hasil['alamat']."</td>";
                echo "<td>".$hasil['id']."</td>";
                echo "<td><a href='delete.php?nrp=".$hasil['nrp']."'>Hapus</a></td>";
            echo "</tr>";
        }
            echo "</table>";
        
        $data->close();
    }else{
        echo '<tr><td colspan="5" align = "center">Tidak Ada Data</td></tr>';
    }          
}

$mysqli->close();
?>
<form action="index.php">
     <input type="submit" name="balik" value="Kembali ke Halaman utama"/>
</form>
<br>