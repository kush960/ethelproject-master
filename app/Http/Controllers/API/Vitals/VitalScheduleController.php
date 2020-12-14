<?php

namespace App\Http\Controllers\API\Vitals;

use App\Http\Controllers\Controller;
use App\Models\Vitals\VitalSchedule;
use App\Models\Vitals\VitalQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Jobs\SayHello;

class VitalScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    SayHello::dispatch();

        $my_tablet_id = Config::get('constants.TABLET_ID');
        $my_user_id = Config::get('constants.USER_ID');

        $my_vital_questions = VitalQuestion::all()->sortBy('priority');
        $my_vital_schedules = VitalSchedule::where('tablet_users_id', '=', $my_tablet_id)->orderBy('prompt_time')->get();

        return compact('my_vital_questions', 'my_vital_schedules'); 
        
        return view ('Vitals.vital_schedules.index', compact('my_vital_questions', 'my_vital_schedules', 'my_tablet_id', 'my_user_id'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $request->validate([
        'reference' => 'required'
    ]);
    $request->merge([
        'use_alert' => isset($request->use_alert) ? $request->use_alert : false,
           
        'use_alert' => isset($request->use_alert) ? 1 : 0,
        'use_systolic' => isset($request->use_systolic) ? 1 : 0,
        'use_diastolic' => isset($request->use_diastolic) ? 1 : 0,
        'use_oximetry' => isset($request->use_oximetry) ? 1 : 0,
        'use_pulse' => isset($request->use_pulse) ? 1 : 0,
        'use_respiration' => isset($request->use_respiration) ? 1 : 0,
        'use_temperature' => isset($request->use_temperature) ? 1 : 0,
        'use_blood_glucose' => isset($request->use_blood_glucose) ? 1 : 0,
    ]);


        VitalSchedule::create($request->all());

        /*return $my_vital_questions; */
         return redirect()->route('vital_schedules.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vitals\VitalSchedule  $vitalSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(VitalSchedule $vitalSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vitals\VitalSchedule  $vitalSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(VitalSchedule $vitalSchedule)
    {
        
        $my_user_id = Config::get('constants.USER_ID');

        $my_vital_questions = VitalQuestion::all()->sortBy('priority');

           return view ('Vitals.vital_schedules.edit', compact('my_vital_questions', 'vitalSchedule', 'my_user_id'));
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vitals\VitalSchedule  $vitalSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VitalSchedule $vitalSchedule)
    {
        $request->merge([
            'use_alert' => isset($request->use_alert) ? 1 : 0,
            'use_systolic' => isset($request->use_systolic) ? 1 : 0,
            'use_diastolic' => isset($request->use_diastolic) ? 1 : 0,
            'use_oximetry' => isset($request->use_oximetry) ? 1 : 0,
            'use_pulse' => isset($request->use_pulse) ? 1 : 0,
            'use_respiration' => isset($request->use_respiration) ? 1 : 0,
            'use_temperature' => isset($request->use_temperature) ? 1 : 0,
            'use_blood_glucose' => isset($request->use_blood_glucose) ? 1 : 0,
        ]);
    
    
            $vitalSchedule->update($request->all());
    
            /*return $my_vital_questions; */
             return redirect()->route('vital_schedules.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vitals\VitalSchedule  $vitalSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(VitalSchedule $vitalSchedule)
    {
        //
    }
}
