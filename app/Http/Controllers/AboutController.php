<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index($id){
        // return 'about index';
        return view('about')->with(['id'=>$id,'msg'=>'hello']);
    }
    public function test(){
        return 'about test';
    }
}
