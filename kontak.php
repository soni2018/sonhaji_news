<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Black / White   
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20111121

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> Shoji News</title>
<link href='http://fonts.googleapis.com/css?family=Nova+Mono' rel='stylesheet' type='text/css' />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">Shoji News </a></h1>
				<p>Terpercaya <a href="http://templated.co" rel="nofollow">Shojikuh</a></p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li><a href="index.html">Beranda</a></li>
			
			<li><a href="olahraga.html">Olahraga</a></li>
		
			<li ><a href="photos.html">Ekonomi</a></li>
			
			<li><a href="budaya.html">Budaya</a></li>
			
			<li class="current_page_item"><a href="kontak.html">Kontak</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
					
						<h2 class="title"><a href="#">Kontak</a></h2>
						 <br></br>
						 <form method="POST" action="">
						 	<label>Email</label>
						 	<br><br>
							<input type="text" name="email" placeholder="Ketik Email Anda">
							<br><br>
							<label>Nomor Hp</label>
							<br><br>
							<input type="text" name="telp" placeholder="Ketik Telp Anda">
							<br><br>
							<input type="submit" name="simpan" value="simpan">
							<input type="reset" name="reset" value="batal">
						</form>
						<?php

						$email = $_POST['email'];
 						$telp = $_POST['telp'];
 						
 						if(isset($_POST['simpan'])){
						$koneksi = mysqli_connect("localhost","root","","soji");
						$sql = "INSERT into bukutamu SET 
									email = '".$_POST['email']."',
      								telp = '".$_POST['telp']."'";
      					$query = mysqli_query($koneksi,$sql);

      					if ($query) {  
								?>
								<script type="text/javascript">
 								 alert("Berhasil menyimpan Data"); document.location = 'index.php';
								</script>

								<?php
 								}else{
  										echo "gagal";
 									 }
						}

						?>

						?>

							
						
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	
	
	
	<!-- end #content -->
				<div id="sidebar">
					<ul>
						<li>
							<h2>Shoji News</h2>
							<p> Berita teraktual Dan terpercaya .</p>
						</li>
						<li>
							<h2>Categories</h2>
							<ul>
								<li><a href="olahraga.html">Olahraga</a></li>
								<li><a href="ekonomi.html">Ekonomi</a></li>
								<li><a href="budaya.html">Budaya</a></li>
							</ul>
						</li>
						<li>
							<h2>Navigasion</h2>
							<ul> 
							    <li><a href="index.html">Beranda</a></li>
							    <li><a href="index.html">Beranda</a></li>
								<li><a href="olahraga.html">Olahraga</a></li>
								<li><a href="ekonomi.html">Ekonomi</a></li>
								<li><a href="budaya.html">Budaya</a></li>
								<li><a href="kontak.html">Kontak </a></li>
								
							</ul>
						</li>
					</ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>&copy; Design by <a href="http://templated.co" rel="nofollow">Shojikuh</p>
</div>
<!-- end #footer -->
</body>
</html>