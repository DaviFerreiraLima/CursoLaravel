<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //Actions

    public function principal(){

        return view('site.principal') ;
    }
}
