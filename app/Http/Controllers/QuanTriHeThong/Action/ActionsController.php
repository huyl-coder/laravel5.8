<?php

namespace App\Http\Controllers\QuanTriHeThong\Action;

use App\Entity\actions;
use App\Entity\modules;
use App\Entity\controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = actions::all();
        return view('admin.QuanTriHeThong.Action.Actions.index',['lists'=>$lists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actions = new actions();
        $actions->id = 0;
        $actions->moduleid = 0;
        $controller = controllers::where('moduleid',$actions->moduleid)->get();
        $modules = modules::all();
        return view('admin.QuanTriHeThong.Action.Actions.input',['actions'=>$actions,'modules'=>$modules,'controller'=>$controller]);
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
            $actions = new actions();
        }else{
            $actions = actions::find($id);
        }
        $request->validate([
            'ten'=>'required'
        ]);
        $actions->ten = $request->ten;
        $actions->kichhoat = $request->kichhoat;
        $actions->controllerid = $request->controller;
        $actions->moduleid = $request->module;
        $actions->route = $request->route;
        $actions->save();
        return redirect()->route('QuanTriHeThong.Action.Actions.index')->with('success','Bạn đã lưu thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\actions  $actions
     * @return \Illuminate\Http\Response
     */
    public function show(actions $actions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\actions  $actions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actions = actions::find($id);
        $controller = controllers::where('moduleid',$actions->moduleid)->get();
        $modules = modules::all();
        return view('admin.QuanTriHeThong.Action.Actions.input',['actions'=>$actions,'modules'=>$modules,'controller'=>$controller]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\actions  $actions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, actions $actions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\actions  $actions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        actions::find($id)->delete();
    }
}
