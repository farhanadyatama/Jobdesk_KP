<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(User $users)
    {
        // $this->authorize('admin');
        return view('dashboard.user',[
            'users' => User::all()
        ]);
    }
}
