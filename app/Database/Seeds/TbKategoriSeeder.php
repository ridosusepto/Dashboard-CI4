<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TbKategoriSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 30; $i++) {
            $data = [
                'kelas_kategori' => $faker->jobTitle,
                'kelas_ket' => implode("\n", $faker->paragraphs($nb = 3)),
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];

            // Using Query Builder
            $this->db->table('tb_kategori')->insert($data);
        }
    }
}
