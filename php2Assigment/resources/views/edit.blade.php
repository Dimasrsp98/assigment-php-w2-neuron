<!DOCTYPE html>
<html>
<head>
	<title>Edit Stok Barang</title>
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
			border: 5px solid black;
			padding: 20px;
			border-radius: 14px;
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
	<h3>Edit Stok Jaket</h3>

	<a href="/stok-barang">Kembali</a>
	
	<br/>
	<br/>

	@foreach($stok_jaket as $p)
	<form action="/stok-barang/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_jaket }}">
		<table>
			<tr>
				<td><label for="nama_jaket">Nama Jaket</label></td>
				<td><input type="text" id="nama_jaket" required="required" name="nama_jaket" value="{{ $p->nama_jaket }}"></td>
			</tr>
			<tr>
				<td><label for="ukuran_jaket">Ukuran</label></td>
				<td><input type="text" id="ukuran_jaket" required="required" name="ukuran_jaket" value="{{ $p->ukuran_jaket }}"></td>
			</tr>
			<tr>
				<td><label for="harga_jaket">Harga</label></td>
				<td><input type="text" id="harga_jaket" required="required" name="harga_jaket" value="{{ $p->harga_jaket }}"></td>
			</tr>
			<tr>
				<td><label for="stok_jaket">Quantity</label></td>
				<td><input type="text" id="stok_jaket" required="required" name="stok_jaket" value="{{ $p->stok_jaket }}"></td>
			</tr>
		</table>
        <br>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
</body>
</html>
