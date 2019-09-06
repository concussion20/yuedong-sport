<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\User;
use App\Group;
use App\Topic;
use App\Comment;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $topics = Topic::all();
        return $topics;
    }

    public function getTopicDtl(Topic $topic)
    {
        //
        $cmts = Comment::where('topic_id','=',$topic->id)->get();
        $lauerName = User::where('id','=',$topic->user_id)->get()[0]->name;

        $comments = array();
        foreach ($cmts as $cmt) {
            $comments[] = array(User::where('id','=',$cmt->user_id)->get()[0]->name, $cmt);
        }

        return array($topic, $lauerName, $comments);
//        return $topic;
    }

    public function getTopicDtlPage($topicId )
    {
        //
        return view('group.topicDtl')->with('topicId', $topicId);
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
