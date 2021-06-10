<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'team_id',
        'bookmark_name',
        'website_url',
        'private',
        'favourite',
    ];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function team(){
        $this->belongsTo(Team::class);
    }
}
