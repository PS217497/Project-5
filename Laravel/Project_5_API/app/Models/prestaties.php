<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestaties extends Model
{
    use HasFactory;
    protected $table = 'prestaties';
    protected $fillable = ['datum','time start','time stop','aantal','oefening_id', 'user_id'];
    public $timestamps = false;
}
