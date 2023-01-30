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
            'name' => 'Bina marga',
            'email' => 'binamarga@gmail.com',
            'password' => bcrypt('binamarga')
        ]);

        User::create([
            'name' => 'user001',
            'email' => 'user001@gmail.com',
            'password' => bcrypt('user001')
        ]);

        User::create([
            'name' => 'User002',
            'email' => 'user002@gmail.com',
            'password' => bcrypt('user002')
        ]);

        Reservasi::create([
            'tanggal' => '2022-12-04',
            'nama_kegiatan' => 'Preservasi Satu',
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
            'tanggal' => '2022-11-04',
            'nama_kegiatan' => 'PRESERVASI JALAN RUAS BORO-JENEPONTO',
            'target' => '2.770',
            'kontrak' => '4,199,890,419',
            'nama_perusahaan' => 'CV. CITRA LESTARI MANDIRI',
            'konsultan_pengawas' => 'PT. INDRA CIPTA DIMENSI',
            'tanggal_kontrak' => '2022-03-30',
            'pelaksanaan' => '150',
            'pemberian_kesempatan' => '-',
            'tanggal_akhir_kontrak' => '2022-08-26',
            'keuangan_rp' => '4,199,890,419',
            'keuangan_persen' => '100',
            'fisik_rencana' => '100',
            'fisik_realisasi' => '100',
            'fisik_deviasi' => '0.000',
            'keterangan' => '-',
        ]);
        
        Pembangunan::create([
            'tanggal' => '2022-12-04',
            'nama_kegiatan' => 'Pembangunan Satu',
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
            'nama_kegiatan' => 'PEMBANGUNAN JALAN RUAS RANTEPAO-SADAN-BATUSITANDUK DI KAB. LUWU',
            'target' => '2.400',
            'kontrak' => '13,598,726,305',
            'nama_perusahaan' => 'PT. RIDWAN JAYA LESTARI',
            'konsultan_pengawas' => 'PT. IRAYA KONSULTAN',
            'tanggal_kontrak' => '2022-11-17',
            'pelaksanaan' => '224',
            'pemberian_kesempatan' => '50',
            'tanggal_akhir_kontrak' => '2022-12-15',
            'keuangan_rp' => '2,719,745,261',
            'keuangan_persen' => '20.00',
            'fisik_rencana' => '62.653',
            'fisik_realisasi' => '60.251',
            'fisik_deviasi' => '-2.402',
            'keterangan' => 'Pas. Batu mortar, galian biasa dan batu, timb. Pilihan dari sumber galian, LPA Kls A, Lapis resap pengikat, Lapis perekat, AC-BC  serta pas. Batu talud',
        ]);
    }
}