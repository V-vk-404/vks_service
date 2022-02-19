<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SproviderServicesComponent extends Component
{


    protected $listeners = ['delete'];
    public function render()
    {
        $services = Service::where('sprovider_id', Auth::user()->id)->paginate(5);
        return view('livewire.sprovider.sprovider-services-component', ['services' => $services])->layout('frontend.layouts.guest')->with('no', 1);
    }

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
}
