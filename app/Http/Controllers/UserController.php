<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('User/Index', [
            'title' => "User",
            'data' => User::orderBy('id', 'desc')->get()
        ]);
    }

    public function show(User $user)
    {
        return Inertia::render('User/Show', [
            'title' => "Profile",
            'user' => $user
        ]);
    }

    public function create() 
    {
        return Inertia::render('User/Create', [
            'title' => 'Create User'
        ]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:3',
        ]);

        User::create($validatedData);

        return redirect('/users')->with('message', 'User Created');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users')->with('message', 'User Deleted');
    }

    public function edit(User $user)
    {
        return Inertia::render('User/Edit', [
            'title' => 'Edit User',
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
                        Rule::unique('users')->ignore($user->id),
                        'email:dns',
        ]);

        $user->update($validatedData);

        return redirect('/users')->with('message', 'User Updated');
    }
}
