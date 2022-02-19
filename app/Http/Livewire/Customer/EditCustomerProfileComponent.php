<?php

namespace App\Http\Livewire\Customer;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomersTotalService;
use App\Models\User;

class EditCustomerProfileComponent extends Component
{
    use WithFileUploads;
    public $customer_id;
    public $name;
    public $email;
    public $image;
    public $phone;
    public $address;
    public $newimage;

    public function mount()
    {
        $scustomer = User::where('id', Auth::user()->id)->first();
        $this->customer_id = $scustomer->id;
        $this->name = $scustomer->name;
        $this->email = $scustomer->email;
        $this->image = $scustomer->image;
        $this->phone = $scustomer->phone;
        $this->address = $scustomer->address;
    }
    public function updateProfile()
    {
        $scustomer = User::where('id', Auth::user()->id)->first();
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('customer', $imageName);
            $scustomer->image = $imageName;
        }
        $scustomer->name = $this->name;
        $scustomer->email = $this->email;
        $scustomer->phone = $this->phone;
        $scustomer->address = $this->address;
        $scustomer->save();
        session()->flash('message', 'Profile has been updated successfully !');
    }
    public function render()
    {
        return view('livewire.customer.edit-customer-profile-component')->layout('FrontEnd.layouts.guest');
    }
}
