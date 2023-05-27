<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class JaketController extends Controller
{
    public function index()
    {
    	// mengambil data dari table stok_jaket
    	$stok_jaket = DB::table('stok_jaket')->get();
 
    	// mengirim data stok_jaket ke view index
    	return view('index',['stok_jaket' => $stok_jaket]);
 
    }
}

