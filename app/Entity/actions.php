<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class actions extends Model
{
    use SoftDeletes;
    protected $table='actions';
    public $timestamps='false';
    public function controllers(){
        return $this->belongsTo('App\Entity\controllers','controllerid','id');
    }
}
