<?php

namespace App\Http\Controllers\API\Events;

use App\Http\Controllers\Controller;
use App\Models\Events\EventSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class EventScheduleController extends Controller
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
       
        $my_event_schedules = EventSchedule::where('tablet_users_id', '=', $my_tablet_id)->orderBy('prompt_time')->get();

        return $my_event_schedules;
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
    
    
   EventSchedule::create($request->all());
    
        

return response()->json('Event was successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events\EventSchedule  $eventSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(EventSchedule $eventSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events\EventSchedule  $eventSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(EventSchedule $eventSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Events\EventSchedule  $eventSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventSchedule $eventSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events\EventSchedule  $eventSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(EventSchedule $eventSchedule)
    {
        //
    }
}
