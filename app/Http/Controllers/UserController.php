<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users = User::all();
        return inertia('User/All', [
            'users' => $users
        ]);
    }
    
    function add()
    {
        return inertia('User/Add');
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        User::create($request->all());
        return to_route('user');   
    }
}