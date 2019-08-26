<?php

namespace App\Http\Controllers\QuanTriHeThong\Menu;

use App\Entity\actions;
use App\Http\Controllers\Controller;
use App\Entity\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Menu::all();
        $listSau = [];
        Menu::menuParent($lists, $listSau, 0, 0);
        return view('admin.QuanTriHeThong.Menu.Menu.index', ['lists' => $listSau]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = 0;
        $menu = new Menu();
        $menu->id = 0;
        $menu->chaId = 0;
        $menu->level = 0;
        $menus = Menu::all();
        $option = [];
        Menu::optionMenu($menus,$option,0,$menu->chaId,$id);
        $action = actions::all();
        return view('admin.QuanTriHeThong.Menu.Menu.input', ['menu' => $menu,'option'=>$option,'action'=>$action]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        if($id > 0){
            $save = Menu::find($id);
            $list = Menu::all();
            $listSau = [];
            Menu::updateMenu($list,$listSau,$id,$request->level);
            foreach($listSau as $val){
                $saveCon = Menu::find($val->id);
                $saveCon->level = $val->levelParent;
                $saveCon->save();
            }
        }else{
            $save = new Menu();
        }
        $request->validate([
            'name' => 'required',
            'icon' => 'required'
        ]);
        if($request->parent == 0 || $request->link==''){
            $request->action = 0;
        }
        $save->icon = $request->icon;
        $save->ten = $request->name;
        $save->link = $request->link;
        $save->chaId = $request->parent;
        $save->actionId = $request->action;
        $save->level = $request->level;
        $save->openMenu = $request->openMenu;
        $save->save();
        return redirect()->route('QuanTriHeThong.Menu.Menu.index')->with('success', 'Bạn đã lưu thành công.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = Menu::find($id);
        $list = Menu::all();
        return view('admin.QuanTriHeThong.Menu.Menu.show',['detail'=>$detail,'list'=>$list]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        $menus = Menu::all();
        $option = [];
        $edit = Menu::where('chaId',$id)->first();
        if($edit['id'] == null){
            Menu::optionMenu($menus,$option,0,$menu->chaId,$id);
        }else{
            Menu::editMenu($menus,$option,0,$menu->chaId,$id);
        }
        $action = actions::all();
        return view('admin.QuanTriHeThong.Menu.Menu.input', ['menu' => $menu,'option'=>$option,'action'=>$action]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $list = Menu::all();
        $listSau=[];
        Menu::deleteMenu($list,$listSau,$id);
        Menu::find($id)->delete();
        foreach($listSau as $val){
            Menu::find($val->id)->delete();
        }
        return redirect()->route('QuanTriHeThong.Menu.Menu.index')->with('success','Bạn đã xóa thành công.');
    }
    
}
