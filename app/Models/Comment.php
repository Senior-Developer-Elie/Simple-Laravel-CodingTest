<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    //achivements
    const STRING_COMMENT_WRITTEN_1 = 'First Comment Written';
    const STRING_COMMENT_WRITTEN_2 = '3 Comment Written';
    const STRING_COMMENT_WRITTEN_3 = '5 Comment Written';
    const STRING_COMMENT_WRITTEN_4 = '10 Comment Written';
    const STRING_COMMENT_WRITTEN_5 = '20 Comment Written';

    const NUMBER_COMMENT_WRITTEN_1 = 1;
    const NUMBER_COMMENT_WRITTEN_2 = 3;
    const NUMBER_COMMENT_WRITTEN_3 = 5;
    const NUMBER_COMMENT_WRITTEN_4 = 10;
    const NUMBER_COMMENT_WRITTEN_5 = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body',
        'user_id'
    ];

    /**
     * Get the user that wrote the comment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
