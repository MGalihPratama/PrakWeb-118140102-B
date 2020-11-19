<h2>DATA MAHASISWA PENS</h2>
<h3>===========================</h3>
<h2>Tambah Data</h2>
<form action="insert.php" method="post" name="insert">
<table>
    <tr> 
        <td>NRP</td>
        <td><input type="text" name="nrp" required placeholder="NRP"></td>
    </tr>
    <tr> 
        <td>Nama</td>
        <td><input type="text" name="nama" required placeholder="Nama"></td>
    </tr>
    <tr> 
        <td>Alamat</td>
        <td><input type="text" name="alamat" required placeholder="Alamat"></td>
    </tr>
    <tr> 
        <td>ID Jurusan</td>
        <td>
            <select name="id" id="id">
                <option value="1">informatika</option>
                <option value="2">mtk</option>
                <option value="3">farmasi</option>
                <option value="4">kimia</option>
                <option value="5">geofisika</option>
            </select>
        </td>
    </tr>
    </table>
    <input type="submit" name="send" value="Submit"/>

</form>
<h3>===========================</h3>
<h2>Tampilkan data</h2>
<form action="tampil.php">
     <input type="submit" name="tampil" value="Lihat Data"/>
</form>
<h3>===========================</h3>
<h2>SEARCH DATA</h2>
<form action="cari.php" method="post">
    Nama : <td><input type="text" name="cari" required placeholder="Nama">
     <input type="submit" name="cariData" value="Cari Data"/>
</form>
<h3>===========================</h3>

