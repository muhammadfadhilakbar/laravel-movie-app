<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
            'id' => 1,
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'user' => 'rama',
            'rating' => '8,5',
            'date' => '12-1-2000'
            ]);
        Review::create([
            'id' => 2,
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user' => 'hilal',
            'rating' => '8,0',
            'date' => '1-3-2003'
            ]);
        Review::create([
            'id' => 3,
            'title' => 'Noragami',
            'poster' => 'movie-03.jpg',
            'user' => 'dayat',
            'rating' => '7,5',
            'date' => '25-4-1999'
            ]);
        Review::create([
            'id' => 4,
            'title' => 'Noragami',
            'poster' => 'movie-05.jpeg',
            'user' => 'reja',
            'rating' => '9,0',
            'date' => '19-10-2001'
            ]);
        Review::create([
            'id' => 5,
            'title' => 'Noragami',
            'poster' => 'movie-04.jpg',
            'user' => 'rasyid',
            'rating' => '8,5',
            'date' => '5-10-2003'
            ]);
        
    }
}
