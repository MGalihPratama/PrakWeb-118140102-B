<html>
	<head>
		<title>Tugas</title>
		<style>
			a{
				text-decoration: none;
				padding: 10px;

			}
		</style>
	</head>

	<body>
		<p>
			<a href="<?php echo site_url('news'); ?>">Beranda</a>  
			<?php if ($this->session->userdata('is_logged_in')) { 
					echo '<b>Hallo </b> ' . $this->session->userdata('username');
					echo ' | ' . "<a href=" . site_url('user/delete/'.$this->session->userdata('user_id'));
					echo 'onClick="return confirm("Yakin mau dihapus?")">Delete Account</a> ';
					echo '  ' . "<a href=" . site_url('user/logout') . ">Logout</a>";
				} else {
			?>    
				 
				<a href="<?php echo site_url('user/login'); ?>">Login</a>
				
			<?php } ?>
		</p>