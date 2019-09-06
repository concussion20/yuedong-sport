<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\User;
use App\Fan;
use Illuminate\Http\Request;

class FansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fs = Fan::where('user_id','=',Auth::id())->get();

        $fans = array();
        foreach ($fs as $f) {
            $fans[] = User::where('id','=',$f->fan_id)->get()[0];
        }
        return $fans;
    }

    public function getFollowing()
    {
        //
        $flings = Fan::where('fan_id','=',Auth::id())->get();

        $followings = array();
        foreach ($flings as $fling) {
            $followings[] = User::where('id','=',$fling->user_id)->get()[0];
        }
        return $followings;
    }

    public function checkIfFollowing(User $user)
    {
        //
        $flag = Fan::where('fan_id','=',Auth::id())->
        where('user_id','=',$user->id)->get();

        if(count($flag)==1) {
            return 1;
        }
        return 0;
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
        $user->addFan(Auth::id());

        $val = Fan::where('user_id','=',Auth::id())->
        Where('fan_id','=',$user->id)->get();

        if(count($val)==1) {
            $user->addFriend(Auth::id());
        }
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
    public function destroy(User $user)
    {
        //
        DB::table('fans')
            ->where('user_id', $user->id)
            ->where('fan_id', Auth::id())
            ->delete();

        DB::table('friends')
            ->where('user_id', $user->id)
            ->where('fd_id', Auth::id())
            ->delete();

        DB::table('friends')
            ->where('user_id', Auth::id())
            ->where('fd_id', $user->id)
            ->delete();
    }

    public function destroy2(User $user)
    {
        //
        DB::table('fans')
            ->where('user_id', $user->id)
            ->where('fan_id', Auth::id())
            ->delete();

        DB::table('friends')
            ->where('user_id', $user->id)
            ->where('fd_id', Auth::id())
            ->delete();

        DB::table('friends')
            ->where('user_id', Auth::id())
            ->where('fd_id', $user->id)
            ->delete();

        return redirect()->route('userCenter/myFds');
    }
}
