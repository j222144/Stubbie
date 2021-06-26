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

    public function users(){
        return $this->belongsToMany(User::class,'user_bookmarks','bookmark_id','user_id');
    }

    public function team(){
        $this->belongsTo(Team::class);
    }

}
