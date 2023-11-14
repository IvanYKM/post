<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Post extends Model
{
    use HasFactory;

    // Relación una a muchos inversa
    public function user(){
        return $this->belongsTo(Category::class);
    }

    // Relación muchos a muchos
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    // Relación uno a uno polimórfica
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
