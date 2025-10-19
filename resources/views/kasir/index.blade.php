@extends('layouts.kasir')

@section('title', 'Kasir')

@section('content')
<div class="text-center mb-4">
    <h2 class="fw-bold text-white">Manajemen Kasir</h2>
    <p class="text-secondary">Atur stok dan pantau status pesanan pelanggan di sini</p>
</div>

<div class="row g-4">
    @php
        $menus = [
            ['nama' => 'Sate Ayam', 'stok' => 10, 'gambar' => 'sate ayam.jpg'],
            ['nama' => 'Sate Sapi', 'stok' => 5, 'gambar' => 'sate sapi.jpg'],
            ['nama' => 'Sate Kambing', 'stok' => 0, 'gambar' => 'sate kambing.jpg'],
            ['nama' => 'Tongseng Ayam', 'stok' => 8, 'gambar' => 'tongseng ayam.jpg'],
            ['nama' => 'Tongseng Sapi', 'stok' => 2, 'gambar' => 'tongseng sapi.jpg'],
            ['nama' => 'Tongseng Kambing', 'stok' => 0, 'gambar' => 'tongseng kambing.jpg'],
        ];
    @endphp

    @foreach ($menus as $menu)
    <div class="col-md-4">
        <div class="card text-center bg-dark text-white p-3 shadow-sm border-0">
            <img src="{{ asset('assets/' . $menu['gambar']) }}"
     class="card-img-top rounded mb-3"
     alt="{{ $menu['nama'] }}"
     style="height: 200px; object-fit: cover;">


            <h5 class="fw-bold">{{ $menu['nama'] }}</h5>
            <p class="text-secondary">Stok: {{ $menu['stok'] }}</p>
            <div class="d-flex justify-content-center gap-2">
                <button class="btn btn-outline-light btn-sm">-</button>
                <button class="btn btn-outline-light btn-sm">+</button>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{-- STATUS PESANAN --}}
<div class="card mt-5 bg-dark text-white shadow-sm">
    <div class="card-header fw-bold">
        Status Pemesanan
    </div>
    <div class="card-body">
        <table class="table table-dark table-striped align-middle text-center mb-0">
            <thead>
                <tr>
                    <th>ID Pesanan</th>
                    <th>Nama Pelanggan</th>
                    <th>Menu</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Andi</td>
                    <td>Sate Ayam</td>
                    <td><span class="badge bg-success">Selesai</span></td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Budi</td>
                    <td>Tongseng Sapi</td>
                    <td><span class="badge bg-warning text-dark">Diproses</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

{{-- FOOTER --}}
<footer class="text-center text-secondary mt-4 small">
    © 2025 <span class="fw-bold text-light">The komar's</span> — Kasir | Pemesanan Makanan Khas Jawa Tengah
</footer>
@endsection
