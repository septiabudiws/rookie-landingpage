<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Kategori;
use App\Models\Komentar;
use App\Models\Teknologi;
use App\Models\Artikel;
use App\Models\Projek;
use App\Models\User;

class coba extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach(range(1, 5) as $index){
            $user = User::create([
                'username' => $faker->name,
                'password' => $faker->password(8),
                'portofolio_link' => $faker->domainName,
                'moto' => $faker->text,
                'gambar' => $faker->imageUrl,
                'status' => $faker->boolean
            ]);

            $kategori = Kategori::create([
                'kategori' => $faker->word
            ]);
            
            foreach(range(1, 3) as $indekprojek){
                $projek = Projek::create([
                    'judul' => $faker->sentence(),
                    'deskripsi' => $faker->paragraph(),
                    'tujuan' => $faker->paragraph(),
                    'gambar' => $faker->imageUrl,
                    'status' => $faker->boolean,
                    'user_id' => $user->id
                ]);

                foreach (range(1, 2) as $a){
                    Teknologi::create([
                        'teknologi' => $faker->word,
                        'projek_id' => $projek->id 
                    ]);
                }
            }

            foreach (range(1, 4) as $indexartikel) {
                $artikel = Artikel::create([
                    'judul' => $faker->sentence,
                    'isi' => $faker->paragraph,
                    'gambar' => $faker->imageUrl,
                    'gambar' => $faker->imageUrl,
                    'user_id' => $user->id,
                    'kategori_id' => $kategori->id,
                ]);

                foreach(range(1,3) as $dt){
                    Komentar::create([
                        'nama' => $faker->name,
                        'isi' => $faker->paragraph,
                        'artikel_id' => $artikel->id,
                    ]);
                }
            }

        }

    }
}
