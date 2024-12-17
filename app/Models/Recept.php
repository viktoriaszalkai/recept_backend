<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recept extends Model
{
    /** @use HasFactory<\Database\Factories\ReceptFactory> */
    use HasFactory;
    protected $fillable=[
        'nev',
        'kat_id',
        'kep_eleresi_ut',
        'leiras'
    ];
    public function receptkategoria(){
        return $this -> hasMany(Szotar::class, 'id', 'kat_id');
    }

}
