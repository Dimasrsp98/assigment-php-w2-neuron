<!DOCTYPE html>
<html>
<head>
	<title>Menambahkan Stok</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}

		h2 {
			color: #333;
		}

		h3 {
			color: #666;
			margin-bottom: 20px;
		}

		a {
			display: inline-block;
			padding: 8px 16px;
			background-color: #333;
			color: #fff;
			text-decoration: none;
			border-radius: 4px;
			transition: background-color 0.3s;
		}

		a:hover {
			background-color: #666;
		}

		form {
			margin-top: 20px;
		}

		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
			color: #333;
		}

		input[type="text"] {
			padding: 5px 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			margin-bottom: 10px;
		}

		input[type="submit"] {
			padding: 8px 16px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			transition: background-color 0.3s;
		}

		input[type="submit"]:hover {
			background-color: #666;
		}
	</style>
</head>
<body>
	<h2>GUDANG PT SUNMORI BAHAGIA</h2>
	<h3>Tambah Stok Jaket</h3>

	<a href="/stok-barang">Kembali</a>
	
	<br/>
	<br/>

	<form action="/stok-barang/store" method="post">
		{{ csrf_field() }}
		<label for="nama_jaket">Nama Jaket</label>
		<input type="text" id="nama_jaket" name="nama_jaket" required="required"> <br/>

		<label for="ukuran_jaket">Ukuran</label>
		<input type="text" id="ukuran_jaket" name="ukuran_jaket" required="required"> <br/>

		<label for="harga_jaket">Harga</label>
		<input type="text" id="harga_jaket" name="harga_jaket" required="required"> <br/>

		<label for="stok_jaket">Quantity</label>
		<input type="text" id="stok_jaket" name="stok_jaket" required="required"><br/>

		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>
