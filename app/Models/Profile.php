<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume',
        'about',
        'skill',
        'experience',
        'education'
    ];


    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
