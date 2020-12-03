<?php
		$nama = $mail = $pass = $alamat = "";
		if (ISSET($_POST['submit'])) {
			$nama = $_POST['name'];
			$alamat = $_POST['alamat'];
			$mail = $_POST['mail'];
/*			$pass = $_POST['pw'];
			$pass = md5($pass);*/

			include 'config.php';
			$result = mysqli_query($connect, "INSERT INTO pembeli VALUES('','$nama','$mail','$alamat')");
			$datalogin = mysqli_fetch_array($result);
			$id = $datalogin['id_pembeli'];
			if ($result){
				header("Location: index.php?id=$id");
			?>
			<script>
					alert("Berhasil!");
					window.location.href= 'peminjaman.php?id=<?php echo $id ?>';
				</script>
			<?php
			
			}
		}
		// echo $nama;
		// echo $notelp;
		// echo $mail;
		// echo $pass;
		// echo $jenisK;
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Login BTS Teams</title>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body style="
	padding: 0px;
	margin: 0px;
">
	<div class="section" style="
		width: 100%;
		height: 97vh;
		
		background-image: url(style/img/pic3.png);
		display: flex;
		justify-content: center;
		align-items: center;
	">
		<div class="container" style="
			width: 40vw;
			border: 3px solid rgba(244,244,244,0.2);
			border-radius: 20px;
			background-color: rgba(255,255,255,0.5);
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			z-index: 1;
		">
			<i class="fas fa-user-alt" class="icon" style="
				background-color: rgba(255,255,255,0.8);
				padding: 10px;
				border: 2px solid rgba(255,255,255,0.5);
				font-size: 60px;
				border-radius: 40px;
				position: relative;
				bottom: 40px;
			"></i>
			<form style="margin-left: 10%;" action="login.php" method="post">
			<input type="text" name="name" placeholder="Username" class="input" style="
				outline: none;
						border: none;
						border-radius: 10px;
						font-size: 17px;
						background-color: #f9f9f9;
						padding: 10px 15px 10px 15px;
						margin-bottom: 10px;
						width: 80%;
			">
			<br>
			<input type="email" name="mail" class="input" placeholder="Your Email" style="
				outline: none;
						border: none;
						border-radius: 10px;
						font-size: 17px;
						background-color: #f9f9f9;
						padding: 10px 15px 10px 15px;
						margin-top: 5px;
						margin-bottom: 10px;
						width: 80%;
			"><br>
			<input type="text" name="alamat" class="input" placeholder="Your Location" style="
				outline: none;
						border: none;
						border-radius: 10px;
						font-size: 17px;
						background-color: #f9f9f9;
						padding: 10px 15px 10px 15px;
						margin-top: 5px;
						margin-bottom: 10px;
						width: 80%;
			"><br>
			<!-- <input type="password" name="pw" class="input" placeholder="Password" style="
				outline: none;
						border: none;
						border-radius: 10px;
						font-size: 17px;
						background-color: #f9f9f9;
						padding: 10px 15px 10px 15px;
						margin-top: 5px;
						margin-bottom: 10px;
						width: 80%;
			"> -->
			<input type="submit" name="submit" value="Submit" class="klik" style="
				outline: none;
						border: none;
						border-radius: 10px;
						font-size: 17px;
						background-color: #f9f9f9;
						padding:5px 10px 5px 10px;
						margin-top: 5px;
						margin-bottom: 10px;
						width: 30vh;
						margin-left: 15vh;
						margin-right: 15vh;
						cursor: pointer;
			">
			</form>
		</div>
	</div>
</body>
</html>

<!-- 
kurang 
-Alamat 
-No.Telp -->
