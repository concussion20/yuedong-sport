<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	if (Auth::check()) {
		# code...
		return view('index');
	}else{
		return view('index_notLoggedIn');
	}
    
});

Auth::routes();

Route::get('app', function () {
    return view('layouts.app');
});

Route::get('index', ['as'=>'index', 'uses'=>function () {
    return view('index');
}]);

Route::get('index_nli', ['as'=>'index_nli', 'uses'=>function () {
    return view('index_notLoggedIn');
}]);

Route::get('login', ['as'=>'login', 'uses'=>function () {
    return view('auth.login');
}]);

Route::get('register', ['as'=>'register', 'uses'=>function () {
    return view('auth.register');
}]);

Route::get('exer/myExerRecords', ['as'=>'exer/myExerRecords', 'uses'=>function () {
    return view('exer.myExer');
}]);

Route::get('exer/bodyMgmt', ['as'=>'exer/bodyMgmt', 'uses'=>function () {
    return view('exer.bodyMgmt');
}]);

Route::get('loadExerData/{user_id}', ['as'=>'loadExerData/{user_id}', 'uses'=>'ExerLogsController@getExerData']);

Route::get('myExer', ['as'=>'myExer', 'uses'=>function () {
    return view('exer.myExer');
}]);

Route::get('bodyMgmt', ['as'=>'bodyMgmt', 'uses'=>function () {
    return view('exer.bodyMgmt');
}]);

Route::get('act', ['as'=>'act', 'uses'=>function () {
    return view('act');
}]);

Route::get('act/actSquare', ['as'=>'act/actSquare', 'uses'=>function () {
    return view('act.actSquare');
}]);

Route::get('act/myAct', ['as'=>'act/myAct', 'uses'=>function () {
    return view('act.myAct');
}]);

Route::get('act/lauAct', ['as'=>'act/lauAct', 'uses'=>function () {
    return view('act.lauAct')->with('isSuccess', 'no');
}]);

Route::get('act/actDtl/{actId}', ['as'=>'act/actDtl/{actId}', 'uses'=>'SingleActsController@getActDtlPage']);

//Route::get('loadActsSquare', ['as'=>'loadActsSquare', 'uses'=>'SingleActsController@index']);

Route::get('loadActsSquare/goingActs', ['as'=>'loadActsSquare/goingActs', 'uses'=>'SingleActsController@getSquareGoingActs']);

Route::get('loadActsSquare/comingActs', ['as'=>'loadActsSquare/comingActs', 'uses'=>'SingleActsController@getSquareComingActs']);

Route::get('loadLauActs', ['as'=>'loadLauActs', 'uses'=>'SingleActsController@getLauActs']);

Route::get('loadAtndActs', ['as'=>'loadAtndActs', 'uses'=>'SingleActsController@getAtndActs']);

Route::get('loadActDtl/{singleAct}', ['as'=>'loadActDtl/{singleAct}', 'uses'=>'SingleActsController@getActDtl']);

Route::get('prtp', ['as'=>'prtp', 'uses'=>function () {
    return view('act.myAct.prtp');
}]);

Route::get('lauSingle', ['as'=>'lauSingle', 'uses'=>function () {
    return view('act.lauAct.single');
}]);

Route::get('lauMany', ['as'=>'lauMany', 'uses'=>function () {
    return view('act.lauAct.many');
}]);

Route::get('lauGroup', ['as'=>'lauGroup', 'uses'=>function () {
    return view('act.lauAct.group');
}]);

Route::get('group', ['as'=>'group', 'uses'=>function () {
    return view('group');
}]);

//Route::get('group/topicDtl/{topicId}', ['as'=>'act/actDtl/{actId}', 'uses'=>'SingleActsController@getActDtlPage']);

Route::get('group/myGroup', ['as'=>'group/myGroup', 'uses'=>function () {
    return view('group.myGroup');
}]);

Route::get('group/selected', ['as'=>'group/selected', 'uses'=>function () {
    return view('group.selected');
}]);

Route::get('loadMyTopics', ['as'=>'loadMyTopics', 'uses'=>'TopicsController@index']);

Route::get('group/topicDtl/{topicId}', ['as'=>'group/topicDtl/{topicId}', 'uses'=>'TopicsController@getTopicDtlPage']);

Route::get('loadTopicDtl/{topic}', ['as'=>'loadTopicDtl/{topic}', 'uses'=>'TopicsController@getTopicDtl']);

