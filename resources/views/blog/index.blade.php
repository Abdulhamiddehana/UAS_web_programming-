@extends('layouts.blog')

@section('title', isset($kategoriAktif) ? 'Kategori: ' . $kategoriAktif->nama_kategori . ' - Blog Kami' : 'Beranda - Blog Kami')

@section('content')
<div class="mb-4">
    <p class="text-muted">Artikel terbaru seputar teknologi dan pemrograman</p>
</div>

<div class="row g-5">
    <div class="col-lg-8">
        @forelse($artikel as $item)
            <div class="article-card">
                <img src="{{ asset('storage/gambar/' . $item->gambar) }}" class="article-img" alt="{{ $item->judul }}">
                <div class="card-body p-4 p-md-5">
                    <span class="badge-kategori d-inline-block mb-3">{{ $item->kategori->nama_kategori }}</span>
                    <h3 class="fw-bold mb-3" style="color: #2d3436;">{{ $item->judul }}</h3>
                    
                    <div class="d-flex align-items-center mb-4" style="font-size: 13px; color: #636e72;">
                        <img src="{{ asset('storage/foto/' . $item->penulis->foto) }}" alt="Avatar" style="width: 28px; height: 28px; border-radius: 50%; object-fit: cover; margin-right: 10px;">
                        <span>{{ $item->penulis->nama_depan }} {{ $item->penulis->nama_belakang }} &nbsp;&bull;&nbsp; {{ explode('|', $item->hari_tanggal)[0] }}</span>
                    </div>
                    
                    <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.7;">
                        {{ Str::limit(strip_tags($item->isi), 200, '...') }}
                    </p>
                    
                    <a href="{{ route('blog.detail', $item->id) }}" class="btn-read-more">Baca Selengkapnya &rarr;</a>
                </div>
            </div>
        @empty
            <div class="alert alert-info border-0 shadow-sm" style="border-radius: 12px;">
                Belum ada artikel yang dipublikasikan saat ini.
            </div>
        @endforelse
    </div>

    <div class="col-lg-4">
        <div class="sidebar-card p-4 sticky-top" style="top: 20px;">
            <h5 class="fw-bold mb-4" style="color: #2d3436;">Kategori Artikel</h5>
            <div class="list-group list-group-flush">
                <a href="{{ route('blog.index') }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {{ !isset($kategoriAktif) ? 'active' : '' }}">
                    Semua Artikel
                </a>
                
                @foreach($kategori as $kat)
                    <a href="{{ route('blog.kategori', $kat->id) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center {{ (isset($kategoriAktif) && $kategoriAktif->id == $kat->id) ? 'active' : '' }}">
                        {{ $kat->nama_kategori }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection