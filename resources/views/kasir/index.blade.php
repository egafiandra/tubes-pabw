@extends('layouts.kasir')

@section('title', 'Kasir')

@section('content')
<div class="text-center mb-4">
    <h2 class="fw-bold text-white">Kasir - Pemesanan Makanan</h2>
    <p class="text-light">Pilih menu pesanan pelanggan di bawah ini:</p>
</div>

<div class="row g-4">
    @php
        $menus = [
            ['nama' => 'Sate Ayam', 'harga' => 20000],
            ['nama' => 'Sate Sapi', 'harga' => 25000],
            ['nama' => 'Sate Kambing', 'harga' => 30000],
            ['nama' => 'Tongseng Ayam', 'harga' => 22000],
            ['nama' => 'Tongseng Sapi', 'harga' => 27000],
            ['nama' => 'Tongseng Kambing', 'harga' => 32000],
        ];
    @endphp

    @foreach ($menus as $menu)
    <div class="col-md-4">
        <div class="card text-center p-3 bg-dark border-light">
            <h5 class="fw-bold text-white">{{ $menu['nama'] }}</h5>
            <p class="text-white-50">Rp {{ number_format($menu['harga'], 0, ',', '.') }}</p>
            <button class="btn btn-custom">Tambahkan</button>
        </div>
    </div>
    @endforeach
</div>

<div class="text-center mt-5">
    <a href="{{ url('/pembayaran') }}" class="btn btn-success px-4 py-2">Lanjut ke Pembayaran</a>
</div>
@endsection
