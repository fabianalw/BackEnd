<?php

namespace Database\Seeders;

use App\Models\Pemeriksaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemeriksaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 5; $i++) {
            // Faker nama bayi
            $namaBayi = $faker->firstName;

            // Faker nama biasa
            $namaBiasa = $faker->name;

            // Menggabungkan nama bayi dan nama biasa
            $namaLengkap = $namaBayi . ' ' . $namaBiasa;
            $age = $faker->numberBetween(1, 35);
            $gender = $faker->randomElement(['Laki-laki', 'Perempuan']);
            $jenisPemeriksaan = $faker->randomElement(['Pemeriksaan Umum', 'Pemeriksaan Kandungan', 'Pemeriksaan Bayi']);
            $tglpemeriksaan = $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'); // Menghasilkan tanggal pemeriksaan dalam rentang 1 tahun terakhir


            // Daftar diagnosa bayi palsu
            $diagnosaBayiList = [
                'Demam ringan',
                'Batuk pilek',
                'Diare',
                'Ruam pada kulit',
                'Konjungtivitis',
                'Infeksi telinga'
            ];

            // Daftar diagnosa ibu hamil palsu
            $diagnosaIbuHamilList = [
                'Hipertensi dalam kehamilan',
                'Diabetes gestasional',
                'Anemia',
                'Infeksi saluran kemih',
                'Preeklampsia',
                'Kelainan plasenta'
            ];
            // Memilih diagnosa bayi secara acak
            $diagnosaBayi = $faker->randomElement($diagnosaBayiList);

            // Memilih diagnosa ibu hamil secara acak
            $diagnosaIbuHamil = $faker->randomElement($diagnosaIbuHamilList);

            // Menggabungkan diagnosa bayi dan ibu hamil menjadi satu diagnosa
            $diagnosa = $diagnosaBayi . " " . $diagnosaIbuHamil;




            Pemeriksaan::create([
                'nama_pasien' => $namaLengkap,
                'alamat' => $faker->address,
                'usia' => $age,
                'jenis_kelamin' => $gender,
                'no_hp' => $faker->phoneNumber,
                'jenis_pemeriksaan' => $jenisPemeriksaan,
                'tanggal_pemeriksaan' => $tglpemeriksaan,
                'diagnosa' => $diagnosa,

            ]);
        }
    }
}
