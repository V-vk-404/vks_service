<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChartController extends Controller
{
    public function barchart()
    {
        // $result2 = DB::select(DB::raw("select count(*) as count, created_at from users group by MONTH(created_at)"));
        // $result = DB::select(DB::raw("select count(*) as total_user, address from users group by address"));
        // $chartData = "";
        // foreach ($result as $list) {
        //     $chartData .= "['" . $list->address . "'," . $list->total_user . "],";
        // }
        // $arr = rtrim($chartData, ",");

        // $users = User::select(DB::raw("count(*) as count"))
        //     ->where('created_at', date('Y'))
        //     ->groupBy(DB::raw("MONTH(created_at)"))
        //     ->pluck('count');
        // $months = User::select(DB::raw("MONTH(created_at) as month"))
        //     ->where('created_at', date('Y'))
        //     ->groupBy(DB::raw("MONTH(created_at)"))
        //     ->pluck('month');
        // $datas = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        // foreach ($months as $index => $month) {
        //     $data[$month] = $users[$index];
        // } $year = ['2015','2016','2017','2018','2019','2020'];
        $year = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $user = [];
        foreach ($year as $key => $value) {
            $user[] = User::where(DB::raw("DATE_FORMAT(created_at, '%Y')"), $value)->count();
        }

        return view('layouts.admin.chart')->with('year', json_encode($year))->with('user', json_encode($user));
    }

    //     return view('layouts.admin.chart', ['chartData' => $arr], compact('datas'));
    // }
}
