<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBookmark extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'bookmark_id',
    ];
}
