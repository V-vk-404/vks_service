<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use App\Models\ServiceCategory;
use Livewire\WithPagination;

class AdminServicesByCategoryComponent extends Component
{
    use WithPagination;
    public $category_slug;
    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $category = ServiceCategory::where('slug', $this->category_slug)->first();
        $services = Service::where('service_category_id',$category->id)->paginate(5);
        return view('livewire.admin.admin-services-by-category-component',['category_name'=>$category->name,'services'=>$services])->layout('frontend.layouts.guest');
    }
    protected $listeners = ['delete'];
    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('Swal.fire:confirm', [
            'type' => 'warning',
            'title' => 'Are you sure?',
            'text' => '',
            'id' => $id,
            'showCancelButton' => true,
            'confirmButtonColor' => '#3085d6',
            'cancelButtonColor' => '#d33',
            'confirmButtonText' => 'Yes, delete it!'
        ]);
    }
    public function delete($id)
    {
        $scategory = ServiceCategory::find($id);
        if ($scategory->image) {
            unlink('images/services-categories' . '/' . $scategory->image);
        }
        $scategory->delete();
        session()->flash('message', 'Category has been deleted successfully!');
    }

}
