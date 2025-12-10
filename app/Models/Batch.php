<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = ['name','description'];

    public function users() { return $this->hasMany(User::class); }
    public function photos() { return $this->hasMany(Photo::class); }
}
