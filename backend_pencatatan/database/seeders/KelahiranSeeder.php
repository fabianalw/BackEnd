<?php

namespace Database\Seeders;

use App\Models\Kelahiran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelahiranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 5; $i++) {
            $berat = $faker->randomFloat(1, 2, 5); // Menghasilkan berat badan dengan 1 digit di belakang koma, antara 2 hingga 5
            $tgllahir = $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'); // Menghasilkan tanggal lahir bayi dalam rentang 1 tahun terakhir
            Kelahiran::create([
                'nama_bayi' => $faker->firstName,
                'nama_ibu' => $faker->name,
                'alamat' => $faker->address,
                'no_hp' => $faker->phoneNumber,
                'tanggal_lahir' => $tgllahir,
                'jam_lahir' => $faker->time('H:i:s'), // Jam lahir (format: Jam:Menit:Detik)
                'tinggi_badan' => $faker->numberBetween(45, 60), // Tinggi badan (range: 150-200)
                'berat_badan' => $berat,
                'lingkar_kepala' => $faker->numberBetween(32, 36), // lingkar kepala (range: 32-36)
                'lingkar_dada' => $faker->numberBetween(30, 33), // lingkar dada (range: 30-33)
            ]);
        }
    }
}
