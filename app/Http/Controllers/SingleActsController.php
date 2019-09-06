<?php

namespace App\Http\Controllers;

use App\User;
use App\SingleAct;
use App\SingleActMbr;
use App\ExerLog;
use DB;
use Auth;
use Illuminate\Http\Request;

class SingleActsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSquareGoingActs()
    {
        //
        $now = date('Y-m-d H:i:s', time());

        $singleActs = SingleAct::where('t_start','<=',$now)
            ->where('t_end', '>=', $now)
            ->orderBy('t_end','asc')
            ->get();

        $nums = array();
        $ifBegins = array();
        $days = array();
        $hs = array();

        foreach ($singleActs as $singleAct) {
            $nums[] = count(SingleActMbr::where('single_act_id','=',$singleAct->id)->get());
            if(strtotime($singleAct->t_start)>=strtotime('now')){
                $ifBegins[] = 0;
                $invl = strtotime($singleAct->t_start)-strtotime('now');
            } else {
                $ifBegins[] = 1;
                $invl = strtotime($singleAct->t_end)-strtotime('now');
            }
            $days[] = floor($invl/3600/24);
            $hs[] = round(($invl%(3600*24))/3600);
        }

        return array($singleActs, $nums, $ifBegins, $days, $hs);
    }

    public function getSquareComingActs()
    {
        //
        $now = date('Y-m-d H:i:s', time());

        $singleActs = SingleAct::where('t_start','>=',$now)
            ->orderBy('t_start','asc')
            ->get();

        $nums = array();
        $ifBegins = array();
        $days = array();
        $hs = array();

        foreach ($singleActs as $singleAct) {
            $nums[] = count(SingleActMbr::where('single_act_id','=',$singleAct->id)->get());
            if(strtotime($singleAct->t_start)>=strtotime('now')){
                $ifBegins[] = 0;
                $invl = strtotime($singleAct->t_start)-strtotime('now');
            } else {
                $ifBegins[] = 1;
                $invl = strtotime($singleAct->t_end)-strtotime('now');
            }
            $days[] = floor($invl/3600/24);
            $hs[] = round(($invl%(3600*24))/3600);
        }

        return array($singleActs, $nums, $ifBegins, $days, $hs);
    }

    public function getLauActs()
    {
        //
        $singleActs = SingleAct::where('user_id','=',Auth::id())
        ->orderBy('t_end','desc')
        ->get();

        $nums = array();
        $ifBegins = array();
        $days = array();
        $hs = array();

        foreach ($singleActs as $singleAct) {
            $nums[] = count(SingleActMbr::where('single_act_id','=',$singleAct->id)->get());
            if(strtotime($singleAct->t_start)>=strtotime('now')){
                $ifBegins[] = 0;
                $invl = strtotime($singleAct->t_start)-strtotime('now');
            } else {
                $ifBegins[] = 1;
                $invl = strtotime($singleAct->t_end)-strtotime('now');
            }
            $days[] = floor($invl/3600/24);
            $hs[] = round(($invl%(3600*24))/3600);
        }

        return array($singleActs, $nums, $ifBegins, $days, $hs);
    }

    public function getAtndActs()
    {
        //
        $atnds = SingleActMbr::where('mbr_id','=',Auth::id())
        ->join('single_acts','single_act_id','=','single_acts.id')
        ->orderBy('t_end','desc')
        ->get();

        $atndActs = Array(); 
        foreach ($atnds as $atnd) {
            $atndActs[] = SingleAct::where('id','=',$atnd->single_act_id)->get()[0];
        }

        $nums = array();
        $ifBegins = array();
        $days = array();
        $hs = array();

        foreach ($atndActs as $atndAct) {
            $nums[] = count(SingleActMbr::where('single_act_id','=',$atndAct->id)->get());
            if(strtotime($atndAct->t_start)>=strtotime('now')){
                $ifBegins[] = 0;
                $invl = strtotime($atndAct->t_start)-strtotime('now');
            } else {
                $ifBegins[] = 1;
                $invl = strtotime($atndAct->t_end)-strtotime('now');
            }
            $days[] = floor($invl/3600/24);
            $hs[] = round(($invl%(3600*24))/3600);
        }

        return array($atndActs, $nums, $ifBegins, $days, $hs);
    }

    public function getActDtl(SingleAct $singleAct)
    {
        //
        $act = SingleAct::where('id','=',$singleAct->id)->get()[0];
        if(strtotime($singleAct->t_start)>=strtotime('now')){
            $ifBegin = 0;
            $invl = strtotime($singleAct->t_start)-strtotime('now');
        } else {
            $ifBegin = 1;
            $invl = strtotime($singleAct->t_end)-strtotime('now');
        }
        $days = floor($invl/3600/24);
        $hs = round(($invl-$days*24*3600)/3600);

        $mbrs = SingleActMbr::where('single_act_id','=',$singleAct->id)->get();
        $members = array();
        foreach ($mbrs as $mbr) {
            $members[] = User::where('id','=',$mbr->mbr_id)->get()[0];
        }

        $grades = array();
        foreach ($members as $member) {
            $els = ExerLog::where('user_id','=',$member->id)
                ->where('t_start','>=',$singleAct->t_start)
                ->where('t_start','<',$singleAct->t_end)
                ->get();
            $grade = 0;
            foreach ($els as $el) {
                $grade += $el->distance;
            }
            $grades[] = array($member->name, $grade);
        }

        for($i=0;$i<count($grades)-1;$i++){
            for($k=0;$k<count($grades)-1-$i;$k++){
                if($grades[$k][1] < $grades[$k+1][1]) {
                    $temp = $grades[$k];
                    $grades[$k] = $grades[$k+1];
                    $grades[$k+1] = $temp;
                }
            }
        }

        return array($act, $ifBegin, $days, $hs, $grades);
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

    public function getActDtlPage($actId )
    {
        //
        return view('act.actDtl')->with('actId', $actId);
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
        $singleAct = new SingleAct($request->all());
        $user->addSingleAct(
            $singleAct
        );

        $singleAct->addSingleActMbr($user->id );
        return view('act.lauAct')->with('isSuccess', 'yes');
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
