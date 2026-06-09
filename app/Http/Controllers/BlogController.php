<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\KategoriArtikel;

class BlogController extends Controller
{
    // Menampilkan halaman utama (5 artikel terbaru & widget kategori)
    public function index()
    {
        $artikel = Artikel::with(['penulis', 'kategori'])->orderBy('id', 'desc')->limit(5)->get();
        $kategori = KategoriArtikel::orderBy('nama_kategori', 'asc')->get();

        return view('blog.index', compact('artikel', 'kategori'));
    }

    // Menampilkan artikel berdasarkan kategori yang di-klik di widget
    public function kategori($id)
    {
        $artikel = Artikel::with(['penulis', 'kategori'])->where('id_kategori', $id)->orderBy('id', 'desc')->get();
        $kategori = KategoriArtikel::orderBy('nama_kategori', 'asc')->get();
        $kategoriAktif = KategoriArtikel::findOrFail($id);

        return view('blog.index', compact('artikel', 'kategori', 'kategoriAktif'));
    }

    // Menampilkan halaman detail artikel & widget artikel terkait
    public function detail($id)
    {
        $artikel = Artikel::with(['penulis', 'kategori'])->findOrFail($id);
        
        // Ambil 5 artikel terkait dari kategori yang sama (kecuali artikel ini sendiri)
        $artikelTerkait = Artikel::where('id_kategori', $artikel->id_kategori)
                                ->where('id', '!=', $id)
                                ->orderBy('id', 'desc')
                                ->limit(5)
                                ->get();

        return view('blog.detail', compact('artikel', 'artikelTerkait'));
    }
}