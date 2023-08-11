<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employer;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'category',
        'description',
        'requirements',
        'salary'
    ];

    public function user(){
        return $this->belongsTo(Employer::class);
    }
}
