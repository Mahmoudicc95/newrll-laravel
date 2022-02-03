<?php

namespace App\Http\Controllers;
use App\Models\passports;

use Illuminate\Http\Request;

class PassportsController extends Controller
{
    //
    public function index()
{
   $Passports = Passports::with(['user'])->get();
   dd($passport);
}
}
