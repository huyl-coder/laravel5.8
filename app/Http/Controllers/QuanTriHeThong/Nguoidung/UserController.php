<?php

namespace App\Http\Controllers\QuanTriHeThong\Nguoidung;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Entity\NguoiDungVaNhom;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $User = User::all();
        return view('admin.QuanTriHeThong.Nguoidung.Users.index', ['User' => $User]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id=0;
        $Nhom = DB::table('nhoms')
            ->leftJoin('nguoi_dung_va_nhoms', function ($join) use ($id) {
                $join->on('nguoi_dung_va_nhoms.id_nhom', '=', 'nhoms.id')->where('nguoi_dung_va_nhoms.id_user', '=', $id);
            })
            ->select('nhoms.*', 'nguoi_dung_va_nhoms.id_user')
            ->orderBy('nhoms.ten')
            ->get();
        $User = new User();
        $User->id = 0;
        return view('admin.QuanTriHeThong.Nguoidung.users.input', ['User' => $User, 'Nhom' => $Nhom]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        if($id>0){
            $User = User::find($id);
        }else{
            $User = new User();
        }
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required',
            ]
        );
        $User->name = $request->name;
        $User->email = $request->email;
        $User->save();
        $id = $User->id;
        NguoiDungVaNhom::deleteByUserid($id);
        $nguoiDungVaNhom = $request->nguoiDungVaNhom;
        foreach ($nguoiDungVaNhom as $itemNguoiVaNhom) {
            $newNguoiDungVaNhom = new NguoiDungVaNhom();
            $newNguoiDungVaNhom->id_user = $id;
            $newNguoiDungVaNhom->id_nhom = $itemNguoiVaNhom;
            $newNguoiDungVaNhom->save();
        }
        return redirect()->route('QuanTriHeThong.Nguoidung.User.index')->with('success', 'Bạn đã lưu thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Nhom = DB::table('nhoms')
            ->leftJoin('nguoi_dung_va_nhoms', function ($join) use ($id) {
                $join->on('nguoi_dung_va_nhoms.id_nhom', '=', 'nhoms.id')->where('nguoi_dung_va_nhoms.id_user', '=', $id);
            })
            ->select('nhoms.*', 'nguoi_dung_va_nhoms.id_user')
            ->orderBy('nhoms.ten')
            ->get();
        $User = User::find($id);
        return view('admin.QuanTriHeThong.Nguoidung.Users.input', ['User' => $User, 'Nhom' => $Nhom]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User = User::find($id);
        $User->delete();
        NguoiDungVaNhom::deleteByUserid($id);
        return redirect()->route('QuanTriHeThong.Nguoidung.User.index')->with('success','Bạn đã xóa thành công');
    }
}
