<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class FirstController extends Controller
{
    public function showUsersName(){

        return 'users Name  Ahmead';
    }


    public function __construct()
    {
        $this->middleware('auth')->except('getIndex');
    }


}
