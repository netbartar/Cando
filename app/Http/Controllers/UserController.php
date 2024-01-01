<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function createUser()
    {
        $roles = Role::select('id','name')->get();
        return view('user.create',compact('roles'));
    }

    public function storeUser(CreateUserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        ]);
        return redirect()->route('user.index');
    }

    public function listOfUsers()
    {
        $users = User::with('role:id,name')->get();
        return view('user.index',compact('users'));
    }

    public function showUser($id)
    {
        $user = User::with('role:id,name')->find($id);

    }

    public function deleteUser($id)
    {
        User::find($id)->delete();
    }
}
