<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
        'name' => 'Shounen',
        'description' => 'Shōnen manga is an editorial category of Japanese comics targeting an audience of adolescent boys.',
        ]);

        Genre::create([
            'name' => 'Drama',
            'description' => 'Drama is a captivating literary genre that is brought to life through performance.',
        ]);

        Genre::create([
            'name' => 'School',
            'description' => ' It focuses on school students and is closely related to other genres such as slice of life, action, comedy, and especially romance.',
        ]);

        Genre::create([
            'name' => 'adventure',
            'description' => 'genre yang menampilkan petualangan tokoh utama melewati berbagai rintangan untuk mencapai tujuannya.',
        ]);

        Genre::create([
            'name' => 'comedy',
            'description' => 'genre yang menempatkan karakter dalam situasi lucu demi humor.',
        ]);
    }
}
