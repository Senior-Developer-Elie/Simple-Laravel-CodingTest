<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    //achivements
    const STRING_LESSON_WATCHED_1 = 'First Lesson Watched';
    const STRING_LESSON_WATCHED_2 = '5 Lessons Watched';
    const STRING_LESSON_WATCHED_3 = '10 Lessons Watched';
    const STRING_LESSON_WATCHED_4 = '25 Lessons Watched';
    const STRING_LESSON_WATCHED_5 = '50 Lessons Watched';

    const NUMBER_LESSON_WATCHED_1 = 1;
    const NUMBER_LESSON_WATCHED_2 = 5;
    const NUMBER_LESSON_WATCHED_3 = 10;
    const NUMBER_LESSON_WATCHED_4 = 25;
    const NUMBER_LESSON_WATCHED_5 = 50;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title'
    ];
}
