<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FormController extends Controller
{
    //
    public function index(){
        return view('form.index');
    }
    public function store(Request $request){
        // return $request;
        // return "姓名:{$request->name},電話:{$request->phone}";
        // DB::insert('INSERT INTO students(name,phone,email)VALUES(?,?,?)',[
        //     $request->name,
        //     $request->phone,
        //     $request->email
        // ]);

        DB::table('students')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect()->route('form.index');

    }
}
