<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('admin.authenticate.login.index', [
            'title' => 'Login'
        ]);
    }
}