Route::get('group/groupDtl/{groupId}', ['as'=>'group/groupDtl/{groupId}', 'uses'=>'GroupsController@getGrpDtlPage']);

Route::get('myGroups', ['as'=>'myGroups', 'uses'=>function () {
    return view('group.myGroups');
}]);

Route::get('loadAtndGrp', ['as'=>'loadAtndGrp', 'uses'=>'GroupsController@getAtndGrps']);

Route::get('loadSelectedTopics', ['as'=>'loadSelectedTopics', 'uses'=>'TopicsController@index']);

Route::get('loadSelectedGrps', ['as'=>'loadSelectedGrps', 'uses'=>'GroupsController@index']);

Route::get('detail', ['as'=>'detail', 'uses'=>function () {
    return view('group.detail');
}]);

Route::get('topic', ['as'=>'topic', 'uses'=>function () {
    return view('group.topic');
}]);

Route::get('statsAnls', ['as'=>'statsAnls', 'uses'=>function () {
    return view('statsAnls');
}]);

Route::get('loadDataByWeek', ['as'=>'loadDataByWeek', 'uses'=>'ExerLogsController@getDataByWeek']);

Route::get('loadDataByMonth', ['as'=>'loadDataByMonth', 'uses'=>'ExerLogsController@getDataByMonth']);

Route::get('loadDataByTotal', ['as'=>'loadDataByTotal', 'uses'=>'ExerLogsController@getDataByTotal']);

Route::get('message', ['as'=>'message', 'uses'=>function () {
    return view('message');
}]);

Route::get('newFan', ['as'=>'newFan', 'uses'=>function () {
    return view('message.newFan');
}]);

Route::get('sysMsg', ['as'=>'sysMsg', 'uses'=>function () {
    return view('message.sysMsg');
}]);

Route::get('userCenter/profile', ['as'=>'userCenter/profile', 'uses'=>function () {
    return view('user_center.profile');
}]);

Route::get('userCenter/myFds', ['as'=>'userCenter/myFds', 'uses'=>function () {
    return view('user_center.myFds');
}]);

Route::get('loadFans', ['as'=>'loadFans', 'uses'=>'FansController@index']);

Route::get('loadFollowings', ['as'=>'loadFollowings', 'uses'=>'FansController@getFollowing']);

Route::get('loadFds', ['as'=>'loadFds', 'uses'=>'FriendsController@index']);

Route::get('following', ['as'=>'following', 'uses'=>function () {
    return view('user_center.myFds.following');
}]);

Route::get('others_exer/{user}', ['as'=>'others_exer/{user}', 'uses'=>'ExerLogsController@getOthersExerData']);

Route::get('checkIfFollowing/{user}', ['as'=>'checkIfFollowing/{user}', 'uses'=>'FansController@checkIfFollowing']);

Route::get('exer_logs/{exerLog}/edit', ['as'=>'exer_logs/{exerLog}/edit', 'uses'=>'ExerLogsController@edit']);

Route::patch('exer_logs/{exerLog}', 'ExerLogsController@update');

Route::get('test', ['as'=>'test', 'uses'=>function () {
    return view('testAddFans');
}]);

Route::get('test2', ['as'=>'test2', 'uses'=>function () {
    return view('testOnclick');
}]);

Route::post('act/lauSingleAct/{user}', ['as'=>'act/lauSingleAct/{user}', 'uses'=>'SingleActsController@store']);

Route::post('addGroup/{user}', ['as'=>'addGroup/{user}', 'uses'=>'GroupsController@store']);

Route::post('addComment/{topic}', ['as'=>'addComment/{topic}', 'uses'=>'CommentsController@store']);

Route::post('addGroupMbr/{group}', ['as'=>'addGroupMbr/{group}', 'uses'=>'GroupMbrsController@store']);

Route::post('addSingleActMbr/{singleAct}', ['as'=>'addSingleActMbr/{singleAct}', 'uses'=>'SingleActMbrsController@store']);

Route::post('injectExerLogs/{user}', ['as'=>'injectExerLogs/{user}', 'uses'=>'ExerLogsController@store']);

Route::get('follow/{user}', ['as'=>'follow/{user}', 'uses'=>'FansController@store']);

Route::get('unfollow/{user}', ['as'=>'unfollow/{user}', 'uses'=>'FansController@destroy']);

Route::get('unfollow2/{user}', ['as'=>'unfollow2/{user}', 'uses'=>'FansController@destroy2']);
