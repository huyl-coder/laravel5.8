<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class modules extends Model
{
    use SoftDeletes;
    protected $table='modules';
    public $timestamps='false';
}
