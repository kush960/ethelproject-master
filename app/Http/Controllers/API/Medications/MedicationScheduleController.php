<?php

namespace App\Http\Controllers\API\Medications;

use App\Http\Controllers\Controller;
use App\Models\Medications\MedicationSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;


class MedicationScheduleController extends Controller
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
       
        $my_medication_schedules = MedicationSchedule::where('tablet_users_id', '=', $my_tablet_id)->orderBy('prompt_time')->get();

        return $my_medication_schedules;

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
    
    
   MedicationSchedule::create($request->all());
    
        

return response()->json('Medication was successfully added');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medications\MedicationSchedule  $medicationSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(MedicationSchedule $medicationSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Medication uuid  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $my_medication_schedule = MedicationSchedule::find($id);
    
            return response()->json($my_medication_schedule);   
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Medication uuid  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $my_user_id = Config::get('constants.USER_ID');

        $request->merge([
            'scheduled_by' => $my_user_id
        ]);
    
       
            MedicationSchedule::find($id)
                ->update($request->all());
    
            return response()->json('Medication was successfully updated');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Medication uuid  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        MedicationSchedule::find($id)
            ->delete();
    
           return response()->json('Medication was successfully deleted');        
         
    }
}
