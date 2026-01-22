<!DOCTYPE html>
<html>
	<head>
		<title>Dynamic Web</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="content">
			<header>
				<h1 class="judul">SMK Wikrama 1 Garut</h1>
				<h3 class="deskripsi">Making a dynamic web using php, an old programming language</h3>
			</header>
			<div class="menu">
                <center>
                    <ul>
                        <li><a href="index.php?page=home">home</a></li>
                        <li><a href="index.php?page=tentang">about</a></li>
                        <li><a href="index.php?page=kontak">Kontak</a></li>
                    </ul>
                </center>
			</div>
			<div class="badan">
			<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
		
				switch ($page) {
					case 'home':
						include "home.php";
						break;
					case 'tentang':
						include "tentang.php";
						break;
					case 'kontak':
						include "kontak.php";
						break;			
					default:
						echo "<center><h3>Eeehhh maaf bang, salah halaman kali !</h3></center>";
						break;
				}
			}else{
				include "home.php";
			}
		
			?>
			</div>
		</div>
	</body>
</html>