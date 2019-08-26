<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use SoftDeletes;
    protected $table='menus';
    public $timestamps='false';
    public static function menuParent($dataIn,&$dataOut,$parentValue)
    {
        foreach($dataIn as $data){
            if($data->chaId == $parentValue){
                $dataOut[]=$data;
                Menu::menuParent($dataIn,$dataOut,$data->id);
            }
        }
    }
    public static function editMenu($dataIn,&$dataOut,$parent,$parentnow,$id)
    {
        foreach($dataIn as $data){
            if($data->level < 1 && $data->actionId == 0){
                if($data->chaId == $parent && $data->id != $id){
                    $select = ($data->id==$parentnow)?'selected':'';
                    $data->select = $select;
                    $dataOut[]=$data;
                    Menu::editMenu($dataIn,$dataOut,$data->id,$parentnow,$id);
                }
            }
        }
    }
    public static function optionMenu($dataIn,&$dataOut,$parent,$parentnow,$id)
    {
        foreach($dataIn as $data){
            if($data->level <= 1 && $data->actionId == 0){
                if($data->chaId == $parent && $data->id != $id){
                    $select = ($data->id==$parentnow)?'selected':'';
                    $data->select = $select;
                    $dataOut[]=$data;
                    Menu::optionMenu($dataIn,$dataOut,$data->id,$parentnow,$id);
                }
            }
        }
    }
    public static function updateMenu($dataIn,&$dataOut,$id,$levelParent){
        foreach($dataIn as $data){
            if($data->chaId == $id){
                $data->levelParent = $levelParent+1;
                $dataOut[] = $data;
                Menu::updateMenu($dataIn,$dataOut,$data->id,$data->levelParent);
            }
        }
    }
    public static function deleteMenu($dataIn,&$dataOut,$id){
        foreach($dataIn as $data){
            if($data->chaId == $id){
                $dataOut[] = $data;
                Menu::deleteMenu($dataIn,$dataOut,$data->id);
            }
        }
    }
    public function action(){
        return $this->belongsTo('App\Entity\actions','actionId','id');
    }
}
