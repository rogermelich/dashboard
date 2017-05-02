<?php

namespace App\Http\Controllers;

use App;
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

//        Eloquent
        $data['labels1'] = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
        $data['values1'] = [5, 10, 25, 2, 60, 80, 55];
        return view('dashboard',$data);
    }

    public function graph1() {
        $data = [];
        $data['labels3'] = ['Pepe', 'Maria', 'Josep', 'Tomas'];
        $values['values3'] = [1, 5, 6, 5];
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
        return $dashboard::all()->count();
    }

    public function createRandomDashboardblock($dashboard)
    {
        factory($dashboard)->states('user')->create();
    }

}
