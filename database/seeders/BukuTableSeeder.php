<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::create([
            'judul_buku' => 'Kancil',
            'id_penerbit' => '1',
            'tahun_buku' => 2024,
            'jumlah_buku' => 50,
            'tanggal_pengadaan' => now()
        ]);

        Buku::create([
            'judul_buku' => 'Mencuri',
            'id_penerbit' => '2',
            'tahun_buku' => 2024,
            'jumlah_buku' => 50,
            'tanggal_pengadaan' => now()
        ]);

        Buku::create([
            'judul_buku' => 'Timun',
            'id_penerbit' => '3',
            'tahun_buku' => 2024,
            'jumlah_buku' => 50,
            'tanggal_pengadaan' => now()
        ]);
    }
}
