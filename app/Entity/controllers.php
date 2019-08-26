<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class controllers extends Model
{
    use SoftDeletes;
    protected $table='controllers';
    public $timestamps='false';
    public function modules(){
        return $this->belongsTo('App\Entity\modules','moduleid','id');
    }
}
