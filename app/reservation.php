<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    //

protected $table = 'reservations';
   //public  $timestamps = false;
    protected $guarded = ['id'];
protected $fillable = ['email','fname','sname','country','phone','bdate','roomtype','checkin','checkout','r_no'];




}
