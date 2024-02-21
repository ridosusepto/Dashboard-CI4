<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TbKelasSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 40; $i++) {
            $data = [
                'kelas_name' => $faker->safeColorName,
                'kelas_kategori' => $faker->jobTitle,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];

            // Using Query Builder
            $this->db->table('tb_kelas')->insert($data);
        }
    }
}
