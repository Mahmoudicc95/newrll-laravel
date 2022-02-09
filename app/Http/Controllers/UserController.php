<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;

class UserController extends Controller
{
    function index()
    {
        //  return User::find(1);
        return Phone::find(2);
    }
    
    public function insertRecord()
    {
        $phone = new Phone();
        $phone->phone = "0116060";
        $user = new user();
        $user->name = "Mahmdd";
        $user->email = "Mahmdd.@gmail.com";
        $user->password = encrypt('431234');
        $user->save();
        $user->phone()->save($phone);
        return "Reacord has been add";
    }

}
