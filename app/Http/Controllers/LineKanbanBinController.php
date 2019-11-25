<?php

namespace App\Http\Controllers;

use App\LineKanbanBin;
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

class LineKanbanBinController extends Controller
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
        
        if(view()->exists('line_kanban_bin')){
            return View::make('line_kanban_bin', array());
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LineKanbanBin  $lineKanbanBin
     * @return \Illuminate\Http\Response
     */
    public function show(LineKanbanBin $lineKanbanBin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LineKanbanBin  $lineKanbanBin
     * @return \Illuminate\Http\Response
     */
    public function edit(LineKanbanBin $lineKanbanBin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LineKanbanBin  $lineKanbanBin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LineKanbanBin $lineKanbanBin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LineKanbanBin  $lineKanbanBin
     * @return \Illuminate\Http\Response
     */
    public function destroy(LineKanbanBin $lineKanbanBin)
    {
        //
    }
    
    //oter
    public function selectAllLineKanbanBins01(Request $request){
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        $streamedResponseObject = new StreamedResponse();
        
        // validate the info, create rules for the inputs
        $rules = array(
            'line_id' => 'required'
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make($request->all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
            /*
            $data = array(
                'title' => 'error',
                'text' => $validator->errors()->first(),
                'type' => 'warning',
                'timer' => 3000
            );
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
            ));
            */
        } else {
            // do process
            try {
                //throw new Exception("exception");
                // Start transaction!
                DB::beginTransaction();
                
                $lineKanbanBinObject = new LineKanbanBin();
                $lineKanbanBinObject = $lineKanbanBinObject->where('is_visible', '=', true);
                $lineKanbanBinObject = $lineKanbanBinObject->where('is_active', '=', true);
                $lineKanbanBinObject = $lineKanbanBinObject->where('line_id', '=', $request->input('line_id'));
                //$lineKanbanBinObject->load(['lineKanbanBinRequests']);
                $lineKanbanBinObject = $lineKanbanBinObject->with(array('lineKanbanBinRequests'=>function($query){
                    //$query = $query->select('id');
                    $query = $query->where('is_visible', '=', true);
                    $query = $query->where('is_active', '=', true);
                }));
                
                $lineKanbanBinObjectArray = $lineKanbanBinObject->get();

                $data["line_kanban_bin_object_array"] = $lineKanbanBinObjectArray;
                
                unset($dataArray);
                // Commit transaction!
                DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                DB::rollback(); 
                //return redirect()->back()->withInput();
                /*
                $data = array(
                    'title' => 'error',
                    'text' => 'error',
                    'type' => 'warning',
                    'timer' => 3000
                );
                return (new CommonResponseResource( $data ))->additional(array(
                    'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
                ));
                */
            }
        }
        
        //unset data
        unset( $dataArray );
        unset( $rules );
        unset( $date_today );
        unset( $current_user );
        //unset( $data );
        
        //return Response::json( $data );
        //return redirect()->back();
        //$http_response_code = http_response_code();
        /*
        $data = array(
            'title' => 'success',
            'text' => 'success',
            'type' => 'success',
            'timer' => 3000
        );
        return (new CommonResponseResource( $data ))->additional(array(
            'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_OK]
        ));
        */
        $streamedResponseObject->setCallback(function() use($data){
            $retry_value = 3000;
            echo "data: " . json_encode( $data );
            echo PHP_EOL;
            //echo "event: ". "select";
            echo PHP_EOL;
            echo "retry: ". "{$retry_value}";
            
            /*
            ob_flush();
            flush();
            usleep(100000);
            */
            
            /*
            ob_end_flush();
            flush();
            sleep(100000);
            */
            
            ob_flush();
            flush();
            usleep(1);
            
            unset( $data );
        });
        
        $streamedResponseObject->headers->set("Connection", "keep-alive");
        $streamedResponseObject->headers->set("Cache-Control", "no-cache");
        $streamedResponseObject->headers->set("Content-Type", "text/event-stream");
        $streamedResponseObject->headers->set("Access-Control-Allow-Origin", "*");
        
        $streamedResponseObject->send();
    }
    
    public function selectAllLineKanbanBins02(Request $request){
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        $streamedResponseObject = new StreamedResponse();
        
        // validate the info, create rules for the inputs
        $rules = array();
        // run the validation rules on the inputs from the form
        $validator = Validator::make($request->all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            //return redirect()->back()->withErrors($validator)->withInput();
            /*
            $data = array(
                'title' => 'error',
                'text' => $validator->errors()->first(),
                'type' => 'warning',
                'timer' => 3000
            );
            return (new CommonResponseResource( $data ))->additional(array(
                'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
            ));
            */
        } else {
            // do process
            try {
                //throw new Exception("exception");
                // Start transaction!
                DB::beginTransaction();
                
                $lineKanbanBinObject = new LineKanbanBin();
                $lineKanbanBinObject = $lineKanbanBinObject->where('is_visible', '=', true);
                $lineKanbanBinObject = $lineKanbanBinObject->where('is_active', '=', true);
                //$lineKanbanBinObject->load(['lineKanbanBinRequests']);
                $lineKanbanBinObject = $lineKanbanBinObject->with(array('lineKanbanBinRequests'));
                
                $lineKanbanBinObject = $lineKanbanBinObject->whereHas('lineKanbanBinRequests', function($query){
                    $query = $query->where('is_visible', '=', true);
                    $query = $query->where('is_active', '=', true);
                }, '>=', 1);
                
                $lineKanbanBinObjectArray = $lineKanbanBinObject->get();

                $data["line_kanban_bin_object_array"] = $lineKanbanBinObjectArray;
                
                unset($dataArray);
                // Commit transaction!
                DB::commit();
            }catch(Exception $e){
                // Rollback transaction!
                DB::rollback(); 
                //return redirect()->back()->withInput();
                /*
                $data = array(
                    'title' => 'error',
                    'text' => 'error',
                    'type' => 'warning',
                    'timer' => 3000
                );
                return (new CommonResponseResource( $data ))->additional(array(
                    'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_BAD_REQUEST]
                ));
                */
            }
        }
        
        //unset data
        unset( $dataArray );
        unset( $rules );
        unset( $date_today );
        unset( $current_user );
        //unset( $data );
        
        //return Response::json( $data );
        //return redirect()->back();
        //$http_response_code = http_response_code();
        /*
        $data = array(
            'title' => 'success',
            'text' => 'success',
            'type' => 'success',
            'timer' => 3000
        );
        return (new CommonResponseResource( $data ))->additional(array(
            'meta' => ['status_code' => HTTPStatusCodeEnum::HTTP_OK]
        ));
        */
        $streamedResponseObject->setCallback(function() use($data){
            $retry_value = 3000;
            echo "data: " . json_encode( $data );
            echo PHP_EOL;
            //echo "event: ". "select";
            echo PHP_EOL;
            echo "retry: ". "{$retry_value}";
            
            /*
            ob_flush();
            flush();
            usleep(100000);
            */
            
            /*
            ob_end_flush();
            flush();
            sleep(100000);
            */
            
            ob_flush();
            flush();
            usleep(1);
            
            unset( $data );
        });
        
        $streamedResponseObject->headers->set("Connection", "keep-alive");
        $streamedResponseObject->headers->set("Cache-Control", "no-cache");
        $streamedResponseObject->headers->set("Content-Type", "text/event-stream");
        $streamedResponseObject->headers->set("Access-Control-Allow-Origin", "*");
        
        $streamedResponseObject->send();
    }
}
