<?php
	include 'config.php';
	$idkaryawan = $idbarang = "";
	if (isset($_POST['submit'])) {
		# code...
		$nama = $_POST['uname'];
		$alamat = $_POST['alamat'];
		$item = $_POST['Nitem'];
		$qtt = $_POST['kuantitas'];
		$result = mysqli_query($connect, "INSERT INTO transaksi VALUES('','$idpembeli','$idbarang','$idkaryawan','$date')");
			$datalogin = mysqli_fetch_array($result);
			$id = $datalogin['id_pembeli'];


			if ($result){
				header("Location: index.php?id=$id");
			?>
			<script>
					alert("Pesanan Berhasil Dibuat dan Siap Dikirim!");
					window.location.href= 'peminjaman.php?id=<?php echo $id ?>';
				</script>
			<?php
			
			}
			$query1 = "SELECT * FROM pembeli WHERE id_pembeli";
			$sql1 = mysqli_query($connect, $query1);
			$datapembeli = mysqli_fetch_array($sql1);

			$idpembeli = $datapembeli['id_pembeli'];
			$userpembeli = $datapembeli['username'];


			$query2 = "SELECT * FROM barang WHERE id_brg";
			$sql2 = mysqli_query($connect, $query2);
			$databarang = mysqli_fetch_array($sql2);

			$idbarang = $databarang['id_brg'];
			$itembarang = $databarang['nama_brg'];


			$query3 = "SELECT * FROM karyawan WHERE id_karyawan";
			$sql3 = mysqli_query($connect, $query3);
			$datakaryawan = mysqli_fetch_array($sql3);

			$idkaryawan = $datakaryawan['id_karyawan'];
			$namakaryawan = $datakaryawan['nama_karyawan'];
			$nipkaryawan = $datakaryawan['nip'];

			$date = $qtt.date("Ymd");
			
		/*$all = mysqli_query*/

	}
	echo $idkaryawan.$idbarang;
	$qtt = $item = $id = "";
	switch ($item) {
		case 'Holder':
				$jenis=1*15000;
				
			break;
		case 'Sticker':
				$jenis=2*3000;
				
			break;
		case 'Album':
				$jenis=3*10000;
				
			break;
		case 'Diary Book':
				$jenis=4*20000;
				
			break;
		default:
			$jenis=0;

			break;
	}
	switch ($qtt) {
		case '1':
				$qtt1 =1;
			break;
		case '2':
				$qtt1 =2;
			break;
		case '3':
				$qtt1 =3;
			break;
		case '4':
				$qtt1 =4;
			break;
		case '5':
				$qtt1 =5;
			break;
		case '6':
				$qtt1 =6;
			break;
		case '7':
				$qtt1 =7;
			break;
		default:
			$qtt1 =0;
			break;
	}
	$hasil=$qtt1*$jenis;

?>



<!DOCTYPE html>
<html>
<head>
	<title>BTS Form's buy</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link rel="stylesheet" href="style/Bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="style/Bootstrap/js/bootstrap.bundle.min.js">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.css"
		integrity="sha512-8M8By+q+SldLyFJbybaHoAPD6g07xyOcscIOQEypDzBS+sTde5d6mlK2ANIZPnSyxZUqJfCNuaIvjBUi8/RS0w=="
		crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="
	margin: 0px;
	padding: 0px;
	max-width: 100%;
	font-family: sans-serif;	
