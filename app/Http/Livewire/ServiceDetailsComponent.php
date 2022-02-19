<?php

namespace App\Http\Livewire;
use App\Models\User;
use App\Models\Service;
use Livewire\Component;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ServiceDetailsComponent extends Component
{
    public $service_slug;
    
    public function mount($service_slug)
    {
        $this->service_slug =$service_slug;
    }
    public function render()
    {   
        $service = Service::where('slug',$this->service_slug)->first(); 
        $sprovider= User::where('id',$service->sprovider_id)->first();
        $r_service = Service::where('service_category_id',$service->service_category_id)->where('slug','!=',$this->service_slug)->inRandomOrder()->first(); 
        $total = $service->price;
        if ($service->discount){
            if($service->discount_type == 'fixed'){
                $service->discount;
                $total = $total- $service->discount;
            }
            elseif($service->discount_type == 'percent'){
                $service->discount;
                $total = $total- ($total*$service->discount/100);
            }
        }
   
        Session::put('sprovider_image', $sprovider->image);
        Session::put('sprovider_id', $sprovider->id);
        Session::put('sprovider_name', $sprovider->name);
        Session::put('sprovider_phone',$sprovider->phone);
        Session::put('price', $total);
        Session::put('slug_id', $service->id);
        Session::put('slug_name', $service->name);
        Session::put('slug_image', $service->image);
        Session::put('service_category_id', $service->service_category_id);
        Session::put('service_category',$service->category->name );
        return view('livewire.service-details-component',['service'=>$service,'r_service'=>$r_service,'sprovider'=>$sprovider ])->layout('frontend.layouts.base');
    }
}
 