<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre; 

class game extends Model
{
    use HasFactory;
    protected $table = "games";
    protected $fillable = ['genree', 'game', 'developer', 'description','Code'];

    public function genre(){
        return $this->BelongsTo(Genre::class, 'Code','genre_code');
    }
}