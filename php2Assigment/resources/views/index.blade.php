<!DOCTYPE html>
<html>
<head>
	<title>Data Stok Barang</title>
</head>
<body>
 
	<h2>GUDANG PT SUNMORI BAHAGIA</h2>
	<h3>Stok Jaket</h3>
 
	<a href="/stok-jaket/tambah"> + Tambah Data Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama Jaket</th>
			<th>Ukuran </th>
			<th>Harga</th>
			<th>Sisa Stok</th>
			<th>Menu</th>
		</tr>
		@foreach($stok-jaket as $p)
		<tr>
			<td>{{ $p->nama_jaket }}</td>
			<td>{{ $p->ukuran_jaket }}</td>
			<td>{{ $p->harga_jaket }}</td>
			<td>{{ $p->stok_jaket }}</td>
			<td>
				<a href="/stok-jaket/edit/{{ $p->id_jaket }}">Edit</a>
				|
				<a href="/stok-jaket/hapus/{{ $p->id_jaket }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>