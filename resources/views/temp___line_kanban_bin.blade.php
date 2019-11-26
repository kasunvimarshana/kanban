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
        <div class="row" id="element_container_01">
            
        <!-- -->
        <div class="col col-12 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-3">
            <div class="card text-white bg-light border-light">
                <!-- div class="card-header text-muted p-0 m-0 border-0 rounded-1">
                    <div class="row no-gutters">
                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Group">
                                <button type="button" class="btn btn-dark btn-lg mx-auto btn-block text-light">Send Request</button>
                            </div>
                        </div>
                    </div>
                </div -->
                <div class="card-body p-0 m-0 border-0 rounded-1">
                    <div class="row no-gutters">
                        <!-- h5 class="card-title">Title</h5 -->
                        <!-- p class="card-text">Text</p -->
                        <!-- col -->
                        <div class="col">
                            <!-- small card -->
                            <div class="small-box bg-secondary p-0 m-0 border-0 rounded-1">
                                <!-- Loading (remove the following to stop the loading)-->
                                <!--
                                <div class="overlay">
                                    <i class="fas fa-3x fa-sync fa-sync-alt fa-spin"></i>
                                </div>
                                -->
                                <!-- /.Loading (remove the following to stop the loading)-->
                                <div class="inner">
                                    <!-- h3>0<sup style="font-size: 20px">%</sup></h3 -->
                                    <!-- p>Text</p -->
                                    <!-- list-group -->
                                    <ul class="list-group h-100 w-100">
                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Line</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="line_id">-</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->
                                        
                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Bin</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="bin_id">-</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <div class="col w-100 collapse p-0" id="collapse_id">
                                                    <div class="col col-12 w-100 p-0">
                                                        <!-- ------------------------------------------------------ -->
                                                        <ul class="list-group h-100 w-100">
                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Request Time</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="time_request">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->
                                                            
                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Issued Time</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="time_response">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->

                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Quantity Request</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="quantity_request">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->

                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Quantity Issued</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="quantity_response">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->

                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Countdown</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="countdown_id">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->
                                                            
                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <div class="row no-gutters w-100">
                                                                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                                                                            <div class="btn-group w-100" role="group" aria-label="Group">
                                                                                <button type="button" class="btn btn-dark btn-xs mx-auto btn-block text-light border-0 rounded-1 m-1" id="button_id_01">
                                                                                    <span>Send Request</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="btn-group w-100" role="group" aria-label="Group">
                                                                                <button type="button" class="btn btn-dark btn-xs mx-auto btn-block text-light border-0 rounded-1 m-1" id="button_id_02">
                                                                                    <span>Close Request</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->
                                                        </ul>
                                                        <!-- ------------------------------------------------------ -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->
                                    </ul>
                                    <!-- /.list-group -->
                                </div>
                                <div class="icon">
                                    <!--
                                    <span class="fa-stack fa-2x">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-shopping-cart fa-fw fa-sm" data-fa-transform="shrink-8"></i>
                                    </span>
                                    -->
                                    <i class="fas fa-shopping-cart fa-fw fa-sm text-xl" data-fa-mask="fas fa-circle"></i>
                                </div>
                                <!-- a href="#" class="small-box-footer"> Text <i class="fas fa-arrow-circle-right"></i></a -->
                            </div>
                            <!-- /.small card -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <div class="card-footer text-muted p-0 m-0 border-0 rounded-1">
                    <div class="row no-gutters">
                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                            <div class="btn-group w-100" role="group" aria-label="Group">
                                <button type="button" class="btn btn-dark btn-xs mx-auto btn-block text-light border-0 rounded-1" data-toggle="collapse" data-target="#collapse_id" aria-expanded="false" aria-controls="collapse_id">
                                    <i class='fas fa-shopping-cart'></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            $(function(){
                "use strict";
                var button_id_01 = $("#button_id_01");
                
                button_id_01.off("click").on("click", function(event){
                    event.preventDefault();
                    //event.stopPropagation();
                    button_id_01.attr("disabled", true);
                    
                    var formTemplateClone = $('#formTemplate_01').contents().clone(true);
                    //var formTemplateCloneChild = formTemplateClone.children().get();
                    var formTemplateCloneChild = formTemplateClone.children().first();
                    var formTemplateCloneChildId = ('formTemplateCloneChild' + ("1"));
                    formTemplateCloneChild.find('form').attr('id', formTemplateCloneChildId);

                    var bootboxObj = bootbox.confirm({
                        size: "small",
                        title: "<p class='p-0 m-0 text-xs'><span> Line : </span><span> [-] </span></p><p class='p-0 m-0 text-xs'><span> Bin : </span><span> [-] </span></p>",
                        message: formTemplateCloneChild.html(),
                        onEscape: true,
                        show: true,
                        scrollable: true,
                        buttons: {
                            confirm: {
                                label: 'Yes',
                                className: 'btn-success',
                                callback: function(){
                                    //return false;
                                }
                            },
                            cancel: {
                                label: 'No',
                                className: 'btn-danger btn-primary',
                                callback: function(){
                                    return false;
                                }
                            }
                        },
                        callback: function (result) {
                            //console.log(result);
                            var formObj = $('#' + formTemplateCloneChildId);
                            formObj.validator('validate');
                            var quantity = formObj.find('#quantity');
                            var _token = formObj.find("[name='_token']");
                            var quantity_value = quantity.val();
                            var _token_value = _token.val();

                            if( (result === true) ){
                                if( (quantity_value == void(0)) || (quantity_value < 0) ){
                                   return false;
                                }
                            }

                            if( (result === true) ){
                                var url = "{!! route('lineKanbanBin.index', ['#argument_01']) !!}";
                                url = url.replace("#argument_01", rowData.id);
                                //$( location ).attr("href", url);
                                var formdata = new Object();
                                formdata.quantity =  quantity_value;
                                formdata._token = _token_value;

                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    data: formdata,
                                    //success: success,
                                    //dataType: dataType,
                                    //context: document.body
                                })
                                .done(function( data ) {
                                    swal({
                                        'title': data.title,
                                        'text': data.text,
                                        'type': data.type,
                                        'timer': data.timer,
                                        'showConfirmButton': false
                                    });
                                    //$('#dataTableId').DataTable().ajax.reload( null, false ); // user paging is not reset on reload
                                })
                                .fail(function() {
                                    //console.log( "error" );
                                })
                                .always(function() {
                                    //console.log( "finished" );
                                    button_id_01.attr("disabled", false);
                                });

                            }else{
                                button_id_01.attr("disabled", false);
                            }
                        }
                    })
                        .find('.modal-header').addClass('custom-modal-header')
                        /*.find('.bootbox-cancel:first').focus()
                        .find('.bootbox-cancel').attr('autofocus', true)
                        .on('shown.bs.modal', function(e){
                            $(this).find(".bootbox-cancel:first").focus();
                        })*/
                        .init(function(e){
                            $(this).find(".bootbox-cancel").focus();
                        });
                });
            });
            </script>
            <script>
            $(function(){
                "use strict";
                var button_id_01 = $("#button_id_02");
                
                button_id_01.off("click").on("click", function(event){
                    event.preventDefault();
                    //event.stopPropagation();
                    button_id_01.attr("disabled", true);
                    
                    var formTemplateClone = $('#formTemplate_02').contents().clone(true);
                    //var formTemplateCloneChild = formTemplateClone.children().get();
                    var formTemplateCloneChild = formTemplateClone.children().first();
                    var formTemplateCloneChildId = ('formTemplateCloneChild' + ("1"));
                    formTemplateCloneChild.find('form').attr('id', formTemplateCloneChildId);

                    var bootboxObj = bootbox.confirm({
                        size: "small",
                        title: "<p class='p-0 m-0 text-xs'><span> Line : </span><span> [-] </span></p><p class='p-0 m-0 text-xs'><span> Bin : </span><span> [-] </span></p>",
                        message: formTemplateCloneChild.html(),
                        onEscape: true,
                        show: true,
                        scrollable: true,
                        buttons: {
                            confirm: {
                                label: 'Yes',
                                className: 'btn-success',
                                callback: function(){
                                    //return false;
                                }
                            },
                            cancel: {
                                label: 'No',
                                className: 'btn-danger btn-primary',
                                callback: function(){
                                    return false;
                                }
                            }
                        },
                        callback: function (result) {
                            //console.log(result);
                            var formObj = $('#' + formTemplateCloneChildId);
                            formObj.validator('validate');
                            var quantity = formObj.find('#quantity');
                            var _token = formObj.find("[name='_token']");
                            var quantity_value = quantity.val();
                            var _token_value = _token.val();

                            if( (result === true) ){
                                if( (quantity_value == void(0)) || (quantity_value < 0) ){
                                   return false;
                                }
                            }

                            if( (result === true) ){
                                var url = "{!! route('lineKanbanBin.index', ['#argument_01']) !!}";
                                url = url.replace("#argument_01", rowData.id);
                                //$( location ).attr("href", url);
                                var formdata = new Object();
                                formdata.quantity =  quantity_value;
                                formdata._token = _token_value;

                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    data: formdata,
                                    //success: success,
                                    //dataType: dataType,
                                    //context: document.body
                                })
                                .done(function( data ) {
                                    swal({
                                        'title': data.title,
                                        'text': data.text,
                                        'type': data.type,
                                        'timer': data.timer,
                                        'showConfirmButton': false
                                    });
                                    //$('#dataTableId').DataTable().ajax.reload( null, false ); // user paging is not reset on reload
                                })
                                .fail(function() {
                                    //console.log( "error" );
                                })
                                .always(function() {
                                    //console.log( "finished" );
                                    button_id_01.attr("disabled", false);
                                });

                            }else{
                                button_id_01.attr("disabled", false);
                            }
                        }
                    })
                        .find('.modal-header').addClass('custom-modal-header')
                        /*.find('.bootbox-cancel:first').focus()
                        .find('.bootbox-cancel').attr('autofocus', true)
                        .on('shown.bs.modal', function(e){
                            $(this).find(".bootbox-cancel:first").focus();
                        })*/
                        .init(function(e){
                            $(this).find(".bootbox-cancel").focus();
                        });
                });
            });
            </script>
        </div>
        <!-- -->
            
        <!-- -->
        <div class="col col-12 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-3">
            <div class="card text-white bg-light border-light">
                <!-- div class="card-header text-muted p-0 m-0 border-0 rounded-1">
                    <div class="row no-gutters">
                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Group">
                                <button type="button" class="btn btn-dark btn-lg mx-auto btn-block text-light">Send Request</button>
                            </div>
                        </div>
                    </div>
                </div -->
                <div class="card-body p-0 m-0 border-0 rounded-1">
                    <div class="row no-gutters">
                        <!-- h5 class="card-title">Title</h5 -->
                        <!-- p class="card-text">Text</p -->
                        <!-- col -->
                        <div class="col">
                            <!-- small card -->
                            <div class="small-box bg-secondary p-0 m-0 border-0 rounded-1">
                                <!-- Loading (remove the following to stop the loading)-->
                                <!--
                                <div class="overlay">
                                    <i class="fas fa-3x fa-sync fa-sync-alt fa-spin"></i>
                                </div>
                                -->
                                <!-- /.Loading (remove the following to stop the loading)-->
                                <div class="inner">
                                    <!-- h3>0<sup style="font-size: 20px">%</sup></h3 -->
                                    <!-- p>Text</p -->
                                    <!-- list-group -->
                                    <ul class="list-group h-100 w-100">
                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Line</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="line_id">-</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->
                                        
                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Bin</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="bin_id">-</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <div class="col w-100 collapse p-0" id="collapse_id">
                                                    <div class="col col-12 w-100 p-0">
                                                        <!-- ------------------------------------------------------ -->
                                                        <ul class="list-group h-100 w-100">
                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Request Time</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="time_request">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->
                                                            
                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Issued Time</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="time_response">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->

                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Quantity Request</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="quantity_request">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->

                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Quantity Issued</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="quantity_response">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->

                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Countdown</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="countdown_id">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->
                                                            
                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <div class="row no-gutters w-100">
                                                                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                                                                            <div class="btn-group w-100" role="group" aria-label="Group">
                                                                                <button type="button" class="btn btn-dark btn-xs mx-auto btn-block text-light border-0 rounded-1 m-1" id="button_id_01">
                                                                                    <span>Send Request</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="btn-group w-100" role="group" aria-label="Group">
                                                                                <button type="button" class="btn btn-dark btn-xs mx-auto btn-block text-light border-0 rounded-1 m-1" id="button_id_02">
                                                                                    <span>Close Request</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->
                                                        </ul>
                                                        <!-- ------------------------------------------------------ -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->
                                    </ul>
                                    <!-- /.list-group -->
                                </div>
                                <div class="icon">
                                    <!--
                                    <span class="fa-stack fa-2x">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-shopping-cart fa-fw fa-sm" data-fa-transform="shrink-8"></i>
                                    </span>
                                    -->
                                    <i class="fas fa-shopping-cart fa-fw fa-sm text-xl" data-fa-mask="fas fa-circle"></i>
                                </div>
                                <!-- a href="#" class="small-box-footer"> Text <i class="fas fa-arrow-circle-right"></i></a -->
                            </div>
                            <!-- /.small card -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <div class="card-footer text-muted p-0 m-0 border-0 rounded-1">
                    <div class="row no-gutters">
                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                            <div class="btn-group w-100" role="group" aria-label="Group">
                                <button type="button" class="btn btn-dark btn-xs mx-auto btn-block text-light border-0 rounded-1" data-toggle="collapse" data-target="#collapse_id" aria-expanded="false" aria-controls="collapse_id">
                                    <i class='fas fa-shopping-cart'></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            $(function(){
                "use strict";
                var button_id_01 = $("#button_id_01");
                
                button_id_01.off("click").on("click", function(event){
                    event.preventDefault();
                    //event.stopPropagation();
                    button_id_01.attr("disabled", true);
                    
                    var formTemplateClone = $('#formTemplate_01').contents().clone(true);
                    //var formTemplateCloneChild = formTemplateClone.children().get();
                    var formTemplateCloneChild = formTemplateClone.children().first();
                    var formTemplateCloneChildId = ('formTemplateCloneChild' + ("1"));
                    formTemplateCloneChild.find('form').attr('id', formTemplateCloneChildId);

                    var bootboxObj = bootbox.confirm({
                        size: "small",
                        title: "<p class='p-0 m-0 text-xs'><span> Line : </span><span> [-] </span></p><p class='p-0 m-0 text-xs'><span> Bin : </span><span> [-] </span></p>",
                        message: formTemplateCloneChild.html(),
                        onEscape: true,
                        show: true,
                        scrollable: true,
                        buttons: {
                            confirm: {
                                label: 'Yes',
                                className: 'btn-success',
                                callback: function(){
                                    //return false;
                                }
                            },
                            cancel: {
                                label: 'No',
                                className: 'btn-danger btn-primary',
                                callback: function(){
                                    return false;
                                }
                            }
                        },
                        callback: function (result) {
                            //console.log(result);
                            var formObj = $('#' + formTemplateCloneChildId);
                            formObj.validator('validate');
                            var quantity = formObj.find('#quantity');
                            var _token = formObj.find("[name='_token']");
                            var quantity_value = quantity.val();
                            var _token_value = _token.val();

                            if( (result === true) ){
                                if( (quantity_value == void(0)) || (quantity_value < 0) ){
                                   return false;
                                }
                            }

                            if( (result === true) ){
                                var url = "{!! route('lineKanbanBin.index', ['#argument_01']) !!}";
                                url = url.replace("#argument_01", rowData.id);
                                //$( location ).attr("href", url);
                                var formdata = new Object();
                                formdata.quantity =  quantity_value;
                                formdata._token = _token_value;

                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    data: formdata,
                                    //success: success,
                                    //dataType: dataType,
                                    //context: document.body
                                })
                                .done(function( data ) {
                                    swal({
                                        'title': data.title,
                                        'text': data.text,
                                        'type': data.type,
                                        'timer': data.timer,
                                        'showConfirmButton': false
                                    });
                                    //$('#dataTableId').DataTable().ajax.reload( null, false ); // user paging is not reset on reload
                                })
                                .fail(function() {
                                    //console.log( "error" );
                                })
                                .always(function() {
                                    //console.log( "finished" );
                                    button_id_01.attr("disabled", false);
                                });

                            }else{
                                button_id_01.attr("disabled", false);
                            }
                        }
                    })
                        .find('.modal-header').addClass('custom-modal-header')
                        /*.find('.bootbox-cancel:first').focus()
                        .find('.bootbox-cancel').attr('autofocus', true)
                        .on('shown.bs.modal', function(e){
                            $(this).find(".bootbox-cancel:first").focus();
                        })*/
                        .init(function(e){
                            $(this).find(".bootbox-cancel").focus();
                        });
                });
            });
            </script>
            <script>
            $(function(){
                "use strict";
                var button_id_01 = $("#button_id_02");
                
                button_id_01.off("click").on("click", function(event){
                    event.preventDefault();
                    //event.stopPropagation();
                    button_id_01.attr("disabled", true);
                    
                    var formTemplateClone = $('#formTemplate_02').contents().clone(true);
                    //var formTemplateCloneChild = formTemplateClone.children().get();
                    var formTemplateCloneChild = formTemplateClone.children().first();
                    var formTemplateCloneChildId = ('formTemplateCloneChild' + ("1"));
                    formTemplateCloneChild.find('form').attr('id', formTemplateCloneChildId);

                    var bootboxObj = bootbox.confirm({
                        size: "small",
                        title: "<p class='p-0 m-0 text-xs'><span> Line : </span><span> [-] </span></p><p class='p-0 m-0 text-xs'><span> Bin : </span><span> [-] </span></p>",
                        message: formTemplateCloneChild.html(),
                        onEscape: true,
                        show: true,
                        scrollable: true,
                        buttons: {
                            confirm: {
                                label: 'Yes',
                                className: 'btn-success',
                                callback: function(){
                                    //return false;
                                }
                            },
                            cancel: {
                                label: 'No',
                                className: 'btn-danger btn-primary',
                                callback: function(){
                                    return false;
                                }
                            }
                        },
                        callback: function (result) {
                            //console.log(result);
                            var formObj = $('#' + formTemplateCloneChildId);
                            formObj.validator('validate');
                            var quantity = formObj.find('#quantity');
                            var _token = formObj.find("[name='_token']");
                            var quantity_value = quantity.val();
                            var _token_value = _token.val();

                            if( (result === true) ){
                                if( (quantity_value == void(0)) || (quantity_value < 0) ){
                                   return false;
                                }
                            }

                            if( (result === true) ){
                                var url = "{!! route('lineKanbanBin.index', ['#argument_01']) !!}";
                                url = url.replace("#argument_01", rowData.id);
                                //$( location ).attr("href", url);
                                var formdata = new Object();
                                formdata.quantity =  quantity_value;
                                formdata._token = _token_value;

                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    data: formdata,
                                    //success: success,
                                    //dataType: dataType,
                                    //context: document.body
                                })
                                .done(function( data ) {
                                    swal({
                                        'title': data.title,
                                        'text': data.text,
                                        'type': data.type,
                                        'timer': data.timer,
                                        'showConfirmButton': false
                                    });
                                    //$('#dataTableId').DataTable().ajax.reload( null, false ); // user paging is not reset on reload
                                })
                                .fail(function() {
                                    //console.log( "error" );
                                })
                                .always(function() {
                                    //console.log( "finished" );
                                    button_id_01.attr("disabled", false);
                                });

                            }else{
                                button_id_01.attr("disabled", false);
                            }
                        }
                    })
                        .find('.modal-header').addClass('custom-modal-header')
                        /*.find('.bootbox-cancel:first').focus()
                        .find('.bootbox-cancel').attr('autofocus', true)
                        .on('shown.bs.modal', function(e){
                            $(this).find(".bootbox-cancel:first").focus();
                        })*/
                        .init(function(e){
                            $(this).find(".bootbox-cancel").focus();
                        });
                });
            });
            </script>
        </div>
        <!-- -->
            
            <!-- -->
        <div class="col col-12 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-3">
            <div class="card text-white bg-light border-light">
                <!-- div class="card-header text-muted p-0 m-0 border-0 rounded-1">
                    <div class="row no-gutters">
                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Group">
                                <button type="button" class="btn btn-dark btn-lg mx-auto btn-block text-light">Send Request</button>
                            </div>
                        </div>
                    </div>
                </div -->
                <div class="card-body p-0 m-0 border-0 rounded-1">
                    <div class="row no-gutters">
                        <!-- h5 class="card-title">Title</h5 -->
                        <!-- p class="card-text">Text</p -->
                        <!-- col -->
                        <div class="col">
                            <!-- small card -->
                            <div class="small-box bg-secondary p-0 m-0 border-0 rounded-1">
                                <!-- Loading (remove the following to stop the loading)-->
                                <!--
                                <div class="overlay">
                                    <i class="fas fa-3x fa-sync fa-sync-alt fa-spin"></i>
                                </div>
                                -->
                                <!-- /.Loading (remove the following to stop the loading)-->
                                <div class="inner">
                                    <!-- h3>0<sup style="font-size: 20px">%</sup></h3 -->
                                    <!-- p>Text</p -->
                                    <!-- list-group -->
                                    <ul class="list-group h-100 w-100">
                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Line</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="line_id">-</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->
                                        
                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Bin</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="bin_id">-</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <div class="col w-100 collapse p-0" id="collapse_id">
                                                    <div class="col col-12 w-100 p-0">
                                                        <!-- ------------------------------------------------------ -->
                                                        <ul class="list-group h-100 w-100">
                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Request Time</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="time_request">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->
                                                            
                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Issued Time</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="time_response">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->

                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Quantity Request</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="quantity_request">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->

                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Quantity Issued</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="quantity_response">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->

                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Countdown</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="countdown_id">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->
                                                            
                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <div class="row no-gutters w-100">
                                                                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                                                                            <div class="btn-group w-100" role="group" aria-label="Group">
                                                                                <button type="button" class="btn btn-dark btn-xs mx-auto btn-block text-light border-0 rounded-1 m-1" id="button_id_01">
                                                                                    <span>Send Request</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="btn-group w-100" role="group" aria-label="Group">
                                                                                <button type="button" class="btn btn-dark btn-xs mx-auto btn-block text-light border-0 rounded-1 m-1" id="button_id_02">
                                                                                    <span>Close Request</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->
                                                        </ul>
                                                        <!-- ------------------------------------------------------ -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->
                                    </ul>
                                    <!-- /.list-group -->
                                </div>
                                <div class="icon">
                                    <!--
                                    <span class="fa-stack fa-2x">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-shopping-cart fa-fw fa-sm" data-fa-transform="shrink-8"></i>
                                    </span>
                                    -->
                                    <i class="fas fa-shopping-cart fa-fw fa-sm text-xl" data-fa-mask="fas fa-circle"></i>
                                </div>
                                <!-- a href="#" class="small-box-footer"> Text <i class="fas fa-arrow-circle-right"></i></a -->
                            </div>
                            <!-- /.small card -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <div class="card-footer text-muted p-0 m-0 border-0 rounded-1">
                    <div class="row no-gutters">
                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                            <div class="btn-group w-100" role="group" aria-label="Group">
                                <button type="button" class="btn btn-dark btn-xs mx-auto btn-block text-light border-0 rounded-1" data-toggle="collapse" data-target="#collapse_id" aria-expanded="false" aria-controls="collapse_id">
                                    <i class='fas fa-shopping-cart'></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            $(function(){
                "use strict";
                var button_id_01 = $("#button_id_01");
                
                button_id_01.off("click").on("click", function(event){
                    event.preventDefault();
                    //event.stopPropagation();
                    button_id_01.attr("disabled", true);
                    
                    var formTemplateClone = $('#formTemplate_01').contents().clone(true);
                    //var formTemplateCloneChild = formTemplateClone.children().get();
                    var formTemplateCloneChild = formTemplateClone.children().first();
                    var formTemplateCloneChildId = ('formTemplateCloneChild' + ("1"));
                    formTemplateCloneChild.find('form').attr('id', formTemplateCloneChildId);

                    var bootboxObj = bootbox.confirm({
                        size: "small",
                        title: "<p class='p-0 m-0 text-xs'><span> Line : </span><span> [-] </span></p><p class='p-0 m-0 text-xs'><span> Bin : </span><span> [-] </span></p>",
                        message: formTemplateCloneChild.html(),
                        onEscape: true,
                        show: true,
                        scrollable: true,
                        buttons: {
                            confirm: {
                                label: 'Yes',
                                className: 'btn-success',
                                callback: function(){
                                    //return false;
                                }
                            },
                            cancel: {
                                label: 'No',
                                className: 'btn-danger btn-primary',
                                callback: function(){
                                    return false;
                                }
                            }
                        },
                        callback: function (result) {
                            //console.log(result);
                            var formObj = $('#' + formTemplateCloneChildId);
                            formObj.validator('validate');
                            var quantity = formObj.find('#quantity');
                            var _token = formObj.find("[name='_token']");
                            var quantity_value = quantity.val();
                            var _token_value = _token.val();

                            if( (result === true) ){
                                if( (quantity_value == void(0)) || (quantity_value < 0) ){
                                   return false;
                                }
                            }

                            if( (result === true) ){
                                var url = "{!! route('lineKanbanBin.index', ['#argument_01']) !!}";
                                url = url.replace("#argument_01", rowData.id);
                                //$( location ).attr("href", url);
                                var formdata = new Object();
                                formdata.quantity =  quantity_value;
                                formdata._token = _token_value;

                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    data: formdata,
                                    //success: success,
                                    //dataType: dataType,
                                    //context: document.body
                                })
                                .done(function( data ) {
                                    swal({
                                        'title': data.title,
                                        'text': data.text,
                                        'type': data.type,
                                        'timer': data.timer,
                                        'showConfirmButton': false
                                    });
                                    //$('#dataTableId').DataTable().ajax.reload( null, false ); // user paging is not reset on reload
                                })
                                .fail(function() {
                                    //console.log( "error" );
                                })
                                .always(function() {
                                    //console.log( "finished" );
                                    button_id_01.attr("disabled", false);
                                });

                            }else{
                                button_id_01.attr("disabled", false);
                            }
                        }
                    })
                        .find('.modal-header').addClass('custom-modal-header')
                        /*.find('.bootbox-cancel:first').focus()
                        .find('.bootbox-cancel').attr('autofocus', true)
                        .on('shown.bs.modal', function(e){
                            $(this).find(".bootbox-cancel:first").focus();
                        })*/
                        .init(function(e){
                            $(this).find(".bootbox-cancel").focus();
                        });
                });
            });
            </script>
            <script>
            $(function(){
                "use strict";
                var button_id_01 = $("#button_id_02");
                
                button_id_01.off("click").on("click", function(event){
                    event.preventDefault();
                    //event.stopPropagation();
                    button_id_01.attr("disabled", true);
                    
                    var formTemplateClone = $('#formTemplate_02').contents().clone(true);
                    //var formTemplateCloneChild = formTemplateClone.children().get();
                    var formTemplateCloneChild = formTemplateClone.children().first();
                    var formTemplateCloneChildId = ('formTemplateCloneChild' + ("1"));
                    formTemplateCloneChild.find('form').attr('id', formTemplateCloneChildId);

                    var bootboxObj = bootbox.confirm({
                        size: "small",
                        title: "<p class='p-0 m-0 text-xs'><span> Line : </span><span> [-] </span></p><p class='p-0 m-0 text-xs'><span> Bin : </span><span> [-] </span></p>",
                        message: formTemplateCloneChild.html(),
                        onEscape: true,
                        show: true,
                        scrollable: true,
                        buttons: {
                            confirm: {
                                label: 'Yes',
                                className: 'btn-success',
                                callback: function(){
                                    //return false;
                                }
                            },
                            cancel: {
                                label: 'No',
                                className: 'btn-danger btn-primary',
                                callback: function(){
                                    return false;
                                }
                            }
                        },
                        callback: function (result) {
                            //console.log(result);
                            var formObj = $('#' + formTemplateCloneChildId);
                            formObj.validator('validate');
                            var quantity = formObj.find('#quantity');
                            var _token = formObj.find("[name='_token']");
                            var quantity_value = quantity.val();
                            var _token_value = _token.val();

                            if( (result === true) ){
                                if( (quantity_value == void(0)) || (quantity_value < 0) ){
                                   return false;
                                }
                            }

                            if( (result === true) ){
                                var url = "{!! route('lineKanbanBin.index', ['#argument_01']) !!}";
                                url = url.replace("#argument_01", rowData.id);
                                //$( location ).attr("href", url);
                                var formdata = new Object();
                                formdata.quantity =  quantity_value;
                                formdata._token = _token_value;

                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    data: formdata,
                                    //success: success,
                                    //dataType: dataType,
                                    //context: document.body
                                })
                                .done(function( data ) {
                                    swal({
                                        'title': data.title,
                                        'text': data.text,
                                        'type': data.type,
                                        'timer': data.timer,
                                        'showConfirmButton': false
                                    });
                                    //$('#dataTableId').DataTable().ajax.reload( null, false ); // user paging is not reset on reload
                                })
                                .fail(function() {
                                    //console.log( "error" );
                                })
                                .always(function() {
                                    //console.log( "finished" );
                                    button_id_01.attr("disabled", false);
                                });

                            }else{
                                button_id_01.attr("disabled", false);
                            }
                        }
                    })
                        .find('.modal-header').addClass('custom-modal-header')
                        /*.find('.bootbox-cancel:first').focus()
                        .find('.bootbox-cancel').attr('autofocus', true)
                        .on('shown.bs.modal', function(e){
                            $(this).find(".bootbox-cancel:first").focus();
                        })*/
                        .init(function(e){
                            $(this).find(".bootbox-cancel").focus();
                        });
                });
            });
            </script>
        </div>
        <!-- -->
            
            <!-- -->
        <div class="col col-12 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-3">
            <div class="card text-white bg-light border-light">
                <!-- div class="card-header text-muted p-0 m-0 border-0 rounded-1">
                    <div class="row no-gutters">
                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                            <div class="btn-group btn-group-lg w-100" role="group" aria-label="Group">
                                <button type="button" class="btn btn-dark btn-lg mx-auto btn-block text-light">Send Request</button>
                            </div>
                        </div>
                    </div>
                </div -->
                <div class="card-body p-0 m-0 border-0 rounded-1">
                    <div class="row no-gutters">
                        <!-- h5 class="card-title">Title</h5 -->
                        <!-- p class="card-text">Text</p -->
                        <!-- col -->
                        <div class="col">
                            <!-- small card -->
                            <div class="small-box bg-secondary p-0 m-0 border-0 rounded-1">
                                <!-- Loading (remove the following to stop the loading)-->
                                <!--
                                <div class="overlay">
                                    <i class="fas fa-3x fa-sync fa-sync-alt fa-spin"></i>
                                </div>
                                -->
                                <!-- /.Loading (remove the following to stop the loading)-->
                                <div class="inner">
                                    <!-- h3>0<sup style="font-size: 20px">%</sup></h3 -->
                                    <!-- p>Text</p -->
                                    <!-- list-group -->
                                    <ul class="list-group h-100 w-100">
                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Line</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="line_id">-</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->
                                        
                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                        <b>Bin</b>
                                                    </span>
                                                </span>
                                                <span class="text-monospace text-justify text-xs">
                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="bin_id">-</span>
                                                </span>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->

                                        <!-- list-group-item -->
                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                            <div class="d-flex w-100 justify-content-between">
                                                <div class="col w-100 collapse p-0" id="collapse_id">
                                                    <div class="col col-12 w-100 p-0">
                                                        <!-- ------------------------------------------------------ -->
                                                        <ul class="list-group h-100 w-100">
                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Request Time</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="time_request">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->
                                                            
                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Issued Time</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="time_response">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->

                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Quantity Request</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="quantity_request">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->

                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Quantity Issued</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="quantity_response">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->

                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="text-wrap text-break font-weight-bold text-light">
                                                                            <b>Countdown</b>
                                                                        </span>
                                                                    </span>
                                                                    <span class="text-monospace text-justify text-xs">
                                                                        <span class="badge badge-secondary text-wrap text-break text-light" id="countdown_id">-</span>
                                                                    </span>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->
                                                            
                                                            <!-- list-group-item -->
                                                            <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                                <div class="d-flex w-100 justify-content-between">
                                                                    <div class="row no-gutters w-100">
                                                                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                                                                            <div class="btn-group w-100" role="group" aria-label="Group">
                                                                                <button type="button" class="btn btn-dark btn-xs mx-auto btn-block text-light border-0 rounded-1 m-1" id="button_id_01">
                                                                                    <span>Send Request</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="btn-group w-100" role="group" aria-label="Group">
                                                                                <button type="button" class="btn btn-dark btn-xs mx-auto btn-block text-light border-0 rounded-1 m-1" id="button_id_02">
                                                                                    <span>Close Request</span>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- /.list-group-item -->
                                                        </ul>
                                                        <!-- ------------------------------------------------------ -->
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- /.list-group-item -->
                                    </ul>
                                    <!-- /.list-group -->
                                </div>
                                <div class="icon">
                                    <!--
                                    <span class="fa-stack fa-2x">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-shopping-cart fa-fw fa-sm" data-fa-transform="shrink-8"></i>
                                    </span>
                                    -->
                                    <i class="fas fa-shopping-cart fa-fw fa-sm text-xl" data-fa-mask="fas fa-circle"></i>
                                </div>
                                <!-- a href="#" class="small-box-footer"> Text <i class="fas fa-arrow-circle-right"></i></a -->
                            </div>
                            <!-- /.small card -->
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <div class="card-footer text-muted p-0 m-0 border-0 rounded-1">
                    <div class="row no-gutters">
                        <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                            <div class="btn-group w-100" role="group" aria-label="Group">
                                <button type="button" class="btn btn-dark btn-xs mx-auto btn-block text-light border-0 rounded-1" data-toggle="collapse" data-target="#collapse_id" aria-expanded="false" aria-controls="collapse_id">
                                    <i class='fas fa-shopping-cart'></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            $(function(){
                "use strict";
                var button_id_01 = $("#button_id_01");
                
                button_id_01.off("click").on("click", function(event){
                    event.preventDefault();
                    //event.stopPropagation();
                    button_id_01.attr("disabled", true);
                    
                    var formTemplateClone = $('#formTemplate_01').contents().clone(true);
                    //var formTemplateCloneChild = formTemplateClone.children().get();
                    var formTemplateCloneChild = formTemplateClone.children().first();
                    var formTemplateCloneChildId = ('formTemplateCloneChild' + ("1"));
                    formTemplateCloneChild.find('form').attr('id', formTemplateCloneChildId);

                    var bootboxObj = bootbox.confirm({
                        size: "small",
                        title: "<p class='p-0 m-0 text-xs'><span> Line : </span><span> [-] </span></p><p class='p-0 m-0 text-xs'><span> Bin : </span><span> [-] </span></p>",
                        message: formTemplateCloneChild.html(),
                        onEscape: true,
                        show: true,
                        scrollable: true,
                        buttons: {
                            confirm: {
                                label: 'Yes',
                                className: 'btn-success',
                                callback: function(){
                                    //return false;
                                }
                            },
                            cancel: {
                                label: 'No',
                                className: 'btn-danger btn-primary',
                                callback: function(){
                                    return false;
                                }
                            }
                        },
                        callback: function (result) {
                            //console.log(result);
                            var formObj = $('#' + formTemplateCloneChildId);
                            formObj.validator('validate');
                            var quantity = formObj.find('#quantity');
                            var _token = formObj.find("[name='_token']");
                            var quantity_value = quantity.val();
                            var _token_value = _token.val();

                            if( (result === true) ){
                                if( (quantity_value == void(0)) || (quantity_value < 0) ){
                                   return false;
                                }
                            }

                            if( (result === true) ){
                                var url = "{!! route('lineKanbanBin.index', ['#argument_01']) !!}";
                                url = url.replace("#argument_01", rowData.id);
                                //$( location ).attr("href", url);
                                var formdata = new Object();
                                formdata.quantity =  quantity_value;
                                formdata._token = _token_value;

                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    data: formdata,
                                    //success: success,
                                    //dataType: dataType,
                                    //context: document.body
                                })
                                .done(function( data ) {
                                    swal({
                                        'title': data.title,
                                        'text': data.text,
                                        'type': data.type,
                                        'timer': data.timer,
                                        'showConfirmButton': false
                                    });
                                    //$('#dataTableId').DataTable().ajax.reload( null, false ); // user paging is not reset on reload
                                })
                                .fail(function() {
                                    //console.log( "error" );
                                })
                                .always(function() {
                                    //console.log( "finished" );
                                    button_id_01.attr("disabled", false);
                                });

                            }else{
                                button_id_01.attr("disabled", false);
                            }
                        }
                    })
                        .find('.modal-header').addClass('custom-modal-header')
                        /*.find('.bootbox-cancel:first').focus()
                        .find('.bootbox-cancel').attr('autofocus', true)
                        .on('shown.bs.modal', function(e){
                            $(this).find(".bootbox-cancel:first").focus();
                        })*/
                        .init(function(e){
                            $(this).find(".bootbox-cancel").focus();
                        });
                });
            });
            </script>
            <script>
            $(function(){
                "use strict";
                var button_id_01 = $("#button_id_02");
                
                button_id_01.off("click").on("click", function(event){
                    event.preventDefault();
                    //event.stopPropagation();
                    button_id_01.attr("disabled", true);
                    
                    var formTemplateClone = $('#formTemplate_02').contents().clone(true);
                    //var formTemplateCloneChild = formTemplateClone.children().get();
                    var formTemplateCloneChild = formTemplateClone.children().first();
                    var formTemplateCloneChildId = ('formTemplateCloneChild' + ("1"));
                    formTemplateCloneChild.find('form').attr('id', formTemplateCloneChildId);

                    var bootboxObj = bootbox.confirm({
                        size: "small",
                        title: "<p class='p-0 m-0 text-xs'><span> Line : </span><span> [-] </span></p><p class='p-0 m-0 text-xs'><span> Bin : </span><span> [-] </span></p>",
                        message: formTemplateCloneChild.html(),
                        onEscape: true,
                        show: true,
                        scrollable: true,
                        buttons: {
                            confirm: {
                                label: 'Yes',
                                className: 'btn-success',
                                callback: function(){
                                    //return false;
                                }
                            },
                            cancel: {
                                label: 'No',
                                className: 'btn-danger btn-primary',
                                callback: function(){
                                    return false;
                                }
                            }
                        },
                        callback: function (result) {
                            //console.log(result);
                            var formObj = $('#' + formTemplateCloneChildId);
                            formObj.validator('validate');
                            var quantity = formObj.find('#quantity');
                            var _token = formObj.find("[name='_token']");
                            var quantity_value = quantity.val();
                            var _token_value = _token.val();

                            if( (result === true) ){
                                if( (quantity_value == void(0)) || (quantity_value < 0) ){
                                   return false;
                                }
                            }

                            if( (result === true) ){
                                var url = "{!! route('lineKanbanBin.index', ['#argument_01']) !!}";
                                url = url.replace("#argument_01", rowData.id);
                                //$( location ).attr("href", url);
                                var formdata = new Object();
                                formdata.quantity =  quantity_value;
                                formdata._token = _token_value;

                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    data: formdata,
                                    //success: success,
                                    //dataType: dataType,
                                    //context: document.body
                                })
                                .done(function( data ) {
                                    swal({
                                        'title': data.title,
                                        'text': data.text,
                                        'type': data.type,
                                        'timer': data.timer,
                                        'showConfirmButton': false
                                    });
                                    //$('#dataTableId').DataTable().ajax.reload( null, false ); // user paging is not reset on reload
                                })
                                .fail(function() {
                                    //console.log( "error" );
                                })
                                .always(function() {
                                    //console.log( "finished" );
                                    button_id_01.attr("disabled", false);
                                });

                            }else{
                                button_id_01.attr("disabled", false);
                            }
                        }
                    })
                        .find('.modal-header').addClass('custom-modal-header')
                        /*.find('.bootbox-cancel:first').focus()
                        .find('.bootbox-cancel').attr('autofocus', true)
                        .on('shown.bs.modal', function(e){
                            $(this).find(".bootbox-cancel:first").focus();
                        })*/
                        .init(function(e){
                            $(this).find(".bootbox-cancel").focus();
                        });
                });
            });
            </script>
        </div>
        <!-- -->
            
        </div>
        <!-- ---------------------------------------------------------------------------- -->

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

