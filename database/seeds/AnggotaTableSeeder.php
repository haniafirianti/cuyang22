<?php

use Illuminate\Database\Seeder;

class AnggotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_anggota')->insert([
            'nama_anggota' => 'Ahmad',
            'jenis_kelamin' => 'Laki Laki',
            'alamat' => "Kp. Cicangkudu",
            'email' => 'ahmad@gmail.com',
            'no_telp' => '082118342147'
        ]);

        DB::table('table_anggota')->insert([
            'nama_anggota' => 'Candra',
            'jenis_kelamin' => 'Laki Laki',
            'alamat' => "Kp. Citeureup",
            'email' => 'candra@gmail.com',
            'no_telp' => '098878232498'
        ]);

        DB::table('table_anggota')->insert([
            'nama_anggota' => 'Dede Suminar',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => "Kp. Bojong Kunci",
            'email' => 'suminar@gmail.com',
            'no_telp' => '082342398432'
        ]);

        DB::table('table_anggota')->insert([
            'nama_anggota' => 'Hania',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => "Kp. Cupu",
            'email' => 'nia@gmail.com',
            'no_telp' => '085679382123'
        ]);

        DB::table('table_anggota')->insert([
            'nama_anggota' => 'Santi',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => "Kp. Bojong Tanjung",
            'email' => 'santi@gmail.com',
            'no_telp' => '085422637182'
        ]);
    }
}
