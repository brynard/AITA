<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;

class AuthenticationController extends Controller
{
   function index()
   {
    return view('login');
   }
}