<!-- template-01 -->
<template id="formTemplate_01">
  
    <!-- --- -->
    <!-- row -->
    <div class="row no-gutters w-100">

        <!-- col -->
        <div class="col col-12">
            <!-- form -->
            <form action="javascript:void(0)" method="POST" autocomplete="off" id="form_id_01" enctype="multipart/form-data" data-toggle="validator">
                <!-- hidden-input-container -->
                <div id="form_hidden_input_group" name="form_hidden_input_group" class="d-none">
                    @csrf
                    <!-- input type="hidden" id="id" name="name" value="" autocomplete="off" required="required" readonly="readonly"/ -->
                </div>
                <!-- /.hidden-input-container -->
                
                <!-- form-group -->
                <div class="form-group form-group-sm col col-12">
                    <label for="quantity" class="col col-lg-12 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-left">Quantity</label>
                    <div class="col col-lg-12">
                        <!-- p class="form-control-static"></p -->
                        <div class="input-group">
                            <!--
                            <div class="input-group-addon input-group-prepend">
                            </div>
                            -->
                            <input type="number" class="form-control form-control-sm" id="quantity" name="quantity" placeholder="Quantity" value="{{ old('quantity') }}" autocomplete="off" required="required"/>
                            <!--
                            <div class="input-group-addon input-group-append">
                            </div>
                            -->
                        </div>
                    </div>
                    <!-- span id="form-control" class="help-block"></span -->
                </div>
                <!-- /.form-group -->
                
            </form>
            <!-- /.form -->
        </div>
        <!-- /.col -->

    </div>
    <!-- /.row -->
    <!-- --- -->
    
