@extends('layouts.kasir')

@section('title', 'Kasir')

@section('content')
<div class="container py-4">

    {{-- Judul --}}
    <div class="text-center mb-5">
        <h2 class="fw-bold text-white">Dashboard Kasir</h2>
        <p class="text-light">Atur stok menu, pantau pesanan, dan lihat riwayat transaksi.</p>
    </div>

    {{-- === BAGIAN 1: STOK MENU === --}}
    <div class="card bg-dark text-white mb-4 shadow">
        <div class="card-header border-bottom border-secondary d-flex justify-content-between align-items-center">
            <h5 class="mb-0 fw-bold">Stok Menu</h5>
            <small class="text-secondary">Atur stok makanan khas Jawa Tengah</small>
        </div>
        <div class="card-body">
            <div class="row g-4">
                @php
                    $menus = [
                        ['nama' => 'Sate Ayam', 'stok' => 10, 'gambar' => 'sate-ayam.jpg'],
                        ['nama' => 'Sate Sapi', 'stok' => 5, 'gambar' => 'sate-sapi.jpg'],
                        ['nama' => 'Sate Kambing', 'stok' => 0, 'gambar' => 'sate-kambing.jpg'],
                        ['nama' => 'Tongseng Ayam', 'stok' => 8, 'gambar' => 'tongseng-ayam.jpg'],
                        ['nama' => 'Tongseng Sapi', 'stok' => 2, 'gambar' => 'tongseng-sapi.jpg'],
                        ['nama' => 'Tongseng Kambing', 'stok' => 0, 'gambar' => 'tongseng-kambing.jpg'],
                    ];
                @endphp

                @foreach ($menus as $menu)
                <div class="col-md-4">
                    <div class="card bg-dark text-white shadow-sm border-secondary h-100">
                        <img src="{{ asset('assets/'.$menu['gambar']) }}" class="card-img-top" alt="{{ $menu['nama'] }}" style="height: 180px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">{{ $menu['nama'] }}</h5>
                            <p class="text-white-50 mb-2">Stok: <span class="fw-semibold" id="stok-{{ $loop->index }}">{{ $menu['stok'] }}</span></p>
                            <div class="d-flex justify-content-center gap-2">
                                <button class="btn btn-outline-light btn-sm px-3" onclick="ubahStok({{ $loop->index }}, -1)">-</button>
                                <button class="btn btn-outline-light btn-sm px-3" onclick="ubahStok({{ $loop->index }}, 1)">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- === BAGIAN 2: STATUS PESANAN === --}}
    <div class="card bg-dark text-white mb-4 shadow">
        <div class="card-header border-bottom border-secondary">
            <h5 class="mb-0 fw-bold">Status Pemesanan</h5>
        </div>
        <div class="card-body">
            <table class="table table-dark table-striped align-middle">
                <thead>
                    <tr>
                        <th>ID Pesanan</th>
                        <th>Nama Pelanggan</th>
                        <th>Menu</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
