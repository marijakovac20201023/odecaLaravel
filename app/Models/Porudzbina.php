<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porudzbina extends Model
{
    use HasFactory;
    protected $fillable = [
        'cena',
        'adresaDostave',
        'status',
        'user_id',
        'odeca_id'
    ];


    public function klijent()
    {
       return $this->belongsTo(User::class);
    }
    public function odeca()
    {
       return $this->hasMany(Odeca::class);
    }

}
