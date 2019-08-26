<?php

namespace App\Http\Controllers\QuanTriHeThong\Module;

use App\Entity\modules;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = modules::all();
        return view('admin.QuanTriHeThong.Module.Modules.index',['lists'=>$lists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules = new modules();
        $modules->id = 0;
        return view('admin.QuanTriHeThong.Module.Modules.input',['modules'=>$modules]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        if($id == 0){
            $modules = new modules();
        }else{
            $modules = modules::find($id);
        }
        $request->validate([
            'ten'=>'required'
        ]);
        if($request->kichhoat==''){
            $request->kichhoat=0;
        }
        $modules->ten = $request->ten;
        $modules->kichhoat = $request->kichhoat;
        $modules->save();
        return redirect()->route('QuanTriHeThong.Module.Modules.index')->with('success','Bạn đã lưu thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function show(modules $modules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modules = modules::find($id);
        return view('admin.QuanTriHeThong.Module.Modules.input',['modules'=>$modules]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, modules $modules)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        modules::find($id)->delete();
    }
}
