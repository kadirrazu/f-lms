<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $attributes = request()->validate([
            'name' => 'required',
            'name_bn' => 'nullable',
            'avatar' => 'nullable',
            'mobile' => 'required',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|min:6|max:30|unique:users,username',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
            'role' => 'required'
        ]);

        //Convert the provided password to HASHED version
        $attributes['password'] = bcrypt($attributes['password']);

        unset($attributes['password_confirmation']);

        $user = User::create( $attributes );

        return redirect('/admin/user')->withSuccess('User added successfully.');
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

    public function update(User $user)
    {
        $attributes = request()->validate([
            'name' => 'required',
            'name_bn' => 'nullable',
            'avatar' => 'nullable',
            'mobile' => 'required',
            'email' => ['required', Rule::unique('users', 'email')->ignore($user)],
            'username' => ['required', Rule::unique('users', 'username')->ignore($user)],
            'password' => 'nullable|confirmed|min:6',
            'password_confirmation' => '',
            'role' => 'required'
        ]);

        if($attributes['password'] != null)
        {
            $attributes['password'] = bcrypt($attributes['password']);
        }
        else
        {
            unset($attributes['password']);
            unset($attributes['password_confirmation']);
        }

        $user->update( $attributes );

        return redirect('/admin/user')->withSuccess('User was updated successfully.');
        
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        //$user->delete();

        return redirect('/admin/user')->with('warning', 'User was deleted!'); 
    }
}
