<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Seeker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'experience',
        'skills',
        'education',
       // 'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
