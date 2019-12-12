<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    //
    protected $fillable = ['kode','nama','semester'];

    public function student()
    {
        return $this->belongsToMany(Student::class)->withPivot(['nilai'])->withTimeStamps();
    }
}

