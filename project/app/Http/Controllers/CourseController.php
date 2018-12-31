<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseStudent;
use App\Student;
use App\StudentCourse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index_courses(){
        $courses = Course::all();
        return view('courses.courses', compact('courses'));
    }

    public function store(){

      //  dd('here we go');

        request()->validate([
            'name'=>'required',
            'info'=>'required'
        ]);



        Course::create(request(['name','info']));
        return redirect('/courses');
/*        $course = new Course();
        $course->name = \request('name');
        $course->info = \request('info');

        $course->save();




*/
    }

    public function edit(Course $course){
        return view('courses.course_edit',compact('course'));

    }

    public function update(Course $course){
        $course->update(request(['name','info']));
        return redirect('/courses');
    }










    public function destroy($id){


        Course::find($id)->delete();
        return redirect('/courses');
    }








    public function show_students($id){
       /* $student = Course::find($id)->students();
        return view('show_student_course')
            ->with('students',$student);

       */
        $allstudent =  Student::all();
        $course = new Course;
        $courseInfo = $course->find($id);
        $studentsByCourse = $courseInfo->students;

        //dd(Student::find(1));
       // dd($allstudent,$studentsByCourse);
        return view('students.show_student_course')
            ->with('students', $studentsByCourse)
            ->with('course', $courseInfo)
            ->with('allstudents',$allstudent);


    }


    public function delstudentfromcouse(Course $course, Student $student){


        $course->students()->detach($student);

        return back();



    }




    public function addstudent(Request $request,$id){

        $idstudent = $request->input('idstudent');


         $table = new CourseStudent();
         //$table->user_id = 1;
         $table->course_id = $id;
         $table->student_id  = $idstudent;
         $table->save();

         //dd($table);



        return back();

        //dd($idstudent);

    }
}
