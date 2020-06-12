<?php

namespace App\Http\Controllers\Admin;
use App\User;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class AdminController
{
    public function index()
    {
        $number_blocks = [
            [
                'title' => 'Users Logged In Today',
                'number' => User::whereDate('last_login_at', today())->count()
            ],
            [
                'title' => 'Users Logged In Last 7 Days',
                'number' => User::whereDate('last_login_at', '>', today()->subDays(7))->count()
            ],
            [
                'title' => 'Users Logged In Last 30 Days',
                'number' => User::whereDate('last_login_at', '>', today()->subDays(30))->count()
            ],
        ];

        $list_blocks = [
            [
                'title' => 'Last Logged In Users',
                'entries' => User::orderBy('last_login_at', 'desc')
                    ->take(5)
                    ->get(),
            ],
            [
                'title' => 'Users Not Logged In For 30 Days',
                'entries' => User::where('last_login_at', '<', today()->subDays(30))
                    ->orwhere('last_login_at', null)
                    ->orderBy('last_login_at', 'desc')
                    ->take(5)
                    ->get()
            ],
        ];
		
		$chart_settings = [
            'chart_title' => 'Users by names',
			'report_type' => 'group_by_string',
			'model' => 'App\User',
			'group_by_field' => 'name',
			'chart_type' => 'pie',
			'filter_field' => 'created_at',
			'filter_period' => 'month', // show users only registered this month
        ];
        $chart = new LaravelChart($chart_settings);
		
		$chart_settings1 = [
            'chart_title'        => 'Users By Months',
            'chart_type'         => 'line',
            'report_type'        => 'group_by_date',
            'model'              => 'App\\User',
            'group_by_field'     => 'last_login_at',
            'group_by_period'    => 'month',
            'aggregate_function' => 'count',
            'filter_field'       => 'last_login_at',
        ];
        $chart1 = new LaravelChart($chart_settings1);
		
		return view('admin.home',compact('number_blocks', 'list_blocks', 'chart', 'chart1'));
    }
}
