<?php

namespace App\Http\Controllers;
use App\Teacher;
use App\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index_teacher(){
        $users = User::all();

        return view('teachers.teachers', compact('users'));
    }

    public function store(){
        request()->validate([
            'name'=>'required',


            'email'=>'required',
            'password'=>'required'
        ]);

        User::create(request(['name','email','password']));
        return redirect('/teachers');
    }

    public function destroy($id){

        User::find($id)->delete();
        return redirect('/teachers');
    }

    public function edit(User $user){
        return view('teachers.teacher_edit',compact('user'));

    }

    public function update(User $user){
        $user->update(request(['name','email','password']));
        return redirect('/teachers');
    }

}
