<?php

namespace App\Http\Controllers\QuanTriHeThong\Action;

use App\Entity\controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dataController extends Controller
{
    public function getController($id){
        $controller = controllers::where('moduleid',$id)->where('kichhoat',1)->get();
        foreach($controller as $item){
            echo '<option value="'.$item->id.'">'.$item->ten.'</option>';
        }
    }
}