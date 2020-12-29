<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phongsv extends Model
{
    protected $table= 'phongsinhvien';
    protected $primaryKey ='id';
    protected $guarded = [];

  public function ttsv(){
  	return $this->belongsTo('App\Models\sinhvien','id_sv','id');
  }
}