</template>
<!-- /.template-01 -->

<!-- template-02 -->
<template id="formTemplate_02">
  
    <!-- --- -->
    <!-- row -->
    <div class="row no-gutters w-100">

        <!-- col -->
        <div class="col col-12">
            <!-- form -->
            <form action="javascript:void(0)" method="POST" autocomplete="off" id="form_id_02" enctype="multipart/form-data" data-toggle="validator">
                <!-- hidden-input-container -->
                <div id="form_hidden_input_group" name="form_hidden_input_group" class="d-none">
                    @csrf
                    <!-- input type="hidden" id="id" name="name" value="" autocomplete="off" required="required" readonly="readonly"/ -->
                </div>
                <!-- /.hidden-input-container -->
                
                <!-- form-group -->
                <div class="form-group form-group-sm col col-12 m-1">
                    <label for="quantity" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left pl-1">Quantity</label>
                    <label for="quantity" class="col-lg-8 control-label col-form-label col-form-label-md text-justify font-weight-bold text-lg-left text-md-left">
                        <span> [ </span>
                        <span id="quantity"> 0 </span>
                        <span> ] </span>
                    </label>
                </div>
                <!-- /.form-group -->
            </form>
            <!-- /.form -->
        </div>
        <!-- /.col -->

    </div>
    <!-- /.row -->
    <!-- --- -->
    
