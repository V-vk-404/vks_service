<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceProvider;

class AdminAddServiceProvider extends Controller
{
    public function addServiceProvider(Request $request)
    {
        $sproviders = new ServiceProvider;
        $sproviders->name = $request->name;
        $sproviders->email = $request->email;
        $sproviders->password = $request->password;
        if ($request->hasfiles('file')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('images/sproviders', $filename);
            $sproviders->image = $filename;
        }
        $sproviders->phone = $request->phone;
        $sproviders->address = $request->address;
        $sproviders->service_category_id = $request->service_category_id;
        $sproviders->save();
        session()->flash('message', 'Profile has been Added successfully !');
        return redirect()->back()->with('message', 'Profile Added successfully !');
    }
}
