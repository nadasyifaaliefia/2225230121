<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nada extends Model
{
    use HasFactory;
    protected $table= "nada";
    protected $fillable=['Nama', 'Hobi', 'CitaCita', 'NIM'];
}
