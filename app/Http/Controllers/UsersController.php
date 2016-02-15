<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function show($username, $user)
    {
        $User = User::findByUsername($username);
        return view('users.show', ['user' => $user]);
    }
}
