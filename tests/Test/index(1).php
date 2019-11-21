//other
    public function selectQualityRecordInputDefectData(Request $request){
        //
        $dataArray = array();
        $rules = array();
        $date_today = Carbon::now();//->format('Y-m-d');
        $current_user = null;
        $data = array();
        
        $streamedResponseObject = new StreamedResponse();
        
        // validate the info, create rules for the inputs
        $rules = array(
            'line_id' => 'required|exists:lines,id'
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
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
                // Start transaction!
                DB::beginTransaction();
                
                $lineObject = new Line();
                $lineObject = $lineObject->where('id', '=', $request->input('line_id'))->first();
                $lineObject->load(['company', 'strategicBusinessUnit', 'factory', 'lineMetaData', 'qualityRecoredInputDefectData']);
                //$data["line_object"] = $lineObject;
                $qualityRecoredInputDefectDataObject = null;
                
                if( ($lineObject) ){
                    
                    $qualityRecoredInputDefectDataObject = $lineObject->qualityRecoredInputDefectData();
                    
                    if( ($lineObject->company) ){
                        $company = $lineObject->company;
                        $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("company_id", "=", $company->id);
                    }
                    
                    if( ($lineObject->strategicBusinessUnit) ){
                        $strategicBusinessUnit = $lineObject->strategicBusinessUnit;
                        $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("strategic_business_unit_id", "=", $strategicBusinessUnit->id);
                    }
                    
                    if( ($lineObject->factory) ){
                        $factory = $lineObject->factory;
                        $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("factory_id", "=", $factory->id);
                    }
                    
                    // customer_id
                    $lineMetaDataObject = $lineObject->lineMetaData()
                        ->where("line_id", "=", $lineObject->id)
                        ->where("data_key", "=", "customer_id_stage_sewin_check")
                        ->first();
        
                    if( ($lineMetaDataObject) ){
                        $customerObject = new Customer();
                        $customerObject = $customerObject->where("id", "=", $lineMetaDataObject->data_value)->first();
                        $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("customer_id", "=", $customerObject->id);
                    }
                    
                    // style_id
                    $lineMetaDataObject = $lineObject->lineMetaData()
                        ->where("line_id", "=", $lineObject->id)
                        ->where("data_key", "=", "style_id_stage_sewin_check")
                        ->first();
        
                    if( ($lineMetaDataObject) ){
                        $styleObject = new Style();
                        $styleObject = $styleObject->where("id", "=", $lineMetaDataObject->data_value)->first();
                        $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("style_id", "=", $styleObject->id);
                    }
                    
                    // colour_id
                    $lineMetaDataObject = $lineObject->lineMetaData()
                        ->where("line_id", "=", $lineObject->id)
                        ->where("data_key", "=", "colour_id_stage_sewin_check")
                        ->first();
        
                    if( ($lineMetaDataObject) ){
                        $colourObject = new Colour();
                        $colourObject = $colourObject->where("id", "=", $lineMetaDataObject->data_value)->first();
                        $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("colour_id", "=", $colourObject->id);
                    }
                    
                    // export_id
                    $lineMetaDataObject = $lineObject->lineMetaData()
                        ->where("line_id", "=", $lineObject->id)
                        ->where("data_key", "=", "export_id_stage_sewin_check")
                        ->first();
        
                    if( ($lineMetaDataObject) ){
                        $exportObject = new Export();
                        $exportObject = $exportObject->where("id", "=", $lineMetaDataObject->data_value)->first();
                        $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("export_id", "=", $exportObject->id);
                    }
                    
                    $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->where("is_active", "=", true);
                    
                    $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject
                        ->whereDate('time_create', '=', $date_today->format('Y-m-d'));
                    
                    $qualityRecoredInputDefectDataObject = $qualityRecoredInputDefectDataObject->first();
                    $data["quality_recored_input_defect_data_object"] = $qualityRecoredInputDefectDataObject;
                }else{
                    throw new Exception("exception");
                }

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
            
            ob_end_flush();
            flush();
            //sleep(1);
            
            unset( $data );
        });
        
        $streamedResponseObject->headers->set("Content-Type", "text/event-stream");
        $streamedResponseObject->headers->set("Cache-Control", "no-cache");
        $streamedResponseObject->headers->set("Access-Control-Allow-Origin", "*");
        
        $streamedResponseObject->send();
    }