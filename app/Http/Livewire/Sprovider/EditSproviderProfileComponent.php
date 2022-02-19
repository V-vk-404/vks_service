<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditSproviderProfileComponent extends Component
{
    use WithFileUploads;
    public $service_provider_id;
    public $name;
    public $email;
    public $image;
    public $phone;
    public $gender;
    public $address;
    public $service_category_id;
    public $slug_id;
    public $newimage;

    public function mount()
    {
        $sprovider = User::where('id', Auth::user()->id)->first();
        $this->service_provider_id = $sprovider->id;
        $this->name = $sprovider->name;
        $this->email = $sprovider->email;
        $this->image = $sprovider->image;
        $this->phone = $sprovider->phone;
        $this->gender = $sprovider->gender;
        $this->address = $sprovider->address;
        $this->service_category_id = $sprovider->service_category_id;
        $this->slug_id = $sprovider->slug_id;
    }

    public function updateProfile()
    {



        $sprovider = User::where('id', Auth::user()->id)->first();
        if ($this->newimage) {

            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('sproviders', $imageName);
            $sprovider->image = $imageName;
        }
        $sprovider->name = $this->name;
        $sprovider->email = $this->email;
        $sprovider->phone = $this->phone;
        $sprovider->gender = $this->gender;
        $sprovider->address = $this->address;
        $sprovider->service_category_id = $this->service_category_id;
        $sprovider->slug_id = $this->slug_id;
        $sprovider->save();
        session()->flash('message', 'Profile has been updated successfully !');
    }
    public function render()
    {
        $scategories = ServiceCategory::all();
        $services = Service::all();
        return view('livewire.sprovider.edit-sprovider-profile-component', ['scategories' => $scategories, 'services' => $services])->layout('FrontEnd.layouts.guest');
    }
}
