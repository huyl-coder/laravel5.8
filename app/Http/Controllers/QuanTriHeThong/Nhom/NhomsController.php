<?php

namespace App\Http\Controllers\QuanTriHeThong\Nhom;

use App\Entity\Nhoms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NhomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Nhoms::all();
        return view('admin.QuanTriHeThong.Nhom.Nhoms.index',['lists'=>$lists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nhom = new Nhoms();
        $nhom->id = 0;
        return view('admin.QuanTriHeThong.Nhom.Nhoms.input',['nhom'=>$nhom]);
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
            $nhom = new Nhoms();
        }else{
            $nhom = Nhoms::find($id);
        }
        $request->validate([
            'ten'=>'required'
        ]);
        $nhom->ten = $request->ten;
        $nhom->save();
        return redirect()->route('QuanTriHeThong.Nhom.Nhoms.index')->with('success','Bạn đã lưu thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entity\Nhoms  $nhoms
     * @return \Illuminate\Http\Response
     */
    public function show(Nhoms $nhoms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entity\Nhoms  $nhoms
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nhom = Nhoms::find($id);
        return view('admin.QuanTriHeThong.Nhom.Nhoms.input',['nhom'=>$nhom]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entity\Nhoms  $nhoms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nhoms $nhoms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entity\Nhoms  $nhoms
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nhoms::find($id)->delete();
    }
}
