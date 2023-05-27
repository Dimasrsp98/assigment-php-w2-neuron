<!DOCTYPE html>
<html>
<head>
	<title>Data Stok Barang</title>
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

		table {
			width: 100%;
			border-collapse: collapse;
		}

		th, td {
			padding: 10px;
			border: 1px solid #ccc;
		}

		th {
			background-color: #f0f0f0;
		}

		tr:nth-child(even) {
			background-color: #f9f9f9;
		}

		tr:hover {
			background-color: #f5f5f5;
		}

		.pagination {
            margin-top: 20px;
            display: flex;
            align-items: center;
        }

        .pagination .page-item {
            margin-right: 5px;
        }

        .pagination .page-link {
            padding: 5px 10px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .pagination .page-link:hover {
            background-color: #666;
            color: #fff;
        }

        .pagination .page-item.active .page-link {
            background-color: #333;
            color: #fff;
        }

        .pagination .page-item.disabled .page-link {
            opacity: 0.5;
            pointer-events: none;
        }

        .pagination-info {
            margin-top: 10px;
            font-size: 14px;
            color: #666;
        }

        /* Perubahan CSS untuk pagination link yang aktif */
        .pagination .page-item.active .page-link {
            background-color: #666;
            color: #fff;
        }

        /* Perubahan CSS untuk pagination link ketika dihover */
        .pagination .page-item:hover .page-link {
            background-color: #666;
            color: #fff;
        }


		
	</style>
</head>
<body>
	<h2>GUDANG PT SUNMORI BAHAGIA</h2>
	<h3>Stok Jaket</h3>

	<a href="/stok-barang/tambah">+ Tambah Data Baru</a>
    <a href="/input"> Validasi Pengguna</a>
	<br/><br/>
    <p>Cari Jaket :</p>
	<form action="/stok-barang/cari" method="GET">
	<div style="margin-bottom: 10px;">
		<input type="text" name="cari" placeholder="Nama Jaket .." value="{{ old('cari') }}" style="padding: 5px 10px; border: 1px solid #ccc; border-radius: 4px;">
		<input type="submit" value="CARI" style="padding: 8px 16px; background-color: #333; color: #fff; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s;">
		<a href="/stok-barang" style="padding: 8px 16px; background-color: #333; color: #fff; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s; margin-left: 10px;">Tampilan Semula</a>
	</div>
</form>	
	<br/>

	<table>
		<tr>
			<th>Nama Jaket</th>
			<th>Ukuran</th>
			<th>Harga</th>
			<th>Sisa Stok</th>
			<th>Menu</th>
		</tr>
		@foreach($stok_jaket as $p)
		<tr>
			<td>{{ $p->nama_jaket }}</td>
			<td>{{ $p->ukuran_jaket }}</td>
			<td>{{ $p->harga_jaket }}</td>
			<td>{{ $p->stok_jaket }}</td>
			<td>
				<a href="/stok-barang/edit/{{ $p->id_jaket }}">Edit</a>
				|
				<a href="/stok-barang/hapus/{{ $p->id_jaket }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

	<div class="pagination-info">
		Halaman: {{ $stok_jaket->currentPage() }} &nbsp;&nbsp;|&nbsp;&nbsp; Jumlah Data: {{ $stok_jaket->total() }} &nbsp;&nbsp;|&nbsp;&nbsp; Data Per Halaman: {{ $stok_jaket->perPage() }}
	</div>

    <div class="pagination">
		{{ $stok_jaket->links() }}
	</div>
</body>
</html>
