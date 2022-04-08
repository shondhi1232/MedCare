<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table="posts";
    protected $fillable = [
        'body'
    ];

    public function likes(){
        return $this->hasMany(Like::class);
    }
}
