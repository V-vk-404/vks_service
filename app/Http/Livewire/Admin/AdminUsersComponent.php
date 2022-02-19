<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminUsersComponent extends Component
{

    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user->image) {
            unlink('images/sproviders' . '/' . $user->image);
        }
        $user->delete();
        session()->flash('message', 'User has been deleted successfully!');
    }

    public function render()
    {
        $users = User::where('u_type', 'CST')->paginate(5);
        return view('livewire.admin.admin-users-component', ['users' => $users])->layout('FrontEnd.layouts.guest');
    }
}
