<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'telefone',
        'data_nasc',
        'area',
        'cargo'
    ];

    public function hours()
    {
        return $this->hasMany(Hour::class);
    }
}
