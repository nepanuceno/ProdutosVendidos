<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Dashboard extends Controller
{
    //

    public function index(){

        $user = new User();

        $lojas = $user->lojas();

        // dd($lojas);



        // return User::all();
        return view('lojas', compact('lojas'));
    }


}
