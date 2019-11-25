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
    //var is_dirty = false;
    
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
