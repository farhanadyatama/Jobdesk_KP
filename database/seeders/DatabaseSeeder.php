<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Reservasi;
use App\Models\Pembangunan;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Reservasi::factory(10)->create();
        
        User::create([
            'name' => 'Khaedar',
            'email' => 'hedar@gmail.com',
            'password' => bcrypt('qwerty')
        ]);

        Reservasi::create([
            'tanggal' => '2022-11-04',
            'nama_kegiatan' => 'Preservasi satu',
            'target' => '4',
            'kontrak' => '3',
            'nama_perusahaan' => 'PT. Alhamdulillah',
            'konsultan_pengawas' => 'PT. Saya',
            'tanggal_kontrak' => '2021-11-04',
            'pelaksanaan' => '12',
            'pemberian_kesempatan' => '1',
            'tanggal_akhir_kontrak' => '2023-11-04',
            'keuangan_rp' => '10',
            'keuangan_persen' => '12',
            'fisik_rencana' => '3',
            'fisik_realisasi' => '3',
            'fisik_deviasi' => '3',
            'keterangan' => 'Semoga sukses bang',

        ]);
        
        Reservasi::create([
            'tanggal' => '2022-12-04',
            'nama_kegiatan' => 'Preservasi dua',
            'target' => '4',
            'kontrak' => '3',
            'nama_perusahaan' => 'PT. Alhamdulillah',
            'konsultan_pengawas' => 'PT. Saya',
            'tanggal_kontrak' => '2021-11-04',
            'pelaksanaan' => '12',
            'pemberian_kesempatan' => '1',
            'tanggal_akhir_kontrak' => '2023-11-04',
            'keuangan_rp' => '10',
            'keuangan_persen' => '12',
            'fisik_rencana' => '3',
            'fisik_realisasi' => '3',
            'fisik_deviasi' => '3',
            'keterangan' => 'Semoga sukses bang',

        ]);
        
        
        Pembangunan::create([
            'tanggal' => '2022-11-04',
            'nama_kegiatan' => 'Pembangunan satu',
            'target' => '4',
            'kontrak' => '3',
            'nama_perusahaan' => 'PT. Alhamdulillah',
            'konsultan_pengawas' => 'PT. Saya',
            'tanggal_kontrak' => '2021-11-04',
            'pelaksanaan' => '12',
            'pemberian_kesempatan' => '1',
            'tanggal_akhir_kontrak' => '2023-11-04',
            'keuangan_rp' => '10',
            'keuangan_persen' => '12',
            'fisik_rencana' => '3',
            'fisik_realisasi' => '3',
            'fisik_deviasi' => '3',
            'keterangan' => 'Semoga sukses bang',

        ]);
        Pembangunan::create([
            'tanggal' => '2022-12-04',
            'nama_kegiatan' => 'Pembangunan dua',
            'target' => '4',
            'kontrak' => '3',
            'nama_perusahaan' => 'PT. Alhamdulillah',
            'konsultan_pengawas' => 'PT. Saya',
            'tanggal_kontrak' => '2021-11-04',
            'pelaksanaan' => '12',
            'pemberian_kesempatan' => '1',
            'tanggal_akhir_kontrak' => '2023-11-04',
            'keuangan_rp' => '10',
            'keuangan_persen' => '12',
            'fisik_rencana' => '3',
            'fisik_realisasi' => '3',
            'fisik_deviasi' => '3',
            'keterangan' => 'Semoga sukses bang',

        ]);
    }
}
