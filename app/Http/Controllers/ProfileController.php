<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use DataTables;
use App\Http\Requests\Profile\ProfileStoreRequest;
use App\Http\Requests\Profile\ProfileUpdateRequest;
use App\Models\User;
use Hash;

class ProfileController extends Controller
{
     public function profile(Request $request)
    {
            $profile =Auth::user();
        return view('admin.profile', compact('profile'));
    }


    public function updateProfile(ProfileUpdateRequest $request, $id)
    {
        $profile = User::find($id);
        $profile->name=$request->name;
        $profile->email=$request->email;
        if ($request->has('password'))
        {
        $profile->password=Hash::make($request->password);
    }
       
        $profile->save();
        
        return redirect()->route('dashboard')
            ->with('success', 'Profile updated successfully.');
    }
}
