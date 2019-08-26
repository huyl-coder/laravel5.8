<?php

namespace App\Http\Controllers\QuanTriHeThong\Controller;

use App\Entity\controllers;
use App\Entity\modules;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = controllers::all();
        return view('admin.QuanTriHeThong.Controller.Controllers.index',['lists'=>$lists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $controllers = new controllers();
        $controllers->id = 0;
        $modules = modules::where('kichhoat',1)->get();
        return view('admin.QuanTriHeThong.Controller.Controllers.input',['controllers'=>$controllers,'modules'=>$modules]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        if($id==0){
            $controllers = new controllers();
        }else{
            $controllers = controllers::find($id);
        }
        $request->validate([
            'ten'=>'required'
        ]);
        if($request->kichhoat==''){
            $request->kichhoat=0;
        }
        $controllers->ten = $request->ten;
        $controllers->kichhoat = $request->kichhoat;
        $controllers->moduleid = $request->module;
        $controllers->save();
        return redirect()->route('QuanTriHeThong.Controller.Controllers.index')->with('success','Bạn đã lưu thành công');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\controllers  $controllers
     * @return \Illuminate\Http\Response
     */
    public function show(controllers $controllers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\controllers  $controllers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $controllers = controllers::find($id);
        $modules = modules::where('kichhoat',1)->get();
        return view('admin.QuanTriHeThong.Controller.Controllers.input',['controllers'=>$controllers,'modules'=>$modules]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\controllers  $controllers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, controllers $controllers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\controllers  $controllers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        controllers::find($id)->delete();
    }
}
