<?php 
include "koneksi.php";
if ($data = $mysqli->query("SELECT * FROM mahasiswa")) {
    echo "<table border=1>";
    echo "<tr>";
        echo "<td>NRP</td>";
        echo "<td>Nama</td>";
        echo "<td>Alamat</td>";
        echo "<td>ID Jurusan</td>";
        echo "<td colspan=2>Aksi</td>";
    echo "</tr>";

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
}
?>
<br>
<form action="index.php">
     <input type="submit" name="balik" value="Kembali ke Halaman utama"/>
</form>
