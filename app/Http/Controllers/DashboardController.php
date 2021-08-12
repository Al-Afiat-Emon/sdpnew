<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
   public function index()
   {
       if(Auth::user()->hasRole('teacher')){
            return view('teacher');
       }elseif(Auth::user()->hasRole('doctor')){
            return view('doctor');
       }elseif(Auth::user()->hasRole('student')){
        return view('student');
   }
   }

   public function myprofile()
   {
    return view('myprofile');
   }

   public function postcreate()
   {
    return view('postcreate');
   }
}
