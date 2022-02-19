<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\User;
use Livewire\Component;
use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SproviderProfileComponent extends Component
{
    public function render()
    {
        $sprovider= User::where('id',Auth::user()->id)->first();

        return view('livewire.sprovider.sprovider-profile-component',['sprovider'=>$sprovider])->layout('FrontEnd.layouts.guest');
    }
}
