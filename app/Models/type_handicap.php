<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_handicap extends Model
{
    protected $fillable = ['nom', 'description'];
    use HasFactory;
}
