<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $primaryKey ='genre_code';
    protected $keyType ='string';
    protected $fillable = ['genre_code', 'genre_name', 'develop',  'description'];

    public function games(){
        return $this->hasMany(Game::class, 'Code','genre_code');
    }
}