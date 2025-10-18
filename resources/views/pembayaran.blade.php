@extends('layouts.pembayaran')

@section('title', 'Pembayaran')

@section('content')
<div class="text-center mb-4">
    <h2 class="fw-bold">Pembayaran</h2>
    <p class="text-secondary">Periksa kembali pesanan dan lakukan pembayaran</p>
</div>

<div class="card p-4 mx-auto" style="max-width: 550px;">
    <h5 class="mb-3 fw-semibold text-warning">Ringkasan Pesanan</h5>
    <ul class="list-group list-group-flush">
        <li class="list-group-item bg-transparent text-light d-flex justify-content-between">
            <span>Sate Ayam</span><span>Rp 20.000</span>
        </li>
        <li class="list-group-item bg-transparent text-light d-flex justify-content-between">
            <span>Tongseng Sapi</span><span>Rp 27.000</span>
        </li>
        <li class="list-group-item bg-transparent text-light d-flex justify-content-between fw-bold">
            <span>Total</span><span>Rp 47.000</span>
        </li>
    </ul>

    <hr class="text-secondary my-4">

    <form>
        <div class="mb-3">
            <label class="form-label text-warning">Metode Pembayaran</label>
            <select class="form-select bg-dark text-light border-secondary">
                <option>Tunai</option>
                <option>QRIS</option>
                <option>Transfer Bank</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label text-warning">Nominal Bayar</label>
            <input type="number" class="form-control bg-dark text-light border-secondary" placeholder="Masukkan jumlah uang...">
        </div>

        <button type="submit" class="btn btn-pay w-100 mt-3">Bayar Sekarang</button>
    </form>
</div>

<div class="text-center mt-4">
    <a href="{{ url('/kasir') }}" class="text-decoration-none text-warning">← Kembali ke Kasir</a>
</div>
@endsection
