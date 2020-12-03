<?php
		$namabrg = $harga ="";
		if (ISSET($_POST['submit'])) {
			$namabrg = $_POST['namebrg'];
			$harga = $_POST['harga'];
/*			$pass = $_POST['pw'];
			$pass = md5($pass);*/
			$view = "CREATE VIEW data_barang AS SELECT nama_karyawan, nip, nama_brg, harga FROM barang, transaksi, karyawan WHERE harga = '20000'";

			include 'config.php';
			$result = mysqli_query($connect, "INSERT INTO barang VALUES('','' ,$namabrg','$harga')");
			/*$datalogin = mysqli_fetch_array($result);
			$id = $datalogin['id_pembeli'];*/

			$query1 = "SELECT * FROM data_barang";
			$sql1 = mysqli_query($connect, $query1);
			$dataproduk = mysqli_fetch_array($sql1);
			$karyawan = $dataproduk['nama_karyawan'];
			$nip = $dataproduk['nip'];
			$namabrg = $dataproduk['nama_brg'];
			$harga = $dataproduk['harga'];
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
	<title>Input Barang</title>
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
			
			<form style="margin-left: 10%; margin-top: 30px;" action="barang.php" method="post">
			<input type="text" name="namebrg" placeholder="Nama Barang" class="input" style="
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
			<input type="text" name="harga" class="input" placeholder="Masukan Harga" style="
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
			<a href="index.php"><input type="button" name="submit" value="Submit" class="klik" style="
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
			"></a>
			</form>
		</div>
<!-- 		<table class="data-table">

					<thead>
						<tr>
							<th>NO</th>
							<th>Nama karyawan</th>
							<th>NIP</th>
							<th>Nama Barang</th>
							<th>Harga</th>	
						</tr>
					</thead>
					<tbody> -->
						<?php
							/*$querydata = "SELECT * FROM data_barang";
							$sqlPEMIN = mysqli_query($connect, $querydata);

							while($dataproduk = mysqli_fetch_array($sqlPEMIN)) {
								$karyawan = $dataproduk['nama_karyawan'];
								$nip = $dataproduk['nip'];
								$namabrg = $dataproduk['nama_brg'];
								$harga = $dataproduk['harga'];


								$urut=$urut+1;

						    	echo "<tr>";
						    	echo "<td>".$urut."</td>";
						        echo "<td>".$karyawan."</td>";
						        echo "<td>".$nip."</td>";
						        echo "<td>".$namabrg."</td>";
						        echo "<td>".$harga."</td>";
						        echo "</tr>"; 
						    	}*/
						?>
					<!-- </tbody>
					<tfoot>
						<tr>
							<th colspan="3">TOTAL PESANAN</th>
							<th><?php /*echo $urut*/ ?> PESANAN</th>

						</tr>

					</tfoot>
				</table> -->
	</div>
</body>
</html>

<!-- 
kurang 
-Alamat 
-No.Telp -->
