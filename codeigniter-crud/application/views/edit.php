<form method="post" id="form">
    <div class="form-group">
        <label for="email">NIM:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->nim; ?>" name="nim_baru" placeholder="Masukan NIM">
    </div>
    <div class="form-group">
        <label for="email">Nama:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->nama; ?>" name="nama" placeholder="Masukan nama">
    </div>
    <div class="form-group">
        <label>Jurusan:</label>
        <select class="form-control" name="jurusan">
            <?php
            $jur[0] = "";
            $jur[1] = "";
            $jur[2] = "";
            $jur[3] = "";
            $jur[4] = "";
            $jur[5] = "";
            $jur[6] = "";
            switch ($hasil->jurusan) {
                case "TI":
                    $jur[0] = "selected";
                    break;
                case 'TK':
                    $jur[1] = "selected";
                    break;
                case 'TS':
                    $jur[2] = "selected";
                    break;
                case 'TE':
                    $jur[3] = "selected";
                    break;
                case 'FA':
                    $jur[4] = "selected";
                    break;
                case 'TN':
                    $jur[5] = "selected";
                    break;
                case 'BI':
                    $jur[6] = "selected";
                    break;
            }
            ?>
            <option value="TI" <?php echo $jur[0]; ?>>Teknik Informatika</option>
            <option value="TK" <?php echo $jur[1]; ?>>Teknik Kimia</option>
            <option value="SP" <?php echo $jur[2]; ?>>Teknik Sipil</option>
            <option value="TE" <?php echo $jur[3]; ?>>Teknik Elektro</option>
            <option value="FA" <?php echo $jur[4]; ?>>Farmasi</option>
            <option value="TN" <?php echo $jur[5]; ?>>Teknik Ninja</option>
            <option value="BI" <?php echo $jur[6]; ?>>Bisnis</option>
        </select>
    </div>
    <input type="hidden" name="nim_lama" value="<?php echo $hasil->nim; ?>">
    <button id="tombol_edit" type="button" class="btn btn-warning" data-dismiss="modal">Edit</button>
</form>
<script type="text/javascript">
    $(document).ready(function() {
        $("#tombol_edit").click(function() {
            var data = $('#form').serialize();
            $.ajax({
                type: 'POST',
                url: "<?php echo base_url(); ?>/mahasiswa/editMahasiswa",
                data: data,
                cache: false,
                success: function(data) {
                    $('#tampil').load("<?php echo base_url(); ?>/mahasiswa/tampilMahasiswa");
                }
            });
        });
    });
</script>