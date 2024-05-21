<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'movie' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'user' => 'rama',
            'rating' => '8,5',
            'date' => '12-1-2000'
        ],
        [
            'id' => 2,
            'movie' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user' => 'hilal',
            'rating' => '8,0',
            'date' => '1-3-2003'
        ],
        [
            'id' => 2,
            'movie' => 'Noragami',
            'poster' => 'movie-03.jpg',
            'user' => 'dayat',
            'rating' => '7,5',
            'date' => '25-4-1999'
        ],
        [
            'id' => 2,
            'movie' => 'Noragami',
            'poster' => 'movie-05.jpeg',
            'user' => 'reja',
            'rating' => '9,0',
            'date' => '19-10-2001'
        ],
        [
            'id' => 2,
            'movie' => 'Noragami',
            'poster' => 'movie-04.jpg',
            'user' => 'rasyid',
            'rating' => '8,5',
            'date' => '5-10-2003'
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
