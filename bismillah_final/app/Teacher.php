<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['nama','alamat','telepon'];

    public function subject()
    {
        return $this->hasMany(subject::class);
    }

    
}
