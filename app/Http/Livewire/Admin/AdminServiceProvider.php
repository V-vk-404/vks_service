<?php

namespace App\Http\Livewire\Admin;

use App\Models\ServiceProvider;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Component;


class AdminServiceProvider extends Component
{
    use WithPagination;
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
        $sproviders = User::find($id);
        if ($sproviders->image) {
            unlink('images/sproviders' . '/' . $sproviders->image);
        }
        $sproviders->delete();
        session()->flash('message', 'Service Provider has been deleted successfully!');
    }
    public function render()
    {
        $sproviders = User::where('u_type', 'SPV')->paginate(5);
        return view('livewire.admin.admin-service-provider', ['sproviders' => $sproviders])->layout('FrontEnd.layouts.guest');
    }
}
