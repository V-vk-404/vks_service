<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use App\Models\ServiceProvider;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class AdminAddServiceProvider extends Component
{
    use WithFileUploads;
    public $service_provider_id;
    public $name;
    public $email;
    public $password;
    public $image;
    public $phone;
    public $gender;
    public $address;
    public $service_category_id;
    public $u_type = "SPV";
    public $newimage;


    public function addServiceProvider()
    {
        $sproviders = new User();
        $sproviders->name = $this->name;
        $sproviders->email = $this->email;
        $sproviders->password = Hash::make($this->password);
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('sproviders', $imageName);
            $sproviders->image = $imageName;
        }
        $sproviders->phone = $this->phone;
        $sproviders->gender = $this->gender;
        $sproviders->address = $this->address;
        $sproviders->service_category_id = $this->service_category_id;
        $sproviders->u_type = $this->u_type;

        $sproviders->save();
        session()->flash('message', 'Profile has been Added successfully !');
        return redirect()->back()->with('message', 'Profile Added successfully !');
    }
    public function render()
    {
        $scategories = ServiceCategory::all();
        return view('livewire.admin.admin-add-service-provider', ['scategories' => $scategories])->layout('FrontEnd.layouts.guest');

    }
}
