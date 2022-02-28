<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use stdClass;

class UsersController extends Controller
{
    public function getIndex(){

        return view('Front.index');
    }


    public function showData(){
        // $data=[];
        // $data['id'] = 10;
        // $data['name'] ='moath mohammmed';

        // return view('welcome')->with('id',$data['id'])->with('name',$data['name']);
        //return view('welcome',['id'=> $data['id'] ,'name'=>$data['name']]);
       // return view('welcome',$data);

       $obj = new stdClass();

       $obj->name ='moath';
       $obj->id ='20';
       return view('welcome',compact('obj'));

    }
}
