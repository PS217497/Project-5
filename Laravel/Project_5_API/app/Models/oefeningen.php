<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oefeningen extends Model
{
    use HasFactory;
    protected $table = 'oefeningen';
    protected $fillable = ['Name_nl','Name_en','instructie_nl','instructie_en'];
    public $timestamps = false;
}
