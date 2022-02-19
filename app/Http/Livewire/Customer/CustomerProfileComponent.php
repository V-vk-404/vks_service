<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomersTotalService;
use App\Models\User;

class CustomerProfileComponent extends Component
{
    public function render()
    {
        $scustomer= User::where('id',Auth::user()->id)->first();
        return view('livewire.customer.customer-profile-component',['scustomer'=>$scustomer])->layout('FrontEnd.layouts.guest');
    }
}
