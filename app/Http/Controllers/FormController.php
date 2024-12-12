<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class FormController extends Controller
{
    //
    public function index(){
        // $students = DB::select('select * from students');
        // $students = DB::table('students')->get();
        $students = Student::get();
        return view('form.index')->with(['students' => $students]);
    }
    public function create(){
        return view('form.create');
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
    public function destroy(Student $student){
        // DB::delete('DELETE FROM students WHERE id = ?',[$id]);
        // DB::table('students')->where('id',$id)->delete();

        // Student::destroy($id);

        $student->delete();
        return redirect()->route('form.index');
    }
    public function edit(Student $student){
        // return $student;
        return view('edit',compact('student'));
    }
}
