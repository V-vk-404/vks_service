<?php

namespace App\Http\Livewire\Customer;

use App\Models\CustomerFeedback;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CustomerFeedbackComponent extends Component
{


    public $feedback_title;
    public $feedback_description;
    public function render()
    {
        $feedback = CustomerFeedback::all();
        return view('livewire.customer.customer-feedback-component', ['feedback' => $feedback])->layout('FrontEnd.layouts.guest');
    }
    public function addFeedback()
    {
        $feedback = new CustomerFeedback();
        $feedback->cust_id = Auth::user()->id;
        $feedback->name = Auth::user()->name;
        $feedback->email = Auth::user()->email;
        $feedback->profile_pic = Auth::user()->image;
        $feedback->phone = Auth::user()->phone;
        $feedback->feedback_title = $this->feedback_title;
        $feedback->feedback_description = $this->feedback_description;
        $feedback->save();
        return redirect()->back()->with('message', 'Thank you for your valuable feedback !');
    }
}
