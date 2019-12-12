<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $fillable = ['nama_depan','nama_belakang','jenis_kelamin','agama','alamat','avatar'];

    public function getAvatar()
    {
       if (!$this->avatar) {
           return asset('images/default.jpg');
       }

       return asset('images/'.$this->avatar);
    }

    public function subject()
    {
        return $this->belongsToMany(subject::class)->withPivot(['nilai'])->withTimeStamps();
    }
}
