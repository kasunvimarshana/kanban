<script>
$(function(){
    "use strict";
    
    /* *** */
    var eventSourceObject = null;
    // reconnectFrequencySeconds doubles every retry
    var reconnectFrequencySeconds = 1;
    /* *** */
    var optionData = new Object();//{};
    optionData.url = "{!! route('lineKanbanBin.selectAllLineKanbanBins01', []) !!}";
    @php
    $setup_configuration_line_id = null;
    if( (session()->has('setup_configuration_line_id')) && (session()->exists('setup_configuration_line_id')) ){
        $setup_configuration_line_id = session()->get('setup_configuration_line_id', null);
    }else{
        //$setup_configuration_line_id = null;
        $setup_configuration_line_id = "line01";
    }
    @endphp
    optionData.url = "{!! route('lineKanbanBin.selectAllLineKanbanBins01', ['line_id' => $setup_configuration_line_id]) !!}";
    //var is_dirty = false;
    //optionData.id = "#id";
    //var element_01 = $("#id");
    //var parent_element = element_01.closest(".class");
    //var child_element = element_01.find("#id");
    var is_dirty = false;
    
    var template_element_id_01 = "#template_element_01";
    var template_element_id_02 = "#template_element_02";
    var template_element_id_03 = "#template_element_03";
    var template_element_container_id_01 = "#element_container_01";
    var id_prefix = "kanban_bin_01";
    var time_wait_01 = 10;
    
    function isFunction(functionToCheck) {
        return functionToCheck && {}.toString.call(functionToCheck) === '[object Function]';
    }
    
    function debounce(func, wait) {
        var timeout;
        var waitFunc;
        
        return function() {
            if(isFunction(wait)){
                waitFunc = wait;
            }else{
                waitFunc = function() { return wait };
            }

            var context = this, args = arguments;
            var later = function() {
                timeout = null;
                func.apply(context, args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, waitFunc());
        };
    }
    
    var reconnectFunc = debounce(function() {
        setupEventSource();
        // Double every attempt to avoid overwhelming server
        reconnectFrequencySeconds *= 2;
        // Max out at ~1 minute as a compromise between user experience and server load
        if (reconnectFrequencySeconds >= 64) {
            reconnectFrequencySeconds = 64;
        }
    }, function(){ return reconnectFrequencySeconds * 1000 });
    
    function setupEventSource(){
        if( (!!window.EventSource) && (typeof(EventSource) !== "undefined") ){
            //console.log( window.EventSource );
            /*
            eventSourceObject = new EventSource( optionData.url );
            */
            eventSourceObject = new EventSource( optionData.url, {
                withCredentials: true
            });
            //eventSourceObject.addEventListener('connections', function(event){}, false);
            //eventSourceObject.addEventListener('requests', function(event){}, false);
            //eventSourceObject.addEventListener('uptime', function(event){}, false);
            eventSourceObject.addEventListener("open", function(event){
                //console.log("open");
                //console.log(event.data);
            }, false);
            eventSourceObject.addEventListener("error", function(event){
                //console.log("error");
                //console.log(event.data);
                /*
                if( (event.readyState == EventSource.CLOSED) ){
                   console.log( EventSource.CLOSED );
                }
                */
                switch ( (event.target.readyState) ) {
                    case EventSource.CONNECTING:
                        //console.log("connecting");
                        break;
                    case EventSource.OPEN:
                        //console.log("open");
                        break;
                    case EventSource.CLOSED:
                        //console.log("close");
                        break;
                    default:
                        //console.log("default");
                        eventSourceObject.close();
                        reconnectFunc();
                        break;
                }
            }, false);
            eventSourceObject.addEventListener("message", function(event){
                //console.log("message");
                //console.log(event.data);
                /*
                if (event.origin != 'http://example.com') {
                    alert('Origin was not http://example.com');
                    return;
                }
                */
                try{
                    //
                    var data = event.data;
                    /*
                    var data_object = new Object();//{}
                    var data_object = JSON.parse(data, function (key, value) {
                        //console.log(key);
                        //console.log(value);
                        //return value;
                        return value;
                    });
                    */
                    var data = JSON.parse(data);
                    console.log( data );
                    if( ((is_dirty == void(0)) || (is_dirty == false)) ){
                        //console.log(is_dirty);
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////
/* *** */
var template_element_01 = $( template_element_id_01 );
var template_element_02 = $( template_element_id_02 );
var template_element_03 = $( template_element_id_03 );
var template_element_container_01 = $( template_element_container_id_01 );
var template_element_01_clone = template_element_01.contents().clone( true );
var template_element_02_clone = template_element_02.contents().clone( true );
var template_element_03_clone = template_element_03.contents().clone( true );
var line_kanban_bin_object_array = new Array();
var line_kanban_bin_requests = new Array();
/* *** */
/*
$( "div" ).detach();
$( "div" ).remove( ".class" );
$( "div" ).empty();
*/
template_element_container_01.empty();
if( (data.hasOwnProperty("line_kanban_bin_object_array")) && (data.line_kanban_bin_object_array != void(0)) ){
    line_kanban_bin_object_array = data.line_kanban_bin_object_array;
}
if( (line_kanban_bin_object_array != void(0)) && (Array.isArray(line_kanban_bin_object_array)) ){
    $.each(line_kanban_bin_object_array, function(index, value){
        //console.log( index );
        //console.log( value );
        var temp_data_01 = value;
        var temp_id_01 = (id_prefix + temp_data_01.id);
        template_element_01_clone = template_element_01.contents().clone( true );
        template_element_01_clone.attr("id", temp_id_01);
        template_element_01_clone.data("id", temp_id_01);
        template_element_01_clone.removeClass(id_prefix).addClass(id_prefix);
        var card_id_01_element = template_element_01_clone.find("#card_id_01");
        var card_id_01_element_id = card_id_01_element.attr("id");
        card_id_01_element_id = (card_id_01_element_id + temp_id_01);
        card_id_01_element.attr("id", card_id_01_element_id);
        card_id_01_element.data("id", card_id_01_element_id);
        
        var line_id_element = template_element_01_clone.find("#line_id");
        var line_id_element_id  = line_id_element.attr("id");
        line_id_element_id = (line_id_element_id + temp_id_01);
        line_id_element.attr("id", line_id_element_id);
        line_id_element.data("id", line_id_element_id);
        line_id_element.text( temp_data_01.line_id );
        
        var bin_id_element = template_element_01_clone.find("#bin_id");
        var bin_id_element_id = bin_id_element.attr("id");
        bin_id_element_id = (bin_id_element_id + temp_id_01);
        bin_id_element.attr("id", bin_id_element_id);
        bin_id_element.data("id", bin_id_element_id);
        bin_id_element.text( temp_data_01.display_name );
        
        var bin_id_element = template_element_01_clone.find("#bin_id");
        var bin_id_element_id = bin_id_element.attr("id");
        bin_id_element_id = (bin_id_element_id + temp_id_01);
        bin_id_element.attr("id", bin_id_element_id);
        bin_id_element.data("id", bin_id_element_id);
        bin_id_element.text( temp_data_01.display_name );
        
        var collapse_id_element = template_element_01_clone.find("#collapse_id");
        var collapse_id_element_id = collapse_id_element.attr("id");
        collapse_id_element_id = (collapse_id_element_id + temp_id_01);
        collapse_id_element.attr("id", collapse_id_element_id);
        collapse_id_element.data("id", collapse_id_element_id);
        
        var button_id_collapse_01_element = template_element_01_clone.find("#button_id_collapse_01");
        var button_id_collapse_01_element_id = button_id_collapse_01_element.attr("id");
        button_id_collapse_01_element_id = (button_id_collapse_01_element_id + temp_id_01);
        button_id_collapse_01_element.attr("id", button_id_collapse_01_element_id);
        button_id_collapse_01_element.data("id", button_id_collapse_01_element_id);
        //button_id_collapse_01_element.attr("aria-expanded", "false");
        //button_id_collapse_01_element.attr("data-toggle", "collapse");
        //button_id_collapse_01_element.attr("data-target", ("#" + collapse_id_element.attr("id")));
        button_id_collapse_01_element.attr("data-target", ("#" + collapse_id_element_id));
        //button_id_collapse_01_element.attr("aria-controls", (collapse_id_element.attr("id")));
        button_id_collapse_01_element.attr("aria-controls", (collapse_id_element_id));
        /*
        button_id_collapse_01_element.click();
        button_id_collapse_01_element.trigger("click");
        */
        
        line_kanban_bin_requests = new Array();
        if( (temp_data_01.hasOwnProperty("line_kanban_bin_requests")) && (temp_data_01.line_kanban_bin_requests != void(0)) ){
            line_kanban_bin_requests = temp_data_01.line_kanban_bin_requests;
        }
        if( (line_kanban_bin_requests != void(0)) && (Array.isArray(line_kanban_bin_requests)) && (line_kanban_bin_requests.length >= 1) ){
            //var date = moment(data.date, 'YYYY-MM-DD HH:mm:ss').toDate();
            //var today = moment().format('YYYY-MM-DD');
            //var date = moment(data.date, 'YYYY-MM-DD HH:mm:ss').format('YYYY-MM-DD');
            //var date = moment(data.date, 'YYYY-MM-DD HH:mm:ss', true).format('YYYY-MM-DD');
            //var date = moment(data.date, 'YYYY-MM-DD HH:mm:ss', false).format('YYYY-MM-DD');
            //var date = moment(data.date, ['DDMMMMY', 'MMMMDDY']).format();
            /*           
            var a = moment();
            var b = moment();
            a.diff(b, 'years');
            a.diff(b, 'years', true);
            */
            var temp_data_02 = line_kanban_bin_requests.shift();
            
            var time_request_element = template_element_01_clone.find("#time_request");
            var time_request_element_id = time_request_element.attr("id");
            time_request_element_id = (time_request_element_id + temp_id_01);
            time_request_element.attr("id", time_request_element_id);
            time_request_element.data("id", time_request_element_id);
            var time_request = temp_data_02.time_request;
            if( (time_request != void(0)) ){
                time_request = moment(time_request, 'YYYY-MM-DD HH:mm:ss', false).format('YYYY-MM-DD');
                time_request_element.text( time_request );
            }
            
            var time_response_element = template_element_01_clone.find("#time_response");
            var time_response_element_id = time_response_element.attr("id");
            time_request_element_id = (time_response_element_id + temp_id_01);
            time_response_element.attr("id", time_response_element_id);
            time_response_element.data("id", time_response_element_id);
            var time_response = temp_data_02.time_response;
            if( (time_request != void(0)) ){
                time_response = moment(time_response, 'YYYY-MM-DD HH:mm:ss', false).format('YYYY-MM-DD');
                time_response_element.text( time_response );
            }
            
            var quantity_request_element = template_element_01_clone.find("#quantity_request");
            var quantity_request_element_id = quantity_request_element.attr("id");
            quantity_request_element_id = (quantity_request_element_id + temp_id_01);
            quantity_request_element.attr("id", quantity_request_element_id);
            quantity_request_element.data("id", quantity_request_element_id);
            quantity_request_element.text( temp_data_02.quantity_request );
            
            var quantity_response_element = template_element_01_clone.find("#quantity_response");
            var quantity_response_element_id = quantity_response_element.attr("id");
            quantity_response_element_id = (quantity_response_element_id + temp_id_01);
            quantity_response_element.attr("id", quantity_response_element_id);
            quantity_response_element.data("id", quantity_response_element_id);
            quantity_response_element.text( temp_data_02.quantity_response );
            
            /*
            var inline_script_01_text = null;
            inline_script_01_text = "(function(){";
            //inline_script_01_text += "console.log('Test');";
            //inline_script_01_text += "setTimeout(function(){ alert('Test'); }, 3000);";
            inline_script_01_text += "})();";
            var script_element_01 = document.createElement("script");
            var inline_script_01 = document.createTextNode( inline_script_01_text );
            script_element_01.appendChild(inline_script_01);
            template_element_01_clone.append(script_element_01);
            */
            
            var temp_time_01 = null;
            var temp_time_02 = temp_data_02.time_request;
            var temp_countdown_value = 0;
            if( (temp_time_02 != void(0)) ){
                temp_time_01 = moment();
                temp_time_02 = moment(temp_time_02, 'YYYY-MM-DD HH:mm:ss', false);
                temp_time_02 = temp_time_02.clone().add(time_wait_01, 'minutes');
                temp_countdown_value = temp_time_02.diff(temp_time_01, 'minutes', false);
            }
            
            /*if(){
               .removeClass();
            }*/
            
            var countdown_id_01_element = template_element_01_clone.find("#countdown_id_01");
            var countdown_id_01_element_id = countdown_id_01_element.attr("id");
            countdown_id_01_element_id = (countdown_id_01_element_id + temp_id_01);
            countdown_id_01_element.attr("id", countdown_id_01_element_id);
            countdown_id_01_element.data("id", countdown_id_01_element_id);
            countdown_id_01_element.text( temp_countdown_value );
            
            var countdown_id_02_element = template_element_01_clone.find("#countdown_id_02");
            var countdown_id_02_element_id = countdown_id_02_element.attr("id");
            countdown_id_02_element_id = (countdown_id_02_element_id + temp_id_01);
            countdown_id_02_element.attr("id", quantity_response_element_id);
            countdown_id_02_element.data("id", quantity_response_element_id);
            countdown_id_02_element.text( temp_countdown_value );
        }else{
            //console.log("void(0)");
        }
        
        template_element_container_01.append( template_element_01_clone );
    });
}
                        ////////////////////////////////////////////////////////////////////////////////////////////////////////
                    }
                }catch(exception){
                    console.log(exception);
                }
            }, false);
        }else{
            console.log("EventSource needed for this page");
        }
    }
    
    try{
        setupEventSource();
    }catch(exception){
        //console.log(exception);
    }
});
</script>

<!-- template -->
<template id="template_element_01">
    <!-- --- -->
    <!-- -->
    <div class="col col-12 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 p-3">
        <div class="card text-white bg-primary border-light" id="card_id_01">
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
                        <div class="small-box bg-light p-0 m-0 border-0 rounded-1">
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
                                            <span class="text-monospace text-justify text-lg">
                                                <span class="text-wrap text-break font-weight-bold text-light">
                                                    <b>Line</b>
                                                </span>
                                            </span>
                                            <span class="text-monospace text-justify text-lg">
                                                <span class="badge badge-secondary text-wrap text-break text-light" id="line_id">-</span>
                                            </span>
                                        </div>
                                    </li>
                                    <!-- /.list-group-item -->

                                    <!-- list-group-item -->
                                    <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <span class="text-monospace text-justify text-lg">
                                                <span class="text-wrap text-break font-weight-bold text-light">
                                                    <b>Bin</b>
                                                </span>
                                            </span>
                                            <span class="text-monospace text-justify text-lg">
                                                <span class="badge badge-secondary text-wrap text-break text-light" id="bin_id">-</span>
                                            </span>
                                        </div>
                                    </li>
                                    <!-- /.list-group-item -->

                                    <!-- list-group-item -->
                                    <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                        <div class="d-flex w-100 justify-content-between">
                                            <div class="col w-100 collapse p-0 show" id="collapse_id">
                                                <div class="col col-12 w-100 p-0">
                                                    <!-- ------------------------------------------------------ -->
                                                    <ul class="list-group h-100 w-100">
                                                        <!-- list-group-item -->
                                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <span class="text-monospace text-justify text-lg">
                                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                                        <b>Request Time</b>
                                                                    </span>
                                                                </span>
                                                                <span class="text-monospace text-justify text-lg">
                                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="time_request">-</span>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <!-- /.list-group-item -->

                                                        <!-- list-group-item -->
                                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <span class="text-monospace text-justify text-lg">
                                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                                        <b>Issued Time</b>
                                                                    </span>
                                                                </span>
                                                                <span class="text-monospace text-justify text-lg">
                                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="time_response">-</span>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <!-- /.list-group-item -->

                                                        <!-- list-group-item -->
                                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <span class="text-monospace text-justify text-lg">
                                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                                        <b>Quantity Request</b>
                                                                    </span>
                                                                </span>
                                                                <span class="text-monospace text-justify text-lg">
                                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="quantity_request">-</span>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <!-- /.list-group-item -->

                                                        <!-- list-group-item -->
                                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <span class="text-monospace text-justify text-lg">
                                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                                        <b>Quantity Issued</b>
                                                                    </span>
                                                                </span>
                                                                <span class="text-monospace text-justify text-lg">
                                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="quantity_response">-</span>
                                                                </span>
                                                            </div>
                                                        </li>
                                                        <!-- /.list-group-item -->

                                                        <!-- list-group-item -->
                                                        <li class="list-group-item flex-column align-items-start bg-transparent h-100 border-0 rounded-0 p-0 m-0">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <span class="text-monospace text-justify text-lg">
                                                                    <span class="text-wrap text-break font-weight-bold text-light">
                                                                        <b>Countdown</b>
                                                                    </span>
                                                                </span>
                                                                <span class="text-monospace text-justify text-lg">
                                                                    <span class="badge badge-secondary text-wrap text-break text-light" id="countdown_id_01">-</span>
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
                                                                            <button type="button" class="btn btn-dark btn-lg mx-auto btn-block text-light border-0 rounded-1 m-1" id="button_id_01">
                                                                                <span>Send Request</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="btn-group w-100" role="group" aria-label="Group">
                                                                            <button type="button" class="btn btn-dark btn-lg mx-auto btn-block text-light border-0 rounded-1 m-1" id="button_id_02">
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
                                <i class="fas fa-shopping-cart fa-fw" data-fa-mask="fas fa-circle"></i>
                                <!--
                                <span class="fa-stack fa-2x">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fas fa-shopping-cart fa-fw fa-sm" data-fa-transform="shrink-8"></i>
                                </span>
                                -->
                                <!-- i class="fas fa-shopping-cart fa-fw fa-sm text-lg" data-fa-mask="fas fa-circle"></i -->
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
                            <button type="button" class="btn btn-secondary btn-lg mx-auto btn-block text-light border-0 rounded-1" data-toggle="collapse" data-target="#collapse_id" aria-expanded="false" aria-controls="collapse_id" id="button_id_collapse_01">
                                <i class='fas fa-shopping-cart'></i>
                                <span class="text-monospace text-justify text-lg">
                                    [<span class="badge badge-secondary text-wrap text-break text-light" id="countdown_id_02">-</span>]
                                </span>
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
<!-- /.template -->

<!-- template -->
<template id="template_element_02">
  
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
<!-- /.template -->

<!-- template -->
<template id="template_element_03">
  
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
<!-- /.template -->