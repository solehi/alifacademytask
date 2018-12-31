<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.students', compact('students'));
    }

    public function store(){
        request()->validate([   //валидация
            'name'=>['required','min:3'],
            'date_of_birth'=>'required',
            'address'=>'required',
            'email'=>['required','email'],
            'phone'=>'required',
        ]);

        Student::create(request(['name','date_of_birth','address','email','phone']));

        return redirect('/students');
    }

    public function destroy($id){
        Student::find($id)->delete();
        return redirect('/students');
    }

    public function show($id){
        $student = Student::find($id);

        $courses = $student->courses;
        return view('students.student_show')
            ->with('courses', $courses)
            ->with('student', $student);
    }

     public function delete($id){

        Student::find($id)->delete();
        return redirect('/students');


     }

    public function update(Student $student){
       //dd('here we go');
        $validate =request()->validate([   //валидация
            'name'=>['required','min:3'],
            'date_of_birth'=>'required',
            'address'=>'required',
            'email'=>['required','email'],
            'phone'=>'required',
        ]);
        $student->update($validate);
         return redirect('/students');
    }

     public function edit($id){
        $student = Student::find($id);
        return view('students.student_edit',compact('student'));

     }
}
