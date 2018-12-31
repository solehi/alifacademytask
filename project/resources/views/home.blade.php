@extends('layouts.layout')
@section('title','Главная')
@section('content')
    <div class="container" style="margin-top: 20px">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-4">

                <a href="/students"><img src="{{asset('student_image.png')}}"></a>
                <p style="padding-left: 70px">Студенты - <span class="label label-success">{{$colstudent}}</span></p>
            </div>

            <div class="col-md-4">
                <a href="/courses"><img src="{{asset('course_image.png')}}"></a>
                <p style="padding-left: 80px">Курсы - <span class="label label-success">{{$colcourse}}</span></p>


            </div>
        </div>
    </div>
@endsection