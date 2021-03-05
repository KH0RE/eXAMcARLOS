<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    public $timetamps = false;
    protected $fillable = ['descripcion'];

    public function user2s () {
        return $this->belongsToMany('App\User2')->withTimestamps();
    }
}
