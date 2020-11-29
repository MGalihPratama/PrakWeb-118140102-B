<html>
<head>
    <title>User PABW</title>
</head>
<body>

    <table border="0" cellpadding="10" cellspasing="1" width="100%" >
        <tr>
            <td align="center">User Dashboard</td>
        </tr>
        <tr>
            <td>
                Selamat datang <?= $this->session->userdata('username');?>.
                Klik disini untuk <a href="<?=base_url('user/logout');?>" title="Logout">Logout.
                
            </td>
        </tr>
    </table>
    <?php 
    if($this->session->userdata('username') == 'admin'){
        echo "<table>
        <tr>
            <td><h5>List User</h5></td>
        </tr>
        <tr>
            <td>admin</td>
        </tr>
        <tr>
            <td>user1</td>
        </tr>
        <tr>
            <td>user2</td>
        </tr>";
        
    }else if($this->session->userdata('username') == 'user1') {
        echo "<table>
        <tr>
            <td><h5>List User</h5></td>
        </tr>
        <tr>
            <td>user1</td>
        </tr>";
    }else{
        echo "<table>
        <tr>
            <td><h5>List User</h5></td>
        </tr>
        <tr>
            <td>user2</td>
        </tr>";
    }
    
    
    ?>
</body>
</html>