</template>
<!-- /.template-02 -->

<!-- template-03 -->
<template id="formTemplate_03">
    <!-- --- -->
    <!-- -->
    <div class="col col-12 col-xs-6 col-sm-6 col-md-3 col-lg-2 col-xl-2 p-3">
        <div class="card text-white bg-light border-light">
            <!-- div class="card-header text-muted p-0 m-0 border-0 rounded-1">
                <div class="row no-gutters">
                    <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                        <div class="btn-group btn-group-lg w-100" role="group" aria-label="Group">
                            <button type="button" class="btn btn-dark btn-lg mx-auto btn-block text-light">Send Request</button>
                        </div>
                    </div>
                </div>
            </div -->
            <div class="card-body p-0 m-0 border-0 rounded-1">
                <div class="row no-gutters">
                    <!-- h5 class="card-title">Title</h5 -->
                    <!-- p class="card-text">Text</p -->
                    <!-- col -->
                    <div class="col">
                        <!-- small card -->
                        <div class="small-box bg-secondary p-0 m-0 border-0 rounded-1">
                            <!-- Loading (remove the following to stop the loading)-->
                            <!--
                            <div class="overlay">
                                <i class="fas fa-3x fa-sync fa-sync-alt fa-spin"></i>
                            </div>
                            -->
                            <!-- /.Loading (remove the following to stop the loading)-->
                            <div class="inner">
                                <!-- h3>0<sup style="font-size: 20px">%</sup></h3 -->
                                <!-- p>Text</p -->
                                <!-- list-group -->
                                <ul class="list-group h-100 w-100">
                                    <!-- list-group-item -->
                                    <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <span class="text-monospace text-justify text-xs">
                                                <span class="text-wrap text-break font-weight-bold text-light">
                                                    <b>Line</b>
                                                </span>
                                            </span>
                                            <span class="text-monospace text-justify text-xs">
                                                <span class="badge badge-secondary text-wrap text-break text-light" id="line_id">-</span>
                                            </span>
                                        </div>
                                    </li>
                                    <!-- /.list-group-item -->

                                    <!-- list-group-item -->
                                    <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <span class="text-monospace text-justify text-xs">
                                                <span class="text-wrap text-break font-weight-bold text-light">
                                                    <b>Bin</b>
                                                </span>
                                            </span>
                                            <span class="text-monospace text-justify text-xs">
                                                <span class="badge badge-secondary text-wrap text-break text-light" id="bin_id">-</span>
                                            </span>
                                        </div>
                                    </li>
                                    <!-- /.list-group-item -->

                                    <!-- list-group-item -->
                                    <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <div class="col w-100 collapse p-0" id="collapse_id">
                                                <div class="col col-12 w-100 p-0">
                                                    <!-- ------------------------------------------------------ -->
                                                    <ul class="list-group h-100 w-100">
                                                        <!-- list-group-item -->
                                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <span class="text-monospace text-justify text-xs">
                                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                                        <b>Request Time</b>
                                                                    </span>
                                                                </span>
                                                                <span class="text-monospace text-justify text-xs">
                                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="time_request">-</span>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <!-- /.list-group-item -->

                                                        <!-- list-group-item -->
                                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <span class="text-monospace text-justify text-xs">
                                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                                        <b>Issued Time</b>
                                                                    </span>
                                                                </span>
                                                                <span class="text-monospace text-justify text-xs">
                                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="time_response">-</span>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <!-- /.list-group-item -->

                                                        <!-- list-group-item -->
                                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <span class="text-monospace text-justify text-xs">
                                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                                        <b>Quantity Request</b>
                                                                    </span>
                                                                </span>
                                                                <span class="text-monospace text-justify text-xs">
                                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="quantity_request">-</span>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <!-- /.list-group-item -->

                                                        <!-- list-group-item -->
                                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <span class="text-monospace text-justify text-xs">
                                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                                        <b>Quantity Issued</b>
                                                                    </span>
                                                                </span>
                                                                <span class="text-monospace text-justify text-xs">
                                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="quantity_response">-</span>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <!-- /.list-group-item -->

                                                        <!-- list-group-item -->
                                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <span class="text-monospace text-justify text-xs">
                                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                                        <b>Countdown</b>
                                                                    </span>
                                                                </span>
                                                                <span class="text-monospace text-justify text-xs">
                                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="countdown_id">-</span>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <!-- /.list-group-item -->

                                                        <!-- list-group-item -->
                                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <div class="row no-gutters w-100">
                                                                    <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                                                                        <div class="btn-group w-100" role="group" aria-label="Group">
                                                                            <button type="button" class="btn btn-dark btn-xs mx-auto btn-block text-light border-0 rounded-1 m-1" id="button_id_01">
                                                                                <span>Send Request</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="btn-group w-100" role="group" aria-label="Group">
                                                                            <button type="button" class="btn btn-dark btn-xs mx-auto btn-block text-light border-0 rounded-1 m-1" id="button_id_02">
                                                                                <span>Close Request</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- /.list-group-item -->
                                                    </ul>
                                                    <!-- ------------------------------------------------------ -->
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- /.list-group-item -->
                                </ul>
                                <!-- /.list-group -->
                            </div>
                            <div class="icon">
                                <!--
                                <span class="fa-stack fa-2x">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-shopping-cart fa-fw fa-sm" data-fa-transform="shrink-8"></i>
                                </span>
                                -->
                                <i class="fas fa-shopping-cart fa-fw fa-sm text-xl" data-fa-mask="fas fa-circle"></i>
                            </div>
                            <!-- a href="#" class="small-box-footer"> Text <i class="fas fa-arrow-circle-right"></i></a -->
                        </div>
                        <!-- /.small card -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <div class="card-footer text-muted p-0 m-0 border-0 rounded-1">
                <div class="row no-gutters">
                    <div class="btn-toolbar w-100" role="toolbar" aria-label="Toolbar">
                        <div class="btn-group w-100" role="group" aria-label="Group">
                            <button type="button" class="btn btn-dark btn-xs mx-auto btn-block text-light border-0 rounded-1" data-toggle="collapse" data-target="#collapse_id" aria-expanded="false" aria-controls="collapse_id">
                                <i class='fas fa-shopping-cart'></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -->
    <!-- --- -->
</template>
<!-- /.template-03 -->
@endsection

@section('section_script_document')
    @parent
    @includeIf('partials.script.event_source_line_kanban_bin_01000', array())
@endsection

@push('stack_script')
<script>
    $(function(){
        "use strict";
    });
</script>
@endpush