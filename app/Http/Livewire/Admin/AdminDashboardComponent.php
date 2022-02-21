<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Models\Contact;
use App\Models\Paytm;
use Livewire\Component;
use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class AdminDashboardComponent extends Component
{

    public function render()
    {
        $totalServiceProvider = User::where('u_type', 'SPV')->count();
        $totalUser = User::where('u_type', 'CST')->count();
        $totalServiceCategories = ServiceCategory::count();
        $totalAmount = Paytm::all()->sum('price');
        $total = ($totalAmount * 25) / 100;
        $users = User::where('u_type', 'CST')->paginate(5);
        $sproviders = User::where('u_type', 'SPV')->paginate(5);
        $new_users = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');



        $result = DB::select(DB::raw("select count(*) as total_user, u_type from users group by u_type"));
        $chartData = "";
        foreach ($result as $list) {
            if ($list->u_type !== 'ADM') {
                $chartData =     $chartData .= "['" . $list->u_type . "'," . $list->total_user . "],";
            }
        }

        $arr = rtrim($chartData, ",");
        $contacts = Contact::paginate(5);
        return view(
            'livewire.admin.admin-dashboard-component',
            ['totalServiceProvider' => $totalServiceProvider, 'totalUser' => $totalUser, 'totalServiceCategories' => $totalServiceCategories, 'total' => $total, 'chartData' => $arr, 'sproviders' => $sproviders, 'contacts' => $contacts, 'users' => $users],
            compact('new_users')
        )->layout('frontend.layouts.guest');
    }
}
