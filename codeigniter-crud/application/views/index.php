<!DOCTYPE html>
<html>

<head>
    <link href="<?php echo base_url() ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>/assets/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<script type="text/javascript">
    $(document).ajaxStart(function() {
        $("#ajax-wait").css({
            left: ($(window).width() - 32) / 2 + "px",
            top: ($(window).height() - 32) / 2 + "px",
            display: "block"
        })
    }).ajaxComplete(function() {
        $("#ajax-wait").fadeOut();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $.ajax({
            type: 'POST',
            url: "<?php echo base_url(); ?>/mahasiswa/tampilMahasiswa",
            cache: false,
            success: function(data) {
                $("#tampil").html(data);
            }
        });

    });
</script>

<body>
    <div class='container'>
        <h2 align="center">Codeigniter CRUD AJAX</h2>
        <div id="tampil">
            <!-- Data tampil disini -->
        </div>
    </div>
</body>

</html>