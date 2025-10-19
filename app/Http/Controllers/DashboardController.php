<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard utama.
     * Semua data dibuat di sini dalam bentuk array (data dummy).
     */
    public function index()
    {
        // --- 1. DATA UNTUK KARTU STATISTIK ---
        // Anggap saja ini adalah hasil query dari database.
        $totalPesanan = 58;
        $totalReservasi = 12;
        $pendapatanHariIni = 1250000; // Dalam Rupiah
        $pelangganBaru = 7;

        // --- 2. DATA UNTUK TABEL PESANAN TERBARU ---
        // Kita buat array multidimensi untuk menampung daftar pesanan.
        $pesananTerbaru = [
            [
                'id' => 'ORD-001',
                'pelanggan' => 'Budi Santoso',
                'total' => 150000,
                'status' => 'Selesai' // Pilihan status: Selesai, Diproses, Batal
            ],
            [
                'id' => 'ORD-002',
                'pelanggan' => 'Citra Lestari',
                'total' => 75000,
                'status' => 'Diproses'
            ],
            [
                'id' => 'ORD-003',
                'pelanggan' => 'Ahmad Fauzi',
                'total' => 210000,
                'status' => 'Selesai'
            ],
            [
                'id' => 'ORD-004',
                'pelanggan' => 'Dewi Anggraini',
                'total' => 95000,
                'status' => 'Batal'
            ],
        ];

        // --- 3. DATA UNTUK TABEL RESERVASI AKAN DATANG ---
        $reservasiAkanDatang = [
            [
                'id' => 'RES-101',
                'pelanggan' => 'Rian Hidayat',
                'meja' => 5,
                'waktu' => '18:00',
                'jumlah_orang' => 4
            ],
            [
                'id' => 'RES-102',
                'pelanggan' => 'Sari Purnamasari',
                'meja' => 2,
                'waktu' => '19:30',
                'jumlah_orang' => 2
            ],
            [
                'id' => 'RES-103',
                'pelanggan' => 'Yoga Pratama',
                'meja' => 8,
                'waktu' => '20:00',
                'jumlah_orang' => 6
            ],
        ];


        // --- 4. MENGIRIM SEMUA DATA KE VIEW ---
        // Fungsi `view()` akan me-render file 'dashboard.blade.php'.
        // Data di dalam array (parameter kedua) akan diubah menjadi variabel di file blade.
        // Contoh: 'totalPesanan' akan menjadi variabel $totalPesanan di view.
        return view('admin.dashboard', [
            'totalPesanan' => $totalPesanan,
            'totalReservasi' => $totalReservasi,
            'pendapatanHariIni' => $pendapatanHariIni,
            'pelangganBaru' => $pelangganBaru,
            'pesananTerbaru' => $pesananTerbaru,
            'reservasiAkanDatang' => $reservasiAkanDatang,
        ]);
    }
}
