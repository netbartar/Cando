<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userList()
    {
        DB::table('posts')->get();
        $users = $this->info();
        return view('UserManagement.Users',compact('users'));
//        return view('UserManagement.Users')->with(['users'=>$name,'lastname'=>$lastname]);
//        return view('UserManagement.Users',['name'=>$name,'lastname'=>$lastname]);
    }

    public function show($name)
    {
        $users = $this->info();
        return $users[$name];
    }

    private function info(){
        return [
            'Vahid' => [
                'age' => 20,
                'x' => 50
            ],
            'Sara' => [
                'age' => 15,
                'x' => 60
            ],
            'Bahram' => [
                'age' => 5,
                'x' => 30
            ],
        ];
    }
}
