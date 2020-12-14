<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TabletUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class TabletUserController extends Controller
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

        
        $my_tablet_users = TabletUser::find($my_tablet_id);

return $my_tablet_users;


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
     * @param  \App\Models\TabletUser  $tabletUser
     * @return \Illuminate\Http\Response
     */
    public function show(TabletUser $tabletUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TabletUser  $tabletUser
     * @return \Illuminate\Http\Response
     */
    public function edit(TabletUser $tabletUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TabletUser  $tabletUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TabletUser $tabletUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TabletUser  $tabletUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(TabletUser $tabletUser)
    {
        //
    }
}
