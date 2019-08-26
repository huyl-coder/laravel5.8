<?php

namespace App\Http\Controllers\QuanTriHeThong\Menu;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entity\Menu;

class MenuActionController extends Controller
{
    public function getAction($id){
        $list = Menu::find($id);
        return $list->level;
    }
}
