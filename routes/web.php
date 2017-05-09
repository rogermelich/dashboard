<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
//    Route::get('tasks', 'DashboardController@tasks')->name('tasks');
//
//    Route::get('dashboard/tasks/number', 'DashboardController@tasksNumber')->name('tasks-number');
//
//    Route::get('create/random/task', 'DashboardController@createRandomTask')->name('createRandomTask');
    //Task
    Route::get('tasks', 'DashboardController@tasks')->name('tasks');

    Route::get('dashboard/tasks/number', 'DashboardController@tasksNumber')->name('tasks-number');

    Route::get('create/random/tasks', 'DashboardController@createRandomTask')->name('createRandomTask');

    //Thread
    Route::get('threads', 'DashboardController@threads')->name('threads');

    Route::get('dashboard/threads/number', 'DashboardController@threadsNumber')->name('threads-number');

    Route::get('create/random/threads', 'DashboardController@createRandomThread')->name('createRandomThreads');

    //Channel
    Route::get('channels', 'DashboardController@channels')->name('channels');

    Route::get('dashboard/channels/number', 'DashboardController@channelsNumber')->name('channels-number');

    Route::get('create/random/channels', 'DashboardController@createRandomChannel')->name('createRandomChannel');

    //Reply
    Route::get('replies', 'DashboardController@replies')->name('replies');

    Route::get('dashboard/replies/number', 'DashboardController@repliesNumber')->name('replies-number');

    Route::get('create/random/replies', 'DashboardController@createRandomReply')->name('createRandomReply');

    // Activity Feed
    Route::get('activity-feed', 'DashboardController@fetchActivityFeed');

});

Route::get('dashboard/graphs/1', 'DashboardController@graph1');
