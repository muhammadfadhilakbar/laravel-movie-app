<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'nama' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'deskripsi' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.'
        ],
        [
            'id' => 2,
            'nama' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'deskripsi' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.'
        ],
        [
            'id' => 3,
            'nama' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'deskripsi' => 'Haruka Sakura wants nothing to do with weaklings hes only interested in the strongest of the strong.'
        ],
        [
            'id' => 4,
            'nama' => 'One piece',
            'poster' => 'movie-05.jpeg',
            'deskripsi' => 'adalah sebuah serial anime dan manga yang diciptakan oleh Eiichiro Oda. Manga ini pertama kali diterbitkan pada tahun 1997 dan sejak itu telah menjadi salah satu seri paling populer dan terpanjang dalam sejarah. '
        ],
        [
            'id' => 5,
            'nama' => 'Wind Breaker',
            'poster' => 'movie-04.jpg',
            'deskripsi' => 'Haruka Sakura wants nothing to do with weaklings hes only interested in the strongest of the strong.'
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
