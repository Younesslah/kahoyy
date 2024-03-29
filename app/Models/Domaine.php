<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'departement_id',
        
    ];

    public function departement(){
        return $this->belongsTo(Departement::class);
    }


    public function personnels(){
        return $this->hasMany(Personnel::class);
    }
}
