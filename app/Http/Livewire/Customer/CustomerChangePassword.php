<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerChangePassword extends Component
{
    public $current_password;
    public $new_password;
    public $confirm_password;
    public function render()
    {
        return view('livewire.customer.customer-change-password')->layout('FrontEnd.layouts.guest');
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
