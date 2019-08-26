@extends('admin.layouts.master')
@section('title','Quản lý nhóm')
@section('header','Quản lý nhóm')
@section('link')
    <li><a href="#">Bảng điều khiển</a></li>
    <li><a href="#">Hệ thống</a></li>
    <li class="active">Quản lý nhóm</li>
@endsection
@section('content')
    <div class="content mt-3">
        @if(session('success'))
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Thành công</span> {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif
        <div class=col-md-12>
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="fa fa-tasks"></i> Danh sách Nhóm
                                    <button type="button" id='btn-add' onclick="location.href='{{route("QuanTriHeThong.Nhom.Nhoms.create")}}'" class="btn btn-success add">Thêm mới</button>
                                </strong>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export1" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tên Nhóm</th>
                                                <th>Trạng thái</th>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no=1;
                                            @endphp
                                            @foreach($lists as $list)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$list->ten}}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Hành động </button>
                                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 33px, 0px);">
                                                                <a class="dropdown-item edit" href="{{route('QuanTriHeThong.Nhom.Nhoms.edit',$list->id)}}"><i class="fa fa-edit"></i> Sửa</a>
                                                                <a class="dropdown-item delete" href='' data-url="{{route('QuanTriHeThong.Nhom.Nhoms.destroy',$list->id)}}"><i class="fa fa-times"></i> Xóa</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection