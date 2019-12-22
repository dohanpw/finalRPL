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

    public function ratanilai()
    {
        $total = 0;
        $banyak = 0;
        
        foreach ($this->subject as $subject ) {
            if ($this->subject()->first()) {
                $total+=$subject->pivot->nilai;
                $banyak++;   
            }
        }
        if ($total == 0) { //siswa belum ada nilai samsek
            return 0;
        }
        return $total/$banyak;
         

    }
}
