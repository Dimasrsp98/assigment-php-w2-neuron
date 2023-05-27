<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class JaketController extends Controller
{
    public function index()
    {
    	// mengambil data dari table stok_jaket
    	$stok_jaket = DB::table('stok_jaket')->paginate(10);
 
    	// mengirim data stok_jaket ke view index
    	return view('index',['stok_jaket' => $stok_jaket]);

    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table sesuai pencarian data
		$stok_jaket = DB::table('stok_jaket')
		->where('nama_jaket','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data ke view index
		return view('index',['stok_jaket' => $stok_jaket]);
 
	}

    // method untuk menampilkan view form tambah data
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah');
    
    }

        // method untuk insert data ke table stok_jaket
    public function store(Request $request)
    {
        // insert data ke table stok_jaket
        DB::table('stok_jaket')->insert([
            'nama_jaket' => $request->nama_jaket,
            'ukuran_jaket' => $request->ukuran_jaket,
            'harga_jaket' => $request->harga_jaket,
            'stok_jaket' => $request->stok_jaket
        ]);
        // alihkan halaman ke halaman stok-barang
        return redirect('/stok-barang');
    
    }

        // method untuk edit data stok_jaket
    public function edit($id)
    {
        // mengambil data berdasarkan id yang dipilih
        $stok_jaket = DB::table('stok_jaket')->where('id_jaket',$id)->get();
        // passing data  yang didapat ke view edit.blade.php
        return view('edit',['stok_jaket' => $stok_jaket]);
    
    }

        // update data 
    public function update(Request $request)
    {
        // update data barang
        DB::table('stok_jaket')->where('id_jaket',$request->id)->update([
            'nama_jaket' => $request->nama_jaket,
            'ukuran_jaket' => $request->ukuran_jaket,
            'harga_jaket' => $request->harga_jaket,
            'stok_jaket' => $request->stok_jaket
        ]);
        // alihkan halaman ke halaman stok-barang
        return redirect('/stok-barang');
    }

        // method untuk hapus data stok_jaket
    public function hapus($id)
    {
        // menghapus data berdasarkan id yang dipilih
        DB::table('stok_jaket')->where('id_jaket',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/stok-barang');
    }
}