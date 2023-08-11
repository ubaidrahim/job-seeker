<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Employer extends Model
{
    use HasFactory;

    protected $table = 'employer';

    protected $fillable = [
        'name',
        'company'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function job(){
        return $this->hasMany(Job::class);
    }
}
