<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TbCourseSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 23; $i++) {
            $data = [
                'course_nama' => $faker->jobTitle,
                'course_kuota' => $faker->numberBetween($min = 10, $max = 50),
                'course_mentor' => $faker->name,
                'course_desk' => implode("\n", $faker->paragraphs($nb = 3)),
                'course_harga' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1000),
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];

            // Using Query Builder
            $this->db->table('tb_course')->insert($data);
        }
    }
}
