@extends('admin.layouts.master')
@section('title','Biểu đồ nổi')
@section('header','Biểu đồ nổi')
@section('link')
    <li><a href="#">Bảng điều khiển</a></li>
    <li><a href="#">Biểu đồ</a></li>
    <li class="active">Biểu đồ nổi</li>
@endsection
@section('content')
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Biểu đồ thực</h4>
                                <div class="flot-container">
                                    <div id="cpu-load" class="cpu-load"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Biểu đồ đường</h4>
                                <div class="flot-container">
                                    <div id="flot-line" class="flot-line"></div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /# column -->
                </div><!-- /# row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Biểu đồ tròn</h4>
                                <div class="flot-container">
                                    <div id="flot-pie" class="flot-pie-container"></div>
                                </div>
                            </div>
                        </div><!-- /# card -->
                    </div><!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Biểu đồ đường</h4>
                                <div class="flot-container">
                                    <div id="chart1" style="width:100%;height:275px;"></div>
                                </div>
                            </div>
                        </div><!-- /# card -->
                    </div><!-- /# column -->
                </div><!-- /# row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Biểu đồ thanh</h4>
                                <div class="flot-container">
                                    <div id="flotBar" style="width:100%;height:275px;"></div>
                                </div>
                            </div>
                        </div><!-- /# card -->
                    </div><!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Biểu đồ thanh</h4>
                                <div class="flot-container">
                                    <div id="flotCurve" style="width:100%;height:275px;"></div>
                                </div>
                            </div>
                        </div><!-- /# card -->
                    </div><!-- /# column -->
                </div><!-- /# row -->



            </div><!-- .animated -->
        </div>
@endsection