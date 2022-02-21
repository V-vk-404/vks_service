<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\ServiceCategory;
use Livewire\WithFileUploads;

class AdminAddServiceCategoryComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function updated($feilds)
    {
        $this->validateOnly($feilds,[
            'name'=> 'required',
            'slug'=> 'required',
            'image'=> 'required|mimes:jpeg,png,jpg',
        ]);
    }
    public function createNewCategory()
    {
        $this->validate([
            'name'=> 'required',
            'slug'=> 'required',
            'image'=> 'required|mimes:jpeg,png,jpg',
        ]);
        $scategory = new ServiceCategory();
        $scategory->name = $this->name;
        $scategory->slug = $this->slug;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->getClientOriginalName();
        $this->image->storeAs('services-categories', $imageName);
        $scategory->image = $imageName;
        $scategory->save();
        session()->flash('message','Category has been created successfully!');

    }
    public function render()
    {
        return view('livewire.admin.admin-add-service-category-component')->layout('frontend.layouts.guest');
    }
}
