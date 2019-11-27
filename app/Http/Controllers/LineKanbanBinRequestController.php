<?php

namespace App\Http\Controllers;

use App\LineKanbanBinRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
//use Illuminate\Http\Response;
use DB;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;
use \StdClass;
use \Exception;
use Carbon\Carbon;
//use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session as Session;
//use Illuminate\Support\Facades\Cookie as Cookie;
//use Illuminate\Http\Request;
//use GuzzleHttp\Psr7\Request as GuzzleRequest;
//use GuzzleHttp\Psr7\MultipartStream as GuzzleMultipartStream;
//use GuzzleHttp\Client as Client;
//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

//use App\Http\Resources\CommonResponseResource as CommonResponseResource;
//use App\Enums\HTTPStatusCodeEnum as HTTPStatusCodeEnum;
use Symfony\Component\HttpFoundation\StreamedResponse as StreamedResponse;

use App\LineKanbanBin;

class LineKanbanBinRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        if(view()->exists('line_kanban_bin_request')){
            return View::make('line_kanban_bin_request', array());
        }else{
            return redirect()->back()->withInput();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        $data = array('title' => '', 'text' => '', 'type' => '', 'timer' => 3000);
        // validate the info, create rules for the inputs
        $rules = array(
            'line_kanban_bin_id' => 'required'
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make($request->all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
            /*$data = array(
                'title' => 'error',
                'text' => $validator->errors()->first(),
                'type' => 'warning',
                'timer' => 3000
            );
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
            ));*/
            $data = array(
                'title' => 'Error',
                'text' => $validator->errors()->first(),
                'type' => 'warning',
                'timer' => 3000
            );
        } else {
            // do process
            try {
                // Start transaction!
                DB::beginTransaction();
                
                $lineKanbanBinObject = new LineKanbanBin();
                
                if( (($request->has('line_kanban_bin_id')) && ($request->filled('line_kanban_bin_id'))) ){
                    $line_kanban_bin_id = $request->input('line_kanban_bin_id');
                    $lineKanbanBinObject = $lineKanbanBinObject->where('id', '=', $line_kanban_bin_id)->first();
                }
                
                $dataArray = array(
                    'is_visible' => $request->input('is_visible', true),
                    'is_active' => $request->input('is_active', true),
                    'status_id' => $request->input('status_id', 1),
                    'time_request' => $request->input('time_request', $date_today->format('Y-m-d H:i:s')),
                    'time_response' => $request->input('time_request', null),
                    'time_close' => $request->input('time_close', null),
                    'quantity_request' => $request->input('quantity_request', 0),
                    'quantity_response' => $request->input('quantity_response', 0),
                    'company_id' => $request->input('company_id', null),
                    'strategic_business_unit_id' => $request->input('strategic_business_unit_id', null),
                    'factory_id' => $request->input('factory_id', null),
                    'line_id' => $request->input('line_id', null),
                    'line_kanban_bin_id' => $request->input('line_kanban_bin_id', null),
                    'ip_address' => $request->ip()
                );

                $lineKanbanBinRequestObject = $lineKanbanBinObject->lineKanbanBinRequests()->create( $dataArray );

                unset($dataArray);
                
                $data = array(
                    'title' => 'Success',
                    'text' => 'Success',
                    'type' => 'success',
                    'timer' => 3000
                );
                
                // Commit transaction!
                DB::commit();
            }catch(Exception $e){dd($e);
                // Rollback transaction!
                DB::rollback(); 
                //return redirect()->back()->withInput();
                $data = array(
                    'title' => 'Error',
                    'text' => 'Error',
                    'type' => 'warning',
                    'timer' => 3000
                );
            }
        }
        
        //unset data
        unset( $dataArray );
        unset( $rules );
        unset( $date_today );
        unset( $current_user );
        //unset( $data );
        
        return Response::json( $data );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LineKanbanBinRequest  $lineKanbanBinRequest
     * @return \Illuminate\Http\Response
     */
    public function show(LineKanbanBinRequest $lineKanbanBinRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LineKanbanBinRequest  $lineKanbanBinRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(LineKanbanBinRequest $lineKanbanBinRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LineKanbanBinRequest  $lineKanbanBinRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LineKanbanBinRequest $lineKanbanBinRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LineKanbanBinRequest  $lineKanbanBinRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(LineKanbanBinRequest $lineKanbanBinRequest)
    {
        //
    }
}
