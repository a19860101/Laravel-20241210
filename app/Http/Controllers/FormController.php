<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class FormController extends Controller
{
    //
    public function index(){
        return view('form.index');
    }
    public function store(Request $request){
        // return $request;
        // return "姓名:{$request->name},電話:{$request->phone}";
        // DB::insert('INSERT INTO students(name,phone,email,created_at)VALUES(?,?,?,?)',[
        //     $request->name,
        //     $request->phone,
        //     $request->email,
        //     now()
        // ]);

        // DB::table('students')->insert([
        //     'name' => $request->name,
        //     'phone' => $request->phone,
        //     'email' => $request->email,
        //     'created_at' => now()
        // ]);

        $student = new Student;
        $student->fill($request->all());
        // $student->name = $request->name;
        // $student->phone = $request->phone;
        // $student->email = $request->email;
        $student->save();



        return redirect()->route('form.index');

    }
}
