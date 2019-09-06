<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\User;
use App\Group;
use App\GroupMbr;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $groups = Group::all();
        return $groups;
    }

    public function getAtndGrps()
    {
        //
        $grps = GroupMbr::where('mbr_id','=',Auth::id())->get();
        $groups = Array(); 
        foreach ($grps as $grp) {
            $groups[] = Group::where('id','=',$grp->group_id)->get()[0];
        } 
        
        return $groups;
    }

    public function getGrpDtlPage($groupId )
    {
        //
        return view('group.groupDtl')->with('groupId', $groupId);
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
    public function store(Request $request, User $user)
    {
        //
        $user->addGroup();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
