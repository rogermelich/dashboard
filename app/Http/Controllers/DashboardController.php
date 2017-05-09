<?php

namespace App\Http\Controllers;

use App;
use Cache;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $dashboard;

    /**
     * DashboardController constructor.
     */
    public function __construct(App $dashboard)
    {
        $this->dashboard = $dashboard;
    }

    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];

        //Eloquent
        $data['labels1'] =  "['January', 'February', 'March', 'April', 'May', 'June', 'July']";
        $data['values1'] =  "[10,42,4,23,43,76]";
        $data['labels2'] =  "['January', 'February', 'March', 'April', 'May', 'June', 'July']";
        $data['values2'] =  "[10,42,4,23,43,76]";
        return view('dashboard',$data);
    }
    public function graph1()
    {
        $data = [];
        $data['labels3']= ['Pepe', 'Maria', 'Jaume', 'Abril', 'Sergi'];
        $data['values3']= [45,56,43,23,12];
        return $data;
    }


//    public function tasks()
//    {
//        return Task::all();
//    }
//
//    public function tasksNumber()
//    {
//        return Task::all()->count();
//    }
//
//    public function createRandomTask()
//    {
//        factory(\App\Task::class)->states('user')->create();
//    }

    public function dashboardblock($dashboard)
    {
        return $dashboard::all();
    }

    public function dashboardblockNumber($dashboard)
    {
        $dash = null;

        $this->$dashboard = $this->$dash;
        $value = Cache::get('taskNumber', function ($dash) {
            return $dash::all()->count();
        });

        return $value;
    }

    public function createRandomDashboardblock($dashboard)
    {
        factory($dashboard)->states('user')->create();
    }

    public function fetchActivityFeed()
    {
        return Activity::all();
    }

}
