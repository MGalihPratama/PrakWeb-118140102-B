<form method="post" id="form">
    <div class="form-group">
        <label for="email">NIM:</label>
        <input type="text" class="form-control" name="nim" placeholder="Masukan NIM">
    </div>
    <div class="form-group">
        <label for="email">Nama:</label>
        <input type="text" class="form-control" name="nama" placeholder="Masukan nama">
    </div>
    <div class="form-group">
        <label>Prodi:</label>
        <select class="form-control" name="jurusan">
            <option value="TI">Teknik Informatika</option>
            <option value="TK">Teknik Kimia</option>
            <option value="TS">Teknik Sipil</option>
            <option value="TE">Teknik Elektro</option>
            <option value="FA">Farmasi</option>
            <option value="TN">Teknik Ninja</option>
            <option value="BI">Bisnis</option>
        </select>
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal">Tambah</button>
</form>
<script type="text/javascript">
    $(document).ready(function() {
        $("#tombol_tambah").click(function() {
            var data = $('#form').serialize();
            $.ajax({
                type: 'POST',
                url: "<?php echo base_url(); ?>/mahasiswa/simpanMahasiswa",
                data: data,
                cache: false,
                success: function(data) {
                    $('#tampil').load("<?php echo base_url(); ?>/mahasiswa/tampilMahasiswa");
                }
            });
        });
    });
</script>