">
	<main>
		<section style="
			width: 100%;
			max-width: 100%;
			height: 100vh;
			display: flex;
			background-image: url(style/img/pic2.png);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			justify-content: center;
		">
			<!-- Section Form -->
			<div style="
				flex: 1;
			">
				<div style="
					width: 90%;
					height: 70vh;
					margin-left: 18%;
					margin-top: 20%;
					border-radius: 20px;
				">
					<form action="index.php" method="post" style="
						padding: 10px;
						list-style: none;
						color: white;
					">
						<h2 style="text-align: center;">Your Identity</h2>
						<li style="
							padding-left: 30%;
						">
							<label>Username</label><br>
							<input type="text" name="uname" style="
								outline: none;
							border: none;
							border-radius: 10px;
							font-size: 17px;
							background-color: #f9f9f9;
							padding: 5px 10px 5px 10px;
							width: 60%;
							">
						</li>
						<li style="
							padding-left: 30%;
						">
							<label>Alamat</label><br>
							<input type="text" name="alamat" style="
								outline: none;
							border: none;
							border-radius: 10px;
							font-size: 17px;
							background-color: #f9f9f9;
							padding: 5px 10px 5px 10px;
							width: 60%;
							">
						</li>
						<li style="
				 		padding-left: 30%;
				 		padding-right: 25%;
				 	">
				 		<label for="fmerk">Item</label><br>
				 		<select class="select" name="Nitem" style="
				 			width: 95%;
				 			outline: none;
				 			border: none;
				 			padding: 10px;
				 			border-radius: 10px;
				 			cursor: pointer;
				 			background-color: #f9f9f9;
				 		">
				 			<optgroup label="Produk BTS">
				 				<option value="Holder">Holder</option>
				 				<option value="Sticker">Sticker</option>
				 				<option value="Album">Album</option>
				 				<option value="Diary Book">Diary Book</option>
				 			</optgroup>
				 		</select>
				 	</li>
						<li style="
							padding-left: 30%;
							padding-top: 2px;
						">
							<label>Quantity</label><br>
							<input type="number" name="kuantitas" max="7" min="1" placeholder="Maks 1 user 7 items" style="	outline: none;
							border: none;
							border-radius: 10px;
							font-size: 17px;
							background-color: #f9f9f9;
							padding: 3px 15px 3px 15px;
							width: 60%;
							color: black;">
						</li>
						<li style="
							padding-left: 30%;
							padding-top: 2px;
						">
							<label>Total Harga</label><br>
							<p style="	outline: none;
							border: none;
							border-radius: 10px;
							font-size: 17px;
							background-color: #f9f9f9;
							padding: 3px 15px 3px 15px;
							width: 60%;
							color: black;"><?php echo "".$hasil ?></p>
						</li>
						<!-- Button Submit modal -->
						<button type="submit" name="submit" style="margin-left: 25%;" class="btn btn-primary">
						  Simpan Informasi
						</button>
						 <!-- Button trigger modal -->
					</form>
				</div>
			</div>
			<!-- Section gambar -->
			<div style="
				flex: 1;
			">
				<div style="
					width: 90%;
					height: 80vh;
					margin-left: 5%;
					margin-top: 9%;
					
					background-position: center;
					background-size: cover;
					border-radius: 20px;
					border: 3px solid rgba(0,0,0,0.1);
				">
					<div class="container">
					  <div class="row" style="
						height: 80vh !important;
						background-color: rgba(255,255,255,0.4);
						padding: 10px;
						border-radius: 15px;
						border: 3px solid rgba(255,255,255,0.4);;
					">
					    <div class="col" style="
					    	background-image: url(style/img/pic3.png);
					    	background-position: center;
					    	background-repeat: no-repeat;
					    	background-size: cover;
					    	border-radius: 20px;
					    	margin-right: 5px;
					    "></div>
					    <div class="col" style="
					    	background-image: url(style/img/pic2.png);
					    	background-position: center;
					    	background-repeat: no-repeat;
					    	background-size: cover;
					    	border-radius: 20px;
					    "></div>
					    <div class="w-100" style="
					    	background-image: url(style/img/pic4.png);
					    	background-position: center;
					    	background-repeat: no-repeat;
					    	background-size: cover;
					    	border-radius: 20px;
					    	margin-top: 5px;
					    	margin-bottom: 5px;
					    "></div>
					    <div class="col" style="
					    	background-image: url(style/img/pic5.png);
					    	background-position: center;
					    	background-repeat: no-repeat;
					    	background-size: cover;
					    	border-radius: 20px;
					    	margin-right: 5px;
					    "></div>
					    <div class="col" style="
					    	background-image: url(style/img/pic6.png);
					    	background-position: center;
					    	background-repeat: no-repeat;
					    	background-size: cover;
					    	border-radius: 20px;
					    "></div>
					  </div>
					</div>
				</div>
			</div>
		</section>
	</main>
	 <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>