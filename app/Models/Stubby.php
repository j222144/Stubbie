<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stubby extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'stubby_name',
        'expiry_time',
        'is_active',
        'short_url',
        'long_url',
    ];

    public function user(){
        $this->belongsTo(User::class);
    }
}
