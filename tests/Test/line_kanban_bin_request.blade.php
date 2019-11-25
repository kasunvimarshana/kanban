@extends('layouts.home_layout_1')

@section('section_stylesheet_optional')
    @parent
@endsection

@section('section_script_optional')
    @parent
    <script>
        $(document).ready(function(){
        }); 
    </script>
@endsection

@section('contant')
<!-- row -->
<div class="row pb-4">
    <!-- col -->
    <div class="col col-sm-12">

        <!-- ---------------------------------------------------------------------------- -->
        <div class="row">
            
        <!-- -->
        <div class="col col-12 col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 p-3">
            <div class="card text-white bg-light border-light">
                <div class="card-header text-muted p-0 m-0 border-0 rounded-1">
                    <div class="row no-gutters">
                        <div class="col col-12">
                            <div class="col m-1 d-flex w-100 justify-content-between">
                                <span class="text-monospace text-justify">
                                    <span class="text-wrap text-break font-weight-bold text-dark">
                                    <b>Line</b>
                                    </span>
                                </span>
                                <span class="text-monospace text-justify">
                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                </span>
                            </div>
                        </div>
                        <div class="col col-12">
                            <div class="col m-1 d-flex w-100 justify-content-between">
                                <span class="text-monospace text-justify">
                                    <span class="text-wrap text-break font-weight-bold text-dark">
                                    <b>Bin</b>
                                    </span>
                                </span>
                                <span class="text-monospace text-justify">
                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                </span>
                            </div>
                        </div>
                        <div class="col col-12">
                            <div class="col m-1 d-flex w-100 justify-content-between">
                                <span class="text-monospace text-justify">
                                    <span class="text-wrap text-break font-weight-bold text-dark">
                                    <b>Countdown</b>
                                    </span>
                                </span>
                                <span class="text-monospace text-justify">
                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                </span>
                            </div>
                        </div>
                        <div class="col col-12">
                            <div class="col m-1">
                                <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                                    <div class="btn-group btn-group-lg w-100" role="group" aria-label="Group">
                                        <button type="button" class="btn btn-dark btn-lg mx-auto btn-block text-light border-0 rounded-1">Send Request</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0 m-0 border-0 rounded-1">
                    <div class="row no-gutters">
                        <!-- h5 class="card-title">Title</h5 -->
                        <!-- p class="card-text">Text</p -->
                        <!-- col -->
                        <div class="col">
                            <!-- small card -->
                            <div class="small-box bg-secondary p-0 m-0 border-0 rounded-1">
                                <!-- Loading (remove the following to stop the loading)-->
                                <!-- div class="overlay">
                                    <i class="fas fa-3x fa-sync fa-sync-alt fa-spin"></i>
                                </div -->
                                <!-- /.Loading (remove the following to stop the loading)-->
                                <div class="inner">
                                    <!-- h3>0<sup style="font-size: 20px">%</sup></h3 -->
                                    <!-- p>Text</p -->
                                    <!-- list-group -->
                                    <ul class="list-group h-100 w-100">
                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Line</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->
                                        
                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Bin</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Request Time</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->
                                        
                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Issued Time</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Quantity Request</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->
                                        
                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Quantity Issued</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Countdown</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->
                                    </ul>
                                    <!-- /.list-group -->
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <!-- a href="#" class="small-box-footer"> Text <i class="fas fa-arrow-circle-right"></i></a -->
                            </div>
                            <!-- /.small card -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <!--
                <div class="card-footer text-muted p-0 m-0 border-0 rounded-1">
                    <div class="row no-gutters">
                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Group">
                                <button type="button" class="btn btn-dark btn-lg mx-auto btn-block text-light border-0 rounded-1">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
        <!-- -->
            
        <!-- -->
        <div class="col col-12 col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 p-3">
            <div class="card text-white bg-light border-light">
                <!-- div class="card-header">
                    <div class="row no-gutters">
                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Group">
                                <button type="button" class="btn btn-dark btn-lg mx-auto btn-block text-light">Send Request</button>
                            </div>
                        </div>
                    </div>
                </div -->
                <div class="card-body p-0 m-0">
                    <div class="row no-gutters">
                        <!-- h5 class="card-title">Title</h5 -->
                        <!-- p class="card-text">Text</p -->
                        <!-- col -->
                        <div class="col">
                            <!-- small card -->
                            <div class="small-box bg-secondary p-0 m-0">
                                <div class="inner">
                                    <!-- h3>0<sup style="font-size: 20px">%</sup></h3 -->
                                    <!-- p>Text</p -->
                                    <!-- list-group -->
                                    <ul class="list-group h-100 w-100">
                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Line</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Active Time</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Quantity</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Countdown</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->
                                    </ul>
                                    <!-- /.list-group -->
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <!-- a href="#" class="small-box-footer"> Text <i class="fas fa-arrow-circle-right"></i></a -->
                            </div>
                            <!-- /.small card -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <div class="card-footer text-muted p-0">
                    <div class="row no-gutters">
                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Group">
                                <button type="button" class="btn btn-dark btn-lg mx-auto btn-block text-light">Send Request</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -->
            
        <!-- -->
        <div class="col col-12 col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 p-3">
            <div class="card text-white bg-light border-light">
                <!-- div class="card-header">
                    <div class="row no-gutters">
                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Group">
                                <button type="button" class="btn btn-dark btn-lg mx-auto btn-block text-light">Send Request</button>
                            </div>
                        </div>
                    </div>
                </div -->
                <div class="card-body p-0 m-0">
                    <div class="row no-gutters">
                        <!-- h5 class="card-title">Title</h5 -->
                        <!-- p class="card-text">Text</p -->
                        <!-- col -->
                        <div class="col">
                            <!-- small card -->
                            <div class="small-box bg-secondary p-0 m-0">
                                <div class="inner">
                                    <!-- h3>0<sup style="font-size: 20px">%</sup></h3 -->
                                    <!-- p>Text</p -->
                                    <!-- list-group -->
                                    <ul class="list-group h-100 w-100">
                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Line</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Active Time</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Quantity</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Countdown</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->
                                    </ul>
                                    <!-- /.list-group -->
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <!-- a href="#" class="small-box-footer"> Text <i class="fas fa-arrow-circle-right"></i></a -->
                            </div>
                            <!-- /.small card -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <div class="card-footer text-muted p-0">
                    <div class="row no-gutters">
                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Group">
                                <button type="button" class="btn btn-dark btn-lg mx-auto btn-block text-light">Send Request</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -->
            
        <!-- -->
        <div class="col col-12 col-xs-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 p-3">
            <div class="card text-white bg-light border-light">
                <!-- div class="card-header">
                    <div class="row no-gutters">
                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Group">
                                <button type="button" class="btn btn-dark btn-lg mx-auto btn-block text-light">Send Request</button>
                            </div>
                        </div>
                    </div>
                </div -->
                <div class="card-body p-0 m-0">
                    <div class="row no-gutters">
                        <!-- h5 class="card-title">Title</h5 -->
                        <!-- p class="card-text">Text</p -->
                        <!-- col -->
                        <div class="col">
                            <!-- small card -->
                            <div class="small-box bg-secondary p-0 m-0">
                                <div class="inner">
                                    <!-- h3>0<sup style="font-size: 20px">%</sup></h3 -->
                                    <!-- p>Text</p -->
                                    <!-- list-group -->
                                    <ul class="list-group h-100 w-100">
                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Line</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Active Time</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Quantity</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Countdown</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify">
                                                    <span class="badge badge-secondary text-wrap text-break text-light">0</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->
                                    </ul>
                                    <!-- /.list-group -->
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <!-- a href="#" class="small-box-footer"> Text <i class="fas fa-arrow-circle-right"></i></a -->
                            </div>
                            <!-- /.small card -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <div class="card-footer text-muted p-0">
                    <div class="row no-gutters">
                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Group">
                                <button type="button" class="btn btn-dark btn-lg mx-auto btn-block text-light">Send Request</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- -->
            
        </div>
        <!-- ---------------------------------------------------------------------------- -->

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection