<?php

namespace App\Http\Controllers\API\CheckIns;

use App\Http\Controllers\Controller;
use App\Models\CheckIns\CheckInSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CheckInScheduleController extends Controller
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
       
        $my_check_in_schedules = CheckInSchedule::where('tablet_users_id', '=', $my_tablet_id)->orderBy('prompt_time')->get();

        return $my_check_in_schedules;
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
        $my_tablet_id = Config::get('constants.TABLET_ID');
        $my_user_id = Config::get('constants.USER_ID');

        $request->merge([
             'tablet_users_id' => $my_tablet_id,
            'scheduled_by' => $my_user_id
        ]);
    
    
   CheckInSchedule::create($request->all());
    
        

return response()->json('Check In was successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CheckIn\CheckInSchedule  $checkInSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(CheckInSchedule $checkInSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CheckIn\CheckInSchedule  $checkInSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(CheckInSchedule $checkInSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CheckIn\CheckInSchedule  $checkInSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CheckInSchedule $checkInSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CheckIn\CheckInSchedule  $checkInSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(CheckInSchedule $checkInSchedule)
    {
        //
    }
}
