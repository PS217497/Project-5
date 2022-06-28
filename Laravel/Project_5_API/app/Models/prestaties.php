<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestaties extends Model
{
    use HasFactory;
    protected $table = 'prestaties';
    protected $fillable = ['datum','time_start','time_stop', 'user_id','oefening_id','aantal'];
    public $timestamps = false;
}
