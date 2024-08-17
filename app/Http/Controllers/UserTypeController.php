<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    public function selectUserType(){
        return view('userSelection');
    } 

    public function setUserType(){
        
    }
}
