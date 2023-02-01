<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        
        $users = User::paginate();

        return view('admin.user.index', [
            'page_title' => "All Users",
            'page_subtitle' => "List of All Users",
            'users' => $users
        ]);

    }

    public function create()
    {
        return view('admin.user.add', [
            'page_title' => "Add User",
            'page_subtitle' => "Add a new user"
        ]);
    }

    public function store()
    {
        
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('admin.user.show', [
            'page_title' => 'User Details',
            'page_subtitle' => 'User details of ',
            'user' => $user
        ]);

    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.edit', [
            'page_title' => 'Edit User',
            'page_subtitle' => 'Edit Details of',
            'user' => $user
        ]);
    }
}
