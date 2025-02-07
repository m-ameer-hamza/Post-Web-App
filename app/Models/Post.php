<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    // fill the following fields in the database
    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    // This function is used to get the user who created the post using the user_id
    public function userData()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
