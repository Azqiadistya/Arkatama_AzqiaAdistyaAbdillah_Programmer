<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function AddUser(Request $req)
    {
        $user = new User;
        $user->NAME = $req->name;
        $user->AGE = $req->age;
        $user->CITY = $req->city;
        $user->save();
    }
}