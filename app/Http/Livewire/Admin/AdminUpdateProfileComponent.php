<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminUpdateProfileComponent extends Component
{
    use WithFileUploads;
    public $admin_id;
    public $name;
    public $email;
    public $image;
    public $gender;
    public $phone;
    public $address;
    public $newimage;

    public function mount()
    {
        $admin = User::where('id', Auth::user()->id)->first();
        $this->admin_id = $admin->id;
        $this->name = $admin->name;
        $this->email = $admin->email;
        $this->image = $admin->image;
        $this->phone = $admin->phone;
        $this->gender = $admin->gender;
        $this->address = $admin->address;
    }

    public function updateProfile()
    {
        $admin = User::where('id', Auth::user()->id)->first();
        $admin->email = $this->email;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('sproviders', $imageName);
            $admin->image = $imageName;
        }
        $admin->phone = $this->phone;
        $admin->gender = $this->gender;
        $admin->address = $this->address;
        $admin->save();
        session()->flash('message', 'Profile has been updated successfully !');
    }
    public function render()
    {
        $adminData = User::where('id', Auth::user()->id)->first();
        return view('livewire.admin.admin-update-profile-component', ['adminData' => $adminData])->layout('FrontEnd.layouts.guest');
    }
}
