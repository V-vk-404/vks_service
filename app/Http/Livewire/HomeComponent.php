<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\DB;

class HomeComponent extends Component
{
    public function render()
    {
        $testimonial = DB::table('customers_feedback')->orderBy('id', 'desc')->get();
        $scategories = ServiceCategory::inRandomOrder()->take(18)->get();
        $fserivces = Service::where('featured', 1)->inRandomOrder()->take(8)->get();
        $fscategories = ServiceCategory::where('featured', 1)->inRandomOrder()->take(8)->get();
        return view('livewire.home-component', ['scategories' => $scategories, 'fserivces' => $fserivces, 'fscategories' => $fscategories, 'testimonial' => $testimonial])->layout('frontend.layouts.base');
    }
}
