<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HealthcardController extends Controller
{
    public function healthcard()
    {
        
        return view ('healthcard');
    }

    public function cardmaking(Request $request)
    {

        $user = Student::create([
            'bloodtype' => $request->bloodtype,
            'age' => $request->age,
            'health_history' => $request->health_history,
        ]);
        $user->save();
         
        return redirect()->back();
    }
}
