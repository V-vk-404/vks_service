<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;

class AdminServicesComponent extends Component
{
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
        $service = Service::find($id);
        if ($service->thumbnail) {
            unlink('images/services/thumbnails' . '/' . $service->thumbnail);
        }
        if ($service->image) {
            unlink('images/services' . '/' . $service->image);
        }
        $service->delete();
        session()->flash('message', 'Service has been deleted successfully!');
    }
    public function render()
    {
        $services = Service::paginate(5);
        return view('livewire.admin.admin-services-component', ['services' => $services])->layout('frontend.layouts.guest');
    }
}
