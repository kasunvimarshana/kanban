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
        </div>
        <!-- ---------------------------------------------------------------------------- -->
        <!-- ---------------------------------------------------------------------------- -->
        <div class="row" id="element_container_02">
        </div>
        <!-- ---------------------------------------------------------------------------- -->

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection

@section('section_script_document')
    @parent
    @includeIf('partials.script.event_source_line_kanban_bin_01', array())
@endsection

@push('stack_script')
<script>
    $(function(){
        "use strict";
    });
</script>
@endpush