<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
class UsersController extends Controller
{
    public function login()
    {
      return view('users.login');
    }
    public function signup()
    {
      return view('users.register');
    }
    public function store_user(Request $request)
    {
      User::create($request->all());
      return 'Going right';
    }
}
