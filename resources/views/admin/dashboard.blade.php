{{-- Menggunakan layout utama dari template AdminLTE --}}
@extends('adminlte::page')

{{-- Judul halaman (muncul di tab browser) --}}
@section('title', 'Dashboard Admin')

{{-- Judul konten (muncul di bagian atas halaman) --}}
@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

{{-- Konten utama halaman --}}
@section('content')
    {{-- Baris untuk kartu statistik --}}
    <div class="row">
        <div class="col-lg-3 col-6">
            {{-- Kartu kecil (small box) untuk total pesanan --}}
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalPesanan }}</h3>
                    <p>Total Pesanan Hari Ini</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            {{-- Kartu kecil untuk pendapatan --}}
            <div class="small-box bg-success">
                <div class="inner">
                    {{-- 'number_format' adalah fungsi PHP untuk format angka --}}
                    <h3>Rp {{ number_format($pendapatanHariIni, 0, ',', '.') }}</h3>
                    <p>Pendapatan Hari Ini</p>
                </div>
                <div class="icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <a href="#" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            {{-- Kartu kecil untuk reservasi --}}
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $totalReservasi }}</h3>
                    <p>Reservasi Tertunda</p>
                </div>
                <div class="icon">
                    <i class="fas fa-calendar-check"></i>
                </div>
                <a href="#" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            {{-- Kartu kecil untuk pelanggan baru --}}
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $pelangganBaru }}</h3>
                    <p>Pelanggan Baru</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="#" class="small-box-footer">Info lebih lanjut <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    {{-- Baris untuk tabel data --}}
    <div class="row">
        {{-- Kolom untuk tabel pesanan terbaru --}}
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pesanan Makanan Terbaru</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">ID</th>
                                <th>Pelanggan</th>
                                <th>Total Harga</th>
                                <th style="width: 40px">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- '@foreach' adalah loop dari Blade untuk mengulang data array --}}
                            @foreach ($pesananTerbaru as $pesanan)
                                <tr>
                                    <td>{{ $pesanan['id'] }}</td>
                                    <td>{{ $pesanan['pelanggan'] }}</td>
                                    <td>Rp {{ number_format($pesanan['total'], 0, ',', '.') }}</td>
                                    <td>
                                        {{-- '@if' untuk membuat kondisi tampilan berdasarkan status --}}
                                        @if ($pesanan['status'] == 'Selesai')
                                            <span class="badge bg-success">Selesai</span>
                                        @elseif ($pesanan['status'] == 'Diproses')
                                            <span class="badge bg-warning">Diproses</span>
                                        @else
                                            <span class="badge bg-danger">Batal</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Kolom untuk tabel reservasi akan datang --}}
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Reservasi Tempat Akan Datang</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Pelanggan</th>
                                <th>Meja</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservasiAkanDatang as $reservasi)
                                <tr>
                                    <td>{{ $reservasi['id'] }}</td>
                                    <td>{{ $reservasi['pelanggan'] }} ({{ $reservasi['jumlah_orang'] }} org)</td>
                                    <td>{{ $reservasi['meja'] }}</td>
                                    <td><span class="badge bg-info">{{ $reservasi['waktu'] }}</span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
