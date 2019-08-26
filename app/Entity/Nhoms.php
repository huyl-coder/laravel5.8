<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nhoms extends Model
{
    use SoftDeletes;
    protected $table = 'nhoms';
    public $timestamps = false;
}
