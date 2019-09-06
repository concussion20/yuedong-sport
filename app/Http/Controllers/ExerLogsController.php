<?php

namespace App\Http\Controllers;

use App\User;
use App\ExerLog;
use Auth;
use Illuminate\Http\Request;

class ExerLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getExerData($user_id)
    {
        //
        $els = ExerLog::where('user_id','=',$user_id)->get();
        $totalDist =0;
        $totalTime = 0;
        $totalCalorie = 0;

        foreach ($els as $el) {
            $totalDist += $el->distance;
            $totalTime += $el->duration;
            $totalCalorie += $el->calorie;
        }

        $now = date('Y-m-d', time());
        $els = ExerLog::where('user_id','=',$user_id)->
        where('t_start','>=',$now)->get();
        $todayDist =0;
        $todayTime = 0;
        $todayCalorie = 0;

        foreach ($els as $el) {
            $todayDist += $el->distance;
            $todayTime += $el->duration;
            $todayCalorie += $el->calorie;
        }

        $aWeekAgo = date('Y-m-d', strtotime("-1 week"));
        $els = ExerLog::where('user_id','=',$user_id)->
        where('t_start','>=',$aWeekAgo)->get();
        $weekDist =0;
        $weekTime = 0;
        $weekCalorie = 0;

        foreach ($els as $el) {
            $weekDist += $el->distance;
            $weekTime += $el->duration;
            $weekCalorie += $el->calorie;
        }

        $allUsers = User::all();
        $grades = array();

        foreach ($allUsers as $allUser) {
            $els = ExerLog::where('user_id','=',$allUser->id)
                ->get();
            $grade = 0;
            foreach ($els as $el) {
                $grade += $el->distance;
            }
            $grades[] = array($allUser->name, $grade);
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

        return array(round($todayDist/1000, 2), round($todayTime/86400, 2), round($todayCalorie, 2),
            round($weekDist/1000, 2), round($weekTime/86400, 2), round($weekCalorie, 2),
            round($totalDist/1000, 2), round($totalTime/86400, 2), round($totalCalorie, 2),
            round($totalDist/1000/1600, 2), round($totalCalorie/150, 2), round($totalCalorie/24/153, 2),
            $grades);
    }

    public function getOthersExerData(User $user)
    {
        //
        $data = $this->getExerData($user->id);
        return view('others_exer',compact('data','user'));
    }

    public function sortByDate($arr){
        for($j=0;$j<count($arr)-1; $j++){
            for($i=0; $i<count($arr)-$j-1; $i++){
                if(strtotime($arr[$i][0]) > strtotime($arr[$i+1][0])){
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$i+1];
                    $arr[$i+1] = $temp;
                }
            }
        }

        return $arr;
    }

    public function getDataByWeek()
    {
        //
        $aWeekAgo = date('Y-m-d H:i:s', strtotime("-1 week"));

        $els = ExerLog::where('user_id','=',Auth::id())
            ->where('t_start','>=',$aWeekAgo)
            ->get();

        $arr = array();
        $dates = array();

        foreach ($els as $el) {
            $date = substr($el->t_start, 0, 10);
            if (!in_array($date, $dates)) {
                $dates[] = $date;
            }
        }

        foreach ($dates as $d) {
            $dist = 0;
            foreach ($els as $el) {
                if ($d==substr($el->t_start, 0, 10)) {
                    $dist += $el->distance;
                }
            }
            $arr[] = array($d, $dist);
        }

        $arr = $this->sortByDate($arr);

        return $arr;
    }

    public function getDataByMonth()
    {
        //
        $aMonthAgo = date('Y-m-d H:i:s', strtotime("-1 month"));

        $els = ExerLog::where('user_id','=',Auth::id())
        ->where('t_start','>=',$aMonthAgo)
        ->get();

        $arr = array();
        $dates = array();

        foreach ($els as $el) {
            $date = substr($el->t_start, 0, 10);
            if (!in_array($date, $dates)) {
                $dates[] = $date;
            }
        } 

        foreach ($dates as $d) {
            $dist = 0;
            foreach ($els as $el) {
                if ($d==substr($el->t_start, 0, 10)) {
                    $dist += $el->distance;
                }
            }
            $arr[] = array($d, $dist);
        }

        $arr = $this->sortByDate($arr);

        return $arr;
    }

    public function getDataByTotal()
    {
        //
        $longTimeAgo = date('Y-m-d H:i:s', strtotime("-10 year"));

        $els = ExerLog::where('user_id','=',Auth::id())
            ->where('t_start','>=',$longTimeAgo)
            ->get();

        $arr = array();
        $dates = array();

        foreach ($els as $el) {
            $date = substr($el->t_start, 0, 10);
            if (!in_array($date, $dates)) {
                $dates[] = $date;
            }
        }

        foreach ($dates as $d) {
            $dist = 0;
            foreach ($els as $el) {
                if ($d==substr($el->t_start, 0, 10)) {
                    $dist += $el->distance;
                }
            }
            $arr[] = array($d, $dist);
        }

        $arr = $this->sortByDate($arr);

        return $arr;
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

    public function rand_time($start_time,$end_time){
        $start_time = strtotime($start_time);
        $end_time = strtotime($end_time);
        return date('Y-m-d H:i:s', mt_rand($start_time,$end_time));
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
        $start_time = '2015-01-01 00:00:00';
        $end_time = '2016-12-01 14:00:00';

       for($k=0;$k<2473;$k++){
               $t_start = $this->rand_time($start_time,$end_time);
               $exer_type = "running"; 
               $duration = rand(1800,4000);
               $distance = (int)($duration * (rand(15,35)/10));
               $steps = (int)($distance * (rand(88,102)/100));
               $calorie = (int)($distance * (rand(620,730)/10000));

               $user->addExerLog(
                    new ExerLog(['exer_type'=>$exer_type, 
                                't_start'=>$t_start,
                                'duration'=>$duration,
                                'distance'=>$distance,
                                'calorie'=>$calorie,
                                'steps'=>$steps ])
                );
           }

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
    public function edit(ExerLog $exerLog)
    {
        //
        return view('exer_logs.edit', compact('exerLog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExerLog $exerLog)
    {
        //
        // update()只会更新Comment模型中$fillable允许的字段
        // $exerLog->distance = $request->content;
        $exerLog->update($request->all());

        // 跳转到该评论所属的帖子页
        return redirect('usrs/' . $exerLog->usr->id);
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
