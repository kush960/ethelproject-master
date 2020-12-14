<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Library\Services\Louise;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Log;



class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_tablet_id = Config::get('constants.TABLET_ID');
        $my_user_id = Config::get('constants.USER_ID');

        
        $my_uploads = Upload::where('tablet_users_id', '=', $my_tablet_id)->get();
               
    Log::info($my_uploads);
        
    return $my_uploads;
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
        Log::info($request);

        $my_tablet_id = Config::get('constants.TABLET_ID');
        $my_user_id = Config::get('constants.USER_ID');

    
            $my_media_upload = Upload::create([
                'reference' =>$request['reference'],
                'tablet_users_id' => $my_tablet_id,
                'uploaded_by' => $my_user_id,
            ]);

            
            
            if (isset($request['file_upload'])){
                $my_media_upload->addMediaFromRequest('file_upload')->toMediaCollection('file_uploads');
            }

            return response()->json([$request->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
        //
    }
}
