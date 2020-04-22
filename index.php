<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Kelulusan Kelas XII SMK Negeri 5 Singkawang</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Sistem Informasi Kelulusan Kelas XII SMK Negeri 5 Singkawang</h1>
	<h2><center> Tahun Pelajaran 2019/2020 </center></h2><br/>

	<?php 
	if(isset($_GET['pesan'])){if($_GET['pesan']=="gagal"){echo "<div class='alert'>Nama dan Password tidak sesuai !</div>";}}?>
	<div class="kotak_login">
		<p class="tulisan_login">Login</p>
		<form action="cek_login.php" method="post">
			<label>User Name</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
			<input type="submit" class="tombol_login" value="LOGIN">
			<br/>
			<br/>
		</form>
	</div>
 	<center><a>Creat By Supriono,S.ST</a></center>
<script data-align="right" data-overlay="false" id="keyreply-script" src="//keyreply.com/chat/widget.js" data-color="#E4392B" data-apps="JTdCJTIyd2hhdHNhcHAlMjI6JTIyMDgyMzUwODIwNjMwOSUyMiwlMjJwaG9uZSUyMjolMjIwODIzNTA4MjA2MzklMjIsJTIyZW1haWwlMjI6JTIybWVrYXJvYm90LnRtQGdtYWlsLmNvbSUyMiU3RA=="></script>
</body>
</html>
