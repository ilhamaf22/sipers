<?php

namespace Database\Seeders;

use App\Models\DetailUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ilham',
            'email' => 'a@a.com',
            'password' => bcrypt('ra651752'),
        ]);

        DetailUser::create([
            'uid' => '99 43 56 17',
            'nama' => 'Ilham',
            'keterangan' => 'Mahasiswa',
            'notelp' => '083848419113'
        ]);
    }
}
