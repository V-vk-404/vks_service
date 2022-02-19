<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminChangePasswordComponent extends Component
{
    public $current_password;
    public $new_password;
    public $confirm_password;
    public function render()
    {
        return view('livewire.admin.admin-change-password-component')->layout('FrontEnd.layouts.guest');
    }

    public function updatePassword()
    {
        $user = Auth::user();

        if (Hash::check($this->current_password, $user->password)) {
            if ($this->new_password === $this->confirm_password) {
                $user->password = Hash::make($this->new_password);
                $user->save();
                session()->flash('message', 'Password has been changed successfully!');
                return redirect()->back();
            } else {
                session()->flash('message', 'New Password and Confirm Password does not match!');
                return redirect()->back();
            }
        } else {
            session()->flash('message', 'Current Password does not match!');
            return redirect()->back();
        }
    }
    
}
