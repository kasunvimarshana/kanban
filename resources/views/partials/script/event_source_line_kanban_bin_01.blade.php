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
    //optionData.id = "#id";
    //var element_01 = $("#id");
    //var parent_element = element_01.closest(".class");
    //var child_element = element_01.find("#id");
    var is_dirty = false;
    
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
                    case EventSource.CLOSED:
                        //console.log("close");
                        break;
                    default:
                        //console.log("default");
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
                    if( ((is_dirty == void(0)) || (is_dirty == false)) ){
                        //console.log(is_dirty);
                    }
                }catch(exception){
                    //console.log(exception);
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
<!-- /.template -->