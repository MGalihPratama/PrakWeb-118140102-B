<?php
include "koneksi.php";

    if(isset($_POST['send'])!=""){
        $nrp=$_POST['nrp'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $id=$_POST['id'];
        $insert= $mysqli->query("INSERT INTO mahasiswa (nrp,nama,alamat,id) VALUES ('$nrp','$nama','$alamat','$id')");
        
        if($insert){
            $msg="Tambah Data Berhasil";
            echo "<script type='text/javascript'>alert('$msg');</script>";
            header('Location:index.php');
        }else{
            $errormsg="Tambah Data Gagal !!! Coba Lagi !!";
            echo "<script type='text/javascript'>alert('$errormsg');</script>";
            header('Location:index.php');
        }
    }

$mysqli->close();
?>