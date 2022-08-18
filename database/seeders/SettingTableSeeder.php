<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'Berani Digital Indonesia',
            'alamat' => 'Berani Space Lt. 2, Jl. Diklat Pemda Aryana Blok D9 No. 32, Suka Bakti, Curug,',
            'telepon' => '081234779987',
            'tipe_nota' => 1, // kecil
            'diskon' => 5,
            'path_logo' => '/img/logo-perusahaan3.png',
            'path_kartu_member' => '/img/member.png',
        ]);
    }
}
