<?php
include "koneksi.php";

    if(isset($_GET['nrp'])!=""){
        $nrp=$_GET['nrp'];
        $hapus=$mysqli->query("DELETE FROM mahasiswa WHERE nrp='$nrp'");

        if($hapus){
            header("Location:tampil.php");
        }
    }

$mysqli->close();
?>