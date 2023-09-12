<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('frontend.dashboard.profile');
    }
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name'=>['required','max:100'],
            'email'=>['required','email', 'unique:users,email,'.Auth::user()->id],
            'image'=>['image','max:2048']
        ]);
    }
}
