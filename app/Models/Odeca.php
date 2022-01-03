<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odeca extends Model
{
    use HasFactory;
    protected $fillable = [
        'naziv',
        'opis',
        'proizvedenoU',
        'velicina',
        'kategorija_id'
    ];

    public function kategorija()
    {
       return $this->belongsTo(Kategorija::class); //svaki komad odece pripada jednoj kategoriji
    }
    public function porudzbina()
    {
       return $this->belongsTo(Porudzbina::class); //svaki komad odece pripada samo jednoj porudzbini
    }

}
