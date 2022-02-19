<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServiceCategoryComponent extends Component
{
    use WithPagination;
    public $no = 1;
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
    public function render()
    {
        $scategories = ServiceCategory::paginate(5);
        return view('livewire.admin.admin-service-category-component', ['scategories' => $scategories])->layout('FrontEnd.layouts.guest');
    }
}
