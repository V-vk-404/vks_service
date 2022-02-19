<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class AdminProfileComponent extends Component
{

    public function render()
    {
        $admin = User::where('id', Auth::user()->id)->first();

        return view('livewire.admin.admin-profile-component', ['admin' => $admin])->layout('FrontEnd.layouts.guest');
    }
}
