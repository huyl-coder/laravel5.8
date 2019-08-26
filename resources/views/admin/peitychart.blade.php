@extends('admin.layouts.master')
@section('title','Biểu đồ ngang hàng')
@section('header','Biểu đồ ngang hàng')
@section('link')
    <li><a href="#">Bảng điều khiển</a></li>
    <li><a href="#">Biều đồ</a></li>
    <li class="active">Biểu đồ ngang hàng</li>
@endsection
@section('content')
    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Biểu đồ tròn</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <span class="pie" data-peity='{ "fill": ["#13dafe", "#f2f2f2"]}'>1/5</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="pie" data-peity='{ "fill": ["#6164C1", "#f2f2f2"]}'>226/360</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="pie" data-peity='{ "fill": ["#F96262", "#f2f2f2"]}'>0.52/1.561</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="pie" data-peity='{ "fill": ["#99D683", "#f2f2f2"]}'>1,4</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="pie" data-peity='{ "fill": ["#FFCA4A", "#f2f2f2"]}'>226,134</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="pie" data-peity='{ "fill": ["#4C5667", "#f2f2f2"]}'>0.52,1.041</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <!-- /# row -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Biểu đồ bánh rán</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <span class="donut" data-peity='{ "fill": ["#13DAFE", "#f2f2f2"]}'>1/5</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="donut" data-peity='{ "fill": ["#6164C1", "#f2f2f2"]}'>226/360</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="donut" data-peity='{ "fill": ["#F96262", "#f2f2f2"]}'>0.52/1.561</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="donut" data-peity='{ "fill": ["#99D683", "#f2f2f2"]}'>1,4</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="donut" data-peity='{ "fill": ["#FFCA4A", "#f2f2f2"]}'>226,134</span>
                                    </div>
                                    <div class="col-lg-2">
                                        <span class="donut" data-peity='{ "fill": ["#4C5667", "#f2f2f2"]}'>0.52,1.041</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <!-- /# row -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Biểu đồ đường</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span class="peity-line" data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <span class="peity-line" data-width="100%">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <span class="peity-line" data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <!-- /# row -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Biểu đồ thanh</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span class="bar" data-peity='{ "fill": ["#13DAFE", "#6164C1"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <span class="bar" data-peity='{ "fill": ["#F96262", "#f2f2f2"]}'>6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                    </div>
                                    <div class="col-lg-4">
                                        <span class="bar" data-peity='{ "fill": ["#99D683", "#4C5667"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <!-- /# row -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Thuộc tính dữ liệu</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <p class="data-attributes">
                                            <span data-peity='{ "fill": ["#13DAFE", "#eeeeee"],    "innerRadius": 10, "radius": 40 }'>1/7</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-2">
                                        <p class="data-attributes">
                                            <span data-peity='{ "fill": ["#6164C1", "#eeeeee"], "innerRadius": 14, "radius": 36 }'>2/7</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-2">
                                        <p class="data-attributes">
                                            <span data-peity='{ "fill": ["#F96262", "#eeeeee"], "innerRadius": 16, "radius": 32 }'>3/7</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-2">
                                        <p class="data-attributes">
                                            <span data-peity='{ "fill": ["#99D683", "#eeeeee"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-2">
                                        <p class="data-attributes">
                                            <span data-peity='{ "fill": ["#FFCA4A", "#eeeeee"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-2">
                                        <p class="data-attributes">
                                            <span data-peity='{ "fill": ["indigo", "#eeeeee"], "innerRadius": 18, "radius": 20 }'>6/7</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <!-- /# row -->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Cài đặt màu sắc linh hoạt</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <span class="bar-colours-1">5,3,9,6,5,9,7,3,5,2</span>
                                    </div>
                                    <div class="col-lg-3">
                                        <span class="bar-colours-2">5,3,2,-1,-3,-2,2,3,5,2</span>
                                    </div>
                                    <div class="col-lg-3">
                                        <span class="bar-colours-3">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
                                    </div>
                                    <div class="col-lg-3">
                                        <span class="pie-colours-2">5,3,9,6,5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->

                    <!-- /# row -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Biểu đồ nâng cấp</h4>
                            </div>
                            <div class="card-body">
                                <span class="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div> <!-- .row -->
            </div><!-- .animated -->
        </div>
@endsection