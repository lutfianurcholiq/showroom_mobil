<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function profile () {
        return view('admin.users.profile', [
            'title' => 'Profile',
            'users' => User::all()
        ]);
    }
}
