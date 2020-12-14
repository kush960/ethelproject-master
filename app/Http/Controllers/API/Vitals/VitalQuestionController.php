<?php

namespace App\Http\Controllers\API\Vitals;

use App\Http\Controllers\Controller;
use App\Models\Vitals\VitalQuestion;
use Illuminate\Http\Request;

class VitalQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my_vital_questions = VitalQuestion::all();

       return $my_vital_questions; 
       /*return view ('Vitals.vital_questions.index', compact('my_vital_questions'));*/

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
     * @param  \App\Models\Vitals\VitalQuestion  $vitalQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(VitalQuestion $vitalQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vitals\VitalQuestion  $vitalQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(VitalQuestion $vitalQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vitals\VitalQuestion  $vitalQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VitalQuestion $vitalQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vitals\VitalQuestion  $vitalQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(VitalQuestion $vitalQuestion)
    {
        //
    }
}
