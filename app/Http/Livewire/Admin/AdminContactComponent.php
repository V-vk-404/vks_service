<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class AdminContactComponent extends Component
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
        $contact = Contact::find($id);
        $contact->delete();
        session()->flash('message', 'Contact has been deleted successfully!');
    }
    public function render()
    {
        $contacts = Contact::paginate(5);
        return view('livewire.admin.admin-contact-component', ['contacts' => $contacts])->layout('frontend.layouts.guest');
    }
}
