<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TbPesertaSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 112; $i++) {
            $data = [
                'peserta_nip' => $faker->isbn13,
                'peserta_nama' => $faker->name,
                'peserta_email' => $faker->email,
                'peserta_ttl' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'peserta_telp' => $faker->e164PhoneNumber,
                'peserta_agama' => $faker->safeColorName,
                'peserta_gender' => $faker->randomElement(['male', 'female']),
                'peserta_alamat' => $faker->streetAddress,
                'peserta_kota' => $faker->city,
                'peserta_kodepos' => $faker->postcode,
                'peserta_portofolio'  => $faker->words($nb = 3, $asText = true),
                'peserta_payment' => $faker->creditCardType,
                'status_nama' => $faker->word,
                'course_nama' => $faker->word,
                'kelaskategori' => $faker->words($nb = 3, $asText = true)
            ];

            // Using Query Builder
            $this->db->table('tb_peserta')->insert($data);
        }
    }
}
