<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;

class UserController extends Controller
{
    function index()
    {
         return User::find(2);
        // return Phone::find(3);
    }
    
    public function insertRecord()
    {
        $phone = new Phone();
        $phone->phone = "01160605280";
        $user = new user();
        $user->name = "Mahmoud";
        $user->email = "Mahmoud.@gmail.com";
        $user->password = encrypt('431234');
        $user->save();
        $user->phone()->save($phone);
        return "Reacord has been add";
    }

}
