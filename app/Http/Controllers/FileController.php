<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    public function index(){
        return view('file.index');
    }
    public function upload(){
        return 'upload';
    }
}
