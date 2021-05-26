<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    use HasFactory;

    protected $fillable = [
        'horas_manha',
        'horas_tarde',
        'horas_noite'
    ];

    public function employees()
    {
        return $this->belongsTo(related: Employee::class);
    }
}
