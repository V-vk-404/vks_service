<?php

namespace App\Http\Livewire\Sprovider;

use App\Models\Paytm;
use App\Models\Service;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SproviderDashboardComponent extends Component
{
    public function deleteService($id)
    {
        $paytm = Paytm::find($id);
        // if ($paytm->slug_image) 
        // {
        //     unlink('images/services'.'/'.$paytm->slug_image);
        // }
        $paytm->delete();
        session()->flash('message','Service has been canceled successfully!');

    }
    public function render()
    {
        $paytms = Paytm::paginate(5);
        $totalService = Service::where('sprovider_id', Auth::user()->id)->count();
        $totalUser = Paytm::where('sprovider_id', Auth::user()->id)->count();
        $totalServe = Paytm::Where('slug_id', Auth::user()->slug_id)->count();
        $totalEarning = Paytm::where('sprovider_id', Auth::user()->id)->sum('price');
        return view('livewire.sprovider.sprovider-dashboard-component', ['paytms' => $paytms, 'totalUser' => $totalUser, 'totalService' => $totalService, 'totalServe' => $totalServe, 'totalEarning' => $totalEarning])->layout('frontend.layouts.guest');
    }

    protected $listeners = ['delete'];
    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('Swal.fire:confirm', [
            'type' => 'warning',
            'title' => 'Are you sure you want to cancel this service?',
            'text' => '',
            'id' => $id,
            'showCancelButton' => true,
            'confirmButtonColor' => '#3085d6',
            'cancelButtonColor' => '#d33',
            'confirmButtonText' => 'Yes, delete it!'
        ]);
    }
    
    // public function delete($id)
    // {
    //     $paytm = Paytm::find($id);
    //     // if ($paytm->slug_image) 
    //     // {
    //     //     unlink('images/services'.'/'.$paytm->slug_image);
    //     // }
    //     $paytm->delete();
    //     session()->flash('message','Service has been cancelled successfully!');
    // }
    
}
