<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            'name' => 'Reza Nurfachmi',
            'email' => 'rezanurfachmi@gmail.com',
            'username' => 'santri',
            'password' => Hash::make('santri')
        ]);

        DB::table('biodata')->insert([
            'user_id' => 1,
            'tanggal_lahir' => '1989-08-16',
            'no_ktp' => '360317160889',
            'no_hp' => '081287411747',
            'jk' => 'Laki-laki'
        ]);

        DB::table('keluarga')->insert([
            'user_id' => 1,
            'status' => 'istri',
            'nama' => 'Wiwik Listiyarini',
            'tanggal_lahir' => '1989-08-16',
            'no_ktp' => '360317160889',
            'no_hp' => '081287411747',
            'email' => 'rezanurfachmi@gmail.com',
            'jk' => 'Perempuan'
        ]);


        $roles = [
            'Administrator',
            'Pimpinan Pesantren',
            'Wakil Pimpinan Pesantren',
            'Sekretariat',
            'Panitia Penerimaan Santri Baru',
            'Tata Usaha Sekolah',
            'Unit Usaha',
            'Unit Aset',
            'Bagian Keuangan',
            'Bagian Pengajaran',
            'Bagian Pengasuhan',
            'Bagian Bahasa',
            'Bagian Kesehatan',
            'Bagian Ubudiyah',
            'Bagian Perpustakaan',
            'Bagian Ekstrakurikuler'
        ];
        foreach($roles as $role){
            DB::table('roles')->insert([
                'role' => $role
            ]);
        }

        DB::table('akses')->insert([
            'user_id' => 1,
            'role_id' => 1
        ]);
        DB::table('akses')->insert([
            'user_id' => 1,
            'role_id' => 2
        ]);
    }
}
