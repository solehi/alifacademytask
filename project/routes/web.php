<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'HomeController@index')->name('index');
Route::get('home', 'HomeController@index')->name('home');

Route::get('/students', 'StudentController@index')->name('students');
Route::post('/students', 'StudentController@store')->name('addStudent');
Route::get('/students/{student}', 'StudentController@destroy')->name('deleteStudents');
Route::get('/students/{student}/delete', 'StudentController@delete')->name('deleteStudent');


Route::get('/students/{student}/edit','StudentController@edit')->name('editStudent');

Route::get('/courses/{course}/edit','CourseController@edit')->name('editCourse');

Route::get('/courses/{course}/{student}/delete', 'CourseController@delstudentfromcouse')->name('deleteStudent');





Route::patch('/students{student}/update','StudentController@update')->name('updateStudent');

Route::patch('/teachers/{user}/update','TeacherController@update')->name('updateTeacher');

Route::patch('/courses/{course}/update','CourseController@update')->name('updateCourse');



Route::get('/teachers/{user}/edit','TeacherController@edit')->name('editTeacher');



//  /students/{{$student}}/show
Route::get('/students/{student}/show', 'StudentController@show')->name('showStudent');

// student edit


Route::get('/teachers', 'TeacherController@index_teacher')->name('teachers');



Route::post('/teachers', 'TeacherController@store')->name('addTeacher');
Route::post('/teachers/{user}', 'TeacherController@destroy')->name('deleteTeacher');

Route::get('/courses', 'CourseController@index_courses')->name('courses');



Route::post('/courses', 'CourseController@store')->name('addCourse');
Route::get('/courses/{course}', 'CourseController@destroy')->name('deleteCourses');


Route::get('/courses/{course}/view', 'CourseController@show_students')->name('show_student');

Route::post('/courses/{course}', 'CourseController@destroy')->name('deleteCourses');
Route::post('/courses/{course}/view/addstudent', 'CourseController@addstudent')->name('addstudent');

Auth::routes();

