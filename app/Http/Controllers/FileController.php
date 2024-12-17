<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function index(){
        return view('file.index');
    }
    public function upload(Request $request)
    {
        // return $request->file('img');
        return $request->file('img')->store('images','public');
    }
}
