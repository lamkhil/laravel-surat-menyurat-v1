<?php

namespace Database\Seeders;

use App\Models\Classification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Classification::create([
            'code' => 'KEMATIAN',
            'type' => 'Kematian Terkait Yang Tidak Memiliki Dokumen Kependudukan Terakhir',
            'jenis_surat' => 'service',
        ]);
        Classification::create([
            'code' => 'BERPERGIAN',
            'type' => 'Berpergian',
            'jenis_surat' => 'service',
        ]);
        Classification::create([
            'code' => 'WARIS',
            'type' => 'Status Ahli Waris',
            'jenis_surat' => 'service',
        ]);
        Classification::create([
            'code' => 'NIKAH',
            'type' => 'Permohonan Nikah',
            'jenis_surat' => 'service',
        ]);
        Classification::create([
            'code' => 'SKTM',
            'type' => 'Tidak Mampu/SKTM',
            'jenis_surat' => 'service',
        ]);
        Classification::create([
            'code' => 'CERAI',
            'type' => 'Permohonan Cerai',
            'jenis_surat' => 'service',
        ]);
        Classification::create([
            'code' => 'KREDIT',
            'type' => 'Kredit/Pinjam Uang di Bank',
            'jenis_surat' => 'service',
        ]);
        Classification::create([
            'code' => 'KERAMAIAN',
            'type' => 'Izin Keramaian',
            'jenis_surat' => 'service',
        ]);
        Classification::create([
            'code' => 'PENUTUPJALAN',
            'type' => 'Izin Penutupan Jalan',
            'jenis_surat' => 'service',
        ]);
        Classification::create([
            'code' => 'SKCK',
            'type' => 'Mengurus SKCK',
            'jenis_surat' => 'service',
            'description' => 'Surat pengantar mengurus SKCK',
        ]);
        Classification::create([
            'code' => 'USAHA',
            'type' => 'Keterangan Tempat Usaha',
            'jenis_surat' => 'service',
            'description' => 'Surat Mengurus Izin Usaha',
        ]);
        Classification::create([
            'code' => 'KUASA',
            'type' => 'Surat Kuasa',
            'jenis_surat' => 'service',
            'description' => 'Surat Kuasa',
        ]);
        Classification::create([
            'code' => 'KIP',
            'type' => 'Mengurus Kartu Indonesia Pintar (KIP)',
            'jenis_surat' => 'service',
            'description' => 'Surat Keterangan Kartu Indonesia Pintar (KIP)',
        ]);
        Classification::create([
            'code' => 'LAINNYA',
            'type' => 'Surat Keterangan Lainnya',
            'jenis_surat' => 'service',
            'description' => 'LAINNYA',
        ]);
        
    }
}
